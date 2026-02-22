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

/* reset_password/reset.html.twig */
class __TwigTemplate_61ae47d9b6f1460f43736b7aa597cb99 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/reset.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/reset.html.twig"));

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
                    <h1 class=\"login-title\">Reset Your Password</h1>
                    <p class=\"login-subtitle\">Enter your new password</p>
                </div>

                ";
        // line 39
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 39, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "id" => "resetPasswordForm"]]);
        yield "
                    <div class=\"form-group\">
                        <div id=\"password1Error\" class=\"error-message\" style=\"display: none;\">❌ Password cannot be empty</div>
                        <label class=\"form-label\">New Password</label>
                        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 43, $this->source); })()), "plainPassword", [], "any", false, false, false, 43), "first", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-input", "placeholder" => "Enter new password", "id" => "password1"]]);
        // line 49
        yield "
                    </div>

                    <div class=\"form-group\">
                        <div id=\"password2Error\" class=\"error-message\" style=\"display: none;\">❌ Please confirm your password</div>
                        <label class=\"form-label\">Confirm Password</label>
                        ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 55, $this->source); })()), "plainPassword", [], "any", false, false, false, 55), "second", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-input", "placeholder" => "Confirm new password", "id" => "password2"]]);
        // line 61
        yield "
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary\">
                        Reset Password
                        <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"/>
                            <polyline points=\"12 5 19 12 12 19\"/>
                        </svg>
                    </button>
                ";
        // line 71
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 71, $this->source); })()), 'form_end');
        yield "
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
    document.getElementById('resetPasswordForm').addEventListener('submit', function(e) {
        let isValid = true;
        
        const password1 = document.getElementById('password1');
        const password2 = document.getElementById('password2');
        const password1Error = document.getElementById('password1Error');
        const password2Error = document.getElementById('password2Error');
        
        password1Error.style.display = 'none';
        password2Error.style.display = 'none';
        
        if (!password1.value.trim()) {
            password1Error.style.display = 'block';
            isValid = false;
        }
        
        if (!password2.value.trim()) {
            password2Error.style.display = 'block';
            isValid = false;
        }
        
        if (!isValid) {
            e.preventDefault();
        }
    });
    </script>
    <script src=\"";
        // line 115
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
        return "reset_password/reset.html.twig";
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
        return array (  169 => 115,  122 => 71,  110 => 61,  108 => 55,  100 => 49,  98 => 43,  91 => 39,  59 => 10,  48 => 1,);
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
                    <h1 class=\"login-title\">Reset Your Password</h1>
                    <p class=\"login-subtitle\">Enter your new password</p>
                </div>

                {{ form_start(resetForm, {'attr': {'novalidate': 'novalidate', 'id': 'resetPasswordForm'}}) }}
                    <div class=\"form-group\">
                        <div id=\"password1Error\" class=\"error-message\" style=\"display: none;\">❌ Password cannot be empty</div>
                        <label class=\"form-label\">New Password</label>
                        {{ form_widget(resetForm.plainPassword.first, {
                            'attr': {
                                'class': 'form-input',
                                'placeholder': 'Enter new password',
                                'id': 'password1'
                            }
                        }) }}
                    </div>

                    <div class=\"form-group\">
                        <div id=\"password2Error\" class=\"error-message\" style=\"display: none;\">❌ Please confirm your password</div>
                        <label class=\"form-label\">Confirm Password</label>
                        {{ form_widget(resetForm.plainPassword.second, {
                            'attr': {
                                'class': 'form-input',
                                'placeholder': 'Confirm new password',
                                'id': 'password2'
                            }
                        }) }}
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary\">
                        Reset Password
                        <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"/>
                            <polyline points=\"12 5 19 12 12 19\"/>
                        </svg>
                    </button>
                {{ form_end(resetForm) }}
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
    document.getElementById('resetPasswordForm').addEventListener('submit', function(e) {
        let isValid = true;
        
        const password1 = document.getElementById('password1');
        const password2 = document.getElementById('password2');
        const password1Error = document.getElementById('password1Error');
        const password2Error = document.getElementById('password2Error');
        
        password1Error.style.display = 'none';
        password2Error.style.display = 'none';
        
        if (!password1.value.trim()) {
            password1Error.style.display = 'block';
            isValid = false;
        }
        
        if (!password2.value.trim()) {
            password2Error.style.display = 'block';
            isValid = false;
        }
        
        if (!isValid) {
            e.preventDefault();
        }
    });
    </script>
    <script src=\"{{ asset('js/templatemo-glass-admin-script.js') }}\"></script>
</body>
</html>", "reset_password/reset.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\reset_password\\reset.html.twig");
    }
}
