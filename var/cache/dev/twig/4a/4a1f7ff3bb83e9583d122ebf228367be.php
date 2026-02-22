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

/* back/objectif/objectif_new.html.twig */
class __TwigTemplate_63a35bbaff69751dee25b595c1e9888d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/objectif/objectif_new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/objectif/objectif_new.html.twig"));

        $this->parent = $this->load("back/sport/base_back.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield "Nouvel Objectif";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    .form-page { padding: 30px; max-width: 800px; margin: 0 auto; }
    .form-header { margin-bottom: 35px; }
    .form-header h1 { font-size: 36px; font-weight: 800; color: rgba(255,255,255,0.95); margin:0 0 10px 0; display:flex; gap:12px; align-items:center; }
    .form-header p { color: rgba(255,255,255,0.6); margin:0; }

    .form-card { background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.10); border-radius: 20px; padding: 40px; box-shadow: 0 10px 30px rgba(0,0,0,0.20); }
    .form-group { margin-bottom: 20px; }
    .form-group label { display:block; color: rgba(255,255,255,0.85); font-weight: 800; margin-bottom: 8px; }
    .required-star { color:#f87171; }

    .ctrl { width:100%; padding: 14px 16px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.12); background: rgba(255,255,255,0.06); color: rgba(255,255,255,0.92); }
    .ctrl:focus { outline:none; border-color: rgba(102,126,234,0.45); box-shadow: 0 0 0 4px rgba(102,126,234,0.10); }
    .has-error .ctrl { border-color: rgba(239,68,68,0.55); background: rgba(239,68,68,0.06); }
    .form-error { color:#f87171; font-weight:700; font-size: 13px; margin-top: 6px; display:flex; gap:6px; align-items:center; }
    .form-error::before { content:\"⚠\"; }

    .actions { display:flex; gap:12px; margin-top: 22px; flex-wrap:wrap; }
    .btn { flex:1; border: 1px solid rgba(255,255,255,0.12); background: rgba(255,255,255,0.07); color: rgba(255,255,255,0.92); padding: 14px 16px; border-radius: 14px; cursor:pointer; text-decoration:none; font-weight: 800; display:inline-flex; align-items:center; justify-content:center; gap:10px; transition: .25s ease; }
    .btn:hover { transform: translateY(-2px); background: rgba(255,255,255,0.1); }
    .btn-primary { background: rgba(102,126,234,0.20); border-color: rgba(102,126,234,0.35); }
    .btn-primary:hover { background: rgba(102,126,234,0.28); }

    input[type=\"date\"].ctrl { color-scheme: dark; }
    textarea.ctrl { min-height: 120px; resize: vertical; }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 34
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

        // line 35
        yield "<div class=\"form-page\">
    <div class=\"form-header\">
        <h1>➕ Nouvel Objectif</h1>
        <p>Créez un objectif sportif avec validation côté serveur</p>
    </div>

    <div class=\"form-card\">
        ";
        // line 42
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

        ";
        // line 45
        yield "        <div class=\"form-group ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "vars", [], "any", false, false, false, 45), "errors", [], "any", false, false, false, 45)) > 0)) {
            yield "has-error";
        }
        yield "\">
            <label for=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "vars", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46), "html", null, true);
        yield "\">Utilisateur <span class=\"required-star\">*</span></label>
            ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "ctrl"]]);
        yield "
            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48), "vars", [], "any", false, false, false, 48), "errors", [], "any", false, false, false, 48));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 48), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "        </div>

        <div class=\"form-group ";
        // line 51
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "description", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "errors", [], "any", false, false, false, 51)) > 0)) {
            yield "has-error";
        }
        yield "\">
            <label for=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "description", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52), "html", null, true);
        yield "\">Description <span class=\"required-star\">*</span></label>
            ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "description", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "ctrl"]]);
        yield "
            ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "description", [], "any", false, false, false, 54), "vars", [], "any", false, false, false, 54), "errors", [], "any", false, false, false, 54));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 54), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "        </div>

        <div class=\"form-group ";
        // line 57
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "type", [], "any", false, false, false, 57), "vars", [], "any", false, false, false, 57), "errors", [], "any", false, false, false, 57)) > 0)) {
            yield "has-error";
        }
        yield "\">
            <label for=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "type", [], "any", false, false, false, 58), "vars", [], "any", false, false, false, 58), "id", [], "any", false, false, false, 58), "html", null, true);
        yield "\">Type <span class=\"required-star\">*</span></label>
            ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "type", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "ctrl"]]);
        yield "
            ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "type", [], "any", false, false, false, 60), "vars", [], "any", false, false, false, 60), "errors", [], "any", false, false, false, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 60), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "        </div>

        <div class=\"form-group ";
        // line 63
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "valeurCible", [], "any", false, false, false, 63), "vars", [], "any", false, false, false, 63), "errors", [], "any", false, false, false, 63)) > 0)) {
            yield "has-error";
        }
        yield "\">
            <label for=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "valeurCible", [], "any", false, false, false, 64), "vars", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64), "html", null, true);
        yield "\">Valeur cible <span class=\"required-star\">*</span></label>
            ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "valeurCible", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "ctrl", "placeholder" => "Ex: 5 / 10000 / ..."]]);
        yield "
            ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "valeurCible", [], "any", false, false, false, 66), "vars", [], "any", false, false, false, 66), "errors", [], "any", false, false, false, 66));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 66), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "        </div>

        <div class=\"form-group ";
        // line 69
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "dateDebut", [], "any", false, false, false, 69), "vars", [], "any", false, false, false, 69), "errors", [], "any", false, false, false, 69)) > 0)) {
            yield "has-error";
        }
        yield "\">
            <label for=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "dateDebut", [], "any", false, false, false, 70), "vars", [], "any", false, false, false, 70), "id", [], "any", false, false, false, 70), "html", null, true);
        yield "\">Date début <span class=\"required-star\">*</span></label>
            ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "dateDebut", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "ctrl"]]);
        yield "
            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "dateDebut", [], "any", false, false, false, 72), "vars", [], "any", false, false, false, 72), "errors", [], "any", false, false, false, 72));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 72), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "        </div>

        <div class=\"form-group ";
        // line 75
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "dateFin", [], "any", false, false, false, 75), "vars", [], "any", false, false, false, 75), "errors", [], "any", false, false, false, 75)) > 0)) {
            yield "has-error";
        }
        yield "\">
            <label for=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "dateFin", [], "any", false, false, false, 76), "vars", [], "any", false, false, false, 76), "id", [], "any", false, false, false, 76), "html", null, true);
        yield "\">Date fin <span class=\"required-star\">*</span></label>
            ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "dateFin", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "ctrl"]]);
        yield "
            ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "dateFin", [], "any", false, false, false, 78), "vars", [], "any", false, false, false, 78), "errors", [], "any", false, false, false, 78));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 78), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "        </div>

        <div class=\"form-group ";
        // line 81
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "statut", [], "any", false, false, false, 81), "vars", [], "any", false, false, false, 81), "errors", [], "any", false, false, false, 81)) > 0)) {
            yield "has-error";
        }
        yield "\">
            <label for=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "statut", [], "any", false, false, false, 82), "vars", [], "any", false, false, false, 82), "id", [], "any", false, false, false, 82), "html", null, true);
        yield "\">Statut <span class=\"required-star\">*</span></label>
            ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "statut", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "ctrl"]]);
        yield "
            ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "statut", [], "any", false, false, false, 84), "vars", [], "any", false, false, false, 84), "errors", [], "any", false, false, false, 84));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 84), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "        </div>

        <div class=\"actions\">
            <button class=\"btn btn-primary\" type=\"submit\">✓ Créer</button>
            <a class=\"btn\" href=\"";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_index");
        yield "\">← Annuler</a>
        </div>

        ";
        // line 92
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), 'form_end');
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
        return "back/objectif/objectif_new.html.twig";
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
        return array (  379 => 92,  373 => 89,  367 => 85,  356 => 84,  352 => 83,  348 => 82,  342 => 81,  338 => 79,  327 => 78,  323 => 77,  319 => 76,  313 => 75,  309 => 73,  298 => 72,  294 => 71,  290 => 70,  284 => 69,  280 => 67,  269 => 66,  265 => 65,  261 => 64,  255 => 63,  251 => 61,  240 => 60,  236 => 59,  232 => 58,  226 => 57,  222 => 55,  211 => 54,  207 => 53,  203 => 52,  197 => 51,  193 => 49,  182 => 48,  178 => 47,  174 => 46,  167 => 45,  162 => 42,  153 => 35,  140 => 34,  101 => 5,  88 => 4,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back/sport/base_back.html.twig' %}
{% block title %}Nouvel Objectif{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .form-page { padding: 30px; max-width: 800px; margin: 0 auto; }
    .form-header { margin-bottom: 35px; }
    .form-header h1 { font-size: 36px; font-weight: 800; color: rgba(255,255,255,0.95); margin:0 0 10px 0; display:flex; gap:12px; align-items:center; }
    .form-header p { color: rgba(255,255,255,0.6); margin:0; }

    .form-card { background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.10); border-radius: 20px; padding: 40px; box-shadow: 0 10px 30px rgba(0,0,0,0.20); }
    .form-group { margin-bottom: 20px; }
    .form-group label { display:block; color: rgba(255,255,255,0.85); font-weight: 800; margin-bottom: 8px; }
    .required-star { color:#f87171; }

    .ctrl { width:100%; padding: 14px 16px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.12); background: rgba(255,255,255,0.06); color: rgba(255,255,255,0.92); }
    .ctrl:focus { outline:none; border-color: rgba(102,126,234,0.45); box-shadow: 0 0 0 4px rgba(102,126,234,0.10); }
    .has-error .ctrl { border-color: rgba(239,68,68,0.55); background: rgba(239,68,68,0.06); }
    .form-error { color:#f87171; font-weight:700; font-size: 13px; margin-top: 6px; display:flex; gap:6px; align-items:center; }
    .form-error::before { content:\"⚠\"; }

    .actions { display:flex; gap:12px; margin-top: 22px; flex-wrap:wrap; }
    .btn { flex:1; border: 1px solid rgba(255,255,255,0.12); background: rgba(255,255,255,0.07); color: rgba(255,255,255,0.92); padding: 14px 16px; border-radius: 14px; cursor:pointer; text-decoration:none; font-weight: 800; display:inline-flex; align-items:center; justify-content:center; gap:10px; transition: .25s ease; }
    .btn:hover { transform: translateY(-2px); background: rgba(255,255,255,0.1); }
    .btn-primary { background: rgba(102,126,234,0.20); border-color: rgba(102,126,234,0.35); }
    .btn-primary:hover { background: rgba(102,126,234,0.28); }

    input[type=\"date\"].ctrl { color-scheme: dark; }
    textarea.ctrl { min-height: 120px; resize: vertical; }
</style>
{% endblock %}

{% block body %}
<div class=\"form-page\">
    <div class=\"form-header\">
        <h1>➕ Nouvel Objectif</h1>
        <p>Créez un objectif sportif avec validation côté serveur</p>
    </div>

    <div class=\"form-card\">
        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

        {# ✅ NEW: Utilisateur #}
        <div class=\"form-group {% if form.user.vars.errors|length > 0 %}has-error{% endif %}\">
            <label for=\"{{ form.user.vars.id }}\">Utilisateur <span class=\"required-star\">*</span></label>
            {{ form_widget(form.user, {'attr': {'class':'ctrl'}}) }}
            {% for error in form.user.vars.errors %}<div class=\"form-error\">{{ error.message }}</div>{% endfor %}
        </div>

        <div class=\"form-group {% if form.description.vars.errors|length > 0 %}has-error{% endif %}\">
            <label for=\"{{ form.description.vars.id }}\">Description <span class=\"required-star\">*</span></label>
            {{ form_widget(form.description, {'attr': {'class':'ctrl'}}) }}
            {% for error in form.description.vars.errors %}<div class=\"form-error\">{{ error.message }}</div>{% endfor %}
        </div>

        <div class=\"form-group {% if form.type.vars.errors|length > 0 %}has-error{% endif %}\">
            <label for=\"{{ form.type.vars.id }}\">Type <span class=\"required-star\">*</span></label>
            {{ form_widget(form.type, {'attr': {'class':'ctrl'}}) }}
            {% for error in form.type.vars.errors %}<div class=\"form-error\">{{ error.message }}</div>{% endfor %}
        </div>

        <div class=\"form-group {% if form.valeurCible.vars.errors|length > 0 %}has-error{% endif %}\">
            <label for=\"{{ form.valeurCible.vars.id }}\">Valeur cible <span class=\"required-star\">*</span></label>
            {{ form_widget(form.valeurCible, {'attr': {'class':'ctrl', 'placeholder':'Ex: 5 / 10000 / ...'}}) }}
            {% for error in form.valeurCible.vars.errors %}<div class=\"form-error\">{{ error.message }}</div>{% endfor %}
        </div>

        <div class=\"form-group {% if form.dateDebut.vars.errors|length > 0 %}has-error{% endif %}\">
            <label for=\"{{ form.dateDebut.vars.id }}\">Date début <span class=\"required-star\">*</span></label>
            {{ form_widget(form.dateDebut, {'attr': {'class':'ctrl'}}) }}
            {% for error in form.dateDebut.vars.errors %}<div class=\"form-error\">{{ error.message }}</div>{% endfor %}
        </div>

        <div class=\"form-group {% if form.dateFin.vars.errors|length > 0 %}has-error{% endif %}\">
            <label for=\"{{ form.dateFin.vars.id }}\">Date fin <span class=\"required-star\">*</span></label>
            {{ form_widget(form.dateFin, {'attr': {'class':'ctrl'}}) }}
            {% for error in form.dateFin.vars.errors %}<div class=\"form-error\">{{ error.message }}</div>{% endfor %}
        </div>

        <div class=\"form-group {% if form.statut.vars.errors|length > 0 %}has-error{% endif %}\">
            <label for=\"{{ form.statut.vars.id }}\">Statut <span class=\"required-star\">*</span></label>
            {{ form_widget(form.statut, {'attr': {'class':'ctrl'}}) }}
            {% for error in form.statut.vars.errors %}<div class=\"form-error\">{{ error.message }}</div>{% endfor %}
        </div>

        <div class=\"actions\">
            <button class=\"btn btn-primary\" type=\"submit\">✓ Créer</button>
            <a class=\"btn\" href=\"{{ path('app_objectif_index') }}\">← Annuler</a>
        </div>

        {{ form_end(form) }}
    </div>
</div>
{% endblock %}
", "back/objectif/objectif_new.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\back\\objectif\\objectif_new.html.twig");
    }
}
