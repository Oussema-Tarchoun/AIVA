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

/* front/activite/new.html.twig */
class __TwigTemplate_9526cb37cceaf53006891662024d5300 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/activite/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/activite/new.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>New Activité - AIVA</title>

  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/stylefront.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">

  <style>
    *, *::before, *::after { box-sizing: border-box; }

    /* ✅ Fix overflow for inputs */
    input, select, textarea{
      width: 100%;
      max-width: 100%;
      padding: 10px 12px;
      border-radius: 12px;
      border: 1px solid rgba(255,255,255,.15);
      background: rgba(0,0,0,.18);
      color: inherit;
      outline: none;
      font-size: 14px;
    }
    textarea{ min-height: 110px; resize: vertical; }

    input:focus, select:focus, textarea:focus{
      border-color: #00d4aa;
      box-shadow: 0 0 0 3px rgba(0,212,170,.25);
    }

    /* ✅ glass card */
    .glass-card{
      width: min(900px, 95%);
      margin: 18px auto 0;
      padding: 20px;
      border-radius: 18px;
      background: linear-gradient(135deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
      border: 1px solid rgba(255,255,255,.12);
      backdrop-filter: blur(10px);
    }

    .form-head{
      display:flex;
      justify-content:space-between;
      align-items:flex-start;
      gap:12px;
      flex-wrap:wrap;
      margin-bottom: 14px;
    }
    .form-head h3{ margin:0; font-size:18px; font-weight:800; }
    .form-head p{ margin:6px 0 0; opacity:.75; font-size:13px; }

    .grid2{
      display:grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 14px;
    }
    @media(max-width: 820px){
      .grid2{ grid-template-columns: 1fr; }
    }

    .form-label{
      display:block;
      margin: 12px 0 6px;
      font-size: 13px;
      opacity: .8;
    }

    .actions{
      margin-top: 18px;
      display:flex;
      justify-content:flex-end;
      gap:10px;
      flex-wrap:wrap;
    }

    .btn{
      display:inline-flex;
      align-items:center;
      gap:8px;
      padding: 10px 14px;
      border-radius: 12px;
      font-weight: 800;
      font-size: 14px;
      text-decoration:none;
      border: 1px solid transparent;
      cursor:pointer;
      transition: .2s ease;
      white-space: nowrap;
    }

    .btn-primary{
      background: linear-gradient(135deg, #00d4aa, #a855f7);
      color: #020617;
    }
    .btn-primary:hover{
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(0,0,0,.25);
    }

    .btn-secondary{
      background: rgba(255,255,255,.06);
      border-color: rgba(255,255,255,.18);
      color: rgba(226,232,240,.95);
    }
    .btn-secondary:hover{
      background: rgba(255,255,255,.12);
      transform: translateY(-2px);
    }

    /* errors */
    .form-error-message, .invalid-feedback, .form-error, ul li{
      color: #ffb4c5;
      font-size: 13px;
    }
    ul{ padding-left: 18px; margin: 6px 0 0; }
  </style>
</head>

<body>
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
        // line 144
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_categorie_index");
        yield "\">categorie</a>
      <a href=\"";
        // line 145
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_activite_index");
        yield "\" class=\"active\">Activité</a>
      <a href=\"";
        // line 146
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_index");
        yield "\">Objectif</a>
      <a href=\"";
        // line 147
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_depense_index");
        yield "\">depense</a>
      <a href=\"";
        // line 148
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_aliment_index");
        yield "\">Alimentation</a>
      <a href=\"";
        // line 149
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_front_index");
        yield "\">apprentissage</a>
      <a href=\"";
        // line 150
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_energie_index");
        yield "\">Énergie</a>
      <a href=\"";
        // line 151
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_recommandation_index");
        yield "\">Recommandation</a>
    </div>

    <a href=\"";
        // line 154
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"nav-link\">
      <i class=\"fa-solid fa-right-from-bracket\"></i> Déconnexion
    </a>
  </nav>

  <!-- ✅ MAIN -->
  <main class=\"hero\">
    <div class=\"glow\"></div>

    <h1 class=\"hero-title\">New <span>Activité</span></h1>
    <p class=\"hero-description\">Create a new activity record.</p>

    <div class=\"glass-card\">

      <div class=\"form-head\">
        <div>
          <h3>Create activity</h3>
          <p>Fill type, duration, calories, date and intensity</p>
        </div>
        <a class=\"btn btn-secondary\" href=\"";
        // line 173
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_activite_index");
        yield "\">
          <i class=\"fa-solid fa-arrow-left\"></i> Back
        </a>
      </div>

      ";
        // line 178
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
      ";
        // line 179
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), 'errors');
        yield "

      <div class=\"grid2\">
        <div>
          <label class=\"form-label\">";
        // line 183
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "type", [], "any", false, false, false, 183), 'label');
        yield "</label>
          ";
        // line 184
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "type", [], "any", false, false, false, 184), 'widget');
        yield "
          ";
        // line 185
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "type", [], "any", false, false, false, 185), 'errors');
        yield "
        </div>

        <div>
          <label class=\"form-label\">";
        // line 189
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 189, $this->source); })()), "duree", [], "any", false, false, false, 189), 'label');
        yield "</label>
          ";
        // line 190
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "duree", [], "any", false, false, false, 190), 'widget');
        yield "
          ";
        // line 191
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "duree", [], "any", false, false, false, 191), 'errors');
        yield "
        </div>

        <div>
          <label class=\"form-label\">";
        // line 195
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "caloriesBrulees", [], "any", false, false, false, 195), 'label');
        yield "</label>
          ";
        // line 196
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "caloriesBrulees", [], "any", false, false, false, 196), 'widget');
        yield "
          ";
        // line 197
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), "caloriesBrulees", [], "any", false, false, false, 197), 'errors');
        yield "
        </div>

        <div>
          <label class=\"form-label\">";
        // line 201
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), "date", [], "any", false, false, false, 201), 'label');
        yield "</label>
          ";
        // line 202
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "date", [], "any", false, false, false, 202), 'widget');
        yield "
          ";
        // line 203
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "date", [], "any", false, false, false, 203), 'errors');
        yield "
        </div>
      </div>

      <div style=\"margin-top:8px;\">
        <label class=\"form-label\">";
        // line 208
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 208, $this->source); })()), "intensite", [], "any", false, false, false, 208), 'label');
        yield "</label>
        ";
        // line 209
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 209, $this->source); })()), "intensite", [], "any", false, false, false, 209), 'widget');
        yield "
        ";
        // line 210
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 210, $this->source); })()), "intensite", [], "any", false, false, false, 210), 'errors');
        yield "
      </div>

      <div style=\"margin-top:8px;\">
        <label class=\"form-label\">";
        // line 214
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 214, $this->source); })()), "objectif", [], "any", false, false, false, 214), 'label');
        yield "</label>
        ";
        // line 215
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 215, $this->source); })()), "objectif", [], "any", false, false, false, 215), 'widget');
        yield "
        ";
        // line 216
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), "objectif", [], "any", false, false, false, 216), 'errors');
        yield "
      </div>

      <div class=\"actions\">
        <button type=\"submit\" class=\"btn btn-primary\">
          <i class=\"fa-solid fa-plus\"></i> Create
        </button>

        <a href=\"";
        // line 224
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_activite_index");
        yield "\" class=\"btn btn-secondary\">
          Cancel
        </a>
      </div>

      ";
        // line 229
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 229, $this->source); })()), 'form_end');
        yield "

    </div>
  </main>
</div>
</body>
</html>
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
        return "front/activite/new.html.twig";
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
        return array (  374 => 229,  366 => 224,  355 => 216,  351 => 215,  347 => 214,  340 => 210,  336 => 209,  332 => 208,  324 => 203,  320 => 202,  316 => 201,  309 => 197,  305 => 196,  301 => 195,  294 => 191,  290 => 190,  286 => 189,  279 => 185,  275 => 184,  271 => 183,  264 => 179,  260 => 178,  252 => 173,  230 => 154,  224 => 151,  220 => 150,  216 => 149,  212 => 148,  208 => 147,  204 => 146,  200 => 145,  196 => 144,  58 => 9,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>New Activité - AIVA</title>

  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"{{ asset('css/stylefront.css') }}\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">

  <style>
    *, *::before, *::after { box-sizing: border-box; }

    /* ✅ Fix overflow for inputs */
    input, select, textarea{
      width: 100%;
      max-width: 100%;
      padding: 10px 12px;
      border-radius: 12px;
      border: 1px solid rgba(255,255,255,.15);
      background: rgba(0,0,0,.18);
      color: inherit;
      outline: none;
      font-size: 14px;
    }
    textarea{ min-height: 110px; resize: vertical; }

    input:focus, select:focus, textarea:focus{
      border-color: #00d4aa;
      box-shadow: 0 0 0 3px rgba(0,212,170,.25);
    }

    /* ✅ glass card */
    .glass-card{
      width: min(900px, 95%);
      margin: 18px auto 0;
      padding: 20px;
      border-radius: 18px;
      background: linear-gradient(135deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
      border: 1px solid rgba(255,255,255,.12);
      backdrop-filter: blur(10px);
    }

    .form-head{
      display:flex;
      justify-content:space-between;
      align-items:flex-start;
      gap:12px;
      flex-wrap:wrap;
      margin-bottom: 14px;
    }
    .form-head h3{ margin:0; font-size:18px; font-weight:800; }
    .form-head p{ margin:6px 0 0; opacity:.75; font-size:13px; }

    .grid2{
      display:grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 14px;
    }
    @media(max-width: 820px){
      .grid2{ grid-template-columns: 1fr; }
    }

    .form-label{
      display:block;
      margin: 12px 0 6px;
      font-size: 13px;
      opacity: .8;
    }

    .actions{
      margin-top: 18px;
      display:flex;
      justify-content:flex-end;
      gap:10px;
      flex-wrap:wrap;
    }

    .btn{
      display:inline-flex;
      align-items:center;
      gap:8px;
      padding: 10px 14px;
      border-radius: 12px;
      font-weight: 800;
      font-size: 14px;
      text-decoration:none;
      border: 1px solid transparent;
      cursor:pointer;
      transition: .2s ease;
      white-space: nowrap;
    }

    .btn-primary{
      background: linear-gradient(135deg, #00d4aa, #a855f7);
      color: #020617;
    }
    .btn-primary:hover{
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(0,0,0,.25);
    }

    .btn-secondary{
      background: rgba(255,255,255,.06);
      border-color: rgba(255,255,255,.18);
      color: rgba(226,232,240,.95);
    }
    .btn-secondary:hover{
      background: rgba(255,255,255,.12);
      transform: translateY(-2px);
    }

    /* errors */
    .form-error-message, .invalid-feedback, .form-error, ul li{
      color: #ffb4c5;
      font-size: 13px;
    }
    ul{ padding-left: 18px; margin: 6px 0 0; }
  </style>
</head>

<body>
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
      <a href=\"{{ path('front_activite_index') }}\" class=\"active\">Activité</a>
      <a href=\"{{ path('front_objectif_index') }}\">Objectif</a>
      <a href=\"{{ path('front_depense_index') }}\">depense</a>
      <a href=\"{{ path('front_aliment_index') }}\">Alimentation</a>
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

    <h1 class=\"hero-title\">New <span>Activité</span></h1>
    <p class=\"hero-description\">Create a new activity record.</p>

    <div class=\"glass-card\">

      <div class=\"form-head\">
        <div>
          <h3>Create activity</h3>
          <p>Fill type, duration, calories, date and intensity</p>
        </div>
        <a class=\"btn btn-secondary\" href=\"{{ path('front_activite_index') }}\">
          <i class=\"fa-solid fa-arrow-left\"></i> Back
        </a>
      </div>

      {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
      {{ form_errors(form) }}

      <div class=\"grid2\">
        <div>
          <label class=\"form-label\">{{ form_label(form.type) }}</label>
          {{ form_widget(form.type) }}
          {{ form_errors(form.type) }}
        </div>

        <div>
          <label class=\"form-label\">{{ form_label(form.duree) }}</label>
          {{ form_widget(form.duree) }}
          {{ form_errors(form.duree) }}
        </div>

        <div>
          <label class=\"form-label\">{{ form_label(form.caloriesBrulees) }}</label>
          {{ form_widget(form.caloriesBrulees) }}
          {{ form_errors(form.caloriesBrulees) }}
        </div>

        <div>
          <label class=\"form-label\">{{ form_label(form.date) }}</label>
          {{ form_widget(form.date) }}
          {{ form_errors(form.date) }}
        </div>
      </div>

      <div style=\"margin-top:8px;\">
        <label class=\"form-label\">{{ form_label(form.intensite) }}</label>
        {{ form_widget(form.intensite) }}
        {{ form_errors(form.intensite) }}
      </div>

      <div style=\"margin-top:8px;\">
        <label class=\"form-label\">{{ form_label(form.objectif) }}</label>
        {{ form_widget(form.objectif) }}
        {{ form_errors(form.objectif) }}
      </div>

      <div class=\"actions\">
        <button type=\"submit\" class=\"btn btn-primary\">
          <i class=\"fa-solid fa-plus\"></i> Create
        </button>

        <a href=\"{{ path('front_activite_index') }}\" class=\"btn btn-secondary\">
          Cancel
        </a>
      </div>

      {{ form_end(form) }}

    </div>
  </main>
</div>
</body>
</html>
", "front/activite/new.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\front\\activite\\new.html.twig");
    }
}
