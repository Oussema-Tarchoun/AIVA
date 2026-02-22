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

/* categorie/index.html.twig */
class __TwigTemplate_482032c5f1dc40d0fdc5ac75f60a3e12 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/index.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Catégories - AIVA</title>
    <meta name=\"description\" content=\"3D Glassmorphism Dashboard Template by TemplateMo\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Space+Mono:wght@400;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/templatemo-glass-admin-style.css"), "html", null, true);
        yield "\">

    <style>
        .table-wrapper-inset { margin: 0; padding: 0; width: 100%; overflow-x: auto; min-height: 120px; }
        .flash-messages { margin: 0 24px 16px 24px; }
        .flash-message { padding: 12px 16px; border-radius: 12px; margin-bottom: 8px; font-size: 15px; }
        .flash-success { background: rgba(34, 197, 94, 0.3); color: #86efac; }
        .flash-error { background: rgba(239, 68, 68, 0.3); color: #fca5a5; }
        
        /* TITRES ET EN-TÊTES DE PAGE - TAILLES OPTIMALES */
        .page-title {
            font-size: 42px !important;
            font-weight: 700 !important;
        }
        
        .page-breadcrumb {
            font-size: 18px !important;
        }
        
        .card-title {
            font-size: 28px !important;
            font-weight: 700 !important;
        }
        
        .card-subtitle {
            font-size: 18px !important;
        }
        
        /* BOUTON NOUVELLE CATÉGORIE */
        .card-btn {
            font-size: 17px !important;
            padding: 14px 24px !important;
        }
        
        /* TAILLE DE POLICE OPTIMALE DES TABLEAUX */
        .data-table th {
            font-size: 17px !important;
            padding: 18px 22px !important;
        }
        
        .data-table td {
            font-size: 18px !important;
            padding: 18px 22px !important;
        }
        
        .data-table .actions a {
            font-size: 16px !important;
            padding: 12px 20px !important;
        }
        
        /* Force pour tous les tableaux */
        table th {
            font-size: 17px !important;
            padding: 18px 22px !important;
        }
        
        table td {
            font-size: 18px !important;
            padding: 18px 22px !important;
        }
        
        /* Boutons Voir / Éditer */
        table td.actions { 
            display: flex; 
            gap: 14px; 
            flex-wrap: wrap; 
        }
        
        table td.actions a { 
            display: inline-flex !important; 
            align-items: center; 
            justify-content: center; 
            padding: 12px 20px !important; 
            font-size: 16px !important; 
            font-weight: 600; 
            text-decoration: none; 
            border-radius: 8px; 
            white-space: nowrap; 
        }
        
        table td.actions a.action-btn-voir,
        a.action-btn-voir { 
            background: #059669 !important; 
            color: #fff !important; 
            border: 1px solid #10b981 !important; 
            font-size: 16px !important;
            padding: 12px 20px !important;
        }
        
        table td.actions a.action-btn-voir:hover,
        a.action-btn-voir:hover { 
            background: #34d399 !important; 
            color: #0a0f0d !important; 
        }
        
        table td.actions a.action-btn-editer,
        a.action-btn-editer { 
            background: #b45309 !important; 
            color: #fff !important; 
            border: 1px solid #d4a574 !important; 
            font-size: 16px !important;
            padding: 12px 20px !important;
        }
        
        table td.actions a.action-btn-editer:hover,
        a.action-btn-editer:hover { 
            background: #e8c9a0 !important; 
            color: #1a1510 !important; 
        }
        
        /* Classes génériques pour les boutons d'action */
        .action-btn {
            display: inline-flex !important;
            align-items: center;
            justify-content: center;
            padding: 12px 20px !important;
            font-size: 16px !important;
            font-weight: 600;
            text-decoration: none;
            border-radius: 8px;
            white-space: nowrap;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .page-title {
                font-size: 32px !important;
            }
            
            .page-breadcrumb {
                font-size: 16px !important;
            }
            
            .card-title {
                font-size: 24px !important;
            }
            
            .card-subtitle {
                font-size: 16px !important;
            }
            
            .card-btn {
                font-size: 15px !important;
                padding: 12px 20px !important;
            }
            
            .data-table th,
            table th {
                font-size: 16px !important;
                padding: 16px 18px !important;
            }
            
            .data-table td,
            table td {
                font-size: 16px !important;
                padding: 16px 18px !important;
            }
            
            .data-table .actions a,
            table td.actions a,
            .action-btn,
            .action-btn-voir,
            .action-btn-editer {
                font-size: 15px !important;
                padding: 10px 16px !important;
            }
        }
        
        @media (max-width: 480px) {
            .page-title {
                font-size: 26px !important;
            }
            
            .page-breadcrumb {
                font-size: 14px !important;
            }
            
            .card-title {
                font-size: 20px !important;
            }
            
            .card-subtitle {
                font-size: 14px !important;
            }
            
            .card-btn {
                font-size: 14px !important;
                padding: 10px 16px !important;
            }
            
            .data-table th,
            table th {
                font-size: 14px !important;
                padding: 12px 14px !important;
            }
            
            .data-table td,
            table td {
                font-size: 14px !important;
                padding: 12px 14px !important;
            }
            
            .data-table .actions a,
            table td.actions a,
            .action-btn,
            .action-btn-voir,
            .action-btn-editer {
                font-size: 14px !important;
                padding: 10px 14px !important;
            }
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
<!-- Sidebar -->
<aside class=\"sidebar\" id=\"sidebar\">
    <div class=\"sidebar-header\">
        <div class=\"logo\">
            <img src=\"";
        // line 238
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Logo\" style=\"width: 50px; height: auto; margin-top: 12%;\">
        </div>
        <span class=\"logo-text\">AIVA</span>
    </div>

    <ul class=\"nav-menu\">

        ";
        // line 246
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Menu Principal</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 250
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\"
                       class=\"nav-link ";
        // line 251
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 251, $this->source); })()), "request", [], "any", false, false, false, 251), "attributes", [], "any", false, false, false, 251), "get", ["_route"], "method", false, false, false, 251) == "dashboard")) {
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
        // line 262
        yield "              <span class=\"nav-section-title\">sports</span>

        <li class=\"nav-item\">
            <a href=\"";
        // line 265
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_sport_index");
        yield "\"
               class=\"nav-link ";
        // line 266
        if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 266, $this->source); })()), "request", [], "any", false, false, false, 266), "attributes", [], "any", false, false, false, 266), "get", ["_route"], "method", false, false, false, 266)) && is_string($_v1 = "back_sport_") && str_starts_with($_v0, $_v1))) {
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
        // line 277
        yield "        <li class=\"nav-item\">
            <a href=\"";
        // line 278
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_index");
        yield "\"
               class=\"nav-link ";
        // line 279
        if ((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 279, $this->source); })()), "request", [], "any", false, false, false, 279), "attributes", [], "any", false, false, false, 279), "get", ["_route"], "method", false, false, false, 279)) && is_string($_v3 = "app_objectif_") && str_starts_with($_v2, $_v3))) {
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
        // line 288
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Finance</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 292
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depense_index");
        yield "\"
                       class=\"nav-link ";
        // line 293
        if ((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 293, $this->source); })()), "request", [], "any", false, false, false, 293), "attributes", [], "any", false, false, false, 293), "get", ["_route"], "method", false, false, false, 293)) && is_string($_v5 = "app_depense_") && str_starts_with($_v4, $_v5))) {
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
        // line 304
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index");
        yield "\"
                       class=\"nav-link ";
        // line 305
        if ((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 305, $this->source); })()), "request", [], "any", false, false, false, 305), "attributes", [], "any", false, false, false, 305), "get", ["_route"], "method", false, false, false, 305)) && is_string($_v7 = "app_categorie_") && str_starts_with($_v6, $_v7))) {
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
        // line 319
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Énergies</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 323
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("energy");
        yield "\"
                       class=\"nav-link ";
        // line 324
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 324, $this->source); })()), "request", [], "any", false, false, false, 324), "attributes", [], "any", false, false, false, 324), "get", ["_route"], "method", false, false, false, 324) == "energy")) {
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
        // line 333
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recommendations");
        yield "\"
                       class=\"nav-link ";
        // line 334
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 334, $this->source); })()), "request", [], "any", false, false, false, 334), "attributes", [], "any", false, false, false, 334), "get", ["_route"], "method", false, false, false, 334) == "recommendations")) {
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
        // line 345
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stateenergi");
        yield "\"
                       class=\"nav-link ";
        // line 346
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 346, $this->source); })()), "request", [], "any", false, false, false, 346), "attributes", [], "any", false, false, false, 346), "get", ["_route"], "method", false, false, false, 346) == "stateenergi")) {
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
        // line 358
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Alimentation</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 362
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_aliment_index");
        yield "\"
                       class=\"nav-link ";
        // line 363
        if ((is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 363, $this->source); })()), "request", [], "any", false, false, false, 363), "attributes", [], "any", false, false, false, 363), "get", ["_route"], "method", false, false, false, 363)) && is_string($_v9 = "app_aliment_") && str_starts_with($_v8, $_v9))) {
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
        // line 373
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_repas_index");
        yield "\"
                       class=\"nav-link ";
        // line 374
        if ((is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 374, $this->source); })()), "request", [], "any", false, false, false, 374), "attributes", [], "any", false, false, false, 374), "get", ["_route"], "method", false, false, false, 374)) && is_string($_v11 = "app_repas_") && str_starts_with($_v10, $_v11))) {
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
        // line 388
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Formation</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 392
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_index");
        yield "\"
                       class=\"nav-link ";
        // line 393
        if ((is_string($_v12 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 393, $this->source); })()), "request", [], "any", false, false, false, 393), "attributes", [], "any", false, false, false, 393), "get", ["_route"], "method", false, false, false, 393)) && is_string($_v13 = "app_cours_") && str_starts_with($_v12, $_v13))) {
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
        // line 403
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chapitre_index");
        yield "\"
                       class=\"nav-link ";
        // line 404
        if ((is_string($_v14 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 404, $this->source); })()), "request", [], "any", false, false, false, 404), "attributes", [], "any", false, false, false, 404), "get", ["_route"], "method", false, false, false, 404)) && is_string($_v15 = "app_chapitre_") && str_starts_with($_v14, $_v15))) {
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
        // line 420
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Compte</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 424
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\"
                       class=\"nav-link ";
        // line 425
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 425, $this->source); })()), "request", [], "any", false, false, false, 425), "attributes", [], "any", false, false, false, 425), "get", ["_route"], "method", false, false, false, 425) == "app_profile")) {
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
        // line 435
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\"
                       class=\"nav-link ";
        // line 436
        if ((is_string($_v16 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 436, $this->source); })()), "request", [], "any", false, false, false, 436), "attributes", [], "any", false, false, false, 436), "get", ["_route"], "method", false, false, false, 436)) && is_string($_v17 = "app_user_") && str_starts_with($_v16, $_v17))) {
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
        // line 448
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


    <!-- Main content -->
    <main class=\"main-content\">
        <nav class=\"navbar\">
            <div class=\"page-header\">
                <h1 class=\"page-title\">Catégories</h1>
                <div class=\"page-breadcrumb\">
                    <a href=\"";
        // line 483
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\">Dashboard</a>
                    <span>/</span>
                    <span>Catégories</span>
                </div>
            </div>
        </nav>

        <section class=\"content-grid\" style=\"grid-template-columns: 1fr;\">
            <div class=\"glass-card table-card\" style=\"grid-column: span 1;\">
                <div class=\"card-header\">
                    <div>
                        <h2 class=\"card-title\">Liste des catégories</h2>
                        <p class=\"card-subtitle\">Gère les catégories utilisées pour tes dépenses</p>
                    </div>
                    <div class=\"card-actions\">
                        <a href=\"";
        // line 498
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_new");
        yield "\" class=\"card-btn\">
                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\"
                                 stroke=\"currentColor\" stroke-width=\"2\" style=\"margin-right: 6px;\">
                                <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"/><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"/>
                            </svg>
                            Nouvelle catégorie
                        </a>
                    </div>
                </div>

                <div class=\"flash-messages\">
                    ";
        // line 509
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 509, $this->source); })()), "flashes", ["success"], "method", false, false, false, 509));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 510
            yield "                        <div class=\"flash-message flash-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 512
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 512, $this->source); })()), "flashes", ["error"], "method", false, false, false, 512));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 513
            yield "                        <div class=\"flash-message flash-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 515
        yield "                </div>

                <div class=\"table-wrapper table-wrapper-inset\">
                    <table class=\"data-table\">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 528
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 528, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 529
            yield "                                <tr>
                                    <td>";
            // line 530
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "idCategorie", [], "any", false, false, false, 530), "html", null, true);
            yield "</td>
                                    <td>";
            // line 531
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nomCategorie", [], "any", false, false, false, 531), "html", null, true);
            yield "</td>
                                    <td>";
            // line 532
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "description", [], "any", true, true, false, 532) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "description", [], "any", false, false, false, 532)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "description", [], "any", false, false, false, 532), "html", null, true)) : ("-"));
            yield "</td>
                                    <td class=\"actions\">
                                        <a href=\"";
            // line 534
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "idCategorie", [], "any", false, false, false, 534)]), "html", null, true);
            yield "\" class=\"action-btn action-btn-voir\">Voir</a>
                                        <a href=\"";
            // line 535
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "idCategorie", [], "any", false, false, false, 535)]), "html", null, true);
            yield "\" class=\"action-btn action-btn-editer\">Éditer</a>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 538
        if (!$context['_iterated']) {
            // line 539
            yield "                                <tr>
                                    <td colspan=\"4\">Aucune catégorie trouvée</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 543
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>
</div>

<button class=\"mobile-menu-toggle\">
    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
        <line x1=\"3\" y1=\"12\" x2=\"21\" y2=\"12\"/>
        <line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\"/>
        <line x1=\"3\" y1=\"18\" x2=\"21\" y2=\"18\"/>
    </svg>
</button>

<footer class=\"site-footer\">
    <p>COPYRIGHT © 2026 Your Company. Designed by
        <a href=\"https://templatemo.com\" target=\"_blank\" rel=\"nofollow\">TemplateMo</a>
    </p>
</footer>

<script src=\"";
        // line 565
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
        return "categorie/index.html.twig";
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
        return array (  802 => 565,  778 => 543,  769 => 539,  767 => 538,  759 => 535,  755 => 534,  750 => 532,  746 => 531,  742 => 530,  739 => 529,  734 => 528,  719 => 515,  710 => 513,  705 => 512,  696 => 510,  692 => 509,  678 => 498,  660 => 483,  622 => 448,  605 => 436,  601 => 435,  586 => 425,  582 => 424,  576 => 420,  556 => 404,  552 => 403,  537 => 393,  533 => 392,  527 => 388,  509 => 374,  505 => 373,  490 => 363,  486 => 362,  480 => 358,  464 => 346,  460 => 345,  444 => 334,  440 => 333,  426 => 324,  422 => 323,  416 => 319,  398 => 305,  394 => 304,  378 => 293,  374 => 292,  368 => 288,  355 => 279,  351 => 278,  348 => 277,  333 => 266,  329 => 265,  324 => 262,  309 => 251,  305 => 250,  299 => 246,  289 => 238,  60 => 12,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/categorie/index.html.twig #}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Catégories - AIVA</title>
    <meta name=\"description\" content=\"3D Glassmorphism Dashboard Template by TemplateMo\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Space+Mono:wght@400;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/templatemo-glass-admin-style.css') }}\">

    <style>
        .table-wrapper-inset { margin: 0; padding: 0; width: 100%; overflow-x: auto; min-height: 120px; }
        .flash-messages { margin: 0 24px 16px 24px; }
        .flash-message { padding: 12px 16px; border-radius: 12px; margin-bottom: 8px; font-size: 15px; }
        .flash-success { background: rgba(34, 197, 94, 0.3); color: #86efac; }
        .flash-error { background: rgba(239, 68, 68, 0.3); color: #fca5a5; }
        
        /* TITRES ET EN-TÊTES DE PAGE - TAILLES OPTIMALES */
        .page-title {
            font-size: 42px !important;
            font-weight: 700 !important;
        }
        
        .page-breadcrumb {
            font-size: 18px !important;
        }
        
        .card-title {
            font-size: 28px !important;
            font-weight: 700 !important;
        }
        
        .card-subtitle {
            font-size: 18px !important;
        }
        
        /* BOUTON NOUVELLE CATÉGORIE */
        .card-btn {
            font-size: 17px !important;
            padding: 14px 24px !important;
        }
        
        /* TAILLE DE POLICE OPTIMALE DES TABLEAUX */
        .data-table th {
            font-size: 17px !important;
            padding: 18px 22px !important;
        }
        
        .data-table td {
            font-size: 18px !important;
            padding: 18px 22px !important;
        }
        
        .data-table .actions a {
            font-size: 16px !important;
            padding: 12px 20px !important;
        }
        
        /* Force pour tous les tableaux */
        table th {
            font-size: 17px !important;
            padding: 18px 22px !important;
        }
        
        table td {
            font-size: 18px !important;
            padding: 18px 22px !important;
        }
        
        /* Boutons Voir / Éditer */
        table td.actions { 
            display: flex; 
            gap: 14px; 
            flex-wrap: wrap; 
        }
        
        table td.actions a { 
            display: inline-flex !important; 
            align-items: center; 
            justify-content: center; 
            padding: 12px 20px !important; 
            font-size: 16px !important; 
            font-weight: 600; 
            text-decoration: none; 
            border-radius: 8px; 
            white-space: nowrap; 
        }
        
        table td.actions a.action-btn-voir,
        a.action-btn-voir { 
            background: #059669 !important; 
            color: #fff !important; 
            border: 1px solid #10b981 !important; 
            font-size: 16px !important;
            padding: 12px 20px !important;
        }
        
        table td.actions a.action-btn-voir:hover,
        a.action-btn-voir:hover { 
            background: #34d399 !important; 
            color: #0a0f0d !important; 
        }
        
        table td.actions a.action-btn-editer,
        a.action-btn-editer { 
            background: #b45309 !important; 
            color: #fff !important; 
            border: 1px solid #d4a574 !important; 
            font-size: 16px !important;
            padding: 12px 20px !important;
        }
        
        table td.actions a.action-btn-editer:hover,
        a.action-btn-editer:hover { 
            background: #e8c9a0 !important; 
            color: #1a1510 !important; 
        }
        
        /* Classes génériques pour les boutons d'action */
        .action-btn {
            display: inline-flex !important;
            align-items: center;
            justify-content: center;
            padding: 12px 20px !important;
            font-size: 16px !important;
            font-weight: 600;
            text-decoration: none;
            border-radius: 8px;
            white-space: nowrap;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .page-title {
                font-size: 32px !important;
            }
            
            .page-breadcrumb {
                font-size: 16px !important;
            }
            
            .card-title {
                font-size: 24px !important;
            }
            
            .card-subtitle {
                font-size: 16px !important;
            }
            
            .card-btn {
                font-size: 15px !important;
                padding: 12px 20px !important;
            }
            
            .data-table th,
            table th {
                font-size: 16px !important;
                padding: 16px 18px !important;
            }
            
            .data-table td,
            table td {
                font-size: 16px !important;
                padding: 16px 18px !important;
            }
            
            .data-table .actions a,
            table td.actions a,
            .action-btn,
            .action-btn-voir,
            .action-btn-editer {
                font-size: 15px !important;
                padding: 10px 16px !important;
            }
        }
        
        @media (max-width: 480px) {
            .page-title {
                font-size: 26px !important;
            }
            
            .page-breadcrumb {
                font-size: 14px !important;
            }
            
            .card-title {
                font-size: 20px !important;
            }
            
            .card-subtitle {
                font-size: 14px !important;
            }
            
            .card-btn {
                font-size: 14px !important;
                padding: 10px 16px !important;
            }
            
            .data-table th,
            table th {
                font-size: 14px !important;
                padding: 12px 14px !important;
            }
            
            .data-table td,
            table td {
                font-size: 14px !important;
                padding: 12px 14px !important;
            }
            
            .data-table .actions a,
            table td.actions a,
            .action-btn,
            .action-btn-voir,
            .action-btn-editer {
                font-size: 14px !important;
                padding: 10px 14px !important;
            }
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


    <!-- Main content -->
    <main class=\"main-content\">
        <nav class=\"navbar\">
            <div class=\"page-header\">
                <h1 class=\"page-title\">Catégories</h1>
                <div class=\"page-breadcrumb\">
                    <a href=\"{{ path('dashboard') }}\">Dashboard</a>
                    <span>/</span>
                    <span>Catégories</span>
                </div>
            </div>
        </nav>

        <section class=\"content-grid\" style=\"grid-template-columns: 1fr;\">
            <div class=\"glass-card table-card\" style=\"grid-column: span 1;\">
                <div class=\"card-header\">
                    <div>
                        <h2 class=\"card-title\">Liste des catégories</h2>
                        <p class=\"card-subtitle\">Gère les catégories utilisées pour tes dépenses</p>
                    </div>
                    <div class=\"card-actions\">
                        <a href=\"{{ path('app_categorie_new') }}\" class=\"card-btn\">
                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\"
                                 stroke=\"currentColor\" stroke-width=\"2\" style=\"margin-right: 6px;\">
                                <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"/><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"/>
                            </svg>
                            Nouvelle catégorie
                        </a>
                    </div>
                </div>

                <div class=\"flash-messages\">
                    {% for message in app.flashes('success') %}
                        <div class=\"flash-message flash-success\">{{ message }}</div>
                    {% endfor %}
                    {% for message in app.flashes('error') %}
                        <div class=\"flash-message flash-error\">{{ message }}</div>
                    {% endfor %}
                </div>

                <div class=\"table-wrapper table-wrapper-inset\">
                    <table class=\"data-table\">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for categorie in categories %}
                                <tr>
                                    <td>{{ categorie.idCategorie }}</td>
                                    <td>{{ categorie.nomCategorie }}</td>
                                    <td>{{ categorie.description ?? '-' }}</td>
                                    <td class=\"actions\">
                                        <a href=\"{{ path('app_categorie_show', {'id': categorie.idCategorie}) }}\" class=\"action-btn action-btn-voir\">Voir</a>
                                        <a href=\"{{ path('app_categorie_edit', {'id': categorie.idCategorie}) }}\" class=\"action-btn action-btn-editer\">Éditer</a>
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"4\">Aucune catégorie trouvée</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>
</div>

<button class=\"mobile-menu-toggle\">
    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
        <line x1=\"3\" y1=\"12\" x2=\"21\" y2=\"12\"/>
        <line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\"/>
        <line x1=\"3\" y1=\"18\" x2=\"21\" y2=\"18\"/>
    </svg>
</button>

<footer class=\"site-footer\">
    <p>COPYRIGHT © 2026 Your Company. Designed by
        <a href=\"https://templatemo.com\" target=\"_blank\" rel=\"nofollow\">TemplateMo</a>
    </p>
</footer>

<script src=\"{{ asset('js/templatemo-glass-admin-script.js') }}\"></script>
</body>
</html>
", "categorie/index.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\categorie\\index.html.twig");
    }
}
