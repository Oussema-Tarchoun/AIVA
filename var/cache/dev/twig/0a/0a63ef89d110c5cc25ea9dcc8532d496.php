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

/* back/repas/show.html.twig */
class __TwigTemplate_35f0eb463a8c38fe27def12cb04535b9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/repas/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/repas/show.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 7, $this->source); })()), "nom", [], "any", false, false, false, 7), "html", null, true);
        yield " - Dashboard</title>

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/templatemo-glass-admin-style.css"), "html", null, true);
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

    ";
        // line 25
        yield "    <aside class=\"sidebar\" id=\"sidebar\">
        <div class=\"sidebar-header\">
            <div class=\"logo\">
                <img src=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Logo\" style=\"width:50px;height:auto;margin-top:12%;\">
            </div>
            <span class=\"logo-text\">AIVA</span>
        </div>

        <ul class=\"nav-menu\">
            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Menu Principal</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\" class=\"nav-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "attributes", [], "any", false, false, false, 38), "get", ["_route"], "method", false, false, false, 38) == "dashboard")) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M3 12l9-9 9 9\"/><path d=\"M9 21V9h6v12\"/></svg>
                            Tableau de bord
                        </a>
                    </li>
                </ul>
            </li>
            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Sports</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_sport_index");
        yield "\" class=\"nav-link ";
        if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "request", [], "any", false, false, false, 49), "attributes", [], "any", false, false, false, 49), "get", ["_route"], "method", false, false, false, 49)) && is_string($_v1 = "back_sport_") && str_starts_with($_v0, $_v1))) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M7 7h10\"/><path d=\"M7 12h10\"/><path d=\"M7 17h10\"/></svg>
                            Activités
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_index");
        yield "\" class=\"nav-link ";
        if ((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "request", [], "any", false, false, false, 55), "attributes", [], "any", false, false, false, 55), "get", ["_route"], "method", false, false, false, 55)) && is_string($_v3 = "app_objectif_") && str_starts_with($_v2, $_v3))) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><circle cx=\"12\" cy=\"12\" r=\"9\"/><path d=\"M12 7v5l3 3\"/></svg>
                            Objectifs
                        </a>
                    </li>
                </ul>
            </li>
            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Finance</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depense_index");
        yield "\" class=\"nav-link ";
        if ((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "request", [], "any", false, false, false, 66), "attributes", [], "any", false, false, false, 66), "get", ["_route"], "method", false, false, false, 66)) && is_string($_v5 = "app_depense_") && str_starts_with($_v4, $_v5))) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M6 3h12v4H6z\"/><path d=\"M4 9h16v4H4z\"/><path d=\"M6 15h12v4H6z\"/></svg>
                            Dépenses
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index");
        yield "\" class=\"nav-link ";
        if ((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "request", [], "any", false, false, false, 72), "attributes", [], "any", false, false, false, 72), "get", ["_route"], "method", false, false, false, 72)) && is_string($_v7 = "app_categorie_") && str_starts_with($_v6, $_v7))) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><rect x=\"3\" y=\"3\" width=\"7\" height=\"7\" rx=\"1\"/><rect x=\"14\" y=\"3\" width=\"7\" height=\"7\" rx=\"1\"/><rect x=\"3\" y=\"14\" width=\"7\" height=\"7\" rx=\"1\"/><rect x=\"14\" y=\"14\" width=\"7\" height=\"7\" rx=\"1\"/></svg>
                            Catégories
                        </a>
                    </li>
                </ul>
            </li>
            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Énergies</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("energy");
        yield "\" class=\"nav-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "request", [], "any", false, false, false, 83), "attributes", [], "any", false, false, false, 83), "get", ["_route"], "method", false, false, false, 83) == "energy")) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M13 2L3 14h7l-1 8 10-12h-7z\"/></svg>
                            Consommation d'énergie
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recommendations");
        yield "\" class=\"nav-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "request", [], "any", false, false, false, 89), "attributes", [], "any", false, false, false, 89), "get", ["_route"], "method", false, false, false, 89) == "recommendations")) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M9 18h6\"/><path d=\"M10 22h4\"/><path d=\"M12 2a7 7 0 0 0-4 12c.6.6 1 1.5 1 2h6c0-.5.4-1.4 1-2a7 7 0 0 0-4-12z\"/></svg>
                            Recommandations
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stateenergi");
        yield "\" class=\"nav-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "request", [], "any", false, false, false, 95), "attributes", [], "any", false, false, false, 95), "get", ["_route"], "method", false, false, false, 95) == "stateenergi")) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M3 3v18h18\"/><path d=\"M7 14l3-3 4 4 5-7\"/></svg>
                            Statistiques d'énergie
                        </a>
                    </li>
                </ul>
            </li>
            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Alimentation</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_aliment_index");
        yield "\" class=\"nav-link ";
        if ((is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "request", [], "any", false, false, false, 106), "attributes", [], "any", false, false, false, 106), "get", ["_route"], "method", false, false, false, 106)) && is_string($_v9 = "app_aliment_") && str_starts_with($_v8, $_v9))) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M12 3c-3 2-5 5-5 8a5 5 0 0 0 10 0c0-3-2-6-5-8z\"/><path d=\"M12 14v7\"/></svg>
                            Aliments
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_repas_index");
        yield "\" class=\"nav-link ";
        if ((is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "request", [], "any", false, false, false, 112), "attributes", [], "any", false, false, false, 112), "get", ["_route"], "method", false, false, false, 112)) && is_string($_v11 = "app_repas_") && str_starts_with($_v10, $_v11))) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M4 3v7a4 4 0 0 0 4 4v7\"/><path d=\"M8 3v8\"/><path d=\"M14 3v18\"/><path d=\"M20 3v7a4 4 0 0 1-4 4\"/></svg>
                            Repas
                        </a>
                    </li>
                </ul>
            </li>
            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Formation</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_index");
        yield "\" class=\"nav-link ";
        if ((is_string($_v12 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 123, $this->source); })()), "request", [], "any", false, false, false, 123), "attributes", [], "any", false, false, false, 123), "get", ["_route"], "method", false, false, false, 123)) && is_string($_v13 = "app_cours_") && str_starts_with($_v12, $_v13))) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M4 19a2 2 0 0 0 2 2h12\"/><path d=\"M6 17V5a2 2 0 0 1 2-2h10v14H8a2 2 0 0 0-2 2z\"/></svg>
                            Cours
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 129
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chapitre_index");
        yield "\" class=\"nav-link ";
        if ((is_string($_v14 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 129, $this->source); })()), "request", [], "any", false, false, false, 129), "attributes", [], "any", false, false, false, 129), "get", ["_route"], "method", false, false, false, 129)) && is_string($_v15 = "app_chapitre_") && str_starts_with($_v14, $_v15))) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M8 6h13\"/><path d=\"M8 12h13\"/><path d=\"M8 18h13\"/><path d=\"M3 6h.01\"/><path d=\"M3 12h.01\"/><path d=\"M3 18h.01\"/></svg>
                            Chapitres
                        </a>
                    </li>
                </ul>
            </li>
            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Compte</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 140
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\" class=\"nav-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "request", [], "any", false, false, false, 140), "attributes", [], "any", false, false, false, 140), "get", ["_route"], "method", false, false, false, 140) == "app_profile")) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M20 21a8 8 0 0 0-16 0\"/><circle cx=\"12\" cy=\"7\" r=\"4\"/></svg>
                            Profil
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 146
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"nav-link ";
        if ((is_string($_v16 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 146, $this->source); })()), "request", [], "any", false, false, false, 146), "attributes", [], "any", false, false, false, 146), "get", ["_route"], "method", false, false, false, 146)) && is_string($_v17 = "app_user_") && str_starts_with($_v16, $_v17))) {
            yield "active";
        }
        yield "\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"/><circle cx=\"9\" cy=\"7\" r=\"4\"/><path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"/><path d=\"M16 3.13a4 4 0 0 1 0 7.75\"/></svg>
                            Users
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 152
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"nav-link\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"/><polyline points=\"16 17 21 12 16 7\"/><line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"/></svg>
                            Déconnexion
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class=\"sidebar-footer\">
            <div class=\"user-profile\">
                <div class=\"user-avatar\">AD</div>
                <div class=\"user-info\">
                    <div class=\"user-name\">Admin</div>
                    <div class=\"user-role\">Administrator</div>
                </div>
            </div>
        </div>
    </aside>

    ";
        // line 173
        yield "    <main class=\"main-content\">

        <nav class=\"navbar\">
            <h1 class=\"page-title\">
                <i class=\"fa-solid fa-utensils\" style=\"margin-right:10px;color:#059669;\"></i>
                ";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 178, $this->source); })()), "nom", [], "any", false, false, false, 178), "html", null, true);
        yield "
            </h1>
            <div class=\"navbar-right\">
                <a href=\"";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_repas_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 181, $this->source); })()), "id", [], "any", false, false, false, 181)]), "html", null, true);
        yield "\" class=\"card-btn\">
                    <i class=\"fa-solid fa-pen\" style=\"margin-right:8px;\"></i>Modifier
                </a>
                <a href=\"";
        // line 184
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_repas_index");
        yield "\" class=\"card-btn\" style=\"margin-left:10px;\">
                    <i class=\"fa-solid fa-arrow-left\" style=\"margin-right:8px;\"></i>Retour
                </a>
                <button class=\"nav-btn\" id=\"theme-toggle\" title=\"Toggle Light/Dark Mode\" style=\"margin-left:10px;\">
                    <svg class=\"icon-sun\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <circle cx=\"12\" cy=\"12\" r=\"4\"/>
                        <path d=\"M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41\"/>
                    </svg>
                    <svg class=\"icon-moon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" style=\"display:none;\">
                        <path d=\"M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z\"/>
                    </svg>
                </button>
            </div>
        </nav>

        <section class=\"content-grid\">
            <div class=\"settings-grid\">

                ";
        // line 203
        yield "                <div class=\"glass-card settings-nav-card\">
                    <div style=\"padding:24px;\">

                        ";
        // line 207
        yield "                        <div style=\"width:90px;height:90px;border-radius:50%;background:rgba(5,150,105,.15);border:2px solid rgba(5,150,105,.4);display:flex;align-items:center;justify-content:center;margin:0 auto 20px;\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#059669\" stroke-width=\"2\" style=\"width:44px;height:44px;\">
                                <path d=\"M4 3v7a4 4 0 0 0 4 4v7\"/><path d=\"M8 3v8\"/>
                                <path d=\"M14 3v18\"/><path d=\"M20 3v7a4 4 0 0 1-4 4\"/>
                            </svg>
                        </div>

                        <h3 style=\"text-align:center;margin-bottom:6px;font-size:18px;\">";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 214, $this->source); })()), "nom", [], "any", false, false, false, 214), "html", null, true);
        yield "</h3>

                        ";
        // line 217
        yield "                        <p style=\"text-align:center;margin-bottom:20px;\">
                            <span style=\"padding:4px 14px;border-radius:20px;font-size:12px;font-weight:600;
                                ";
        // line 219
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 219, $this->source); })()), "type", [], "any", false, false, false, 219) == "petit-dejeuner")) {
            yield "background:rgba(251,191,36,.15);color:#fbbf24;
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 220
(isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 220, $this->source); })()), "type", [], "any", false, false, false, 220) == "dejeuner")) {
            yield "background:rgba(5,150,105,.15);color:#059669;
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 221
(isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 221, $this->source); })()), "type", [], "any", false, false, false, 221) == "diner")) {
            yield "background:rgba(139,92,246,.15);color:#8b5cf6;
                                ";
        } else {
            // line 222
            yield "background:rgba(59,130,246,.15);color:#3b82f6;";
        }
        yield "\">
                                ";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 223, $this->source); })()), "type", [], "any", false, false, false, 223), ["-" => " "])), "html", null, true);
        yield "
                            </span>
                        </p>

                        ";
        // line 228
        yield "                        <div style=\"border-top:1px solid var(--glass-border);padding-top:18px;display:flex;flex-direction:column;gap:12px;\">

                            <div style=\"display:flex;justify-content:space-between;align-items:center;\">
                                <span style=\"color:var(--text-muted);font-size:13px;\"><i class=\"fa-regular fa-calendar\" style=\"margin-right:6px;\"></i>Date</span>
                                <span style=\"font-weight:500;font-size:14px;\">
                                    ";
        // line 233
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 233, $this->source); })()), "date", [], "any", false, false, false, 233)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 233, $this->source); })()), "date", [], "any", false, false, false, 233), "d/m/Y"), "html", null, true)) : ("—"));
        yield "
                                </span>
                            </div>

                            <div style=\"display:flex;justify-content:space-between;align-items:center;\">
                                <span style=\"color:var(--text-muted);font-size:13px;\"><i class=\"fa-regular fa-clock\" style=\"margin-right:6px;\"></i>Heure</span>
                                <span style=\"font-weight:500;font-size:14px;\">
                                    ";
        // line 240
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 240, $this->source); })()), "heure", [], "any", false, false, false, 240)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 240, $this->source); })()), "heure", [], "any", false, false, false, 240), "H:i"), "html", null, true)) : ("—"));
        yield "
                                </span>
                            </div>

                            <div style=\"display:flex;justify-content:space-between;align-items:center;\">
                                <span style=\"color:var(--text-muted);font-size:13px;\"><i class=\"fa-solid fa-fire\" style=\"margin-right:6px;\"></i>Calories</span>
                                <span style=\"font-weight:700;color:#ef4444;font-size:15px;\">
                                    ";
        // line 247
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["repas"] ?? null), "calories", [], "any", true, true, false, 247) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 247, $this->source); })()), "calories", [], "any", false, false, false, 247)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 247, $this->source); })()), "calories", [], "any", false, false, false, 247), "html", null, true)) : ("—"));
        yield " kcal
                                </span>
                            </div>

                            <div style=\"display:flex;justify-content:space-between;align-items:center;\">
                                <span style=\"color:var(--text-muted);font-size:13px;\"><i class=\"fa-solid fa-carrot\" style=\"margin-right:6px;\"></i>Aliments</span>
                                <span style=\"font-weight:500;font-size:14px;\">";
        // line 253
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 253, $this->source); })()), "aliments", [], "any", false, false, false, 253)), "html", null, true);
        yield "</span>
                            </div>

                        </div>

                        ";
        // line 259
        yield "                        ";
        $context["score"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 259, $this->source); })()), "nutritionalScore", [], "any", false, false, false, 259);
        // line 260
        yield "                        ";
        $context["scoreColor"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 260, $this->source); })()), "scoreColor", [], "any", false, false, false, 260);
        // line 261
        yield "                        ";
        $context["scoreLabel"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 261, $this->source); })()), "scoreLabel", [], "any", false, false, false, 261);
        // line 262
        yield "
                        <div style=\"margin-top:24px;padding:16px;background:rgba(255,255,255,.04);border-radius:12px;border:1px solid var(--glass-border);\">
                            <div style=\"display:flex;justify-content:space-between;align-items:center;margin-bottom:10px;\">
                                <span style=\"font-size:13px;color:var(--text-muted);\">Score nutritionnel</span>
                                <span style=\"font-weight:700;color:";
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["scoreColor"]) || array_key_exists("scoreColor", $context) ? $context["scoreColor"] : (function () { throw new RuntimeError('Variable "scoreColor" does not exist.', 266, $this->source); })()), "html", null, true);
        yield ";\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["scoreLabel"]) || array_key_exists("scoreLabel", $context) ? $context["scoreLabel"] : (function () { throw new RuntimeError('Variable "scoreLabel" does not exist.', 266, $this->source); })()), "html", null, true);
        yield "</span>
                            </div>
                            <div style=\"background:rgba(255,255,255,.08);border-radius:99px;height:8px;overflow:hidden;\">
                                <div style=\"height:100%;width:";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 269, $this->source); })()), "html", null, true);
        yield "%;background:";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["scoreColor"]) || array_key_exists("scoreColor", $context) ? $context["scoreColor"] : (function () { throw new RuntimeError('Variable "scoreColor" does not exist.', 269, $this->source); })()), "html", null, true);
        yield ";border-radius:99px;transition:width .6s ease;\"></div>
                            </div>
                            <div style=\"text-align:right;font-size:12px;color:var(--text-muted);margin-top:4px;\">";
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 271, $this->source); })()), "html", null, true);
        yield "/100</div>
                        </div>

                        ";
        // line 275
        yield "                        <form id=\"delete-form\"
                              method=\"post\"
                              action=\"";
        // line 277
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_repas_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 277, $this->source); })()), "id", [], "any", false, false, false, 277)]), "html", null, true);
        yield "\"
                              onsubmit=\"return confirm('Supprimer ce repas ?');\"
                              style=\"margin-top:20px;\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 280, $this->source); })()), "id", [], "any", false, false, false, 280))), "html", null, true);
        yield "\">
                            <button type=\"submit\" class=\"btn\" style=\"width:100%;background:rgba(239,68,68,.12);color:#ef4444;border:1px solid rgba(239,68,68,.3);\">
                                <i class=\"fa-solid fa-trash\" style=\"margin-right:8px;\"></i>Supprimer
                            </button>
                        </form>

                    </div>
                </div>

                ";
        // line 290
        yield "                <div style=\"display:flex;flex-direction:column;gap:20px;\">

                    ";
        // line 293
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 293, $this->source); })()), "description", [], "any", false, false, false, 293)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 294
            yield "                        <div class=\"glass-card\" style=\"padding:24px;\">
                            <h3 class=\"settings-section-title\" style=\"margin-bottom:12px;\">
                                <i class=\"fa-solid fa-align-left\" style=\"margin-right:8px;color:#059669;\"></i>Description
                            </h3>
                            <p style=\"color:var(--text-muted);line-height:1.7;font-size:14px;\">
                                ";
            // line 299
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 299, $this->source); })()), "description", [], "any", false, false, false, 299), "html", null, true);
            yield "
                            </p>
                        </div>
                    ";
        }
        // line 303
        yield "
                    ";
        // line 305
        yield "                    <div class=\"glass-card\" style=\"padding:24px;\">
                        <h3 class=\"settings-section-title\" style=\"margin-bottom:16px;\">
                            <i class=\"fa-solid fa-bowl-food\" style=\"margin-right:8px;color:#059669;\"></i>
                            Aliments inclus
                            <span style=\"font-size:13px;font-weight:400;color:var(--text-muted);margin-left:8px;\">
                                (";
        // line 310
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 310, $this->source); })()), "aliments", [], "any", false, false, false, 310)), "html", null, true);
        yield ")
                            </span>
                        </h3>

                        ";
        // line 314
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 314, $this->source); })()), "aliments", [], "any", false, false, false, 314)) > 0)) {
            // line 315
            yield "                            <div class=\"table-wrapper\" style=\"margin:0;border-radius:12px;overflow:hidden;\">
                                <table class=\"data-table\" style=\"min-width:100%;\">
                                    <thead>
                                        <tr>
                                            <th style=\"text-align:left;\">#</th>
                                            <th style=\"text-align:left;\">Nom</th>
                                            <th style=\"text-align:left;\">Catégorie</th>
                                            <th style=\"text-align:right;\">Calories</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
            // line 326
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 326, $this->source); })()), "aliments", [], "any", false, false, false, 326));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["aliment"]) {
                // line 327
                yield "                                            <tr>
                                                <td style=\"color:var(--text-muted);font-size:13px;\">";
                // line 328
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 328), "html", null, true);
                yield "</td>
                                                <td>
                                                    <strong>";
                // line 330
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["aliment"], "nom", [], "any", false, false, false, 330), "html", null, true);
                yield "</strong>
                                                </td>
                                                <td>
                                                    ";
                // line 334
                yield "                                                    <span style=\"font-size:13px;color:var(--text-muted);\">
                                                        ";
                // line 335
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["aliment"], "categorie", [], "any", true, true, false, 335) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["aliment"], "categorie", [], "any", false, false, false, 335)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["aliment"], "categorie", [], "any", false, false, false, 335), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, $context["aliment"], "type", [], "any", true, true, false, 335) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["aliment"], "type", [], "any", false, false, false, 335)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["aliment"], "type", [], "any", false, false, false, 335), "html", null, true)) : ("—"))));
                yield "
                                                    </span>
                                                </td>
                                                <td style=\"text-align:right;font-weight:600;color:#ef4444;\">
                                                    ";
                // line 339
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["aliment"], "calories", [], "any", true, true, false, 339) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["aliment"], "calories", [], "any", false, false, false, 339)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["aliment"], "calories", [], "any", false, false, false, 339), "html", null, true)) : ("—"));
                yield " kcal
                                                </td>
                                            </tr>
                                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['aliment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 343
            yield "                                    </tbody>
                                    <tfoot>
                                        <tr style=\"border-top:2px solid var(--glass-border);\">
                                            <td colspan=\"3\" style=\"text-align:right;font-weight:600;padding-top:10px;color:var(--text-muted);\">
                                                Total repas
                                            </td>
                                            <td style=\"text-align:right;font-weight:700;color:#ef4444;font-size:15px;padding-top:10px;\">
                                                ";
            // line 350
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["repas"] ?? null), "calories", [], "any", true, true, false, 350) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 350, $this->source); })()), "calories", [], "any", false, false, false, 350)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 350, $this->source); })()), "calories", [], "any", false, false, false, 350), "html", null, true)) : ("—"));
            yield " kcal
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        ";
        } else {
            // line 357
            yield "                            <div style=\"text-align:center;padding:40px 24px;color:var(--text-muted);\">
                                <i class=\"fa-solid fa-plate-wheat\" style=\"font-size:36px;margin-bottom:12px;display:block;opacity:.3;\"></i>
                                Aucun aliment associé à ce repas.
                                <br>
                                <a href=\"";
            // line 361
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_repas_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 361, $this->source); })()), "id", [], "any", false, false, false, 361)]), "html", null, true);
            yield "\" style=\"color:#059669;font-size:13px;margin-top:8px;display:inline-block;\">
                                    <i class=\"fa-solid fa-plus\" style=\"margin-right:4px;\"></i>Ajouter des aliments
                                </a>
                            </div>
                        ";
        }
        // line 366
        yield "                    </div>

                </div>

            </div>
        </section>

    </main>
</div>

<script src=\"";
        // line 376
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
        return "back/repas/show.html.twig";
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
        return array (  681 => 376,  669 => 366,  661 => 361,  655 => 357,  645 => 350,  636 => 343,  618 => 339,  611 => 335,  608 => 334,  602 => 330,  597 => 328,  594 => 327,  577 => 326,  564 => 315,  562 => 314,  555 => 310,  548 => 305,  545 => 303,  538 => 299,  531 => 294,  528 => 293,  524 => 290,  512 => 280,  506 => 277,  502 => 275,  496 => 271,  489 => 269,  481 => 266,  475 => 262,  472 => 261,  469 => 260,  466 => 259,  458 => 253,  449 => 247,  439 => 240,  429 => 233,  422 => 228,  415 => 223,  410 => 222,  405 => 221,  401 => 220,  397 => 219,  393 => 217,  388 => 214,  379 => 207,  374 => 203,  353 => 184,  347 => 181,  341 => 178,  334 => 173,  311 => 152,  298 => 146,  285 => 140,  267 => 129,  254 => 123,  236 => 112,  223 => 106,  205 => 95,  192 => 89,  179 => 83,  161 => 72,  148 => 66,  130 => 55,  117 => 49,  99 => 38,  86 => 28,  81 => 25,  66 => 12,  62 => 11,  55 => 7,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/back/repas/show.html.twig #}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{{ repas.nom }} - Dashboard</title>

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
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

    {# ─── SIDEBAR ─── #}
    <aside class=\"sidebar\" id=\"sidebar\">
        <div class=\"sidebar-header\">
            <div class=\"logo\">
                <img src=\"{{ asset('images/logo.png') }}\" alt=\"Logo\" style=\"width:50px;height:auto;margin-top:12%;\">
            </div>
            <span class=\"logo-text\">AIVA</span>
        </div>

        <ul class=\"nav-menu\">
            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Menu Principal</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('dashboard') }}\" class=\"nav-link {% if app.request.attributes.get('_route') == 'dashboard' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M3 12l9-9 9 9\"/><path d=\"M9 21V9h6v12\"/></svg>
                            Tableau de bord
                        </a>
                    </li>
                </ul>
            </li>
            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Sports</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('back_sport_index') }}\" class=\"nav-link {% if app.request.attributes.get('_route') starts with 'back_sport_' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M7 7h10\"/><path d=\"M7 12h10\"/><path d=\"M7 17h10\"/></svg>
                            Activités
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_objectif_index') }}\" class=\"nav-link {% if app.request.attributes.get('_route') starts with 'app_objectif_' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><circle cx=\"12\" cy=\"12\" r=\"9\"/><path d=\"M12 7v5l3 3\"/></svg>
                            Objectifs
                        </a>
                    </li>
                </ul>
            </li>
            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Finance</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_depense_index') }}\" class=\"nav-link {% if app.request.attributes.get('_route') starts with 'app_depense_' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M6 3h12v4H6z\"/><path d=\"M4 9h16v4H4z\"/><path d=\"M6 15h12v4H6z\"/></svg>
                            Dépenses
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_categorie_index') }}\" class=\"nav-link {% if app.request.attributes.get('_route') starts with 'app_categorie_' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><rect x=\"3\" y=\"3\" width=\"7\" height=\"7\" rx=\"1\"/><rect x=\"14\" y=\"3\" width=\"7\" height=\"7\" rx=\"1\"/><rect x=\"3\" y=\"14\" width=\"7\" height=\"7\" rx=\"1\"/><rect x=\"14\" y=\"14\" width=\"7\" height=\"7\" rx=\"1\"/></svg>
                            Catégories
                        </a>
                    </li>
                </ul>
            </li>
            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Énergies</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('energy') }}\" class=\"nav-link {% if app.request.attributes.get('_route') == 'energy' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M13 2L3 14h7l-1 8 10-12h-7z\"/></svg>
                            Consommation d'énergie
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('recommendations') }}\" class=\"nav-link {% if app.request.attributes.get('_route') == 'recommendations' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M9 18h6\"/><path d=\"M10 22h4\"/><path d=\"M12 2a7 7 0 0 0-4 12c.6.6 1 1.5 1 2h6c0-.5.4-1.4 1-2a7 7 0 0 0-4-12z\"/></svg>
                            Recommandations
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('stateenergi') }}\" class=\"nav-link {% if app.request.attributes.get('_route') == 'stateenergi' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M3 3v18h18\"/><path d=\"M7 14l3-3 4 4 5-7\"/></svg>
                            Statistiques d'énergie
                        </a>
                    </li>
                </ul>
            </li>
            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Alimentation</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_aliment_index') }}\" class=\"nav-link {% if app.request.attributes.get('_route') starts with 'app_aliment_' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M12 3c-3 2-5 5-5 8a5 5 0 0 0 10 0c0-3-2-6-5-8z\"/><path d=\"M12 14v7\"/></svg>
                            Aliments
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_repas_index') }}\" class=\"nav-link {% if app.request.attributes.get('_route') starts with 'app_repas_' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M4 3v7a4 4 0 0 0 4 4v7\"/><path d=\"M8 3v8\"/><path d=\"M14 3v18\"/><path d=\"M20 3v7a4 4 0 0 1-4 4\"/></svg>
                            Repas
                        </a>
                    </li>
                </ul>
            </li>
            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Formation</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_cours_index') }}\" class=\"nav-link {% if app.request.attributes.get('_route') starts with 'app_cours_' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M4 19a2 2 0 0 0 2 2h12\"/><path d=\"M6 17V5a2 2 0 0 1 2-2h10v14H8a2 2 0 0 0-2 2z\"/></svg>
                            Cours
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_chapitre_index') }}\" class=\"nav-link {% if app.request.attributes.get('_route') starts with 'app_chapitre_' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M8 6h13\"/><path d=\"M8 12h13\"/><path d=\"M8 18h13\"/><path d=\"M3 6h.01\"/><path d=\"M3 12h.01\"/><path d=\"M3 18h.01\"/></svg>
                            Chapitres
                        </a>
                    </li>
                </ul>
            </li>
            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Compte</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_profile') }}\" class=\"nav-link {% if app.request.attributes.get('_route') == 'app_profile' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M20 21a8 8 0 0 0-16 0\"/><circle cx=\"12\" cy=\"7\" r=\"4\"/></svg>
                            Profil
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_user_index') }}\" class=\"nav-link {% if app.request.attributes.get('_route') starts with 'app_user_' %}active{% endif %}\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"/><circle cx=\"9\" cy=\"7\" r=\"4\"/><path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"/><path d=\"M16 3.13a4 4 0 0 1 0 7.75\"/></svg>
                            Users
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_logout') }}\" class=\"nav-link\">
                            <svg class=\"nav-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"/><polyline points=\"16 17 21 12 16 7\"/><line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"/></svg>
                            Déconnexion
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class=\"sidebar-footer\">
            <div class=\"user-profile\">
                <div class=\"user-avatar\">AD</div>
                <div class=\"user-info\">
                    <div class=\"user-name\">Admin</div>
                    <div class=\"user-role\">Administrator</div>
                </div>
            </div>
        </div>
    </aside>

    {# ─── MAIN ─── #}
    <main class=\"main-content\">

        <nav class=\"navbar\">
            <h1 class=\"page-title\">
                <i class=\"fa-solid fa-utensils\" style=\"margin-right:10px;color:#059669;\"></i>
                {{ repas.nom }}
            </h1>
            <div class=\"navbar-right\">
                <a href=\"{{ path('app_repas_edit', {'id': repas.id}) }}\" class=\"card-btn\">
                    <i class=\"fa-solid fa-pen\" style=\"margin-right:8px;\"></i>Modifier
                </a>
                <a href=\"{{ path('app_repas_index') }}\" class=\"card-btn\" style=\"margin-left:10px;\">
                    <i class=\"fa-solid fa-arrow-left\" style=\"margin-right:8px;\"></i>Retour
                </a>
                <button class=\"nav-btn\" id=\"theme-toggle\" title=\"Toggle Light/Dark Mode\" style=\"margin-left:10px;\">
                    <svg class=\"icon-sun\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <circle cx=\"12\" cy=\"12\" r=\"4\"/>
                        <path d=\"M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41\"/>
                    </svg>
                    <svg class=\"icon-moon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" style=\"display:none;\">
                        <path d=\"M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z\"/>
                    </svg>
                </button>
            </div>
        </nav>

        <section class=\"content-grid\">
            <div class=\"settings-grid\">

                {# ── LEFT: fiche résumé ── #}
                <div class=\"glass-card settings-nav-card\">
                    <div style=\"padding:24px;\">

                        {# Icône repas centrée #}
                        <div style=\"width:90px;height:90px;border-radius:50%;background:rgba(5,150,105,.15);border:2px solid rgba(5,150,105,.4);display:flex;align-items:center;justify-content:center;margin:0 auto 20px;\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#059669\" stroke-width=\"2\" style=\"width:44px;height:44px;\">
                                <path d=\"M4 3v7a4 4 0 0 0 4 4v7\"/><path d=\"M8 3v8\"/>
                                <path d=\"M14 3v18\"/><path d=\"M20 3v7a4 4 0 0 1-4 4\"/>
                            </svg>
                        </div>

                        <h3 style=\"text-align:center;margin-bottom:6px;font-size:18px;\">{{ repas.nom }}</h3>

                        {# Badge type #}
                        <p style=\"text-align:center;margin-bottom:20px;\">
                            <span style=\"padding:4px 14px;border-radius:20px;font-size:12px;font-weight:600;
                                {% if repas.type == 'petit-dejeuner' %}background:rgba(251,191,36,.15);color:#fbbf24;
                                {% elseif repas.type == 'dejeuner' %}background:rgba(5,150,105,.15);color:#059669;
                                {% elseif repas.type == 'diner' %}background:rgba(139,92,246,.15);color:#8b5cf6;
                                {% else %}background:rgba(59,130,246,.15);color:#3b82f6;{% endif %}\">
                                {{ repas.type|replace({'-': ' '})|title }}
                            </span>
                        </p>

                        {# Détails #}
                        <div style=\"border-top:1px solid var(--glass-border);padding-top:18px;display:flex;flex-direction:column;gap:12px;\">

                            <div style=\"display:flex;justify-content:space-between;align-items:center;\">
                                <span style=\"color:var(--text-muted);font-size:13px;\"><i class=\"fa-regular fa-calendar\" style=\"margin-right:6px;\"></i>Date</span>
                                <span style=\"font-weight:500;font-size:14px;\">
                                    {{ repas.date ? repas.date|date('d/m/Y') : '—' }}
                                </span>
                            </div>

                            <div style=\"display:flex;justify-content:space-between;align-items:center;\">
                                <span style=\"color:var(--text-muted);font-size:13px;\"><i class=\"fa-regular fa-clock\" style=\"margin-right:6px;\"></i>Heure</span>
                                <span style=\"font-weight:500;font-size:14px;\">
                                    {{ repas.heure ? repas.heure|date('H:i') : '—' }}
                                </span>
                            </div>

                            <div style=\"display:flex;justify-content:space-between;align-items:center;\">
                                <span style=\"color:var(--text-muted);font-size:13px;\"><i class=\"fa-solid fa-fire\" style=\"margin-right:6px;\"></i>Calories</span>
                                <span style=\"font-weight:700;color:#ef4444;font-size:15px;\">
                                    {{ repas.calories ?? '—' }} kcal
                                </span>
                            </div>

                            <div style=\"display:flex;justify-content:space-between;align-items:center;\">
                                <span style=\"color:var(--text-muted);font-size:13px;\"><i class=\"fa-solid fa-carrot\" style=\"margin-right:6px;\"></i>Aliments</span>
                                <span style=\"font-weight:500;font-size:14px;\">{{ repas.aliments|length }}</span>
                            </div>

                        </div>

                        {# Score nutritionnel #}
                        {% set score = repas.nutritionalScore %}
                        {% set scoreColor = repas.scoreColor %}
                        {% set scoreLabel = repas.scoreLabel %}

                        <div style=\"margin-top:24px;padding:16px;background:rgba(255,255,255,.04);border-radius:12px;border:1px solid var(--glass-border);\">
                            <div style=\"display:flex;justify-content:space-between;align-items:center;margin-bottom:10px;\">
                                <span style=\"font-size:13px;color:var(--text-muted);\">Score nutritionnel</span>
                                <span style=\"font-weight:700;color:{{ scoreColor }};\">{{ scoreLabel }}</span>
                            </div>
                            <div style=\"background:rgba(255,255,255,.08);border-radius:99px;height:8px;overflow:hidden;\">
                                <div style=\"height:100%;width:{{ score }}%;background:{{ scoreColor }};border-radius:99px;transition:width .6s ease;\"></div>
                            </div>
                            <div style=\"text-align:right;font-size:12px;color:var(--text-muted);margin-top:4px;\">{{ score }}/100</div>
                        </div>

                        {# Bouton supprimer #}
                        <form id=\"delete-form\"
                              method=\"post\"
                              action=\"{{ path('app_repas_delete', {'id': repas.id}) }}\"
                              onsubmit=\"return confirm('Supprimer ce repas ?');\"
                              style=\"margin-top:20px;\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ repas.id) }}\">
                            <button type=\"submit\" class=\"btn\" style=\"width:100%;background:rgba(239,68,68,.12);color:#ef4444;border:1px solid rgba(239,68,68,.3);\">
                                <i class=\"fa-solid fa-trash\" style=\"margin-right:8px;\"></i>Supprimer
                            </button>
                        </form>

                    </div>
                </div>

                {# ── RIGHT: description + aliments ── #}
                <div style=\"display:flex;flex-direction:column;gap:20px;\">

                    {# Description #}
                    {% if repas.description %}
                        <div class=\"glass-card\" style=\"padding:24px;\">
                            <h3 class=\"settings-section-title\" style=\"margin-bottom:12px;\">
                                <i class=\"fa-solid fa-align-left\" style=\"margin-right:8px;color:#059669;\"></i>Description
                            </h3>
                            <p style=\"color:var(--text-muted);line-height:1.7;font-size:14px;\">
                                {{ repas.description }}
                            </p>
                        </div>
                    {% endif %}

                    {# Tableau aliments #}
                    <div class=\"glass-card\" style=\"padding:24px;\">
                        <h3 class=\"settings-section-title\" style=\"margin-bottom:16px;\">
                            <i class=\"fa-solid fa-bowl-food\" style=\"margin-right:8px;color:#059669;\"></i>
                            Aliments inclus
                            <span style=\"font-size:13px;font-weight:400;color:var(--text-muted);margin-left:8px;\">
                                ({{ repas.aliments|length }})
                            </span>
                        </h3>

                        {% if repas.aliments|length > 0 %}
                            <div class=\"table-wrapper\" style=\"margin:0;border-radius:12px;overflow:hidden;\">
                                <table class=\"data-table\" style=\"min-width:100%;\">
                                    <thead>
                                        <tr>
                                            <th style=\"text-align:left;\">#</th>
                                            <th style=\"text-align:left;\">Nom</th>
                                            <th style=\"text-align:left;\">Catégorie</th>
                                            <th style=\"text-align:right;\">Calories</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for aliment in repas.aliments %}
                                            <tr>
                                                <td style=\"color:var(--text-muted);font-size:13px;\">{{ loop.index }}</td>
                                                <td>
                                                    <strong>{{ aliment.nom }}</strong>
                                                </td>
                                                <td>
                                                    {# Affiche la catégorie si elle existe, sinon un tiret #}
                                                    <span style=\"font-size:13px;color:var(--text-muted);\">
                                                        {{ aliment.categorie ?? aliment.type ?? '—' }}
                                                    </span>
                                                </td>
                                                <td style=\"text-align:right;font-weight:600;color:#ef4444;\">
                                                    {{ aliment.calories ?? '—' }} kcal
                                                </td>
                                            </tr>
                                        {% endfor %}
                                    </tbody>
                                    <tfoot>
                                        <tr style=\"border-top:2px solid var(--glass-border);\">
                                            <td colspan=\"3\" style=\"text-align:right;font-weight:600;padding-top:10px;color:var(--text-muted);\">
                                                Total repas
                                            </td>
                                            <td style=\"text-align:right;font-weight:700;color:#ef4444;font-size:15px;padding-top:10px;\">
                                                {{ repas.calories ?? '—' }} kcal
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        {% else %}
                            <div style=\"text-align:center;padding:40px 24px;color:var(--text-muted);\">
                                <i class=\"fa-solid fa-plate-wheat\" style=\"font-size:36px;margin-bottom:12px;display:block;opacity:.3;\"></i>
                                Aucun aliment associé à ce repas.
                                <br>
                                <a href=\"{{ path('app_repas_edit', {'id': repas.id}) }}\" style=\"color:#059669;font-size:13px;margin-top:8px;display:inline-block;\">
                                    <i class=\"fa-solid fa-plus\" style=\"margin-right:4px;\"></i>Ajouter des aliments
                                </a>
                            </div>
                        {% endif %}
                    </div>

                </div>

            </div>
        </section>

    </main>
</div>

<script src=\"{{ asset('js/templatemo-glass-admin-script.js') }}\"></script>
</body>
</html>
", "back/repas/show.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\back\\repas\\show.html.twig");
    }
}
