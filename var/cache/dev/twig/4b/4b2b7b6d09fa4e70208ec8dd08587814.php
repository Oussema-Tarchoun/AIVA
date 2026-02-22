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

/* front/objectif/edit.html.twig */
class __TwigTemplate_e810265ff92dd1806ad602936f402c00 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/objectif/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/objectif/edit.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Edit Objectif - AIVA</title>

  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/stylefront.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">

  <style>
    /* ✅ prevent input overflow */
    *, *::before, *::after { box-sizing: border-box; }

    /* ✅ same theme form card */
    .form-card{
      width: min(900px, 95%);
      margin: 18px auto 0;
      border: 1px solid rgba(255,255,255,.12);
      border-radius: 18px;
      background: linear-gradient(135deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
      padding: 22px;
      backdrop-filter: blur(10px);
      overflow: hidden;
    }

    .form-head{
      display:flex;
      justify-content:space-between;
      align-items:flex-start;
      gap:12px;
      flex-wrap:wrap;
      margin-bottom: 14px;
    }
    .form-head h3{
      margin:0;
      font-size: 18px;
      font-weight: 900;
      letter-spacing: -0.01em;
    }
    .form-head p{
      margin:6px 0 0;
      opacity:.75;
      font-size: 13px;
    }

    /* grid rows */
    .form-grid{
      display:grid;
      grid-template-columns: 220px 1fr;
      gap:14px;
      align-items:center;
      margin-bottom:14px;
    }
    .form-grid.top{ align-items:start; }

    @media (max-width: 820px){
      .form-grid{ grid-template-columns: 1fr; }
    }

    /* inputs */
    .form-card input,
    .form-card select,
    .form-card textarea{
      width:100%;
      max-width:100%;
      padding: 12px 14px;
      border-radius: 12px;
      border: 1px solid rgba(255,255,255,.16);
      background: rgba(0,0,0,.18);
      color: #fff;
      outline: none;
      font-size: 14px;
    }
    .form-card textarea{
      min-height: 120px;
      resize: vertical;
    }
    .form-card input:focus,
    .form-card select:focus,
    .form-card textarea:focus{
      border-color:#00d4aa;
      box-shadow: 0 0 0 3px rgba(0,212,170,.18);
    }

    .field-label{
      color: rgba(226,232,240,.85);
      font-weight: 900;
      font-size: 13px;
    }

    .field-errors{
      margin-top: 6px;
      color: #ff6b6b;
      font-size: 13px;
    }

    .form-actions{
      margin-top:18px;
      display:flex;
      gap:12px;
      justify-content:center;
      flex-wrap:wrap;
    }
    .form-actions .hero-button{ text-decoration:none; }
  </style>
</head>

<body>
<div class=\"container\">
  <!-- Navbar -->
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
        // line 131
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_categorie_index");
        yield "\">categorie</a>
      <a href=\"";
        // line 132
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_activite_index");
        yield "\">Activité</a>
      <a href=\"";
        // line 133
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_index");
        yield "\" class=\"active\">Objectif</a>
      <a href=\"";
        // line 134
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_depense_index");
        yield "\">depense</a>
      <a href=\"";
        // line 135
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_aliment_index");
        yield "\">Alimentation</a>
      <a href=\"";
        // line 136
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_front_index");
        yield "\">apprentissage</a>
      <a href=\"";
        // line 137
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_energie_index");
        yield "\">Énergie</a>
      <a href=\"";
        // line 138
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_recommandation_index");
        yield "\">Recommandation</a>
    </div>

    <a href=\"";
        // line 141
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"nav-link\">
      <i class=\"fa-solid fa-right-from-bracket\"></i> Déconnexion
    </a>
  </nav>

  <main class=\"hero\">
    <div class=\"glow\"></div>

    <h1 class=\"hero-title\">Edit <span>Objectif</span></h1>
    <p class=\"hero-description\">Update your objective details.</p>

    <div class=\"form-card\">
      <div class=\"form-head\">
        <div>
          <h3>Update objectif</h3>
          <p>Change description, dates, status and target value.</p>
        </div>
        <a class=\"hero-button\" href=\"";
        // line 158
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_index");
        yield "\" style=\"text-decoration:none;\">
          ← Back
        </a>
      </div>

      ";
        // line 163
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

      <div class=\"form-grid top\">
        <div class=\"field-label\">";
        // line 166
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "description", [], "any", false, false, false, 166), 'label');
        yield "</div>
        <div>
          ";
        // line 168
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "description", [], "any", false, false, false, 168), 'widget');
        yield "
          <div class=\"field-errors\">";
        // line 169
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 169, $this->source); })()), "description", [], "any", false, false, false, 169), 'errors');
        yield "</div>
        </div>
      </div>

      ";
        // line 173
        $context["fields"] = [CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "type", [], "any", false, false, false, 173), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "valeurCible", [], "any", false, false, false, 173), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "dateDebut", [], "any", false, false, false, 173), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "dateFin", [], "any", false, false, false, 173), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "statut", [], "any", false, false, false, 173)];
        // line 174
        yield "      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 174, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 175
            yield "        <div class=\"form-grid\">
          <div class=\"field-label\">";
            // line 176
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'label');
            yield "</div>
          <div>
            ";
            // line 178
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
            yield "
            <div class=\"field-errors\">";
            // line 179
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'errors');
            yield "</div>
          </div>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        yield "
      <div class=\"form-actions\">
        <button class=\"hero-button\" type=\"submit\">Update</button>
        <a class=\"hero-button\" href=\"";
        // line 186
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_index");
        yield "\">Cancel</a>
      </div>

      ";
        // line 189
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 189, $this->source); })()), 'form_end');
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
        return "front/objectif/edit.html.twig";
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
        return array (  306 => 189,  300 => 186,  295 => 183,  285 => 179,  281 => 178,  276 => 176,  273 => 175,  268 => 174,  266 => 173,  259 => 169,  255 => 168,  250 => 166,  244 => 163,  236 => 158,  216 => 141,  210 => 138,  206 => 137,  202 => 136,  198 => 135,  194 => 134,  190 => 133,  186 => 132,  182 => 131,  58 => 10,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/front/objectif/edit.html.twig #}
<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Edit Objectif - AIVA</title>

  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"{{ asset('css/stylefront.css') }}\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">

  <style>
    /* ✅ prevent input overflow */
    *, *::before, *::after { box-sizing: border-box; }

    /* ✅ same theme form card */
    .form-card{
      width: min(900px, 95%);
      margin: 18px auto 0;
      border: 1px solid rgba(255,255,255,.12);
      border-radius: 18px;
      background: linear-gradient(135deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
      padding: 22px;
      backdrop-filter: blur(10px);
      overflow: hidden;
    }

    .form-head{
      display:flex;
      justify-content:space-between;
      align-items:flex-start;
      gap:12px;
      flex-wrap:wrap;
      margin-bottom: 14px;
    }
    .form-head h3{
      margin:0;
      font-size: 18px;
      font-weight: 900;
      letter-spacing: -0.01em;
    }
    .form-head p{
      margin:6px 0 0;
      opacity:.75;
      font-size: 13px;
    }

    /* grid rows */
    .form-grid{
      display:grid;
      grid-template-columns: 220px 1fr;
      gap:14px;
      align-items:center;
      margin-bottom:14px;
    }
    .form-grid.top{ align-items:start; }

    @media (max-width: 820px){
      .form-grid{ grid-template-columns: 1fr; }
    }

    /* inputs */
    .form-card input,
    .form-card select,
    .form-card textarea{
      width:100%;
      max-width:100%;
      padding: 12px 14px;
      border-radius: 12px;
      border: 1px solid rgba(255,255,255,.16);
      background: rgba(0,0,0,.18);
      color: #fff;
      outline: none;
      font-size: 14px;
    }
    .form-card textarea{
      min-height: 120px;
      resize: vertical;
    }
    .form-card input:focus,
    .form-card select:focus,
    .form-card textarea:focus{
      border-color:#00d4aa;
      box-shadow: 0 0 0 3px rgba(0,212,170,.18);
    }

    .field-label{
      color: rgba(226,232,240,.85);
      font-weight: 900;
      font-size: 13px;
    }

    .field-errors{
      margin-top: 6px;
      color: #ff6b6b;
      font-size: 13px;
    }

    .form-actions{
      margin-top:18px;
      display:flex;
      gap:12px;
      justify-content:center;
      flex-wrap:wrap;
    }
    .form-actions .hero-button{ text-decoration:none; }
  </style>
</head>

<body>
<div class=\"container\">
  <!-- Navbar -->
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
      <a href=\"{{ path('front_objectif_index') }}\" class=\"active\">Objectif</a>
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

  <main class=\"hero\">
    <div class=\"glow\"></div>

    <h1 class=\"hero-title\">Edit <span>Objectif</span></h1>
    <p class=\"hero-description\">Update your objective details.</p>

    <div class=\"form-card\">
      <div class=\"form-head\">
        <div>
          <h3>Update objectif</h3>
          <p>Change description, dates, status and target value.</p>
        </div>
        <a class=\"hero-button\" href=\"{{ path('front_objectif_index') }}\" style=\"text-decoration:none;\">
          ← Back
        </a>
      </div>

      {{ form_start(form, { attr: { novalidate: 'novalidate' } }) }}

      <div class=\"form-grid top\">
        <div class=\"field-label\">{{ form_label(form.description) }}</div>
        <div>
          {{ form_widget(form.description) }}
          <div class=\"field-errors\">{{ form_errors(form.description) }}</div>
        </div>
      </div>

      {% set fields = [form.type, form.valeurCible, form.dateDebut, form.dateFin, form.statut] %}
      {% for field in fields %}
        <div class=\"form-grid\">
          <div class=\"field-label\">{{ form_label(field) }}</div>
          <div>
            {{ form_widget(field) }}
            <div class=\"field-errors\">{{ form_errors(field) }}</div>
          </div>
        </div>
      {% endfor %}

      <div class=\"form-actions\">
        <button class=\"hero-button\" type=\"submit\">Update</button>
        <a class=\"hero-button\" href=\"{{ path('front_objectif_index') }}\">Cancel</a>
      </div>

      {{ form_end(form) }}
    </div>
  </main>
</div>
</body>
</html>
", "front/objectif/edit.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\front\\objectif\\edit.html.twig");
    }
}
