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

/* back/energie/dashboard.html.twig */
class __TwigTemplate_6ee61fba4e3edd8aa81a6e60454407a6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/energie/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/energie/dashboard.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>GlassAdmin Dashboard - 3D Glassmorphism Dashboard</title>
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
<!-- Sidebar -->
<aside class=\"sidebar\" id=\"sidebar\">
    <div class=\"sidebar-header\">
        <div class=\"logo\">
            <img src=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Logo\" style=\"width: 50px; height: auto; margin-top: 12%;\">
        </div>
        <span class=\"logo-text\">AIVA</span>
    </div>

    <ul class=\"nav-menu\">

        ";
        // line 37
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Menu Principal</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\"
                       class=\"nav-link ";
        // line 42
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "request", [], "any", false, false, false, 42), "attributes", [], "any", false, false, false, 42), "get", ["_route"], "method", false, false, false, 42) == "dashboard")) {
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
        // line 53
        yield "              <span class=\"nav-section-title\">sports</span>

        <li class=\"nav-item\">
            <a href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_sport_index");
        yield "\"
               class=\"nav-link ";
        // line 57
        if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "request", [], "any", false, false, false, 57), "attributes", [], "any", false, false, false, 57), "get", ["_route"], "method", false, false, false, 57)) && is_string($_v1 = "back_sport_") && str_starts_with($_v0, $_v1))) {
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
        // line 68
        yield "        <li class=\"nav-item\">
            <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_index");
        yield "\"
               class=\"nav-link ";
        // line 70
        if ((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "request", [], "any", false, false, false, 70), "attributes", [], "any", false, false, false, 70), "get", ["_route"], "method", false, false, false, 70)) && is_string($_v3 = "app_objectif_") && str_starts_with($_v2, $_v3))) {
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
        // line 79
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Finance</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depense_index");
        yield "\"
                       class=\"nav-link ";
        // line 84
        if ((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "request", [], "any", false, false, false, 84), "attributes", [], "any", false, false, false, 84), "get", ["_route"], "method", false, false, false, 84)) && is_string($_v5 = "app_depense_") && str_starts_with($_v4, $_v5))) {
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
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index");
        yield "\"
                       class=\"nav-link ";
        // line 96
        if ((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 96, $this->source); })()), "request", [], "any", false, false, false, 96), "attributes", [], "any", false, false, false, 96), "get", ["_route"], "method", false, false, false, 96)) && is_string($_v7 = "app_categorie_") && str_starts_with($_v6, $_v7))) {
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
        // line 110
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Énergies</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 114
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("energy");
        yield "\"
                       class=\"nav-link ";
        // line 115
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "request", [], "any", false, false, false, 115), "attributes", [], "any", false, false, false, 115), "get", ["_route"], "method", false, false, false, 115) == "energy")) {
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
        // line 124
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recommendations");
        yield "\"
                       class=\"nav-link ";
        // line 125
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 125, $this->source); })()), "request", [], "any", false, false, false, 125), "attributes", [], "any", false, false, false, 125), "get", ["_route"], "method", false, false, false, 125) == "recommendations")) {
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
        // line 136
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stateenergi");
        yield "\"
                       class=\"nav-link ";
        // line 137
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 137, $this->source); })()), "request", [], "any", false, false, false, 137), "attributes", [], "any", false, false, false, 137), "get", ["_route"], "method", false, false, false, 137) == "stateenergi")) {
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
        // line 149
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Alimentation</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 153
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_aliment_index");
        yield "\"
                       class=\"nav-link ";
        // line 154
        if ((is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 154, $this->source); })()), "request", [], "any", false, false, false, 154), "attributes", [], "any", false, false, false, 154), "get", ["_route"], "method", false, false, false, 154)) && is_string($_v9 = "app_aliment_") && str_starts_with($_v8, $_v9))) {
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
        // line 164
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_repas_index");
        yield "\"
                       class=\"nav-link ";
        // line 165
        if ((is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 165, $this->source); })()), "request", [], "any", false, false, false, 165), "attributes", [], "any", false, false, false, 165), "get", ["_route"], "method", false, false, false, 165)) && is_string($_v11 = "app_repas_") && str_starts_with($_v10, $_v11))) {
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
        // line 179
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Formation</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 183
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_index");
        yield "\"
                       class=\"nav-link ";
        // line 184
        if ((is_string($_v12 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 184, $this->source); })()), "request", [], "any", false, false, false, 184), "attributes", [], "any", false, false, false, 184), "get", ["_route"], "method", false, false, false, 184)) && is_string($_v13 = "app_cours_") && str_starts_with($_v12, $_v13))) {
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
        // line 194
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chapitre_index");
        yield "\"
                       class=\"nav-link ";
        // line 195
        if ((is_string($_v14 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 195, $this->source); })()), "request", [], "any", false, false, false, 195), "attributes", [], "any", false, false, false, 195), "get", ["_route"], "method", false, false, false, 195)) && is_string($_v15 = "app_chapitre_") && str_starts_with($_v14, $_v15))) {
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
        // line 211
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Compte</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 215
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\"
                       class=\"nav-link ";
        // line 216
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 216, $this->source); })()), "request", [], "any", false, false, false, 216), "attributes", [], "any", false, false, false, 216), "get", ["_route"], "method", false, false, false, 216) == "app_profile")) {
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
        // line 226
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\"
                       class=\"nav-link ";
        // line 227
        if ((is_string($_v16 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 227, $this->source); })()), "request", [], "any", false, false, false, 227), "attributes", [], "any", false, false, false, 227), "get", ["_route"], "method", false, false, false, 227)) && is_string($_v17 = "app_user_") && str_starts_with($_v16, $_v17))) {
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
        // line 239
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
        // line 268
        yield "            <li class=\"nav-section\">
 

        <!-- Main Content -->
        <main class=\"main-content\">
            <!-- Top Navbar -->
            <nav class=\"navbar\">
                <h1 class=\"page-title\">Dashboard Overview</h1>
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
                        <svg class=\"icon-moon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" style=\"display: none;\">
                            <path d=\"M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z\"/>
                        </svg>
                    </button>
                </div>
            </nav>

            <!-- Stats Cards -->
            <section class=\"stats-grid\">
                <div class=\"glass-card glass-card-3d stat-card\">
                    <div class=\"stat-card-inner\">
                        <div class=\"stat-info\">
                            <h3>Total Revenue</h3>
                            <div class=\"stat-value\">\$84,254</div>
                            <span class=\"stat-change positive\">
                                <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><polyline points=\"23 6 13.5 15.5 8.5 10.5 1 18\"/></svg>
                                +12.5%
                            </span>
                        </div>
                        <div class=\"stat-icon cyan\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--emerald-light)\" stroke-width=\"2\">
                                <line x1=\"12\" y1=\"1\" x2=\"12\" y2=\"23\"/><path d=\"M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6\"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class=\"glass-card glass-card-3d stat-card\">
                    <div class=\"stat-card-inner\">
                        <div class=\"stat-info\">
                            <h3>Active Users</h3>
                            <div class=\"stat-value\">24,521</div>
                            <span class=\"stat-change positive\">
                                <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><polyline points=\"23 6 13.5 15.5 8.5 10.5 1 18\"/></svg>
                                +8.2%
                            </span>
                        </div>
                        <div class=\"stat-icon magenta\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--gold)\" stroke-width=\"2\">
                                <path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"/><circle cx=\"9\" cy=\"7\" r=\"4\"/>
                                <path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"/><path d=\"M16 3.13a4 4 0 0 1 0 7.75\"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class=\"glass-card glass-card-3d stat-card\">
                    <div class=\"stat-card-inner\">
                        <div class=\"stat-info\">
                            <h3>Total Orders</h3>
                            <div class=\"stat-value\">8,461</div>
                            <span class=\"stat-change negative\">
                                <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><polyline points=\"23 18 13.5 8.5 8.5 13.5 1 6\"/></svg>
                                -3.1%
                            </span>
                        </div>
                        <div class=\"stat-icon purple\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--coral)\" stroke-width=\"2\">
                                <circle cx=\"9\" cy=\"21\" r=\"1\"/><circle cx=\"20\" cy=\"21\" r=\"1\"/>
                                <path d=\"M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6\"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class=\"glass-card glass-card-3d stat-card\">
                    <div class=\"stat-card-inner\">
                        <div class=\"stat-info\">
                            <h3>Conversion Rate</h3>
                            <div class=\"stat-value\">3.24%</div>
                            <span class=\"stat-change positive\">
                                <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><polyline points=\"23 6 13.5 15.5 8.5 10.5 1 18\"/></svg>
                                +2.4%
                            </span>
                        </div>
                        <div class=\"stat-icon success\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--success)\" stroke-width=\"2\">
                                <polyline points=\"22 12 18 12 15 21 9 3 6 12 2 12\"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Content Grid -->
            <section class=\"content-grid\">
                <!-- Chart Card -->
                <div class=\"glass-card chart-card\">
                    <div class=\"card-header\">
                        <div>
                            <h2 class=\"card-title\">Revenue Analytics</h2>
                            <p class=\"card-subtitle\">Monthly revenue overview</p>
                        </div>
                        <div class=\"card-actions\">
                            <button class=\"card-btn active\">Monthly</button>
                            <button class=\"card-btn\">Weekly</button>
                            <button class=\"card-btn\">Daily</button>
                        </div>
                    </div>
                    <div class=\"chart-wrapper\">
                        <div class=\"chart-container\">
                            <div class=\"chart-y-axis\">
                                <span class=\"y-value\">\$100K</span>
                                <span class=\"y-value\">\$80K</span>
                                <span class=\"y-value\">\$60K</span>
                                <span class=\"y-value\">\$40K</span>
                                <span class=\"y-value\">\$20K</span>
                                <span class=\"y-value\">\$0</span>
                            </div>
                            <div class=\"chart-placeholder\">
                                <div class=\"chart-bar-group\"><div class=\"chart-bar bar-emerald\" style=\"height: 120px;\"></div><span class=\"chart-label\">Jan</span></div>
                                <div class=\"chart-bar-group\"><div class=\"chart-bar bar-gold\" style=\"height: 160px;\"></div><span class=\"chart-label\">Feb</span></div>
                                <div class=\"chart-bar-group\"><div class=\"chart-bar bar-coral\" style=\"height: 90px;\"></div><span class=\"chart-label\">Mar</span></div>
                                <div class=\"chart-bar-group\"><div class=\"chart-bar bar-teal\" style=\"height: 140px;\"></div><span class=\"chart-label\">Apr</span></div>
                                <div class=\"chart-bar-group\"><div class=\"chart-bar bar-amber\" style=\"height: 180px;\"></div><span class=\"chart-label\">May</span></div>
                                <div class=\"chart-bar-group\"><div class=\"chart-bar bar-emerald\" style=\"height: 130px;\"></div><span class=\"chart-label\">Jun</span></div>
                                <div class=\"chart-bar-group\"><div class=\"chart-bar bar-gold\" style=\"height: 170px;\"></div><span class=\"chart-label\">Jul</span></div>
                                <div class=\"chart-bar-group\"><div class=\"chart-bar bar-coral\" style=\"height: 150px;\"></div><span class=\"chart-label\">Aug</span></div>
                                <div class=\"chart-bar-group\"><div class=\"chart-bar bar-teal\" style=\"height: 190px;\"></div><span class=\"chart-label\">Sep</span></div>
                                <div class=\"chart-bar-group\"><div class=\"chart-bar bar-amber\" style=\"height: 140px;\"></div><span class=\"chart-label\">Oct</span></div>
                                <div class=\"chart-bar-group\"><div class=\"chart-bar bar-emerald\" style=\"height: 175px;\"></div><span class=\"chart-label\">Nov</span></div>
                                <div class=\"chart-bar-group\"><div class=\"chart-bar bar-gold\" style=\"height: 200px;\"></div><span class=\"chart-label\">Dec</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Activity Feed -->
                <div class=\"glass-card activity-card\">
                    <div class=\"card-header\">
                        <div>
                            <h2 class=\"card-title\">Recent Activity</h2>
                            <p class=\"card-subtitle\">Latest transactions</p>
                        </div>
                    </div>
                    <div class=\"activity-list\">
                        <div class=\"activity-item\">
                            <div class=\"activity-avatar\" style=\"background: linear-gradient(135deg, var(--emerald-light), var(--emerald));\">JD</div>
                            <div class=\"activity-content\">
                                <p class=\"activity-text\"><strong>John Doe</strong> purchased Premium Plan</p>
                                <span class=\"activity-time\">2 minutes ago</span>
                            </div>
                        </div>
                        <div class=\"activity-item\">
                            <div class=\"activity-avatar\" style=\"background: linear-gradient(135deg, var(--gold), var(--amber));\">AS</div>
                            <div class=\"activity-content\">
                                <p class=\"activity-text\"><strong>Anna Smith</strong> submitted a support ticket</p>
                                <span class=\"activity-time\">15 minutes ago</span>
                            </div>
                        </div>
                        <div class=\"activity-item\">
                            <div class=\"activity-avatar\" style=\"background: linear-gradient(135deg, var(--coral), var(--gold));\">MJ</div>
                            <div class=\"activity-content\">
                                <p class=\"activity-text\"><strong>Mike Johnson</strong> upgraded subscription</p>
                                <span class=\"activity-time\">1 hour ago</span>
                            </div>
                        </div>
                        <div class=\"activity-item\">
                            <div class=\"activity-avatar\" style=\"background: linear-gradient(135deg, var(--success), var(--emerald));\">EW</div>
                            <div class=\"activity-content\">
                                <p class=\"activity-text\"><strong>Emily White</strong> completed onboarding</p>
                                <span class=\"activity-time\">2 hours ago</span>
                            </div>
                        </div>
                        <div class=\"activity-item\">
                            <div class=\"activity-avatar\" style=\"background: linear-gradient(135deg, var(--warning), var(--gold));\">RB</div>
                            <div class=\"activity-content\">
                                <p class=\"activity-text\"><strong>Robert Brown</strong> requested refund</p>
                                <span class=\"activity-time\">3 hours ago</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Data Table -->
                <div class=\"glass-card table-card\">
                    <div class=\"card-header\">
                        <div>
                            <h2 class=\"card-title\">Recent Transactions</h2>
                            <p class=\"card-subtitle\">Latest orders and payments</p>
                        </div>
                        <div class=\"card-actions\">
                            <button class=\"card-btn\">View All</button>
                            <button class=\"card-btn\">Export</button>
                        </div>
                    </div>
                    <div class=\"table-wrapper\">
                        <table class=\"data-table\">
                            <thead>
                                <tr>
                                    <th>Customer</th>
                                    <th>Product</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><div class=\"table-user\"><div class=\"table-avatar\" style=\"background: linear-gradient(135deg, var(--emerald-light), var(--emerald));\">JD</div><div class=\"table-user-info\"><span class=\"table-user-name\">John Doe</span><span class=\"table-user-email\">john@example.com</span></div></div></td>
                                    <td>Premium Plan</td>
                                    <td>Jan 15, 2025</td>
                                    <td><span class=\"status-badge completed\">Completed</span></td>
                                    <td><span class=\"table-amount\">\$299.00</span></td>
                                </tr>
                                <tr>
                                    <td><div class=\"table-user\"><div class=\"table-avatar\" style=\"background: linear-gradient(135deg, var(--gold), var(--amber));\">AS</div><div class=\"table-user-info\"><span class=\"table-user-name\">Anna Smith</span><span class=\"table-user-email\">anna@example.com</span></div></div></td>
                                    <td>Enterprise License</td>
                                    <td>Jan 14, 2025</td>
                                    <td><span class=\"status-badge processing\">Processing</span></td>
                                    <td><span class=\"table-amount\">\$1,499.00</span></td>
                                </tr>
                                <tr>
                                    <td><div class=\"table-user\"><div class=\"table-avatar\" style=\"background: linear-gradient(135deg, var(--success), var(--emerald));\">MJ</div><div class=\"table-user-info\"><span class=\"table-user-name\">Mike Johnson</span><span class=\"table-user-email\">mike@example.com</span></div></div></td>
                                    <td>Team Bundle</td>
                                    <td>Jan 13, 2025</td>
                                    <td><span class=\"status-badge completed\">Completed</span></td>
                                    <td><span class=\"table-amount\">\$599.00</span></td>
                                </tr>
                                <tr>
                                    <td><div class=\"table-user\"><div class=\"table-avatar\" style=\"background: linear-gradient(135deg, var(--coral), var(--gold));\">EW</div><div class=\"table-user-info\"><span class=\"table-user-name\">Emily White</span><span class=\"table-user-email\">emily@example.com</span></div></div></td>
                                    <td>Starter Plan</td>
                                    <td>Jan 12, 2025</td>
                                    <td><span class=\"status-badge pending\">Pending</span></td>
                                    <td><span class=\"table-amount\">\$49.00</span></td>
                                </tr>
                                <tr>
                                    <td><div class=\"table-user\"><div class=\"table-avatar\" style=\"background: linear-gradient(135deg, var(--emerald), var(--gold));\">RB</div><div class=\"table-user-info\"><span class=\"table-user-name\">Robert Brown</span><span class=\"table-user-email\">robert@example.com</span></div></div></td>
                                    <td>Pro Annual</td>
                                    <td>Jan 11, 2025</td>
                                    <td><span class=\"status-badge completed\">Completed</span></td>
                                    <td><span class=\"table-amount\">\$199.00</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- Bottom Grid -->
            <section class=\"bottom-grid\">
                <!-- Calendar Widget -->
                <div class=\"glass-card\">
                    <div class=\"calendar-header\">
                        <h2 class=\"card-title\">January 2025</h2>
                        <div class=\"calendar-nav\">
                            <button class=\"calendar-nav-btn\"><svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><polyline points=\"15 18 9 12 15 6\"/></svg></button>
                            <button class=\"calendar-nav-btn\"><svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><polyline points=\"9 18 15 12 9 6\"/></svg></button>
                        </div>
                    </div>
                    <div class=\"calendar-grid\">
                        <span class=\"calendar-day-name\">Sun</span><span class=\"calendar-day-name\">Mon</span><span class=\"calendar-day-name\">Tue</span><span class=\"calendar-day-name\">Wed</span><span class=\"calendar-day-name\">Thu</span><span class=\"calendar-day-name\">Fri</span><span class=\"calendar-day-name\">Sat</span>
                        <span class=\"calendar-day other-month\">29</span><span class=\"calendar-day other-month\">30</span><span class=\"calendar-day other-month\">31</span><span class=\"calendar-day today\">1</span><span class=\"calendar-day\">2</span><span class=\"calendar-day\">3</span><span class=\"calendar-day\">4</span>
                        <span class=\"calendar-day\">5</span><span class=\"calendar-day\">6</span><span class=\"calendar-day\">7</span><span class=\"calendar-day\">8</span><span class=\"calendar-day\">9</span><span class=\"calendar-day\">10</span><span class=\"calendar-day\">11</span>
                        <span class=\"calendar-day\">12</span><span class=\"calendar-day\">13</span><span class=\"calendar-day\">14</span><span class=\"calendar-day\">15</span><span class=\"calendar-day\">16</span><span class=\"calendar-day\">17</span><span class=\"calendar-day\">18</span>
                        <span class=\"calendar-day\">19</span><span class=\"calendar-day\">20</span><span class=\"calendar-day\">21</span><span class=\"calendar-day\">22</span><span class=\"calendar-day\">23</span><span class=\"calendar-day\">24</span><span class=\"calendar-day\">25</span>
                        <span class=\"calendar-day\">26</span><span class=\"calendar-day\">27</span><span class=\"calendar-day\">28</span><span class=\"calendar-day\">29</span><span class=\"calendar-day\">30</span><span class=\"calendar-day\">31</span><span class=\"calendar-day other-month\">1</span>
                    </div>
                </div>

                <!-- Donut Chart -->
                <div class=\"glass-card\">
                    <div class=\"card-header\">
                        <div>
                            <h2 class=\"card-title\">Traffic Sources</h2>
                            <p class=\"card-subtitle\">User acquisition breakdown</p>
                        </div>
                    </div>
                    <div class=\"donut-container\">
                        <div class=\"donut-chart\">
                            <svg width=\"140\" height=\"140\" viewBox=\"0 0 140 140\">
                                <circle class=\"donut-bg\" cx=\"70\" cy=\"70\" r=\"54\"/>
                                <circle class=\"donut-segment\" cx=\"70\" cy=\"70\" r=\"54\" stroke=\"var(--emerald-light)\" stroke-dasharray=\"169.6 339.3\" stroke-dashoffset=\"0\"/>
                                <circle class=\"donut-segment\" cx=\"70\" cy=\"70\" r=\"54\" stroke=\"var(--gold)\" stroke-dasharray=\"101.8 339.3\" stroke-dashoffset=\"-169.6\"/>
                                <circle class=\"donut-segment\" cx=\"70\" cy=\"70\" r=\"54\" stroke=\"var(--coral)\" stroke-dasharray=\"67.9 339.3\" stroke-dashoffset=\"-271.4\"/>
                            </svg>
                            <div class=\"donut-center\">
                                <div class=\"donut-value\">24.5K</div>
                                <div class=\"donut-label\">Visitors</div>
                            </div>
                        </div>
                        <div class=\"donut-legend\">
                            <div class=\"legend-item\"><span class=\"legend-color cyan\"></span><span>Organic Search (50%)</span></div>
                            <div class=\"legend-item\"><span class=\"legend-color magenta\"></span><span>Social Media (30%)</span></div>
                            <div class=\"legend-item\"><span class=\"legend-color purple\"></span><span>Direct Traffic (20%)</span></div>
                        </div>
                    </div>
                </div>

                <!-- Progress Card -->
                <div class=\"glass-card progress-card\">
                    <div class=\"card-header\">
                        <div>
                            <h2 class=\"card-title\">Project Progress</h2>
                            <p class=\"card-subtitle\">Current sprint status</p>
                        </div>
                    </div>
                    <div class=\"progress-item\">
                        <div class=\"progress-header\"><span class=\"progress-label\">UI Design</span><span class=\"progress-value\">85%</span></div>
                        <div class=\"progress-bar\"><div class=\"progress-fill cyan\" style=\"width: 85%;\"></div></div>
                    </div>
                    <div class=\"progress-item\">
                        <div class=\"progress-header\"><span class=\"progress-label\">Backend API</span><span class=\"progress-value\">62%</span></div>
                        <div class=\"progress-bar\"><div class=\"progress-fill magenta\" style=\"width: 62%;\"></div></div>
                    </div>
                    <div class=\"progress-item\">
                        <div class=\"progress-header\"><span class=\"progress-label\">Testing</span><span class=\"progress-value\">45%</span></div>
                        <div class=\"progress-bar\"><div class=\"progress-fill purple\" style=\"width: 45%;\"></div></div>
                    </div>
                    <div class=\"progress-item\">
                        <div class=\"progress-header\"><span class=\"progress-label\">Documentation</span><span class=\"progress-value\">28%</span></div>
                        <div class=\"progress-bar\"><div class=\"progress-fill cyan\" style=\"width: 28%;\"></div></div>
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
        // line 633
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
        return "back/energie/dashboard.html.twig";
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
        return array (  812 => 633,  445 => 268,  414 => 239,  397 => 227,  393 => 226,  378 => 216,  374 => 215,  368 => 211,  348 => 195,  344 => 194,  329 => 184,  325 => 183,  319 => 179,  301 => 165,  297 => 164,  282 => 154,  278 => 153,  272 => 149,  256 => 137,  252 => 136,  236 => 125,  232 => 124,  218 => 115,  214 => 114,  208 => 110,  190 => 96,  186 => 95,  170 => 84,  166 => 83,  160 => 79,  147 => 70,  143 => 69,  140 => 68,  125 => 57,  121 => 56,  116 => 53,  101 => 42,  97 => 41,  91 => 37,  81 => 29,  62 => 13,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>GlassAdmin Dashboard - 3D Glassmorphism Dashboard</title>
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

            {# ✅ Menu Formation (Cours/Chapitres) #}
            <li class=\"nav-section\">
 

        <!-- Main Content -->
        <main class=\"main-content\">
            <!-- Top Navbar -->
            <nav class=\"navbar\">
                <h1 class=\"page-title\">Dashboard Overview</h1>
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
                        <svg class=\"icon-moon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" style=\"display: none;\">
                            <path d=\"M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z\"/>
                        </svg>
                    </button>
                </div>
            </nav>

            <!-- Stats Cards -->
            <section class=\"stats-grid\">
                <div class=\"glass-card glass-card-3d stat-card\">
                    <div class=\"stat-card-inner\">
                        <div class=\"stat-info\">
                            <h3>Total Revenue</h3>
                            <div class=\"stat-value\">\$84,254</div>
                            <span class=\"stat-change positive\">
                                <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><polyline points=\"23 6 13.5 15.5 8.5 10.5 1 18\"/></svg>
                                +12.5%
                            </span>
                        </div>
                        <div class=\"stat-icon cyan\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--emerald-light)\" stroke-width=\"2\">
                                <line x1=\"12\" y1=\"1\" x2=\"12\" y2=\"23\"/><path d=\"M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6\"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class=\"glass-card glass-card-3d stat-card\">
                    <div class=\"stat-card-inner\">
                        <div class=\"stat-info\">
                            <h3>Active Users</h3>
                            <div class=\"stat-value\">24,521</div>
                            <span class=\"stat-change positive\">
                                <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><polyline points=\"23 6 13.5 15.5 8.5 10.5 1 18\"/></svg>
                                +8.2%
                            </span>
                        </div>
                        <div class=\"stat-icon magenta\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--gold)\" stroke-width=\"2\">
                                <path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"/><circle cx=\"9\" cy=\"7\" r=\"4\"/>
                                <path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"/><path d=\"M16 3.13a4 4 0 0 1 0 7.75\"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class=\"glass-card glass-card-3d stat-card\">
                    <div class=\"stat-card-inner\">
                        <div class=\"stat-info\">
                            <h3>Total Orders</h3>
                            <div class=\"stat-value\">8,461</div>
                            <span class=\"stat-change negative\">
                                <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><polyline points=\"23 18 13.5 8.5 8.5 13.5 1 6\"/></svg>
                                -3.1%
                            </span>
                        </div>
                        <div class=\"stat-icon purple\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--coral)\" stroke-width=\"2\">
                                <circle cx=\"9\" cy=\"21\" r=\"1\"/><circle cx=\"20\" cy=\"21\" r=\"1\"/>
                                <path d=\"M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6\"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class=\"glass-card glass-card-3d stat-card\">
                    <div class=\"stat-card-inner\">
                        <div class=\"stat-info\">
                            <h3>Conversion Rate</h3>
                            <div class=\"stat-value\">3.24%</div>
                            <span class=\"stat-change positive\">
                                <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><polyline points=\"23 6 13.5 15.5 8.5 10.5 1 18\"/></svg>
                                +2.4%
                            </span>
                        </div>
                        <div class=\"stat-icon success\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--success)\" stroke-width=\"2\">
                                <polyline points=\"22 12 18 12 15 21 9 3 6 12 2 12\"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Content Grid -->
            <section class=\"content-grid\">
                <!-- Chart Card -->
                <div class=\"glass-card chart-card\">
                    <div class=\"card-header\">
                        <div>
                            <h2 class=\"card-title\">Revenue Analytics</h2>
                            <p class=\"card-subtitle\">Monthly revenue overview</p>
                        </div>
                        <div class=\"card-actions\">
                            <button class=\"card-btn active\">Monthly</button>
                            <button class=\"card-btn\">Weekly</button>
                            <button class=\"card-btn\">Daily</button>
                        </div>
                    </div>
                    <div class=\"chart-wrapper\">
                        <div class=\"chart-container\">
                            <div class=\"chart-y-axis\">
                                <span class=\"y-value\">\$100K</span>
                                <span class=\"y-value\">\$80K</span>
                                <span class=\"y-value\">\$60K</span>
                                <span class=\"y-value\">\$40K</span>
                                <span class=\"y-value\">\$20K</span>
                                <span class=\"y-value\">\$0</span>
                            </div>
                            <div class=\"chart-placeholder\">
                                <div class=\"chart-bar-group\"><div class=\"chart-bar bar-emerald\" style=\"height: 120px;\"></div><span class=\"chart-label\">Jan</span></div>
                                <div class=\"chart-bar-group\"><div class=\"chart-bar bar-gold\" style=\"height: 160px;\"></div><span class=\"chart-label\">Feb</span></div>
                                <div class=\"chart-bar-group\"><div class=\"chart-bar bar-coral\" style=\"height: 90px;\"></div><span class=\"chart-label\">Mar</span></div>
                                <div class=\"chart-bar-group\"><div class=\"chart-bar bar-teal\" style=\"height: 140px;\"></div><span class=\"chart-label\">Apr</span></div>
                                <div class=\"chart-bar-group\"><div class=\"chart-bar bar-amber\" style=\"height: 180px;\"></div><span class=\"chart-label\">May</span></div>
                                <div class=\"chart-bar-group\"><div class=\"chart-bar bar-emerald\" style=\"height: 130px;\"></div><span class=\"chart-label\">Jun</span></div>
                                <div class=\"chart-bar-group\"><div class=\"chart-bar bar-gold\" style=\"height: 170px;\"></div><span class=\"chart-label\">Jul</span></div>
                                <div class=\"chart-bar-group\"><div class=\"chart-bar bar-coral\" style=\"height: 150px;\"></div><span class=\"chart-label\">Aug</span></div>
                                <div class=\"chart-bar-group\"><div class=\"chart-bar bar-teal\" style=\"height: 190px;\"></div><span class=\"chart-label\">Sep</span></div>
                                <div class=\"chart-bar-group\"><div class=\"chart-bar bar-amber\" style=\"height: 140px;\"></div><span class=\"chart-label\">Oct</span></div>
                                <div class=\"chart-bar-group\"><div class=\"chart-bar bar-emerald\" style=\"height: 175px;\"></div><span class=\"chart-label\">Nov</span></div>
                                <div class=\"chart-bar-group\"><div class=\"chart-bar bar-gold\" style=\"height: 200px;\"></div><span class=\"chart-label\">Dec</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Activity Feed -->
                <div class=\"glass-card activity-card\">
                    <div class=\"card-header\">
                        <div>
                            <h2 class=\"card-title\">Recent Activity</h2>
                            <p class=\"card-subtitle\">Latest transactions</p>
                        </div>
                    </div>
                    <div class=\"activity-list\">
                        <div class=\"activity-item\">
                            <div class=\"activity-avatar\" style=\"background: linear-gradient(135deg, var(--emerald-light), var(--emerald));\">JD</div>
                            <div class=\"activity-content\">
                                <p class=\"activity-text\"><strong>John Doe</strong> purchased Premium Plan</p>
                                <span class=\"activity-time\">2 minutes ago</span>
                            </div>
                        </div>
                        <div class=\"activity-item\">
                            <div class=\"activity-avatar\" style=\"background: linear-gradient(135deg, var(--gold), var(--amber));\">AS</div>
                            <div class=\"activity-content\">
                                <p class=\"activity-text\"><strong>Anna Smith</strong> submitted a support ticket</p>
                                <span class=\"activity-time\">15 minutes ago</span>
                            </div>
                        </div>
                        <div class=\"activity-item\">
                            <div class=\"activity-avatar\" style=\"background: linear-gradient(135deg, var(--coral), var(--gold));\">MJ</div>
                            <div class=\"activity-content\">
                                <p class=\"activity-text\"><strong>Mike Johnson</strong> upgraded subscription</p>
                                <span class=\"activity-time\">1 hour ago</span>
                            </div>
                        </div>
                        <div class=\"activity-item\">
                            <div class=\"activity-avatar\" style=\"background: linear-gradient(135deg, var(--success), var(--emerald));\">EW</div>
                            <div class=\"activity-content\">
                                <p class=\"activity-text\"><strong>Emily White</strong> completed onboarding</p>
                                <span class=\"activity-time\">2 hours ago</span>
                            </div>
                        </div>
                        <div class=\"activity-item\">
                            <div class=\"activity-avatar\" style=\"background: linear-gradient(135deg, var(--warning), var(--gold));\">RB</div>
                            <div class=\"activity-content\">
                                <p class=\"activity-text\"><strong>Robert Brown</strong> requested refund</p>
                                <span class=\"activity-time\">3 hours ago</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Data Table -->
                <div class=\"glass-card table-card\">
                    <div class=\"card-header\">
                        <div>
                            <h2 class=\"card-title\">Recent Transactions</h2>
                            <p class=\"card-subtitle\">Latest orders and payments</p>
                        </div>
                        <div class=\"card-actions\">
                            <button class=\"card-btn\">View All</button>
                            <button class=\"card-btn\">Export</button>
                        </div>
                    </div>
                    <div class=\"table-wrapper\">
                        <table class=\"data-table\">
                            <thead>
                                <tr>
                                    <th>Customer</th>
                                    <th>Product</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><div class=\"table-user\"><div class=\"table-avatar\" style=\"background: linear-gradient(135deg, var(--emerald-light), var(--emerald));\">JD</div><div class=\"table-user-info\"><span class=\"table-user-name\">John Doe</span><span class=\"table-user-email\">john@example.com</span></div></div></td>
                                    <td>Premium Plan</td>
                                    <td>Jan 15, 2025</td>
                                    <td><span class=\"status-badge completed\">Completed</span></td>
                                    <td><span class=\"table-amount\">\$299.00</span></td>
                                </tr>
                                <tr>
                                    <td><div class=\"table-user\"><div class=\"table-avatar\" style=\"background: linear-gradient(135deg, var(--gold), var(--amber));\">AS</div><div class=\"table-user-info\"><span class=\"table-user-name\">Anna Smith</span><span class=\"table-user-email\">anna@example.com</span></div></div></td>
                                    <td>Enterprise License</td>
                                    <td>Jan 14, 2025</td>
                                    <td><span class=\"status-badge processing\">Processing</span></td>
                                    <td><span class=\"table-amount\">\$1,499.00</span></td>
                                </tr>
                                <tr>
                                    <td><div class=\"table-user\"><div class=\"table-avatar\" style=\"background: linear-gradient(135deg, var(--success), var(--emerald));\">MJ</div><div class=\"table-user-info\"><span class=\"table-user-name\">Mike Johnson</span><span class=\"table-user-email\">mike@example.com</span></div></div></td>
                                    <td>Team Bundle</td>
                                    <td>Jan 13, 2025</td>
                                    <td><span class=\"status-badge completed\">Completed</span></td>
                                    <td><span class=\"table-amount\">\$599.00</span></td>
                                </tr>
                                <tr>
                                    <td><div class=\"table-user\"><div class=\"table-avatar\" style=\"background: linear-gradient(135deg, var(--coral), var(--gold));\">EW</div><div class=\"table-user-info\"><span class=\"table-user-name\">Emily White</span><span class=\"table-user-email\">emily@example.com</span></div></div></td>
                                    <td>Starter Plan</td>
                                    <td>Jan 12, 2025</td>
                                    <td><span class=\"status-badge pending\">Pending</span></td>
                                    <td><span class=\"table-amount\">\$49.00</span></td>
                                </tr>
                                <tr>
                                    <td><div class=\"table-user\"><div class=\"table-avatar\" style=\"background: linear-gradient(135deg, var(--emerald), var(--gold));\">RB</div><div class=\"table-user-info\"><span class=\"table-user-name\">Robert Brown</span><span class=\"table-user-email\">robert@example.com</span></div></div></td>
                                    <td>Pro Annual</td>
                                    <td>Jan 11, 2025</td>
                                    <td><span class=\"status-badge completed\">Completed</span></td>
                                    <td><span class=\"table-amount\">\$199.00</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- Bottom Grid -->
            <section class=\"bottom-grid\">
                <!-- Calendar Widget -->
                <div class=\"glass-card\">
                    <div class=\"calendar-header\">
                        <h2 class=\"card-title\">January 2025</h2>
                        <div class=\"calendar-nav\">
                            <button class=\"calendar-nav-btn\"><svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><polyline points=\"15 18 9 12 15 6\"/></svg></button>
                            <button class=\"calendar-nav-btn\"><svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><polyline points=\"9 18 15 12 9 6\"/></svg></button>
                        </div>
                    </div>
                    <div class=\"calendar-grid\">
                        <span class=\"calendar-day-name\">Sun</span><span class=\"calendar-day-name\">Mon</span><span class=\"calendar-day-name\">Tue</span><span class=\"calendar-day-name\">Wed</span><span class=\"calendar-day-name\">Thu</span><span class=\"calendar-day-name\">Fri</span><span class=\"calendar-day-name\">Sat</span>
                        <span class=\"calendar-day other-month\">29</span><span class=\"calendar-day other-month\">30</span><span class=\"calendar-day other-month\">31</span><span class=\"calendar-day today\">1</span><span class=\"calendar-day\">2</span><span class=\"calendar-day\">3</span><span class=\"calendar-day\">4</span>
                        <span class=\"calendar-day\">5</span><span class=\"calendar-day\">6</span><span class=\"calendar-day\">7</span><span class=\"calendar-day\">8</span><span class=\"calendar-day\">9</span><span class=\"calendar-day\">10</span><span class=\"calendar-day\">11</span>
                        <span class=\"calendar-day\">12</span><span class=\"calendar-day\">13</span><span class=\"calendar-day\">14</span><span class=\"calendar-day\">15</span><span class=\"calendar-day\">16</span><span class=\"calendar-day\">17</span><span class=\"calendar-day\">18</span>
                        <span class=\"calendar-day\">19</span><span class=\"calendar-day\">20</span><span class=\"calendar-day\">21</span><span class=\"calendar-day\">22</span><span class=\"calendar-day\">23</span><span class=\"calendar-day\">24</span><span class=\"calendar-day\">25</span>
                        <span class=\"calendar-day\">26</span><span class=\"calendar-day\">27</span><span class=\"calendar-day\">28</span><span class=\"calendar-day\">29</span><span class=\"calendar-day\">30</span><span class=\"calendar-day\">31</span><span class=\"calendar-day other-month\">1</span>
                    </div>
                </div>

                <!-- Donut Chart -->
                <div class=\"glass-card\">
                    <div class=\"card-header\">
                        <div>
                            <h2 class=\"card-title\">Traffic Sources</h2>
                            <p class=\"card-subtitle\">User acquisition breakdown</p>
                        </div>
                    </div>
                    <div class=\"donut-container\">
                        <div class=\"donut-chart\">
                            <svg width=\"140\" height=\"140\" viewBox=\"0 0 140 140\">
                                <circle class=\"donut-bg\" cx=\"70\" cy=\"70\" r=\"54\"/>
                                <circle class=\"donut-segment\" cx=\"70\" cy=\"70\" r=\"54\" stroke=\"var(--emerald-light)\" stroke-dasharray=\"169.6 339.3\" stroke-dashoffset=\"0\"/>
                                <circle class=\"donut-segment\" cx=\"70\" cy=\"70\" r=\"54\" stroke=\"var(--gold)\" stroke-dasharray=\"101.8 339.3\" stroke-dashoffset=\"-169.6\"/>
                                <circle class=\"donut-segment\" cx=\"70\" cy=\"70\" r=\"54\" stroke=\"var(--coral)\" stroke-dasharray=\"67.9 339.3\" stroke-dashoffset=\"-271.4\"/>
                            </svg>
                            <div class=\"donut-center\">
                                <div class=\"donut-value\">24.5K</div>
                                <div class=\"donut-label\">Visitors</div>
                            </div>
                        </div>
                        <div class=\"donut-legend\">
                            <div class=\"legend-item\"><span class=\"legend-color cyan\"></span><span>Organic Search (50%)</span></div>
                            <div class=\"legend-item\"><span class=\"legend-color magenta\"></span><span>Social Media (30%)</span></div>
                            <div class=\"legend-item\"><span class=\"legend-color purple\"></span><span>Direct Traffic (20%)</span></div>
                        </div>
                    </div>
                </div>

                <!-- Progress Card -->
                <div class=\"glass-card progress-card\">
                    <div class=\"card-header\">
                        <div>
                            <h2 class=\"card-title\">Project Progress</h2>
                            <p class=\"card-subtitle\">Current sprint status</p>
                        </div>
                    </div>
                    <div class=\"progress-item\">
                        <div class=\"progress-header\"><span class=\"progress-label\">UI Design</span><span class=\"progress-value\">85%</span></div>
                        <div class=\"progress-bar\"><div class=\"progress-fill cyan\" style=\"width: 85%;\"></div></div>
                    </div>
                    <div class=\"progress-item\">
                        <div class=\"progress-header\"><span class=\"progress-label\">Backend API</span><span class=\"progress-value\">62%</span></div>
                        <div class=\"progress-bar\"><div class=\"progress-fill magenta\" style=\"width: 62%;\"></div></div>
                    </div>
                    <div class=\"progress-item\">
                        <div class=\"progress-header\"><span class=\"progress-label\">Testing</span><span class=\"progress-value\">45%</span></div>
                        <div class=\"progress-bar\"><div class=\"progress-fill purple\" style=\"width: 45%;\"></div></div>
                    </div>
                    <div class=\"progress-item\">
                        <div class=\"progress-header\"><span class=\"progress-label\">Documentation</span><span class=\"progress-value\">28%</span></div>
                        <div class=\"progress-bar\"><div class=\"progress-fill cyan\" style=\"width: 28%;\"></div></div>
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
", "back/energie/dashboard.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\back\\energie\\dashboard.html.twig");
    }
}
