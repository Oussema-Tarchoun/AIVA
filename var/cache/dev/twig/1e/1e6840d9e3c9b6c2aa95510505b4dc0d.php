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

/* back/aliment/_delete_form.html.twig */
class __TwigTemplate_c7e331cd723349c259cea32dced785ac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/aliment/_delete_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/aliment/_delete_form.html.twig"));

        // line 7
        yield "<form id=\"delete-form\"
      method=\"post\"
      action=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_aliment_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["aliment"]) || array_key_exists("aliment", $context) ? $context["aliment"] : (function () { throw new RuntimeError('Variable "aliment" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)]), "html", null, true);
        yield "\"
      onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet aliment ?');\">

    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["aliment"]) || array_key_exists("aliment", $context) ? $context["aliment"] : (function () { throw new RuntimeError('Variable "aliment" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13))), "html", null, true);
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
        return "back/aliment/_delete_form.html.twig";
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
        return array (  59 => 13,  52 => 9,  48 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
  templates/back/aliment/_delete_form.html.twig
  ✅ method=\"post\" + _method=DELETE  (Symfony http_method_override)
  ✅ _token CSRF correct
  ✅ id=\"delete-form\" pour le bouton onclick dans edit.html.twig
#}
<form id=\"delete-form\"
      method=\"post\"
      action=\"{{ path('app_aliment_delete', {'id': aliment.id}) }}\"
      onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet aliment ?');\">

    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ aliment.id) }}\">
</form>
", "back/aliment/_delete_form.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\back\\aliment\\_delete_form.html.twig");
    }
}
