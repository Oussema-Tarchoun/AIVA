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

/* back/objectif/objectif_edit.html.twig */
class __TwigTemplate_f5d6e390b5d4b6dcdce9fef737890d34 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/objectif/objectif_edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/objectif/objectif_edit.html.twig"));

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

        yield "Modifier Objectif";
        
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

    // line 30
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

        // line 31
        yield "<div class=\"form-page\">
    <div class=\"form-header\">
        <h1>✏️ Modifier Objectif</h1>
        <p>Mettez à jour les informations de l’objectif</p>
    </div>

    <div class=\"form-card\">
        ";
        // line 38
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

        <div class=\"form-group ";
        // line 40
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "description", [], "any", false, false, false, 40), "vars", [], "any", false, false, false, 40), "errors", [], "any", false, false, false, 40)) > 0)) {
            yield "has-error";
        }
        yield "\">
            <label for=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "description", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41), "html", null, true);
        yield "\">Description <span class=\"required-star\">*</span></label>
            ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "description", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "ctrl"]]);
        yield "
            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "description", [], "any", false, false, false, 43), "vars", [], "any", false, false, false, 43), "errors", [], "any", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 43), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "        </div>

        <div class=\"form-group ";
        // line 46
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "type", [], "any", false, false, false, 46), "vars", [], "any", false, false, false, 46), "errors", [], "any", false, false, false, 46)) > 0)) {
            yield "has-error";
        }
        yield "\">
            <label for=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "type", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47), "html", null, true);
        yield "\">Type <span class=\"required-star\">*</span></label>
            ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "type", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "ctrl"]]);
        yield "
            ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "type", [], "any", false, false, false, 49), "vars", [], "any", false, false, false, 49), "errors", [], "any", false, false, false, 49));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 49), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "        </div>

        <div class=\"form-group ";
        // line 52
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "valeurCible", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "errors", [], "any", false, false, false, 52)) > 0)) {
            yield "has-error";
        }
        yield "\">
            <label for=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "valeurCible", [], "any", false, false, false, 53), "vars", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53), "html", null, true);
        yield "\">Valeur cible <span class=\"required-star\">*</span></label>
            ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "valeurCible", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "ctrl"]]);
        yield "
            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "valeurCible", [], "any", false, false, false, 55), "vars", [], "any", false, false, false, 55), "errors", [], "any", false, false, false, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 55), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "        </div>

        <div class=\"form-group ";
        // line 58
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "dateDebut", [], "any", false, false, false, 58), "vars", [], "any", false, false, false, 58), "errors", [], "any", false, false, false, 58)) > 0)) {
            yield "has-error";
        }
        yield "\">
            <label for=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "dateDebut", [], "any", false, false, false, 59), "vars", [], "any", false, false, false, 59), "id", [], "any", false, false, false, 59), "html", null, true);
        yield "\">Date début <span class=\"required-star\">*</span></label>
            ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "dateDebut", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "ctrl"]]);
        yield "
            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "dateDebut", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "errors", [], "any", false, false, false, 61));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 61), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "        </div>

        <div class=\"form-group ";
        // line 64
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "dateFin", [], "any", false, false, false, 64), "vars", [], "any", false, false, false, 64), "errors", [], "any", false, false, false, 64)) > 0)) {
            yield "has-error";
        }
        yield "\">
            <label for=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "dateFin", [], "any", false, false, false, 65), "vars", [], "any", false, false, false, 65), "id", [], "any", false, false, false, 65), "html", null, true);
        yield "\">Date fin <span class=\"required-star\">*</span></label>
            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "dateFin", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "ctrl"]]);
        yield "
            ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "dateFin", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "errors", [], "any", false, false, false, 67));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 67), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        yield "        </div>

        <div class=\"form-group ";
        // line 70
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "statut", [], "any", false, false, false, 70), "vars", [], "any", false, false, false, 70), "errors", [], "any", false, false, false, 70)) > 0)) {
            yield "has-error";
        }
        yield "\">
            <label for=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "statut", [], "any", false, false, false, 71), "vars", [], "any", false, false, false, 71), "id", [], "any", false, false, false, 71), "html", null, true);
        yield "\">Statut <span class=\"required-star\">*</span></label>
            ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "statut", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "ctrl"]]);
        yield "
            ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "statut", [], "any", false, false, false, 73), "vars", [], "any", false, false, false, 73), "errors", [], "any", false, false, false, 73));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 73), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        yield "        </div>

        <div class=\"actions\">
            <button class=\"btn btn-primary\" type=\"submit\">💾 Enregistrer</button>
            <a class=\"btn\" href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_index");
        yield "\">← Annuler</a>
        </div>

        ";
        // line 81
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'form_end');
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
        return "back/objectif/objectif_edit.html.twig";
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
        return array (  345 => 81,  339 => 78,  333 => 74,  322 => 73,  318 => 72,  314 => 71,  308 => 70,  304 => 68,  293 => 67,  289 => 66,  285 => 65,  279 => 64,  275 => 62,  264 => 61,  260 => 60,  256 => 59,  250 => 58,  246 => 56,  235 => 55,  231 => 54,  227 => 53,  221 => 52,  217 => 50,  206 => 49,  202 => 48,  198 => 47,  192 => 46,  188 => 44,  177 => 43,  173 => 42,  169 => 41,  163 => 40,  158 => 38,  149 => 31,  136 => 30,  101 => 5,  88 => 4,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back/sport/base_back.html.twig' %}
{% block title %}Modifier Objectif{% endblock %}

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
        <h1>✏️ Modifier Objectif</h1>
        <p>Mettez à jour les informations de l’objectif</p>
    </div>

    <div class=\"form-card\">
        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

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
            {{ form_widget(form.valeurCible, {'attr': {'class':'ctrl'}}) }}
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
            <button class=\"btn btn-primary\" type=\"submit\">💾 Enregistrer</button>
            <a class=\"btn\" href=\"{{ path('app_objectif_index') }}\">← Annuler</a>
        </div>

        {{ form_end(form) }}
    </div>
</div>
{% endblock %}
", "back/objectif/objectif_edit.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\back\\objectif\\objectif_edit.html.twig");
    }
}
