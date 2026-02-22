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

/* front/aliment/new.html.twig */
class __TwigTemplate_48917ffa0f4a18c4b0f1199cbfe2ea1c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/aliment/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/aliment/new.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
  <title>Add Food - AIVA</title>

  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/stylefront.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">

  <!-- ✅ CSS داخل نفس الصفحة (نفس theme Recommandations) -->
  <style>
    /* ✅ FIX OVERFLOW */
    *, *::before, *::after { box-sizing: border-box; }

    /* inputs */
    input, select, textarea {
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
    input:focus, select:focus, textarea:focus {
      border-color: #00d4aa;
      box-shadow: 0 0 0 3px rgba(0,212,170,.25);
    }
    textarea { resize: vertical; }

    /* ✅ glass card */
    .glass-card {
      max-width: 900px;
      margin: 22px auto 0;
      padding: 18px;
      border-radius: 18px;
      background: linear-gradient(135deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
      border: 1px solid rgba(255,255,255,.12);
      backdrop-filter: blur(10px);
    }

    /* labels */
    .form-label {
      display: block;
      margin: 12px 0 6px;
      font-size: 13px;
      opacity: .8;
    }

    /* macro grid */
    .macro-grid {
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 12px;
      margin-top: 10px;
    }
    @media (max-width: 820px) {
      .macro-grid { grid-template-columns: 1fr; }
    }

    /* buttons row */
    .actions {
      margin-top: 16px;
      display: flex;
      justify-content: flex-end;
      gap: 10px;
      flex-wrap: wrap;
    }

    .btn-custom {
      padding: 10px 16px;
      border-radius: 12px;
      font-size: 14px;
      font-weight: 700;
      border: none;
      cursor: pointer;
      transition: .25s;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      white-space: nowrap;
    }

    .btn-secondary {
      background: rgba(255,255,255,.06);
      border: 1px solid rgba(255,255,255,.18);
      color: rgba(226,232,240,.95);
    }
    .btn-secondary:hover { background: rgba(255,255,255,.12); }

    .btn-primary {
      background: linear-gradient(135deg, #00d4aa, #a855f7);
      color: #020617;
    }
    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(0,0,0,.25);
    }

    /* Symfony errors */
    .form-error-message, .invalid-feedback, .form-error, .error, ul li {
      color: #ffb4c5;
      font-size: 13px;
    }
    ul { padding-left: 18px; margin: 6px 0 0; }
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
        // line 136
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_categorie_index");
        yield "\">categorie</a>
      <a href=\"";
        // line 137
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_activite_index");
        yield "\">Activité</a>
      <a href=\"";
        // line 138
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_index");
        yield "\">Objectif</a>
      <a href=\"";
        // line 139
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_depense_index");
        yield "\">depense</a>
      <a href=\"";
        // line 140
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_aliment_index");
        yield "\" class=\"active\">Alimentation</a>
      <a href=\"";
        // line 141
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_front_index");
        yield "\">apprentissage</a>
      <a href=\"";
        // line 142
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_energie_index");
        yield "\">Énergie</a>
      <a href=\"";
        // line 143
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_recommandation_index");
        yield "\">Recommandation</a>
    </div>

    <a href=\"";
        // line 146
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"nav-link\">
      <i class=\"fa-solid fa-right-from-bracket\"></i> Déconnexion
    </a>
  </nav>

  <!-- ✅ MAIN same hero/glow -->
  <main class=\"hero\">
    <div class=\"glow\"></div>

    <h1 class=\"hero-title\">🍎 Add Food</h1>
    <p class=\"hero-description\">Create a new aliment with quantity and macros.</p>

    <div class=\"glass-card\">
      <div style=\"display:flex;justify-content:space-between;align-items:flex-start;gap:12px;flex-wrap:wrap;\">
        <div>
          <div style=\"font-size:16px;font-weight:800;\">Nouveau aliment</div>
          <div style=\"font-size:13px;opacity:.75;margin-top:6px;\">
            Remplissez les informations puis sauvegardez.
          </div>
        </div>

        <a href=\"";
        // line 167
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_aliment_index");
        yield "\" class=\"btn-custom btn-secondary\">
          <i class=\"fa-solid fa-arrow-left\"></i> Back
        </a>
      </div>

      ";
        // line 172
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), 'form_start', ["attr" => ["class" => "input-form"]]);
        yield "
        ";
        // line 173
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), 'errors');
        yield "

        <label class=\"form-label\">Name</label>
        ";
        // line 176
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "nom", [], "any", false, false, false, 176), 'widget');
        yield "
        ";
        // line 177
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), "nom", [], "any", false, false, false, 177), 'errors');
        yield "

        <label class=\"form-label\">Quantity</label>
        ";
        // line 180
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "quantite", [], "any", false, false, false, 180), 'widget');
        yield "
        ";
        // line 181
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "quantite", [], "any", false, false, false, 181), 'errors');
        yield "

        <div class=\"macro-grid\">
          <div>
            <label class=\"form-label\">Proteine (g)</label>
            <input type=\"number\" step=\"0.1\" name=\"macro_proteine\" value=\"0\">
          </div>
          <div>
            <label class=\"form-label\">Glucide (g)</label>
            <input type=\"number\" step=\"0.1\" name=\"macro_glucide\" value=\"0\">
          </div>
          <div>
            <label class=\"form-label\">Lipide (g)</label>
            <input type=\"number\" step=\"0.1\" name=\"macro_lipide\" value=\"0\">
          </div>
        </div>

        <div class=\"actions\">
          <button type=\"submit\" class=\"btn-custom btn-primary\">
            <i class=\"fa-solid fa-floppy-disk\"></i> Save
          </button>
        </div>

      ";
        // line 204
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 204, $this->source); })()), 'form_end');
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
        return "front/aliment/new.html.twig";
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
        return array (  303 => 204,  277 => 181,  273 => 180,  267 => 177,  263 => 176,  257 => 173,  253 => 172,  245 => 167,  221 => 146,  215 => 143,  211 => 142,  207 => 141,  203 => 140,  199 => 139,  195 => 138,  191 => 137,  187 => 136,  58 => 10,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/alimentFRONT/new.html.twig (مثال) #}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
  <title>Add Food - AIVA</title>

  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"{{ asset('css/stylefront.css') }}\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">

  <!-- ✅ CSS داخل نفس الصفحة (نفس theme Recommandations) -->
  <style>
    /* ✅ FIX OVERFLOW */
    *, *::before, *::after { box-sizing: border-box; }

    /* inputs */
    input, select, textarea {
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
    input:focus, select:focus, textarea:focus {
      border-color: #00d4aa;
      box-shadow: 0 0 0 3px rgba(0,212,170,.25);
    }
    textarea { resize: vertical; }

    /* ✅ glass card */
    .glass-card {
      max-width: 900px;
      margin: 22px auto 0;
      padding: 18px;
      border-radius: 18px;
      background: linear-gradient(135deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
      border: 1px solid rgba(255,255,255,.12);
      backdrop-filter: blur(10px);
    }

    /* labels */
    .form-label {
      display: block;
      margin: 12px 0 6px;
      font-size: 13px;
      opacity: .8;
    }

    /* macro grid */
    .macro-grid {
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 12px;
      margin-top: 10px;
    }
    @media (max-width: 820px) {
      .macro-grid { grid-template-columns: 1fr; }
    }

    /* buttons row */
    .actions {
      margin-top: 16px;
      display: flex;
      justify-content: flex-end;
      gap: 10px;
      flex-wrap: wrap;
    }

    .btn-custom {
      padding: 10px 16px;
      border-radius: 12px;
      font-size: 14px;
      font-weight: 700;
      border: none;
      cursor: pointer;
      transition: .25s;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      white-space: nowrap;
    }

    .btn-secondary {
      background: rgba(255,255,255,.06);
      border: 1px solid rgba(255,255,255,.18);
      color: rgba(226,232,240,.95);
    }
    .btn-secondary:hover { background: rgba(255,255,255,.12); }

    .btn-primary {
      background: linear-gradient(135deg, #00d4aa, #a855f7);
      color: #020617;
    }
    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(0,0,0,.25);
    }

    /* Symfony errors */
    .form-error-message, .invalid-feedback, .form-error, .error, ul li {
      color: #ffb4c5;
      font-size: 13px;
    }
    ul { padding-left: 18px; margin: 6px 0 0; }
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

  <!-- ✅ MAIN same hero/glow -->
  <main class=\"hero\">
    <div class=\"glow\"></div>

    <h1 class=\"hero-title\">🍎 Add Food</h1>
    <p class=\"hero-description\">Create a new aliment with quantity and macros.</p>

    <div class=\"glass-card\">
      <div style=\"display:flex;justify-content:space-between;align-items:flex-start;gap:12px;flex-wrap:wrap;\">
        <div>
          <div style=\"font-size:16px;font-weight:800;\">Nouveau aliment</div>
          <div style=\"font-size:13px;opacity:.75;margin-top:6px;\">
            Remplissez les informations puis sauvegardez.
          </div>
        </div>

        <a href=\"{{ path('front_aliment_index') }}\" class=\"btn-custom btn-secondary\">
          <i class=\"fa-solid fa-arrow-left\"></i> Back
        </a>
      </div>

      {{ form_start(form, {'attr': {'class': 'input-form'}}) }}
        {{ form_errors(form) }}

        <label class=\"form-label\">Name</label>
        {{ form_widget(form.nom) }}
        {{ form_errors(form.nom) }}

        <label class=\"form-label\">Quantity</label>
        {{ form_widget(form.quantite) }}
        {{ form_errors(form.quantite) }}

        <div class=\"macro-grid\">
          <div>
            <label class=\"form-label\">Proteine (g)</label>
            <input type=\"number\" step=\"0.1\" name=\"macro_proteine\" value=\"0\">
          </div>
          <div>
            <label class=\"form-label\">Glucide (g)</label>
            <input type=\"number\" step=\"0.1\" name=\"macro_glucide\" value=\"0\">
          </div>
          <div>
            <label class=\"form-label\">Lipide (g)</label>
            <input type=\"number\" step=\"0.1\" name=\"macro_lipide\" value=\"0\">
          </div>
        </div>

        <div class=\"actions\">
          <button type=\"submit\" class=\"btn-custom btn-primary\">
            <i class=\"fa-solid fa-floppy-disk\"></i> Save
          </button>
        </div>

      {{ form_end(form) }}
    </div>

  </main>
</div>
</body>
</html>
", "front/aliment/new.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\front\\aliment\\new.html.twig");
    }
}
