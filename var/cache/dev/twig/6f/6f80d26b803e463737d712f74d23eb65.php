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

/* chapitreFRONT/index.html.twig */
class __TwigTemplate_348bbb2cab24d0a5d05990b47a09f820 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chapitreFRONT/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chapitreFRONT/index.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Chapters - AIVA</title>
  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/stylefront.css"), "html", null, true);
        yield "\">
  <style>
    .learning-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 2rem;
    }
    .page-header {
      margin-bottom: 2rem;
    }
    .page-header h1 {
      font-size: 2.2rem;
      font-weight: 700;
      color: #e2e8f0;
      margin-bottom: 0.25rem;
    }
    .page-header p {
      color: #94a3b8;
      font-size: 0.95rem;
    }
    .chapters-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
      gap: 1.5rem;
      margin-top: 1.5rem;
    }
    .chapter-card {
      background: linear-gradient(135deg, rgba(30, 41, 59, 0.5) 0%, rgba(15, 23, 42, 0.8) 100%);
      border-radius: 16px;
      border: 1px solid rgba(100, 116, 139, 0.3);
      padding: 1.5rem;
      color: #e2e8f0;
      box-shadow: 0 14px 35px rgba(15, 23, 42, 0.7);
      transition: all 0.3s ease;
    }
    .chapter-card:hover {
      transform: translateY(-4px);
      border-color: rgba(59, 130, 246, 0.6);
      box-shadow: 0 20px 45px rgba(37, 99, 235, 0.4);
    }
    .chapter-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 0.75rem;
    }
    .chapter-title {
      font-size: 1.2rem;
      font-weight: 600;
    }
    .chapter-pill {
      font-size: 0.75rem;
      padding: 0.25rem 0.7rem;
      border-radius: 999px;
      border: 1px solid rgba(148, 163, 184, 0.6);
      color: #cbd5f5;
      background: rgba(15, 23, 42, 0.7);
    }
    .chapter-order {
      color: #a5b4fc;
      font-size: 0.85rem;
      margin-bottom: 0.75rem;
    }
    .chapter-content-preview {
      font-size: 0.9rem;
      color: #94a3b8;
      max-height: 4.5rem;
      overflow: hidden;
      text-overflow: ellipsis;
    }
    .chapter-footer {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 0.5rem;
      margin-top: 1rem;
    }
    .btn-small {
      padding: 0.55rem 0.8rem;
      border-radius: 8px;
      border: none;
      font-size: 0.8rem;
      font-weight: 600;
      text-align: center;
      text-decoration: none;
      cursor: pointer;
      transition: all 0.2s ease;
      display: block;
    }
    .btn-view {
      background: rgba(0, 212, 170, 0.12);
      color: #00d4aa;
      border: 1px solid rgba(0, 212, 170, 0.4);
    }
    .btn-edit {
      background: rgba(168, 85, 247, 0.12);
      color: #c084fc;
      border: 1px solid rgba(168, 85, 247, 0.4);
    }
    .btn-delete {
      background: rgba(239, 68, 68, 0.12);
      color: #f87171;
      border: 1px solid rgba(239, 68, 68, 0.4);
    }
    .btn-view:hover {
      background: rgba(0, 212, 170, 0.25);
      border-color: #00d4aa;
    }
    .btn-edit:hover {
      background: rgba(168, 85, 247, 0.25);
      border-color: #a855f7;
    }
    .btn-delete:hover {
      background: rgba(239, 68, 68, 0.25);
      border-color: #ef4444;
    }
    .toolbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 1rem;
      margin-bottom: 1rem;
    }
    .btn-new {
      padding: 0.7rem 1.2rem;
      border-radius: 999px;
      background: linear-gradient(135deg, #6366f1, #8b5cf6);
      color: #020617;
      font-size: 0.85rem;
      font-weight: 600;
      text-decoration: none;
      box-shadow: 0 10px 25px rgba(79, 70, 229, 0.4);
    }
    .btn-new:hover {
      transform: translateY(-2px);
      box-shadow: 0 14px 30px rgba(79, 70, 229, 0.5);
    }
    .back-link {
      color: #94a3b8;
      font-size: 0.85rem;
      text-decoration: none;
    }
  </style>
</head>
<body>
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
        // line 173
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_categorie_index");
        yield "\">categorie</a>
<a href=\"";
        // line 174
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_activite_index");
        yield "\">Activité</a>
    <a href=\"";
        // line 175
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_index");
        yield "\">Objectif</a>
               <a href=\"";
        // line 176
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_depense_index");
        yield "\">depense</a>            
<a href=\"";
        // line 177
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_aliment_index");
        yield "\">Alimentation</a>
        <a href=\"";
        // line 178
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_front_index");
        yield "\">apprentissage</a>
        <a href=\"";
        // line 179
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_energie_index");
        yield "\">Énergie</a>
    <a href=\"";
        // line 180
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_recommandation_index");
        yield "\">Recommandation</a>

        </div>

  <a href=\"";
        // line 184
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"nav-link\">
                                <i class=\"fa-solid fa-right-from-bracket\"></i> Déconnexion
                            </a>  </nav>

  <div class=\"learning-container\">
    <div class=\"page-header\">
      ";
        // line 190
        if ((($tmp = (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 190, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 191
            yield "        <p><a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_front_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 191, $this->source); })()), "id", [], "any", false, false, false, 191)]), "html", null, true);
            yield "\" class=\"back-link\">← Back to ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 191, $this->source); })()), "tittre", [], "any", false, false, false, 191), "html", null, true);
            yield "</a></p>
        <h1>Chapters of ";
            // line 192
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 192, $this->source); })()), "tittre", [], "any", false, false, false, 192), "html", null, true);
            yield "</h1>
        <p>Course #";
            // line 193
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 193, $this->source); })()), "idCours", [], "any", false, false, false, 193), "html", null, true);
            yield " • ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 193, $this->source); })()), "categorie", [], "any", false, false, false, 193), "html", null, true);
            yield "</p>
      ";
        } else {
            // line 195
            yield "        <h1>All Chapters</h1>
        <p>Browse and manage all your chapters</p>
      ";
        }
        // line 198
        yield "    </div>

    <div class=\"toolbar\">
      <div>
        ";
        // line 202
        if ((($tmp = (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 202, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 203
            yield "          <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chapitre_front_new");
            yield "\" class=\"btn-new\">+ New Chapter</a>
        ";
        } else {
            // line 205
            yield "          <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chapitre_front_new");
            yield "\" class=\"btn-new\">+ New Chapter</a>
        ";
        }
        // line 207
        yield "      </div>
      <a href=\"";
        // line 208
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_front_index");
        yield "\" class=\"back-link\">← Back to My Courses</a>
    </div>

    ";
        // line 211
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["chapitres"]) || array_key_exists("chapitres", $context) ? $context["chapitres"] : (function () { throw new RuntimeError('Variable "chapitres" does not exist.', 211, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 212
            yield "      <div class=\"chapters-grid\">
        ";
            // line 213
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["chapitres"]) || array_key_exists("chapitres", $context) ? $context["chapitres"] : (function () { throw new RuntimeError('Variable "chapitres" does not exist.', 213, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["chapitre"]) {
                // line 214
                yield "          <div class=\"chapter-card\">
            <div class=\"chapter-header\">
              <div>
                <div class=\"chapter-title\">";
                // line 217
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chapitre"], "titre", [], "any", false, false, false, 217), "html", null, true);
                yield "</div>
                <div class=\"chapter-order\">Order: ";
                // line 218
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chapitre"], "ordre", [], "any", false, false, false, 218), "html", null, true);
                yield "</div>
              </div>
              ";
                // line 220
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["chapitre"], "cours", [], "any", false, false, false, 220)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 221
                    yield "                <span class=\"chapter-pill\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["chapitre"], "cours", [], "any", false, false, false, 221), "tittre", [], "any", false, false, false, 221), "html", null, true);
                    yield "</span>
              ";
                }
                // line 223
                yield "            </div>

            <div class=\"chapter-content-preview\">
              ";
                // line 226
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chapitre"], "contenu", [], "any", false, false, false, 226), 0, 200), "html", null, true);
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chapitre"], "contenu", [], "any", false, false, false, 226)) > 200)) {
                    yield "...";
                }
                // line 227
                yield "            </div>

            <div class=\"chapter-footer\">
              <a href=\"";
                // line 230
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chapitre_front_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chapitre"], "id", [], "any", false, false, false, 230)]), "html", null, true);
                yield "\" class=\"btn-small btn-view\">View</a>
              <a href=\"";
                // line 231
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chapitre_front_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chapitre"], "id", [], "any", false, false, false, 231)]), "html", null, true);
                yield "\" class=\"btn-small btn-edit\">Edit</a>
              <form method=\"post\"
                    action=\"";
                // line 233
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chapitre_front_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chapitre"], "id", [], "any", false, false, false, 233)]), "html", null, true);
                yield "\"
                    onsubmit=\"return confirm('Are you sure you want to delete this chapter?');\">
                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 235
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["chapitre"], "id", [], "any", false, false, false, 235))), "html", null, true);
                yield "\">
                <button type=\"submit\" class=\"btn-small btn-delete\">Delete</button>
              </form>
            </div>
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['chapitre'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 241
            yield "      </div>
    ";
        } else {
            // line 243
            yield "      <div class=\"empty-state\">
        <div class=\"empty-state-icon\">📖</div>
        <h3>No chapters found</h3>
        <p>Create your first chapter to start structuring your course</p>
        <a href=\"";
            // line 247
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chapitre_front_new");
            yield "\" class=\"btn-new\">+ New Chapter</a>
      </div>
    ";
        }
        // line 250
        yield "  </div>
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
        return "chapitreFRONT/index.html.twig";
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
        return array (  410 => 250,  404 => 247,  398 => 243,  394 => 241,  382 => 235,  377 => 233,  372 => 231,  368 => 230,  363 => 227,  358 => 226,  353 => 223,  347 => 221,  345 => 220,  340 => 218,  336 => 217,  331 => 214,  327 => 213,  324 => 212,  322 => 211,  316 => 208,  313 => 207,  307 => 205,  301 => 203,  299 => 202,  293 => 198,  288 => 195,  281 => 193,  277 => 192,  270 => 191,  268 => 190,  259 => 184,  252 => 180,  248 => 179,  244 => 178,  240 => 177,  236 => 176,  232 => 175,  228 => 174,  224 => 173,  57 => 9,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/chapitreFRONT/index.html.twig #}
<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Chapters - AIVA</title>
  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"{{ asset('css/stylefront.css') }}\">
  <style>
    .learning-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 2rem;
    }
    .page-header {
      margin-bottom: 2rem;
    }
    .page-header h1 {
      font-size: 2.2rem;
      font-weight: 700;
      color: #e2e8f0;
      margin-bottom: 0.25rem;
    }
    .page-header p {
      color: #94a3b8;
      font-size: 0.95rem;
    }
    .chapters-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
      gap: 1.5rem;
      margin-top: 1.5rem;
    }
    .chapter-card {
      background: linear-gradient(135deg, rgba(30, 41, 59, 0.5) 0%, rgba(15, 23, 42, 0.8) 100%);
      border-radius: 16px;
      border: 1px solid rgba(100, 116, 139, 0.3);
      padding: 1.5rem;
      color: #e2e8f0;
      box-shadow: 0 14px 35px rgba(15, 23, 42, 0.7);
      transition: all 0.3s ease;
    }
    .chapter-card:hover {
      transform: translateY(-4px);
      border-color: rgba(59, 130, 246, 0.6);
      box-shadow: 0 20px 45px rgba(37, 99, 235, 0.4);
    }
    .chapter-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 0.75rem;
    }
    .chapter-title {
      font-size: 1.2rem;
      font-weight: 600;
    }
    .chapter-pill {
      font-size: 0.75rem;
      padding: 0.25rem 0.7rem;
      border-radius: 999px;
      border: 1px solid rgba(148, 163, 184, 0.6);
      color: #cbd5f5;
      background: rgba(15, 23, 42, 0.7);
    }
    .chapter-order {
      color: #a5b4fc;
      font-size: 0.85rem;
      margin-bottom: 0.75rem;
    }
    .chapter-content-preview {
      font-size: 0.9rem;
      color: #94a3b8;
      max-height: 4.5rem;
      overflow: hidden;
      text-overflow: ellipsis;
    }
    .chapter-footer {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 0.5rem;
      margin-top: 1rem;
    }
    .btn-small {
      padding: 0.55rem 0.8rem;
      border-radius: 8px;
      border: none;
      font-size: 0.8rem;
      font-weight: 600;
      text-align: center;
      text-decoration: none;
      cursor: pointer;
      transition: all 0.2s ease;
      display: block;
    }
    .btn-view {
      background: rgba(0, 212, 170, 0.12);
      color: #00d4aa;
      border: 1px solid rgba(0, 212, 170, 0.4);
    }
    .btn-edit {
      background: rgba(168, 85, 247, 0.12);
      color: #c084fc;
      border: 1px solid rgba(168, 85, 247, 0.4);
    }
    .btn-delete {
      background: rgba(239, 68, 68, 0.12);
      color: #f87171;
      border: 1px solid rgba(239, 68, 68, 0.4);
    }
    .btn-view:hover {
      background: rgba(0, 212, 170, 0.25);
      border-color: #00d4aa;
    }
    .btn-edit:hover {
      background: rgba(168, 85, 247, 0.25);
      border-color: #a855f7;
    }
    .btn-delete:hover {
      background: rgba(239, 68, 68, 0.25);
      border-color: #ef4444;
    }
    .toolbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 1rem;
      margin-bottom: 1rem;
    }
    .btn-new {
      padding: 0.7rem 1.2rem;
      border-radius: 999px;
      background: linear-gradient(135deg, #6366f1, #8b5cf6);
      color: #020617;
      font-size: 0.85rem;
      font-weight: 600;
      text-decoration: none;
      box-shadow: 0 10px 25px rgba(79, 70, 229, 0.4);
    }
    .btn-new:hover {
      transform: translateY(-2px);
      box-shadow: 0 14px 30px rgba(79, 70, 229, 0.5);
    }
    .back-link {
      color: #94a3b8;
      font-size: 0.85rem;
      text-decoration: none;
    }
  </style>
</head>
<body>
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

  <div class=\"learning-container\">
    <div class=\"page-header\">
      {% if cours %}
        <p><a href=\"{{ path('cours_front_show', {'id': cours.id}) }}\" class=\"back-link\">← Back to {{ cours.tittre }}</a></p>
        <h1>Chapters of {{ cours.tittre }}</h1>
        <p>Course #{{ cours.idCours }} • {{ cours.categorie }}</p>
      {% else %}
        <h1>All Chapters</h1>
        <p>Browse and manage all your chapters</p>
      {% endif %}
    </div>

    <div class=\"toolbar\">
      <div>
        {% if cours %}
          <a href=\"{{ path('chapitre_front_new') }}\" class=\"btn-new\">+ New Chapter</a>
        {% else %}
          <a href=\"{{ path('chapitre_front_new') }}\" class=\"btn-new\">+ New Chapter</a>
        {% endif %}
      </div>
      <a href=\"{{ path('cours_front_index') }}\" class=\"back-link\">← Back to My Courses</a>
    </div>

    {% if chapitres is not empty %}
      <div class=\"chapters-grid\">
        {% for chapitre in chapitres %}
          <div class=\"chapter-card\">
            <div class=\"chapter-header\">
              <div>
                <div class=\"chapter-title\">{{ chapitre.titre }}</div>
                <div class=\"chapter-order\">Order: {{ chapitre.ordre }}</div>
              </div>
              {% if chapitre.cours %}
                <span class=\"chapter-pill\">{{ chapitre.cours.tittre }}</span>
              {% endif %}
            </div>

            <div class=\"chapter-content-preview\">
              {{ chapitre.contenu|slice(0, 200) }}{% if chapitre.contenu|length > 200 %}...{% endif %}
            </div>

            <div class=\"chapter-footer\">
              <a href=\"{{ path('chapitre_front_show', {'id': chapitre.id}) }}\" class=\"btn-small btn-view\">View</a>
              <a href=\"{{ path('chapitre_front_edit', {'id': chapitre.id}) }}\" class=\"btn-small btn-edit\">Edit</a>
              <form method=\"post\"
                    action=\"{{ path('chapitre_front_delete', {'id': chapitre.id}) }}\"
                    onsubmit=\"return confirm('Are you sure you want to delete this chapter?');\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ chapitre.id) }}\">
                <button type=\"submit\" class=\"btn-small btn-delete\">Delete</button>
              </form>
            </div>
          </div>
        {% endfor %}
      </div>
    {% else %}
      <div class=\"empty-state\">
        <div class=\"empty-state-icon\">📖</div>
        <h3>No chapters found</h3>
        <p>Create your first chapter to start structuring your course</p>
        <a href=\"{{ path('chapitre_front_new') }}\" class=\"btn-new\">+ New Chapter</a>
      </div>
    {% endif %}
  </div>
</div>
</body>
</html>
", "chapitreFRONT/index.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\chapitreFRONT\\index.html.twig");
    }
}
