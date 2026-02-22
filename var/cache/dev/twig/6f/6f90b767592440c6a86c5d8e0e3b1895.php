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

/* coursFRONT/edit.html.twig */
class __TwigTemplate_e448cea49689adf50fffd78ff6895def extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coursFRONT/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coursFRONT/edit.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Modifier un cours - AIVA</title>

  <!-- Fonts + Icons -->
  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">

  <!-- Main CSS -->
  <link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/stylefront.css"), "html", null, true);
        yield "\">

  <!-- ✅ CSS ajouté مباشرة في نفس الصفحة -->
  <style>
    /* ✅ FIX INPUT OVERFLOW */
    *,
    *::before,
    *::after {
      box-sizing: border-box;
    }

    /* ✅ FORM INPUTS STYLE */
    input,
    textarea,
    select {
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

    input:focus,
    textarea:focus,
    select:focus {
      border-color: #00d4aa;
      box-shadow: 0 0 0 3px rgba(0,212,170,.25);
    }

    textarea {
      resize: vertical;
    }

    /* ✅ GLASS CARD */
    .glass-card {
      max-width: 900px;
      margin: 25px auto 0;
      padding: 20px;
      border-radius: 18px;
      background: linear-gradient(135deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
      border: 1px solid rgba(255,255,255,.12);
      backdrop-filter: blur(10px);
    }

    /* LABELS */
    .form-label {
      font-size: 13px;
      opacity: .85;
      margin-bottom: 6px;
      display: block;
    }

    /* GRID */
    .grid-fields {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 14px;
      margin-top: 12px;
    }

    /* ACTION BUTTONS */
    .actions {
      margin-top: 18px;
      display: flex;
      justify-content: flex-end;
      gap: 10px;
      flex-wrap: wrap;
    }

    .btn-custom {
      padding: 10px 16px;
      border-radius: 12px;
      font-size: 14px;
      font-weight: 600;
      border: none;
      cursor: pointer;
      transition: 0.25s;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }

    .btn-cancel {
      background: rgba(255,255,255,.06);
      border: 1px solid rgba(255,255,255,.18);
      color: white;
    }

    .btn-cancel:hover {
      background: rgba(255,255,255,.12);
    }

    .btn-save {
      background: linear-gradient(135deg, #00d4aa, #a855f7);
      color: #020617;
    }

    .btn-save:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(0,212,170,.25);
    }
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
        // line 145
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_categorie_index");
        yield "\">Categorie</a>
      <a href=\"";
        // line 146
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_activite_index");
        yield "\">Activité</a>
      <a href=\"";
        // line 147
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_index");
        yield "\">Objectif</a>
      <a href=\"";
        // line 148
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_depense_index");
        yield "\">Dépense</a>
      <a href=\"";
        // line 149
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_aliment_index");
        yield "\">Alimentation</a>
      <a href=\"";
        // line 150
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_front_index");
        yield "\" class=\"active\">Apprentissage</a>
      <a href=\"";
        // line 151
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_energie_index");
        yield "\">Énergie</a>
      <a href=\"";
        // line 152
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_recommandation_index");
        yield "\">Recommandations</a>
    </div>

    <a href=\"";
        // line 155
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"nav-link\">
      <i class=\"fa-solid fa-right-from-bracket\"></i> Déconnexion
    </a>
  </nav>

  <!-- ✅ MAIN -->
  <main class=\"hero\">
    <div class=\"glow\"></div>

    <h1 class=\"hero-title\">✏️ Modifier le cours</h1>
    <p class=\"hero-description\">
      Mettre à jour les informations de votre cours facilement.
    </p>

    <!-- ✅ FORM CARD -->
    <div class=\"glass-card\">

      <!-- Header -->
      <div style=\"display:flex;justify-content:space-between;gap:12px;flex-wrap:wrap;\">
        <div>
          <h2 style=\"margin:0;font-size:18px;font-weight:700;\">
            ";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 176, $this->source); })()), "tittre", [], "any", false, false, false, 176), "html", null, true);
        yield "
          </h2>
          <a href=\"";
        // line 178
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_front_index");
        yield "\"
             style=\"font-size:13px;opacity:.75;text-decoration:none;\">
            ← Retour à mes cours
          </a>
        </div>

        <span style=\"
          padding:6px 12px;
          border-radius:999px;
          font-size:12px;
          font-weight:700;
          border:1px solid rgba(255,255,255,.18);
          background: rgba(255,255,255,.06);
        \">
          ";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 192, $this->source); })()), "status", [], "any", false, false, false, 192), "html", null, true);
        yield "
        </span>
      </div>

      <!-- Symfony Form -->
      ";
        // line 197
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), 'form_start');
        yield "
      ";
        // line 198
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), 'errors');
        yield "

      <div style=\"margin-top:16px;display:grid;gap:14px;\">

        <div>
          <label class=\"form-label\">";
        // line 203
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "tittre", [], "any", false, false, false, 203), 'label');
        yield "</label>
          ";
        // line 204
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 204, $this->source); })()), "tittre", [], "any", false, false, false, 204), 'widget');
        yield "
        </div>

        <div>
          <label class=\"form-label\">";
        // line 208
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 208, $this->source); })()), "description", [], "any", false, false, false, 208), 'label');
        yield "</label>
          ";
        // line 209
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 209, $this->source); })()), "description", [], "any", false, false, false, 209), 'widget');
        yield "
        </div>

        <div class=\"grid-fields\">

          <div>
            <label class=\"form-label\">";
        // line 215
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 215, $this->source); })()), "niveau", [], "any", false, false, false, 215), 'label');
        yield "</label>
            ";
        // line 216
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), "niveau", [], "any", false, false, false, 216), 'widget');
        yield "
          </div>

          <div>
            <label class=\"form-label\">";
        // line 220
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 220, $this->source); })()), "dureeEstimee", [], "any", false, false, false, 220), 'label');
        yield "</label>
            ";
        // line 221
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 221, $this->source); })()), "dureeEstimee", [], "any", false, false, false, 221), 'widget');
        yield "
          </div>

          <div>
            <label class=\"form-label\">";
        // line 225
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 225, $this->source); })()), "categorie", [], "any", false, false, false, 225), 'label');
        yield "</label>
            ";
        // line 226
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 226, $this->source); })()), "categorie", [], "any", false, false, false, 226), 'widget');
        yield "
          </div>

          <div>
            <label class=\"form-label\">";
        // line 230
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 230, $this->source); })()), "dateCreation", [], "any", false, false, false, 230), 'label');
        yield "</label>
            ";
        // line 231
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 231, $this->source); })()), "dateCreation", [], "any", false, false, false, 231), 'widget');
        yield "
          </div>

          <div>
            <label class=\"form-label\">";
        // line 235
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 235, $this->source); })()), "status", [], "any", false, false, false, 235), 'label');
        yield "</label>
            ";
        // line 236
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 236, $this->source); })()), "status", [], "any", false, false, false, 236), 'widget');
        yield "
          </div>

        </div>
      </div>

      <!-- Actions -->
      <div class=\"actions\">
        <a href=\"";
        // line 244
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_front_index");
        yield "\" class=\"btn-custom btn-cancel\">
          Annuler
        </a>

        <button type=\"submit\" class=\"btn-custom btn-save\">
          <i class=\"fa-solid fa-floppy-disk\"></i> Sauvegarder
        </button>
      </div>

      ";
        // line 253
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 253, $this->source); })()), 'form_end');
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
        return "coursFRONT/edit.html.twig";
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
        return array (  391 => 253,  379 => 244,  368 => 236,  364 => 235,  357 => 231,  353 => 230,  346 => 226,  342 => 225,  335 => 221,  331 => 220,  324 => 216,  320 => 215,  311 => 209,  307 => 208,  300 => 204,  296 => 203,  288 => 198,  284 => 197,  276 => 192,  259 => 178,  254 => 176,  230 => 155,  224 => 152,  220 => 151,  216 => 150,  212 => 149,  208 => 148,  204 => 147,  200 => 146,  196 => 145,  62 => 14,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/coursFRONT/edit.html.twig #}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Modifier un cours - AIVA</title>

  <!-- Fonts + Icons -->
  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">

  <!-- Main CSS -->
  <link rel=\"stylesheet\" href=\"{{ asset('css/stylefront.css') }}\">

  <!-- ✅ CSS ajouté مباشرة في نفس الصفحة -->
  <style>
    /* ✅ FIX INPUT OVERFLOW */
    *,
    *::before,
    *::after {
      box-sizing: border-box;
    }

    /* ✅ FORM INPUTS STYLE */
    input,
    textarea,
    select {
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

    input:focus,
    textarea:focus,
    select:focus {
      border-color: #00d4aa;
      box-shadow: 0 0 0 3px rgba(0,212,170,.25);
    }

    textarea {
      resize: vertical;
    }

    /* ✅ GLASS CARD */
    .glass-card {
      max-width: 900px;
      margin: 25px auto 0;
      padding: 20px;
      border-radius: 18px;
      background: linear-gradient(135deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
      border: 1px solid rgba(255,255,255,.12);
      backdrop-filter: blur(10px);
    }

    /* LABELS */
    .form-label {
      font-size: 13px;
      opacity: .85;
      margin-bottom: 6px;
      display: block;
    }

    /* GRID */
    .grid-fields {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 14px;
      margin-top: 12px;
    }

    /* ACTION BUTTONS */
    .actions {
      margin-top: 18px;
      display: flex;
      justify-content: flex-end;
      gap: 10px;
      flex-wrap: wrap;
    }

    .btn-custom {
      padding: 10px 16px;
      border-radius: 12px;
      font-size: 14px;
      font-weight: 600;
      border: none;
      cursor: pointer;
      transition: 0.25s;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }

    .btn-cancel {
      background: rgba(255,255,255,.06);
      border: 1px solid rgba(255,255,255,.18);
      color: white;
    }

    .btn-cancel:hover {
      background: rgba(255,255,255,.12);
    }

    .btn-save {
      background: linear-gradient(135deg, #00d4aa, #a855f7);
      color: #020617;
    }

    .btn-save:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(0,212,170,.25);
    }
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
      <a href=\"{{ path('front_categorie_index') }}\">Categorie</a>
      <a href=\"{{ path('front_activite_index') }}\">Activité</a>
      <a href=\"{{ path('front_objectif_index') }}\">Objectif</a>
      <a href=\"{{ path('front_depense_index') }}\">Dépense</a>
      <a href=\"{{ path('front_aliment_index') }}\">Alimentation</a>
      <a href=\"{{ path('cours_front_index') }}\" class=\"active\">Apprentissage</a>
      <a href=\"{{ path('front_energie_index') }}\">Énergie</a>
      <a href=\"{{ path('front_recommandation_index') }}\">Recommandations</a>
    </div>

    <a href=\"{{ path('app_logout') }}\" class=\"nav-link\">
      <i class=\"fa-solid fa-right-from-bracket\"></i> Déconnexion
    </a>
  </nav>

  <!-- ✅ MAIN -->
  <main class=\"hero\">
    <div class=\"glow\"></div>

    <h1 class=\"hero-title\">✏️ Modifier le cours</h1>
    <p class=\"hero-description\">
      Mettre à jour les informations de votre cours facilement.
    </p>

    <!-- ✅ FORM CARD -->
    <div class=\"glass-card\">

      <!-- Header -->
      <div style=\"display:flex;justify-content:space-between;gap:12px;flex-wrap:wrap;\">
        <div>
          <h2 style=\"margin:0;font-size:18px;font-weight:700;\">
            {{ cours.tittre }}
          </h2>
          <a href=\"{{ path('cours_front_index') }}\"
             style=\"font-size:13px;opacity:.75;text-decoration:none;\">
            ← Retour à mes cours
          </a>
        </div>

        <span style=\"
          padding:6px 12px;
          border-radius:999px;
          font-size:12px;
          font-weight:700;
          border:1px solid rgba(255,255,255,.18);
          background: rgba(255,255,255,.06);
        \">
          {{ cours.status }}
        </span>
      </div>

      <!-- Symfony Form -->
      {{ form_start(form) }}
      {{ form_errors(form) }}

      <div style=\"margin-top:16px;display:grid;gap:14px;\">

        <div>
          <label class=\"form-label\">{{ form_label(form.tittre) }}</label>
          {{ form_widget(form.tittre) }}
        </div>

        <div>
          <label class=\"form-label\">{{ form_label(form.description) }}</label>
          {{ form_widget(form.description) }}
        </div>

        <div class=\"grid-fields\">

          <div>
            <label class=\"form-label\">{{ form_label(form.niveau) }}</label>
            {{ form_widget(form.niveau) }}
          </div>

          <div>
            <label class=\"form-label\">{{ form_label(form.dureeEstimee) }}</label>
            {{ form_widget(form.dureeEstimee) }}
          </div>

          <div>
            <label class=\"form-label\">{{ form_label(form.categorie) }}</label>
            {{ form_widget(form.categorie) }}
          </div>

          <div>
            <label class=\"form-label\">{{ form_label(form.dateCreation) }}</label>
            {{ form_widget(form.dateCreation) }}
          </div>

          <div>
            <label class=\"form-label\">{{ form_label(form.status) }}</label>
            {{ form_widget(form.status) }}
          </div>

        </div>
      </div>

      <!-- Actions -->
      <div class=\"actions\">
        <a href=\"{{ path('cours_front_index') }}\" class=\"btn-custom btn-cancel\">
          Annuler
        </a>

        <button type=\"submit\" class=\"btn-custom btn-save\">
          <i class=\"fa-solid fa-floppy-disk\"></i> Sauvegarder
        </button>
      </div>

      {{ form_end(form) }}
    </div>

  </main>
</div>

</body>
</html>
", "coursFRONT/edit.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\coursFRONT\\edit.html.twig");
    }
}
