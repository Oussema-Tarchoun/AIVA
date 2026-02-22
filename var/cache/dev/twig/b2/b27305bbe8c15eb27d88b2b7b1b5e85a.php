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

/* back/aliment/new.html.twig */
class __TwigTemplate_c6ff5fff5ddec98e6695d97d6f30bfab extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/aliment/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/aliment/new.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Nouvel Aliment - Dashboard</title>

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">

    ";
        // line 13
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/templatemo-glass-admin-style.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
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
        // line 28
        yield "    <aside class=\"sidebar\" id=\"sidebar\">
        <div class=\"sidebar-header\">
            <div class=\"logo\">
                <img src=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Logo\" style=\"width: 50px; height: auto; margin-top: 12%;\">
            </div>
            <span class=\"logo-text\">AIVA</span>
        </div>

        <ul class=\"nav-menu\">

            ";
        // line 39
        yield "            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Menu Principal</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\"
                           class=\"nav-link ";
        // line 44
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "request", [], "any", false, false, false, 44), "attributes", [], "any", false, false, false, 44), "get", ["_route"], "method", false, false, false, 44) == "dashboard")) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M3 12l9-9 9 9\"/>
                                <path d=\"M9 21V9h6v12\"/>
                            </svg>
                            Tableau de bord
                        </a>
                    </li>
                </ul>
            </li>

            ";
        // line 56
        yield "            <span class=\"nav-section-title\">sports</span>
            <li class=\"nav-item\">
                <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_sport_index");
        yield "\"
                   class=\"nav-link ";
        // line 59
        if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "request", [], "any", false, false, false, 59), "attributes", [], "any", false, false, false, 59), "get", ["_route"], "method", false, false, false, 59)) && is_string($_v1 = "back_sport_") && str_starts_with($_v0, $_v1))) {
            yield "active";
        }
        yield "\">
                    <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M7 7h10\"/>
                        <path d=\"M7 12h10\"/>
                        <path d=\"M7 17h10\"/>
                    </svg>
                    Activités
                </a>
            </li>

            <li class=\"nav-item\">
                <a href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_index");
        yield "\"
                   class=\"nav-link ";
        // line 71
        if ((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "request", [], "any", false, false, false, 71), "attributes", [], "any", false, false, false, 71), "get", ["_route"], "method", false, false, false, 71)) && is_string($_v3 = "app_objectif_") && str_starts_with($_v2, $_v3))) {
            yield "active";
        }
        yield "\">
                    <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <circle cx=\"12\" cy=\"12\" r=\"9\"/>
                        <path d=\"M12 7v5l3 3\"/>
                    </svg>
                    Objectifs
                </a>
            </li>

            ";
        // line 81
        yield "            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Finance</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depense_index");
        yield "\"
                           class=\"nav-link ";
        // line 86
        if ((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "request", [], "any", false, false, false, 86), "attributes", [], "any", false, false, false, 86), "get", ["_route"], "method", false, false, false, 86)) && is_string($_v5 = "app_depense_") && str_starts_with($_v4, $_v5))) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M6 3h12v4H6z\"/>
                                <path d=\"M4 9h16v4H4z\"/>
                                <path d=\"M6 15h12v4H6z\"/>
                            </svg>
                            Dépenses
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index");
        yield "\"
                           class=\"nav-link ";
        // line 98
        if ((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "request", [], "any", false, false, false, 98), "attributes", [], "any", false, false, false, 98), "get", ["_route"], "method", false, false, false, 98)) && is_string($_v7 = "app_categorie_") && str_starts_with($_v6, $_v7))) {
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

            ";
        // line 112
        yield "            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Énergies</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 116
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("energy");
        yield "\"
                           class=\"nav-link ";
        // line 117
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "request", [], "any", false, false, false, 117), "attributes", [], "any", false, false, false, 117), "get", ["_route"], "method", false, false, false, 117) == "energy")) {
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
        // line 126
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recommendations");
        yield "\"
                           class=\"nav-link ";
        // line 127
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 127, $this->source); })()), "request", [], "any", false, false, false, 127), "attributes", [], "any", false, false, false, 127), "get", ["_route"], "method", false, false, false, 127) == "recommendations")) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M9 18h6\"/>
                                <path d=\"M10 22h4\"/>
                                <path d=\"M12 2a7 7 0 0 0-4 12c.6.6 1 1.5 1 2h6c0-.5.4-1.4 1-2a7 7 0 0 0-4-12z\"/>
                            </svg>
                            Recommandations
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"";
        // line 138
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stateenergi");
        yield "\"
                           class=\"nav-link ";
        // line 139
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 139, $this->source); })()), "request", [], "any", false, false, false, 139), "attributes", [], "any", false, false, false, 139), "get", ["_route"], "method", false, false, false, 139) == "stateenergi")) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M3 3v18h18\"/>
                                <path d=\"M7 14l3-3 4 4 5-7\"/>
                            </svg>
                            Statistiques d'énergie
                        </a>
                    </li>
                </ul>
            </li>

            ";
        // line 151
        yield "            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Alimentation</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 155
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_aliment_index");
        yield "\"
                           class=\"nav-link ";
        // line 156
        if ((is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 156, $this->source); })()), "request", [], "any", false, false, false, 156), "attributes", [], "any", false, false, false, 156), "get", ["_route"], "method", false, false, false, 156)) && is_string($_v9 = "app_aliment_") && str_starts_with($_v8, $_v9))) {
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
        // line 166
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_repas_index");
        yield "\"
                           class=\"nav-link ";
        // line 167
        if ((is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 167, $this->source); })()), "request", [], "any", false, false, false, 167), "attributes", [], "any", false, false, false, 167), "get", ["_route"], "method", false, false, false, 167)) && is_string($_v11 = "app_repas_") && str_starts_with($_v10, $_v11))) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M4 3v7a4 4 0 0 0 4 4v7\"/>
                                <path d=\"M8 3v8\"/>
                                <path d=\"M14 3v18\"/>
                                <path d=\"M20 3v7a4 4 0 0 1-4 4\"/>
                            </svg>
                            Repas
                        </a>
                    </li>
                </ul>
            </li>

            ";
        // line 181
        yield "            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Formation</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 185
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_index");
        yield "\"
                           class=\"nav-link ";
        // line 186
        if ((is_string($_v12 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 186, $this->source); })()), "request", [], "any", false, false, false, 186), "attributes", [], "any", false, false, false, 186), "get", ["_route"], "method", false, false, false, 186)) && is_string($_v13 = "app_cours_") && str_starts_with($_v12, $_v13))) {
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
        // line 196
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chapitre_index");
        yield "\"
                           class=\"nav-link ";
        // line 197
        if ((is_string($_v14 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 197, $this->source); })()), "request", [], "any", false, false, false, 197), "attributes", [], "any", false, false, false, 197), "get", ["_route"], "method", false, false, false, 197)) && is_string($_v15 = "app_chapitre_") && str_starts_with($_v14, $_v15))) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M8 6h13\"/>
                                <path d=\"M8 12h13\"/>
                                <path d=\"M8 18h13\"/>
                                <path d=\"M3 6h.01\"/>
                                <path d=\"M3 12h.01\"/>
                                <path d=\"M3 18h.01\"/>
                            </svg>
                            Chapitres
                        </a>
                    </li>
                </ul>
            </li>

            ";
        // line 213
        yield "            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Compte</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 217
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\"
                           class=\"nav-link ";
        // line 218
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 218, $this->source); })()), "request", [], "any", false, false, false, 218), "attributes", [], "any", false, false, false, 218), "get", ["_route"], "method", false, false, false, 218) == "app_profile")) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M20 21a8 8 0 0 0-16 0\"/>
                                <circle cx=\"12\" cy=\"7\" r=\"4\"/>
                            </svg>
                            Profil
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"";
        // line 228
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\"
                           class=\"nav-link ";
        // line 229
        if ((is_string($_v16 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 229, $this->source); })()), "request", [], "any", false, false, false, 229), "attributes", [], "any", false, false, false, 229), "get", ["_route"], "method", false, false, false, 229)) && is_string($_v17 = "app_user_") && str_starts_with($_v16, $_v17))) {
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
        // line 241
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
                <div class=\"user-avatar\">TM</div>
                <div class=\"user-info\">
                    <div class=\"user-name\">TemplateMo</div>
                    <div class=\"user-role\">Administrator</div>
                </div>
                <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                    <polyline points=\"6 9 12 15 18 9\"/>
                </svg>
            </div>
        </div>
    </aside>

    ";
        // line 270
        yield "    <main class=\"main-content\">

        <nav class=\"navbar\">
            <h1 class=\"page-title\">Nouvel Aliment</h1>

            <div class=\"navbar-right\">
                <a href=\"";
        // line 276
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_aliment_index");
        yield "\" class=\"card-btn\">
                    <i class=\"fa-solid fa-arrow-left\" style=\"margin-right:8px;\"></i>
                    Retour
                </a>

                <button class=\"nav-btn\" id=\"theme-toggle\" title=\"Toggle Light/Dark Mode\" style=\"margin-left:10px;\">
                    <svg class=\"icon-sun\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <circle cx=\"12\" cy=\"12\" r=\"4\"/>
                        <path d=\"M12 2v2\"/><path d=\"M12 20v2\"/>
                        <path d=\"M4.93 4.93l1.41 1.41\"/><path d=\"M17.66 17.66l1.41 1.41\"/>
                        <path d=\"M2 12h2\"/><path d=\"M20 12h2\"/>
                        <path d=\"M6.34 17.66l-1.41 1.41\"/><path d=\"M19.07 4.93l-1.41 1.41\"/>
                    </svg>
                    <svg class=\"icon-moon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" style=\"display:none;\">
                        <path d=\"M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z\"/>
                    </svg>
                </button>
            </div>
        </nav>

        ";
        // line 297
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 297, $this->source); })()), "flashes", ["error"], "method", false, false, false, 297));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 298
            yield "            <div class=\"glass-card\" style=\"border:1px solid #ef4444; background: rgba(239, 68, 68, 0.12); color:#ef4444; padding:12px 16px; border-radius:12px; margin-bottom:16px;\">
                <strong>Erreur:</strong> ";
            // line 299
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 302
        yield "
        ";
        // line 303
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 303, $this->source); })()), "flashes", ["success"], "method", false, false, false, 303));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 304
            yield "            <div class=\"glass-card\" style=\"border:1px solid rgba(5, 150, 105, 0.6); background: rgba(5, 150, 105, 0.12); color: rgba(5, 150, 105, 0.95); padding:12px 16px; border-radius:12px; margin-bottom:16px;\">
                <strong>Succès:</strong> ";
            // line 305
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 308
        yield "
        <section class=\"content-grid\">
            <div class=\"glass-card\">

                <div class=\"card-header\">
                    <div>
                        <h2 class=\"card-title\">Détails de l’aliment</h2>
                        <p class=\"card-subtitle\">Ajoutez un nouvel aliment et ses macros</p>
                    </div>
                </div>

                <div style=\"padding: 12px 2px;\">
                    ";
        // line 320
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 320, $this->source); })()), 'form_start');
        yield "

                    ";
        // line 323
        yield "                    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "back/aliment/_form.html.twig");
        yield "

                    <div style=\"display:flex; gap:12px; justify-content:flex-end; margin-top:16px;\">
                        <button type=\"submit\" class=\"card-btn\">
                            <i class=\"fa-solid fa-check\" style=\"margin-right:8px;\"></i>
                            Créer
                        </button>

                        <a href=\"";
        // line 331
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_aliment_index");
        yield "\" class=\"card-btn\">
                            Annuler
                        </a>
                    </div>

                    ";
        // line 336
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 336, $this->source); })()), 'form_end');
        yield "
                </div>

            </div>
        </section>

    </main>
</div>

<script src=\"";
        // line 345
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
        return "back/aliment/new.html.twig";
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
        return array (  567 => 345,  555 => 336,  547 => 331,  535 => 323,  530 => 320,  516 => 308,  507 => 305,  504 => 304,  500 => 303,  497 => 302,  488 => 299,  485 => 298,  480 => 297,  457 => 276,  449 => 270,  418 => 241,  401 => 229,  397 => 228,  382 => 218,  378 => 217,  372 => 213,  352 => 197,  348 => 196,  333 => 186,  329 => 185,  323 => 181,  305 => 167,  301 => 166,  286 => 156,  282 => 155,  276 => 151,  260 => 139,  256 => 138,  240 => 127,  236 => 126,  222 => 117,  218 => 116,  212 => 112,  194 => 98,  190 => 97,  174 => 86,  170 => 85,  164 => 81,  150 => 71,  146 => 70,  130 => 59,  126 => 58,  122 => 56,  106 => 44,  102 => 43,  96 => 39,  86 => 31,  81 => 28,  65 => 14,  60 => 13,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/back/aliment/new.html.twig #}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Nouvel Aliment - Dashboard</title>

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">

    {# ✅ same style files used in energy #}
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

    {# ===================== SIDEBAR (same as energy) ===================== #}
    <aside class=\"sidebar\" id=\"sidebar\">
        <div class=\"sidebar-header\">
            <div class=\"logo\">
                <img src=\"{{ asset('images/logo.png') }}\" alt=\"Logo\" style=\"width: 50px; height: auto; margin-top: 12%;\">
            </div>
            <span class=\"logo-text\">AIVA</span>
        </div>

        <ul class=\"nav-menu\">

            {# Menu Principal #}
            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Menu Principal</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('dashboard') }}\"
                           class=\"nav-link {% if app.request.attributes.get('_route') == 'dashboard' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M3 12l9-9 9 9\"/>
                                <path d=\"M9 21V9h6v12\"/>
                            </svg>
                            Tableau de bord
                        </a>
                    </li>
                </ul>
            </li>

            {# Sports #}
            <span class=\"nav-section-title\">sports</span>
            <li class=\"nav-item\">
                <a href=\"{{ path('back_sport_index') }}\"
                   class=\"nav-link {% if app.request.attributes.get('_route') starts with 'back_sport_' %}active{% endif %}\">
                    <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M7 7h10\"/>
                        <path d=\"M7 12h10\"/>
                        <path d=\"M7 17h10\"/>
                    </svg>
                    Activités
                </a>
            </li>

            <li class=\"nav-item\">
                <a href=\"{{ path('app_objectif_index') }}\"
                   class=\"nav-link {% if app.request.attributes.get('_route') starts with 'app_objectif_' %}active{% endif %}\">
                    <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <circle cx=\"12\" cy=\"12\" r=\"9\"/>
                        <path d=\"M12 7v5l3 3\"/>
                    </svg>
                    Objectifs
                </a>
            </li>

            {# Finance #}
            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Finance</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_depense_index') }}\"
                           class=\"nav-link {% if app.request.attributes.get('_route') starts with 'app_depense_' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M6 3h12v4H6z\"/>
                                <path d=\"M4 9h16v4H4z\"/>
                                <path d=\"M6 15h12v4H6z\"/>
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

            {# Énergies #}
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
                                <path d=\"M9 18h6\"/>
                                <path d=\"M10 22h4\"/>
                                <path d=\"M12 2a7 7 0 0 0-4 12c.6.6 1 1.5 1 2h6c0-.5.4-1.4 1-2a7 7 0 0 0-4-12z\"/>
                            </svg>
                            Recommandations
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"{{ path('stateenergi') }}\"
                           class=\"nav-link {% if app.request.attributes.get('_route') == 'stateenergi' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M3 3v18h18\"/>
                                <path d=\"M7 14l3-3 4 4 5-7\"/>
                            </svg>
                            Statistiques d'énergie
                        </a>
                    </li>
                </ul>
            </li>

            {# ✅ Alimentation #}
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
                                <path d=\"M4 3v7a4 4 0 0 0 4 4v7\"/>
                                <path d=\"M8 3v8\"/>
                                <path d=\"M14 3v18\"/>
                                <path d=\"M20 3v7a4 4 0 0 1-4 4\"/>
                            </svg>
                            Repas
                        </a>
                    </li>
                </ul>
            </li>

            {# Formation #}
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
                                <path d=\"M8 6h13\"/>
                                <path d=\"M8 12h13\"/>
                                <path d=\"M8 18h13\"/>
                                <path d=\"M3 6h.01\"/>
                                <path d=\"M3 12h.01\"/>
                                <path d=\"M3 18h.01\"/>
                            </svg>
                            Chapitres
                        </a>
                    </li>
                </ul>
            </li>

            {# Compte #}
            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Compte</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_profile') }}\"
                           class=\"nav-link {% if app.request.attributes.get('_route') == 'app_profile' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M20 21a8 8 0 0 0-16 0\"/>
                                <circle cx=\"12\" cy=\"7\" r=\"4\"/>
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
                <div class=\"user-avatar\">TM</div>
                <div class=\"user-info\">
                    <div class=\"user-name\">TemplateMo</div>
                    <div class=\"user-role\">Administrator</div>
                </div>
                <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                    <polyline points=\"6 9 12 15 18 9\"/>
                </svg>
            </div>
        </div>
    </aside>

    {# ===================== MAIN (same style as energy) ===================== #}
    <main class=\"main-content\">

        <nav class=\"navbar\">
            <h1 class=\"page-title\">Nouvel Aliment</h1>

            <div class=\"navbar-right\">
                <a href=\"{{ path('app_aliment_index') }}\" class=\"card-btn\">
                    <i class=\"fa-solid fa-arrow-left\" style=\"margin-right:8px;\"></i>
                    Retour
                </a>

                <button class=\"nav-btn\" id=\"theme-toggle\" title=\"Toggle Light/Dark Mode\" style=\"margin-left:10px;\">
                    <svg class=\"icon-sun\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <circle cx=\"12\" cy=\"12\" r=\"4\"/>
                        <path d=\"M12 2v2\"/><path d=\"M12 20v2\"/>
                        <path d=\"M4.93 4.93l1.41 1.41\"/><path d=\"M17.66 17.66l1.41 1.41\"/>
                        <path d=\"M2 12h2\"/><path d=\"M20 12h2\"/>
                        <path d=\"M6.34 17.66l-1.41 1.41\"/><path d=\"M19.07 4.93l-1.41 1.41\"/>
                    </svg>
                    <svg class=\"icon-moon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" style=\"display:none;\">
                        <path d=\"M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z\"/>
                    </svg>
                </button>
            </div>
        </nav>

        {# Flash messages #}
        {% for message in app.flashes('error') %}
            <div class=\"glass-card\" style=\"border:1px solid #ef4444; background: rgba(239, 68, 68, 0.12); color:#ef4444; padding:12px 16px; border-radius:12px; margin-bottom:16px;\">
                <strong>Erreur:</strong> {{ message }}
            </div>
        {% endfor %}

        {% for message in app.flashes('success') %}
            <div class=\"glass-card\" style=\"border:1px solid rgba(5, 150, 105, 0.6); background: rgba(5, 150, 105, 0.12); color: rgba(5, 150, 105, 0.95); padding:12px 16px; border-radius:12px; margin-bottom:16px;\">
                <strong>Succès:</strong> {{ message }}
            </div>
        {% endfor %}

        <section class=\"content-grid\">
            <div class=\"glass-card\">

                <div class=\"card-header\">
                    <div>
                        <h2 class=\"card-title\">Détails de l’aliment</h2>
                        <p class=\"card-subtitle\">Ajoutez un nouvel aliment et ses macros</p>
                    </div>
                </div>

                <div style=\"padding: 12px 2px;\">
                    {{ form_start(form) }}

                    {# ✅ keep your form partial #}
                    {{ include('back/aliment/_form.html.twig') }}

                    <div style=\"display:flex; gap:12px; justify-content:flex-end; margin-top:16px;\">
                        <button type=\"submit\" class=\"card-btn\">
                            <i class=\"fa-solid fa-check\" style=\"margin-right:8px;\"></i>
                            Créer
                        </button>

                        <a href=\"{{ path('app_aliment_index') }}\" class=\"card-btn\">
                            Annuler
                        </a>
                    </div>

                    {{ form_end(form) }}
                </div>

            </div>
        </section>

    </main>
</div>

<script src=\"{{ asset('js/templatemo-glass-admin-script.js') }}\"></script>
</body>
</html>
", "back/aliment/new.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\back\\aliment\\new.html.twig");
    }
}
