<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* coursFRONT/delete.html.twig */
class __TwigTemplate_b19cec15d54df211154fa2de116c4ebf extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coursFRONT/delete.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coursFRONT/delete.html.twig"));

        // line 1
        yield "#[Route('/{id}', name: 'cours_front_delete', methods: ['POST'])]
public function delete(Request \$request, Cours \$cours, EntityManagerInterface \$entityManager): Response
{
    if (\$this->isCsrfTokenValid('delete'.\$cours->getId(), \$request->request->get('_token'))) {
        \$entityManager->remove(\$cours);
        \$entityManager->flush();

        \$this->addFlash('success', 'Course deleted successfully!');
    }

    return \$this->redirectToRoute('cours_front_index', [], Response::HTTP_SEE_OTHER);
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "coursFRONT/delete.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("#[Route('/{id}', name: 'cours_front_delete', methods: ['POST'])]
public function delete(Request \$request, Cours \$cours, EntityManagerInterface \$entityManager): Response
{
    if (\$this->isCsrfTokenValid('delete'.\$cours->getId(), \$request->request->get('_token'))) {
        \$entityManager->remove(\$cours);
        \$entityManager->flush();

        \$this->addFlash('success', 'Course deleted successfully!');
    }

    return \$this->redirectToRoute('cours_front_index', [], Response::HTTP_SEE_OTHER);
}
", "coursFRONT/delete.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\coursFRONT\\delete.html.twig");
    }
}
