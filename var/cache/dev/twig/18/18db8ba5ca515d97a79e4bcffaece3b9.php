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

/* coursFRONT/new.html.twig */
class __TwigTemplate_348c195328395901e90abb5bbac3a804 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coursFRONT/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coursFRONT/new.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>New Course - AIVA</title>
  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/stylefront.css"), "html", null, true);
        yield "\">
  <style>
    .form-container {
      max-width: 800px;
      margin: 2.5rem auto 3rem;
      padding: 2rem 2.25rem;
      background: linear-gradient(145deg, rgba(15, 23, 42, 0.85), rgba(15, 23, 42, 0.95));
      border-radius: 24px;
      border: 1.5px solid rgba(100, 116, 139, 0.35);
      box-shadow: 0 24px 60px rgba(15, 23, 42, 0.75);
      color: #e2e8f0;
    }
    .form-row {
      margin-bottom: 1rem;
    }
    .form-actions {
      margin-top: 1.75rem;
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
      background: linear-gradient(135deg, #00d4aa, #22c55e);
      color: #020617;
      cursor: pointer;
      box-shadow: 0 10px 25px rgba(34, 197, 94, 0.4);
      transition: all 0.25s ease;
    }
    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 14px 30px rgba(34, 197, 94, 0.5);
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
    .btn-outline:hover {
      background: rgba(148, 163, 184, 0.2);
    }
  </style>
</head>
<body>
<div class=\"container\">
  <!-- Navbar -->
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
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_categorie_index");
        yield "\">categorie</a>
<a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_activite_index");
        yield "\">Activité</a>
    <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_index");
        yield "\">Objectif</a>
               <a href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_depense_index");
        yield "\">depense</a>            
<a href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_aliment_index");
        yield "\">Alimentation</a>
        <a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_front_index");
        yield "\">apprentissage</a>
        <a href=\"";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_energie_index");
        yield "\">Énergie</a>
    <a href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_recommandation_index");
        yield "\">Recommandation</a>

        </div>

  <a href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"nav-link\">
                                <i class=\"fa-solid fa-right-from-bracket\"></i> Déconnexion
                            </a>  </nav>



  <div class=\"learning-container\">
    <div class=\"page-header\" style=\"text-align:left; margin-bottom:1.5rem;\">
      <p style=\"margin-bottom:0.5rem;\">
        <a href=\"";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_front_index");
        yield "\" style=\"color:#94a3b8; text-decoration:none;\">← Back to My Courses</a>
      </p>
      <h1>New Course</h1>
      <p>Create a new course to start your learning journey</p>
    </div>

    <div class=\"form-container\">
      ";
        // line 110
        yield Twig\Extension\CoreExtension::include($this->env, $context, "coursFRONT/_form.html.twig", ["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "button_label" => "Create course"]);
        yield "

      <div class=\"form-actions\">
        <a href=\"";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_front_index");
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
        return "coursFRONT/new.html.twig";
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
        return array (  197 => 113,  191 => 110,  181 => 103,  169 => 94,  162 => 90,  158 => 89,  154 => 88,  150 => 87,  146 => 86,  142 => 85,  138 => 84,  134 => 83,  57 => 9,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/coursFRONT/new.html.twig #}
<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>New Course - AIVA</title>
  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"{{ asset('css/stylefront.css') }}\">
  <style>
    .form-container {
      max-width: 800px;
      margin: 2.5rem auto 3rem;
      padding: 2rem 2.25rem;
      background: linear-gradient(145deg, rgba(15, 23, 42, 0.85), rgba(15, 23, 42, 0.95));
      border-radius: 24px;
      border: 1.5px solid rgba(100, 116, 139, 0.35);
      box-shadow: 0 24px 60px rgba(15, 23, 42, 0.75);
      color: #e2e8f0;
    }
    .form-row {
      margin-bottom: 1rem;
    }
    .form-actions {
      margin-top: 1.75rem;
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
      background: linear-gradient(135deg, #00d4aa, #22c55e);
      color: #020617;
      cursor: pointer;
      box-shadow: 0 10px 25px rgba(34, 197, 94, 0.4);
      transition: all 0.25s ease;
    }
    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 14px 30px rgba(34, 197, 94, 0.5);
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
    .btn-outline:hover {
      background: rgba(148, 163, 184, 0.2);
    }
  </style>
</head>
<body>
<div class=\"container\">
  <!-- Navbar -->
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
    <div class=\"page-header\" style=\"text-align:left; margin-bottom:1.5rem;\">
      <p style=\"margin-bottom:0.5rem;\">
        <a href=\"{{ path('cours_front_index') }}\" style=\"color:#94a3b8; text-decoration:none;\">← Back to My Courses</a>
      </p>
      <h1>New Course</h1>
      <p>Create a new course to start your learning journey</p>
    </div>

    <div class=\"form-container\">
      {{ include('coursFRONT/_form.html.twig', { form: form, button_label: 'Create course' }) }}

      <div class=\"form-actions\">
        <a href=\"{{ path('cours_front_index') }}\" class=\"btn-outline\">Cancel</a>
      </div>
    </div>
  </div>
</div>
</body>
</html>
", "coursFRONT/new.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\coursFRONT\\new.html.twig");
    }
}
