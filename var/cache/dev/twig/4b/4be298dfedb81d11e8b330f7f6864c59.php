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

/* front/categorie/index.html.twig */
class __TwigTemplate_994060e0285f3604c3049ae90f13623b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/categorie/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/categorie/index.html.twig"));

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

        yield "Mes catégories - AIVA";
        
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
  /* =========================
     ✅ SAME CSS AS DÉPENSES
  ========================= */
  body, html {
    margin: 0;
    padding: 0;
    font-family: 'Inter', system-ui, sans-serif;
    background-color: #0a0a12;
    color: #fff;
    min-height: 100vh;
  }

  /* =========================
     HERO SECTION LOOK (inside base)
  ========================= */
  .hero {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    text-align: center;
    padding-top: 35px;
    padding-bottom: 60px;
    position: relative;
  }

  .glow {
    position: absolute;
    top: 12%;
    left: 50%;
    transform: translateX(-50%);
    width: 520px;
    height: 320px;
    background: radial-gradient(
      ellipse,
      rgba(0,212,170,0.15) 0%,
      transparent 70%
    );
    pointer-events: none;
  }

  .hero-title {
    font-size: 46px;
    font-weight: bold;
    margin-bottom: 14px;
    line-height: 1.1;
  }

  .hero-description {
    color: #888;
    font-size: 16px;
    max-width: 600px;
    line-height: 1.7;
    margin-bottom: 26px;
  }

  /* =========================
     SECTION HEAD + BUTTONS
  ========================= */
  .section-head {
    width: 100%;
    max-width: 1000px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 10px;
    margin-bottom: 16px;
    padding-left: 60px;
    padding-right: 60px;
    box-sizing: border-box;
  }

  .section-title {
    margin: 0;
    font-size: 20px;
    font-weight: 600;
    text-align: left;
  }

  .btn {
    border: none;
    border-radius: 999px;
    padding: 10px 16px;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    transition: transform 0.08s ease, opacity 0.15s ease;
    display:inline-flex;
    align-items:center;
    gap:8px;
    text-decoration:none;
  }

  .btn:active { transform: scale(0.98); }
  .btn:hover { opacity: 0.92; }

  .btn-primary {
    background: linear-gradient(135deg, #0d9488, #00d4aa);
    color: #0a0a12;
  }

  .btn-warning {
    background: linear-gradient(135deg, #f59e0b, #fde68a);
    color: #0a0a12;
  }

  .btn-danger {
    background: linear-gradient(135deg, #ef4444, #fca5a5);
    color: #0a0a12;
  }

  .btn-secondary {
    background: transparent;
    border: 1px solid #1a1a2e;
    color: #c7c7c7;
  }

  /* =========================
     ✅ HORIZONTAL CARDS LIST
  ========================= */
  .depenses-list{
    width:100%;
    max-width:1000px;
    padding-left:60px;
    padding-right:60px;
    box-sizing:border-box;
    display:grid;
    grid-template-columns: 1fr;
    gap: 16px;
    margin-top: 24px;
  }

  .depense-card{
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:20px;
    padding:20px;
    border-radius:18px;
    border: 1px solid rgba(255,255,255,.12);
    background: linear-gradient(135deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
    backdrop-filter: blur(10px);
    transition:.2s;
  }

  .depense-card:hover{
    transform: translateY(-4px);
    box-shadow: 0 10px 30px rgba(0,0,0,.25);
  }

  .depense-left{ flex:1; min-width:0; }

  .depense-title{
    font-size:18px;
    font-weight:800;
    margin-bottom:6px;
    white-space:nowrap;
    overflow:hidden;
    text-overflow:ellipsis;
    display:flex;
    gap:10px;
    align-items:center;
  }

  .depense-meta{
    display:flex;
    flex-wrap:wrap;
    gap:12px;
    align-items:center;
    font-size:14px;
    color:#c7c7c7;
    opacity:.95;
  }

  .pill{
    display:inline-flex;
    align-items:center;
    gap:8px;
    padding:6px 10px;
    border-radius:999px;
    border:1px solid rgba(255,255,255,.14);
    background: rgba(255,255,255,.06);
    font-size:12px;
    font-weight:700;
    color:#e7e7e7;
    white-space:nowrap;
  }

  .depense-id{
    flex-shrink:0;
    padding:6px 12px;
    border-radius:999px;
    font-size:12px;
    font-weight:700;
    background:rgba(255,255,255,.06);
    border:1px solid rgba(255,255,255,.15);
    color:#e7e7e7;
  }

  .depense-actions{
    display:flex;
    gap:10px;
    flex-shrink:0;
    align-items:center;
  }

  .empty-box{
    width:100%;
    max-width:1000px;
    margin-top:24px;
    padding:20px;
    border-radius:16px;
    background:rgba(255,255,255,.04);
    border:1px dashed rgba(255,255,255,.15);
    color:#888;
    box-sizing:border-box;
  }

  /* =========================
     RESPONSIVE
  ========================= */
  @media (max-width: 900px) {
    .section-head { padding-left: 20px; padding-right: 20px; }
    .depenses-list { padding-left: 20px; padding-right: 20px; }
  }

  @media (max-width: 720px){
    .depense-card{
      flex-direction:column;
      align-items:flex-start;
    }
    .depense-actions{
      width:100%;
      justify-content:flex-end;
    }
    .depense-id{ align-self:flex-end; }
  }
</style>

<main class=\"hero\">
  <div class=\"glow\"></div>

  <h1 class=\"hero-title\">
    <i class=\"fa-solid fa-layer-group\" style=\"color:#00d4aa;\"></i>
    Mes Catégories
  </h1>

  <p class=\"hero-description\">
    Gérez vos catégories de dépenses.
  </p>

  <!-- HEAD ACTION -->
  <div class=\"section-head\">
    <h2 class=\"section-title\">Mes catégories</h2>
    <a class=\"btn btn-primary\" href=\"";
        // line 262
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_categorie_new");
        yield "\">
      <i class=\"fa-solid fa-plus\"></i> Ajouter
    </a>
  </div>

  ";
        // line 267
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 267, $this->source); })())) == 0)) {
            // line 268
            yield "    <div class=\"empty-box\">
      Aucune catégorie. Cliquez sur « Ajouter » pour commencer.
    </div>
  ";
        } else {
            // line 272
            yield "    <div class=\"depenses-list\">
      ";
            // line 273
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 273, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 274
                yield "        <div class=\"depense-card\">

          <!-- LEFT -->
          <div class=\"depense-left\">
            <div class=\"depense-title\">
              <i class=\"fa-solid fa-tags\"></i>
              ";
                // line 280
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nomCategorie", [], "any", false, false, false, 280), "html", null, true);
                yield "
            </div>

            <div class=\"depense-meta\">
              <span>
                <i class=\"fa-solid fa-align-left\"></i>
                ";
                // line 286
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "description", [], "any", false, false, false, 286)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "description", [], "any", false, false, false, 286), "html", null, true)) : ("—"));
                yield "
              </span>

              ";
                // line 290
                yield "              ";
                // line 291
                yield "            </div>
          </div>

          <!-- ID -->
          <span class=\"depense-id\">#";
                // line 295
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "idCategorie", [], "any", false, false, false, 295), "html", null, true);
                yield "</span>

          <!-- ACTIONS -->
          <div class=\"depense-actions\">
            <a class=\"btn btn-secondary\"
               href=\"";
                // line 300
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_categorie_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "idCategorie", [], "any", false, false, false, 300)]), "html", null, true);
                yield "\">
              <i class=\"fa-regular fa-eye\"></i>
            </a>

            <a class=\"btn btn-warning\"
               href=\"";
                // line 305
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_categorie_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "idCategorie", [], "any", false, false, false, 305)]), "html", null, true);
                yield "\">
              <i class=\"fa-solid fa-pen\"></i>
            </a>

            <form method=\"post\"
                  action=\"";
                // line 310
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_categorie_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "idCategorie", [], "any", false, false, false, 310)]), "html", null, true);
                yield "\"
                  onsubmit=\"return confirm('Supprimer cette catégorie ?');\"
                  style=\"margin:0;\">
              <input type=\"hidden\" name=\"_token\" value=\"";
                // line 313
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "idCategorie", [], "any", false, false, false, 313))), "html", null, true);
                yield "\">
              <button class=\"btn btn-danger\" type=\"submit\">
                <i class=\"fa-solid fa-trash\"></i>
              </button>
            </form>
          </div>

        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 322
            yield "    </div>
  ";
        }
        // line 324
        yield "
  <div style=\"margin-top:20px; width:100%; max-width:1000px; padding:0 60px; box-sizing:border-box; text-align:left;\">
    <a href=\"";
        // line 326
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_categorie_index");
        yield "\" style=\"color:#00d4aa; text-decoration:none;\">
      ← Retour
    </a>
  </div>
</main>

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
        return "front/categorie/index.html.twig";
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
        return array (  465 => 326,  461 => 324,  457 => 322,  442 => 313,  436 => 310,  428 => 305,  420 => 300,  412 => 295,  406 => 291,  404 => 290,  398 => 286,  389 => 280,  381 => 274,  377 => 273,  374 => 272,  368 => 268,  366 => 267,  358 => 262,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base_finance.html.twig' %}

{% block title %}Mes catégories - AIVA{% endblock %}

{% block content %}

<style>
  /* =========================
     ✅ SAME CSS AS DÉPENSES
  ========================= */
  body, html {
    margin: 0;
    padding: 0;
    font-family: 'Inter', system-ui, sans-serif;
    background-color: #0a0a12;
    color: #fff;
    min-height: 100vh;
  }

  /* =========================
     HERO SECTION LOOK (inside base)
  ========================= */
  .hero {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    text-align: center;
    padding-top: 35px;
    padding-bottom: 60px;
    position: relative;
  }

  .glow {
    position: absolute;
    top: 12%;
    left: 50%;
    transform: translateX(-50%);
    width: 520px;
    height: 320px;
    background: radial-gradient(
      ellipse,
      rgba(0,212,170,0.15) 0%,
      transparent 70%
    );
    pointer-events: none;
  }

  .hero-title {
    font-size: 46px;
    font-weight: bold;
    margin-bottom: 14px;
    line-height: 1.1;
  }

  .hero-description {
    color: #888;
    font-size: 16px;
    max-width: 600px;
    line-height: 1.7;
    margin-bottom: 26px;
  }

  /* =========================
     SECTION HEAD + BUTTONS
  ========================= */
  .section-head {
    width: 100%;
    max-width: 1000px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 10px;
    margin-bottom: 16px;
    padding-left: 60px;
    padding-right: 60px;
    box-sizing: border-box;
  }

  .section-title {
    margin: 0;
    font-size: 20px;
    font-weight: 600;
    text-align: left;
  }

  .btn {
    border: none;
    border-radius: 999px;
    padding: 10px 16px;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    transition: transform 0.08s ease, opacity 0.15s ease;
    display:inline-flex;
    align-items:center;
    gap:8px;
    text-decoration:none;
  }

  .btn:active { transform: scale(0.98); }
  .btn:hover { opacity: 0.92; }

  .btn-primary {
    background: linear-gradient(135deg, #0d9488, #00d4aa);
    color: #0a0a12;
  }

  .btn-warning {
    background: linear-gradient(135deg, #f59e0b, #fde68a);
    color: #0a0a12;
  }

  .btn-danger {
    background: linear-gradient(135deg, #ef4444, #fca5a5);
    color: #0a0a12;
  }

  .btn-secondary {
    background: transparent;
    border: 1px solid #1a1a2e;
    color: #c7c7c7;
  }

  /* =========================
     ✅ HORIZONTAL CARDS LIST
  ========================= */
  .depenses-list{
    width:100%;
    max-width:1000px;
    padding-left:60px;
    padding-right:60px;
    box-sizing:border-box;
    display:grid;
    grid-template-columns: 1fr;
    gap: 16px;
    margin-top: 24px;
  }

  .depense-card{
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:20px;
    padding:20px;
    border-radius:18px;
    border: 1px solid rgba(255,255,255,.12);
    background: linear-gradient(135deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
    backdrop-filter: blur(10px);
    transition:.2s;
  }

  .depense-card:hover{
    transform: translateY(-4px);
    box-shadow: 0 10px 30px rgba(0,0,0,.25);
  }

  .depense-left{ flex:1; min-width:0; }

  .depense-title{
    font-size:18px;
    font-weight:800;
    margin-bottom:6px;
    white-space:nowrap;
    overflow:hidden;
    text-overflow:ellipsis;
    display:flex;
    gap:10px;
    align-items:center;
  }

  .depense-meta{
    display:flex;
    flex-wrap:wrap;
    gap:12px;
    align-items:center;
    font-size:14px;
    color:#c7c7c7;
    opacity:.95;
  }

  .pill{
    display:inline-flex;
    align-items:center;
    gap:8px;
    padding:6px 10px;
    border-radius:999px;
    border:1px solid rgba(255,255,255,.14);
    background: rgba(255,255,255,.06);
    font-size:12px;
    font-weight:700;
    color:#e7e7e7;
    white-space:nowrap;
  }

  .depense-id{
    flex-shrink:0;
    padding:6px 12px;
    border-radius:999px;
    font-size:12px;
    font-weight:700;
    background:rgba(255,255,255,.06);
    border:1px solid rgba(255,255,255,.15);
    color:#e7e7e7;
  }

  .depense-actions{
    display:flex;
    gap:10px;
    flex-shrink:0;
    align-items:center;
  }

  .empty-box{
    width:100%;
    max-width:1000px;
    margin-top:24px;
    padding:20px;
    border-radius:16px;
    background:rgba(255,255,255,.04);
    border:1px dashed rgba(255,255,255,.15);
    color:#888;
    box-sizing:border-box;
  }

  /* =========================
     RESPONSIVE
  ========================= */
  @media (max-width: 900px) {
    .section-head { padding-left: 20px; padding-right: 20px; }
    .depenses-list { padding-left: 20px; padding-right: 20px; }
  }

  @media (max-width: 720px){
    .depense-card{
      flex-direction:column;
      align-items:flex-start;
    }
    .depense-actions{
      width:100%;
      justify-content:flex-end;
    }
    .depense-id{ align-self:flex-end; }
  }
</style>

<main class=\"hero\">
  <div class=\"glow\"></div>

  <h1 class=\"hero-title\">
    <i class=\"fa-solid fa-layer-group\" style=\"color:#00d4aa;\"></i>
    Mes Catégories
  </h1>

  <p class=\"hero-description\">
    Gérez vos catégories de dépenses.
  </p>

  <!-- HEAD ACTION -->
  <div class=\"section-head\">
    <h2 class=\"section-title\">Mes catégories</h2>
    <a class=\"btn btn-primary\" href=\"{{ path('front_categorie_new') }}\">
      <i class=\"fa-solid fa-plus\"></i> Ajouter
    </a>
  </div>

  {% if categories|length == 0 %}
    <div class=\"empty-box\">
      Aucune catégorie. Cliquez sur « Ajouter » pour commencer.
    </div>
  {% else %}
    <div class=\"depenses-list\">
      {% for categorie in categories %}
        <div class=\"depense-card\">

          <!-- LEFT -->
          <div class=\"depense-left\">
            <div class=\"depense-title\">
              <i class=\"fa-solid fa-tags\"></i>
              {{ categorie.nomCategorie }}
            </div>

            <div class=\"depense-meta\">
              <span>
                <i class=\"fa-solid fa-align-left\"></i>
                {{ categorie.description ?: '—' }}
              </span>

              {# optionnel: si tu as un champ type/statut ajoute une pill ici #}
              {# <span class=\"pill\">...</span> #}
            </div>
          </div>

          <!-- ID -->
          <span class=\"depense-id\">#{{ categorie.idCategorie }}</span>

          <!-- ACTIONS -->
          <div class=\"depense-actions\">
            <a class=\"btn btn-secondary\"
               href=\"{{ path('front_categorie_show', {id: categorie.idCategorie}) }}\">
              <i class=\"fa-regular fa-eye\"></i>
            </a>

            <a class=\"btn btn-warning\"
               href=\"{{ path('front_categorie_edit', {id: categorie.idCategorie}) }}\">
              <i class=\"fa-solid fa-pen\"></i>
            </a>

            <form method=\"post\"
                  action=\"{{ path('front_categorie_delete', {'id': categorie.idCategorie}) }}\"
                  onsubmit=\"return confirm('Supprimer cette catégorie ?');\"
                  style=\"margin:0;\">
              <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ categorie.idCategorie) }}\">
              <button class=\"btn btn-danger\" type=\"submit\">
                <i class=\"fa-solid fa-trash\"></i>
              </button>
            </form>
          </div>

        </div>
      {% endfor %}
    </div>
  {% endif %}

  <div style=\"margin-top:20px; width:100%; max-width:1000px; padding:0 60px; box-sizing:border-box; text-align:left;\">
    <a href=\"{{ path('front_categorie_index') }}\" style=\"color:#00d4aa; text-decoration:none;\">
      ← Retour
    </a>
  </div>
</main>

{% endblock %}
", "front/categorie/index.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\front\\categorie\\index.html.twig");
    }
}
