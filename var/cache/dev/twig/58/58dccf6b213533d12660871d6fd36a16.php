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

/* back/energie/energy.html.twig */
class __TwigTemplate_0e93c4872ec19fe8480beff38558dcda extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/energie/energy.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/energie/energy.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Gestion de l'énergie - Dashboard</title>

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/templatemo-glass-admin-style.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/modal-energy.css"), "html", null, true);
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

    <!-- Sidebar -->
<!-- Sidebar -->
<aside class=\"sidebar\" id=\"sidebar\">
    <div class=\"sidebar-header\">
        <div class=\"logo\">
            <img src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Logo\" style=\"width: 50px; height: auto; margin-top: 12%;\">
        </div>
        <span class=\"logo-text\">AIVA</span>
    </div>

    <ul class=\"nav-menu\">

        ";
        // line 40
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Menu Principal</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\"
                       class=\"nav-link ";
        // line 45
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", [], "any", false, false, false, 45), "attributes", [], "any", false, false, false, 45), "get", ["_route"], "method", false, false, false, 45) == "dashboard")) {
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
        yield "              <span class=\"nav-section-title\">sports</span>

        <li class=\"nav-item\">
            <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_sport_index");
        yield "\"
               class=\"nav-link ";
        // line 60
        if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "request", [], "any", false, false, false, 60), "attributes", [], "any", false, false, false, 60), "get", ["_route"], "method", false, false, false, 60)) && is_string($_v1 = "back_sport_") && str_starts_with($_v0, $_v1))) {
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

        ";
        // line 71
        yield "        <li class=\"nav-item\">
            <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_index");
        yield "\"
               class=\"nav-link ";
        // line 73
        if ((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "request", [], "any", false, false, false, 73), "attributes", [], "any", false, false, false, 73), "get", ["_route"], "method", false, false, false, 73)) && is_string($_v3 = "app_objectif_") && str_starts_with($_v2, $_v3))) {
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
        // line 82
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Finance</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depense_index");
        yield "\"
                       class=\"nav-link ";
        // line 87
        if ((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "request", [], "any", false, false, false, 87), "attributes", [], "any", false, false, false, 87), "get", ["_route"], "method", false, false, false, 87)) && is_string($_v5 = "app_depense_") && str_starts_with($_v4, $_v5))) {
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
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index");
        yield "\"
                       class=\"nav-link ";
        // line 99
        if ((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "request", [], "any", false, false, false, 99), "attributes", [], "any", false, false, false, 99), "get", ["_route"], "method", false, false, false, 99)) && is_string($_v7 = "app_categorie_") && str_starts_with($_v6, $_v7))) {
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
        // line 113
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Énergies</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 117
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("energy");
        yield "\"
                       class=\"nav-link ";
        // line 118
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 118, $this->source); })()), "request", [], "any", false, false, false, 118), "attributes", [], "any", false, false, false, 118), "get", ["_route"], "method", false, false, false, 118) == "energy")) {
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
        // line 127
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recommendations");
        yield "\"
                       class=\"nav-link ";
        // line 128
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 128, $this->source); })()), "request", [], "any", false, false, false, 128), "attributes", [], "any", false, false, false, 128), "get", ["_route"], "method", false, false, false, 128) == "recommendations")) {
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
        // line 139
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stateenergi");
        yield "\"
                       class=\"nav-link ";
        // line 140
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "request", [], "any", false, false, false, 140), "attributes", [], "any", false, false, false, 140), "get", ["_route"], "method", false, false, false, 140) == "stateenergi")) {
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
        // line 152
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Alimentation</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 156
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_aliment_index");
        yield "\"
                       class=\"nav-link ";
        // line 157
        if ((is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 157, $this->source); })()), "request", [], "any", false, false, false, 157), "attributes", [], "any", false, false, false, 157), "get", ["_route"], "method", false, false, false, 157)) && is_string($_v9 = "app_aliment_") && str_starts_with($_v8, $_v9))) {
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
        // line 167
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_repas_index");
        yield "\"
                       class=\"nav-link ";
        // line 168
        if ((is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 168, $this->source); })()), "request", [], "any", false, false, false, 168), "attributes", [], "any", false, false, false, 168), "get", ["_route"], "method", false, false, false, 168)) && is_string($_v11 = "app_repas_") && str_starts_with($_v10, $_v11))) {
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
        // line 182
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Formation</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 186
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_index");
        yield "\"
                       class=\"nav-link ";
        // line 187
        if ((is_string($_v12 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 187, $this->source); })()), "request", [], "any", false, false, false, 187), "attributes", [], "any", false, false, false, 187), "get", ["_route"], "method", false, false, false, 187)) && is_string($_v13 = "app_cours_") && str_starts_with($_v12, $_v13))) {
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
        // line 197
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chapitre_index");
        yield "\"
                       class=\"nav-link ";
        // line 198
        if ((is_string($_v14 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 198, $this->source); })()), "request", [], "any", false, false, false, 198), "attributes", [], "any", false, false, false, 198), "get", ["_route"], "method", false, false, false, 198)) && is_string($_v15 = "app_chapitre_") && str_starts_with($_v14, $_v15))) {
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
        // line 214
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Compte</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 218
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\"
                       class=\"nav-link ";
        // line 219
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 219, $this->source); })()), "request", [], "any", false, false, false, 219), "attributes", [], "any", false, false, false, 219), "get", ["_route"], "method", false, false, false, 219) == "app_profile")) {
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
        // line 229
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\"
                       class=\"nav-link ";
        // line 230
        if ((is_string($_v16 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 230, $this->source); })()), "request", [], "any", false, false, false, 230), "attributes", [], "any", false, false, false, 230), "get", ["_route"], "method", false, false, false, 230)) && is_string($_v17 = "app_user_") && str_starts_with($_v16, $_v17))) {
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
        // line 242
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

                 <svg class=\"nav-icon\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"/>
                                    <circle cx=\"12\" cy=\"7\" r=\"4\"/>
                                </svg>
        

<main class=\"main-content\">

    <nav class=\"navbar\">
        <h1 class=\"page-title\">Gestion des consommations</h1>
        <div class=\"navbar-right\">
            <div class=\"search-box\">
                <form method=\"get\" action=\"";
        // line 282
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("energy");
        yield "\" class=\"search-form\">
                    <input type=\"text\" name=\"search\" value=\"";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 283, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Rechercher...\" class=\"search-input\">
                    <button type=\"submit\" class=\"search-btn\" title=\"Rechercher\">
                        <i class=\"fas fa-search\"></i>
                    </button>
                </form>
            </div>

            <button class=\"nav-btn\" id=\"theme-toggle\" title=\"Toggle Light/Dark Mode\">
                <svg class=\"icon-sun\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                    <circle cx=\"12\" cy=\"12\" r=\"4\"/>
                    <path d=\"M12 2v2\"/><path d=\"M12 20v2\"/>
                    <path d=\"M4.93 4.93l1.41 1.41\"/><path d=\"M17.66 17.66l1.41 1.41\"/>
                    <path d=\"M2 12h2\"/><path d=\"M20 12h2\"/>
                    <path d=\"M6.34 17.66l-1.41 1.41\"/><path d=\"M19.07 4.93l-1.41 1.41\"/>
                </svg>
                <svg class=\"icon-moon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" style=\"display: none;\">
                    <path d=\"M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z\"/>
                </svg>
            </button>
        </div>
    </nav>

    <section class=\"content-grid\">
        <div class=\"glass-card table-card\">

            <div class=\"card-header\">
                <div>
                    <h2 class=\"card-title\">Liste des consommations</h2>
                    <p class=\"card-subtitle\">Gérez vos enregistrements d'énergie</p>
                </div>
                <button class=\"card-btn\" onclick=\"openModal('modalAdd')\">Ajouter</button>
            </div>

            <div class=\"table-wrapper\">
                <table class=\"data-table\">
                    <thead>
                    <tr>
                        <th>Num d'énergie</th>
                        <th>
                            <a href=\"";
        // line 322
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("energy", ["sort" => "typeEnergie", "order" => (((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 322, $this->source); })()) == "typeEnergie") && ((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 322, $this->source); })()) == "ASC"))) ? ("DESC") : ("ASC")), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 322, $this->source); })())]), "html", null, true);
        yield "\">
                                Type ";
        // line 323
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 323, $this->source); })()) == "typeEnergie")) {
            yield ((((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 323, $this->source); })()) == "ASC")) ? ("▲") : ("▼"));
        }
        // line 324
        yield "                            </a>
                        </th>
                        <th>
                            <a href=\"";
        // line 327
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("energy", ["sort" => "periode", "order" => (((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 327, $this->source); })()) == "periode") && ((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 327, $this->source); })()) == "ASC"))) ? ("DESC") : ("ASC")), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 327, $this->source); })())]), "html", null, true);
        yield "\">
                                Durée ";
        // line 328
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 328, $this->source); })()) == "periode")) {
            yield ((((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 328, $this->source); })()) == "ASC")) ? ("▲") : ("▼"));
        }
        // line 329
        yield "                            </a>
                        </th>
                        <th>
                            <a href=\"";
        // line 332
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("energy", ["sort" => "valeur", "order" => (((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 332, $this->source); })()) == "valeur") && ((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 332, $this->source); })()) == "ASC"))) ? ("DESC") : ("ASC")), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 332, $this->source); })())]), "html", null, true);
        yield "\">
                                Valeur ";
        // line 333
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 333, $this->source); })()) == "valeur")) {
            yield ((((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 333, $this->source); })()) == "ASC")) ? ("▲") : ("▼"));
        }
        // line 334
        yield "                            </a>
                        </th>
                        <th>
                            <a href=\"";
        // line 337
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("energy", ["sort" => "dateEnregistrement", "order" => (((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 337, $this->source); })()) == "dateEnregistrement") && ((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 337, $this->source); })()) == "ASC"))) ? ("DESC") : ("ASC")), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 337, $this->source); })())]), "html", null, true);
        yield "\">
                                Date ";
        // line 338
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 338, $this->source); })()) == "dateEnregistrement")) {
            yield ((((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 338, $this->source); })()) == "ASC")) ? ("▲") : ("▼"));
        }
        // line 339
        yield "                            </a>
                        </th>
                        <th>
                            <a href=\"";
        // line 342
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("energy", ["sort" => "source", "order" => (((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 342, $this->source); })()) == "source") && ((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 342, $this->source); })()) == "ASC"))) ? ("DESC") : ("ASC")), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 342, $this->source); })())]), "html", null, true);
        yield "\">
                                Source ";
        // line 343
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 343, $this->source); })()) == "source")) {
            yield ((((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 343, $this->source); })()) == "ASC")) ? ("▲") : ("▼"));
        }
        // line 344
        yield "                            </a>
                        </th>
                        <th>Utilisateur</th>
                        <th>Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    ";
        // line 352
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["energies"]) || array_key_exists("energies", $context) ? $context["energies"] : (function () { throw new RuntimeError('Variable "energies" does not exist.', 352, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["energy"]) {
            // line 353
            yield "                        <tr>
                            <td>";
            // line 354
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "id", [], "any", false, false, false, 354), "html", null, true);
            yield "</td>
                            <td>";
            // line 355
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "typeEnergie", [], "any", false, false, false, 355), "html", null, true);
            yield "</td>
                            <td>";
            // line 356
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "periode", [], "any", false, false, false, 356), "html", null, true);
            yield "</td>
                            <td>";
            // line 357
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "valeur", [], "any", false, false, false, 357), "html", null, true);
            yield "</td>
                            <td>";
            // line 358
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "dateEnregistrement", [], "any", false, false, false, 358), "Y-m-d"), "html", null, true);
            yield "</td>
                            <td>";
            // line 359
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "source", [], "any", false, false, false, 359), "html", null, true);
            yield "</td>

                            ";
            // line 362
            yield "                            <td>
                                ";
            // line 363
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "user", [], "any", false, false, false, 363)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "user", [], "any", false, false, false, 363), "name", [], "any", false, false, false, 363) . " (") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "user", [], "any", false, false, false, 363), "email", [], "any", false, false, false, 363)) . ")"), "html", null, true)) : ("—"));
            yield "
                            </td>

                            <td style=\"display:flex;gap:12px;justify-content:center;\">
                                <a href=\"javascript:void(0)\" onclick=\"openModal('modalEdit";
            // line 367
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "id", [], "any", false, false, false, 367), "html", null, true);
            yield "')\" style=\"color:#4ade80\">
                                    <i class=\"fa-solid fa-pen\"></i>
                                </a>

                                <form method=\"post\"
                                      action=\"";
            // line 372
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("energy_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "id", [], "any", false, false, false, 372)]), "html", null, true);
            yield "\"
                                      onsubmit=\"return confirm('Supprimer cette énergie ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 374
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "id", [], "any", false, false, false, 374))), "html", null, true);
            yield "\">
                                    <button type=\"submit\" style=\"background:none; border:none; color:#f87171; cursor:pointer;\">
                                        <i class=\"fa-solid fa-trash\"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 381
        if (!$context['_iterated']) {
            // line 382
            yield "                        <tr><td colspan=\"8\" style=\"text-align:center;\">Aucune consommation trouvée.</td></tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['energy'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 384
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </section>

    ";
        // line 391
        yield "    <div id=\"modalAdd\" class=\"modal-overlay\" ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["addErrors"]) || array_key_exists("addErrors", $context) ? $context["addErrors"] : (function () { throw new RuntimeError('Variable "addErrors" does not exist.', 391, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " style=\"display:flex\"";
        }
        yield ">
        <div class=\"modal glass-card\">
            <div class=\"modal-header\">
                <h3>Ajouter une consommation</h3>
                <button class=\"close-btn\" onclick=\"closeModal('modalAdd')\">✕</button>
            </div>

            <form method=\"post\" action=\"";
        // line 398
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("energy");
        yield "\">
                <input type=\"hidden\" name=\"add_energy\" value=\"1\">

                <div class=\"form-group\">
                    <label>Type d'énergie *</label>
                    <input type=\"text\" name=\"type_energie\" value=\"";
        // line 403
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["oldAdd"] ?? null), "type_energie", [], "any", true, true, false, 403)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["oldAdd"]) || array_key_exists("oldAdd", $context) ? $context["oldAdd"] : (function () { throw new RuntimeError('Variable "oldAdd" does not exist.', 403, $this->source); })()), "type_energie", [], "any", false, false, false, 403), "")) : ("")), "html", null, true);
        yield "\">
                    ";
        // line 404
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["addErrors"] ?? null), "type_energie", [], "any", true, true, false, 404)) {
            // line 405
            yield "                        <span class=\"error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addErrors"]) || array_key_exists("addErrors", $context) ? $context["addErrors"] : (function () { throw new RuntimeError('Variable "addErrors" does not exist.', 405, $this->source); })()), "type_energie", [], "any", false, false, false, 405), "html", null, true);
            yield "</span>
                    ";
        }
        // line 407
        yield "                </div>

                <div class=\"form-group\">
                    <label>Durée *</label>
                    <input type=\"number\" step=\"0.01\" name=\"periode\" value=\"";
        // line 411
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["oldAdd"] ?? null), "periode", [], "any", true, true, false, 411)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["oldAdd"]) || array_key_exists("oldAdd", $context) ? $context["oldAdd"] : (function () { throw new RuntimeError('Variable "oldAdd" does not exist.', 411, $this->source); })()), "periode", [], "any", false, false, false, 411), "")) : ("")), "html", null, true);
        yield "\">
                    ";
        // line 412
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["addErrors"] ?? null), "periode", [], "any", true, true, false, 412)) {
            // line 413
            yield "                        <span class=\"error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addErrors"]) || array_key_exists("addErrors", $context) ? $context["addErrors"] : (function () { throw new RuntimeError('Variable "addErrors" does not exist.', 413, $this->source); })()), "periode", [], "any", false, false, false, 413), "html", null, true);
            yield "</span>
                    ";
        }
        // line 415
        yield "                </div>

                <div class=\"form-group\">
                    <label>Valeur *</label>
                    <input type=\"number\" step=\"0.01\" name=\"valeur\" value=\"";
        // line 419
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["oldAdd"] ?? null), "valeur", [], "any", true, true, false, 419)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["oldAdd"]) || array_key_exists("oldAdd", $context) ? $context["oldAdd"] : (function () { throw new RuntimeError('Variable "oldAdd" does not exist.', 419, $this->source); })()), "valeur", [], "any", false, false, false, 419), "")) : ("")), "html", null, true);
        yield "\">
                    ";
        // line 420
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["addErrors"] ?? null), "valeur", [], "any", true, true, false, 420)) {
            // line 421
            yield "                        <span class=\"error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addErrors"]) || array_key_exists("addErrors", $context) ? $context["addErrors"] : (function () { throw new RuntimeError('Variable "addErrors" does not exist.', 421, $this->source); })()), "valeur", [], "any", false, false, false, 421), "html", null, true);
            yield "</span>
                    ";
        }
        // line 423
        yield "                </div>

                <div class=\"form-group\">
                    <label>Date *</label>
                    <input type=\"date\" name=\"date_enregistrement\" value=\"";
        // line 427
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["oldAdd"] ?? null), "date_enregistrement", [], "any", true, true, false, 427)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["oldAdd"]) || array_key_exists("oldAdd", $context) ? $context["oldAdd"] : (function () { throw new RuntimeError('Variable "oldAdd" does not exist.', 427, $this->source); })()), "date_enregistrement", [], "any", false, false, false, 427), "")) : ("")), "html", null, true);
        yield "\">
                    ";
        // line 428
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["addErrors"] ?? null), "date_enregistrement", [], "any", true, true, false, 428)) {
            // line 429
            yield "                        <span class=\"error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addErrors"]) || array_key_exists("addErrors", $context) ? $context["addErrors"] : (function () { throw new RuntimeError('Variable "addErrors" does not exist.', 429, $this->source); })()), "date_enregistrement", [], "any", false, false, false, 429), "html", null, true);
            yield "</span>
                    ";
        }
        // line 431
        yield "                </div>

                <div class=\"form-group\">
                    <label>Source *</label>
                    <input type=\"text\" name=\"source\" value=\"";
        // line 435
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["oldAdd"] ?? null), "source", [], "any", true, true, false, 435)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["oldAdd"]) || array_key_exists("oldAdd", $context) ? $context["oldAdd"] : (function () { throw new RuntimeError('Variable "oldAdd" does not exist.', 435, $this->source); })()), "source", [], "any", false, false, false, 435), "")) : ("")), "html", null, true);
        yield "\">
                    ";
        // line 436
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["addErrors"] ?? null), "source", [], "any", true, true, false, 436)) {
            // line 437
            yield "                        <span class=\"error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addErrors"]) || array_key_exists("addErrors", $context) ? $context["addErrors"] : (function () { throw new RuntimeError('Variable "addErrors" does not exist.', 437, $this->source); })()), "source", [], "any", false, false, false, 437), "html", null, true);
            yield "</span>
                    ";
        }
        // line 439
        yield "                </div>

                ";
        // line 442
        yield "                ";
        if ((($tmp = (isset($context["isAdmin"]) || array_key_exists("isAdmin", $context) ? $context["isAdmin"] : (function () { throw new RuntimeError('Variable "isAdmin" does not exist.', 442, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 443
            yield "                    <div class=\"form-group\">
                        <label>Utilisateur *</label>
                        <select name=\"user\">
                            <option value=\"\">-- Sélectionner --</option>
                            ";
            // line 447
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 447, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 448
                yield "                                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 448), "html", null, true);
                yield "\" ";
                if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["oldAdd"] ?? null), "user", [], "any", true, true, false, 448)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["oldAdd"]) || array_key_exists("oldAdd", $context) ? $context["oldAdd"] : (function () { throw new RuntimeError('Variable "oldAdd" does not exist.', 448, $this->source); })()), "user", [], "any", false, false, false, 448), "")) : ("")) == CoreExtension::getAttribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 448))) {
                    yield "selected";
                }
                yield ">
                                    ";
                // line 449
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "name", [], "any", false, false, false, 449), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "email", [], "any", false, false, false, 449), "html", null, true);
                yield ")
                                </option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['u'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 452
            yield "                        </select>
                        ";
            // line 453
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["addErrors"] ?? null), "user", [], "any", true, true, false, 453)) {
                // line 454
                yield "                            <span class=\"error\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addErrors"]) || array_key_exists("addErrors", $context) ? $context["addErrors"] : (function () { throw new RuntimeError('Variable "addErrors" does not exist.', 454, $this->source); })()), "user", [], "any", false, false, false, 454), "html", null, true);
                yield "</span>
                        ";
            }
            // line 456
            yield "                    </div>
                ";
        } else {
            // line 458
            yield "                    <div class=\"form-group\">
                        <label>Utilisateur</label>
                        <input type=\"text\" value=\"";
            // line 460
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 460, $this->source); })()), "user", [], "any", false, false, false, 460)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 460, $this->source); })()), "user", [], "any", false, false, false, 460), "name", [], "any", false, false, false, 460) . " (") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 460, $this->source); })()), "user", [], "any", false, false, false, 460), "email", [], "any", false, false, false, 460)) . ")"), "html", null, true)) : (""));
            yield "\" disabled>
                    </div>
                ";
        }
        // line 463
        yield "
                <div style=\"text-align:right; margin-top:15px;\">
                    <button type=\"submit\" class=\"card-btn\">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>

    ";
        // line 472
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["energies"]) || array_key_exists("energies", $context) ? $context["energies"] : (function () { throw new RuntimeError('Variable "energies" does not exist.', 472, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["energy"]) {
            // line 473
            yield "        <div id=\"modalEdit";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "id", [], "any", false, false, false, 473), "html", null, true);
            yield "\" class=\"modal-overlay\" ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["editErrors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "id", [], "any", false, false, false, 473), [], "array", true, true, false, 473)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editErrors"]) || array_key_exists("editErrors", $context) ? $context["editErrors"] : (function () { throw new RuntimeError('Variable "editErrors" does not exist.', 473, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "id", [], "any", false, false, false, 473), [], "array", false, false, false, 473), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " style=\"display:flex\"";
            }
            yield ">
            <div class=\"modal glass-card\">
                <div class=\"modal-header\">
                    <h3>Modifier #";
            // line 476
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "id", [], "any", false, false, false, 476), "html", null, true);
            yield "</h3>
                    <button class=\"close-btn\" onclick=\"closeModal('modalEdit";
            // line 477
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "id", [], "any", false, false, false, 477), "html", null, true);
            yield "')\">✕</button>
                </div>

                <form method=\"post\" action=\"";
            // line 480
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("energy");
            yield "\">
                    <input type=\"hidden\" name=\"edit_energy\" value=\"1\">
                    <input type=\"hidden\" name=\"id_consommation\" value=\"";
            // line 482
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "id", [], "any", false, false, false, 482), "html", null, true);
            yield "\">

                    <div class=\"form-group\">
                        <label>Type d'énergie *</label>
                        <input type=\"text\" name=\"type_energie\" value=\"";
            // line 486
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "typeEnergie", [], "any", false, false, false, 486), "html", null, true);
            yield "\">
                        ";
            // line 487
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["editErrors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "id", [], "any", false, false, false, 487), [], "array", false, true, false, 487), "type_energie", [], "any", true, true, false, 487)) {
                // line 488
                yield "                            <span class=\"error\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editErrors"]) || array_key_exists("editErrors", $context) ? $context["editErrors"] : (function () { throw new RuntimeError('Variable "editErrors" does not exist.', 488, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "id", [], "any", false, false, false, 488), [], "array", false, false, false, 488), "type_energie", [], "any", false, false, false, 488), "html", null, true);
                yield "</span>
                        ";
            }
            // line 490
            yield "                    </div>

                    <div class=\"form-group\">
                        <label>Durée *</label>
                        <input type=\"number\" step=\"0.01\" name=\"periode\" value=\"";
            // line 494
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "periode", [], "any", false, false, false, 494), "html", null, true);
            yield "\">
                        ";
            // line 495
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["editErrors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "id", [], "any", false, false, false, 495), [], "array", false, true, false, 495), "periode", [], "any", true, true, false, 495)) {
                // line 496
                yield "                            <span class=\"error\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editErrors"]) || array_key_exists("editErrors", $context) ? $context["editErrors"] : (function () { throw new RuntimeError('Variable "editErrors" does not exist.', 496, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "id", [], "any", false, false, false, 496), [], "array", false, false, false, 496), "periode", [], "any", false, false, false, 496), "html", null, true);
                yield "</span>
                        ";
            }
            // line 498
            yield "                    </div>

                    <div class=\"form-group\">
                        <label>Valeur *</label>
                        <input type=\"number\" step=\"0.01\" name=\"valeur\" value=\"";
            // line 502
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "valeur", [], "any", false, false, false, 502), "html", null, true);
            yield "\">
                        ";
            // line 503
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["editErrors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "id", [], "any", false, false, false, 503), [], "array", false, true, false, 503), "valeur", [], "any", true, true, false, 503)) {
                // line 504
                yield "                            <span class=\"error\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editErrors"]) || array_key_exists("editErrors", $context) ? $context["editErrors"] : (function () { throw new RuntimeError('Variable "editErrors" does not exist.', 504, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "id", [], "any", false, false, false, 504), [], "array", false, false, false, 504), "valeur", [], "any", false, false, false, 504), "html", null, true);
                yield "</span>
                        ";
            }
            // line 506
            yield "                    </div>

                    <div class=\"form-group\">
                        <label>Date *</label>
                        <input type=\"date\" name=\"date_enregistrement\"
                               value=\"";
            // line 511
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "dateEnregistrement", [], "any", false, false, false, 511)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "dateEnregistrement", [], "any", false, false, false, 511), "Y-m-d"), "html", null, true)) : (""));
            yield "\">
                        ";
            // line 512
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["editErrors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "id", [], "any", false, false, false, 512), [], "array", false, true, false, 512), "date_enregistrement", [], "any", true, true, false, 512)) {
                // line 513
                yield "                            <span class=\"error\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editErrors"]) || array_key_exists("editErrors", $context) ? $context["editErrors"] : (function () { throw new RuntimeError('Variable "editErrors" does not exist.', 513, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "id", [], "any", false, false, false, 513), [], "array", false, false, false, 513), "date_enregistrement", [], "any", false, false, false, 513), "html", null, true);
                yield "</span>
                        ";
            }
            // line 515
            yield "                    </div>

                    <div class=\"form-group\">
                        <label>Source *</label>
                        <input type=\"text\" name=\"source\" value=\"";
            // line 519
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "source", [], "any", false, false, false, 519), "html", null, true);
            yield "\">
                        ";
            // line 520
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["editErrors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "id", [], "any", false, false, false, 520), [], "array", false, true, false, 520), "source", [], "any", true, true, false, 520)) {
                // line 521
                yield "                            <span class=\"error\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editErrors"]) || array_key_exists("editErrors", $context) ? $context["editErrors"] : (function () { throw new RuntimeError('Variable "editErrors" does not exist.', 521, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "id", [], "any", false, false, false, 521), [], "array", false, false, false, 521), "source", [], "any", false, false, false, 521), "html", null, true);
                yield "</span>
                        ";
            }
            // line 523
            yield "                    </div>

                    ";
            // line 526
            yield "                    ";
            if ((($tmp = (isset($context["isAdmin"]) || array_key_exists("isAdmin", $context) ? $context["isAdmin"] : (function () { throw new RuntimeError('Variable "isAdmin" does not exist.', 526, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 527
                yield "                        <div class=\"form-group\">
                            <label>Utilisateur *</label>
                            <select name=\"user\">
                                <option value=\"\">-- Sélectionner --</option>
                                ";
                // line 531
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 531, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                    // line 532
                    yield "                                    <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 532), "html", null, true);
                    yield "\" ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "user", [], "any", false, false, false, 532) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "user", [], "any", false, false, false, 532), "id", [], "any", false, false, false, 532) == CoreExtension::getAttribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 532)))) {
                        yield "selected";
                    }
                    yield ">
                                        ";
                    // line 533
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "name", [], "any", false, false, false, 533), "html", null, true);
                    yield " (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "email", [], "any", false, false, false, 533), "html", null, true);
                    yield ")
                                    </option>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['u'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 536
                yield "                            </select>
                            ";
                // line 537
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["editErrors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "id", [], "any", false, false, false, 537), [], "array", false, true, false, 537), "user", [], "any", true, true, false, 537)) {
                    // line 538
                    yield "                                <span class=\"error\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editErrors"]) || array_key_exists("editErrors", $context) ? $context["editErrors"] : (function () { throw new RuntimeError('Variable "editErrors" does not exist.', 538, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "id", [], "any", false, false, false, 538), [], "array", false, false, false, 538), "user", [], "any", false, false, false, 538), "html", null, true);
                    yield "</span>
                            ";
                }
                // line 540
                yield "                        </div>
                    ";
            } else {
                // line 542
                yield "                        <div class=\"form-group\">
                            <label>Utilisateur</label>
                            <input type=\"text\"
                                   value=\"";
                // line 545
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "user", [], "any", false, false, false, 545)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "user", [], "any", false, false, false, 545), "name", [], "any", false, false, false, 545) . " (") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["energy"], "user", [], "any", false, false, false, 545), "email", [], "any", false, false, false, 545)) . ")"), "html", null, true)) : (""));
                yield "\"
                                   disabled>
                        </div>
                    ";
            }
            // line 549
            yield "
                    <div style=\"text-align:right; margin-top:15px;\">
                        <button type=\"submit\" class=\"card-btn\">Enregistrer les modifications</button>
                    </div>
                </form>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['energy'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 557
        yield "
</main>
</div>

<script>
function openModal(id){document.getElementById(id).style.display='flex'}
function closeModal(id){document.getElementById(id).style.display='none'}
</script>

<script src=\"";
        // line 566
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
        return "back/energie/energy.html.twig";
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
        return array (  1054 => 566,  1043 => 557,  1030 => 549,  1023 => 545,  1018 => 542,  1014 => 540,  1008 => 538,  1006 => 537,  1003 => 536,  992 => 533,  983 => 532,  979 => 531,  973 => 527,  970 => 526,  966 => 523,  960 => 521,  958 => 520,  954 => 519,  948 => 515,  942 => 513,  940 => 512,  936 => 511,  929 => 506,  923 => 504,  921 => 503,  917 => 502,  911 => 498,  905 => 496,  903 => 495,  899 => 494,  893 => 490,  887 => 488,  885 => 487,  881 => 486,  874 => 482,  869 => 480,  863 => 477,  859 => 476,  848 => 473,  843 => 472,  833 => 463,  827 => 460,  823 => 458,  819 => 456,  813 => 454,  811 => 453,  808 => 452,  797 => 449,  788 => 448,  784 => 447,  778 => 443,  775 => 442,  771 => 439,  765 => 437,  763 => 436,  759 => 435,  753 => 431,  747 => 429,  745 => 428,  741 => 427,  735 => 423,  729 => 421,  727 => 420,  723 => 419,  717 => 415,  711 => 413,  709 => 412,  705 => 411,  699 => 407,  693 => 405,  691 => 404,  687 => 403,  679 => 398,  666 => 391,  658 => 384,  651 => 382,  649 => 381,  637 => 374,  632 => 372,  624 => 367,  617 => 363,  614 => 362,  609 => 359,  605 => 358,  601 => 357,  597 => 356,  593 => 355,  589 => 354,  586 => 353,  581 => 352,  571 => 344,  567 => 343,  563 => 342,  558 => 339,  554 => 338,  550 => 337,  545 => 334,  541 => 333,  537 => 332,  532 => 329,  528 => 328,  524 => 327,  519 => 324,  515 => 323,  511 => 322,  469 => 283,  465 => 282,  422 => 242,  405 => 230,  401 => 229,  386 => 219,  382 => 218,  376 => 214,  356 => 198,  352 => 197,  337 => 187,  333 => 186,  327 => 182,  309 => 168,  305 => 167,  290 => 157,  286 => 156,  280 => 152,  264 => 140,  260 => 139,  244 => 128,  240 => 127,  226 => 118,  222 => 117,  216 => 113,  198 => 99,  194 => 98,  178 => 87,  174 => 86,  168 => 82,  155 => 73,  151 => 72,  148 => 71,  133 => 60,  129 => 59,  124 => 56,  109 => 45,  105 => 44,  99 => 40,  89 => 32,  68 => 14,  64 => 13,  60 => 12,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/back/energie/energy.html.twig #}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Gestion de l'énergie - Dashboard</title>

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"{{ asset('css/templatemo-glass-admin-style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/modal-energy.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/serchbtn.css') }}\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">
</head>

<body>

<div class=\"background\"></div>
<div class=\"orb orb-1\"></div>
<div class=\"orb orb-2\"></div>
<div class=\"orb orb-3\"></div>

<div class=\"dashboard\">

    <!-- Sidebar -->
<!-- Sidebar -->
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
  {# ✅ Activités added #}
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

        {# ✅ Objectifs added #}
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
        {# Finance (ton menu existant) #}
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

        {# Menu énergies #}
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

        {# ✅ Alimentation (au lieu de Nutrition) #}
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

                 <svg class=\"nav-icon\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"/>
                                    <circle cx=\"12\" cy=\"7\" r=\"4\"/>
                                </svg>
        

<main class=\"main-content\">

    <nav class=\"navbar\">
        <h1 class=\"page-title\">Gestion des consommations</h1>
        <div class=\"navbar-right\">
            <div class=\"search-box\">
                <form method=\"get\" action=\"{{ path('energy') }}\" class=\"search-form\">
                    <input type=\"text\" name=\"search\" value=\"{{ search }}\" placeholder=\"Rechercher...\" class=\"search-input\">
                    <button type=\"submit\" class=\"search-btn\" title=\"Rechercher\">
                        <i class=\"fas fa-search\"></i>
                    </button>
                </form>
            </div>

            <button class=\"nav-btn\" id=\"theme-toggle\" title=\"Toggle Light/Dark Mode\">
                <svg class=\"icon-sun\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                    <circle cx=\"12\" cy=\"12\" r=\"4\"/>
                    <path d=\"M12 2v2\"/><path d=\"M12 20v2\"/>
                    <path d=\"M4.93 4.93l1.41 1.41\"/><path d=\"M17.66 17.66l1.41 1.41\"/>
                    <path d=\"M2 12h2\"/><path d=\"M20 12h2\"/>
                    <path d=\"M6.34 17.66l-1.41 1.41\"/><path d=\"M19.07 4.93l-1.41 1.41\"/>
                </svg>
                <svg class=\"icon-moon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" style=\"display: none;\">
                    <path d=\"M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z\"/>
                </svg>
            </button>
        </div>
    </nav>

    <section class=\"content-grid\">
        <div class=\"glass-card table-card\">

            <div class=\"card-header\">
                <div>
                    <h2 class=\"card-title\">Liste des consommations</h2>
                    <p class=\"card-subtitle\">Gérez vos enregistrements d'énergie</p>
                </div>
                <button class=\"card-btn\" onclick=\"openModal('modalAdd')\">Ajouter</button>
            </div>

            <div class=\"table-wrapper\">
                <table class=\"data-table\">
                    <thead>
                    <tr>
                        <th>Num d'énergie</th>
                        <th>
                            <a href=\"{{ path('energy', {sort:'typeEnergie', order: sort=='typeEnergie' and order=='ASC' ? 'DESC' : 'ASC', search:search}) }}\">
                                Type {% if sort=='typeEnergie' %}{{ order=='ASC' ? '▲' : '▼' }}{% endif %}
                            </a>
                        </th>
                        <th>
                            <a href=\"{{ path('energy', {sort:'periode', order: sort=='periode' and order=='ASC' ? 'DESC' : 'ASC', search:search}) }}\">
                                Durée {% if sort=='periode' %}{{ order=='ASC' ? '▲' : '▼' }}{% endif %}
                            </a>
                        </th>
                        <th>
                            <a href=\"{{ path('energy', {sort:'valeur', order: sort=='valeur' and order=='ASC' ? 'DESC' : 'ASC', search:search}) }}\">
                                Valeur {% if sort=='valeur' %}{{ order=='ASC' ? '▲' : '▼' }}{% endif %}
                            </a>
                        </th>
                        <th>
                            <a href=\"{{ path('energy', {sort:'dateEnregistrement', order: sort=='dateEnregistrement' and order=='ASC' ? 'DESC' : 'ASC', search:search}) }}\">
                                Date {% if sort=='dateEnregistrement' %}{{ order=='ASC' ? '▲' : '▼' }}{% endif %}
                            </a>
                        </th>
                        <th>
                            <a href=\"{{ path('energy', {sort:'source', order: sort=='source' and order=='ASC' ? 'DESC' : 'ASC', search:search}) }}\">
                                Source {% if sort=='source' %}{{ order=='ASC' ? '▲' : '▼' }}{% endif %}
                            </a>
                        </th>
                        <th>Utilisateur</th>
                        <th>Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    {% for energy in energies %}
                        <tr>
                            <td>{{ energy.id }}</td>
                            <td>{{ energy.typeEnergie }}</td>
                            <td>{{ energy.periode }}</td>
                            <td>{{ energy.valeur }}</td>
                            <td>{{ energy.dateEnregistrement|date('Y-m-d') }}</td>
                            <td>{{ energy.source }}</td>

                            {# ✅ affiche le vrai user du record #}
                            <td>
                                {{ energy.user ? energy.user.name ~ ' (' ~ energy.user.email ~ ')' : '—' }}
                            </td>

                            <td style=\"display:flex;gap:12px;justify-content:center;\">
                                <a href=\"javascript:void(0)\" onclick=\"openModal('modalEdit{{ energy.id }}')\" style=\"color:#4ade80\">
                                    <i class=\"fa-solid fa-pen\"></i>
                                </a>

                                <form method=\"post\"
                                      action=\"{{ path('energy_delete', {id: energy.id}) }}\"
                                      onsubmit=\"return confirm('Supprimer cette énergie ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ energy.id) }}\">
                                    <button type=\"submit\" style=\"background:none; border:none; color:#f87171; cursor:pointer;\">
                                        <i class=\"fa-solid fa-trash\"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    {% else %}
                        <tr><td colspan=\"8\" style=\"text-align:center;\">Aucune consommation trouvée.</td></tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    {# ===== MODAL ADD ===== #}
    <div id=\"modalAdd\" class=\"modal-overlay\" {% if addErrors is not empty %} style=\"display:flex\"{% endif %}>
        <div class=\"modal glass-card\">
            <div class=\"modal-header\">
                <h3>Ajouter une consommation</h3>
                <button class=\"close-btn\" onclick=\"closeModal('modalAdd')\">✕</button>
            </div>

            <form method=\"post\" action=\"{{ path('energy') }}\">
                <input type=\"hidden\" name=\"add_energy\" value=\"1\">

                <div class=\"form-group\">
                    <label>Type d'énergie *</label>
                    <input type=\"text\" name=\"type_energie\" value=\"{{ oldAdd.type_energie|default('') }}\">
                    {% if addErrors.type_energie is defined %}
                        <span class=\"error\">{{ addErrors.type_energie }}</span>
                    {% endif %}
                </div>

                <div class=\"form-group\">
                    <label>Durée *</label>
                    <input type=\"number\" step=\"0.01\" name=\"periode\" value=\"{{ oldAdd.periode|default('') }}\">
                    {% if addErrors.periode is defined %}
                        <span class=\"error\">{{ addErrors.periode }}</span>
                    {% endif %}
                </div>

                <div class=\"form-group\">
                    <label>Valeur *</label>
                    <input type=\"number\" step=\"0.01\" name=\"valeur\" value=\"{{ oldAdd.valeur|default('') }}\">
                    {% if addErrors.valeur is defined %}
                        <span class=\"error\">{{ addErrors.valeur }}</span>
                    {% endif %}
                </div>

                <div class=\"form-group\">
                    <label>Date *</label>
                    <input type=\"date\" name=\"date_enregistrement\" value=\"{{ oldAdd.date_enregistrement|default('') }}\">
                    {% if addErrors.date_enregistrement is defined %}
                        <span class=\"error\">{{ addErrors.date_enregistrement }}</span>
                    {% endif %}
                </div>

                <div class=\"form-group\">
                    <label>Source *</label>
                    <input type=\"text\" name=\"source\" value=\"{{ oldAdd.source|default('') }}\">
                    {% if addErrors.source is defined %}
                        <span class=\"error\">{{ addErrors.source }}</span>
                    {% endif %}
                </div>

                {# ✅ Admin choisit l'utilisateur, sinon affichage simple #}
                {% if isAdmin %}
                    <div class=\"form-group\">
                        <label>Utilisateur *</label>
                        <select name=\"user\">
                            <option value=\"\">-- Sélectionner --</option>
                            {% for u in users %}
                                <option value=\"{{ u.id }}\" {% if oldAdd.user|default('') == u.id %}selected{% endif %}>
                                    {{ u.name }} ({{ u.email }})
                                </option>
                            {% endfor %}
                        </select>
                        {% if addErrors.user is defined %}
                            <span class=\"error\">{{ addErrors.user }}</span>
                        {% endif %}
                    </div>
                {% else %}
                    <div class=\"form-group\">
                        <label>Utilisateur</label>
                        <input type=\"text\" value=\"{{ app.user ? app.user.name ~ ' (' ~ app.user.email ~ ')' : '' }}\" disabled>
                    </div>
                {% endif %}

                <div style=\"text-align:right; margin-top:15px;\">
                    <button type=\"submit\" class=\"card-btn\">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>

    {# ===== MODAL EDIT ===== #}
    {% for energy in energies %}
        <div id=\"modalEdit{{ energy.id }}\" class=\"modal-overlay\" {% if editErrors[energy.id]|default(false) %} style=\"display:flex\"{% endif %}>
            <div class=\"modal glass-card\">
                <div class=\"modal-header\">
                    <h3>Modifier #{{ energy.id }}</h3>
                    <button class=\"close-btn\" onclick=\"closeModal('modalEdit{{ energy.id }}')\">✕</button>
                </div>

                <form method=\"post\" action=\"{{ path('energy') }}\">
                    <input type=\"hidden\" name=\"edit_energy\" value=\"1\">
                    <input type=\"hidden\" name=\"id_consommation\" value=\"{{ energy.id }}\">

                    <div class=\"form-group\">
                        <label>Type d'énergie *</label>
                        <input type=\"text\" name=\"type_energie\" value=\"{{ energy.typeEnergie }}\">
                        {% if editErrors[energy.id].type_energie is defined %}
                            <span class=\"error\">{{ editErrors[energy.id].type_energie }}</span>
                        {% endif %}
                    </div>

                    <div class=\"form-group\">
                        <label>Durée *</label>
                        <input type=\"number\" step=\"0.01\" name=\"periode\" value=\"{{ energy.periode }}\">
                        {% if editErrors[energy.id].periode is defined %}
                            <span class=\"error\">{{ editErrors[energy.id].periode }}</span>
                        {% endif %}
                    </div>

                    <div class=\"form-group\">
                        <label>Valeur *</label>
                        <input type=\"number\" step=\"0.01\" name=\"valeur\" value=\"{{ energy.valeur }}\">
                        {% if editErrors[energy.id].valeur is defined %}
                            <span class=\"error\">{{ editErrors[energy.id].valeur }}</span>
                        {% endif %}
                    </div>

                    <div class=\"form-group\">
                        <label>Date *</label>
                        <input type=\"date\" name=\"date_enregistrement\"
                               value=\"{{ energy.dateEnregistrement ? energy.dateEnregistrement|date('Y-m-d') : '' }}\">
                        {% if editErrors[energy.id].date_enregistrement is defined %}
                            <span class=\"error\">{{ editErrors[energy.id].date_enregistrement }}</span>
                        {% endif %}
                    </div>

                    <div class=\"form-group\">
                        <label>Source *</label>
                        <input type=\"text\" name=\"source\" value=\"{{ energy.source }}\">
                        {% if editErrors[energy.id].source is defined %}
                            <span class=\"error\">{{ editErrors[energy.id].source }}</span>
                        {% endif %}
                    </div>

                    {# ✅ Admin peut changer l'utilisateur, sinon afficher le propriétaire #}
                    {% if isAdmin %}
                        <div class=\"form-group\">
                            <label>Utilisateur *</label>
                            <select name=\"user\">
                                <option value=\"\">-- Sélectionner --</option>
                                {% for u in users %}
                                    <option value=\"{{ u.id }}\" {% if energy.user and energy.user.id == u.id %}selected{% endif %}>
                                        {{ u.name }} ({{ u.email }})
                                    </option>
                                {% endfor %}
                            </select>
                            {% if editErrors[energy.id].user is defined %}
                                <span class=\"error\">{{ editErrors[energy.id].user }}</span>
                            {% endif %}
                        </div>
                    {% else %}
                        <div class=\"form-group\">
                            <label>Utilisateur</label>
                            <input type=\"text\"
                                   value=\"{{ energy.user ? energy.user.name ~ ' (' ~ energy.user.email ~ ')' : '' }}\"
                                   disabled>
                        </div>
                    {% endif %}

                    <div style=\"text-align:right; margin-top:15px;\">
                        <button type=\"submit\" class=\"card-btn\">Enregistrer les modifications</button>
                    </div>
                </form>
            </div>
        </div>
    {% endfor %}

</main>
</div>

<script>
function openModal(id){document.getElementById(id).style.display='flex'}
function closeModal(id){document.getElementById(id).style.display='none'}
</script>

<script src=\"{{ asset('js/templatemo-glass-admin-script.js') }}\"></script>
</body>
</html>
", "back/energie/energy.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\back\\energie\\energy.html.twig");
    }
}
