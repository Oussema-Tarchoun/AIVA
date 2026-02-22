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

/* back/sport/edit.html.twig */
class __TwigTemplate_c47b57f4daafbeb01dbd6fd54b106140 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "back/sport/base_back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/sport/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/sport/edit.html.twig"));

        $this->parent = $this->load("back/sport/base_back.html.twig", 1);
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

        yield "Modifier Activité";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        /* Page Container */
        .form-page {
            padding: 30px;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Header */
        .form-header {
            margin-bottom: 35px;
        }

        .form-header h1 {
            font-size: 32px;
            font-weight: 700;
            color: rgba(255, 255, 255, 0.95);
            margin: 0 0 10px 0;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .form-header p {
            color: rgba(255, 255, 255, 0.6);
            font-size: 15px;
            margin: 0;
        }

        /* Form Card */
        .form-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.15);
            animation: fadeInUp 0.5s ease;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Form Groups */
        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 600;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .required-star {
            color: #f87171;
            font-size: 16px;
        }

        /* Form Controls */
        .form-control {
            width: 100%;
            padding: 14px 18px;
            background: rgba(255, 255, 255, 0.08);
            border: 1.5px solid rgba(255, 255, 255, 0.12);
            border-radius: 12px;
            color: rgba(255, 255, 255, 0.95);
            font-size: 15px;
            transition: all 0.3s ease;
            font-family: inherit;
        }

        .form-control:focus {
            outline: none;
            background: rgba(255, 255, 255, 0.12);
            border-color: rgba(102, 126, 234, 0.6);
            box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.4);
        }

        /* Select Styling */
        select.form-control {
            cursor: pointer;
            appearance: none;
            background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='rgba(255,255,255,0.6)' d='M6 9L1 4h10z'/%3E%3C/svg%3E\");
            background-repeat: no-repeat;
            background-position: right 18px center;
            padding-right: 45px;
        }

        select.form-control option {
            background: #1e293b;
            color: #fff;
            padding: 10px;
        }

        /* Date Input */
        input[type=\"date\"].form-control {
            color-scheme: dark;
        }

        /* Error State */
        .has-error .form-control {
            border-color: rgba(239, 68, 68, 0.6);
            background: rgba(239, 68, 68, 0.05);
        }

        .form-error {
            color: #f87171;
            font-size: 13px;
            margin-top: 8px;
            display: flex;
            align-items: center;
            gap: 6px;
            font-weight: 500;
        }

        .form-error::before {
            content: \"⚠\";
            font-size: 14px;
        }

        /* Form Actions */
        .form-actions {
            display: flex;
            gap: 15px;
            margin-top: 35px;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
        }

        .btn {
            flex: 1;
            padding: 14px 24px;
            border-radius: 12px;
            font-size: 15px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            text-decoration: none;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.08);
            color: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.15);
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.12);
            color: rgba(255, 255, 255, 0.95);
        }

        /* Helper Text */
        .form-helper {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.5);
            margin-top: 6px;
            font-style: italic;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .form-card {
                padding: 25px;
            }

            .form-actions {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 217
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

        // line 218
        yield "
<div class=\"form-page\">

    <!-- Header -->
    <div class=\"form-header\">
        <h1>
            <span>✏️</span>
            Modifier l'Activité Physique
        </h1>
        <p>Mettez à jour les informations de votre séance</p>
    </div>

    <!-- Form Card -->
    <div class=\"form-card\">
        
        ";
        // line 233
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 233, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

            <!-- Type d'activité -->
            <div class=\"form-group ";
        // line 236
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 236, $this->source); })()), "type", [], "any", false, false, false, 236), "vars", [], "any", false, false, false, 236), "errors", [], "any", false, false, false, 236)) > 0)) {
            yield "has-error";
        }
        yield "\">
                <label for=\"";
        // line 237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 237, $this->source); })()), "type", [], "any", false, false, false, 237), "vars", [], "any", false, false, false, 237), "id", [], "any", false, false, false, 237), "html", null, true);
        yield "\">
                    Type d'activité
                    <span class=\"required-star\">*</span>
                </label>
                ";
        // line 241
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 241, $this->source); })()), "type", [], "any", false, false, false, 241), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: Course, Natation, Musculation..."]]);
        // line 246
        yield "
                ";
        // line 247
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 247, $this->source); })()), "type", [], "any", false, false, false, 247), "vars", [], "any", false, false, false, 247), "errors", [], "any", false, false, false, 247));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 248
            yield "                    <div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 248), "html", null, true);
            yield "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 250
        yield "            </div>

            <!-- Durée -->
            <div class=\"form-group ";
        // line 253
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 253, $this->source); })()), "duree", [], "any", false, false, false, 253), "vars", [], "any", false, false, false, 253), "errors", [], "any", false, false, false, 253)) > 0)) {
            yield "has-error";
        }
        yield "\">
                <label for=\"";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 254, $this->source); })()), "duree", [], "any", false, false, false, 254), "vars", [], "any", false, false, false, 254), "id", [], "any", false, false, false, 254), "html", null, true);
        yield "\">
                    Durée (en minutes)
                    <span class=\"required-star\">*</span>
                </label>
                ";
        // line 258
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 258, $this->source); })()), "duree", [], "any", false, false, false, 258), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: 30"]]);
        // line 263
        yield "
                ";
        // line 264
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 264, $this->source); })()), "duree", [], "any", false, false, false, 264), "vars", [], "any", false, false, false, 264), "errors", [], "any", false, false, false, 264));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 265
            yield "                    <div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 265), "html", null, true);
            yield "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 267
        yield "            </div>

            <!-- Calories brûlées -->
            <div class=\"form-group ";
        // line 270
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 270, $this->source); })()), "caloriesBrulees", [], "any", false, false, false, 270), "vars", [], "any", false, false, false, 270), "errors", [], "any", false, false, false, 270)) > 0)) {
            yield "has-error";
        }
        yield "\">
                <label for=\"";
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 271, $this->source); })()), "caloriesBrulees", [], "any", false, false, false, 271), "vars", [], "any", false, false, false, 271), "id", [], "any", false, false, false, 271), "html", null, true);
        yield "\">
                    Calories brûlées
                    <span class=\"required-star\">*</span>
                </label>
                ";
        // line 275
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 275, $this->source); })()), "caloriesBrulees", [], "any", false, false, false, 275), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: 250"]]);
        // line 280
        yield "
                ";
        // line 281
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 281, $this->source); })()), "caloriesBrulees", [], "any", false, false, false, 281), "vars", [], "any", false, false, false, 281), "errors", [], "any", false, false, false, 281));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 282
            yield "                    <div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 282), "html", null, true);
            yield "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 284
        yield "            </div>

            <!-- Date -->
            <div class=\"form-group ";
        // line 287
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 287, $this->source); })()), "date", [], "any", false, false, false, 287), "vars", [], "any", false, false, false, 287), "errors", [], "any", false, false, false, 287)) > 0)) {
            yield "has-error";
        }
        yield "\">
                <label for=\"";
        // line 288
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 288, $this->source); })()), "date", [], "any", false, false, false, 288), "vars", [], "any", false, false, false, 288), "id", [], "any", false, false, false, 288), "html", null, true);
        yield "\">
                    Date de l'activité
                    <span class=\"required-star\">*</span>
                </label>
                ";
        // line 292
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 292, $this->source); })()), "date", [], "any", false, false, false, 292), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 296
        yield "
                ";
        // line 297
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 297, $this->source); })()), "date", [], "any", false, false, false, 297), "vars", [], "any", false, false, false, 297), "errors", [], "any", false, false, false, 297));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 298
            yield "                    <div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 298), "html", null, true);
            yield "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 300
        yield "            </div>

            <!-- Intensité -->
            <div class=\"form-group ";
        // line 303
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 303, $this->source); })()), "intensite", [], "any", false, false, false, 303), "vars", [], "any", false, false, false, 303), "errors", [], "any", false, false, false, 303)) > 0)) {
            yield "has-error";
        }
        yield "\">
                <label for=\"";
        // line 304
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 304, $this->source); })()), "intensite", [], "any", false, false, false, 304), "vars", [], "any", false, false, false, 304), "id", [], "any", false, false, false, 304), "html", null, true);
        yield "\">
                    Intensité
                    <span class=\"required-star\">*</span>
                </label>
                ";
        // line 308
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 308, $this->source); })()), "intensite", [], "any", false, false, false, 308), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 312
        yield "
                ";
        // line 313
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 313, $this->source); })()), "intensite", [], "any", false, false, false, 313), "vars", [], "any", false, false, false, 313), "errors", [], "any", false, false, false, 313));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 314
            yield "                    <div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 314), "html", null, true);
            yield "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 316
        yield "            </div>

            <!-- Objectif -->
            <div class=\"form-group ";
        // line 319
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 319, $this->source); })()), "objectif", [], "any", false, false, false, 319), "vars", [], "any", false, false, false, 319), "errors", [], "any", false, false, false, 319)) > 0)) {
            yield "has-error";
        }
        yield "\">
                <label for=\"";
        // line 320
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 320, $this->source); })()), "objectif", [], "any", false, false, false, 320), "vars", [], "any", false, false, false, 320), "id", [], "any", false, false, false, 320), "html", null, true);
        yield "\">
                    Objectif associé
                    <span class=\"required-star\">*</span>
                </label>
                ";
        // line 324
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 324, $this->source); })()), "objectif", [], "any", false, false, false, 324), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 328
        yield "
                ";
        // line 329
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 329, $this->source); })()), "objectif", [], "any", false, false, false, 329), "vars", [], "any", false, false, false, 329), "errors", [], "any", false, false, false, 329));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 330
            yield "                    <div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 330), "html", null, true);
            yield "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 332
        yield "            </div>

            <!-- Actions -->
            <div class=\"form-actions\">
                <button type=\"submit\" class=\"btn btn-primary\">
                    <span>💾</span>
                    Enregistrer les modifications
                </button>
                
                <a href=\"";
        // line 341
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_sport_index");
        yield "\" class=\"btn btn-secondary\">
                    <span>←</span>
                    Annuler
                </a>
            </div>

        ";
        // line 347
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 347, $this->source); })()), 'form_end');
        yield "

    </div>

</div>

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
        return "back/sport/edit.html.twig";
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
        return array (  590 => 347,  581 => 341,  570 => 332,  561 => 330,  557 => 329,  554 => 328,  552 => 324,  545 => 320,  539 => 319,  534 => 316,  525 => 314,  521 => 313,  518 => 312,  516 => 308,  509 => 304,  503 => 303,  498 => 300,  489 => 298,  485 => 297,  482 => 296,  480 => 292,  473 => 288,  467 => 287,  462 => 284,  453 => 282,  449 => 281,  446 => 280,  444 => 275,  437 => 271,  431 => 270,  426 => 267,  417 => 265,  413 => 264,  410 => 263,  408 => 258,  401 => 254,  395 => 253,  390 => 250,  381 => 248,  377 => 247,  374 => 246,  372 => 241,  365 => 237,  359 => 236,  353 => 233,  336 => 218,  323 => 217,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back/sport/base_back.html.twig' %}

{% block title %}Modifier Activité{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        /* Page Container */
        .form-page {
            padding: 30px;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Header */
        .form-header {
            margin-bottom: 35px;
        }

        .form-header h1 {
            font-size: 32px;
            font-weight: 700;
            color: rgba(255, 255, 255, 0.95);
            margin: 0 0 10px 0;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .form-header p {
            color: rgba(255, 255, 255, 0.6);
            font-size: 15px;
            margin: 0;
        }

        /* Form Card */
        .form-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.15);
            animation: fadeInUp 0.5s ease;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Form Groups */
        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 600;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .required-star {
            color: #f87171;
            font-size: 16px;
        }

        /* Form Controls */
        .form-control {
            width: 100%;
            padding: 14px 18px;
            background: rgba(255, 255, 255, 0.08);
            border: 1.5px solid rgba(255, 255, 255, 0.12);
            border-radius: 12px;
            color: rgba(255, 255, 255, 0.95);
            font-size: 15px;
            transition: all 0.3s ease;
            font-family: inherit;
        }

        .form-control:focus {
            outline: none;
            background: rgba(255, 255, 255, 0.12);
            border-color: rgba(102, 126, 234, 0.6);
            box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.4);
        }

        /* Select Styling */
        select.form-control {
            cursor: pointer;
            appearance: none;
            background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='rgba(255,255,255,0.6)' d='M6 9L1 4h10z'/%3E%3C/svg%3E\");
            background-repeat: no-repeat;
            background-position: right 18px center;
            padding-right: 45px;
        }

        select.form-control option {
            background: #1e293b;
            color: #fff;
            padding: 10px;
        }

        /* Date Input */
        input[type=\"date\"].form-control {
            color-scheme: dark;
        }

        /* Error State */
        .has-error .form-control {
            border-color: rgba(239, 68, 68, 0.6);
            background: rgba(239, 68, 68, 0.05);
        }

        .form-error {
            color: #f87171;
            font-size: 13px;
            margin-top: 8px;
            display: flex;
            align-items: center;
            gap: 6px;
            font-weight: 500;
        }

        .form-error::before {
            content: \"⚠\";
            font-size: 14px;
        }

        /* Form Actions */
        .form-actions {
            display: flex;
            gap: 15px;
            margin-top: 35px;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
        }

        .btn {
            flex: 1;
            padding: 14px 24px;
            border-radius: 12px;
            font-size: 15px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            text-decoration: none;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.08);
            color: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.15);
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.12);
            color: rgba(255, 255, 255, 0.95);
        }

        /* Helper Text */
        .form-helper {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.5);
            margin-top: 6px;
            font-style: italic;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .form-card {
                padding: 25px;
            }

            .form-actions {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }
        }
    </style>
{% endblock %}

{% block body %}

<div class=\"form-page\">

    <!-- Header -->
    <div class=\"form-header\">
        <h1>
            <span>✏️</span>
            Modifier l'Activité Physique
        </h1>
        <p>Mettez à jour les informations de votre séance</p>
    </div>

    <!-- Form Card -->
    <div class=\"form-card\">
        
        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

            <!-- Type d'activité -->
            <div class=\"form-group {% if form.type.vars.errors|length > 0 %}has-error{% endif %}\">
                <label for=\"{{ form.type.vars.id }}\">
                    Type d'activité
                    <span class=\"required-star\">*</span>
                </label>
                {{ form_widget(form.type, {
                    'attr': {
                        'class': 'form-control',
                        'placeholder': 'Ex: Course, Natation, Musculation...'
                    }
                }) }}
                {% for error in form.type.vars.errors %}
                    <div class=\"form-error\">{{ error.message }}</div>
                {% endfor %}
            </div>

            <!-- Durée -->
            <div class=\"form-group {% if form.duree.vars.errors|length > 0 %}has-error{% endif %}\">
                <label for=\"{{ form.duree.vars.id }}\">
                    Durée (en minutes)
                    <span class=\"required-star\">*</span>
                </label>
                {{ form_widget(form.duree, {
                    'attr': {
                        'class': 'form-control',
                        'placeholder': 'Ex: 30'
                    }
                }) }}
                {% for error in form.duree.vars.errors %}
                    <div class=\"form-error\">{{ error.message }}</div>
                {% endfor %}
            </div>

            <!-- Calories brûlées -->
            <div class=\"form-group {% if form.caloriesBrulees.vars.errors|length > 0 %}has-error{% endif %}\">
                <label for=\"{{ form.caloriesBrulees.vars.id }}\">
                    Calories brûlées
                    <span class=\"required-star\">*</span>
                </label>
                {{ form_widget(form.caloriesBrulees, {
                    'attr': {
                        'class': 'form-control',
                        'placeholder': 'Ex: 250'
                    }
                }) }}
                {% for error in form.caloriesBrulees.vars.errors %}
                    <div class=\"form-error\">{{ error.message }}</div>
                {% endfor %}
            </div>

            <!-- Date -->
            <div class=\"form-group {% if form.date.vars.errors|length > 0 %}has-error{% endif %}\">
                <label for=\"{{ form.date.vars.id }}\">
                    Date de l'activité
                    <span class=\"required-star\">*</span>
                </label>
                {{ form_widget(form.date, {
                    'attr': {
                        'class': 'form-control'
                    }
                }) }}
                {% for error in form.date.vars.errors %}
                    <div class=\"form-error\">{{ error.message }}</div>
                {% endfor %}
            </div>

            <!-- Intensité -->
            <div class=\"form-group {% if form.intensite.vars.errors|length > 0 %}has-error{% endif %}\">
                <label for=\"{{ form.intensite.vars.id }}\">
                    Intensité
                    <span class=\"required-star\">*</span>
                </label>
                {{ form_widget(form.intensite, {
                    'attr': {
                        'class': 'form-control'
                    }
                }) }}
                {% for error in form.intensite.vars.errors %}
                    <div class=\"form-error\">{{ error.message }}</div>
                {% endfor %}
            </div>

            <!-- Objectif -->
            <div class=\"form-group {% if form.objectif.vars.errors|length > 0 %}has-error{% endif %}\">
                <label for=\"{{ form.objectif.vars.id }}\">
                    Objectif associé
                    <span class=\"required-star\">*</span>
                </label>
                {{ form_widget(form.objectif, {
                    'attr': {
                        'class': 'form-control'
                    }
                }) }}
                {% for error in form.objectif.vars.errors %}
                    <div class=\"form-error\">{{ error.message }}</div>
                {% endfor %}
            </div>

            <!-- Actions -->
            <div class=\"form-actions\">
                <button type=\"submit\" class=\"btn btn-primary\">
                    <span>💾</span>
                    Enregistrer les modifications
                </button>
                
                <a href=\"{{ path('back_sport_index') }}\" class=\"btn btn-secondary\">
                    <span>←</span>
                    Annuler
                </a>
            </div>

        {{ form_end(form) }}

    </div>

</div>

{% endblock %}
", "back/sport/edit.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\back\\sport\\edit.html.twig");
    }
}
