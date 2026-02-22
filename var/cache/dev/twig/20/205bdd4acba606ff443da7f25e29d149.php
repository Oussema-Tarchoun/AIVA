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

/* chapitre/show.html.twig */
class __TwigTemplate_9d88b817c291a0c4aa246e1324a0011e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chapitre/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chapitre/show.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 7, $this->source); })()), "titre", [], "any", false, false, false, 7), "html", null, true);
        yield " - Chapitre</title>
    <meta name=\"description\" content=\"3D Glassmorphism Dashboard Template by TemplateMo\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Space+Mono:wght@400;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/templatemo-glass-admin-style.css"), "html", null, true);
        yield "\">

    <style>
        .chapter-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 8px;
        }
        .chapter-pill {
            font-size: 11px;
            padding: 4px 10px;
            border-radius: 999px;
            border: 1px solid rgba(148, 163, 184, 0.4);
            color: #e5e7eb;
            background: rgba(15, 23, 42, 0.7);
        }
        .chapter-pill--order {
            border-color: rgba(96, 165, 250, 0.8);
        }
        .chapter-pill--course {
            border-color: rgba(52, 211, 153, 0.8);
        }
        .section-title {
            font-size: 14px;
            font-weight: 500;
            color: #e5e7eb;
            margin-top: 18px;
            margin-bottom: 8px;
        }
        .section-text {
            font-size: 13px;
            color: #d1d5db;
            line-height: 1.6;
            white-space: pre-wrap;
        }
        .video-wrapper {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 */
            height: 0;
            overflow: hidden;
            border-radius: 16px;
            border: 1px solid rgba(148, 163, 184, 0.4);
            box-shadow: 0 18px 45px rgba(0, 0, 0, 0.45);
            margin-top: 8px;
        }
        .video-wrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .card-footer-actions {
            margin-top: 18px;
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }
    </style>
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
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Logo\" style=\"width: 50px; height: auto; margin-top: 12%;\">
        </div>
        <span class=\"logo-text\">AIVA</span>
    </div>

    <ul class=\"nav-menu\">

        ";
        // line 93
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Menu Principal</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\"
                       class=\"nav-link ";
        // line 98
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "request", [], "any", false, false, false, 98), "attributes", [], "any", false, false, false, 98), "get", ["_route"], "method", false, false, false, 98) == "dashboard")) {
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
        // line 109
        yield "              <span class=\"nav-section-title\">sports</span>

        <li class=\"nav-item\">
            <a href=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_sport_index");
        yield "\"
               class=\"nav-link ";
        // line 113
        if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "request", [], "any", false, false, false, 113), "attributes", [], "any", false, false, false, 113), "get", ["_route"], "method", false, false, false, 113)) && is_string($_v1 = "back_sport_") && str_starts_with($_v0, $_v1))) {
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
        // line 124
        yield "        <li class=\"nav-item\">
            <a href=\"";
        // line 125
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_index");
        yield "\"
               class=\"nav-link ";
        // line 126
        if ((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 126, $this->source); })()), "request", [], "any", false, false, false, 126), "attributes", [], "any", false, false, false, 126), "get", ["_route"], "method", false, false, false, 126)) && is_string($_v3 = "app_objectif_") && str_starts_with($_v2, $_v3))) {
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
        // line 135
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Finance</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 139
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depense_index");
        yield "\"
                       class=\"nav-link ";
        // line 140
        if ((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "request", [], "any", false, false, false, 140), "attributes", [], "any", false, false, false, 140), "get", ["_route"], "method", false, false, false, 140)) && is_string($_v5 = "app_depense_") && str_starts_with($_v4, $_v5))) {
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
        // line 151
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index");
        yield "\"
                       class=\"nav-link ";
        // line 152
        if ((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 152, $this->source); })()), "request", [], "any", false, false, false, 152), "attributes", [], "any", false, false, false, 152), "get", ["_route"], "method", false, false, false, 152)) && is_string($_v7 = "app_categorie_") && str_starts_with($_v6, $_v7))) {
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
        // line 166
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Énergies</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 170
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("energy");
        yield "\"
                       class=\"nav-link ";
        // line 171
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 171, $this->source); })()), "request", [], "any", false, false, false, 171), "attributes", [], "any", false, false, false, 171), "get", ["_route"], "method", false, false, false, 171) == "energy")) {
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
        // line 180
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recommendations");
        yield "\"
                       class=\"nav-link ";
        // line 181
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 181, $this->source); })()), "request", [], "any", false, false, false, 181), "attributes", [], "any", false, false, false, 181), "get", ["_route"], "method", false, false, false, 181) == "recommendations")) {
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
        // line 192
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stateenergi");
        yield "\"
                       class=\"nav-link ";
        // line 193
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 193, $this->source); })()), "request", [], "any", false, false, false, 193), "attributes", [], "any", false, false, false, 193), "get", ["_route"], "method", false, false, false, 193) == "stateenergi")) {
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
        // line 205
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Alimentation</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 209
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_aliment_index");
        yield "\"
                       class=\"nav-link ";
        // line 210
        if ((is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 210, $this->source); })()), "request", [], "any", false, false, false, 210), "attributes", [], "any", false, false, false, 210), "get", ["_route"], "method", false, false, false, 210)) && is_string($_v9 = "app_aliment_") && str_starts_with($_v8, $_v9))) {
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
        // line 220
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_repas_index");
        yield "\"
                       class=\"nav-link ";
        // line 221
        if ((is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 221, $this->source); })()), "request", [], "any", false, false, false, 221), "attributes", [], "any", false, false, false, 221), "get", ["_route"], "method", false, false, false, 221)) && is_string($_v11 = "app_repas_") && str_starts_with($_v10, $_v11))) {
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
        // line 235
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Formation</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 239
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_index");
        yield "\"
                       class=\"nav-link ";
        // line 240
        if ((is_string($_v12 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 240, $this->source); })()), "request", [], "any", false, false, false, 240), "attributes", [], "any", false, false, false, 240), "get", ["_route"], "method", false, false, false, 240)) && is_string($_v13 = "app_cours_") && str_starts_with($_v12, $_v13))) {
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
        // line 250
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chapitre_index");
        yield "\"
                       class=\"nav-link ";
        // line 251
        if ((is_string($_v14 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 251, $this->source); })()), "request", [], "any", false, false, false, 251), "attributes", [], "any", false, false, false, 251), "get", ["_route"], "method", false, false, false, 251)) && is_string($_v15 = "app_chapitre_") && str_starts_with($_v14, $_v15))) {
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
        // line 267
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Compte</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 271
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\"
                       class=\"nav-link ";
        // line 272
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 272, $this->source); })()), "request", [], "any", false, false, false, 272), "attributes", [], "any", false, false, false, 272), "get", ["_route"], "method", false, false, false, 272) == "app_profile")) {
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
        // line 282
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\"
                       class=\"nav-link ";
        // line 283
        if ((is_string($_v16 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 283, $this->source); })()), "request", [], "any", false, false, false, 283), "attributes", [], "any", false, false, false, 283), "get", ["_route"], "method", false, false, false, 283)) && is_string($_v17 = "app_user_") && str_starts_with($_v16, $_v17))) {
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
        // line 295
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
    <!-- Main Content -->
    <main class=\"main-content\">
        <nav class=\"navbar\">
            <div class=\"page-header\">
                <h1 class=\"page-title\">";
        // line 326
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 326, $this->source); })()), "titre", [], "any", false, false, false, 326), "html", null, true);
        yield "</h1>
                <div class=\"page-breadcrumb\">
                    <a href=\"";
        // line 328
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\">Dashboard</a>
                    <span>/</span>
                    <a href=\"";
        // line 330
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_index");
        yield "\">Cours</a>
                    <span>/</span>
                    ";
        // line 332
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 332, $this->source); })()), "cours", [], "any", false, false, false, 332)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 333
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chapitre_by_cours", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 333, $this->source); })()), "cours", [], "any", false, false, false, 333), "id", [], "any", false, false, false, 333)]), "html", null, true);
            yield "\">
                            ";
            // line 334
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 334, $this->source); })()), "cours", [], "any", false, false, false, 334), "tittre", [], "any", false, false, false, 334), "html", null, true);
            yield "
                        </a>
                        <span>/</span>
                    ";
        } else {
            // line 338
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chapitre_index");
            yield "\">Chapitres</a>
                        <span>/</span>
                    ";
        }
        // line 341
        yield "                    <span>Chapitre #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 341, $this->source); })()), "idChapitre", [], "any", false, false, false, 341), "html", null, true);
        yield "</span>
                </div>
            </div>
        </nav>

        <section class=\"content-grid\" style=\"grid-template-columns: 1fr;\">
            <div class=\"glass-card\" style=\"grid-column: span 1;\">
                <div class=\"card-header\">
                    <div>
                        <h2 class=\"card-title\">Chapitre #";
        // line 350
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 350, $this->source); })()), "idChapitre", [], "any", false, false, false, 350), "html", null, true);
        yield "</h2>
                        <div class=\"chapter-meta\">
                            ";
        // line 352
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 352, $this->source); })()), "cours", [], "any", false, false, false, 352)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 353
            yield "                                <div class=\"chapter-pill chapter-pill--course\">
Cours : ";
            // line 354
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 354, $this->source); })()), "cours", [], "any", false, false, false, 354), "tittre", [], "any", false, false, false, 354), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 354, $this->source); })()), "cours", [], "any", false, false, false, 354), "id", [], "any", false, false, false, 354), "html", null, true);
            yield ")
                                </div>
                            ";
        }
        // line 357
        yield "                            <div class=\"chapter-pill chapter-pill--order\">
                                Ordre : ";
        // line 358
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 358, $this->source); })()), "ordre", [], "any", false, false, false, 358), "html", null, true);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"card-actions\">
                        <a href=\"";
        // line 363
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chapitre_new");
        yield "\" class=\"card-btn\">
                            + Nouveau chapitre
                        </a>
                    </div>
                </div>

                <div class=\"card-body\">
                    <div class=\"section-title\">Contenu du chapitre</div>
                    <div class=\"section-text\">
                        ";
        // line 372
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 372, $this->source); })()), "contenu", [], "any", false, false, false, 372), "html", null, true);
        yield "
                    </div>

                    ";
        // line 375
        if ((($tmp = (isset($context["videoEmbedUrl"]) || array_key_exists("videoEmbedUrl", $context) ? $context["videoEmbedUrl"] : (function () { throw new RuntimeError('Variable "videoEmbedUrl" does not exist.', 375, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 376
            yield "                        <div class=\"section-title\">Vidéo du chapitre</div>
                        <div class=\"video-wrapper\">
                            <iframe
                                src=\"";
            // line 379
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["videoEmbedUrl"]) || array_key_exists("videoEmbedUrl", $context) ? $context["videoEmbedUrl"] : (function () { throw new RuntimeError('Variable "videoEmbedUrl" does not exist.', 379, $this->source); })()), "html", null, true);
            yield "\"
                                title=\"YouTube video player\"
                                frameborder=\"0\"
                                allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\"
                                allowfullscreen
                            ></iframe>
                        </div>
                    ";
        }
        // line 387
        yield "
                    ";
        // line 388
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 388, $this->source); })()), "exercise", [], "any", false, false, false, 388)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 389
            yield "                        <div class=\"section-title\">Exercice</div>
                        <div class=\"section-text\">
                            ";
            // line 391
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 391, $this->source); })()), "exercise", [], "any", false, false, false, 391), "html", null, true);
            yield "
                        </div>
                    ";
        }
        // line 394
        yield "                </div>

                <div class=\"card-footer-actions\">
                    <a href=\"";
        // line 397
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chapitre_index");
        yield "\" class=\"card-btn\">
                        Back to list
                    </a>
                    ";
        // line 400
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 400, $this->source); })()), "cours", [], "any", false, false, false, 400)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 401
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chapitre_by_cours", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 401, $this->source); })()), "cours", [], "any", false, false, false, 401), "id", [], "any", false, false, false, 401)]), "html", null, true);
            yield "\" class=\"card-btn\">
                            Chapitres de ce cours
                        </a>
                    ";
        }
        // line 405
        yield "                    <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chapitre_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 405, $this->source); })()), "id", [], "any", false, false, false, 405)]), "html", null, true);
        yield "\" class=\"card-btn\">
                        Edit
                    </a>
                    ";
        // line 408
        yield Twig\Extension\CoreExtension::include($this->env, $context, "chapitre/_delete_form.html.twig");
        yield "
                </div>
            </div>
        </section>
    </main>
</div>

<button class=\"mobile-menu-toggle\">
    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
        <line x1=\"3\" y1=\"12\" x2=\"21\" y2=\"12\"/><line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\"/><line x1=\"3\" y1=\"18\" x2=\"21\" y2=\"18\"/>
    </svg>
</button>

<footer class=\"site-footer\">
    <p>C
opyright © 2026 Your Company.
        Designed by <a href=\"https://templatemo.com\" target=\"_blank\" rel=\"nofollow\">TemplateMo</a></p>
</footer>

<script src=\"";
        // line 427
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
        return "chapitre/show.html.twig";
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
        return array (  685 => 427,  663 => 408,  656 => 405,  648 => 401,  646 => 400,  640 => 397,  635 => 394,  629 => 391,  625 => 389,  623 => 388,  620 => 387,  609 => 379,  604 => 376,  602 => 375,  596 => 372,  584 => 363,  576 => 358,  573 => 357,  565 => 354,  562 => 353,  560 => 352,  555 => 350,  542 => 341,  535 => 338,  528 => 334,  523 => 333,  521 => 332,  516 => 330,  511 => 328,  506 => 326,  472 => 295,  455 => 283,  451 => 282,  436 => 272,  432 => 271,  426 => 267,  406 => 251,  402 => 250,  387 => 240,  383 => 239,  377 => 235,  359 => 221,  355 => 220,  340 => 210,  336 => 209,  330 => 205,  314 => 193,  310 => 192,  294 => 181,  290 => 180,  276 => 171,  272 => 170,  266 => 166,  248 => 152,  244 => 151,  228 => 140,  224 => 139,  218 => 135,  205 => 126,  201 => 125,  198 => 124,  183 => 113,  179 => 112,  174 => 109,  159 => 98,  155 => 97,  149 => 93,  139 => 85,  63 => 12,  55 => 7,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/chapitre/show.html.twig #}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{{ chapitre.titre }} - Chapitre</title>
    <meta name=\"description\" content=\"3D Glassmorphism Dashboard Template by TemplateMo\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Space+Mono:wght@400;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/templatemo-glass-admin-style.css') }}\">

    <style>
        .chapter-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 8px;
        }
        .chapter-pill {
            font-size: 11px;
            padding: 4px 10px;
            border-radius: 999px;
            border: 1px solid rgba(148, 163, 184, 0.4);
            color: #e5e7eb;
            background: rgba(15, 23, 42, 0.7);
        }
        .chapter-pill--order {
            border-color: rgba(96, 165, 250, 0.8);
        }
        .chapter-pill--course {
            border-color: rgba(52, 211, 153, 0.8);
        }
        .section-title {
            font-size: 14px;
            font-weight: 500;
            color: #e5e7eb;
            margin-top: 18px;
            margin-bottom: 8px;
        }
        .section-text {
            font-size: 13px;
            color: #d1d5db;
            line-height: 1.6;
            white-space: pre-wrap;
        }
        .video-wrapper {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 */
            height: 0;
            overflow: hidden;
            border-radius: 16px;
            border: 1px solid rgba(148, 163, 184, 0.4);
            box-shadow: 0 18px 45px rgba(0, 0, 0, 0.45);
            margin-top: 8px;
        }
        .video-wrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .card-footer-actions {
            margin-top: 18px;
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }
    </style>
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
    <!-- Main Content -->
    <main class=\"main-content\">
        <nav class=\"navbar\">
            <div class=\"page-header\">
                <h1 class=\"page-title\">{{ chapitre.titre }}</h1>
                <div class=\"page-breadcrumb\">
                    <a href=\"{{ path('dashboard') }}\">Dashboard</a>
                    <span>/</span>
                    <a href=\"{{ path('app_cours_index') }}\">Cours</a>
                    <span>/</span>
                    {% if chapitre.cours %}
                        <a href=\"{{ path('app_chapitre_by_cours', { id: chapitre.cours.id }) }}\">
                            {{ chapitre.cours.tittre }}
                        </a>
                        <span>/</span>
                    {% else %}
                        <a href=\"{{ path('app_chapitre_index') }}\">Chapitres</a>
                        <span>/</span>
                    {% endif %}
                    <span>Chapitre #{{ chapitre.idChapitre }}</span>
                </div>
            </div>
        </nav>

        <section class=\"content-grid\" style=\"grid-template-columns: 1fr;\">
            <div class=\"glass-card\" style=\"grid-column: span 1;\">
                <div class=\"card-header\">
                    <div>
                        <h2 class=\"card-title\">Chapitre #{{ chapitre.idChapitre }}</h2>
                        <div class=\"chapter-meta\">
                            {% if chapitre.cours %}
                                <div class=\"chapter-pill chapter-pill--course\">
Cours : {{ chapitre.cours.tittre }} ({{ chapitre.cours.id }})
                                </div>
                            {% endif %}
                            <div class=\"chapter-pill chapter-pill--order\">
                                Ordre : {{ chapitre.ordre }}
                            </div>
                        </div>
                    </div>
                    <div class=\"card-actions\">
                        <a href=\"{{ path('app_chapitre_new') }}\" class=\"card-btn\">
                            + Nouveau chapitre
                        </a>
                    </div>
                </div>

                <div class=\"card-body\">
                    <div class=\"section-title\">Contenu du chapitre</div>
                    <div class=\"section-text\">
                        {{ chapitre.contenu }}
                    </div>

                    {% if videoEmbedUrl %}
                        <div class=\"section-title\">Vidéo du chapitre</div>
                        <div class=\"video-wrapper\">
                            <iframe
                                src=\"{{ videoEmbedUrl }}\"
                                title=\"YouTube video player\"
                                frameborder=\"0\"
                                allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\"
                                allowfullscreen
                            ></iframe>
                        </div>
                    {% endif %}

                    {% if chapitre.exercise %}
                        <div class=\"section-title\">Exercice</div>
                        <div class=\"section-text\">
                            {{ chapitre.exercise }}
                        </div>
                    {% endif %}
                </div>

                <div class=\"card-footer-actions\">
                    <a href=\"{{ path('app_chapitre_index') }}\" class=\"card-btn\">
                        Back to list
                    </a>
                    {% if chapitre.cours %}
                        <a href=\"{{ path('app_chapitre_by_cours', { id: chapitre.cours.id }) }}\" class=\"card-btn\">
                            Chapitres de ce cours
                        </a>
                    {% endif %}
                    <a href=\"{{ path('app_chapitre_edit', {'id': chapitre.id}) }}\" class=\"card-btn\">
                        Edit
                    </a>
                    {{ include('chapitre/_delete_form.html.twig') }}
                </div>
            </div>
        </section>
    </main>
</div>

<button class=\"mobile-menu-toggle\">
    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
        <line x1=\"3\" y1=\"12\" x2=\"21\" y2=\"12\"/><line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\"/><line x1=\"3\" y1=\"18\" x2=\"21\" y2=\"18\"/>
    </svg>
</button>

<footer class=\"site-footer\">
    <p>C
opyright © 2026 Your Company.
        Designed by <a href=\"https://templatemo.com\" target=\"_blank\" rel=\"nofollow\">TemplateMo</a></p>
</footer>

<script src=\"{{ asset('js/templatemo-glass-admin-script.js') }}\"></script>
</body>
</html>
", "chapitre/show.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\chapitre\\show.html.twig");
    }
}
