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

/* front/categorie/show.html.twig */
class __TwigTemplate_4c0b4bb6bcdad46a4255dd5c13c32dbb extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "front/base_finance.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/categorie/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/categorie/show.html.twig"));

        $this->parent = $this->load("front/base_finance.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Détail catégorie - AIVA";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        yield "
<style>
    .btn-secondary {
        display: inline-block;
        padding: 10px 18px;
        border-radius: 10px;
        background: transparent;
        border: 1px solid #38bdf8;
        color: #38bdf8;
        font-weight: 600;
        text-decoration: none;
        transition: 0.3s;
        margin-left: 10px;
    }

    .btn-secondary:hover {
        background: #38bdf8;
        color: #0f172a;
    }
</style>

<div class=\"form-card\">
    <h1>Détail de la catégorie</h1>

    <ul style=\"list-style:none; padding:0; color:#e2e8f0;\">
        <li style=\"margin-bottom:8px;\">
            <strong>Nom :</strong> ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 32, $this->source); })()), "nomCategorie", [], "any", false, false, false, 32), "html", null, true);
        yield "
        </li>
        <li style=\"margin-bottom:8px;\">
            <strong>Description :</strong> ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 35, $this->source); })()), "description", [], "any", false, false, false, 35), "html", null, true);
        yield "
        </li>
    </ul>

    <div class=\"form-actions\">

        <!-- Bouton Modifier -->
        <a href=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_categorie_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 42, $this->source); })()), "idCategorie", [], "any", false, false, false, 42)]), "html", null, true);
        yield "\"
           class=\"hero-button\"
           style=\"text-decoration:none;\">
            Modifier
        </a>

        <!-- Bouton Retour -->
        <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_categorie_index");
        yield "\"
           class=\"btn-secondary\">
            ← Retour
        </a>

    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/categorie/show.html.twig";
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
        return array (  154 => 49,  144 => 42,  134 => 35,  128 => 32,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base_finance.html.twig' %}

{% block title %}Détail catégorie - AIVA{% endblock %}

{% block content %}

<style>
    .btn-secondary {
        display: inline-block;
        padding: 10px 18px;
        border-radius: 10px;
        background: transparent;
        border: 1px solid #38bdf8;
        color: #38bdf8;
        font-weight: 600;
        text-decoration: none;
        transition: 0.3s;
        margin-left: 10px;
    }

    .btn-secondary:hover {
        background: #38bdf8;
        color: #0f172a;
    }
</style>

<div class=\"form-card\">
    <h1>Détail de la catégorie</h1>

    <ul style=\"list-style:none; padding:0; color:#e2e8f0;\">
        <li style=\"margin-bottom:8px;\">
            <strong>Nom :</strong> {{ categorie.nomCategorie }}
        </li>
        <li style=\"margin-bottom:8px;\">
            <strong>Description :</strong> {{ categorie.description }}
        </li>
    </ul>

    <div class=\"form-actions\">

        <!-- Bouton Modifier -->
        <a href=\"{{ path('front_categorie_edit', {id: categorie.idCategorie}) }}\"
           class=\"hero-button\"
           style=\"text-decoration:none;\">
            Modifier
        </a>

        <!-- Bouton Retour -->
        <a href=\"{{ path('front_categorie_index') }}\"
           class=\"btn-secondary\">
            ← Retour
        </a>

    </div>
</div>

{% endblock %}
", "front/categorie/show.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\front\\categorie\\show.html.twig");
    }
}
