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

/* front/recommandation.html.twig */
class __TwigTemplate_55a32de7f0412ad8784f36efa516be1c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/recommandation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/recommandation.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Recommandations - AIVA</title>

  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/stylefront.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">
</head>

<body>
<div class=\"container\">

  <nav class=\"navbar\">
    <div class=\"logo\">
      <svg width=\"32\" height=\"32\" viewBox=\"0 0 100 100\">
        <defs>
          <linearGradient id=\"grad\" x1=\"0%\" y1=\"0%\" x2=\"100%\" y2=\"100%\">
            <stop offset=\"0%\" stop-color=\"#a855f7\" />
            <stop offset=\"50%\" stop-color=\"#00d4aa\" />
            <stop offset=\"100%\" stop-color=\"#ec4899\" />
          </linearGradient>
        </defs>
        <path d=\"M50 10 L85 80 L15 80 Z\" fill=\"none\" stroke=\"url(#grad)\" stroke-width=\"4\"/>
        <circle cx=\"50\" cy=\"50\" r=\"10\" fill=\"#00d4aa\"/>
      </svg>
      <span class=\"logo-text\">AIVA</span>
    </div>

    <div class=\"nav-links\">
      <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_categorie_index");
        yield "\">Categorie</a>
      <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_activite_index");
        yield "\">Activité</a>
      <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_index");
        yield "\">Objectif</a>
      <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_depense_index");
        yield "\">Dépense</a>
      <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_aliment_index");
        yield "\">Alimentation</a>
      <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_front_index");
        yield "\">Apprentissage</a>
      <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_energie_index");
        yield "\">Énergie</a>
      <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_recommandation_index");
        yield "\" class=\"active\">Recommandations</a>
    </div>

    <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"nav-link\">
      <i class=\"fa-solid fa-right-from-bracket\"></i> Déconnexion
    </a>
  </nav>

  <main class=\"hero\">
    <div class=\"glow\"></div>

    <h1 class=\"hero-title\">💡 Mes Recommandations</h1>
    <p class=\"hero-description\">
      Conseils personnalisés basés sur vos consommations enregistrées.
    </p>

    <!-- FLASH -->
    <div style=\"margin: 12px 0;\">
      ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "flashes", ["success"], "method", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 59
            yield "        <div style=\"padding:10px;border-radius:8px;margin-bottom:8px;
                    background:rgba(0,210,150,.15);
                    border:1px solid rgba(0,210,150,.35);\">
          ";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "flashes", ["danger"], "method", false, false, false, 65));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 66
            yield "        <div style=\"padding:10px;border-radius:8px;margin-bottom:8px;
                    background:rgba(255,80,80,.12);
                    border:1px solid rgba(255,80,80,.35);\">
          ";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "flashes", ["info"], "method", false, false, false, 72));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 73
            yield "        <div style=\"padding:10px;border-radius:8px;margin-bottom:8px;
                    background:rgba(80,160,255,.12);
                    border:1px solid rgba(80,160,255,.35);\">
          ";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "    </div>

    <!-- GRID -->
    <div style=\"
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(340px,1fr));
      gap:20px;
      margin-top:24px;
    \">

      ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recommandations"]) || array_key_exists("recommandations", $context) ? $context["recommandations"] : (function () { throw new RuntimeError('Variable "recommandations" does not exist.', 89, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reco"]) {
            // line 90
            yield "        ";
            $context["e"] = CoreExtension::getAttribute($this->env, $this->source, $context["reco"], "energie", [], "any", false, false, false, 90);
            // line 91
            yield "        ";
            $context["v"] = (((($tmp = (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 91, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 91, $this->source); })()), "valeur", [], "any", false, false, false, 91)) : (0));
            // line 92
            yield "        ";
            $context["p"] = (((($tmp = (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 92, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 92, $this->source); })()), "periode", [], "any", false, false, false, 92)) : (1));
            // line 93
            yield "        ";
            $context["m"] = ((((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 93, $this->source); })()) > 0)) ? (((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 93, $this->source); })()) / (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 93, $this->source); })()))) : (0));
            // line 94
            yield "
        ";
            // line 95
            $context["type"] = (((($tmp = (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 95, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 95, $this->source); })()), "typeEnergie", [], "any", false, false, false, 95)) : ("Énergie"));
            // line 96
            yield "        ";
            $context["icon"] = (((            // line 97
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 97, $this->source); })()) == "Électricité")) ? ("fa-bolt") : ((((            // line 98
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 98, $this->source); })()) == "Gaz")) ? ("fa-fire") : ("fa-droplet"))));
            // line 101
            yield "
        <div style=\"
          padding:18px;
          border-radius:18px;
          background:linear-gradient(135deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
          border:1px solid rgba(255,255,255,.12);
          backdrop-filter: blur(10px);
        \">

          <div style=\"display:flex;justify-content:space-between;gap:12px;\">
            <div>
              <div style=\"font-size:17px;font-weight:800;\">
                <i class=\"fa-solid ";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 113, $this->source); })()), "html", null, true);
            yield "\"></i>
                ";
            // line 114
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reco"], "titre", [], "any", false, false, false, 114)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reco"], "titre", [], "any", false, false, false, 114), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("Recommandation " . (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 114, $this->source); })())), "html", null, true)));
            yield "
              </div>

              <div style=\"font-size:13px;opacity:.75;margin-top:6px;\">
                <i class=\"fa-regular fa-calendar\"></i>
                ";
            // line 119
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reco"], "dateGeneration", [], "any", false, false, false, 119)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reco"], "dateGeneration", [], "any", false, false, false, 119), "d/m/Y"), "html", null, true)) : (""));
            yield "
              </div>

              <div style=\"margin-top:10px;font-size:13px;opacity:.85;line-height:1.55;\">
                • ";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 123, $this->source); })()), "html", null, true);
            yield " <br>
                • Consommation enregistrée : ";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 124, $this->source); })()), 2, ",", " "), "html", null, true);
            yield " (sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 124, $this->source); })()), 0, ",", " "), "html", null, true);
            yield " jours) <br>
                • Moyenne : ";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 125, $this->source); })()), 2, ",", " "), "html", null, true);
            yield " / jour
              </div>
            </div>

            <span style=\"
              padding:6px 12px;
              border-radius:999px;
              font-size:12px;
              font-weight:800;
              background:rgba(255,255,255,.06);
              border:1px solid rgba(255,255,255,.15);
              height:fit-content;
              white-space:nowrap;
            \">
              ";
            // line 139
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reco"], "niveauImpact", [], "any", false, false, false, 139)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reco"], "niveauImpact", [], "any", false, false, false, 139), "html", null, true)) : ("Moyen"));
            yield "
            </span>
          </div>

          <!-- ✅ description anti-coupure -->
          <div style=\"
            margin-top:14px;
            font-size:14px;
            line-height:1.65;
            white-space: pre-wrap;
            overflow: visible;
            text-overflow: initial;
            max-height: none;
          \">
            ";
            // line 153
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reco"], "description", [], "any", false, false, false, 153)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reco"], "description", [], "any", false, false, false, 153), "html", null, true)) : ("Aucune description disponible."));
            yield "
          </div>

          <div style=\"margin-top:16px;display:flex;justify-content:flex-end;\">
            <form method=\"post\"
                  action=\"";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_recommandation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reco"], "id", [], "any", false, false, false, 158)]), "html", null, true);
            yield "\"
                  onsubmit=\"return confirm('Supprimer cette recommandation ?');\">
              <input type=\"hidden\" name=\"_token\" value=\"";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_reco_" . CoreExtension::getAttribute($this->env, $this->source, $context["reco"], "id", [], "any", false, false, false, 160))), "html", null, true);
            yield "\">
              <button class=\"btn btn-danger\" type=\"submit\">
                <i class=\"fa-solid fa-trash\"></i>
              </button>
            </form>
          </div>

        </div>
      ";
            $context['_iterated'] = true;
        }
        // line 168
        if (!$context['_iterated']) {
            // line 169
            yield "        <div style=\"
          padding:20px;
          border-radius:16px;
          background:rgba(255,255,255,.04);
          border:1px dashed rgba(255,255,255,.15);
        \">
          Aucune recommandation disponible.
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reco'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        yield "
    </div>

  </main>
</div>
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
        return "front/recommandation.html.twig";
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
        return array (  351 => 178,  337 => 169,  335 => 168,  322 => 160,  317 => 158,  309 => 153,  292 => 139,  275 => 125,  269 => 124,  265 => 123,  258 => 119,  250 => 114,  246 => 113,  232 => 101,  230 => 98,  229 => 97,  227 => 96,  225 => 95,  222 => 94,  219 => 93,  216 => 92,  213 => 91,  210 => 90,  205 => 89,  193 => 79,  184 => 76,  179 => 73,  174 => 72,  165 => 69,  160 => 66,  155 => 65,  146 => 62,  141 => 59,  137 => 58,  119 => 43,  113 => 40,  109 => 39,  105 => 38,  101 => 37,  97 => 36,  93 => 35,  89 => 34,  85 => 33,  58 => 9,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Recommandations - AIVA</title>

  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"{{ asset('css/stylefront.css') }}\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">
</head>

<body>
<div class=\"container\">

  <nav class=\"navbar\">
    <div class=\"logo\">
      <svg width=\"32\" height=\"32\" viewBox=\"0 0 100 100\">
        <defs>
          <linearGradient id=\"grad\" x1=\"0%\" y1=\"0%\" x2=\"100%\" y2=\"100%\">
            <stop offset=\"0%\" stop-color=\"#a855f7\" />
            <stop offset=\"50%\" stop-color=\"#00d4aa\" />
            <stop offset=\"100%\" stop-color=\"#ec4899\" />
          </linearGradient>
        </defs>
        <path d=\"M50 10 L85 80 L15 80 Z\" fill=\"none\" stroke=\"url(#grad)\" stroke-width=\"4\"/>
        <circle cx=\"50\" cy=\"50\" r=\"10\" fill=\"#00d4aa\"/>
      </svg>
      <span class=\"logo-text\">AIVA</span>
    </div>

    <div class=\"nav-links\">
      <a href=\"{{ path('front_categorie_index') }}\">Categorie</a>
      <a href=\"{{ path('front_activite_index') }}\">Activité</a>
      <a href=\"{{ path('front_objectif_index') }}\">Objectif</a>
      <a href=\"{{ path('front_depense_index') }}\">Dépense</a>
      <a href=\"{{ path('front_aliment_index') }}\">Alimentation</a>
      <a href=\"{{ path('cours_front_index') }}\">Apprentissage</a>
      <a href=\"{{ path('front_energie_index') }}\">Énergie</a>
      <a href=\"{{ path('front_recommandation_index') }}\" class=\"active\">Recommandations</a>
    </div>

    <a href=\"{{ path('app_logout') }}\" class=\"nav-link\">
      <i class=\"fa-solid fa-right-from-bracket\"></i> Déconnexion
    </a>
  </nav>

  <main class=\"hero\">
    <div class=\"glow\"></div>

    <h1 class=\"hero-title\">💡 Mes Recommandations</h1>
    <p class=\"hero-description\">
      Conseils personnalisés basés sur vos consommations enregistrées.
    </p>

    <!-- FLASH -->
    <div style=\"margin: 12px 0;\">
      {% for message in app.flashes('success') %}
        <div style=\"padding:10px;border-radius:8px;margin-bottom:8px;
                    background:rgba(0,210,150,.15);
                    border:1px solid rgba(0,210,150,.35);\">
          {{ message }}
        </div>
      {% endfor %}
      {% for message in app.flashes('danger') %}
        <div style=\"padding:10px;border-radius:8px;margin-bottom:8px;
                    background:rgba(255,80,80,.12);
                    border:1px solid rgba(255,80,80,.35);\">
          {{ message }}
        </div>
      {% endfor %}
      {% for message in app.flashes('info') %}
        <div style=\"padding:10px;border-radius:8px;margin-bottom:8px;
                    background:rgba(80,160,255,.12);
                    border:1px solid rgba(80,160,255,.35);\">
          {{ message }}
        </div>
      {% endfor %}
    </div>

    <!-- GRID -->
    <div style=\"
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(340px,1fr));
      gap:20px;
      margin-top:24px;
    \">

      {% for reco in recommandations %}
        {% set e = reco.energie %}
        {% set v = e ? e.valeur : 0 %}
        {% set p = e ? e.periode : 1 %}
        {% set m = p > 0 ? (v / p) : 0 %}

        {% set type = e ? e.typeEnergie : 'Énergie' %}
        {% set icon =
          type == 'Électricité' ? 'fa-bolt' :
          type == 'Gaz' ? 'fa-fire' :
          'fa-droplet'
        %}

        <div style=\"
          padding:18px;
          border-radius:18px;
          background:linear-gradient(135deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
          border:1px solid rgba(255,255,255,.12);
          backdrop-filter: blur(10px);
        \">

          <div style=\"display:flex;justify-content:space-between;gap:12px;\">
            <div>
              <div style=\"font-size:17px;font-weight:800;\">
                <i class=\"fa-solid {{ icon }}\"></i>
                {{ reco.titre ?: ('Recommandation ' ~ type) }}
              </div>

              <div style=\"font-size:13px;opacity:.75;margin-top:6px;\">
                <i class=\"fa-regular fa-calendar\"></i>
                {{ reco.dateGeneration ? reco.dateGeneration|date('d/m/Y') : '' }}
              </div>

              <div style=\"margin-top:10px;font-size:13px;opacity:.85;line-height:1.55;\">
                • {{ type }} <br>
                • Consommation enregistrée : {{ v|number_format(2, ',', ' ') }} (sur {{ p|number_format(0, ',', ' ') }} jours) <br>
                • Moyenne : {{ m|number_format(2, ',', ' ') }} / jour
              </div>
            </div>

            <span style=\"
              padding:6px 12px;
              border-radius:999px;
              font-size:12px;
              font-weight:800;
              background:rgba(255,255,255,.06);
              border:1px solid rgba(255,255,255,.15);
              height:fit-content;
              white-space:nowrap;
            \">
              {{ reco.niveauImpact ?: 'Moyen' }}
            </span>
          </div>

          <!-- ✅ description anti-coupure -->
          <div style=\"
            margin-top:14px;
            font-size:14px;
            line-height:1.65;
            white-space: pre-wrap;
            overflow: visible;
            text-overflow: initial;
            max-height: none;
          \">
            {{ reco.description ?: 'Aucune description disponible.' }}
          </div>

          <div style=\"margin-top:16px;display:flex;justify-content:flex-end;\">
            <form method=\"post\"
                  action=\"{{ path('front_recommandation_delete', {id: reco.id}) }}\"
                  onsubmit=\"return confirm('Supprimer cette recommandation ?');\">
              <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_reco_' ~ reco.id) }}\">
              <button class=\"btn btn-danger\" type=\"submit\">
                <i class=\"fa-solid fa-trash\"></i>
              </button>
            </form>
          </div>

        </div>
      {% else %}
        <div style=\"
          padding:20px;
          border-radius:16px;
          background:rgba(255,255,255,.04);
          border:1px dashed rgba(255,255,255,.15);
        \">
          Aucune recommandation disponible.
        </div>
      {% endfor %}

    </div>

  </main>
</div>
</body>
</html>
", "front/recommandation.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\front\\recommandation.html.twig");
    }
}
