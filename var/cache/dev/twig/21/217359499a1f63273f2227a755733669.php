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

/* back/aliment/edit.html.twig */
class __TwigTemplate_5d4d0733b0952856fceacf4cb6559015 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/aliment/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/aliment/edit.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Modifier Aliment</title>

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

            <li class=\"nav-section\">
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

            <span class=\"nav-section-title\">sports</span>
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

            <li class=\"nav-item\">
                <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_index");
        yield "\"
                   class=\"nav-link ";
        // line 69
        if ((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "request", [], "any", false, false, false, 69), "attributes", [], "any", false, false, false, 69), "get", ["_route"], "method", false, false, false, 69)) && is_string($_v3 = "app_objectif_") && str_starts_with($_v2, $_v3))) {
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

            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Finance</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depense_index");
        yield "\"
                           class=\"nav-link ";
        // line 83
        if ((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "request", [], "any", false, false, false, 83), "attributes", [], "any", false, false, false, 83), "get", ["_route"], "method", false, false, false, 83)) && is_string($_v5 = "app_depense_") && str_starts_with($_v4, $_v5))) {
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
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index");
        yield "\"
                           class=\"nav-link ";
        // line 95
        if ((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "request", [], "any", false, false, false, 95), "attributes", [], "any", false, false, false, 95), "get", ["_route"], "method", false, false, false, 95)) && is_string($_v7 = "app_categorie_") && str_starts_with($_v6, $_v7))) {
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

            <li class=\"nav-section\">
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

            <li class=\"nav-section\">
                <span class=\"nav-section-title\">Alimentation</span>
                <ul>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 150
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_aliment_index");
        yield "\"
                           class=\"nav-link ";
        // line 151
        if ((is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 151, $this->source); })()), "request", [], "any", false, false, false, 151), "attributes", [], "any", false, false, false, 151), "get", ["_route"], "method", false, false, false, 151)) && is_string($_v9 = "app_aliment_") && str_starts_with($_v8, $_v9))) {
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
        // line 161
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_repas_index");
        yield "\"
                           class=\"nav-link ";
        // line 162
        if ((is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 162, $this->source); })()), "request", [], "any", false, false, false, 162), "attributes", [], "any", false, false, false, 162), "get", ["_route"], "method", false, false, false, 162)) && is_string($_v11 = "app_repas_") && str_starts_with($_v10, $_v11))) {
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
        // line 176
        yield "            ";
        // line 177
        yield "
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
        // line 195
        yield "    <main class=\"main-content\">

        <nav class=\"navbar\">
            <div class=\"page-header\">
                <h1 class=\"page-title\">Modifier: ";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["aliment"]) || array_key_exists("aliment", $context) ? $context["aliment"] : (function () { throw new RuntimeError('Variable "aliment" does not exist.', 199, $this->source); })()), "nom", [], "any", false, false, false, 199), "html", null, true);
        yield "</h1>
                <div class=\"page-breadcrumb\">
                    <a href=\"";
        // line 201
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\">Dashboard</a>
                    <span>/</span>
                    <a href=\"";
        // line 203
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_aliment_index");
        yield "\">Aliments</a>
                    <span>/</span>
                    <span>Modifier</span>
                </div>
            </div>

            <div class=\"navbar-right\">
                <a href=\"";
        // line 210
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_aliment_index");
        yield "\" class=\"card-btn\" style=\"width:auto;\">
                    <i class=\"fa-solid fa-arrow-left\" style=\"margin-right:8px;\"></i>
                    Retour
                </a>

                ";
        // line 216
        yield "                <button class=\"nav-btn\" id=\"theme-toggle\" title=\"Toggle Light/Dark Mode\">
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
        // line 232
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 232, $this->source); })()), "flashes", ["error"], "method", false, false, false, 232));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 233
            yield "            <div class=\"glass-card\" style=\"border:1px solid #ef4444; background: rgba(239, 68, 68, 0.12); color:#ef4444; padding:12px 16px; border-radius:12px; margin-bottom:16px;\">
                <strong>Erreur:</strong> ";
            // line 234
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        yield "
        ";
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 238, $this->source); })()), "flashes", ["success"], "method", false, false, false, 238));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 239
            yield "            <div class=\"glass-card\" style=\"border:1px solid rgba(5, 150, 105, 0.6); background: rgba(5, 150, 105, 0.12); color: rgba(5, 150, 105, 0.95); padding:12px 16px; border-radius:12px; margin-bottom:16px;\">
                <strong>Succès:</strong> ";
            // line 240
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
        yield "
        <section class=\"content-grid\">
            <div class=\"glass-card\">

                ";
        // line 248
        yield "                <div class=\"settings-grid\">
                    <div class=\"glass-card settings-nav-card\">
                        <ul class=\"settings-nav\">
                            <li class=\"settings-nav-item\">
                                <a href=\"#\" class=\"settings-nav-link active\" data-tab=\"informations\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                        <path d=\"M18 8h1a4 4 0 0 1 0 8h-1\"/>
                                        <path d=\"M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z\"/>
                                        <line x1=\"6\" y1=\"1\" x2=\"6\" y2=\"4\"/>
                                    </svg>
                                    Informations
                                </a>
                            </li>
                            <li class=\"settings-nav-item\">
                                <a href=\"#\" class=\"settings-nav-link\" data-tab=\"nutritionnel\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                        <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                                        <path d=\"M12 6v6l4 2\"/>
                                    </svg>
                                    Valeurs Nutritionnelles
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class=\"glass-card\">
                        ";
        // line 274
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 274, $this->source); })()), 'form_start', ["attr" => ["id" => "aliment-form"]]);
        yield "

                        <div class=\"settings-tab-content active\" id=\"tab-informations\">
                            <div class=\"settings-section\">
                                <h3 class=\"settings-section-title\">Détails de l'Aliment</h3>
                                ";
        // line 279
        yield Twig\Extension\CoreExtension::include($this->env, $context, "back/aliment/_form.html.twig");
        yield "
                            </div>

                            <div class=\"btn-group\">
                                <button type=\"submit\" class=\"btn btn-primary\" style=\"width:auto;\">
                                    <i class=\"fa-solid fa-check\" style=\"margin-right:8px;\"></i>
                                    Mettre à jour
                                </button>

                                <a href=\"";
        // line 288
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_aliment_index");
        yield "\" class=\"btn btn-secondary\" style=\"width:auto;\">
                                    Annuler
                                </a>

                                <button type=\"button\"
                                        class=\"btn\"
                                        style=\"width:auto; background: rgba(239, 68, 68, 0.15); color: #ef4444; margin-left:auto;\"
                                        onclick=\"if(confirm('Êtes-vous sûr de vouloir supprimer cet aliment ?')) { document.getElementById('delete-form').submit(); }\">
                                    Supprimer
                                </button>
                            </div>
                        </div>

                        <div class=\"settings-tab-content\" id=\"tab-nutritionnel\">
                            <div class=\"settings-section\">
                                <h3 class=\"settings-section-title\">Composition Nutritionnelle</h3>
                                <p style=\"color: var(--text-muted); margin-bottom: 20px;\">
                                    Les valeurs nutritionnelles sont déjà incluses dans le formulaire principal.
                                </p>
                            </div>

                           <div class=\"btn-group\" style=\"display: block !important;\">
    
                                <button type=\"submit\" class=\"btn btn-primary\" style=\"width:auto;\">
                                    Mettre à jour
                                </button>
                                <a href=\"";
        // line 314
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_aliment_index");
        yield "\" class=\"btn btn-secondary\" style=\"width:auto;\">
                                    Annuler
                                </a>
                            </div>
                        </div>

                        ";
        // line 320
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 320, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>

            </div>
        </section>

    </main>
</div>

";
        // line 330
        yield Twig\Extension\CoreExtension::include($this->env, $context, "back/aliment/_delete_form.html.twig");
        yield "

<script src=\"";
        // line 332
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/templatemo-glass-admin-script.js"), "html", null, true);
        yield "\"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const tabLinks = document.querySelectorAll('.settings-nav-link[data-tab]');
    const tabContents = document.querySelectorAll('.settings-tab-content');

    tabLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const tabId = this.getAttribute('data-tab');

            tabLinks.forEach(l => l.classList.remove('active'));
            tabContents.forEach(t => t.classList.remove('active'));

            this.classList.add('active');
            document.getElementById('tab-' + tabId).classList.add('active');
        });
    });

    // Handle macro fields submission
    const form = document.getElementById('aliment-form');
    if (form) {
        form.addEventListener('submit', function() {
            const proteine = document.getElementById('macro_proteine')?.value || '';
            const glucide = document.getElementById('macro_glucide')?.value || '';
            const lipide = document.getElementById('macro_lipide')?.value || '';

            const macroInput = document.createElement('input');
            macroInput.type = 'hidden';
            macroInput.name = 'aliment[macro]';
            macroInput.value = JSON.stringify({ proteine, glucide, lipide });

            form.appendChild(macroInput);
        });
    }
});
</script>

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
        return "back/aliment/edit.html.twig";
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
        return array (  531 => 332,  526 => 330,  513 => 320,  504 => 314,  475 => 288,  463 => 279,  455 => 274,  427 => 248,  421 => 243,  412 => 240,  409 => 239,  405 => 238,  402 => 237,  393 => 234,  390 => 233,  385 => 232,  368 => 216,  360 => 210,  350 => 203,  345 => 201,  340 => 199,  334 => 195,  315 => 177,  313 => 176,  295 => 162,  291 => 161,  276 => 151,  272 => 150,  252 => 135,  248 => 134,  232 => 123,  228 => 122,  214 => 113,  210 => 112,  188 => 95,  184 => 94,  168 => 83,  164 => 82,  146 => 69,  142 => 68,  126 => 57,  122 => 56,  104 => 43,  100 => 42,  86 => 31,  81 => 28,  65 => 14,  60 => 13,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/back/aliment/edit.html.twig #}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Modifier Aliment</title>

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">

    {# ✅ same style files used in energy/index #}
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

    {# ===================== SIDEBAR (exact same as index) ===================== #}
    <aside class=\"sidebar\" id=\"sidebar\">
        <div class=\"sidebar-header\">
            <div class=\"logo\">
                <img src=\"{{ asset('images/logo.png') }}\" alt=\"Logo\" style=\"width: 50px; height: auto; margin-top: 12%;\">
            </div>
            <span class=\"logo-text\">AIVA</span>
        </div>

        <ul class=\"nav-menu\">

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

            {# Formation + Compte ... keep same as your index #}
            {# ... (copy remaining sections if needed) ... #}

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

    {# ===================== MAIN CONTENT ===================== #}
    <main class=\"main-content\">

        <nav class=\"navbar\">
            <div class=\"page-header\">
                <h1 class=\"page-title\">Modifier: {{ aliment.nom }}</h1>
                <div class=\"page-breadcrumb\">
                    <a href=\"{{ path('dashboard') }}\">Dashboard</a>
                    <span>/</span>
                    <a href=\"{{ path('app_aliment_index') }}\">Aliments</a>
                    <span>/</span>
                    <span>Modifier</span>
                </div>
            </div>

            <div class=\"navbar-right\">
                <a href=\"{{ path('app_aliment_index') }}\" class=\"card-btn\" style=\"width:auto;\">
                    <i class=\"fa-solid fa-arrow-left\" style=\"margin-right:8px;\"></i>
                    Retour
                </a>

                {# Theme toggle (same as energy) #}
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

        {# Flash messages (same glass feel) #}
        {% for message in app.flashes('error') %}
            <div class=\"glass-card\" style=\"border:1px solid #ef4444; background: rgba(239, 68, 68, 0.12); color:#ef4444; padding:12px 16px; border-radius:12px; margin-bottom:16px;\">
                <strong>Erreur:</strong> {{ message }}
            </div>
        {% endfor %}

        {% for message in app.flashes('success') %}
            <div class=\"glass-card\" style=\"border:1px solid rgba(5, 150, 105, 0.6); background: rgba(5, 150, 105, 0.12); color: rgba(5, 150, 105, 0.95); padding:12px 16px; border-radius:12px; margin-bottom:16px;\">
                <strong>Succès:</strong> {{ message }}
            </div>
        {% endfor %}

        <section class=\"content-grid\">
            <div class=\"glass-card\">

                {# your existing edit UI #}
                <div class=\"settings-grid\">
                    <div class=\"glass-card settings-nav-card\">
                        <ul class=\"settings-nav\">
                            <li class=\"settings-nav-item\">
                                <a href=\"#\" class=\"settings-nav-link active\" data-tab=\"informations\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                        <path d=\"M18 8h1a4 4 0 0 1 0 8h-1\"/>
                                        <path d=\"M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z\"/>
                                        <line x1=\"6\" y1=\"1\" x2=\"6\" y2=\"4\"/>
                                    </svg>
                                    Informations
                                </a>
                            </li>
                            <li class=\"settings-nav-item\">
                                <a href=\"#\" class=\"settings-nav-link\" data-tab=\"nutritionnel\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                        <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                                        <path d=\"M12 6v6l4 2\"/>
                                    </svg>
                                    Valeurs Nutritionnelles
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class=\"glass-card\">
                        {{ form_start(form, {'attr': {'id': 'aliment-form'}}) }}

                        <div class=\"settings-tab-content active\" id=\"tab-informations\">
                            <div class=\"settings-section\">
                                <h3 class=\"settings-section-title\">Détails de l'Aliment</h3>
                                {{ include('back/aliment/_form.html.twig') }}
                            </div>

                            <div class=\"btn-group\">
                                <button type=\"submit\" class=\"btn btn-primary\" style=\"width:auto;\">
                                    <i class=\"fa-solid fa-check\" style=\"margin-right:8px;\"></i>
                                    Mettre à jour
                                </button>

                                <a href=\"{{ path('app_aliment_index') }}\" class=\"btn btn-secondary\" style=\"width:auto;\">
                                    Annuler
                                </a>

                                <button type=\"button\"
                                        class=\"btn\"
                                        style=\"width:auto; background: rgba(239, 68, 68, 0.15); color: #ef4444; margin-left:auto;\"
                                        onclick=\"if(confirm('Êtes-vous sûr de vouloir supprimer cet aliment ?')) { document.getElementById('delete-form').submit(); }\">
                                    Supprimer
                                </button>
                            </div>
                        </div>

                        <div class=\"settings-tab-content\" id=\"tab-nutritionnel\">
                            <div class=\"settings-section\">
                                <h3 class=\"settings-section-title\">Composition Nutritionnelle</h3>
                                <p style=\"color: var(--text-muted); margin-bottom: 20px;\">
                                    Les valeurs nutritionnelles sont déjà incluses dans le formulaire principal.
                                </p>
                            </div>

                           <div class=\"btn-group\" style=\"display: block !important;\">
    
                                <button type=\"submit\" class=\"btn btn-primary\" style=\"width:auto;\">
                                    Mettre à jour
                                </button>
                                <a href=\"{{ path('app_aliment_index') }}\" class=\"btn btn-secondary\" style=\"width:auto;\">
                                    Annuler
                                </a>
                            </div>
                        </div>

                        {{ form_end(form) }}
                    </div>
                </div>

            </div>
        </section>

    </main>
</div>

{{ include('back/aliment/_delete_form.html.twig') }}

<script src=\"{{ asset('js/templatemo-glass-admin-script.js') }}\"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const tabLinks = document.querySelectorAll('.settings-nav-link[data-tab]');
    const tabContents = document.querySelectorAll('.settings-tab-content');

    tabLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const tabId = this.getAttribute('data-tab');

            tabLinks.forEach(l => l.classList.remove('active'));
            tabContents.forEach(t => t.classList.remove('active'));

            this.classList.add('active');
            document.getElementById('tab-' + tabId).classList.add('active');
        });
    });

    // Handle macro fields submission
    const form = document.getElementById('aliment-form');
    if (form) {
        form.addEventListener('submit', function() {
            const proteine = document.getElementById('macro_proteine')?.value || '';
            const glucide = document.getElementById('macro_glucide')?.value || '';
            const lipide = document.getElementById('macro_lipide')?.value || '';

            const macroInput = document.createElement('input');
            macroInput.type = 'hidden';
            macroInput.name = 'aliment[macro]';
            macroInput.value = JSON.stringify({ proteine, glucide, lipide });

            form.appendChild(macroInput);
        });
    }
});
</script>

</body>
</html>
", "back/aliment/edit.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\back\\aliment\\edit.html.twig");
    }
}
