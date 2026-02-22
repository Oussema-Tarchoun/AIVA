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

/* depense/index.html.twig */
class __TwigTemplate_4bb726292423632cc0d68b569585f883 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "depense/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "depense/index.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Dépenses - 3D Glassmorphism Dashboard</title>
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
        
        /* BOUTON NOUVELLE DÉPENSE */
        .card-btn {
            font-size: 17px !important;
            padding: 14px 24px !important;
        }
        
        /* Filtre Montant min / max : même style que le tableau et que les boutons */
        .filter-input {
            position: relative;
            z-index: 5;
            pointer-events: auto;
            width: 200px;
            min-height: 50px;
            padding: 14px 20px;
            font-size: 17px !important;
            font-weight: 500;
            color: #f5f5f4;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 12px;
            outline: none;
        }
        .filter-input::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }
        .filter-input:focus {
            border-color: rgba(255, 255, 255, 0.25);
            background: rgba(255, 255, 255, 0.12);
        }
        
        /* Tous les boutons du filtre (Filtrer, Réinitialiser, Date, Montant) même taille */
        .glass-card form .card-btn {
            min-height: 50px;
            padding: 14px 24px !important;
            font-size: 17px !important;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
        }
        
        .flash-messages { margin: 0 24px 16px 24px; }
        .flash-message { padding: 12px 16px; border-radius: 12px; margin-bottom: 8px; font-size: 15px; }
        .flash-success { background: rgba(34, 197, 94, 0.3); color: #86efac; }
        .flash-error { background: rgba(239, 68, 68, 0.3); color: #fca5a5; }
        
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
            
            .filter-input {
                font-size: 15px !important;
                padding: 12px 16px !important;
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
            
            .filter-input {
                font-size: 14px !important;
                padding: 10px 14px !important;
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
    <!-- Animated Background -->
    <div class=\"background\"></div>
    <div class=\"orb orb-1\"></div>
    <div class=\"orb orb-2\"></div>
    <div class=\"orb orb-3\"></div>

    <div class=\"dashboard\">
  <!-- Sidebar -->
<aside class=\"sidebar\" id=\"sidebar\">
    <div class=\"sidebar-header\">
        <div class=\"logo\">
            <img src=\"";
        // line 284
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Logo\" style=\"width: 50px; height: auto; margin-top: 12%;\">
        </div>
        <span class=\"logo-text\">AIVA</span>
    </div>

    <ul class=\"nav-menu\">

        ";
        // line 292
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Menu Principal</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 296
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\"
                       class=\"nav-link ";
        // line 297
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 297, $this->source); })()), "request", [], "any", false, false, false, 297), "attributes", [], "any", false, false, false, 297), "get", ["_route"], "method", false, false, false, 297) == "dashboard")) {
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
        // line 308
        yield "              <span class=\"nav-section-title\">sports</span>

        <li class=\"nav-item\">
            <a href=\"";
        // line 311
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_sport_index");
        yield "\"
               class=\"nav-link ";
        // line 312
        if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 312, $this->source); })()), "request", [], "any", false, false, false, 312), "attributes", [], "any", false, false, false, 312), "get", ["_route"], "method", false, false, false, 312)) && is_string($_v1 = "back_sport_") && str_starts_with($_v0, $_v1))) {
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
        // line 323
        yield "        <li class=\"nav-item\">
            <a href=\"";
        // line 324
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_index");
        yield "\"
               class=\"nav-link ";
        // line 325
        if ((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 325, $this->source); })()), "request", [], "any", false, false, false, 325), "attributes", [], "any", false, false, false, 325), "get", ["_route"], "method", false, false, false, 325)) && is_string($_v3 = "app_objectif_") && str_starts_with($_v2, $_v3))) {
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
        // line 334
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Finance</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 338
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depense_index");
        yield "\"
                       class=\"nav-link ";
        // line 339
        if ((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 339, $this->source); })()), "request", [], "any", false, false, false, 339), "attributes", [], "any", false, false, false, 339), "get", ["_route"], "method", false, false, false, 339)) && is_string($_v5 = "app_depense_") && str_starts_with($_v4, $_v5))) {
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
        // line 350
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index");
        yield "\"
                       class=\"nav-link ";
        // line 351
        if ((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 351, $this->source); })()), "request", [], "any", false, false, false, 351), "attributes", [], "any", false, false, false, 351), "get", ["_route"], "method", false, false, false, 351)) && is_string($_v7 = "app_categorie_") && str_starts_with($_v6, $_v7))) {
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
        // line 365
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Énergies</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 369
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("energy");
        yield "\"
                       class=\"nav-link ";
        // line 370
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 370, $this->source); })()), "request", [], "any", false, false, false, 370), "attributes", [], "any", false, false, false, 370), "get", ["_route"], "method", false, false, false, 370) == "energy")) {
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
        // line 379
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recommendations");
        yield "\"
                       class=\"nav-link ";
        // line 380
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 380, $this->source); })()), "request", [], "any", false, false, false, 380), "attributes", [], "any", false, false, false, 380), "get", ["_route"], "method", false, false, false, 380) == "recommendations")) {
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
        // line 391
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stateenergi");
        yield "\"
                       class=\"nav-link ";
        // line 392
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 392, $this->source); })()), "request", [], "any", false, false, false, 392), "attributes", [], "any", false, false, false, 392), "get", ["_route"], "method", false, false, false, 392) == "stateenergi")) {
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
        // line 404
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Alimentation</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 408
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_aliment_index");
        yield "\"
                       class=\"nav-link ";
        // line 409
        if ((is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 409, $this->source); })()), "request", [], "any", false, false, false, 409), "attributes", [], "any", false, false, false, 409), "get", ["_route"], "method", false, false, false, 409)) && is_string($_v9 = "app_aliment_") && str_starts_with($_v8, $_v9))) {
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
        // line 419
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_repas_index");
        yield "\"
                       class=\"nav-link ";
        // line 420
        if ((is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 420, $this->source); })()), "request", [], "any", false, false, false, 420), "attributes", [], "any", false, false, false, 420), "get", ["_route"], "method", false, false, false, 420)) && is_string($_v11 = "app_repas_") && str_starts_with($_v10, $_v11))) {
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
        // line 434
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Formation</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 438
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_index");
        yield "\"
                       class=\"nav-link ";
        // line 439
        if ((is_string($_v12 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 439, $this->source); })()), "request", [], "any", false, false, false, 439), "attributes", [], "any", false, false, false, 439), "get", ["_route"], "method", false, false, false, 439)) && is_string($_v13 = "app_cours_") && str_starts_with($_v12, $_v13))) {
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
        // line 449
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chapitre_index");
        yield "\"
                       class=\"nav-link ";
        // line 450
        if ((is_string($_v14 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 450, $this->source); })()), "request", [], "any", false, false, false, 450), "attributes", [], "any", false, false, false, 450), "get", ["_route"], "method", false, false, false, 450)) && is_string($_v15 = "app_chapitre_") && str_starts_with($_v14, $_v15))) {
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
        // line 466
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Compte</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 470
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\"
                       class=\"nav-link ";
        // line 471
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 471, $this->source); })()), "request", [], "any", false, false, false, 471), "attributes", [], "any", false, false, false, 471), "get", ["_route"], "method", false, false, false, 471) == "app_profile")) {
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
        // line 481
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\"
                       class=\"nav-link ";
        // line 482
        if ((is_string($_v16 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 482, $this->source); })()), "request", [], "any", false, false, false, 482), "attributes", [], "any", false, false, false, 482), "get", ["_route"], "method", false, false, false, 482)) && is_string($_v17 = "app_user_") && str_starts_with($_v16, $_v17))) {
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
        // line 494
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
            <!-- Top Navbar -->
            <nav class=\"navbar\">
                <div class=\"page-header\">
                    <h1 class=\"page-title\">Dépenses</h1>
                    <div class=\"page-breadcrumb\">
                        <a href=\"";
        // line 531
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\">Dashboard</a>
                        <span>/</span>
                        <span>Dépenses</span>
                    </div>
                </div>
                <div class=\"navbar-right\">
                    <button class=\"nav-btn\">
                        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path d=\"M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9\"/><path d=\"M13.73 21a2 2 0 0 1-3.46 0\"/>
                        </svg>
                        <span class=\"notification-dot\"></span>
                    </button>
                    <button class=\"nav-btn\" id=\"theme-toggle\" title=\"Toggle Light/Dark Mode\">
                        <svg class=\"icon-sun\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <circle cx=\"12\" cy=\"12\" r=\"4\"/><path d=\"M12 2v2\"/><path d=\"M12 20v2\"/>
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

            <!-- Depense Table -->
            <section class=\"content-grid\" style=\"grid-template-columns: 1fr;\">
                <div class=\"glass-card table-card\" style=\"grid-column: span 1;\">
                    <div class=\"card-header\">
                        <div>
                            <h2 class=\"card-title\">Toutes les dépenses</h2>
                            <p class=\"card-subtitle\">Liste des dépenses par catégorie</p>
                        </div>
                        <div class=\"card-actions\">
                            <a href=\"";
        // line 566
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depense_new");
        yield "\" class=\"card-btn\">
                                <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\"
                                     stroke=\"currentColor\" stroke-width=\"2\" style=\"margin-right: 6px;\">
                                    <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"/><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"/>
                                </svg>
                                Nouvelle dépense
                            </a>
                        </div>
                    </div>

                    <div class=\"flash-messages\">
                        ";
        // line 577
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 577, $this->source); })()), "flashes", ["success"], "method", false, false, false, 577));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 578
            yield "                            <div class=\"flash-message flash-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 580
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 580, $this->source); })()), "flashes", ["error"], "method", false, false, false, 580));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 581
            yield "                            <div class=\"flash-message flash-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 583
        yield "                    </div>

                    ";
        // line 586
        yield "                    <div style=\"margin: 0 24px 16px 24px;\">
                        <form method=\"get\" action=\"";
        // line 587
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depense_index");
        yield "\"
                              style=\"display: flex; gap: 8px; align-items: center;\">
                            <input
                                type=\"number\"
                                step=\"0.01\"
                                name=\"min\"
                                placeholder=\"Montant min\"
                                value=\"";
        // line 594
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("min", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 594, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\"
                                class=\"filter-input\"
                            >
                            <input
                                type=\"number\"
                                step=\"0.01\"
                                name=\"max\"
                                placeholder=\"Montant max\"
                                value=\"";
        // line 602
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("max", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 602, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\"
                                class=\"filter-input\"
                            >

                            <input type=\"hidden\" name=\"sort\" value=\"";
        // line 606
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("sort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 606, $this->source); })()), "date")) : ("date")), "html", null, true);
        yield "\">
                            <input type=\"hidden\" name=\"direction\" value=\"";
        // line 607
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("direction", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 607, $this->source); })()), "desc")) : ("desc")), "html", null, true);
        yield "\">

                            <button type=\"submit\" class=\"card-btn\">
                                Filtrer
                            </button>
                            <a href=\"";
        // line 612
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depense_index");
        yield "\" class=\"card-btn\">
                                Réinitialiser
                            </a>

                            ";
        // line 617
        yield "                            <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depense_index", ["min" =>         // line 618
(isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 618, $this->source); })()), "max" =>         // line 619
(isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 619, $this->source); })()), "sort" => "date", "direction" => ((((        // line 621
(isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 621, $this->source); })()) == "date") && ((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 621, $this->source); })()) == "asc"))) ? ("desc") : ("asc"))]), "html", null, true);
        // line 622
        yield "\"
                               class=\"card-btn\"
                               title=\"Trier par date\">
                                Date
                                <span style=\"margin-left:4px;\">
                                    ";
        // line 627
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 627, $this->source); })()) == "date")) {
            // line 628
            yield "                                        ";
            yield ((((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 628, $this->source); })()) == "asc")) ? ("↑") : ("↓"));
            yield "
                                    ";
        } else {
            // line 630
            yield "                                        ⇵
                                    ";
        }
        // line 632
        yield "                                </span>
                            </a>

                            ";
        // line 636
        yield "                            <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depense_index", ["min" =>         // line 637
(isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 637, $this->source); })()), "max" =>         // line 638
(isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 638, $this->source); })()), "sort" => "montant", "direction" => ((((        // line 640
(isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 640, $this->source); })()) == "montant") && ((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 640, $this->source); })()) == "asc"))) ? ("desc") : ("asc"))]), "html", null, true);
        // line 641
        yield "\"
                               class=\"card-btn\"
                               title=\"Trier par montant\">
                                Montant
                                <span style=\"margin-left:4px;\">
                                    ";
        // line 646
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 646, $this->source); })()) == "montant")) {
            // line 647
            yield "                                        ";
            yield ((((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 647, $this->source); })()) == "asc")) ? ("↑") : ("↓"));
            yield "
                                    ";
        } else {
            // line 649
            yield "                                        ⇵
                                    ";
        }
        // line 651
        yield "                                </span>
                            </a>
                        </form>
                    </div>

                    <div class=\"table-wrapper table-wrapper-inset\">
                        <table class=\"data-table\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Description</th>
                                    <th>Montant</th>
                                    <th>Date</th>
                                    <th>Statut</th>
                                    <th>Catégorie</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 670
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["depenses"]) || array_key_exists("depenses", $context) ? $context["depenses"] : (function () { throw new RuntimeError('Variable "depenses" does not exist.', 670, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["depense"]) {
            // line 671
            yield "                                    <tr>
                                        <td>";
            // line 672
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["depense"], "idDepense", [], "any", false, false, false, 672), "html", null, true);
            yield "</td>
                                        <td>";
            // line 673
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["depense"], "description", [], "any", false, false, false, 673), "html", null, true);
            yield "</td>
                                        <td>";
            // line 674
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["depense"], "montant", [], "any", false, false, false, 674), "html", null, true);
            yield " TND</td>
                                        <td>";
            // line 675
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["depense"], "dateDepense", [], "any", false, false, false, 675)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["depense"], "dateDepense", [], "any", false, false, false, 675), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                                        <td>
                                            ";
            // line 677
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["depense"], "statut", [], "any", false, false, false, 677) == "payée")) {
                // line 678
                yield "                                                <span class=\"status-badge completed\">Payée</span>
                                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 679
$context["depense"], "statut", [], "any", false, false, false, 679) == "en attente")) {
                // line 680
                yield "                                                <span class=\"status-badge pending\">En attente</span>
                                            ";
            } else {
                // line 682
                yield "                                                <span class=\"status-badge processing\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["depense"], "statut", [], "any", false, false, false, 682), "html", null, true);
                yield "</span>
                                            ";
            }
            // line 684
            yield "                                        </td>
                                        <td>";
            // line 685
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["depense"], "categorie", [], "any", false, false, false, 685)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["depense"], "categorie", [], "any", false, false, false, 685), "nomCategorie", [], "any", false, false, false, 685), "html", null, true)) : ("-"));
            yield "</td>
                                        <td class=\"actions\">
                                            <a href=\"";
            // line 687
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depense_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["depense"], "idDepense", [], "any", false, false, false, 687)]), "html", null, true);
            yield "\" class=\"action-btn action-btn-voir\">Voir</a>
                                            <a href=\"";
            // line 688
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depense_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["depense"], "idDepense", [], "any", false, false, false, 688)]), "html", null, true);
            yield "\" class=\"action-btn action-btn-editer\">Éditer</a>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        // line 691
        if (!$context['_iterated']) {
            // line 692
            yield "                                    <tr>
                                        <td colspan=\"7\">no records found</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['depense'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 696
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <!-- Mobile Menu Toggle -->
    <button class=\"mobile-menu-toggle\">
        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
            <line x1=\"3\" y1=\"12\" x2=\"21\" y2=\"12\"/><line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\"/><line x1=\"3\" y1=\"18\" x2=\"21\" y2=\"18\"/>
        </svg>
    </button>

    <!-- Footer -->
    <footer class=\"site-footer\">
        <p>COPYRIGHT © 2026 Your Company. Designed by
            <a href=\"https://templatemo.com\" target=\"_blank\" rel=\"nofollow\">TemplateMo</a>
        </p>
    </footer>

    <script src=\"";
        // line 718
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
        return "depense/index.html.twig";
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
        return array (  1014 => 718,  990 => 696,  981 => 692,  979 => 691,  971 => 688,  967 => 687,  962 => 685,  959 => 684,  953 => 682,  949 => 680,  947 => 679,  944 => 678,  942 => 677,  937 => 675,  933 => 674,  929 => 673,  925 => 672,  922 => 671,  917 => 670,  896 => 651,  892 => 649,  886 => 647,  884 => 646,  877 => 641,  875 => 640,  874 => 638,  873 => 637,  871 => 636,  866 => 632,  862 => 630,  856 => 628,  854 => 627,  847 => 622,  845 => 621,  844 => 619,  843 => 618,  841 => 617,  834 => 612,  826 => 607,  822 => 606,  815 => 602,  804 => 594,  794 => 587,  791 => 586,  787 => 583,  778 => 581,  773 => 580,  764 => 578,  760 => 577,  746 => 566,  708 => 531,  668 => 494,  651 => 482,  647 => 481,  632 => 471,  628 => 470,  622 => 466,  602 => 450,  598 => 449,  583 => 439,  579 => 438,  573 => 434,  555 => 420,  551 => 419,  536 => 409,  532 => 408,  526 => 404,  510 => 392,  506 => 391,  490 => 380,  486 => 379,  472 => 370,  468 => 369,  462 => 365,  444 => 351,  440 => 350,  424 => 339,  420 => 338,  414 => 334,  401 => 325,  397 => 324,  394 => 323,  379 => 312,  375 => 311,  370 => 308,  355 => 297,  351 => 296,  345 => 292,  335 => 284,  60 => 12,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/depense/index.html.twig #}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Dépenses - 3D Glassmorphism Dashboard</title>
    <meta name=\"description\" content=\"3D Glassmorphism Dashboard Template by TemplateMo\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Space+Mono:wght@400;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/templatemo-glass-admin-style.css') }}\">

    <style>
        .table-wrapper-inset { margin: 0; padding: 0; width: 100%; overflow-x: auto; min-height: 120px; }
        
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
        
        /* BOUTON NOUVELLE DÉPENSE */
        .card-btn {
            font-size: 17px !important;
            padding: 14px 24px !important;
        }
        
        /* Filtre Montant min / max : même style que le tableau et que les boutons */
        .filter-input {
            position: relative;
            z-index: 5;
            pointer-events: auto;
            width: 200px;
            min-height: 50px;
            padding: 14px 20px;
            font-size: 17px !important;
            font-weight: 500;
            color: #f5f5f4;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 12px;
            outline: none;
        }
        .filter-input::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }
        .filter-input:focus {
            border-color: rgba(255, 255, 255, 0.25);
            background: rgba(255, 255, 255, 0.12);
        }
        
        /* Tous les boutons du filtre (Filtrer, Réinitialiser, Date, Montant) même taille */
        .glass-card form .card-btn {
            min-height: 50px;
            padding: 14px 24px !important;
            font-size: 17px !important;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
        }
        
        .flash-messages { margin: 0 24px 16px 24px; }
        .flash-message { padding: 12px 16px; border-radius: 12px; margin-bottom: 8px; font-size: 15px; }
        .flash-success { background: rgba(34, 197, 94, 0.3); color: #86efac; }
        .flash-error { background: rgba(239, 68, 68, 0.3); color: #fca5a5; }
        
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
            
            .filter-input {
                font-size: 15px !important;
                padding: 12px 16px !important;
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
            
            .filter-input {
                font-size: 14px !important;
                padding: 10px 14px !important;
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
    <!-- Animated Background -->
    <div class=\"background\"></div>
    <div class=\"orb orb-1\"></div>
    <div class=\"orb orb-2\"></div>
    <div class=\"orb orb-3\"></div>

    <div class=\"dashboard\">
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
            <!-- Top Navbar -->
            <nav class=\"navbar\">
                <div class=\"page-header\">
                    <h1 class=\"page-title\">Dépenses</h1>
                    <div class=\"page-breadcrumb\">
                        <a href=\"{{ path('dashboard') }}\">Dashboard</a>
                        <span>/</span>
                        <span>Dépenses</span>
                    </div>
                </div>
                <div class=\"navbar-right\">
                    <button class=\"nav-btn\">
                        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path d=\"M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9\"/><path d=\"M13.73 21a2 2 0 0 1-3.46 0\"/>
                        </svg>
                        <span class=\"notification-dot\"></span>
                    </button>
                    <button class=\"nav-btn\" id=\"theme-toggle\" title=\"Toggle Light/Dark Mode\">
                        <svg class=\"icon-sun\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <circle cx=\"12\" cy=\"12\" r=\"4\"/><path d=\"M12 2v2\"/><path d=\"M12 20v2\"/>
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

            <!-- Depense Table -->
            <section class=\"content-grid\" style=\"grid-template-columns: 1fr;\">
                <div class=\"glass-card table-card\" style=\"grid-column: span 1;\">
                    <div class=\"card-header\">
                        <div>
                            <h2 class=\"card-title\">Toutes les dépenses</h2>
                            <p class=\"card-subtitle\">Liste des dépenses par catégorie</p>
                        </div>
                        <div class=\"card-actions\">
                            <a href=\"{{ path('app_depense_new') }}\" class=\"card-btn\">
                                <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\"
                                     stroke=\"currentColor\" stroke-width=\"2\" style=\"margin-right: 6px;\">
                                    <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"/><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"/>
                                </svg>
                                Nouvelle dépense
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

                    {# Formulaire filtre montant + boutons de tri #}
                    <div style=\"margin: 0 24px 16px 24px;\">
                        <form method=\"get\" action=\"{{ path('app_depense_index') }}\"
                              style=\"display: flex; gap: 8px; align-items: center;\">
                            <input
                                type=\"number\"
                                step=\"0.01\"
                                name=\"min\"
                                placeholder=\"Montant min\"
                                value=\"{{ min|default('') }}\"
                                class=\"filter-input\"
                            >
                            <input
                                type=\"number\"
                                step=\"0.01\"
                                name=\"max\"
                                placeholder=\"Montant max\"
                                value=\"{{ max|default('') }}\"
                                class=\"filter-input\"
                            >

                            <input type=\"hidden\" name=\"sort\" value=\"{{ sort|default('date') }}\">
                            <input type=\"hidden\" name=\"direction\" value=\"{{ direction|default('desc') }}\">

                            <button type=\"submit\" class=\"card-btn\">
                                Filtrer
                            </button>
                            <a href=\"{{ path('app_depense_index') }}\" class=\"card-btn\">
                                Réinitialiser
                            </a>

                            {# Bouton tri par date #}
                            <a href=\"{{ path('app_depense_index', {
                                    min: min,
                                    max: max,
                                    sort: 'date',
                                    direction: sort == 'date' and direction == 'asc' ? 'desc' : 'asc'
                                }) }}\"
                               class=\"card-btn\"
                               title=\"Trier par date\">
                                Date
                                <span style=\"margin-left:4px;\">
                                    {% if sort == 'date' %}
                                        {{ direction == 'asc' ? '↑' : '↓' }}
                                    {% else %}
                                        ⇵
                                    {% endif %}
                                </span>
                            </a>

                            {# Bouton tri par montant #}
                            <a href=\"{{ path('app_depense_index', {
                                    min: min,
                                    max: max,
                                    sort: 'montant',
                                    direction: sort == 'montant' and direction == 'asc' ? 'desc' : 'asc'
                                }) }}\"
                               class=\"card-btn\"
                               title=\"Trier par montant\">
                                Montant
                                <span style=\"margin-left:4px;\">
                                    {% if sort == 'montant' %}
                                        {{ direction == 'asc' ? '↑' : '↓' }}
                                    {% else %}
                                        ⇵
                                    {% endif %}
                                </span>
                            </a>
                        </form>
                    </div>

                    <div class=\"table-wrapper table-wrapper-inset\">
                        <table class=\"data-table\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Description</th>
                                    <th>Montant</th>
                                    <th>Date</th>
                                    <th>Statut</th>
                                    <th>Catégorie</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for depense in depenses %}
                                    <tr>
                                        <td>{{ depense.idDepense }}</td>
                                        <td>{{ depense.description }}</td>
                                        <td>{{ depense.montant }} TND</td>
                                        <td>{{ depense.dateDepense ? depense.dateDepense|date('Y-m-d') : '' }}</td>
                                        <td>
                                            {% if depense.statut == 'payée' %}
                                                <span class=\"status-badge completed\">Payée</span>
                                            {% elseif depense.statut == 'en attente' %}
                                                <span class=\"status-badge pending\">En attente</span>
                                            {% else %}
                                                <span class=\"status-badge processing\">{{ depense.statut }}</span>
                                            {% endif %}
                                        </td>
                                        <td>{{ depense.categorie ? depense.categorie.nomCategorie : '-' }}</td>
                                        <td class=\"actions\">
                                            <a href=\"{{ path('app_depense_show', {'id': depense.idDepense}) }}\" class=\"action-btn action-btn-voir\">Voir</a>
                                            <a href=\"{{ path('app_depense_edit', {'id': depense.idDepense}) }}\" class=\"action-btn action-btn-editer\">Éditer</a>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"7\">no records found</td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <!-- Mobile Menu Toggle -->
    <button class=\"mobile-menu-toggle\">
        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
            <line x1=\"3\" y1=\"12\" x2=\"21\" y2=\"12\"/><line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\"/><line x1=\"3\" y1=\"18\" x2=\"21\" y2=\"18\"/>
        </svg>
    </button>

    <!-- Footer -->
    <footer class=\"site-footer\">
        <p>COPYRIGHT © 2026 Your Company. Designed by
            <a href=\"https://templatemo.com\" target=\"_blank\" rel=\"nofollow\">TemplateMo</a>
        </p>
    </footer>

    <script src=\"{{ asset('js/templatemo-glass-admin-script.js') }}\"></script>
</body>
</html>
", "depense/index.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\depense\\index.html.twig");
    }
}
