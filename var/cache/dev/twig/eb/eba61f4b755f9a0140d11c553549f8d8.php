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

/* front/activite/index.html.twig */
class __TwigTemplate_73295edacc59230a4b827532998ad286 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/activite/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/activite/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Activités - AIVA</title>

  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/stylefront.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">

  <style>
    /* =========================
       GLOBAL STYLES
    ========================= */
    body, html {
      margin: 0;
      padding: 0;
      font-family: 'Inter', system-ui, sans-serif;
      background-color: #0a0a12;
      color: #fff;
      min-height: 100vh;
    }
    .container { width: 100%; }

    /* =========================
       NAVBAR
    ========================= */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 60px;
      border-bottom: 1px solid #1a1a2e;
    }

    .logo { display: flex; align-items: center; gap: 12px; }
    .logo-text { font-size: 20px; font-weight: bold; }

    .nav-links a {
      color: #888;
      text-decoration: none;
      font-size: 14px;
      margin-left: 40px;
    }
    .nav-links a.active { color: #00d4aa; }

    .nav-link{
      color:#c7c7c7;
      text-decoration:none;
      font-size:14px;
      display:inline-flex;
      gap:10px;
      align-items:center;
    }

    /* =========================
       HERO
    ========================= */
    .hero {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
      text-align: center;
      padding-top: 35px;
      padding-bottom: 60px;
      position: relative;
    }

    .glow {
      position: absolute;
      top: 12%;
      left: 50%;
      transform: translateX(-50%);
      width: 520px;
      height: 320px;
      background: radial-gradient(
        ellipse,
        rgba(0,212,170,0.15) 0%,
        transparent 70%
      );
      pointer-events: none;
    }

    .hero-title {
      font-size: 46px;
      font-weight: bold;
      margin-bottom: 14px;
      line-height: 1.1;
    }

    .hero-description {
      color: #888;
      font-size: 16px;
      max-width: 600px;
      line-height: 1.7;
      margin-bottom: 26px;
    }

    /* =========================
       SECTION HEAD + BUTTONS
    ========================= */
    .section-head {
      width: 100%;
      max-width: 1000px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 10px;
      margin-bottom: 16px;
      padding-left: 60px;
      padding-right: 60px;
      box-sizing: border-box;
    }

    .section-title {
      margin: 0;
      font-size: 20px;
      font-weight: 600;
      text-align: left;
    }

    .btn {
      border: none;
      border-radius: 999px;
      padding: 10px 16px;
      font-size: 13px;
      font-weight: 600;
      cursor: pointer;
      transition: transform 0.08s ease, opacity 0.15s ease;
      display:inline-flex;
      align-items:center;
      gap:8px;
      text-decoration:none;
    }

    .btn:active { transform: scale(0.98); }
    .btn:hover { opacity: 0.92; }

    .btn-primary {
      background: linear-gradient(135deg, #0d9488, #00d4aa);
      color: #0a0a12;
    }

    .btn-warning {
      background: linear-gradient(135deg, #f59e0b, #fde68a);
      color: #0a0a12;
    }

    .btn-danger {
      background: linear-gradient(135deg, #ef4444, #fca5a5);
      color: #0a0a12;
    }

    .btn-secondary {
      background: transparent;
      border: 1px solid #1a1a2e;
      color: #c7c7c7;
    }

    /* =========================
       ✅ SAME LIST STYLE AS DÉPENSES
    ========================= */
    .depenses-list{
      width:100%;
      max-width:1000px;
      padding-left:60px;
      padding-right:60px;
      box-sizing:border-box;
      display:grid;
      grid-template-columns: 1fr;
      gap: 16px;
      margin-top: 24px;
    }

    .depense-card{
      display:flex;
      align-items:center;
      justify-content:space-between;
      gap:20px;
      padding:20px;
      border-radius:18px;
      border: 1px solid rgba(255,255,255,.12);
      background: linear-gradient(135deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
      backdrop-filter: blur(10px);
      transition:.2s;
    }

    .depense-card:hover{
      transform: translateY(-4px);
      box-shadow: 0 10px 30px rgba(0,0,0,.25);
    }

    .depense-left{ flex:1; min-width:0; }

    .depense-title{
      font-size:18px;
      font-weight:800;
      margin-bottom:6px;
      white-space:nowrap;
      overflow:hidden;
      text-overflow:ellipsis;
      display:flex;
      gap:10px;
      align-items:center;
    }

    .depense-meta{
      display:flex;
      flex-wrap:wrap;
      gap:12px;
      align-items:center;
      font-size:14px;
      color:#c7c7c7;
      opacity:.95;
    }

    .pill{
      display:inline-flex;
      align-items:center;
      gap:8px;
      padding:6px 10px;
      border-radius:999px;
      border:1px solid rgba(255,255,255,.14);
      background: rgba(255,255,255,.06);
      font-size:12px;
      font-weight:700;
      color:#e7e7e7;
      white-space:nowrap;
    }

    .depense-id{
      flex-shrink:0;
      padding:6px 12px;
      border-radius:999px;
      font-size:12px;
      font-weight:700;
      background:rgba(255,255,255,.06);
      border:1px solid rgba(255,255,255,.15);
      color:#e7e7e7;
    }

    .depense-actions{
      display:flex;
      gap:10px;
      flex-shrink:0;
      align-items:center;
    }

    .empty-box{
      width:100%;
      max-width:1000px;
      margin-top:24px;
      padding:20px;
      border-radius:16px;
      background:rgba(255,255,255,.04);
      border:1px dashed rgba(255,255,255,.15);
      color:#888;
      box-sizing:border-box;
    }

    /* =========================
       RESPONSIVE
    ========================= */
    @media (max-width: 900px) {
      .navbar { padding: 18px 20px; }
      .section-head { padding-left: 20px; padding-right: 20px; }
      .depenses-list { padding-left: 20px; padding-right: 20px; }
      .nav-links a{ margin-left:16px; }
    }

    @media (max-width: 720px){
      .depense-card{
        flex-direction:column;
        align-items:flex-start;
      }
      .depense-actions{
        width:100%;
        justify-content:flex-end;
      }
      .depense-id{ align-self:flex-end; }
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
        // line 308
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_categorie_index");
        yield "\">categorie</a>
      <a href=\"";
        // line 309
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_activite_index");
        yield "\" class=\"active\">Activité</a>
      <a href=\"";
        // line 310
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_index");
        yield "\">Objectif</a>
      <a href=\"";
        // line 311
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_depense_index");
        yield "\">depense</a>
      <a href=\"";
        // line 312
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_aliment_index");
        yield "\">Alimentation</a>
      <a href=\"";
        // line 313
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_front_index");
        yield "\">apprentissage</a>
      <a href=\"";
        // line 314
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_energie_index");
        yield "\">Énergie</a>
      <a href=\"";
        // line 315
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_recommandation_index");
        yield "\">Recommandation</a>
    </div>

    <a href=\"";
        // line 318
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"nav-link\">
      <i class=\"fa-solid fa-right-from-bracket\"></i> Déconnexion
    </a>
  </nav>

  <!-- ✅ MAIN -->
  <main class=\"hero\">
    <div class=\"glow\"></div>

    <h1 class=\"hero-title\">
      <i class=\"fa-solid fa-person-running\" style=\"color:#00d4aa;\"></i>
      Mes Activités
    </h1>
    <p class=\"hero-description\">
      Suivez vos activités sportives, durée, intensité et calories.
    </p>

    <div class=\"section-head\">
      <h2 class=\"section-title\">Mes activités</h2>
      <a class=\"btn btn-primary\" href=\"";
        // line 337
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_activite_new");
        yield "\">
        <i class=\"fa-solid fa-plus\"></i> Ajouter
      </a>
    </div>

    ";
        // line 342
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["activites"]) || array_key_exists("activites", $context) ? $context["activites"] : (function () { throw new RuntimeError('Variable "activites" does not exist.', 342, $this->source); })())) == 0)) {
            // line 343
            yield "      <div class=\"empty-box\">Aucune activité enregistrée.</div>
    ";
        } else {
            // line 345
            yield "      <div class=\"depenses-list\">
        ";
            // line 346
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activites"]) || array_key_exists("activites", $context) ? $context["activites"] : (function () { throw new RuntimeError('Variable "activites" does not exist.', 346, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 347
                yield "          <div class=\"depense-card\">

            <!-- LEFT -->
            <div class=\"depense-left\">
              <div class=\"depense-title\">
                <i class=\"fa-solid fa-dumbbell\"></i>
                ";
                // line 353
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "type", [], "any", false, false, false, 353), "html", null, true);
                yield " <span style=\"opacity:.65; font-weight:700;\">#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 353), "html", null, true);
                yield "</span>
              </div>

              <div class=\"depense-meta\">
                <span>
                  <i class=\"fa-regular fa-calendar\"></i>
                  ";
                // line 359
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "date", [], "any", false, false, false, 359)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "date", [], "any", false, false, false, 359), "d/m/Y"), "html", null, true)) : ("—"));
                yield "
                </span>

                <span>
                  <i class=\"fa-solid fa-bolt\"></i>
                  Intensité: ";
                // line 364
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "intensite", [], "any", true, true, false, 364)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "intensite", [], "any", false, false, false, 364), "—")) : ("—")), "html", null, true);
                yield "
                </span>

                <span class=\"pill\">
                  <i class=\"fa-solid fa-clock\"></i> ";
                // line 368
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "duree", [], "any", false, false, false, 368), "html", null, true);
                yield " min
                </span>

                <span class=\"pill\">
                  <i class=\"fa-solid fa-fire\"></i> ";
                // line 372
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "caloriesBrulees", [], "any", false, false, false, 372), "html", null, true);
                yield " kcal
                </span>

                <span>
                  <i class=\"fa-solid fa-bullseye\"></i>
                  Objectif: ";
                // line 377
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "objectif", [], "any", false, false, false, 377)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "objectif", [], "any", false, false, false, 377), "description", [], "any", false, false, false, 377), "html", null, true)) : ("—"));
                yield "
                </span>
              </div>
            </div>

            <!-- ID -->
            <span class=\"depense-id\">#";
                // line 383
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 383), "html", null, true);
                yield "</span>

            <!-- ACTIONS -->
            <div class=\"depense-actions\">
              <a class=\"btn btn-secondary\" href=\"";
                // line 387
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_activite_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 387)]), "html", null, true);
                yield "\">
                <i class=\"fa-regular fa-eye\"></i>
              </a>

              <a class=\"btn btn-warning\" href=\"";
                // line 391
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_activite_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 391)]), "html", null, true);
                yield "\">
                <i class=\"fa-solid fa-pen\"></i>
              </a>

              <form method=\"post\"
                    action=\"";
                // line 396
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_activite_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 396)]), "html", null, true);
                yield "\"
                    onsubmit=\"return confirm('Supprimer cette activité ?');\"
                    style=\"margin:0;\">
                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 399
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 399))), "html", null, true);
                yield "\">
                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                <button class=\"btn btn-danger\" type=\"submit\">
                  <i class=\"fa-solid fa-trash\"></i>
                </button>
              </form>
            </div>

          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 409
            yield "      </div>
    ";
        }
        // line 411
        yield "
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
        return "front/activite/index.html.twig";
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
        return array (  543 => 411,  539 => 409,  523 => 399,  517 => 396,  509 => 391,  502 => 387,  495 => 383,  486 => 377,  478 => 372,  471 => 368,  464 => 364,  456 => 359,  445 => 353,  437 => 347,  433 => 346,  430 => 345,  426 => 343,  424 => 342,  416 => 337,  394 => 318,  388 => 315,  384 => 314,  380 => 313,  376 => 312,  372 => 311,  368 => 310,  364 => 309,  360 => 308,  58 => 9,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Activités - AIVA</title>

  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"{{ asset('css/stylefront.css') }}\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">

  <style>
    /* =========================
       GLOBAL STYLES
    ========================= */
    body, html {
      margin: 0;
      padding: 0;
      font-family: 'Inter', system-ui, sans-serif;
      background-color: #0a0a12;
      color: #fff;
      min-height: 100vh;
    }
    .container { width: 100%; }

    /* =========================
       NAVBAR
    ========================= */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 60px;
      border-bottom: 1px solid #1a1a2e;
    }

    .logo { display: flex; align-items: center; gap: 12px; }
    .logo-text { font-size: 20px; font-weight: bold; }

    .nav-links a {
      color: #888;
      text-decoration: none;
      font-size: 14px;
      margin-left: 40px;
    }
    .nav-links a.active { color: #00d4aa; }

    .nav-link{
      color:#c7c7c7;
      text-decoration:none;
      font-size:14px;
      display:inline-flex;
      gap:10px;
      align-items:center;
    }

    /* =========================
       HERO
    ========================= */
    .hero {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
      text-align: center;
      padding-top: 35px;
      padding-bottom: 60px;
      position: relative;
    }

    .glow {
      position: absolute;
      top: 12%;
      left: 50%;
      transform: translateX(-50%);
      width: 520px;
      height: 320px;
      background: radial-gradient(
        ellipse,
        rgba(0,212,170,0.15) 0%,
        transparent 70%
      );
      pointer-events: none;
    }

    .hero-title {
      font-size: 46px;
      font-weight: bold;
      margin-bottom: 14px;
      line-height: 1.1;
    }

    .hero-description {
      color: #888;
      font-size: 16px;
      max-width: 600px;
      line-height: 1.7;
      margin-bottom: 26px;
    }

    /* =========================
       SECTION HEAD + BUTTONS
    ========================= */
    .section-head {
      width: 100%;
      max-width: 1000px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 10px;
      margin-bottom: 16px;
      padding-left: 60px;
      padding-right: 60px;
      box-sizing: border-box;
    }

    .section-title {
      margin: 0;
      font-size: 20px;
      font-weight: 600;
      text-align: left;
    }

    .btn {
      border: none;
      border-radius: 999px;
      padding: 10px 16px;
      font-size: 13px;
      font-weight: 600;
      cursor: pointer;
      transition: transform 0.08s ease, opacity 0.15s ease;
      display:inline-flex;
      align-items:center;
      gap:8px;
      text-decoration:none;
    }

    .btn:active { transform: scale(0.98); }
    .btn:hover { opacity: 0.92; }

    .btn-primary {
      background: linear-gradient(135deg, #0d9488, #00d4aa);
      color: #0a0a12;
    }

    .btn-warning {
      background: linear-gradient(135deg, #f59e0b, #fde68a);
      color: #0a0a12;
    }

    .btn-danger {
      background: linear-gradient(135deg, #ef4444, #fca5a5);
      color: #0a0a12;
    }

    .btn-secondary {
      background: transparent;
      border: 1px solid #1a1a2e;
      color: #c7c7c7;
    }

    /* =========================
       ✅ SAME LIST STYLE AS DÉPENSES
    ========================= */
    .depenses-list{
      width:100%;
      max-width:1000px;
      padding-left:60px;
      padding-right:60px;
      box-sizing:border-box;
      display:grid;
      grid-template-columns: 1fr;
      gap: 16px;
      margin-top: 24px;
    }

    .depense-card{
      display:flex;
      align-items:center;
      justify-content:space-between;
      gap:20px;
      padding:20px;
      border-radius:18px;
      border: 1px solid rgba(255,255,255,.12);
      background: linear-gradient(135deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
      backdrop-filter: blur(10px);
      transition:.2s;
    }

    .depense-card:hover{
      transform: translateY(-4px);
      box-shadow: 0 10px 30px rgba(0,0,0,.25);
    }

    .depense-left{ flex:1; min-width:0; }

    .depense-title{
      font-size:18px;
      font-weight:800;
      margin-bottom:6px;
      white-space:nowrap;
      overflow:hidden;
      text-overflow:ellipsis;
      display:flex;
      gap:10px;
      align-items:center;
    }

    .depense-meta{
      display:flex;
      flex-wrap:wrap;
      gap:12px;
      align-items:center;
      font-size:14px;
      color:#c7c7c7;
      opacity:.95;
    }

    .pill{
      display:inline-flex;
      align-items:center;
      gap:8px;
      padding:6px 10px;
      border-radius:999px;
      border:1px solid rgba(255,255,255,.14);
      background: rgba(255,255,255,.06);
      font-size:12px;
      font-weight:700;
      color:#e7e7e7;
      white-space:nowrap;
    }

    .depense-id{
      flex-shrink:0;
      padding:6px 12px;
      border-radius:999px;
      font-size:12px;
      font-weight:700;
      background:rgba(255,255,255,.06);
      border:1px solid rgba(255,255,255,.15);
      color:#e7e7e7;
    }

    .depense-actions{
      display:flex;
      gap:10px;
      flex-shrink:0;
      align-items:center;
    }

    .empty-box{
      width:100%;
      max-width:1000px;
      margin-top:24px;
      padding:20px;
      border-radius:16px;
      background:rgba(255,255,255,.04);
      border:1px dashed rgba(255,255,255,.15);
      color:#888;
      box-sizing:border-box;
    }

    /* =========================
       RESPONSIVE
    ========================= */
    @media (max-width: 900px) {
      .navbar { padding: 18px 20px; }
      .section-head { padding-left: 20px; padding-right: 20px; }
      .depenses-list { padding-left: 20px; padding-right: 20px; }
      .nav-links a{ margin-left:16px; }
    }

    @media (max-width: 720px){
      .depense-card{
        flex-direction:column;
        align-items:flex-start;
      }
      .depense-actions{
        width:100%;
        justify-content:flex-end;
      }
      .depense-id{ align-self:flex-end; }
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
      <i class=\"fa-solid fa-person-running\" style=\"color:#00d4aa;\"></i>
      Mes Activités
    </h1>
    <p class=\"hero-description\">
      Suivez vos activités sportives, durée, intensité et calories.
    </p>

    <div class=\"section-head\">
      <h2 class=\"section-title\">Mes activités</h2>
      <a class=\"btn btn-primary\" href=\"{{ path('front_activite_new') }}\">
        <i class=\"fa-solid fa-plus\"></i> Ajouter
      </a>
    </div>

    {% if activites|length == 0 %}
      <div class=\"empty-box\">Aucune activité enregistrée.</div>
    {% else %}
      <div class=\"depenses-list\">
        {% for a in activites %}
          <div class=\"depense-card\">

            <!-- LEFT -->
            <div class=\"depense-left\">
              <div class=\"depense-title\">
                <i class=\"fa-solid fa-dumbbell\"></i>
                {{ a.type }} <span style=\"opacity:.65; font-weight:700;\">#{{ a.id }}</span>
              </div>

              <div class=\"depense-meta\">
                <span>
                  <i class=\"fa-regular fa-calendar\"></i>
                  {{ a.date ? a.date|date('d/m/Y') : '—' }}
                </span>

                <span>
                  <i class=\"fa-solid fa-bolt\"></i>
                  Intensité: {{ a.intensite|default('—') }}
                </span>

                <span class=\"pill\">
                  <i class=\"fa-solid fa-clock\"></i> {{ a.duree }} min
                </span>

                <span class=\"pill\">
                  <i class=\"fa-solid fa-fire\"></i> {{ a.caloriesBrulees }} kcal
                </span>

                <span>
                  <i class=\"fa-solid fa-bullseye\"></i>
                  Objectif: {{ a.objectif ? a.objectif.description : '—' }}
                </span>
              </div>
            </div>

            <!-- ID -->
            <span class=\"depense-id\">#{{ a.id }}</span>

            <!-- ACTIONS -->
            <div class=\"depense-actions\">
              <a class=\"btn btn-secondary\" href=\"{{ path('front_activite_show', {id:a.id}) }}\">
                <i class=\"fa-regular fa-eye\"></i>
              </a>

              <a class=\"btn btn-warning\" href=\"{{ path('front_activite_edit', {id:a.id}) }}\">
                <i class=\"fa-solid fa-pen\"></i>
              </a>

              <form method=\"post\"
                    action=\"{{ path('front_activite_delete', {id:a.id}) }}\"
                    onsubmit=\"return confirm('Supprimer cette activité ?');\"
                    style=\"margin:0;\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ a.id) }}\">
                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                <button class=\"btn btn-danger\" type=\"submit\">
                  <i class=\"fa-solid fa-trash\"></i>
                </button>
              </form>
            </div>

          </div>
        {% endfor %}
      </div>
    {% endif %}

  </main>
</div>
</body>
</html>
", "front/activite/index.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\front\\activite\\index.html.twig");
    }
}
