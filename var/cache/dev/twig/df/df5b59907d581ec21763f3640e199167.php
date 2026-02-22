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

/* chapitreFRONT/show.html.twig */
class __TwigTemplate_e3ff56d8bbd4ee40b70fa25097676081 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chapitreFRONT/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chapitreFRONT/show.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 7, $this->source); })()), "titre", [], "any", false, false, false, 7), "html", null, true);
        yield " - Chapter - AIVA</title>
  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/stylefront.css"), "html", null, true);
        yield "\">
  <style>
    .learning-container {
      max-width: 1100px;
      margin: 0 auto;
      padding: 2rem;
    }
    .chapter-container {
      background: linear-gradient(145deg, rgba(15, 23, 42, 0.85), rgba(15, 23, 42, 0.95));
      border-radius: 24px;
      border: 1.5px solid rgba(100, 116, 139, 0.35);
      box-shadow: 0 24px 60px rgba(15, 23, 42, 0.75);
      padding: 2rem 2.25rem;
      color: #e2e8f0;
    }
    .chapter-header {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      margin-bottom: 1.25rem;
    }
    .chapter-title {
      font-size: 1.8rem;
      font-weight: 700;
    }
    .chapter-meta {
      font-size: 0.9rem;
      color: #94a3b8;
      margin-top: 0.35rem;
    }
    .chapter-pill {
      display: inline-block;
      font-size: 0.75rem;
      padding: 0.25rem 0.7rem;
      border-radius: 999px;
      border: 1px solid rgba(148, 163, 184, 0.6);
      color: #cbd5f5;
      background: rgba(15, 23, 42, 0.7);
      margin-left: 0.5rem;
    }
    .section-title {
      margin-top: 1.5rem;
      margin-bottom: 0.5rem;
      font-size: 1rem;
      font-weight: 600;
    }
    .section-text {
      font-size: 0.95rem;
      color: #cbd5f5;
      line-height: 1.7;
      white-space: pre-wrap;
    }
    .video-wrapper {
      position: relative;
      padding-bottom: 56.25%;
      height: 0;
      overflow: hidden;
      border-radius: 16px;
      border: 1px solid rgba(148, 163, 184, 0.4);
      box-shadow: 0 18px 45px rgba(0, 0, 0, 0.45);
      margin-top: 0.75rem;
    }
    .video-wrapper iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
    .chapter-footer {
      margin-top: 1.75rem;
      display: flex;
      gap: 0.75rem;
      flex-wrap: wrap;
    }
    .btn-outline, .btn-primary, .btn-danger {
      padding: 0.75rem 1.2rem;
      border-radius: 999px;
      font-size: 0.85rem;
      font-weight: 600;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 0.4rem;
      cursor: pointer;
      transition: all 0.25s ease;
    }
    .btn-outline {
      border: 1px solid rgba(148, 163, 184, 0.6);
      color: #e5e7eb;
      background: transparent;
    }
    .btn-primary {
      border: none;
      background: linear-gradient(135deg, #6366f1, #8b5cf6);
      color: #020617;
      box-shadow: 0 10px 25px rgba(79, 70, 229, 0.4);
    }
    .btn-danger {
      border: 1px solid rgba(239, 68, 68, 0.8);
      background: rgba(239, 68, 68, 0.15);
      color: #fecaca;
    }
  </style>
</head>
<body>
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
        // line 133
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_categorie_index");
        yield "\">categorie</a>
<a href=\"";
        // line 134
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_activite_index");
        yield "\">Activité</a>
    <a href=\"";
        // line 135
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_index");
        yield "\">Objectif</a>
               <a href=\"";
        // line 136
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_depense_index");
        yield "\">depense</a>            
<a href=\"";
        // line 137
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_aliment_index");
        yield "\">Alimentation</a>
        <a href=\"";
        // line 138
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_front_index");
        yield "\">apprentissage</a>
        <a href=\"";
        // line 139
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_energie_index");
        yield "\">Énergie</a>
    <a href=\"";
        // line 140
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_recommandation_index");
        yield "\">Recommandation</a>

        </div>

  <a href=\"";
        // line 144
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"nav-link\">
                                <i class=\"fa-solid fa-right-from-bracket\"></i> Déconnexion
                            </a>  </nav>


<div class=\"container\">
 
  

  <div class=\"learning-container\">
    <p><a href=\"";
        // line 154
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chapitre_front_index");
        yield "\" class=\"back-link\">← Back to chapters</a></p>

    <div class=\"chapter-container\">
      <div class=\"chapter-header\">
        <div>
          <div class=\"chapter-title\">";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 159, $this->source); })()), "titre", [], "any", false, false, false, 159), "html", null, true);
        yield "</div>
          <div class=\"chapter-meta\">
            Chapter #";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 161, $this->source); })()), "idChapitre", [], "any", false, false, false, 161), "html", null, true);
        yield "
            ";
        // line 162
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 162, $this->source); })()), "cours", [], "any", false, false, false, 162)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 163
            yield "              <span class=\"chapter-pill\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 163, $this->source); })()), "cours", [], "any", false, false, false, 163), "tittre", [], "any", false, false, false, 163), "html", null, true);
            yield "</span>
            ";
        }
        // line 165
        yield "          </div>
        </div>
      </div>

      <div class=\"section-title\">Content</div>
      <div class=\"section-text\">
        ";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 171, $this->source); })()), "contenu", [], "any", false, false, false, 171), "html", null, true);
        yield "
      </div>

      ";
        // line 175
        yield "      ";
        if ((($tmp = (isset($context["videoEmbedUrl"]) || array_key_exists("videoEmbedUrl", $context) ? $context["videoEmbedUrl"] : (function () { throw new RuntimeError('Variable "videoEmbedUrl" does not exist.', 175, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 176
            yield "        <div class=\"section-title\">Vidéo du chapitre</div>
        <div class=\"video-wrapper\">
          <iframe
            src=\"";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["videoEmbedUrl"]) || array_key_exists("videoEmbedUrl", $context) ? $context["videoEmbedUrl"] : (function () { throw new RuntimeError('Variable "videoEmbedUrl" does not exist.', 179, $this->source); })()), "html", null, true);
            yield "\"
            title=\"YouTube video player\"
            frameborder=\"0\"
            allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\"
            allowfullscreen
          ></iframe>
        </div>
      ";
        }
        // line 187
        yield "
      ";
        // line 188
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 188, $this->source); })()), "exercise", [], "any", false, false, false, 188)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 189
            yield "        <div class=\"section-title\">Exercise</div>
        <div class=\"section-text\">
          ";
            // line 191
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 191, $this->source); })()), "exercise", [], "any", false, false, false, 191), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 194
        yield "
      <div class=\"chapter-footer\">
        <a href=\"";
        // line 196
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chapitre_front_index");
        yield "\" class=\"btn-outline\">Back to chapters</a>
        <a href=\"";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chapitre_front_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 197, $this->source); })()), "id", [], "any", false, false, false, 197)]), "html", null, true);
        yield "\" class=\"btn-primary\">Edit</a>
        <form method=\"post\"
              action=\"";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chapitre_front_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 199, $this->source); })()), "id", [], "any", false, false, false, 199)]), "html", null, true);
        yield "\"
              onsubmit=\"return confirm('Are you sure you want to delete this chapter?');\"
              style=\"display:inline;\">
          <input type=\"hidden\" name=\"_token\" value=\"";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 202, $this->source); })()), "id", [], "any", false, false, false, 202))), "html", null, true);
        yield "\">
          <button type=\"submit\" class=\"btn-danger\">Delete</button>
        </form>
      </div>
    </div>
  </div>
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
        return "chapitreFRONT/show.html.twig";
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
        return array (  327 => 202,  321 => 199,  316 => 197,  312 => 196,  308 => 194,  302 => 191,  298 => 189,  296 => 188,  293 => 187,  282 => 179,  277 => 176,  274 => 175,  268 => 171,  260 => 165,  254 => 163,  252 => 162,  248 => 161,  243 => 159,  235 => 154,  222 => 144,  215 => 140,  211 => 139,  207 => 138,  203 => 137,  199 => 136,  195 => 135,  191 => 134,  187 => 133,  60 => 9,  55 => 7,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/chapitreFRONT/show.html.twig #}
<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>{{ chapitre.titre }} - Chapter - AIVA</title>
  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"{{ asset('css/stylefront.css') }}\">
  <style>
    .learning-container {
      max-width: 1100px;
      margin: 0 auto;
      padding: 2rem;
    }
    .chapter-container {
      background: linear-gradient(145deg, rgba(15, 23, 42, 0.85), rgba(15, 23, 42, 0.95));
      border-radius: 24px;
      border: 1.5px solid rgba(100, 116, 139, 0.35);
      box-shadow: 0 24px 60px rgba(15, 23, 42, 0.75);
      padding: 2rem 2.25rem;
      color: #e2e8f0;
    }
    .chapter-header {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      margin-bottom: 1.25rem;
    }
    .chapter-title {
      font-size: 1.8rem;
      font-weight: 700;
    }
    .chapter-meta {
      font-size: 0.9rem;
      color: #94a3b8;
      margin-top: 0.35rem;
    }
    .chapter-pill {
      display: inline-block;
      font-size: 0.75rem;
      padding: 0.25rem 0.7rem;
      border-radius: 999px;
      border: 1px solid rgba(148, 163, 184, 0.6);
      color: #cbd5f5;
      background: rgba(15, 23, 42, 0.7);
      margin-left: 0.5rem;
    }
    .section-title {
      margin-top: 1.5rem;
      margin-bottom: 0.5rem;
      font-size: 1rem;
      font-weight: 600;
    }
    .section-text {
      font-size: 0.95rem;
      color: #cbd5f5;
      line-height: 1.7;
      white-space: pre-wrap;
    }
    .video-wrapper {
      position: relative;
      padding-bottom: 56.25%;
      height: 0;
      overflow: hidden;
      border-radius: 16px;
      border: 1px solid rgba(148, 163, 184, 0.4);
      box-shadow: 0 18px 45px rgba(0, 0, 0, 0.45);
      margin-top: 0.75rem;
    }
    .video-wrapper iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
    .chapter-footer {
      margin-top: 1.75rem;
      display: flex;
      gap: 0.75rem;
      flex-wrap: wrap;
    }
    .btn-outline, .btn-primary, .btn-danger {
      padding: 0.75rem 1.2rem;
      border-radius: 999px;
      font-size: 0.85rem;
      font-weight: 600;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 0.4rem;
      cursor: pointer;
      transition: all 0.25s ease;
    }
    .btn-outline {
      border: 1px solid rgba(148, 163, 184, 0.6);
      color: #e5e7eb;
      background: transparent;
    }
    .btn-primary {
      border: none;
      background: linear-gradient(135deg, #6366f1, #8b5cf6);
      color: #020617;
      box-shadow: 0 10px 25px rgba(79, 70, 229, 0.4);
    }
    .btn-danger {
      border: 1px solid rgba(239, 68, 68, 0.8);
      background: rgba(239, 68, 68, 0.15);
      color: #fecaca;
    }
  </style>
</head>
<body>
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


<div class=\"container\">
 
  

  <div class=\"learning-container\">
    <p><a href=\"{{ path('chapitre_front_index') }}\" class=\"back-link\">← Back to chapters</a></p>

    <div class=\"chapter-container\">
      <div class=\"chapter-header\">
        <div>
          <div class=\"chapter-title\">{{ chapitre.titre }}</div>
          <div class=\"chapter-meta\">
            Chapter #{{ chapitre.idChapitre }}
            {% if chapitre.cours %}
              <span class=\"chapter-pill\">{{ chapitre.cours.tittre }}</span>
            {% endif %}
          </div>
        </div>
      </div>

      <div class=\"section-title\">Content</div>
      <div class=\"section-text\">
        {{ chapitre.contenu }}
      </div>

      {# Bloc vidéo comme en backoffice, basé sur videoEmbedUrl passé par le contrôleur #}
      {% if videoEmbedUrl %}
        <div class=\"section-title\">Vidéo du chapitre</div>
        <div class=\"video-wrapper\">
          <iframe
            src=\"{{ videoEmbedUrl }}\"
            title=\"YouTube video player\"
            frameborder=\"0\"
            allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\"
            allowfullscreen
          ></iframe>
        </div>
      {% endif %}

      {% if chapitre.exercise %}
        <div class=\"section-title\">Exercise</div>
        <div class=\"section-text\">
          {{ chapitre.exercise }}
        </div>
      {% endif %}

      <div class=\"chapter-footer\">
        <a href=\"{{ path('chapitre_front_index') }}\" class=\"btn-outline\">Back to chapters</a>
        <a href=\"{{ path('chapitre_front_edit', {'id': chapitre.id}) }}\" class=\"btn-primary\">Edit</a>
        <form method=\"post\"
              action=\"{{ path('chapitre_front_delete', {'id': chapitre.id}) }}\"
              onsubmit=\"return confirm('Are you sure you want to delete this chapter?');\"
              style=\"display:inline;\">
          <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ chapitre.id) }}\">
          <button type=\"submit\" class=\"btn-danger\">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>
", "chapitreFRONT/show.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\chapitreFRONT\\show.html.twig");
    }
}
