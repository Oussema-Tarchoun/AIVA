<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[IsGranted('ROLE_ADMIN')]
class ImportController extends AbstractController
{
    #[Route('/admin/import', name: 'app_admin_import')]
    public function import(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher, ValidatorInterface $validator): Response
    {
        if ($request->isMethod('POST')) {
            /** @var UploadedFile $file */
            $file = $request->files->get('import_file');

            if (!$file) {
                $this->addFlash('error', 'Please upload a CSV file.');
                return $this->redirectToRoute('app_admin_import');
            }

            $handle = fopen($file->getRealPath(), 'r');
            $header = fgetcsv($handle); // Skip header

            $count = 0;
            $errors = [];
            $rowNum = 1;

            while (($data = fgetcsv($handle)) !== false) {
                $rowNum++;
                // Expecting: name, email, password
                if (count($data) < 3) {
                    $errors[] = "Row $rowNum: Invalid data format.";
                    continue;
                }

                $name = $data[0];
                $email = $data[1];
                $plainPassword = $data[2];

                // Validation
                $existingUser = $entityManager->getRepository(User::class)->findOneBy(['email' => $email]);
                if ($existingUser) {
                    $errors[] = "Row $rowNum: User with email $email already exists.";
                    continue;
                }

                $user = new User();
                $user->setName($name);
                $user->setEmail($email);
                $user->setPassword($passwordHasher->hashPassword($user, $plainPassword));
                $user->setRoles(['ROLE_USER']);

                $violations = $validator->validate($user);
                if (count($violations) > 0) {
                    $errors[] = "Row $rowNum: " . (string) $violations;
                    continue;
                }

                $entityManager->persist($user);
                $count++;

                if (($count % 20) === 0) {
                    $entityManager->flush();
                }
            }

            $entityManager->flush();
            fclose($handle);

            if ($count > 0) {
                $this->addFlash('success', "$count users imported successfully.");
            }
            if (!empty($errors)) {
                foreach (array_slice($errors, 0, 10) as $error) {
                    $this->addFlash('warning', $error);
                }
                if (count($errors) > 10) {
                    $this->addFlash('warning', "...and " . (count($errors) - 10) . " more errors.");
                }
            }

            return $this->redirectToRoute('app_admin_import');
        }

        return $this->render('admin/import.html.twig');
    }
}
