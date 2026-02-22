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

/* back/energie/stateenergi.html.twig */
class __TwigTemplate_00b8d5c56d66751284d3a8f406fede21 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/energie/stateenergi.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/energie/stateenergi.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Dashboard - EnergyDash</title>
    <meta name=\"description\" content=\"Dashboard de gestion d'énergie\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Space+Mono:wght@400;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
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
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Logo\" style=\"width: 50px; height: auto; margin-top: 12%;\">
        </div>
        <span class=\"logo-text\">AIVA</span>
    </div>

    <ul class=\"nav-menu\">

        ";
        // line 36
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Menu Principal</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\"
                       class=\"nav-link ";
        // line 41
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "request", [], "any", false, false, false, 41), "attributes", [], "any", false, false, false, 41), "get", ["_route"], "method", false, false, false, 41) == "dashboard")) {
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
        // line 52
        yield "              <span class=\"nav-section-title\">sports</span>

        <li class=\"nav-item\">
            <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_sport_index");
        yield "\"
               class=\"nav-link ";
        // line 56
        if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "request", [], "any", false, false, false, 56), "attributes", [], "any", false, false, false, 56), "get", ["_route"], "method", false, false, false, 56)) && is_string($_v1 = "back_sport_") && str_starts_with($_v0, $_v1))) {
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
        // line 67
        yield "        <li class=\"nav-item\">
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
        ";
        // line 78
        yield "        <li class=\"nav-section\">
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

        ";
        // line 109
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Énergies</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("energy");
        yield "\"
                       class=\"nav-link ";
        // line 114
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "request", [], "any", false, false, false, 114), "attributes", [], "any", false, false, false, 114), "get", ["_route"], "method", false, false, false, 114) == "energy")) {
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
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recommendations");
        yield "\"
                       class=\"nav-link ";
        // line 124
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "request", [], "any", false, false, false, 124), "attributes", [], "any", false, false, false, 124), "get", ["_route"], "method", false, false, false, 124) == "recommendations")) {
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
        // line 135
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stateenergi");
        yield "\"
                       class=\"nav-link ";
        // line 136
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 136, $this->source); })()), "request", [], "any", false, false, false, 136), "attributes", [], "any", false, false, false, 136), "get", ["_route"], "method", false, false, false, 136) == "stateenergi")) {
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
        // line 148
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Alimentation</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 152
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_aliment_index");
        yield "\"
                       class=\"nav-link ";
        // line 153
        if ((is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 153, $this->source); })()), "request", [], "any", false, false, false, 153), "attributes", [], "any", false, false, false, 153), "get", ["_route"], "method", false, false, false, 153)) && is_string($_v9 = "app_aliment_") && str_starts_with($_v8, $_v9))) {
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
        // line 163
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_repas_index");
        yield "\"
                       class=\"nav-link ";
        // line 164
        if ((is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 164, $this->source); })()), "request", [], "any", false, false, false, 164), "attributes", [], "any", false, false, false, 164), "get", ["_route"], "method", false, false, false, 164)) && is_string($_v11 = "app_repas_") && str_starts_with($_v10, $_v11))) {
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
        // line 178
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Formation</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 182
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_index");
        yield "\"
                       class=\"nav-link ";
        // line 183
        if ((is_string($_v12 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 183, $this->source); })()), "request", [], "any", false, false, false, 183), "attributes", [], "any", false, false, false, 183), "get", ["_route"], "method", false, false, false, 183)) && is_string($_v13 = "app_cours_") && str_starts_with($_v12, $_v13))) {
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
        // line 193
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chapitre_index");
        yield "\"
                       class=\"nav-link ";
        // line 194
        if ((is_string($_v14 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 194, $this->source); })()), "request", [], "any", false, false, false, 194), "attributes", [], "any", false, false, false, 194), "get", ["_route"], "method", false, false, false, 194)) && is_string($_v15 = "app_chapitre_") && str_starts_with($_v14, $_v15))) {
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
        // line 210
        yield "        <li class=\"nav-section\">
            <span class=\"nav-section-title\">Compte</span>
            <ul>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 214
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\"
                       class=\"nav-link ";
        // line 215
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 215, $this->source); })()), "request", [], "any", false, false, false, 215), "attributes", [], "any", false, false, false, 215), "get", ["_route"], "method", false, false, false, 215) == "app_profile")) {
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
        // line 225
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\"
                       class=\"nav-link ";
        // line 226
        if ((is_string($_v16 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 226, $this->source); })()), "request", [], "any", false, false, false, 226), "attributes", [], "any", false, false, false, 226), "get", ["_route"], "method", false, false, false, 226)) && is_string($_v17 = "app_user_") && str_starts_with($_v16, $_v17))) {
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
        // line 238
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
                <div style=\"display:flex;align-items:center;gap:14px;flex-wrap:wrap;\">
                    <h1 class=\"page-title\" style=\"margin:0;\">Tableau de bord d'energies</h1>

                    ";
        // line 274
        yield "                    ";
        if ((($tmp = (isset($context["isAdmin"]) || array_key_exists("isAdmin", $context) ? $context["isAdmin"] : (function () { throw new RuntimeError('Variable "isAdmin" does not exist.', 274, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 275
            yield "                        <form method=\"get\" action=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stateenergi");
            yield "\" style=\"display:flex;gap:10px;align-items:center;\">
                            <label style=\"color:var(--text); font-weight:600;\">Utilisateur:</label>
                            <select name=\"user\"
                                    onchange=\"this.form.submit()\"
                                    style=\"padding:10px 12px;border-radius:12px;border:1px solid rgba(255,255,255,0.2);background:rgba(255,255,255,0.08);color:var(--text);outline:none;\">
                                <option value=\"all\" ";
            // line 280
            yield ((((isset($context["selectedUserId"]) || array_key_exists("selectedUserId", $context) ? $context["selectedUserId"] : (function () { throw new RuntimeError('Variable "selectedUserId" does not exist.', 280, $this->source); })()) == "all")) ? ("selected") : (""));
            yield ">Tous</option>
                                ";
            // line 281
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 281, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 282
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 282), "html", null, true);
                yield "\" ";
                yield ((((isset($context["selectedUserId"]) || array_key_exists("selectedUserId", $context) ? $context["selectedUserId"] : (function () { throw new RuntimeError('Variable "selectedUserId" does not exist.', 282, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 282))) ? ("selected") : (""));
                yield ">
                                        ";
                // line 283
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "name", [], "any", false, false, false, 283), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "email", [], "any", false, false, false, 283), "html", null, true);
                yield ")
                                    </option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['u'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 286
            yield "                            </select>
                        </form>
                    ";
        }
        // line 289
        yield "                </div>

                <div class=\"navbar-right\">
                    <div class=\"search-box\">
                        <svg class=\"search-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <circle cx=\"11\" cy=\"11\" r=\"8\"/>
                            <line x1=\"21\" y1=\"21\" x2=\"16.65\" y2=\"16.65\"/>
                        </svg>
                        <input type=\"text\" class=\"search-input\" placeholder=\"Rechercher...\">
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
                            <h3>Total Consommation</h3>
                            <div class=\"stat-value\">";
        // line 327
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalConsommation"]) || array_key_exists("totalConsommation", $context) ? $context["totalConsommation"] : (function () { throw new RuntimeError('Variable "totalConsommation" does not exist.', 327, $this->source); })()), "html", null, true);
        yield " kWh</div>
                            <span class=\"stat-change ";
        // line 328
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["energyChangeDirection"]) || array_key_exists("energyChangeDirection", $context) ? $context["energyChangeDirection"] : (function () { throw new RuntimeError('Variable "energyChangeDirection" does not exist.', 328, $this->source); })()), "html", null, true);
        yield "\">
                                <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    ";
        // line 330
        if (((isset($context["energyChangeDirection"]) || array_key_exists("energyChangeDirection", $context) ? $context["energyChangeDirection"] : (function () { throw new RuntimeError('Variable "energyChangeDirection" does not exist.', 330, $this->source); })()) == "positive")) {
            // line 331
            yield "                                        <polyline points=\"23 6 13.5 15.5 8.5 10.5 1 18\"/>
                                    ";
        } else {
            // line 333
            yield "                                        <polyline points=\"23 18 13.5 8.5 8.5 13.5 1 6\"/>
                                    ";
        }
        // line 335
        yield "                                </svg>
                                ";
        // line 336
        yield ((((isset($context["energyChangeDirection"]) || array_key_exists("energyChangeDirection", $context) ? $context["energyChangeDirection"] : (function () { throw new RuntimeError('Variable "energyChangeDirection" does not exist.', 336, $this->source); })()) == "positive")) ? ("+") : (""));
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["energyChangePercent"]) || array_key_exists("energyChangePercent", $context) ? $context["energyChangePercent"] : (function () { throw new RuntimeError('Variable "energyChangePercent" does not exist.', 336, $this->source); })()), "html", null, true);
        yield "%
                            </span>
                        </div>
                        <div class=\"stat-icon cyan\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--emerald-light)\" stroke-width=\"2\">
                                <path d=\"M13 2L3 14h8l-1 8 10-12h-8l1-8z\"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class=\"glass-card glass-card-3d stat-card\">
                    <div class=\"stat-card-inner\">
                        <div class=\"stat-info\">
                            <h3>Énergies Enregistrées</h3>
                            <div class=\"stat-value\">";
        // line 351
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalEnergies"]) || array_key_exists("totalEnergies", $context) ? $context["totalEnergies"] : (function () { throw new RuntimeError('Variable "totalEnergies" does not exist.', 351, $this->source); })()), "html", null, true);
        yield "</div>
                            <span class=\"stat-change positive\">
                                <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <polyline points=\"23 6 13.5 15.5 8.5 10.5 1 18\"/>
                                </svg>
                                Total
                            </span>
                        </div>
                        <div class=\"stat-icon magenta\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--gold)\" stroke-width=\"2\">
                                <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                                <polyline points=\"12 6 12 12 16 14\"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class=\"glass-card glass-card-3d stat-card\">
                    <div class=\"stat-card-inner\">
                        <div class=\"stat-info\">
                            <h3>Recommandations</h3>
                            <div class=\"stat-value\">";
        // line 372
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalRecommandations"]) || array_key_exists("totalRecommandations", $context) ? $context["totalRecommandations"] : (function () { throw new RuntimeError('Variable "totalRecommandations" does not exist.', 372, $this->source); })()), "html", null, true);
        yield "</div>
                            <span class=\"stat-change positive\">
                                <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <polyline points=\"23 6 13.5 15.5 8.5 10.5 1 18\"/>
                                </svg>
                                Actives
                            </span>
                        </div>
                        <div class=\"stat-icon purple\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--coral)\" stroke-width=\"2\">
                                <path d=\"M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z\"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class=\"glass-card glass-card-3d stat-card\">
                    <div class=\"stat-card-inner\">
                        <div class=\"stat-info\">
                            <h3>Utilisateurs</h3>
                            <div class=\"stat-value\">";
        // line 392
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalUsers"]) || array_key_exists("totalUsers", $context) ? $context["totalUsers"] : (function () { throw new RuntimeError('Variable "totalUsers" does not exist.', 392, $this->source); })()), "html", null, true);
        yield "</div>
                            <span class=\"stat-change positive\">
                                <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <polyline points=\"23 6 13.5 15.5 8.5 10.5 1 18\"/>
                                </svg>
                                Actifs
                            </span>
                        </div>
                        <div class=\"stat-icon success\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--success)\" stroke-width=\"2\">
                                <path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"/>
                                <circle cx=\"9\" cy=\"7\" r=\"4\"/>
                                <path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"/>
                                <path d=\"M16 3.13a4 4 0 0 1 0 7.75\"/>
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
                            <h2 class=\"card-title\">Consommation Mensuelle</h2>
                            <p class=\"card-subtitle\">Vue d'ensemble mensuelle (";
        // line 419
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield ")</p>
                        </div>
                        <div class=\"card-actions\">
                            <button class=\"card-btn active\">Mensuel</button>
                            <button class=\"card-btn\">Hebdomadaire</button>
                            <button class=\"card-btn\">Journalier</button>
                        </div>
                    </div>
                    <div class=\"chart-wrapper\">
                        <div class=\"chart-container\">
                            <div class=\"chart-y-axis\">
                                <span class=\"y-value\">200</span>
                                <span class=\"y-value\">160</span>
                                <span class=\"y-value\">120</span>
                                <span class=\"y-value\">80</span>
                                <span class=\"y-value\">40</span>
                                <span class=\"y-value\">0</span>
                            </div>
                            <div class=\"chart-placeholder\">
                                ";
        // line 438
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["monthlyData"]) || array_key_exists("monthlyData", $context) ? $context["monthlyData"] : (function () { throw new RuntimeError('Variable "monthlyData" does not exist.', 438, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 439
            yield "                                <div class=\"chart-bar-group\">
                                    <div class=\"chart-bar bar-emerald\" style=\"height: ";
            // line 440
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "height", [], "any", false, false, false, 440), "html", null, true);
            yield "px;\"></div>
                                    <span class=\"chart-label\">";
            // line 441
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "month", [], "any", false, false, false, 441), "html", null, true);
            yield "</span>
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['data'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 444
        yield "                            </div>
                        </div>
                    </div>
                </div>

                <!-- Activity Feed -->
                <div class=\"glass-card activity-card\">
                    <div class=\"card-header\">
                        <div>
                            <h2 class=\"card-title\">Activités Récentes</h2>
                            <p class=\"card-subtitle\">Derniers enregistrements</p>
                        </div>
                    </div>
                    <div class=\"activity-list\">
                        ";
        // line 458
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 458, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 459
            yield "                        <div class=\"activity-item\">
                            <div class=\"activity-avatar\" style=\"background: linear-gradient(135deg, var(--emerald-light), var(--emerald));\">
                                ";
            // line 461
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "userInitials", [], "any", false, false, false, 461), "html", null, true);
            yield "
                            </div>
                            <div class=\"activity-content\">
                                <p class=\"activity-text\"><strong>";
            // line 464
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "userName", [], "any", false, false, false, 464), "html", null, true);
            yield "</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "action", [], "any", false, false, false, 464), "html", null, true);
            yield "</p>
                                <span class=\"activity-time\">";
            // line 465
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "timeAgo", [], "any", false, false, false, 465), "html", null, true);
            yield "</span>
                            </div>
                        </div>
                        ";
            $context['_iterated'] = true;
        }
        // line 468
        if (!$context['_iterated']) {
            // line 469
            yield "                        <p style=\"text-align:center; padding: 20px; color: var(--text-muted);\">Aucune activité récente</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['activity'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 471
        yield "                    </div>
                </div>

                <!-- Data Table -->
                <div class=\"glass-card table-card\">
                    <div class=\"card-header\">
                        <div>
                            <h2 class=\"card-title\">Derniers Enregistrements</h2>
                            <p class=\"card-subtitle\">Énergies récemment ajoutées</p>
                        </div>
                        <div class=\"card-actions\">
                            <button class=\"card-btn\" onclick=\"window.location.href='";
        // line 482
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("energy");
        yield "'\">Voir tout</button>
                            <button class=\"card-btn\">Exporter</button>
                        </div>
                    </div>
                    <div class=\"table-wrapper\">
                        <table class=\"data-table\">
                            <thead>
                                <tr>
                                    <th>Utilisateur</th>
                                    <th>Type d'énergie</th>
                                    <th>Date</th>
                                    <th>Statut</th>
                                    <th>Valeur</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 498
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recentTransactions"]) || array_key_exists("recentTransactions", $context) ? $context["recentTransactions"] : (function () { throw new RuntimeError('Variable "recentTransactions" does not exist.', 498, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
            // line 499
            yield "                                <tr>
                                    <td>
                                        <div class=\"table-user\">
                                            <div class=\"table-avatar\" style=\"background: linear-gradient(135deg, var(--emerald-light), var(--emerald));\">
                                                ";
            // line 503
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "userInitials", [], "any", false, false, false, 503), "html", null, true);
            yield "
                                            </div>
                                            <div class=\"table-user-info\">
                                                <span class=\"table-user-name\">";
            // line 506
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "userName", [], "any", false, false, false, 506), "html", null, true);
            yield "</span>
                                                <span class=\"table-user-email\">";
            // line 507
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "userEmail", [], "any", false, false, false, 507), "html", null, true);
            yield "</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>";
            // line 511
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "product", [], "any", false, false, false, 511), "html", null, true);
            yield "</td>
                                    <td>";
            // line 512
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "date", [], "any", false, false, false, 512), "html", null, true);
            yield "</td>
                                    <td><span class=\"status-badge completed\">Complété</span></td>
                                    <td><span class=\"table-amount\">";
            // line 514
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "amount", [], "any", false, false, false, 514), "html", null, true);
            yield "</span></td>
                                </tr>
                                ";
            $context['_iterated'] = true;
        }
        // line 516
        if (!$context['_iterated']) {
            // line 517
            yield "                                <tr>
                                    <td colspan=\"5\" style=\"text-align:center; padding: 20px;\">Aucun enregistrement</td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['transaction'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 521
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- Bottom Grid -->
            <section class=\"bottom-grid\">
                <!-- Calendar Widget -->
                <div class=\"glass-card\">
                    <div class=\"calendar-header\">
                        <h2 class=\"card-title\">";
        // line 532
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "F Y"), "html", null, true);
        yield "</h2>
                        <div class=\"calendar-nav\">
                            <button class=\"calendar-nav-btn\"><svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><polyline points=\"15 18 9 12 15 6\"/></svg></button>
                            <button class=\"calendar-nav-btn\"><svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><polyline points=\"9 18 15 12 9 6\"/></svg></button>
                        </div>
                    </div>
                    <div class=\"calendar-grid\">
                        <span class=\"calendar-day-name\">Dim</span>
                        <span class=\"calendar-day-name\">Lun</span>
                        <span class=\"calendar-day-name\">Mar</span>
                        <span class=\"calendar-day-name\">Mer</span>
                        <span class=\"calendar-day-name\">Jeu</span>
                        <span class=\"calendar-day-name\">Ven</span>
                        <span class=\"calendar-day-name\">Sam</span>
                        <span class=\"calendar-day other-month\">29</span>
                        <span class=\"calendar-day other-month\">30</span>
                        <span class=\"calendar-day other-month\">31</span>
                        <span class=\"calendar-day\">1</span>
                        <span class=\"calendar-day\">2</span>
                        <span class=\"calendar-day\">3</span>
                        <span class=\"calendar-day\">4</span>
                        <span class=\"calendar-day\">5</span>
                        <span class=\"calendar-day today\">";
        // line 554
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d"), "html", null, true);
        yield "</span>
                        <span class=\"calendar-day\">7</span>
                        <span class=\"calendar-day\">8</span>
                        <span class=\"calendar-day\">9</span>
                        <span class=\"calendar-day\">10</span>
                        <span class=\"calendar-day\">11</span>
                        <span class=\"calendar-day\">12</span>
                        <span class=\"calendar-day\">13</span>
                        <span class=\"calendar-day\">14</span>
                        <span class=\"calendar-day\">15</span>
                        <span class=\"calendar-day\">16</span>
                        <span class=\"calendar-day\">17</span>
                        <span class=\"calendar-day\">18</span>
                        <span class=\"calendar-day\">19</span>
                        <span class=\"calendar-day\">20</span>
                        <span class=\"calendar-day\">21</span>
                        <span class=\"calendar-day\">22</span>
                        <span class=\"calendar-day\">23</span>
                        <span class=\"calendar-day\">24</span>
                        <span class=\"calendar-day\">25</span>
                        <span class=\"calendar-day\">26</span>
                        <span class=\"calendar-day\">27</span>
                        <span class=\"calendar-day\">28</span>
                        <span class=\"calendar-day other-month\">1</span>
                    </div>
                </div>

                <!-- Donut Chart -->
                <div class=\"glass-card\">
                    <div class=\"card-header\">
                        <div>
                            <h2 class=\"card-title\">Types d'Énergie</h2>
                            <p class=\"card-subtitle\">Répartition par type</p>
                        </div>
                    </div>
                    <div class=\"donut-container\">
                        <div class=\"donut-chart\">
                            <svg width=\"140\" height=\"140\" viewBox=\"0 0 140 140\">
                                <circle class=\"donut-bg\" cx=\"70\" cy=\"70\" r=\"54\"/>
                                ";
        // line 593
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pieData"]) || array_key_exists("pieData", $context) ? $context["pieData"] : (function () { throw new RuntimeError('Variable "pieData" does not exist.', 593, $this->source); })())) > 0)) {
            // line 594
            yield "                                    ";
            $context["offset"] = 0;
            // line 595
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pieData"]) || array_key_exists("pieData", $context) ? $context["pieData"] : (function () { throw new RuntimeError('Variable "pieData" does not exist.', 595, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pie"]) {
                // line 596
                yield "                                        ";
                $context["strokeDash"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["pie"], "percentage", [], "any", false, false, false, 596) / 100) * 339.3);
                // line 597
                yield "                                        <circle class=\"donut-segment\" cx=\"70\" cy=\"70\" r=\"54\"
                                                stroke=\"var(--";
                // line 598
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["pie"], "color", [], "any", false, false, false, 598) == "cyan")) ? ("emerald-light") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["pie"], "color", [], "any", false, false, false, 598) == "magenta")) ? ("gold") : ("coral"))));
                yield ")\"
                                                stroke-dasharray=\"";
                // line 599
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["strokeDash"]) || array_key_exists("strokeDash", $context) ? $context["strokeDash"] : (function () { throw new RuntimeError('Variable "strokeDash" does not exist.', 599, $this->source); })()), "html", null, true);
                yield " 339.3\"
                                                stroke-dashoffset=\"";
                // line 600
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape( -(isset($context["offset"]) || array_key_exists("offset", $context) ? $context["offset"] : (function () { throw new RuntimeError('Variable "offset" does not exist.', 600, $this->source); })()), "html", null, true);
                yield "\"/>
                                        ";
                // line 601
                $context["offset"] = ((isset($context["offset"]) || array_key_exists("offset", $context) ? $context["offset"] : (function () { throw new RuntimeError('Variable "offset" does not exist.', 601, $this->source); })()) + (isset($context["strokeDash"]) || array_key_exists("strokeDash", $context) ? $context["strokeDash"] : (function () { throw new RuntimeError('Variable "strokeDash" does not exist.', 601, $this->source); })()));
                // line 602
                yield "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['pie'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 603
            yield "                                ";
        } else {
            // line 604
            yield "                                    <circle class=\"donut-segment\" cx=\"70\" cy=\"70\" r=\"54\" stroke=\"var(--emerald-light)\" stroke-dasharray=\"339.3 339.3\" stroke-dashoffset=\"0\"/>
                                ";
        }
        // line 606
        yield "                            </svg>
                            <div class=\"donut-center\">
                                <div class=\"donut-value\">";
        // line 608
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalEnergies"]) || array_key_exists("totalEnergies", $context) ? $context["totalEnergies"] : (function () { throw new RuntimeError('Variable "totalEnergies" does not exist.', 608, $this->source); })()), "html", null, true);
        yield "</div>
                                <div class=\"donut-label\">Énergies</div>
                            </div>
                        </div>
                        <div class=\"donut-legend\">
                            ";
        // line 613
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pieData"]) || array_key_exists("pieData", $context) ? $context["pieData"] : (function () { throw new RuntimeError('Variable "pieData" does not exist.', 613, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["pie"]) {
            // line 614
            yield "                            <div class=\"legend-item\">
                                <span class=\"legend-color ";
            // line 615
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pie"], "color", [], "any", false, false, false, 615), "html", null, true);
            yield "\"></span>
                                <span>";
            // line 616
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pie"], "type", [], "any", false, false, false, 616), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pie"], "percentage", [], "any", false, false, false, 616), "html", null, true);
            yield "%)</span>
                            </div>
                            ";
            $context['_iterated'] = true;
        }
        // line 618
        if (!$context['_iterated']) {
            // line 619
            yield "                            <div class=\"legend-item\">
                                <span class=\"legend-color cyan\"></span>
                                <span>Aucune donnée disponible</span>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['pie'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 624
        yield "                        </div>
                    </div>
                </div>

                <!-- Progress Card -->
                <div class=\"glass-card progress-card\">
                    <div class=\"card-header\">
                        <div>
                            <h2 class=\"card-title\">Recommandations par Impact</h2>
                            <p class=\"card-subtitle\">Répartition par niveau</p>
                        </div>
                    </div>
                    ";
        // line 636
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["progressData"]) || array_key_exists("progressData", $context) ? $context["progressData"] : (function () { throw new RuntimeError('Variable "progressData" does not exist.', 636, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["progress"]) {
            // line 637
            yield "                    <div class=\"progress-item\">
                        <div class=\"progress-header\">
                            <span class=\"progress-label\">";
            // line 639
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["progress"], "label", [], "any", false, false, false, 639), "html", null, true);
            yield "</span>
                            <span class=\"progress-value\">";
            // line 640
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["progress"], "percentage", [], "any", false, false, false, 640), "html", null, true);
            yield "%</span>
                        </div>
                        <div class=\"progress-bar\">
                            <div class=\"progress-fill ";
            // line 643
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["progress"], "color", [], "any", false, false, false, 643), "html", null, true);
            yield "\" style=\"width: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["progress"], "percentage", [], "any", false, false, false, 643), "html", null, true);
            yield "%;\"></div>
                        </div>
                    </div>
                    ";
            $context['_iterated'] = true;
        }
        // line 646
        if (!$context['_iterated']) {
            // line 647
            yield "                    <p style=\"text-align:center; padding: 20px; color: var(--text-muted);\">Aucune recommandation</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['progress'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 649
        yield "                </div>
            </section>
        </main>
    </div>

    <!-- Mobile Menu Toggle -->
    <button class=\"mobile-menu-toggle\">
        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
            <line x1=\"3\" y1=\"12\" x2=\"21\" y2=\"12\"/>
            <line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\"/>
            <line x1=\"3\" y1=\"18\" x2=\"21\" y2=\"18\"/>
        </svg>
    </button>

    <!-- Footer -->
    <footer class=\"site-footer\">
        <p>Copyright © 2026 EnergyDash. Dashboard de gestion d'énergie</p>
    </footer>

    <script src=\"";
        // line 668
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
        return "back/energie/stateenergi.html.twig";
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
        return array (  1075 => 668,  1054 => 649,  1047 => 647,  1045 => 646,  1035 => 643,  1029 => 640,  1025 => 639,  1021 => 637,  1016 => 636,  1002 => 624,  992 => 619,  990 => 618,  981 => 616,  977 => 615,  974 => 614,  969 => 613,  961 => 608,  957 => 606,  953 => 604,  950 => 603,  944 => 602,  942 => 601,  938 => 600,  934 => 599,  930 => 598,  927 => 597,  924 => 596,  919 => 595,  916 => 594,  914 => 593,  872 => 554,  847 => 532,  834 => 521,  825 => 517,  823 => 516,  816 => 514,  811 => 512,  807 => 511,  800 => 507,  796 => 506,  790 => 503,  784 => 499,  779 => 498,  760 => 482,  747 => 471,  740 => 469,  738 => 468,  730 => 465,  724 => 464,  718 => 461,  714 => 459,  709 => 458,  693 => 444,  684 => 441,  680 => 440,  677 => 439,  673 => 438,  651 => 419,  621 => 392,  598 => 372,  574 => 351,  555 => 336,  552 => 335,  548 => 333,  544 => 331,  542 => 330,  537 => 328,  533 => 327,  493 => 289,  488 => 286,  477 => 283,  470 => 282,  466 => 281,  462 => 280,  453 => 275,  450 => 274,  412 => 238,  395 => 226,  391 => 225,  376 => 215,  372 => 214,  366 => 210,  346 => 194,  342 => 193,  327 => 183,  323 => 182,  317 => 178,  299 => 164,  295 => 163,  280 => 153,  276 => 152,  270 => 148,  254 => 136,  250 => 135,  234 => 124,  230 => 123,  216 => 114,  212 => 113,  206 => 109,  188 => 95,  184 => 94,  168 => 83,  164 => 82,  158 => 78,  145 => 69,  141 => 68,  138 => 67,  123 => 56,  119 => 55,  114 => 52,  99 => 41,  95 => 40,  89 => 36,  79 => 28,  60 => 12,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/back/energie/stateenergi.html.twig #}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Dashboard - EnergyDash</title>
    <meta name=\"description\" content=\"Dashboard de gestion d'énergie\">
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

        <!-- Main Content -->
        <main class=\"main-content\">
            <!-- Top Navbar -->
            <nav class=\"navbar\">
                <div style=\"display:flex;align-items:center;gap:14px;flex-wrap:wrap;\">
                    <h1 class=\"page-title\" style=\"margin:0;\">Tableau de bord d'energies</h1>

                    {# ✅ MODIF: dropdown admin pour filtrer par utilisateur #}
                    {% if isAdmin %}
                        <form method=\"get\" action=\"{{ path('stateenergi') }}\" style=\"display:flex;gap:10px;align-items:center;\">
                            <label style=\"color:var(--text); font-weight:600;\">Utilisateur:</label>
                            <select name=\"user\"
                                    onchange=\"this.form.submit()\"
                                    style=\"padding:10px 12px;border-radius:12px;border:1px solid rgba(255,255,255,0.2);background:rgba(255,255,255,0.08);color:var(--text);outline:none;\">
                                <option value=\"all\" {{ selectedUserId == 'all' ? 'selected' : '' }}>Tous</option>
                                {% for u in users %}
                                    <option value=\"{{ u.id }}\" {{ selectedUserId == u.id ? 'selected' : '' }}>
                                        {{ u.name }} ({{ u.email }})
                                    </option>
                                {% endfor %}
                            </select>
                        </form>
                    {% endif %}
                </div>

                <div class=\"navbar-right\">
                    <div class=\"search-box\">
                        <svg class=\"search-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <circle cx=\"11\" cy=\"11\" r=\"8\"/>
                            <line x1=\"21\" y1=\"21\" x2=\"16.65\" y2=\"16.65\"/>
                        </svg>
                        <input type=\"text\" class=\"search-input\" placeholder=\"Rechercher...\">
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
                            <h3>Total Consommation</h3>
                            <div class=\"stat-value\">{{ totalConsommation }} kWh</div>
                            <span class=\"stat-change {{ energyChangeDirection }}\">
                                <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    {% if energyChangeDirection == 'positive' %}
                                        <polyline points=\"23 6 13.5 15.5 8.5 10.5 1 18\"/>
                                    {% else %}
                                        <polyline points=\"23 18 13.5 8.5 8.5 13.5 1 6\"/>
                                    {% endif %}
                                </svg>
                                {{ energyChangeDirection == 'positive' ? '+' : '' }}{{ energyChangePercent }}%
                            </span>
                        </div>
                        <div class=\"stat-icon cyan\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--emerald-light)\" stroke-width=\"2\">
                                <path d=\"M13 2L3 14h8l-1 8 10-12h-8l1-8z\"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class=\"glass-card glass-card-3d stat-card\">
                    <div class=\"stat-card-inner\">
                        <div class=\"stat-info\">
                            <h3>Énergies Enregistrées</h3>
                            <div class=\"stat-value\">{{ totalEnergies }}</div>
                            <span class=\"stat-change positive\">
                                <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <polyline points=\"23 6 13.5 15.5 8.5 10.5 1 18\"/>
                                </svg>
                                Total
                            </span>
                        </div>
                        <div class=\"stat-icon magenta\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--gold)\" stroke-width=\"2\">
                                <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                                <polyline points=\"12 6 12 12 16 14\"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class=\"glass-card glass-card-3d stat-card\">
                    <div class=\"stat-card-inner\">
                        <div class=\"stat-info\">
                            <h3>Recommandations</h3>
                            <div class=\"stat-value\">{{ totalRecommandations }}</div>
                            <span class=\"stat-change positive\">
                                <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <polyline points=\"23 6 13.5 15.5 8.5 10.5 1 18\"/>
                                </svg>
                                Actives
                            </span>
                        </div>
                        <div class=\"stat-icon purple\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--coral)\" stroke-width=\"2\">
                                <path d=\"M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z\"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class=\"glass-card glass-card-3d stat-card\">
                    <div class=\"stat-card-inner\">
                        <div class=\"stat-info\">
                            <h3>Utilisateurs</h3>
                            <div class=\"stat-value\">{{ totalUsers }}</div>
                            <span class=\"stat-change positive\">
                                <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <polyline points=\"23 6 13.5 15.5 8.5 10.5 1 18\"/>
                                </svg>
                                Actifs
                            </span>
                        </div>
                        <div class=\"stat-icon success\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--success)\" stroke-width=\"2\">
                                <path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"/>
                                <circle cx=\"9\" cy=\"7\" r=\"4\"/>
                                <path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"/>
                                <path d=\"M16 3.13a4 4 0 0 1 0 7.75\"/>
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
                            <h2 class=\"card-title\">Consommation Mensuelle</h2>
                            <p class=\"card-subtitle\">Vue d'ensemble mensuelle ({{ \"now\"|date(\"Y\") }})</p>
                        </div>
                        <div class=\"card-actions\">
                            <button class=\"card-btn active\">Mensuel</button>
                            <button class=\"card-btn\">Hebdomadaire</button>
                            <button class=\"card-btn\">Journalier</button>
                        </div>
                    </div>
                    <div class=\"chart-wrapper\">
                        <div class=\"chart-container\">
                            <div class=\"chart-y-axis\">
                                <span class=\"y-value\">200</span>
                                <span class=\"y-value\">160</span>
                                <span class=\"y-value\">120</span>
                                <span class=\"y-value\">80</span>
                                <span class=\"y-value\">40</span>
                                <span class=\"y-value\">0</span>
                            </div>
                            <div class=\"chart-placeholder\">
                                {% for data in monthlyData %}
                                <div class=\"chart-bar-group\">
                                    <div class=\"chart-bar bar-emerald\" style=\"height: {{ data.height }}px;\"></div>
                                    <span class=\"chart-label\">{{ data.month }}</span>
                                </div>
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Activity Feed -->
                <div class=\"glass-card activity-card\">
                    <div class=\"card-header\">
                        <div>
                            <h2 class=\"card-title\">Activités Récentes</h2>
                            <p class=\"card-subtitle\">Derniers enregistrements</p>
                        </div>
                    </div>
                    <div class=\"activity-list\">
                        {% for activity in activities %}
                        <div class=\"activity-item\">
                            <div class=\"activity-avatar\" style=\"background: linear-gradient(135deg, var(--emerald-light), var(--emerald));\">
                                {{ activity.userInitials }}
                            </div>
                            <div class=\"activity-content\">
                                <p class=\"activity-text\"><strong>{{ activity.userName }}</strong> {{ activity.action }}</p>
                                <span class=\"activity-time\">{{ activity.timeAgo }}</span>
                            </div>
                        </div>
                        {% else %}
                        <p style=\"text-align:center; padding: 20px; color: var(--text-muted);\">Aucune activité récente</p>
                        {% endfor %}
                    </div>
                </div>

                <!-- Data Table -->
                <div class=\"glass-card table-card\">
                    <div class=\"card-header\">
                        <div>
                            <h2 class=\"card-title\">Derniers Enregistrements</h2>
                            <p class=\"card-subtitle\">Énergies récemment ajoutées</p>
                        </div>
                        <div class=\"card-actions\">
                            <button class=\"card-btn\" onclick=\"window.location.href='{{ path('energy') }}'\">Voir tout</button>
                            <button class=\"card-btn\">Exporter</button>
                        </div>
                    </div>
                    <div class=\"table-wrapper\">
                        <table class=\"data-table\">
                            <thead>
                                <tr>
                                    <th>Utilisateur</th>
                                    <th>Type d'énergie</th>
                                    <th>Date</th>
                                    <th>Statut</th>
                                    <th>Valeur</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for transaction in recentTransactions %}
                                <tr>
                                    <td>
                                        <div class=\"table-user\">
                                            <div class=\"table-avatar\" style=\"background: linear-gradient(135deg, var(--emerald-light), var(--emerald));\">
                                                {{ transaction.userInitials }}
                                            </div>
                                            <div class=\"table-user-info\">
                                                <span class=\"table-user-name\">{{ transaction.userName }}</span>
                                                <span class=\"table-user-email\">{{ transaction.userEmail }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ transaction.product }}</td>
                                    <td>{{ transaction.date }}</td>
                                    <td><span class=\"status-badge completed\">Complété</span></td>
                                    <td><span class=\"table-amount\">{{ transaction.amount }}</span></td>
                                </tr>
                                {% else %}
                                <tr>
                                    <td colspan=\"5\" style=\"text-align:center; padding: 20px;\">Aucun enregistrement</td>
                                </tr>
                                {% endfor %}
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
                        <h2 class=\"card-title\">{{ \"now\"|date(\"F Y\") }}</h2>
                        <div class=\"calendar-nav\">
                            <button class=\"calendar-nav-btn\"><svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><polyline points=\"15 18 9 12 15 6\"/></svg></button>
                            <button class=\"calendar-nav-btn\"><svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><polyline points=\"9 18 15 12 9 6\"/></svg></button>
                        </div>
                    </div>
                    <div class=\"calendar-grid\">
                        <span class=\"calendar-day-name\">Dim</span>
                        <span class=\"calendar-day-name\">Lun</span>
                        <span class=\"calendar-day-name\">Mar</span>
                        <span class=\"calendar-day-name\">Mer</span>
                        <span class=\"calendar-day-name\">Jeu</span>
                        <span class=\"calendar-day-name\">Ven</span>
                        <span class=\"calendar-day-name\">Sam</span>
                        <span class=\"calendar-day other-month\">29</span>
                        <span class=\"calendar-day other-month\">30</span>
                        <span class=\"calendar-day other-month\">31</span>
                        <span class=\"calendar-day\">1</span>
                        <span class=\"calendar-day\">2</span>
                        <span class=\"calendar-day\">3</span>
                        <span class=\"calendar-day\">4</span>
                        <span class=\"calendar-day\">5</span>
                        <span class=\"calendar-day today\">{{ \"now\"|date(\"d\") }}</span>
                        <span class=\"calendar-day\">7</span>
                        <span class=\"calendar-day\">8</span>
                        <span class=\"calendar-day\">9</span>
                        <span class=\"calendar-day\">10</span>
                        <span class=\"calendar-day\">11</span>
                        <span class=\"calendar-day\">12</span>
                        <span class=\"calendar-day\">13</span>
                        <span class=\"calendar-day\">14</span>
                        <span class=\"calendar-day\">15</span>
                        <span class=\"calendar-day\">16</span>
                        <span class=\"calendar-day\">17</span>
                        <span class=\"calendar-day\">18</span>
                        <span class=\"calendar-day\">19</span>
                        <span class=\"calendar-day\">20</span>
                        <span class=\"calendar-day\">21</span>
                        <span class=\"calendar-day\">22</span>
                        <span class=\"calendar-day\">23</span>
                        <span class=\"calendar-day\">24</span>
                        <span class=\"calendar-day\">25</span>
                        <span class=\"calendar-day\">26</span>
                        <span class=\"calendar-day\">27</span>
                        <span class=\"calendar-day\">28</span>
                        <span class=\"calendar-day other-month\">1</span>
                    </div>
                </div>

                <!-- Donut Chart -->
                <div class=\"glass-card\">
                    <div class=\"card-header\">
                        <div>
                            <h2 class=\"card-title\">Types d'Énergie</h2>
                            <p class=\"card-subtitle\">Répartition par type</p>
                        </div>
                    </div>
                    <div class=\"donut-container\">
                        <div class=\"donut-chart\">
                            <svg width=\"140\" height=\"140\" viewBox=\"0 0 140 140\">
                                <circle class=\"donut-bg\" cx=\"70\" cy=\"70\" r=\"54\"/>
                                {% if pieData|length > 0 %}
                                    {% set offset = 0 %}
                                    {% for pie in pieData %}
                                        {% set strokeDash = (pie.percentage / 100) * 339.3 %}
                                        <circle class=\"donut-segment\" cx=\"70\" cy=\"70\" r=\"54\"
                                                stroke=\"var(--{{ pie.color == 'cyan' ? 'emerald-light' : (pie.color == 'magenta' ? 'gold' : 'coral') }})\"
                                                stroke-dasharray=\"{{ strokeDash }} 339.3\"
                                                stroke-dashoffset=\"{{ -offset }}\"/>
                                        {% set offset = offset + strokeDash %}
                                    {% endfor %}
                                {% else %}
                                    <circle class=\"donut-segment\" cx=\"70\" cy=\"70\" r=\"54\" stroke=\"var(--emerald-light)\" stroke-dasharray=\"339.3 339.3\" stroke-dashoffset=\"0\"/>
                                {% endif %}
                            </svg>
                            <div class=\"donut-center\">
                                <div class=\"donut-value\">{{ totalEnergies }}</div>
                                <div class=\"donut-label\">Énergies</div>
                            </div>
                        </div>
                        <div class=\"donut-legend\">
                            {% for pie in pieData %}
                            <div class=\"legend-item\">
                                <span class=\"legend-color {{ pie.color }}\"></span>
                                <span>{{ pie.type }} ({{ pie.percentage }}%)</span>
                            </div>
                            {% else %}
                            <div class=\"legend-item\">
                                <span class=\"legend-color cyan\"></span>
                                <span>Aucune donnée disponible</span>
                            </div>
                            {% endfor %}
                        </div>
                    </div>
                </div>

                <!-- Progress Card -->
                <div class=\"glass-card progress-card\">
                    <div class=\"card-header\">
                        <div>
                            <h2 class=\"card-title\">Recommandations par Impact</h2>
                            <p class=\"card-subtitle\">Répartition par niveau</p>
                        </div>
                    </div>
                    {% for progress in progressData %}
                    <div class=\"progress-item\">
                        <div class=\"progress-header\">
                            <span class=\"progress-label\">{{ progress.label }}</span>
                            <span class=\"progress-value\">{{ progress.percentage }}%</span>
                        </div>
                        <div class=\"progress-bar\">
                            <div class=\"progress-fill {{ progress.color }}\" style=\"width: {{ progress.percentage }}%;\"></div>
                        </div>
                    </div>
                    {% else %}
                    <p style=\"text-align:center; padding: 20px; color: var(--text-muted);\">Aucune recommandation</p>
                    {% endfor %}
                </div>
            </section>
        </main>
    </div>

    <!-- Mobile Menu Toggle -->
    <button class=\"mobile-menu-toggle\">
        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
            <line x1=\"3\" y1=\"12\" x2=\"21\" y2=\"12\"/>
            <line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\"/>
            <line x1=\"3\" y1=\"18\" x2=\"21\" y2=\"18\"/>
        </svg>
    </button>

    <!-- Footer -->
    <footer class=\"site-footer\">
        <p>Copyright © 2026 EnergyDash. Dashboard de gestion d'énergie</p>
    </footer>

    <script src=\"{{ asset('js/templatemo-glass-admin-script.js') }}\"></script>
</body>
</html>
", "back/energie/stateenergi.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\back\\energie\\stateenergi.html.twig");
    }
}
