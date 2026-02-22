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

/* depense/edit.html.twig */
class __TwigTemplate_61387ad8b0a39bcf907c3494cb53ad31 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "depense/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "depense/edit.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Edit Depense</title>
    <meta name=\"description\" content=\"3D Glassmorphism Dashboard Template by TemplateMo\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Space+Mono:wght@400;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/templatemo-glass-admin-style.css"), "html", null, true);
        yield "\">

    <style>
        .form-wrapper {
            max-width: 520px;
            margin: 0 auto;
        }
        .form-grid {
            display: flex;
            flex-direction: column;
            gap: 0;
        }
        .form-row {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-top: 18px;
        }
        .form-row label {
            display: block;
            font-size: 0.95rem;
            font-weight: 600;
            margin-bottom: 8px;
            color: rgba(255, 255, 255, 0.9);
        }
        .form-input {
            width: 100%;
            padding: 10px 12px;
            border-radius: 12px;
            border: none;
            background: rgba(0, 0, 0, 0.35);
            color: #fff;
            outline: none;
            font-size: 0.95rem;
        }
        .form-input:focus {
            box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.25);
        }
        .form-input.error {
            box-shadow: 0 0 0 2px rgba(239, 68, 68, 0.6);
        }
        .card-body .card-btn.submit-btn {
            margin-top: 24px;
            padding: 10px 22px;
        }
        
        /* icône du datepicker en blanc */
        input[type=\"date\"]::-webkit-calendar-picker-indicator {
            filter: invert(1);
        }
        input[type=\"date\"] {
            color-scheme: dark;
        }
        
        /* Messages Flash */
        .flash-messages {
            margin-bottom: 20px;
        }
        .flash-message {
            padding: 12px 16px;
            border-radius: 12px;
            margin-bottom: 10px;
            font-size: 0.9rem;
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
        
        /* Erreurs sous les champs */
        .field-error {
            color: #ef4444;
            font-size: 0.85rem;
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
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Logo\" style=\"width: 50px; height: auto; margin-top: 12%;\">
        </div>
        <span class=\"logo-text\">AIVA</span>
    </div>

    <ul class=\"nav-menu\">

        ";
        // line 132
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Menu Principal</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 136
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\"
                       class=\"nav-link ";
        // line 137
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 137, $this->source); })()), "request", [], "any", false, false, false, 137), "attributes", [], "any", false, false, false, 137), "get", ["_route"], "method", false, false, false, 137) == "dashboard")) {
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
        // line 148
        yield "              <span class=\"nav-section-title\">sports</span>

        <li class=\"nav-item\">
            <a href=\"";
        // line 151
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_sport_index");
        yield "\"
               class=\"nav-link ";
        // line 152
        if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 152, $this->source); })()), "request", [], "any", false, false, false, 152), "attributes", [], "any", false, false, false, 152), "get", ["_route"], "method", false, false, false, 152)) && is_string($_v1 = "back_sport_") && str_starts_with($_v0, $_v1))) {
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
        // line 163
        yield "        <li class=\"nav-item\">
            <a href=\"";
        // line 164
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_index");
        yield "\"
               class=\"nav-link ";
        // line 165
        if ((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 165, $this->source); })()), "request", [], "any", false, false, false, 165), "attributes", [], "any", false, false, false, 165), "get", ["_route"], "method", false, false, false, 165)) && is_string($_v3 = "app_objectif_") && str_starts_with($_v2, $_v3))) {
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
        // line 174
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Finance</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 178
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depense_index");
        yield "\"
                       class=\"nav-link ";
        // line 179
        if ((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 179, $this->source); })()), "request", [], "any", false, false, false, 179), "attributes", [], "any", false, false, false, 179), "get", ["_route"], "method", false, false, false, 179)) && is_string($_v5 = "app_depense_") && str_starts_with($_v4, $_v5))) {
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
        // line 190
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index");
        yield "\"
                       class=\"nav-link ";
        // line 191
        if ((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 191, $this->source); })()), "request", [], "any", false, false, false, 191), "attributes", [], "any", false, false, false, 191), "get", ["_route"], "method", false, false, false, 191)) && is_string($_v7 = "app_categorie_") && str_starts_with($_v6, $_v7))) {
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
        // line 205
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Énergies</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 209
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("energy");
        yield "\"
                       class=\"nav-link ";
        // line 210
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 210, $this->source); })()), "request", [], "any", false, false, false, 210), "attributes", [], "any", false, false, false, 210), "get", ["_route"], "method", false, false, false, 210) == "energy")) {
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
        // line 219
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recommendations");
        yield "\"
                       class=\"nav-link ";
        // line 220
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 220, $this->source); })()), "request", [], "any", false, false, false, 220), "attributes", [], "any", false, false, false, 220), "get", ["_route"], "method", false, false, false, 220) == "recommendations")) {
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
        // line 231
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stateenergi");
        yield "\"
                       class=\"nav-link ";
        // line 232
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 232, $this->source); })()), "request", [], "any", false, false, false, 232), "attributes", [], "any", false, false, false, 232), "get", ["_route"], "method", false, false, false, 232) == "stateenergi")) {
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
        // line 244
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Alimentation</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 248
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_aliment_index");
        yield "\"
                       class=\"nav-link ";
        // line 249
        if ((is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 249, $this->source); })()), "request", [], "any", false, false, false, 249), "attributes", [], "any", false, false, false, 249), "get", ["_route"], "method", false, false, false, 249)) && is_string($_v9 = "app_aliment_") && str_starts_with($_v8, $_v9))) {
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
        // line 259
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_repas_index");
        yield "\"
                       class=\"nav-link ";
        // line 260
        if ((is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 260, $this->source); })()), "request", [], "any", false, false, false, 260), "attributes", [], "any", false, false, false, 260), "get", ["_route"], "method", false, false, false, 260)) && is_string($_v11 = "app_repas_") && str_starts_with($_v10, $_v11))) {
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
        // line 274
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Formation</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 278
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_index");
        yield "\"
                       class=\"nav-link ";
        // line 279
        if ((is_string($_v12 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 279, $this->source); })()), "request", [], "any", false, false, false, 279), "attributes", [], "any", false, false, false, 279), "get", ["_route"], "method", false, false, false, 279)) && is_string($_v13 = "app_cours_") && str_starts_with($_v12, $_v13))) {
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
        // line 289
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chapitre_index");
        yield "\"
                       class=\"nav-link ";
        // line 290
        if ((is_string($_v14 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 290, $this->source); })()), "request", [], "any", false, false, false, 290), "attributes", [], "any", false, false, false, 290), "get", ["_route"], "method", false, false, false, 290)) && is_string($_v15 = "app_chapitre_") && str_starts_with($_v14, $_v15))) {
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
        // line 306
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Compte</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 310
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\"
                       class=\"nav-link ";
        // line 311
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 311, $this->source); })()), "request", [], "any", false, false, false, 311), "attributes", [], "any", false, false, false, 311), "get", ["_route"], "method", false, false, false, 311) == "app_profile")) {
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
        // line 321
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\"
                       class=\"nav-link ";
        // line 322
        if ((is_string($_v16 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 322, $this->source); })()), "request", [], "any", false, false, false, 322), "attributes", [], "any", false, false, false, 322), "get", ["_route"], "method", false, false, false, 322)) && is_string($_v17 = "app_user_") && str_starts_with($_v16, $_v17))) {
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
        // line 334
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
                    <h1 class=\"page-title\">Modifier la dépense</h1>
                    <div class=\"page-breadcrumb\">
                        <a href=\"";
        // line 367
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\">Dashboard</a>
                        <span>/</span>
                        <a href=\"";
        // line 369
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depense_index");
        yield "\">Dépenses</a>
                        <span>/</span>
                        <span>Édition</span>
                    </div>
                </div>
            </nav>

            <section class=\"content-grid\" style=\"grid-template-columns: 1fr;\">
                <div class=\"glass-card\" style=\"grid-column: span 1;\">
                    <div class=\"card-header\">
                        <div>
                            <h2 class=\"card-title\">Modifier la dépense</h2>
                            <p class=\"card-subtitle\">Met à jour les informations de la dépense</p>
                        </div>
                        <div class=\"card-actions\">
                            ";
        // line 384
        yield Twig\Extension\CoreExtension::include($this->env, $context, "depense/_delete_form.html.twig", ["depense" => (isset($context["depense"]) || array_key_exists("depense", $context) ? $context["depense"] : (function () { throw new RuntimeError('Variable "depense" does not exist.', 384, $this->source); })())]);
        yield "
                        </div>
                    </div>

                    <div class=\"card-body\">
                        ";
        // line 390
        yield "                        <div class=\"flash-messages\">
                            ";
        // line 391
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 391, $this->source); })()), "flashes", ["success"], "method", false, false, false, 391));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 392
            yield "                                <div class=\"flash-message flash-success\">
                                    <span>✅</span>
                                    <span>";
            // line 394
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 397
        yield "
                            ";
        // line 398
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 398, $this->source); })()), "flashes", ["error"], "method", false, false, false, 398));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 399
            yield "                                <div class=\"flash-message flash-error\">
                                    <span>❌</span>
                                    <span>";
            // line 401
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 404
        yield "                        </div>

                        <div class=\"form-wrapper\">
                            ";
        // line 407
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 407, $this->source); })()), 'form_start', ["attr" => ["class" => "form-grid", "novalidate" => "novalidate"]]);
        yield "

                                <div class=\"form-row\">
                                    ";
        // line 410
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 410, $this->source); })()), "description", [], "any", false, false, false, 410), 'label');
        yield "
                                    ";
        // line 411
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 411, $this->source); })()), "description", [], "any", false, false, false, 411), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 413
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 413, $this->source); })()), "description", [], "any", false, false, false, 413), "vars", [], "any", false, false, false, 413), "errors", [], "any", false, false, false, 413)) > 0)) ? ("form-input error") : ("form-input"))]]);
        // line 415
        yield "
                                    ";
        // line 416
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 416, $this->source); })()), "description", [], "any", false, false, false, 416), "vars", [], "any", false, false, false, 416), "errors", [], "any", false, false, false, 416)) > 0)) {
            // line 417
            yield "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 417, $this->source); })()), "description", [], "any", false, false, false, 417), "vars", [], "any", false, false, false, 417), "errors", [], "any", false, false, false, 417));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 418
                yield "                                            <div class=\"field-error\">
                                                <span>⚠️</span>
                                                <span>";
                // line 420
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 420), "html", null, true);
                yield "</span>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 423
            yield "                                    ";
        }
        // line 424
        yield "                                </div>

                                <div class=\"form-row\">
                                    ";
        // line 427
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 427, $this->source); })()), "montant", [], "any", false, false, false, 427), 'label');
        yield "
                                    ";
        // line 428
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 428, $this->source); })()), "montant", [], "any", false, false, false, 428), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 430
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 430, $this->source); })()), "montant", [], "any", false, false, false, 430), "vars", [], "any", false, false, false, 430), "errors", [], "any", false, false, false, 430)) > 0)) ? ("form-input error") : ("form-input"))]]);
        // line 432
        yield "
                                    ";
        // line 433
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 433, $this->source); })()), "montant", [], "any", false, false, false, 433), "vars", [], "any", false, false, false, 433), "errors", [], "any", false, false, false, 433)) > 0)) {
            // line 434
            yield "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 434, $this->source); })()), "montant", [], "any", false, false, false, 434), "vars", [], "any", false, false, false, 434), "errors", [], "any", false, false, false, 434));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 435
                yield "                                            <div class=\"field-error\">
                                                <span>⚠️</span>
                                                <span>";
                // line 437
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 437), "html", null, true);
                yield "</span>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 440
            yield "                                    ";
        }
        // line 441
        yield "                                </div>

                                ";
        // line 444
        yield "                                <div class=\"form-row\">
                                    ";
        // line 445
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 445, $this->source); })()), "date_depense", [], "any", false, false, false, 445), 'label');
        yield "
                                    ";
        // line 446
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 446, $this->source); })()), "date_depense", [], "any", false, false, false, 446), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 448
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 448, $this->source); })()), "date_depense", [], "any", false, false, false, 448), "vars", [], "any", false, false, false, 448), "errors", [], "any", false, false, false, 448)) > 0)) ? ("form-input error") : ("form-input"))]]);
        // line 450
        yield "
                                    ";
        // line 451
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 451, $this->source); })()), "date_depense", [], "any", false, false, false, 451), "vars", [], "any", false, false, false, 451), "errors", [], "any", false, false, false, 451)) > 0)) {
            // line 452
            yield "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 452, $this->source); })()), "date_depense", [], "any", false, false, false, 452), "vars", [], "any", false, false, false, 452), "errors", [], "any", false, false, false, 452));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 453
                yield "                                            <div class=\"field-error\">
                                                <span>⚠️</span>
                                                <span>";
                // line 455
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 455), "html", null, true);
                yield "</span>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 458
            yield "                                    ";
        }
        // line 459
        yield "                                </div>

                                <div class=\"form-row\">
                                    ";
        // line 462
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 462, $this->source); })()), "statut", [], "any", false, false, false, 462), 'label');
        yield "
                                    ";
        // line 463
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 463, $this->source); })()), "statut", [], "any", false, false, false, 463), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 465
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 465, $this->source); })()), "statut", [], "any", false, false, false, 465), "vars", [], "any", false, false, false, 465), "errors", [], "any", false, false, false, 465)) > 0)) ? ("form-input error") : ("form-input"))]]);
        // line 467
        yield "
                                    ";
        // line 468
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 468, $this->source); })()), "statut", [], "any", false, false, false, 468), "vars", [], "any", false, false, false, 468), "errors", [], "any", false, false, false, 468)) > 0)) {
            // line 469
            yield "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 469, $this->source); })()), "statut", [], "any", false, false, false, 469), "vars", [], "any", false, false, false, 469), "errors", [], "any", false, false, false, 469));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 470
                yield "                                            <div class=\"field-error\">
                                                <span>⚠️</span>
                                                <span>";
                // line 472
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 472), "html", null, true);
                yield "</span>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 475
            yield "                                    ";
        }
        // line 476
        yield "                                </div>

                                <div class=\"form-row\">
                                    ";
        // line 479
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 479, $this->source); })()), "categorie", [], "any", false, false, false, 479), 'label');
        yield "
                                    ";
        // line 480
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 480, $this->source); })()), "categorie", [], "any", false, false, false, 480), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 482
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 482, $this->source); })()), "categorie", [], "any", false, false, false, 482), "vars", [], "any", false, false, false, 482), "errors", [], "any", false, false, false, 482)) > 0)) ? ("form-input error") : ("form-input"))]]);
        // line 484
        yield "
                                    ";
        // line 485
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 485, $this->source); })()), "categorie", [], "any", false, false, false, 485), "vars", [], "any", false, false, false, 485), "errors", [], "any", false, false, false, 485)) > 0)) {
            // line 486
            yield "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 486, $this->source); })()), "categorie", [], "any", false, false, false, 486), "vars", [], "any", false, false, false, 486), "errors", [], "any", false, false, false, 486));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 487
                yield "                                            <div class=\"field-error\">
                                                <span>⚠️</span>
                                                <span>";
                // line 489
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 489), "html", null, true);
                yield "</span>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 492
            yield "                                    ";
        }
        // line 493
        yield "                                </div>

                                <button type=\"submit\" class=\"card-btn submit-btn\">Update</button>

                            ";
        // line 497
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 497, $this->source); })()), 'form_end');
        yield "

                            <div style=\"margin-top: 16px;\">
                                <a href=\"";
        // line 500
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depense_index");
        yield "\" class=\"card-btn\">
                                    ← back to list
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
        // line 525
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/templatemo-glass-admin-script.js"), "html", null, true);
        yield "\"></script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "depense/edit.html.twig";
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
        return array (  853 => 525,  825 => 500,  819 => 497,  813 => 493,  810 => 492,  801 => 489,  797 => 487,  792 => 486,  790 => 485,  787 => 484,  785 => 482,  784 => 480,  780 => 479,  775 => 476,  772 => 475,  763 => 472,  759 => 470,  754 => 469,  752 => 468,  749 => 467,  747 => 465,  746 => 463,  742 => 462,  737 => 459,  734 => 458,  725 => 455,  721 => 453,  716 => 452,  714 => 451,  711 => 450,  709 => 448,  708 => 446,  704 => 445,  701 => 444,  697 => 441,  694 => 440,  685 => 437,  681 => 435,  676 => 434,  674 => 433,  671 => 432,  669 => 430,  668 => 428,  664 => 427,  659 => 424,  656 => 423,  647 => 420,  643 => 418,  638 => 417,  636 => 416,  633 => 415,  631 => 413,  630 => 411,  626 => 410,  620 => 407,  615 => 404,  606 => 401,  602 => 399,  598 => 398,  595 => 397,  586 => 394,  582 => 392,  578 => 391,  575 => 390,  567 => 384,  549 => 369,  544 => 367,  508 => 334,  491 => 322,  487 => 321,  472 => 311,  468 => 310,  462 => 306,  442 => 290,  438 => 289,  423 => 279,  419 => 278,  413 => 274,  395 => 260,  391 => 259,  376 => 249,  372 => 248,  366 => 244,  350 => 232,  346 => 231,  330 => 220,  326 => 219,  312 => 210,  308 => 209,  302 => 205,  284 => 191,  280 => 190,  264 => 179,  260 => 178,  254 => 174,  241 => 165,  237 => 164,  234 => 163,  219 => 152,  215 => 151,  210 => 148,  195 => 137,  191 => 136,  185 => 132,  175 => 124,  60 => 12,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/depense/edit.html.twig #}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Edit Depense</title>
    <meta name=\"description\" content=\"3D Glassmorphism Dashboard Template by TemplateMo\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Space+Mono:wght@400;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/templatemo-glass-admin-style.css') }}\">

    <style>
        .form-wrapper {
            max-width: 520px;
            margin: 0 auto;
        }
        .form-grid {
            display: flex;
            flex-direction: column;
            gap: 0;
        }
        .form-row {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-top: 18px;
        }
        .form-row label {
            display: block;
            font-size: 0.95rem;
            font-weight: 600;
            margin-bottom: 8px;
            color: rgba(255, 255, 255, 0.9);
        }
        .form-input {
            width: 100%;
            padding: 10px 12px;
            border-radius: 12px;
            border: none;
            background: rgba(0, 0, 0, 0.35);
            color: #fff;
            outline: none;
            font-size: 0.95rem;
        }
        .form-input:focus {
            box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.25);
        }
        .form-input.error {
            box-shadow: 0 0 0 2px rgba(239, 68, 68, 0.6);
        }
        .card-body .card-btn.submit-btn {
            margin-top: 24px;
            padding: 10px 22px;
        }
        
        /* icône du datepicker en blanc */
        input[type=\"date\"]::-webkit-calendar-picker-indicator {
            filter: invert(1);
        }
        input[type=\"date\"] {
            color-scheme: dark;
        }
        
        /* Messages Flash */
        .flash-messages {
            margin-bottom: 20px;
        }
        .flash-message {
            padding: 12px 16px;
            border-radius: 12px;
            margin-bottom: 10px;
            font-size: 0.9rem;
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
        
        /* Erreurs sous les champs */
        .field-error {
            color: #ef4444;
            font-size: 0.85rem;
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
                    <h1 class=\"page-title\">Modifier la dépense</h1>
                    <div class=\"page-breadcrumb\">
                        <a href=\"{{ path('dashboard') }}\">Dashboard</a>
                        <span>/</span>
                        <a href=\"{{ path('app_depense_index') }}\">Dépenses</a>
                        <span>/</span>
                        <span>Édition</span>
                    </div>
                </div>
            </nav>

            <section class=\"content-grid\" style=\"grid-template-columns: 1fr;\">
                <div class=\"glass-card\" style=\"grid-column: span 1;\">
                    <div class=\"card-header\">
                        <div>
                            <h2 class=\"card-title\">Modifier la dépense</h2>
                            <p class=\"card-subtitle\">Met à jour les informations de la dépense</p>
                        </div>
                        <div class=\"card-actions\">
                            {{ include('depense/_delete_form.html.twig', { depense: depense }) }}
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

                                {# ✅ CORRIGÉ : date_depense au lieu de dateDepense #}
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

                                <button type=\"submit\" class=\"card-btn submit-btn\">Update</button>

                            {{ form_end(form) }}

                            <div style=\"margin-top: 16px;\">
                                <a href=\"{{ path('app_depense_index') }}\" class=\"card-btn\">
                                    ← back to list
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
</html>", "depense/edit.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\depense\\edit.html.twig");
    }
}
