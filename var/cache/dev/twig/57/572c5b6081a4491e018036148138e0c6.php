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

/* back/objectif/objectif_show.html.twig */
class __TwigTemplate_3d6f512db38b2d32b5c1cfc63a9d18a2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/objectif/objectif_show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/objectif/objectif_show.html.twig"));

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

        yield "Détails Objectif";
        
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
    .page { padding: 28px; max-width: 950px; margin: 0 auto; }
    .header { display:flex; justify-content:space-between; align-items:flex-start; gap:16px; flex-wrap:wrap; margin-bottom: 18px; }
    .header h1 { margin:0; font-size: 36px; font-weight: 900; color: rgba(255,255,255,0.95); }
    .card { background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.10); border-radius: 20px; padding: 22px; box-shadow: 0 10px 30px rgba(0,0,0,0.20); }
    .row { display:flex; justify-content:space-between; gap:14px; padding: 12px 0; border-bottom: 1px solid rgba(255,255,255,0.08); }
    .row:last-child{ border-bottom:none; }
    .k { color: rgba(255,255,255,0.65); font-weight: 800; }
    .v { color: rgba(255,255,255,0.92); font-weight: 700; text-align:right; }
    .badge { display:inline-flex; align-items:center; gap:8px; padding: 7px 12px; border-radius: 999px; font-weight: 800; font-size: 12px; border: 1px solid rgba(255,255,255,0.14); background: rgba(255,255,255,0.06); color: rgba(255,255,255,0.90); }
    .actions { margin-top: 18px; display:flex; gap:12px; flex-wrap:wrap; }
    .btn { flex:1; border: 1px solid rgba(255,255,255,0.12); background: rgba(255,255,255,0.07); color: rgba(255,255,255,0.92); padding: 14px 16px; border-radius: 14px; cursor:pointer; text-decoration:none; font-weight: 800; display:inline-flex; align-items:center; justify-content:center; gap:10px; transition: .25s ease; }
    .btn:hover { transform: translateY(-2px); background: rgba(255,255,255,0.1); }
    .btn-primary { background: rgba(102,126,234,0.20); border-color: rgba(102,126,234,0.35); }
    .btn-danger { background: rgba(239,68,68,0.12); border-color: rgba(239,68,68,0.25); }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 24
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

        // line 25
        yield "<div class=\"page\">
    <div class=\"header\">
        <div>
            <h1>👁️ Détails Objectif</h1>
            <div style=\"color:rgba(255,255,255,0.65); font-weight:700;\">#";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29), "html", null, true);
        yield "</div>
        </div>
        <a class=\"btn\" style=\"flex:0 0 auto;\" href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_index");
        yield "\">← Retour</a>
    </div>

    <div class=\"card\">
        <div class=\"row\"><div class=\"k\">Description</div><div class=\"v\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 35, $this->source); })()), "description", [], "any", false, false, false, 35), "html", null, true);
        yield "</div></div>

        ";
        // line 38
        yield "        <div class=\"row\">
            <div class=\"k\">Utilisateur</div>
            <div class=\"v\"><span class=\"badge\">👤 ";
        // line 40
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40), "html", null, true)) : ("—"));
        yield "</span></div>
        </div>

        <div class=\"row\"><div class=\"k\">Type</div><div class=\"v\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 43, $this->source); })()), "type", [], "any", false, false, false, 43), "html", null, true);
        yield "</div></div>
        <div class=\"row\"><div class=\"k\">Valeur cible</div><div class=\"v\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 44, $this->source); })()), "valeurCible", [], "any", false, false, false, 44), "html", null, true);
        yield "</div></div>
        <div class=\"row\"><div class=\"k\">Date début</div><div class=\"v\">";
        // line 45
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 45, $this->source); })()), "dateDebut", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 45, $this->source); })()), "dateDebut", [], "any", false, false, false, 45), "d/m/Y"), "html", null, true)) : ("-"));
        yield "</div></div>
        <div class=\"row\"><div class=\"k\">Date fin</div><div class=\"v\">";
        // line 46
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 46, $this->source); })()), "dateFin", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 46, $this->source); })()), "dateFin", [], "any", false, false, false, 46), "d/m/Y"), "html", null, true)) : ("-"));
        yield "</div></div>
        <div class=\"row\"><div class=\"k\">Statut</div><div class=\"v\"><span class=\"badge\">🎯 ";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 47, $this->source); })()), "statut", [], "any", false, false, false, 47), "html", null, true);
        yield "</span></div></div>

        <div class=\"actions\">
            <a class=\"btn btn-primary\" href=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50)]), "html", null, true);
        yield "\">✏️ Modifier</a>
            <form method=\"post\" action=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51)]), "html", null, true);
        yield "\"
                  onsubmit=\"return confirm('Supprimer cet objectif ?');\" style=\"flex:1;\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53))), "html", null, true);
        yield "\">
                <button class=\"btn btn-danger\" type=\"submit\">🗑️ Supprimer</button>
            </form>
        </div>
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
        return "back/objectif/objectif_show.html.twig";
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
        return array (  207 => 53,  202 => 51,  198 => 50,  192 => 47,  188 => 46,  184 => 45,  180 => 44,  176 => 43,  170 => 40,  166 => 38,  161 => 35,  154 => 31,  149 => 29,  143 => 25,  130 => 24,  101 => 5,  88 => 4,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back/sport/base_back.html.twig' %}
{% block title %}Détails Objectif{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .page { padding: 28px; max-width: 950px; margin: 0 auto; }
    .header { display:flex; justify-content:space-between; align-items:flex-start; gap:16px; flex-wrap:wrap; margin-bottom: 18px; }
    .header h1 { margin:0; font-size: 36px; font-weight: 900; color: rgba(255,255,255,0.95); }
    .card { background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.10); border-radius: 20px; padding: 22px; box-shadow: 0 10px 30px rgba(0,0,0,0.20); }
    .row { display:flex; justify-content:space-between; gap:14px; padding: 12px 0; border-bottom: 1px solid rgba(255,255,255,0.08); }
    .row:last-child{ border-bottom:none; }
    .k { color: rgba(255,255,255,0.65); font-weight: 800; }
    .v { color: rgba(255,255,255,0.92); font-weight: 700; text-align:right; }
    .badge { display:inline-flex; align-items:center; gap:8px; padding: 7px 12px; border-radius: 999px; font-weight: 800; font-size: 12px; border: 1px solid rgba(255,255,255,0.14); background: rgba(255,255,255,0.06); color: rgba(255,255,255,0.90); }
    .actions { margin-top: 18px; display:flex; gap:12px; flex-wrap:wrap; }
    .btn { flex:1; border: 1px solid rgba(255,255,255,0.12); background: rgba(255,255,255,0.07); color: rgba(255,255,255,0.92); padding: 14px 16px; border-radius: 14px; cursor:pointer; text-decoration:none; font-weight: 800; display:inline-flex; align-items:center; justify-content:center; gap:10px; transition: .25s ease; }
    .btn:hover { transform: translateY(-2px); background: rgba(255,255,255,0.1); }
    .btn-primary { background: rgba(102,126,234,0.20); border-color: rgba(102,126,234,0.35); }
    .btn-danger { background: rgba(239,68,68,0.12); border-color: rgba(239,68,68,0.25); }
</style>
{% endblock %}

{% block body %}
<div class=\"page\">
    <div class=\"header\">
        <div>
            <h1>👁️ Détails Objectif</h1>
            <div style=\"color:rgba(255,255,255,0.65); font-weight:700;\">#{{ objectif.id }}</div>
        </div>
        <a class=\"btn\" style=\"flex:0 0 auto;\" href=\"{{ path('app_objectif_index') }}\">← Retour</a>
    </div>

    <div class=\"card\">
        <div class=\"row\"><div class=\"k\">Description</div><div class=\"v\">{{ objectif.description }}</div></div>

        {# ✅ NEW: Utilisateur #}
        <div class=\"row\">
            <div class=\"k\">Utilisateur</div>
            <div class=\"v\"><span class=\"badge\">👤 {{ objectif.user ? objectif.user.name : '—' }}</span></div>
        </div>

        <div class=\"row\"><div class=\"k\">Type</div><div class=\"v\">{{ objectif.type }}</div></div>
        <div class=\"row\"><div class=\"k\">Valeur cible</div><div class=\"v\">{{ objectif.valeurCible }}</div></div>
        <div class=\"row\"><div class=\"k\">Date début</div><div class=\"v\">{{ objectif.dateDebut ? objectif.dateDebut|date('d/m/Y') : '-' }}</div></div>
        <div class=\"row\"><div class=\"k\">Date fin</div><div class=\"v\">{{ objectif.dateFin ? objectif.dateFin|date('d/m/Y') : '-' }}</div></div>
        <div class=\"row\"><div class=\"k\">Statut</div><div class=\"v\"><span class=\"badge\">🎯 {{ objectif.statut }}</span></div></div>

        <div class=\"actions\">
            <a class=\"btn btn-primary\" href=\"{{ path('app_objectif_edit', {id: objectif.id}) }}\">✏️ Modifier</a>
            <form method=\"post\" action=\"{{ path('app_objectif_delete', {id: objectif.id}) }}\"
                  onsubmit=\"return confirm('Supprimer cet objectif ?');\" style=\"flex:1;\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ objectif.id) }}\">
                <button class=\"btn btn-danger\" type=\"submit\">🗑️ Supprimer</button>
            </form>
        </div>
    </div>
</div>
{% endblock %}
", "back/objectif/objectif_show.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\back\\objectif\\objectif_show.html.twig");
    }
}
