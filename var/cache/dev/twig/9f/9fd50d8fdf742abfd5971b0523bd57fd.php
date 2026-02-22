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

/* back/objectif/objectif_index.html.twig */
class __TwigTemplate_b626817b9dbf3269274e5d7abd22d260 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/objectif/objectif_index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/objectif/objectif_index.html.twig"));

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

        yield "Gestion des Objectifs";
        
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
    <div class=\"page-title\">🎯 Gestion des Objectifs</div>
    <div class=\"page-breadcrumb\">
        <a href=\"#\">Dashboard</a> <span>/</span> <span>Objectifs</span>
    </div>
</div>

";
        // line 17
        yield "<div class=\"stats-grid\">
    <div class=\"glass-card stat-card glass-card-3d\">
        <div class=\"stat-card-inner\">
            <div class=\"stat-info\">
                <h3>Total objectifs</h3>
                <div class=\"stat-value\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 22, $this->source); })())), "html", null, true);
        yield "</div>
            </div>
            <div class=\"stat-icon cyan\">🎯</div>
        </div>
    </div>

    <div class=\"glass-card stat-card glass-card-3d\">
        <div class=\"stat-card-inner\">
            <div class=\"stat-info\">
                <h3>En cours</h3>
                <div class=\"stat-value\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 32, $this->source); })()), function ($__o__) use ($context, $macros) { $context["o"] = $__o__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["o"]) || array_key_exists("o", $context) ? $context["o"] : (function () { throw new RuntimeError('Variable "o" does not exist.', 32, $this->source); })()), "statut", [], "any", false, false, false, 32) == "En cours"); })), "html", null, true);
        yield "</div>
            </div>
            <div class=\"stat-icon magenta\">⏳</div>
        </div>
    </div>

    <div class=\"glass-card stat-card glass-card-3d\">
        <div class=\"stat-card-inner\">
            <div class=\"stat-info\">
                <h3>Atteints</h3>
                <div class=\"stat-value\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 42, $this->source); })()), function ($__o__) use ($context, $macros) { $context["o"] = $__o__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["o"]) || array_key_exists("o", $context) ? $context["o"] : (function () { throw new RuntimeError('Variable "o" does not exist.', 42, $this->source); })()), "statut", [], "any", false, false, false, 42) == "Atteint"); })), "html", null, true);
        yield "</div>
            </div>
            <div class=\"stat-icon success\">✅</div>
        </div>
    </div>

    <div class=\"glass-card stat-card glass-card-3d\">
        <div class=\"stat-card-inner\">
            <div class=\"stat-info\">
                <h3>Abandonnés</h3>
                <div class=\"stat-value\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 52, $this->source); })()), function ($__o__) use ($context, $macros) { $context["o"] = $__o__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["o"]) || array_key_exists("o", $context) ? $context["o"] : (function () { throw new RuntimeError('Variable "o" does not exist.', 52, $this->source); })()), "statut", [], "any", false, false, false, 52) == "Abandonné"); })), "html", null, true);
        yield "</div>
            </div>
            <div class=\"stat-icon purple\">🛑</div>
        </div>
    </div>
</div>

";
        // line 60
        yield "<div class=\"glass-card table-card\">
    <div class=\"card-header\" style=\"gap:16px; flex-wrap:wrap;\">
        <div>
            <div class=\"card-title\">📋 Liste des objectifs</div>
            <div class=\"card-subtitle\">Recherche + Tri (fonctionnalités avancées)</div>
        </div>

        <div style=\"display:flex; gap:10px; flex-wrap:wrap; margin-left:auto;\">
            <a class=\"card-btn active\" href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_new");
        yield "\">➕ Nouvel objectif</a>
        </div>
    </div>

    ";
        // line 73
        yield "    <form method=\"get\" style=\"display:flex; gap:12px; flex-wrap:wrap; margin-bottom:16px;\">
        <input
            class=\"search-input\"
            style=\"width:360px; max-width:100%;\"
            name=\"search\"
            value=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 78, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\"
            placeholder=\"Rechercher (description / type / statut / user)...\"
        >

        <select class=\"settings-select\" name=\"sort\">
            <option value=\"id\" ";
        // line 83
        yield ((((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 83, $this->source); })()) == "id")) ? ("selected") : (""));
        yield ">Tri: ID</option>
            <option value=\"description\" ";
        // line 84
        yield ((((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 84, $this->source); })()) == "description")) ? ("selected") : (""));
        yield ">Tri: Description</option>
            <option value=\"user\" ";
        // line 85
        yield ((((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 85, $this->source); })()) == "user")) ? ("selected") : (""));
        yield ">Tri: Utilisateur</option>
            <option value=\"type\" ";
        // line 86
        yield ((((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 86, $this->source); })()) == "type")) ? ("selected") : (""));
        yield ">Tri: Type</option>
            <option value=\"valeurCible\" ";
        // line 87
        yield ((((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 87, $this->source); })()) == "valeurCible")) ? ("selected") : (""));
        yield ">Tri: Cible</option>
            <option value=\"dateDebut\" ";
        // line 88
        yield ((((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 88, $this->source); })()) == "dateDebut")) ? ("selected") : (""));
        yield ">Tri: Date début</option>
            <option value=\"dateFin\" ";
        // line 89
        yield ((((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 89, $this->source); })()) == "dateFin")) ? ("selected") : (""));
        yield ">Tri: Date fin</option>
            <option value=\"statut\" ";
        // line 90
        yield ((((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 90, $this->source); })()) == "statut")) ? ("selected") : (""));
        yield ">Tri: Statut</option>
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_index");
        yield "\">↻ Reset</a>
    </form>

    <div class=\"table-wrapper\">
        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Utilisateur</th>
                    <th>Type</th>
                    <th>Cible</th>
                    <th>Début</th>
                    <th>Fin</th>
                    <th>Statut</th>
                    <th style=\"text-align:right;\">Actions</th>
                </tr>
            </thead>

            <tbody>
            ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 118, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
            // line 119
            yield "                <tr>
                    <td style=\"color:var(--text-primary); font-weight:600;\">
                        ";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["o"], "description", [], "any", false, false, false, 121), "html", null, true);
            yield "
                    </td>

                    <td>
                        <div class=\"table-user\">
                            <div class=\"table-avatar\" style=\"background:linear-gradient(135deg, rgba(52,211,153,.2), rgba(212,165,116,.2));\">
                                👤
                            </div>
                            <div class=\"table-user-info\">
                                <div class=\"table-user-name\">";
            // line 130
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["o"], "user", [], "any", false, false, false, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["o"], "user", [], "any", false, false, false, 130), "name", [], "any", false, false, false, 130), "html", null, true)) : ("—"));
            yield "</div>
                                <div class=\"table-user-email\">Utilisateur</div>
                            </div>
                        </div>
                    </td>

                    <td>";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["o"], "type", [], "any", false, false, false, 136), "html", null, true);
            yield "</td>
                    <td class=\"table-amount\">";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["o"], "valeurCible", [], "any", false, false, false, 137), "html", null, true);
            yield "</td>
                    <td>";
            // line 138
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["o"], "dateDebut", [], "any", false, false, false, 138)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["o"], "dateDebut", [], "any", false, false, false, 138), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</td>
                    <td>";
            // line 139
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["o"], "dateFin", [], "any", false, false, false, 139)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["o"], "dateFin", [], "any", false, false, false, 139), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</td>

                    <td>
                        ";
            // line 142
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["o"], "statut", [], "any", false, false, false, 142) == "Atteint")) {
                // line 143
                yield "                            <span class=\"status-badge completed\">✅ Atteint</span>
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 144
$context["o"], "statut", [], "any", false, false, false, 144) == "En cours")) {
                // line 145
                yield "                            <span class=\"status-badge processing\">⏳ En cours</span>
                        ";
            } else {
                // line 147
                yield "                            <span class=\"status-badge pending\">🛑 Abandonné</span>
                        ";
            }
            // line 149
            yield "                    </td>

                    <td style=\"text-align:right;\">
                        <a class=\"card-btn\" href=\"";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["o"], "id", [], "any", false, false, false, 152)]), "html", null, true);
            yield "\">👁</a>
                        <a class=\"card-btn active\" href=\"";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["o"], "id", [], "any", false, false, false, 153)]), "html", null, true);
            yield "\">✏️</a>

                        <form method=\"post\" action=\"";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["o"], "id", [], "any", false, false, false, 155)]), "html", null, true);
            yield "\"
                              style=\"display:inline-block;\"
                              onsubmit=\"return confirm('Supprimer cet objectif ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["o"], "id", [], "any", false, false, false, 158))), "html", null, true);
            yield "\">
                            <button class=\"card-btn\" style=\"border-color:rgba(220,38,38,.35); color:#ffb4b4;\" type=\"submit\">🗑</button>
                        </form>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 163
        if (!$context['_iterated']) {
            // line 164
            yield "                <tr>
                    <td colspan=\"8\" style=\"padding:18px; color:var(--text-secondary);\">
                        Aucun objectif
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['o'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
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
        return "back/objectif/objectif_index.html.twig";
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
        return array (  376 => 170,  365 => 164,  363 => 163,  353 => 158,  347 => 155,  342 => 153,  338 => 152,  333 => 149,  329 => 147,  325 => 145,  323 => 144,  320 => 143,  318 => 142,  312 => 139,  308 => 138,  304 => 137,  300 => 136,  291 => 130,  279 => 121,  275 => 119,  270 => 118,  248 => 99,  241 => 95,  237 => 94,  230 => 90,  226 => 89,  222 => 88,  218 => 87,  214 => 86,  210 => 85,  206 => 84,  202 => 83,  194 => 78,  187 => 73,  180 => 68,  170 => 60,  160 => 52,  147 => 42,  134 => 32,  121 => 22,  114 => 17,  104 => 8,  102 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back/sport/base_back.html.twig' %}

{% block title %}Gestion des Objectifs{% endblock %}

{% block body %}
{% set currentSort = sort|default('id') %}
{% set currentDir  = dir|default('desc') %}

<div class=\"page-header\">
    <div class=\"page-title\">🎯 Gestion des Objectifs</div>
    <div class=\"page-breadcrumb\">
        <a href=\"#\">Dashboard</a> <span>/</span> <span>Objectifs</span>
    </div>
</div>

{# ✅ STATS CARDS (GlassDash style) #}
<div class=\"stats-grid\">
    <div class=\"glass-card stat-card glass-card-3d\">
        <div class=\"stat-card-inner\">
            <div class=\"stat-info\">
                <h3>Total objectifs</h3>
                <div class=\"stat-value\">{{ objectifs|length }}</div>
            </div>
            <div class=\"stat-icon cyan\">🎯</div>
        </div>
    </div>

    <div class=\"glass-card stat-card glass-card-3d\">
        <div class=\"stat-card-inner\">
            <div class=\"stat-info\">
                <h3>En cours</h3>
                <div class=\"stat-value\">{{ objectifs|filter(o => o.statut == 'En cours')|length }}</div>
            </div>
            <div class=\"stat-icon magenta\">⏳</div>
        </div>
    </div>

    <div class=\"glass-card stat-card glass-card-3d\">
        <div class=\"stat-card-inner\">
            <div class=\"stat-info\">
                <h3>Atteints</h3>
                <div class=\"stat-value\">{{ objectifs|filter(o => o.statut == 'Atteint')|length }}</div>
            </div>
            <div class=\"stat-icon success\">✅</div>
        </div>
    </div>

    <div class=\"glass-card stat-card glass-card-3d\">
        <div class=\"stat-card-inner\">
            <div class=\"stat-info\">
                <h3>Abandonnés</h3>
                <div class=\"stat-value\">{{ objectifs|filter(o => o.statut == 'Abandonné')|length }}</div>
            </div>
            <div class=\"stat-icon purple\">🛑</div>
        </div>
    </div>
</div>

{# ✅ TABLE CARD (GlassDash style) #}
<div class=\"glass-card table-card\">
    <div class=\"card-header\" style=\"gap:16px; flex-wrap:wrap;\">
        <div>
            <div class=\"card-title\">📋 Liste des objectifs</div>
            <div class=\"card-subtitle\">Recherche + Tri (fonctionnalités avancées)</div>
        </div>

        <div style=\"display:flex; gap:10px; flex-wrap:wrap; margin-left:auto;\">
            <a class=\"card-btn active\" href=\"{{ path('app_objectif_new') }}\">➕ Nouvel objectif</a>
        </div>
    </div>

    {# ✅ SEARCH + TRI (fonctionnel) #}
    <form method=\"get\" style=\"display:flex; gap:12px; flex-wrap:wrap; margin-bottom:16px;\">
        <input
            class=\"search-input\"
            style=\"width:360px; max-width:100%;\"
            name=\"search\"
            value=\"{{ search|default('') }}\"
            placeholder=\"Rechercher (description / type / statut / user)...\"
        >

        <select class=\"settings-select\" name=\"sort\">
            <option value=\"id\" {{ currentSort == 'id' ? 'selected' : '' }}>Tri: ID</option>
            <option value=\"description\" {{ currentSort == 'description' ? 'selected' : '' }}>Tri: Description</option>
            <option value=\"user\" {{ currentSort == 'user' ? 'selected' : '' }}>Tri: Utilisateur</option>
            <option value=\"type\" {{ currentSort == 'type' ? 'selected' : '' }}>Tri: Type</option>
            <option value=\"valeurCible\" {{ currentSort == 'valeurCible' ? 'selected' : '' }}>Tri: Cible</option>
            <option value=\"dateDebut\" {{ currentSort == 'dateDebut' ? 'selected' : '' }}>Tri: Date début</option>
            <option value=\"dateFin\" {{ currentSort == 'dateFin' ? 'selected' : '' }}>Tri: Date fin</option>
            <option value=\"statut\" {{ currentSort == 'statut' ? 'selected' : '' }}>Tri: Statut</option>
        </select>

        <select class=\"settings-select\" name=\"dir\">
            <option value=\"asc\" {{ currentDir == 'asc' ? 'selected' : '' }}>Ascendant ▲</option>
            <option value=\"desc\" {{ currentDir == 'desc' ? 'selected' : '' }}>Descendant ▼</option>
        </select>

        <button class=\"card-btn active\" type=\"submit\">🔎 Rechercher</button>
        <a class=\"card-btn\" href=\"{{ path('app_objectif_index') }}\">↻ Reset</a>
    </form>

    <div class=\"table-wrapper\">
        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Utilisateur</th>
                    <th>Type</th>
                    <th>Cible</th>
                    <th>Début</th>
                    <th>Fin</th>
                    <th>Statut</th>
                    <th style=\"text-align:right;\">Actions</th>
                </tr>
            </thead>

            <tbody>
            {% for o in objectifs %}
                <tr>
                    <td style=\"color:var(--text-primary); font-weight:600;\">
                        {{ o.description }}
                    </td>

                    <td>
                        <div class=\"table-user\">
                            <div class=\"table-avatar\" style=\"background:linear-gradient(135deg, rgba(52,211,153,.2), rgba(212,165,116,.2));\">
                                👤
                            </div>
                            <div class=\"table-user-info\">
                                <div class=\"table-user-name\">{{ o.user ? o.user.name : '—' }}</div>
                                <div class=\"table-user-email\">Utilisateur</div>
                            </div>
                        </div>
                    </td>

                    <td>{{ o.type }}</td>
                    <td class=\"table-amount\">{{ o.valeurCible }}</td>
                    <td>{{ o.dateDebut ? o.dateDebut|date('d/m/Y') : '-' }}</td>
                    <td>{{ o.dateFin ? o.dateFin|date('d/m/Y') : '-' }}</td>

                    <td>
                        {% if o.statut == 'Atteint' %}
                            <span class=\"status-badge completed\">✅ Atteint</span>
                        {% elseif o.statut == 'En cours' %}
                            <span class=\"status-badge processing\">⏳ En cours</span>
                        {% else %}
                            <span class=\"status-badge pending\">🛑 Abandonné</span>
                        {% endif %}
                    </td>

                    <td style=\"text-align:right;\">
                        <a class=\"card-btn\" href=\"{{ path('app_objectif_show',{id:o.id}) }}\">👁</a>
                        <a class=\"card-btn active\" href=\"{{ path('app_objectif_edit',{id:o.id}) }}\">✏️</a>

                        <form method=\"post\" action=\"{{ path('app_objectif_delete',{id:o.id}) }}\"
                              style=\"display:inline-block;\"
                              onsubmit=\"return confirm('Supprimer cet objectif ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete'~o.id) }}\">
                            <button class=\"card-btn\" style=\"border-color:rgba(220,38,38,.35); color:#ffb4b4;\" type=\"submit\">🗑</button>
                        </form>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"8\" style=\"padding:18px; color:var(--text-secondary);\">
                        Aucun objectif
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{% endblock %}
", "back/objectif/objectif_index.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\back\\objectif\\objectif_index.html.twig");
    }
}
