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

/* user/index.html.twig */
class __TwigTemplate_a068031cd29cabe85ffd4f101e4436ce extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>User Management</title>
    <meta name=\"description\" content=\"3D Glassmorphism Dashboard Template by TemplateMo\">

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Space+Mono:wght@400;700&display=swap\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/templatemo-glass-admin-style.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">
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
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Logo\" style=\"width: 50px; height: auto; margin-top: 12%;\">
        </div>
        <span class=\"logo-text\">AIVA</span>
    </div>

    <ul class=\"nav-menu\">

        ";
        // line 38
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Menu Principal</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\"
                       class=\"nav-link ";
        // line 43
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "request", [], "any", false, false, false, 43), "attributes", [], "any", false, false, false, 43), "get", ["_route"], "method", false, false, false, 43) == "dashboard")) {
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
        // line 54
        yield "              <span class=\"nav-section-title\">sports</span>

        <li class=\"nav-item\">
            <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_sport_index");
        yield "\"
               class=\"nav-link ";
        // line 58
        if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "request", [], "any", false, false, false, 58), "attributes", [], "any", false, false, false, 58), "get", ["_route"], "method", false, false, false, 58)) && is_string($_v1 = "back_sport_") && str_starts_with($_v0, $_v1))) {
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
        // line 69
        yield "        <li class=\"nav-item\">
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
        // line 80
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Finance</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depense_index");
        yield "\"
                       class=\"nav-link ";
        // line 85
        if ((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "request", [], "any", false, false, false, 85), "attributes", [], "any", false, false, false, 85), "get", ["_route"], "method", false, false, false, 85)) && is_string($_v5 = "app_depense_") && str_starts_with($_v4, $_v5))) {
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
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index");
        yield "\"
                       class=\"nav-link ";
        // line 97
        if ((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "request", [], "any", false, false, false, 97), "attributes", [], "any", false, false, false, 97), "get", ["_route"], "method", false, false, false, 97)) && is_string($_v7 = "app_categorie_") && str_starts_with($_v6, $_v7))) {
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
        // line 111
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Énergies</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 115
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("energy");
        yield "\"
                       class=\"nav-link ";
        // line 116
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "request", [], "any", false, false, false, 116), "attributes", [], "any", false, false, false, 116), "get", ["_route"], "method", false, false, false, 116) == "energy")) {
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
        // line 125
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recommendations");
        yield "\"
                       class=\"nav-link ";
        // line 126
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 126, $this->source); })()), "request", [], "any", false, false, false, 126), "attributes", [], "any", false, false, false, 126), "get", ["_route"], "method", false, false, false, 126) == "recommendations")) {
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
        // line 137
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stateenergi");
        yield "\"
                       class=\"nav-link ";
        // line 138
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 138, $this->source); })()), "request", [], "any", false, false, false, 138), "attributes", [], "any", false, false, false, 138), "get", ["_route"], "method", false, false, false, 138) == "stateenergi")) {
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
        // line 150
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Alimentation</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 154
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_aliment_index");
        yield "\"
                       class=\"nav-link ";
        // line 155
        if ((is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 155, $this->source); })()), "request", [], "any", false, false, false, 155), "attributes", [], "any", false, false, false, 155), "get", ["_route"], "method", false, false, false, 155)) && is_string($_v9 = "app_aliment_") && str_starts_with($_v8, $_v9))) {
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
        // line 165
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_repas_index");
        yield "\"
                       class=\"nav-link ";
        // line 166
        if ((is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 166, $this->source); })()), "request", [], "any", false, false, false, 166), "attributes", [], "any", false, false, false, 166), "get", ["_route"], "method", false, false, false, 166)) && is_string($_v11 = "app_repas_") && str_starts_with($_v10, $_v11))) {
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
        // line 180
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Formation</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 184
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_index");
        yield "\"
                       class=\"nav-link ";
        // line 185
        if ((is_string($_v12 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 185, $this->source); })()), "request", [], "any", false, false, false, 185), "attributes", [], "any", false, false, false, 185), "get", ["_route"], "method", false, false, false, 185)) && is_string($_v13 = "app_cours_") && str_starts_with($_v12, $_v13))) {
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
        // line 195
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chapitre_index");
        yield "\"
                       class=\"nav-link ";
        // line 196
        if ((is_string($_v14 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 196, $this->source); })()), "request", [], "any", false, false, false, 196), "attributes", [], "any", false, false, false, 196), "get", ["_route"], "method", false, false, false, 196)) && is_string($_v15 = "app_chapitre_") && str_starts_with($_v14, $_v15))) {
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
        // line 212
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Compte</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 216
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\"
                       class=\"nav-link ";
        // line 217
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 217, $this->source); })()), "request", [], "any", false, false, false, 217), "attributes", [], "any", false, false, false, 217), "get", ["_route"], "method", false, false, false, 217) == "app_profile")) {
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
        // line 227
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\"
                       class=\"nav-link ";
        // line 228
        if ((is_string($_v16 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 228, $this->source); })()), "request", [], "any", false, false, false, 228), "attributes", [], "any", false, false, false, 228), "get", ["_route"], "method", false, false, false, 228)) && is_string($_v17 = "app_user_") && str_starts_with($_v16, $_v17))) {
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
        // line 240
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
            <h1 class=\"page-title\">User Management</h1>
            <div class=\"navbar-right\">
                <div class=\"search-box\">
                    <svg class=\"search-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <circle cx=\"11\" cy=\"11\" r=\"8\"/>
                        <line x1=\"21\" y1=\"21\" x2=\"16.65\" y2=\"16.65\"/>
                    </svg>
                    <input type=\"text\" class=\"search-input\" placeholder=\"Search anything...\">
                </div>

                <button class=\"nav-btn\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9\"/>
                        <path d=\"M13.73 21a2 2 0 0 1-3.46 0\"/>
                    </svg>
                    <span class=\"notification-dot\"></span>
                </button>

                <button class=\"nav-btn\" id=\"theme-toggle\" title=\"Toggle Light/Dark Mode\">
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
        // line 306
        yield "        <section class=\"content-grid\" style=\"grid-template-columns: 1fr;\">
            <div class=\"glass-card table-card\">
                <div class=\"card-header\">
                    <div>
                        <h2 class=\"card-title\">User Management</h2>
                        <p class=\"card-subtitle\">Manage all users in the system</p>
                    </div>
                    <div class=\"card-actions\">
                        <a href=\"";
        // line 314
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        yield "\" class=\"card-btn\"
                           style=\"background: linear-gradient(135deg, var(--emerald-light), var(--emerald)); color: white; padding: 8px 16px; border-radius: 8px; text-decoration: none;\">
                            + Create New User
                        </a>
                    </div>
                </div>

                ";
        // line 321
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 321, $this->source); })()), "flashes", ["success"], "method", false, false, false, 321));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 322
            yield "                    <div style=\"margin: 15px 0; padding: 12px 20px; background: rgba(16, 185, 129, 0.1); border-left: 3px solid var(--success); border-radius: 8px; color: var(--success);\">
                        ";
            // line 323
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 326
        yield "
                <div style=\"margin: 20px 0;\">
                    <div style=\"display: flex; gap: 15px; align-items: center; flex-wrap: wrap;\">
                        <!-- Search Form -->
                        <form method=\"get\" action=\"";
        // line 330
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" style=\"display: flex; gap: 10px; flex: 1; max-width: 500px;\">
                            <input type=\"text\" name=\"search\" placeholder=\"Search by name or email...\" value=\"";
        // line 331
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 331, $this->source); })()), "html", null, true);
        yield "\"
                                   style=\"flex: 1; padding: 10px 15px; background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 8px; color: var(--text-primary); outline: none;\">
                            <input type=\"hidden\" name=\"sort\" value=\"";
        // line 333
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 333, $this->source); })()), "html", null, true);
        yield "\">
                            <input type=\"hidden\" name=\"order\" value=\"";
        // line 334
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentOrder"]) || array_key_exists("currentOrder", $context) ? $context["currentOrder"] : (function () { throw new RuntimeError('Variable "currentOrder" does not exist.', 334, $this->source); })()), "html", null, true);
        yield "\">
                            <button type=\"submit\" class=\"card-btn\">🔍 Search</button>
                            ";
        // line 336
        if ((($tmp = (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 336, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 337
            yield "                                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["sort" => (isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 337, $this->source); })()), "order" => (isset($context["currentOrder"]) || array_key_exists("currentOrder", $context) ? $context["currentOrder"] : (function () { throw new RuntimeError('Variable "currentOrder" does not exist.', 337, $this->source); })())]), "html", null, true);
            yield "\" class=\"card-btn\">Clear</a>
                            ";
        }
        // line 339
        yield "                        </form>

                        <!-- Sort Buttons -->
                        <div style=\"display: flex; gap: 8px; align-items: center;\">
                            <span style=\"color: var(--text-secondary); font-size: 14px; font-weight: 500;\">Sort by:</span>
                            <a href=\"";
        // line 344
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["sort" => "name", "order" => ((((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 344, $this->source); })()) == "name")) ? (((((isset($context["currentOrder"]) || array_key_exists("currentOrder", $context) ? $context["currentOrder"] : (function () { throw new RuntimeError('Variable "currentOrder" does not exist.', 344, $this->source); })()) == "ASC")) ? ("DESC") : ("ASC"))) : ("ASC")), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 344, $this->source); })())]), "html", null, true);
        yield "\"
                               class=\"card-btn\"
                               style=\"padding: 8px 14px; background: ";
        // line 346
        yield ((((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 346, $this->source); })()) == "name")) ? ("linear-gradient(135deg, var(--emerald-light), var(--emerald))") : ("rgba(255, 255, 255, 0.05)"));
        yield "; font-size: 13px; font-weight: 500;\">
                                Name ";
        // line 347
        if (((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 347, $this->source); })()) == "name")) {
            yield ((((isset($context["currentOrder"]) || array_key_exists("currentOrder", $context) ? $context["currentOrder"] : (function () { throw new RuntimeError('Variable "currentOrder" does not exist.', 347, $this->source); })()) == "ASC")) ? ("↑") : ("↓"));
        }
        // line 348
        yield "                            </a>
                            <a href=\"";
        // line 349
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["sort" => "email", "order" => ((((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 349, $this->source); })()) == "email")) ? (((((isset($context["currentOrder"]) || array_key_exists("currentOrder", $context) ? $context["currentOrder"] : (function () { throw new RuntimeError('Variable "currentOrder" does not exist.', 349, $this->source); })()) == "ASC")) ? ("DESC") : ("ASC"))) : ("ASC")), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 349, $this->source); })())]), "html", null, true);
        yield "\"
                               class=\"card-btn\"
                               style=\"padding: 8px 14px; background: ";
        // line 351
        yield ((((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 351, $this->source); })()) == "email")) ? ("linear-gradient(135deg, var(--emerald-light), var(--emerald))") : ("rgba(255, 255, 255, 0.05)"));
        yield "; font-size: 13px; font-weight: 500;\">
                                Email ";
        // line 352
        if (((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 352, $this->source); })()) == "email")) {
            yield ((((isset($context["currentOrder"]) || array_key_exists("currentOrder", $context) ? $context["currentOrder"] : (function () { throw new RuntimeError('Variable "currentOrder" does not exist.', 352, $this->source); })()) == "ASC")) ? ("↑") : ("↓"));
        }
        // line 353
        yield "                            </a>
                            <a href=\"";
        // line 354
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["sort" => "id", "order" => ((((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 354, $this->source); })()) == "id")) ? (((((isset($context["currentOrder"]) || array_key_exists("currentOrder", $context) ? $context["currentOrder"] : (function () { throw new RuntimeError('Variable "currentOrder" does not exist.', 354, $this->source); })()) == "ASC")) ? ("DESC") : ("ASC"))) : ("ASC")), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 354, $this->source); })())]), "html", null, true);
        yield "\"
                               class=\"card-btn\"
                               style=\"padding: 8px 14px; background: ";
        // line 356
        yield ((((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 356, $this->source); })()) == "id")) ? ("linear-gradient(135deg, var(--emerald-light), var(--emerald))") : ("rgba(255, 255, 255, 0.05)"));
        yield "; font-size: 13px; font-weight: 500;\">
                                ID ";
        // line 357
        if (((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 357, $this->source); })()) == "id")) {
            yield ((((isset($context["currentOrder"]) || array_key_exists("currentOrder", $context) ? $context["currentOrder"] : (function () { throw new RuntimeError('Variable "currentOrder" does not exist.', 357, $this->source); })()) == "ASC")) ? ("↑") : ("↓"));
        }
        // line 358
        yield "                            </a>
                        </div>
                    </div>
                </div>

                <div class=\"table-wrapper\">
                    <table class=\"data-table\">
                        <thead>
                        <tr>
                            <th>
                                <a href=\"";
        // line 368
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["sort" => "id", "order" => (((((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 368, $this->source); })()) == "id") && ((isset($context["currentOrder"]) || array_key_exists("currentOrder", $context) ? $context["currentOrder"] : (function () { throw new RuntimeError('Variable "currentOrder" does not exist.', 368, $this->source); })()) == "ASC"))) ? ("DESC") : ("ASC")), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 368, $this->source); })())]), "html", null, true);
        yield "\"
                                   style=\"color: inherit; text-decoration: none;\">
                                    ID ";
        // line 370
        if (((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 370, $this->source); })()) == "id")) {
            yield ((((isset($context["currentOrder"]) || array_key_exists("currentOrder", $context) ? $context["currentOrder"] : (function () { throw new RuntimeError('Variable "currentOrder" does not exist.', 370, $this->source); })()) == "ASC")) ? ("↑") : ("↓"));
        }
        // line 371
        yield "                                </a>
                            </th>
                            <th>
                                <a href=\"";
        // line 374
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["sort" => "name", "order" => (((((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 374, $this->source); })()) == "name") && ((isset($context["currentOrder"]) || array_key_exists("currentOrder", $context) ? $context["currentOrder"] : (function () { throw new RuntimeError('Variable "currentOrder" does not exist.', 374, $this->source); })()) == "ASC"))) ? ("DESC") : ("ASC")), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 374, $this->source); })())]), "html", null, true);
        yield "\"
                                   style=\"color: inherit; text-decoration: none;\">
                                    Name ";
        // line 376
        if (((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 376, $this->source); })()) == "name")) {
            yield ((((isset($context["currentOrder"]) || array_key_exists("currentOrder", $context) ? $context["currentOrder"] : (function () { throw new RuntimeError('Variable "currentOrder" does not exist.', 376, $this->source); })()) == "ASC")) ? ("↑") : ("↓"));
        }
        // line 377
        yield "                                </a>
                            </th>
                            <th>
                                <a href=\"";
        // line 380
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["sort" => "email", "order" => (((((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 380, $this->source); })()) == "email") && ((isset($context["currentOrder"]) || array_key_exists("currentOrder", $context) ? $context["currentOrder"] : (function () { throw new RuntimeError('Variable "currentOrder" does not exist.', 380, $this->source); })()) == "ASC"))) ? ("DESC") : ("ASC")), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 380, $this->source); })())]), "html", null, true);
        yield "\"
                                   style=\"color: inherit; text-decoration: none;\">
                                    Email ";
        // line 382
        if (((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 382, $this->source); })()) == "email")) {
            yield ((((isset($context["currentOrder"]) || array_key_exists("currentOrder", $context) ? $context["currentOrder"] : (function () { throw new RuntimeError('Variable "currentOrder" does not exist.', 382, $this->source); })()) == "ASC")) ? ("↑") : ("↓"));
        }
        // line 383
        yield "                                </a>
                            </th>
                            <th>Roles</th>
                            <th>Status</th>
                            <th style=\"text-align: center;\">Actions</th>
                        </tr>
                        </thead>

                        <tbody>
                        ";
        // line 392
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 392, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 393
            yield "                            <tr>
                                <td>";
            // line 394
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 394), "html", null, true);
            yield "</td>
                                <td>
                                    <div class=\"table-user\">
                                        <div class=\"table-avatar\" style=\"background: linear-gradient(135deg, var(--emerald-light), var(--emerald));\">
                                            ";
            // line 398
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 398), 0, 2)), "html", null, true);
            yield "
                                        </div>
                                        <span class=\"table-user-name\">";
            // line 400
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 400), "html", null, true);
            yield "</span>
                                    </div>
                                </td>
                                <td>";
            // line 403
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 403), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 405
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 405));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 406
                yield "                                        <span class=\"status-badge completed\" style=\"font-size: 11px; margin: 2px;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
                yield "</span>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 408
            yield "                                </td>
                                <td>
                                    ";
            // line 410
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isBlocked", [], "any", false, false, false, 410)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 411
                yield "                                        <span class=\"status-badge pending\">Blocked</span>
                                    ";
            } else {
                // line 413
                yield "                                        <span class=\"status-badge completed\">Active</span>
                                    ";
            }
            // line 415
            yield "                                </td>
                                <td style=\"text-align: center;\">
                                    <div style=\"display: inline-flex; gap: 5px;\">
                                        <a href=\"";
            // line 418
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 418)]), "html", null, true);
            yield "\" class=\"card-btn\" style=\"padding: 5px 10px; font-size: 12px;\" title=\"View\">👁️</a>
                                        <a href=\"";
            // line 419
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 419)]), "html", null, true);
            yield "\" class=\"card-btn\" style=\"padding: 5px 10px; font-size: 12px;\" title=\"Edit\">✏️</a>

                                        <form method=\"post\" action=\"";
            // line 421
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_block", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 421)]), "html", null, true);
            yield "\" style=\"display: inline;\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 422
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("block" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 422))), "html", null, true);
            yield "\">
                                            <button type=\"submit\" class=\"card-btn\"
                                                    style=\"padding: 5px 10px; font-size: 12px; background: ";
            // line 424
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isBlocked", [], "any", false, false, false, 424)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("linear-gradient(135deg, var(--success), var(--emerald))") : ("rgba(255, 255, 255, 0.1)"));
            yield ";\"
                                                    onclick=\"return confirm('Are you sure?')\"
                                                    title=\"";
            // line 426
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isBlocked", [], "any", false, false, false, 426)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Unblock") : ("Block"));
            yield "\">
                                                ";
            // line 427
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isBlocked", [], "any", false, false, false, 427)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("🔓") : ("🔒"));
            yield "
                                            </button>
                                        </form>

                                        <form method=\"post\" action=\"";
            // line 431
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 431)]), "html", null, true);
            yield "\" style=\"display: inline;\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 432
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 432))), "html", null, true);
            yield "\">
                                            <button type=\"submit\" class=\"card-btn\"
                                                    style=\"padding: 5px 10px; font-size: 12px; background: linear-gradient(135deg, #ef4444, #dc2626);\"
                                                    onclick=\"return confirm('Delete this user?')\"
                                                    title=\"Delete\">🗑️</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 441
        if (!$context['_iterated']) {
            // line 442
            yield "                            <tr>
                                <td colspan=\"6\" style=\"text-align: center; padding: 40px;\">
                                    ";
            // line 444
            if ((($tmp = (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 444, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 445
                yield "                                        No users found matching \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 445, $this->source); })()), "html", null, true);
                yield "\"
                                    ";
            } else {
                // line 447
                yield "                                        No users found
                                    ";
            }
            // line 449
            yield "                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 452
        yield "                        </tbody>
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
    <p>Copyright © 2026 Your Company. Designed by
        <a href=\"https://templatemo.com\" target=\"_blank\" rel=\"nofollow\">TemplateMo</a>
    </p>
</footer>

<script src=\"";
        // line 475
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
        return "user/index.html.twig";
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
        return array (  829 => 475,  804 => 452,  796 => 449,  792 => 447,  786 => 445,  784 => 444,  780 => 442,  778 => 441,  764 => 432,  760 => 431,  753 => 427,  749 => 426,  744 => 424,  739 => 422,  735 => 421,  730 => 419,  726 => 418,  721 => 415,  717 => 413,  713 => 411,  711 => 410,  707 => 408,  698 => 406,  694 => 405,  689 => 403,  683 => 400,  678 => 398,  671 => 394,  668 => 393,  663 => 392,  652 => 383,  648 => 382,  643 => 380,  638 => 377,  634 => 376,  629 => 374,  624 => 371,  620 => 370,  615 => 368,  603 => 358,  599 => 357,  595 => 356,  590 => 354,  587 => 353,  583 => 352,  579 => 351,  574 => 349,  571 => 348,  567 => 347,  563 => 346,  558 => 344,  551 => 339,  545 => 337,  543 => 336,  538 => 334,  534 => 333,  529 => 331,  525 => 330,  519 => 326,  510 => 323,  507 => 322,  503 => 321,  493 => 314,  483 => 306,  415 => 240,  398 => 228,  394 => 227,  379 => 217,  375 => 216,  369 => 212,  349 => 196,  345 => 195,  330 => 185,  326 => 184,  320 => 180,  302 => 166,  298 => 165,  283 => 155,  279 => 154,  273 => 150,  257 => 138,  253 => 137,  237 => 126,  233 => 125,  219 => 116,  215 => 115,  209 => 111,  191 => 97,  187 => 96,  171 => 85,  167 => 84,  161 => 80,  148 => 71,  144 => 70,  141 => 69,  126 => 58,  122 => 57,  117 => 54,  102 => 43,  98 => 42,  92 => 38,  82 => 30,  62 => 13,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>User Management</title>
    <meta name=\"description\" content=\"3D Glassmorphism Dashboard Template by TemplateMo\">

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Space+Mono:wght@400;700&display=swap\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"{{ asset('css/templatemo-glass-admin-style.css') }}\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">
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
            <h1 class=\"page-title\">User Management</h1>
            <div class=\"navbar-right\">
                <div class=\"search-box\">
                    <svg class=\"search-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <circle cx=\"11\" cy=\"11\" r=\"8\"/>
                        <line x1=\"21\" y1=\"21\" x2=\"16.65\" y2=\"16.65\"/>
                    </svg>
                    <input type=\"text\" class=\"search-input\" placeholder=\"Search anything...\">
                </div>

                <button class=\"nav-btn\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9\"/>
                        <path d=\"M13.73 21a2 2 0 0 1-3.46 0\"/>
                    </svg>
                    <span class=\"notification-dot\"></span>
                </button>

                <button class=\"nav-btn\" id=\"theme-toggle\" title=\"Toggle Light/Dark Mode\">
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

        {# ====== TON CONTENU USERS (inchangé) ====== #}
        <section class=\"content-grid\" style=\"grid-template-columns: 1fr;\">
            <div class=\"glass-card table-card\">
                <div class=\"card-header\">
                    <div>
                        <h2 class=\"card-title\">User Management</h2>
                        <p class=\"card-subtitle\">Manage all users in the system</p>
                    </div>
                    <div class=\"card-actions\">
                        <a href=\"{{ path('app_user_new') }}\" class=\"card-btn\"
                           style=\"background: linear-gradient(135deg, var(--emerald-light), var(--emerald)); color: white; padding: 8px 16px; border-radius: 8px; text-decoration: none;\">
                            + Create New User
                        </a>
                    </div>
                </div>

                {% for message in app.flashes('success') %}
                    <div style=\"margin: 15px 0; padding: 12px 20px; background: rgba(16, 185, 129, 0.1); border-left: 3px solid var(--success); border-radius: 8px; color: var(--success);\">
                        {{ message }}
                    </div>
                {% endfor %}

                <div style=\"margin: 20px 0;\">
                    <div style=\"display: flex; gap: 15px; align-items: center; flex-wrap: wrap;\">
                        <!-- Search Form -->
                        <form method=\"get\" action=\"{{ path('app_user_index') }}\" style=\"display: flex; gap: 10px; flex: 1; max-width: 500px;\">
                            <input type=\"text\" name=\"search\" placeholder=\"Search by name or email...\" value=\"{{ search }}\"
                                   style=\"flex: 1; padding: 10px 15px; background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 8px; color: var(--text-primary); outline: none;\">
                            <input type=\"hidden\" name=\"sort\" value=\"{{ currentSort }}\">
                            <input type=\"hidden\" name=\"order\" value=\"{{ currentOrder }}\">
                            <button type=\"submit\" class=\"card-btn\">🔍 Search</button>
                            {% if search %}
                                <a href=\"{{ path('app_user_index', {'sort': currentSort, 'order': currentOrder}) }}\" class=\"card-btn\">Clear</a>
                            {% endif %}
                        </form>

                        <!-- Sort Buttons -->
                        <div style=\"display: flex; gap: 8px; align-items: center;\">
                            <span style=\"color: var(--text-secondary); font-size: 14px; font-weight: 500;\">Sort by:</span>
                            <a href=\"{{ path('app_user_index', {'sort': 'name', 'order': currentSort == 'name' ? (currentOrder == 'ASC' ? 'DESC' : 'ASC') : 'ASC', 'search': search}) }}\"
                               class=\"card-btn\"
                               style=\"padding: 8px 14px; background: {{ currentSort == 'name' ? 'linear-gradient(135deg, var(--emerald-light), var(--emerald))' : 'rgba(255, 255, 255, 0.05)' }}; font-size: 13px; font-weight: 500;\">
                                Name {% if currentSort == 'name' %}{{ currentOrder == 'ASC' ? '↑' : '↓' }}{% endif %}
                            </a>
                            <a href=\"{{ path('app_user_index', {'sort': 'email', 'order': currentSort == 'email' ? (currentOrder == 'ASC' ? 'DESC' : 'ASC') : 'ASC', 'search': search}) }}\"
                               class=\"card-btn\"
                               style=\"padding: 8px 14px; background: {{ currentSort == 'email' ? 'linear-gradient(135deg, var(--emerald-light), var(--emerald))' : 'rgba(255, 255, 255, 0.05)' }}; font-size: 13px; font-weight: 500;\">
                                Email {% if currentSort == 'email' %}{{ currentOrder == 'ASC' ? '↑' : '↓' }}{% endif %}
                            </a>
                            <a href=\"{{ path('app_user_index', {'sort': 'id', 'order': currentSort == 'id' ? (currentOrder == 'ASC' ? 'DESC' : 'ASC') : 'ASC', 'search': search}) }}\"
                               class=\"card-btn\"
                               style=\"padding: 8px 14px; background: {{ currentSort == 'id' ? 'linear-gradient(135deg, var(--emerald-light), var(--emerald))' : 'rgba(255, 255, 255, 0.05)' }}; font-size: 13px; font-weight: 500;\">
                                ID {% if currentSort == 'id' %}{{ currentOrder == 'ASC' ? '↑' : '↓' }}{% endif %}
                            </a>
                        </div>
                    </div>
                </div>

                <div class=\"table-wrapper\">
                    <table class=\"data-table\">
                        <thead>
                        <tr>
                            <th>
                                <a href=\"{{ path('app_user_index', {'sort': 'id', 'order': (currentSort == 'id' and currentOrder == 'ASC') ? 'DESC' : 'ASC', 'search': search}) }}\"
                                   style=\"color: inherit; text-decoration: none;\">
                                    ID {% if currentSort == 'id' %}{{ currentOrder == 'ASC' ? '↑' : '↓' }}{% endif %}
                                </a>
                            </th>
                            <th>
                                <a href=\"{{ path('app_user_index', {'sort': 'name', 'order': (currentSort == 'name' and currentOrder == 'ASC') ? 'DESC' : 'ASC', 'search': search}) }}\"
                                   style=\"color: inherit; text-decoration: none;\">
                                    Name {% if currentSort == 'name' %}{{ currentOrder == 'ASC' ? '↑' : '↓' }}{% endif %}
                                </a>
                            </th>
                            <th>
                                <a href=\"{{ path('app_user_index', {'sort': 'email', 'order': (currentSort == 'email' and currentOrder == 'ASC') ? 'DESC' : 'ASC', 'search': search}) }}\"
                                   style=\"color: inherit; text-decoration: none;\">
                                    Email {% if currentSort == 'email' %}{{ currentOrder == 'ASC' ? '↑' : '↓' }}{% endif %}
                                </a>
                            </th>
                            <th>Roles</th>
                            <th>Status</th>
                            <th style=\"text-align: center;\">Actions</th>
                        </tr>
                        </thead>

                        <tbody>
                        {% for user in users %}
                            <tr>
                                <td>{{ user.id }}</td>
                                <td>
                                    <div class=\"table-user\">
                                        <div class=\"table-avatar\" style=\"background: linear-gradient(135deg, var(--emerald-light), var(--emerald));\">
                                            {{ user.name|slice(0, 2)|upper }}
                                        </div>
                                        <span class=\"table-user-name\">{{ user.name }}</span>
                                    </div>
                                </td>
                                <td>{{ user.email }}</td>
                                <td>
                                    {% for role in user.roles %}
                                        <span class=\"status-badge completed\" style=\"font-size: 11px; margin: 2px;\">{{ role }}</span>
                                    {% endfor %}
                                </td>
                                <td>
                                    {% if user.isBlocked %}
                                        <span class=\"status-badge pending\">Blocked</span>
                                    {% else %}
                                        <span class=\"status-badge completed\">Active</span>
                                    {% endif %}
                                </td>
                                <td style=\"text-align: center;\">
                                    <div style=\"display: inline-flex; gap: 5px;\">
                                        <a href=\"{{ path('app_user_show', {'id': user.id}) }}\" class=\"card-btn\" style=\"padding: 5px 10px; font-size: 12px;\" title=\"View\">👁️</a>
                                        <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\" class=\"card-btn\" style=\"padding: 5px 10px; font-size: 12px;\" title=\"Edit\">✏️</a>

                                        <form method=\"post\" action=\"{{ path('app_user_block', {'id': user.id}) }}\" style=\"display: inline;\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('block' ~ user.id) }}\">
                                            <button type=\"submit\" class=\"card-btn\"
                                                    style=\"padding: 5px 10px; font-size: 12px; background: {{ user.isBlocked ? 'linear-gradient(135deg, var(--success), var(--emerald))' : 'rgba(255, 255, 255, 0.1)' }};\"
                                                    onclick=\"return confirm('Are you sure?')\"
                                                    title=\"{{ user.isBlocked ? 'Unblock' : 'Block' }}\">
                                                {{ user.isBlocked ? '🔓' : '🔒' }}
                                            </button>
                                        </form>

                                        <form method=\"post\" action=\"{{ path('app_user_delete', {'id': user.id}) }}\" style=\"display: inline;\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id) }}\">
                                            <button type=\"submit\" class=\"card-btn\"
                                                    style=\"padding: 5px 10px; font-size: 12px; background: linear-gradient(135deg, #ef4444, #dc2626);\"
                                                    onclick=\"return confirm('Delete this user?')\"
                                                    title=\"Delete\">🗑️</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"6\" style=\"text-align: center; padding: 40px;\">
                                    {% if search %}
                                        No users found matching \"{{ search }}\"
                                    {% else %}
                                        No users found
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

<!-- Mobile Menu Toggle -->
<button class=\"mobile-menu-toggle\">
    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
        <line x1=\"3\" y1=\"12\" x2=\"21\" y2=\"12\"/><line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\"/><line x1=\"3\" y1=\"18\" x2=\"21\" y2=\"18\"/>
    </svg>
</button>

<!-- Footer -->
<footer class=\"site-footer\">
    <p>Copyright © 2026 Your Company. Designed by
        <a href=\"https://templatemo.com\" target=\"_blank\" rel=\"nofollow\">TemplateMo</a>
    </p>
</footer>

<script src=\"{{ asset('js/templatemo-glass-admin-script.js') }}\"></script>
</body>
</html>
", "user/index.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\user\\index.html.twig");
    }
}
