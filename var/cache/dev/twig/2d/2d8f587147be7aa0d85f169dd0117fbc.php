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

/* back/api/meteo.html.twig */
class __TwigTemplate_53b0cb19254f31e1dfab0b62688146b7 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "back/sport/base_back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/api/meteo.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/api/meteo.html.twig"));

        $this->parent = $this->load("back/sport/base_back.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Météo (API)";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"page-header\">
    <div class=\"page-title\">🌦️ Météo (API Open-Meteo)</div>
    <div class=\"page-breadcrumb\">
        <a href=\"#\">Dashboard</a> <span>/</span> <span>API</span> <span>/</span> <span>Météo</span>
    </div>
</div>

<div class=\"glass-card table-card\">
    <div class=\"card-header\" style=\"gap:16px; flex-wrap:wrap;\">
        <div>
            <div class=\"card-title\">📡 Données météo</div>
            <div class=\"card-subtitle\">Appel API côté serveur (Symfony HttpClient)</div>
        </div>

        <div style=\"display:flex; gap:10px; flex-wrap:wrap; margin-left:auto;\">
            <a class=\"card-btn\" href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_sport_index");
        yield "\">↩ Retour activités</a>
        </div>
    </div>

    <form method=\"get\" style=\"display:flex; gap:12px; flex-wrap:wrap; margin: 0 16px 16px 16px;\">
        <select class=\"settings-select\" name=\"city\">
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cities"]) || array_key_exists("cities", $context) ? $context["cities"] : (function () { throw new RuntimeError('Variable "cities" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 28
            yield "                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["c"], "html", null, true);
            yield "\" ";
            yield ((($context["c"] == (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 28, $this->source); })()))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["c"], "html", null, true);
            yield "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "        </select>
        <button class=\"card-btn active\" type=\"submit\">📍 Changer</button>
    </form>

    ";
        // line 34
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 34, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "        <div style=\"padding:16px;\">
            <span class=\"status-badge pending\">🛑 ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 36, $this->source); })()), "html", null, true);
            yield "</span>
        </div>
    ";
        } else {
            // line 39
            yield "        <div style=\"padding:16px; display:flex; gap:16px; flex-wrap:wrap;\">

            ";
            // line 42
            yield "            <div class=\"glass-card stat-card glass-card-3d\" style=\"min-width:260px;\">
                <div class=\"stat-card-inner\">
                    <div class=\"stat-info\">
                        <h3>Ville</h3>
                        <div style=\"font-size:20px; font-weight:800; color:var(--text-primary);\">
                            ";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 47, $this->source); })()), "html", null, true);
            yield "
                        </div>
                    </div>
                    <div class=\"stat-icon cyan\">📍</div>
                </div>
            </div>

            ";
            // line 55
            yield "            <div class=\"glass-card stat-card glass-card-3d\" style=\"min-width:260px;\">
                <div class=\"stat-card-inner\">
                    <div class=\"stat-info\">
                        <h3>Température</h3>
                        <div class=\"stat-value\">
                            <span>";
            // line 60
            yield (((($tmp =  !(null === (isset($context["temperature"]) || array_key_exists("temperature", $context) ? $context["temperature"] : (function () { throw new RuntimeError('Variable "temperature" does not exist.', 60, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["temperature"]) || array_key_exists("temperature", $context) ? $context["temperature"] : (function () { throw new RuntimeError('Variable "temperature" does not exist.', 60, $this->source); })()), 0), "html", null, true)) : (0));
            yield "</span>°C
                        </div>
                    </div>
                    <div class=\"stat-icon magenta\">🌡️</div>
                </div>
            </div>

            ";
            // line 68
            yield "            <div class=\"glass-card stat-card glass-card-3d\" style=\"min-width:260px;\">
                <div class=\"stat-card-inner\">
                    <div class=\"stat-info\">
                        <h3>Condition</h3>
                        <div style=\"font-size:18px; font-weight:800; color:var(--text-primary);\">
                            ";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["condition"]) || array_key_exists("condition", $context) ? $context["condition"] : (function () { throw new RuntimeError('Variable "condition" does not exist.', 73, $this->source); })()), "html", null, true);
            yield "
                        </div>
                    </div>
                    <div class=\"stat-icon success\">☁️</div>
                </div>
            </div>

            <div class=\"glass-card stat-card glass-card-3d\" style=\"min-width:260px;\">
                <div class=\"stat-card-inner\">
                    <div class=\"stat-info\">
                        <h3>Vent</h3>
                        <div class=\"stat-value\">
                            <span>";
            // line 85
            yield (((($tmp =  !(null === (isset($context["wind"]) || array_key_exists("wind", $context) ? $context["wind"] : (function () { throw new RuntimeError('Variable "wind" does not exist.', 85, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["wind"]) || array_key_exists("wind", $context) ? $context["wind"] : (function () { throw new RuntimeError('Variable "wind" does not exist.', 85, $this->source); })()), 0), "html", null, true)) : (0));
            yield "</span> km/h
                        </div>
                    </div>
                    <div class=\"stat-icon purple\">💨</div>
                </div>
            </div>
        </div>

        <div style=\"padding:16px;\">
            ";
            // line 94
            if (((( !(null === (isset($context["temperature"]) || array_key_exists("temperature", $context) ? $context["temperature"] : (function () { throw new RuntimeError('Variable "temperature" does not exist.', 94, $this->source); })())) && ((isset($context["temperature"]) || array_key_exists("temperature", $context) ? $context["temperature"] : (function () { throw new RuntimeError('Variable "temperature" does not exist.', 94, $this->source); })()) >= 12)) && ((isset($context["temperature"]) || array_key_exists("temperature", $context) ? $context["temperature"] : (function () { throw new RuntimeError('Variable "temperature" does not exist.', 94, $this->source); })()) <= 28)) && !CoreExtension::inFilter((isset($context["condition"]) || array_key_exists("condition", $context) ? $context["condition"] : (function () { throw new RuntimeError('Variable "condition" does not exist.', 94, $this->source); })()), ["Pluie", "Orage", "Averses"]))) {
                // line 95
                yield "                <span class=\"status-badge completed\">✅ Recommandation : activité outdoor possible</span>
            ";
            } else {
                // line 97
                yield "                <span class=\"status-badge processing\">ℹ️ Recommandation : activité indoor conseillée</span>
            ";
            }
            // line 99
            yield "        </div>
    ";
        }
        // line 101
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "back/api/meteo.html.twig";
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
        return array (  246 => 101,  242 => 99,  238 => 97,  234 => 95,  232 => 94,  220 => 85,  205 => 73,  198 => 68,  188 => 60,  181 => 55,  171 => 47,  164 => 42,  160 => 39,  154 => 36,  151 => 35,  149 => 34,  143 => 30,  130 => 28,  126 => 27,  117 => 21,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back/sport/base_back.html.twig' %}

{% block title %}Météo (API){% endblock %}

{% block body %}
<div class=\"page-header\">
    <div class=\"page-title\">🌦️ Météo (API Open-Meteo)</div>
    <div class=\"page-breadcrumb\">
        <a href=\"#\">Dashboard</a> <span>/</span> <span>API</span> <span>/</span> <span>Météo</span>
    </div>
</div>

<div class=\"glass-card table-card\">
    <div class=\"card-header\" style=\"gap:16px; flex-wrap:wrap;\">
        <div>
            <div class=\"card-title\">📡 Données météo</div>
            <div class=\"card-subtitle\">Appel API côté serveur (Symfony HttpClient)</div>
        </div>

        <div style=\"display:flex; gap:10px; flex-wrap:wrap; margin-left:auto;\">
            <a class=\"card-btn\" href=\"{{ path('back_sport_index') }}\">↩ Retour activités</a>
        </div>
    </div>

    <form method=\"get\" style=\"display:flex; gap:12px; flex-wrap:wrap; margin: 0 16px 16px 16px;\">
        <select class=\"settings-select\" name=\"city\">
            {% for c in cities %}
                <option value=\"{{ c }}\" {{ c == city ? 'selected' : '' }}>{{ c }}</option>
            {% endfor %}
        </select>
        <button class=\"card-btn active\" type=\"submit\">📍 Changer</button>
    </form>

    {% if error %}
        <div style=\"padding:16px;\">
            <span class=\"status-badge pending\">🛑 {{ error }}</span>
        </div>
    {% else %}
        <div style=\"padding:16px; display:flex; gap:16px; flex-wrap:wrap;\">

            {# ✅ IMPORTANT: ما نستعملوش stat-value للنص #}
            <div class=\"glass-card stat-card glass-card-3d\" style=\"min-width:260px;\">
                <div class=\"stat-card-inner\">
                    <div class=\"stat-info\">
                        <h3>Ville</h3>
                        <div style=\"font-size:20px; font-weight:800; color:var(--text-primary);\">
                            {{ city }}
                        </div>
                    </div>
                    <div class=\"stat-icon cyan\">📍</div>
                </div>
            </div>

            {# ✅ رقم وحدو (باش الJS ما يبدلش 10.1 -> 101) #}
            <div class=\"glass-card stat-card glass-card-3d\" style=\"min-width:260px;\">
                <div class=\"stat-card-inner\">
                    <div class=\"stat-info\">
                        <h3>Température</h3>
                        <div class=\"stat-value\">
                            <span>{{ temperature is not null ? (temperature|round(0)) : 0 }}</span>°C
                        </div>
                    </div>
                    <div class=\"stat-icon magenta\">🌡️</div>
                </div>
            </div>

            {# ✅ IMPORTANT: Condition نص => ما نحطّوهاش stat-value #}
            <div class=\"glass-card stat-card glass-card-3d\" style=\"min-width:260px;\">
                <div class=\"stat-card-inner\">
                    <div class=\"stat-info\">
                        <h3>Condition</h3>
                        <div style=\"font-size:18px; font-weight:800; color:var(--text-primary);\">
                            {{ condition }}
                        </div>
                    </div>
                    <div class=\"stat-icon success\">☁️</div>
                </div>
            </div>

            <div class=\"glass-card stat-card glass-card-3d\" style=\"min-width:260px;\">
                <div class=\"stat-card-inner\">
                    <div class=\"stat-info\">
                        <h3>Vent</h3>
                        <div class=\"stat-value\">
                            <span>{{ wind is not null ? (wind|round(0)) : 0 }}</span> km/h
                        </div>
                    </div>
                    <div class=\"stat-icon purple\">💨</div>
                </div>
            </div>
        </div>

        <div style=\"padding:16px;\">
            {% if temperature is not null and temperature >= 12 and temperature <= 28 and condition not in ['Pluie', 'Orage', 'Averses'] %}
                <span class=\"status-badge completed\">✅ Recommandation : activité outdoor possible</span>
            {% else %}
                <span class=\"status-badge processing\">ℹ️ Recommandation : activité indoor conseillée</span>
            {% endif %}
        </div>
    {% endif %}
</div>
{% endblock %}
", "back/api/meteo.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\back\\api\\meteo.html.twig");
    }
}
