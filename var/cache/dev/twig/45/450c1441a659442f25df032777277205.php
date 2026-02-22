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

/* reset_password/request.html.twig */
class __TwigTemplate_fb25cd781b968ff773b4f03441125ed7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/request.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/request.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Reset Password - Glass Admin</title>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Space+Mono:wght@400;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/templatemo-glass-admin-style.css"), "html", null, true);
        yield "\">
</head>
<body>
    <!-- Animated Background -->
    <div class=\"background\"></div>
    <div class=\"orb orb-1\"></div>
    <div class=\"orb orb-2\"></div>
    <div class=\"orb orb-3\"></div>

    <div class=\"login-page\">
        <!-- Theme Toggle -->
        <button class=\"theme-toggle-float\" id=\"theme-toggle\" title=\"Toggle Light/Dark Mode\">
            <svg class=\"icon-sun\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                <circle cx=\"12\" cy=\"12\" r=\"4\"/><path d=\"M12 2v2\"/><path d=\"M12 20v2\"/>
                <path d=\"M4.93 4.93l1.41 1.41\"/><path d=\"M17.66 17.66l1.41 1.41\"/>
                <path d=\"M2 12h2\"/><path d=\"M20 12h2\"/>
                <path d=\"M6.34 17.66l-1.41 1.41\"/><path d=\"M19.07 4.93l-1.41 1.41\"/>
            </svg>
            <svg class=\"icon-moon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" style=\"display: none;\">
                <path d=\"M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z\"/>
            </svg>
        </button>

        <div class=\"login-container\">
            <div class=\"login-card\">
                <div class=\"login-header\">
                    <h1 class=\"login-title\">Reset Password</h1>
                    <p class=\"login-subtitle\">Enter your email to receive reset instructions</p>
                </div>

                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "flashes", ["reset_password_error"], "method", false, false, false, 40));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 41
            yield "                    <div class=\"alert alert-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_error"], "html", null, true);
            yield "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash_error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "
                ";
        // line 44
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 44, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "id" => "resetRequestForm"]]);
        yield "
                    <div class=\"form-group\">
                        <div id=\"emailError\" class=\"error-message\" style=\"display: none;\">❌ Email address cannot be empty</div>
                        <label class=\"form-label\" for=\"email\">Email Address</label>
                        ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 48, $this->source); })()), "email", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-input", "placeholder" => "Enter your email", "autofocus" => true, "id" => "resetEmail"]]);
        // line 55
        yield "
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary\">
                        Send Reset Link
                        <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"/>
                            <polyline points=\"12 5 19 12 12 19\"/>
                        </svg>
                    </button>
                ";
        // line 65
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 65, $this->source); })()), 'form_end');
        yield "

                <p class=\"login-footer\">
                    Remember your password? <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Sign In</a>
                </p>
            </div>
        </div>
    </div>

    <style>
    .error-message {
        background: rgba(239, 68, 68, 0.1);
        border-left: 3px solid #ef4444;
        color: #ef4444;
        padding: 10px 15px;
        margin-bottom: 10px;
        border-radius: 6px;
        font-size: 14px;
    }
    </style>

    <script>
    document.getElementById('resetRequestForm').addEventListener('submit', function(e) {
        const email = document.getElementById('resetEmail');
        const emailError = document.getElementById('emailError');
        
        emailError.style.display = 'none';
        
        if (!email.value.trim()) {
            emailError.style.display = 'block';
            e.preventDefault();
        }
    });
    </script>
    <script src=\"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/templatemo-glass-admin-script.js"), "html", null, true);
        yield "\"></script>
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
        return "reset_password/request.html.twig";
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
        return array (  169 => 99,  135 => 68,  129 => 65,  117 => 55,  115 => 48,  108 => 44,  105 => 43,  96 => 41,  92 => 40,  59 => 10,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Reset Password - Glass Admin</title>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Space+Mono:wght@400;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/templatemo-glass-admin-style.css') }}\">
</head>
<body>
    <!-- Animated Background -->
    <div class=\"background\"></div>
    <div class=\"orb orb-1\"></div>
    <div class=\"orb orb-2\"></div>
    <div class=\"orb orb-3\"></div>

    <div class=\"login-page\">
        <!-- Theme Toggle -->
        <button class=\"theme-toggle-float\" id=\"theme-toggle\" title=\"Toggle Light/Dark Mode\">
            <svg class=\"icon-sun\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                <circle cx=\"12\" cy=\"12\" r=\"4\"/><path d=\"M12 2v2\"/><path d=\"M12 20v2\"/>
                <path d=\"M4.93 4.93l1.41 1.41\"/><path d=\"M17.66 17.66l1.41 1.41\"/>
                <path d=\"M2 12h2\"/><path d=\"M20 12h2\"/>
                <path d=\"M6.34 17.66l-1.41 1.41\"/><path d=\"M19.07 4.93l-1.41 1.41\"/>
            </svg>
            <svg class=\"icon-moon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" style=\"display: none;\">
                <path d=\"M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z\"/>
            </svg>
        </button>

        <div class=\"login-container\">
            <div class=\"login-card\">
                <div class=\"login-header\">
                    <h1 class=\"login-title\">Reset Password</h1>
                    <p class=\"login-subtitle\">Enter your email to receive reset instructions</p>
                </div>

                {% for flash_error in app.flashes('reset_password_error') %}
                    <div class=\"alert alert-error\">{{ flash_error }}</div>
                {% endfor %}

                {{ form_start(requestForm, {'attr': {'novalidate': 'novalidate', 'id': 'resetRequestForm'}}) }}
                    <div class=\"form-group\">
                        <div id=\"emailError\" class=\"error-message\" style=\"display: none;\">❌ Email address cannot be empty</div>
                        <label class=\"form-label\" for=\"email\">Email Address</label>
                        {{ form_widget(requestForm.email, {
                            'attr': {
                                'class': 'form-input',
                                'placeholder': 'Enter your email',
                                'autofocus': true,
                                'id': 'resetEmail'
                            }
                        }) }}
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary\">
                        Send Reset Link
                        <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"/>
                            <polyline points=\"12 5 19 12 12 19\"/>
                        </svg>
                    </button>
                {{ form_end(requestForm) }}

                <p class=\"login-footer\">
                    Remember your password? <a href=\"{{ path('app_login') }}\">Sign In</a>
                </p>
            </div>
        </div>
    </div>

    <style>
    .error-message {
        background: rgba(239, 68, 68, 0.1);
        border-left: 3px solid #ef4444;
        color: #ef4444;
        padding: 10px 15px;
        margin-bottom: 10px;
        border-radius: 6px;
        font-size: 14px;
    }
    </style>

    <script>
    document.getElementById('resetRequestForm').addEventListener('submit', function(e) {
        const email = document.getElementById('resetEmail');
        const emailError = document.getElementById('emailError');
        
        emailError.style.display = 'none';
        
        if (!email.value.trim()) {
            emailError.style.display = 'block';
            e.preventDefault();
        }
    });
    </script>
    <script src=\"{{ asset('js/templatemo-glass-admin-script.js') }}\"></script>
</body>
</html>", "reset_password/request.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\reset_password\\request.html.twig");
    }
}
