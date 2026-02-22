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

/* back/repas/_form.html.twig */
class __TwigTemplate_9afdc48d4a99d4fb8812a6b3cf2637dc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/repas/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/repas/_form.html.twig"));

        // line 9
        yield "
";
        // line 11
        yield "<div class=\"repas-form-grid\">

    ";
        // line 14
        yield "    <div class=\"rfg-field full-width\">
        ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), 'label');
        yield "
        ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), 'widget');
        yield "
        ";
        // line 17
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "errors", [], "any", false, false, false, 17))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "            <ul class=\"rfg-errors\">
                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19), "vars", [], "any", false, false, false, 19), "errors", [], "any", false, false, false, 19));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 20
                yield "                    <li><i class=\"fa-solid fa-circle-exclamation\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 20), "html", null, true);
                yield "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            yield "            </ul>
        ";
        }
        // line 24
        yield "    </div>

    ";
        // line 27
        yield "    <div class=\"rfg-field\">
        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "type", [], "any", false, false, false, 28), 'label');
        yield "
        ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "type", [], "any", false, false, false, 29), 'widget');
        yield "
        ";
        // line 30
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "type", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "errors", [], "any", false, false, false, 30))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "            <ul class=\"rfg-errors\">
                ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "type", [], "any", false, false, false, 32), "vars", [], "any", false, false, false, 32), "errors", [], "any", false, false, false, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 33
                yield "                    <li><i class=\"fa-solid fa-circle-exclamation\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 33), "html", null, true);
                yield "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            yield "            </ul>
        ";
        }
        // line 37
        yield "    </div>

    ";
        // line 40
        yield "    <div class=\"rfg-field\">
        ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "date", [], "any", false, false, false, 41), 'label');
        yield "
        <div class=\"rfg-date-wrapper\">
            <i class=\"fa-regular fa-calendar rfg-date-icon\"></i>
            ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "date", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "settings-input flatpickr-input", "placeholder" => "JJ/MM/AAAA", "autocomplete" => "off", "data-flatpickr" => "true", "readonly" => "readonly"]]);
        // line 52
        yield "
        </div>
        ";
        // line 54
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "date", [], "any", false, false, false, 54), "vars", [], "any", false, false, false, 54), "errors", [], "any", false, false, false, 54))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 55
            yield "            <ul class=\"rfg-errors\">
                ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "date", [], "any", false, false, false, 56), "vars", [], "any", false, false, false, 56), "errors", [], "any", false, false, false, 56));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 57
                yield "                    <li><i class=\"fa-solid fa-circle-exclamation\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 57), "html", null, true);
                yield "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            yield "            </ul>
        ";
        }
        // line 61
        yield "    </div>

    ";
        // line 64
        yield "    <div class=\"rfg-field\">
        ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "heure", [], "any", false, false, false, 65), 'label');
        yield "
        ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "heure", [], "any", false, false, false, 66), 'widget');
        yield "
        ";
        // line 67
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "heure", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "errors", [], "any", false, false, false, 67))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 68
            yield "            <ul class=\"rfg-errors\">
                ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "heure", [], "any", false, false, false, 69), "vars", [], "any", false, false, false, 69), "errors", [], "any", false, false, false, 69));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 70
                yield "                    <li><i class=\"fa-solid fa-circle-exclamation\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 70), "html", null, true);
                yield "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            yield "            </ul>
        ";
        }
        // line 74
        yield "    </div>

    ";
        // line 77
        yield "    <div class=\"rfg-field\">
        ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "calories", [], "any", false, false, false, 78), 'label');
        yield "
        ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "calories", [], "any", false, false, false, 79), 'widget');
        yield "
        ";
        // line 80
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "calories", [], "any", false, false, false, 80), "vars", [], "any", false, false, false, 80), "errors", [], "any", false, false, false, 80))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 81
            yield "            <ul class=\"rfg-errors\">
                ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "calories", [], "any", false, false, false, 82), "vars", [], "any", false, false, false, 82), "errors", [], "any", false, false, false, 82));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 83
                yield "                    <li><i class=\"fa-solid fa-circle-exclamation\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 83), "html", null, true);
                yield "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            yield "            </ul>
        ";
        }
        // line 87
        yield "    </div>

    ";
        // line 90
        yield "    <div class=\"rfg-field full-width\">
        ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "description", [], "any", false, false, false, 91), 'label');
        yield "
        ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "description", [], "any", false, false, false, 92), 'widget');
        yield "
        ";
        // line 93
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "description", [], "any", false, false, false, 93), "vars", [], "any", false, false, false, 93), "errors", [], "any", false, false, false, 93))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 94
            yield "            <ul class=\"rfg-errors\">
                ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "description", [], "any", false, false, false, 95), "vars", [], "any", false, false, false, 95), "errors", [], "any", false, false, false, 95));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 96
                yield "                    <li><i class=\"fa-solid fa-circle-exclamation\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 96), "html", null, true);
                yield "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            yield "            </ul>
        ";
        }
        // line 100
        yield "    </div>

</div>

";
        // line 105
        yield "<style>
/* ── Grid ── */
.repas-form-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
}
.rfg-field { display: flex; flex-direction: column; gap: 6px; }
.rfg-field.full-width { grid-column: 1 / -1; }

/* ── Labels ── */
.rfg-field label {
    font-size: 13px;
    font-weight: 600;
    letter-spacing: .4px;
    color: var(--text-primary, #e2e8f0);
    text-transform: uppercase;
}

/* ── Inputs / select / textarea partagés ── */
.rfg-field input,
.rfg-field select,
.rfg-field textarea {
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
.rfg-field input::placeholder,
.rfg-field textarea::placeholder { color: rgba(255,255,255,.35); }

.rfg-field input:focus,
.rfg-field select:focus,
.rfg-field textarea:focus {
    outline: none;
    border-color: #059669;
    background: rgba(255,255,255,.09);
    box-shadow: 0 0 0 3px rgba(5,150,105,.18);
}

/* Select arrow */
.rfg-field select {
    appearance: none;
    -webkit-appearance: none;
    background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24' fill='none' stroke='%2394a3b8' stroke-width='2'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E\");
    background-repeat: no-repeat;
    background-position: right 14px center;
    padding-right: 38px;
    cursor: pointer;
}
.rfg-field select option { background: #1e293b; color: #e2e8f0; }

/* Textarea */
.rfg-field textarea { resize: vertical; min-height: 100px; }

/* ── Date wrapper (icône calendrier) ── */
.rfg-date-wrapper { position: relative; }
.rfg-date-icon {
    position: absolute;
    left: 14px;
    top: 50%;
    transform: translateY(-50%);
    color: rgba(255,255,255,.4);
    font-size: 14px;
    pointer-events: none;
    z-index: 1;
}
.rfg-date-wrapper input { padding-left: 40px; cursor: pointer; }

/* ── Erreurs ── */
.rfg-errors {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    gap: 4px;
}
.rfg-errors li {
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

/* ─── Flatpickr overrides (thème dark glass) ─── */
.flatpickr-calendar {
    background: #1e293b !important;
    border: 1px solid rgba(255,255,255,.12) !important;
    border-radius: 16px !important;
    box-shadow: 0 20px 60px rgba(0,0,0,.5) !important;
    font-family: 'Outfit', sans-serif !important;
}
.flatpickr-months .flatpickr-month,
.flatpickr-weekdays,
span.flatpickr-weekday {
    background: transparent !important;
    color: #94a3b8 !important;
}
.flatpickr-day { color: #e2e8f0 !important; border-radius: 8px !important; }
.flatpickr-day:hover { background: rgba(5,150,105,.25) !important; border-color: transparent !important; }
.flatpickr-day.selected,
.flatpickr-day.selected:hover {
    background: #059669 !important;
    border-color: #059669 !important;
    color: #fff !important;
}
.flatpickr-day.today { border-color: #059669 !important; }
.flatpickr-day.flatpickr-disabled,
.flatpickr-day.flatpickr-disabled:hover { color: rgba(255,255,255,.2) !important; }
.flatpickr-prev-month svg,
.flatpickr-next-month svg { fill: #94a3b8 !important; }
.flatpickr-current-month .flatpickr-monthDropdown-months,
.flatpickr-current-month input.cur-year {
    background: transparent !important;
    color: #e2e8f0 !important;
    font-family: 'Outfit', sans-serif !important;
}

/* ── Responsive ── */
@media (max-width: 640px) {
    .repas-form-grid { grid-template-columns: 1fr; }
    .rfg-field.full-width { grid-column: 1; }
}
</style>

";
        // line 243
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 243, $this->source); })()), "request", [], "any", false, false, false, 243), "attributes", [], "any", false, false, false, 243), "get", ["flatpickr_loaded"], "method", false, false, false, 243)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 244
            yield "<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
<script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/fr.js\"></script>
";
        }
        // line 248
        yield "
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Cherche tous les inputs marqués data-flatpickr=\"true\"
    document.querySelectorAll('[data-flatpickr=\"true\"]').forEach(function (el) {
        flatpickr(el, {
            locale: 'fr',
            dateFormat: 'd/m/Y',       // format affiché à l'utilisateur
            altInput: false,
            allowInput: false,          // saisie clavier désactivée → calendrier uniquement
            disableMobile: true,        // force Flatpickr même sur mobile
            animate: true,
        });
    });
});
</script>
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
        return "back/repas/_form.html.twig";
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
        return array (  430 => 248,  424 => 244,  422 => 243,  283 => 105,  277 => 100,  273 => 98,  264 => 96,  260 => 95,  257 => 94,  255 => 93,  251 => 92,  247 => 91,  244 => 90,  240 => 87,  236 => 85,  227 => 83,  223 => 82,  220 => 81,  218 => 80,  214 => 79,  210 => 78,  207 => 77,  203 => 74,  199 => 72,  190 => 70,  186 => 69,  183 => 68,  181 => 67,  177 => 66,  173 => 65,  170 => 64,  166 => 61,  162 => 59,  153 => 57,  149 => 56,  146 => 55,  144 => 54,  140 => 52,  138 => 44,  132 => 41,  129 => 40,  125 => 37,  121 => 35,  112 => 33,  108 => 32,  105 => 31,  103 => 30,  99 => 29,  95 => 28,  92 => 27,  88 => 24,  84 => 22,  75 => 20,  71 => 19,  68 => 18,  66 => 17,  62 => 16,  58 => 15,  55 => 14,  51 => 11,  48 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
  templates/back/repas/_form.html.twig
  ─────────────────────────────────────
  • Validation 100 % Symfony (côté serveur)
  • novalidate est posé dans form_start (edit/new)
  • Flatpickr pour le champ date (calendrier moderne)
  • Design cohérent avec le glass-admin dashboard
#}

{# ─── Champs principaux ─── #}
<div class=\"repas-form-grid\">

    {# NOM #}
    <div class=\"rfg-field full-width\">
        {{ form_label(form.nom) }}
        {{ form_widget(form.nom) }}
        {% if form.nom.vars.errors|length %}
            <ul class=\"rfg-errors\">
                {% for error in form.nom.vars.errors %}
                    <li><i class=\"fa-solid fa-circle-exclamation\"></i> {{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>

    {# TYPE #}
    <div class=\"rfg-field\">
        {{ form_label(form.type) }}
        {{ form_widget(form.type) }}
        {% if form.type.vars.errors|length %}
            <ul class=\"rfg-errors\">
                {% for error in form.type.vars.errors %}
                    <li><i class=\"fa-solid fa-circle-exclamation\"></i> {{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>

    {# DATE (Flatpickr) #}
    <div class=\"rfg-field\">
        {{ form_label(form.date) }}
        <div class=\"rfg-date-wrapper\">
            <i class=\"fa-regular fa-calendar rfg-date-icon\"></i>
            {{ form_widget(form.date, {
                'attr': {
                    'class':          'settings-input flatpickr-input',
                    'placeholder':    'JJ/MM/AAAA',
                    'autocomplete':   'off',
                    'data-flatpickr': 'true',
                    'readonly':       'readonly'
                }
            }) }}
        </div>
        {% if form.date.vars.errors|length %}
            <ul class=\"rfg-errors\">
                {% for error in form.date.vars.errors %}
                    <li><i class=\"fa-solid fa-circle-exclamation\"></i> {{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>

    {# HEURE #}
    <div class=\"rfg-field\">
        {{ form_label(form.heure) }}
        {{ form_widget(form.heure) }}
        {% if form.heure.vars.errors|length %}
            <ul class=\"rfg-errors\">
                {% for error in form.heure.vars.errors %}
                    <li><i class=\"fa-solid fa-circle-exclamation\"></i> {{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>

    {# CALORIES #}
    <div class=\"rfg-field\">
        {{ form_label(form.calories) }}
        {{ form_widget(form.calories) }}
        {% if form.calories.vars.errors|length %}
            <ul class=\"rfg-errors\">
                {% for error in form.calories.vars.errors %}
                    <li><i class=\"fa-solid fa-circle-exclamation\"></i> {{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>

    {# DESCRIPTION #}
    <div class=\"rfg-field full-width\">
        {{ form_label(form.description) }}
        {{ form_widget(form.description) }}
        {% if form.description.vars.errors|length %}
            <ul class=\"rfg-errors\">
                {% for error in form.description.vars.errors %}
                    <li><i class=\"fa-solid fa-circle-exclamation\"></i> {{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>

</div>

{# ─── Styles ─── #}
<style>
/* ── Grid ── */
.repas-form-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
}
.rfg-field { display: flex; flex-direction: column; gap: 6px; }
.rfg-field.full-width { grid-column: 1 / -1; }

/* ── Labels ── */
.rfg-field label {
    font-size: 13px;
    font-weight: 600;
    letter-spacing: .4px;
    color: var(--text-primary, #e2e8f0);
    text-transform: uppercase;
}

/* ── Inputs / select / textarea partagés ── */
.rfg-field input,
.rfg-field select,
.rfg-field textarea {
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
.rfg-field input::placeholder,
.rfg-field textarea::placeholder { color: rgba(255,255,255,.35); }

.rfg-field input:focus,
.rfg-field select:focus,
.rfg-field textarea:focus {
    outline: none;
    border-color: #059669;
    background: rgba(255,255,255,.09);
    box-shadow: 0 0 0 3px rgba(5,150,105,.18);
}

/* Select arrow */
.rfg-field select {
    appearance: none;
    -webkit-appearance: none;
    background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24' fill='none' stroke='%2394a3b8' stroke-width='2'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E\");
    background-repeat: no-repeat;
    background-position: right 14px center;
    padding-right: 38px;
    cursor: pointer;
}
.rfg-field select option { background: #1e293b; color: #e2e8f0; }

/* Textarea */
.rfg-field textarea { resize: vertical; min-height: 100px; }

/* ── Date wrapper (icône calendrier) ── */
.rfg-date-wrapper { position: relative; }
.rfg-date-icon {
    position: absolute;
    left: 14px;
    top: 50%;
    transform: translateY(-50%);
    color: rgba(255,255,255,.4);
    font-size: 14px;
    pointer-events: none;
    z-index: 1;
}
.rfg-date-wrapper input { padding-left: 40px; cursor: pointer; }

/* ── Erreurs ── */
.rfg-errors {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    gap: 4px;
}
.rfg-errors li {
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

/* ─── Flatpickr overrides (thème dark glass) ─── */
.flatpickr-calendar {
    background: #1e293b !important;
    border: 1px solid rgba(255,255,255,.12) !important;
    border-radius: 16px !important;
    box-shadow: 0 20px 60px rgba(0,0,0,.5) !important;
    font-family: 'Outfit', sans-serif !important;
}
.flatpickr-months .flatpickr-month,
.flatpickr-weekdays,
span.flatpickr-weekday {
    background: transparent !important;
    color: #94a3b8 !important;
}
.flatpickr-day { color: #e2e8f0 !important; border-radius: 8px !important; }
.flatpickr-day:hover { background: rgba(5,150,105,.25) !important; border-color: transparent !important; }
.flatpickr-day.selected,
.flatpickr-day.selected:hover {
    background: #059669 !important;
    border-color: #059669 !important;
    color: #fff !important;
}
.flatpickr-day.today { border-color: #059669 !important; }
.flatpickr-day.flatpickr-disabled,
.flatpickr-day.flatpickr-disabled:hover { color: rgba(255,255,255,.2) !important; }
.flatpickr-prev-month svg,
.flatpickr-next-month svg { fill: #94a3b8 !important; }
.flatpickr-current-month .flatpickr-monthDropdown-months,
.flatpickr-current-month input.cur-year {
    background: transparent !important;
    color: #e2e8f0 !important;
    font-family: 'Outfit', sans-serif !important;
}

/* ── Responsive ── */
@media (max-width: 640px) {
    .repas-form-grid { grid-template-columns: 1fr; }
    .rfg-field.full-width { grid-column: 1; }
}
</style>

{# ─── Flatpickr (CDN) — chargé une seule fois grâce à la vérification JS ─── #}
{% if not app.request.attributes.get('flatpickr_loaded') %}
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
<script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/fr.js\"></script>
{% endif %}

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Cherche tous les inputs marqués data-flatpickr=\"true\"
    document.querySelectorAll('[data-flatpickr=\"true\"]').forEach(function (el) {
        flatpickr(el, {
            locale: 'fr',
            dateFormat: 'd/m/Y',       // format affiché à l'utilisateur
            altInput: false,
            allowInput: false,          // saisie clavier désactivée → calendrier uniquement
            disableMobile: true,        // force Flatpickr même sur mobile
            animate: true,
        });
    });
});
</script>
", "back/repas/_form.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\back\\repas\\_form.html.twig");
    }
}
