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

/* front/health.html.twig */
class __TwigTemplate_e8c186df30fc6df7d7c232c87cb0b39e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/health.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/health.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Health & Activity - AIVA</title>
  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/stylefront.css"), "html", null, true);
        yield "\">
</head>

<body>
<div class=\"container\">

  ";
        // line 15
        yield "       <!-- Navbar -->
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
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_categorie_index");
        yield "\">categorie</a>
<a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_activite_index");
        yield "\">Activité</a>
    <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_index");
        yield "\">Objectif</a>
               <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_depense_index");
        yield "\">depense</a>            
<a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_aliment_index");
        yield "\">Alimentation</a>
        <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_front_index");
        yield "\">apprentissage</a>
        <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_energie_index");
        yield "\">Énergie</a>
    <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_recommandation_index");
        yield "\">Recommandation</a>

        </div>

  <a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"nav-link\">
                                <i class=\"fa-solid fa-right-from-bracket\"></i> Déconnexion
                            </a>  </nav>

  <main class=\"hero\">
    <div class=\"glow\"></div>

    <h2 class=\"hero-subtitle\">HEALTH MODULE</h2>

    <h1 class=\"hero-title\">
      Activity and <span>Objectif</span>
    </h1>


    ";
        // line 59
        yield "    <div style=\"margin-top:18px; display:flex; gap:14px; justify-content:center; flex-wrap:wrap;\">
      <a class=\"hero-button\" href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_new");
        yield "\" style=\"text-decoration:none;\">
        ➕ New Objectif →
      </a>
      <a class=\"hero-button\" href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_activite_new");
        yield "\" style=\"text-decoration:none;\">
        ➕ New Activité →
      </a>
    </div>

    ";
        // line 69
        yield "    <div style=\"width:min(980px,95%); margin:22px auto 0;\">
      <form method=\"get\" style=\"display:flex; gap:12px; flex-wrap:wrap; justify-content:center;\">
        <input name=\"q\"
               value=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("q", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 72, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\"
               placeholder=\"Search objectifs/activités...\"
               style=\"
                 flex: 1;
                 min-width: 280px;
                 padding: 14px 16px;
                 border-radius: 14px;
                 border: 1px solid #2a2a44;
                 background: #0a0a12;
                 color: #fff;
                 outline: none;
               \">

        ";
        // line 86
        yield "        <input type=\"hidden\" name=\"osort\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("osort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["osort"]) || array_key_exists("osort", $context) ? $context["osort"] : (function () { throw new RuntimeError('Variable "osort" does not exist.', 86, $this->source); })()), "id")) : ("id")), "html", null, true);
        yield "\">
        <input type=\"hidden\" name=\"odir\" value=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("odir", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["odir"]) || array_key_exists("odir", $context) ? $context["odir"] : (function () { throw new RuntimeError('Variable "odir" does not exist.', 87, $this->source); })()), "desc")) : ("desc")), "html", null, true);
        yield "\">
        <input type=\"hidden\" name=\"asort\" value=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("asort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["asort"]) || array_key_exists("asort", $context) ? $context["asort"] : (function () { throw new RuntimeError('Variable "asort" does not exist.', 88, $this->source); })()), "id")) : ("id")), "html", null, true);
        yield "\">
        <input type=\"hidden\" name=\"adir\" value=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("adir", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["adir"]) || array_key_exists("adir", $context) ? $context["adir"] : (function () { throw new RuntimeError('Variable "adir" does not exist.', 89, $this->source); })()), "desc")) : ("desc")), "html", null, true);
        yield "\">

        <button class=\"hero-button\" type=\"submit\">Search</button>

        <a class=\"hero-button\" href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("health");
        yield "\" style=\"text-decoration:none;\">
          Reset
        </a>
      </form>
    </div>

    ";
        // line 100
        yield "    <div style=\"width:min(980px,95%); margin:18px auto 0; border:1px solid #1a1a2e; border-radius:16px; background:rgba(255,255,255,0.02); padding:18px;\">
      <div style=\"display:flex; align-items:center; justify-content:space-between; gap:12px; flex-wrap:wrap;\">
        <div style=\"font-weight:900; font-size:18px;\">
          🌦️ Météo (Open-Meteo)
         
        </div>

        <form method=\"get\" style=\"display:flex; gap:10px; align-items:center; flex-wrap:wrap; margin:0;\">
          ";
        // line 109
        yield "          <input type=\"hidden\" name=\"q\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("q", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 109, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">
          <input type=\"hidden\" name=\"osort\" value=\"";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("osort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["osort"]) || array_key_exists("osort", $context) ? $context["osort"] : (function () { throw new RuntimeError('Variable "osort" does not exist.', 110, $this->source); })()), "id")) : ("id")), "html", null, true);
        yield "\">
          <input type=\"hidden\" name=\"odir\" value=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("odir", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["odir"]) || array_key_exists("odir", $context) ? $context["odir"] : (function () { throw new RuntimeError('Variable "odir" does not exist.', 111, $this->source); })()), "desc")) : ("desc")), "html", null, true);
        yield "\">
          <input type=\"hidden\" name=\"asort\" value=\"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("asort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["asort"]) || array_key_exists("asort", $context) ? $context["asort"] : (function () { throw new RuntimeError('Variable "asort" does not exist.', 112, $this->source); })()), "id")) : ("id")), "html", null, true);
        yield "\">
          <input type=\"hidden\" name=\"adir\" value=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("adir", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["adir"]) || array_key_exists("adir", $context) ? $context["adir"] : (function () { throw new RuntimeError('Variable "adir" does not exist.', 113, $this->source); })()), "desc")) : ("desc")), "html", null, true);
        yield "\">

          <select name=\"city\" style=\"padding:10px 12px; border-radius:12px; border:1px solid #2a2a44; background:#0a0a12; color:#fff;\">
            ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cities"]) || array_key_exists("cities", $context) ? $context["cities"] : (function () { throw new RuntimeError('Variable "cities" does not exist.', 116, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 117
            yield "              <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["c"], "html", null, true);
            yield "\" ";
            yield ((($context["c"] == (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 117, $this->source); })()))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["c"], "html", null, true);
            yield "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        yield "          </select>

          <button class=\"hero-button\" type=\"submit\">📍 Changer</button>
        </form>
      </div>

      ";
        // line 125
        if ((($tmp = (isset($context["meteoError"]) || array_key_exists("meteoError", $context) ? $context["meteoError"] : (function () { throw new RuntimeError('Variable "meteoError" does not exist.', 125, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 126
            yield "        <div style=\"margin-top:14px; color:#ff6b6b; font-weight:800;\">
          🛑 ";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["meteoError"]) || array_key_exists("meteoError", $context) ? $context["meteoError"] : (function () { throw new RuntimeError('Variable "meteoError" does not exist.', 127, $this->source); })()), "html", null, true);
            yield "
        </div>
      ";
        } else {
            // line 130
            yield "        <div style=\"display:flex; gap:12px; flex-wrap:wrap; margin-top:14px; justify-content:center;\">

          <div style=\"min-width:220px; border:1px solid #1a1a2e; border-radius:14px; padding:14px; background:rgba(255,255,255,0.02);\">
            <div style=\"color:#888; font-weight:700;\">Ville</div>
            <div style=\"margin-top:6px; font-size:20px; font-weight:900;\">📍 ";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 134, $this->source); })()), "html", null, true);
            yield "</div>
          </div>

          <div style=\"min-width:220px; border:1px solid #1a1a2e; border-radius:14px; padding:14px; background:rgba(255,255,255,0.02);\">
            <div style=\"color:#888; font-weight:700;\">Température</div>
            <div style=\"margin-top:6px; font-size:22px; font-weight:900;\">🌡️ ";
            // line 139
            yield (((($tmp =  !(null === (isset($context["temperature"]) || array_key_exists("temperature", $context) ? $context["temperature"] : (function () { throw new RuntimeError('Variable "temperature" does not exist.', 139, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["temperature"]) || array_key_exists("temperature", $context) ? $context["temperature"] : (function () { throw new RuntimeError('Variable "temperature" does not exist.', 139, $this->source); })()), 0), "html", null, true)) : (0));
            yield "°C</div>
          </div>

          <div style=\"min-width:220px; border:1px solid #1a1a2e; border-radius:14px; padding:14px; background:rgba(255,255,255,0.02);\">
            <div style=\"color:#888; font-weight:700;\">Condition</div>
            <div style=\"margin-top:6px; font-size:18px; font-weight:900;\">☁️ ";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["condition"]) || array_key_exists("condition", $context) ? $context["condition"] : (function () { throw new RuntimeError('Variable "condition" does not exist.', 144, $this->source); })()), "html", null, true);
            yield "</div>
          </div>

          <div style=\"min-width:220px; border:1px solid #1a1a2e; border-radius:14px; padding:14px; background:rgba(255,255,255,0.02);\">
            <div style=\"color:#888; font-weight:700;\">Vent</div>
            <div style=\"margin-top:6px; font-size:20px; font-weight:900;\">💨 ";
            // line 149
            yield (((($tmp =  !(null === (isset($context["wind"]) || array_key_exists("wind", $context) ? $context["wind"] : (function () { throw new RuntimeError('Variable "wind" does not exist.', 149, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["wind"]) || array_key_exists("wind", $context) ? $context["wind"] : (function () { throw new RuntimeError('Variable "wind" does not exist.', 149, $this->source); })()), 0), "html", null, true)) : (0));
            yield " km/h</div>
          </div>

        </div>

        <div style=\"margin-top:12px; text-align:center;\">
          ";
            // line 155
            if (((( !(null === (isset($context["temperature"]) || array_key_exists("temperature", $context) ? $context["temperature"] : (function () { throw new RuntimeError('Variable "temperature" does not exist.', 155, $this->source); })())) && ((isset($context["temperature"]) || array_key_exists("temperature", $context) ? $context["temperature"] : (function () { throw new RuntimeError('Variable "temperature" does not exist.', 155, $this->source); })()) >= 12)) && ((isset($context["temperature"]) || array_key_exists("temperature", $context) ? $context["temperature"] : (function () { throw new RuntimeError('Variable "temperature" does not exist.', 155, $this->source); })()) <= 28)) && !CoreExtension::inFilter((isset($context["condition"]) || array_key_exists("condition", $context) ? $context["condition"] : (function () { throw new RuntimeError('Variable "condition" does not exist.', 155, $this->source); })()), ["Pluie", "Orage", "Averses"]))) {
                // line 156
                yield "            <span style=\"display:inline-block; padding:10px 14px; border-radius:999px; border:1px solid #00d4aa; color:#00d4aa; font-weight:900;\">
              ✅ Recommandation : activité outdoor possible
            </span>
          ";
            } else {
                // line 160
                yield "            <span style=\"display:inline-block; padding:10px 14px; border-radius:999px; border:1px solid #888; color:#888; font-weight:900;\">
              ℹ️ Recommandation : activité indoor conseillée
            </span>
          ";
            }
            // line 164
            yield "        </div>
      ";
        }
        // line 166
        yield "    </div>

    ";
        // line 169
        yield "    <details open style=\"width: min(980px, 95%); margin: 26px auto 0;\">
      <summary style=\"
          list-style:none; cursor:pointer;
          padding: 14px 18px; border: 1px solid #1a1a2e; border-radius: 14px;
          background: rgba(255,255,255,0.02);
          font-weight: 800; font-size: 18px;
          display:flex; align-items:center; justify-content: space-between;\">
        <span>📌 Objectifs</span>
        <span style=\"color:#00d4aa; font-weight:900;\">▼</span>
      </summary>

      <div style=\"margin-top: 12px; border:1px solid #1a1a2e; border-radius:12px; overflow:auto;\">
        <table style=\"width:100%; border-collapse:collapse; min-width: 980px;\">

          <thead>
          <tr style=\"border-bottom:1px solid #1a1a2e;\">
            ";
        // line 185
        $context["baseO"] = ["q" => ((array_key_exists("q", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 185, $this->source); })()), "")) : ("")), "asort" => ((array_key_exists("asort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["asort"]) || array_key_exists("asort", $context) ? $context["asort"] : (function () { throw new RuntimeError('Variable "asort" does not exist.', 185, $this->source); })()), "id")) : ("id")), "adir" => ((array_key_exists("adir", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["adir"]) || array_key_exists("adir", $context) ? $context["adir"] : (function () { throw new RuntimeError('Variable "adir" does not exist.', 185, $this->source); })()), "desc")) : ("desc")), "city" => ((array_key_exists("city", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 185, $this->source); })()), "Sousse")) : ("Sousse"))];
        // line 186
        yield "
            ";
        // line 196
        yield "            ";
        $macros["uiO"] = $this->macros["uiO"] = $this;
        // line 197
        yield "
            ";
        // line 198
        yield $macros["uiO"]->getTemplateForMacro("macro_th", $context, 198, $this->getSourceContext())->macro_th(...["ID", "id", ((array_key_exists("osort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["osort"]) || array_key_exists("osort", $context) ? $context["osort"] : (function () { throw new RuntimeError('Variable "osort" does not exist.', 198, $this->source); })()), "id")) : ("id")), ((array_key_exists("odir", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["odir"]) || array_key_exists("odir", $context) ? $context["odir"] : (function () { throw new RuntimeError('Variable "odir" does not exist.', 198, $this->source); })()), "desc")) : ("desc")), (isset($context["baseO"]) || array_key_exists("baseO", $context) ? $context["baseO"] : (function () { throw new RuntimeError('Variable "baseO" does not exist.', 198, $this->source); })())]);
        yield "
            ";
        // line 199
        yield $macros["uiO"]->getTemplateForMacro("macro_th", $context, 199, $this->getSourceContext())->macro_th(...["Description", "description", ((array_key_exists("osort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["osort"]) || array_key_exists("osort", $context) ? $context["osort"] : (function () { throw new RuntimeError('Variable "osort" does not exist.', 199, $this->source); })()), "id")) : ("id")), ((array_key_exists("odir", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["odir"]) || array_key_exists("odir", $context) ? $context["odir"] : (function () { throw new RuntimeError('Variable "odir" does not exist.', 199, $this->source); })()), "desc")) : ("desc")), (isset($context["baseO"]) || array_key_exists("baseO", $context) ? $context["baseO"] : (function () { throw new RuntimeError('Variable "baseO" does not exist.', 199, $this->source); })())]);
        yield "
           
            ";
        // line 201
        yield $macros["uiO"]->getTemplateForMacro("macro_th", $context, 201, $this->getSourceContext())->macro_th(...["Type", "type", ((array_key_exists("osort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["osort"]) || array_key_exists("osort", $context) ? $context["osort"] : (function () { throw new RuntimeError('Variable "osort" does not exist.', 201, $this->source); })()), "id")) : ("id")), ((array_key_exists("odir", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["odir"]) || array_key_exists("odir", $context) ? $context["odir"] : (function () { throw new RuntimeError('Variable "odir" does not exist.', 201, $this->source); })()), "desc")) : ("desc")), (isset($context["baseO"]) || array_key_exists("baseO", $context) ? $context["baseO"] : (function () { throw new RuntimeError('Variable "baseO" does not exist.', 201, $this->source); })())]);
        yield "
            ";
        // line 202
        yield $macros["uiO"]->getTemplateForMacro("macro_th", $context, 202, $this->getSourceContext())->macro_th(...["Statut", "statut", ((array_key_exists("osort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["osort"]) || array_key_exists("osort", $context) ? $context["osort"] : (function () { throw new RuntimeError('Variable "osort" does not exist.', 202, $this->source); })()), "id")) : ("id")), ((array_key_exists("odir", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["odir"]) || array_key_exists("odir", $context) ? $context["odir"] : (function () { throw new RuntimeError('Variable "odir" does not exist.', 202, $this->source); })()), "desc")) : ("desc")), (isset($context["baseO"]) || array_key_exists("baseO", $context) ? $context["baseO"] : (function () { throw new RuntimeError('Variable "baseO" does not exist.', 202, $this->source); })())]);
        yield "
            <th style=\"padding:14px; text-align:left; color:#888;\">Actions</th>
          </tr>
          </thead>

          <tbody>
          ";
        // line 208
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 208, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
            // line 209
            yield "            <tr style=\"border-bottom:1px solid #1a1a2e;\">
              <td style=\"padding:14px;\">#";
            // line 210
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["o"], "id", [], "any", false, false, false, 210), "html", null, true);
            yield "</td>
              <td style=\"padding:14px;\">
                ";
            // line 212
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["o"], "description", [], "any", false, false, false, 212)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["o"], "description", [], "any", false, false, false, 212), 0, 55) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["o"], "description", [], "any", false, false, false, 212)) > 55)) ? ("...") : (""))), "html", null, true)) : ("—"));
            yield "
              </td>
             
              <td style=\"padding:14px;\">";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["o"], "type", [], "any", false, false, false, 215), "html", null, true);
            yield "</td>
              <td style=\"padding:14px;\">";
            // line 216
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["o"], "statut", [], "any", false, false, false, 216), "html", null, true);
            yield "</td>

              <td style=\"padding:14px;\">
                <div style=\"display:flex; gap:10px; flex-wrap:wrap; align-items:center;\">
                  <a href=\"";
            // line 220
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["o"], "id", [], "any", false, false, false, 220)]), "html", null, true);
            yield "\"
                     style=\"color:#00d4aa; text-decoration:none; font-weight:800;\">Show</a>

                  <a href=\"";
            // line 223
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["o"], "id", [], "any", false, false, false, 223)]), "html", null, true);
            yield "\"
                     style=\"color:#00d4aa; text-decoration:none; font-weight:800;\">Edit</a>

                  <form method=\"post\"
                        action=\"";
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["o"], "id", [], "any", false, false, false, 227)]), "html", null, true);
            yield "\"
                        onsubmit=\"return confirm('Delete this objectif ?');\"
                        style=\"display:inline-block; margin:0;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 230
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["o"], "id", [], "any", false, false, false, 230))), "html", null, true);
            yield "\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <button type=\"submit\"
                            style=\"background:transparent;border:1px solid #ff6b6b;color:#ff6b6b;padding:8px 12px;border-radius:10px;cursor:pointer;font-weight:800;\">
                      🗑 Delete
                    </button>
                  </form>
                </div>
              </td>
            </tr>
          ";
            $context['_iterated'] = true;
        }
        // line 240
        if (!$context['_iterated']) {
            // line 241
            yield "            <tr>
              <td colspan=\"6\" style=\"padding:18px; color:#888; text-align:center;\">
                No objectifs found.
              </td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['o'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        yield "          </tbody>

        </table>
      </div>
    </details>

    ";
        // line 254
        yield "    <details style=\"width: min(980px, 95%); margin: 18px auto 0;\">
      <summary style=\"
          list-style:none; cursor:pointer;
          padding: 14px 18px; border: 1px solid #1a1a2e; border-radius: 14px;
          background: rgba(255,255,255,0.02);
          font-weight: 800; font-size: 18px;
          display:flex; align-items:center; justify-content: space-between;\">
        <span>🏃 Activités</span>
        <span style=\"color:#00d4aa; font-weight:900;\">▼</span>
      </summary>

      <div style=\"margin-top: 12px; border:1px solid #1a1a2e; border-radius:12px; overflow:auto;\">
        <table style=\"width:100%; border-collapse:collapse; min-width: 1080px;\">

          <thead>
          <tr style=\"border-bottom:1px solid #1a1a2e;\">
            ";
        // line 270
        $context["baseA"] = ["q" => ((array_key_exists("q", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 270, $this->source); })()), "")) : ("")), "osort" => ((array_key_exists("osort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["osort"]) || array_key_exists("osort", $context) ? $context["osort"] : (function () { throw new RuntimeError('Variable "osort" does not exist.', 270, $this->source); })()), "id")) : ("id")), "odir" => ((array_key_exists("odir", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["odir"]) || array_key_exists("odir", $context) ? $context["odir"] : (function () { throw new RuntimeError('Variable "odir" does not exist.', 270, $this->source); })()), "desc")) : ("desc")), "city" => ((array_key_exists("city", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 270, $this->source); })()), "Sousse")) : ("Sousse"))];
        // line 271
        yield "
            ";
        // line 281
        yield "            ";
        $macros["uiA"] = $this->macros["uiA"] = $this;
        // line 282
        yield "
            ";
        // line 283
        yield $macros["uiA"]->getTemplateForMacro("macro_th2", $context, 283, $this->getSourceContext())->macro_th2(...["ID", "id", ((array_key_exists("asort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["asort"]) || array_key_exists("asort", $context) ? $context["asort"] : (function () { throw new RuntimeError('Variable "asort" does not exist.', 283, $this->source); })()), "id")) : ("id")), ((array_key_exists("adir", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["adir"]) || array_key_exists("adir", $context) ? $context["adir"] : (function () { throw new RuntimeError('Variable "adir" does not exist.', 283, $this->source); })()), "desc")) : ("desc")), (isset($context["baseA"]) || array_key_exists("baseA", $context) ? $context["baseA"] : (function () { throw new RuntimeError('Variable "baseA" does not exist.', 283, $this->source); })())]);
        yield "
            ";
        // line 284
        yield $macros["uiA"]->getTemplateForMacro("macro_th2", $context, 284, $this->getSourceContext())->macro_th2(...["Type", "type", ((array_key_exists("asort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["asort"]) || array_key_exists("asort", $context) ? $context["asort"] : (function () { throw new RuntimeError('Variable "asort" does not exist.', 284, $this->source); })()), "id")) : ("id")), ((array_key_exists("adir", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["adir"]) || array_key_exists("adir", $context) ? $context["adir"] : (function () { throw new RuntimeError('Variable "adir" does not exist.', 284, $this->source); })()), "desc")) : ("desc")), (isset($context["baseA"]) || array_key_exists("baseA", $context) ? $context["baseA"] : (function () { throw new RuntimeError('Variable "baseA" does not exist.', 284, $this->source); })())]);
        yield "
            ";
        // line 285
        yield $macros["uiA"]->getTemplateForMacro("macro_th2", $context, 285, $this->getSourceContext())->macro_th2(...["Durée", "duree", ((array_key_exists("asort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["asort"]) || array_key_exists("asort", $context) ? $context["asort"] : (function () { throw new RuntimeError('Variable "asort" does not exist.', 285, $this->source); })()), "id")) : ("id")), ((array_key_exists("adir", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["adir"]) || array_key_exists("adir", $context) ? $context["adir"] : (function () { throw new RuntimeError('Variable "adir" does not exist.', 285, $this->source); })()), "desc")) : ("desc")), (isset($context["baseA"]) || array_key_exists("baseA", $context) ? $context["baseA"] : (function () { throw new RuntimeError('Variable "baseA" does not exist.', 285, $this->source); })())]);
        yield "
            ";
        // line 286
        yield $macros["uiA"]->getTemplateForMacro("macro_th2", $context, 286, $this->getSourceContext())->macro_th2(...["Calories", "calories", ((array_key_exists("asort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["asort"]) || array_key_exists("asort", $context) ? $context["asort"] : (function () { throw new RuntimeError('Variable "asort" does not exist.', 286, $this->source); })()), "id")) : ("id")), ((array_key_exists("adir", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["adir"]) || array_key_exists("adir", $context) ? $context["adir"] : (function () { throw new RuntimeError('Variable "adir" does not exist.', 286, $this->source); })()), "desc")) : ("desc")), (isset($context["baseA"]) || array_key_exists("baseA", $context) ? $context["baseA"] : (function () { throw new RuntimeError('Variable "baseA" does not exist.', 286, $this->source); })())]);
        yield "
            ";
        // line 287
        yield $macros["uiA"]->getTemplateForMacro("macro_th2", $context, 287, $this->getSourceContext())->macro_th2(...["Date", "date", ((array_key_exists("asort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["asort"]) || array_key_exists("asort", $context) ? $context["asort"] : (function () { throw new RuntimeError('Variable "asort" does not exist.', 287, $this->source); })()), "id")) : ("id")), ((array_key_exists("adir", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["adir"]) || array_key_exists("adir", $context) ? $context["adir"] : (function () { throw new RuntimeError('Variable "adir" does not exist.', 287, $this->source); })()), "desc")) : ("desc")), (isset($context["baseA"]) || array_key_exists("baseA", $context) ? $context["baseA"] : (function () { throw new RuntimeError('Variable "baseA" does not exist.', 287, $this->source); })())]);
        yield "
            ";
        // line 288
        yield $macros["uiA"]->getTemplateForMacro("macro_th2", $context, 288, $this->getSourceContext())->macro_th2(...["Intensité", "intensite", ((array_key_exists("asort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["asort"]) || array_key_exists("asort", $context) ? $context["asort"] : (function () { throw new RuntimeError('Variable "asort" does not exist.', 288, $this->source); })()), "id")) : ("id")), ((array_key_exists("adir", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["adir"]) || array_key_exists("adir", $context) ? $context["adir"] : (function () { throw new RuntimeError('Variable "adir" does not exist.', 288, $this->source); })()), "desc")) : ("desc")), (isset($context["baseA"]) || array_key_exists("baseA", $context) ? $context["baseA"] : (function () { throw new RuntimeError('Variable "baseA" does not exist.', 288, $this->source); })())]);
        yield "
            ";
        // line 289
        yield $macros["uiA"]->getTemplateForMacro("macro_th2", $context, 289, $this->getSourceContext())->macro_th2(...["Objectif", "objectif", ((array_key_exists("asort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["asort"]) || array_key_exists("asort", $context) ? $context["asort"] : (function () { throw new RuntimeError('Variable "asort" does not exist.', 289, $this->source); })()), "id")) : ("id")), ((array_key_exists("adir", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["adir"]) || array_key_exists("adir", $context) ? $context["adir"] : (function () { throw new RuntimeError('Variable "adir" does not exist.', 289, $this->source); })()), "desc")) : ("desc")), (isset($context["baseA"]) || array_key_exists("baseA", $context) ? $context["baseA"] : (function () { throw new RuntimeError('Variable "baseA" does not exist.', 289, $this->source); })())]);
        yield "
            <th style=\"padding:14px; text-align:left; color:#888;\">Actions</th>
          </tr>
          </thead>

          <tbody>
          ";
        // line 295
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activites"]) || array_key_exists("activites", $context) ? $context["activites"] : (function () { throw new RuntimeError('Variable "activites" does not exist.', 295, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 296
            yield "            <tr style=\"border-bottom:1px solid #1a1a2e;\">
              <td style=\"padding:14px;\">#";
            // line 297
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 297), "html", null, true);
            yield "</td>
              <td style=\"padding:14px;\">";
            // line 298
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "type", [], "any", false, false, false, 298), "html", null, true);
            yield "</td>
              <td style=\"padding:14px;\">";
            // line 299
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "duree", [], "any", false, false, false, 299), "html", null, true);
            yield " min</td>
              <td style=\"padding:14px;\">";
            // line 300
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "caloriesBrulees", [], "any", false, false, false, 300), "html", null, true);
            yield "</td>
              <td style=\"padding:14px;\">";
            // line 301
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "date", [], "any", false, false, false, 301)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "date", [], "any", false, false, false, 301), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
              <td style=\"padding:14px;\">";
            // line 302
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "intensite", [], "any", false, false, false, 302), "html", null, true);
            yield "</td>
              <td style=\"padding:14px;\">
                ";
            // line 304
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "objectif", [], "any", false, false, false, 304)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "objectif", [], "any", false, false, false, 304), "description", [], "any", false, false, false, 304), 0, 40) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "objectif", [], "any", false, false, false, 304), "description", [], "any", false, false, false, 304)) > 40)) ? ("...") : (""))), "html", null, true)) : ("—"));
            yield "
              </td>

              <td style=\"padding:14px;\">
                <div style=\"display:flex; gap:10px; flex-wrap:wrap; align-items:center;\">
                  <a href=\"";
            // line 309
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_activite_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 309)]), "html", null, true);
            yield "\"
                     style=\"color:#00d4aa; text-decoration:none; font-weight:800;\">Show</a>

                  <a href=\"";
            // line 312
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_activite_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 312)]), "html", null, true);
            yield "\"
                     style=\"color:#00d4aa; text-decoration:none; font-weight:800;\">Edit</a>

                  <form method=\"post\"
                        action=\"";
            // line 316
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_activite_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 316)]), "html", null, true);
            yield "\"
                        onsubmit=\"return confirm('Delete this activity ?');\"
                        style=\"display:inline-block; margin:0;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 319
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 319))), "html", null, true);
            yield "\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <button type=\"submit\"
                            style=\"background:transparent;border:1px solid #ff6b6b;color:#ff6b6b;padding:8px 12px;border-radius:10px;cursor:pointer;font-weight:800;\">
                      🗑 Delete
                    </button>
                  </form>
                </div>
              </td>
            </tr>
          ";
            $context['_iterated'] = true;
        }
        // line 329
        if (!$context['_iterated']) {
            // line 330
            yield "            <tr>
              <td colspan=\"8\" style=\"padding:18px; color:#888; text-align:center;\">
                No activités found.
              </td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 336
        yield "          </tbody>

        </table>
      </div>
    </details>

    <div style=\"height:40px;\"></div>
  </main>
</div>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 187
    public function macro_th($label = null, $key = null, $osort = null, $odir = null, $base = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "key" => $key,
            "osort" => $osort,
            "odir" => $odir,
            "base" => $base,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "th"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "th"));

            // line 188
            yield "              ";
            $context["dir"] = (((((isset($context["osort"]) || array_key_exists("osort", $context) ? $context["osort"] : (function () { throw new RuntimeError('Variable "osort" does not exist.', 188, $this->source); })()) == (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 188, $this->source); })())) && ((isset($context["odir"]) || array_key_exists("odir", $context) ? $context["odir"] : (function () { throw new RuntimeError('Variable "odir" does not exist.', 188, $this->source); })()) == "asc"))) ? ("desc") : ("asc"));
            // line 189
            yield "              <th style=\"padding:14px; text-align:left; color:#888;\">
                <a href=\"";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("health", Twig\Extension\CoreExtension::merge((isset($context["base"]) || array_key_exists("base", $context) ? $context["base"] : (function () { throw new RuntimeError('Variable "base" does not exist.', 190, $this->source); })()), ["osort" => (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 190, $this->source); })()), "odir" => (isset($context["dir"]) || array_key_exists("dir", $context) ? $context["dir"] : (function () { throw new RuntimeError('Variable "dir" does not exist.', 190, $this->source); })())])), "html", null, true);
            yield "\"
                   style=\"color:#888; text-decoration:none;\">
                  ";
            // line 192
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 192, $this->source); })()), "html", null, true);
            yield " ↕
                </a>
              </th>
            ";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 272
    public function macro_th2($label = null, $key = null, $asort = null, $adir = null, $base2 = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "key" => $key,
            "asort" => $asort,
            "adir" => $adir,
            "base2" => $base2,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "th2"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "th2"));

            // line 273
            yield "              ";
            $context["dir"] = (((((isset($context["asort"]) || array_key_exists("asort", $context) ? $context["asort"] : (function () { throw new RuntimeError('Variable "asort" does not exist.', 273, $this->source); })()) == (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 273, $this->source); })())) && ((isset($context["adir"]) || array_key_exists("adir", $context) ? $context["adir"] : (function () { throw new RuntimeError('Variable "adir" does not exist.', 273, $this->source); })()) == "asc"))) ? ("desc") : ("asc"));
            // line 274
            yield "              <th style=\"padding:14px; text-align:left; color:#888;\">
                <a href=\"";
            // line 275
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("health", Twig\Extension\CoreExtension::merge((isset($context["base2"]) || array_key_exists("base2", $context) ? $context["base2"] : (function () { throw new RuntimeError('Variable "base2" does not exist.', 275, $this->source); })()), ["asort" => (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 275, $this->source); })()), "adir" => (isset($context["dir"]) || array_key_exists("dir", $context) ? $context["dir"] : (function () { throw new RuntimeError('Variable "dir" does not exist.', 275, $this->source); })())])), "html", null, true);
            yield "\"
                   style=\"color:#888; text-decoration:none;\">
                  ";
            // line 277
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 277, $this->source); })()), "html", null, true);
            yield " ↕
                </a>
              </th>
            ";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/health.html.twig";
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
        return array (  725 => 277,  720 => 275,  717 => 274,  714 => 273,  692 => 272,  676 => 192,  671 => 190,  668 => 189,  665 => 188,  643 => 187,  621 => 336,  610 => 330,  608 => 329,  593 => 319,  587 => 316,  580 => 312,  574 => 309,  566 => 304,  561 => 302,  557 => 301,  553 => 300,  549 => 299,  545 => 298,  541 => 297,  538 => 296,  533 => 295,  524 => 289,  520 => 288,  516 => 287,  512 => 286,  508 => 285,  504 => 284,  500 => 283,  497 => 282,  494 => 281,  491 => 271,  489 => 270,  471 => 254,  463 => 247,  452 => 241,  450 => 240,  435 => 230,  429 => 227,  422 => 223,  416 => 220,  409 => 216,  405 => 215,  399 => 212,  394 => 210,  391 => 209,  386 => 208,  377 => 202,  373 => 201,  368 => 199,  364 => 198,  361 => 197,  358 => 196,  355 => 186,  353 => 185,  335 => 169,  331 => 166,  327 => 164,  321 => 160,  315 => 156,  313 => 155,  304 => 149,  296 => 144,  288 => 139,  280 => 134,  274 => 130,  268 => 127,  265 => 126,  263 => 125,  255 => 119,  242 => 117,  238 => 116,  232 => 113,  228 => 112,  224 => 111,  220 => 110,  215 => 109,  205 => 100,  196 => 93,  189 => 89,  185 => 88,  181 => 87,  176 => 86,  160 => 72,  155 => 69,  147 => 63,  141 => 60,  138 => 59,  121 => 44,  114 => 40,  110 => 39,  106 => 38,  102 => 37,  98 => 36,  94 => 35,  90 => 34,  86 => 33,  66 => 15,  57 => 8,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Health & Activity - AIVA</title>
  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"{{ asset('css/stylefront.css') }}\">
</head>

<body>
<div class=\"container\">

  {# ===================== NAVBAR (NORMAL) ===================== #}
       <!-- Navbar -->
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
                            </a>  </nav>

  <main class=\"hero\">
    <div class=\"glow\"></div>

    <h2 class=\"hero-subtitle\">HEALTH MODULE</h2>

    <h1 class=\"hero-title\">
      Activity and <span>Objectif</span>
    </h1>


    {# ===================== TOP ACTIONS ===================== #}
    <div style=\"margin-top:18px; display:flex; gap:14px; justify-content:center; flex-wrap:wrap;\">
      <a class=\"hero-button\" href=\"{{ path('front_objectif_new') }}\" style=\"text-decoration:none;\">
        ➕ New Objectif →
      </a>
      <a class=\"hero-button\" href=\"{{ path('front_activite_new') }}\" style=\"text-decoration:none;\">
        ➕ New Activité →
      </a>
    </div>

    {# ===================== SEARCH (GET SAME PAGE) ===================== #}
    <div style=\"width:min(980px,95%); margin:22px auto 0;\">
      <form method=\"get\" style=\"display:flex; gap:12px; flex-wrap:wrap; justify-content:center;\">
        <input name=\"q\"
               value=\"{{ q|default('') }}\"
               placeholder=\"Search objectifs/activités...\"
               style=\"
                 flex: 1;
                 min-width: 280px;
                 padding: 14px 16px;
                 border-radius: 14px;
                 border: 1px solid #2a2a44;
                 background: #0a0a12;
                 color: #fff;
                 outline: none;
               \">

        {# keep sorts when searching #}
        <input type=\"hidden\" name=\"osort\" value=\"{{ osort|default('id') }}\">
        <input type=\"hidden\" name=\"odir\" value=\"{{ odir|default('desc') }}\">
        <input type=\"hidden\" name=\"asort\" value=\"{{ asort|default('id') }}\">
        <input type=\"hidden\" name=\"adir\" value=\"{{ adir|default('desc') }}\">

        <button class=\"hero-button\" type=\"submit\">Search</button>

        <a class=\"hero-button\" href=\"{{ path('health') }}\" style=\"text-decoration:none;\">
          Reset
        </a>
      </form>
    </div>

    {# ===================== ✅ METEO API (INTEGRATED SAME PAGE) ===================== #}
    <div style=\"width:min(980px,95%); margin:18px auto 0; border:1px solid #1a1a2e; border-radius:16px; background:rgba(255,255,255,0.02); padding:18px;\">
      <div style=\"display:flex; align-items:center; justify-content:space-between; gap:12px; flex-wrap:wrap;\">
        <div style=\"font-weight:900; font-size:18px;\">
          🌦️ Météo (Open-Meteo)
         
        </div>

        <form method=\"get\" style=\"display:flex; gap:10px; align-items:center; flex-wrap:wrap; margin:0;\">
          {# ✅ keep existing params (search/sort) #}
          <input type=\"hidden\" name=\"q\" value=\"{{ q|default('') }}\">
          <input type=\"hidden\" name=\"osort\" value=\"{{ osort|default('id') }}\">
          <input type=\"hidden\" name=\"odir\" value=\"{{ odir|default('desc') }}\">
          <input type=\"hidden\" name=\"asort\" value=\"{{ asort|default('id') }}\">
          <input type=\"hidden\" name=\"adir\" value=\"{{ adir|default('desc') }}\">

          <select name=\"city\" style=\"padding:10px 12px; border-radius:12px; border:1px solid #2a2a44; background:#0a0a12; color:#fff;\">
            {% for c in cities %}
              <option value=\"{{ c }}\" {{ c == city ? 'selected' : '' }}>{{ c }}</option>
            {% endfor %}
          </select>

          <button class=\"hero-button\" type=\"submit\">📍 Changer</button>
        </form>
      </div>

      {% if meteoError %}
        <div style=\"margin-top:14px; color:#ff6b6b; font-weight:800;\">
          🛑 {{ meteoError }}
        </div>
      {% else %}
        <div style=\"display:flex; gap:12px; flex-wrap:wrap; margin-top:14px; justify-content:center;\">

          <div style=\"min-width:220px; border:1px solid #1a1a2e; border-radius:14px; padding:14px; background:rgba(255,255,255,0.02);\">
            <div style=\"color:#888; font-weight:700;\">Ville</div>
            <div style=\"margin-top:6px; font-size:20px; font-weight:900;\">📍 {{ city }}</div>
          </div>

          <div style=\"min-width:220px; border:1px solid #1a1a2e; border-radius:14px; padding:14px; background:rgba(255,255,255,0.02);\">
            <div style=\"color:#888; font-weight:700;\">Température</div>
            <div style=\"margin-top:6px; font-size:22px; font-weight:900;\">🌡️ {{ temperature is not null ? temperature|round(0) : 0 }}°C</div>
          </div>

          <div style=\"min-width:220px; border:1px solid #1a1a2e; border-radius:14px; padding:14px; background:rgba(255,255,255,0.02);\">
            <div style=\"color:#888; font-weight:700;\">Condition</div>
            <div style=\"margin-top:6px; font-size:18px; font-weight:900;\">☁️ {{ condition }}</div>
          </div>

          <div style=\"min-width:220px; border:1px solid #1a1a2e; border-radius:14px; padding:14px; background:rgba(255,255,255,0.02);\">
            <div style=\"color:#888; font-weight:700;\">Vent</div>
            <div style=\"margin-top:6px; font-size:20px; font-weight:900;\">💨 {{ wind is not null ? wind|round(0) : 0 }} km/h</div>
          </div>

        </div>

        <div style=\"margin-top:12px; text-align:center;\">
          {% if temperature is not null and temperature >= 12 and temperature <= 28 and condition not in ['Pluie', 'Orage', 'Averses'] %}
            <span style=\"display:inline-block; padding:10px 14px; border-radius:999px; border:1px solid #00d4aa; color:#00d4aa; font-weight:900;\">
              ✅ Recommandation : activité outdoor possible
            </span>
          {% else %}
            <span style=\"display:inline-block; padding:10px 14px; border-radius:999px; border:1px solid #888; color:#888; font-weight:900;\">
              ℹ️ Recommandation : activité indoor conseillée
            </span>
          {% endif %}
        </div>
      {% endif %}
    </div>

    {# ===================== OBJECTIFS DROPDOWN ===================== #}
    <details open style=\"width: min(980px, 95%); margin: 26px auto 0;\">
      <summary style=\"
          list-style:none; cursor:pointer;
          padding: 14px 18px; border: 1px solid #1a1a2e; border-radius: 14px;
          background: rgba(255,255,255,0.02);
          font-weight: 800; font-size: 18px;
          display:flex; align-items:center; justify-content: space-between;\">
        <span>📌 Objectifs</span>
        <span style=\"color:#00d4aa; font-weight:900;\">▼</span>
      </summary>

      <div style=\"margin-top: 12px; border:1px solid #1a1a2e; border-radius:12px; overflow:auto;\">
        <table style=\"width:100%; border-collapse:collapse; min-width: 980px;\">

          <thead>
          <tr style=\"border-bottom:1px solid #1a1a2e;\">
            {% set baseO = { q: q|default(''), asort: asort|default('id'), adir: adir|default('desc'), city: city|default('Sousse') } %}

            {% macro th(label, key, osort, odir, base) %}
              {% set dir = (osort == key and odir == 'asc') ? 'desc' : 'asc' %}
              <th style=\"padding:14px; text-align:left; color:#888;\">
                <a href=\"{{ path('health', base|merge({ osort: key, odir: dir })) }}\"
                   style=\"color:#888; text-decoration:none;\">
                  {{ label }} ↕
                </a>
              </th>
            {% endmacro %}
            {% import _self as uiO %}

            {{ uiO.th('ID','id', osort|default('id'), odir|default('desc'), baseO) }}
            {{ uiO.th('Description','description', osort|default('id'), odir|default('desc'), baseO) }}
           
            {{ uiO.th('Type','type', osort|default('id'), odir|default('desc'), baseO) }}
            {{ uiO.th('Statut','statut', osort|default('id'), odir|default('desc'), baseO) }}
            <th style=\"padding:14px; text-align:left; color:#888;\">Actions</th>
          </tr>
          </thead>

          <tbody>
          {% for o in objectifs %}
            <tr style=\"border-bottom:1px solid #1a1a2e;\">
              <td style=\"padding:14px;\">#{{ o.id }}</td>
              <td style=\"padding:14px;\">
                {{ o.description ? o.description|slice(0,55) ~ (o.description|length > 55 ? '...' : '') : '—' }}
              </td>
             
              <td style=\"padding:14px;\">{{ o.type }}</td>
              <td style=\"padding:14px;\">{{ o.statut }}</td>

              <td style=\"padding:14px;\">
                <div style=\"display:flex; gap:10px; flex-wrap:wrap; align-items:center;\">
                  <a href=\"{{ path('front_objectif_show', {id:o.id}) }}\"
                     style=\"color:#00d4aa; text-decoration:none; font-weight:800;\">Show</a>

                  <a href=\"{{ path('front_objectif_edit', {id:o.id}) }}\"
                     style=\"color:#00d4aa; text-decoration:none; font-weight:800;\">Edit</a>

                  <form method=\"post\"
                        action=\"{{ path('front_objectif_delete', {'id': o.id}) }}\"
                        onsubmit=\"return confirm('Delete this objectif ?');\"
                        style=\"display:inline-block; margin:0;\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ o.id) }}\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <button type=\"submit\"
                            style=\"background:transparent;border:1px solid #ff6b6b;color:#ff6b6b;padding:8px 12px;border-radius:10px;cursor:pointer;font-weight:800;\">
                      🗑 Delete
                    </button>
                  </form>
                </div>
              </td>
            </tr>
          {% else %}
            <tr>
              <td colspan=\"6\" style=\"padding:18px; color:#888; text-align:center;\">
                No objectifs found.
              </td>
            </tr>
          {% endfor %}
          </tbody>

        </table>
      </div>
    </details>

    {# ===================== ACTIVITES DROPDOWN ===================== #}
    <details style=\"width: min(980px, 95%); margin: 18px auto 0;\">
      <summary style=\"
          list-style:none; cursor:pointer;
          padding: 14px 18px; border: 1px solid #1a1a2e; border-radius: 14px;
          background: rgba(255,255,255,0.02);
          font-weight: 800; font-size: 18px;
          display:flex; align-items:center; justify-content: space-between;\">
        <span>🏃 Activités</span>
        <span style=\"color:#00d4aa; font-weight:900;\">▼</span>
      </summary>

      <div style=\"margin-top: 12px; border:1px solid #1a1a2e; border-radius:12px; overflow:auto;\">
        <table style=\"width:100%; border-collapse:collapse; min-width: 1080px;\">

          <thead>
          <tr style=\"border-bottom:1px solid #1a1a2e;\">
            {% set baseA = { q: q|default(''), osort: osort|default('id'), odir: odir|default('desc'), city: city|default('Sousse') } %}

            {% macro th2(label, key, asort, adir, base2) %}
              {% set dir = (asort == key and adir == 'asc') ? 'desc' : 'asc' %}
              <th style=\"padding:14px; text-align:left; color:#888;\">
                <a href=\"{{ path('health', base2|merge({ asort: key, adir: dir })) }}\"
                   style=\"color:#888; text-decoration:none;\">
                  {{ label }} ↕
                </a>
              </th>
            {% endmacro %}
            {% import _self as uiA %}

            {{ uiA.th2('ID','id', asort|default('id'), adir|default('desc'), baseA) }}
            {{ uiA.th2('Type','type', asort|default('id'), adir|default('desc'), baseA) }}
            {{ uiA.th2('Durée','duree', asort|default('id'), adir|default('desc'), baseA) }}
            {{ uiA.th2('Calories','calories', asort|default('id'), adir|default('desc'), baseA) }}
            {{ uiA.th2('Date','date', asort|default('id'), adir|default('desc'), baseA) }}
            {{ uiA.th2('Intensité','intensite', asort|default('id'), adir|default('desc'), baseA) }}
            {{ uiA.th2('Objectif','objectif', asort|default('id'), adir|default('desc'), baseA) }}
            <th style=\"padding:14px; text-align:left; color:#888;\">Actions</th>
          </tr>
          </thead>

          <tbody>
          {% for a in activites %}
            <tr style=\"border-bottom:1px solid #1a1a2e;\">
              <td style=\"padding:14px;\">#{{ a.id }}</td>
              <td style=\"padding:14px;\">{{ a.type }}</td>
              <td style=\"padding:14px;\">{{ a.duree }} min</td>
              <td style=\"padding:14px;\">{{ a.caloriesBrulees }}</td>
              <td style=\"padding:14px;\">{{ a.date ? a.date|date('Y-m-d') : '' }}</td>
              <td style=\"padding:14px;\">{{ a.intensite }}</td>
              <td style=\"padding:14px;\">
                {{ a.objectif ? a.objectif.description|slice(0,40) ~ (a.objectif.description|length > 40 ? '...' : '') : '—' }}
              </td>

              <td style=\"padding:14px;\">
                <div style=\"display:flex; gap:10px; flex-wrap:wrap; align-items:center;\">
                  <a href=\"{{ path('front_activite_show', {id:a.id}) }}\"
                     style=\"color:#00d4aa; text-decoration:none; font-weight:800;\">Show</a>

                  <a href=\"{{ path('front_activite_edit', {id:a.id}) }}\"
                     style=\"color:#00d4aa; text-decoration:none; font-weight:800;\">Edit</a>

                  <form method=\"post\"
                        action=\"{{ path('front_activite_delete', {'id': a.id}) }}\"
                        onsubmit=\"return confirm('Delete this activity ?');\"
                        style=\"display:inline-block; margin:0;\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ a.id) }}\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <button type=\"submit\"
                            style=\"background:transparent;border:1px solid #ff6b6b;color:#ff6b6b;padding:8px 12px;border-radius:10px;cursor:pointer;font-weight:800;\">
                      🗑 Delete
                    </button>
                  </form>
                </div>
              </td>
            </tr>
          {% else %}
            <tr>
              <td colspan=\"8\" style=\"padding:18px; color:#888; text-align:center;\">
                No activités found.
              </td>
            </tr>
          {% endfor %}
          </tbody>

        </table>
      </div>
    </details>

    <div style=\"height:40px;\"></div>
  </main>
</div>
</body>
</html>
", "front/health.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\front\\health.html.twig");
    }
}
