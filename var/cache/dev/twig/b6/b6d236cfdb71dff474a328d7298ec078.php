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

/* back/sport/form.html.twig */
class __TwigTemplate_033786dea91170ec0626f1cfdc26f379 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/sport/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/sport/form.html.twig"));

        $this->parent = $this->load("back/sport/base_back.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "<style>
    .form-container {
        max-width: 700px;
        margin: 0 auto;
    }

    .glass-card {
        animation: fadeIn 0.5s ease;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(15px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Style pour les champs de formulaire */
    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        color: rgba(255, 255, 255, 0.9);
        font-weight: 500;
        font-size: 14px;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 12px 16px;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 8px;
        color: #fff;
        font-size: 15px;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: rgba(99, 102, 241, 0.5);
        background: rgba(255, 255, 255, 0.08);
        box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
    }

    .form-group input::placeholder {
        color: rgba(255, 255, 255, 0.4);
    }

    /* Erreurs de validation */
    .form-error {
        color: #ef4444;
        font-size: 13px;
        margin-top: 5px;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .form-error::before {
        content: \"⚠\";
    }

    .has-error input,
    .has-error select,
    .has-error textarea {
        border-color: rgba(239, 68, 68, 0.5);
        background: rgba(239, 68, 68, 0.05);
    }

    /* Liste d'erreurs globales */
    .form-errors {
        background: rgba(239, 68, 68, 0.1);
        border: 1px solid rgba(239, 68, 68, 0.3);
        border-radius: 8px;
        padding: 15px;
        margin-bottom: 20px;
    }

    .form-errors-title {
        color: #ef4444;
        font-weight: 600;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .form-errors-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .form-errors-list li {
        color: #fca5a5;
        padding: 5px 0;
        display: flex;
        align-items: start;
        gap: 8px;
    }

    .form-errors-list li::before {
        content: \"•\";
        color: #ef4444;
        font-weight: bold;
    }

    /* Boutons */
    .form-actions {
        display: flex;
        gap: 12px;
        margin-top: 25px;
    }

    .btn {
        flex: 1;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 137
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

        // line 138
        yield "
<h1 class=\"page-title\">
    ";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("page_title", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 140, $this->source); })()), "Formulaire")) : ("Formulaire")), "html", null, true);
        yield "
</h1>

<div class=\"form-container\">
    <div class=\"glass-card\">
        
        ";
        // line 147
        yield "        ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "vars", [], "any", false, false, false, 147), "errors", [], "any", false, false, false, 147)) > 0)) {
            // line 148
            yield "            <div class=\"form-errors\">
                <div class=\"form-errors-title\">
                    <span>⚠</span>
                    <span>Veuillez corriger les erreurs suivantes :</span>
                </div>
                <ul class=\"form-errors-list\">
                    ";
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "vars", [], "any", false, false, false, 154), "errors", [], "any", false, false, false, 154));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 155
                yield "                        <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 155), "html", null, true);
                yield "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            yield "                </ul>
            </div>
        ";
        }
        // line 160
        yield "
        ";
        // line 161
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

            ";
        // line 164
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "children", [], "any", false, false, false, 164));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 165
            yield "                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 165), "name", [], "any", false, false, false, 165) != "_token")) {
                // line 166
                yield "                    <div class=\"form-group ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 166), "errors", [], "any", false, false, false, 166)) > 0)) {
                    yield "has-error";
                }
                yield "\">
                        ";
                // line 167
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label');
                yield "
                        ";
                // line 168
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                yield "
                        
                        ";
                // line 171
                yield "                        ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 171), "errors", [], "any", false, false, false, 171)) > 0)) {
                    // line 172
                    yield "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 172), "errors", [], "any", false, false, false, 172));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 173
                        yield "                                <div class=\"form-error\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 173), "html", null, true);
                        yield "</div>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 175
                    yield "                        ";
                }
                // line 176
                yield "                    </div>
                ";
            }
            // line 178
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        yield "
            <div class=\"form-actions\">
                <button type=\"submit\" class=\"btn btn-primary\">
                    ";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 182, $this->source); })()), "💾 Enregistrer")) : ("💾 Enregistrer")), "html", null, true);
        yield "
                </button>
                
                <a href=\"";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("back_url", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["back_url"]) || array_key_exists("back_url", $context) ? $context["back_url"] : (function () { throw new RuntimeError('Variable "back_url" does not exist.', 185, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_sport_index"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_sport_index"))), "html", null, true);
        yield "\" 
                   class=\"btn btn-secondary\">
                    ← Retour
                </a>
            </div>

        ";
        // line 191
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), 'form_end');
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
        return "back/sport/form.html.twig";
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
        return array (  356 => 191,  347 => 185,  341 => 182,  336 => 179,  330 => 178,  326 => 176,  323 => 175,  314 => 173,  309 => 172,  306 => 171,  301 => 168,  297 => 167,  290 => 166,  287 => 165,  282 => 164,  277 => 161,  274 => 160,  269 => 157,  260 => 155,  256 => 154,  248 => 148,  245 => 147,  236 => 140,  232 => 138,  219 => 137,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back/sport/base_back.html.twig' %}

{% block stylesheets %}
<style>
    .form-container {
        max-width: 700px;
        margin: 0 auto;
    }

    .glass-card {
        animation: fadeIn 0.5s ease;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(15px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Style pour les champs de formulaire */
    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        color: rgba(255, 255, 255, 0.9);
        font-weight: 500;
        font-size: 14px;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 12px 16px;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 8px;
        color: #fff;
        font-size: 15px;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: rgba(99, 102, 241, 0.5);
        background: rgba(255, 255, 255, 0.08);
        box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
    }

    .form-group input::placeholder {
        color: rgba(255, 255, 255, 0.4);
    }

    /* Erreurs de validation */
    .form-error {
        color: #ef4444;
        font-size: 13px;
        margin-top: 5px;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .form-error::before {
        content: \"⚠\";
    }

    .has-error input,
    .has-error select,
    .has-error textarea {
        border-color: rgba(239, 68, 68, 0.5);
        background: rgba(239, 68, 68, 0.05);
    }

    /* Liste d'erreurs globales */
    .form-errors {
        background: rgba(239, 68, 68, 0.1);
        border: 1px solid rgba(239, 68, 68, 0.3);
        border-radius: 8px;
        padding: 15px;
        margin-bottom: 20px;
    }

    .form-errors-title {
        color: #ef4444;
        font-weight: 600;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .form-errors-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .form-errors-list li {
        color: #fca5a5;
        padding: 5px 0;
        display: flex;
        align-items: start;
        gap: 8px;
    }

    .form-errors-list li::before {
        content: \"•\";
        color: #ef4444;
        font-weight: bold;
    }

    /* Boutons */
    .form-actions {
        display: flex;
        gap: 12px;
        margin-top: 25px;
    }

    .btn {
        flex: 1;
    }
</style>
{% endblock %}

{% block body %}

<h1 class=\"page-title\">
    {{ page_title|default('Formulaire') }}
</h1>

<div class=\"form-container\">
    <div class=\"glass-card\">
        
        {# Affichage des erreurs globales du formulaire #}
        {% if form.vars.errors|length > 0 %}
            <div class=\"form-errors\">
                <div class=\"form-errors-title\">
                    <span>⚠</span>
                    <span>Veuillez corriger les erreurs suivantes :</span>
                </div>
                <ul class=\"form-errors-list\">
                    {% for error in form.vars.errors %}
                        <li>{{ error.message }}</li>
                    {% endfor %}
                </ul>
            </div>
        {% endif %}

        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

            {# Parcourir tous les champs #}
            {% for child in form.children %}
                {% if child.vars.name != '_token' %}
                    <div class=\"form-group {% if child.vars.errors|length > 0 %}has-error{% endif %}\">
                        {{ form_label(child) }}
                        {{ form_widget(child) }}
                        
                        {# Afficher les erreurs du champ #}
                        {% if child.vars.errors|length > 0 %}
                            {% for error in child.vars.errors %}
                                <div class=\"form-error\">{{ error.message }}</div>
                            {% endfor %}
                        {% endif %}
                    </div>
                {% endif %}
            {% endfor %}

            <div class=\"form-actions\">
                <button type=\"submit\" class=\"btn btn-primary\">
                    {{ button_label|default('💾 Enregistrer') }}
                </button>
                
                <a href=\"{{ back_url|default(path('back_sport_index')) }}\" 
                   class=\"btn btn-secondary\">
                    ← Retour
                </a>
            </div>

        {{ form_end(form) }}

    </div>
</div>

{% endblock %}
", "back/sport/form.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\back\\sport\\form.html.twig");
    }
}
