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

/* back/aliment/show.html.twig */
class __TwigTemplate_198f24fd0310825e7014c7b77ecb70a7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/aliment/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/aliment/show.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["aliment"]) || array_key_exists("aliment", $context) ? $context["aliment"] : (function () { throw new RuntimeError('Variable "aliment" does not exist.', 7, $this->source); })()), "nom", [], "any", false, false, false, 7), "html", null, true);
        yield " - Dashboard</title>

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">

    ";
        // line 13
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/templatemo-glass-admin-style.css"), "html", null, true);
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

    ";
        // line 28
        yield "    <aside class=\"sidebar\" id=\"sidebar\">
        <div class=\"sidebar-header\">
            <div class=\"logo\">
                <img src=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Logo\" style=\"width: 50px; height: auto; margin-top: 12%;\">
            </div>
            <span class=\"logo-text\">AIVA</span>
        </div>

        <ul class=\"nav-menu\">
            ";
        // line 38
        yield "            <li class=\"nav-section\">
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
        // line 55
        yield "            <span class=\"nav-section-title\">sports</span>
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

            <li class=\"nav-item\">
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
        // line 80
        yield "            <li class=\"nav-section\">
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
        yield "            <li class=\"nav-section\">
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
        yield "            <li class=\"nav-section\">
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
        yield "            <li class=\"nav-section\">
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
        yield "            <li class=\"nav-section\">
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

    ";
        // line 268
        yield "    <main class=\"main-content\">

        <nav class=\"navbar\">
            <h1 class=\"page-title\">";
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["aliment"]) || array_key_exists("aliment", $context) ? $context["aliment"] : (function () { throw new RuntimeError('Variable "aliment" does not exist.', 271, $this->source); })()), "nom", [], "any", false, false, false, 271), "html", null, true);
        yield "</h1>

            <div class=\"navbar-right\">
                <a href=\"";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_aliment_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["aliment"]) || array_key_exists("aliment", $context) ? $context["aliment"] : (function () { throw new RuntimeError('Variable "aliment" does not exist.', 274, $this->source); })()), "id", [], "any", false, false, false, 274)]), "html", null, true);
        yield "\" class=\"card-btn\" style=\"margin-right:10px;\">
                    <i class=\"fa-solid fa-pen\" style=\"margin-right:8px;\"></i>
                    Modifier
                </a>

                <a href=\"";
        // line 279
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_aliment_index");
        yield "\" class=\"card-btn\">
                    <i class=\"fa-solid fa-arrow-left\" style=\"margin-right:8px;\"></i>
                    Retour
                </a>

                <button class=\"nav-btn\" id=\"theme-toggle\" title=\"Toggle Light/Dark Mode\" style=\"margin-left:10px;\">
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
        // line 299
        $context["macro"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["aliment"]) || array_key_exists("aliment", $context) ? $context["aliment"] : (function () { throw new RuntimeError('Variable "aliment" does not exist.', 299, $this->source); })()), "macro", [], "any", false, false, false, 299);
        // line 300
        yield "
        <section class=\"content-grid\">

            ";
        // line 304
        yield "            <div class=\"glass-card\">
                <div style=\"padding: 20px;\">
                    <div style=\"display:flex; align-items:center; gap:14px; margin-bottom: 16px;\">
                        <div class=\"user-avatar\" style=\"width:56px;height:56px;border-radius:16px;display:flex;align-items:center;justify-content:center;\">
                            <i class=\"fa-solid fa-bowl-food\"></i>
                        </div>
                        <div>
                            <h2 class=\"card-title\" style=\"margin:0;\">";
        // line 311
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["aliment"]) || array_key_exists("aliment", $context) ? $context["aliment"] : (function () { throw new RuntimeError('Variable "aliment" does not exist.', 311, $this->source); })()), "nom", [], "any", false, false, false, 311), "html", null, true);
        yield "</h2>
                            <p class=\"card-subtitle\" style=\"margin:4px 0 0;\">Aliment</p>
                        </div>
                    </div>

                    <div style=\"margin-top: 16px; padding-top: 16px; border-top: 1px solid var(--glass-border); display:grid; gap:10px;\">
                        <div style=\"display:flex; justify-content:space-between;\">
                            <span style=\"color: var(--text-muted);\">Quantité</span>
                            <span style=\"font-weight:600; color: rgba(5, 150, 105, 0.9);\">";
        // line 319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["aliment"]) || array_key_exists("aliment", $context) ? $context["aliment"] : (function () { throw new RuntimeError('Variable "aliment" does not exist.', 319, $this->source); })()), "quantite", [], "any", false, false, false, 319), "html", null, true);
        yield "g</span>
                        </div>
                        <div style=\"display:flex; justify-content:space-between;\">
                            <span style=\"color: var(--text-muted);\">Utilisé dans</span>
                            <span style=\"font-weight:600;\">";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["aliment"]) || array_key_exists("aliment", $context) ? $context["aliment"] : (function () { throw new RuntimeError('Variable "aliment" does not exist.', 323, $this->source); })()), "repas", [], "any", false, false, false, 323)), "html", null, true);
        yield " repas</span>
                        </div>
                    </div>

                    <div style=\"margin-top: 18px;\">
                        ";
        // line 328
        yield Twig\Extension\CoreExtension::include($this->env, $context, "back/aliment/_delete_form.html.twig", ["button_label" => "Supprimer", "button_attr" => ["class" => "card-btn", "style" => "width:100%; justify-content:center; background: rgba(239, 68, 68, 0.12); color:#ef4444; border:1px solid rgba(239,68,68,0.35);"]]);
        // line 334
        yield "
                    </div>
                </div>
            </div>

            ";
        // line 340
        yield "            <div class=\"glass-card\">

                <div class=\"card-header\">
                    <div>
                        <h2 class=\"card-title\">Valeurs nutritionnelles</h2>
                        <p class=\"card-subtitle\">Pour ";
        // line 345
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["aliment"]) || array_key_exists("aliment", $context) ? $context["aliment"] : (function () { throw new RuntimeError('Variable "aliment" does not exist.', 345, $this->source); })()), "quantite", [], "any", false, false, false, 345), "html", null, true);
        yield "g</p>
                    </div>
                </div>

                <div style=\"padding: 0 20px 20px;\">
                    <div style=\"display:grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px; margin-bottom: 18px;\">
                        <div style=\"background: rgba(5, 150, 105, 0.10); border: 1px solid var(--glass-border); padding: 16px; border-radius: 14px;\">
                            <div style=\"font-size: 14px; color: var(--text-muted); margin-bottom: 6px;\">Protéines</div>
                            <div style=\"font-size: 26px; font-weight: 700; color: rgba(5, 150, 105, 0.9);\">
                                ";
        // line 354
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["macro"] ?? null), "proteine", [], "any", true, true, false, 354)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["macro"]) || array_key_exists("macro", $context) ? $context["macro"] : (function () { throw new RuntimeError('Variable "macro" does not exist.', 354, $this->source); })()), "proteine", [], "any", false, false, false, 354), "0")) : ("0")), "html", null, true);
        yield "g
                            </div>
                        </div>

                        <div style=\"background: rgba(212, 165, 116, 0.12); border: 1px solid var(--glass-border); padding: 16px; border-radius: 14px;\">
                            <div style=\"font-size: 14px; color: var(--text-muted); margin-bottom: 6px;\">Glucides</div>
                            <div style=\"font-size: 26px; font-weight: 700; color: rgba(212, 165, 116, 0.95);\">
                                ";
        // line 361
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["macro"] ?? null), "glucide", [], "any", true, true, false, 361)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["macro"]) || array_key_exists("macro", $context) ? $context["macro"] : (function () { throw new RuntimeError('Variable "macro" does not exist.', 361, $this->source); })()), "glucide", [], "any", false, false, false, 361), "0")) : ("0")), "html", null, true);
        yield "g
                            </div>
                        </div>

                        <div style=\"background: rgba(147, 51, 234, 0.12); border: 1px solid var(--glass-border); padding: 16px; border-radius: 14px;\">
                            <div style=\"font-size: 14px; color: var(--text-muted); margin-bottom: 6px;\">Lipides</div>
                            <div style=\"font-size: 26px; font-weight: 700; color: rgba(147, 51, 234, 0.95);\">
                                ";
        // line 368
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["macro"] ?? null), "lipide", [], "any", true, true, false, 368)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["macro"]) || array_key_exists("macro", $context) ? $context["macro"] : (function () { throw new RuntimeError('Variable "macro" does not exist.', 368, $this->source); })()), "lipide", [], "any", false, false, false, 368), "0")) : ("0")), "html", null, true);
        yield "g
                            </div>
                        </div>
                    </div>

                    ";
        // line 373
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["aliment"]) || array_key_exists("aliment", $context) ? $context["aliment"] : (function () { throw new RuntimeError('Variable "aliment" does not exist.', 373, $this->source); })()), "repas", [], "any", false, false, false, 373)) > 0)) {
            // line 374
            yield "                        <div style=\"margin-top: 6px;\">
                            <h3 class=\"card-title\" style=\"font-size: 18px; margin-bottom: 10px;\">
                                Utilisé dans les repas (";
            // line 376
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["aliment"]) || array_key_exists("aliment", $context) ? $context["aliment"] : (function () { throw new RuntimeError('Variable "aliment" does not exist.', 376, $this->source); })()), "repas", [], "any", false, false, false, 376)), "html", null, true);
            yield ")
                            </h3>

                            <div class=\"table-wrapper\">
                                <table class=\"data-table\">
                                    <thead>
                                    <tr>
                                        <th>Repas</th>
                                        <th>Type</th>
                                        <th>Heure</th>
                                        <th>Calories</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
            // line 391
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["aliment"]) || array_key_exists("aliment", $context) ? $context["aliment"] : (function () { throw new RuntimeError('Variable "aliment" does not exist.', 391, $this->source); })()), "repas", [], "any", false, false, false, 391));
            foreach ($context['_seq'] as $context["_key"] => $context["repas"]) {
                // line 392
                yield "                                        <tr>
                                            <td><strong>";
                // line 393
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["repas"], "nom", [], "any", false, false, false, 393), "html", null, true);
                yield "</strong></td>
                                            <td style=\"text-transform: capitalize;\">";
                // line 394
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["repas"], "type", [], "any", false, false, false, 394), ["-" => " "]), "html", null, true);
                yield "</td>
                                            <td>";
                // line 395
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["repas"], "heure", [], "any", false, false, false, 395)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["repas"], "heure", [], "any", false, false, false, 395), "H:i"), "html", null, true)) : ("N/A"));
                yield "</td>
                                            <td>";
                // line 396
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["repas"], "calories", [], "any", false, false, false, 396), "html", null, true);
                yield " kcal</td>
                                            <td style=\"text-align:center;\">
                                                <a href=\"";
                // line 398
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_repas_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["repas"], "id", [], "any", false, false, false, 398)]), "html", null, true);
                yield "\" style=\"color:#60a5fa;\">
                                                    <i class=\"fa-solid fa-eye\"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['repas'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 404
            yield "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    ";
        } else {
            // line 409
            yield "                        <div style=\"padding: 14px; margin-top: 12px; border: 1px dashed var(--glass-border); border-radius: 14px; text-align:center; color: var(--text-muted);\">
                            Cet aliment n'est utilisé dans aucun repas pour le moment.
                        </div>
                    ";
        }
        // line 413
        yield "                </div>

            </div>
        </section>

    </main>
</div>

<script src=\"";
        // line 421
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
        return "back/aliment/show.html.twig";
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
        return array (  673 => 421,  663 => 413,  657 => 409,  650 => 404,  638 => 398,  633 => 396,  629 => 395,  625 => 394,  621 => 393,  618 => 392,  614 => 391,  596 => 376,  592 => 374,  590 => 373,  582 => 368,  572 => 361,  562 => 354,  550 => 345,  543 => 340,  536 => 334,  534 => 328,  526 => 323,  519 => 319,  508 => 311,  499 => 304,  494 => 300,  492 => 299,  469 => 279,  461 => 274,  455 => 271,  450 => 268,  420 => 240,  403 => 228,  399 => 227,  384 => 217,  380 => 216,  374 => 212,  354 => 196,  350 => 195,  335 => 185,  331 => 184,  325 => 180,  307 => 166,  303 => 165,  288 => 155,  284 => 154,  278 => 150,  262 => 138,  258 => 137,  242 => 126,  238 => 125,  224 => 116,  220 => 115,  214 => 111,  196 => 97,  192 => 96,  176 => 85,  172 => 84,  166 => 80,  152 => 70,  148 => 69,  132 => 58,  128 => 57,  124 => 55,  108 => 43,  104 => 42,  98 => 38,  89 => 31,  84 => 28,  68 => 14,  63 => 13,  55 => 7,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/back/aliment/show.html.twig #}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{{ aliment.nom }} - Dashboard</title>

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">

    {# ✅ same style files used in energy #}
    <link rel=\"stylesheet\" href=\"{{ asset('css/templatemo-glass-admin-style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/serchbtn.css') }}\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">
</head>

<body>

<div class=\"background\"></div>
<div class=\"orb orb-1\"></div>
<div class=\"orb orb-2\"></div>
<div class=\"orb orb-3\"></div>

<div class=\"dashboard\">

    {# ===================== SIDEBAR (same as energy) ===================== #}
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

            {# Sports #}
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

            {# Finance #}
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

            {# Énergies #}
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

            {# ✅ Alimentation #}
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

    {# ===================== MAIN (same style as energy) ===================== #}
    <main class=\"main-content\">

        <nav class=\"navbar\">
            <h1 class=\"page-title\">{{ aliment.nom }}</h1>

            <div class=\"navbar-right\">
                <a href=\"{{ path('app_aliment_edit', {'id': aliment.id}) }}\" class=\"card-btn\" style=\"margin-right:10px;\">
                    <i class=\"fa-solid fa-pen\" style=\"margin-right:8px;\"></i>
                    Modifier
                </a>

                <a href=\"{{ path('app_aliment_index') }}\" class=\"card-btn\">
                    <i class=\"fa-solid fa-arrow-left\" style=\"margin-right:8px;\"></i>
                    Retour
                </a>

                <button class=\"nav-btn\" id=\"theme-toggle\" title=\"Toggle Light/Dark Mode\" style=\"margin-left:10px;\">
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

        {% set macro = aliment.macro %}

        <section class=\"content-grid\">

            {# LEFT CARD (profile/info) #}
            <div class=\"glass-card\">
                <div style=\"padding: 20px;\">
                    <div style=\"display:flex; align-items:center; gap:14px; margin-bottom: 16px;\">
                        <div class=\"user-avatar\" style=\"width:56px;height:56px;border-radius:16px;display:flex;align-items:center;justify-content:center;\">
                            <i class=\"fa-solid fa-bowl-food\"></i>
                        </div>
                        <div>
                            <h2 class=\"card-title\" style=\"margin:0;\">{{ aliment.nom }}</h2>
                            <p class=\"card-subtitle\" style=\"margin:4px 0 0;\">Aliment</p>
                        </div>
                    </div>

                    <div style=\"margin-top: 16px; padding-top: 16px; border-top: 1px solid var(--glass-border); display:grid; gap:10px;\">
                        <div style=\"display:flex; justify-content:space-between;\">
                            <span style=\"color: var(--text-muted);\">Quantité</span>
                            <span style=\"font-weight:600; color: rgba(5, 150, 105, 0.9);\">{{ aliment.quantite }}g</span>
                        </div>
                        <div style=\"display:flex; justify-content:space-between;\">
                            <span style=\"color: var(--text-muted);\">Utilisé dans</span>
                            <span style=\"font-weight:600;\">{{ aliment.repas|length }} repas</span>
                        </div>
                    </div>

                    <div style=\"margin-top: 18px;\">
                        {{ include('back/aliment/_delete_form.html.twig', {
                            button_label: 'Supprimer',
                            button_attr: {
                                class: 'card-btn',
                                style: 'width:100%; justify-content:center; background: rgba(239, 68, 68, 0.12); color:#ef4444; border:1px solid rgba(239,68,68,0.35);'
                            }
                        }) }}
                    </div>
                </div>
            </div>

            {# RIGHT CARD (details + meals table) #}
            <div class=\"glass-card\">

                <div class=\"card-header\">
                    <div>
                        <h2 class=\"card-title\">Valeurs nutritionnelles</h2>
                        <p class=\"card-subtitle\">Pour {{ aliment.quantite }}g</p>
                    </div>
                </div>

                <div style=\"padding: 0 20px 20px;\">
                    <div style=\"display:grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px; margin-bottom: 18px;\">
                        <div style=\"background: rgba(5, 150, 105, 0.10); border: 1px solid var(--glass-border); padding: 16px; border-radius: 14px;\">
                            <div style=\"font-size: 14px; color: var(--text-muted); margin-bottom: 6px;\">Protéines</div>
                            <div style=\"font-size: 26px; font-weight: 700; color: rgba(5, 150, 105, 0.9);\">
                                {{ macro.proteine|default('0') }}g
                            </div>
                        </div>

                        <div style=\"background: rgba(212, 165, 116, 0.12); border: 1px solid var(--glass-border); padding: 16px; border-radius: 14px;\">
                            <div style=\"font-size: 14px; color: var(--text-muted); margin-bottom: 6px;\">Glucides</div>
                            <div style=\"font-size: 26px; font-weight: 700; color: rgba(212, 165, 116, 0.95);\">
                                {{ macro.glucide|default('0') }}g
                            </div>
                        </div>

                        <div style=\"background: rgba(147, 51, 234, 0.12); border: 1px solid var(--glass-border); padding: 16px; border-radius: 14px;\">
                            <div style=\"font-size: 14px; color: var(--text-muted); margin-bottom: 6px;\">Lipides</div>
                            <div style=\"font-size: 26px; font-weight: 700; color: rgba(147, 51, 234, 0.95);\">
                                {{ macro.lipide|default('0') }}g
                            </div>
                        </div>
                    </div>

                    {% if aliment.repas|length > 0 %}
                        <div style=\"margin-top: 6px;\">
                            <h3 class=\"card-title\" style=\"font-size: 18px; margin-bottom: 10px;\">
                                Utilisé dans les repas ({{ aliment.repas|length }})
                            </h3>

                            <div class=\"table-wrapper\">
                                <table class=\"data-table\">
                                    <thead>
                                    <tr>
                                        <th>Repas</th>
                                        <th>Type</th>
                                        <th>Heure</th>
                                        <th>Calories</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for repas in aliment.repas %}
                                        <tr>
                                            <td><strong>{{ repas.nom }}</strong></td>
                                            <td style=\"text-transform: capitalize;\">{{ repas.type|replace({'-': ' '}) }}</td>
                                            <td>{{ repas.heure ? repas.heure|date('H:i') : 'N/A' }}</td>
                                            <td>{{ repas.calories }} kcal</td>
                                            <td style=\"text-align:center;\">
                                                <a href=\"{{ path('app_repas_show', {'id': repas.id}) }}\" style=\"color:#60a5fa;\">
                                                    <i class=\"fa-solid fa-eye\"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    {% else %}
                        <div style=\"padding: 14px; margin-top: 12px; border: 1px dashed var(--glass-border); border-radius: 14px; text-align:center; color: var(--text-muted);\">
                            Cet aliment n'est utilisé dans aucun repas pour le moment.
                        </div>
                    {% endif %}
                </div>

            </div>
        </section>

    </main>
</div>

<script src=\"{{ asset('js/templatemo-glass-admin-script.js') }}\"></script>
</body>
</html>
", "back/aliment/show.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\back\\aliment\\show.html.twig");
    }
}
