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

/* front/repas/new.html.twig */
class __TwigTemplate_2ee1efba0e838ad4c9134e2fc036f5ac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/repas/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/repas/new.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
  <title>Add Meal - AIVA</title>

  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/stylefront.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">

  <style>
    *, *::before, *::after { box-sizing: border-box; }
    input, select, textarea {
      width: 100%; max-width: 100%;
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
    textarea { min-height: 110px; resize: vertical; }

    .glass-card{
      max-width: 900px;
      margin: 22px auto 0;
      padding: 18px;
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
      margin-top: 16px;
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
      font-weight: 700;
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
    .btn-secondary:hover{ background: rgba(255,255,255,.12); }

    .form-error-message, .invalid-feedback, .form-error, ul li{
      color: #ffb4c5;
      font-size: 13px;
    }
    ul{ padding-left: 18px; margin: 6px 0 0; }
  </style>
</head>

<body>
<div class=\"container\">

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
        // line 135
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_categorie_index");
        yield "\">categorie</a>
      <a href=\"";
        // line 136
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_activite_index");
        yield "\">Activité</a>
      <a href=\"";
        // line 137
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_index");
        yield "\">Objectif</a>
      <a href=\"";
        // line 138
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_depense_index");
        yield "\">depense</a>
      <a href=\"";
        // line 139
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_aliment_index");
        yield "\">Alimentation</a>
      <a href=\"";
        // line 140
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_front_index");
        yield "\">apprentissage</a>
      <a href=\"";
        // line 141
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_energie_index");
        yield "\">Énergie</a>
      <a href=\"";
        // line 142
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_recommandation_index");
        yield "\">Recommandation</a>
    </div>

    <a href=\"";
        // line 145
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"nav-link\">
      <i class=\"fa-solid fa-right-from-bracket\"></i> Déconnexion
    </a>
  </nav>

  <main class=\"hero\">
    <div class=\"glow\"></div>

    <h1 class=\"hero-title\">➕ Add Meal</h1>
    <p class=\"hero-description\">Create a new meal and track your calories.</p>

    <div class=\"glass-card\">
      <div class=\"form-head\">
        <div>
          <h3>New meal</h3>
          <p>Fill the information then save</p>
        </div>
        <a class=\"btn btn-secondary\" href=\"";
        // line 162
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_repas_index");
        yield "\">
          <i class=\"fa-solid fa-arrow-left\"></i> Back
        </a>
      </div>

      ";
        // line 167
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), 'form_start', ["attr" => ["class" => "input-form"]]);
        yield "
        ";
        // line 168
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), 'errors');
        yield "

        <div class=\"grid2\">
          <div>
            <label class=\"form-label\">Meal Type</label>
            ";
        // line 173
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "type", [], "any", false, false, false, 173), 'widget');
        yield "
            ";
        // line 174
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "type", [], "any", false, false, false, 174), 'errors');
        yield "
          </div>

          <div>
            <label class=\"form-label\">Meal Name</label>
            ";
        // line 179
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "nom", [], "any", false, false, false, 179), 'widget');
        yield "
            ";
        // line 180
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "nom", [], "any", false, false, false, 180), 'errors');
        yield "
          </div>

          ";
        // line 184
        yield "          <div>
            <label class=\"form-label\">Date</label>
            ";
        // line 186
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "date", [], "any", false, false, false, 186), 'widget');
        yield "
            ";
        // line 187
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "date", [], "any", false, false, false, 187), 'errors');
        yield "
          </div>

          <div>
            <label class=\"form-label\">Time</label>
            ";
        // line 192
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "heure", [], "any", false, false, false, 192), 'widget');
        yield "
            ";
        // line 193
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "heure", [], "any", false, false, false, 193), 'errors');
        yield "
          </div>

          <div>
            <label class=\"form-label\">Calories</label>
            ";
        // line 198
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "calories", [], "any", false, false, false, 198), 'widget');
        yield "
            ";
        // line 199
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 199, $this->source); })()), "calories", [], "any", false, false, false, 199), 'errors');
        yield "
          </div>
        </div>

        <div style=\"margin-top:8px;\">
          <label class=\"form-label\">Notes</label>
          ";
        // line 205
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), "description", [], "any", false, false, false, 205), 'widget');
        yield "
          ";
        // line 206
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), "description", [], "any", false, false, false, 206), 'errors');
        yield "
        </div>

        <div style=\"margin-top:8px;\">
          <label class=\"form-label\">Foods</label>
          ";
        // line 211
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 211, $this->source); })()), "aliments", [], "any", false, false, false, 211), 'widget');
        yield "
          ";
        // line 212
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 212, $this->source); })()), "aliments", [], "any", false, false, false, 212), 'errors');
        yield "
        </div>

        <div class=\"actions\">
          <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"fa-solid fa-floppy-disk\"></i> Save
          </button>
          <a href=\"";
        // line 219
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_repas_index");
        yield "\" class=\"btn btn-secondary\">
            Cancel
          </a>
        </div>

      ";
        // line 224
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 224, $this->source); })()), 'form_end');
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
        return "front/repas/new.html.twig";
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
        return array (  357 => 224,  349 => 219,  339 => 212,  335 => 211,  327 => 206,  323 => 205,  314 => 199,  310 => 198,  302 => 193,  298 => 192,  290 => 187,  286 => 186,  282 => 184,  276 => 180,  272 => 179,  264 => 174,  260 => 173,  252 => 168,  248 => 167,  240 => 162,  220 => 145,  214 => 142,  210 => 141,  206 => 140,  202 => 139,  198 => 138,  194 => 137,  190 => 136,  186 => 135,  58 => 10,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/repasFRONT/new.html.twig #}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
  <title>Add Meal - AIVA</title>

  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"{{ asset('css/stylefront.css') }}\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">

  <style>
    *, *::before, *::after { box-sizing: border-box; }
    input, select, textarea {
      width: 100%; max-width: 100%;
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
    textarea { min-height: 110px; resize: vertical; }

    .glass-card{
      max-width: 900px;
      margin: 22px auto 0;
      padding: 18px;
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
      margin-top: 16px;
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
      font-weight: 700;
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
    .btn-secondary:hover{ background: rgba(255,255,255,.12); }

    .form-error-message, .invalid-feedback, .form-error, ul li{
      color: #ffb4c5;
      font-size: 13px;
    }
    ul{ padding-left: 18px; margin: 6px 0 0; }
  </style>
</head>

<body>
<div class=\"container\">

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
      <a href=\"{{ path('front_aliment_index') }}\">Alimentation</a>
      <a href=\"{{ path('cours_front_index') }}\">apprentissage</a>
      <a href=\"{{ path('front_energie_index') }}\">Énergie</a>
      <a href=\"{{ path('front_recommandation_index') }}\">Recommandation</a>
    </div>

    <a href=\"{{ path('app_logout') }}\" class=\"nav-link\">
      <i class=\"fa-solid fa-right-from-bracket\"></i> Déconnexion
    </a>
  </nav>

  <main class=\"hero\">
    <div class=\"glow\"></div>

    <h1 class=\"hero-title\">➕ Add Meal</h1>
    <p class=\"hero-description\">Create a new meal and track your calories.</p>

    <div class=\"glass-card\">
      <div class=\"form-head\">
        <div>
          <h3>New meal</h3>
          <p>Fill the information then save</p>
        </div>
        <a class=\"btn btn-secondary\" href=\"{{ path('front_repas_index') }}\">
          <i class=\"fa-solid fa-arrow-left\"></i> Back
        </a>
      </div>

      {{ form_start(form, {'attr': {'class': 'input-form'}}) }}
        {{ form_errors(form) }}

        <div class=\"grid2\">
          <div>
            <label class=\"form-label\">Meal Type</label>
            {{ form_widget(form.type) }}
            {{ form_errors(form.type) }}
          </div>

          <div>
            <label class=\"form-label\">Meal Name</label>
            {{ form_widget(form.nom) }}
            {{ form_errors(form.nom) }}
          </div>

          {# ✅ NEW: Date #}
          <div>
            <label class=\"form-label\">Date</label>
            {{ form_widget(form.date) }}
            {{ form_errors(form.date) }}
          </div>

          <div>
            <label class=\"form-label\">Time</label>
            {{ form_widget(form.heure) }}
            {{ form_errors(form.heure) }}
          </div>

          <div>
            <label class=\"form-label\">Calories</label>
            {{ form_widget(form.calories) }}
            {{ form_errors(form.calories) }}
          </div>
        </div>

        <div style=\"margin-top:8px;\">
          <label class=\"form-label\">Notes</label>
          {{ form_widget(form.description) }}
          {{ form_errors(form.description) }}
        </div>

        <div style=\"margin-top:8px;\">
          <label class=\"form-label\">Foods</label>
          {{ form_widget(form.aliments) }}
          {{ form_errors(form.aliments) }}
        </div>

        <div class=\"actions\">
          <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"fa-solid fa-floppy-disk\"></i> Save
          </button>
          <a href=\"{{ path('front_repas_index') }}\" class=\"btn btn-secondary\">
            Cancel
          </a>
        </div>

      {{ form_end(form) }}
    </div>

  </main>
</div>
</body>
</html>
", "front/repas/new.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\front\\repas\\new.html.twig");
    }
}
