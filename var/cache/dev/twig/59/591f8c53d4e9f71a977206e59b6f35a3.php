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

/* front/aliment/index.html.twig */
class __TwigTemplate_f1729b250e4c4e6ebe9f9682e437acd6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/aliment/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/aliment/index.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Foods - AIVA</title>

  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/stylefront.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">

  <!-- ✅ CSS داخل الصفحة: نفس theme + Cards -->
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

    /* ✅ section head (title + actions) */
    .section-head {
      margin-top: 22px;
      display: flex;
      justify-content: space-between;
      gap: 12px;
      flex-wrap: wrap;
      align-items: center;
    }
    .section-title {
      margin: 0;
      font-size: 16px;
      font-weight: 800;
      opacity: .95;
    }

    /* ✅ glass wrapper */
    .glass {
      border-radius: 18px;
      background: linear-gradient(135deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
      border: 1px solid rgba(255,255,255,.12);
      backdrop-filter: blur(10px);
      position: relative;
    }

    /* ✅ table wrap (kept for search wrapper only) */
    .table-wrap {
      margin-top: 14px;
      padding: 14px;
      overflow: auto;
    }

    /* ✅ inline form layout */
    .inline-form {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
      align-items: flex-end;
    }
    .inline-form label {
      display: block;
      margin-bottom: 6px;
      font-size: 13px;
      opacity: .8;
    }

    /* ✅ buttons */
    .btn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 10px 14px;
      border-radius: 12px;
      font-weight: 700;
      font-size: 14px;
      text-decoration: none;
      border: 1px solid transparent;
      cursor: pointer;
      transition: .2s ease;
      white-space: nowrap;
    }

    .btn-primary {
      background: linear-gradient(135deg, #00d4aa, #a855f7);
      color: #020617;
    }
    .btn-primary:hover { transform: translateY(-1px); box-shadow: 0 10px 25px rgba(0,0,0,.25); }

    .btn-secondary {
      background: rgba(255,255,255,.06);
      border-color: rgba(255,255,255,.18);
      color: rgba(226,232,240,.95);
    }
    .btn-secondary:hover { background: rgba(255,255,255,.12); }

    .btn-warning {
      background: rgba(245,158,11,.14);
      border-color: rgba(245,158,11,.35);
      color: #fde68a;
    }
    .btn-warning:hover { background: rgba(245,158,11,.22); }

    .btn-danger {
      background: rgba(239,68,68,.12);
      border-color: rgba(239,68,68,.35);
      color: #fecaca;
    }
    .btn-danger:hover { background: rgba(239,68,68,.22); }

    /* ✅ pills */
    .pill{
      display:inline-flex;
      align-items:center;
      gap:6px;
      padding: 6px 10px;
      border-radius: 999px;
      border: 1px solid rgba(255,255,255,.18);
      background: rgba(255,255,255,.06);
      font-size: 12px;
      font-weight: 800;
      white-space: nowrap;
    }
    .pill.prot{ border-color: rgba(34,197,94,.35); background: rgba(34,197,94,.12); color:#bbf7d0; }
    .pill.carb{ border-color: rgba(59,130,246,.35); background: rgba(59,130,246,.12); color:#bfdbfe; }
    .pill.fat { border-color: rgba(245,158,11,.35); background: rgba(245,158,11,.12); color:#fde68a; }

    /* ✅ empty */
    .empty-row { text-align: center; padding: 18px !important; opacity: .8; }

    /* ===========================
       ✅ NEW: CARDS (instead of table)
       =========================== */
    .cards-grid{
      margin-top: 14px;
      display:grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 18px;
    }

    .food-card{
      padding: 18px;
      border-radius: 18px;
      transition: .25s ease;
      display:flex;
      flex-direction:column;
      gap: 14px;
      overflow: hidden;
    }
    .food-card:hover{
      transform: translateY(-4px);
      box-shadow: 0 20px 40px rgba(0,0,0,.35);
    }

    /* optional gradient border */
    .food-card::before{
      content:\"\";
      position:absolute;
      inset:0;
      border-radius:18px;
      padding:1px;
      background:linear-gradient(135deg,#00d4aa,#a855f7,#ec4899);
      -webkit-mask:
        linear-gradient(#000 0 0) content-box,
        linear-gradient(#000 0 0);
      -webkit-mask-composite:xor;
      mask-composite:exclude;
      pointer-events:none;
      opacity:.65;
    }

    .food-header{
      display:flex;
      justify-content:space-between;
      align-items:flex-start;
      gap: 10px;
    }

    .food-id{
      font-size: 12px;
      opacity: .65;
      margin-bottom: 4px;
    }

    .food-title{
      font-size: 16px;
      font-weight: 900;
      letter-spacing: .2px;
    }

    .food-qty{
      display:flex;
      align-items:center;
      gap:8px;
      opacity:.95;
      font-weight:700;
    }

    .food-macros{
      display:flex;
      flex-wrap:wrap;
      gap: 8px;
    }

    .food-actions{
      display:flex;
      flex-wrap:wrap;
      gap: 8px;
      margin-top:auto;
    }

    @media (max-width: 700px) {
      .table-wrap { padding: 12px; }
      .section-head { align-items: flex-start; }
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
        // line 253
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_categorie_index");
        yield "\">categorie</a>
      <a href=\"";
        // line 254
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_activite_index");
        yield "\">Activité</a>
      <a href=\"";
        // line 255
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_index");
        yield "\">Objectif</a>
      <a href=\"";
        // line 256
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_depense_index");
        yield "\">depense</a>
      <a href=\"";
        // line 257
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_aliment_index");
        yield "\" class=\"active\">Alimentation</a>
      <a href=\"";
        // line 258
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_front_index");
        yield "\">apprentissage</a>
      <a href=\"";
        // line 259
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_energie_index");
        yield "\">Énergie</a>
      <a href=\"";
        // line 260
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_recommandation_index");
        yield "\">Recommandation</a>
    </div>

    <a href=\"";
        // line 263
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"nav-link\">
      <i class=\"fa-solid fa-right-from-bracket\"></i> Déconnexion
    </a>
  </nav>

  <!-- ✅ MAIN -->
  <main class=\"hero\">
    <div class=\"glow\"></div>

    <h1 class=\"hero-title\">🍽️ Nutrition</h1>
    <p class=\"hero-description\">Manage your foods and macros.</p>

    <!-- TOP ACTIONS -->
    <div class=\"section-head\">
      <h2 class=\"section-title\">Mes aliments</h2>
      <div style=\"display:flex; gap:10px; flex-wrap:wrap;\">
        <a class=\"btn btn-primary\" href=\"";
        // line 279
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_aliment_new");
        yield "\">
          <i class=\"fa-solid fa-plus\"></i> Add Food
        </a>
        <a class=\"btn btn-secondary\" href=\"";
        // line 282
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_repas_index");
        yield "\">
          <i class=\"fa-solid fa-utensils\"></i> Meals
        </a>
      </div>
    </div>

    <!-- SEARCH + SORT -->
    <div class=\"glass table-wrap\" style=\"margin-top:16px;\">
      <form method=\"get\" action=\"";
        // line 290
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_aliment_index");
        yield "\" class=\"inline-form\">
        <div style=\"min-width:240px; flex:1;\">
          <label>Search by name</label>
          <input type=\"text\" name=\"search\" value=\"";
        // line 293
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["current_search"]) || array_key_exists("current_search", $context) ? $context["current_search"] : (function () { throw new RuntimeError('Variable "current_search" does not exist.', 293, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Search by name...\">
        </div>

        <button class=\"btn btn-primary\" type=\"submit\">
          <i class=\"fa-solid fa-magnifying-glass\"></i> Search
        </button>

        ";
        // line 300
        $context["nextOrderNom"] = (((((isset($context["current_sort"]) || array_key_exists("current_sort", $context) ? $context["current_sort"] : (function () { throw new RuntimeError('Variable "current_sort" does not exist.', 300, $this->source); })()) == "nom") && ((isset($context["current_order"]) || array_key_exists("current_order", $context) ? $context["current_order"] : (function () { throw new RuntimeError('Variable "current_order" does not exist.', 300, $this->source); })()) == "ASC"))) ? ("DESC") : ("ASC"));
        // line 301
        yield "        ";
        $context["nextOrderQty"] = (((((isset($context["current_sort"]) || array_key_exists("current_sort", $context) ? $context["current_sort"] : (function () { throw new RuntimeError('Variable "current_sort" does not exist.', 301, $this->source); })()) == "quantite") && ((isset($context["current_order"]) || array_key_exists("current_order", $context) ? $context["current_order"] : (function () { throw new RuntimeError('Variable "current_order" does not exist.', 301, $this->source); })()) == "ASC"))) ? ("DESC") : ("ASC"));
        // line 302
        yield "
        <a class=\"btn btn-secondary\"
           href=\"";
        // line 304
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_aliment_index", ["sort" => "nom", "order" => (isset($context["nextOrderNom"]) || array_key_exists("nextOrderNom", $context) ? $context["nextOrderNom"] : (function () { throw new RuntimeError('Variable "nextOrderNom" does not exist.', 304, $this->source); })()), "search" => (isset($context["current_search"]) || array_key_exists("current_search", $context) ? $context["current_search"] : (function () { throw new RuntimeError('Variable "current_search" does not exist.', 304, $this->source); })())]), "html", null, true);
        yield "\">
          <i class=\"fa-solid fa-arrow-down-a-z\"></i>
          Name ";
        // line 306
        yield ((((isset($context["current_sort"]) || array_key_exists("current_sort", $context) ? $context["current_sort"] : (function () { throw new RuntimeError('Variable "current_sort" does not exist.', 306, $this->source); })()) == "nom")) ? (((((isset($context["current_order"]) || array_key_exists("current_order", $context) ? $context["current_order"] : (function () { throw new RuntimeError('Variable "current_order" does not exist.', 306, $this->source); })()) == "ASC")) ? ("↑") : ("↓"))) : (""));
        yield "
        </a>

        <a class=\"btn btn-secondary\"
           href=\"";
        // line 310
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_aliment_index", ["sort" => "quantite", "order" => (isset($context["nextOrderQty"]) || array_key_exists("nextOrderQty", $context) ? $context["nextOrderQty"] : (function () { throw new RuntimeError('Variable "nextOrderQty" does not exist.', 310, $this->source); })()), "search" => (isset($context["current_search"]) || array_key_exists("current_search", $context) ? $context["current_search"] : (function () { throw new RuntimeError('Variable "current_search" does not exist.', 310, $this->source); })())]), "html", null, true);
        yield "\">
          <i class=\"fa-solid fa-scale-balanced\"></i>
          Quantity ";
        // line 312
        yield ((((isset($context["current_sort"]) || array_key_exists("current_sort", $context) ? $context["current_sort"] : (function () { throw new RuntimeError('Variable "current_sort" does not exist.', 312, $this->source); })()) == "quantite")) ? (((((isset($context["current_order"]) || array_key_exists("current_order", $context) ? $context["current_order"] : (function () { throw new RuntimeError('Variable "current_order" does not exist.', 312, $this->source); })()) == "ASC")) ? ("↑") : ("↓"))) : (""));
        yield "
        </a>

        ";
        // line 315
        if ((((isset($context["current_search"]) || array_key_exists("current_search", $context) ? $context["current_search"] : (function () { throw new RuntimeError('Variable "current_search" does not exist.', 315, $this->source); })()) || (isset($context["current_sort"]) || array_key_exists("current_sort", $context) ? $context["current_sort"] : (function () { throw new RuntimeError('Variable "current_sort" does not exist.', 315, $this->source); })())) || (isset($context["current_order"]) || array_key_exists("current_order", $context) ? $context["current_order"] : (function () { throw new RuntimeError('Variable "current_order" does not exist.', 315, $this->source); })()))) {
            // line 316
            yield "          <a class=\"btn btn-danger\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_aliment_index");
            yield "\">
            <i class=\"fa-solid fa-rotate-left\"></i> Reset
          </a>
        ";
        }
        // line 320
        yield "      </form>
    </div>

    <!-- ✅ CARDS (instead of table) -->
    <div class=\"cards-grid\">
      ";
        // line 325
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["aliments"]) || array_key_exists("aliments", $context) ? $context["aliments"] : (function () { throw new RuntimeError('Variable "aliments" does not exist.', 325, $this->source); })())) == 0)) {
            // line 326
            yield "        <div class=\"glass food-card\">
          <div class=\"empty-row\">No foods found.</div>
        </div>
      ";
        } else {
            // line 330
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["aliments"]) || array_key_exists("aliments", $context) ? $context["aliments"] : (function () { throw new RuntimeError('Variable "aliments" does not exist.', 330, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 331
                yield "          ";
                $context["m"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "macro", [], "any", true, true, false, 331) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["a"], "macro", [], "any", false, false, false, 331)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "macro", [], "any", false, false, false, 331)) : ([]));
                // line 332
                yield "
          <div class=\"glass food-card\">

            <div class=\"food-header\">
              <div>
                <div class=\"food-id\">#";
                // line 337
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 337), "html", null, true);
                yield "</div>
                <div class=\"food-title\">";
                // line 338
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "nom", [], "any", false, false, false, 338), "html", null, true);
                yield "</div>
              </div>

              <div class=\"food-qty\">
                <i class=\"fa-solid fa-scale-balanced\"></i>
                <span>";
                // line 343
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "quantite", [], "any", false, false, false, 343), "html", null, true);
                yield "</span>
              </div>
            </div>

            <div class=\"food-macros\">
              <span class=\"pill prot\">
                <i class=\"fa-solid fa-dumbbell\"></i> P: ";
                // line 349
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["m"] ?? null), "proteine", [], "any", true, true, false, 349)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 349, $this->source); })()), "proteine", [], "any", false, false, false, 349), 0)) : (0)), "html", null, true);
                yield "g
              </span>
              <span class=\"pill carb\">
                <i class=\"fa-solid fa-bolt\"></i> G: ";
                // line 352
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["m"] ?? null), "glucide", [], "any", true, true, false, 352)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 352, $this->source); })()), "glucide", [], "any", false, false, false, 352), 0)) : (0)), "html", null, true);
                yield "g
              </span>
              <span class=\"pill fat\">
                <i class=\"fa-solid fa-droplet\"></i> L: ";
                // line 355
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["m"] ?? null), "lipide", [], "any", true, true, false, 355)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 355, $this->source); })()), "lipide", [], "any", false, false, false, 355), 0)) : (0)), "html", null, true);
                yield "g
              </span>
            </div>

            <div class=\"food-actions\">
              <a class=\"btn btn-secondary\" href=\"";
                // line 360
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_aliment_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 360)]), "html", null, true);
                yield "\">
                <i class=\"fa-regular fa-eye\"></i> View
              </a>
              <a class=\"btn btn-warning\" href=\"";
                // line 363
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_aliment_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 363)]), "html", null, true);
                yield "\">
                <i class=\"fa-regular fa-pen-to-square\"></i> Edit
              </a>
            </div>

          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 370
            yield "      ";
        }
        // line 371
        yield "    </div>

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
        return "front/aliment/index.html.twig";
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
        return array (  525 => 371,  522 => 370,  509 => 363,  503 => 360,  495 => 355,  489 => 352,  483 => 349,  474 => 343,  466 => 338,  462 => 337,  455 => 332,  452 => 331,  447 => 330,  441 => 326,  439 => 325,  432 => 320,  424 => 316,  422 => 315,  416 => 312,  411 => 310,  404 => 306,  399 => 304,  395 => 302,  392 => 301,  390 => 300,  380 => 293,  374 => 290,  363 => 282,  357 => 279,  338 => 263,  332 => 260,  328 => 259,  324 => 258,  320 => 257,  316 => 256,  312 => 255,  308 => 254,  304 => 253,  58 => 10,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/alimentFRONT/index.html.twig #}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Foods - AIVA</title>

  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"{{ asset('css/stylefront.css') }}\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">

  <!-- ✅ CSS داخل الصفحة: نفس theme + Cards -->
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

    /* ✅ section head (title + actions) */
    .section-head {
      margin-top: 22px;
      display: flex;
      justify-content: space-between;
      gap: 12px;
      flex-wrap: wrap;
      align-items: center;
    }
    .section-title {
      margin: 0;
      font-size: 16px;
      font-weight: 800;
      opacity: .95;
    }

    /* ✅ glass wrapper */
    .glass {
      border-radius: 18px;
      background: linear-gradient(135deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
      border: 1px solid rgba(255,255,255,.12);
      backdrop-filter: blur(10px);
      position: relative;
    }

    /* ✅ table wrap (kept for search wrapper only) */
    .table-wrap {
      margin-top: 14px;
      padding: 14px;
      overflow: auto;
    }

    /* ✅ inline form layout */
    .inline-form {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
      align-items: flex-end;
    }
    .inline-form label {
      display: block;
      margin-bottom: 6px;
      font-size: 13px;
      opacity: .8;
    }

    /* ✅ buttons */
    .btn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 10px 14px;
      border-radius: 12px;
      font-weight: 700;
      font-size: 14px;
      text-decoration: none;
      border: 1px solid transparent;
      cursor: pointer;
      transition: .2s ease;
      white-space: nowrap;
    }

    .btn-primary {
      background: linear-gradient(135deg, #00d4aa, #a855f7);
      color: #020617;
    }
    .btn-primary:hover { transform: translateY(-1px); box-shadow: 0 10px 25px rgba(0,0,0,.25); }

    .btn-secondary {
      background: rgba(255,255,255,.06);
      border-color: rgba(255,255,255,.18);
      color: rgba(226,232,240,.95);
    }
    .btn-secondary:hover { background: rgba(255,255,255,.12); }

    .btn-warning {
      background: rgba(245,158,11,.14);
      border-color: rgba(245,158,11,.35);
      color: #fde68a;
    }
    .btn-warning:hover { background: rgba(245,158,11,.22); }

    .btn-danger {
      background: rgba(239,68,68,.12);
      border-color: rgba(239,68,68,.35);
      color: #fecaca;
    }
    .btn-danger:hover { background: rgba(239,68,68,.22); }

    /* ✅ pills */
    .pill{
      display:inline-flex;
      align-items:center;
      gap:6px;
      padding: 6px 10px;
      border-radius: 999px;
      border: 1px solid rgba(255,255,255,.18);
      background: rgba(255,255,255,.06);
      font-size: 12px;
      font-weight: 800;
      white-space: nowrap;
    }
    .pill.prot{ border-color: rgba(34,197,94,.35); background: rgba(34,197,94,.12); color:#bbf7d0; }
    .pill.carb{ border-color: rgba(59,130,246,.35); background: rgba(59,130,246,.12); color:#bfdbfe; }
    .pill.fat { border-color: rgba(245,158,11,.35); background: rgba(245,158,11,.12); color:#fde68a; }

    /* ✅ empty */
    .empty-row { text-align: center; padding: 18px !important; opacity: .8; }

    /* ===========================
       ✅ NEW: CARDS (instead of table)
       =========================== */
    .cards-grid{
      margin-top: 14px;
      display:grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 18px;
    }

    .food-card{
      padding: 18px;
      border-radius: 18px;
      transition: .25s ease;
      display:flex;
      flex-direction:column;
      gap: 14px;
      overflow: hidden;
    }
    .food-card:hover{
      transform: translateY(-4px);
      box-shadow: 0 20px 40px rgba(0,0,0,.35);
    }

    /* optional gradient border */
    .food-card::before{
      content:\"\";
      position:absolute;
      inset:0;
      border-radius:18px;
      padding:1px;
      background:linear-gradient(135deg,#00d4aa,#a855f7,#ec4899);
      -webkit-mask:
        linear-gradient(#000 0 0) content-box,
        linear-gradient(#000 0 0);
      -webkit-mask-composite:xor;
      mask-composite:exclude;
      pointer-events:none;
      opacity:.65;
    }

    .food-header{
      display:flex;
      justify-content:space-between;
      align-items:flex-start;
      gap: 10px;
    }

    .food-id{
      font-size: 12px;
      opacity: .65;
      margin-bottom: 4px;
    }

    .food-title{
      font-size: 16px;
      font-weight: 900;
      letter-spacing: .2px;
    }

    .food-qty{
      display:flex;
      align-items:center;
      gap:8px;
      opacity:.95;
      font-weight:700;
    }

    .food-macros{
      display:flex;
      flex-wrap:wrap;
      gap: 8px;
    }

    .food-actions{
      display:flex;
      flex-wrap:wrap;
      gap: 8px;
      margin-top:auto;
    }

    @media (max-width: 700px) {
      .table-wrap { padding: 12px; }
      .section-head { align-items: flex-start; }
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

    <h1 class=\"hero-title\">🍽️ Nutrition</h1>
    <p class=\"hero-description\">Manage your foods and macros.</p>

    <!-- TOP ACTIONS -->
    <div class=\"section-head\">
      <h2 class=\"section-title\">Mes aliments</h2>
      <div style=\"display:flex; gap:10px; flex-wrap:wrap;\">
        <a class=\"btn btn-primary\" href=\"{{ path('front_aliment_new') }}\">
          <i class=\"fa-solid fa-plus\"></i> Add Food
        </a>
        <a class=\"btn btn-secondary\" href=\"{{ path('front_repas_index') }}\">
          <i class=\"fa-solid fa-utensils\"></i> Meals
        </a>
      </div>
    </div>

    <!-- SEARCH + SORT -->
    <div class=\"glass table-wrap\" style=\"margin-top:16px;\">
      <form method=\"get\" action=\"{{ path('front_aliment_index') }}\" class=\"inline-form\">
        <div style=\"min-width:240px; flex:1;\">
          <label>Search by name</label>
          <input type=\"text\" name=\"search\" value=\"{{ current_search }}\" placeholder=\"Search by name...\">
        </div>

        <button class=\"btn btn-primary\" type=\"submit\">
          <i class=\"fa-solid fa-magnifying-glass\"></i> Search
        </button>

        {% set nextOrderNom = (current_sort == 'nom' and current_order == 'ASC') ? 'DESC' : 'ASC' %}
        {% set nextOrderQty = (current_sort == 'quantite' and current_order == 'ASC') ? 'DESC' : 'ASC' %}

        <a class=\"btn btn-secondary\"
           href=\"{{ path('front_aliment_index', {'sort':'nom','order':nextOrderNom,'search':current_search}) }}\">
          <i class=\"fa-solid fa-arrow-down-a-z\"></i>
          Name {{ current_sort == 'nom' ? (current_order == 'ASC' ? '↑' : '↓') : '' }}
        </a>

        <a class=\"btn btn-secondary\"
           href=\"{{ path('front_aliment_index', {'sort':'quantite','order':nextOrderQty,'search':current_search}) }}\">
          <i class=\"fa-solid fa-scale-balanced\"></i>
          Quantity {{ current_sort == 'quantite' ? (current_order == 'ASC' ? '↑' : '↓') : '' }}
        </a>

        {% if current_search or current_sort or current_order %}
          <a class=\"btn btn-danger\" href=\"{{ path('front_aliment_index') }}\">
            <i class=\"fa-solid fa-rotate-left\"></i> Reset
          </a>
        {% endif %}
      </form>
    </div>

    <!-- ✅ CARDS (instead of table) -->
    <div class=\"cards-grid\">
      {% if aliments|length == 0 %}
        <div class=\"glass food-card\">
          <div class=\"empty-row\">No foods found.</div>
        </div>
      {% else %}
        {% for a in aliments %}
          {% set m = a.macro ?? {} %}

          <div class=\"glass food-card\">

            <div class=\"food-header\">
              <div>
                <div class=\"food-id\">#{{ a.id }}</div>
                <div class=\"food-title\">{{ a.nom }}</div>
              </div>

              <div class=\"food-qty\">
                <i class=\"fa-solid fa-scale-balanced\"></i>
                <span>{{ a.quantite }}</span>
              </div>
            </div>

            <div class=\"food-macros\">
              <span class=\"pill prot\">
                <i class=\"fa-solid fa-dumbbell\"></i> P: {{ m.proteine|default(0) }}g
              </span>
              <span class=\"pill carb\">
                <i class=\"fa-solid fa-bolt\"></i> G: {{ m.glucide|default(0) }}g
              </span>
              <span class=\"pill fat\">
                <i class=\"fa-solid fa-droplet\"></i> L: {{ m.lipide|default(0) }}g
              </span>
            </div>

            <div class=\"food-actions\">
              <a class=\"btn btn-secondary\" href=\"{{ path('front_aliment_show', {'id': a.id}) }}\">
                <i class=\"fa-regular fa-eye\"></i> View
              </a>
              <a class=\"btn btn-warning\" href=\"{{ path('front_aliment_edit', {'id': a.id}) }}\">
                <i class=\"fa-regular fa-pen-to-square\"></i> Edit
              </a>
            </div>

          </div>
        {% endfor %}
      {% endif %}
    </div>

  </main>
</div>
</body>
</html>
", "front/aliment/index.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\front\\aliment\\index.html.twig");
    }
}
