<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;



#[Route('/user')]
final class UserController extends AbstractController
{
   #[Route(name: 'app_user_index', methods: ['GET'])]
public function index(Request $request, UserRepository $userRepository): Response
{
    // Get search query
    $search = $request->query->get('search', '');
    
    // Get sort parameters - DEFAULT TO NAME
    $sortBy = $request->query->get('sort', 'name');
    $order = $request->query->get('order', 'ASC');
    
    // Validate sort field
    $allowedSorts = ['id', 'name', 'email'];
    if (!in_array($sortBy, $allowedSorts)) {
        $sortBy = 'name';
    }
    
    // Validate order
    $order = strtoupper($order) === 'DESC' ? 'DESC' : 'ASC';
    
    // Get users with search and sort
    if ($search) {
        $users = $userRepository->createQueryBuilder('u')
            ->where('u.name LIKE :search OR u.email LIKE :search')
            ->setParameter('search', '%' . $search . '%')
            ->orderBy('u.' . $sortBy, $order)
            ->getQuery()
            ->getResult();
    } else {
        $users = $userRepository->findBy([], [$sortBy => $order]);
    }
    
    return $this->render('user/index.html.twig', [
        'users' => $users,
        'search' => $search,
        'currentSort' => $sortBy,
        'currentOrder' => $order,
    ]);
}
  #[Route('/new', name: 'app_user_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher): Response
{
    $user = new User();
    $form = $this->createForm(UserType::class, $user, ['is_edit' => false]);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Hash the password
        $plainPassword = $form->get('password')->getData();
        if ($plainPassword) {
            $hashedPassword = $passwordHasher->hashPassword($user, $plainPassword);
            $user->setPassword($hashedPassword);
        }

        $entityManager->persist($user);
        $entityManager->flush();

        $this->addFlash('success', 'User created successfully!');
        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->render('user/new.html.twig', [
        'user' => $user,
        'form' => $form,
    ]);
}

    #[Route('/{id}', name: 'app_user_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

   #[Route('/{id}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]
public function edit(Request $request, User $user, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher): Response
{
    $form = $this->createForm(UserType::class, $user, ['is_edit' => true]);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Handle password update if provided
        $plainPassword = $form->get('password')->getData();
        if ($plainPassword) {
            $hashedPassword = $passwordHasher->hashPassword($user, $plainPassword);
            $user->setPassword($hashedPassword);
        }

        $entityManager->flush();

        $this->addFlash('success', 'User updated successfully!');
        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->render('user/edit.html.twig', [
        'user' => $user,
        'form' => $form,
    ]);
}

    #[Route('/{id}/block', name: 'app_user_block', methods: ['POST'])]
    public function block(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('block'.$user->getId(), $request->request->get('_token'))) {
            $user->setIsBlocked(!$user->isBlocked());
            $entityManager->flush();
            
            $status = $user->isBlocked() ? 'blocked' : 'unblocked';
            $this->addFlash('success', "User has been {$status}!");
        }

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }

  #[Route('/{id}', name: 'app_user_delete', methods: ['POST'])]
public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
{
    if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->getPayload()->getString('_token'))) {
        // Delete any password reset requests for this user first
        $connection = $entityManager->getConnection();
        $connection->executeStatement('DELETE FROM reset_password_request WHERE user_id = ?', [$user->getId()]);
        
        // Now delete the user
        $entityManager->remove($user);
        $entityManager->flush();
        
        $this->addFlash('success', 'User deleted successfully!');
    }

    return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
}


}