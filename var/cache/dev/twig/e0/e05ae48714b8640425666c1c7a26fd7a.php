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

/* front/base.html.twig */
class __TwigTemplate_c1002aab66d93c0b3f19e441822f2f5b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/base.html.twig"));

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
     
      
      ";
        // line 31
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "        <!-- User Profile Dropdown -->
        <div class=\"user-menu\">
          <button class=\"user-button\" id=\"userMenuBtn\">
            <div class=\"user-avatar\">";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35), 0, 2)), "html", null, true);
            yield "</div>
            <span class=\"user-name\">";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36), "html", null, true);
            yield "</span>
            <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
              <polyline points=\"6 9 12 15 18 9\"/>
            </svg>
          </button>
          <div class=\"user-dropdown\" id=\"userDropdown\">
            <div class=\"dropdown-header\">
              <div class=\"user-avatar-large\">";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43), 0, 2)), "html", null, true);
            yield "</div>
              <div class=\"user-info-dropdown\">
                <p class=\"user-name-dropdown\">";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45), "html", null, true);
            yield "</p>
                <p class=\"user-email-dropdown\">";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "email", [], "any", false, false, false, 46), "html", null, true);
            yield "</p>
              </div>
            </div>
            <div class=\"dropdown-divider\"></div>
            <a href=\"";
            // line 50
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\" class=\"dropdown-item\">
              <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"/>
                <circle cx=\"12\" cy=\"7\" r=\"4\"/>
              </svg>
              Profile
            </a>
            <a href=\"#\" class=\"dropdown-item\">
              <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                <circle cx=\"12\" cy=\"12\" r=\"3\"/>
                <path d=\"M12 1v6m0 6v6M5.6 5.6l4.2 4.2m4.2 4.2l4.2 4.2M1 12h6m6 0h6M5.6 18.4l4.2-4.2m4.2-4.2l4.2-4.2\"/>
              </svg>
              Settings
            </a>
            ";
            // line 64
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 65
                yield "              <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
                yield "\" class=\"dropdown-item\">
                <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                  <rect x=\"3\" y=\"3\" width=\"18\" height=\"18\" rx=\"2\"/>
                  <path d=\"M3 9h18M9 21V9\"/>
                </svg>
                Admin Panel
              </a>
            ";
            }
            // line 73
            yield "            <div class=\"dropdown-divider\"></div>
            <a href=\"";
            // line 74
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"dropdown-item logout\">
              <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                <path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"/>
                <polyline points=\"16 17 21 12 16 7\"/>
                <line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"/>
              </svg>
              Logout
            </a>
          </div>
        </div>
      ";
        } else {
            // line 85
            yield "        <button class=\"get-started\" onclick=\"window.location.href=''\">Get Started</button>
      ";
        }
        // line 87
        yield "    </nav>

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

  <script>
  // User menu dropdown toggle
  const userMenuBtn = document.getElementById('userMenuBtn');
  const userDropdown = document.getElementById('userDropdown');

  if (userMenuBtn && userDropdown) {
    userMenuBtn.addEventListener('click', function(e) {
      e.stopPropagation();
      userDropdown.classList.toggle('active');
      userMenuBtn.classList.toggle('active');
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function(e) {
      if (!userMenuBtn.contains(e.target) && !userDropdown.contains(e.target)) {
        userDropdown.classList.remove('active');
        userMenuBtn.classList.remove('active');
      }
    });
  }
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
        return "front/base.html.twig";
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
        return array (  172 => 87,  168 => 85,  154 => 74,  151 => 73,  139 => 65,  137 => 64,  120 => 50,  113 => 46,  109 => 45,  104 => 43,  94 => 36,  90 => 35,  85 => 32,  83 => 31,  58 => 9,  48 => 1,);
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
     
      
      {% if app.user %}
        <!-- User Profile Dropdown -->
        <div class=\"user-menu\">
          <button class=\"user-button\" id=\"userMenuBtn\">
            <div class=\"user-avatar\">{{ app.user.name|slice(0, 2)|upper }}</div>
            <span class=\"user-name\">{{ app.user.name }}</span>
            <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
              <polyline points=\"6 9 12 15 18 9\"/>
            </svg>
          </button>
          <div class=\"user-dropdown\" id=\"userDropdown\">
            <div class=\"dropdown-header\">
              <div class=\"user-avatar-large\">{{ app.user.name|slice(0, 2)|upper }}</div>
              <div class=\"user-info-dropdown\">
                <p class=\"user-name-dropdown\">{{ app.user.name }}</p>
                <p class=\"user-email-dropdown\">{{ app.user.email }}</p>
              </div>
            </div>
            <div class=\"dropdown-divider\"></div>
            <a href=\"{{ path('app_profile') }}\" class=\"dropdown-item\">
              <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"/>
                <circle cx=\"12\" cy=\"7\" r=\"4\"/>
              </svg>
              Profile
            </a>
            <a href=\"#\" class=\"dropdown-item\">
              <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                <circle cx=\"12\" cy=\"12\" r=\"3\"/>
                <path d=\"M12 1v6m0 6v6M5.6 5.6l4.2 4.2m4.2 4.2l4.2 4.2M1 12h6m6 0h6M5.6 18.4l4.2-4.2m4.2-4.2l4.2-4.2\"/>
              </svg>
              Settings
            </a>
            {% if is_granted('ROLE_ADMIN') %}
              <a href=\"{{ path('app_user_index') }}\" class=\"dropdown-item\">
                <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                  <rect x=\"3\" y=\"3\" width=\"18\" height=\"18\" rx=\"2\"/>
                  <path d=\"M3 9h18M9 21V9\"/>
                </svg>
                Admin Panel
              </a>
            {% endif %}
            <div class=\"dropdown-divider\"></div>
            <a href=\"{{ path('app_logout') }}\" class=\"dropdown-item logout\">
              <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                <path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"/>
                <polyline points=\"16 17 21 12 16 7\"/>
                <line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"/>
              </svg>
              Logout
            </a>
          </div>
        </div>
      {% else %}
        <button class=\"get-started\" onclick=\"window.location.href=''\">Get Started</button>
      {% endif %}
    </nav>

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

  <script>
  // User menu dropdown toggle
  const userMenuBtn = document.getElementById('userMenuBtn');
  const userDropdown = document.getElementById('userDropdown');

  if (userMenuBtn && userDropdown) {
    userMenuBtn.addEventListener('click', function(e) {
      e.stopPropagation();
      userDropdown.classList.toggle('active');
      userMenuBtn.classList.toggle('active');
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function(e) {
      if (!userMenuBtn.contains(e.target) && !userDropdown.contains(e.target)) {
        userDropdown.classList.remove('active');
        userMenuBtn.classList.remove('active');
      }
    });
  }
  </script>
</body>
</html>", "front/base.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\front\\base.html.twig");
    }
}
