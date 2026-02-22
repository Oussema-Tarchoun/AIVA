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

/* front/energy.html.twig */
class __TwigTemplate_bb912e782fdbe9571e672e55018a67ca extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/energy.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/energy.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Energy - AIVA</title>

  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/stylefront.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">
</head>

<body>

";
        // line 15
        $context["energies"] = ((array_key_exists("energies", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["energies"]) || array_key_exists("energies", $context) ? $context["energies"] : (function () { throw new RuntimeError('Variable "energies" does not exist.', 15, $this->source); })()), [])) : ([]));
        // line 16
        $context["addErrors"] = ((array_key_exists("addErrors", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["addErrors"]) || array_key_exists("addErrors", $context) ? $context["addErrors"] : (function () { throw new RuntimeError('Variable "addErrors" does not exist.', 16, $this->source); })()), [])) : ([]));
        // line 17
        $context["oldAdd"] = ((array_key_exists("oldAdd", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["oldAdd"]) || array_key_exists("oldAdd", $context) ? $context["oldAdd"] : (function () { throw new RuntimeError('Variable "oldAdd" does not exist.', 17, $this->source); })()), [])) : ([]));
        // line 18
        yield "
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
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_categorie_index");
        yield "\">Categorie</a>
      <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_activite_index");
        yield "\">Activité</a>
      <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_index");
        yield "\">Objectif</a>
      <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_depense_index");
        yield "\">Dépense</a>
      <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_aliment_index");
        yield "\">Alimentation</a>
      <a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_front_index");
        yield "\">Apprentissage</a>
      <a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_energie_index");
        yield "\" class=\"active\">Énergie</a>
      <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_recommandation_index");
        yield "\">Recommandations</a>
    </div>

    <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"nav-link\">
      <i class=\"fa-solid fa-right-from-bracket\"></i> Déconnexion
    </a>
  </nav>

  <main class=\"hero\">
    <div class=\"glow\"></div>

    <h1 class=\"hero-title\">⚡ Mes Énergies</h1>
    <p class=\"hero-description\">
      Suivez votre consommation d’électricité, gaz et eau.
    </p>

    <!-- FLASH -->
    <div style=\"margin: 12px 0;\">
      ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "flashes", ["success"], "method", false, false, false, 64));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 65
            yield "        <div style=\"padding:10px;border-radius:8px;margin-bottom:8px;
                    background:rgba(0,210,150,.15);
                    border:1px solid rgba(0,210,150,.35);\">
          ";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        yield "    </div>

    <div class=\"section-head\">
      <h2 class=\"section-title\">Mes énergies</h2>
      <button class=\"btn btn-primary\" type=\"button\" id=\"openAddModal\">
        + Ajouter
      </button>
    </div>

    <!-- ✅ CARDS GRID -->
    <div style=\"
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(320px,1fr));
      gap:20px;
      margin-top:24px;
    \">

      ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["energies"]) || array_key_exists("energies", $context) ? $context["energies"] : (function () { throw new RuntimeError('Variable "energies" does not exist.', 88, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["energie"]) {
            // line 89
            yield "
        ";
            // line 90
            $context["icon"] = (((CoreExtension::getAttribute($this->env, $this->source,             // line 91
$context["energie"], "typeEnergie", [], "any", false, false, false, 91) == "Électricité")) ? ("fa-bolt") : ((((CoreExtension::getAttribute($this->env, $this->source,             // line 92
$context["energie"], "typeEnergie", [], "any", false, false, false, 92) == "Gaz")) ? ("fa-fire") : ("fa-droplet"))));
            // line 95
            yield "
        <div style=\"
          padding:18px;
          border-radius:18px;
          background:linear-gradient(135deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
          border:1px solid rgba(255,255,255,.12);
          backdrop-filter: blur(10px);
          transition:.2s;
        \"
        onmouseover=\"this.style.transform='translateY(-4px)';
                     this.style.boxShadow='0 10px 30px rgba(0,0,0,.25)'\"
        onmouseout=\"this.style.transform='none';
                    this.style.boxShadow='none'\">

          <!-- HEADER -->
          <div style=\"display:flex;justify-content:space-between;\">
            <div>
              <div style=\"font-size:17px;font-weight:700;\">
                <i class=\"fa-solid ";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 113, $this->source); })()), "html", null, true);
            yield "\"></i>
                ";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["energie"], "typeEnergie", [], "any", false, false, false, 114), "html", null, true);
            yield "
              </div>

              <div style=\"font-size:13px;opacity:.75;margin-top:6px;\">
                <i class=\"fa-regular fa-calendar\"></i>
                ";
            // line 119
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["energie"], "dateEnregistrement", [], "any", false, false, false, 119)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["energie"], "dateEnregistrement", [], "any", false, false, false, 119), "d/m/Y"), "html", null, true)) : (""));
            yield "
              </div>
            </div>

            <span style=\"
              padding:6px 12px;
              border-radius:999px;
              font-size:12px;
              font-weight:700;
              background:rgba(255,255,255,.06);
              border:1px solid rgba(255,255,255,.15);
            \">
              #";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["energie"], "id", [], "any", false, false, false, 131), "html", null, true);
            yield "
            </span>
          </div>

          <!-- BODY -->
          <div style=\"margin-top:14px;font-size:14px;line-height:1.6;\">
            <p><b>Période :</b> ";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["energie"], "periode", [], "any", false, false, false, 137), "html", null, true);
            yield "</p>
            <p><b>Valeur :</b> ";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["energie"], "valeur", [], "any", false, false, false, 138), "html", null, true);
            yield "</p>
            <p><b>Source :</b> ";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["energie"], "source", [], "any", false, false, false, 139), "html", null, true);
            yield "</p>
          </div>

          <!-- ACTIONS -->
          <div style=\"margin-top:16px;display:flex;justify-content:space-between;gap:10px;\">

            <button
              type=\"button\"
              class=\"btn btn-warning openEditModal\"
              data-id=\"";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["energie"], "id", [], "any", false, false, false, 148), "html", null, true);
            yield "\"
              data-type=\"";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["energie"], "typeEnergie", [], "any", false, false, false, 149), "html", null, true);
            yield "\"
              data-periode=\"";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["energie"], "periode", [], "any", false, false, false, 150), "html", null, true);
            yield "\"
              data-valeur=\"";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["energie"], "valeur", [], "any", false, false, false, 151), "html", null, true);
            yield "\"
              data-date=\"";
            // line 152
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["energie"], "dateEnregistrement", [], "any", false, false, false, 152)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["energie"], "dateEnregistrement", [], "any", false, false, false, 152), "Y-m-d"), "html", null, true)) : (""));
            yield "\"
              data-source=\"";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["energie"], "source", [], "any", false, false, false, 153), "html_attr");
            yield "\"
            >
              <i class=\"fa-solid fa-pen\"></i>
            </button>

            <form method=\"post\"
                  action=\"";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_energie_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["energie"], "id", [], "any", false, false, false, 159)]), "html", null, true);
            yield "\"
                  onsubmit=\"return confirm('Supprimer cette énergie ?');\">
              <input type=\"hidden\" name=\"_token\" value=\"";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_energie_" . CoreExtension::getAttribute($this->env, $this->source, $context["energie"], "id", [], "any", false, false, false, 161))), "html", null, true);
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
        // line 171
        if (!$context['_iterated']) {
            // line 172
            yield "        <div style=\"
          padding:20px;
          border-radius:16px;
          background:rgba(255,255,255,.04);
          border:1px dashed rgba(255,255,255,.15);
        \">
          Aucune énergie enregistrée.
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['energie'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        yield "    </div>

  </main>
</div>

<!-- ================= MODAL ADD ================= -->
<div class=\"modal\" id=\"energieAddModal\" aria-hidden=\"true\">
  <div class=\"modal-backdrop\" data-close=\"1\"></div>
  <div class=\"modal-dialog\">
    <div class=\"modal-header\">
      <h3 class=\"modal-title\">Ajouter une énergie</h3>
      <button class=\"modal-close\" type=\"button\" data-close=\"1\">✕</button>
    </div>

    <div class=\"modal-body\">
      <form method=\"POST\" action=\"";
        // line 196
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_energie_add");
        yield "\">
        <div class=\"form-grid\">

          <div class=\"form-col\">
            <label>Type d'énergie</label>
            <select name=\"typeEnergie\">
              <option value=\"Électricité\">Électricité</option>
              <option value=\"Gaz\">Gaz</option>
              <option value=\"Eau\">Eau</option>
            </select>
          </div>

          <div class=\"form-col\">
            <label>Date</label>
            <input type=\"date\" name=\"dateEnregistrement\">
          </div>

          <div class=\"form-col\">
            <label>Période</label>
            <input type=\"number\" step=\"0.01\" name=\"periode\">
          </div>

          <div class=\"form-col\">
            <label>Valeur</label>
            <input type=\"number\" step=\"0.01\" name=\"valeur\">
          </div>

          <div class=\"form-col-full\">
            <label>Source</label>
            <input type=\"text\" name=\"source\">
          </div>

        </div>

        <div class=\"modal-actions\">
          <button class=\"btn btn-success\" type=\"submit\">Ajouter</button>
          <button class=\"btn btn-secondary\" type=\"button\" data-close=\"1\">Annuler</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- ================= MODAL EDIT ================= -->
<div class=\"modal\" id=\"energieEditModal\" aria-hidden=\"true\">
  <div class=\"modal-backdrop\" data-close=\"1\"></div>
  <div class=\"modal-dialog\">
    <div class=\"modal-header\">
      <h3 class=\"modal-title\">Modifier énergie</h3>
      <button class=\"modal-close\" type=\"button\" data-close=\"1\">✕</button>
    </div>

    <div class=\"modal-body\">
      <form method=\"POST\" id=\"energieEditForm\" action=\"\">
        <div class=\"form-grid\">

          <div class=\"form-col\">
            <label>Type</label>
            <select name=\"typeEnergie\">
              <option value=\"Électricité\">Électricité</option>
              <option value=\"Gaz\">Gaz</option>
              <option value=\"Eau\">Eau</option>
            </select>
          </div>

          <div class=\"form-col\">
            <label>Date</label>
            <input type=\"date\" name=\"dateEnregistrement\">
          </div>

          <div class=\"form-col\">
            <label>Période</label>
            <input type=\"number\" step=\"0.01\" name=\"periode\">
          </div>

          <div class=\"form-col\">
            <label>Valeur</label>
            <input type=\"number\" step=\"0.01\" name=\"valeur\">
          </div>

          <div class=\"form-col-full\">
            <label>Source</label>
            <input type=\"text\" name=\"source\">
          </div>

        </div>

        <div class=\"modal-actions\">
          <button class=\"btn btn-success\" type=\"submit\">Modifier</button>
          <button class=\"btn btn-secondary\" type=\"button\" data-close=\"1\">Annuler</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- ================= JS ================= -->
<script>
function openModal(modal) {
  modal.classList.add(\"is-open\");
}
function closeModal(modal) {
  modal.classList.remove(\"is-open\");
}
function wireModalClose(modal) {
  if (!modal) return;
  modal.addEventListener(\"click\", (e) => {
    if (e.target.closest(\"[data-close='1']\")) closeModal(modal);
  });
}

const addModal = document.getElementById(\"energieAddModal\");
const editModal = document.getElementById(\"energieEditModal\");

wireModalClose(addModal);
wireModalClose(editModal);

document.getElementById(\"openAddModal\")?.addEventListener(\"click\", () => {
  openModal(addModal);
});

const baseUpdateAction = \"";
        // line 317
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_energie_update", ["id" => "ID"]);
        yield "\";

document.querySelectorAll(\".openEditModal\").forEach((btn) => {
  btn.addEventListener(\"click\", () => {
    const form = document.getElementById(\"energieEditForm\");
    form.action = baseUpdateAction.replace(\"ID\", btn.dataset.id);

    form.querySelector(\"[name='typeEnergie']\").value = btn.dataset.type;
    form.querySelector(\"[name='periode']\").value = btn.dataset.periode;
    form.querySelector(\"[name='valeur']\").value = btn.dataset.valeur;
    form.querySelector(\"[name='dateEnregistrement']\").value = btn.dataset.date;
    form.querySelector(\"[name='source']\").value = btn.dataset.source;

    openModal(editModal);
  });
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
        return "front/energy.html.twig";
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
        return array (  479 => 317,  355 => 196,  338 => 181,  324 => 172,  322 => 171,  307 => 161,  302 => 159,  293 => 153,  289 => 152,  285 => 151,  281 => 150,  277 => 149,  273 => 148,  261 => 139,  257 => 138,  253 => 137,  244 => 131,  229 => 119,  221 => 114,  217 => 113,  197 => 95,  195 => 92,  194 => 91,  193 => 90,  190 => 89,  185 => 88,  166 => 71,  157 => 68,  152 => 65,  148 => 64,  130 => 49,  124 => 46,  120 => 45,  116 => 44,  112 => 43,  108 => 42,  104 => 41,  100 => 40,  96 => 39,  73 => 18,  71 => 17,  69 => 16,  67 => 15,  58 => 9,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Energy - AIVA</title>

  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"{{ asset('css/stylefront.css') }}\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">
</head>

<body>

{% set energies = energies|default([]) %}
{% set addErrors = addErrors|default({}) %}
{% set oldAdd = oldAdd|default({}) %}

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
      <a href=\"{{ path('front_categorie_index') }}\">Categorie</a>
      <a href=\"{{ path('front_activite_index') }}\">Activité</a>
      <a href=\"{{ path('front_objectif_index') }}\">Objectif</a>
      <a href=\"{{ path('front_depense_index') }}\">Dépense</a>
      <a href=\"{{ path('front_aliment_index') }}\">Alimentation</a>
      <a href=\"{{ path('cours_front_index') }}\">Apprentissage</a>
      <a href=\"{{ path('front_energie_index') }}\" class=\"active\">Énergie</a>
      <a href=\"{{ path('front_recommandation_index') }}\">Recommandations</a>
    </div>

    <a href=\"{{ path('app_logout') }}\" class=\"nav-link\">
      <i class=\"fa-solid fa-right-from-bracket\"></i> Déconnexion
    </a>
  </nav>

  <main class=\"hero\">
    <div class=\"glow\"></div>

    <h1 class=\"hero-title\">⚡ Mes Énergies</h1>
    <p class=\"hero-description\">
      Suivez votre consommation d’électricité, gaz et eau.
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
    </div>

    <div class=\"section-head\">
      <h2 class=\"section-title\">Mes énergies</h2>
      <button class=\"btn btn-primary\" type=\"button\" id=\"openAddModal\">
        + Ajouter
      </button>
    </div>

    <!-- ✅ CARDS GRID -->
    <div style=\"
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(320px,1fr));
      gap:20px;
      margin-top:24px;
    \">

      {% for energie in energies %}

        {% set icon =
          energie.typeEnergie == 'Électricité' ? 'fa-bolt' :
          energie.typeEnergie == 'Gaz' ? 'fa-fire' :
          'fa-droplet'
        %}

        <div style=\"
          padding:18px;
          border-radius:18px;
          background:linear-gradient(135deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
          border:1px solid rgba(255,255,255,.12);
          backdrop-filter: blur(10px);
          transition:.2s;
        \"
        onmouseover=\"this.style.transform='translateY(-4px)';
                     this.style.boxShadow='0 10px 30px rgba(0,0,0,.25)'\"
        onmouseout=\"this.style.transform='none';
                    this.style.boxShadow='none'\">

          <!-- HEADER -->
          <div style=\"display:flex;justify-content:space-between;\">
            <div>
              <div style=\"font-size:17px;font-weight:700;\">
                <i class=\"fa-solid {{ icon }}\"></i>
                {{ energie.typeEnergie }}
              </div>

              <div style=\"font-size:13px;opacity:.75;margin-top:6px;\">
                <i class=\"fa-regular fa-calendar\"></i>
                {{ energie.dateEnregistrement ? energie.dateEnregistrement|date('d/m/Y') : '' }}
              </div>
            </div>

            <span style=\"
              padding:6px 12px;
              border-radius:999px;
              font-size:12px;
              font-weight:700;
              background:rgba(255,255,255,.06);
              border:1px solid rgba(255,255,255,.15);
            \">
              #{{ energie.id }}
            </span>
          </div>

          <!-- BODY -->
          <div style=\"margin-top:14px;font-size:14px;line-height:1.6;\">
            <p><b>Période :</b> {{ energie.periode }}</p>
            <p><b>Valeur :</b> {{ energie.valeur }}</p>
            <p><b>Source :</b> {{ energie.source }}</p>
          </div>

          <!-- ACTIONS -->
          <div style=\"margin-top:16px;display:flex;justify-content:space-between;gap:10px;\">

            <button
              type=\"button\"
              class=\"btn btn-warning openEditModal\"
              data-id=\"{{ energie.id }}\"
              data-type=\"{{ energie.typeEnergie }}\"
              data-periode=\"{{ energie.periode }}\"
              data-valeur=\"{{ energie.valeur }}\"
              data-date=\"{{ energie.dateEnregistrement ? energie.dateEnregistrement|date('Y-m-d') : '' }}\"
              data-source=\"{{ energie.source|e('html_attr') }}\"
            >
              <i class=\"fa-solid fa-pen\"></i>
            </button>

            <form method=\"post\"
                  action=\"{{ path('front_energie_delete', {id: energie.id}) }}\"
                  onsubmit=\"return confirm('Supprimer cette énergie ?');\">
              <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_energie_' ~ energie.id) }}\">
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
          Aucune énergie enregistrée.
        </div>
      {% endfor %}
    </div>

  </main>
</div>

<!-- ================= MODAL ADD ================= -->
<div class=\"modal\" id=\"energieAddModal\" aria-hidden=\"true\">
  <div class=\"modal-backdrop\" data-close=\"1\"></div>
  <div class=\"modal-dialog\">
    <div class=\"modal-header\">
      <h3 class=\"modal-title\">Ajouter une énergie</h3>
      <button class=\"modal-close\" type=\"button\" data-close=\"1\">✕</button>
    </div>

    <div class=\"modal-body\">
      <form method=\"POST\" action=\"{{ path('front_energie_add') }}\">
        <div class=\"form-grid\">

          <div class=\"form-col\">
            <label>Type d'énergie</label>
            <select name=\"typeEnergie\">
              <option value=\"Électricité\">Électricité</option>
              <option value=\"Gaz\">Gaz</option>
              <option value=\"Eau\">Eau</option>
            </select>
          </div>

          <div class=\"form-col\">
            <label>Date</label>
            <input type=\"date\" name=\"dateEnregistrement\">
          </div>

          <div class=\"form-col\">
            <label>Période</label>
            <input type=\"number\" step=\"0.01\" name=\"periode\">
          </div>

          <div class=\"form-col\">
            <label>Valeur</label>
            <input type=\"number\" step=\"0.01\" name=\"valeur\">
          </div>

          <div class=\"form-col-full\">
            <label>Source</label>
            <input type=\"text\" name=\"source\">
          </div>

        </div>

        <div class=\"modal-actions\">
          <button class=\"btn btn-success\" type=\"submit\">Ajouter</button>
          <button class=\"btn btn-secondary\" type=\"button\" data-close=\"1\">Annuler</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- ================= MODAL EDIT ================= -->
<div class=\"modal\" id=\"energieEditModal\" aria-hidden=\"true\">
  <div class=\"modal-backdrop\" data-close=\"1\"></div>
  <div class=\"modal-dialog\">
    <div class=\"modal-header\">
      <h3 class=\"modal-title\">Modifier énergie</h3>
      <button class=\"modal-close\" type=\"button\" data-close=\"1\">✕</button>
    </div>

    <div class=\"modal-body\">
      <form method=\"POST\" id=\"energieEditForm\" action=\"\">
        <div class=\"form-grid\">

          <div class=\"form-col\">
            <label>Type</label>
            <select name=\"typeEnergie\">
              <option value=\"Électricité\">Électricité</option>
              <option value=\"Gaz\">Gaz</option>
              <option value=\"Eau\">Eau</option>
            </select>
          </div>

          <div class=\"form-col\">
            <label>Date</label>
            <input type=\"date\" name=\"dateEnregistrement\">
          </div>

          <div class=\"form-col\">
            <label>Période</label>
            <input type=\"number\" step=\"0.01\" name=\"periode\">
          </div>

          <div class=\"form-col\">
            <label>Valeur</label>
            <input type=\"number\" step=\"0.01\" name=\"valeur\">
          </div>

          <div class=\"form-col-full\">
            <label>Source</label>
            <input type=\"text\" name=\"source\">
          </div>

        </div>

        <div class=\"modal-actions\">
          <button class=\"btn btn-success\" type=\"submit\">Modifier</button>
          <button class=\"btn btn-secondary\" type=\"button\" data-close=\"1\">Annuler</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- ================= JS ================= -->
<script>
function openModal(modal) {
  modal.classList.add(\"is-open\");
}
function closeModal(modal) {
  modal.classList.remove(\"is-open\");
}
function wireModalClose(modal) {
  if (!modal) return;
  modal.addEventListener(\"click\", (e) => {
    if (e.target.closest(\"[data-close='1']\")) closeModal(modal);
  });
}

const addModal = document.getElementById(\"energieAddModal\");
const editModal = document.getElementById(\"energieEditModal\");

wireModalClose(addModal);
wireModalClose(editModal);

document.getElementById(\"openAddModal\")?.addEventListener(\"click\", () => {
  openModal(addModal);
});

const baseUpdateAction = \"{{ path('front_energie_update', {id: 'ID'}) }}\";

document.querySelectorAll(\".openEditModal\").forEach((btn) => {
  btn.addEventListener(\"click\", () => {
    const form = document.getElementById(\"energieEditForm\");
    form.action = baseUpdateAction.replace(\"ID\", btn.dataset.id);

    form.querySelector(\"[name='typeEnergie']\").value = btn.dataset.type;
    form.querySelector(\"[name='periode']\").value = btn.dataset.periode;
    form.querySelector(\"[name='valeur']\").value = btn.dataset.valeur;
    form.querySelector(\"[name='dateEnregistrement']\").value = btn.dataset.date;
    form.querySelector(\"[name='source']\").value = btn.dataset.source;

    openModal(editModal);
  });
});
</script>

</body>
</html>
", "front/energy.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\front\\energy.html.twig");
    }
}
