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

/* user/show.html.twig */
class __TwigTemplate_3219243e5c29ca5ad45e1fcdeccfd3c3 extends Template
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
            'page_title' => [$this, 'block_page_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield "User Details - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield "User Details";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "<section class=\"content-grid\" style=\"grid-template-columns: 1fr;\">
    <div class=\"glass-card\">
        <div class=\"card-header\">
            <div>
                <h2 class=\"card-title\">User Information</h2>
                <p class=\"card-subtitle\">Detailed view of user account</p>
            </div>
            <div class=\"card-actions\">
                <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"card-btn\">
                    ← Back to List
                </a>
            </div>
        </div>

        <div style=\"padding: 30px;\">
            <!-- User Avatar & Basic Info -->
            <div style=\"display: flex; align-items: center; gap: 30px; margin-bottom: 40px; padding-bottom: 30px; border-bottom: 1px solid rgba(255, 255, 255, 0.1);\">
                <div class=\"table-avatar\" style=\"width: 100px; height: 100px; font-size: 36px; background: linear-gradient(135deg, var(--emerald-light), var(--emerald));\">
                    ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), 0, 2)), "html", null, true);
        yield "
                </div>
                <div>
                    <h2 style=\"font-size: 28px; margin: 0 0 8px 0; color: var(--text-primary);\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28), "html", null, true);
        yield "</h2>
                    <p style=\"font-size: 16px; color: var(--text-secondary); margin: 0;\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "email", [], "any", false, false, false, 29), "html", null, true);
        yield "</p>
                    <div style=\"margin-top: 10px;\">
                        ";
        // line 31
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "isBlocked", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "                            <span class=\"status-badge pending\">🔒 Blocked</span>
                        ";
        } else {
            // line 34
            yield "                            <span class=\"status-badge completed\">✓ Active</span>
                        ";
        }
        // line 36
        yield "                    </div>
                </div>
            </div>

            <!-- User Details Grid -->
            <div style=\"display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px; margin-bottom: 30px;\">
                <div class=\"detail-item\">
                    <label style=\"display: block; font-size: 12px; text-transform: uppercase; letter-spacing: 1px; color: var(--text-secondary); margin-bottom: 8px;\">User ID</label>
                    <div style=\"font-size: 18px; color: var(--text-primary); font-weight: 500;\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44), "html", null, true);
        yield "</div>
                </div>

                <div class=\"detail-item\">
                    <label style=\"display: block; font-size: 12px; text-transform: uppercase; letter-spacing: 1px; color: var(--text-secondary); margin-bottom: 8px;\">Email Address</label>
                    <div style=\"font-size: 18px; color: var(--text-primary); font-weight: 500;\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 49, $this->source); })()), "email", [], "any", false, false, false, 49), "html", null, true);
        yield "</div>
                </div>

                <div class=\"detail-item\">
                    <label style=\"display: block; font-size: 12px; text-transform: uppercase; letter-spacing: 1px; color: var(--text-secondary); margin-bottom: 8px;\">Full Name</label>
                    <div style=\"font-size: 18px; color: var(--text-primary); font-weight: 500;\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "name", [], "any", false, false, false, 54), "html", null, true);
        yield "</div>
                </div>

                <div class=\"detail-item\">
                    <label style=\"display: block; font-size: 12px; text-transform: uppercase; letter-spacing: 1px; color: var(--text-secondary); margin-bottom: 8px;\">Roles</label>
                    <div>
                        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 60, $this->source); })()), "roles", [], "any", false, false, false, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 61
            yield "                            <span class=\"status-badge completed\" style=\"font-size: 12px; margin: 2px;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
            yield "</span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "                    </div>
                </div>

                <div class=\"detail-item\">
                    <label style=\"display: block; font-size: 12px; text-transform: uppercase; letter-spacing: 1px; color: var(--text-secondary); margin-bottom: 8px;\">Account Status</label>
                    <div style=\"font-size: 18px; color: var(--text-primary); font-weight: 500;\">
                        ";
        // line 69
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 69, $this->source); })()), "isBlocked", [], "any", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 70
            yield "                            <span style=\"color: var(--warning);\">Blocked</span>
                        ";
        } else {
            // line 72
            yield "                            <span style=\"color: var(--success);\">Active</span>
                        ";
        }
        // line 74
        yield "                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div style=\"display: flex; gap: 15px; margin-top: 40px; padding-top: 30px; border-top: 1px solid rgba(255, 255, 255, 0.1);\">
                <a href=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 80, $this->source); })()), "id", [], "any", false, false, false, 80)]), "html", null, true);
        yield "\" class=\"card-btn\" style=\"background: linear-gradient(135deg, var(--gold), var(--amber)); color: white; padding: 12px 24px; flex: 1; text-align: center; text-decoration: none; border-radius: 10px; font-weight: 500;\">
                    ✏️ Edit User
                </a>

                <form method=\"post\" action=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_block", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 84, $this->source); })()), "id", [], "any", false, false, false, 84)]), "html", null, true);
        yield "\" style=\"flex: 1;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("block" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 85, $this->source); })()), "id", [], "any", false, false, false, 85))), "html", null, true);
        yield "\">
                    <button type=\"submit\" class=\"card-btn\" style=\"width: 100%; background: ";
        // line 86
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 86, $this->source); })()), "isBlocked", [], "any", false, false, false, 86)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("linear-gradient(135deg, var(--success), var(--emerald))") : ("linear-gradient(135deg, var(--warning), var(--amber))"));
        yield "; color: white; padding: 12px 24px; border-radius: 10px; font-weight: 500; border: none; cursor: pointer;\" onclick=\"return confirm('Are you sure you want to ";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 86, $this->source); })()), "isBlocked", [], "any", false, false, false, 86)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("unblock") : ("block"));
        yield " this user?')\">
                        ";
        // line 87
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 87, $this->source); })()), "isBlocked", [], "any", false, false, false, 87)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("🔓 Unblock User") : ("🔒 Block User"));
        yield "
                    </button>
                </form>

                <form method=\"post\" action=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 91, $this->source); })()), "id", [], "any", false, false, false, 91)]), "html", null, true);
        yield "\" style=\"flex: 1;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 92, $this->source); })()), "id", [], "any", false, false, false, 92))), "html", null, true);
        yield "\">
                    <button type=\"submit\" class=\"card-btn\" style=\"width: 100%; background: linear-gradient(135deg, #ef4444, #dc2626); color: white; padding: 12px 24px; border-radius: 10px; font-weight: 500; border: none; cursor: pointer;\" onclick=\"return confirm('Are you sure you want to delete this user? This action cannot be undone!')\">
                        🗑️ Delete User
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user/show.html.twig";
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
        return array (  279 => 92,  275 => 91,  268 => 87,  262 => 86,  258 => 85,  254 => 84,  247 => 80,  239 => 74,  235 => 72,  231 => 70,  229 => 69,  221 => 63,  212 => 61,  208 => 60,  199 => 54,  191 => 49,  183 => 44,  173 => 36,  169 => 34,  165 => 32,  163 => 31,  158 => 29,  154 => 28,  148 => 25,  135 => 15,  125 => 7,  112 => 6,  89 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User Details - {{ user.name }}{% endblock %}
{% block page_title %}User Details{% endblock %}

{% block body %}
<section class=\"content-grid\" style=\"grid-template-columns: 1fr;\">
    <div class=\"glass-card\">
        <div class=\"card-header\">
            <div>
                <h2 class=\"card-title\">User Information</h2>
                <p class=\"card-subtitle\">Detailed view of user account</p>
            </div>
            <div class=\"card-actions\">
                <a href=\"{{ path('app_user_index') }}\" class=\"card-btn\">
                    ← Back to List
                </a>
            </div>
        </div>

        <div style=\"padding: 30px;\">
            <!-- User Avatar & Basic Info -->
            <div style=\"display: flex; align-items: center; gap: 30px; margin-bottom: 40px; padding-bottom: 30px; border-bottom: 1px solid rgba(255, 255, 255, 0.1);\">
                <div class=\"table-avatar\" style=\"width: 100px; height: 100px; font-size: 36px; background: linear-gradient(135deg, var(--emerald-light), var(--emerald));\">
                    {{ user.name|slice(0, 2)|upper }}
                </div>
                <div>
                    <h2 style=\"font-size: 28px; margin: 0 0 8px 0; color: var(--text-primary);\">{{ user.name }}</h2>
                    <p style=\"font-size: 16px; color: var(--text-secondary); margin: 0;\">{{ user.email }}</p>
                    <div style=\"margin-top: 10px;\">
                        {% if user.isBlocked %}
                            <span class=\"status-badge pending\">🔒 Blocked</span>
                        {% else %}
                            <span class=\"status-badge completed\">✓ Active</span>
                        {% endif %}
                    </div>
                </div>
            </div>

            <!-- User Details Grid -->
            <div style=\"display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px; margin-bottom: 30px;\">
                <div class=\"detail-item\">
                    <label style=\"display: block; font-size: 12px; text-transform: uppercase; letter-spacing: 1px; color: var(--text-secondary); margin-bottom: 8px;\">User ID</label>
                    <div style=\"font-size: 18px; color: var(--text-primary); font-weight: 500;\">{{ user.id }}</div>
                </div>

                <div class=\"detail-item\">
                    <label style=\"display: block; font-size: 12px; text-transform: uppercase; letter-spacing: 1px; color: var(--text-secondary); margin-bottom: 8px;\">Email Address</label>
                    <div style=\"font-size: 18px; color: var(--text-primary); font-weight: 500;\">{{ user.email }}</div>
                </div>

                <div class=\"detail-item\">
                    <label style=\"display: block; font-size: 12px; text-transform: uppercase; letter-spacing: 1px; color: var(--text-secondary); margin-bottom: 8px;\">Full Name</label>
                    <div style=\"font-size: 18px; color: var(--text-primary); font-weight: 500;\">{{ user.name }}</div>
                </div>

                <div class=\"detail-item\">
                    <label style=\"display: block; font-size: 12px; text-transform: uppercase; letter-spacing: 1px; color: var(--text-secondary); margin-bottom: 8px;\">Roles</label>
                    <div>
                        {% for role in user.roles %}
                            <span class=\"status-badge completed\" style=\"font-size: 12px; margin: 2px;\">{{ role }}</span>
                        {% endfor %}
                    </div>
                </div>

                <div class=\"detail-item\">
                    <label style=\"display: block; font-size: 12px; text-transform: uppercase; letter-spacing: 1px; color: var(--text-secondary); margin-bottom: 8px;\">Account Status</label>
                    <div style=\"font-size: 18px; color: var(--text-primary); font-weight: 500;\">
                        {% if user.isBlocked %}
                            <span style=\"color: var(--warning);\">Blocked</span>
                        {% else %}
                            <span style=\"color: var(--success);\">Active</span>
                        {% endif %}
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div style=\"display: flex; gap: 15px; margin-top: 40px; padding-top: 30px; border-top: 1px solid rgba(255, 255, 255, 0.1);\">
                <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\" class=\"card-btn\" style=\"background: linear-gradient(135deg, var(--gold), var(--amber)); color: white; padding: 12px 24px; flex: 1; text-align: center; text-decoration: none; border-radius: 10px; font-weight: 500;\">
                    ✏️ Edit User
                </a>

                <form method=\"post\" action=\"{{ path('app_user_block', {'id': user.id}) }}\" style=\"flex: 1;\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('block' ~ user.id) }}\">
                    <button type=\"submit\" class=\"card-btn\" style=\"width: 100%; background: {{ user.isBlocked ? 'linear-gradient(135deg, var(--success), var(--emerald))' : 'linear-gradient(135deg, var(--warning), var(--amber))' }}; color: white; padding: 12px 24px; border-radius: 10px; font-weight: 500; border: none; cursor: pointer;\" onclick=\"return confirm('Are you sure you want to {{ user.isBlocked ? 'unblock' : 'block' }} this user?')\">
                        {{ user.isBlocked ? '🔓 Unblock User' : '🔒 Block User' }}
                    </button>
                </form>

                <form method=\"post\" action=\"{{ path('app_user_delete', {'id': user.id}) }}\" style=\"flex: 1;\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id) }}\">
                    <button type=\"submit\" class=\"card-btn\" style=\"width: 100%; background: linear-gradient(135deg, #ef4444, #dc2626); color: white; padding: 12px 24px; border-radius: 10px; font-weight: 500; border: none; cursor: pointer;\" onclick=\"return confirm('Are you sure you want to delete this user? This action cannot be undone!')\">
                        🗑️ Delete User
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>


{% endblock %}", "user/show.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\user\\show.html.twig");
    }
}
