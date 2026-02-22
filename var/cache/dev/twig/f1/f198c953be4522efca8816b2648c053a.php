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

/* front/aliment/_form.html.twig */
class __TwigTemplate_d5a27717beeae03e9b9ae66e17ff2cb2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/aliment/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/aliment/_form.html.twig"));

        // line 1
        yield "<div class=\"form-grid\">
    <div class=\"form-group-settings full-width\">
        ";
        // line 3
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), 'label');
        yield "
        ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "nom", [], "any", false, false, false, 4), 'widget');
        yield "
        ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "nom", [], "any", false, false, false, 5), 'errors');
        yield "
    </div>
    
    <div class=\"form-group-settings\">
        ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "quantite", [], "any", false, false, false, 9), 'label');
        yield "
        ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "quantite", [], "any", false, false, false, 10), 'widget');
        yield "
        ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "quantite", [], "any", false, false, false, 11), 'errors');
        yield "
    </div>
</div>

<div class=\"settings-section\" style=\"margin-top: 24px;\">
    <h3 class=\"settings-section-title\">Macronutriments</h3>
    <p style=\"color: var(--text-muted); font-size: 14px; margin-bottom: 20px;\">
        Entrez les valeurs nutritionnelles (en grammes)
    </p>
    
    ";
        // line 21
        $context["currentMacro"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "vars", [], "any", false, false, false, 21), "data", [], "any", false, false, false, 21), "macro", [], "any", false, false, false, 21);
        // line 22
        yield "    
    <div class=\"form-grid\">
        <div class=\"form-group-settings\">
            <label for=\"macro_proteine\">
                <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"rgba(5, 150, 105, 0.9)\" stroke-width=\"2\" style=\"vertical-align: middle; margin-right: 4px;\">
                    <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                </svg>
                Protéines (g)
            </label>
            <input type=\"number\" step=\"0.1\" id=\"macro_proteine\" name=\"macro_proteine\" placeholder=\"Ex: 3.5\" value=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["currentMacro"] ?? null), "proteine", [], "any", true, true, false, 31)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentMacro"]) || array_key_exists("currentMacro", $context) ? $context["currentMacro"] : (function () { throw new RuntimeError('Variable "currentMacro" does not exist.', 31, $this->source); })()), "proteine", [], "any", false, false, false, 31), "")) : ("")), "html", null, true);
        yield "\" />
        </div>
        
        <div class=\"form-group-settings\">
            <label for=\"macro_glucide\">
                <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"rgba(212, 165, 116, 0.9)\" stroke-width=\"2\" style=\"vertical-align: middle; margin-right: 4px;\">
                    <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                </svg>
                Glucides (g)
            </label>
            <input type=\"number\" step=\"0.1\" id=\"macro_glucide\" name=\"macro_glucide\" placeholder=\"Ex: 23.0\" value=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["currentMacro"] ?? null), "glucide", [], "any", true, true, false, 41)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentMacro"]) || array_key_exists("currentMacro", $context) ? $context["currentMacro"] : (function () { throw new RuntimeError('Variable "currentMacro" does not exist.', 41, $this->source); })()), "glucide", [], "any", false, false, false, 41), "")) : ("")), "html", null, true);
        yield "\" />
        </div>
        
        <div class=\"form-group-settings\">
            <label for=\"macro_lipide\">
                <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"rgba(147, 51, 234, 0.9)\" stroke-width=\"2\" style=\"vertical-align: middle; margin-right: 4px;\">
                    <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                </svg>
                Lipides (g)
            </label>
            <input type=\"number\" step=\"0.1\" id=\"macro_lipide\" name=\"macro_lipide\" placeholder=\"Ex: 10.0\" value=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["currentMacro"] ?? null), "lipide", [], "any", true, true, false, 51)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentMacro"]) || array_key_exists("currentMacro", $context) ? $context["currentMacro"] : (function () { throw new RuntimeError('Variable "currentMacro" does not exist.', 51, $this->source); })()), "lipide", [], "any", false, false, false, 51), "")) : ("")), "html", null, true);
        yield "\" />
        </div>
    </div>
</div>

<style>
.form-group-settings {
    margin-bottom: 20px;
}

.form-group-settings label {
    display: block;
    font-size: 14px;
    font-weight: 500;
    margin-bottom: 8px;
    color: var(--text-primary);
}

.form-group-settings input,
.form-group-settings textarea,
.form-group-settings select {
    width: 100%;
    padding: 12px 16px;
    background: var(--glass-bg);
    border: 1px solid var(--glass-border);
    border-radius: 12px;
    color: var(--text-primary);
    font-size: 14px;
    font-family: 'Outfit', sans-serif;
    transition: all 0.3s ease;
}

.form-group-settings input:focus,
.form-group-settings textarea:focus,
.form-group-settings select:focus {
    outline: none;
    border-color: var(--emerald);
    box-shadow: 0 0 0 3px rgba(5, 150, 105, 0.1);
}

.form-group-settings.full-width {
    grid-column: 1 / -1;
}

.form-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
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
        return "front/aliment/_form.html.twig";
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
        return array (  127 => 51,  114 => 41,  101 => 31,  90 => 22,  88 => 21,  75 => 11,  71 => 10,  67 => 9,  60 => 5,  56 => 4,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"form-grid\">
    <div class=\"form-group-settings full-width\">
        {{ form_label(form.nom) }}
        {{ form_widget(form.nom) }}
        {{ form_errors(form.nom) }}
    </div>
    
    <div class=\"form-group-settings\">
        {{ form_label(form.quantite) }}
        {{ form_widget(form.quantite) }}
        {{ form_errors(form.quantite) }}
    </div>
</div>

<div class=\"settings-section\" style=\"margin-top: 24px;\">
    <h3 class=\"settings-section-title\">Macronutriments</h3>
    <p style=\"color: var(--text-muted); font-size: 14px; margin-bottom: 20px;\">
        Entrez les valeurs nutritionnelles (en grammes)
    </p>
    
    {% set currentMacro = form.vars.data.macro %}
    
    <div class=\"form-grid\">
        <div class=\"form-group-settings\">
            <label for=\"macro_proteine\">
                <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"rgba(5, 150, 105, 0.9)\" stroke-width=\"2\" style=\"vertical-align: middle; margin-right: 4px;\">
                    <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                </svg>
                Protéines (g)
            </label>
            <input type=\"number\" step=\"0.1\" id=\"macro_proteine\" name=\"macro_proteine\" placeholder=\"Ex: 3.5\" value=\"{{ currentMacro.proteine|default('') }}\" />
        </div>
        
        <div class=\"form-group-settings\">
            <label for=\"macro_glucide\">
                <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"rgba(212, 165, 116, 0.9)\" stroke-width=\"2\" style=\"vertical-align: middle; margin-right: 4px;\">
                    <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                </svg>
                Glucides (g)
            </label>
            <input type=\"number\" step=\"0.1\" id=\"macro_glucide\" name=\"macro_glucide\" placeholder=\"Ex: 23.0\" value=\"{{ currentMacro.glucide|default('') }}\" />
        </div>
        
        <div class=\"form-group-settings\">
            <label for=\"macro_lipide\">
                <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"rgba(147, 51, 234, 0.9)\" stroke-width=\"2\" style=\"vertical-align: middle; margin-right: 4px;\">
                    <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                </svg>
                Lipides (g)
            </label>
            <input type=\"number\" step=\"0.1\" id=\"macro_lipide\" name=\"macro_lipide\" placeholder=\"Ex: 10.0\" value=\"{{ currentMacro.lipide|default('') }}\" />
        </div>
    </div>
</div>

<style>
.form-group-settings {
    margin-bottom: 20px;
}

.form-group-settings label {
    display: block;
    font-size: 14px;
    font-weight: 500;
    margin-bottom: 8px;
    color: var(--text-primary);
}

.form-group-settings input,
.form-group-settings textarea,
.form-group-settings select {
    width: 100%;
    padding: 12px 16px;
    background: var(--glass-bg);
    border: 1px solid var(--glass-border);
    border-radius: 12px;
    color: var(--text-primary);
    font-size: 14px;
    font-family: 'Outfit', sans-serif;
    transition: all 0.3s ease;
}

.form-group-settings input:focus,
.form-group-settings textarea:focus,
.form-group-settings select:focus {
    outline: none;
    border-color: var(--emerald);
    box-shadow: 0 0 0 3px rgba(5, 150, 105, 0.1);
}

.form-group-settings.full-width {
    grid-column: 1 / -1;
}

.form-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}
</style>", "front/aliment/_form.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\front\\aliment\\_form.html.twig");
    }
}
