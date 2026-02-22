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

/* front/objectif/index.html.twig */
class __TwigTemplate_f101370f87513b8faee2a7ec7ce9c31f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/objectif/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/objectif/index.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Objectifs - AIVA</title>

  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/stylefront.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">

  <style>
    /* =========================
       GLOBAL STYLES (same as Dépenses)
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

    .logo {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .logo-text {
      font-size: 20px;
      font-weight: bold;
    }

    .nav-links a {
      color: #888;
      text-decoration: none;
      font-size: 14px;
      margin-left: 40px;
    }

    .nav-links a.active {
      color: #00d4aa;
    }

    .nav-link{
      color:#c7c7c7;
      text-decoration:none;
      font-size:14px;
      display:inline-flex;
      gap:10px;
      align-items:center;
    }

    /* =========================
       HERO SECTION
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
       ✅ SAME HORIZONTAL LIST (re-used)
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

    /* ✅ status color (same idea) */
    .status{
      font-weight:800;
      text-transform:capitalize;
    }

    .status.termine, .status.done{
      background: rgba(34,197,94,.15);
      border-color: rgba(34,197,94,.35);
      color:#86efac;
    }

    .status.en_cours, .status.pending{
      background: rgba(245,158,11,.15);
      border-color: rgba(245,158,11,.35);
      color:#fde68a;
    }

    .status.annule, .status.cancelled{
      background: rgba(239,68,68,.15);
      border-color: rgba(239,68,68,.35);
      color:#fecaca;
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

";
        // line 327
        $context["objectifs"] = ((array_key_exists("objectifs", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 327, $this->source); })()), [])) : ([]));
        // line 328
        yield "
<div class=\"container\">

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
      <a href=\"";
        // line 349
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_categorie_index");
        yield "\">Categorie</a>
      <a href=\"";
        // line 350
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_activite_index");
        yield "\">Activité</a>
      <a href=\"";
        // line 351
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_index");
        yield "\" class=\"active\">Objectif</a>
      <a href=\"";
        // line 352
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_depense_index");
        yield "\">Dépense</a>
      <a href=\"";
        // line 353
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_aliment_index");
        yield "\">Alimentation</a>
      <a href=\"";
        // line 354
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_front_index");
        yield "\">Apprentissage</a>
      <a href=\"";
        // line 355
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_energie_index");
        yield "\">Énergie</a>
      <a href=\"";
        // line 356
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_recommandation_index");
        yield "\">Recommandations</a>
    </div>

    <a href=\"";
        // line 359
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"nav-link\">
      <i class=\"fa-solid fa-right-from-bracket\"></i> Déconnexion
    </a>
  </nav>

  <main class=\"hero\">
    <div class=\"glow\"></div>

    <h1 class=\"hero-title\">🎯 Mes Objectifs</h1>
    <p class=\"hero-description\">
      Suivez vos objectifs, types et statuts.
    </p>

    <!-- FLASH (optional) -->
    <div style=\"margin: 12px 0; width:100%; max-width:1000px; padding:0 60px; box-sizing:border-box;\">
      ";
        // line 374
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 374, $this->source); })()), "flashes", ["success"], "method", false, false, false, 374));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 375
            yield "        <div style=\"padding:10px;border-radius:8px;margin-bottom:8px;
                    background:rgba(0,210,150,.15);
                    border:1px solid rgba(0,210,150,.35);\">
          ";
            // line 378
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 381
        yield "    </div>

    <!-- HEAD ACTION -->
    <div class=\"section-head\">
      <h2 class=\"section-title\">Mes objectifs</h2>
      <a class=\"btn btn-primary\" href=\"";
        // line 386
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_new");
        yield "\">
        <i class=\"fa-solid fa-plus\"></i> Ajouter
      </a>
    </div>

    ";
        // line 391
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 391, $this->source); })())) == 0)) {
            // line 392
            yield "      <div class=\"empty-box\">
        Aucun objectif enregistré.
      </div>
    ";
        } else {
            // line 396
            yield "      <div class=\"depenses-list\">
        ";
            // line 397
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 397, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
                // line 398
                yield "
          ";
                // line 400
                yield "          ";
                $context["statusClass"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["o"], "statut", [], "any", true, true, false, 400)) ? (Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["o"], "statut", [], "any", false, false, false, 400)), [" " => "_", "-" => "_"])) : (""));
                // line 401
                yield "
          <div class=\"depense-card\">

            <!-- LEFT -->
            <div class=\"depense-left\">
              <div class=\"depense-title\">
                <i class=\"fa-solid fa-bullseye\"></i>
                ";
                // line 408
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["o"], "description", [], "any", false, false, false, 408), "html", null, true);
                yield "
              </div>

              <div class=\"depense-meta\">
                <span>
                  <i class=\"fa-solid fa-tag\"></i>
                  ";
                // line 414
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["o"], "type", [], "any", true, true, false, 414) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["o"], "type", [], "any", false, false, false, 414)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["o"], "type", [], "any", false, false, false, 414), "html", null, true)) : ("-"));
                yield "
                </span>

                <span>
                  <i class=\"fa-solid fa-user\"></i>
                  ";
                // line 419
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["o"], "user", [], "any", false, false, false, 419)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["o"], "user", [], "any", false, false, false, 419), "name", [], "any", false, false, false, 419), "html", null, true)) : ("-"));
                yield "
                </span>

                <span class=\"pill status ";
                // line 422
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 422, $this->source); })()), "html", null, true);
                yield "\">
                  ";
                // line 423
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["o"], "statut", [], "any", true, true, false, 423) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["o"], "statut", [], "any", false, false, false, 423)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["o"], "statut", [], "any", false, false, false, 423), "html", null, true)) : ("-"));
                yield "
                </span>
              </div>
            </div>

            <!-- ID -->
            <span class=\"depense-id\">#";
                // line 429
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["o"], "id", [], "any", false, false, false, 429), "html", null, true);
                yield "</span>

            <!-- ACTIONS -->
            <div class=\"depense-actions\">
              <a class=\"btn btn-secondary\"
                 href=\"";
                // line 434
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["o"], "id", [], "any", false, false, false, 434)]), "html", null, true);
                yield "\">
                <i class=\"fa-regular fa-eye\"></i>
              </a>

              <a class=\"btn btn-warning\"
                 href=\"";
                // line 439
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["o"], "id", [], "any", false, false, false, 439)]), "html", null, true);
                yield "\">
                <i class=\"fa-solid fa-pen\"></i>
              </a>

              <form method=\"post\"
                    action=\"";
                // line 444
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["o"], "id", [], "any", false, false, false, 444)]), "html", null, true);
                yield "\"
                    onsubmit=\"return confirm('Supprimer cet objectif ?');\"
                    style=\"margin:0;\">
                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 447
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["o"], "id", [], "any", false, false, false, 447))), "html", null, true);
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
            unset($context['_seq'], $context['_key'], $context['o'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 458
            yield "      </div>
    ";
        }
        // line 460
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
        return "front/objectif/index.html.twig";
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
        return array (  605 => 460,  601 => 458,  584 => 447,  578 => 444,  570 => 439,  562 => 434,  554 => 429,  545 => 423,  541 => 422,  535 => 419,  527 => 414,  518 => 408,  509 => 401,  506 => 400,  503 => 398,  499 => 397,  496 => 396,  490 => 392,  488 => 391,  480 => 386,  473 => 381,  464 => 378,  459 => 375,  455 => 374,  437 => 359,  431 => 356,  427 => 355,  423 => 354,  419 => 353,  415 => 352,  411 => 351,  407 => 350,  403 => 349,  380 => 328,  378 => 327,  58 => 10,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/objectifFRONT/index.html.twig #}
<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Objectifs - AIVA</title>

  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"{{ asset('css/stylefront.css') }}\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">

  <style>
    /* =========================
       GLOBAL STYLES (same as Dépenses)
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

    .logo {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .logo-text {
      font-size: 20px;
      font-weight: bold;
    }

    .nav-links a {
      color: #888;
      text-decoration: none;
      font-size: 14px;
      margin-left: 40px;
    }

    .nav-links a.active {
      color: #00d4aa;
    }

    .nav-link{
      color:#c7c7c7;
      text-decoration:none;
      font-size:14px;
      display:inline-flex;
      gap:10px;
      align-items:center;
    }

    /* =========================
       HERO SECTION
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
       ✅ SAME HORIZONTAL LIST (re-used)
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

    /* ✅ status color (same idea) */
    .status{
      font-weight:800;
      text-transform:capitalize;
    }

    .status.termine, .status.done{
      background: rgba(34,197,94,.15);
      border-color: rgba(34,197,94,.35);
      color:#86efac;
    }

    .status.en_cours, .status.pending{
      background: rgba(245,158,11,.15);
      border-color: rgba(245,158,11,.35);
      color:#fde68a;
    }

    .status.annule, .status.cancelled{
      background: rgba(239,68,68,.15);
      border-color: rgba(239,68,68,.35);
      color:#fecaca;
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

{% set objectifs = objectifs|default([]) %}

<div class=\"container\">

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
      <a href=\"{{ path('front_categorie_index') }}\">Categorie</a>
      <a href=\"{{ path('front_activite_index') }}\">Activité</a>
      <a href=\"{{ path('front_objectif_index') }}\" class=\"active\">Objectif</a>
      <a href=\"{{ path('front_depense_index') }}\">Dépense</a>
      <a href=\"{{ path('front_aliment_index') }}\">Alimentation</a>
      <a href=\"{{ path('cours_front_index') }}\">Apprentissage</a>
      <a href=\"{{ path('front_energie_index') }}\">Énergie</a>
      <a href=\"{{ path('front_recommandation_index') }}\">Recommandations</a>
    </div>

    <a href=\"{{ path('app_logout') }}\" class=\"nav-link\">
      <i class=\"fa-solid fa-right-from-bracket\"></i> Déconnexion
    </a>
  </nav>

  <main class=\"hero\">
    <div class=\"glow\"></div>

    <h1 class=\"hero-title\">🎯 Mes Objectifs</h1>
    <p class=\"hero-description\">
      Suivez vos objectifs, types et statuts.
    </p>

    <!-- FLASH (optional) -->
    <div style=\"margin: 12px 0; width:100%; max-width:1000px; padding:0 60px; box-sizing:border-box;\">
      {% for message in app.flashes('success') %}
        <div style=\"padding:10px;border-radius:8px;margin-bottom:8px;
                    background:rgba(0,210,150,.15);
                    border:1px solid rgba(0,210,150,.35);\">
          {{ message }}
        </div>
      {% endfor %}
    </div>

    <!-- HEAD ACTION -->
    <div class=\"section-head\">
      <h2 class=\"section-title\">Mes objectifs</h2>
      <a class=\"btn btn-primary\" href=\"{{ path('front_objectif_new') }}\">
        <i class=\"fa-solid fa-plus\"></i> Ajouter
      </a>
    </div>

    {% if objectifs|length == 0 %}
      <div class=\"empty-box\">
        Aucun objectif enregistré.
      </div>
    {% else %}
      <div class=\"depenses-list\">
        {% for o in objectifs %}

          {# normalize statut into a class like \"en_cours\" etc #}
          {% set statusClass = o.statut is defined ? o.statut|lower|replace({' ':'_','-':'_'}) : '' %}

          <div class=\"depense-card\">

            <!-- LEFT -->
            <div class=\"depense-left\">
              <div class=\"depense-title\">
                <i class=\"fa-solid fa-bullseye\"></i>
                {{ o.description }}
              </div>

              <div class=\"depense-meta\">
                <span>
                  <i class=\"fa-solid fa-tag\"></i>
                  {{ o.type ?? '-' }}
                </span>

                <span>
                  <i class=\"fa-solid fa-user\"></i>
                  {{ o.user ? o.user.name : '-' }}
                </span>

                <span class=\"pill status {{ statusClass }}\">
                  {{ o.statut ?? '-' }}
                </span>
              </div>
            </div>

            <!-- ID -->
            <span class=\"depense-id\">#{{ o.id }}</span>

            <!-- ACTIONS -->
            <div class=\"depense-actions\">
              <a class=\"btn btn-secondary\"
                 href=\"{{ path('front_objectif_show', {id: o.id}) }}\">
                <i class=\"fa-regular fa-eye\"></i>
              </a>

              <a class=\"btn btn-warning\"
                 href=\"{{ path('front_objectif_edit', {id: o.id}) }}\">
                <i class=\"fa-solid fa-pen\"></i>
              </a>

              <form method=\"post\"
                    action=\"{{ path('front_objectif_delete', {id: o.id}) }}\"
                    onsubmit=\"return confirm('Supprimer cet objectif ?');\"
                    style=\"margin:0;\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ o.id) }}\">
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
", "front/objectif/index.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\front\\objectif\\index.html.twig");
    }
}
