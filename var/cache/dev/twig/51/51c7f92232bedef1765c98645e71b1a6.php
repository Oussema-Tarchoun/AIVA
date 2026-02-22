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

/* front/depense/edit.html.twig */
class __TwigTemplate_c5fcb7631ce1cc34a0ffc7fbaf509102 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/depense/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/depense/edit.html.twig"));

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

        yield "Modifier une dépense - AIVA";
        
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

  /* ✅ Fix input overflow */
  .form-card *, .form-card *::before, .form-card *::after { box-sizing: border-box; }

  .form-card label{
    display:block;
    font-size: 13px;
    margin: 12px 0 6px;
    opacity: .8;
  }

  .form-card input,
  .form-card select,
  .form-card textarea{
    width: 100%;
    max-width: 100%;
    padding: 10px 12px;
    border-radius: 12px;
    border: 1px solid rgba(255,255,255,.15);
    background: rgba(0,0,0,.18);
    color: inherit;
    font-size: 14px;
    outline: none;
    margin-bottom: 14px;
  }

  .form-card textarea{
    min-height: 110px;
    resize: vertical;
  }

  .form-card input:focus,
  .form-card select:focus,
  .form-card textarea:focus{
    border-color: #00d4aa;
    box-shadow: 0 0 0 3px rgba(0,212,170,.25);
  }

  /* errors */
  .form-error-message,
  .invalid-feedback,
  .form-error,
  ul li{
    color: #ffb4c5;
    font-size: 13px;
  }
  ul{ padding-left: 18px; margin: 6px 0 0; }

  .form-actions{
    display:flex;
    justify-content:space-between;
    align-items:center;
    flex-wrap:wrap;
    gap:12px;
    margin-top: 8px;
  }

  .back-link{
    color: rgba(226,232,240,.85);
    text-decoration:none;
    font-weight:600;
  }
  .back-link:hover{ text-decoration: underline; }
</style>

<div class=\"form-card\">
  <h1>Modifier une dépense</h1>

  ";
        // line 94
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

    ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), 'errors');
        yield "

    ";
        // line 99
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), 'widget');
        yield "

    <div class=\"form-actions\">
      <button type=\"submit\" class=\"hero-button\">
        Enregistrer les modifications
      </button>

      <a class=\"back-link\" href=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_depense_index");
        yield "\">
        ← Retour à la page depense
      </a>
    </div>

  ";
        // line 111
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), 'form_end');
        yield "
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
        return "front/depense/edit.html.twig";
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
        return array (  219 => 111,  211 => 106,  200 => 99,  195 => 96,  189 => 94,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base_finance.html.twig' %}

{% block title %}Modifier une dépense - AIVA{% endblock %}

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

  /* ✅ Fix input overflow */
  .form-card *, .form-card *::before, .form-card *::after { box-sizing: border-box; }

  .form-card label{
    display:block;
    font-size: 13px;
    margin: 12px 0 6px;
    opacity: .8;
  }

  .form-card input,
  .form-card select,
  .form-card textarea{
    width: 100%;
    max-width: 100%;
    padding: 10px 12px;
    border-radius: 12px;
    border: 1px solid rgba(255,255,255,.15);
    background: rgba(0,0,0,.18);
    color: inherit;
    font-size: 14px;
    outline: none;
    margin-bottom: 14px;
  }

  .form-card textarea{
    min-height: 110px;
    resize: vertical;
  }

  .form-card input:focus,
  .form-card select:focus,
  .form-card textarea:focus{
    border-color: #00d4aa;
    box-shadow: 0 0 0 3px rgba(0,212,170,.25);
  }

  /* errors */
  .form-error-message,
  .invalid-feedback,
  .form-error,
  ul li{
    color: #ffb4c5;
    font-size: 13px;
  }
  ul{ padding-left: 18px; margin: 6px 0 0; }

  .form-actions{
    display:flex;
    justify-content:space-between;
    align-items:center;
    flex-wrap:wrap;
    gap:12px;
    margin-top: 8px;
  }

  .back-link{
    color: rgba(226,232,240,.85);
    text-decoration:none;
    font-weight:600;
  }
  .back-link:hover{ text-decoration: underline; }
</style>

<div class=\"form-card\">
  <h1>Modifier une dépense</h1>

  {# ✅ Disable HTML5 validation #}
  {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

    {{ form_errors(form) }}

    {# ✅ safest: render all fields in DepenseType #}
    {{ form_widget(form) }}

    <div class=\"form-actions\">
      <button type=\"submit\" class=\"hero-button\">
        Enregistrer les modifications
      </button>

      <a class=\"back-link\" href=\"{{ path('front_depense_index') }}\">
        ← Retour à la page depense
      </a>
    </div>

  {{ form_end(form) }}
</div>

{% endblock %}
", "front/depense/edit.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\front\\depense\\edit.html.twig");
    }
}
