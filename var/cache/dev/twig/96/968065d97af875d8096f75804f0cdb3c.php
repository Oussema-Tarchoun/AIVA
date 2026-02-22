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

/* front/activite/show.html.twig */
class __TwigTemplate_f582d1daa64241b7bc917adc10a0d8f1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/activite/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/activite/show.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Show Activité - AIVA</title>

  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/stylefront.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">

  <style>
    *, *::before, *::after { box-sizing: border-box; }

    /* Glass card */
    .detail-card{
      width: min(850px, 95%);
      margin: 18px auto 0;
      padding: 22px;
      border-radius: 18px;
      background: linear-gradient(135deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
      border: 1px solid rgba(255,255,255,.12);
      backdrop-filter: blur(10px);
    }

    .detail-row{
      display:flex;
      justify-content:space-between;
      padding: 10px 0;
      border-bottom: 1px solid rgba(255,255,255,.08);
      font-size: 14px;
    }

    .detail-row:last-child{
      border-bottom: none;
    }

    .detail-label{
      font-weight: 800;
      color: rgba(226,232,240,.85);
    }

    .detail-value{
      color: rgba(226,232,240,.95);
    }

    /* Actions buttons */
    .action-buttons{
      margin-top: 20px;
      display:flex;
      justify-content:center;
      gap:12px;
      flex-wrap:wrap;
    }

    .btn-secondary{
      display:inline-flex;
      align-items:center;
      gap:8px;
      padding: 10px 14px;
      border-radius: 12px;
      border: 1px solid rgba(255,255,255,.18);
      background: rgba(255,255,255,.06);
      color: rgba(226,232,240,.95);
      font-weight: 800;
      text-decoration:none;
      transition: .2s ease;
    }

    .btn-secondary:hover{
      background: rgba(255,255,255,.12);
      transform: translateY(-2px);
    }
  </style>
</head>

<body>
<div class=\"container\">

  <!-- ✅ NAVBAR COMPLETE -->
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
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_categorie_index");
        yield "\">categorie</a>
      <a href=\"";
        // line 99
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_activite_index");
        yield "\" class=\"active\">Activité</a>
      <a href=\"";
        // line 100
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_index");
        yield "\">Objectif</a>
      <a href=\"";
        // line 101
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_depense_index");
        yield "\">depense</a>
      <a href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_aliment_index");
        yield "\">Alimentation</a>
      <a href=\"";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_front_index");
        yield "\">apprentissage</a>
      <a href=\"";
        // line 104
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_energie_index");
        yield "\">Énergie</a>
      <a href=\"";
        // line 105
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_recommandation_index");
        yield "\">Recommandation</a>
    </div>

    <a href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"nav-link\">
      <i class=\"fa-solid fa-right-from-bracket\"></i> Déconnexion
    </a>
  </nav>

  <!-- ✅ MAIN -->
  <main class=\"hero\">
    <div class=\"glow\"></div>

    <h1 class=\"hero-title\">
      Activité <span>#";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 118, $this->source); })()), "id", [], "any", false, false, false, 118), "html", null, true);
        yield "</span>
    </h1>

    <!-- ✅ DETAILS CARD -->
    <div class=\"detail-card\">

      <div class=\"detail-row\">
        <span class=\"detail-label\">Type</span>
        <span class=\"detail-value\">";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 126, $this->source); })()), "type", [], "any", false, false, false, 126), "html", null, true);
        yield "</span>
      </div>

      <div class=\"detail-row\">
        <span class=\"detail-label\">Durée</span>
        <span class=\"detail-value\">";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 131, $this->source); })()), "duree", [], "any", false, false, false, 131), "html", null, true);
        yield " min</span>
      </div>

      <div class=\"detail-row\">
        <span class=\"detail-label\">Calories</span>
        <span class=\"detail-value\">";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 136, $this->source); })()), "caloriesBrulees", [], "any", false, false, false, 136), "html", null, true);
        yield "</span>
      </div>

      <div class=\"detail-row\">
        <span class=\"detail-label\">Date</span>
        <span class=\"detail-value\">
          ";
        // line 142
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 142, $this->source); })()), "date", [], "any", false, false, false, 142)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 142, $this->source); })()), "date", [], "any", false, false, false, 142), "Y-m-d"), "html", null, true)) : ("—"));
        yield "
        </span>
      </div>

      <div class=\"detail-row\">
        <span class=\"detail-label\">Intensité</span>
        <span class=\"detail-value\">";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 148, $this->source); })()), "intensite", [], "any", false, false, false, 148), "html", null, true);
        yield "</span>
      </div>

      <div class=\"detail-row\">
        <span class=\"detail-label\">Objectif</span>
        <span class=\"detail-value\">
          ";
        // line 154
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 154, $this->source); })()), "objectif", [], "any", false, false, false, 154)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 154, $this->source); })()), "objectif", [], "any", false, false, false, 154), "description", [], "any", false, false, false, 154), "html", null, true)) : ("—"));
        yield "
        </span>
      </div>

    </div>

    <!-- ✅ ACTIONS -->
    <div class=\"action-buttons\">
      <a href=\"";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_activite_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 162, $this->source); })()), "id", [], "any", false, false, false, 162)]), "html", null, true);
        yield "\" class=\"btn-secondary\">
        <i class=\"fa-solid fa-pen\"></i> Edit
      </a>

      <a href=\"";
        // line 166
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_activite_index");
        yield "\" class=\"btn-secondary\">
        <i class=\"fa-solid fa-arrow-left\"></i> Back
      </a>
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
        return "front/activite/show.html.twig";
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
        return array (  269 => 166,  262 => 162,  251 => 154,  242 => 148,  233 => 142,  224 => 136,  216 => 131,  208 => 126,  197 => 118,  184 => 108,  178 => 105,  174 => 104,  170 => 103,  166 => 102,  162 => 101,  158 => 100,  154 => 99,  150 => 98,  58 => 9,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Show Activité - AIVA</title>

  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"{{ asset('css/stylefront.css') }}\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">

  <style>
    *, *::before, *::after { box-sizing: border-box; }

    /* Glass card */
    .detail-card{
      width: min(850px, 95%);
      margin: 18px auto 0;
      padding: 22px;
      border-radius: 18px;
      background: linear-gradient(135deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
      border: 1px solid rgba(255,255,255,.12);
      backdrop-filter: blur(10px);
    }

    .detail-row{
      display:flex;
      justify-content:space-between;
      padding: 10px 0;
      border-bottom: 1px solid rgba(255,255,255,.08);
      font-size: 14px;
    }

    .detail-row:last-child{
      border-bottom: none;
    }

    .detail-label{
      font-weight: 800;
      color: rgba(226,232,240,.85);
    }

    .detail-value{
      color: rgba(226,232,240,.95);
    }

    /* Actions buttons */
    .action-buttons{
      margin-top: 20px;
      display:flex;
      justify-content:center;
      gap:12px;
      flex-wrap:wrap;
    }

    .btn-secondary{
      display:inline-flex;
      align-items:center;
      gap:8px;
      padding: 10px 14px;
      border-radius: 12px;
      border: 1px solid rgba(255,255,255,.18);
      background: rgba(255,255,255,.06);
      color: rgba(226,232,240,.95);
      font-weight: 800;
      text-decoration:none;
      transition: .2s ease;
    }

    .btn-secondary:hover{
      background: rgba(255,255,255,.12);
      transform: translateY(-2px);
    }
  </style>
</head>

<body>
<div class=\"container\">

  <!-- ✅ NAVBAR COMPLETE -->
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

    <h1 class=\"hero-title\">
      Activité <span>#{{ activite.id }}</span>
    </h1>

    <!-- ✅ DETAILS CARD -->
    <div class=\"detail-card\">

      <div class=\"detail-row\">
        <span class=\"detail-label\">Type</span>
        <span class=\"detail-value\">{{ activite.type }}</span>
      </div>

      <div class=\"detail-row\">
        <span class=\"detail-label\">Durée</span>
        <span class=\"detail-value\">{{ activite.duree }} min</span>
      </div>

      <div class=\"detail-row\">
        <span class=\"detail-label\">Calories</span>
        <span class=\"detail-value\">{{ activite.caloriesBrulees }}</span>
      </div>

      <div class=\"detail-row\">
        <span class=\"detail-label\">Date</span>
        <span class=\"detail-value\">
          {{ activite.date ? activite.date|date('Y-m-d') : '—' }}
        </span>
      </div>

      <div class=\"detail-row\">
        <span class=\"detail-label\">Intensité</span>
        <span class=\"detail-value\">{{ activite.intensite }}</span>
      </div>

      <div class=\"detail-row\">
        <span class=\"detail-label\">Objectif</span>
        <span class=\"detail-value\">
          {{ activite.objectif ? activite.objectif.description : '—' }}
        </span>
      </div>

    </div>

    <!-- ✅ ACTIONS -->
    <div class=\"action-buttons\">
      <a href=\"{{ path('front_activite_edit', {id: activite.id}) }}\" class=\"btn-secondary\">
        <i class=\"fa-solid fa-pen\"></i> Edit
      </a>

      <a href=\"{{ path('front_activite_index') }}\" class=\"btn-secondary\">
        <i class=\"fa-solid fa-arrow-left\"></i> Back
      </a>
    </div>

  </main>
</div>
</body>
</html>
", "front/activite/show.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\front\\activite\\show.html.twig");
    }
}
