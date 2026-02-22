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

/* front/aliment/show.html.twig */
class __TwigTemplate_1a91276624e7956dfa9d5d5f0aae4ed9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/aliment/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/aliment/show.html.twig"));

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

  /* ✅ glass wrapper like Recommandations */
  .glass{
    border-radius: 18px;
    background: linear-gradient(135deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
    border: 1px solid rgba(255,255,255,.12);
    backdrop-filter: blur(10px);
  }

  /* section head */
  .section-head{
    margin-top: 22px;
    display:flex;
    justify-content:space-between;
    gap:12px;
    flex-wrap:wrap;
    align-items:center;
  }
  .section-title{
    margin:0;
    font-size:16px;
    font-weight:800;
    opacity:.95;
  }

  /* table card */
  .table-wrap{
    margin-top: 14px;
    padding: 14px;
    overflow:auto;
  }

  /* table style */
  .aiva-table{
    width:100%;
    border-collapse: separate;
    border-spacing: 0;
    min-width: 560px;
  }
  .aiva-table thead th{
    text-align:left;
    font-size:12px;
    letter-spacing:.3px;
    text-transform: uppercase;
    opacity:.75;
    padding: 12px 12px;
    border-bottom: 1px solid rgba(255,255,255,.12);
    white-space: nowrap;
  }
  .aiva-table tbody td{
    padding: 12px 12px;
    border-bottom: 1px solid rgba(255,255,255,.08);
    font-size: 14px;
    opacity:.95;
    vertical-align: middle;
  }
  .aiva-table tbody tr:hover td{
    background: rgba(255,255,255,.03);
  }

  /* buttons fallback */
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

  .btn-warning{
    background: rgba(245,158,11,.14);
    border-color: rgba(245,158,11,.35);
    color: #fde68a;
  }
  .btn-warning:hover{ background: rgba(245,158,11,.22); }
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
        // line 119
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_categorie_index");
        yield "\">categorie</a>
      <a href=\"";
        // line 120
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_activite_index");
        yield "\">Activité</a>
      <a href=\"";
        // line 121
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_index");
        yield "\">Objectif</a>
      <a href=\"";
        // line 122
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_depense_index");
        yield "\">depense</a>
      <a href=\"";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_aliment_index");
        yield "\" class=\"active\">Alimentation</a>
      <a href=\"";
        // line 124
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_front_index");
        yield "\">apprentissage</a>
      <a href=\"";
        // line 125
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_energie_index");
        yield "\">Énergie</a>
      <a href=\"";
        // line 126
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_recommandation_index");
        yield "\">Recommandation</a>
    </div>

    <a href=\"";
        // line 129
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"nav-link\">
      <i class=\"fa-solid fa-right-from-bracket\"></i> Déconnexion
    </a>
  </nav>

  <!-- ✅ MAIN -->
  <main class=\"hero\">
    <div class=\"glow\"></div>

    <h1 class=\"hero-title\">🍽️ Food Details</h1>
    <p class=\"hero-description\">Quantity and macros overview.</p>

    <div class=\"section-head\">
      <h2 class=\"section-title\">";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["aliment"]) || array_key_exists("aliment", $context) ? $context["aliment"] : (function () { throw new RuntimeError('Variable "aliment" does not exist.', 142, $this->source); })()), "nom", [], "any", false, false, false, 142), "html", null, true);
        yield "</h2>
      <div style=\"display:flex; gap:10px; flex-wrap:wrap;\">
        <a class=\"btn btn-secondary\" href=\"";
        // line 144
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_aliment_index");
        yield "\">
          <i class=\"fa-solid fa-arrow-left\"></i> Back
        </a>
        <a class=\"btn btn-warning\" href=\"";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_aliment_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["aliment"]) || array_key_exists("aliment", $context) ? $context["aliment"] : (function () { throw new RuntimeError('Variable "aliment" does not exist.', 147, $this->source); })()), "id", [], "any", false, false, false, 147)]), "html", null, true);
        yield "\">
          <i class=\"fa-solid fa-pen\"></i> Edit
        </a>
      </div>
    </div>

    ";
        // line 153
        $context["m"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["aliment"] ?? null), "macro", [], "any", true, true, false, 153) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["aliment"]) || array_key_exists("aliment", $context) ? $context["aliment"] : (function () { throw new RuntimeError('Variable "aliment" does not exist.', 153, $this->source); })()), "macro", [], "any", false, false, false, 153)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["aliment"]) || array_key_exists("aliment", $context) ? $context["aliment"] : (function () { throw new RuntimeError('Variable "aliment" does not exist.', 153, $this->source); })()), "macro", [], "any", false, false, false, 153)) : ([]));
        // line 154
        yield "
    <!-- ✅ DETAILS TABLE (glass) -->
    <div class=\"table-wrap glass\">
      <table class=\"aiva-table\">
        <thead>
          <tr>
            <th>Field</th>
            <th>Value</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Quantity</strong></td>
            <td>";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["aliment"]) || array_key_exists("aliment", $context) ? $context["aliment"] : (function () { throw new RuntimeError('Variable "aliment" does not exist.', 167, $this->source); })()), "quantite", [], "any", false, false, false, 167), "html", null, true);
        yield "</td>
          </tr>
          <tr>
            <td><strong>Protein</strong></td>
            <td>";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["m"] ?? null), "proteine", [], "any", true, true, false, 171)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 171, $this->source); })()), "proteine", [], "any", false, false, false, 171), 0)) : (0)), "html", null, true);
        yield " g</td>
          </tr>
          <tr>
            <td><strong>Carbs</strong></td>
            <td>";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["m"] ?? null), "glucide", [], "any", true, true, false, 175)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 175, $this->source); })()), "glucide", [], "any", false, false, false, 175), 0)) : (0)), "html", null, true);
        yield " g</td>
          </tr>
          <tr>
            <td><strong>Fat</strong></td>
            <td>";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["m"] ?? null), "lipide", [], "any", true, true, false, 179)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 179, $this->source); })()), "lipide", [], "any", false, false, false, 179), 0)) : (0)), "html", null, true);
        yield " g</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- ✅ DELETE (glass also) -->
    <div class=\"table-wrap glass\" style=\"margin-top:16px;\">
      ";
        // line 187
        yield Twig\Extension\CoreExtension::include($this->env, $context, "front/aliment/_delete_form.html.twig", ["aliment" => (isset($context["aliment"]) || array_key_exists("aliment", $context) ? $context["aliment"] : (function () { throw new RuntimeError('Variable "aliment" does not exist.', 187, $this->source); })())]);
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
        return "front/aliment/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  313 => 187,  302 => 179,  295 => 175,  288 => 171,  281 => 167,  266 => 154,  264 => 153,  255 => 147,  249 => 144,  244 => 142,  228 => 129,  222 => 126,  218 => 125,  214 => 124,  210 => 123,  206 => 122,  202 => 121,  198 => 120,  194 => 119,  75 => 3,  72 => 2,  49 => 1,);
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

  /* ✅ glass wrapper like Recommandations */
  .glass{
    border-radius: 18px;
    background: linear-gradient(135deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
    border: 1px solid rgba(255,255,255,.12);
    backdrop-filter: blur(10px);
  }

  /* section head */
  .section-head{
    margin-top: 22px;
    display:flex;
    justify-content:space-between;
    gap:12px;
    flex-wrap:wrap;
    align-items:center;
  }
  .section-title{
    margin:0;
    font-size:16px;
    font-weight:800;
    opacity:.95;
  }

  /* table card */
  .table-wrap{
    margin-top: 14px;
    padding: 14px;
    overflow:auto;
  }

  /* table style */
  .aiva-table{
    width:100%;
    border-collapse: separate;
    border-spacing: 0;
    min-width: 560px;
  }
  .aiva-table thead th{
    text-align:left;
    font-size:12px;
    letter-spacing:.3px;
    text-transform: uppercase;
    opacity:.75;
    padding: 12px 12px;
    border-bottom: 1px solid rgba(255,255,255,.12);
    white-space: nowrap;
  }
  .aiva-table tbody td{
    padding: 12px 12px;
    border-bottom: 1px solid rgba(255,255,255,.08);
    font-size: 14px;
    opacity:.95;
    vertical-align: middle;
  }
  .aiva-table tbody tr:hover td{
    background: rgba(255,255,255,.03);
  }

  /* buttons fallback */
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

  .btn-warning{
    background: rgba(245,158,11,.14);
    border-color: rgba(245,158,11,.35);
    color: #fde68a;
  }
  .btn-warning:hover{ background: rgba(245,158,11,.22); }
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

    <h1 class=\"hero-title\">🍽️ Food Details</h1>
    <p class=\"hero-description\">Quantity and macros overview.</p>

    <div class=\"section-head\">
      <h2 class=\"section-title\">{{ aliment.nom }}</h2>
      <div style=\"display:flex; gap:10px; flex-wrap:wrap;\">
        <a class=\"btn btn-secondary\" href=\"{{ path('front_aliment_index') }}\">
          <i class=\"fa-solid fa-arrow-left\"></i> Back
        </a>
        <a class=\"btn btn-warning\" href=\"{{ path('front_aliment_edit', {'id': aliment.id}) }}\">
          <i class=\"fa-solid fa-pen\"></i> Edit
        </a>
      </div>
    </div>

    {% set m = aliment.macro ?? {} %}

    <!-- ✅ DETAILS TABLE (glass) -->
    <div class=\"table-wrap glass\">
      <table class=\"aiva-table\">
        <thead>
          <tr>
            <th>Field</th>
            <th>Value</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Quantity</strong></td>
            <td>{{ aliment.quantite }}</td>
          </tr>
          <tr>
            <td><strong>Protein</strong></td>
            <td>{{ m.proteine|default(0) }} g</td>
          </tr>
          <tr>
            <td><strong>Carbs</strong></td>
            <td>{{ m.glucide|default(0) }} g</td>
          </tr>
          <tr>
            <td><strong>Fat</strong></td>
            <td>{{ m.lipide|default(0) }} g</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- ✅ DELETE (glass also) -->
    <div class=\"table-wrap glass\" style=\"margin-top:16px;\">
      {{ include('front/aliment/_delete_form.html.twig', {'aliment': aliment}) }}
    </div>

  </main>
</div>
{% endblock %}
", "front/aliment/show.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\front\\aliment\\show.html.twig");
    }
}
