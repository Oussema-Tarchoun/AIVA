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

/* chapitreFRONT/new.html.twig */
class __TwigTemplate_ea5acca0b2d230e2dd53ef592c570b9a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chapitreFRONT/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chapitreFRONT/new.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>New Chapter - AIVA</title>
  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/stylefront.css"), "html", null, true);
        yield "\">
  <style>
    .learning-container {
      max-width: 900px;
      margin: 0 auto;
      padding: 2rem;
    }
    .page-header {
      margin-bottom: 1.5rem;
    }
    .form-container {
      background: linear-gradient(145deg, rgba(15, 23, 42, 0.85), rgba(15, 23, 42, 0.95));
      border-radius: 24px;
      border: 1.5px solid rgba(100, 116, 139, 0.35);
      box-shadow: 0 24px 60px rgba(15, 23, 42, 0.75);
      padding: 2rem 2.25rem;
      color: #e2e8f0;
    }
    .form-row {
      margin-bottom: 1rem;
    }
    .form-actions {
      margin-top: 1.5rem;
      display: flex;
      gap: 0.75rem;
      flex-wrap: wrap;
    }
    .btn-primary {
      padding: 0.75rem 1.2rem;
      border-radius: 999px;
      font-size: 0.85rem;
      font-weight: 600;
      border: none;
      background: linear-gradient(135deg, #6366f1, #8b5cf6);
      color: #020617;
      cursor: pointer;
      box-shadow: 0 10px 25px rgba(79, 70, 229, 0.4);
      transition: all 0.25s ease;
    }
    .btn-outline {
      padding: 0.75rem 1.2rem;
      border-radius: 999px;
      font-size: 0.85rem;
      font-weight: 600;
      text-decoration: none;
      border: 1px solid rgba(148, 163, 184, 0.6);
      color: #e5e7eb;
      background: transparent;
      transition: all 0.25s ease;
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
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_categorie_index");
        yield "\">categorie</a>
<a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_activite_index");
        yield "\">Activité</a>
    <a href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_index");
        yield "\">Objectif</a>
               <a href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_depense_index");
        yield "\">depense</a>            
<a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_aliment_index");
        yield "\">Alimentation</a>
        <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_front_index");
        yield "\">apprentissage</a>
        <a href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_energie_index");
        yield "\">Énergie</a>
    <a href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_recommandation_index");
        yield "\">Recommandation</a>

        </div>

  <a href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"nav-link\">
                                <i class=\"fa-solid fa-right-from-bracket\"></i> Déconnexion
                            </a>  </nav>


<div class=\"container\">
  

  <div class=\"learning-container\">
    <div class=\"page-header\">
      <p><a href=\"";
        // line 101
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chapitre_front_index");
        yield "\" class=\"back-link\">← Back to chapters</a></p>
      <h1>New Chapter</h1>
      <p>Create a new chapter and attach it to a course</p>
    </div>

    <div class=\"form-container\">
      ";
        // line 107
        yield Twig\Extension\CoreExtension::include($this->env, $context, "chapitreFRONT/_form.html.twig", ["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "button_label" => "Create chapter"]);
        yield "

      <div class=\"form-actions\">
        <a href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chapitre_front_index");
        yield "\" class=\"btn-outline\">Cancel</a>
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
        return "chapitreFRONT/new.html.twig";
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
        return array (  194 => 110,  188 => 107,  179 => 101,  166 => 91,  159 => 87,  155 => 86,  151 => 85,  147 => 84,  143 => 83,  139 => 82,  135 => 81,  131 => 80,  57 => 9,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/chapitreFRONT/new.html.twig #}
<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>New Chapter - AIVA</title>
  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"{{ asset('css/stylefront.css') }}\">
  <style>
    .learning-container {
      max-width: 900px;
      margin: 0 auto;
      padding: 2rem;
    }
    .page-header {
      margin-bottom: 1.5rem;
    }
    .form-container {
      background: linear-gradient(145deg, rgba(15, 23, 42, 0.85), rgba(15, 23, 42, 0.95));
      border-radius: 24px;
      border: 1.5px solid rgba(100, 116, 139, 0.35);
      box-shadow: 0 24px 60px rgba(15, 23, 42, 0.75);
      padding: 2rem 2.25rem;
      color: #e2e8f0;
    }
    .form-row {
      margin-bottom: 1rem;
    }
    .form-actions {
      margin-top: 1.5rem;
      display: flex;
      gap: 0.75rem;
      flex-wrap: wrap;
    }
    .btn-primary {
      padding: 0.75rem 1.2rem;
      border-radius: 999px;
      font-size: 0.85rem;
      font-weight: 600;
      border: none;
      background: linear-gradient(135deg, #6366f1, #8b5cf6);
      color: #020617;
      cursor: pointer;
      box-shadow: 0 10px 25px rgba(79, 70, 229, 0.4);
      transition: all 0.25s ease;
    }
    .btn-outline {
      padding: 0.75rem 1.2rem;
      border-radius: 999px;
      font-size: 0.85rem;
      font-weight: 600;
      text-decoration: none;
      border: 1px solid rgba(148, 163, 184, 0.6);
      color: #e5e7eb;
      background: transparent;
      transition: all 0.25s ease;
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
    <div class=\"page-header\">
      <p><a href=\"{{ path('chapitre_front_index') }}\" class=\"back-link\">← Back to chapters</a></p>
      <h1>New Chapter</h1>
      <p>Create a new chapter and attach it to a course</p>
    </div>

    <div class=\"form-container\">
      {{ include('chapitreFRONT/_form.html.twig', { form: form, button_label: 'Create chapter' }) }}

      <div class=\"form-actions\">
        <a href=\"{{ path('chapitre_front_index') }}\" class=\"btn-outline\">Cancel</a>
      </div>
    </div>
  </div>
</div>
</body>
</html>
", "chapitreFRONT/new.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\chapitreFRONT\\new.html.twig");
    }
}
