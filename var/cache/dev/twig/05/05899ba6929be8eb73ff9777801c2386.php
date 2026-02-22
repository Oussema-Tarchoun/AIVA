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

/* cours/_form.html.twig */
class __TwigTemplate_208d55edb136bbda3a6b3b7afdf187fd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/_form.html.twig"));

        // line 2
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

";
        // line 7
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
    .form-comment {
        font-size: 12px;
        color: #9ca3af;
        margin-top: 6px;
    }
    .form-errors {
        font-size: 11px;
        color: #fecaca;
        margin-top: 4px;
    }
</style>

";
        // line 35
        yield "
<div class=\"form-grid-row\">
    <div class=\"form-field-block\">
        ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "tittre", [], "any", false, false, false, 38), 'label', ["label" => "Titre"]);
        yield "
        ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "tittre", [], "any", false, false, false, 39), 'widget');
        yield "
        <div class=\"form-errors\">";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "tittre", [], "any", false, false, false, 40), 'errors');
        yield "</div>
    </div>
    <div class=\"form-comment\">
        Le titre est obligatoire.
    </div>
</div>

<div class=\"form-grid-row\">
    <div class=\"form-field-block\">
        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "description", [], "any", false, false, false, 49), 'label', ["label" => "Description"]);
        yield "
        ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "description", [], "any", false, false, false, 50), 'widget');
        yield "
        <div class=\"form-errors\">";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "description", [], "any", false, false, false, 51), 'errors');
        yield "</div>
    </div>
    <div class=\"form-comment\">
        La description est obligatoire.
    </div>
</div>

<div class=\"form-grid-row\">
    <div class=\"form-field-block\">
        ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "niveau", [], "any", false, false, false, 60), 'label', ["label" => "Niveau"]);
        yield "
        ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "niveau", [], "any", false, false, false, 61), 'widget');
        yield "
        <div class=\"form-errors\">";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "niveau", [], "any", false, false, false, 62), 'errors');
        yield "</div>
    </div>
    <div class=\"form-comment\">
        Le niveau est obligatoire.
    </div>
</div>

<div class=\"form-grid-row\">
    <div class=\"form-field-block\">
        ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "dureeEstimee", [], "any", false, false, false, 71), 'label', ["label" => "Durée estimée"]);
        yield "
        ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "dureeEstimee", [], "any", false, false, false, 72), 'widget');
        yield "
        <div class=\"form-errors\">";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "dureeEstimee", [], "any", false, false, false, 73), 'errors');
        yield "</div>
    </div>
    <div class=\"form-comment\">
        La durée est obligatoire.
    </div>
</div>

<div class=\"form-grid-row\">
    <div class=\"form-field-block\">
        ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "categorie", [], "any", false, false, false, 82), 'label', ["label" => "Catégorie"]);
        yield "
        ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "categorie", [], "any", false, false, false, 83), 'widget');
        yield "
        <div class=\"form-errors\">";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "categorie", [], "any", false, false, false, 84), 'errors');
        yield "</div>
    </div>
    <div class=\"form-comment\">
        La catégorie est obligatoire.
    </div>
</div>

<div class=\"form-grid-row\">
    <div class=\"form-field-block\">
        ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "dateCreation", [], "any", false, false, false, 93), 'label', ["label" => "Date de création"]);
        yield "
        ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "dateCreation", [], "any", false, false, false, 94), 'widget');
        yield "
        <div class=\"form-errors\">";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "dateCreation", [], "any", false, false, false, 95), 'errors');
        yield "</div>
    </div>
    <div class=\"form-comment\">
        La date de création est obligatoire.
    </div>
</div>

<div class=\"form-grid-row\">
    <div class=\"form-field-block\">
        ";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "status", [], "any", false, false, false, 104), 'label', ["label" => "Statut"]);
        yield "
        ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "status", [], "any", false, false, false, 105), 'widget');
        yield "
        <div class=\"form-errors\">";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "status", [], "any", false, false, false, 106), 'errors');
        yield "</div>
    </div>
    <div class=\"form-comment\">
        Le statut est obligatoire.
    </div>
</div>

<button class=\"card-btn\">";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 113, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "</button>

";
        // line 115
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), 'form_end');
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
        return "cours/_form.html.twig";
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
        return array (  230 => 115,  225 => 113,  215 => 106,  211 => 105,  207 => 104,  195 => 95,  191 => 94,  187 => 93,  175 => 84,  171 => 83,  167 => 82,  155 => 73,  151 => 72,  147 => 71,  135 => 62,  131 => 61,  127 => 60,  115 => 51,  111 => 50,  107 => 49,  95 => 40,  91 => 39,  87 => 38,  82 => 35,  53 => 7,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/cours/_form.html.twig #}
{{ form_start(form, { attr: { novalidate: 'novalidate' } }) }}

{# on enlève ceci pour ne pas afficher les erreurs globales avant les champs :
{{ form_errors(form) }}
#}

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
    .form-comment {
        font-size: 12px;
        color: #9ca3af;
        margin-top: 6px;
    }
    .form-errors {
        font-size: 11px;
        color: #fecaca;
        margin-top: 4px;
    }
</style>

{# ✅ ID supprimé: on ne met pas idCours dans le form car il n'existe pas (et l'id est souvent auto-généré) #}

<div class=\"form-grid-row\">
    <div class=\"form-field-block\">
        {{ form_label(form.tittre, 'Titre') }}
        {{ form_widget(form.tittre) }}
        <div class=\"form-errors\">{{ form_errors(form.tittre) }}</div>
    </div>
    <div class=\"form-comment\">
        Le titre est obligatoire.
    </div>
</div>

<div class=\"form-grid-row\">
    <div class=\"form-field-block\">
        {{ form_label(form.description, 'Description') }}
        {{ form_widget(form.description) }}
        <div class=\"form-errors\">{{ form_errors(form.description) }}</div>
    </div>
    <div class=\"form-comment\">
        La description est obligatoire.
    </div>
</div>

<div class=\"form-grid-row\">
    <div class=\"form-field-block\">
        {{ form_label(form.niveau, 'Niveau') }}
        {{ form_widget(form.niveau) }}
        <div class=\"form-errors\">{{ form_errors(form.niveau) }}</div>
    </div>
    <div class=\"form-comment\">
        Le niveau est obligatoire.
    </div>
</div>

<div class=\"form-grid-row\">
    <div class=\"form-field-block\">
        {{ form_label(form.dureeEstimee, 'Durée estimée') }}
        {{ form_widget(form.dureeEstimee) }}
        <div class=\"form-errors\">{{ form_errors(form.dureeEstimee) }}</div>
    </div>
    <div class=\"form-comment\">
        La durée est obligatoire.
    </div>
</div>

<div class=\"form-grid-row\">
    <div class=\"form-field-block\">
        {{ form_label(form.categorie, 'Catégorie') }}
        {{ form_widget(form.categorie) }}
        <div class=\"form-errors\">{{ form_errors(form.categorie) }}</div>
    </div>
    <div class=\"form-comment\">
        La catégorie est obligatoire.
    </div>
</div>

<div class=\"form-grid-row\">
    <div class=\"form-field-block\">
        {{ form_label(form.dateCreation, 'Date de création') }}
        {{ form_widget(form.dateCreation) }}
        <div class=\"form-errors\">{{ form_errors(form.dateCreation) }}</div>
    </div>
    <div class=\"form-comment\">
        La date de création est obligatoire.
    </div>
</div>

<div class=\"form-grid-row\">
    <div class=\"form-field-block\">
        {{ form_label(form.status, 'Statut') }}
        {{ form_widget(form.status) }}
        <div class=\"form-errors\">{{ form_errors(form.status) }}</div>
    </div>
    <div class=\"form-comment\">
        Le statut est obligatoire.
    </div>
</div>

<button class=\"card-btn\">{{ button_label|default('Save') }}</button>

{{ form_end(form) }}
", "cours/_form.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\cours\\_form.html.twig");
    }
}
