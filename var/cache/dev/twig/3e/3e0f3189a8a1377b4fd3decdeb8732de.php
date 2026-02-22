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

/* front/aliment/_delete_form.html.twig */
class __TwigTemplate_4bd6d5436f4b3ce3b75bf39acc61f11c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/aliment/_delete_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/aliment/_delete_form.html.twig"));

        // line 1
        yield "<form method=\"post\"
      action=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_aliment_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["aliment"]) || array_key_exists("aliment", $context) ? $context["aliment"] : (function () { throw new RuntimeError('Variable "aliment" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2)]), "html", null, true);
        yield "\"
      onsubmit=\"return confirm('Delete this food?');\"
      style=\"display:inline-block;\">

  <input type=\"hidden\" name=\"_token\" value=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["aliment"]) || array_key_exists("aliment", $context) ? $context["aliment"] : (function () { throw new RuntimeError('Variable "aliment" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6))), "html", null, true);
        yield "\">

  <button class=\"btn btn-danger-modern\" type=\"submit\">
      <i class=\"fa-solid fa-trash\"></i>
      Delete
  </button>

</form>

<style>
.btn-danger-modern {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 18px;
    border-radius: 12px;
    border: 1px solid rgba(239, 68, 68, 0.35);
    background: linear-gradient(135deg, rgba(239, 68, 68, 0.2), rgba(255, 0, 0, 0.15));
    color: #ff4d4d;
    font-weight: 500;
    font-family: 'Outfit', sans-serif;
    cursor: pointer;
    transition: all 0.25s ease;
}

.btn-danger-modern:hover {
    background: linear-gradient(135deg, rgba(239, 68, 68, 0.35), rgba(255, 0, 0, 0.25));
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(239, 68, 68, 0.3);
}

.btn-danger-modern i {
    font-size: 14px;
}
</style>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/aliment/_delete_form.html.twig";
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
        return array (  58 => 6,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form method=\"post\"
      action=\"{{ path('front_aliment_delete', {'id': aliment.id}) }}\"
      onsubmit=\"return confirm('Delete this food?');\"
      style=\"display:inline-block;\">

  <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ aliment.id) }}\">

  <button class=\"btn btn-danger-modern\" type=\"submit\">
      <i class=\"fa-solid fa-trash\"></i>
      Delete
  </button>

</form>

<style>
.btn-danger-modern {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 18px;
    border-radius: 12px;
    border: 1px solid rgba(239, 68, 68, 0.35);
    background: linear-gradient(135deg, rgba(239, 68, 68, 0.2), rgba(255, 0, 0, 0.15));
    color: #ff4d4d;
    font-weight: 500;
    font-family: 'Outfit', sans-serif;
    cursor: pointer;
    transition: all 0.25s ease;
}

.btn-danger-modern:hover {
    background: linear-gradient(135deg, rgba(239, 68, 68, 0.35), rgba(255, 0, 0, 0.25));
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(239, 68, 68, 0.3);
}

.btn-danger-modern i {
    font-size: 14px;
}
</style>", "front/aliment/_delete_form.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\front\\aliment\\_delete_form.html.twig");
    }
}
