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

/* back/repas/_delete_form.html.twig */
class __TwigTemplate_78c53d9ea4c800a975079ddd077dcefd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/repas/_delete_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/repas/_delete_form.html.twig"));

        // line 9
        yield "<form id=\"delete-form\"
      method=\"post\"
      action=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_repas_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["repa"]) || array_key_exists("repa", $context) ? $context["repa"] : (function () { throw new RuntimeError('Variable "repa" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)]), "html", null, true);
        yield "\"
      onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce repas ?');\">

    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["repa"]) || array_key_exists("repa", $context) ? $context["repa"] : (function () { throw new RuntimeError('Variable "repa" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15))), "html", null, true);
        yield "\">
</form>
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
        return "back/repas/_delete_form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  59 => 15,  52 => 11,  48 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
  templates/back/repas/_delete_form.html.twig
  ─────────────────────────────────────────────
  ✅ method=\"post\"  (les navigateurs ne supportent pas DELETE nativement)
  ✅ _method=DELETE  (Symfony intercepte et simule la méthode DELETE)
  ✅ _token CSRF     (doit correspondre à 'delete' ~ repas.id dans le controller)
  ✅ id=\"delete-form\" (le bouton Supprimer dans edit.html.twig cible cet ID)
#}
<form id=\"delete-form\"
      method=\"post\"
      action=\"{{ path('app_repas_delete', {'id': repa.id}) }}\"
      onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce repas ?');\">

    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ repa.id) }}\">
</form>
", "back/repas/_delete_form.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\back\\repas\\_delete_form.html.twig");
    }
}
