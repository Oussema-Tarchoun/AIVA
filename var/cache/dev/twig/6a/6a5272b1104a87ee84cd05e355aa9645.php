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

/* security/login.html.twig */
class __TwigTemplate_a7df61dae0245c092ab826e511322514 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Login - Glass Admin</title>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Space+Mono:wght@400;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/templatemo-glass-admin-style.css"), "html", null, true);
        yield "\">
    <style>
        .field-error {
            color: #ef4444;
            font-size: 13px;
            margin-top: 5px;
            display: none;
            font-weight: 500;
        }
        .form-input.error {
            border-color: #ef4444 !important;
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
                    <h1 class=\"login-title\">Welcome Back</h1>
                    <p class=\"login-subtitle\">Sign in to continue to GlassDash</p>
                </div>

                ";
        // line 52
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 52, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 53
            yield "                    <div class=\"alert alert-error\">
                        ";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 54, $this->source); })()), "messageKey", [], "any", false, false, false, 54), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 54, $this->source); })()), "messageData", [], "any", false, false, false, 54), "security"), "html", null, true);
            yield "
                    </div>
                ";
        }
        // line 57
        yield "
                ";
        // line 58
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 59
            yield "                    <div class=\"alert alert-success\">
                        You are logged in as ";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60), "userIdentifier", [], "any", false, false, false, 60), "html", null, true);
            yield ", <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a>
                    </div>
                ";
        }
        // line 63
        yield "
                ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "flashes", ["success"], "method", false, false, false, 64));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 65
            yield "                    <div class=\"alert alert-success\">
                        ";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "
                <form method=\"post\" action=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" id=\"loginForm\" novalidate>
                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"inputEmail\">Email Address</label>
                        <input type=\"email\" 
                               id=\"inputEmail\" 
                               name=\"email\" 
                               class=\"form-input\" 
                               value=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 77, $this->source); })()), "html", null, true);
        yield "\"
                               placeholder=\"Enter your email\" 
                               autocomplete=\"email\"
                               autofocus>
                        <span class=\"field-error\" id=\"emailError\">Please enter your email address</span>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"inputPassword\">Password</label>
                        <input type=\"password\" 
                               id=\"inputPassword\" 
                               name=\"password\" 
                               class=\"form-input\" 
                               placeholder=\"Enter your password\"
                               autocomplete=\"current-password\">
                        <span class=\"field-error\" id=\"passwordError\">Please enter your password</span>
                    </div>

                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

                    <div class=\"form-row\">
                        <label class=\"checkbox-label\">
                            <input type=\"checkbox\" name=\"_remember_me\">
                            Remember me
                        </label>
                       <a href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\" class=\"forgot-link\">Forgot Password?</a>
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary\">
                        Sign In
                        <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"/>
                            <polyline points=\"12 5 19 12 12 19\"/>
                        </svg>
                    </button>
                </form>

                <p class=\"login-footer\">
                    Don't have an account? <a href=\"";
        // line 115
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">Create Account</a>
                </p>
            </div>
        </div>
    </div>

    <script src=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/templatemo-glass-admin-script.js"), "html", null, true);
        yield "\"></script>
    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            // Clear previous errors
            document.querySelectorAll('.field-error').forEach(error => error.style.display = 'none');
            document.querySelectorAll('.form-input').forEach(input => input.classList.remove('error'));

            let hasError = false;

            // Validate email
            const email = document.getElementById('inputEmail');
            if (!email.value.trim()) {
                document.getElementById('emailError').style.display = 'block';
                email.classList.add('error');
                hasError = true;
            } else if (!isValidEmail(email.value)) {
                document.getElementById('emailError').textContent = 'Please enter a valid email address';
                document.getElementById('emailError').style.display = 'block';
                email.classList.add('error');
                hasError = true;
            }

            // Validate password
            const password = document.getElementById('inputPassword');
            if (!password.value.trim()) {
                document.getElementById('passwordError').style.display = 'block';
                password.classList.add('error');
                hasError = true;
            }

            // Prevent form submission if there are errors
            if (hasError) {
                e.preventDefault();
                return false;
            }
        });

        // Email validation function
        function isValidEmail(email) {
            const regex = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
            return regex.test(email);
        }

        // Remove error on input
        document.getElementById('inputEmail').addEventListener('input', function() {
            this.classList.remove('error');
            document.getElementById('emailError').style.display = 'none';
        });

        document.getElementById('inputPassword').addEventListener('input', function() {
            this.classList.remove('error');
            document.getElementById('passwordError').style.display = 'none';
        });
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
        return "security/login.html.twig";
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
        return array (  219 => 121,  210 => 115,  194 => 102,  184 => 95,  163 => 77,  153 => 70,  150 => 69,  141 => 66,  138 => 65,  134 => 64,  131 => 63,  123 => 60,  120 => 59,  118 => 58,  115 => 57,  109 => 54,  106 => 53,  104 => 52,  59 => 10,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Login - Glass Admin</title>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Space+Mono:wght@400;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/templatemo-glass-admin-style.css') }}\">
    <style>
        .field-error {
            color: #ef4444;
            font-size: 13px;
            margin-top: 5px;
            display: none;
            font-weight: 500;
        }
        .form-input.error {
            border-color: #ef4444 !important;
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
                    <h1 class=\"login-title\">Welcome Back</h1>
                    <p class=\"login-subtitle\">Sign in to continue to GlassDash</p>
                </div>

                {% if error %}
                    <div class=\"alert alert-error\">
                        {{ error.messageKey|trans(error.messageData, 'security') }}
                    </div>
                {% endif %}

                {% if app.user %}
                    <div class=\"alert alert-success\">
                        You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                    </div>
                {% endif %}

                {% for message in app.flashes('success') %}
                    <div class=\"alert alert-success\">
                        {{ message }}
                    </div>
                {% endfor %}

                <form method=\"post\" action=\"{{ path('app_login') }}\" id=\"loginForm\" novalidate>
                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"inputEmail\">Email Address</label>
                        <input type=\"email\" 
                               id=\"inputEmail\" 
                               name=\"email\" 
                               class=\"form-input\" 
                               value=\"{{ last_username }}\"
                               placeholder=\"Enter your email\" 
                               autocomplete=\"email\"
                               autofocus>
                        <span class=\"field-error\" id=\"emailError\">Please enter your email address</span>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"inputPassword\">Password</label>
                        <input type=\"password\" 
                               id=\"inputPassword\" 
                               name=\"password\" 
                               class=\"form-input\" 
                               placeholder=\"Enter your password\"
                               autocomplete=\"current-password\">
                        <span class=\"field-error\" id=\"passwordError\">Please enter your password</span>
                    </div>

                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                    <div class=\"form-row\">
                        <label class=\"checkbox-label\">
                            <input type=\"checkbox\" name=\"_remember_me\">
                            Remember me
                        </label>
                       <a href=\"{{ path('app_forgot_password_request') }}\" class=\"forgot-link\">Forgot Password?</a>
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary\">
                        Sign In
                        <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"/>
                            <polyline points=\"12 5 19 12 12 19\"/>
                        </svg>
                    </button>
                </form>

                <p class=\"login-footer\">
                    Don't have an account? <a href=\"{{ path('app_register') }}\">Create Account</a>
                </p>
            </div>
        </div>
    </div>

    <script src=\"{{ asset('js/templatemo-glass-admin-script.js') }}\"></script>
    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            // Clear previous errors
            document.querySelectorAll('.field-error').forEach(error => error.style.display = 'none');
            document.querySelectorAll('.form-input').forEach(input => input.classList.remove('error'));

            let hasError = false;

            // Validate email
            const email = document.getElementById('inputEmail');
            if (!email.value.trim()) {
                document.getElementById('emailError').style.display = 'block';
                email.classList.add('error');
                hasError = true;
            } else if (!isValidEmail(email.value)) {
                document.getElementById('emailError').textContent = 'Please enter a valid email address';
                document.getElementById('emailError').style.display = 'block';
                email.classList.add('error');
                hasError = true;
            }

            // Validate password
            const password = document.getElementById('inputPassword');
            if (!password.value.trim()) {
                document.getElementById('passwordError').style.display = 'block';
                password.classList.add('error');
                hasError = true;
            }

            // Prevent form submission if there are errors
            if (hasError) {
                e.preventDefault();
                return false;
            }
        });

        // Email validation function
        function isValidEmail(email) {
            const regex = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
            return regex.test(email);
        }

        // Remove error on input
        document.getElementById('inputEmail').addEventListener('input', function() {
            this.classList.remove('error');
            document.getElementById('emailError').style.display = 'none';
        });

        document.getElementById('inputPassword').addEventListener('input', function() {
            this.classList.remove('error');
            document.getElementById('passwordError').style.display = 'none';
        });
    </script>
</body>
</html>", "security/login.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\security\\login.html.twig");
    }
}
