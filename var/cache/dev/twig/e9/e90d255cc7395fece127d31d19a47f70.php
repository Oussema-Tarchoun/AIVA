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

/* depense/new.html.twig */
class __TwigTemplate_39d20d28990072e5118592c61c2df565 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "depense/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "depense/new.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Nouvelle dépense</title>
    <meta name=\"description\" content=\"3D Glassmorphism Dashboard Template by TemplateMo\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Space+Mono:wght@400;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/templatemo-glass-admin-style.css"), "html", null, true);
        yield "\">

    <style>
        /* TITRES ET EN-TÊTES */
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
        
        /* FORMULAIRE */
        .form-wrapper { 
            max-width: 720px; 
            margin: 0 auto; 
        }
        
        .form-row { 
            margin-bottom: 20px; 
        }
        
        .form-row label { 
            display: block; 
            margin-bottom: 10px; 
            color: #fff; 
            opacity: .9; 
            font-size: 17px !important;
            font-weight: 500;
        }
        
        .form-row input, 
        .form-row textarea, 
        .form-row select {
            width: 100%;
            padding: 14px 16px;
            border-radius: 12px;
            border: 1px solid rgba(255,255,255,0.15);
            background: rgba(0,0,0,0.25);
            color: #fff;
            outline: none;
            font-size: 17px !important;
        }
        
        .form-row input:focus,
        .form-row textarea:focus,
        .form-row select:focus {
            border-color: var(--emerald-light);
            box-shadow: 0 0 20px rgba(52, 211, 153, 0.2);
        }
        
        .form-input {
            width: 100%;
            padding: 14px 16px;
            border-radius: 12px;
            border: 1px solid rgba(255,255,255,0.15);
            background: rgba(0,0,0,0.25);
            color: #fff;
            outline: none;
            font-size: 17px !important;
        }
        
        .form-input:focus {
            border-color: rgba(255, 255, 255, 0.25);
            background: rgba(0, 0, 0, 0.3);
        }
        
        .form-input.error {
            box-shadow: 0 0 0 2px rgba(239, 68, 68, 0.6);
        }
        
        .btn-row { 
            display: flex; 
            gap: 12px; 
            margin-top: 24px; 
        }
        
        .new-btn,
        .card-body .card-btn.submit-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 14px 24px !important;
            border-radius: 12px;
            border: none;
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            color: #fff;
            text-decoration: none;
            font-size: 17px !important;
            font-weight: 500;
            cursor: pointer;
            transition: all var(--transition-fast);
            margin-top: 24px;
        }
        
        .new-btn:hover,
        .card-body .card-btn.submit-btn:hover {
            background: var(--glass-hover);
            border-color: var(--emerald-light);
        }
        
        .new-btn[type=\"submit\"],
        .card-body .card-btn.submit-btn[type=\"submit\"] {
            background: linear-gradient(135deg, var(--emerald), var(--emerald-light));
            border-color: var(--emerald);
        }
        
        .new-btn[type=\"submit\"]:hover,
        .card-body .card-btn.submit-btn[type=\"submit\"]:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(5, 150, 105, 0.3);
        }
        
        /* icône du datepicker en blanc */
        input[type=\"date\"]::-webkit-calendar-picker-indicator {
            filter: invert(1);
        }
        input[type=\"date\"] {
            color-scheme: dark;
        }
        
        /* Styles pour les messages Flash */
        .flash-messages {
            margin-bottom: 20px;
        }
        .flash-message {
            padding: 12px 16px;
            border-radius: 12px;
            margin-bottom: 10px;
            font-size: 16px !important;
            display: flex;
            align-items: center;
            gap: 10px;
            animation: slideIn 0.3s ease-out;
        }
        .flash-success {
            background: rgba(16, 185, 129, 0.15);
            border: 1px solid rgba(16, 185, 129, 0.3);
            color: #10b981;
        }
        .flash-error {
            background: rgba(239, 68, 68, 0.15);
            border: 1px solid rgba(239, 68, 68, 0.3);
            color: #ef4444;
        }
        .flash-info {
            background: rgba(59, 130, 246, 0.15);
            border: 1px solid rgba(59, 130, 246, 0.3);
            color: #3b82f6;
        }
        
        /* Erreurs sous les champs */
        .field-error {
            color: #ef4444;
            font-size: 15px !important;
            margin-top: 6px;
            display: flex;
            align-items: center;
            gap: 6px;
        }
        
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
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
            
            .form-row label {
                font-size: 16px !important;
            }
            
            .form-row input,
            .form-row textarea,
            .form-row select,
            .form-input {
                font-size: 16px !important;
                padding: 12px 14px;
            }
            
            .new-btn,
            .card-body .card-btn.submit-btn {
                font-size: 15px !important;
                padding: 12px 20px !important;
            }
            
            .flash-message {
                font-size: 15px !important;
            }
            
            .field-error {
                font-size: 14px !important;
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
            
            .form-row label {
                font-size: 15px !important;
            }
            
            .form-row input,
            .form-row textarea,
            .form-row select,
            .form-input {
                font-size: 15px !important;
                padding: 10px 12px;
            }
            
            .new-btn,
            .card-body .card-btn.submit-btn {
                font-size: 14px !important;
                padding: 10px 16px !important;
            }
            
            .flash-message {
                font-size: 14px !important;
            }
            
            .field-error {
                font-size: 13px !important;
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
<aside class=\"sidebar\" id=\"sidebar\">
    <div class=\"sidebar-header\">
        <div class=\"logo\">
            <img src=\"";
        // line 297
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Logo\" style=\"width: 50px; height: auto; margin-top: 12%;\">
        </div>
        <span class=\"logo-text\">AIVA</span>
    </div>

    <ul class=\"nav-menu\">

        ";
        // line 305
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Menu Principal</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 309
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\"
                       class=\"nav-link ";
        // line 310
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 310, $this->source); })()), "request", [], "any", false, false, false, 310), "attributes", [], "any", false, false, false, 310), "get", ["_route"], "method", false, false, false, 310) == "dashboard")) {
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
        // line 321
        yield "              <span class=\"nav-section-title\">sports</span>

        <li class=\"nav-item\">
            <a href=\"";
        // line 324
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_sport_index");
        yield "\"
               class=\"nav-link ";
        // line 325
        if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 325, $this->source); })()), "request", [], "any", false, false, false, 325), "attributes", [], "any", false, false, false, 325), "get", ["_route"], "method", false, false, false, 325)) && is_string($_v1 = "back_sport_") && str_starts_with($_v0, $_v1))) {
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
        // line 336
        yield "        <li class=\"nav-item\">
            <a href=\"";
        // line 337
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_index");
        yield "\"
               class=\"nav-link ";
        // line 338
        if ((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 338, $this->source); })()), "request", [], "any", false, false, false, 338), "attributes", [], "any", false, false, false, 338), "get", ["_route"], "method", false, false, false, 338)) && is_string($_v3 = "app_objectif_") && str_starts_with($_v2, $_v3))) {
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
        // line 347
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Finance</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 351
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depense_index");
        yield "\"
                       class=\"nav-link ";
        // line 352
        if ((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 352, $this->source); })()), "request", [], "any", false, false, false, 352), "attributes", [], "any", false, false, false, 352), "get", ["_route"], "method", false, false, false, 352)) && is_string($_v5 = "app_depense_") && str_starts_with($_v4, $_v5))) {
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
        // line 363
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index");
        yield "\"
                       class=\"nav-link ";
        // line 364
        if ((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 364, $this->source); })()), "request", [], "any", false, false, false, 364), "attributes", [], "any", false, false, false, 364), "get", ["_route"], "method", false, false, false, 364)) && is_string($_v7 = "app_categorie_") && str_starts_with($_v6, $_v7))) {
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
        // line 378
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Énergies</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 382
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("energy");
        yield "\"
                       class=\"nav-link ";
        // line 383
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 383, $this->source); })()), "request", [], "any", false, false, false, 383), "attributes", [], "any", false, false, false, 383), "get", ["_route"], "method", false, false, false, 383) == "energy")) {
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
        // line 392
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recommendations");
        yield "\"
                       class=\"nav-link ";
        // line 393
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 393, $this->source); })()), "request", [], "any", false, false, false, 393), "attributes", [], "any", false, false, false, 393), "get", ["_route"], "method", false, false, false, 393) == "recommendations")) {
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
        // line 404
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stateenergi");
        yield "\"
                       class=\"nav-link ";
        // line 405
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 405, $this->source); })()), "request", [], "any", false, false, false, 405), "attributes", [], "any", false, false, false, 405), "get", ["_route"], "method", false, false, false, 405) == "stateenergi")) {
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
        // line 417
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Alimentation</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 421
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_aliment_index");
        yield "\"
                       class=\"nav-link ";
        // line 422
        if ((is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 422, $this->source); })()), "request", [], "any", false, false, false, 422), "attributes", [], "any", false, false, false, 422), "get", ["_route"], "method", false, false, false, 422)) && is_string($_v9 = "app_aliment_") && str_starts_with($_v8, $_v9))) {
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
        // line 432
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_repas_index");
        yield "\"
                       class=\"nav-link ";
        // line 433
        if ((is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 433, $this->source); })()), "request", [], "any", false, false, false, 433), "attributes", [], "any", false, false, false, 433), "get", ["_route"], "method", false, false, false, 433)) && is_string($_v11 = "app_repas_") && str_starts_with($_v10, $_v11))) {
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
        // line 447
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Formation</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 451
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_index");
        yield "\"
                       class=\"nav-link ";
        // line 452
        if ((is_string($_v12 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 452, $this->source); })()), "request", [], "any", false, false, false, 452), "attributes", [], "any", false, false, false, 452), "get", ["_route"], "method", false, false, false, 452)) && is_string($_v13 = "app_cours_") && str_starts_with($_v12, $_v13))) {
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
        // line 462
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chapitre_index");
        yield "\"
                       class=\"nav-link ";
        // line 463
        if ((is_string($_v14 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 463, $this->source); })()), "request", [], "any", false, false, false, 463), "attributes", [], "any", false, false, false, 463), "get", ["_route"], "method", false, false, false, 463)) && is_string($_v15 = "app_chapitre_") && str_starts_with($_v14, $_v15))) {
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
        // line 479
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Compte</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 483
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\"
                       class=\"nav-link ";
        // line 484
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 484, $this->source); })()), "request", [], "any", false, false, false, 484), "attributes", [], "any", false, false, false, 484), "get", ["_route"], "method", false, false, false, 484) == "app_profile")) {
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
        // line 494
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\"
                       class=\"nav-link ";
        // line 495
        if ((is_string($_v16 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 495, $this->source); })()), "request", [], "any", false, false, false, 495), "attributes", [], "any", false, false, false, 495), "get", ["_route"], "method", false, false, false, 495)) && is_string($_v17 = "app_user_") && str_starts_with($_v16, $_v17))) {
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
        // line 507
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
                <h1 class=\"page-title\">Nouvelle dépense</h1>
                <div class=\"page-breadcrumb\">
                    <a href=\"";
        // line 542
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\">Dashboard</a>
                    <span>/</span>
                    <a href=\"";
        // line 544
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depense_index");
        yield "\">Dépenses</a>
                    <span>/</span>
                    <span>Création</span>
                </div>
            </div>
        </nav>

        <section class=\"content-grid\" style=\"grid-template-columns: 1fr;\">
            <div class=\"glass-card\" style=\"grid-column: span 1;\">
                <div class=\"card-header\">
                    <div>
                        <h2 class=\"card-title\">Créer une nouvelle dépense</h2>
                        <p class=\"card-subtitle\">Remplis le formulaire pour ajouter une dépense</p>
                    </div>
                </div>

                <div class=\"card-body\">
                    ";
        // line 562
        yield "                    <div class=\"flash-messages\">
                        ";
        // line 563
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 563, $this->source); })()), "flashes", ["success"], "method", false, false, false, 563));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 564
            yield "                            <div class=\"flash-message flash-success\">
                                <span>✅</span>
                                <span>";
            // line 566
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 569
        yield "
                        ";
        // line 570
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 570, $this->source); })()), "flashes", ["error"], "method", false, false, false, 570));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 571
            yield "                            <div class=\"flash-message flash-error\">
                                <span>❌</span>
                                <span>";
            // line 573
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 576
        yield "
                        ";
        // line 577
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 577, $this->source); })()), "flashes", ["info"], "method", false, false, false, 577));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 578
            yield "                            <div class=\"flash-message flash-info\">
                                <span>ℹ️</span>
                                <span>";
            // line 580
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 583
        yield "                    </div>

                    <div class=\"form-wrapper\">
                        ";
        // line 586
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 586, $this->source); })()), 'form_start', ["attr" => ["class" => "form-grid", "novalidate" => "novalidate"]]);
        yield "

                            <div class=\"form-row\">
                                ";
        // line 589
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 589, $this->source); })()), "description", [], "any", false, false, false, 589), 'label');
        yield "
                                ";
        // line 590
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 590, $this->source); })()), "description", [], "any", false, false, false, 590), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 592
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 592, $this->source); })()), "description", [], "any", false, false, false, 592), "vars", [], "any", false, false, false, 592), "errors", [], "any", false, false, false, 592)) > 0)) ? ("form-input error") : ("form-input"))]]);
        // line 594
        yield "
                                ";
        // line 595
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 595, $this->source); })()), "description", [], "any", false, false, false, 595), "vars", [], "any", false, false, false, 595), "errors", [], "any", false, false, false, 595)) > 0)) {
            // line 596
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 596, $this->source); })()), "description", [], "any", false, false, false, 596), "vars", [], "any", false, false, false, 596), "errors", [], "any", false, false, false, 596));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 597
                yield "                                        <div class=\"field-error\">
                                            <span>⚠️</span>
                                            <span>";
                // line 599
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 599), "html", null, true);
                yield "</span>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 602
            yield "                                ";
        }
        // line 603
        yield "                            </div>

                            <div class=\"form-row\">
                                ";
        // line 606
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 606, $this->source); })()), "montant", [], "any", false, false, false, 606), 'label');
        yield "
                                ";
        // line 607
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 607, $this->source); })()), "montant", [], "any", false, false, false, 607), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 609
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 609, $this->source); })()), "montant", [], "any", false, false, false, 609), "vars", [], "any", false, false, false, 609), "errors", [], "any", false, false, false, 609)) > 0)) ? ("form-input error") : ("form-input"))]]);
        // line 611
        yield "
                                ";
        // line 612
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 612, $this->source); })()), "montant", [], "any", false, false, false, 612), "vars", [], "any", false, false, false, 612), "errors", [], "any", false, false, false, 612)) > 0)) {
            // line 613
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 613, $this->source); })()), "montant", [], "any", false, false, false, 613), "vars", [], "any", false, false, false, 613), "errors", [], "any", false, false, false, 613));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 614
                yield "                                        <div class=\"field-error\">
                                            <span>⚠️</span>
                                            <span>";
                // line 616
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 616), "html", null, true);
                yield "</span>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 619
            yield "                                ";
        }
        // line 620
        yield "                            </div>

                            <div class=\"form-row\">
                                ";
        // line 623
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 623, $this->source); })()), "date_depense", [], "any", false, false, false, 623), 'label');
        yield "
                                ";
        // line 624
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 624, $this->source); })()), "date_depense", [], "any", false, false, false, 624), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 626
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 626, $this->source); })()), "date_depense", [], "any", false, false, false, 626), "vars", [], "any", false, false, false, 626), "errors", [], "any", false, false, false, 626)) > 0)) ? ("form-input error") : ("form-input"))]]);
        // line 628
        yield "
                                ";
        // line 629
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 629, $this->source); })()), "date_depense", [], "any", false, false, false, 629), "vars", [], "any", false, false, false, 629), "errors", [], "any", false, false, false, 629)) > 0)) {
            // line 630
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 630, $this->source); })()), "date_depense", [], "any", false, false, false, 630), "vars", [], "any", false, false, false, 630), "errors", [], "any", false, false, false, 630));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 631
                yield "                                        <div class=\"field-error\">
                                            <span>⚠️</span>
                                            <span>";
                // line 633
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 633), "html", null, true);
                yield "</span>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 636
            yield "                                ";
        }
        // line 637
        yield "                            </div>

                            <div class=\"form-row\">
                                ";
        // line 640
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 640, $this->source); })()), "statut", [], "any", false, false, false, 640), 'label');
        yield "
                                ";
        // line 641
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 641, $this->source); })()), "statut", [], "any", false, false, false, 641), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 643
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 643, $this->source); })()), "statut", [], "any", false, false, false, 643), "vars", [], "any", false, false, false, 643), "errors", [], "any", false, false, false, 643)) > 0)) ? ("form-input error") : ("form-input"))]]);
        // line 645
        yield "
                                ";
        // line 646
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 646, $this->source); })()), "statut", [], "any", false, false, false, 646), "vars", [], "any", false, false, false, 646), "errors", [], "any", false, false, false, 646)) > 0)) {
            // line 647
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 647, $this->source); })()), "statut", [], "any", false, false, false, 647), "vars", [], "any", false, false, false, 647), "errors", [], "any", false, false, false, 647));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 648
                yield "                                        <div class=\"field-error\">
                                            <span>⚠️</span>
                                            <span>";
                // line 650
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 650), "html", null, true);
                yield "</span>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 653
            yield "                                ";
        }
        // line 654
        yield "                            </div>

                            <div class=\"form-row\">
                                ";
        // line 657
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 657, $this->source); })()), "categorie", [], "any", false, false, false, 657), 'label');
        yield "
                                ";
        // line 658
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 658, $this->source); })()), "categorie", [], "any", false, false, false, 658), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 660
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 660, $this->source); })()), "categorie", [], "any", false, false, false, 660), "vars", [], "any", false, false, false, 660), "errors", [], "any", false, false, false, 660)) > 0)) ? ("form-input error") : ("form-input"))]]);
        // line 662
        yield "
                                ";
        // line 663
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 663, $this->source); })()), "categorie", [], "any", false, false, false, 663), "vars", [], "any", false, false, false, 663), "errors", [], "any", false, false, false, 663)) > 0)) {
            // line 664
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 664, $this->source); })()), "categorie", [], "any", false, false, false, 664), "vars", [], "any", false, false, false, 664), "errors", [], "any", false, false, false, 664));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 665
                yield "                                        <div class=\"field-error\">
                                            <span>⚠️</span>
                                            <span>";
                // line 667
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 667), "html", null, true);
                yield "</span>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 670
            yield "                                ";
        }
        // line 671
        yield "                            </div>

                            <button type=\"submit\" class=\"card-btn submit-btn\">
                                Save
                            </button>

                        ";
        // line 677
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 677, $this->source); })()), 'form_end');
        yield "

                        <div style=\"margin-top: 16px;\">
                            <a href=\"";
        // line 680
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depense_index");
        yield "\" class=\"card-btn\">
                                ← Retour à la liste
                            </a>
                        </div>
                    </div>
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
        // line 705
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
        return "depense/new.html.twig";
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
        return array (  1042 => 705,  1014 => 680,  1008 => 677,  1000 => 671,  997 => 670,  988 => 667,  984 => 665,  979 => 664,  977 => 663,  974 => 662,  972 => 660,  971 => 658,  967 => 657,  962 => 654,  959 => 653,  950 => 650,  946 => 648,  941 => 647,  939 => 646,  936 => 645,  934 => 643,  933 => 641,  929 => 640,  924 => 637,  921 => 636,  912 => 633,  908 => 631,  903 => 630,  901 => 629,  898 => 628,  896 => 626,  895 => 624,  891 => 623,  886 => 620,  883 => 619,  874 => 616,  870 => 614,  865 => 613,  863 => 612,  860 => 611,  858 => 609,  857 => 607,  853 => 606,  848 => 603,  845 => 602,  836 => 599,  832 => 597,  827 => 596,  825 => 595,  822 => 594,  820 => 592,  819 => 590,  815 => 589,  809 => 586,  804 => 583,  795 => 580,  791 => 578,  787 => 577,  784 => 576,  775 => 573,  771 => 571,  767 => 570,  764 => 569,  755 => 566,  751 => 564,  747 => 563,  744 => 562,  724 => 544,  719 => 542,  681 => 507,  664 => 495,  660 => 494,  645 => 484,  641 => 483,  635 => 479,  615 => 463,  611 => 462,  596 => 452,  592 => 451,  586 => 447,  568 => 433,  564 => 432,  549 => 422,  545 => 421,  539 => 417,  523 => 405,  519 => 404,  503 => 393,  499 => 392,  485 => 383,  481 => 382,  475 => 378,  457 => 364,  453 => 363,  437 => 352,  433 => 351,  427 => 347,  414 => 338,  410 => 337,  407 => 336,  392 => 325,  388 => 324,  383 => 321,  368 => 310,  364 => 309,  358 => 305,  348 => 297,  60 => 12,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/depense/new.html.twig #}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Nouvelle dépense</title>
    <meta name=\"description\" content=\"3D Glassmorphism Dashboard Template by TemplateMo\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Space+Mono:wght@400;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/templatemo-glass-admin-style.css') }}\">

    <style>
        /* TITRES ET EN-TÊTES */
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
        
        /* FORMULAIRE */
        .form-wrapper { 
            max-width: 720px; 
            margin: 0 auto; 
        }
        
        .form-row { 
            margin-bottom: 20px; 
        }
        
        .form-row label { 
            display: block; 
            margin-bottom: 10px; 
            color: #fff; 
            opacity: .9; 
            font-size: 17px !important;
            font-weight: 500;
        }
        
        .form-row input, 
        .form-row textarea, 
        .form-row select {
            width: 100%;
            padding: 14px 16px;
            border-radius: 12px;
            border: 1px solid rgba(255,255,255,0.15);
            background: rgba(0,0,0,0.25);
            color: #fff;
            outline: none;
            font-size: 17px !important;
        }
        
        .form-row input:focus,
        .form-row textarea:focus,
        .form-row select:focus {
            border-color: var(--emerald-light);
            box-shadow: 0 0 20px rgba(52, 211, 153, 0.2);
        }
        
        .form-input {
            width: 100%;
            padding: 14px 16px;
            border-radius: 12px;
            border: 1px solid rgba(255,255,255,0.15);
            background: rgba(0,0,0,0.25);
            color: #fff;
            outline: none;
            font-size: 17px !important;
        }
        
        .form-input:focus {
            border-color: rgba(255, 255, 255, 0.25);
            background: rgba(0, 0, 0, 0.3);
        }
        
        .form-input.error {
            box-shadow: 0 0 0 2px rgba(239, 68, 68, 0.6);
        }
        
        .btn-row { 
            display: flex; 
            gap: 12px; 
            margin-top: 24px; 
        }
        
        .new-btn,
        .card-body .card-btn.submit-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 14px 24px !important;
            border-radius: 12px;
            border: none;
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            color: #fff;
            text-decoration: none;
            font-size: 17px !important;
            font-weight: 500;
            cursor: pointer;
            transition: all var(--transition-fast);
            margin-top: 24px;
        }
        
        .new-btn:hover,
        .card-body .card-btn.submit-btn:hover {
            background: var(--glass-hover);
            border-color: var(--emerald-light);
        }
        
        .new-btn[type=\"submit\"],
        .card-body .card-btn.submit-btn[type=\"submit\"] {
            background: linear-gradient(135deg, var(--emerald), var(--emerald-light));
            border-color: var(--emerald);
        }
        
        .new-btn[type=\"submit\"]:hover,
        .card-body .card-btn.submit-btn[type=\"submit\"]:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(5, 150, 105, 0.3);
        }
        
        /* icône du datepicker en blanc */
        input[type=\"date\"]::-webkit-calendar-picker-indicator {
            filter: invert(1);
        }
        input[type=\"date\"] {
            color-scheme: dark;
        }
        
        /* Styles pour les messages Flash */
        .flash-messages {
            margin-bottom: 20px;
        }
        .flash-message {
            padding: 12px 16px;
            border-radius: 12px;
            margin-bottom: 10px;
            font-size: 16px !important;
            display: flex;
            align-items: center;
            gap: 10px;
            animation: slideIn 0.3s ease-out;
        }
        .flash-success {
            background: rgba(16, 185, 129, 0.15);
            border: 1px solid rgba(16, 185, 129, 0.3);
            color: #10b981;
        }
        .flash-error {
            background: rgba(239, 68, 68, 0.15);
            border: 1px solid rgba(239, 68, 68, 0.3);
            color: #ef4444;
        }
        .flash-info {
            background: rgba(59, 130, 246, 0.15);
            border: 1px solid rgba(59, 130, 246, 0.3);
            color: #3b82f6;
        }
        
        /* Erreurs sous les champs */
        .field-error {
            color: #ef4444;
            font-size: 15px !important;
            margin-top: 6px;
            display: flex;
            align-items: center;
            gap: 6px;
        }
        
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
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
            
            .form-row label {
                font-size: 16px !important;
            }
            
            .form-row input,
            .form-row textarea,
            .form-row select,
            .form-input {
                font-size: 16px !important;
                padding: 12px 14px;
            }
            
            .new-btn,
            .card-body .card-btn.submit-btn {
                font-size: 15px !important;
                padding: 12px 20px !important;
            }
            
            .flash-message {
                font-size: 15px !important;
            }
            
            .field-error {
                font-size: 14px !important;
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
            
            .form-row label {
                font-size: 15px !important;
            }
            
            .form-row input,
            .form-row textarea,
            .form-row select,
            .form-input {
                font-size: 15px !important;
                padding: 10px 12px;
            }
            
            .new-btn,
            .card-body .card-btn.submit-btn {
                font-size: 14px !important;
                padding: 10px 16px !important;
            }
            
            .flash-message {
                font-size: 14px !important;
            }
            
            .field-error {
                font-size: 13px !important;
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
                <h1 class=\"page-title\">Nouvelle dépense</h1>
                <div class=\"page-breadcrumb\">
                    <a href=\"{{ path('dashboard') }}\">Dashboard</a>
                    <span>/</span>
                    <a href=\"{{ path('app_depense_index') }}\">Dépenses</a>
                    <span>/</span>
                    <span>Création</span>
                </div>
            </div>
        </nav>

        <section class=\"content-grid\" style=\"grid-template-columns: 1fr;\">
            <div class=\"glass-card\" style=\"grid-column: span 1;\">
                <div class=\"card-header\">
                    <div>
                        <h2 class=\"card-title\">Créer une nouvelle dépense</h2>
                        <p class=\"card-subtitle\">Remplis le formulaire pour ajouter une dépense</p>
                    </div>
                </div>

                <div class=\"card-body\">
                    {# Messages Flash #}
                    <div class=\"flash-messages\">
                        {% for message in app.flashes('success') %}
                            <div class=\"flash-message flash-success\">
                                <span>✅</span>
                                <span>{{ message }}</span>
                            </div>
                        {% endfor %}

                        {% for message in app.flashes('error') %}
                            <div class=\"flash-message flash-error\">
                                <span>❌</span>
                                <span>{{ message }}</span>
                            </div>
                        {% endfor %}

                        {% for message in app.flashes('info') %}
                            <div class=\"flash-message flash-info\">
                                <span>ℹ️</span>
                                <span>{{ message }}</span>
                            </div>
                        {% endfor %}
                    </div>

                    <div class=\"form-wrapper\">
                        {{ form_start(form, { attr: { class: 'form-grid', novalidate: 'novalidate' } }) }}

                            <div class=\"form-row\">
                                {{ form_label(form.description) }}
                                {{ form_widget(form.description, { 
                                    attr: { 
                                        class: form.description.vars.errors|length > 0 ? 'form-input error' : 'form-input' 
                                    } 
                                }) }}
                                {% if form.description.vars.errors|length > 0 %}
                                    {% for error in form.description.vars.errors %}
                                        <div class=\"field-error\">
                                            <span>⚠️</span>
                                            <span>{{ error.message }}</span>
                                        </div>
                                    {% endfor %}
                                {% endif %}
                            </div>

                            <div class=\"form-row\">
                                {{ form_label(form.montant) }}
                                {{ form_widget(form.montant, { 
                                    attr: { 
                                        class: form.montant.vars.errors|length > 0 ? 'form-input error' : 'form-input' 
                                    } 
                                }) }}
                                {% if form.montant.vars.errors|length > 0 %}
                                    {% for error in form.montant.vars.errors %}
                                        <div class=\"field-error\">
                                            <span>⚠️</span>
                                            <span>{{ error.message }}</span>
                                        </div>
                                    {% endfor %}
                                {% endif %}
                            </div>

                            <div class=\"form-row\">
                                {{ form_label(form.date_depense) }}
                                {{ form_widget(form.date_depense, { 
                                    attr: { 
                                        class: form.date_depense.vars.errors|length > 0 ? 'form-input error' : 'form-input' 
                                    } 
                                }) }}
                                {% if form.date_depense.vars.errors|length > 0 %}
                                    {% for error in form.date_depense.vars.errors %}
                                        <div class=\"field-error\">
                                            <span>⚠️</span>
                                            <span>{{ error.message }}</span>
                                        </div>
                                    {% endfor %}
                                {% endif %}
                            </div>

                            <div class=\"form-row\">
                                {{ form_label(form.statut) }}
                                {{ form_widget(form.statut, { 
                                    attr: { 
                                        class: form.statut.vars.errors|length > 0 ? 'form-input error' : 'form-input' 
                                    } 
                                }) }}
                                {% if form.statut.vars.errors|length > 0 %}
                                    {% for error in form.statut.vars.errors %}
                                        <div class=\"field-error\">
                                            <span>⚠️</span>
                                            <span>{{ error.message }}</span>
                                        </div>
                                    {% endfor %}
                                {% endif %}
                            </div>

                            <div class=\"form-row\">
                                {{ form_label(form.categorie) }}
                                {{ form_widget(form.categorie, { 
                                    attr: { 
                                        class: form.categorie.vars.errors|length > 0 ? 'form-input error' : 'form-input' 
                                    } 
                                }) }}
                                {% if form.categorie.vars.errors|length > 0 %}
                                    {% for error in form.categorie.vars.errors %}
                                        <div class=\"field-error\">
                                            <span>⚠️</span>
                                            <span>{{ error.message }}</span>
                                        </div>
                                    {% endfor %}
                                {% endif %}
                            </div>

                            <button type=\"submit\" class=\"card-btn submit-btn\">
                                Save
                            </button>

                        {{ form_end(form) }}

                        <div style=\"margin-top: 16px;\">
                            <a href=\"{{ path('app_depense_index') }}\" class=\"card-btn\">
                                ← Retour à la liste
                            </a>
                        </div>
                    </div>
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
", "depense/new.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\depense\\new.html.twig");
    }
}
