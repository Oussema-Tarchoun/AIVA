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

/* user/new.html.twig */
class __TwigTemplate_59c473feeb4d695a5bdfd2dcb95dd256 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/new.html.twig"));

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

        yield "Create New User";
        
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

        yield "Create New User";
        
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
                <h2 class=\"card-title\">Create New User</h2>
                <p class=\"card-subtitle\">Add a new user to the system</p>
            </div>
            <div class=\"card-actions\">
                <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"card-btn\">← Back to List</a>
            </div>
        </div>

        <div style=\"padding: 30px;\">
            ";
        // line 20
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start');
        yield "
            
            <div style=\"display: grid; gap: 25px;\">
                <div class=\"form-group\">
                    ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), 'label', ["label_attr" => ["style" => "display: block; font-size: 14px; font-weight: 500; color: var(--text-primary); margin-bottom: 8px;"], "label" => "Full Name"]);
        yield "
                    ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), 'widget', ["attr" => ["style" => "width: 100%; padding: 12px 16px; background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 10px; color: var(--text-primary); font-size: 16px; outline: none;", "placeholder" => "Enter full name"]]);
        yield "
                    ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), 'label', ["label_attr" => ["style" => "display: block; font-size: 14px; font-weight: 500; color: var(--text-primary); margin-bottom: 8px;"], "label" => "Email Address"]);
        yield "
                    ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), 'widget', ["attr" => ["style" => "width: 100%; padding: 12px 16px; background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 10px; color: var(--text-primary); font-size: 16px; outline: none;", "placeholder" => "Enter email address"]]);
        yield "
                    ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "password", [], "any", false, false, false, 36), "first", [], "any", false, false, false, 36), 'label', ["label_attr" => ["style" => "display: block; font-size: 14px; font-weight: 500; color: var(--text-primary); margin-bottom: 8px;"], "label" => "Password"]);
        yield "
                    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "password", [], "any", false, false, false, 37), "first", [], "any", false, false, false, 37), 'widget', ["attr" => ["style" => "width: 100%; padding: 12px 16px; background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 10px; color: var(--text-primary); font-size: 16px; outline: none;", "placeholder" => "Enter password"]]);
        yield "
                    ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "password", [], "any", false, false, false, 38), "first", [], "any", false, false, false, 38), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "password", [], "any", false, false, false, 42), "second", [], "any", false, false, false, 42), 'label', ["label_attr" => ["style" => "display: block; font-size: 14px; font-weight: 500; color: var(--text-primary); margin-bottom: 8px;"], "label" => "Confirm Password"]);
        yield "
                    ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "password", [], "any", false, false, false, 43), "second", [], "any", false, false, false, 43), 'widget', ["attr" => ["style" => "width: 100%; padding: 12px 16px; background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 10px; color: var(--text-primary); font-size: 16px; outline: none;", "placeholder" => "Confirm password"]]);
        yield "
                    ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "password", [], "any", false, false, false, 44), "second", [], "any", false, false, false, 44), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "roles", [], "any", false, false, false, 48), 'label', ["label_attr" => ["style" => "display: block; font-size: 14px; font-weight: 500; color: var(--text-primary); margin-bottom: 8px;"], "label" => "User Roles"]);
        yield "
                    <div style=\"padding: 15px; background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 10px;\">
                        ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "roles", [], "any", false, false, false, 50), 'widget');
        yield "
                    </div>
                    ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "roles", [], "any", false, false, false, 52), 'errors');
        yield "
                </div>
            </div>

            <div style=\"display: flex; gap: 15px; margin-top: 40px; padding-top: 30px; border-top: 1px solid rgba(255, 255, 255, 0.1);\">
                <button type=\"submit\" class=\"card-btn\" style=\"background: linear-gradient(135deg, var(--emerald-light), var(--emerald)); color: white; padding: 14px 28px; flex: 1; border: none; cursor: pointer; border-radius: 10px; font-weight: 600; font-size: 16px;\">
                    ✓ Create User
                </button>
                <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"card-btn\" style=\"padding: 14px 28px; flex: 1; text-align: center; text-decoration: none; border-radius: 10px; font-weight: 600; font-size: 16px;\">
                    ✖ Cancel
                </a>
            </div>

            ";
        // line 65
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'form_end');
        yield "
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
        return "user/new.html.twig";
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
        return array (  238 => 65,  230 => 60,  219 => 52,  214 => 50,  209 => 48,  202 => 44,  198 => 43,  194 => 42,  187 => 38,  183 => 37,  179 => 36,  172 => 32,  168 => 31,  164 => 30,  157 => 26,  153 => 25,  149 => 24,  142 => 20,  134 => 15,  124 => 7,  111 => 6,  88 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Create New User{% endblock %}
{% block page_title %}Create New User{% endblock %}

{% block body %}
<section class=\"content-grid\" style=\"grid-template-columns: 1fr;\">
    <div class=\"glass-card\">
        <div class=\"card-header\">
            <div>
                <h2 class=\"card-title\">Create New User</h2>
                <p class=\"card-subtitle\">Add a new user to the system</p>
            </div>
            <div class=\"card-actions\">
                <a href=\"{{ path('app_user_index') }}\" class=\"card-btn\">← Back to List</a>
            </div>
        </div>

        <div style=\"padding: 30px;\">
            {{ form_start(form) }}
            
            <div style=\"display: grid; gap: 25px;\">
                <div class=\"form-group\">
                    {{ form_label(form.name, 'Full Name', {'label_attr': {'style': 'display: block; font-size: 14px; font-weight: 500; color: var(--text-primary); margin-bottom: 8px;'}}) }}
                    {{ form_widget(form.name, {'attr': {'style': 'width: 100%; padding: 12px 16px; background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 10px; color: var(--text-primary); font-size: 16px; outline: none;', 'placeholder': 'Enter full name'}}) }}
                    {{ form_errors(form.name) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.email, 'Email Address', {'label_attr': {'style': 'display: block; font-size: 14px; font-weight: 500; color: var(--text-primary); margin-bottom: 8px;'}}) }}
                    {{ form_widget(form.email, {'attr': {'style': 'width: 100%; padding: 12px 16px; background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 10px; color: var(--text-primary); font-size: 16px; outline: none;', 'placeholder': 'Enter email address'}}) }}
                    {{ form_errors(form.email) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.password.first, 'Password', {'label_attr': {'style': 'display: block; font-size: 14px; font-weight: 500; color: var(--text-primary); margin-bottom: 8px;'}}) }}
                    {{ form_widget(form.password.first, {'attr': {'style': 'width: 100%; padding: 12px 16px; background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 10px; color: var(--text-primary); font-size: 16px; outline: none;', 'placeholder': 'Enter password'}}) }}
                    {{ form_errors(form.password.first) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.password.second, 'Confirm Password', {'label_attr': {'style': 'display: block; font-size: 14px; font-weight: 500; color: var(--text-primary); margin-bottom: 8px;'}}) }}
                    {{ form_widget(form.password.second, {'attr': {'style': 'width: 100%; padding: 12px 16px; background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 10px; color: var(--text-primary); font-size: 16px; outline: none;', 'placeholder': 'Confirm password'}}) }}
                    {{ form_errors(form.password.second) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.roles, 'User Roles', {'label_attr': {'style': 'display: block; font-size: 14px; font-weight: 500; color: var(--text-primary); margin-bottom: 8px;'}}) }}
                    <div style=\"padding: 15px; background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 10px;\">
                        {{ form_widget(form.roles) }}
                    </div>
                    {{ form_errors(form.roles) }}
                </div>
            </div>

            <div style=\"display: flex; gap: 15px; margin-top: 40px; padding-top: 30px; border-top: 1px solid rgba(255, 255, 255, 0.1);\">
                <button type=\"submit\" class=\"card-btn\" style=\"background: linear-gradient(135deg, var(--emerald-light), var(--emerald)); color: white; padding: 14px 28px; flex: 1; border: none; cursor: pointer; border-radius: 10px; font-weight: 600; font-size: 16px;\">
                    ✓ Create User
                </button>
                <a href=\"{{ path('app_user_index') }}\" class=\"card-btn\" style=\"padding: 14px 28px; flex: 1; text-align: center; text-decoration: none; border-radius: 10px; font-weight: 600; font-size: 16px;\">
                    ✖ Cancel
                </a>
            </div>

            {{ form_end(form) }}
        </div>
    </div>
</section>


{% endblock %}", "user/new.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\user\\new.html.twig");
    }
}
