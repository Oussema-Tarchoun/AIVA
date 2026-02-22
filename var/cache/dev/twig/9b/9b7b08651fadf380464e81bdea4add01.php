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

/* front/objectif/_form.html.twig */
class __TwigTemplate_f86800778f0816f285d9c34f977ed11d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/objectif/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/objectif/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
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
        // line 23
        yield "  ";
        $macros["ui"] = $this->macros["ui"] = $this;
        // line 24
        yield "
  

  <div style=\"display:grid; grid-template-columns: 220px 1fr; gap:14px; align-items:start; margin-bottom:14px;\">
    <div style=\"color:#bdbdbd; font-weight:700; font-size:14px; padding-top:10px;\">
      ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29), 'label');
        yield "
    </div>
    <div>
      ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), 'widget', ["attr" => ["style" => "width:100%; min-height:120px; padding:12px 14px; border-radius:12px; border:1px solid #2a2a44; background:#0a0a12; color:#fff; resize:vertical;"]]);
        yield "
      <div style=\"margin-top:6px; color:#ff6b6b; font-size:13px;\">";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "description", [], "any", false, false, false, 33), 'errors');
        yield "</div>
    </div>
  </div>

  ";
        // line 37
        yield $macros["ui"]->getTemplateForMacro("macro_row", $context, 37, $this->getSourceContext())->macro_row(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "type", [], "any", false, false, false, 37)]);
        yield "
  ";
        // line 38
        yield $macros["ui"]->getTemplateForMacro("macro_row", $context, 38, $this->getSourceContext())->macro_row(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "valeurCible", [], "any", false, false, false, 38)]);
        yield "
  ";
        // line 39
        yield $macros["ui"]->getTemplateForMacro("macro_row", $context, 39, $this->getSourceContext())->macro_row(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "dateDebut", [], "any", false, false, false, 39)]);
        yield "
  ";
        // line 40
        yield $macros["ui"]->getTemplateForMacro("macro_row", $context, 40, $this->getSourceContext())->macro_row(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "dateFin", [], "any", false, false, false, 40)]);
        yield "
  ";
        // line 41
        yield $macros["ui"]->getTemplateForMacro("macro_row", $context, 41, $this->getSourceContext())->macro_row(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "statut", [], "any", false, false, false, 41)]);
        yield "

  <div style=\"margin-top:18px; display:flex; gap:12px; justify-content:center; flex-wrap:wrap;\">
    <button class=\"hero-button\" type=\"submit\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 44, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "</button>
    <a class=\"hero-button\" href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_index");
        yield "\" style=\"text-decoration:none;\">Cancel</a>
  </div>
</div>

";
        // line 49
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_end');
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 12
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

            // line 13
            yield "    <div style=\"display:grid; grid-template-columns: 220px 1fr; gap:14px; align-items:center; margin-bottom:14px;\">
      <div style=\"color:#bdbdbd; font-weight:700; font-size:14px;\">
        ";
            // line 15
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 15, $this->source); })()), 'label');
            yield "
      </div>
      <div>
        ";
            // line 18
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 18, $this->source); })()), 'widget', ["attr" => ["style" => "width:100%; padding:12px 14px; border-radius:12px; border:1px solid #2a2a44; background:#0a0a12; color:#fff;"]]);
            yield "
        <div style=\"margin-top:6px; color:#ff6b6b; font-size:13px;\">";
            // line 19
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 19, $this->source); })()), 'errors');
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
        return "front/objectif/_form.html.twig";
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
        return array (  167 => 19,  163 => 18,  157 => 15,  153 => 13,  135 => 12,  122 => 49,  115 => 45,  111 => 44,  105 => 41,  101 => 40,  97 => 39,  93 => 38,  89 => 37,  82 => 33,  78 => 32,  72 => 29,  65 => 24,  62 => 23,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, { attr: { novalidate: 'novalidate' } }) }}

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

  

  <div style=\"display:grid; grid-template-columns: 220px 1fr; gap:14px; align-items:start; margin-bottom:14px;\">
    <div style=\"color:#bdbdbd; font-weight:700; font-size:14px; padding-top:10px;\">
      {{ form_label(form.description) }}
    </div>
    <div>
      {{ form_widget(form.description, { attr: { style: 'width:100%; min-height:120px; padding:12px 14px; border-radius:12px; border:1px solid #2a2a44; background:#0a0a12; color:#fff; resize:vertical;' } }) }}
      <div style=\"margin-top:6px; color:#ff6b6b; font-size:13px;\">{{ form_errors(form.description) }}</div>
    </div>
  </div>

  {{ ui.row(form.type) }}
  {{ ui.row(form.valeurCible) }}
  {{ ui.row(form.dateDebut) }}
  {{ ui.row(form.dateFin) }}
  {{ ui.row(form.statut) }}

  <div style=\"margin-top:18px; display:flex; gap:12px; justify-content:center; flex-wrap:wrap;\">
    <button class=\"hero-button\" type=\"submit\">{{ button_label|default('Save') }}</button>
    <a class=\"hero-button\" href=\"{{ path('front_objectif_index') }}\" style=\"text-decoration:none;\">Cancel</a>
  </div>
</div>

{{ form_end(form) }}
", "front/objectif/_form.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\front\\objectif\\_form.html.twig");
    }
}
