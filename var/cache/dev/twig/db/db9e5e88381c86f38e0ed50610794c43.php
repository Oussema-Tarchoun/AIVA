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

/* back/repas/index.html.twig */
class __TwigTemplate_2119f1e7ff9365f347c2fd0368695909 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/repas/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/repas/index.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Repas - Dashboard</title>

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/templatemo-glass-admin-style.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/serchbtn.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">
</head>

<body>
<div class=\"background\"></div>
<div class=\"orb orb-1\"></div>
<div class=\"orb orb-2\"></div>
<div class=\"orb orb-3\"></div>

<div class=\"dashboard\">

    ";
        // line 25
        yield "    <aside class=\"sidebar\" id=\"sidebar\">
        <div class=\"sidebar-header\">
            <div class=\"logo\">
                <img src=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Logo\" style=\"width:50px;height:auto;margin-top:12%;\">
            </div>
            <span class=\"logo-text\">AIVA</span>
        </div>

        <ul class=\"nav-menu\">
            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Menu Principal</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\" class=\"nav-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "attributes", [], "any", false, false, false, 38), "get", ["_route"], "method", false, false, false, 38) == "dashboard")) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M3 12l9-9 9 9\"/><path d=\"M9 21V9h6v12\"/></svg>
                            Tableau de bord
                        </a>
                    </li>
                </ul>
            </li>
            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Sports</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_sport_index");
        yield "\" class=\"nav-link ";
        if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "request", [], "any", false, false, false, 49), "attributes", [], "any", false, false, false, 49), "get", ["_route"], "method", false, false, false, 49)) && is_string($_v1 = "back_sport_") && str_starts_with($_v0, $_v1))) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M7 7h10\"/><path d=\"M7 12h10\"/><path d=\"M7 17h10\"/></svg>
                            Activités
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_index");
        yield "\" class=\"nav-link ";
        if ((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "request", [], "any", false, false, false, 55), "attributes", [], "any", false, false, false, 55), "get", ["_route"], "method", false, false, false, 55)) && is_string($_v3 = "app_objectif_") && str_starts_with($_v2, $_v3))) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><circle cx=\"12\" cy=\"12\" r=\"9\"/><path d=\"M12 7v5l3 3\"/></svg>
                            Objectifs
                        </a>
                    </li>
                </ul>
            </li>
            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Finance</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depense_index");
        yield "\" class=\"nav-link ";
        if ((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "request", [], "any", false, false, false, 66), "attributes", [], "any", false, false, false, 66), "get", ["_route"], "method", false, false, false, 66)) && is_string($_v5 = "app_depense_") && str_starts_with($_v4, $_v5))) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M6 3h12v4H6z\"/><path d=\"M4 9h16v4H4z\"/><path d=\"M6 15h12v4H6z\"/></svg>
                            Dépenses
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index");
        yield "\" class=\"nav-link ";
        if ((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "request", [], "any", false, false, false, 72), "attributes", [], "any", false, false, false, 72), "get", ["_route"], "method", false, false, false, 72)) && is_string($_v7 = "app_categorie_") && str_starts_with($_v6, $_v7))) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><rect x=\"3\" y=\"3\" width=\"7\" height=\"7\" rx=\"1\"/><rect x=\"14\" y=\"3\" width=\"7\" height=\"7\" rx=\"1\"/><rect x=\"3\" y=\"14\" width=\"7\" height=\"7\" rx=\"1\"/><rect x=\"14\" y=\"14\" width=\"7\" height=\"7\" rx=\"1\"/></svg>
                            Catégories
                        </a>
                    </li>
                </ul>
            </li>
            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Énergies</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("energy");
        yield "\" class=\"nav-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "request", [], "any", false, false, false, 83), "attributes", [], "any", false, false, false, 83), "get", ["_route"], "method", false, false, false, 83) == "energy")) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M13 2L3 14h7l-1 8 10-12h-7z\"/></svg>
                            Consommation d'énergie
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recommendations");
        yield "\" class=\"nav-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "request", [], "any", false, false, false, 89), "attributes", [], "any", false, false, false, 89), "get", ["_route"], "method", false, false, false, 89) == "recommendations")) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M9 18h6\"/><path d=\"M10 22h4\"/><path d=\"M12 2a7 7 0 0 0-4 12c.6.6 1 1.5 1 2h6c0-.5.4-1.4 1-2a7 7 0 0 0-4-12z\"/></svg>
                            Recommandations
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stateenergi");
        yield "\" class=\"nav-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "request", [], "any", false, false, false, 95), "attributes", [], "any", false, false, false, 95), "get", ["_route"], "method", false, false, false, 95) == "stateenergi")) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M3 3v18h18\"/><path d=\"M7 14l3-3 4 4 5-7\"/></svg>
                            Statistiques d'énergie
                        </a>
                    </li>
                </ul>
            </li>
            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Alimentation</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_aliment_index");
        yield "\" class=\"nav-link ";
        if ((is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "request", [], "any", false, false, false, 106), "attributes", [], "any", false, false, false, 106), "get", ["_route"], "method", false, false, false, 106)) && is_string($_v9 = "app_aliment_") && str_starts_with($_v8, $_v9))) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M12 3c-3 2-5 5-5 8a5 5 0 0 0 10 0c0-3-2-6-5-8z\"/><path d=\"M12 14v7\"/></svg>
                            Aliments
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_repas_index");
        yield "\" class=\"nav-link ";
        if ((is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "request", [], "any", false, false, false, 112), "attributes", [], "any", false, false, false, 112), "get", ["_route"], "method", false, false, false, 112)) && is_string($_v11 = "app_repas_") && str_starts_with($_v10, $_v11))) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M4 3v7a4 4 0 0 0 4 4v7\"/><path d=\"M8 3v8\"/><path d=\"M14 3v18\"/><path d=\"M20 3v7a4 4 0 0 1-4 4\"/></svg>
                            Repas
                        </a>
                    </li>
                </ul>
            </li>
            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Formation</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_index");
        yield "\" class=\"nav-link ";
        if ((is_string($_v12 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 123, $this->source); })()), "request", [], "any", false, false, false, 123), "attributes", [], "any", false, false, false, 123), "get", ["_route"], "method", false, false, false, 123)) && is_string($_v13 = "app_cours_") && str_starts_with($_v12, $_v13))) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M4 19a2 2 0 0 0 2 2h12\"/><path d=\"M6 17V5a2 2 0 0 1 2-2h10v14H8a2 2 0 0 0-2 2z\"/></svg>
                            Cours
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 129
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chapitre_index");
        yield "\" class=\"nav-link ";
        if ((is_string($_v14 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 129, $this->source); })()), "request", [], "any", false, false, false, 129), "attributes", [], "any", false, false, false, 129), "get", ["_route"], "method", false, false, false, 129)) && is_string($_v15 = "app_chapitre_") && str_starts_with($_v14, $_v15))) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M8 6h13\"/><path d=\"M8 12h13\"/><path d=\"M8 18h13\"/><path d=\"M3 6h.01\"/><path d=\"M3 12h.01\"/><path d=\"M3 18h.01\"/></svg>
                            Chapitres
                        </a>
                    </li>
                </ul>
            </li>
            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Compte</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 140
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\" class=\"nav-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "request", [], "any", false, false, false, 140), "attributes", [], "any", false, false, false, 140), "get", ["_route"], "method", false, false, false, 140) == "app_profile")) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M20 21a8 8 0 0 0-16 0\"/><circle cx=\"12\" cy=\"7\" r=\"4\"/></svg>
                            Profil
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 146
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"nav-link ";
        if ((is_string($_v16 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 146, $this->source); })()), "request", [], "any", false, false, false, 146), "attributes", [], "any", false, false, false, 146), "get", ["_route"], "method", false, false, false, 146)) && is_string($_v17 = "app_user_") && str_starts_with($_v16, $_v17))) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"/><circle cx=\"9\" cy=\"7\" r=\"4\"/><path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"/><path d=\"M16 3.13a4 4 0 0 1 0 7.75\"/></svg>
                            Users
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 152
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"nav-link\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"/><polyline points=\"16 17 21 12 16 7\"/><line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"/></svg>
                            Déconnexion
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class=\"sidebar-footer\">
            <div class=\"user-profile\">
                <div class=\"user-avatar\">AD</div>
                <div class=\"user-info\">
                    <div class=\"user-name\">Admin</div>
                    <div class=\"user-role\">Administrator</div>
                </div>
            </div>
        </div>
    </aside>

    ";
        // line 173
        yield "    <main class=\"main-content\">

        <nav class=\"navbar\">
            <h1 class=\"page-title\">
                <i class=\"fa-solid fa-utensils\" style=\"margin-right:10px;color:#059669;\"></i>
                Mes Repas
            </h1>
            <div class=\"navbar-right\">

                <div class=\"search-box\">
                    <form method=\"get\" action=\"";
        // line 183
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_repas_index");
        yield "\" class=\"search-form\">
                        <input type=\"text\"
                               name=\"search\"
                               value=\"";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("searchNom", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchNom"]) || array_key_exists("searchNom", $context) ? $context["searchNom"] : (function () { throw new RuntimeError('Variable "searchNom" does not exist.', 186, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\"
                               placeholder=\"Rechercher un repas...\"
                               class=\"search-input\">
                        ";
        // line 189
        if ((($tmp = (isset($context["sortCalories"]) || array_key_exists("sortCalories", $context) ? $context["sortCalories"] : (function () { throw new RuntimeError('Variable "sortCalories" does not exist.', 189, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 190
            yield "                            <input type=\"hidden\" name=\"sort\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sortCalories"]) || array_key_exists("sortCalories", $context) ? $context["sortCalories"] : (function () { throw new RuntimeError('Variable "sortCalories" does not exist.', 190, $this->source); })()), "html", null, true);
            yield "\">
                        ";
        }
        // line 192
        yield "                        <button type=\"submit\" class=\"search-btn\" title=\"Rechercher\">
                            <i class=\"fas fa-search\"></i>
                        </button>
                    </form>
                </div>

                <a href=\"";
        // line 198
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_repas_new");
        yield "\" class=\"card-btn\" style=\"margin-left:10px;\">
                    <i class=\"fa-solid fa-plus\" style=\"margin-right:8px;\"></i>Nouveau Repas
                </a>

                <button class=\"nav-btn\" id=\"theme-toggle\" title=\"Toggle Light/Dark Mode\" style=\"margin-left:10px;\">
                    <svg class=\"icon-sun\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <circle cx=\"12\" cy=\"12\" r=\"4\"/>
                        <path d=\"M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41\"/>
                    </svg>
                    <svg class=\"icon-moon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" style=\"display:none;\">
                        <path d=\"M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z\"/>
                    </svg>
                </button>
            </div>
        </nav>

        ";
        // line 215
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 215, $this->source); })()), "flashes", ["error"], "method", false, false, false, 215));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 216
            yield "            <div class=\"glass-card\" style=\"border:1px solid #ef4444;background:rgba(239,68,68,.12);color:#ef4444;padding:12px 16px;border-radius:12px;margin-bottom:16px;\">
                <i class=\"fa-solid fa-circle-exclamation\" style=\"margin-right:8px;\"></i><strong>Erreur :</strong> ";
            // line 217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        yield "
        ";
        // line 221
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 221, $this->source); })()), "flashes", ["success"], "method", false, false, false, 221));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 222
            yield "            <div class=\"glass-card\" style=\"border:1px solid rgba(5,150,105,.6);background:rgba(5,150,105,.12);color:rgba(5,150,105,.95);padding:12px 16px;border-radius:12px;margin-bottom:16px;\">
                <i class=\"fa-solid fa-circle-check\" style=\"margin-right:8px;\"></i><strong>Succès :</strong> ";
            // line 223
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        yield "
        <section class=\"content-grid\">
            <div class=\"glass-card table-card\">

                <div class=\"card-header\">
                    <div>
                        <h2 class=\"card-title\">Liste des repas</h2>
                        <p class=\"card-subtitle\">
                            ";
        // line 234
        if ((($tmp = ((array_key_exists("searchNom", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchNom"]) || array_key_exists("searchNom", $context) ? $context["searchNom"] : (function () { throw new RuntimeError('Variable "searchNom" does not exist.', 234, $this->source); })()), "")) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 235
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 235, $this->source); })())), "html", null, true);
            yield " résultat(s) pour \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchNom"]) || array_key_exists("searchNom", $context) ? $context["searchNom"] : (function () { throw new RuntimeError('Variable "searchNom" does not exist.', 235, $this->source); })()), "html", null, true);
            yield "\"
                            ";
        } else {
            // line 237
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 237, $this->source); })())), "html", null, true);
            yield " repas au total
                            ";
        }
        // line 239
        yield "                        </p>
                    </div>

                    <div style=\"display:flex;gap:10px;align-items:center;flex-wrap:wrap;\">
                        <a href=\"";
        // line 243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_repas_index", ["sort" => "asc", "search" => ((array_key_exists("searchNom", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchNom"]) || array_key_exists("searchNom", $context) ? $context["searchNom"] : (function () { throw new RuntimeError('Variable "searchNom" does not exist.', 243, $this->source); })()), "")) : (""))]), "html", null, true);
        yield "\"
                           class=\"card-btn\"
                           style=\"";
        // line 245
        if (((isset($context["sortCalories"]) || array_key_exists("sortCalories", $context) ? $context["sortCalories"] : (function () { throw new RuntimeError('Variable "sortCalories" does not exist.', 245, $this->source); })()) == "asc")) {
            yield "background:var(--emerald);color:#fff;";
        }
        yield "\">
                            <i class=\"fa-solid fa-arrow-up\"></i> Calories
                        </a>
                        <a href=\"";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_repas_index", ["sort" => "desc", "search" => ((array_key_exists("searchNom", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchNom"]) || array_key_exists("searchNom", $context) ? $context["searchNom"] : (function () { throw new RuntimeError('Variable "searchNom" does not exist.', 248, $this->source); })()), "")) : (""))]), "html", null, true);
        yield "\"
                           class=\"card-btn\"
                           style=\"";
        // line 250
        if (((isset($context["sortCalories"]) || array_key_exists("sortCalories", $context) ? $context["sortCalories"] : (function () { throw new RuntimeError('Variable "sortCalories" does not exist.', 250, $this->source); })()) == "desc")) {
            yield "background:var(--emerald);color:#fff;";
        }
        yield "\">
                            <i class=\"fa-solid fa-arrow-down\"></i> Calories
                        </a>
                        ";
        // line 253
        if ((((array_key_exists("searchNom", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchNom"]) || array_key_exists("searchNom", $context) ? $context["searchNom"] : (function () { throw new RuntimeError('Variable "searchNom" does not exist.', 253, $this->source); })()), "")) : ("")) || (isset($context["sortCalories"]) || array_key_exists("sortCalories", $context) ? $context["sortCalories"] : (function () { throw new RuntimeError('Variable "sortCalories" does not exist.', 253, $this->source); })()))) {
            // line 254
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_repas_index");
            yield "\" class=\"card-btn\">
                                <i class=\"fa-solid fa-xmark\" style=\"margin-right:6px;\"></i>Réinitialiser
                            </a>
                        ";
        }
        // line 258
        yield "                    </div>
                </div>

                <div class=\"table-wrapper\">
                    <table class=\"data-table\">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Type</th>
                                <th>
                                    <i class=\"fa-regular fa-calendar\" style=\"margin-right:4px;\"></i>Date
                                </th>
                                <th>Heure</th>
                                <th>
                                    Calories
                                    ";
        // line 274
        if (((isset($context["sortCalories"]) || array_key_exists("sortCalories", $context) ? $context["sortCalories"] : (function () { throw new RuntimeError('Variable "sortCalories" does not exist.', 274, $this->source); })()) == "asc")) {
            yield "<i class=\"fa-solid fa-arrow-up\" style=\"font-size:11px;\"></i>
                                    ";
        } elseif ((        // line 275
(isset($context["sortCalories"]) || array_key_exists("sortCalories", $context) ? $context["sortCalories"] : (function () { throw new RuntimeError('Variable "sortCalories" does not exist.', 275, $this->source); })()) == "desc")) {
            yield "<i class=\"fa-solid fa-arrow-down\" style=\"font-size:11px;\"></i>
                                    ";
        }
        // line 277
        yield "                                </th>
                                <th style=\"text-align:center;\">Score</th>
                                <th style=\"text-align:center;\">Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                        ";
        // line 284
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 284, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 285
            yield "                            <tr>
                                <td style=\"color:var(--text-muted);font-size:13px;\">";
            // line 286
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 286), "html", null, true);
            yield "</td>

                                <td><strong>";
            // line 288
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "nom", [], "any", false, false, false, 288), "html", null, true);
            yield "</strong></td>

                                <td>
                                    <span style=\"padding:3px 12px;border-radius:20px;font-size:12px;font-weight:600;
                                        ";
            // line 292
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["r"], "type", [], "any", false, false, false, 292) == "petit-dejeuner")) {
                yield "background:rgba(251,191,36,.15);color:#fbbf24;
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 293
$context["r"], "type", [], "any", false, false, false, 293) == "dejeuner")) {
                yield "background:rgba(5,150,105,.15);color:#059669;
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 294
$context["r"], "type", [], "any", false, false, false, 294) == "diner")) {
                yield "background:rgba(139,92,246,.15);color:#8b5cf6;
                                        ";
            } else {
                // line 295
                yield "background:rgba(59,130,246,.15);color:#3b82f6;";
            }
            yield "\">
                                        ";
            // line 296
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "type", [], "any", false, false, false, 296), ["-" => " "])), "html", null, true);
            yield "
                                    </span>
                                </td>

                                ";
            // line 301
            yield "                                <td style=\"font-size:13px;white-space:nowrap;\">
                                    ";
            // line 302
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["r"], "date", [], "any", false, false, false, 302)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 303
                yield "                                        <i class=\"fa-regular fa-calendar\" style=\"margin-right:5px;color:var(--text-muted);\"></i>
                                        ";
                // line 304
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "date", [], "any", false, false, false, 304), "d/m/Y"), "html", null, true);
                yield "
                                    ";
            } else {
                // line 306
                yield "                                        <span style=\"color:var(--text-muted);\">—</span>
                                    ";
            }
            // line 308
            yield "                                </td>

                                <td style=\"font-size:13px;white-space:nowrap;\">
                                    ";
            // line 311
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["r"], "heure", [], "any", false, false, false, 311)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 312
                yield "                                        <i class=\"fa-regular fa-clock\" style=\"margin-right:5px;color:var(--text-muted);\"></i>
                                        ";
                // line 313
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "heure", [], "any", false, false, false, 313), "H:i"), "html", null, true);
                yield "
                                    ";
            } else {
                // line 315
                yield "                                        <span style=\"color:var(--text-muted);\">—</span>
                                    ";
            }
            // line 317
            yield "                                </td>

                                <td style=\"font-weight:700;color:#ef4444;\">
                                    ";
            // line 320
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["r"], "calories", [], "any", true, true, false, 320) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["r"], "calories", [], "any", false, false, false, 320)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "calories", [], "any", false, false, false, 320), "html", null, true)) : ("—"));
            yield " kcal
                                </td>

                                ";
            // line 324
            yield "                                <td style=\"text-align:center;\">
                                    ";
            // line 325
            $context["score"] = CoreExtension::getAttribute($this->env, $this->source, $context["r"], "nutritionalScore", [], "any", false, false, false, 325);
            // line 326
            yield "                                    ";
            $context["sColor"] = CoreExtension::getAttribute($this->env, $this->source, $context["r"], "scoreColor", [], "any", false, false, false, 326);
            // line 327
            yield "                                    <span style=\"padding:3px 10px;border-radius:20px;font-size:12px;font-weight:700;background:";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sColor"]) || array_key_exists("sColor", $context) ? $context["sColor"] : (function () { throw new RuntimeError('Variable "sColor" does not exist.', 327, $this->source); })()), "html", null, true);
            yield "22;color:";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sColor"]) || array_key_exists("sColor", $context) ? $context["sColor"] : (function () { throw new RuntimeError('Variable "sColor" does not exist.', 327, $this->source); })()), "html", null, true);
            yield ";\">
                                        ";
            // line 328
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "scoreLabel", [], "any", false, false, false, 328), "html", null, true);
            yield "
                                    </span>
                                </td>


                                <td style=\"text-align:center;\">
                                    <div style=\"display:flex;gap:14px;justify-content:center;align-items:center;\">
                                        <a href=\"";
            // line 335
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_repas_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 335)]), "html", null, true);
            yield "\"
                                           title=\"Voir\"
                                           style=\"color:#60a5fa;font-size:15px;\">
                                            <i class=\"fa-solid fa-eye\"></i>
                                        </a>
                                        <a href=\"";
            // line 340
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_repas_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 340)]), "html", null, true);
            yield "\"
                                           title=\"Modifier\"
                                           style=\"color:#4ade80;font-size:15px;\">
                                            <i class=\"fa-solid fa-pen\"></i>
                                        </a>
                                                <a href=\"";
            // line 345
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_repas_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 345)]), "html", null, true);
            yield "\"
                                             title=\"Exporter PDF\"
                                             style=\"color:#f87171;font-size:15px;\">
                                             <i class=\"fa-solid fa-file-pdf\"></i>
                                         </a>
                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 353
        if (!$context['_iterated']) {
            // line 354
            yield "                            <tr>
                                <td colspan=\"8\" style=\"text-align:center;padding:40px;color:var(--text-muted);\">
                                    <i class=\"fa-solid fa-plate-wheat\" style=\"font-size:32px;margin-bottom:10px;display:block;opacity:.3;\"></i>
                                    ";
            // line 357
            if ((($tmp = ((array_key_exists("searchNom", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchNom"]) || array_key_exists("searchNom", $context) ? $context["searchNom"] : (function () { throw new RuntimeError('Variable "searchNom" does not exist.', 357, $this->source); })()), "")) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 358
                yield "                                        Aucun repas trouvé pour \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchNom"]) || array_key_exists("searchNom", $context) ? $context["searchNom"] : (function () { throw new RuntimeError('Variable "searchNom" does not exist.', 358, $this->source); })()), "html", null, true);
                yield "\".
                                    ";
            } else {
                // line 360
                yield "                                        Aucun repas enregistré.
                                        <a href=\"";
                // line 361
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_repas_new");
                yield "\" style=\"color:#059669;display:block;margin-top:8px;\">
                                            <i class=\"fa-solid fa-plus\" style=\"margin-right:4px;\"></i>Créer le premier repas
                                        </a>
                                    ";
            }
            // line 365
            yield "                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['r'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 368
        yield "                        </tbody>
                    </table>
                </div>

            </div>
        </section>

    </main>
</div>

<script src=\"";
        // line 378
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/templatemo-glass-admin-script.js"), "html", null, true);
        yield "\"></script>
</body>
</html>
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
        return "back/repas/index.html.twig";
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
        return array (  721 => 378,  709 => 368,  701 => 365,  694 => 361,  691 => 360,  685 => 358,  683 => 357,  678 => 354,  676 => 353,  663 => 345,  655 => 340,  647 => 335,  637 => 328,  630 => 327,  627 => 326,  625 => 325,  622 => 324,  616 => 320,  611 => 317,  607 => 315,  602 => 313,  599 => 312,  597 => 311,  592 => 308,  588 => 306,  583 => 304,  580 => 303,  578 => 302,  575 => 301,  568 => 296,  563 => 295,  558 => 294,  554 => 293,  550 => 292,  543 => 288,  538 => 286,  535 => 285,  530 => 284,  521 => 277,  516 => 275,  512 => 274,  494 => 258,  486 => 254,  484 => 253,  476 => 250,  471 => 248,  463 => 245,  458 => 243,  452 => 239,  446 => 237,  438 => 235,  436 => 234,  426 => 226,  417 => 223,  414 => 222,  410 => 221,  407 => 220,  398 => 217,  395 => 216,  390 => 215,  371 => 198,  363 => 192,  357 => 190,  355 => 189,  349 => 186,  343 => 183,  331 => 173,  308 => 152,  295 => 146,  282 => 140,  264 => 129,  251 => 123,  233 => 112,  220 => 106,  202 => 95,  189 => 89,  176 => 83,  158 => 72,  145 => 66,  127 => 55,  114 => 49,  96 => 38,  83 => 28,  78 => 25,  63 => 12,  59 => 11,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/back/repas/index.html.twig #}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Repas - Dashboard</title>

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/templatemo-glass-admin-style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/serchbtn.css') }}\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">
</head>

<body>
<div class=\"background\"></div>
<div class=\"orb orb-1\"></div>
<div class=\"orb orb-2\"></div>
<div class=\"orb orb-3\"></div>

<div class=\"dashboard\">

    {# ─── SIDEBAR ─── #}
    <aside class=\"sidebar\" id=\"sidebar\">
        <div class=\"sidebar-header\">
            <div class=\"logo\">
                <img src=\"{{ asset('images/logo.png') }}\" alt=\"Logo\" style=\"width:50px;height:auto;margin-top:12%;\">
            </div>
            <span class=\"logo-text\">AIVA</span>
        </div>

        <ul class=\"nav-menu\">
            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Menu Principal</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('dashboard') }}\" class=\"nav-link {% if app.request.attributes.get('_route') == 'dashboard' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M3 12l9-9 9 9\"/><path d=\"M9 21V9h6v12\"/></svg>
                            Tableau de bord
                        </a>
                    </li>
                </ul>
            </li>
            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Sports</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('back_sport_index') }}\" class=\"nav-link {% if app.request.attributes.get('_route') starts with 'back_sport_' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M7 7h10\"/><path d=\"M7 12h10\"/><path d=\"M7 17h10\"/></svg>
                            Activités
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_objectif_index') }}\" class=\"nav-link {% if app.request.attributes.get('_route') starts with 'app_objectif_' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><circle cx=\"12\" cy=\"12\" r=\"9\"/><path d=\"M12 7v5l3 3\"/></svg>
                            Objectifs
                        </a>
                    </li>
                </ul>
            </li>
            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Finance</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_depense_index') }}\" class=\"nav-link {% if app.request.attributes.get('_route') starts with 'app_depense_' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M6 3h12v4H6z\"/><path d=\"M4 9h16v4H4z\"/><path d=\"M6 15h12v4H6z\"/></svg>
                            Dépenses
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_categorie_index') }}\" class=\"nav-link {% if app.request.attributes.get('_route') starts with 'app_categorie_' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><rect x=\"3\" y=\"3\" width=\"7\" height=\"7\" rx=\"1\"/><rect x=\"14\" y=\"3\" width=\"7\" height=\"7\" rx=\"1\"/><rect x=\"3\" y=\"14\" width=\"7\" height=\"7\" rx=\"1\"/><rect x=\"14\" y=\"14\" width=\"7\" height=\"7\" rx=\"1\"/></svg>
                            Catégories
                        </a>
                    </li>
                </ul>
            </li>
            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Énergies</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('energy') }}\" class=\"nav-link {% if app.request.attributes.get('_route') == 'energy' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M13 2L3 14h7l-1 8 10-12h-7z\"/></svg>
                            Consommation d'énergie
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('recommendations') }}\" class=\"nav-link {% if app.request.attributes.get('_route') == 'recommendations' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M9 18h6\"/><path d=\"M10 22h4\"/><path d=\"M12 2a7 7 0 0 0-4 12c.6.6 1 1.5 1 2h6c0-.5.4-1.4 1-2a7 7 0 0 0-4-12z\"/></svg>
                            Recommandations
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('stateenergi') }}\" class=\"nav-link {% if app.request.attributes.get('_route') == 'stateenergi' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M3 3v18h18\"/><path d=\"M7 14l3-3 4 4 5-7\"/></svg>
                            Statistiques d'énergie
                        </a>
                    </li>
                </ul>
            </li>
            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Alimentation</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_aliment_index') }}\" class=\"nav-link {% if app.request.attributes.get('_route') starts with 'app_aliment_' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M12 3c-3 2-5 5-5 8a5 5 0 0 0 10 0c0-3-2-6-5-8z\"/><path d=\"M12 14v7\"/></svg>
                            Aliments
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_repas_index') }}\" class=\"nav-link {% if app.request.attributes.get('_route') starts with 'app_repas_' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M4 3v7a4 4 0 0 0 4 4v7\"/><path d=\"M8 3v8\"/><path d=\"M14 3v18\"/><path d=\"M20 3v7a4 4 0 0 1-4 4\"/></svg>
                            Repas
                        </a>
                    </li>
                </ul>
            </li>
            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Formation</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_cours_index') }}\" class=\"nav-link {% if app.request.attributes.get('_route') starts with 'app_cours_' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M4 19a2 2 0 0 0 2 2h12\"/><path d=\"M6 17V5a2 2 0 0 1 2-2h10v14H8a2 2 0 0 0-2 2z\"/></svg>
                            Cours
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_chapitre_index') }}\" class=\"nav-link {% if app.request.attributes.get('_route') starts with 'app_chapitre_' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M8 6h13\"/><path d=\"M8 12h13\"/><path d=\"M8 18h13\"/><path d=\"M3 6h.01\"/><path d=\"M3 12h.01\"/><path d=\"M3 18h.01\"/></svg>
                            Chapitres
                        </a>
                    </li>
                </ul>
            </li>
            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Compte</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_profile') }}\" class=\"nav-link {% if app.request.attributes.get('_route') == 'app_profile' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M20 21a8 8 0 0 0-16 0\"/><circle cx=\"12\" cy=\"7\" r=\"4\"/></svg>
                            Profil
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_user_index') }}\" class=\"nav-link {% if app.request.attributes.get('_route') starts with 'app_user_' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"/><circle cx=\"9\" cy=\"7\" r=\"4\"/><path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"/><path d=\"M16 3.13a4 4 0 0 1 0 7.75\"/></svg>
                            Users
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_logout') }}\" class=\"nav-link\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"/><polyline points=\"16 17 21 12 16 7\"/><line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"/></svg>
                            Déconnexion
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class=\"sidebar-footer\">
            <div class=\"user-profile\">
                <div class=\"user-avatar\">AD</div>
                <div class=\"user-info\">
                    <div class=\"user-name\">Admin</div>
                    <div class=\"user-role\">Administrator</div>
                </div>
            </div>
        </div>
    </aside>

    {# ─── MAIN ─── #}
    <main class=\"main-content\">

        <nav class=\"navbar\">
            <h1 class=\"page-title\">
                <i class=\"fa-solid fa-utensils\" style=\"margin-right:10px;color:#059669;\"></i>
                Mes Repas
            </h1>
            <div class=\"navbar-right\">

                <div class=\"search-box\">
                    <form method=\"get\" action=\"{{ path('app_repas_index') }}\" class=\"search-form\">
                        <input type=\"text\"
                               name=\"search\"
                               value=\"{{ searchNom|default('') }}\"
                               placeholder=\"Rechercher un repas...\"
                               class=\"search-input\">
                        {% if sortCalories %}
                            <input type=\"hidden\" name=\"sort\" value=\"{{ sortCalories }}\">
                        {% endif %}
                        <button type=\"submit\" class=\"search-btn\" title=\"Rechercher\">
                            <i class=\"fas fa-search\"></i>
                        </button>
                    </form>
                </div>

                <a href=\"{{ path('app_repas_new') }}\" class=\"card-btn\" style=\"margin-left:10px;\">
                    <i class=\"fa-solid fa-plus\" style=\"margin-right:8px;\"></i>Nouveau Repas
                </a>

                <button class=\"nav-btn\" id=\"theme-toggle\" title=\"Toggle Light/Dark Mode\" style=\"margin-left:10px;\">
                    <svg class=\"icon-sun\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <circle cx=\"12\" cy=\"12\" r=\"4\"/>
                        <path d=\"M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41\"/>
                    </svg>
                    <svg class=\"icon-moon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" style=\"display:none;\">
                        <path d=\"M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z\"/>
                    </svg>
                </button>
            </div>
        </nav>

        {# Flash messages #}
        {% for message in app.flashes('error') %}
            <div class=\"glass-card\" style=\"border:1px solid #ef4444;background:rgba(239,68,68,.12);color:#ef4444;padding:12px 16px;border-radius:12px;margin-bottom:16px;\">
                <i class=\"fa-solid fa-circle-exclamation\" style=\"margin-right:8px;\"></i><strong>Erreur :</strong> {{ message }}
            </div>
        {% endfor %}

        {% for message in app.flashes('success') %}
            <div class=\"glass-card\" style=\"border:1px solid rgba(5,150,105,.6);background:rgba(5,150,105,.12);color:rgba(5,150,105,.95);padding:12px 16px;border-radius:12px;margin-bottom:16px;\">
                <i class=\"fa-solid fa-circle-check\" style=\"margin-right:8px;\"></i><strong>Succès :</strong> {{ message }}
            </div>
        {% endfor %}

        <section class=\"content-grid\">
            <div class=\"glass-card table-card\">

                <div class=\"card-header\">
                    <div>
                        <h2 class=\"card-title\">Liste des repas</h2>
                        <p class=\"card-subtitle\">
                            {% if searchNom|default('') %}
                                {{ repas|length }} résultat(s) pour \"{{ searchNom }}\"
                            {% else %}
                                {{ repas|length }} repas au total
                            {% endif %}
                        </p>
                    </div>

                    <div style=\"display:flex;gap:10px;align-items:center;flex-wrap:wrap;\">
                        <a href=\"{{ path('app_repas_index', {'sort': 'asc', 'search': searchNom|default('')}) }}\"
                           class=\"card-btn\"
                           style=\"{% if sortCalories == 'asc' %}background:var(--emerald);color:#fff;{% endif %}\">
                            <i class=\"fa-solid fa-arrow-up\"></i> Calories
                        </a>
                        <a href=\"{{ path('app_repas_index', {'sort': 'desc', 'search': searchNom|default('')}) }}\"
                           class=\"card-btn\"
                           style=\"{% if sortCalories == 'desc' %}background:var(--emerald);color:#fff;{% endif %}\">
                            <i class=\"fa-solid fa-arrow-down\"></i> Calories
                        </a>
                        {% if searchNom|default('') or sortCalories %}
                            <a href=\"{{ path('app_repas_index') }}\" class=\"card-btn\">
                                <i class=\"fa-solid fa-xmark\" style=\"margin-right:6px;\"></i>Réinitialiser
                            </a>
                        {% endif %}
                    </div>
                </div>

                <div class=\"table-wrapper\">
                    <table class=\"data-table\">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Type</th>
                                <th>
                                    <i class=\"fa-regular fa-calendar\" style=\"margin-right:4px;\"></i>Date
                                </th>
                                <th>Heure</th>
                                <th>
                                    Calories
                                    {% if sortCalories == 'asc' %}<i class=\"fa-solid fa-arrow-up\" style=\"font-size:11px;\"></i>
                                    {% elseif sortCalories == 'desc' %}<i class=\"fa-solid fa-arrow-down\" style=\"font-size:11px;\"></i>
                                    {% endif %}
                                </th>
                                <th style=\"text-align:center;\">Score</th>
                                <th style=\"text-align:center;\">Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                        {% for r in repas %}
                            <tr>
                                <td style=\"color:var(--text-muted);font-size:13px;\">{{ r.id }}</td>

                                <td><strong>{{ r.nom }}</strong></td>

                                <td>
                                    <span style=\"padding:3px 12px;border-radius:20px;font-size:12px;font-weight:600;
                                        {% if r.type == 'petit-dejeuner' %}background:rgba(251,191,36,.15);color:#fbbf24;
                                        {% elseif r.type == 'dejeuner' %}background:rgba(5,150,105,.15);color:#059669;
                                        {% elseif r.type == 'diner' %}background:rgba(139,92,246,.15);color:#8b5cf6;
                                        {% else %}background:rgba(59,130,246,.15);color:#3b82f6;{% endif %}\">
                                        {{ r.type|replace({'-': ' '})|title }}
                                    </span>
                                </td>

                                {# ✅ Colonne Date #}
                                <td style=\"font-size:13px;white-space:nowrap;\">
                                    {% if r.date %}
                                        <i class=\"fa-regular fa-calendar\" style=\"margin-right:5px;color:var(--text-muted);\"></i>
                                        {{ r.date|date('d/m/Y') }}
                                    {% else %}
                                        <span style=\"color:var(--text-muted);\">—</span>
                                    {% endif %}
                                </td>

                                <td style=\"font-size:13px;white-space:nowrap;\">
                                    {% if r.heure %}
                                        <i class=\"fa-regular fa-clock\" style=\"margin-right:5px;color:var(--text-muted);\"></i>
                                        {{ r.heure|date('H:i') }}
                                    {% else %}
                                        <span style=\"color:var(--text-muted);\">—</span>
                                    {% endif %}
                                </td>

                                <td style=\"font-weight:700;color:#ef4444;\">
                                    {{ r.calories ?? '—' }} kcal
                                </td>

                                {# Score nutritionnel mini badge #}
                                <td style=\"text-align:center;\">
                                    {% set score = r.nutritionalScore %}
                                    {% set sColor = r.scoreColor %}
                                    <span style=\"padding:3px 10px;border-radius:20px;font-size:12px;font-weight:700;background:{{ sColor }}22;color:{{ sColor }};\">
                                        {{ r.scoreLabel }}
                                    </span>
                                </td>


                                <td style=\"text-align:center;\">
                                    <div style=\"display:flex;gap:14px;justify-content:center;align-items:center;\">
                                        <a href=\"{{ path('app_repas_show', {'id': r.id}) }}\"
                                           title=\"Voir\"
                                           style=\"color:#60a5fa;font-size:15px;\">
                                            <i class=\"fa-solid fa-eye\"></i>
                                        </a>
                                        <a href=\"{{ path('app_repas_edit', {'id': r.id}) }}\"
                                           title=\"Modifier\"
                                           style=\"color:#4ade80;font-size:15px;\">
                                            <i class=\"fa-solid fa-pen\"></i>
                                        </a>
                                                <a href=\"{{ path('app_repas_pdf', {'id': r.id}) }}\"
                                             title=\"Exporter PDF\"
                                             style=\"color:#f87171;font-size:15px;\">
                                             <i class=\"fa-solid fa-file-pdf\"></i>
                                         </a>
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"8\" style=\"text-align:center;padding:40px;color:var(--text-muted);\">
                                    <i class=\"fa-solid fa-plate-wheat\" style=\"font-size:32px;margin-bottom:10px;display:block;opacity:.3;\"></i>
                                    {% if searchNom|default('') %}
                                        Aucun repas trouvé pour \"{{ searchNom }}\".
                                    {% else %}
                                        Aucun repas enregistré.
                                        <a href=\"{{ path('app_repas_new') }}\" style=\"color:#059669;display:block;margin-top:8px;\">
                                            <i class=\"fa-solid fa-plus\" style=\"margin-right:4px;\"></i>Créer le premier repas
                                        </a>
                                    {% endif %}
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>

            </div>
        </section>

    </main>
</div>

<script src=\"{{ asset('js/templatemo-glass-admin-script.js') }}\"></script>
</body>
</html>
", "back/repas/index.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\back\\repas\\index.html.twig");
    }
}
