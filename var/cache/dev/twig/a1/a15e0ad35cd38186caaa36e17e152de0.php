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

/* back/repas/edit.html.twig */
class __TwigTemplate_a85af8176959c16414a0ca1b329e87ba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/repas/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/repas/edit.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Modifier Repas - Dashboard</title>

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/templatemo-glass-admin-style.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
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
        // line 27
        yield "    <aside class=\"sidebar\" id=\"sidebar\">
        <div class=\"sidebar-header\">
            <div class=\"logo\">
                <img src=\"";
        // line 30
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
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\"
                           class=\"nav-link ";
        // line 41
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "request", [], "any", false, false, false, 41), "attributes", [], "any", false, false, false, 41), "get", ["_route"], "method", false, false, false, 41) == "dashboard")) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M3 12l9-9 9 9\"/><path d=\"M9 21V9h6v12\"/>
                            </svg>
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
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_sport_index");
        yield "\"
                           class=\"nav-link ";
        // line 56
        if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "request", [], "any", false, false, false, 56), "attributes", [], "any", false, false, false, 56), "get", ["_route"], "method", false, false, false, 56)) && is_string($_v1 = "back_sport_") && str_starts_with($_v0, $_v1))) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M7 7h10\"/><path d=\"M7 12h10\"/><path d=\"M7 17h10\"/>
                            </svg>
                            Activités
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_index");
        yield "\"
                           class=\"nav-link ";
        // line 65
        if ((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "request", [], "any", false, false, false, 65), "attributes", [], "any", false, false, false, 65), "get", ["_route"], "method", false, false, false, 65)) && is_string($_v3 = "app_objectif_") && str_starts_with($_v2, $_v3))) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <circle cx=\"12\" cy=\"12\" r=\"9\"/><path d=\"M12 7v5l3 3\"/>
                            </svg>
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
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depense_index");
        yield "\"
                           class=\"nav-link ";
        // line 80
        if ((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "request", [], "any", false, false, false, 80), "attributes", [], "any", false, false, false, 80), "get", ["_route"], "method", false, false, false, 80)) && is_string($_v5 = "app_depense_") && str_starts_with($_v4, $_v5))) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M6 3h12v4H6z\"/><path d=\"M4 9h16v4H4z\"/><path d=\"M6 15h12v4H6z\"/>
                            </svg>
                            Dépenses
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index");
        yield "\"
                           class=\"nav-link ";
        // line 89
        if ((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "request", [], "any", false, false, false, 89), "attributes", [], "any", false, false, false, 89), "get", ["_route"], "method", false, false, false, 89)) && is_string($_v7 = "app_categorie_") && str_starts_with($_v6, $_v7))) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <rect x=\"3\" y=\"3\" width=\"7\" height=\"7\" rx=\"1\"/>
                                <rect x=\"14\" y=\"3\" width=\"7\" height=\"7\" rx=\"1\"/>
                                <rect x=\"3\" y=\"14\" width=\"7\" height=\"7\" rx=\"1\"/>
                                <rect x=\"14\" y=\"14\" width=\"7\" height=\"7\" rx=\"1\"/>
                            </svg>
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
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("energy");
        yield "\"
                           class=\"nav-link ";
        // line 107
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "request", [], "any", false, false, false, 107), "attributes", [], "any", false, false, false, 107), "get", ["_route"], "method", false, false, false, 107) == "energy")) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M13 2L3 14h7l-1 8 10-12h-7z\"/>
                            </svg>
                            Consommation d'énergie
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 115
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recommendations");
        yield "\"
                           class=\"nav-link ";
        // line 116
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "request", [], "any", false, false, false, 116), "attributes", [], "any", false, false, false, 116), "get", ["_route"], "method", false, false, false, 116) == "recommendations")) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M9 18h6\"/><path d=\"M10 22h4\"/>
                                <path d=\"M12 2a7 7 0 0 0-4 12c.6.6 1 1.5 1 2h6c0-.5.4-1.4 1-2a7 7 0 0 0-4-12z\"/>
                            </svg>
                            Recommandations
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 125
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stateenergi");
        yield "\"
                           class=\"nav-link ";
        // line 126
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 126, $this->source); })()), "request", [], "any", false, false, false, 126), "attributes", [], "any", false, false, false, 126), "get", ["_route"], "method", false, false, false, 126) == "stateenergi")) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M3 3v18h18\"/><path d=\"M7 14l3-3 4 4 5-7\"/>
                            </svg>
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
        // line 140
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_aliment_index");
        yield "\"
                           class=\"nav-link ";
        // line 141
        if ((is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 141, $this->source); })()), "request", [], "any", false, false, false, 141), "attributes", [], "any", false, false, false, 141), "get", ["_route"], "method", false, false, false, 141)) && is_string($_v9 = "app_aliment_") && str_starts_with($_v8, $_v9))) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M12 3c-3 2-5 5-5 8a5 5 0 0 0 10 0c0-3-2-6-5-8z\"/>
                                <path d=\"M12 14v7\"/>
                            </svg>
                            Aliments
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 150
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_repas_index");
        yield "\"
                           class=\"nav-link ";
        // line 151
        if ((is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 151, $this->source); })()), "request", [], "any", false, false, false, 151), "attributes", [], "any", false, false, false, 151), "get", ["_route"], "method", false, false, false, 151)) && is_string($_v11 = "app_repas_") && str_starts_with($_v10, $_v11))) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M4 3v7a4 4 0 0 0 4 4v7\"/><path d=\"M8 3v8\"/>
                                <path d=\"M14 3v18\"/><path d=\"M20 3v7a4 4 0 0 1-4 4\"/>
                            </svg>
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
        // line 166
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_index");
        yield "\"
                           class=\"nav-link ";
        // line 167
        if ((is_string($_v12 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 167, $this->source); })()), "request", [], "any", false, false, false, 167), "attributes", [], "any", false, false, false, 167), "get", ["_route"], "method", false, false, false, 167)) && is_string($_v13 = "app_cours_") && str_starts_with($_v12, $_v13))) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M4 19a2 2 0 0 0 2 2h12\"/>
                                <path d=\"M6 17V5a2 2 0 0 1 2-2h10v14H8a2 2 0 0 0-2 2z\"/>
                            </svg>
                            Cours
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 176
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chapitre_index");
        yield "\"
                           class=\"nav-link ";
        // line 177
        if ((is_string($_v14 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 177, $this->source); })()), "request", [], "any", false, false, false, 177), "attributes", [], "any", false, false, false, 177), "get", ["_route"], "method", false, false, false, 177)) && is_string($_v15 = "app_chapitre_") && str_starts_with($_v14, $_v15))) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M8 6h13\"/><path d=\"M8 12h13\"/><path d=\"M8 18h13\"/>
                                <path d=\"M3 6h.01\"/><path d=\"M3 12h.01\"/><path d=\"M3 18h.01\"/>
                            </svg>
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
        // line 192
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\"
                           class=\"nav-link ";
        // line 193
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 193, $this->source); })()), "request", [], "any", false, false, false, 193), "attributes", [], "any", false, false, false, 193), "get", ["_route"], "method", false, false, false, 193) == "app_profile")) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M20 21a8 8 0 0 0-16 0\"/><circle cx=\"12\" cy=\"7\" r=\"4\"/>
                            </svg>
                            Profil
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 201
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\"
                           class=\"nav-link ";
        // line 202
        if ((is_string($_v16 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 202, $this->source); })()), "request", [], "any", false, false, false, 202), "attributes", [], "any", false, false, false, 202), "get", ["_route"], "method", false, false, false, 202)) && is_string($_v17 = "app_user_") && str_starts_with($_v16, $_v17))) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"/>
                                <circle cx=\"9\" cy=\"7\" r=\"4\"/>
                                <path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"/>
                                <path d=\"M16 3.13a4 4 0 0 1 0 7.75\"/>
                            </svg>
                            Users
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 213
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"nav-link\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"/>
                                <polyline points=\"16 17 21 12 16 7\"/>
                                <line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"/>
                            </svg>
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
        // line 238
        yield "    <main class=\"main-content\">

        <nav class=\"navbar\">
            <h1 class=\"page-title\">
                <i class=\"fa-solid fa-pen-to-square\" style=\"margin-right:10px;color:#059669;\"></i>
                Modifier : ";
        // line 243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 243, $this->source); })()), "nom", [], "any", false, false, false, 243), "html", null, true);
        yield "
            </h1>
            <div class=\"navbar-right\">
                <a href=\"";
        // line 246
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_repas_index");
        yield "\" class=\"card-btn\">
                    <i class=\"fa-solid fa-arrow-left\" style=\"margin-right:8px;\"></i>Retour
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

        <section class=\"content-grid\">
            <div class=\"glass-card\" style=\"padding:24px;\">

                ";
        // line 265
        yield "                ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 265, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

                <div class=\"settings-grid\">

                    ";
        // line 270
        yield "                    <div class=\"glass-card settings-nav-card\">
                        <ul class=\"settings-nav\">
                            <li class=\"settings-nav-item\">
                                <a href=\"#\" class=\"settings-nav-link active\" data-tab=\"informations\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                        <path d=\"M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2\"/>
                                        <path d=\"M7 2v20\"/>
                                        <path d=\"M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7\"/>
                                    </svg>
                                    Informations
                                </a>
                            </li>
                            <li class=\"settings-nav-item\">
                                <a href=\"#\" class=\"settings-nav-link\" data-tab=\"aliments\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                        <path d=\"M18 8h1a4 4 0 0 1 0 8h-1\"/>
                                        <path d=\"M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z\"/>
                                        <line x1=\"6\" y1=\"1\" x2=\"6\" y2=\"4\"/>
                                    </svg>
                                    Aliments
                                </a>
                            </li>
                        </ul>
                    </div>

                    ";
        // line 296
        yield "                    <div class=\"glass-card\">

                        ";
        // line 299
        yield "                        <div class=\"settings-tab-content active\" id=\"tab-informations\">
                            <div class=\"settings-section\">
                                <h3 class=\"settings-section-title\">Détails du Repas</h3>
                                ";
        // line 302
        yield Twig\Extension\CoreExtension::include($this->env, $context, "back/repas/_form.html.twig");
        yield "
                            </div>

                            <div class=\"btn-group\" style=\"gap:12px;margin-top:24px;\">
                                <button type=\"submit\" class=\"btn btn-primary\" style=\"width:auto;\">
                                    <i class=\"fa-solid fa-check\" style=\"margin-right:8px;\"></i>Mettre à jour
                                </button>
                                <a href=\"";
        // line 309
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_repas_index");
        yield "\" class=\"btn btn-secondary\" style=\"width:auto;\">
                                    Annuler
                                </a>
                                ";
        // line 313
        yield "                                <button type=\"button\"
                                        class=\"btn\"
                                        style=\"width:auto;background:rgba(239,68,68,.15);color:#ef4444;margin-left:auto;\"
                                        onclick=\"if(confirm('Êtes-vous sûr de vouloir supprimer ce repas ?')){document.getElementById('delete-form').submit();}\">
                                    <i class=\"fa-solid fa-trash\" style=\"margin-right:8px;\"></i>Supprimer
                                </button>
                            </div>
                        </div>

                        ";
        // line 323
        yield "                        <div class=\"settings-tab-content\" id=\"tab-aliments\">
                            <div class=\"settings-section\">
                                <h3 class=\"settings-section-title\">Aliments du Repas</h3>

                                ";
        // line 327
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "aliments", [], "any", true, true, false, 327)) {
            // line 328
            yield "                                    <div class=\"rfg-field full-width\" style=\"margin-top:8px;\">
                                        ";
            // line 329
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 329, $this->source); })()), "aliments", [], "any", false, false, false, 329), 'label', ["label" => "Sélectionner les aliments"]);
            yield "
                                        ";
            // line 330
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 330, $this->source); })()), "aliments", [], "any", false, false, false, 330), 'widget', ["attr" => ["class" => "settings-select", "size" => "10", "style" => "height:300px;"]]);
            // line 336
            yield "
                                        ";
            // line 337
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 337, $this->source); })()), "aliments", [], "any", false, false, false, 337), 'errors');
            yield "
                                        <p style=\"color:var(--text-muted);font-size:13px;margin-top:8px;\">
                                            <i class=\"fa-solid fa-circle-info\" style=\"margin-right:6px;\"></i>
                                            Maintenez <kbd>Ctrl</kbd> (Windows) ou <kbd>Cmd</kbd> (Mac) pour sélectionner plusieurs aliments.
                                        </p>
                                    </div>
                                ";
        } else {
            // line 344
            yield "                                    <p style=\"color:var(--text-muted);text-align:center;padding:24px;\">
                                        Aucun champ aliments disponible.
                                    </p>
                                ";
        }
        // line 348
        yield "                            </div>

                            <div class=\"btn-group\" style=\"gap:12px;margin-top:24px;\">
                                <button type=\"submit\" class=\"btn btn-primary\" style=\"width:auto;\">
                                    <i class=\"fa-solid fa-check\" style=\"margin-right:8px;\"></i>Mettre à jour
                                </button>
                                <a href=\"";
        // line 354
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_repas_index");
        yield "\" class=\"btn btn-secondary\" style=\"width:auto;\">
                                    Annuler
                                </a>
                            </div>
                        </div>

                    </div>";
        // line 361
        yield "                </div>";
        // line 362
        yield "
                ";
        // line 363
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 363, $this->source); })()), 'form_end');
        yield "
            </div>
        </section>

    </main>
</div>

";
        // line 371
        yield Twig\Extension\CoreExtension::include($this->env, $context, "back/repas/_delete_form.html.twig", ["repa" => (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 371, $this->source); })())]);
        yield "

<script src=\"";
        // line 373
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/templatemo-glass-admin-script.js"), "html", null, true);
        yield "\"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const tabLinks    = document.querySelectorAll('.settings-nav-link[data-tab]');
    const tabContents = document.querySelectorAll('.settings-tab-content');

    tabLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const tabId = this.getAttribute('data-tab');
            tabLinks.forEach(l => l.classList.remove('active'));
            tabContents.forEach(t => t.classList.remove('active'));
            this.classList.add('active');
            document.getElementById('tab-' + tabId).classList.add('active');
        });
    });
});
</script>

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
        return "back/repas/edit.html.twig";
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
        return array (  588 => 373,  583 => 371,  573 => 363,  570 => 362,  568 => 361,  559 => 354,  551 => 348,  545 => 344,  535 => 337,  532 => 336,  530 => 330,  526 => 329,  523 => 328,  521 => 327,  515 => 323,  504 => 313,  498 => 309,  488 => 302,  483 => 299,  479 => 296,  452 => 270,  444 => 265,  423 => 246,  417 => 243,  410 => 238,  383 => 213,  367 => 202,  363 => 201,  350 => 193,  346 => 192,  326 => 177,  322 => 176,  308 => 167,  304 => 166,  284 => 151,  280 => 150,  266 => 141,  262 => 140,  243 => 126,  239 => 125,  225 => 116,  221 => 115,  208 => 107,  204 => 106,  182 => 89,  178 => 88,  165 => 80,  161 => 79,  142 => 65,  138 => 64,  125 => 56,  121 => 55,  102 => 41,  98 => 40,  85 => 30,  80 => 27,  64 => 13,  60 => 12,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/back/repas/edit.html.twig #}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Modifier Repas - Dashboard</title>

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

    {# ─── SIDEBAR (identique à new.html.twig) ─── #}
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
                        <a href=\"{{ path('dashboard') }}\"
                           class=\"nav-link {% if app.request.attributes.get('_route') == 'dashboard' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M3 12l9-9 9 9\"/><path d=\"M9 21V9h6v12\"/>
                            </svg>
                            Tableau de bord
                        </a>
                    </li>
                </ul>
            </li>

            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Sports</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('back_sport_index') }}\"
                           class=\"nav-link {% if app.request.attributes.get('_route') starts with 'back_sport_' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M7 7h10\"/><path d=\"M7 12h10\"/><path d=\"M7 17h10\"/>
                            </svg>
                            Activités
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_objectif_index') }}\"
                           class=\"nav-link {% if app.request.attributes.get('_route') starts with 'app_objectif_' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <circle cx=\"12\" cy=\"12\" r=\"9\"/><path d=\"M12 7v5l3 3\"/>
                            </svg>
                            Objectifs
                        </a>
                    </li>
                </ul>
            </li>

            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Finance</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_depense_index') }}\"
                           class=\"nav-link {% if app.request.attributes.get('_route') starts with 'app_depense_' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M6 3h12v4H6z\"/><path d=\"M4 9h16v4H4z\"/><path d=\"M6 15h12v4H6z\"/>
                            </svg>
                            Dépenses
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_categorie_index') }}\"
                           class=\"nav-link {% if app.request.attributes.get('_route') starts with 'app_categorie_' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <rect x=\"3\" y=\"3\" width=\"7\" height=\"7\" rx=\"1\"/>
                                <rect x=\"14\" y=\"3\" width=\"7\" height=\"7\" rx=\"1\"/>
                                <rect x=\"3\" y=\"14\" width=\"7\" height=\"7\" rx=\"1\"/>
                                <rect x=\"14\" y=\"14\" width=\"7\" height=\"7\" rx=\"1\"/>
                            </svg>
                            Catégories
                        </a>
                    </li>
                </ul>
            </li>

            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Énergies</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('energy') }}\"
                           class=\"nav-link {% if app.request.attributes.get('_route') == 'energy' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M13 2L3 14h7l-1 8 10-12h-7z\"/>
                            </svg>
                            Consommation d'énergie
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('recommendations') }}\"
                           class=\"nav-link {% if app.request.attributes.get('_route') == 'recommendations' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M9 18h6\"/><path d=\"M10 22h4\"/>
                                <path d=\"M12 2a7 7 0 0 0-4 12c.6.6 1 1.5 1 2h6c0-.5.4-1.4 1-2a7 7 0 0 0-4-12z\"/>
                            </svg>
                            Recommandations
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('stateenergi') }}\"
                           class=\"nav-link {% if app.request.attributes.get('_route') == 'stateenergi' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M3 3v18h18\"/><path d=\"M7 14l3-3 4 4 5-7\"/>
                            </svg>
                            Statistiques d'énergie
                        </a>
                    </li>
                </ul>
            </li>

            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Alimentation</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_aliment_index') }}\"
                           class=\"nav-link {% if app.request.attributes.get('_route') starts with 'app_aliment_' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M12 3c-3 2-5 5-5 8a5 5 0 0 0 10 0c0-3-2-6-5-8z\"/>
                                <path d=\"M12 14v7\"/>
                            </svg>
                            Aliments
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_repas_index') }}\"
                           class=\"nav-link {% if app.request.attributes.get('_route') starts with 'app_repas_' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M4 3v7a4 4 0 0 0 4 4v7\"/><path d=\"M8 3v8\"/>
                                <path d=\"M14 3v18\"/><path d=\"M20 3v7a4 4 0 0 1-4 4\"/>
                            </svg>
                            Repas
                        </a>
                    </li>
                </ul>
            </li>

            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Formation</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_cours_index') }}\"
                           class=\"nav-link {% if app.request.attributes.get('_route') starts with 'app_cours_' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M4 19a2 2 0 0 0 2 2h12\"/>
                                <path d=\"M6 17V5a2 2 0 0 1 2-2h10v14H8a2 2 0 0 0-2 2z\"/>
                            </svg>
                            Cours
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_chapitre_index') }}\"
                           class=\"nav-link {% if app.request.attributes.get('_route') starts with 'app_chapitre_' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M8 6h13\"/><path d=\"M8 12h13\"/><path d=\"M8 18h13\"/>
                                <path d=\"M3 6h.01\"/><path d=\"M3 12h.01\"/><path d=\"M3 18h.01\"/>
                            </svg>
                            Chapitres
                        </a>
                    </li>
                </ul>
            </li>

            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Compte</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_profile') }}\"
                           class=\"nav-link {% if app.request.attributes.get('_route') == 'app_profile' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M20 21a8 8 0 0 0-16 0\"/><circle cx=\"12\" cy=\"7\" r=\"4\"/>
                            </svg>
                            Profil
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_user_index') }}\"
                           class=\"nav-link {% if app.request.attributes.get('_route') starts with 'app_user_' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"/>
                                <circle cx=\"9\" cy=\"7\" r=\"4\"/>
                                <path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"/>
                                <path d=\"M16 3.13a4 4 0 0 1 0 7.75\"/>
                            </svg>
                            Users
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_logout') }}\" class=\"nav-link\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"/>
                                <polyline points=\"16 17 21 12 16 7\"/>
                                <line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"/>
                            </svg>
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
                <i class=\"fa-solid fa-pen-to-square\" style=\"margin-right:10px;color:#059669;\"></i>
                Modifier : {{ repas.nom }}
            </h1>
            <div class=\"navbar-right\">
                <a href=\"{{ path('app_repas_index') }}\" class=\"card-btn\">
                    <i class=\"fa-solid fa-arrow-left\" style=\"margin-right:8px;\"></i>Retour
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

        <section class=\"content-grid\">
            <div class=\"glass-card\" style=\"padding:24px;\">

                {# ✅ novalidate = désactive HTML5, validation = Symfony uniquement #}
                {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

                <div class=\"settings-grid\">

                    {# Onglets gauche #}
                    <div class=\"glass-card settings-nav-card\">
                        <ul class=\"settings-nav\">
                            <li class=\"settings-nav-item\">
                                <a href=\"#\" class=\"settings-nav-link active\" data-tab=\"informations\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                        <path d=\"M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2\"/>
                                        <path d=\"M7 2v20\"/>
                                        <path d=\"M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7\"/>
                                    </svg>
                                    Informations
                                </a>
                            </li>
                            <li class=\"settings-nav-item\">
                                <a href=\"#\" class=\"settings-nav-link\" data-tab=\"aliments\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                        <path d=\"M18 8h1a4 4 0 0 1 0 8h-1\"/>
                                        <path d=\"M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z\"/>
                                        <line x1=\"6\" y1=\"1\" x2=\"6\" y2=\"4\"/>
                                    </svg>
                                    Aliments
                                </a>
                            </li>
                        </ul>
                    </div>

                    {# Contenu onglets droit #}
                    <div class=\"glass-card\">

                        {# ── Onglet Informations ── #}
                        <div class=\"settings-tab-content active\" id=\"tab-informations\">
                            <div class=\"settings-section\">
                                <h3 class=\"settings-section-title\">Détails du Repas</h3>
                                {{ include('back/repas/_form.html.twig') }}
                            </div>

                            <div class=\"btn-group\" style=\"gap:12px;margin-top:24px;\">
                                <button type=\"submit\" class=\"btn btn-primary\" style=\"width:auto;\">
                                    <i class=\"fa-solid fa-check\" style=\"margin-right:8px;\"></i>Mettre à jour
                                </button>
                                <a href=\"{{ path('app_repas_index') }}\" class=\"btn btn-secondary\" style=\"width:auto;\">
                                    Annuler
                                </a>
                                {# Bouton supprimer → déclenche le formulaire DELETE hidden #}
                                <button type=\"button\"
                                        class=\"btn\"
                                        style=\"width:auto;background:rgba(239,68,68,.15);color:#ef4444;margin-left:auto;\"
                                        onclick=\"if(confirm('Êtes-vous sûr de vouloir supprimer ce repas ?')){document.getElementById('delete-form').submit();}\">
                                    <i class=\"fa-solid fa-trash\" style=\"margin-right:8px;\"></i>Supprimer
                                </button>
                            </div>
                        </div>

                        {# ── Onglet Aliments ── #}
                        <div class=\"settings-tab-content\" id=\"tab-aliments\">
                            <div class=\"settings-section\">
                                <h3 class=\"settings-section-title\">Aliments du Repas</h3>

                                {% if form.aliments is defined %}
                                    <div class=\"rfg-field full-width\" style=\"margin-top:8px;\">
                                        {{ form_label(form.aliments, 'Sélectionner les aliments') }}
                                        {{ form_widget(form.aliments, {
                                            'attr': {
                                                'class':    'settings-select',
                                                'size':     '10',
                                                'style':    'height:300px;'
                                            }
                                        }) }}
                                        {{ form_errors(form.aliments) }}
                                        <p style=\"color:var(--text-muted);font-size:13px;margin-top:8px;\">
                                            <i class=\"fa-solid fa-circle-info\" style=\"margin-right:6px;\"></i>
                                            Maintenez <kbd>Ctrl</kbd> (Windows) ou <kbd>Cmd</kbd> (Mac) pour sélectionner plusieurs aliments.
                                        </p>
                                    </div>
                                {% else %}
                                    <p style=\"color:var(--text-muted);text-align:center;padding:24px;\">
                                        Aucun champ aliments disponible.
                                    </p>
                                {% endif %}
                            </div>

                            <div class=\"btn-group\" style=\"gap:12px;margin-top:24px;\">
                                <button type=\"submit\" class=\"btn btn-primary\" style=\"width:auto;\">
                                    <i class=\"fa-solid fa-check\" style=\"margin-right:8px;\"></i>Mettre à jour
                                </button>
                                <a href=\"{{ path('app_repas_index') }}\" class=\"btn btn-secondary\" style=\"width:auto;\">
                                    Annuler
                                </a>
                            </div>
                        </div>

                    </div>{# /glass-card right #}
                </div>{# /settings-grid #}

                {{ form_end(form) }}
            </div>
        </section>

    </main>
</div>

{# ─── Formulaire DELETE (doit avoir id=\"delete-form\") ─── #}
{{ include('back/repas/_delete_form.html.twig', {'repa': repas}) }}

<script src=\"{{ asset('js/templatemo-glass-admin-script.js') }}\"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const tabLinks    = document.querySelectorAll('.settings-nav-link[data-tab]');
    const tabContents = document.querySelectorAll('.settings-tab-content');

    tabLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const tabId = this.getAttribute('data-tab');
            tabLinks.forEach(l => l.classList.remove('active'));
            tabContents.forEach(t => t.classList.remove('active'));
            this.classList.add('active');
            document.getElementById('tab-' + tabId).classList.add('active');
        });
    });
});
</script>

</body>
</html>
", "back/repas/edit.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\back\\repas\\edit.html.twig");
    }
}
