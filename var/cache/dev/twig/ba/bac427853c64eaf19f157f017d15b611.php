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

/* front/activite/_form.html.twig */
class __TwigTemplate_5c5f544f95069be79ec0445f5c708840 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/activite/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/activite/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        // line 3
        yield "

<div style=\"
  width: min(850px, 95%);
  margin: 18px auto 0;
  border: 1px solid #1a1a2e;
  border-radius: 16px;
  background: rgba(255,255,255,0.02);
  padding: 22px;
\">

  ";
        // line 25
        yield "  ";
        $macros["ui"] = $this->macros["ui"] = $this;
        // line 26
        yield "
  ";
        // line 27
        yield $macros["ui"]->getTemplateForMacro("macro_row", $context, 27, $this->getSourceContext())->macro_row(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "type", [], "any", false, false, false, 27)]);
        yield "
  ";
        // line 28
        yield $macros["ui"]->getTemplateForMacro("macro_row", $context, 28, $this->getSourceContext())->macro_row(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "duree", [], "any", false, false, false, 28)]);
        yield "
  ";
        // line 29
        yield $macros["ui"]->getTemplateForMacro("macro_row", $context, 29, $this->getSourceContext())->macro_row(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "caloriesBrulees", [], "any", false, false, false, 29)]);
        yield "
  ";
        // line 30
        yield $macros["ui"]->getTemplateForMacro("macro_row", $context, 30, $this->getSourceContext())->macro_row(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "date", [], "any", false, false, false, 30)]);
        yield "
  ";
        // line 31
        yield $macros["ui"]->getTemplateForMacro("macro_row", $context, 31, $this->getSourceContext())->macro_row(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "intensite", [], "any", false, false, false, 31)]);
        yield "
  ";
        // line 32
        yield $macros["ui"]->getTemplateForMacro("macro_row", $context, 32, $this->getSourceContext())->macro_row(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "objectif", [], "any", false, false, false, 32)]);
        yield "

  <div style=\"margin-top:18px; display:flex; gap:12px; justify-content:center; flex-wrap:wrap;\">
    <button class=\"hero-button\" type=\"submit\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 35, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "</button>
   <a class=\"hero-button\" href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_index");
        yield "\" style=\"text-decoration:none;\">Cancel</a>
  </div>
</div>

";
        // line 40
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_end');
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 14
    public function macro_row($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "row"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "row"));

            // line 15
            yield "    <div style=\"display:grid; grid-template-columns: 220px 1fr; gap:14px; align-items:center; margin-bottom:14px;\">
      <div style=\"color:#bdbdbd; font-weight:700; font-size:14px;\">
        ";
            // line 17
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 17, $this->source); })()), 'label');
            yield "
      </div>
      <div>
        ";
            // line 20
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 20, $this->source); })()), 'widget', ["attr" => ["style" => "width:100%; padding:12px 14px; border-radius:12px; border:1px solid #2a2a44; background:#0a0a12; color:#fff;"]]);
            yield "
        <div style=\"margin-top:6px; color:#ff6b6b; font-size:13px;\">";
            // line 21
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 21, $this->source); })()), 'errors');
            yield "</div>
      </div>
    </div>
  ";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/activite/_form.html.twig";
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
        return array (  151 => 21,  147 => 20,  141 => 17,  137 => 15,  119 => 14,  106 => 40,  99 => 36,  95 => 35,  89 => 32,  85 => 31,  81 => 30,  77 => 29,  73 => 28,  69 => 27,  66 => 26,  63 => 25,  50 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {
  attr: { novalidate: 'novalidate' }
}) }}

<div style=\"
  width: min(850px, 95%);
  margin: 18px auto 0;
  border: 1px solid #1a1a2e;
  border-radius: 16px;
  background: rgba(255,255,255,0.02);
  padding: 22px;
\">

  {% macro row(field) %}
    <div style=\"display:grid; grid-template-columns: 220px 1fr; gap:14px; align-items:center; margin-bottom:14px;\">
      <div style=\"color:#bdbdbd; font-weight:700; font-size:14px;\">
        {{ form_label(field) }}
      </div>
      <div>
        {{ form_widget(field, { attr: { style: 'width:100%; padding:12px 14px; border-radius:12px; border:1px solid #2a2a44; background:#0a0a12; color:#fff;' } }) }}
        <div style=\"margin-top:6px; color:#ff6b6b; font-size:13px;\">{{ form_errors(field) }}</div>
      </div>
    </div>
  {% endmacro %}
  {% import _self as ui %}

  {{ ui.row(form.type) }}
  {{ ui.row(form.duree) }}
  {{ ui.row(form.caloriesBrulees) }}
  {{ ui.row(form.date) }}
  {{ ui.row(form.intensite) }}
  {{ ui.row(form.objectif) }}

  <div style=\"margin-top:18px; display:flex; gap:12px; justify-content:center; flex-wrap:wrap;\">
    <button class=\"hero-button\" type=\"submit\">{{ button_label|default('Save') }}</button>
   <a class=\"hero-button\" href=\"{{ path('front_objectif_index') }}\" style=\"text-decoration:none;\">Cancel</a>
  </div>
</div>

{{ form_end(form) }}
", "front/activite/_form.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\front\\activite\\_form.html.twig");
    }
}
