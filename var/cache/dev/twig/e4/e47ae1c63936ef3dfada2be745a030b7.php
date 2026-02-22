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

/* home/index.html.twig */
class __TwigTemplate_06c81579681c37a7e9315b48c9516c70 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "front/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->load("front/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Home";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        yield "<section class=\"hero\">
    <div class=\"container\">
        <div class=\"hero-content\">
            ";
        // line 9
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "                <h1>Welcome back, ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "name", [], "any", false, false, false, 10), "html", null, true);
            yield "! 👋</h1>
                <p>You're logged in as ";
            // line 11
            yield (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("an Administrator") : ("a User"));
            yield "</p>
            ";
        } else {
            // line 13
            yield "                <h1>Welcome to GlassDash</h1>
                <p>Your modern platform for seamless management</p>
            ";
        }
        // line 16
        yield "            
            <div class=\"hero-buttons\">
                ";
        // line 18
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "                    <a href=\"#\" class=\"btn btn-primary\">Get Started</a>
                    ";
            // line 20
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 21
                yield "                        <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
                yield "\" class=\"btn btn-outline\">Go to Admin Panel</a>
                    ";
            }
            // line 23
            yield "                ";
        } else {
            // line 24
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"btn btn-primary\">Get Started</a>
                    <a href=\"\" class=\"btn btn-outline\">Sign In</a>
                ";
        }
        // line 27
        yield "            </div>
        </div>
        <div class=\"hero-image\">
            <div class=\"hero-card\">
                <div class=\"card-icon\">🚀</div>
                <h3>Fast & Efficient</h3>
                <p>Streamline your workflow</p>
            </div>
        </div>
    </div>
</section>

<section class=\"features\">
    <div class=\"container\">
        <h2>Our Features</h2>
        <div class=\"features-grid\">
            <div class=\"feature-card\">
                <div class=\"feature-icon\">⚡</div>
                <h3>Lightning Fast</h3>
                <p>Optimized for speed and performance</p>
            </div>
            <div class=\"feature-card\">
                <div class=\"feature-icon\">🔒</div>
                <h3>Secure</h3>
                <p>Your data is protected with industry-standard security</p>
            </div>
            <div class=\"feature-card\">
                <div class=\"feature-icon\">📊</div>
                <h3>Analytics</h3>
                <p>Track your progress with powerful insights</p>
            </div>
            <div class=\"feature-card\">
                <div class=\"feature-icon\">🎨</div>
                <h3>Beautiful Design</h3>
                <p>Modern and intuitive user interface</p>
            </div>
        </div>
    </div>
</section>

";
        // line 67
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 68
            yield "<section class=\"user-info\">
    <div class=\"container\">
        <div class=\"info-card\">
            <h2>Your Account Information</h2>
            <div class=\"info-grid\">
                <div class=\"info-item\">
                    <span class=\"info-label\">Name:</span>
                    <span class=\"info-value\">";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "name", [], "any", false, false, false, 75), "html", null, true);
            yield "</span>
                </div>
                <div class=\"info-item\">
                    <span class=\"info-label\">Email:</span>
                    <span class=\"info-value\">";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79), "email", [], "any", false, false, false, 79), "html", null, true);
            yield "</span>
                </div>
                <div class=\"info-item\">
                    <span class=\"info-label\">Role:</span>
                    <span class=\"info-value\">
                        ";
            // line 84
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 85
                yield "                            <span class=\"badge badge-admin\">Administrator</span>
                        ";
            } else {
                // line 87
                yield "                            <span class=\"badge badge-user\">User</span>
                        ";
            }
            // line 89
            yield "                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.html.twig";
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
        return array (  227 => 89,  223 => 87,  219 => 85,  217 => 84,  209 => 79,  202 => 75,  193 => 68,  191 => 67,  149 => 27,  142 => 24,  139 => 23,  133 => 21,  131 => 20,  128 => 19,  126 => 18,  122 => 16,  117 => 13,  112 => 11,  107 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Home{% endblock %}

{% block content %}
<section class=\"hero\">
    <div class=\"container\">
        <div class=\"hero-content\">
            {% if app.user %}
                <h1>Welcome back, {{ app.user.name }}! 👋</h1>
                <p>You're logged in as {{ is_granted('ROLE_ADMIN') ? 'an Administrator' : 'a User' }}</p>
            {% else %}
                <h1>Welcome to GlassDash</h1>
                <p>Your modern platform for seamless management</p>
            {% endif %}
            
            <div class=\"hero-buttons\">
                {% if app.user %}
                    <a href=\"#\" class=\"btn btn-primary\">Get Started</a>
                    {% if is_granted('ROLE_ADMIN') %}
                        <a href=\"{{ path('app_user_index') }}\" class=\"btn btn-outline\">Go to Admin Panel</a>
                    {% endif %}
                {% else %}
                    <a href=\"{{ path('app_register') }}\" class=\"btn btn-primary\">Get Started</a>
                    <a href=\"\" class=\"btn btn-outline\">Sign In</a>
                {% endif %}
            </div>
        </div>
        <div class=\"hero-image\">
            <div class=\"hero-card\">
                <div class=\"card-icon\">🚀</div>
                <h3>Fast & Efficient</h3>
                <p>Streamline your workflow</p>
            </div>
        </div>
    </div>
</section>

<section class=\"features\">
    <div class=\"container\">
        <h2>Our Features</h2>
        <div class=\"features-grid\">
            <div class=\"feature-card\">
                <div class=\"feature-icon\">⚡</div>
                <h3>Lightning Fast</h3>
                <p>Optimized for speed and performance</p>
            </div>
            <div class=\"feature-card\">
                <div class=\"feature-icon\">🔒</div>
                <h3>Secure</h3>
                <p>Your data is protected with industry-standard security</p>
            </div>
            <div class=\"feature-card\">
                <div class=\"feature-icon\">📊</div>
                <h3>Analytics</h3>
                <p>Track your progress with powerful insights</p>
            </div>
            <div class=\"feature-card\">
                <div class=\"feature-icon\">🎨</div>
                <h3>Beautiful Design</h3>
                <p>Modern and intuitive user interface</p>
            </div>
        </div>
    </div>
</section>

{% if app.user %}
<section class=\"user-info\">
    <div class=\"container\">
        <div class=\"info-card\">
            <h2>Your Account Information</h2>
            <div class=\"info-grid\">
                <div class=\"info-item\">
                    <span class=\"info-label\">Name:</span>
                    <span class=\"info-value\">{{ app.user.name }}</span>
                </div>
                <div class=\"info-item\">
                    <span class=\"info-label\">Email:</span>
                    <span class=\"info-value\">{{ app.user.email }}</span>
                </div>
                <div class=\"info-item\">
                    <span class=\"info-label\">Role:</span>
                    <span class=\"info-value\">
                        {% if is_granted('ROLE_ADMIN') %}
                            <span class=\"badge badge-admin\">Administrator</span>
                        {% else %}
                            <span class=\"badge badge-user\">User</span>
                        {% endif %}
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
{% endif %}
{% endblock %}", "home/index.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\home\\index.html.twig");
    }
}
