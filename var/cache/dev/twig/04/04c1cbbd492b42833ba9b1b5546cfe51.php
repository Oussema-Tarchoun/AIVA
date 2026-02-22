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

/* front/index.html.twig */
class __TwigTemplate_189a7b57c8241fa65243ec48995d7b7e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>AIVA</title>
  <link rel=\"stylesheet\" href=\"style.css\">
  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap\" rel=\"stylesheet\">
          <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/stylefront.css"), "html", null, true);
        yield "\">
              <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">


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
    <!-- Hero Section -->
    <main class=\"hero\">
      <div class=\"glow\"></div>

      <svg width=\"140\" height=\"140\" viewBox=\"0 0 100 100\" class=\"hero-logo\">
        <defs>
          <linearGradient id=\"logoGrad\" x1=\"0%\" y1=\"0%\" x2=\"100%\" y2=\"100%\">
            <stop offset=\"0%\" stop-color=\"#a855f7\" />
            <stop offset=\"50%\" stop-color=\"#00d4aa\" />
            <stop offset=\"100%\" stop-color=\"#ec4899\" />
          </linearGradient>
          <radialGradient id=\"orbGrad\" cx=\"50%\" cy=\"50%\" r=\"50%\">
            <stop offset=\"0%\" stop-color=\"#00ffcc\" />
            <stop offset=\"100%\" stop-color=\"#00d4aa\" />
          </radialGradient>
        </defs>
        <path d=\"M50 10 L85 80 L15 80 Z\" fill=\"none\" stroke=\"url(#logoGrad)\" stroke-width=\"3\" stroke-linejoin=\"round\"/>
        <path d=\"M50 25 Q65 55 75 75\" fill=\"none\" stroke=\"#00d4aa\" stroke-width=\"2\" opacity=\"0.7\"/>
        <path d=\"M50 25 Q35 55 25 75\" fill=\"none\" stroke=\"#a855f7\" stroke-width=\"2\" opacity=\"0.7\"/>
        <circle cx=\"50\" cy=\"50\" r=\"12\" fill=\"url(#orbGrad)\"/>
        <circle cx=\"46\" cy=\"46\" r=\"4\" fill=\"white\" opacity=\"0.5\"/>
      </svg>

      <h2 class=\"hero-subtitle\">AIVA</h2>

      <h1 class=\"hero-title\">
        Intelligent Life
        <span>Management</span>
      </h1>

      <p class=\"hero-description\">
        Your central hub for productivity and life management. AIVA streamlines your
        finance, learning, health, and home into one synchronized, intelligent
        dashboard.
      </p>

      <button class=\"hero-button\">
        Launch Dashboard
        <span>→</span>
      </button>
    </main>
  </div>
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
        return "front/index.html.twig";
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
        return array (  117 => 44,  110 => 40,  106 => 39,  102 => 38,  98 => 37,  94 => 36,  90 => 35,  86 => 34,  58 => 9,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>AIVA</title>
  <link rel=\"stylesheet\" href=\"style.css\">
  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap\" rel=\"stylesheet\">
          <link rel=\"stylesheet\" href=\"{{ asset('css/stylefront.css') }}\">
              <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">


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
    <!-- Hero Section -->
    <main class=\"hero\">
      <div class=\"glow\"></div>

      <svg width=\"140\" height=\"140\" viewBox=\"0 0 100 100\" class=\"hero-logo\">
        <defs>
          <linearGradient id=\"logoGrad\" x1=\"0%\" y1=\"0%\" x2=\"100%\" y2=\"100%\">
            <stop offset=\"0%\" stop-color=\"#a855f7\" />
            <stop offset=\"50%\" stop-color=\"#00d4aa\" />
            <stop offset=\"100%\" stop-color=\"#ec4899\" />
          </linearGradient>
          <radialGradient id=\"orbGrad\" cx=\"50%\" cy=\"50%\" r=\"50%\">
            <stop offset=\"0%\" stop-color=\"#00ffcc\" />
            <stop offset=\"100%\" stop-color=\"#00d4aa\" />
          </radialGradient>
        </defs>
        <path d=\"M50 10 L85 80 L15 80 Z\" fill=\"none\" stroke=\"url(#logoGrad)\" stroke-width=\"3\" stroke-linejoin=\"round\"/>
        <path d=\"M50 25 Q65 55 75 75\" fill=\"none\" stroke=\"#00d4aa\" stroke-width=\"2\" opacity=\"0.7\"/>
        <path d=\"M50 25 Q35 55 25 75\" fill=\"none\" stroke=\"#a855f7\" stroke-width=\"2\" opacity=\"0.7\"/>
        <circle cx=\"50\" cy=\"50\" r=\"12\" fill=\"url(#orbGrad)\"/>
        <circle cx=\"46\" cy=\"46\" r=\"4\" fill=\"white\" opacity=\"0.5\"/>
      </svg>

      <h2 class=\"hero-subtitle\">AIVA</h2>

      <h1 class=\"hero-title\">
        Intelligent Life
        <span>Management</span>
      </h1>

      <p class=\"hero-description\">
        Your central hub for productivity and life management. AIVA streamlines your
        finance, learning, health, and home into one synchronized, intelligent
        dashboard.
      </p>

      <button class=\"hero-button\">
        Launch Dashboard
        <span>→</span>
      </button>
    </main>
  </div>
</body>
</html>", "front/index.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\front\\index.html.twig");
    }
}
