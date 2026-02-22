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

/* back/aliment/_form.html.twig */
class __TwigTemplate_780ba21b00e853db4598594c05d6f305 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/aliment/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/aliment/_form.html.twig"));

        // line 8
        yield "
";
        // line 10
        yield "<div class=\"af-grid\">

    <div class=\"af-field full-width\">
        ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "nom", [], "any", false, false, false, 13), 'label');
        yield "
        ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), 'widget');
        yield "
        ";
        // line 15
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), "vars", [], "any", false, false, false, 15), "errors", [], "any", false, false, false, 15))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "            <ul class=\"af-errors\">
                ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "errors", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 18
                yield "                    <li><i class=\"fa-solid fa-circle-exclamation\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 18), "html", null, true);
                yield "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "            </ul>
        ";
        }
        // line 22
        yield "    </div>

    <div class=\"af-field\">
        ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "quantite", [], "any", false, false, false, 25), 'label');
        yield "
        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "quantite", [], "any", false, false, false, 26), 'widget');
        yield "
        ";
        // line 27
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "quantite", [], "any", false, false, false, 27), "vars", [], "any", false, false, false, 27), "errors", [], "any", false, false, false, 27))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "            <ul class=\"af-errors\">
                ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "quantite", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "errors", [], "any", false, false, false, 29));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 30
                yield "                    <li><i class=\"fa-solid fa-circle-exclamation\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 30), "html", null, true);
                yield "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            yield "            </ul>
        ";
        }
        // line 34
        yield "    </div>

</div>

";
        // line 39
        yield "<div class=\"settings-section\" style=\"margin-top:28px;\">
    <h3 class=\"settings-section-title\" style=\"margin-bottom:6px;\">
        <i class=\"fa-solid fa-chart-pie\" style=\"margin-right:8px;color:#059669;\"></i>
        Macronutriments
    </h3>
    <p style=\"color:var(--text-muted);font-size:13px;margin-bottom:20px;\">
        Valeurs nutritionnelles pour la quantité indiquée (en grammes)
    </p>

    ";
        // line 48
        $context["currentMacro"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "vars", [], "any", false, false, false, 48), "data", [], "any", false, false, false, 48), "macro", [], "any", false, false, false, 48);
        // line 49
        yield "
    <div class=\"af-grid af-macros\">

        ";
        // line 53
        yield "        <div class=\"af-field\">
            <label for=\"macro_proteine\" class=\"af-macro-label\" style=\"color:rgba(5,150,105,.9);\">
                <span class=\"af-macro-dot\" style=\"background:rgba(5,150,105,.9);\"></span>
                Protéines (g)
            </label>
            <input type=\"number\"
                   step=\"0.1\"
                   min=\"0\"
                   max=\"1000\"
                   id=\"macro_proteine\"
                   name=\"macro_proteine\"
                   class=\"af-input\"
                   placeholder=\"Ex: 3.5\"
                   value=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["currentMacro"] ?? null), "proteine", [], "any", true, true, false, 66)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentMacro"]) || array_key_exists("currentMacro", $context) ? $context["currentMacro"] : (function () { throw new RuntimeError('Variable "currentMacro" does not exist.', 66, $this->source); })()), "proteine", [], "any", false, false, false, 66), "")) : ("")), "html", null, true);
        yield "\">
        </div>

        ";
        // line 70
        yield "        <div class=\"af-field\">
            <label for=\"macro_glucide\" class=\"af-macro-label\" style=\"color:rgba(212,165,116,.95);\">
                <span class=\"af-macro-dot\" style=\"background:rgba(212,165,116,.95);\"></span>
                Glucides (g)
            </label>
            <input type=\"number\"
                   step=\"0.1\"
                   min=\"0\"
                   max=\"1000\"
                   id=\"macro_glucide\"
                   name=\"macro_glucide\"
                   class=\"af-input\"
                   placeholder=\"Ex: 23.0\"
                   value=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["currentMacro"] ?? null), "glucide", [], "any", true, true, false, 83)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentMacro"]) || array_key_exists("currentMacro", $context) ? $context["currentMacro"] : (function () { throw new RuntimeError('Variable "currentMacro" does not exist.', 83, $this->source); })()), "glucide", [], "any", false, false, false, 83), "")) : ("")), "html", null, true);
        yield "\">
        </div>

        ";
        // line 87
        yield "        <div class=\"af-field\">
            <label for=\"macro_lipide\" class=\"af-macro-label\" style=\"color:rgba(147,51,234,.9);\">
                <span class=\"af-macro-dot\" style=\"background:rgba(147,51,234,.9);\"></span>
                Lipides (g)
            </label>
            <input type=\"number\"
                   step=\"0.1\"
                   min=\"0\"
                   max=\"1000\"
                   id=\"macro_lipide\"
                   name=\"macro_lipide\"
                   class=\"af-input\"
                   placeholder=\"Ex: 10.0\"
                   value=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["currentMacro"] ?? null), "lipide", [], "any", true, true, false, 100)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentMacro"]) || array_key_exists("currentMacro", $context) ? $context["currentMacro"] : (function () { throw new RuntimeError('Variable "currentMacro" does not exist.', 100, $this->source); })()), "lipide", [], "any", false, false, false, 100), "")) : ("")), "html", null, true);
        yield "\">
        </div>

    </div>
</div>

<style>
/* ── Grid ── */
.af-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
}
.af-field { display: flex; flex-direction: column; gap: 6px; }
.af-field.full-width { grid-column: 1 / -1; }
.af-macros { grid-template-columns: repeat(3, 1fr); }

/* ── Labels ── */
.af-field label,
.af-macro-label {
    font-size: 13px;
    font-weight: 600;
    letter-spacing: .4px;
    color: var(--text-primary, #e2e8f0);
    text-transform: uppercase;
    display: flex;
    align-items: center;
    gap: 8px;
}

/* ── Dot coloré pour macros ── */
.af-macro-dot {
    display: inline-block;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    flex-shrink: 0;
}

/* ── Inputs ── */
.af-input,
.af-field input,
.af-field select,
.af-field textarea {
    width: 100%;
    padding: 11px 16px;
    background: rgba(255,255,255,.06);
    border: 1px solid rgba(255,255,255,.12);
    border-radius: 12px;
    color: var(--text-primary, #e2e8f0);
    font-size: 14px;
    font-family: 'Outfit', sans-serif;
    transition: border-color .25s, box-shadow .25s, background .25s;
    box-sizing: border-box;
}
.af-input::placeholder,
.af-field input::placeholder { color: rgba(255,255,255,.3); }

.af-input:focus,
.af-field input:focus,
.af-field select:focus {
    outline: none;
    border-color: #059669;
    background: rgba(255,255,255,.09);
    box-shadow: 0 0 0 3px rgba(5,150,105,.18);
}

/* ── Erreurs ── */
.af-errors {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    gap: 4px;
}
.af-errors li {
    font-size: 12px;
    color: #f87171;
    display: flex;
    align-items: center;
    gap: 6px;
    padding: 6px 10px;
    background: rgba(239,68,68,.1);
    border-left: 3px solid #ef4444;
    border-radius: 6px;
}

/* ── Responsive ── */
@media (max-width: 768px) {
    .af-grid      { grid-template-columns: 1fr; }
    .af-macros    { grid-template-columns: 1fr; }
    .af-field.full-width { grid-column: 1; }
}
</style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "back/aliment/_form.html.twig";
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
        return array (  202 => 100,  187 => 87,  181 => 83,  166 => 70,  160 => 66,  145 => 53,  140 => 49,  138 => 48,  127 => 39,  121 => 34,  117 => 32,  108 => 30,  104 => 29,  101 => 28,  99 => 27,  95 => 26,  91 => 25,  86 => 22,  82 => 20,  73 => 18,  69 => 17,  66 => 16,  64 => 15,  60 => 14,  56 => 13,  51 => 10,  48 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
  templates/back/aliment/_form.html.twig
  ✅ Validation 100% côté serveur (Symfony)
  ✅ novalidate posé dans form_start (new/edit)
  ✅ Erreurs affichées proprement avec style glass
  ✅ Macros gérées manuellement (hors FormType)
#}

{# ─── Champs Symfony (nom + quantite) ─── #}
<div class=\"af-grid\">

    <div class=\"af-field full-width\">
        {{ form_label(form.nom) }}
        {{ form_widget(form.nom) }}
        {% if form.nom.vars.errors|length %}
            <ul class=\"af-errors\">
                {% for error in form.nom.vars.errors %}
                    <li><i class=\"fa-solid fa-circle-exclamation\"></i> {{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>

    <div class=\"af-field\">
        {{ form_label(form.quantite) }}
        {{ form_widget(form.quantite) }}
        {% if form.quantite.vars.errors|length %}
            <ul class=\"af-errors\">
                {% for error in form.quantite.vars.errors %}
                    <li><i class=\"fa-solid fa-circle-exclamation\"></i> {{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>

</div>

{# ─── Macronutriments (champs manuels hors FormType) ─── #}
<div class=\"settings-section\" style=\"margin-top:28px;\">
    <h3 class=\"settings-section-title\" style=\"margin-bottom:6px;\">
        <i class=\"fa-solid fa-chart-pie\" style=\"margin-right:8px;color:#059669;\"></i>
        Macronutriments
    </h3>
    <p style=\"color:var(--text-muted);font-size:13px;margin-bottom:20px;\">
        Valeurs nutritionnelles pour la quantité indiquée (en grammes)
    </p>

    {% set currentMacro = form.vars.data.macro %}

    <div class=\"af-grid af-macros\">

        {# PROTÉINES #}
        <div class=\"af-field\">
            <label for=\"macro_proteine\" class=\"af-macro-label\" style=\"color:rgba(5,150,105,.9);\">
                <span class=\"af-macro-dot\" style=\"background:rgba(5,150,105,.9);\"></span>
                Protéines (g)
            </label>
            <input type=\"number\"
                   step=\"0.1\"
                   min=\"0\"
                   max=\"1000\"
                   id=\"macro_proteine\"
                   name=\"macro_proteine\"
                   class=\"af-input\"
                   placeholder=\"Ex: 3.5\"
                   value=\"{{ currentMacro.proteine|default('') }}\">
        </div>

        {# GLUCIDES #}
        <div class=\"af-field\">
            <label for=\"macro_glucide\" class=\"af-macro-label\" style=\"color:rgba(212,165,116,.95);\">
                <span class=\"af-macro-dot\" style=\"background:rgba(212,165,116,.95);\"></span>
                Glucides (g)
            </label>
            <input type=\"number\"
                   step=\"0.1\"
                   min=\"0\"
                   max=\"1000\"
                   id=\"macro_glucide\"
                   name=\"macro_glucide\"
                   class=\"af-input\"
                   placeholder=\"Ex: 23.0\"
                   value=\"{{ currentMacro.glucide|default('') }}\">
        </div>

        {# LIPIDES #}
        <div class=\"af-field\">
            <label for=\"macro_lipide\" class=\"af-macro-label\" style=\"color:rgba(147,51,234,.9);\">
                <span class=\"af-macro-dot\" style=\"background:rgba(147,51,234,.9);\"></span>
                Lipides (g)
            </label>
            <input type=\"number\"
                   step=\"0.1\"
                   min=\"0\"
                   max=\"1000\"
                   id=\"macro_lipide\"
                   name=\"macro_lipide\"
                   class=\"af-input\"
                   placeholder=\"Ex: 10.0\"
                   value=\"{{ currentMacro.lipide|default('') }}\">
        </div>

    </div>
</div>

<style>
/* ── Grid ── */
.af-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
}
.af-field { display: flex; flex-direction: column; gap: 6px; }
.af-field.full-width { grid-column: 1 / -1; }
.af-macros { grid-template-columns: repeat(3, 1fr); }

/* ── Labels ── */
.af-field label,
.af-macro-label {
    font-size: 13px;
    font-weight: 600;
    letter-spacing: .4px;
    color: var(--text-primary, #e2e8f0);
    text-transform: uppercase;
    display: flex;
    align-items: center;
    gap: 8px;
}

/* ── Dot coloré pour macros ── */
.af-macro-dot {
    display: inline-block;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    flex-shrink: 0;
}

/* ── Inputs ── */
.af-input,
.af-field input,
.af-field select,
.af-field textarea {
    width: 100%;
    padding: 11px 16px;
    background: rgba(255,255,255,.06);
    border: 1px solid rgba(255,255,255,.12);
    border-radius: 12px;
    color: var(--text-primary, #e2e8f0);
    font-size: 14px;
    font-family: 'Outfit', sans-serif;
    transition: border-color .25s, box-shadow .25s, background .25s;
    box-sizing: border-box;
}
.af-input::placeholder,
.af-field input::placeholder { color: rgba(255,255,255,.3); }

.af-input:focus,
.af-field input:focus,
.af-field select:focus {
    outline: none;
    border-color: #059669;
    background: rgba(255,255,255,.09);
    box-shadow: 0 0 0 3px rgba(5,150,105,.18);
}

/* ── Erreurs ── */
.af-errors {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    gap: 4px;
}
.af-errors li {
    font-size: 12px;
    color: #f87171;
    display: flex;
    align-items: center;
    gap: 6px;
    padding: 6px 10px;
    background: rgba(239,68,68,.1);
    border-left: 3px solid #ef4444;
    border-radius: 6px;
}

/* ── Responsive ── */
@media (max-width: 768px) {
    .af-grid      { grid-template-columns: 1fr; }
    .af-macros    { grid-template-columns: 1fr; }
    .af-field.full-width { grid-column: 1; }
}
</style>
", "back/aliment/_form.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\back\\aliment\\_form.html.twig");
    }
}
