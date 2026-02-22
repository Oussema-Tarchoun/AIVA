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

/* front/depense/show.html.twig */
class __TwigTemplate_923c1aed780e64a0d29e62ea5dd67179 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/depense/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/depense/show.html.twig"));

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

        yield "Détail dépense - AIVA";
        
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
  /* ✅ Same glass card theme */
  .form-card{
    max-width: 720px;
    margin: 30px auto 60px;
    padding: 24px;
    border-radius: 18px;
    background: linear-gradient(135deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
    border: 1px solid rgba(255,255,255,.12);
    backdrop-filter: blur(10px);
  }

  .form-card h1{
    margin: 0 0 18px;
    font-size: 28px;
    font-weight: 800;
    letter-spacing: -0.02em;
  }

  /* details list */
  .detail-list{
    list-style:none;
    padding:0;
    margin:0;
    color: rgba(226,232,240,.95);
  }

  .detail-list li{
    margin-bottom: 12px;
    padding: 10px 12px;
    border-radius: 14px;
    background: rgba(255,255,255,.05);
    border: 1px solid rgba(255,255,255,.10);
    display:flex;
    justify-content:space-between;
    gap:10px;
    flex-wrap:wrap;
  }

  .detail-label{
    font-weight: 800;
    opacity: .85;
  }

  .detail-value{
    font-weight: 600;
    color: rgba(255,255,255,.88);
  }

  /* actions */
  .form-actions{
    display:flex;
    justify-content:space-between;
    align-items:center;
    flex-wrap:wrap;
    gap:12px;
    margin-top: 18px;
  }

  .back-link{
    color: rgba(226,232,240,.85);
    text-decoration:none;
    font-weight:600;
  }

  .back-link:hover{
    text-decoration: underline;
  }
</style>

<div class=\"form-card\">
  <h1>Détail de la dépense</h1>

  <ul class=\"detail-list\">
    <li>
      <span class=\"detail-label\">Description :</span>
      <span class=\"detail-value\">";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["depense"]) || array_key_exists("depense", $context) ? $context["depense"] : (function () { throw new RuntimeError('Variable "depense" does not exist.', 83, $this->source); })()), "description", [], "any", false, false, false, 83), "html", null, true);
        yield "</span>
    </li>

    <li>
      <span class=\"detail-label\">Montant :</span>
      <span class=\"detail-value\">";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["depense"]) || array_key_exists("depense", $context) ? $context["depense"] : (function () { throw new RuntimeError('Variable "depense" does not exist.', 88, $this->source); })()), "montant", [], "any", false, false, false, 88), "html", null, true);
        yield " TND</span>
    </li>

    <li>
      <span class=\"detail-label\">Date :</span>
      <span class=\"detail-value\">
        ";
        // line 94
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["depense"]) || array_key_exists("depense", $context) ? $context["depense"] : (function () { throw new RuntimeError('Variable "depense" does not exist.', 94, $this->source); })()), "dateDepense", [], "any", false, false, false, 94)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["depense"]) || array_key_exists("depense", $context) ? $context["depense"] : (function () { throw new RuntimeError('Variable "depense" does not exist.', 94, $this->source); })()), "dateDepense", [], "any", false, false, false, 94), "d/m/Y"), "html", null, true)) : ("-"));
        yield "
      </span>
    </li>

    <li>
      <span class=\"detail-label\">Statut :</span>
      <span class=\"detail-value\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["depense"]) || array_key_exists("depense", $context) ? $context["depense"] : (function () { throw new RuntimeError('Variable "depense" does not exist.', 100, $this->source); })()), "statut", [], "any", false, false, false, 100), "html", null, true);
        yield "</span>
    </li>

    <li>
      <span class=\"detail-label\">Catégorie :</span>
      <span class=\"detail-value\">
        ";
        // line 106
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["depense"]) || array_key_exists("depense", $context) ? $context["depense"] : (function () { throw new RuntimeError('Variable "depense" does not exist.', 106, $this->source); })()), "categorie", [], "any", false, false, false, 106)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["depense"]) || array_key_exists("depense", $context) ? $context["depense"] : (function () { throw new RuntimeError('Variable "depense" does not exist.', 106, $this->source); })()), "categorie", [], "any", false, false, false, 106), "nomCategorie", [], "any", false, false, false, 106), "html", null, true)) : ("-"));
        yield "
      </span>
    </li>
  </ul>

  <div class=\"form-actions\">
    <a href=\"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_depense_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["depense"]) || array_key_exists("depense", $context) ? $context["depense"] : (function () { throw new RuntimeError('Variable "depense" does not exist.', 112, $this->source); })()), "idDepense", [], "any", false, false, false, 112)]), "html", null, true);
        yield "\"
       class=\"hero-button\"
       style=\"text-decoration:none;\">
      Modifier
    </a>

    <a class=\"back-link\" href=\"";
        // line 118
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_depense_index");
        yield "\">
      ← Retour à la page depense
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
        return "front/depense/show.html.twig";
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
        return array (  232 => 118,  223 => 112,  214 => 106,  205 => 100,  196 => 94,  187 => 88,  179 => 83,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base_finance.html.twig' %}

{% block title %}Détail dépense - AIVA{% endblock %}

{% block content %}

<style>
  /* ✅ Same glass card theme */
  .form-card{
    max-width: 720px;
    margin: 30px auto 60px;
    padding: 24px;
    border-radius: 18px;
    background: linear-gradient(135deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
    border: 1px solid rgba(255,255,255,.12);
    backdrop-filter: blur(10px);
  }

  .form-card h1{
    margin: 0 0 18px;
    font-size: 28px;
    font-weight: 800;
    letter-spacing: -0.02em;
  }

  /* details list */
  .detail-list{
    list-style:none;
    padding:0;
    margin:0;
    color: rgba(226,232,240,.95);
  }

  .detail-list li{
    margin-bottom: 12px;
    padding: 10px 12px;
    border-radius: 14px;
    background: rgba(255,255,255,.05);
    border: 1px solid rgba(255,255,255,.10);
    display:flex;
    justify-content:space-between;
    gap:10px;
    flex-wrap:wrap;
  }

  .detail-label{
    font-weight: 800;
    opacity: .85;
  }

  .detail-value{
    font-weight: 600;
    color: rgba(255,255,255,.88);
  }

  /* actions */
  .form-actions{
    display:flex;
    justify-content:space-between;
    align-items:center;
    flex-wrap:wrap;
    gap:12px;
    margin-top: 18px;
  }

  .back-link{
    color: rgba(226,232,240,.85);
    text-decoration:none;
    font-weight:600;
  }

  .back-link:hover{
    text-decoration: underline;
  }
</style>

<div class=\"form-card\">
  <h1>Détail de la dépense</h1>

  <ul class=\"detail-list\">
    <li>
      <span class=\"detail-label\">Description :</span>
      <span class=\"detail-value\">{{ depense.description }}</span>
    </li>

    <li>
      <span class=\"detail-label\">Montant :</span>
      <span class=\"detail-value\">{{ depense.montant }} TND</span>
    </li>

    <li>
      <span class=\"detail-label\">Date :</span>
      <span class=\"detail-value\">
        {{ depense.dateDepense ? depense.dateDepense|date('d/m/Y') : '-' }}
      </span>
    </li>

    <li>
      <span class=\"detail-label\">Statut :</span>
      <span class=\"detail-value\">{{ depense.statut }}</span>
    </li>

    <li>
      <span class=\"detail-label\">Catégorie :</span>
      <span class=\"detail-value\">
        {{ depense.categorie ? depense.categorie.nomCategorie : '-' }}
      </span>
    </li>
  </ul>

  <div class=\"form-actions\">
    <a href=\"{{ path('front_depense_edit', {id: depense.idDepense}) }}\"
       class=\"hero-button\"
       style=\"text-decoration:none;\">
      Modifier
    </a>

    <a class=\"back-link\" href=\"{{ path('front_depense_index') }}\">
      ← Retour à la page depense
    </a>
  </div>
</div>

{% endblock %}
", "front/depense/show.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\front\\depense\\show.html.twig");
    }
}
