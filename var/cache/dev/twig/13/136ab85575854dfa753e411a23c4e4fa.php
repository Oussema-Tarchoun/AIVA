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

/* cours/index.html.twig */
class __TwigTemplate_ddca89516f46d2e208b6a7d8883c3d5f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/index.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Cours index - 3D Glassmorphism Dashboard</title>
    <meta name=\"description\" content=\"3D Glassmorphism Dashboard Template by TemplateMo\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Space+Mono:wght@400;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/templatemo-glass-admin-style.css"), "html", null, true);
        yield "\">

    <style>
        .courses-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            gap: 24px;
            margin-top: 24px;
        }
        .course-card {
            display: flex;
            flex-direction: column;
            background: rgba(15, 23, 42, 0.7);
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 18px 45px rgba(0, 0, 0, 0.45);
            border: 1px solid rgba(148, 163, 184, 0.2);
            backdrop-filter: blur(16px);
            transition: transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
        }
        .course-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 24px 60px rgba(0, 0, 0, 0.6);
            border-color: rgba(96, 165, 250, 0.6);
        }
        .course-card-image {
            height: 140px;
            background-size: cover;
            background-position: center;
            background-image: linear-gradient(120deg, #1d4ed8, #22c55e);
        }
        .course-card-body {
            padding: 16px 18px 14px;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }
        .course-code {
            font-size: 11px;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: #9ca3af;
        }
        .course-title {
            font-size: 15px;
            font-weight: 600;
            color: #e5e7eb;
            line-height: 1.3;
        }
        .course-meta-row {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
            margin-top: 4px;
        }
        .badge {
            font-size: 11px;
            padding: 3px 8px;
            border-radius: 999px;
            border: 1px solid rgba(148, 163, 184, 0.35);
            color: #e5e7eb;
            background: rgba(15, 23, 42, 0.7);
        }
        .badge-level {
            border-color: rgba(96, 165, 250, 0.8);
            color: #bfdbfe;
        }
        .badge-category {
            border-color: rgba(52, 211, 153, 0.8);
            color: #bbf7d0;
        }
        .badge-status {
            border-color: rgba(248, 250, 252, 0.4);
        }
        .course-description {
            margin-top: 4px;
            font-size: 12px;
            color: #9ca3af;
            max-height: 44px;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .course-footer {
            padding: 10px 18px 14px;
            border-top: 1px solid rgba(31, 41, 55, 0.9);
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 11px;
            color: #9ca3af;
        }
        .course-actions {
            display: flex;
            gap: 10px;
        }
        .course-actions a {
            font-size: 11px;
            color: #93c5fd;
            text-decoration: none;
        }
        .course-actions a:hover {
            text-decoration: underline;
        }
        .tri-link-small {
            font-size: 12px;
            color: #9ca3af;
            text-decoration: none;
        }
        .tri-link-small:hover {
            color: #e5e7eb;
        }
        .course-user {
            display: block;
            font-size: 11px;
            color: #9ca3af;
            margin-top: 2px;
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
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Logo\" style=\"width: 50px; height: auto; margin-top: 12%;\">
        </div>
        <span class=\"logo-text\">AIVA</span>
    </div>

    <ul class=\"nav-menu\">

        ";
        // line 151
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Menu Principal</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 155
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\"
                       class=\"nav-link ";
        // line 156
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 156, $this->source); })()), "request", [], "any", false, false, false, 156), "attributes", [], "any", false, false, false, 156), "get", ["_route"], "method", false, false, false, 156) == "dashboard")) {
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
        // line 167
        yield "              <span class=\"nav-section-title\">sports</span>

        <li class=\"nav-item\">
            <a href=\"";
        // line 170
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_sport_index");
        yield "\"
               class=\"nav-link ";
        // line 171
        if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 171, $this->source); })()), "request", [], "any", false, false, false, 171), "attributes", [], "any", false, false, false, 171), "get", ["_route"], "method", false, false, false, 171)) && is_string($_v1 = "back_sport_") && str_starts_with($_v0, $_v1))) {
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
        // line 182
        yield "        <li class=\"nav-item\">
            <a href=\"";
        // line 183
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_index");
        yield "\"
               class=\"nav-link ";
        // line 184
        if ((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 184, $this->source); })()), "request", [], "any", false, false, false, 184), "attributes", [], "any", false, false, false, 184), "get", ["_route"], "method", false, false, false, 184)) && is_string($_v3 = "app_objectif_") && str_starts_with($_v2, $_v3))) {
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
        // line 193
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Finance</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 197
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depense_index");
        yield "\"
                       class=\"nav-link ";
        // line 198
        if ((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 198, $this->source); })()), "request", [], "any", false, false, false, 198), "attributes", [], "any", false, false, false, 198), "get", ["_route"], "method", false, false, false, 198)) && is_string($_v5 = "app_depense_") && str_starts_with($_v4, $_v5))) {
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
        // line 209
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index");
        yield "\"
                       class=\"nav-link ";
        // line 210
        if ((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 210, $this->source); })()), "request", [], "any", false, false, false, 210), "attributes", [], "any", false, false, false, 210), "get", ["_route"], "method", false, false, false, 210)) && is_string($_v7 = "app_categorie_") && str_starts_with($_v6, $_v7))) {
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
        // line 224
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Énergies</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 228
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("energy");
        yield "\"
                       class=\"nav-link ";
        // line 229
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 229, $this->source); })()), "request", [], "any", false, false, false, 229), "attributes", [], "any", false, false, false, 229), "get", ["_route"], "method", false, false, false, 229) == "energy")) {
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
        // line 238
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recommendations");
        yield "\"
                       class=\"nav-link ";
        // line 239
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 239, $this->source); })()), "request", [], "any", false, false, false, 239), "attributes", [], "any", false, false, false, 239), "get", ["_route"], "method", false, false, false, 239) == "recommendations")) {
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
        // line 250
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stateenergi");
        yield "\"
                       class=\"nav-link ";
        // line 251
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 251, $this->source); })()), "request", [], "any", false, false, false, 251), "attributes", [], "any", false, false, false, 251), "get", ["_route"], "method", false, false, false, 251) == "stateenergi")) {
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
        // line 263
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Alimentation</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 267
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_aliment_index");
        yield "\"
                       class=\"nav-link ";
        // line 268
        if ((is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 268, $this->source); })()), "request", [], "any", false, false, false, 268), "attributes", [], "any", false, false, false, 268), "get", ["_route"], "method", false, false, false, 268)) && is_string($_v9 = "app_aliment_") && str_starts_with($_v8, $_v9))) {
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
        // line 278
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_repas_index");
        yield "\"
                       class=\"nav-link ";
        // line 279
        if ((is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 279, $this->source); })()), "request", [], "any", false, false, false, 279), "attributes", [], "any", false, false, false, 279), "get", ["_route"], "method", false, false, false, 279)) && is_string($_v11 = "app_repas_") && str_starts_with($_v10, $_v11))) {
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
        // line 293
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Formation</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 297
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_index");
        yield "\"
                       class=\"nav-link ";
        // line 298
        if ((is_string($_v12 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 298, $this->source); })()), "request", [], "any", false, false, false, 298), "attributes", [], "any", false, false, false, 298), "get", ["_route"], "method", false, false, false, 298)) && is_string($_v13 = "app_cours_") && str_starts_with($_v12, $_v13))) {
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
        // line 308
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chapitre_index");
        yield "\"
                       class=\"nav-link ";
        // line 309
        if ((is_string($_v14 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 309, $this->source); })()), "request", [], "any", false, false, false, 309), "attributes", [], "any", false, false, false, 309), "get", ["_route"], "method", false, false, false, 309)) && is_string($_v15 = "app_chapitre_") && str_starts_with($_v14, $_v15))) {
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
        // line 325
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Compte</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 329
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\"
                       class=\"nav-link ";
        // line 330
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 330, $this->source); })()), "request", [], "any", false, false, false, 330), "attributes", [], "any", false, false, false, 330), "get", ["_route"], "method", false, false, false, 330) == "app_profile")) {
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
        // line 340
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\"
                       class=\"nav-link ";
        // line 341
        if ((is_string($_v16 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 341, $this->source); })()), "request", [], "any", false, false, false, 341), "attributes", [], "any", false, false, false, 341), "get", ["_route"], "method", false, false, false, 341)) && is_string($_v17 = "app_user_") && str_starts_with($_v16, $_v17))) {
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
        // line 353
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

   

        <main class=\"main-content\">
            <nav class=\"navbar\">
                <div class=\"page-header\">
                    <h1 class=\"page-title\">Cours index</h1>
                    <div class=\"page-breadcrumb\">
                        <a href=\"";
        // line 388
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\">Dashboard</a>
                        <span>/</span>
                        <span>Cours</span>
                    </div>
                </div>
                <div class=\"navbar-right\">
                    <div class=\"search-box\">
                        <svg class=\"search-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <circle cx=\"11\" cy=\"11\" r=\"8\"/><line x1=\"21\" y1=\"21\" x2=\"16.65\" y2=\"16.65\"/>
                        </svg>
                        <input type=\"text\" class=\"search-input\" placeholder=\"Search...\">
                    </div>
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

            <section class=\"content-grid\" style=\"grid-template-columns: 1fr;\">
                <div class=\"glass-card table-card\" style=\"grid-column: span 1;\">
                    <div class=\"card-header\">
                        <div>
                            <h2 class=\"card-title\">All Cours</h2>
                            <p class=\"card-subtitle\">Manage all courses</p>
                        </div>
                        <div class=\"card-actions\">
                            <form method=\"get\" action=\"";
        // line 428
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_index");
        yield "\" class=\"search-form\" style=\"display:flex; gap:8px;\">
                                <input type=\"text\"
                                       name=\"q\"
                                       value=\"";
        // line 431
        yield (((array_key_exists("search", $context) &&  !(null === $context["search"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["search"], "html", null, true)) : (""));
        yield "\"
                                       placeholder=\"Rechercher par catégorie...\"
                                       class=\"search-input\">
                                <button type=\"submit\" class=\"card-btn\">Rechercher</button>
                            </form>
                            <a href=\"";
        // line 436
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_new");
        yield "\" class=\"card-btn\" style=\"margin-left: 8px;\">
                                <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" style=\"margin-right: 6px;\">
                                    <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"/><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"/>
                                </svg>
                                Create new
                            </a>
                        </div>
                    </div>

                    <div style=\"display:flex; justify-content:flex-end; margin-top:8px; padding:0 4px;\">
                        ";
        // line 446
        $context["triLabel"] = "Date_creation ↑↓";
        // line 447
        yield "                        ";
        if ((array_key_exists("dir", $context) && ((isset($context["dir"]) || array_key_exists("dir", $context) ? $context["dir"] : (function () { throw new RuntimeError('Variable "dir" does not exist.', 447, $this->source); })()) == "ASC"))) {
            // line 448
            yield "                            ";
            $context["triLabel"] = "Date_creation ↑";
            // line 449
            yield "                        ";
        } elseif ((array_key_exists("dir", $context) && ((isset($context["dir"]) || array_key_exists("dir", $context) ? $context["dir"] : (function () { throw new RuntimeError('Variable "dir" does not exist.', 449, $this->source); })()) == "DESC"))) {
            // line 450
            yield "                            ";
            $context["triLabel"] = "Date_creation ↓";
            // line 451
            yield "                        ";
        }
        // line 452
        yield "                        <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_index", ["q" => (((        // line 453
array_key_exists("search", $context) &&  !(null === $context["search"]))) ? ($context["search"]) : ("")), "dir" => (((        // line 454
array_key_exists("dir", $context) && ((isset($context["dir"]) || array_key_exists("dir", $context) ? $context["dir"] : (function () { throw new RuntimeError('Variable "dir" does not exist.', 454, $this->source); })()) == "ASC"))) ? ("DESC") : ("ASC"))]), "html", null, true);
        // line 455
        yield "\" class=\"tri-link-small\">
                            ";
        // line 456
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["triLabel"]) || array_key_exists("triLabel", $context) ? $context["triLabel"] : (function () { throw new RuntimeError('Variable "triLabel" does not exist.', 456, $this->source); })()), "html", null, true);
        yield "
                        </a>
                    </div>

                    <div class=\"courses-grid\">
                        ";
        // line 461
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 461, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
            // line 462
            yield "                            <article class=\"course-card\">
                                <div class=\"course-card-image\"></div>

                                <div class=\"course-card-body\">
                                    <div class=\"course-code\">
                                        Cours #";
            // line 467
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 467), "html", null, true);
            yield " • ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "categorie", [], "any", false, false, false, 467), "html", null, true);
            yield "
                                    </div>
                                    <div class=\"course-title\">
                                        ";
            // line 470
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "tittre", [], "any", false, false, false, 470), "html", null, true);
            yield "
                                    </div>

                                    <div class=\"course-meta-row\">
                                        <span class=\"badge badge-level\">
                                            ";
            // line 475
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "niveau", [], "any", false, false, false, 475), "html", null, true);
            yield "
                                        </span>
                                        <span class=\"badge\">
                                            Durée: ";
            // line 478
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "dureeEstimee", [], "any", false, false, false, 478), "html", null, true);
            yield " h
                                        </span>
                                        <span class=\"badge badge-status\">
                                            ";
            // line 481
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "status", [], "any", false, false, false, 481), "html", null, true);
            yield "
                                        </span>
                                    </div>

                                    <p class=\"course-description\">
                                        ";
            // line 486
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "description", [], "any", false, false, false, 486), "html", null, true);
            yield "
                                    </p>
                                </div>

                                <div class=\"course-footer\">
                                    <span>
                                        ";
            // line 492
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "dateCreation", [], "any", false, false, false, 492)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "dateCreation", [], "any", false, false, false, 492), "Y-m-d"), "html", null, true)) : (""));
            yield "
                                        ";
            // line 493
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "user", [], "any", false, false, false, 493)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 494
                yield "                                            <span class=\"course-user\">
                                                par ";
                // line 495
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "user", [], "any", false, false, false, 495), "name", [], "any", false, false, false, 495), "html", null, true);
                yield "
                                            </span>
                                        ";
            }
            // line 498
            yield "                                    </span>
                                    <div class=\"course-actions\">
                                        <a href=\"";
            // line 500
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 500)]), "html", null, true);
            yield "\">show</a>
                                        <a href=\"";
            // line 501
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 501)]), "html", null, true);
            yield "\">edit</a>
                                        <a href=\"";
            // line 502
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chapitre_by_cours", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 502)]), "html", null, true);
            yield "\">chapitres</a>
                                    </div>
                                </div>
                            </article>
                        ";
            $context['_iterated'] = true;
        }
        // line 506
        if (!$context['_iterated']) {
            // line 507
            yield "                            <p style=\"padding: 18px; font-size: 13px; color: #9ca3af;\">
                                No records found.
                            </p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cour'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 511
        yield "                    </div>
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
        <p>Copyright © 2026 Your Company.
            Designed by <a href=\"https://templatemo.com\" target=\"_blank\" rel=\"nofollow\">TemplateMo</a>
        </p>
    </footer>

    <script src=\"";
        // line 529
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
        return "cours/index.html.twig";
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
        return array (  792 => 529,  772 => 511,  763 => 507,  761 => 506,  752 => 502,  748 => 501,  744 => 500,  740 => 498,  734 => 495,  731 => 494,  729 => 493,  725 => 492,  716 => 486,  708 => 481,  702 => 478,  696 => 475,  688 => 470,  680 => 467,  673 => 462,  668 => 461,  660 => 456,  657 => 455,  655 => 454,  654 => 453,  652 => 452,  649 => 451,  646 => 450,  643 => 449,  640 => 448,  637 => 447,  635 => 446,  622 => 436,  614 => 431,  608 => 428,  565 => 388,  527 => 353,  510 => 341,  506 => 340,  491 => 330,  487 => 329,  481 => 325,  461 => 309,  457 => 308,  442 => 298,  438 => 297,  432 => 293,  414 => 279,  410 => 278,  395 => 268,  391 => 267,  385 => 263,  369 => 251,  365 => 250,  349 => 239,  345 => 238,  331 => 229,  327 => 228,  321 => 224,  303 => 210,  299 => 209,  283 => 198,  279 => 197,  273 => 193,  260 => 184,  256 => 183,  253 => 182,  238 => 171,  234 => 170,  229 => 167,  214 => 156,  210 => 155,  204 => 151,  194 => 143,  60 => 12,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/cours/index.html.twig #}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Cours index - 3D Glassmorphism Dashboard</title>
    <meta name=\"description\" content=\"3D Glassmorphism Dashboard Template by TemplateMo\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Space+Mono:wght@400;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/templatemo-glass-admin-style.css') }}\">

    <style>
        .courses-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            gap: 24px;
            margin-top: 24px;
        }
        .course-card {
            display: flex;
            flex-direction: column;
            background: rgba(15, 23, 42, 0.7);
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 18px 45px rgba(0, 0, 0, 0.45);
            border: 1px solid rgba(148, 163, 184, 0.2);
            backdrop-filter: blur(16px);
            transition: transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
        }
        .course-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 24px 60px rgba(0, 0, 0, 0.6);
            border-color: rgba(96, 165, 250, 0.6);
        }
        .course-card-image {
            height: 140px;
            background-size: cover;
            background-position: center;
            background-image: linear-gradient(120deg, #1d4ed8, #22c55e);
        }
        .course-card-body {
            padding: 16px 18px 14px;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }
        .course-code {
            font-size: 11px;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: #9ca3af;
        }
        .course-title {
            font-size: 15px;
            font-weight: 600;
            color: #e5e7eb;
            line-height: 1.3;
        }
        .course-meta-row {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
            margin-top: 4px;
        }
        .badge {
            font-size: 11px;
            padding: 3px 8px;
            border-radius: 999px;
            border: 1px solid rgba(148, 163, 184, 0.35);
            color: #e5e7eb;
            background: rgba(15, 23, 42, 0.7);
        }
        .badge-level {
            border-color: rgba(96, 165, 250, 0.8);
            color: #bfdbfe;
        }
        .badge-category {
            border-color: rgba(52, 211, 153, 0.8);
            color: #bbf7d0;
        }
        .badge-status {
            border-color: rgba(248, 250, 252, 0.4);
        }
        .course-description {
            margin-top: 4px;
            font-size: 12px;
            color: #9ca3af;
            max-height: 44px;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .course-footer {
            padding: 10px 18px 14px;
            border-top: 1px solid rgba(31, 41, 55, 0.9);
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 11px;
            color: #9ca3af;
        }
        .course-actions {
            display: flex;
            gap: 10px;
        }
        .course-actions a {
            font-size: 11px;
            color: #93c5fd;
            text-decoration: none;
        }
        .course-actions a:hover {
            text-decoration: underline;
        }
        .tri-link-small {
            font-size: 12px;
            color: #9ca3af;
            text-decoration: none;
        }
        .tri-link-small:hover {
            color: #e5e7eb;
        }
        .course-user {
            display: block;
            font-size: 11px;
            color: #9ca3af;
            margin-top: 2px;
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

   

        <main class=\"main-content\">
            <nav class=\"navbar\">
                <div class=\"page-header\">
                    <h1 class=\"page-title\">Cours index</h1>
                    <div class=\"page-breadcrumb\">
                        <a href=\"{{ path('dashboard') }}\">Dashboard</a>
                        <span>/</span>
                        <span>Cours</span>
                    </div>
                </div>
                <div class=\"navbar-right\">
                    <div class=\"search-box\">
                        <svg class=\"search-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <circle cx=\"11\" cy=\"11\" r=\"8\"/><line x1=\"21\" y1=\"21\" x2=\"16.65\" y2=\"16.65\"/>
                        </svg>
                        <input type=\"text\" class=\"search-input\" placeholder=\"Search...\">
                    </div>
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

            <section class=\"content-grid\" style=\"grid-template-columns: 1fr;\">
                <div class=\"glass-card table-card\" style=\"grid-column: span 1;\">
                    <div class=\"card-header\">
                        <div>
                            <h2 class=\"card-title\">All Cours</h2>
                            <p class=\"card-subtitle\">Manage all courses</p>
                        </div>
                        <div class=\"card-actions\">
                            <form method=\"get\" action=\"{{ path('app_cours_index') }}\" class=\"search-form\" style=\"display:flex; gap:8px;\">
                                <input type=\"text\"
                                       name=\"q\"
                                       value=\"{{ search ?? '' }}\"
                                       placeholder=\"Rechercher par catégorie...\"
                                       class=\"search-input\">
                                <button type=\"submit\" class=\"card-btn\">Rechercher</button>
                            </form>
                            <a href=\"{{ path('app_cours_new') }}\" class=\"card-btn\" style=\"margin-left: 8px;\">
                                <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" style=\"margin-right: 6px;\">
                                    <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"/><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"/>
                                </svg>
                                Create new
                            </a>
                        </div>
                    </div>

                    <div style=\"display:flex; justify-content:flex-end; margin-top:8px; padding:0 4px;\">
                        {% set triLabel = 'Date_creation ↑↓' %}
                        {% if dir is defined and dir == 'ASC' %}
                            {% set triLabel = 'Date_creation ↑' %}
                        {% elseif dir is defined and dir == 'DESC' %}
                            {% set triLabel = 'Date_creation ↓' %}
                        {% endif %}
                        <a href=\"{{ path('app_cours_index', {
                            q: search ?? '',
                            dir: (dir is defined and dir == 'ASC') ? 'DESC' : 'ASC'
                        }) }}\" class=\"tri-link-small\">
                            {{ triLabel }}
                        </a>
                    </div>

                    <div class=\"courses-grid\">
                        {% for cour in cours %}
                            <article class=\"course-card\">
                                <div class=\"course-card-image\"></div>

                                <div class=\"course-card-body\">
                                    <div class=\"course-code\">
                                        Cours #{{ cour.id }} • {{ cour.categorie }}
                                    </div>
                                    <div class=\"course-title\">
                                        {{ cour.tittre }}
                                    </div>

                                    <div class=\"course-meta-row\">
                                        <span class=\"badge badge-level\">
                                            {{ cour.niveau }}
                                        </span>
                                        <span class=\"badge\">
                                            Durée: {{ cour.dureeEstimee }} h
                                        </span>
                                        <span class=\"badge badge-status\">
                                            {{ cour.status }}
                                        </span>
                                    </div>

                                    <p class=\"course-description\">
                                        {{ cour.description }}
                                    </p>
                                </div>

                                <div class=\"course-footer\">
                                    <span>
                                        {{ cour.dateCreation ? cour.dateCreation|date('Y-m-d') : '' }}
                                        {% if cour.user %}
                                            <span class=\"course-user\">
                                                par {{ cour.user.name }}
                                            </span>
                                        {% endif %}
                                    </span>
                                    <div class=\"course-actions\">
                                        <a href=\"{{ path('app_cours_show', {'id': cour.id}) }}\">show</a>
                                        <a href=\"{{ path('app_cours_edit', {'id': cour.id}) }}\">edit</a>
                                        <a href=\"{{ path('app_chapitre_by_cours', {'id': cour.id}) }}\">chapitres</a>
                                    </div>
                                </div>
                            </article>
                        {% else %}
                            <p style=\"padding: 18px; font-size: 13px; color: #9ca3af;\">
                                No records found.
                            </p>
                        {% endfor %}
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
        <p>Copyright © 2026 Your Company.
            Designed by <a href=\"https://templatemo.com\" target=\"_blank\" rel=\"nofollow\">TemplateMo</a>
        </p>
    </footer>

    <script src=\"{{ asset('js/templatemo-glass-admin-script.js') }}\"></script>
</body>
</html>
", "cours/index.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\cours\\index.html.twig");
    }
}
