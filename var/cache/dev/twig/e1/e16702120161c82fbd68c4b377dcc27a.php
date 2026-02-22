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

/* back/sport/index.html.twig */
class __TwigTemplate_145202c142e1c69a21f5e40d8ae65226 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/sport/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/sport/index.html.twig"));

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

        yield "Gestion des Activités";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        $context["currentSort"] = ((array_key_exists("sort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 6, $this->source); })()), "id")) : ("id"));
        // line 7
        $context["currentDir"] = ((array_key_exists("dir", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["dir"]) || array_key_exists("dir", $context) ? $context["dir"] : (function () { throw new RuntimeError('Variable "dir" does not exist.', 7, $this->source); })()), "desc")) : ("desc"));
        // line 8
        yield "
<div class=\"page-header\">
    <div class=\"page-title\">🏃 Gestion des Activités</div>
    <div class=\"page-breadcrumb\">
        <a href=\"#\">Dashboard</a> <span>/</span> <span>Activités</span>
    </div>
</div>

";
        // line 17
        yield "<div class=\"stats-grid\">
    <div class=\"glass-card stat-card glass-card-3d\">
        <div class=\"stat-card-inner\">
            <div class=\"stat-info\">
                <h3>Total activités</h3>
                <div class=\"stat-value\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["activites"]) || array_key_exists("activites", $context) ? $context["activites"] : (function () { throw new RuntimeError('Variable "activites" does not exist.', 22, $this->source); })())), "html", null, true);
        yield "</div>
            </div>
            <div class=\"stat-icon cyan\">🏃</div>
        </div>
    </div>

    <div class=\"glass-card stat-card glass-card-3d\">
        <div class=\"stat-card-inner\">
            <div class=\"stat-info\">
                <h3>Calories totales</h3>
                <div class=\"stat-value\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::reduce($this->env, (isset($context["activites"]) || array_key_exists("activites", $context) ? $context["activites"] : (function () { throw new RuntimeError('Variable "activites" does not exist.', 32, $this->source); })()), function ($__carry__, $__a__) use ($context, $macros) { $context["carry"] = $__carry__; $context["a"] = $__a__; return ((isset($context["carry"]) || array_key_exists("carry", $context) ? $context["carry"] : (function () { throw new RuntimeError('Variable "carry" does not exist.', 32, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 32, $this->source); })()), "caloriesBrulees", [], "any", false, false, false, 32)); }, 0), "html", null, true);
        yield "</div>
            </div>
            <div class=\"stat-icon magenta\">🔥</div>
        </div>
    </div>

    <div class=\"glass-card stat-card glass-card-3d\">
        <div class=\"stat-card-inner\">
            <div class=\"stat-info\">
                <h3>Durée totale (min)</h3>
                <div class=\"stat-value\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::reduce($this->env, (isset($context["activites"]) || array_key_exists("activites", $context) ? $context["activites"] : (function () { throw new RuntimeError('Variable "activites" does not exist.', 42, $this->source); })()), function ($__carry__, $__a__) use ($context, $macros) { $context["carry"] = $__carry__; $context["a"] = $__a__; return ((isset($context["carry"]) || array_key_exists("carry", $context) ? $context["carry"] : (function () { throw new RuntimeError('Variable "carry" does not exist.', 42, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 42, $this->source); })()), "duree", [], "any", false, false, false, 42)); }, 0), "html", null, true);
        yield "</div>
            </div>
            <div class=\"stat-icon success\">⏱</div>
        </div>
    </div>

    <div class=\"glass-card stat-card glass-card-3d\">
        <div class=\"stat-card-inner\">
            <div class=\"stat-info\">
                <h3>Intensité élevée</h3>
                <div class=\"stat-value\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["activites"]) || array_key_exists("activites", $context) ? $context["activites"] : (function () { throw new RuntimeError('Variable "activites" does not exist.', 52, $this->source); })()), function ($__a__) use ($context, $macros) { $context["a"] = $__a__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 52, $this->source); })()), "intensite", [], "any", false, false, false, 52) == "elevee"); })), "html", null, true);
        yield "</div>
            </div>
            <div class=\"stat-icon purple\">⚡</div>
        </div>
    </div>
</div>

";
        // line 60
        yield "<div class=\"glass-card table-card\">
    <div class=\"card-header\" style=\"gap:16px; flex-wrap:wrap;\">
        <div>
            <div class=\"card-title\">📋 Liste des activités</div>
        </div>

        ";
        // line 67
        yield "        <div style=\"display:flex; gap:10px; flex-wrap:wrap; margin-left:auto;\">
            <a class=\"card-btn\" href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_api_meteo");
        yield "\">🌦️ Météo</a>
            <a class=\"card-btn active\" href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_sport_new");
        yield "\">➕ Nouvelle activité</a>
        </div>
    </div>

    ";
        // line 74
        yield "    <form method=\"get\" style=\"display:flex; gap:12px; flex-wrap:wrap; margin-bottom:16px;\">
        <input
            class=\"search-input\"
            style=\"width:360px; max-width:100%;\"
            name=\"search\"
            value=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 79, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\"
            placeholder=\"Rechercher (type / intensité / durée / calories / objectif)...\"
        >

        <select class=\"settings-select\" name=\"sort\">
            <option value=\"id\" ";
        // line 84
        yield ((((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 84, $this->source); })()) == "id")) ? ("selected") : (""));
        yield ">Tri: ID</option>
            <option value=\"type\" ";
        // line 85
        yield ((((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 85, $this->source); })()) == "type")) ? ("selected") : (""));
        yield ">Tri: Type</option>
            <option value=\"intensite\" ";
        // line 86
        yield ((((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 86, $this->source); })()) == "intensite")) ? ("selected") : (""));
        yield ">Tri: Intensité</option>
            <option value=\"duree\" ";
        // line 87
        yield ((((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 87, $this->source); })()) == "duree")) ? ("selected") : (""));
        yield ">Tri: Durée</option>
            <option value=\"caloriesBrulees\" ";
        // line 88
        yield ((((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 88, $this->source); })()) == "caloriesBrulees")) ? ("selected") : (""));
        yield ">Tri: Calories</option>
            <option value=\"date\" ";
        // line 89
        yield ((((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 89, $this->source); })()) == "date")) ? ("selected") : (""));
        yield ">Tri: Date</option>
            <option value=\"objectif\" ";
        // line 90
        yield ((((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 90, $this->source); })()) == "objectif")) ? ("selected") : (""));
        yield ">Tri: Objectif</option>
        </select>

        <select class=\"settings-select\" name=\"dir\">
            <option value=\"asc\" ";
        // line 94
        yield ((((isset($context["currentDir"]) || array_key_exists("currentDir", $context) ? $context["currentDir"] : (function () { throw new RuntimeError('Variable "currentDir" does not exist.', 94, $this->source); })()) == "asc")) ? ("selected") : (""));
        yield ">Ascendant ▲</option>
            <option value=\"desc\" ";
        // line 95
        yield ((((isset($context["currentDir"]) || array_key_exists("currentDir", $context) ? $context["currentDir"] : (function () { throw new RuntimeError('Variable "currentDir" does not exist.', 95, $this->source); })()) == "desc")) ? ("selected") : (""));
        yield ">Descendant ▼</option>
        </select>

        <button class=\"card-btn active\" type=\"submit\">🔎 Rechercher</button>
        <a class=\"card-btn\" href=\"";
        // line 99
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_sport_index");
        yield "\">↻ Reset</a>
    </form>

    <div class=\"table-wrapper\">
        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Objectif</th>
                    <th>Intensité</th>
                    <th>Durée</th>
                    <th>Calories</th>
                    <th>Date</th>
                    <th style=\"text-align:right;\">Actions</th>
                </tr>
            </thead>

            <tbody>
            ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activites"]) || array_key_exists("activites", $context) ? $context["activites"] : (function () { throw new RuntimeError('Variable "activites" does not exist.', 117, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 118
            yield "                <tr>
                    <td style=\"color:var(--text-primary); font-weight:600;\">
                        ";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "type", [], "any", false, false, false, 120), "html", null, true);
            yield "
                    </td>

                    <td>
                        <span class=\"status-badge processing\">
                            🎯 ";
            // line 125
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "objectif", [], "any", false, false, false, 125)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "objectif", [], "any", false, false, false, 125), "description", [], "any", false, false, false, 125), "html", null, true)) : ("—"));
            yield "
                        </span>
                    </td>

                    <td>
                        ";
            // line 130
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "intensite", [], "any", false, false, false, 130) == "elevee")) {
                // line 131
                yield "                            <span class=\"status-badge completed\">⚡ élevée</span>
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 132
$context["a"], "intensite", [], "any", false, false, false, 132) == "moyenne")) {
                // line 133
                yield "                            <span class=\"status-badge processing\">⏳ moyenne</span>
                        ";
            } else {
                // line 135
                yield "                            <span class=\"status-badge pending\">🌿 faible</span>
                        ";
            }
            // line 137
            yield "                    </td>

                    <td class=\"table-amount\">";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "duree", [], "any", false, false, false, 139), "html", null, true);
            yield " min</td>
                    <td class=\"table-amount\">";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "caloriesBrulees", [], "any", false, false, false, 140), "html", null, true);
            yield "</td>
                    <td>";
            // line 141
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "date", [], "any", false, false, false, 141)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "date", [], "any", false, false, false, 141), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</td>

                    <td style=\"text-align:right;\">
                        <a class=\"card-btn active\" href=\"";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_sport_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 144)]), "html", null, true);
            yield "\">✏️</a>

                        <form method=\"post\" action=\"";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_sport_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 146)]), "html", null, true);
            yield "\"
                              style=\"display:inline-block;\"
                              onsubmit=\"return confirm('Supprimer cette activité ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 149))), "html", null, true);
            yield "\">
                            <button class=\"card-btn\" style=\"border-color:rgba(220,38,38,.35); color:#ffb4b4;\" type=\"submit\">🗑</button>
                        </form>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 154
        if (!$context['_iterated']) {
            // line 155
            yield "                <tr>
                    <td colspan=\"7\" style=\"padding:18px; color:var(--text-secondary);\">
                        Aucune activité
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        yield "            </tbody>
        </table>
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
        return "back/sport/index.html.twig";
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
        return array (  362 => 161,  351 => 155,  349 => 154,  339 => 149,  333 => 146,  328 => 144,  322 => 141,  318 => 140,  314 => 139,  310 => 137,  306 => 135,  302 => 133,  300 => 132,  297 => 131,  295 => 130,  287 => 125,  279 => 120,  275 => 118,  270 => 117,  249 => 99,  242 => 95,  238 => 94,  231 => 90,  227 => 89,  223 => 88,  219 => 87,  215 => 86,  211 => 85,  207 => 84,  199 => 79,  192 => 74,  185 => 69,  181 => 68,  178 => 67,  170 => 60,  160 => 52,  147 => 42,  134 => 32,  121 => 22,  114 => 17,  104 => 8,  102 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back/sport/base_back.html.twig' %}

{% block title %}Gestion des Activités{% endblock %}

{% block body %}
{% set currentSort = sort|default('id') %}
{% set currentDir  = dir|default('desc') %}

<div class=\"page-header\">
    <div class=\"page-title\">🏃 Gestion des Activités</div>
    <div class=\"page-breadcrumb\">
        <a href=\"#\">Dashboard</a> <span>/</span> <span>Activités</span>
    </div>
</div>

{# ✅ STATS CARDS #}
<div class=\"stats-grid\">
    <div class=\"glass-card stat-card glass-card-3d\">
        <div class=\"stat-card-inner\">
            <div class=\"stat-info\">
                <h3>Total activités</h3>
                <div class=\"stat-value\">{{ activites|length }}</div>
            </div>
            <div class=\"stat-icon cyan\">🏃</div>
        </div>
    </div>

    <div class=\"glass-card stat-card glass-card-3d\">
        <div class=\"stat-card-inner\">
            <div class=\"stat-info\">
                <h3>Calories totales</h3>
                <div class=\"stat-value\">{{ activites|reduce((carry, a) => carry + a.caloriesBrulees, 0) }}</div>
            </div>
            <div class=\"stat-icon magenta\">🔥</div>
        </div>
    </div>

    <div class=\"glass-card stat-card glass-card-3d\">
        <div class=\"stat-card-inner\">
            <div class=\"stat-info\">
                <h3>Durée totale (min)</h3>
                <div class=\"stat-value\">{{ activites|reduce((carry, a) => carry + a.duree, 0) }}</div>
            </div>
            <div class=\"stat-icon success\">⏱</div>
        </div>
    </div>

    <div class=\"glass-card stat-card glass-card-3d\">
        <div class=\"stat-card-inner\">
            <div class=\"stat-info\">
                <h3>Intensité élevée</h3>
                <div class=\"stat-value\">{{ activites|filter(a => a.intensite == 'elevee')|length }}</div>
            </div>
            <div class=\"stat-icon purple\">⚡</div>
        </div>
    </div>
</div>

{# ✅ TABLE CARD #}
<div class=\"glass-card table-card\">
    <div class=\"card-header\" style=\"gap:16px; flex-wrap:wrap;\">
        <div>
            <div class=\"card-title\">📋 Liste des activités</div>
        </div>

        {# ✅ Buttons (API + New) #}
        <div style=\"display:flex; gap:10px; flex-wrap:wrap; margin-left:auto;\">
            <a class=\"card-btn\" href=\"{{ path('back_api_meteo') }}\">🌦️ Météo</a>
            <a class=\"card-btn active\" href=\"{{ path('back_sport_new') }}\">➕ Nouvelle activité</a>
        </div>
    </div>

    {# ✅ SEARCH + TRI #}
    <form method=\"get\" style=\"display:flex; gap:12px; flex-wrap:wrap; margin-bottom:16px;\">
        <input
            class=\"search-input\"
            style=\"width:360px; max-width:100%;\"
            name=\"search\"
            value=\"{{ search|default('') }}\"
            placeholder=\"Rechercher (type / intensité / durée / calories / objectif)...\"
        >

        <select class=\"settings-select\" name=\"sort\">
            <option value=\"id\" {{ currentSort == 'id' ? 'selected' : '' }}>Tri: ID</option>
            <option value=\"type\" {{ currentSort == 'type' ? 'selected' : '' }}>Tri: Type</option>
            <option value=\"intensite\" {{ currentSort == 'intensite' ? 'selected' : '' }}>Tri: Intensité</option>
            <option value=\"duree\" {{ currentSort == 'duree' ? 'selected' : '' }}>Tri: Durée</option>
            <option value=\"caloriesBrulees\" {{ currentSort == 'caloriesBrulees' ? 'selected' : '' }}>Tri: Calories</option>
            <option value=\"date\" {{ currentSort == 'date' ? 'selected' : '' }}>Tri: Date</option>
            <option value=\"objectif\" {{ currentSort == 'objectif' ? 'selected' : '' }}>Tri: Objectif</option>
        </select>

        <select class=\"settings-select\" name=\"dir\">
            <option value=\"asc\" {{ currentDir == 'asc' ? 'selected' : '' }}>Ascendant ▲</option>
            <option value=\"desc\" {{ currentDir == 'desc' ? 'selected' : '' }}>Descendant ▼</option>
        </select>

        <button class=\"card-btn active\" type=\"submit\">🔎 Rechercher</button>
        <a class=\"card-btn\" href=\"{{ path('back_sport_index') }}\">↻ Reset</a>
    </form>

    <div class=\"table-wrapper\">
        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Objectif</th>
                    <th>Intensité</th>
                    <th>Durée</th>
                    <th>Calories</th>
                    <th>Date</th>
                    <th style=\"text-align:right;\">Actions</th>
                </tr>
            </thead>

            <tbody>
            {% for a in activites %}
                <tr>
                    <td style=\"color:var(--text-primary); font-weight:600;\">
                        {{ a.type }}
                    </td>

                    <td>
                        <span class=\"status-badge processing\">
                            🎯 {{ a.objectif ? a.objectif.description : '—' }}
                        </span>
                    </td>

                    <td>
                        {% if a.intensite == 'elevee' %}
                            <span class=\"status-badge completed\">⚡ élevée</span>
                        {% elseif a.intensite == 'moyenne' %}
                            <span class=\"status-badge processing\">⏳ moyenne</span>
                        {% else %}
                            <span class=\"status-badge pending\">🌿 faible</span>
                        {% endif %}
                    </td>

                    <td class=\"table-amount\">{{ a.duree }} min</td>
                    <td class=\"table-amount\">{{ a.caloriesBrulees }}</td>
                    <td>{{ a.date ? a.date|date('d/m/Y') : '-' }}</td>

                    <td style=\"text-align:right;\">
                        <a class=\"card-btn active\" href=\"{{ path('back_sport_edit',{id:a.id}) }}\">✏️</a>

                        <form method=\"post\" action=\"{{ path('back_sport_delete',{id:a.id}) }}\"
                              style=\"display:inline-block;\"
                              onsubmit=\"return confirm('Supprimer cette activité ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete'~a.id) }}\">
                            <button class=\"card-btn\" style=\"border-color:rgba(220,38,38,.35); color:#ffb4b4;\" type=\"submit\">🗑</button>
                        </form>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"7\" style=\"padding:18px; color:var(--text-secondary);\">
                        Aucune activité
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{% endblock %}
", "back/sport/index.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\back\\sport\\index.html.twig");
    }
}
