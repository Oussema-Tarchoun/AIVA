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

/* back/energie/recommandation.html.twig */
class __TwigTemplate_1c6468ee82da7685bcf5a2ae4481a872 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/energie/recommandation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/energie/recommandation.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Recommandations d'énergie - Dashboard</title>

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/templatemo-glass-admin-style.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/modal-energy.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
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
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Logo\" style=\"width: 50px; height: auto; margin-top: 12%;\">
        </div>
        <span class=\"logo-text\">AIVA</span>
    </div>

    <ul class=\"nav-menu\">

        ";
        // line 35
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Menu Principal</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\"
                       class=\"nav-link ";
        // line 40
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "request", [], "any", false, false, false, 40), "attributes", [], "any", false, false, false, 40), "get", ["_route"], "method", false, false, false, 40) == "dashboard")) {
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
        // line 51
        yield "              <span class=\"nav-section-title\">sports</span>

        <li class=\"nav-item\">
            <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_sport_index");
        yield "\"
               class=\"nav-link ";
        // line 55
        if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "request", [], "any", false, false, false, 55), "attributes", [], "any", false, false, false, 55), "get", ["_route"], "method", false, false, false, 55)) && is_string($_v1 = "back_sport_") && str_starts_with($_v0, $_v1))) {
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
        // line 66
        yield "        <li class=\"nav-item\">
            <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_index");
        yield "\"
               class=\"nav-link ";
        // line 68
        if ((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "request", [], "any", false, false, false, 68), "attributes", [], "any", false, false, false, 68), "get", ["_route"], "method", false, false, false, 68)) && is_string($_v3 = "app_objectif_") && str_starts_with($_v2, $_v3))) {
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
        // line 77
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Finance</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depense_index");
        yield "\"
                       class=\"nav-link ";
        // line 82
        if ((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "request", [], "any", false, false, false, 82), "attributes", [], "any", false, false, false, 82), "get", ["_route"], "method", false, false, false, 82)) && is_string($_v5 = "app_depense_") && str_starts_with($_v4, $_v5))) {
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
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index");
        yield "\"
                       class=\"nav-link ";
        // line 94
        if ((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "request", [], "any", false, false, false, 94), "attributes", [], "any", false, false, false, 94), "get", ["_route"], "method", false, false, false, 94)) && is_string($_v7 = "app_categorie_") && str_starts_with($_v6, $_v7))) {
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
        // line 108
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Énergies</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("energy");
        yield "\"
                       class=\"nav-link ";
        // line 113
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "request", [], "any", false, false, false, 113), "attributes", [], "any", false, false, false, 113), "get", ["_route"], "method", false, false, false, 113) == "energy")) {
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
        // line 122
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recommendations");
        yield "\"
                       class=\"nav-link ";
        // line 123
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 123, $this->source); })()), "request", [], "any", false, false, false, 123), "attributes", [], "any", false, false, false, 123), "get", ["_route"], "method", false, false, false, 123) == "recommendations")) {
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
        // line 134
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stateenergi");
        yield "\"
                       class=\"nav-link ";
        // line 135
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 135, $this->source); })()), "request", [], "any", false, false, false, 135), "attributes", [], "any", false, false, false, 135), "get", ["_route"], "method", false, false, false, 135) == "stateenergi")) {
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
        // line 147
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Alimentation</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 151
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_aliment_index");
        yield "\"
                       class=\"nav-link ";
        // line 152
        if ((is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 152, $this->source); })()), "request", [], "any", false, false, false, 152), "attributes", [], "any", false, false, false, 152), "get", ["_route"], "method", false, false, false, 152)) && is_string($_v9 = "app_aliment_") && str_starts_with($_v8, $_v9))) {
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
        // line 162
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_repas_index");
        yield "\"
                       class=\"nav-link ";
        // line 163
        if ((is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 163, $this->source); })()), "request", [], "any", false, false, false, 163), "attributes", [], "any", false, false, false, 163), "get", ["_route"], "method", false, false, false, 163)) && is_string($_v11 = "app_repas_") && str_starts_with($_v10, $_v11))) {
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
        // line 177
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Formation</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 181
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_index");
        yield "\"
                       class=\"nav-link ";
        // line 182
        if ((is_string($_v12 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 182, $this->source); })()), "request", [], "any", false, false, false, 182), "attributes", [], "any", false, false, false, 182), "get", ["_route"], "method", false, false, false, 182)) && is_string($_v13 = "app_cours_") && str_starts_with($_v12, $_v13))) {
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
        // line 192
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chapitre_index");
        yield "\"
                       class=\"nav-link ";
        // line 193
        if ((is_string($_v14 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 193, $this->source); })()), "request", [], "any", false, false, false, 193), "attributes", [], "any", false, false, false, 193), "get", ["_route"], "method", false, false, false, 193)) && is_string($_v15 = "app_chapitre_") && str_starts_with($_v14, $_v15))) {
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
        // line 209
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Compte</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 213
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\"
                       class=\"nav-link ";
        // line 214
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 214, $this->source); })()), "request", [], "any", false, false, false, 214), "attributes", [], "any", false, false, false, 214), "get", ["_route"], "method", false, false, false, 214) == "app_profile")) {
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
        // line 224
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\"
                       class=\"nav-link ";
        // line 225
        if ((is_string($_v16 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 225, $this->source); })()), "request", [], "any", false, false, false, 225), "attributes", [], "any", false, false, false, 225), "get", ["_route"], "method", false, false, false, 225)) && is_string($_v17 = "app_user_") && str_starts_with($_v16, $_v17))) {
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
        // line 237
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
            <h1 class=\"page-title\">Recommandations</h1>
            <div class=\"navbar-right\">
                <div class=\"search-box\">
                    <form method=\"get\" action=\"";
        // line 272
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recommendations");
        yield "\" class=\"search-form\">
                        <input type=\"text\" name=\"search\" value=\"";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 273, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Rechercher par titre...\" class=\"search-input\">
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
                        <h2 class=\"card-title\">Liste des recommandations</h2>
                        <p class=\"card-subtitle\">Gérez vos recommandations d'énergie</p>
                    </div>
                    <div class=\"card-actions\">
                        <button class=\"card-btn\" onclick=\"openModal('modalAddRecommendation')\">Ajouter</button>
                    </div>
                </div>

                <div class=\"table-wrapper\">
                    <table class=\"data-table\">
                        <thead>
                            <tr>
                                <th>
                                    <a href=\"";
        // line 311
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recommendations", ["sort" => "titre", "order" => (((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 311, $this->source); })()) == "titre") && ((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 311, $this->source); })()) == "ASC"))) ? ("DESC") : ("ASC")), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 311, $this->source); })())]), "html", null, true);
        yield "\">
                                        Titre ";
        // line 312
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 312, $this->source); })()) == "titre")) {
            yield ((((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 312, $this->source); })()) == "ASC")) ? ("▲") : ("▼"));
        }
        // line 313
        yield "                                    </a>
                                </th>
                                <th>Description</th>
                                <th>
                                    <a href=\"";
        // line 317
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recommendations", ["sort" => "niveauImpact", "order" => (((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 317, $this->source); })()) == "niveauImpact") && ((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 317, $this->source); })()) == "ASC"))) ? ("DESC") : ("ASC")), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 317, $this->source); })())]), "html", null, true);
        yield "\">
                                        Niveau Impact ";
        // line 318
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 318, $this->source); })()) == "niveauImpact")) {
            yield ((((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 318, $this->source); })()) == "ASC")) ? ("▲") : ("▼"));
        }
        // line 319
        yield "                                    </a>
                                </th>
                                <th>
                                    <a href=\"";
        // line 322
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recommendations", ["sort" => "dateGeneration", "order" => (((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 322, $this->source); })()) == "dateGeneration") && ((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 322, $this->source); })()) == "ASC"))) ? ("DESC") : ("ASC")), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 322, $this->source); })())]), "html", null, true);
        yield "\">
                                        Date ";
        // line 323
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 323, $this->source); })()) == "dateGeneration")) {
            yield ((((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 323, $this->source); })()) == "ASC")) ? ("▲") : ("▼"));
        }
        // line 324
        yield "                                    </a>
                                </th>
                                <th>NUM Énergie</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 331
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recommandations"]) || array_key_exists("recommandations", $context) ? $context["recommandations"] : (function () { throw new RuntimeError('Variable "recommandations" does not exist.', 331, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["rec"]) {
            // line 332
            yield "                            <tr>
                                <td>";
            // line 333
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "titre", [], "any", false, false, false, 333), "html", null, true);
            yield "</td>
                                <td>";
            // line 334
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "description", [], "any", false, false, false, 334), "html", null, true);
            yield "</td>
                                <td>";
            // line 335
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "niveauImpact", [], "any", false, false, false, 335), "html", null, true);
            yield "</td>
                                <td>";
            // line 336
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "dateGeneration", [], "any", false, false, false, 336)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "dateGeneration", [], "any", false, false, false, 336), "Y-m-d"), "html", null, true)) : ("N/A"));
            yield "</td>
                                <td>";
            // line 337
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "energie", [], "any", false, false, false, 337)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "energie", [], "any", false, false, false, 337), "id", [], "any", false, false, false, 337), "html", null, true)) : ("N/A"));
            yield "</td>
                                <td style=\"display:flex; gap:12px; justify-content:center;\">
                                    <a href=\"javascript:void(0)\" onclick=\"openModal('modalEdit";
            // line 339
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 339), "html", null, true);
            yield "')\" title=\"Modifier\" style=\"color:#4ade80;\">
                                        <i class=\"fa-solid fa-pen\"></i>
                                    </a>
                                    <form method=\"post\" action=\"";
            // line 342
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recommandation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 342)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Supprimer cette recommandation ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 343
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 343))), "html", null, true);
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
        // line 350
        if (!$context['_iterated']) {
            // line 351
            yield "                            <tr><td colspan=\"6\" style=\"text-align:center;\">Aucune recommandation trouvée.</td></tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['rec'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 353
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- MODAL ADD -->
        <div id=\"modalAddRecommendation\" class=\"modal-overlay\" ";
        // line 360
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["addErrors"]) || array_key_exists("addErrors", $context) ? $context["addErrors"] : (function () { throw new RuntimeError('Variable "addErrors" does not exist.', 360, $this->source); })())) > 0)) {
            yield " style=\"display:flex\"";
        } else {
            yield " style=\"display:none\"";
        }
        yield ">
            <div class=\"modal glass-card\">
                <div class=\"modal-header\">
                    <h3>Ajouter une recommandation</h3>
                    <button class=\"close-btn\" onclick=\"closeModal('modalAddRecommendation')\">✕</button>
                </div>
                <form method=\"post\" action=\"";
        // line 366
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recommendations");
        yield "\">
                    <div class=\"form-group\">
                        <label for=\"titre\">Titre *</label>
                        <input type=\"text\" name=\"titre\" id=\"titre\" value=\"";
        // line 369
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["oldAdd"] ?? null), "titre", [], "any", true, true, false, 369)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["oldAdd"]) || array_key_exists("oldAdd", $context) ? $context["oldAdd"] : (function () { throw new RuntimeError('Variable "oldAdd" does not exist.', 369, $this->source); })()), "titre", [], "any", false, false, false, 369), "")) : ("")), "html", null, true);
        yield "\">
                        ";
        // line 370
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["addErrors"] ?? null), "titre", [], "any", true, true, false, 370)) {
            yield "<span class=\"error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addErrors"]) || array_key_exists("addErrors", $context) ? $context["addErrors"] : (function () { throw new RuntimeError('Variable "addErrors" does not exist.', 370, $this->source); })()), "titre", [], "any", false, false, false, 370), "html", null, true);
            yield "</span>";
        }
        // line 371
        yield "                    </div>
                    <div class=\"form-group\">
                        <label for=\"description\">Description *</label>
                        <textarea name=\"description\" id=\"description\">";
        // line 374
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["oldAdd"] ?? null), "description", [], "any", true, true, false, 374)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["oldAdd"]) || array_key_exists("oldAdd", $context) ? $context["oldAdd"] : (function () { throw new RuntimeError('Variable "oldAdd" does not exist.', 374, $this->source); })()), "description", [], "any", false, false, false, 374), "")) : ("")), "html", null, true);
        yield "</textarea>
                        ";
        // line 375
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["addErrors"] ?? null), "description", [], "any", true, true, false, 375)) {
            yield "<span class=\"error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addErrors"]) || array_key_exists("addErrors", $context) ? $context["addErrors"] : (function () { throw new RuntimeError('Variable "addErrors" does not exist.', 375, $this->source); })()), "description", [], "any", false, false, false, 375), "html", null, true);
            yield "</span>";
        }
        // line 376
        yield "                    </div>
                    <div class=\"form-group\">
                        <label for=\"niveau_impact\">Niveau d'impact *</label>
                        <input type=\"text\" name=\"niveau_impact\" id=\"niveau_impact\" value=\"";
        // line 379
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["oldAdd"] ?? null), "niveauImpact", [], "any", true, true, false, 379)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["oldAdd"]) || array_key_exists("oldAdd", $context) ? $context["oldAdd"] : (function () { throw new RuntimeError('Variable "oldAdd" does not exist.', 379, $this->source); })()), "niveauImpact", [], "any", false, false, false, 379), "")) : ("")), "html", null, true);
        yield "\">
                        ";
        // line 380
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["addErrors"] ?? null), "niveauImpact", [], "any", true, true, false, 380)) {
            yield "<span class=\"error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addErrors"]) || array_key_exists("addErrors", $context) ? $context["addErrors"] : (function () { throw new RuntimeError('Variable "addErrors" does not exist.', 380, $this->source); })()), "niveauImpact", [], "any", false, false, false, 380), "html", null, true);
            yield "</span>";
        }
        // line 381
        yield "                    </div>
                    <div class=\"form-group\">
                        <label for=\"date_generation\">Date de génération *</label>
                        <input type=\"date\" name=\"date_generation\" id=\"date_generation\" value=\"";
        // line 384
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["oldAdd"] ?? null), "dateGeneration", [], "any", true, true, false, 384)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["oldAdd"]) || array_key_exists("oldAdd", $context) ? $context["oldAdd"] : (function () { throw new RuntimeError('Variable "oldAdd" does not exist.', 384, $this->source); })()), "dateGeneration", [], "any", false, false, false, 384), "")) : ("")), "html", null, true);
        yield "\">
                        ";
        // line 385
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["addErrors"] ?? null), "dateGeneration", [], "any", true, true, false, 385)) {
            yield "<span class=\"error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addErrors"]) || array_key_exists("addErrors", $context) ? $context["addErrors"] : (function () { throw new RuntimeError('Variable "addErrors" does not exist.', 385, $this->source); })()), "dateGeneration", [], "any", false, false, false, 385), "html", null, true);
            yield "</span>";
        }
        // line 386
        yield "                    </div>
                    <div class=\"form-group\">
                        <label for=\"energie\">NUM Énergie *</label>
                        <select name=\"energie\">
                            <option value=\"\">Sélectionner</option>
                            ";
        // line 391
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["energies"]) || array_key_exists("energies", $context) ? $context["energies"] : (function () { throw new RuntimeError('Variable "energies" does not exist.', 391, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 392
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 392), "html", null, true);
            yield "\" ";
            if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["oldAdd"] ?? null), "energie", [], "any", true, true, false, 392)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["oldAdd"]) || array_key_exists("oldAdd", $context) ? $context["oldAdd"] : (function () { throw new RuntimeError('Variable "oldAdd" does not exist.', 392, $this->source); })()), "energie", [], "any", false, false, false, 392), "")) : ("")) == CoreExtension::getAttribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 392))) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 392), "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['e'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 394
        yield "                        </select>
                        ";
        // line 395
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["addErrors"] ?? null), "energie", [], "any", true, true, false, 395)) {
            yield "<span class=\"error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addErrors"]) || array_key_exists("addErrors", $context) ? $context["addErrors"] : (function () { throw new RuntimeError('Variable "addErrors" does not exist.', 395, $this->source); })()), "energie", [], "any", false, false, false, 395), "html", null, true);
            yield "</span>";
        }
        // line 396
        yield "                    </div>
                    <div style=\"text-align:right; margin-top:15px;\">
                        <button type=\"submit\" class=\"card-btn\">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- MODAL EDIT -->
        ";
        // line 405
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recommandations"]) || array_key_exists("recommandations", $context) ? $context["recommandations"] : (function () { throw new RuntimeError('Variable "recommandations" does not exist.', 405, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rec"]) {
            // line 406
            yield "        <div id=\"modalEdit";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 406), "html", null, true);
            yield "\" class=\"modal-overlay\" ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["editErrors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 406), [], "array", true, true, false, 406)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editErrors"]) || array_key_exists("editErrors", $context) ? $context["editErrors"] : (function () { throw new RuntimeError('Variable "editErrors" does not exist.', 406, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 406), [], "array", false, false, false, 406), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " style=\"display:flex\"";
            } else {
                yield " style=\"display:none\"";
            }
            yield ">
            <div class=\"modal glass-card\">
                <div class=\"modal-header\">
                    <h3>Modifier la recommandation #";
            // line 409
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 409), "html", null, true);
            yield "</h3>
                    <button class=\"close-btn\" onclick=\"closeModal('modalEdit";
            // line 410
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 410), "html", null, true);
            yield "')\">✕</button>
                </div>
                <form method=\"post\" action=\"";
            // line 412
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recommendations");
            yield "\">
                    <input type=\"hidden\" name=\"edit_recommandation\" value=\"1\">
                    <input type=\"hidden\" name=\"id_recommandation\" value=\"";
            // line 414
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 414), "html", null, true);
            yield "\">
                    <div class=\"form-group\">
                        <label for=\"titre_";
            // line 416
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 416), "html", null, true);
            yield "\">Titre *</label>
                        <input type=\"text\" name=\"titre\" id=\"titre_";
            // line 417
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 417), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["editOld"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 417), [], "array", false, true, false, 417), "titre", [], "any", true, true, false, 417)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editOld"]) || array_key_exists("editOld", $context) ? $context["editOld"] : (function () { throw new RuntimeError('Variable "editOld" does not exist.', 417, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 417), [], "array", false, false, false, 417), "titre", [], "any", false, false, false, 417), CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "titre", [], "any", false, false, false, 417))) : (CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "titre", [], "any", false, false, false, 417))), "html", null, true);
            yield "\">
                        ";
            // line 418
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["editErrors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 418), [], "array", false, true, false, 418), "titre", [], "any", true, true, false, 418)) {
                yield "<span class=\"error\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editErrors"]) || array_key_exists("editErrors", $context) ? $context["editErrors"] : (function () { throw new RuntimeError('Variable "editErrors" does not exist.', 418, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 418), [], "array", false, false, false, 418), "titre", [], "any", false, false, false, 418), "html", null, true);
                yield "</span>";
            }
            // line 419
            yield "                    </div>
                    <div class=\"form-group\">
                        <label for=\"description_";
            // line 421
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 421), "html", null, true);
            yield "\">Description *</label>
                        <textarea name=\"description\" id=\"description_";
            // line 422
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 422), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["editOld"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 422), [], "array", false, true, false, 422), "description", [], "any", true, true, false, 422)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editOld"]) || array_key_exists("editOld", $context) ? $context["editOld"] : (function () { throw new RuntimeError('Variable "editOld" does not exist.', 422, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 422), [], "array", false, false, false, 422), "description", [], "any", false, false, false, 422), CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "description", [], "any", false, false, false, 422))) : (CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "description", [], "any", false, false, false, 422))), "html", null, true);
            yield "</textarea>
                        ";
            // line 423
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["editErrors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 423), [], "array", false, true, false, 423), "description", [], "any", true, true, false, 423)) {
                yield "<span class=\"error\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editErrors"]) || array_key_exists("editErrors", $context) ? $context["editErrors"] : (function () { throw new RuntimeError('Variable "editErrors" does not exist.', 423, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 423), [], "array", false, false, false, 423), "description", [], "any", false, false, false, 423), "html", null, true);
                yield "</span>";
            }
            // line 424
            yield "                    </div>
                    <div class=\"form-group\">
                        <label for=\"niveau_impact_";
            // line 426
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 426), "html", null, true);
            yield "\">Niveau d'impact *</label>
                        <input type=\"text\" name=\"niveau_impact\" id=\"niveau_impact_";
            // line 427
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 427), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["editOld"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 427), [], "array", false, true, false, 427), "niveauImpact", [], "any", true, true, false, 427)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editOld"]) || array_key_exists("editOld", $context) ? $context["editOld"] : (function () { throw new RuntimeError('Variable "editOld" does not exist.', 427, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 427), [], "array", false, false, false, 427), "niveauImpact", [], "any", false, false, false, 427), CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "niveauImpact", [], "any", false, false, false, 427))) : (CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "niveauImpact", [], "any", false, false, false, 427))), "html", null, true);
            yield "\">
                        ";
            // line 428
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["editErrors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 428), [], "array", false, true, false, 428), "niveauImpact", [], "any", true, true, false, 428)) {
                yield "<span class=\"error\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editErrors"]) || array_key_exists("editErrors", $context) ? $context["editErrors"] : (function () { throw new RuntimeError('Variable "editErrors" does not exist.', 428, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 428), [], "array", false, false, false, 428), "niveauImpact", [], "any", false, false, false, 428), "html", null, true);
                yield "</span>";
            }
            // line 429
            yield "                    </div>
                    <div class=\"form-group\">
                        <label for=\"date_generation_";
            // line 431
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 431), "html", null, true);
            yield "\">Date de génération *</label>
                        <input type=\"date\" name=\"date_generation\" id=\"date_generation_";
            // line 432
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 432), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["editOld"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 432), [], "array", false, true, false, 432), "dateGeneration", [], "any", true, true, false, 432)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editOld"]) || array_key_exists("editOld", $context) ? $context["editOld"] : (function () { throw new RuntimeError('Variable "editOld" does not exist.', 432, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 432), [], "array", false, false, false, 432), "dateGeneration", [], "any", false, false, false, 432), (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "dateGeneration", [], "any", false, false, false, 432)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "dateGeneration", [], "any", false, false, false, 432), "Y-m-d")) : ("")))) : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "dateGeneration", [], "any", false, false, false, 432)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "dateGeneration", [], "any", false, false, false, 432), "Y-m-d")) : ("")))), "html", null, true);
            yield "\">
                        ";
            // line 433
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["editErrors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 433), [], "array", false, true, false, 433), "dateGeneration", [], "any", true, true, false, 433)) {
                yield "<span class=\"error\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editErrors"]) || array_key_exists("editErrors", $context) ? $context["editErrors"] : (function () { throw new RuntimeError('Variable "editErrors" does not exist.', 433, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 433), [], "array", false, false, false, 433), "dateGeneration", [], "any", false, false, false, 433), "html", null, true);
                yield "</span>";
            }
            // line 434
            yield "                    </div>
                    <div class=\"form-group\">
                        <label for=\"energie_";
            // line 436
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 436), "html", null, true);
            yield "\">NUM Énergie *</label>
                        <select name=\"energie\" id=\"energie_";
            // line 437
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 437), "html", null, true);
            yield "\">
                            <option value=\"\">Sélectionner</option>
                            ";
            // line 439
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["energies"]) || array_key_exists("energies", $context) ? $context["energies"] : (function () { throw new RuntimeError('Variable "energies" does not exist.', 439, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 440
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 440), "html", null, true);
                yield "\" ";
                if (((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["editOld"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 440), [], "array", false, true, false, 440), "energie", [], "any", true, true, false, 440)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editOld"]) || array_key_exists("editOld", $context) ? $context["editOld"] : (function () { throw new RuntimeError('Variable "editOld" does not exist.', 440, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 440), [], "array", false, false, false, 440), "energie", [], "any", false, false, false, 440), "")) : ("")) == CoreExtension::getAttribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 440)) || (CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "energie", [], "any", false, false, false, 440) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "energie", [], "any", false, false, false, 440), "id", [], "any", false, false, false, 440) == CoreExtension::getAttribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 440))))) {
                    yield "selected";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 440), "html", null, true);
                yield "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['e'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 442
            yield "                        </select>
                        ";
            // line 443
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["editErrors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 443), [], "array", false, true, false, 443), "energie", [], "any", true, true, false, 443)) {
                yield "<span class=\"error\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editErrors"]) || array_key_exists("editErrors", $context) ? $context["editErrors"] : (function () { throw new RuntimeError('Variable "editErrors" does not exist.', 443, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 443), [], "array", false, false, false, 443), "energie", [], "any", false, false, false, 443), "html", null, true);
                yield "</span>";
            }
            // line 444
            yield "                    </div>
                    <div style=\"text-align:right; margin-top:15px;\">
                        <button type=\"submit\" class=\"card-btn\">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['rec'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 452
        yield "    </main>
</div>

<script>
function openModal(id) {
    const modal = document.getElementById(id);
    if(modal) modal.style.display = 'flex';
}

function closeModal(id) {
    const modal = document.getElementById(id);
    if(modal) modal.style.display = 'none';
}
</script>

<script src=\"";
        // line 467
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
        return "back/energie/recommandation.html.twig";
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
        return array (  917 => 467,  900 => 452,  887 => 444,  881 => 443,  878 => 442,  863 => 440,  859 => 439,  854 => 437,  850 => 436,  846 => 434,  840 => 433,  834 => 432,  830 => 431,  826 => 429,  820 => 428,  814 => 427,  810 => 426,  806 => 424,  800 => 423,  794 => 422,  790 => 421,  786 => 419,  780 => 418,  774 => 417,  770 => 416,  765 => 414,  760 => 412,  755 => 410,  751 => 409,  738 => 406,  734 => 405,  723 => 396,  717 => 395,  714 => 394,  699 => 392,  695 => 391,  688 => 386,  682 => 385,  678 => 384,  673 => 381,  667 => 380,  663 => 379,  658 => 376,  652 => 375,  648 => 374,  643 => 371,  637 => 370,  633 => 369,  627 => 366,  614 => 360,  605 => 353,  598 => 351,  596 => 350,  584 => 343,  580 => 342,  574 => 339,  569 => 337,  565 => 336,  561 => 335,  557 => 334,  553 => 333,  550 => 332,  545 => 331,  536 => 324,  532 => 323,  528 => 322,  523 => 319,  519 => 318,  515 => 317,  509 => 313,  505 => 312,  501 => 311,  460 => 273,  456 => 272,  418 => 237,  401 => 225,  397 => 224,  382 => 214,  378 => 213,  372 => 209,  352 => 193,  348 => 192,  333 => 182,  329 => 181,  323 => 177,  305 => 163,  301 => 162,  286 => 152,  282 => 151,  276 => 147,  260 => 135,  256 => 134,  240 => 123,  236 => 122,  222 => 113,  218 => 112,  212 => 108,  194 => 94,  190 => 93,  174 => 82,  170 => 81,  164 => 77,  151 => 68,  147 => 67,  144 => 66,  129 => 55,  125 => 54,  120 => 51,  105 => 40,  101 => 39,  95 => 35,  85 => 27,  67 => 12,  63 => 11,  59 => 10,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Recommandations d'énergie - Dashboard</title>

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

    <!-- Main Content -->
    <main class=\"main-content\">
        <!-- Top Navbar -->
        <nav class=\"navbar\">
            <h1 class=\"page-title\">Recommandations</h1>
            <div class=\"navbar-right\">
                <div class=\"search-box\">
                    <form method=\"get\" action=\"{{ path('recommendations') }}\" class=\"search-form\">
                        <input type=\"text\" name=\"search\" value=\"{{ search }}\" placeholder=\"Rechercher par titre...\" class=\"search-input\">
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
                        <h2 class=\"card-title\">Liste des recommandations</h2>
                        <p class=\"card-subtitle\">Gérez vos recommandations d'énergie</p>
                    </div>
                    <div class=\"card-actions\">
                        <button class=\"card-btn\" onclick=\"openModal('modalAddRecommendation')\">Ajouter</button>
                    </div>
                </div>

                <div class=\"table-wrapper\">
                    <table class=\"data-table\">
                        <thead>
                            <tr>
                                <th>
                                    <a href=\"{{ path('recommendations', {sort:'titre', order: sort=='titre' and order=='ASC' ? 'DESC' : 'ASC', search:search}) }}\">
                                        Titre {% if sort=='titre' %}{{ order=='ASC' ? '▲' : '▼' }}{% endif %}
                                    </a>
                                </th>
                                <th>Description</th>
                                <th>
                                    <a href=\"{{ path('recommendations', {sort:'niveauImpact', order: sort=='niveauImpact' and order=='ASC' ? 'DESC' : 'ASC', search:search}) }}\">
                                        Niveau Impact {% if sort=='niveauImpact' %}{{ order=='ASC' ? '▲' : '▼' }}{% endif %}
                                    </a>
                                </th>
                                <th>
                                    <a href=\"{{ path('recommendations', {sort:'dateGeneration', order: sort=='dateGeneration' and order=='ASC' ? 'DESC' : 'ASC', search:search}) }}\">
                                        Date {% if sort=='dateGeneration' %}{{ order=='ASC' ? '▲' : '▼' }}{% endif %}
                                    </a>
                                </th>
                                <th>NUM Énergie</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for rec in recommandations %}
                            <tr>
                                <td>{{ rec.titre }}</td>
                                <td>{{ rec.description }}</td>
                                <td>{{ rec.niveauImpact }}</td>
                                <td>{{ rec.dateGeneration ? rec.dateGeneration|date('Y-m-d') : 'N/A' }}</td>
                                <td>{{ rec.energie ? rec.energie.id : 'N/A' }}</td>
                                <td style=\"display:flex; gap:12px; justify-content:center;\">
                                    <a href=\"javascript:void(0)\" onclick=\"openModal('modalEdit{{ rec.id }}')\" title=\"Modifier\" style=\"color:#4ade80;\">
                                        <i class=\"fa-solid fa-pen\"></i>
                                    </a>
                                    <form method=\"post\" action=\"{{ path('app_recommandation_delete', {'id': rec.id}) }}\" onsubmit=\"return confirm('Supprimer cette recommandation ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ rec.id) }}\">
                                        <button type=\"submit\" style=\"background:none; border:none; color:#f87171; cursor:pointer;\">
                                            <i class=\"fa-solid fa-trash\"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            {% else %}
                            <tr><td colspan=\"6\" style=\"text-align:center;\">Aucune recommandation trouvée.</td></tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- MODAL ADD -->
        <div id=\"modalAddRecommendation\" class=\"modal-overlay\" {% if addErrors|length > 0 %} style=\"display:flex\"{% else %} style=\"display:none\"{% endif %}>
            <div class=\"modal glass-card\">
                <div class=\"modal-header\">
                    <h3>Ajouter une recommandation</h3>
                    <button class=\"close-btn\" onclick=\"closeModal('modalAddRecommendation')\">✕</button>
                </div>
                <form method=\"post\" action=\"{{ path('recommendations') }}\">
                    <div class=\"form-group\">
                        <label for=\"titre\">Titre *</label>
                        <input type=\"text\" name=\"titre\" id=\"titre\" value=\"{{ oldAdd.titre|default('') }}\">
                        {% if addErrors.titre is defined %}<span class=\"error\">{{ addErrors.titre }}</span>{% endif %}
                    </div>
                    <div class=\"form-group\">
                        <label for=\"description\">Description *</label>
                        <textarea name=\"description\" id=\"description\">{{ oldAdd.description|default('') }}</textarea>
                        {% if addErrors.description is defined %}<span class=\"error\">{{ addErrors.description }}</span>{% endif %}
                    </div>
                    <div class=\"form-group\">
                        <label for=\"niveau_impact\">Niveau d'impact *</label>
                        <input type=\"text\" name=\"niveau_impact\" id=\"niveau_impact\" value=\"{{ oldAdd.niveauImpact|default('') }}\">
                        {% if addErrors.niveauImpact is defined %}<span class=\"error\">{{ addErrors.niveauImpact }}</span>{% endif %}
                    </div>
                    <div class=\"form-group\">
                        <label for=\"date_generation\">Date de génération *</label>
                        <input type=\"date\" name=\"date_generation\" id=\"date_generation\" value=\"{{ oldAdd.dateGeneration|default('') }}\">
                        {% if addErrors.dateGeneration is defined %}<span class=\"error\">{{ addErrors.dateGeneration }}</span>{% endif %}
                    </div>
                    <div class=\"form-group\">
                        <label for=\"energie\">NUM Énergie *</label>
                        <select name=\"energie\">
                            <option value=\"\">Sélectionner</option>
                            {% for e in energies %}
                            <option value=\"{{ e.id }}\" {% if oldAdd.energie|default('') == e.id %}selected{% endif %}>{{ e.id }}</option>
                            {% endfor %}
                        </select>
                        {% if addErrors.energie is defined %}<span class=\"error\">{{ addErrors.energie }}</span>{% endif %}
                    </div>
                    <div style=\"text-align:right; margin-top:15px;\">
                        <button type=\"submit\" class=\"card-btn\">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- MODAL EDIT -->
        {% for rec in recommandations %}
        <div id=\"modalEdit{{ rec.id }}\" class=\"modal-overlay\" {% if editErrors[rec.id]|default(false) %} style=\"display:flex\"{% else %} style=\"display:none\"{% endif %}>
            <div class=\"modal glass-card\">
                <div class=\"modal-header\">
                    <h3>Modifier la recommandation #{{ rec.id }}</h3>
                    <button class=\"close-btn\" onclick=\"closeModal('modalEdit{{ rec.id }}')\">✕</button>
                </div>
                <form method=\"post\" action=\"{{ path('recommendations') }}\">
                    <input type=\"hidden\" name=\"edit_recommandation\" value=\"1\">
                    <input type=\"hidden\" name=\"id_recommandation\" value=\"{{ rec.id }}\">
                    <div class=\"form-group\">
                        <label for=\"titre_{{ rec.id }}\">Titre *</label>
                        <input type=\"text\" name=\"titre\" id=\"titre_{{ rec.id }}\" value=\"{{ editOld[rec.id].titre|default(rec.titre) }}\">
                        {% if editErrors[rec.id].titre is defined %}<span class=\"error\">{{ editErrors[rec.id].titre }}</span>{% endif %}
                    </div>
                    <div class=\"form-group\">
                        <label for=\"description_{{ rec.id }}\">Description *</label>
                        <textarea name=\"description\" id=\"description_{{ rec.id }}\">{{ editOld[rec.id].description|default(rec.description) }}</textarea>
                        {% if editErrors[rec.id].description is defined %}<span class=\"error\">{{ editErrors[rec.id].description }}</span>{% endif %}
                    </div>
                    <div class=\"form-group\">
                        <label for=\"niveau_impact_{{ rec.id }}\">Niveau d'impact *</label>
                        <input type=\"text\" name=\"niveau_impact\" id=\"niveau_impact_{{ rec.id }}\" value=\"{{ editOld[rec.id].niveauImpact|default(rec.niveauImpact) }}\">
                        {% if editErrors[rec.id].niveauImpact is defined %}<span class=\"error\">{{ editErrors[rec.id].niveauImpact }}</span>{% endif %}
                    </div>
                    <div class=\"form-group\">
                        <label for=\"date_generation_{{ rec.id }}\">Date de génération *</label>
                        <input type=\"date\" name=\"date_generation\" id=\"date_generation_{{ rec.id }}\" value=\"{{ editOld[rec.id].dateGeneration|default(rec.dateGeneration ? rec.dateGeneration|date('Y-m-d') : '') }}\">
                        {% if editErrors[rec.id].dateGeneration is defined %}<span class=\"error\">{{ editErrors[rec.id].dateGeneration }}</span>{% endif %}
                    </div>
                    <div class=\"form-group\">
                        <label for=\"energie_{{ rec.id }}\">NUM Énergie *</label>
                        <select name=\"energie\" id=\"energie_{{ rec.id }}\">
                            <option value=\"\">Sélectionner</option>
                            {% for e in energies %}
                            <option value=\"{{ e.id }}\" {% if editOld[rec.id].energie|default('') == e.id or (rec.energie and rec.energie.id == e.id) %}selected{% endif %}>{{ e.id }}</option>
                            {% endfor %}
                        </select>
                        {% if editErrors[rec.id].energie is defined %}<span class=\"error\">{{ editErrors[rec.id].energie }}</span>{% endif %}
                    </div>
                    <div style=\"text-align:right; margin-top:15px;\">
                        <button type=\"submit\" class=\"card-btn\">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
        {% endfor %}
    </main>
</div>

<script>
function openModal(id) {
    const modal = document.getElementById(id);
    if(modal) modal.style.display = 'flex';
}

function closeModal(id) {
    const modal = document.getElementById(id);
    if(modal) modal.style.display = 'none';
}
</script>

<script src=\"{{ asset('js/templatemo-glass-admin-script.js') }}\"></script>
</body>
</html>", "back/energie/recommandation.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\back\\energie\\recommandation.html.twig");
    }
}
