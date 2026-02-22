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

/* chapitre/_form.html.twig */
class __TwigTemplate_6f8e105409d88d5a9bbcaf31decb1207 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chapitre/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chapitre/_form.html.twig"));

        // line 2
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

<style>
    .form-grid-row {
        display: grid;
        grid-template-columns: 1.1fr 1fr;
        gap: 18px;
        align-items: flex-start;
        margin-bottom: 14px;
    }
    .form-field-block label {
        font-size: 13px;
        color: #e5e7eb;
        display: block;
        margin-bottom: 4px;
    }
    .form-errors {
        font-size: 11px;
        color: #fecaca;
        margin-top: 4px;
    }
</style>

<div class=\"form-grid-row\">
    <div class=\"form-field-block\">
        ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "titre", [], "any", false, false, false, 27), 'label', ["label" => "Titre"]);
        yield "
        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "titre", [], "any", false, false, false, 28), 'widget');
        yield "
        <div class=\"form-errors\">";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "titre", [], "any", false, false, false, 29), 'errors');
        yield "</div>
    </div>
</div>

<div class=\"form-grid-row\">
    <div class=\"form-field-block\">
        ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "contenu", [], "any", false, false, false, 35), 'label', ["label" => "Contenu"]);
        yield "
        ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "contenu", [], "any", false, false, false, 36), 'widget');
        yield "
        <div class=\"form-errors\">";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "contenu", [], "any", false, false, false, 37), 'errors');
        yield "</div>
    </div>
</div>

<div class=\"form-grid-row\">
    <div class=\"form-field-block\">
        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "ordre", [], "any", false, false, false, 43), 'label', ["label" => "Ordre"]);
        yield "
        ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "ordre", [], "any", false, false, false, 44), 'widget');
        yield "
        <div class=\"form-errors\">";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "ordre", [], "any", false, false, false, 45), 'errors');
        yield "</div>
    </div>
</div>

<div class=\"form-grid-row\">
    <div class=\"form-field-block\">
        ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "exercise", [], "any", false, false, false, 51), 'label', ["label" => "Exercice"]);
        yield "
        ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "exercise", [], "any", false, false, false, 52), 'widget');
        yield "
        <div class=\"form-errors\">";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "exercise", [], "any", false, false, false, 53), 'errors');
        yield "</div>
    </div>
</div>

<div class=\"form-grid-row\">
    <div class=\"form-field-block\">
        ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "cours", [], "any", false, false, false, 59), 'label', ["label" => "Cours"]);
        yield "
        ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "cours", [], "any", false, false, false, 60), 'widget');
        yield "
        <div class=\"form-errors\">";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "cours", [], "any", false, false, false, 61), 'errors');
        yield "</div>
    </div>
</div>

<button class=\"card-btn\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 65, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "</button>

";
        // line 67
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), 'form_end');
        yield "
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
        return "chapitre/_form.html.twig";
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
        return array (  164 => 67,  159 => 65,  152 => 61,  148 => 60,  144 => 59,  135 => 53,  131 => 52,  127 => 51,  118 => 45,  114 => 44,  110 => 43,  101 => 37,  97 => 36,  93 => 35,  84 => 29,  80 => 28,  76 => 27,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/chapitre/_form.html.twig #}
{{ form_start(form, { attr: { novalidate: 'novalidate' } }) }}

<style>
    .form-grid-row {
        display: grid;
        grid-template-columns: 1.1fr 1fr;
        gap: 18px;
        align-items: flex-start;
        margin-bottom: 14px;
    }
    .form-field-block label {
        font-size: 13px;
        color: #e5e7eb;
        display: block;
        margin-bottom: 4px;
    }
    .form-errors {
        font-size: 11px;
        color: #fecaca;
        margin-top: 4px;
    }
</style>

<div class=\"form-grid-row\">
    <div class=\"form-field-block\">
        {{ form_label(form.titre, 'Titre') }}
        {{ form_widget(form.titre) }}
        <div class=\"form-errors\">{{ form_errors(form.titre) }}</div>
    </div>
</div>

<div class=\"form-grid-row\">
    <div class=\"form-field-block\">
        {{ form_label(form.contenu, 'Contenu') }}
        {{ form_widget(form.contenu) }}
        <div class=\"form-errors\">{{ form_errors(form.contenu) }}</div>
    </div>
</div>

<div class=\"form-grid-row\">
    <div class=\"form-field-block\">
        {{ form_label(form.ordre, 'Ordre') }}
        {{ form_widget(form.ordre) }}
        <div class=\"form-errors\">{{ form_errors(form.ordre) }}</div>
    </div>
</div>

<div class=\"form-grid-row\">
    <div class=\"form-field-block\">
        {{ form_label(form.exercise, 'Exercice') }}
        {{ form_widget(form.exercise) }}
        <div class=\"form-errors\">{{ form_errors(form.exercise) }}</div>
    </div>
</div>

<div class=\"form-grid-row\">
    <div class=\"form-field-block\">
        {{ form_label(form.cours, 'Cours') }}
        {{ form_widget(form.cours) }}
        <div class=\"form-errors\">{{ form_errors(form.cours) }}</div>
    </div>
</div>

<button class=\"card-btn\">{{ button_label|default('Save') }}</button>

{{ form_end(form) }}
", "chapitre/_form.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\chapitre\\_form.html.twig");
    }
}
