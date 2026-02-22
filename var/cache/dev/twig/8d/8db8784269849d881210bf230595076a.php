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

/* back/sport/new.html.twig */
class __TwigTemplate_15a26bd0cac6b18a806b0e4d5fb0f675 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/sport/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/sport/new.html.twig"));

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

        yield "Nouvelle Activité";
        
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
        .form-page { padding: 30px; max-width: 800px; margin: 0 auto; }
        .form-header { margin-bottom: 35px; }
        .form-header h1 { font-size: 32px; font-weight: 700; color: rgba(255, 255, 255, 0.95); margin: 0 0 10px 0; display: flex; align-items: center; gap: 12px; }
        .form-header p { color: rgba(255, 255, 255, 0.6); font-size: 15px; margin: 0; }
        .form-card { background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(20px); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 20px; padding: 40px; box-shadow: 0 8px 32px rgba(0, 0, 0, 0.15); animation: fadeInUp 0.5s ease; }
        @keyframes fadeInUp { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
        .form-group { margin-bottom: 25px; }
        .form-group label { display: block; margin-bottom: 10px; color: rgba(255, 255, 255, 0.9); font-weight: 600; font-size: 14px; display: flex; align-items: center; gap: 6px; }
        .required-star { color: #f87171; font-size: 16px; }
        .form-control { width: 100%; padding: 14px 18px; background: rgba(255, 255, 255, 0.08); border: 1.5px solid rgba(255, 255, 255, 0.12); border-radius: 12px; color: rgba(255, 255, 255, 0.95); font-size: 15px; transition: all 0.3s ease; font-family: inherit; }
        .form-control:focus { outline: none; background: rgba(255, 255, 255, 0.12); border-color: rgba(102, 126, 234, 0.6); box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1); }
        .form-control::placeholder { color: rgba(255, 255, 255, 0.4); }
        select.form-control { cursor: pointer; appearance: none; background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='rgba(255,255,255,0.6)' d='M6 9L1 4h10z'/%3E%3C/svg%3E\"); background-repeat: no-repeat; background-position: right 18px center; padding-right: 45px; }
        select.form-control option { background: #1e293b; color: #fff; padding: 10px; }
        input[type=\"date\"].form-control { color-scheme: dark; }
        .has-error .form-control { border-color: rgba(239, 68, 68, 0.6); background: rgba(239, 68, 68, 0.05); }
        .form-error { color: #f87171; font-size: 13px; margin-top: 8px; display: flex; align-items: center; gap: 6px; font-weight: 500; }
        .form-error::before { content: \"⚠\"; font-size: 14px; }
        .form-actions { display: flex; gap: 15px; margin-top: 35px; padding-top: 30px; border-top: 1px solid rgba(255, 255, 255, 0.08); }
        .btn { flex: 1; padding: 14px 24px; border-radius: 12px; font-size: 15px; font-weight: 600; border: none; cursor: pointer; transition: all 0.3s ease; display: inline-flex; align-items: center; justify-content: center; gap: 8px; text-decoration: none; }
        .btn-primary { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3); }
        .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4); }
        .btn-secondary { background: rgba(255, 255, 255, 0.08); color: rgba(255, 255, 255, 0.8); border: 1px solid rgba(255, 255, 255, 0.15); }
        .btn-secondary:hover { background: rgba(255, 255, 255, 0.12); color: rgba(255, 255, 255, 0.95); }
        .form-helper { font-size: 12px; color: rgba(255, 255, 255, 0.5); margin-top: 6px; font-style: italic; }
        @media (max-width: 768px) { .form-card { padding: 25px; } .form-actions { flex-direction: column; } .btn { width: 100%; } }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 38
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

        // line 39
        yield "
<div class=\"form-page\">

    <div class=\"form-header\">
        <h1><span>➕</span> Nouvelle Activité Physique</h1>
        <p>Enregistrez votre séance d'entraînement</p>
    </div>

    <div class=\"form-card\">

        ";
        // line 49
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

        ";
        // line 52
        yield "        <div class=\"form-group ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "type", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "errors", [], "any", false, false, false, 52)) > 0)) {
            yield "has-error";
        }
        yield "\">
            <label for=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "type", [], "any", false, false, false, 53), "vars", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53), "html", null, true);
        yield "\">Type d'activité <span class=\"required-star\">*</span></label>
            ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "type", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: Course, Natation, Musculation..."]]);
        yield "
            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "type", [], "any", false, false, false, 55), "vars", [], "any", false, false, false, 55), "errors", [], "any", false, false, false, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 56
            yield "                <div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 56), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "            <div class=\"form-helper\">Entrez le type d'activité que vous avez pratiqué</div>
        </div>

        ";
        // line 62
        yield "        <div class=\"form-group ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "duree", [], "any", false, false, false, 62), "vars", [], "any", false, false, false, 62), "errors", [], "any", false, false, false, 62)) > 0)) {
            yield "has-error";
        }
        yield "\">
            <label for=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "duree", [], "any", false, false, false, 63), "vars", [], "any", false, false, false, 63), "id", [], "any", false, false, false, 63), "html", null, true);
        yield "\">Durée (minutes) <span class=\"required-star\">*</span></label>
            ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "duree", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: 30"]]);
        yield "
            ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "duree", [], "any", false, false, false, 65), "vars", [], "any", false, false, false, 65), "errors", [], "any", false, false, false, 65));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 66
            yield "                <div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 66), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        yield "        </div>

        ";
        // line 71
        yield "        <div class=\"form-group ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "caloriesBrulees", [], "any", false, false, false, 71), "vars", [], "any", false, false, false, 71), "errors", [], "any", false, false, false, 71)) > 0)) {
            yield "has-error";
        }
        yield "\">
            <label for=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "caloriesBrulees", [], "any", false, false, false, 72), "vars", [], "any", false, false, false, 72), "id", [], "any", false, false, false, 72), "html", null, true);
        yield "\">Calories brûlées <span class=\"required-star\">*</span></label>
            ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "caloriesBrulees", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: 250"]]);
        yield "
            ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "caloriesBrulees", [], "any", false, false, false, 74), "vars", [], "any", false, false, false, 74), "errors", [], "any", false, false, false, 74));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 75
            yield "                <div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 75), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        yield "            <div class=\"form-helper\">Estimation du nombre de calories brûlées pendant l'activité</div>
        </div>

        ";
        // line 81
        yield "        <div class=\"form-group ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "date", [], "any", false, false, false, 81), "vars", [], "any", false, false, false, 81), "errors", [], "any", false, false, false, 81)) > 0)) {
            yield "has-error";
        }
        yield "\">
            <label for=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "date", [], "any", false, false, false, 82), "vars", [], "any", false, false, false, 82), "id", [], "any", false, false, false, 82), "html", null, true);
        yield "\">Date de l'activité <span class=\"required-star\">*</span></label>
            ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "date", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "date", [], "any", false, false, false, 84), "vars", [], "any", false, false, false, 84), "errors", [], "any", false, false, false, 84));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 85
            yield "                <div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 85), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        yield "        </div>

        ";
        // line 90
        yield "        <div class=\"form-group ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "intensite", [], "any", false, false, false, 90), "vars", [], "any", false, false, false, 90), "errors", [], "any", false, false, false, 90)) > 0)) {
            yield "has-error";
        }
        yield "\">
            <label for=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "intensite", [], "any", false, false, false, 91), "vars", [], "any", false, false, false, 91), "id", [], "any", false, false, false, 91), "html", null, true);
        yield "\">Intensité <span class=\"required-star\">*</span></label>
            ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "intensite", [], "any", false, false, false, 92), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "intensite", [], "any", false, false, false, 93), "vars", [], "any", false, false, false, 93), "errors", [], "any", false, false, false, 93));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 94
            yield "                <div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 94), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        yield "        </div>

        ";
        // line 99
        yield "        <div class=\"form-group ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "objectif", [], "any", false, false, false, 99), "vars", [], "any", false, false, false, 99), "errors", [], "any", false, false, false, 99)) > 0)) {
            yield "has-error";
        }
        yield "\">
            <label for=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "objectif", [], "any", false, false, false, 100), "vars", [], "any", false, false, false, 100), "id", [], "any", false, false, false, 100), "html", null, true);
        yield "\">Objectif associé <span class=\"required-star\">*</span></label>
            ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "objectif", [], "any", false, false, false, 101), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "objectif", [], "any", false, false, false, 102), "vars", [], "any", false, false, false, 102), "errors", [], "any", false, false, false, 102));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 103
            yield "                <div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 103), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        yield "            <div class=\"form-helper\">Sélectionnez l'objectif lié à cette activité</div>
        </div>

        ";
        // line 109
        yield "        <div class=\"form-actions\">
            <button type=\"submit\" class=\"btn btn-primary\"><span>✓</span> Créer l'activité</button>
            <a href=\"";
        // line 111
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_sport_index");
        yield "\" class=\"btn btn-secondary\"><span>←</span> Annuler</a>
        </div>

        ";
        // line 114
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), 'form_end');
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
        return "back/sport/new.html.twig";
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
        return array (  379 => 114,  373 => 111,  369 => 109,  364 => 105,  355 => 103,  351 => 102,  347 => 101,  343 => 100,  336 => 99,  332 => 96,  323 => 94,  319 => 93,  315 => 92,  311 => 91,  304 => 90,  300 => 87,  291 => 85,  287 => 84,  283 => 83,  279 => 82,  272 => 81,  267 => 77,  258 => 75,  254 => 74,  250 => 73,  246 => 72,  239 => 71,  235 => 68,  226 => 66,  222 => 65,  218 => 64,  214 => 63,  207 => 62,  202 => 58,  193 => 56,  189 => 55,  185 => 54,  181 => 53,  174 => 52,  169 => 49,  157 => 39,  144 => 38,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back/sport/base_back.html.twig' %}

{% block title %}Nouvelle Activité{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        /* Page Container */
        .form-page { padding: 30px; max-width: 800px; margin: 0 auto; }
        .form-header { margin-bottom: 35px; }
        .form-header h1 { font-size: 32px; font-weight: 700; color: rgba(255, 255, 255, 0.95); margin: 0 0 10px 0; display: flex; align-items: center; gap: 12px; }
        .form-header p { color: rgba(255, 255, 255, 0.6); font-size: 15px; margin: 0; }
        .form-card { background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(20px); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 20px; padding: 40px; box-shadow: 0 8px 32px rgba(0, 0, 0, 0.15); animation: fadeInUp 0.5s ease; }
        @keyframes fadeInUp { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
        .form-group { margin-bottom: 25px; }
        .form-group label { display: block; margin-bottom: 10px; color: rgba(255, 255, 255, 0.9); font-weight: 600; font-size: 14px; display: flex; align-items: center; gap: 6px; }
        .required-star { color: #f87171; font-size: 16px; }
        .form-control { width: 100%; padding: 14px 18px; background: rgba(255, 255, 255, 0.08); border: 1.5px solid rgba(255, 255, 255, 0.12); border-radius: 12px; color: rgba(255, 255, 255, 0.95); font-size: 15px; transition: all 0.3s ease; font-family: inherit; }
        .form-control:focus { outline: none; background: rgba(255, 255, 255, 0.12); border-color: rgba(102, 126, 234, 0.6); box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1); }
        .form-control::placeholder { color: rgba(255, 255, 255, 0.4); }
        select.form-control { cursor: pointer; appearance: none; background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='rgba(255,255,255,0.6)' d='M6 9L1 4h10z'/%3E%3C/svg%3E\"); background-repeat: no-repeat; background-position: right 18px center; padding-right: 45px; }
        select.form-control option { background: #1e293b; color: #fff; padding: 10px; }
        input[type=\"date\"].form-control { color-scheme: dark; }
        .has-error .form-control { border-color: rgba(239, 68, 68, 0.6); background: rgba(239, 68, 68, 0.05); }
        .form-error { color: #f87171; font-size: 13px; margin-top: 8px; display: flex; align-items: center; gap: 6px; font-weight: 500; }
        .form-error::before { content: \"⚠\"; font-size: 14px; }
        .form-actions { display: flex; gap: 15px; margin-top: 35px; padding-top: 30px; border-top: 1px solid rgba(255, 255, 255, 0.08); }
        .btn { flex: 1; padding: 14px 24px; border-radius: 12px; font-size: 15px; font-weight: 600; border: none; cursor: pointer; transition: all 0.3s ease; display: inline-flex; align-items: center; justify-content: center; gap: 8px; text-decoration: none; }
        .btn-primary { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3); }
        .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4); }
        .btn-secondary { background: rgba(255, 255, 255, 0.08); color: rgba(255, 255, 255, 0.8); border: 1px solid rgba(255, 255, 255, 0.15); }
        .btn-secondary:hover { background: rgba(255, 255, 255, 0.12); color: rgba(255, 255, 255, 0.95); }
        .form-helper { font-size: 12px; color: rgba(255, 255, 255, 0.5); margin-top: 6px; font-style: italic; }
        @media (max-width: 768px) { .form-card { padding: 25px; } .form-actions { flex-direction: column; } .btn { width: 100%; } }
    </style>
{% endblock %}

{% block body %}

<div class=\"form-page\">

    <div class=\"form-header\">
        <h1><span>➕</span> Nouvelle Activité Physique</h1>
        <p>Enregistrez votre séance d'entraînement</p>
    </div>

    <div class=\"form-card\">

        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

        {# Type d'activité #}
        <div class=\"form-group {% if form.type.vars.errors|length > 0 %}has-error{% endif %}\">
            <label for=\"{{ form.type.vars.id }}\">Type d'activité <span class=\"required-star\">*</span></label>
            {{ form_widget(form.type, {'attr': {'class':'form-control','placeholder':'Ex: Course, Natation, Musculation...'}}) }}
            {% for error in form.type.vars.errors %}
                <div class=\"form-error\">{{ error.message }}</div>
            {% endfor %}
            <div class=\"form-helper\">Entrez le type d'activité que vous avez pratiqué</div>
        </div>

        {# Durée #}
        <div class=\"form-group {% if form.duree.vars.errors|length > 0 %}has-error{% endif %}\">
            <label for=\"{{ form.duree.vars.id }}\">Durée (minutes) <span class=\"required-star\">*</span></label>
            {{ form_widget(form.duree, {'attr': {'class':'form-control','placeholder':'Ex: 30'}}) }}
            {% for error in form.duree.vars.errors %}
                <div class=\"form-error\">{{ error.message }}</div>
            {% endfor %}
        </div>

        {# Calories #}
        <div class=\"form-group {% if form.caloriesBrulees.vars.errors|length > 0 %}has-error{% endif %}\">
            <label for=\"{{ form.caloriesBrulees.vars.id }}\">Calories brûlées <span class=\"required-star\">*</span></label>
            {{ form_widget(form.caloriesBrulees, {'attr': {'class':'form-control','placeholder':'Ex: 250'}}) }}
            {% for error in form.caloriesBrulees.vars.errors %}
                <div class=\"form-error\">{{ error.message }}</div>
            {% endfor %}
            <div class=\"form-helper\">Estimation du nombre de calories brûlées pendant l'activité</div>
        </div>

        {# Date - ✅ CORRIGÉE: pas de value custom #}
        <div class=\"form-group {% if form.date.vars.errors|length > 0 %}has-error{% endif %}\">
            <label for=\"{{ form.date.vars.id }}\">Date de l'activité <span class=\"required-star\">*</span></label>
            {{ form_widget(form.date, {'attr': {'class':'form-control'}}) }}
            {% for error in form.date.vars.errors %}
                <div class=\"form-error\">{{ error.message }}</div>
            {% endfor %}
        </div>

        {# Intensité #}
        <div class=\"form-group {% if form.intensite.vars.errors|length > 0 %}has-error{% endif %}\">
            <label for=\"{{ form.intensite.vars.id }}\">Intensité <span class=\"required-star\">*</span></label>
            {{ form_widget(form.intensite, {'attr': {'class':'form-control'}}) }}
            {% for error in form.intensite.vars.errors %}
                <div class=\"form-error\">{{ error.message }}</div>
            {% endfor %}
        </div>

        {# Objectif #}
        <div class=\"form-group {% if form.objectif.vars.errors|length > 0 %}has-error{% endif %}\">
            <label for=\"{{ form.objectif.vars.id }}\">Objectif associé <span class=\"required-star\">*</span></label>
            {{ form_widget(form.objectif, {'attr': {'class':'form-control'}}) }}
            {% for error in form.objectif.vars.errors %}
                <div class=\"form-error\">{{ error.message }}</div>
            {% endfor %}
            <div class=\"form-helper\">Sélectionnez l'objectif lié à cette activité</div>
        </div>

        {# Actions #}
        <div class=\"form-actions\">
            <button type=\"submit\" class=\"btn btn-primary\"><span>✓</span> Créer l'activité</button>
            <a href=\"{{ path('back_sport_index') }}\" class=\"btn btn-secondary\"><span>←</span> Annuler</a>
        </div>

        {{ form_end(form) }}

    </div>
</div>

{% endblock %}
", "back/sport/new.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\back\\sport\\new.html.twig");
    }
}
