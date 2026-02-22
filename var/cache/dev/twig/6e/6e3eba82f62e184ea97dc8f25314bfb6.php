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

/* front/aliment/edit.html.twig */
class __TwigTemplate_89ebc922004757eb50002e4f8b806e66 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/aliment/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/aliment/edit.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        yield "<link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/stylefront.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">

<style>
  /* ✅ FIX OVERFLOW */
  *, *::before, *::after { box-sizing: border-box; }

  /* ✅ glass card like Recommandations */
  .glass-card{
    background: linear-gradient(135deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
    border: 1px solid rgba(255,255,255,.12);
    border-radius: 18px;
    padding: 18px;
    backdrop-filter: blur(10px);
  }

  /* ✅ form header */
  .form-head{
    display:flex;
    justify-content:space-between;
    align-items:flex-start;
    gap:12px;
    margin-bottom: 14px;
    flex-wrap: wrap;
  }
  .form-head h3{ margin:0; font-size:18px; font-weight:800; }
  .form-head p{ margin:6px 0 0; opacity:.75; font-size:13px; }

  /* ✅ grid */
  .form-grid2{
    display:grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 14px;
  }
  @media(max-width: 820px){
    .form-grid2{ grid-template-columns: 1fr; }
  }

  /* ✅ fields */
  .field label{
    display:block;
    font-size:13px;
    opacity:.80;
    margin: 12px 0 6px;
  }

  .field input,
  .field select,
  .field textarea{
    width:100%;
    max-width:100%;
    height:46px;
    padding: 10px 12px;
    border-radius: 14px;
    border: 1px solid rgba(255,255,255,.14);
    background: rgba(0,0,0,.18);
    color: inherit;
    outline:none;
    transition: .15s;
    font-size: 14px;
  }
  .field textarea{ height:110px; resize:vertical; }

  .field input:focus,
  .field select:focus,
  .field textarea:focus{
    border-color: rgba(0,212,170,.65);
    box-shadow: 0 0 0 3px rgba(0,212,170,.18);
  }

  /* ✅ group */
  .group{
    margin-top: 16px;
    padding-top: 14px;
    border-top: 1px solid rgba(255,255,255,.10);
  }
  .group-title{
    margin:0 0 10px;
    font-size: 13px;
    opacity:.75;
    letter-spacing:.2px;
  }

  /* ✅ actions */
  .actions-right{
    display:flex;
    justify-content:flex-end;
    gap:10px;
    margin-top: 16px;
    flex-wrap:wrap;
  }

  /* ✅ buttons (fallback if needed) */
  .btn{
    display:inline-flex;
    align-items:center;
    gap:8px;
    padding: 10px 14px;
    border-radius: 12px;
    font-weight: 700;
    font-size: 14px;
    text-decoration:none;
    border: 1px solid transparent;
    cursor:pointer;
    transition: .2s ease;
    white-space: nowrap;
  }

  .btn-secondary{
    background: rgba(255,255,255,.06);
    border-color: rgba(255,255,255,.18);
    color: rgba(226,232,240,.95);
  }
  .btn-secondary:hover{ background: rgba(255,255,255,.12); }

  .btn-success{
    background: linear-gradient(135deg, #00d4aa, #a855f7);
    color: #020617;
  }
  .btn-success:hover{
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(0,0,0,.25);
  }
</style>

<div class=\"container\">

  <!-- ✅ NAVBAR -->
  <nav class=\"navbar\">
    <div class=\"logo\">
      <svg width=\"32\" height=\"32\" viewBox=\"0 0 100 100\">
        <defs>
          <linearGradient id=\"grad\" x1=\"0%\" y1=\"0%\" x2=\"100%\" y2=\"100%\">
            <stop offset=\"0%\" stop-color=\"#a855f7\" />
            <stop offset=\"50%\" stop-color=\"#00d4aa\" />
            <stop offset=\"100%\" stop-color=\"#ec4899\" />
          </linearGradient>
        </defs>
        <path d=\"M50 10 L85 80 L15 80 Z\" fill=\"none\" stroke=\"url(#grad)\" stroke-width=\"4\"/>
        <circle cx=\"50\" cy=\"50\" r=\"10\" fill=\"#00d4aa\"/>
      </svg>
      <span class=\"logo-text\">AIVA</span>
    </div>

    <div class=\"nav-links\">
      <a href=\"";
        // line 148
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_categorie_index");
        yield "\">categorie</a>
      <a href=\"";
        // line 149
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_activite_index");
        yield "\">Activité</a>
      <a href=\"";
        // line 150
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_index");
        yield "\">Objectif</a>
      <a href=\"";
        // line 151
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_depense_index");
        yield "\">depense</a>
      <a href=\"";
        // line 152
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_aliment_index");
        yield "\" class=\"active\">Alimentation</a>
      <a href=\"";
        // line 153
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_front_index");
        yield "\">apprentissage</a>
      <a href=\"";
        // line 154
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_energie_index");
        yield "\">Énergie</a>
      <a href=\"";
        // line 155
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_recommandation_index");
        yield "\">Recommandation</a>
    </div>

    <a href=\"";
        // line 158
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"nav-link\">
      <i class=\"fa-solid fa-right-from-bracket\"></i> Déconnexion
    </a>
  </nav>

  <!-- ✅ MAIN -->
  <main class=\"hero\">
    <div class=\"glow\"></div>

    <h1 class=\"hero-title\">✏️ Edit Food</h1>
    <p class=\"hero-description\">Update your food data and macros.</p>

    ";
        // line 170
        $context["m"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["aliment"] ?? null), "macro", [], "any", true, true, false, 170) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["aliment"]) || array_key_exists("aliment", $context) ? $context["aliment"] : (function () { throw new RuntimeError('Variable "aliment" does not exist.', 170, $this->source); })()), "macro", [], "any", false, false, false, 170)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["aliment"]) || array_key_exists("aliment", $context) ? $context["aliment"] : (function () { throw new RuntimeError('Variable "aliment" does not exist.', 170, $this->source); })()), "macro", [], "any", false, false, false, 170)) : ([]));
        // line 171
        yield "
    <!-- ✅ FORM CARD -->
    <div class=\"table-wrap glass-card\">

      <div class=\"form-head\">
        <div>
          <h3>Food information</h3>
          <p>Edit the name, quantity and nutritional values</p>
        </div>
        <a class=\"btn btn-secondary\" href=\"";
        // line 180
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_aliment_index");
        yield "\">
          <i class=\"fa-solid fa-arrow-left\"></i> Back
        </a>
      </div>

      ";
        // line 185
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), 'form_start');
        yield "

      <!-- BASIC INFO -->
      <div class=\"form-grid2\">
        <div class=\"field\">
          <label>Name</label>
          ";
        // line 191
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "nom", [], "any", false, false, false, 191), 'widget', ["attr" => ["placeholder" => "Food name..."]]);
        yield "
          ";
        // line 192
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "nom", [], "any", false, false, false, 192), 'errors');
        yield "
        </div>

        <div class=\"field\">
          <label>Quantity (g)</label>
          ";
        // line 197
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), "quantite", [], "any", false, false, false, 197), 'widget', ["attr" => ["placeholder" => "Quantity..."]]);
        yield "
          ";
        // line 198
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "quantite", [], "any", false, false, false, 198), 'errors');
        yield "
        </div>
      </div>

      <!-- MACROS -->
      <div class=\"group\">
        <p class=\"group-title\">Macros</p>

        <div class=\"form-grid2\">
          <div class=\"field\">
            <label>Proteine (g)</label>
            <input type=\"number\" step=\"0.1\" name=\"macro_proteine\" value=\"";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["m"] ?? null), "proteine", [], "any", true, true, false, 209)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 209, $this->source); })()), "proteine", [], "any", false, false, false, 209), 0)) : (0)), "html", null, true);
        yield "\">
          </div>

          <div class=\"field\">
            <label>Glucide (g)</label>
            <input type=\"number\" step=\"0.1\" name=\"macro_glucide\" value=\"";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["m"] ?? null), "glucide", [], "any", true, true, false, 214)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 214, $this->source); })()), "glucide", [], "any", false, false, false, 214), 0)) : (0)), "html", null, true);
        yield "\">
          </div>

          <div class=\"field\">
            <label>Lipide (g)</label>
            <input type=\"number\" step=\"0.1\" name=\"macro_lipide\" value=\"";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["m"] ?? null), "lipide", [], "any", true, true, false, 219)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 219, $this->source); })()), "lipide", [], "any", false, false, false, 219), 0)) : (0)), "html", null, true);
        yield "\">
          </div>
        </div>
      </div>

      <!-- ACTIONS -->
      <div class=\"actions-right\">
        <button type=\"submit\" class=\"btn btn-success\">
          <i class=\"fa-solid fa-check\"></i> Update
        </button>
        <a class=\"btn btn-secondary\" href=\"";
        // line 229
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_aliment_index");
        yield "\">
          Cancel
        </a>
      </div>

      ";
        // line 234
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 234, $this->source); })()), 'form_end');
        yield "
    </div>

    <!-- ✅ DELETE -->
    <div class=\"table-wrap glass-card\" style=\"margin-top:16px;\">
      ";
        // line 239
        yield Twig\Extension\CoreExtension::include($this->env, $context, "front/aliment/_delete_form.html.twig", ["aliment" => (isset($context["aliment"]) || array_key_exists("aliment", $context) ? $context["aliment"] : (function () { throw new RuntimeError('Variable "aliment" does not exist.', 239, $this->source); })())]);
        yield "
    </div>

  </main>
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
        return "front/aliment/edit.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  377 => 239,  369 => 234,  361 => 229,  348 => 219,  340 => 214,  332 => 209,  318 => 198,  314 => 197,  306 => 192,  302 => 191,  293 => 185,  285 => 180,  274 => 171,  272 => 170,  257 => 158,  251 => 155,  247 => 154,  243 => 153,  239 => 152,  235 => 151,  231 => 150,  227 => 149,  223 => 148,  75 => 3,  72 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block body %}
<link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"{{ asset('css/stylefront.css') }}\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">

<style>
  /* ✅ FIX OVERFLOW */
  *, *::before, *::after { box-sizing: border-box; }

  /* ✅ glass card like Recommandations */
  .glass-card{
    background: linear-gradient(135deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
    border: 1px solid rgba(255,255,255,.12);
    border-radius: 18px;
    padding: 18px;
    backdrop-filter: blur(10px);
  }

  /* ✅ form header */
  .form-head{
    display:flex;
    justify-content:space-between;
    align-items:flex-start;
    gap:12px;
    margin-bottom: 14px;
    flex-wrap: wrap;
  }
  .form-head h3{ margin:0; font-size:18px; font-weight:800; }
  .form-head p{ margin:6px 0 0; opacity:.75; font-size:13px; }

  /* ✅ grid */
  .form-grid2{
    display:grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 14px;
  }
  @media(max-width: 820px){
    .form-grid2{ grid-template-columns: 1fr; }
  }

  /* ✅ fields */
  .field label{
    display:block;
    font-size:13px;
    opacity:.80;
    margin: 12px 0 6px;
  }

  .field input,
  .field select,
  .field textarea{
    width:100%;
    max-width:100%;
    height:46px;
    padding: 10px 12px;
    border-radius: 14px;
    border: 1px solid rgba(255,255,255,.14);
    background: rgba(0,0,0,.18);
    color: inherit;
    outline:none;
    transition: .15s;
    font-size: 14px;
  }
  .field textarea{ height:110px; resize:vertical; }

  .field input:focus,
  .field select:focus,
  .field textarea:focus{
    border-color: rgba(0,212,170,.65);
    box-shadow: 0 0 0 3px rgba(0,212,170,.18);
  }

  /* ✅ group */
  .group{
    margin-top: 16px;
    padding-top: 14px;
    border-top: 1px solid rgba(255,255,255,.10);
  }
  .group-title{
    margin:0 0 10px;
    font-size: 13px;
    opacity:.75;
    letter-spacing:.2px;
  }

  /* ✅ actions */
  .actions-right{
    display:flex;
    justify-content:flex-end;
    gap:10px;
    margin-top: 16px;
    flex-wrap:wrap;
  }

  /* ✅ buttons (fallback if needed) */
  .btn{
    display:inline-flex;
    align-items:center;
    gap:8px;
    padding: 10px 14px;
    border-radius: 12px;
    font-weight: 700;
    font-size: 14px;
    text-decoration:none;
    border: 1px solid transparent;
    cursor:pointer;
    transition: .2s ease;
    white-space: nowrap;
  }

  .btn-secondary{
    background: rgba(255,255,255,.06);
    border-color: rgba(255,255,255,.18);
    color: rgba(226,232,240,.95);
  }
  .btn-secondary:hover{ background: rgba(255,255,255,.12); }

  .btn-success{
    background: linear-gradient(135deg, #00d4aa, #a855f7);
    color: #020617;
  }
  .btn-success:hover{
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(0,0,0,.25);
  }
</style>

<div class=\"container\">

  <!-- ✅ NAVBAR -->
  <nav class=\"navbar\">
    <div class=\"logo\">
      <svg width=\"32\" height=\"32\" viewBox=\"0 0 100 100\">
        <defs>
          <linearGradient id=\"grad\" x1=\"0%\" y1=\"0%\" x2=\"100%\" y2=\"100%\">
            <stop offset=\"0%\" stop-color=\"#a855f7\" />
            <stop offset=\"50%\" stop-color=\"#00d4aa\" />
            <stop offset=\"100%\" stop-color=\"#ec4899\" />
          </linearGradient>
        </defs>
        <path d=\"M50 10 L85 80 L15 80 Z\" fill=\"none\" stroke=\"url(#grad)\" stroke-width=\"4\"/>
        <circle cx=\"50\" cy=\"50\" r=\"10\" fill=\"#00d4aa\"/>
      </svg>
      <span class=\"logo-text\">AIVA</span>
    </div>

    <div class=\"nav-links\">
      <a href=\"{{ path('front_categorie_index') }}\">categorie</a>
      <a href=\"{{ path('front_activite_index') }}\">Activité</a>
      <a href=\"{{ path('front_objectif_index') }}\">Objectif</a>
      <a href=\"{{ path('front_depense_index') }}\">depense</a>
      <a href=\"{{ path('front_aliment_index') }}\" class=\"active\">Alimentation</a>
      <a href=\"{{ path('cours_front_index') }}\">apprentissage</a>
      <a href=\"{{ path('front_energie_index') }}\">Énergie</a>
      <a href=\"{{ path('front_recommandation_index') }}\">Recommandation</a>
    </div>

    <a href=\"{{ path('app_logout') }}\" class=\"nav-link\">
      <i class=\"fa-solid fa-right-from-bracket\"></i> Déconnexion
    </a>
  </nav>

  <!-- ✅ MAIN -->
  <main class=\"hero\">
    <div class=\"glow\"></div>

    <h1 class=\"hero-title\">✏️ Edit Food</h1>
    <p class=\"hero-description\">Update your food data and macros.</p>

    {% set m = aliment.macro ?? {} %}

    <!-- ✅ FORM CARD -->
    <div class=\"table-wrap glass-card\">

      <div class=\"form-head\">
        <div>
          <h3>Food information</h3>
          <p>Edit the name, quantity and nutritional values</p>
        </div>
        <a class=\"btn btn-secondary\" href=\"{{ path('front_aliment_index') }}\">
          <i class=\"fa-solid fa-arrow-left\"></i> Back
        </a>
      </div>

      {{ form_start(form) }}

      <!-- BASIC INFO -->
      <div class=\"form-grid2\">
        <div class=\"field\">
          <label>Name</label>
          {{ form_widget(form.nom, {'attr': {'placeholder': 'Food name...'}}) }}
          {{ form_errors(form.nom) }}
        </div>

        <div class=\"field\">
          <label>Quantity (g)</label>
          {{ form_widget(form.quantite, {'attr': {'placeholder': 'Quantity...'}}) }}
          {{ form_errors(form.quantite) }}
        </div>
      </div>

      <!-- MACROS -->
      <div class=\"group\">
        <p class=\"group-title\">Macros</p>

        <div class=\"form-grid2\">
          <div class=\"field\">
            <label>Proteine (g)</label>
            <input type=\"number\" step=\"0.1\" name=\"macro_proteine\" value=\"{{ m.proteine|default(0) }}\">
          </div>

          <div class=\"field\">
            <label>Glucide (g)</label>
            <input type=\"number\" step=\"0.1\" name=\"macro_glucide\" value=\"{{ m.glucide|default(0) }}\">
          </div>

          <div class=\"field\">
            <label>Lipide (g)</label>
            <input type=\"number\" step=\"0.1\" name=\"macro_lipide\" value=\"{{ m.lipide|default(0) }}\">
          </div>
        </div>
      </div>

      <!-- ACTIONS -->
      <div class=\"actions-right\">
        <button type=\"submit\" class=\"btn btn-success\">
          <i class=\"fa-solid fa-check\"></i> Update
        </button>
        <a class=\"btn btn-secondary\" href=\"{{ path('front_aliment_index') }}\">
          Cancel
        </a>
      </div>

      {{ form_end(form) }}
    </div>

    <!-- ✅ DELETE -->
    <div class=\"table-wrap glass-card\" style=\"margin-top:16px;\">
      {{ include('front/aliment/_delete_form.html.twig', {'aliment': aliment}) }}
    </div>

  </main>
</div>
{% endblock %}
", "front/aliment/edit.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\front\\aliment\\edit.html.twig");
    }
}
