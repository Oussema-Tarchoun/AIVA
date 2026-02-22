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

/* front/repas/show.html.twig */
class __TwigTemplate_449d59c023187413700dd05e8e38dde2 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/repas/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/repas/show.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

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

        // line 2
        yield "<link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/stylefront.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">

<style>
  /* ✅ FIX OVERFLOW */
  *, *::before, *::after { box-sizing: border-box; }

  /* ✅ glass wrappers like Recommandations */
  .glass{
    border-radius: 18px;
    background: linear-gradient(135deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
    border: 1px solid rgba(255,255,255,.12);
    backdrop-filter: blur(10px);
  }

  /* ✅ section head */
  .section-head{
    margin-top: 22px;
    display:flex;
    justify-content:space-between;
    gap:12px;
    flex-wrap:wrap;
    align-items:center;
  }
  .section-title{
    margin:0;
    font-size:16px;
    font-weight:800;
    opacity:.95;
  }

  /* ✅ pills */
  .pill{
    display:inline-flex;
    align-items:center;
    gap:6px;
    padding: 6px 10px;
    border-radius: 999px;
    border: 1px solid rgba(255,255,255,.18);
    background: rgba(255,255,255,.06);
    font-size: 12px;
    font-weight: 800;
    white-space: nowrap;
  }
  .pill.kcal{
    border-color: rgba(245,158,11,.35);
    background: rgba(245,158,11,.12);
    color: #fde68a;
  }

  /* ✅ details grid */
  .meal-details{
    display:grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 12px;
  }
  @media (max-width: 980px){
    .meal-details{ grid-template-columns: repeat(2, minmax(0, 1fr)); }
  }
  @media (max-width: 620px){
    .meal-details{ grid-template-columns: 1fr; }
  }

  .detail-box{
    border-radius: 16px;
    border: 1px solid rgba(255,255,255,.12);
    background: rgba(0,0,0,.18);
    padding: 14px;
  }
  .muted{
    opacity: .75;
    font-size: 12px;
    letter-spacing: .35px;
    text-transform: uppercase;
  }
  .detail-value{
    margin-top: 6px;
    font-weight: 900;
    letter-spacing: .2px;
    font-size: 18px;
  }

  /* ✅ notes box */
  .detail-note{
    margin-top: 14px;
    padding: 14px;
    border-radius: 16px;
    border: 1px solid rgba(255,255,255,.12);
    background: rgba(255,255,255,.06);
    line-height: 1.6;
  }

  /* ✅ foods grid */
  .foods-grid{
    display:grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 10px;
  }
  @media (max-width: 980px){
    .foods-grid{ grid-template-columns: repeat(2, minmax(0, 1fr)); }
  }
  @media (max-width: 620px){
    .foods-grid{ grid-template-columns: 1fr; }
  }

  .food-chip{
    padding: 12px 14px;
    border-radius: 16px;
    border: 1px solid rgba(255,255,255,.12);
    background: rgba(255,255,255,.06);
    display:flex;
    flex-direction:column;
    gap: 6px;
  }
  .food-chip strong{ font-weight: 900; }

  /* ✅ buttons fallback */
  .btn{
    display:inline-flex;
    align-items:center;
    gap:8px;
    padding: 10px 14px;
    border-radius: 12px;
    font-weight: 700;
    font-size: 14px;
    text-decoration:none;
    border: 1px solid transparent;
    cursor:pointer;
    transition: .2s ease;
    white-space: nowrap;
  }
  .btn-primary{
    background: linear-gradient(135deg, #00d4aa, #a855f7);
    color: #020617;
  }
  .btn-primary:hover{ transform: translateY(-1px); box-shadow: 0 10px 25px rgba(0,0,0,.25); }

  .btn-secondary{
    background: rgba(255,255,255,.06);
    border-color: rgba(255,255,255,.18);
    color: rgba(226,232,240,.95);
  }
  .btn-secondary:hover{ background: rgba(255,255,255,.12); }
</style>

<div class=\"container\">

  <!-- ✅ NAVBAR -->
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
        // line 168
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_categorie_index");
        yield "\">categorie</a>
      <a href=\"";
        // line 169
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_activite_index");
        yield "\">Activité</a>
      <a href=\"";
        // line 170
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_index");
        yield "\">Objectif</a>
      <a href=\"";
        // line 171
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_depense_index");
        yield "\">depense</a>
      <a href=\"";
        // line 172
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_aliment_index");
        yield "\">Alimentation</a>
      <a href=\"";
        // line 173
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_front_index");
        yield "\">apprentissage</a>
      <a href=\"";
        // line 174
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_energie_index");
        yield "\">Énergie</a>
      <a href=\"";
        // line 175
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_recommandation_index");
        yield "\">Recommandation</a>
    </div>

    <a href=\"";
        // line 178
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"nav-link\">
      <i class=\"fa-solid fa-right-from-bracket\"></i> Déconnexion
    </a>
  </nav>

  <!-- ✅ MAIN -->
  <main class=\"hero\">
    <div class=\"glow\"></div>

    <h1 class=\"hero-title\">🍽️ Meal Details</h1>
    <p class=\"hero-description\">
      ";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 189, $this->source); })()), "type", [], "any", false, false, false, 189), ["-" => " "])), "html", null, true);
        yield "
      • ";
        // line 190
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 190, $this->source); })()), "heure", [], "any", false, false, false, 190)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 190, $this->source); })()), "heure", [], "any", false, false, false, 190), "H:i"), "html", null, true)) : ("N/A"));
        yield "
      • ";
        // line 191
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 191, $this->source); })()), "date", [], "any", false, false, false, 191)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 191, $this->source); })()), "date", [], "any", false, false, false, 191), "Y-m-d"), "html", null, true)) : ("N/A"));
        yield "
    </p>

    <div class=\"section-head\">
      <h2 class=\"section-title\">";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 195, $this->source); })()), "nom", [], "any", false, false, false, 195), "html", null, true);
        yield "</h2>
      <div style=\"display:flex; gap:10px; flex-wrap:wrap;\">
        <a class=\"btn btn-secondary\" href=\"";
        // line 197
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_repas_index");
        yield "\">
          <i class=\"fa-solid fa-arrow-left\"></i> Back
        </a>
        <a class=\"btn btn-primary\" href=\"";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_repas_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 200, $this->source); })()), "id", [], "any", false, false, false, 200)]), "html", null, true);
        yield "\">
          <i class=\"fa-solid fa-pen\"></i> Edit
        </a>
      </div>
    </div>

    <!-- ✅ STATS (glass) -->
    <div class=\"glass\" style=\"margin-top:16px; padding:14px;\">
      <div class=\"meal-details\">
        <div class=\"detail-box\">
          <div class=\"muted\">Calories</div>
          <div class=\"detail-value\">
            <span class=\"pill kcal\"><i class=\"fa-solid fa-fire\"></i> ";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 212, $this->source); })()), "calories", [], "any", false, false, false, 212), "html", null, true);
        yield " kcal</span>
          </div>
        </div>

        <div class=\"detail-box\">
          <div class=\"muted\">Foods</div>
          <div class=\"detail-value\">";
        // line 218
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 218, $this->source); })()), "aliments", [], "any", false, false, false, 218)), "html", null, true);
        yield "</div>
        </div>

        <div class=\"detail-box\">
       <div class=\"muted\">Date</div>
       <div class=\"detail-value\">
       ";
        // line 224
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 224, $this->source); })()), "date", [], "any", false, false, false, 224)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 224, $this->source); })()), "date", [], "any", false, false, false, 224), "Y-m-d"), "html", null, true)) : ("N/A"));
        yield "
       </div>
       </div>


        <div class=\"detail-box\">
          <div class=\"muted\">Type</div>
          <div class=\"detail-value\">";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 231, $this->source); })()), "type", [], "any", false, false, false, 231), ["-" => " "])), "html", null, true);
        yield "</div>
        </div>

        <div class=\"detail-box\">
          <div class=\"muted\">Time</div>
          <div class=\"detail-value\">";
        // line 236
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 236, $this->source); })()), "heure", [], "any", false, false, false, 236)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 236, $this->source); })()), "heure", [], "any", false, false, false, 236), "H:i"), "html", null, true)) : ("N/A"));
        yield "</div>
        </div>
      </div>

      ";
        // line 240
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 240, $this->source); })()), "description", [], "any", false, false, false, 240)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 241
            yield "        <div class=\"detail-note\">
          <div class=\"muted\" style=\"margin-bottom:8px;\">Notes</div>
          <div>";
            // line 243
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 243, $this->source); })()), "description", [], "any", false, false, false, 243), "html", null, true);
            yield "</div>
        </div>
      ";
        }
        // line 246
        yield "
      <div style=\"margin-top: 16px;\">
        <div class=\"muted\" style=\"margin-bottom:10px;\">Foods list</div>

        ";
        // line 250
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 250, $this->source); })()), "aliments", [], "any", false, false, false, 250)) == 0)) {
            // line 251
            yield "          <div class=\"hero-description\" style=\"margin:0;\">No foods linked to this meal.</div>
        ";
        } else {
            // line 253
            yield "          <div class=\"foods-grid\">
            ";
            // line 254
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 254, $this->source); })()), "aliments", [], "any", false, false, false, 254));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 255
                yield "              <div class=\"food-chip\">
                <strong>";
                // line 256
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "nom", [], "any", false, false, false, 256), "html", null, true);
                yield "</strong>
                <span class=\"muted\">Qty: ";
                // line 257
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "quantite", [], "any", true, true, false, 257)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "quantite", [], "any", false, false, false, 257), "N/A")) : ("N/A")), "html", null, true);
                yield "</span>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 260
            yield "          </div>
        ";
        }
        // line 262
        yield "      </div>
    </div>

  </main>
</div>
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
        return "front/repas/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  426 => 262,  422 => 260,  413 => 257,  409 => 256,  406 => 255,  402 => 254,  399 => 253,  395 => 251,  393 => 250,  387 => 246,  381 => 243,  377 => 241,  375 => 240,  368 => 236,  360 => 231,  350 => 224,  341 => 218,  332 => 212,  317 => 200,  311 => 197,  306 => 195,  299 => 191,  295 => 190,  291 => 189,  277 => 178,  271 => 175,  267 => 174,  263 => 173,  259 => 172,  255 => 171,  251 => 170,  247 => 169,  243 => 168,  75 => 3,  72 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block body %}
<link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"{{ asset('css/stylefront.css') }}\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">

<style>
  /* ✅ FIX OVERFLOW */
  *, *::before, *::after { box-sizing: border-box; }

  /* ✅ glass wrappers like Recommandations */
  .glass{
    border-radius: 18px;
    background: linear-gradient(135deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
    border: 1px solid rgba(255,255,255,.12);
    backdrop-filter: blur(10px);
  }

  /* ✅ section head */
  .section-head{
    margin-top: 22px;
    display:flex;
    justify-content:space-between;
    gap:12px;
    flex-wrap:wrap;
    align-items:center;
  }
  .section-title{
    margin:0;
    font-size:16px;
    font-weight:800;
    opacity:.95;
  }

  /* ✅ pills */
  .pill{
    display:inline-flex;
    align-items:center;
    gap:6px;
    padding: 6px 10px;
    border-radius: 999px;
    border: 1px solid rgba(255,255,255,.18);
    background: rgba(255,255,255,.06);
    font-size: 12px;
    font-weight: 800;
    white-space: nowrap;
  }
  .pill.kcal{
    border-color: rgba(245,158,11,.35);
    background: rgba(245,158,11,.12);
    color: #fde68a;
  }

  /* ✅ details grid */
  .meal-details{
    display:grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 12px;
  }
  @media (max-width: 980px){
    .meal-details{ grid-template-columns: repeat(2, minmax(0, 1fr)); }
  }
  @media (max-width: 620px){
    .meal-details{ grid-template-columns: 1fr; }
  }

  .detail-box{
    border-radius: 16px;
    border: 1px solid rgba(255,255,255,.12);
    background: rgba(0,0,0,.18);
    padding: 14px;
  }
  .muted{
    opacity: .75;
    font-size: 12px;
    letter-spacing: .35px;
    text-transform: uppercase;
  }
  .detail-value{
    margin-top: 6px;
    font-weight: 900;
    letter-spacing: .2px;
    font-size: 18px;
  }

  /* ✅ notes box */
  .detail-note{
    margin-top: 14px;
    padding: 14px;
    border-radius: 16px;
    border: 1px solid rgba(255,255,255,.12);
    background: rgba(255,255,255,.06);
    line-height: 1.6;
  }

  /* ✅ foods grid */
  .foods-grid{
    display:grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 10px;
  }
  @media (max-width: 980px){
    .foods-grid{ grid-template-columns: repeat(2, minmax(0, 1fr)); }
  }
  @media (max-width: 620px){
    .foods-grid{ grid-template-columns: 1fr; }
  }

  .food-chip{
    padding: 12px 14px;
    border-radius: 16px;
    border: 1px solid rgba(255,255,255,.12);
    background: rgba(255,255,255,.06);
    display:flex;
    flex-direction:column;
    gap: 6px;
  }
  .food-chip strong{ font-weight: 900; }

  /* ✅ buttons fallback */
  .btn{
    display:inline-flex;
    align-items:center;
    gap:8px;
    padding: 10px 14px;
    border-radius: 12px;
    font-weight: 700;
    font-size: 14px;
    text-decoration:none;
    border: 1px solid transparent;
    cursor:pointer;
    transition: .2s ease;
    white-space: nowrap;
  }
  .btn-primary{
    background: linear-gradient(135deg, #00d4aa, #a855f7);
    color: #020617;
  }
  .btn-primary:hover{ transform: translateY(-1px); box-shadow: 0 10px 25px rgba(0,0,0,.25); }

  .btn-secondary{
    background: rgba(255,255,255,.06);
    border-color: rgba(255,255,255,.18);
    color: rgba(226,232,240,.95);
  }
  .btn-secondary:hover{ background: rgba(255,255,255,.12); }
</style>

<div class=\"container\">

  <!-- ✅ NAVBAR -->
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
      <a href=\"{{ path('front_categorie_index') }}\">categorie</a>
      <a href=\"{{ path('front_activite_index') }}\">Activité</a>
      <a href=\"{{ path('front_objectif_index') }}\">Objectif</a>
      <a href=\"{{ path('front_depense_index') }}\">depense</a>
      <a href=\"{{ path('front_aliment_index') }}\">Alimentation</a>
      <a href=\"{{ path('cours_front_index') }}\">apprentissage</a>
      <a href=\"{{ path('front_energie_index') }}\">Énergie</a>
      <a href=\"{{ path('front_recommandation_index') }}\">Recommandation</a>
    </div>

    <a href=\"{{ path('app_logout') }}\" class=\"nav-link\">
      <i class=\"fa-solid fa-right-from-bracket\"></i> Déconnexion
    </a>
  </nav>

  <!-- ✅ MAIN -->
  <main class=\"hero\">
    <div class=\"glow\"></div>

    <h1 class=\"hero-title\">🍽️ Meal Details</h1>
    <p class=\"hero-description\">
      {{ repas.type|replace({'-':' '})|title }}
      • {{ repas.heure ? repas.heure|date('H:i') : 'N/A' }}
      • {{ repas.date ? repas.date|date('Y-m-d') : 'N/A' }}
    </p>

    <div class=\"section-head\">
      <h2 class=\"section-title\">{{ repas.nom }}</h2>
      <div style=\"display:flex; gap:10px; flex-wrap:wrap;\">
        <a class=\"btn btn-secondary\" href=\"{{ path('front_repas_index') }}\">
          <i class=\"fa-solid fa-arrow-left\"></i> Back
        </a>
        <a class=\"btn btn-primary\" href=\"{{ path('front_repas_edit', {'id': repas.id}) }}\">
          <i class=\"fa-solid fa-pen\"></i> Edit
        </a>
      </div>
    </div>

    <!-- ✅ STATS (glass) -->
    <div class=\"glass\" style=\"margin-top:16px; padding:14px;\">
      <div class=\"meal-details\">
        <div class=\"detail-box\">
          <div class=\"muted\">Calories</div>
          <div class=\"detail-value\">
            <span class=\"pill kcal\"><i class=\"fa-solid fa-fire\"></i> {{ repas.calories }} kcal</span>
          </div>
        </div>

        <div class=\"detail-box\">
          <div class=\"muted\">Foods</div>
          <div class=\"detail-value\">{{ repas.aliments|length }}</div>
        </div>

        <div class=\"detail-box\">
       <div class=\"muted\">Date</div>
       <div class=\"detail-value\">
       {{ repas.date ? repas.date|date('Y-m-d') : 'N/A' }}
       </div>
       </div>


        <div class=\"detail-box\">
          <div class=\"muted\">Type</div>
          <div class=\"detail-value\">{{ repas.type|replace({'-':' '})|title }}</div>
        </div>

        <div class=\"detail-box\">
          <div class=\"muted\">Time</div>
          <div class=\"detail-value\">{{ repas.heure ? repas.heure|date('H:i') : 'N/A' }}</div>
        </div>
      </div>

      {% if repas.description %}
        <div class=\"detail-note\">
          <div class=\"muted\" style=\"margin-bottom:8px;\">Notes</div>
          <div>{{ repas.description }}</div>
        </div>
      {% endif %}

      <div style=\"margin-top: 16px;\">
        <div class=\"muted\" style=\"margin-bottom:10px;\">Foods list</div>

        {% if repas.aliments|length == 0 %}
          <div class=\"hero-description\" style=\"margin:0;\">No foods linked to this meal.</div>
        {% else %}
          <div class=\"foods-grid\">
            {% for a in repas.aliments %}
              <div class=\"food-chip\">
                <strong>{{ a.nom }}</strong>
                <span class=\"muted\">Qty: {{ a.quantite|default('N/A') }}</span>
              </div>
            {% endfor %}
          </div>
        {% endif %}
      </div>
    </div>

  </main>
</div>
{% endblock %}
", "front/repas/show.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\front\\repas\\show.html.twig");
    }
}
