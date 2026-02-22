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

/* front/repas/index.html.twig */
class __TwigTemplate_37a3210b70f21d069eefd3cfc0297c81 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/repas/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/repas/index.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
  <title>Meals - AIVA</title>

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
      padding: 10px 12px; border-radius: 12px;
      border: 1px solid rgba(255,255,255,.15);
      background: rgba(0,0,0,.18); color: inherit;
      outline: none; font-size: 14px;
    }
    input:focus, select:focus, textarea:focus {
      border-color: #00d4aa;
      box-shadow: 0 0 0 3px rgba(0,212,170,.25);
    }

    .section-head { margin-top:22px; display:flex; justify-content:space-between; gap:12px; flex-wrap:wrap; align-items:center; }
    .section-title { margin:0; font-size:16px; font-weight:800; opacity:.95; }

    .glass {
      border-radius: 18px;
      background: linear-gradient(135deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
      border: 1px solid rgba(255,255,255,.12);
      backdrop-filter: blur(10px);
      position: relative;
    }

    .table-wrap { margin-top:14px; padding:14px; overflow:auto; }
    .inline-form { display:flex; gap:10px; flex-wrap:wrap; align-items:flex-end; }
    .inline-form label { display:block; margin-bottom:6px; font-size:13px; opacity:.8; }

    .pill {
      display:inline-flex; align-items:center; gap:6px;
      padding: 6px 10px; border-radius: 999px;
      border: 1px solid rgba(255,255,255,.18);
      background: rgba(255,255,255,.06);
      font-size: 12px; font-weight: 800; white-space: nowrap;
    }
    .pill.kcal { border-color:rgba(245,158,11,.35); background:rgba(245,158,11,.12); color:#fde68a; }

    .btn {
      display:inline-flex; align-items:center; gap:8px;
      padding: 10px 14px; border-radius: 12px;
      font-weight: 700; font-size: 14px;
      text-decoration:none; border: 1px solid transparent;
      cursor:pointer; transition: .2s ease;
      white-space: nowrap; user-select:none;
    }
    .btn-primary { background: linear-gradient(135deg, #00d4aa, #a855f7); color: #020617; }
    .btn-primary:hover { transform: translateY(-1px); box-shadow: 0 10px 25px rgba(0,0,0,.25); }
    .btn-secondary { background: rgba(255,255,255,.06); border-color: rgba(255,255,255,.18); color: rgba(226,232,240,.95); }
    .btn-secondary:hover { background: rgba(255,255,255,.12); }
    .btn-danger { background: rgba(239,68,68,.12); border-color: rgba(239,68,68,.35); color: #fecaca; }
    .btn-danger:hover { background: rgba(239,68,68,.22); }
    .btn-weekly {
      background: rgba(251,191,36,.1);
      border-color: rgba(251,191,36,.4);
      color: #fde68a;
    }
    .btn-weekly:hover { background: rgba(251,191,36,.2); }
    .btn:disabled { opacity:.5; cursor:not-allowed; transform:none !important; }

    .cards-grid { margin-top:14px; display:grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap:18px; }

    .meal-card {
      padding: 18px; border-radius: 18px;
      transition: .25s ease; display:flex; flex-direction:column; gap:14px; overflow:hidden;
    }
    .meal-card:hover { transform: translateY(-4px); box-shadow: 0 20px 40px rgba(0,0,0,.35); }
    .meal-card::before {
      content:\"\"; position:absolute; inset:0; border-radius:18px; padding:1px;
      background:linear-gradient(135deg,#00d4aa,#a855f7,#ec4899);
      -webkit-mask: linear-gradient(#000 0 0) content-box, linear-gradient(#000 0 0);
      -webkit-mask-composite:xor; mask-composite:exclude; pointer-events:none; opacity:.65;
    }
    .meal-header { display:flex; justify-content:space-between; align-items:flex-start; gap:10px; }
    .meal-id { font-size:12px; opacity:.65; margin-bottom:4px; }
    .meal-title { font-size:16px; font-weight:900; letter-spacing:.2px; }
    .meal-meta { display:flex; flex-wrap:wrap; gap:8px; }
    .meal-actions { display:flex; flex-wrap:wrap; gap:8px; margin-top:auto; }

    /* CHAT */
    .chat-bubble-user { align-self:flex-end; background: rgba(0,212,170,.12) !important; border-color: rgba(0,212,170,.3) !important; }
    .chat-bubble-assistant { align-self:flex-start; }
    .typing { display:inline-flex; gap:6px; align-items:center; font-size:13px; opacity:.85; }
    .dot { width:7px; height:7px; border-radius:50%; background:#00d4aa; animation: blink 1.2s infinite; }
    .dot:nth-child(2){ animation-delay:.2s; }
    .dot:nth-child(3){ animation-delay:.4s; }
    @keyframes blink {
      0%,80%,100% { opacity:.2; transform:scale(.8); }
      40% { opacity:1; transform:scale(1.2); }
    }
    .recipe-block { font-size:13px; line-height:1.6; }
    .recipe-block ul, .recipe-block ol { margin:6px 0; padding-left:18px; }
    .recipe-block li { margin-bottom:3px; }
    .recipe-title { font-weight:900; font-size:14px; margin-bottom:8px; }
    .recipe-section-title { font-weight:700; margin:8px 0 4px; opacity:.85; }

    /* PHOTO */
    #photoPreview { display:none; position:relative; border-radius:12px; overflow:hidden; }
    #photoThumb { width:100%; max-height:130px; object-fit:cover; border-radius:12px; display:block; }
    #clearPhoto {
      position:absolute; top:6px; right:6px;
      background:rgba(0,0,0,.7); border:none; color:white;
      border-radius:50%; width:26px; height:26px;
      cursor:pointer; font-size:13px;
      display:flex; align-items:center; justify-content:center; transition:.2s;
    }
    #clearPhoto:hover { background:rgba(239,68,68,.8); }
    .btn-photo {
      background:rgba(168,85,247,.12); border-color:rgba(168,85,247,.4);
      color:#d8b4fe; flex:1; justify-content:center;
    }
    .btn-photo:hover { background:rgba(168,85,247,.22); }

    /* WEEKLY MODAL */
    .weekly-modal-inner {
      height: 100%;
      display: flex;
      flex-direction: column;
      overflow: hidden;
      border-radius: 18px;
    }
    .weekly-body {
      flex: 1;
      overflow-y: auto;
      padding: 20px;
      display: flex;
      flex-direction: column;
      gap: 18px;
    }
    .weekly-score-ring {
      width: 90px; height: 90px;
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      flex-direction: column;
      font-size: 22px; font-weight: 900;
      border: 4px solid;
      flex-shrink: 0;
    }
    .weekly-section { display:flex; flex-direction:column; gap:8px; }
    .weekly-section-title {
      font-size: 13px; font-weight: 800;
      opacity: .7; text-transform: uppercase;
      letter-spacing: .5px;
    }
    .weekly-item {
      padding: 10px 14px;
      border-radius: 12px;
      font-size: 13px;
      line-height: 1.5;
    }
    .weekly-item.pos {
      background: rgba(0,212,170,.08);
      border: 1px solid rgba(0,212,170,.2);
    }
    .weekly-item.neg {
      background: rgba(251,191,36,.08);
      border: 1px solid rgba(251,191,36,.2);
    }
    .weekly-item.tip {
      background: rgba(168,85,247,.08);
      border: 1px solid rgba(168,85,247,.2);
    }
    .weekly-item.day {
      background: rgba(255,255,255,.04);
      border: 1px solid rgba(255,255,255,.08);
      display: flex; gap: 10px; align-items: flex-start;
    }
    .weekly-stats-row {
      display: flex; gap: 10px; flex-wrap: wrap;
    }
    .weekly-stat {
      flex: 1; min-width: 80px;
      padding: 12px;
      border-radius: 12px;
      background: rgba(255,255,255,.04);
      border: 1px solid rgba(255,255,255,.08);
      text-align: center;
    }
    .weekly-stat .val { font-size: 20px; font-weight: 900; }
    .weekly-stat .lbl { font-size: 11px; opacity: .6; margin-top: 2px; }
  </style>
</head>

<body>
<div class=\"container\">

  <nav class=\"navbar\">
    <div class=\"logo\">
      <svg width=\"32\" height=\"32\" viewBox=\"0 0 100 100\">
        <defs>
          <linearGradient id=\"grad\" x1=\"0%\" y1=\"0%\" x2=\"100%\" y2=\"100%\">
            <stop offset=\"0%\" stop-color=\"#a855f7\"/>
            <stop offset=\"50%\" stop-color=\"#00d4aa\"/>
            <stop offset=\"100%\" stop-color=\"#ec4899\"/>
          </linearGradient>
        </defs>
        <path d=\"M50 10 L85 80 L15 80 Z\" fill=\"none\" stroke=\"url(#grad)\" stroke-width=\"4\"/>
        <circle cx=\"50\" cy=\"50\" r=\"10\" fill=\"#00d4aa\"/>
      </svg>
      <span class=\"logo-text\">AIVA</span>
    </div>
    <div class=\"nav-links\">
      <a href=\"";
        // line 216
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_categorie_index");
        yield "\">categorie</a>
      <a href=\"";
        // line 217
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_activite_index");
        yield "\">Activité</a>
      <a href=\"";
        // line 218
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_index");
        yield "\">Objectif</a>
      <a href=\"";
        // line 219
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_depense_index");
        yield "\">depense</a>
      <a href=\"";
        // line 220
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_aliment_index");
        yield "\">Alimentation</a>
      <a href=\"";
        // line 221
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_front_index");
        yield "\">apprentissage</a>
      <a href=\"";
        // line 222
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_energie_index");
        yield "\">Énergie</a>
      <a href=\"";
        // line 223
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_recommandation_index");
        yield "\">Recommandation</a>
    </div>
    <a href=\"";
        // line 225
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"nav-link\">
      <i class=\"fa-solid fa-right-from-bracket\"></i> Déconnexion
    </a>
  </nav>

  <main class=\"hero\">
    <div class=\"glow\"></div>

    <h1 class=\"hero-title\">🥗 Meals</h1>
    <p class=\"hero-description\">Monitor your meals and calories.</p>

    <div class=\"section-head\">
      <h2 class=\"section-title\">Mes repas</h2>
      <div style=\"display:flex; gap:10px; flex-wrap:wrap;\">
        <a class=\"btn btn-primary\" href=\"";
        // line 239
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_repas_new");
        yield "\">
          <i class=\"fa-solid fa-plus\"></i> Add Meal
        </a>
        <button class=\"btn btn-secondary\" type=\"button\" id=\"openChatBtn\">
          <i class=\"fa-solid fa-robot\"></i> Assistant
        </button>
        <button class=\"btn btn-weekly\" type=\"button\" id=\"openWeeklyBtn\">
          <i class=\"fa-solid fa-chart-line\"></i> Analyse semaine
        </button>

        ";
        // line 250
        yield "        <button class=\"btn\" type=\"button\" id=\"openMailingBtn\"
                style=\"background:rgba(239,68,68,.10);border-color:rgba(239,68,68,.35);color:#fca5a5;\">
          <i class=\"fa-solid fa-envelope\"></i> Mailing
        </button>

        <a class=\"btn btn-secondary\" href=\"";
        // line 255
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_aliment_index");
        yield "\">
          <i class=\"fa-solid fa-apple-whole\"></i> Aliments
        </a>
      </div>
    </div>

    <div class=\"glass table-wrap\" style=\"margin-top:16px;\">
      <form method=\"get\" action=\"";
        // line 262
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_repas_index");
        yield "\" class=\"inline-form\">
        <div style=\"min-width:240px; flex:1;\">
          <label for=\"search\">Search by name</label>
          <input id=\"search\" type=\"text\" name=\"search\" value=\"";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchNom"]) || array_key_exists("searchNom", $context) ? $context["searchNom"] : (function () { throw new RuntimeError('Variable "searchNom" does not exist.', 265, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Search by name...\">
        </div>
        ";
        // line 267
        if ((($tmp = (isset($context["sortCalories"]) || array_key_exists("sortCalories", $context) ? $context["sortCalories"] : (function () { throw new RuntimeError('Variable "sortCalories" does not exist.', 267, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 268
            yield "          <input type=\"hidden\" name=\"sort\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sortCalories"]) || array_key_exists("sortCalories", $context) ? $context["sortCalories"] : (function () { throw new RuntimeError('Variable "sortCalories" does not exist.', 268, $this->source); })()), "html", null, true);
            yield "\">
        ";
        }
        // line 270
        yield "        <button class=\"btn btn-primary\" type=\"submit\"><i class=\"fa-solid fa-magnifying-glass\"></i> Search</button>
        <a class=\"btn btn-secondary\" href=\"";
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_repas_index", ["sort" => "asc", "search" => (isset($context["searchNom"]) || array_key_exists("searchNom", $context) ? $context["searchNom"] : (function () { throw new RuntimeError('Variable "searchNom" does not exist.', 271, $this->source); })())]), "html", null, true);
        yield "\"><i class=\"fa-solid fa-arrow-up\"></i> Calories</a>
        <a class=\"btn btn-secondary\" href=\"";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_repas_index", ["sort" => "desc", "search" => (isset($context["searchNom"]) || array_key_exists("searchNom", $context) ? $context["searchNom"] : (function () { throw new RuntimeError('Variable "searchNom" does not exist.', 272, $this->source); })())]), "html", null, true);
        yield "\"><i class=\"fa-solid fa-arrow-down\"></i> Calories</a>
        ";
        // line 273
        if (((isset($context["searchNom"]) || array_key_exists("searchNom", $context) ? $context["searchNom"] : (function () { throw new RuntimeError('Variable "searchNom" does not exist.', 273, $this->source); })()) || (isset($context["sortCalories"]) || array_key_exists("sortCalories", $context) ? $context["sortCalories"] : (function () { throw new RuntimeError('Variable "sortCalories" does not exist.', 273, $this->source); })()))) {
            // line 274
            yield "          <a class=\"btn btn-danger\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_repas_index");
            yield "\"><i class=\"fa-solid fa-rotate-left\"></i> Reset</a>
        ";
        }
        // line 276
        yield "      </form>
    </div>

    <div class=\"cards-grid\">
      ";
        // line 280
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 280, $this->source); })())) == 0)) {
            // line 281
            yield "        <div class=\"glass meal-card\"><div style=\"text-align:center;padding:18px;opacity:.8;\">No meals found.</div></div>
      ";
        } else {
            // line 283
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 283, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 284
                yield "          <div class=\"glass meal-card\">
            <div class=\"meal-header\">
              <div>
                <div class=\"meal-id\">#";
                // line 287
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 287), "html", null, true);
                yield "</div>
                <div class=\"meal-title\">";
                // line 288
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "nom", [], "any", false, false, false, 288), "html", null, true);
                yield "</div>
              </div>
              <span class=\"pill kcal\"><i class=\"fa-solid fa-fire\"></i> ";
                // line 290
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "calories", [], "any", false, false, false, 290), "html", null, true);
                yield " kcal</span>
            </div>
            <div class=\"meal-meta\">
              <span class=\"pill\"><i class=\"fa-solid fa-layer-group\"></i> ";
                // line 293
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "type", [], "any", false, false, false, 293), ["-" => " "])), "html", null, true);
                yield "</span>
              <span class=\"pill\"><i class=\"fa-regular fa-calendar\"></i> ";
                // line 294
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["r"], "date", [], "any", false, false, false, 294)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "date", [], "any", false, false, false, 294), "Y-m-d"), "html", null, true)) : ("N/A"));
                yield "</span>
              <span class=\"pill\"><i class=\"fa-regular fa-clock\"></i> ";
                // line 295
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["r"], "heure", [], "any", false, false, false, 295)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "heure", [], "any", false, false, false, 295), "H:i"), "html", null, true)) : ("N/A"));
                yield "</span>
            </div>
            <div class=\"meal-actions\">
              <a class=\"btn btn-secondary\" href=\"";
                // line 298
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_repas_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 298)]), "html", null, true);
                yield "\"><i class=\"fa-regular fa-eye\"></i> View</a>
              <a class=\"btn btn-secondary\" href=\"";
                // line 299
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_repas_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 299)]), "html", null, true);
                yield "\"><i class=\"fa-regular fa-pen-to-square\"></i> Edit</a>
            </div>
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['r'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 303
            yield "      ";
        }
        // line 304
        yield "    </div>

  </main>
</div>

<!-- ===================== CHAT OVERLAY + MODAL ===================== -->
<div id=\"chatOverlay\" style=\"display:none; position:fixed; inset:0; background:rgba(0,0,0,.55); z-index:9998;\"></div>

<div id=\"chatModal\" style=\"display:none; position:fixed; right:18px; bottom:18px; width:min(420px,92vw); height:min(680px,85vh); z-index:9999;\">
  <div class=\"glass\" style=\"height:100%; display:flex; flex-direction:column; overflow:hidden; border-radius:18px;\">
    <div style=\"display:flex; align-items:center; justify-content:space-between; padding:14px; border-bottom:1px solid rgba(255,255,255,.12);\">
      <div style=\"font-weight:900; display:flex; gap:10px; align-items:center;\">
        <i class=\"fa-solid fa-robot\" style=\"color:#00d4aa;\"></i> Assistant Repas
        <span style=\"font-size:11px; opacity:.6; font-weight:500;\">Powered by Groq ⚡</span>
      </div>
      <button class=\"btn btn-danger\" type=\"button\" id=\"closeChatBtn\" style=\"padding:6px 10px;\">
        <i class=\"fa-solid fa-xmark\"></i>
      </button>
    </div>

    <div id=\"chatMessages\" style=\"padding:14px; flex:1; overflow-y:auto; display:flex; flex-direction:column; gap:10px;\">
      <div class=\"glass chat-bubble-assistant\" style=\"padding:12px; border-radius:14px; max-width:92%; font-size:14px;\">
        Salut 👋 Dis-moi ce que tu veux !<br>
        <span style=\"opacity:.7; font-size:12px;\">
          ✍️ Ex: \"propose un dîner léger\"<br>
          📸 Ou envoie une photo de ton plat !
        </span>
      </div>
    </div>

    <div style=\"padding:12px; border-top:1px solid rgba(255,255,255,.12); display:flex; flex-direction:column; gap:8px;\">
      <div id=\"photoPreview\">
        <img id=\"photoThumb\" src=\"\" alt=\"preview\" />
        <button id=\"clearPhoto\" type=\"button\" title=\"Supprimer\">✕</button>
      </div>
      <div style=\"display:flex; gap:8px; align-items:center;\">
        <label for=\"photoInput\" class=\"btn btn-photo\" style=\"padding:10px 12px; cursor:pointer;\" title=\"Analyser une photo\">
          <i class=\"fa-solid fa-camera\"></i> Photo
        </label>
        <input type=\"file\" id=\"photoInput\" accept=\"image/jpeg,image/png,image/webp\" style=\"display:none;\" />
        <input id=\"chatInput\" type=\"text\" placeholder=\"Ou écris ici…\" style=\"flex:1; min-width:0;\" />
        <button class=\"btn btn-primary\" type=\"button\" id=\"sendChatBtn\" style=\"padding:10px 14px;\">
          <i class=\"fa-solid fa-paper-plane\"></i>
        </button>
      </div>
    </div>
  </div>
</div>

<!-- ===================== WEEKLY ANALYSIS MODAL ===================== -->
<div id=\"weeklyOverlay\" style=\"display:none; position:fixed; inset:0; background:rgba(0,0,0,.65); z-index:10000;\"></div>

<div id=\"weeklyModal\" style=\"display:none; position:fixed; top:50%; left:50%; transform:translate(-50%,-50%); width:min(560px,94vw); height:min(700px,88vh); z-index:10001;\">
  <div class=\"glass weekly-modal-inner\">
    <div style=\"display:flex; align-items:center; justify-content:space-between; padding:16px 20px; border-bottom:1px solid rgba(255,255,255,.12); flex-shrink:0;\">
      <div style=\"font-weight:900; font-size:16px; display:flex; gap:10px; align-items:center;\">
        <i class=\"fa-solid fa-chart-line\" style=\"color:#fde68a;\"></i>
        Analyse de la semaine
      </div>
      <button class=\"btn btn-danger\" type=\"button\" id=\"closeWeeklyBtn\" style=\"padding:6px 10px;\">
        <i class=\"fa-solid fa-xmark\"></i>
      </button>
    </div>
    <div class=\"weekly-body\" id=\"weeklyBody\">
      <div id=\"weeklyInitial\" style=\"display:flex; flex-direction:column; align-items:center; justify-content:center; flex:1; gap:20px; text-align:center; padding:40px 20px;\">
        <div style=\"font-size:48px;\">🧠</div>
        <div>
          <div style=\"font-size:18px; font-weight:900; margin-bottom:8px;\">Analyse IA de ta semaine</div>
          <div style=\"opacity:.7; font-size:14px; line-height:1.6;\">
            L'IA analyse tes repas des 7 derniers jours et génère un rapport personnalisé : tendances, points forts, conseils.
          </div>
        </div>
        <button class=\"btn btn-weekly\" type=\"button\" id=\"generateWeeklyBtn\" style=\"font-size:15px; padding:14px 28px;\">
          <i class=\"fa-solid fa-bolt\"></i> Générer l'analyse
        </button>
      </div>
      <div id=\"weeklyResult\" style=\"display:none; flex-direction:column; gap:18px;\"></div>
    </div>
  </div>
</div>

<!-- ===================== MAILING MODAL ===================== -->
<div id=\"mailingOverlay\" style=\"display:none; position:fixed; inset:0; background:rgba(0,0,0,.6); z-index:10002;\"></div>

<div id=\"mailingModal\" style=\"display:none; position:fixed; top:50%; left:50%; transform:translate(-50%,-50%); width:min(460px,92vw); z-index:10003;\">
  <div class=\"glass\" style=\"border-radius:18px; overflow:hidden;\">

    <div style=\"padding:18px 22px; border-bottom:1px solid rgba(255,255,255,.1); display:flex; align-items:center; justify-content:space-between;\">
      <div style=\"font-weight:900; font-size:15px; display:flex; gap:10px; align-items:center;\">
        <i class=\"fa-solid fa-envelope\" style=\"color:#fca5a5;\"></i> Rapport hebdomadaire
      </div>
      <button id=\"closeMailingBtn\" class=\"btn btn-danger\" style=\"padding:5px 10px;\">
        <i class=\"fa-solid fa-xmark\"></i>
      </button>
    </div>

    <div style=\"padding:22px;\">
      <div style=\"font-size:14px; color:rgba(226,232,240,.85); line-height:1.6; margin-bottom:18px;\">
        Cliquez sur <strong>Générer et envoyer</strong> pour envoyer votre rapport nutritionnel hebdomadaire par email.
      </div>
      <div id=\"mailingResult\" style=\"display:none; padding:12px 16px; border-radius:10px; margin-bottom:18px; font-size:14px;\"></div>
      <div style=\"display:flex; gap:10px;\">
        <button id=\"sendMailingBtn\" class=\"btn btn-primary\" type=\"button\" style=\"flex:1; justify-content:center;\">
          <i class=\"fa-solid fa-paper-plane\"></i> Générer et envoyer
        </button>
        <button id=\"cancelMailingBtn\" class=\"btn btn-secondary\" type=\"button\">Annuler</button>
      </div>
    </div>

  </div>
</div>

<script>
(function(){

  /* ═══════════════════════════════════════
     CHAT
  ═══════════════════════════════════════ */
  const openBtn      = document.getElementById('openChatBtn');
  const closeBtn     = document.getElementById('closeChatBtn');
  const overlay      = document.getElementById('chatOverlay');
  const modal        = document.getElementById('chatModal');
  const messages     = document.getElementById('chatMessages');
  const input        = document.getElementById('chatInput');
  const sendBtn      = document.getElementById('sendChatBtn');
  const photoInput   = document.getElementById('photoInput');
  const photoPreview = document.getElementById('photoPreview');
  const photoThumb   = document.getElementById('photoThumb');
  const clearPhoto   = document.getElementById('clearPhoto');

  const CHAT_URL  = \"";
        // line 434
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_repas_chat");
        yield "\";
  const ADD_URL   = \"";
        // line 435
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_repas_from_proposal");
        yield "\";
  const PHOTO_URL = \"";
        // line 436
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_repas_analyze_photo");
        yield "\";

  let isSending = false, pendingPhotoB64 = null, pendingMime = 'image/jpeg';

  function openChat(){ overlay.style.display='block'; modal.style.display='block'; setTimeout(()=>input?.focus(),50); }
  function closeChat(){ overlay.style.display='none'; modal.style.display='none'; }
  openBtn?.addEventListener('click', openChat);
  closeBtn?.addEventListener('click', closeChat);
  overlay?.addEventListener('click', closeChat);

  function safe(s){ return String(s??'').replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;'); }

  function bubble(html, who='assistant'){
    const d = document.createElement('div');
    d.className = 'glass chat-bubble-' + who;
    d.style.cssText = 'padding:12px; border-radius:14px; max-width:92%; font-size:14px; line-height:1.5;';
    d.innerHTML = html;
    messages.appendChild(d);
    messages.scrollTop = messages.scrollHeight;
    return d;
  }

  function addTyping(){
    const d = document.createElement('div');
    d.className = 'glass chat-bubble-assistant';
    d.style.cssText = 'padding:12px; border-radius:14px; max-width:92%;';
    d.innerHTML = '<div class=\"typing\"><span class=\"dot\"></span><span class=\"dot\"></span><span class=\"dot\"></span></div>';
    messages.appendChild(d);
    messages.scrollTop = messages.scrollHeight;
    return d;
  }

  photoInput?.addEventListener('change', function(){
    const file = this.files[0]; if(!file) return;
    pendingMime = file.type || 'image/jpeg';
    const reader = new FileReader();
    reader.onload = e => {
      pendingPhotoB64 = e.target.result.split(',')[1];
      photoThumb.src  = e.target.result;
      photoPreview.style.display = 'block';
    };
    reader.readAsDataURL(file);
  });

  clearPhoto?.addEventListener('click', resetPhoto);
  function resetPhoto(){ pendingPhotoB64=null; photoInput.value=''; photoPreview.style.display='none'; photoThumb.src=''; }

  function renderProposal(block){
    const kcal = block.estimated?.calories ?? 0;
    let itemsHtml = '<ul style=\"margin:6px 0 0;padding-left:18px;\">';
    (block.items||[]).forEach(it=>{
      itemsHtml+=`<li>\${safe(it.alimentName)} — \${it.quantity??''} \${safe(it.unit??'')} <span style=\"opacity:.6;font-size:12px;\">(\${it.nutrients?.calories??0} kcal)</span></li>`;
    });
    itemsHtml+='</ul>';

    let recipeHtml='';
    const r=block.recipe;
    if(r&&(r.ingredients?.length||r.steps?.length)){
      recipeHtml=`<div class=\"recipe-block\" style=\"margin-top:10px;padding-top:10px;border-top:1px solid rgba(255,255,255,.1);\"><div class=\"recipe-title\">📋 Recette</div>`;
      if(r.ingredients?.length){ recipeHtml+=`<div class=\"recipe-section-title\">Ingrédients</div><ul>`; r.ingredients.forEach(x=>{recipeHtml+=`<li>\${safe(x)}</li>`;}); recipeHtml+='</ul>'; }
      if(r.steps?.length){ recipeHtml+=`<div class=\"recipe-section-title\">Étapes</div><ol>`; r.steps.forEach(x=>{recipeHtml+=`<li>\${safe(x)}</li>`;}); recipeHtml+='</ol>'; }
      recipeHtml+='</div>';
    }

    const notesHtml=block.notes?`<div style=\"opacity:.7;font-size:12px;margin-top:6px;\">💡 \${safe(block.notes)}</div>`:'';

    const card=document.createElement('div');
    card.className='glass chat-bubble-assistant';
    card.style.cssText='padding:14px;border-radius:14px;max-width:92%;font-size:14px;';
    card.innerHTML=`
      <div style=\"font-weight:900;margin-bottom:8px;\">🍽️ \${safe(block.title)}
        <span class=\"pill kcal\" style=\"margin-left:8px;vertical-align:middle;\"><i class=\"fa-solid fa-fire\"></i> \${kcal} kcal</span>
      </div>
      \${itemsHtml}\${notesHtml}\${recipeHtml}
      <div style=\"margin-top:12px;\">
        <button class=\"btn btn-primary add-btn\" type=\"button\" style=\"font-size:13px;padding:8px 14px;\">
          <i class=\"fa-solid fa-plus\"></i> Ajouter ce repas
        </button>
      </div>`;

    card.querySelector('.add-btn').addEventListener('click', async function(){
      this.disabled=true; this.innerHTML='<i class=\"fa-solid fa-spinner fa-spin\"></i> Ajout…';
      try {
        const res=await fetch(ADD_URL,{method:'POST',headers:{'Content-Type':'application/json'},body:JSON.stringify({title:block.title,mealType:block.mealType,items:block.items})});
        const data=await res.json().catch(()=>({}));
        if(!res.ok||!data.ok) throw new Error(data.error||'Erreur');
        bubble('✅ Repas ajouté ! Rechargement…');
        setTimeout(()=>window.location.reload(),700);
      } catch(e){
        bubble('❌ '+safe(e.message||'Erreur'));
        this.disabled=false; this.innerHTML='<i class=\"fa-solid fa-plus\"></i> Ajouter ce repas';
      }
    });

    messages.appendChild(card);
    messages.scrollTop=messages.scrollHeight;
  }

  function handleResponse(data){
    if(data.assistantText) bubble(safe(data.assistantText));
    (data.blocks||[]).forEach(b=>{ if(b?.type==='meal_proposal') renderProposal(b); });
  }

  async function send(){
    if(isSending) return;
    if(pendingPhotoB64){ await sendPhoto(); return; }
    const text=(input.value||'').trim();
    if(!text) return;

    isSending=true; sendBtn.disabled=true; input.disabled=true;
    bubble(`<i class=\"fa-solid fa-user\" style=\"opacity:.5;margin-right:4px;\"></i>\${safe(text)}`,'user');
    input.value='';
    const typing=addTyping();
    try {
      const res=await fetch(CHAT_URL,{method:'POST',headers:{'Content-Type':'application/json'},body:JSON.stringify({message:text}),signal:AbortSignal.timeout(30000)});
      const data=await res.json().catch(()=>({}));
      typing.remove();
      if(!res.ok) throw new Error(data.error||'Erreur serveur');
      handleResponse(data);
    } catch(e){
      typing.remove();
      bubble('❌ '+safe(e.name==='TimeoutError'?'Timeout — réessaie.':(e.message||'Erreur')));
    } finally {
      isSending=false; sendBtn.disabled=false; input.disabled=false;
      setTimeout(()=>input?.focus(),50);
    }
  }

  async function sendPhoto(){
    const b64=pendingPhotoB64, mime=pendingMime, thumbSrc=photoThumb.src;
    bubble(`<img src=\"\${thumbSrc}\" style=\"max-width:100%;border-radius:10px;max-height:160px;object-fit:cover;\"/>`,'user');
    resetPhoto();
    isSending=true; sendBtn.disabled=true;
    const typing=addTyping();
    try {
      const res=await fetch(PHOTO_URL,{method:'POST',headers:{'Content-Type':'application/json'},body:JSON.stringify({image:b64,mimeType:mime}),signal:AbortSignal.timeout(30000)});
      const data=await res.json().catch(()=>({}));
      typing.remove();
      if(!res.ok) throw new Error(data.error||'Erreur analyse photo');
      handleResponse(data);
    } catch(e){
      typing.remove();
      bubble('❌ '+safe(e.name==='TimeoutError'?'Timeout — réessaie.':(e.message||'Erreur')));
    } finally {
      isSending=false; sendBtn.disabled=false; setTimeout(()=>input?.focus(),50);
    }
  }

  sendBtn?.addEventListener('click', send);
  input?.addEventListener('keydown', e=>{ if(e.key==='Enter') send(); });


  /* ═══════════════════════════════════════
     WEEKLY ANALYSIS
  ═══════════════════════════════════════ */
  const openWeeklyBtn  = document.getElementById('openWeeklyBtn');
  const closeWeeklyBtn = document.getElementById('closeWeeklyBtn');
  const weeklyOverlay  = document.getElementById('weeklyOverlay');
  const weeklyModal    = document.getElementById('weeklyModal');
  const weeklyInitial  = document.getElementById('weeklyInitial');
  const weeklyResult   = document.getElementById('weeklyResult');
  const generateBtn    = document.getElementById('generateWeeklyBtn');

  const WEEKLY_URL = \"";
        // line 599
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_repas_weekly_analysis");
        yield "\";

  function openWeekly(){ weeklyOverlay.style.display='block'; weeklyModal.style.display='block'; }
  function closeWeekly(){ weeklyOverlay.style.display='none'; weeklyModal.style.display='none'; }

  openWeeklyBtn?.addEventListener('click', openWeekly);
  closeWeeklyBtn?.addEventListener('click', closeWeekly);
  weeklyOverlay?.addEventListener('click', closeWeekly);

  generateBtn?.addEventListener('click', async function(){
    this.disabled = true;
    this.innerHTML = '<i class=\"fa-solid fa-spinner fa-spin\"></i> Analyse en cours…';

    try {
      const res  = await fetch(WEEKLY_URL, { signal: AbortSignal.timeout(30000) });
      const json = await res.json().catch(()=>({}));

      if (res.status === 422) {
        weeklyInitial.innerHTML = `
          <div style=\"font-size:48px;\">📭</div>
          <div style=\"font-size:16px; font-weight:800;\">Pas assez de données</div>
          <div style=\"opacity:.7; font-size:14px;\">\${safe(json.message || 'Ajoute des repas cette semaine pour obtenir une analyse.')}</div>
          <button class=\"btn btn-weekly\" id=\"retryWeeklyBtn\" style=\"margin-top:10px;\">
            <i class=\"fa-solid fa-rotate-left\"></i> Réessayer
          </button>`;
        document.getElementById('retryWeeklyBtn')?.addEventListener('click', ()=>{ location.reload(); });
        return;
      }

      if (!res.ok || !json.ok) throw new Error(json.error || 'Erreur analyse');
      renderWeeklyResult(json);

    } catch(e) {
      weeklyInitial.innerHTML = `
        <div style=\"font-size:48px;\">❌</div>
        <div style=\"font-size:16px; font-weight:800;\">Erreur</div>
        <div style=\"opacity:.7; font-size:14px;\">\${safe(e.message||'Erreur inconnue')}</div>
        <button class=\"btn btn-weekly\" onclick=\"location.reload()\" style=\"margin-top:10px;\">Réessayer</button>`;
    }
  });

  function scoreColor(s){ if(s>=80) return '#00d4aa'; if(s>=60) return '#60a5fa'; if(s>=40) return '#f59e0b'; return '#ef4444'; }
  function scoreLabel(s){ if(s>=80) return 'Excellent'; if(s>=60) return 'Bon'; if(s>=40) return 'Moyen'; return 'Faible'; }

  function renderWeeklyResult(json){
    const a=json.analyse, stats=json.stats, score=a.score_semaine??0, color=scoreColor(score);
    weeklyInitial.style.display='none';
    weeklyResult.style.display='flex';
    weeklyResult.innerHTML=`
      <div style=\"display:flex; align-items:center; gap:20px; flex-wrap:wrap;\">
        <div class=\"weekly-score-ring\" style=\"border-color:\${color}; color:\${color};\">
          <span>\${score}</span>
          <span style=\"font-size:11px; font-weight:600; opacity:.8;\">/100</span>
        </div>
        <div style=\"flex:1;\">
          <div style=\"font-size:20px; font-weight:900; color:\${color};\">\${scoreLabel(score)}</div>
          <div style=\"opacity:.7; font-size:13px; margin-top:4px;\">\${safe(a.resume||'')}</div>
        </div>
      </div>
      <div class=\"weekly-stats-row\">
        <div class=\"weekly-stat\"><div class=\"val\">\${stats.totalRepas}</div><div class=\"lbl\">Repas</div></div>
        <div class=\"weekly-stat\"><div class=\"val\">\${stats.totalJours}</div><div class=\"lbl\">Jours</div></div>
        <div class=\"weekly-stat\"><div class=\"val\" style=\"color:#fde68a;\">\${stats.moyenneCals}</div><div class=\"lbl\">kcal/jour moy.</div></div>
      </div>
      <div class=\"weekly-section\">
        <div class=\"weekly-section-title\">✅ Points positifs</div>
        \${(a.points_positifs||[]).map(p=>`<div class=\"weekly-item pos\">\${safe(p)}</div>`).join('')}
      </div>
      <div class=\"weekly-section\">
        <div class=\"weekly-section-title\">⚠️ À améliorer</div>
        \${(a.points_amelioration||[]).map(p=>`<div class=\"weekly-item neg\">\${safe(p)}</div>`).join('')}
      </div>
      \${(a.analyse_par_jour||[]).length ? `
      <div class=\"weekly-section\">
        <div class=\"weekly-section-title\">📅 Analyse par jour</div>
        \${(a.analyse_par_jour||[]).map(j=>`<div class=\"weekly-item day\"><span style=\"font-weight:800;min-width:80px;opacity:.8;\">\${safe(j.jour)}</span><span style=\"opacity:.85;\">\${safe(j.commentaire)}</span></div>`).join('')}
      </div>` : ''}
      <div class=\"weekly-section\">
        <div class=\"weekly-section-title\">💡 Conseils personnalisés</div>
        \${(a.conseils||[]).map(c=>`<div class=\"weekly-item tip\">\${safe(c)}</div>`).join('')}
      </div>
      <div>
        <button class=\"btn btn-weekly\" id=\"regenBtn\" type=\"button\">
          <i class=\"fa-solid fa-rotate-right\"></i> Regénérer l'analyse
        </button>
      </div>`;

    document.getElementById('regenBtn')?.addEventListener('click', ()=>{
      weeklyResult.style.display='none';
      weeklyResult.innerHTML='';
      weeklyInitial.style.display='flex';
      generateBtn.disabled=false;
      generateBtn.innerHTML='<i class=\"fa-solid fa-bolt\"></i> Générer l\\'analyse';
    });
  }


  /* ═══════════════════════════════════════
     MAILING
  ═══════════════════════════════════════ */
  const MAILING_URL    = \"";
        // line 699
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_mailing_weekly");
        yield "\";
  const openMailingBtn  = document.getElementById('openMailingBtn');
  const closeMailingBtn = document.getElementById('closeMailingBtn');
  const cancelMailingBtn= document.getElementById('cancelMailingBtn');
  const mailingOverlay  = document.getElementById('mailingOverlay');
  const mailingModal    = document.getElementById('mailingModal');
  const sendMailingBtn  = document.getElementById('sendMailingBtn');
  const mailingResult   = document.getElementById('mailingResult');

  function openMailing(){ mailingOverlay.style.display='block'; mailingModal.style.display='block'; }
  function closeMailing(){
    mailingOverlay.style.display='none';
    mailingModal.style.display='none';
    mailingResult.style.display='none';
    sendMailingBtn.disabled=false;
    sendMailingBtn.innerHTML='<i class=\"fa-solid fa-paper-plane\"></i> Générer et envoyer';
  }

  openMailingBtn?.addEventListener('click', openMailing);
  closeMailingBtn?.addEventListener('click', closeMailing);
  cancelMailingBtn?.addEventListener('click', closeMailing);
  mailingOverlay?.addEventListener('click', closeMailing);

  sendMailingBtn?.addEventListener('click', async function(){
    this.disabled=true;
    this.innerHTML='<i class=\"fa-solid fa-spinner fa-spin\"></i> Envoi…';
    mailingResult.style.display='none';

    try {
      const res  = await fetch(MAILING_URL, { method:'POST', headers:{'Content-Type':'application/json'}, signal:AbortSignal.timeout(45000) });
      const data = await res.json().catch(()=>({success:false, message:'Réponse invalide'}));
      const ok   = !!data.success;
      const bg   = ok ? 'rgba(0,212,170,.12)' : 'rgba(239,68,68,.12)';
      const bd   = ok ? 'rgba(0,212,170,.3)'  : 'rgba(239,68,68,.3)';
      mailingResult.style.cssText=`display:block;padding:12px 16px;border-radius:10px;margin-bottom:18px;font-size:14px;background:\${bg};border:1px solid \${bd};`;
      mailingResult.innerHTML=(ok?'✅ ':'❌ ')+(data.message??'Erreur');
      this.innerHTML=ok?'<i class=\"fa-solid fa-check\"></i> Envoyé !':'<i class=\"fa-solid fa-rotate-right\"></i> Réessayer';
      if(!ok) this.disabled=false;
    } catch(e){
      mailingResult.style.cssText='display:block;padding:12px 16px;border-radius:10px;margin-bottom:18px;font-size:14px;background:rgba(239,68,68,.12);border:1px solid rgba(239,68,68,.3);';
      mailingResult.innerHTML='❌ '+(e.name==='TimeoutError'?'Timeout — réessayez.':'Erreur réseau');
      this.disabled=false;
      this.innerHTML='<i class=\"fa-solid fa-rotate-right\"></i> Réessayer';
    }
  });

})();
</script>

</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/repas/index.html.twig";
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
        return array (  862 => 699,  759 => 599,  593 => 436,  589 => 435,  585 => 434,  453 => 304,  450 => 303,  440 => 299,  436 => 298,  430 => 295,  426 => 294,  422 => 293,  416 => 290,  411 => 288,  407 => 287,  402 => 284,  397 => 283,  393 => 281,  391 => 280,  385 => 276,  379 => 274,  377 => 273,  373 => 272,  369 => 271,  366 => 270,  360 => 268,  358 => 267,  353 => 265,  347 => 262,  337 => 255,  330 => 250,  317 => 239,  300 => 225,  295 => 223,  291 => 222,  287 => 221,  283 => 220,  279 => 219,  275 => 218,  271 => 217,  267 => 216,  58 => 10,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/front/repas/index.html.twig #}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
  <title>Meals - AIVA</title>

  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"{{ asset('css/stylefront.css') }}\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">

  <style>
    *, *::before, *::after { box-sizing: border-box; }

    input, select, textarea {
      width: 100%; max-width: 100%;
      padding: 10px 12px; border-radius: 12px;
      border: 1px solid rgba(255,255,255,.15);
      background: rgba(0,0,0,.18); color: inherit;
      outline: none; font-size: 14px;
    }
    input:focus, select:focus, textarea:focus {
      border-color: #00d4aa;
      box-shadow: 0 0 0 3px rgba(0,212,170,.25);
    }

    .section-head { margin-top:22px; display:flex; justify-content:space-between; gap:12px; flex-wrap:wrap; align-items:center; }
    .section-title { margin:0; font-size:16px; font-weight:800; opacity:.95; }

    .glass {
      border-radius: 18px;
      background: linear-gradient(135deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
      border: 1px solid rgba(255,255,255,.12);
      backdrop-filter: blur(10px);
      position: relative;
    }

    .table-wrap { margin-top:14px; padding:14px; overflow:auto; }
    .inline-form { display:flex; gap:10px; flex-wrap:wrap; align-items:flex-end; }
    .inline-form label { display:block; margin-bottom:6px; font-size:13px; opacity:.8; }

    .pill {
      display:inline-flex; align-items:center; gap:6px;
      padding: 6px 10px; border-radius: 999px;
      border: 1px solid rgba(255,255,255,.18);
      background: rgba(255,255,255,.06);
      font-size: 12px; font-weight: 800; white-space: nowrap;
    }
    .pill.kcal { border-color:rgba(245,158,11,.35); background:rgba(245,158,11,.12); color:#fde68a; }

    .btn {
      display:inline-flex; align-items:center; gap:8px;
      padding: 10px 14px; border-radius: 12px;
      font-weight: 700; font-size: 14px;
      text-decoration:none; border: 1px solid transparent;
      cursor:pointer; transition: .2s ease;
      white-space: nowrap; user-select:none;
    }
    .btn-primary { background: linear-gradient(135deg, #00d4aa, #a855f7); color: #020617; }
    .btn-primary:hover { transform: translateY(-1px); box-shadow: 0 10px 25px rgba(0,0,0,.25); }
    .btn-secondary { background: rgba(255,255,255,.06); border-color: rgba(255,255,255,.18); color: rgba(226,232,240,.95); }
    .btn-secondary:hover { background: rgba(255,255,255,.12); }
    .btn-danger { background: rgba(239,68,68,.12); border-color: rgba(239,68,68,.35); color: #fecaca; }
    .btn-danger:hover { background: rgba(239,68,68,.22); }
    .btn-weekly {
      background: rgba(251,191,36,.1);
      border-color: rgba(251,191,36,.4);
      color: #fde68a;
    }
    .btn-weekly:hover { background: rgba(251,191,36,.2); }
    .btn:disabled { opacity:.5; cursor:not-allowed; transform:none !important; }

    .cards-grid { margin-top:14px; display:grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap:18px; }

    .meal-card {
      padding: 18px; border-radius: 18px;
      transition: .25s ease; display:flex; flex-direction:column; gap:14px; overflow:hidden;
    }
    .meal-card:hover { transform: translateY(-4px); box-shadow: 0 20px 40px rgba(0,0,0,.35); }
    .meal-card::before {
      content:\"\"; position:absolute; inset:0; border-radius:18px; padding:1px;
      background:linear-gradient(135deg,#00d4aa,#a855f7,#ec4899);
      -webkit-mask: linear-gradient(#000 0 0) content-box, linear-gradient(#000 0 0);
      -webkit-mask-composite:xor; mask-composite:exclude; pointer-events:none; opacity:.65;
    }
    .meal-header { display:flex; justify-content:space-between; align-items:flex-start; gap:10px; }
    .meal-id { font-size:12px; opacity:.65; margin-bottom:4px; }
    .meal-title { font-size:16px; font-weight:900; letter-spacing:.2px; }
    .meal-meta { display:flex; flex-wrap:wrap; gap:8px; }
    .meal-actions { display:flex; flex-wrap:wrap; gap:8px; margin-top:auto; }

    /* CHAT */
    .chat-bubble-user { align-self:flex-end; background: rgba(0,212,170,.12) !important; border-color: rgba(0,212,170,.3) !important; }
    .chat-bubble-assistant { align-self:flex-start; }
    .typing { display:inline-flex; gap:6px; align-items:center; font-size:13px; opacity:.85; }
    .dot { width:7px; height:7px; border-radius:50%; background:#00d4aa; animation: blink 1.2s infinite; }
    .dot:nth-child(2){ animation-delay:.2s; }
    .dot:nth-child(3){ animation-delay:.4s; }
    @keyframes blink {
      0%,80%,100% { opacity:.2; transform:scale(.8); }
      40% { opacity:1; transform:scale(1.2); }
    }
    .recipe-block { font-size:13px; line-height:1.6; }
    .recipe-block ul, .recipe-block ol { margin:6px 0; padding-left:18px; }
    .recipe-block li { margin-bottom:3px; }
    .recipe-title { font-weight:900; font-size:14px; margin-bottom:8px; }
    .recipe-section-title { font-weight:700; margin:8px 0 4px; opacity:.85; }

    /* PHOTO */
    #photoPreview { display:none; position:relative; border-radius:12px; overflow:hidden; }
    #photoThumb { width:100%; max-height:130px; object-fit:cover; border-radius:12px; display:block; }
    #clearPhoto {
      position:absolute; top:6px; right:6px;
      background:rgba(0,0,0,.7); border:none; color:white;
      border-radius:50%; width:26px; height:26px;
      cursor:pointer; font-size:13px;
      display:flex; align-items:center; justify-content:center; transition:.2s;
    }
    #clearPhoto:hover { background:rgba(239,68,68,.8); }
    .btn-photo {
      background:rgba(168,85,247,.12); border-color:rgba(168,85,247,.4);
      color:#d8b4fe; flex:1; justify-content:center;
    }
    .btn-photo:hover { background:rgba(168,85,247,.22); }

    /* WEEKLY MODAL */
    .weekly-modal-inner {
      height: 100%;
      display: flex;
      flex-direction: column;
      overflow: hidden;
      border-radius: 18px;
    }
    .weekly-body {
      flex: 1;
      overflow-y: auto;
      padding: 20px;
      display: flex;
      flex-direction: column;
      gap: 18px;
    }
    .weekly-score-ring {
      width: 90px; height: 90px;
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      flex-direction: column;
      font-size: 22px; font-weight: 900;
      border: 4px solid;
      flex-shrink: 0;
    }
    .weekly-section { display:flex; flex-direction:column; gap:8px; }
    .weekly-section-title {
      font-size: 13px; font-weight: 800;
      opacity: .7; text-transform: uppercase;
      letter-spacing: .5px;
    }
    .weekly-item {
      padding: 10px 14px;
      border-radius: 12px;
      font-size: 13px;
      line-height: 1.5;
    }
    .weekly-item.pos {
      background: rgba(0,212,170,.08);
      border: 1px solid rgba(0,212,170,.2);
    }
    .weekly-item.neg {
      background: rgba(251,191,36,.08);
      border: 1px solid rgba(251,191,36,.2);
    }
    .weekly-item.tip {
      background: rgba(168,85,247,.08);
      border: 1px solid rgba(168,85,247,.2);
    }
    .weekly-item.day {
      background: rgba(255,255,255,.04);
      border: 1px solid rgba(255,255,255,.08);
      display: flex; gap: 10px; align-items: flex-start;
    }
    .weekly-stats-row {
      display: flex; gap: 10px; flex-wrap: wrap;
    }
    .weekly-stat {
      flex: 1; min-width: 80px;
      padding: 12px;
      border-radius: 12px;
      background: rgba(255,255,255,.04);
      border: 1px solid rgba(255,255,255,.08);
      text-align: center;
    }
    .weekly-stat .val { font-size: 20px; font-weight: 900; }
    .weekly-stat .lbl { font-size: 11px; opacity: .6; margin-top: 2px; }
  </style>
</head>

<body>
<div class=\"container\">

  <nav class=\"navbar\">
    <div class=\"logo\">
      <svg width=\"32\" height=\"32\" viewBox=\"0 0 100 100\">
        <defs>
          <linearGradient id=\"grad\" x1=\"0%\" y1=\"0%\" x2=\"100%\" y2=\"100%\">
            <stop offset=\"0%\" stop-color=\"#a855f7\"/>
            <stop offset=\"50%\" stop-color=\"#00d4aa\"/>
            <stop offset=\"100%\" stop-color=\"#ec4899\"/>
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

    <h1 class=\"hero-title\">🥗 Meals</h1>
    <p class=\"hero-description\">Monitor your meals and calories.</p>

    <div class=\"section-head\">
      <h2 class=\"section-title\">Mes repas</h2>
      <div style=\"display:flex; gap:10px; flex-wrap:wrap;\">
        <a class=\"btn btn-primary\" href=\"{{ path('front_repas_new') }}\">
          <i class=\"fa-solid fa-plus\"></i> Add Meal
        </a>
        <button class=\"btn btn-secondary\" type=\"button\" id=\"openChatBtn\">
          <i class=\"fa-solid fa-robot\"></i> Assistant
        </button>
        <button class=\"btn btn-weekly\" type=\"button\" id=\"openWeeklyBtn\">
          <i class=\"fa-solid fa-chart-line\"></i> Analyse semaine
        </button>

        {# ✅ BOUTON MAILING AJOUTÉ ICI #}
        <button class=\"btn\" type=\"button\" id=\"openMailingBtn\"
                style=\"background:rgba(239,68,68,.10);border-color:rgba(239,68,68,.35);color:#fca5a5;\">
          <i class=\"fa-solid fa-envelope\"></i> Mailing
        </button>

        <a class=\"btn btn-secondary\" href=\"{{ path('front_aliment_index') }}\">
          <i class=\"fa-solid fa-apple-whole\"></i> Aliments
        </a>
      </div>
    </div>

    <div class=\"glass table-wrap\" style=\"margin-top:16px;\">
      <form method=\"get\" action=\"{{ path('front_repas_index') }}\" class=\"inline-form\">
        <div style=\"min-width:240px; flex:1;\">
          <label for=\"search\">Search by name</label>
          <input id=\"search\" type=\"text\" name=\"search\" value=\"{{ searchNom }}\" placeholder=\"Search by name...\">
        </div>
        {% if sortCalories %}
          <input type=\"hidden\" name=\"sort\" value=\"{{ sortCalories }}\">
        {% endif %}
        <button class=\"btn btn-primary\" type=\"submit\"><i class=\"fa-solid fa-magnifying-glass\"></i> Search</button>
        <a class=\"btn btn-secondary\" href=\"{{ path('front_repas_index', {'sort':'asc','search':searchNom}) }}\"><i class=\"fa-solid fa-arrow-up\"></i> Calories</a>
        <a class=\"btn btn-secondary\" href=\"{{ path('front_repas_index', {'sort':'desc','search':searchNom}) }}\"><i class=\"fa-solid fa-arrow-down\"></i> Calories</a>
        {% if searchNom or sortCalories %}
          <a class=\"btn btn-danger\" href=\"{{ path('front_repas_index') }}\"><i class=\"fa-solid fa-rotate-left\"></i> Reset</a>
        {% endif %}
      </form>
    </div>

    <div class=\"cards-grid\">
      {% if repas|length == 0 %}
        <div class=\"glass meal-card\"><div style=\"text-align:center;padding:18px;opacity:.8;\">No meals found.</div></div>
      {% else %}
        {% for r in repas %}
          <div class=\"glass meal-card\">
            <div class=\"meal-header\">
              <div>
                <div class=\"meal-id\">#{{ r.id }}</div>
                <div class=\"meal-title\">{{ r.nom }}</div>
              </div>
              <span class=\"pill kcal\"><i class=\"fa-solid fa-fire\"></i> {{ r.calories }} kcal</span>
            </div>
            <div class=\"meal-meta\">
              <span class=\"pill\"><i class=\"fa-solid fa-layer-group\"></i> {{ r.type|replace({'-':' '})|title }}</span>
              <span class=\"pill\"><i class=\"fa-regular fa-calendar\"></i> {{ r.date ? r.date|date('Y-m-d') : 'N/A' }}</span>
              <span class=\"pill\"><i class=\"fa-regular fa-clock\"></i> {{ r.heure ? r.heure|date('H:i') : 'N/A' }}</span>
            </div>
            <div class=\"meal-actions\">
              <a class=\"btn btn-secondary\" href=\"{{ path('front_repas_show', {'id': r.id}) }}\"><i class=\"fa-regular fa-eye\"></i> View</a>
              <a class=\"btn btn-secondary\" href=\"{{ path('front_repas_edit', {'id': r.id}) }}\"><i class=\"fa-regular fa-pen-to-square\"></i> Edit</a>
            </div>
          </div>
        {% endfor %}
      {% endif %}
    </div>

  </main>
</div>

<!-- ===================== CHAT OVERLAY + MODAL ===================== -->
<div id=\"chatOverlay\" style=\"display:none; position:fixed; inset:0; background:rgba(0,0,0,.55); z-index:9998;\"></div>

<div id=\"chatModal\" style=\"display:none; position:fixed; right:18px; bottom:18px; width:min(420px,92vw); height:min(680px,85vh); z-index:9999;\">
  <div class=\"glass\" style=\"height:100%; display:flex; flex-direction:column; overflow:hidden; border-radius:18px;\">
    <div style=\"display:flex; align-items:center; justify-content:space-between; padding:14px; border-bottom:1px solid rgba(255,255,255,.12);\">
      <div style=\"font-weight:900; display:flex; gap:10px; align-items:center;\">
        <i class=\"fa-solid fa-robot\" style=\"color:#00d4aa;\"></i> Assistant Repas
        <span style=\"font-size:11px; opacity:.6; font-weight:500;\">Powered by Groq ⚡</span>
      </div>
      <button class=\"btn btn-danger\" type=\"button\" id=\"closeChatBtn\" style=\"padding:6px 10px;\">
        <i class=\"fa-solid fa-xmark\"></i>
      </button>
    </div>

    <div id=\"chatMessages\" style=\"padding:14px; flex:1; overflow-y:auto; display:flex; flex-direction:column; gap:10px;\">
      <div class=\"glass chat-bubble-assistant\" style=\"padding:12px; border-radius:14px; max-width:92%; font-size:14px;\">
        Salut 👋 Dis-moi ce que tu veux !<br>
        <span style=\"opacity:.7; font-size:12px;\">
          ✍️ Ex: \"propose un dîner léger\"<br>
          📸 Ou envoie une photo de ton plat !
        </span>
      </div>
    </div>

    <div style=\"padding:12px; border-top:1px solid rgba(255,255,255,.12); display:flex; flex-direction:column; gap:8px;\">
      <div id=\"photoPreview\">
        <img id=\"photoThumb\" src=\"\" alt=\"preview\" />
        <button id=\"clearPhoto\" type=\"button\" title=\"Supprimer\">✕</button>
      </div>
      <div style=\"display:flex; gap:8px; align-items:center;\">
        <label for=\"photoInput\" class=\"btn btn-photo\" style=\"padding:10px 12px; cursor:pointer;\" title=\"Analyser une photo\">
          <i class=\"fa-solid fa-camera\"></i> Photo
        </label>
        <input type=\"file\" id=\"photoInput\" accept=\"image/jpeg,image/png,image/webp\" style=\"display:none;\" />
        <input id=\"chatInput\" type=\"text\" placeholder=\"Ou écris ici…\" style=\"flex:1; min-width:0;\" />
        <button class=\"btn btn-primary\" type=\"button\" id=\"sendChatBtn\" style=\"padding:10px 14px;\">
          <i class=\"fa-solid fa-paper-plane\"></i>
        </button>
      </div>
    </div>
  </div>
</div>

<!-- ===================== WEEKLY ANALYSIS MODAL ===================== -->
<div id=\"weeklyOverlay\" style=\"display:none; position:fixed; inset:0; background:rgba(0,0,0,.65); z-index:10000;\"></div>

<div id=\"weeklyModal\" style=\"display:none; position:fixed; top:50%; left:50%; transform:translate(-50%,-50%); width:min(560px,94vw); height:min(700px,88vh); z-index:10001;\">
  <div class=\"glass weekly-modal-inner\">
    <div style=\"display:flex; align-items:center; justify-content:space-between; padding:16px 20px; border-bottom:1px solid rgba(255,255,255,.12); flex-shrink:0;\">
      <div style=\"font-weight:900; font-size:16px; display:flex; gap:10px; align-items:center;\">
        <i class=\"fa-solid fa-chart-line\" style=\"color:#fde68a;\"></i>
        Analyse de la semaine
      </div>
      <button class=\"btn btn-danger\" type=\"button\" id=\"closeWeeklyBtn\" style=\"padding:6px 10px;\">
        <i class=\"fa-solid fa-xmark\"></i>
      </button>
    </div>
    <div class=\"weekly-body\" id=\"weeklyBody\">
      <div id=\"weeklyInitial\" style=\"display:flex; flex-direction:column; align-items:center; justify-content:center; flex:1; gap:20px; text-align:center; padding:40px 20px;\">
        <div style=\"font-size:48px;\">🧠</div>
        <div>
          <div style=\"font-size:18px; font-weight:900; margin-bottom:8px;\">Analyse IA de ta semaine</div>
          <div style=\"opacity:.7; font-size:14px; line-height:1.6;\">
            L'IA analyse tes repas des 7 derniers jours et génère un rapport personnalisé : tendances, points forts, conseils.
          </div>
        </div>
        <button class=\"btn btn-weekly\" type=\"button\" id=\"generateWeeklyBtn\" style=\"font-size:15px; padding:14px 28px;\">
          <i class=\"fa-solid fa-bolt\"></i> Générer l'analyse
        </button>
      </div>
      <div id=\"weeklyResult\" style=\"display:none; flex-direction:column; gap:18px;\"></div>
    </div>
  </div>
</div>

<!-- ===================== MAILING MODAL ===================== -->
<div id=\"mailingOverlay\" style=\"display:none; position:fixed; inset:0; background:rgba(0,0,0,.6); z-index:10002;\"></div>

<div id=\"mailingModal\" style=\"display:none; position:fixed; top:50%; left:50%; transform:translate(-50%,-50%); width:min(460px,92vw); z-index:10003;\">
  <div class=\"glass\" style=\"border-radius:18px; overflow:hidden;\">

    <div style=\"padding:18px 22px; border-bottom:1px solid rgba(255,255,255,.1); display:flex; align-items:center; justify-content:space-between;\">
      <div style=\"font-weight:900; font-size:15px; display:flex; gap:10px; align-items:center;\">
        <i class=\"fa-solid fa-envelope\" style=\"color:#fca5a5;\"></i> Rapport hebdomadaire
      </div>
      <button id=\"closeMailingBtn\" class=\"btn btn-danger\" style=\"padding:5px 10px;\">
        <i class=\"fa-solid fa-xmark\"></i>
      </button>
    </div>

    <div style=\"padding:22px;\">
      <div style=\"font-size:14px; color:rgba(226,232,240,.85); line-height:1.6; margin-bottom:18px;\">
        Cliquez sur <strong>Générer et envoyer</strong> pour envoyer votre rapport nutritionnel hebdomadaire par email.
      </div>
      <div id=\"mailingResult\" style=\"display:none; padding:12px 16px; border-radius:10px; margin-bottom:18px; font-size:14px;\"></div>
      <div style=\"display:flex; gap:10px;\">
        <button id=\"sendMailingBtn\" class=\"btn btn-primary\" type=\"button\" style=\"flex:1; justify-content:center;\">
          <i class=\"fa-solid fa-paper-plane\"></i> Générer et envoyer
        </button>
        <button id=\"cancelMailingBtn\" class=\"btn btn-secondary\" type=\"button\">Annuler</button>
      </div>
    </div>

  </div>
</div>

<script>
(function(){

  /* ═══════════════════════════════════════
     CHAT
  ═══════════════════════════════════════ */
  const openBtn      = document.getElementById('openChatBtn');
  const closeBtn     = document.getElementById('closeChatBtn');
  const overlay      = document.getElementById('chatOverlay');
  const modal        = document.getElementById('chatModal');
  const messages     = document.getElementById('chatMessages');
  const input        = document.getElementById('chatInput');
  const sendBtn      = document.getElementById('sendChatBtn');
  const photoInput   = document.getElementById('photoInput');
  const photoPreview = document.getElementById('photoPreview');
  const photoThumb   = document.getElementById('photoThumb');
  const clearPhoto   = document.getElementById('clearPhoto');

  const CHAT_URL  = \"{{ path('front_repas_chat') }}\";
  const ADD_URL   = \"{{ path('front_repas_from_proposal') }}\";
  const PHOTO_URL = \"{{ path('front_repas_analyze_photo') }}\";

  let isSending = false, pendingPhotoB64 = null, pendingMime = 'image/jpeg';

  function openChat(){ overlay.style.display='block'; modal.style.display='block'; setTimeout(()=>input?.focus(),50); }
  function closeChat(){ overlay.style.display='none'; modal.style.display='none'; }
  openBtn?.addEventListener('click', openChat);
  closeBtn?.addEventListener('click', closeChat);
  overlay?.addEventListener('click', closeChat);

  function safe(s){ return String(s??'').replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;'); }

  function bubble(html, who='assistant'){
    const d = document.createElement('div');
    d.className = 'glass chat-bubble-' + who;
    d.style.cssText = 'padding:12px; border-radius:14px; max-width:92%; font-size:14px; line-height:1.5;';
    d.innerHTML = html;
    messages.appendChild(d);
    messages.scrollTop = messages.scrollHeight;
    return d;
  }

  function addTyping(){
    const d = document.createElement('div');
    d.className = 'glass chat-bubble-assistant';
    d.style.cssText = 'padding:12px; border-radius:14px; max-width:92%;';
    d.innerHTML = '<div class=\"typing\"><span class=\"dot\"></span><span class=\"dot\"></span><span class=\"dot\"></span></div>';
    messages.appendChild(d);
    messages.scrollTop = messages.scrollHeight;
    return d;
  }

  photoInput?.addEventListener('change', function(){
    const file = this.files[0]; if(!file) return;
    pendingMime = file.type || 'image/jpeg';
    const reader = new FileReader();
    reader.onload = e => {
      pendingPhotoB64 = e.target.result.split(',')[1];
      photoThumb.src  = e.target.result;
      photoPreview.style.display = 'block';
    };
    reader.readAsDataURL(file);
  });

  clearPhoto?.addEventListener('click', resetPhoto);
  function resetPhoto(){ pendingPhotoB64=null; photoInput.value=''; photoPreview.style.display='none'; photoThumb.src=''; }

  function renderProposal(block){
    const kcal = block.estimated?.calories ?? 0;
    let itemsHtml = '<ul style=\"margin:6px 0 0;padding-left:18px;\">';
    (block.items||[]).forEach(it=>{
      itemsHtml+=`<li>\${safe(it.alimentName)} — \${it.quantity??''} \${safe(it.unit??'')} <span style=\"opacity:.6;font-size:12px;\">(\${it.nutrients?.calories??0} kcal)</span></li>`;
    });
    itemsHtml+='</ul>';

    let recipeHtml='';
    const r=block.recipe;
    if(r&&(r.ingredients?.length||r.steps?.length)){
      recipeHtml=`<div class=\"recipe-block\" style=\"margin-top:10px;padding-top:10px;border-top:1px solid rgba(255,255,255,.1);\"><div class=\"recipe-title\">📋 Recette</div>`;
      if(r.ingredients?.length){ recipeHtml+=`<div class=\"recipe-section-title\">Ingrédients</div><ul>`; r.ingredients.forEach(x=>{recipeHtml+=`<li>\${safe(x)}</li>`;}); recipeHtml+='</ul>'; }
      if(r.steps?.length){ recipeHtml+=`<div class=\"recipe-section-title\">Étapes</div><ol>`; r.steps.forEach(x=>{recipeHtml+=`<li>\${safe(x)}</li>`;}); recipeHtml+='</ol>'; }
      recipeHtml+='</div>';
    }

    const notesHtml=block.notes?`<div style=\"opacity:.7;font-size:12px;margin-top:6px;\">💡 \${safe(block.notes)}</div>`:'';

    const card=document.createElement('div');
    card.className='glass chat-bubble-assistant';
    card.style.cssText='padding:14px;border-radius:14px;max-width:92%;font-size:14px;';
    card.innerHTML=`
      <div style=\"font-weight:900;margin-bottom:8px;\">🍽️ \${safe(block.title)}
        <span class=\"pill kcal\" style=\"margin-left:8px;vertical-align:middle;\"><i class=\"fa-solid fa-fire\"></i> \${kcal} kcal</span>
      </div>
      \${itemsHtml}\${notesHtml}\${recipeHtml}
      <div style=\"margin-top:12px;\">
        <button class=\"btn btn-primary add-btn\" type=\"button\" style=\"font-size:13px;padding:8px 14px;\">
          <i class=\"fa-solid fa-plus\"></i> Ajouter ce repas
        </button>
      </div>`;

    card.querySelector('.add-btn').addEventListener('click', async function(){
      this.disabled=true; this.innerHTML='<i class=\"fa-solid fa-spinner fa-spin\"></i> Ajout…';
      try {
        const res=await fetch(ADD_URL,{method:'POST',headers:{'Content-Type':'application/json'},body:JSON.stringify({title:block.title,mealType:block.mealType,items:block.items})});
        const data=await res.json().catch(()=>({}));
        if(!res.ok||!data.ok) throw new Error(data.error||'Erreur');
        bubble('✅ Repas ajouté ! Rechargement…');
        setTimeout(()=>window.location.reload(),700);
      } catch(e){
        bubble('❌ '+safe(e.message||'Erreur'));
        this.disabled=false; this.innerHTML='<i class=\"fa-solid fa-plus\"></i> Ajouter ce repas';
      }
    });

    messages.appendChild(card);
    messages.scrollTop=messages.scrollHeight;
  }

  function handleResponse(data){
    if(data.assistantText) bubble(safe(data.assistantText));
    (data.blocks||[]).forEach(b=>{ if(b?.type==='meal_proposal') renderProposal(b); });
  }

  async function send(){
    if(isSending) return;
    if(pendingPhotoB64){ await sendPhoto(); return; }
    const text=(input.value||'').trim();
    if(!text) return;

    isSending=true; sendBtn.disabled=true; input.disabled=true;
    bubble(`<i class=\"fa-solid fa-user\" style=\"opacity:.5;margin-right:4px;\"></i>\${safe(text)}`,'user');
    input.value='';
    const typing=addTyping();
    try {
      const res=await fetch(CHAT_URL,{method:'POST',headers:{'Content-Type':'application/json'},body:JSON.stringify({message:text}),signal:AbortSignal.timeout(30000)});
      const data=await res.json().catch(()=>({}));
      typing.remove();
      if(!res.ok) throw new Error(data.error||'Erreur serveur');
      handleResponse(data);
    } catch(e){
      typing.remove();
      bubble('❌ '+safe(e.name==='TimeoutError'?'Timeout — réessaie.':(e.message||'Erreur')));
    } finally {
      isSending=false; sendBtn.disabled=false; input.disabled=false;
      setTimeout(()=>input?.focus(),50);
    }
  }

  async function sendPhoto(){
    const b64=pendingPhotoB64, mime=pendingMime, thumbSrc=photoThumb.src;
    bubble(`<img src=\"\${thumbSrc}\" style=\"max-width:100%;border-radius:10px;max-height:160px;object-fit:cover;\"/>`,'user');
    resetPhoto();
    isSending=true; sendBtn.disabled=true;
    const typing=addTyping();
    try {
      const res=await fetch(PHOTO_URL,{method:'POST',headers:{'Content-Type':'application/json'},body:JSON.stringify({image:b64,mimeType:mime}),signal:AbortSignal.timeout(30000)});
      const data=await res.json().catch(()=>({}));
      typing.remove();
      if(!res.ok) throw new Error(data.error||'Erreur analyse photo');
      handleResponse(data);
    } catch(e){
      typing.remove();
      bubble('❌ '+safe(e.name==='TimeoutError'?'Timeout — réessaie.':(e.message||'Erreur')));
    } finally {
      isSending=false; sendBtn.disabled=false; setTimeout(()=>input?.focus(),50);
    }
  }

  sendBtn?.addEventListener('click', send);
  input?.addEventListener('keydown', e=>{ if(e.key==='Enter') send(); });


  /* ═══════════════════════════════════════
     WEEKLY ANALYSIS
  ═══════════════════════════════════════ */
  const openWeeklyBtn  = document.getElementById('openWeeklyBtn');
  const closeWeeklyBtn = document.getElementById('closeWeeklyBtn');
  const weeklyOverlay  = document.getElementById('weeklyOverlay');
  const weeklyModal    = document.getElementById('weeklyModal');
  const weeklyInitial  = document.getElementById('weeklyInitial');
  const weeklyResult   = document.getElementById('weeklyResult');
  const generateBtn    = document.getElementById('generateWeeklyBtn');

  const WEEKLY_URL = \"{{ path('front_repas_weekly_analysis') }}\";

  function openWeekly(){ weeklyOverlay.style.display='block'; weeklyModal.style.display='block'; }
  function closeWeekly(){ weeklyOverlay.style.display='none'; weeklyModal.style.display='none'; }

  openWeeklyBtn?.addEventListener('click', openWeekly);
  closeWeeklyBtn?.addEventListener('click', closeWeekly);
  weeklyOverlay?.addEventListener('click', closeWeekly);

  generateBtn?.addEventListener('click', async function(){
    this.disabled = true;
    this.innerHTML = '<i class=\"fa-solid fa-spinner fa-spin\"></i> Analyse en cours…';

    try {
      const res  = await fetch(WEEKLY_URL, { signal: AbortSignal.timeout(30000) });
      const json = await res.json().catch(()=>({}));

      if (res.status === 422) {
        weeklyInitial.innerHTML = `
          <div style=\"font-size:48px;\">📭</div>
          <div style=\"font-size:16px; font-weight:800;\">Pas assez de données</div>
          <div style=\"opacity:.7; font-size:14px;\">\${safe(json.message || 'Ajoute des repas cette semaine pour obtenir une analyse.')}</div>
          <button class=\"btn btn-weekly\" id=\"retryWeeklyBtn\" style=\"margin-top:10px;\">
            <i class=\"fa-solid fa-rotate-left\"></i> Réessayer
          </button>`;
        document.getElementById('retryWeeklyBtn')?.addEventListener('click', ()=>{ location.reload(); });
        return;
      }

      if (!res.ok || !json.ok) throw new Error(json.error || 'Erreur analyse');
      renderWeeklyResult(json);

    } catch(e) {
      weeklyInitial.innerHTML = `
        <div style=\"font-size:48px;\">❌</div>
        <div style=\"font-size:16px; font-weight:800;\">Erreur</div>
        <div style=\"opacity:.7; font-size:14px;\">\${safe(e.message||'Erreur inconnue')}</div>
        <button class=\"btn btn-weekly\" onclick=\"location.reload()\" style=\"margin-top:10px;\">Réessayer</button>`;
    }
  });

  function scoreColor(s){ if(s>=80) return '#00d4aa'; if(s>=60) return '#60a5fa'; if(s>=40) return '#f59e0b'; return '#ef4444'; }
  function scoreLabel(s){ if(s>=80) return 'Excellent'; if(s>=60) return 'Bon'; if(s>=40) return 'Moyen'; return 'Faible'; }

  function renderWeeklyResult(json){
    const a=json.analyse, stats=json.stats, score=a.score_semaine??0, color=scoreColor(score);
    weeklyInitial.style.display='none';
    weeklyResult.style.display='flex';
    weeklyResult.innerHTML=`
      <div style=\"display:flex; align-items:center; gap:20px; flex-wrap:wrap;\">
        <div class=\"weekly-score-ring\" style=\"border-color:\${color}; color:\${color};\">
          <span>\${score}</span>
          <span style=\"font-size:11px; font-weight:600; opacity:.8;\">/100</span>
        </div>
        <div style=\"flex:1;\">
          <div style=\"font-size:20px; font-weight:900; color:\${color};\">\${scoreLabel(score)}</div>
          <div style=\"opacity:.7; font-size:13px; margin-top:4px;\">\${safe(a.resume||'')}</div>
        </div>
      </div>
      <div class=\"weekly-stats-row\">
        <div class=\"weekly-stat\"><div class=\"val\">\${stats.totalRepas}</div><div class=\"lbl\">Repas</div></div>
        <div class=\"weekly-stat\"><div class=\"val\">\${stats.totalJours}</div><div class=\"lbl\">Jours</div></div>
        <div class=\"weekly-stat\"><div class=\"val\" style=\"color:#fde68a;\">\${stats.moyenneCals}</div><div class=\"lbl\">kcal/jour moy.</div></div>
      </div>
      <div class=\"weekly-section\">
        <div class=\"weekly-section-title\">✅ Points positifs</div>
        \${(a.points_positifs||[]).map(p=>`<div class=\"weekly-item pos\">\${safe(p)}</div>`).join('')}
      </div>
      <div class=\"weekly-section\">
        <div class=\"weekly-section-title\">⚠️ À améliorer</div>
        \${(a.points_amelioration||[]).map(p=>`<div class=\"weekly-item neg\">\${safe(p)}</div>`).join('')}
      </div>
      \${(a.analyse_par_jour||[]).length ? `
      <div class=\"weekly-section\">
        <div class=\"weekly-section-title\">📅 Analyse par jour</div>
        \${(a.analyse_par_jour||[]).map(j=>`<div class=\"weekly-item day\"><span style=\"font-weight:800;min-width:80px;opacity:.8;\">\${safe(j.jour)}</span><span style=\"opacity:.85;\">\${safe(j.commentaire)}</span></div>`).join('')}
      </div>` : ''}
      <div class=\"weekly-section\">
        <div class=\"weekly-section-title\">💡 Conseils personnalisés</div>
        \${(a.conseils||[]).map(c=>`<div class=\"weekly-item tip\">\${safe(c)}</div>`).join('')}
      </div>
      <div>
        <button class=\"btn btn-weekly\" id=\"regenBtn\" type=\"button\">
          <i class=\"fa-solid fa-rotate-right\"></i> Regénérer l'analyse
        </button>
      </div>`;

    document.getElementById('regenBtn')?.addEventListener('click', ()=>{
      weeklyResult.style.display='none';
      weeklyResult.innerHTML='';
      weeklyInitial.style.display='flex';
      generateBtn.disabled=false;
      generateBtn.innerHTML='<i class=\"fa-solid fa-bolt\"></i> Générer l\\'analyse';
    });
  }


  /* ═══════════════════════════════════════
     MAILING
  ═══════════════════════════════════════ */
  const MAILING_URL    = \"{{ path('front_mailing_weekly') }}\";
  const openMailingBtn  = document.getElementById('openMailingBtn');
  const closeMailingBtn = document.getElementById('closeMailingBtn');
  const cancelMailingBtn= document.getElementById('cancelMailingBtn');
  const mailingOverlay  = document.getElementById('mailingOverlay');
  const mailingModal    = document.getElementById('mailingModal');
  const sendMailingBtn  = document.getElementById('sendMailingBtn');
  const mailingResult   = document.getElementById('mailingResult');

  function openMailing(){ mailingOverlay.style.display='block'; mailingModal.style.display='block'; }
  function closeMailing(){
    mailingOverlay.style.display='none';
    mailingModal.style.display='none';
    mailingResult.style.display='none';
    sendMailingBtn.disabled=false;
    sendMailingBtn.innerHTML='<i class=\"fa-solid fa-paper-plane\"></i> Générer et envoyer';
  }

  openMailingBtn?.addEventListener('click', openMailing);
  closeMailingBtn?.addEventListener('click', closeMailing);
  cancelMailingBtn?.addEventListener('click', closeMailing);
  mailingOverlay?.addEventListener('click', closeMailing);

  sendMailingBtn?.addEventListener('click', async function(){
    this.disabled=true;
    this.innerHTML='<i class=\"fa-solid fa-spinner fa-spin\"></i> Envoi…';
    mailingResult.style.display='none';

    try {
      const res  = await fetch(MAILING_URL, { method:'POST', headers:{'Content-Type':'application/json'}, signal:AbortSignal.timeout(45000) });
      const data = await res.json().catch(()=>({success:false, message:'Réponse invalide'}));
      const ok   = !!data.success;
      const bg   = ok ? 'rgba(0,212,170,.12)' : 'rgba(239,68,68,.12)';
      const bd   = ok ? 'rgba(0,212,170,.3)'  : 'rgba(239,68,68,.3)';
      mailingResult.style.cssText=`display:block;padding:12px 16px;border-radius:10px;margin-bottom:18px;font-size:14px;background:\${bg};border:1px solid \${bd};`;
      mailingResult.innerHTML=(ok?'✅ ':'❌ ')+(data.message??'Erreur');
      this.innerHTML=ok?'<i class=\"fa-solid fa-check\"></i> Envoyé !':'<i class=\"fa-solid fa-rotate-right\"></i> Réessayer';
      if(!ok) this.disabled=false;
    } catch(e){
      mailingResult.style.cssText='display:block;padding:12px 16px;border-radius:10px;margin-bottom:18px;font-size:14px;background:rgba(239,68,68,.12);border:1px solid rgba(239,68,68,.3);';
      mailingResult.innerHTML='❌ '+(e.name==='TimeoutError'?'Timeout — réessayez.':'Erreur réseau');
      this.disabled=false;
      this.innerHTML='<i class=\"fa-solid fa-rotate-right\"></i> Réessayer';
    }
  });

})();
</script>

</body>
</html>", "front/repas/index.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\front\\repas\\index.html.twig");
    }
}
