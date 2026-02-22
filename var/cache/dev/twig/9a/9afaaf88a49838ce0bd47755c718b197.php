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

/* registration/register.html.twig */
class __TwigTemplate_abaf1e3499f11d09f189742d3b6da0da extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Register - Glass Admin</title>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Space+Mono:wght@400;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/templatemo-glass-admin-style.css"), "html", null, true);
        yield "\">
    <style>
        .form-error-message {
            color: #ef4444;
            font-size: 13px;
            margin-bottom: 8px;
            display: block;
            font-weight: 500;
        }
        .form-input.is-invalid {
            border-color: #ef4444 !important;
        }
        .form-input.is-invalid:focus {
            box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1);
        }
    </style>
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
                    <h1 class=\"login-title\">Create Account</h1>
                    <p class=\"login-subtitle\">Join GlassDash today</p>
                </div>

                ";
        // line 55
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 55, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                    
                    <div class=\"form-group\">
                        ";
        // line 58
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 58, $this->source); })()), "name", [], "any", false, false, false, 58), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 59
            yield "                            <span class=\"form-error-message\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 59, $this->source); })()), "name", [], "any", false, false, false, 59), 'errors');
            yield "</span>
                        ";
        }
        // line 61
        yield "                        <label class=\"form-label\">Full Name</label>
                        ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 62, $this->source); })()), "name", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => (((($tmp =         // line 64
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 64, $this->source); })()), "name", [], "any", false, false, false, 64), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("form-input is-invalid") : ("form-input")), "placeholder" => "Enter your name"]]);
        // line 67
        yield "
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 71
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), "email", [], "any", false, false, false, 71), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 72
            yield "                            <span class=\"form-error-message\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 72, $this->source); })()), "email", [], "any", false, false, false, 72), 'errors');
            yield "</span>
                        ";
        }
        // line 74
        yield "                        <label class=\"form-label\">Email Address</label>
                        ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 75, $this->source); })()), "email", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => (((($tmp =         // line 77
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 77, $this->source); })()), "email", [], "any", false, false, false, 77), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("form-input is-invalid") : ("form-input")), "placeholder" => "Enter your email"]]);
        // line 80
        yield "
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 84
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 84, $this->source); })()), "plainPassword", [], "any", false, false, false, 84), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 85
            yield "                            <span class=\"form-error-message\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 85, $this->source); })()), "plainPassword", [], "any", false, false, false, 85), 'errors');
            yield "</span>
                        ";
        }
        // line 87
        yield "                        <label class=\"form-label\">Password</label>
                        ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 88, $this->source); })()), "plainPassword", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => (((($tmp =         // line 90
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 90, $this->source); })()), "plainPassword", [], "any", false, false, false, 90), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("form-input is-invalid") : ("form-input")), "placeholder" => "Enter your password"]]);
        // line 93
        yield "
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 97
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 97, $this->source); })()), "role", [], "any", false, false, false, 97), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 98
            yield "                            <span class=\"form-error-message\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 98, $this->source); })()), "role", [], "any", false, false, false, 98), 'errors');
            yield "</span>
                        ";
        }
        // line 100
        yield "                        <label class=\"form-label\">Role</label>
                        ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 101, $this->source); })()), "role", [], "any", false, false, false, 101), 'widget', ["attr" => ["class" => (((($tmp =         // line 103
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 103, $this->source); })()), "role", [], "any", false, false, false, 103), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("form-input is-invalid") : ("form-input"))]]);
        // line 105
        yield "
                    </div>

                    <div class=\"form-row\">
                        <label class=\"checkbox-label\">
                            ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 110, $this->source); })()), "agreeTerms", [], "any", false, false, false, 110), 'widget');
        yield "
                            Agree to terms and conditions
                        </label>
                    </div>
                    ";
        // line 114
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 114, $this->source); })()), "agreeTerms", [], "any", false, false, false, 114), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 115
            yield "                        <span class=\"form-error-message\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 115, $this->source); })()), "agreeTerms", [], "any", false, false, false, 115), 'errors');
            yield "</span>
                    ";
        }
        // line 117
        yield "
                    <button type=\"submit\" class=\"btn btn-primary\">
                        Create Account
                        <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"/>
                            <polyline points=\"12 5 19 12 12 19\"/>
                        </svg>
                    </button>
                ";
        // line 125
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 125, $this->source); })()), 'form_end');
        yield "

                <p class=\"login-footer\">
                    Already have an account? <a href=\"";
        // line 128
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Sign In</a>
                </p>
            </div>
        </div>
    </div>

    <script src=\"";
        // line 134
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
        return "registration/register.html.twig";
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
        return array (  234 => 134,  225 => 128,  219 => 125,  209 => 117,  203 => 115,  201 => 114,  194 => 110,  187 => 105,  185 => 103,  184 => 101,  181 => 100,  175 => 98,  173 => 97,  167 => 93,  165 => 90,  164 => 88,  161 => 87,  155 => 85,  153 => 84,  147 => 80,  145 => 77,  144 => 75,  141 => 74,  135 => 72,  133 => 71,  127 => 67,  125 => 64,  124 => 62,  121 => 61,  115 => 59,  113 => 58,  107 => 55,  59 => 10,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Register - Glass Admin</title>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Space+Mono:wght@400;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/templatemo-glass-admin-style.css') }}\">
    <style>
        .form-error-message {
            color: #ef4444;
            font-size: 13px;
            margin-bottom: 8px;
            display: block;
            font-weight: 500;
        }
        .form-input.is-invalid {
            border-color: #ef4444 !important;
        }
        .form-input.is-invalid:focus {
            box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1);
        }
    </style>
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
                    <h1 class=\"login-title\">Create Account</h1>
                    <p class=\"login-subtitle\">Join GlassDash today</p>
                </div>

                {{ form_start(registrationForm, {'attr': {'novalidate': 'novalidate'}}) }}
                    
                    <div class=\"form-group\">
                        {% if form_errors(registrationForm.name) %}
                            <span class=\"form-error-message\">{{ form_errors(registrationForm.name) }}</span>
                        {% endif %}
                        <label class=\"form-label\">Full Name</label>
                        {{ form_widget(registrationForm.name, {
                            'attr': {
                                'class': form_errors(registrationForm.name) ? 'form-input is-invalid' : 'form-input',
                                'placeholder': 'Enter your name'
                            }
                        }) }}
                    </div>

                    <div class=\"form-group\">
                        {% if form_errors(registrationForm.email) %}
                            <span class=\"form-error-message\">{{ form_errors(registrationForm.email) }}</span>
                        {% endif %}
                        <label class=\"form-label\">Email Address</label>
                        {{ form_widget(registrationForm.email, {
                            'attr': {
                                'class': form_errors(registrationForm.email) ? 'form-input is-invalid' : 'form-input',
                                'placeholder': 'Enter your email'
                            }
                        }) }}
                    </div>

                    <div class=\"form-group\">
                        {% if form_errors(registrationForm.plainPassword) %}
                            <span class=\"form-error-message\">{{ form_errors(registrationForm.plainPassword) }}</span>
                        {% endif %}
                        <label class=\"form-label\">Password</label>
                        {{ form_widget(registrationForm.plainPassword, {
                            'attr': {
                                'class': form_errors(registrationForm.plainPassword) ? 'form-input is-invalid' : 'form-input',
                                'placeholder': 'Enter your password'
                            }
                        }) }}
                    </div>

                    <div class=\"form-group\">
                        {% if form_errors(registrationForm.role) %}
                            <span class=\"form-error-message\">{{ form_errors(registrationForm.role) }}</span>
                        {% endif %}
                        <label class=\"form-label\">Role</label>
                        {{ form_widget(registrationForm.role, {
                            'attr': {
                                'class': form_errors(registrationForm.role) ? 'form-input is-invalid' : 'form-input'
                            }
                        }) }}
                    </div>

                    <div class=\"form-row\">
                        <label class=\"checkbox-label\">
                            {{ form_widget(registrationForm.agreeTerms) }}
                            Agree to terms and conditions
                        </label>
                    </div>
                    {% if form_errors(registrationForm.agreeTerms) %}
                        <span class=\"form-error-message\">{{ form_errors(registrationForm.agreeTerms) }}</span>
                    {% endif %}

                    <button type=\"submit\" class=\"btn btn-primary\">
                        Create Account
                        <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"/>
                            <polyline points=\"12 5 19 12 12 19\"/>
                        </svg>
                    </button>
                {{ form_end(registrationForm) }}

                <p class=\"login-footer\">
                    Already have an account? <a href=\"{{ path('app_login') }}\">Sign In</a>
                </p>
            </div>
        </div>
    </div>

    <script src=\"{{ asset('js/templatemo-glass-admin-script.js') }}\"></script>
</body>
</html>", "registration/register.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\registration\\register.html.twig");
    }
}
