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

/* user/edit.html.twig */
class __TwigTemplate_df71a794fddb4372c7a5cc738a09fcfa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

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

        yield "Edit User - ";
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

        yield "Edit User";
        
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
                <h2 class=\"card-title\">Edit User</h2>
                <p class=\"card-subtitle\">Update user information</p>
            </div>
            <div class=\"card-actions\">
                <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"card-btn\">← Back to List</a>
                <a href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        yield "\" class=\"card-btn\">View Details</a>
            </div>
        </div>

        <div style=\"padding: 30px;\">
            ";
        // line 21
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
            
            <div style=\"display: grid; gap: 25px;\">
                <!-- Name Field -->
                <div class=\"form-group\">
                    ";
        // line 26
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "vars", [], "any", false, false, false, 26), "errors", [], "any", false, false, false, 26)) > 0)) {
            // line 27
            yield "                        <div class=\"error-message\">
                            ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28), "vars", [], "any", false, false, false, 28), "errors", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 29
                yield "                                ❌ ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 29), "html", null, true);
                yield "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            yield "                        </div>
                    ";
        }
        // line 33
        yield "                    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33), 'label', ["label_attr" => ["style" => "display: block; font-size: 14px; font-weight: 500; color: var(--text-primary); margin-bottom: 8px;"], "label" => "Full Name"]);
        yield "
                    ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34), 'widget', ["attr" => ["style" => (("width: 100%; padding: 12px 16px; background: rgba(255, 255, 255, 0.05); border: 1px solid " . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34), "vars", [], "any", false, false, false, 34), "errors", [], "any", false, false, false, 34)) > 0)) ? ("#ef4444") : ("rgba(255, 255, 255, 0.1)"))) . "; border-radius: 10px; color: var(--text-primary); font-size: 16px; outline: none;"), "placeholder" => "Enter full name"]]);
        yield "
                </div>

                <!-- Email Field -->
                <div class=\"form-group\">
                    ";
        // line 39
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "email", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "errors", [], "any", false, false, false, 39)) > 0)) {
            // line 40
            yield "                        <div class=\"error-message\">
                            ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "email", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "errors", [], "any", false, false, false, 41));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 42
                yield "                                ❌ ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 42), "html", null, true);
                yield "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "                        </div>
                    ";
        }
        // line 46
        yield "                    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "email", [], "any", false, false, false, 46), 'label', ["label_attr" => ["style" => "display: block; font-size: 14px; font-weight: 500; color: var(--text-primary); margin-bottom: 8px;"], "label" => "Email Address"]);
        yield "
                    ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "email", [], "any", false, false, false, 47), 'widget', ["attr" => ["style" => (("width: 100%; padding: 12px 16px; background: rgba(255, 255, 255, 0.05); border: 1px solid " . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "email", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "errors", [], "any", false, false, false, 47)) > 0)) ? ("#ef4444") : ("rgba(255, 255, 255, 0.1)"))) . "; border-radius: 10px; color: var(--text-primary); font-size: 16px; outline: none;"), "placeholder" => "Enter email address"]]);
        yield "
                </div>

                <!-- Password Field (Optional) -->
                <div class=\"form-group\">
                    ";
        // line 52
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "password", [], "any", false, false, false, 52), "first", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "errors", [], "any", false, false, false, 52)) > 0)) {
            // line 53
            yield "                        <div class=\"error-message\">
                            ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "password", [], "any", false, false, false, 54), "first", [], "any", false, false, false, 54), "vars", [], "any", false, false, false, 54), "errors", [], "any", false, false, false, 54));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 55
                yield "                                ❌ ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 55), "html", null, true);
                yield "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            yield "                        </div>
                    ";
        }
        // line 59
        yield "                    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "password", [], "any", false, false, false, 59), "vars", [], "any", false, false, false, 59), "errors", [], "any", false, false, false, 59)) > 0)) {
            // line 60
            yield "                        <div class=\"error-message\">
                            ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "password", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "errors", [], "any", false, false, false, 61));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 62
                yield "                                ❌ ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 62), "html", null, true);
                yield "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            yield "                        </div>
                    ";
        }
        // line 66
        yield "                    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "password", [], "any", false, false, false, 66), "first", [], "any", false, false, false, 66), 'label', ["label_attr" => ["style" => "display: block; font-size: 14px; font-weight: 500; color: var(--text-primary); margin-bottom: 8px;"], "label" => "New Password (leave blank to keep current)"]);
        yield "
                    ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "password", [], "any", false, false, false, 67), "first", [], "any", false, false, false, 67), 'widget', ["attr" => ["style" => (("width: 100%; padding: 12px 16px; background: rgba(255, 255, 255, 0.05); border: 1px solid " . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "password", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "errors", [], "any", false, false, false, 67)) > 0)) ? ("#ef4444") : ("rgba(255, 255, 255, 0.1)"))) . "; border-radius: 10px; color: var(--text-primary); font-size: 16px; outline: none;"), "placeholder" => "Enter new password"]]);
        yield "
                </div>

                <!-- Confirm Password Field -->
                <div class=\"form-group\">
                    ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "password", [], "any", false, false, false, 72), "second", [], "any", false, false, false, 72), 'label', ["label_attr" => ["style" => "display: block; font-size: 14px; font-weight: 500; color: var(--text-primary); margin-bottom: 8px;"], "label" => "Confirm New Password"]);
        yield "
                    ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "password", [], "any", false, false, false, 73), "second", [], "any", false, false, false, 73), 'widget', ["attr" => ["style" => (("width: 100%; padding: 12px 16px; background: rgba(255, 255, 255, 0.05); border: 1px solid " . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "password", [], "any", false, false, false, 73), "vars", [], "any", false, false, false, 73), "errors", [], "any", false, false, false, 73)) > 0)) ? ("#ef4444") : ("rgba(255, 255, 255, 0.1)"))) . "; border-radius: 10px; color: var(--text-primary); font-size: 16px; outline: none;"), "placeholder" => "Confirm new password"]]);
        yield "
                </div>

                <!-- Roles Field -->
                <div class=\"form-group\">
                    ";
        // line 78
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "roles", [], "any", false, false, false, 78), "vars", [], "any", false, false, false, 78), "errors", [], "any", false, false, false, 78)) > 0)) {
            // line 79
            yield "                        <div class=\"error-message\">
                            ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "roles", [], "any", false, false, false, 80), "vars", [], "any", false, false, false, 80), "errors", [], "any", false, false, false, 80));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 81
                yield "                                ❌ ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 81), "html", null, true);
                yield "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            yield "                        </div>
                    ";
        }
        // line 85
        yield "                    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "roles", [], "any", false, false, false, 85), 'label', ["label_attr" => ["style" => "display: block; font-size: 14px; font-weight: 500; color: var(--text-primary); margin-bottom: 8px;"], "label" => "User Role"]);
        yield "
                    <div style=\"padding: 15px; background: rgba(255, 255, 255, 0.03); border: 1px solid ";
        // line 86
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "roles", [], "any", false, false, false, 86), "vars", [], "any", false, false, false, 86), "errors", [], "any", false, false, false, 86)) > 0)) ? ("#ef4444") : ("rgba(255, 255, 255, 0.1)"));
        yield "; border-radius: 10px;\">
                        ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "roles", [], "any", false, false, false, 87), 'widget');
        yield "
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div style=\"display: flex; gap: 15px; margin-top: 40px; padding-top: 30px; border-top: 1px solid rgba(255, 255, 255, 0.1);\">
                <button type=\"submit\" class=\"card-btn\" style=\"background: linear-gradient(135deg, var(--emerald-light), var(--emerald)); color: white; padding: 14px 28px; flex: 1; border: none; cursor: pointer; border-radius: 10px; font-weight: 600; font-size: 16px;\">
                    💾 Save Changes
                </button>
                <a href=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 97, $this->source); })()), "id", [], "any", false, false, false, 97)]), "html", null, true);
        yield "\" class=\"card-btn\" style=\"padding: 14px 28px; flex: 1; text-align: center; text-decoration: none; border-radius: 10px; font-weight: 600; font-size: 16px;\">
                    ✖ Cancel
                </a>
            </div>

            ";
        // line 102
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), 'form_end');
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
        return "user/edit.html.twig";
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
        return array (  347 => 102,  339 => 97,  326 => 87,  322 => 86,  317 => 85,  313 => 83,  304 => 81,  300 => 80,  297 => 79,  295 => 78,  287 => 73,  283 => 72,  275 => 67,  270 => 66,  266 => 64,  257 => 62,  253 => 61,  250 => 60,  247 => 59,  243 => 57,  234 => 55,  230 => 54,  227 => 53,  225 => 52,  217 => 47,  212 => 46,  208 => 44,  199 => 42,  195 => 41,  192 => 40,  190 => 39,  182 => 34,  177 => 33,  173 => 31,  164 => 29,  160 => 28,  157 => 27,  155 => 26,  147 => 21,  139 => 16,  135 => 15,  125 => 7,  112 => 6,  89 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit User - {{ user.name }}{% endblock %}
{% block page_title %}Edit User{% endblock %}

{% block body %}
<section class=\"content-grid\" style=\"grid-template-columns: 1fr;\">
    <div class=\"glass-card\">
        <div class=\"card-header\">
            <div>
                <h2 class=\"card-title\">Edit User</h2>
                <p class=\"card-subtitle\">Update user information</p>
            </div>
            <div class=\"card-actions\">
                <a href=\"{{ path('app_user_index') }}\" class=\"card-btn\">← Back to List</a>
                <a href=\"{{ path('app_user_show', {'id': user.id}) }}\" class=\"card-btn\">View Details</a>
            </div>
        </div>

        <div style=\"padding: 30px;\">
            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
            
            <div style=\"display: grid; gap: 25px;\">
                <!-- Name Field -->
                <div class=\"form-group\">
                    {% if form.name.vars.errors|length > 0 %}
                        <div class=\"error-message\">
                            {% for error in form.name.vars.errors %}
                                ❌ {{ error.message }}
                            {% endfor %}
                        </div>
                    {% endif %}
                    {{ form_label(form.name, 'Full Name', {'label_attr': {'style': 'display: block; font-size: 14px; font-weight: 500; color: var(--text-primary); margin-bottom: 8px;'}}) }}
                    {{ form_widget(form.name, {'attr': {'style': 'width: 100%; padding: 12px 16px; background: rgba(255, 255, 255, 0.05); border: 1px solid ' ~ (form.name.vars.errors|length > 0 ? '#ef4444' : 'rgba(255, 255, 255, 0.1)') ~ '; border-radius: 10px; color: var(--text-primary); font-size: 16px; outline: none;', 'placeholder': 'Enter full name'}}) }}
                </div>

                <!-- Email Field -->
                <div class=\"form-group\">
                    {% if form.email.vars.errors|length > 0 %}
                        <div class=\"error-message\">
                            {% for error in form.email.vars.errors %}
                                ❌ {{ error.message }}
                            {% endfor %}
                        </div>
                    {% endif %}
                    {{ form_label(form.email, 'Email Address', {'label_attr': {'style': 'display: block; font-size: 14px; font-weight: 500; color: var(--text-primary); margin-bottom: 8px;'}}) }}
                    {{ form_widget(form.email, {'attr': {'style': 'width: 100%; padding: 12px 16px; background: rgba(255, 255, 255, 0.05); border: 1px solid ' ~ (form.email.vars.errors|length > 0 ? '#ef4444' : 'rgba(255, 255, 255, 0.1)') ~ '; border-radius: 10px; color: var(--text-primary); font-size: 16px; outline: none;', 'placeholder': 'Enter email address'}}) }}
                </div>

                <!-- Password Field (Optional) -->
                <div class=\"form-group\">
                    {% if form.password.first.vars.errors|length > 0 %}
                        <div class=\"error-message\">
                            {% for error in form.password.first.vars.errors %}
                                ❌ {{ error.message }}
                            {% endfor %}
                        </div>
                    {% endif %}
                    {% if form.password.vars.errors|length > 0 %}
                        <div class=\"error-message\">
                            {% for error in form.password.vars.errors %}
                                ❌ {{ error.message }}
                            {% endfor %}
                        </div>
                    {% endif %}
                    {{ form_label(form.password.first, 'New Password (leave blank to keep current)', {'label_attr': {'style': 'display: block; font-size: 14px; font-weight: 500; color: var(--text-primary); margin-bottom: 8px;'}}) }}
                    {{ form_widget(form.password.first, {'attr': {'style': 'width: 100%; padding: 12px 16px; background: rgba(255, 255, 255, 0.05); border: 1px solid ' ~ (form.password.vars.errors|length > 0 ? '#ef4444' : 'rgba(255, 255, 255, 0.1)') ~ '; border-radius: 10px; color: var(--text-primary); font-size: 16px; outline: none;', 'placeholder': 'Enter new password'}}) }}
                </div>

                <!-- Confirm Password Field -->
                <div class=\"form-group\">
                    {{ form_label(form.password.second, 'Confirm New Password', {'label_attr': {'style': 'display: block; font-size: 14px; font-weight: 500; color: var(--text-primary); margin-bottom: 8px;'}}) }}
                    {{ form_widget(form.password.second, {'attr': {'style': 'width: 100%; padding: 12px 16px; background: rgba(255, 255, 255, 0.05); border: 1px solid ' ~ (form.password.vars.errors|length > 0 ? '#ef4444' : 'rgba(255, 255, 255, 0.1)') ~ '; border-radius: 10px; color: var(--text-primary); font-size: 16px; outline: none;', 'placeholder': 'Confirm new password'}}) }}
                </div>

                <!-- Roles Field -->
                <div class=\"form-group\">
                    {% if form.roles.vars.errors|length > 0 %}
                        <div class=\"error-message\">
                            {% for error in form.roles.vars.errors %}
                                ❌ {{ error.message }}
                            {% endfor %}
                        </div>
                    {% endif %}
                    {{ form_label(form.roles, 'User Role', {'label_attr': {'style': 'display: block; font-size: 14px; font-weight: 500; color: var(--text-primary); margin-bottom: 8px;'}}) }}
                    <div style=\"padding: 15px; background: rgba(255, 255, 255, 0.03); border: 1px solid {{ form.roles.vars.errors|length > 0 ? '#ef4444' : 'rgba(255, 255, 255, 0.1)' }}; border-radius: 10px;\">
                        {{ form_widget(form.roles) }}
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div style=\"display: flex; gap: 15px; margin-top: 40px; padding-top: 30px; border-top: 1px solid rgba(255, 255, 255, 0.1);\">
                <button type=\"submit\" class=\"card-btn\" style=\"background: linear-gradient(135deg, var(--emerald-light), var(--emerald)); color: white; padding: 14px 28px; flex: 1; border: none; cursor: pointer; border-radius: 10px; font-weight: 600; font-size: 16px;\">
                    💾 Save Changes
                </button>
                <a href=\"{{ path('app_user_show', {'id': user.id}) }}\" class=\"card-btn\" style=\"padding: 14px 28px; flex: 1; text-align: center; text-decoration: none; border-radius: 10px; font-weight: 600; font-size: 16px;\">
                    ✖ Cancel
                </a>
            </div>

            {{ form_end(form) }}
        </div>
    </div>
</section>


{% endblock %}", "user/edit.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\user\\edit.html.twig");
    }
}
