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

/* coursFRONT/show.html.twig */
class __TwigTemplate_b28489a4e8debddecd4cad4dbdc8a4d2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coursFRONT/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coursFRONT/show.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 7, $this->source); })()), "tittre", [], "any", false, false, false, 7), "html", null, true);
        yield " - AIVA</title>

  <!-- Fonts + Icons -->
  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">

  <!-- Main CSS -->
  <link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/stylefront.css"), "html", null, true);
        yield "\">

  <!-- ✅ CSS داخل نفس الصفحة: نفس theme Recommandations -->
  <style>
    /* ✅ FIX OVERFLOW */
    *, *::before, *::after { box-sizing: border-box; }

    /* ✅ GLASS CARD BASE */
    .glass-card {
      border-radius: 18px;
      background: linear-gradient(135deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
      border: 1px solid rgba(255,255,255,.12);
      backdrop-filter: blur(10px);
    }

    .glass-pad { padding: 18px; }

    /* ✅ BADGES */
    .badge {
      padding: 6px 12px;
      border-radius: 999px;
      font-size: 12px;
      font-weight: 700;
      border: 1px solid rgba(255,255,255,.18);
      background: rgba(255,255,255,.06);
      white-space: nowrap;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }

    .badge.green {
      border-color: rgba(34,197,94,.45);
      background: rgba(34,197,94,.12);
      color: #bbf7d0;
    }
    .badge.blue {
      border-color: rgba(59,130,246,.45);
      background: rgba(59,130,246,.12);
      color: #bfdbfe;
    }
    .badge.yellow {
      border-color: rgba(245,158,11,.45);
      background: rgba(245,158,11,.12);
      color: #fde68a;
    }
    .badge.gray {
      border-color: rgba(148,163,184,.35);
      background: rgba(148,163,184,.08);
      color: rgba(226,232,240,.92);
    }

    /* ✅ LAYOUT */
    .detail-wrap {
      max-width: 1100px;
      margin: 24px auto 0;
    }

    .detail-grid {
      display: grid;
      grid-template-columns: 2fr 1fr;
      gap: 16px;
      margin-top: 16px;
    }

    @media (max-width: 900px) {
      .detail-grid { grid-template-columns: 1fr; }
    }

    /* ✅ TEXT BLOCKS */
    .section-title {
      font-size: 13px;
      opacity: .75;
      margin-bottom: 8px;
      display: flex;
      gap: 8px;
      align-items: center;
    }

    .desc {
      font-size: 14px;
      line-height: 1.7;
      opacity: .95;
      white-space: pre-wrap;
      overflow-wrap: anywhere;
    }

    /* ✅ INFO LIST */
    .info-list {
      display: grid;
      gap: 10px;
    }
    .info-item {
      display: flex;
      justify-content: space-between;
      gap: 12px;
      padding: 10px 12px;
      border-radius: 14px;
      border: 1px solid rgba(255,255,255,.10);
      background: rgba(0,0,0,.12);
      font-size: 13px;
    }
    .info-item span:first-child { opacity: .75; }
    .info-item span:last-child { font-weight: 700; }

    /* ✅ ACTIONS */
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

    .btn-danger {
      background: rgba(239,68,68,.12);
      border: 1px solid rgba(239,68,68,.35);
      color: #fecaca;
    }
    .btn-danger:hover { background: rgba(239,68,68,.22); }

  </style>
</head>

<body>
<div class=\"container\">

  <!-- ✅ NAVBAR (same theme) -->
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
        // line 189
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_categorie_index");
        yield "\">Categorie</a>
      <a href=\"";
        // line 190
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_activite_index");
        yield "\">Activité</a>
      <a href=\"";
        // line 191
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_index");
        yield "\">Objectif</a>
      <a href=\"";
        // line 192
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_depense_index");
        yield "\">Dépense</a>
      <a href=\"";
        // line 193
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_aliment_index");
        yield "\">Alimentation</a>
      <a href=\"";
        // line 194
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_front_index");
        yield "\" class=\"active\">Apprentissage</a>
      <a href=\"";
        // line 195
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_energie_index");
        yield "\">Énergie</a>
      <a href=\"";
        // line 196
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_recommandation_index");
        yield "\">Recommandations</a>
    </div>

    <a href=\"";
        // line 199
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"nav-link\">
      <i class=\"fa-solid fa-right-from-bracket\"></i> Déconnexion
    </a>
  </nav>

  <!-- ✅ MAIN same as Recommandations -->
  <main class=\"hero\">
    <div class=\"glow\"></div>

    <h1 class=\"hero-title\">📘 Détails du cours</h1>
    <p class=\"hero-description\">
      Consultez toutes les informations de votre cours.
    </p>

    <div class=\"detail-wrap\">

      <!-- ✅ TOP CARD -->
      <div class=\"glass-card glass-pad\">
        <div style=\"display:flex;justify-content:space-between;align-items:flex-start;gap:12px;flex-wrap:wrap;\">
          <div style=\"min-width:0;\">
            <div style=\"font-size:18px;font-weight:800;line-height:1.25;\">
              ";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 220, $this->source); })()), "tittre", [], "any", false, false, false, 220), "html", null, true);
        yield "
            </div>
            <div style=\"font-size:13px;opacity:.75;margin-top:6px;display:flex;flex-wrap:wrap;gap:10px;align-items:center;\">
              <span>
                <i class=\"fa-regular fa-calendar\"></i>
                ";
        // line 225
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 225, $this->source); })()), "dateCreation", [], "any", false, false, false, 225)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 225, $this->source); })()), "dateCreation", [], "any", false, false, false, 225), "d/m/Y"), "html", null, true)) : ("N/A"));
        yield "
              </span>
              <span>· <i class=\"fa-solid fa-tag\"></i> ";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 227, $this->source); })()), "categorie", [], "any", false, false, false, 227), "html", null, true);
        yield "</span>
              <span>· <i class=\"fa-solid fa-clock\"></i> ";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 228, $this->source); })()), "dureeEstimee", [], "any", false, false, false, 228), "html", null, true);
        yield "h</span>
            </div>

            <div style=\"margin-top:10px;\">
              <a href=\"";
        // line 232
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_front_index");
        yield "\" style=\"text-decoration:none;opacity:.85;\">
                ← Retour à mes cours
              </a>
            </div>
          </div>

          <span class=\"badge gray\">
            <i class=\"fa-solid fa-circle-info\"></i> ";
        // line 239
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 239, $this->source); })()), "status", [], "any", false, false, false, 239), "html", null, true);
        yield "
          </span>
        </div>

        <!-- badges row -->
        <div style=\"margin-top:14px;display:flex;flex-wrap:wrap;gap:10px;\">
          <span class=\"badge green\"><i class=\"fa-solid fa-layer-group\"></i> Catégorie: ";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 245, $this->source); })()), "categorie", [], "any", false, false, false, 245), "html", null, true);
        yield "</span>
          <span class=\"badge blue\"><i class=\"fa-solid fa-signal\"></i> Niveau: ";
        // line 246
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 246, $this->source); })()), "niveau", [], "any", false, false, false, 246), "html", null, true);
        yield "</span>
          <span class=\"badge yellow\"><i class=\"fa-solid fa-flag\"></i> Statut: ";
        // line 247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 247, $this->source); })()), "status", [], "any", false, false, false, 247), "html", null, true);
        yield "</span>
          ";
        // line 248
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 248, $this->source); })()), "user", [], "any", false, false, false, 248)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 249
            yield "            <span class=\"badge gray\"><i class=\"fa-solid fa-user\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 249, $this->source); })()), "user", [], "any", false, false, false, 249), "name", [], "any", false, false, false, 249), "html", null, true);
            yield "</span>
          ";
        }
        // line 251
        yield "        </div>

        <!-- ✅ BODY GRID -->
        <div class=\"detail-grid\">

          <!-- Description -->
          <div class=\"glass-card glass-pad\">
            <div class=\"section-title\">
              <i class=\"fa-regular fa-file-lines\"></i> Description
            </div>
            <div class=\"desc\">";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 261, $this->source); })()), "description", [], "any", false, false, false, 261), "html", null, true);
        yield "</div>
          </div>

          <!-- Info -->
          <div class=\"glass-card glass-pad\">
            <div class=\"section-title\">
              <i class=\"fa-solid fa-list\"></i> Informations
            </div>

            <div class=\"info-list\">
              <div class=\"info-item\">
                <span>ID</span>
                <span>";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 273, $this->source); })()), "id", [], "any", false, false, false, 273), "html", null, true);
        yield "</span>
              </div>

              <div class=\"info-item\">
                <span>Durée estimée</span>
                <span>";
        // line 278
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 278, $this->source); })()), "dureeEstimee", [], "any", false, false, false, 278), "html", null, true);
        yield "h</span>
              </div>

              <div class=\"info-item\">
                <span>Chapitres</span>
                <span>";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 283, $this->source); })()), "chapitres", [], "any", false, false, false, 283)), "html", null, true);
        yield "</span>
              </div>

              <div class=\"info-item\">
                <span>Niveau</span>
                <span>";
        // line 288
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 288, $this->source); })()), "niveau", [], "any", false, false, false, 288), "html", null, true);
        yield "</span>
              </div>
            </div>
          </div>

        </div>

        <!-- ✅ ACTIONS -->
        <div class=\"actions\">
          <a href=\"";
        // line 297
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_front_index");
        yield "\" class=\"btn-custom btn-secondary\">
            <i class=\"fa-solid fa-arrow-left\"></i> Retour
          </a>

          <a href=\"";
        // line 301
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_front_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 301, $this->source); })()), "id", [], "any", false, false, false, 301)]), "html", null, true);
        yield "\" class=\"btn-custom btn-primary\">
            <i class=\"fa-solid fa-pen-to-square\"></i> Modifier
          </a>

          <form method=\"post\"
                action=\"";
        // line 306
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_front_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 306, $this->source); })()), "id", [], "any", false, false, false, 306)]), "html", null, true);
        yield "\"
                onsubmit=\"return confirm('Supprimer ce cours ?');\"
                style=\"display:inline;\">
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 309, $this->source); })()), "id", [], "any", false, false, false, 309))), "html", null, true);
        yield "\">
            <button type=\"submit\" class=\"btn-custom btn-danger\">
              <i class=\"fa-solid fa-trash\"></i> Supprimer
            </button>
          </form>
        </div>

      </div>
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
        return "coursFRONT/show.html.twig";
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
        return array (  448 => 309,  442 => 306,  434 => 301,  427 => 297,  415 => 288,  407 => 283,  399 => 278,  391 => 273,  376 => 261,  364 => 251,  358 => 249,  356 => 248,  352 => 247,  348 => 246,  344 => 245,  335 => 239,  325 => 232,  318 => 228,  314 => 227,  309 => 225,  301 => 220,  277 => 199,  271 => 196,  267 => 195,  263 => 194,  259 => 193,  255 => 192,  251 => 191,  247 => 190,  243 => 189,  65 => 14,  55 => 7,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/coursFRONT/show.html.twig #}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>{{ cours.tittre }} - AIVA</title>

  <!-- Fonts + Icons -->
  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">

  <!-- Main CSS -->
  <link rel=\"stylesheet\" href=\"{{ asset('css/stylefront.css') }}\">

  <!-- ✅ CSS داخل نفس الصفحة: نفس theme Recommandations -->
  <style>
    /* ✅ FIX OVERFLOW */
    *, *::before, *::after { box-sizing: border-box; }

    /* ✅ GLASS CARD BASE */
    .glass-card {
      border-radius: 18px;
      background: linear-gradient(135deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
      border: 1px solid rgba(255,255,255,.12);
      backdrop-filter: blur(10px);
    }

    .glass-pad { padding: 18px; }

    /* ✅ BADGES */
    .badge {
      padding: 6px 12px;
      border-radius: 999px;
      font-size: 12px;
      font-weight: 700;
      border: 1px solid rgba(255,255,255,.18);
      background: rgba(255,255,255,.06);
      white-space: nowrap;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }

    .badge.green {
      border-color: rgba(34,197,94,.45);
      background: rgba(34,197,94,.12);
      color: #bbf7d0;
    }
    .badge.blue {
      border-color: rgba(59,130,246,.45);
      background: rgba(59,130,246,.12);
      color: #bfdbfe;
    }
    .badge.yellow {
      border-color: rgba(245,158,11,.45);
      background: rgba(245,158,11,.12);
      color: #fde68a;
    }
    .badge.gray {
      border-color: rgba(148,163,184,.35);
      background: rgba(148,163,184,.08);
      color: rgba(226,232,240,.92);
    }

    /* ✅ LAYOUT */
    .detail-wrap {
      max-width: 1100px;
      margin: 24px auto 0;
    }

    .detail-grid {
      display: grid;
      grid-template-columns: 2fr 1fr;
      gap: 16px;
      margin-top: 16px;
    }

    @media (max-width: 900px) {
      .detail-grid { grid-template-columns: 1fr; }
    }

    /* ✅ TEXT BLOCKS */
    .section-title {
      font-size: 13px;
      opacity: .75;
      margin-bottom: 8px;
      display: flex;
      gap: 8px;
      align-items: center;
    }

    .desc {
      font-size: 14px;
      line-height: 1.7;
      opacity: .95;
      white-space: pre-wrap;
      overflow-wrap: anywhere;
    }

    /* ✅ INFO LIST */
    .info-list {
      display: grid;
      gap: 10px;
    }
    .info-item {
      display: flex;
      justify-content: space-between;
      gap: 12px;
      padding: 10px 12px;
      border-radius: 14px;
      border: 1px solid rgba(255,255,255,.10);
      background: rgba(0,0,0,.12);
      font-size: 13px;
    }
    .info-item span:first-child { opacity: .75; }
    .info-item span:last-child { font-weight: 700; }

    /* ✅ ACTIONS */
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

    .btn-danger {
      background: rgba(239,68,68,.12);
      border: 1px solid rgba(239,68,68,.35);
      color: #fecaca;
    }
    .btn-danger:hover { background: rgba(239,68,68,.22); }

  </style>
</head>

<body>
<div class=\"container\">

  <!-- ✅ NAVBAR (same theme) -->
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

  <!-- ✅ MAIN same as Recommandations -->
  <main class=\"hero\">
    <div class=\"glow\"></div>

    <h1 class=\"hero-title\">📘 Détails du cours</h1>
    <p class=\"hero-description\">
      Consultez toutes les informations de votre cours.
    </p>

    <div class=\"detail-wrap\">

      <!-- ✅ TOP CARD -->
      <div class=\"glass-card glass-pad\">
        <div style=\"display:flex;justify-content:space-between;align-items:flex-start;gap:12px;flex-wrap:wrap;\">
          <div style=\"min-width:0;\">
            <div style=\"font-size:18px;font-weight:800;line-height:1.25;\">
              {{ cours.tittre }}
            </div>
            <div style=\"font-size:13px;opacity:.75;margin-top:6px;display:flex;flex-wrap:wrap;gap:10px;align-items:center;\">
              <span>
                <i class=\"fa-regular fa-calendar\"></i>
                {{ cours.dateCreation ? cours.dateCreation|date('d/m/Y') : 'N/A' }}
              </span>
              <span>· <i class=\"fa-solid fa-tag\"></i> {{ cours.categorie }}</span>
              <span>· <i class=\"fa-solid fa-clock\"></i> {{ cours.dureeEstimee }}h</span>
            </div>

            <div style=\"margin-top:10px;\">
              <a href=\"{{ path('cours_front_index') }}\" style=\"text-decoration:none;opacity:.85;\">
                ← Retour à mes cours
              </a>
            </div>
          </div>

          <span class=\"badge gray\">
            <i class=\"fa-solid fa-circle-info\"></i> {{ cours.status }}
          </span>
        </div>

        <!-- badges row -->
        <div style=\"margin-top:14px;display:flex;flex-wrap:wrap;gap:10px;\">
          <span class=\"badge green\"><i class=\"fa-solid fa-layer-group\"></i> Catégorie: {{ cours.categorie }}</span>
          <span class=\"badge blue\"><i class=\"fa-solid fa-signal\"></i> Niveau: {{ cours.niveau }}</span>
          <span class=\"badge yellow\"><i class=\"fa-solid fa-flag\"></i> Statut: {{ cours.status }}</span>
          {% if cours.user %}
            <span class=\"badge gray\"><i class=\"fa-solid fa-user\"></i> {{ cours.user.name }}</span>
          {% endif %}
        </div>

        <!-- ✅ BODY GRID -->
        <div class=\"detail-grid\">

          <!-- Description -->
          <div class=\"glass-card glass-pad\">
            <div class=\"section-title\">
              <i class=\"fa-regular fa-file-lines\"></i> Description
            </div>
            <div class=\"desc\">{{ cours.description }}</div>
          </div>

          <!-- Info -->
          <div class=\"glass-card glass-pad\">
            <div class=\"section-title\">
              <i class=\"fa-solid fa-list\"></i> Informations
            </div>

            <div class=\"info-list\">
              <div class=\"info-item\">
                <span>ID</span>
                <span>{{ cours.id }}</span>
              </div>

              <div class=\"info-item\">
                <span>Durée estimée</span>
                <span>{{ cours.dureeEstimee }}h</span>
              </div>

              <div class=\"info-item\">
                <span>Chapitres</span>
                <span>{{ cours.chapitres|length }}</span>
              </div>

              <div class=\"info-item\">
                <span>Niveau</span>
                <span>{{ cours.niveau }}</span>
              </div>
            </div>
          </div>

        </div>

        <!-- ✅ ACTIONS -->
        <div class=\"actions\">
          <a href=\"{{ path('cours_front_index') }}\" class=\"btn-custom btn-secondary\">
            <i class=\"fa-solid fa-arrow-left\"></i> Retour
          </a>

          <a href=\"{{ path('cours_front_edit', {'id': cours.id}) }}\" class=\"btn-custom btn-primary\">
            <i class=\"fa-solid fa-pen-to-square\"></i> Modifier
          </a>

          <form method=\"post\"
                action=\"{{ path('cours_front_delete', {'id': cours.id}) }}\"
                onsubmit=\"return confirm('Supprimer ce cours ?');\"
                style=\"display:inline;\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ cours.id) }}\">
            <button type=\"submit\" class=\"btn-custom btn-danger\">
              <i class=\"fa-solid fa-trash\"></i> Supprimer
            </button>
          </form>
        </div>

      </div>
    </div>

  </main>
</div>
</body>
</html>
", "coursFRONT/show.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\coursFRONT\\show.html.twig");
    }
}
