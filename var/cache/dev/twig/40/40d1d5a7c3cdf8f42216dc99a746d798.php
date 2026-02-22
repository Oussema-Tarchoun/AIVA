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

/* front/repas/weekly_report.html.twig */
class __TwigTemplate_da876ad773a4feff5436825799160116 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/repas/weekly_report.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/repas/weekly_report.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>Rapport Nutrition AIVA</title>
<style>
  /* ── Reset ── */
  * { margin:0; padding:0; box-sizing:border-box; }
  body {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Arial, sans-serif;
    background: #f1f5f9;
    color: #1e293b;
    font-size: 15px;
    line-height: 1.6;
  }

  /* ── Wrapper ── */
  .wrapper {
    max-width: 620px;
    margin: 30px auto;
    background: #ffffff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 24px rgba(0,0,0,.10);
  }

  /* ── Header ── */
  .header {
    background: linear-gradient(135deg, #0f172a 0%, #1e3a2f 100%);
    padding: 36px 32px;
    text-align: center;
  }
  .header .logo {
    font-size: 28px;
    font-weight: 900;
    color: #4ade80;
    letter-spacing: 4px;
    margin-bottom: 6px;
  }
  .header .subtitle {
    color: #94a3b8;
    font-size: 14px;
  }
  .header .date {
    display: inline-block;
    margin-top: 14px;
    background: rgba(74,222,128,.12);
    border: 1px solid rgba(74,222,128,.3);
    border-radius: 20px;
    padding: 5px 16px;
    color: #4ade80;
    font-size: 12px;
  }

  /* ── Greeting ── */
  .greeting {
    padding: 24px 32px 0;
    font-size: 16px;
    color: #374151;
  }
  .greeting strong { color: #0f172a; }

  /* ── Score ── */
  .score-section {
    margin: 24px 32px;
    background: #f8fafc;
    border-radius: 12px;
    padding: 24px;
    text-align: center;
    border: 1px solid #e2e8f0;
  }
  .score-ring {
    display: inline-block;
    width: 90px;
    height: 90px;
    border-radius: 50%;
    border: 5px solid;
    line-height: 80px;
    font-size: 26px;
    font-weight: 900;
    margin-bottom: 10px;
  }
  .score-label {
    font-size: 20px;
    font-weight: 800;
    margin-bottom: 6px;
  }
  .score-resume {
    color: #64748b;
    font-size: 14px;
    max-width: 420px;
    margin: 0 auto;
  }

  /* ── Stats ── */
  .stats-row {
    display: table;
    width: calc(100% - 64px);
    margin: 0 32px 24px;
    border-collapse: separate;
    border-spacing: 10px 0;
  }
  .stat-cell {
    display: table-cell;
    width: 33%;
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    padding: 14px 10px;
    text-align: center;
  }
  .stat-value { font-size: 22px; font-weight: 900; color: #0f172a; }
  .stat-label { font-size: 11px; color: #94a3b8; margin-top: 3px; text-transform: uppercase; letter-spacing: .5px; }

  /* ── Sections ── */
  .section {
    margin: 0 32px 22px;
  }
  .section-title {
    font-size: 13px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: .8px;
    color: #64748b;
    margin-bottom: 10px;
    padding-bottom: 6px;
    border-bottom: 2px solid #e2e8f0;
  }
  .item {
    padding: 10px 14px;
    border-radius: 8px;
    font-size: 14px;
    margin-bottom: 7px;
  }
  .item-pos  { background: #f0fdf4; border-left: 3px solid #16a34a; color: #14532d; }
  .item-neg  { background: #fffbeb; border-left: 3px solid #d97706; color: #78350f; }
  .item-tip  { background: #faf5ff; border-left: 3px solid #7c3aed; color: #3b0764; }
  .item-day  {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    padding: 10px 14px;
    margin-bottom: 7px;
    display: table;
    width: 100%;
  }
  .day-name {
    display: table-cell;
    font-weight: 700;
    color: #475569;
    font-size: 13px;
    width: 90px;
    vertical-align: top;
    padding-top: 1px;
  }
  .day-comment {
    display: table-cell;
    font-size: 13px;
    color: #374151;
  }

  /* ── CTA ── */
  .cta-section {
    text-align: center;
    margin: 10px 32px 30px;
  }
  .cta-btn {
    display: inline-block;
    background: linear-gradient(135deg, #00d4aa, #a855f7);
    color: #0f172a !important;
    text-decoration: none;
    font-weight: 800;
    font-size: 15px;
    padding: 14px 32px;
    border-radius: 12px;
  }

  /* ── Footer ── */
  .footer {
    background: #f8fafc;
    border-top: 1px solid #e2e8f0;
    padding: 20px 32px;
    text-align: center;
    font-size: 12px;
    color: #94a3b8;
  }
  .footer a { color: #64748b; }

  /* ── Score colors ── */
  .c-excellent { color: #00d4aa; border-color: #00d4aa; }
  .c-bon       { color: #60a5fa; border-color: #60a5fa; }
  .c-moyen     { color: #f59e0b; border-color: #f59e0b; }
  .c-faible    { color: #ef4444; border-color: #ef4444; }

  @media (max-width: 480px) {
    .stats-row { display: block; }
    .stat-cell { display: block; width: 100%; margin-bottom: 8px; }
    .wrapper { margin: 0; border-radius: 0; }
  }
</style>
</head>
<body>

<div class=\"wrapper\">

  ";
        // line 208
        yield "  <div class=\"header\">
    <div class=\"logo\">AIVA</div>
    <div class=\"subtitle\">Votre assistant nutrition intelligent</div>
    <div class=\"date\">Rapport du ";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y"), "html", null, true);
        yield "</div>
  </div>

  ";
        // line 215
        yield "  <div class=\"greeting\">
    Bonjour <strong>";
        // line 216
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", true, true, false, 216) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 216, $this->source); })()), "name", [], "any", false, false, false, 216)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 216, $this->source); })()), "name", [], "any", false, false, false, 216), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 216, $this->source); })()), "email", [], "any", false, false, false, 216), "html", null, true)));
        yield "</strong> 👋<br>
    Voici votre rapport nutritionnel hebdomadaire généré par l'IA AIVA.
  </div>

  ";
        // line 221
        yield "  ";
        $context["score"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["analyse"] ?? null), "score_semaine", [], "any", true, true, false, 221) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["analyse"]) || array_key_exists("analyse", $context) ? $context["analyse"] : (function () { throw new RuntimeError('Variable "analyse" does not exist.', 221, $this->source); })()), "score_semaine", [], "any", false, false, false, 221)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["analyse"]) || array_key_exists("analyse", $context) ? $context["analyse"] : (function () { throw new RuntimeError('Variable "analyse" does not exist.', 221, $this->source); })()), "score_semaine", [], "any", false, false, false, 221)) : (0));
        // line 222
        yield "  ";
        if (((isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 222, $this->source); })()) >= 80)) {
            // line 223
            yield "    ";
            $context["scoreClass"] = "c-excellent";
            $context["scoreLabel"] = "Excellent";
            // line 224
            yield "  ";
        } elseif (((isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 224, $this->source); })()) >= 60)) {
            // line 225
            yield "    ";
            $context["scoreClass"] = "c-bon";
            $context["scoreLabel"] = "Bon";
            // line 226
            yield "  ";
        } elseif (((isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 226, $this->source); })()) >= 40)) {
            // line 227
            yield "    ";
            $context["scoreClass"] = "c-moyen";
            $context["scoreLabel"] = "Moyen";
            // line 228
            yield "  ";
        } else {
            // line 229
            yield "    ";
            $context["scoreClass"] = "c-faible";
            $context["scoreLabel"] = "Faible";
            // line 230
            yield "  ";
        }
        // line 231
        yield "
  <div class=\"score-section\">
    <div class=\"score-ring ";
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["scoreClass"]) || array_key_exists("scoreClass", $context) ? $context["scoreClass"] : (function () { throw new RuntimeError('Variable "scoreClass" does not exist.', 233, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 233, $this->source); })()), "html", null, true);
        yield "</div>
    <div class=\"score-label ";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["scoreClass"]) || array_key_exists("scoreClass", $context) ? $context["scoreClass"] : (function () { throw new RuntimeError('Variable "scoreClass" does not exist.', 234, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["scoreLabel"]) || array_key_exists("scoreLabel", $context) ? $context["scoreLabel"] : (function () { throw new RuntimeError('Variable "scoreLabel" does not exist.', 234, $this->source); })()), "html", null, true);
        yield " — ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 234, $this->source); })()), "html", null, true);
        yield "/100</div>
    <div class=\"score-resume\">";
        // line 235
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["analyse"] ?? null), "resume", [], "any", true, true, false, 235) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["analyse"]) || array_key_exists("analyse", $context) ? $context["analyse"] : (function () { throw new RuntimeError('Variable "analyse" does not exist.', 235, $this->source); })()), "resume", [], "any", false, false, false, 235)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analyse"]) || array_key_exists("analyse", $context) ? $context["analyse"] : (function () { throw new RuntimeError('Variable "analyse" does not exist.', 235, $this->source); })()), "resume", [], "any", false, false, false, 235), "html", null, true)) : (""));
        yield "</div>
  </div>

  ";
        // line 239
        yield "  <div class=\"stats-row\">
    <div class=\"stat-cell\">
      <div class=\"stat-value\">";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 241, $this->source); })()), "totalRepas", [], "any", false, false, false, 241), "html", null, true);
        yield "</div>
      <div class=\"stat-label\">Repas</div>
    </div>
    <div class=\"stat-cell\">
      <div class=\"stat-value\">";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 245, $this->source); })()), "totalJours", [], "any", false, false, false, 245), "html", null, true);
        yield "</div>
      <div class=\"stat-label\">Jours</div>
    </div>
    <div class=\"stat-cell\">
      <div class=\"stat-value\" style=\"color:#f59e0b;\">";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 249, $this->source); })()), "moyenneCals", [], "any", false, false, false, 249), "html", null, true);
        yield "</div>
      <div class=\"stat-label\">kcal/jour moy.</div>
    </div>
  </div>

  ";
        // line 255
        yield "  ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["analyse"] ?? null), "points_positifs", [], "any", true, true, false, 255)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analyse"]) || array_key_exists("analyse", $context) ? $context["analyse"] : (function () { throw new RuntimeError('Variable "analyse" does not exist.', 255, $this->source); })()), "points_positifs", [], "any", false, false, false, 255), [])) : ([]))) > 0)) {
            // line 256
            yield "  <div class=\"section\">
    <div class=\"section-title\">✅ Points positifs</div>
    ";
            // line 258
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analyse"]) || array_key_exists("analyse", $context) ? $context["analyse"] : (function () { throw new RuntimeError('Variable "analyse" does not exist.', 258, $this->source); })()), "points_positifs", [], "any", false, false, false, 258));
            foreach ($context['_seq'] as $context["_key"] => $context["point"]) {
                // line 259
                yield "      <div class=\"item item-pos\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["point"], "html", null, true);
                yield "</div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['point'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 261
            yield "  </div>
  ";
        }
        // line 263
        yield "
  ";
        // line 265
        yield "  ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["analyse"] ?? null), "points_amelioration", [], "any", true, true, false, 265)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analyse"]) || array_key_exists("analyse", $context) ? $context["analyse"] : (function () { throw new RuntimeError('Variable "analyse" does not exist.', 265, $this->source); })()), "points_amelioration", [], "any", false, false, false, 265), [])) : ([]))) > 0)) {
            // line 266
            yield "  <div class=\"section\">
    <div class=\"section-title\">⚠️ À améliorer</div>
    ";
            // line 268
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analyse"]) || array_key_exists("analyse", $context) ? $context["analyse"] : (function () { throw new RuntimeError('Variable "analyse" does not exist.', 268, $this->source); })()), "points_amelioration", [], "any", false, false, false, 268));
            foreach ($context['_seq'] as $context["_key"] => $context["point"]) {
                // line 269
                yield "      <div class=\"item item-neg\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["point"], "html", null, true);
                yield "</div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['point'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 271
            yield "  </div>
  ";
        }
        // line 273
        yield "
  ";
        // line 275
        yield "  ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["analyse"] ?? null), "analyse_par_jour", [], "any", true, true, false, 275)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analyse"]) || array_key_exists("analyse", $context) ? $context["analyse"] : (function () { throw new RuntimeError('Variable "analyse" does not exist.', 275, $this->source); })()), "analyse_par_jour", [], "any", false, false, false, 275), [])) : ([]))) > 0)) {
            // line 276
            yield "  <div class=\"section\">
    <div class=\"section-title\">📅 Analyse par jour</div>
    ";
            // line 278
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analyse"]) || array_key_exists("analyse", $context) ? $context["analyse"] : (function () { throw new RuntimeError('Variable "analyse" does not exist.', 278, $this->source); })()), "analyse_par_jour", [], "any", false, false, false, 278));
            foreach ($context['_seq'] as $context["_key"] => $context["jour"]) {
                // line 279
                yield "      <div class=\"item-day\">
        <div class=\"day-name\">";
                // line 280
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jour"], "jour", [], "any", false, false, false, 280), "html", null, true);
                yield "</div>
        <div class=\"day-comment\">";
                // line 281
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jour"], "commentaire", [], "any", false, false, false, 281), "html", null, true);
                yield "</div>
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['jour'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 284
            yield "  </div>
  ";
        }
        // line 286
        yield "
  ";
        // line 288
        yield "  ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["analyse"] ?? null), "conseils", [], "any", true, true, false, 288)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analyse"]) || array_key_exists("analyse", $context) ? $context["analyse"] : (function () { throw new RuntimeError('Variable "analyse" does not exist.', 288, $this->source); })()), "conseils", [], "any", false, false, false, 288), [])) : ([]))) > 0)) {
            // line 289
            yield "  <div class=\"section\">
    <div class=\"section-title\">💡 Conseils personnalisés</div>
    ";
            // line 291
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analyse"]) || array_key_exists("analyse", $context) ? $context["analyse"] : (function () { throw new RuntimeError('Variable "analyse" does not exist.', 291, $this->source); })()), "conseils", [], "any", false, false, false, 291));
            foreach ($context['_seq'] as $context["_key"] => $context["conseil"]) {
                // line 292
                yield "      <div class=\"item item-tip\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["conseil"], "html", null, true);
                yield "</div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['conseil'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 294
            yield "  </div>
  ";
        }
        // line 296
        yield "
  ";
        // line 298
        yield "  <div class=\"cta-section\">
    <a href=\"";
        // line 299
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 299, $this->source); })()), "request", [], "any", false, false, false, 299), "schemeAndHttpHost", [], "any", false, false, false, 299), "html", null, true);
        yield "/nutrition/repas\" class=\"cta-btn\">
      🥗 Voir mes repas
    </a>
  </div>

  ";
        // line 305
        yield "  <div class=\"footer\">
    Envoi automatique : <strong>Dimanche à 20h00</strong> (";
        // line 306
        yield ((CoreExtension::inFilter("EMAIL_DEMO", Twig\Extension\CoreExtension::constant("PHP_MAJOR_VERSION"))) ? ("démo") : ("actif"));
        yield ")<br>
    <br>
    Vous recevez cet email car vous êtes inscrit sur AIVA.<br>
    <a href=\"";
        // line 309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 309, $this->source); })()), "request", [], "any", false, false, false, 309), "schemeAndHttpHost", [], "any", false, false, false, 309), "html", null, true);
        yield "/nutrition/repas\">Accéder à AIVA</a>
    &nbsp;·&nbsp;
    © ";
        // line 311
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " AIVA Nutrition
  </div>

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
        return "front/repas/weekly_report.html.twig";
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
        return array (  501 => 311,  496 => 309,  490 => 306,  487 => 305,  479 => 299,  476 => 298,  473 => 296,  469 => 294,  460 => 292,  456 => 291,  452 => 289,  449 => 288,  446 => 286,  442 => 284,  433 => 281,  429 => 280,  426 => 279,  422 => 278,  418 => 276,  415 => 275,  412 => 273,  408 => 271,  399 => 269,  395 => 268,  391 => 266,  388 => 265,  385 => 263,  381 => 261,  372 => 259,  368 => 258,  364 => 256,  361 => 255,  353 => 249,  346 => 245,  339 => 241,  335 => 239,  329 => 235,  321 => 234,  315 => 233,  311 => 231,  308 => 230,  304 => 229,  301 => 228,  297 => 227,  294 => 226,  290 => 225,  287 => 224,  283 => 223,  280 => 222,  277 => 221,  270 => 216,  267 => 215,  261 => 211,  256 => 208,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>Rapport Nutrition AIVA</title>
<style>
  /* ── Reset ── */
  * { margin:0; padding:0; box-sizing:border-box; }
  body {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Arial, sans-serif;
    background: #f1f5f9;
    color: #1e293b;
    font-size: 15px;
    line-height: 1.6;
  }

  /* ── Wrapper ── */
  .wrapper {
    max-width: 620px;
    margin: 30px auto;
    background: #ffffff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 24px rgba(0,0,0,.10);
  }

  /* ── Header ── */
  .header {
    background: linear-gradient(135deg, #0f172a 0%, #1e3a2f 100%);
    padding: 36px 32px;
    text-align: center;
  }
  .header .logo {
    font-size: 28px;
    font-weight: 900;
    color: #4ade80;
    letter-spacing: 4px;
    margin-bottom: 6px;
  }
  .header .subtitle {
    color: #94a3b8;
    font-size: 14px;
  }
  .header .date {
    display: inline-block;
    margin-top: 14px;
    background: rgba(74,222,128,.12);
    border: 1px solid rgba(74,222,128,.3);
    border-radius: 20px;
    padding: 5px 16px;
    color: #4ade80;
    font-size: 12px;
  }

  /* ── Greeting ── */
  .greeting {
    padding: 24px 32px 0;
    font-size: 16px;
    color: #374151;
  }
  .greeting strong { color: #0f172a; }

  /* ── Score ── */
  .score-section {
    margin: 24px 32px;
    background: #f8fafc;
    border-radius: 12px;
    padding: 24px;
    text-align: center;
    border: 1px solid #e2e8f0;
  }
  .score-ring {
    display: inline-block;
    width: 90px;
    height: 90px;
    border-radius: 50%;
    border: 5px solid;
    line-height: 80px;
    font-size: 26px;
    font-weight: 900;
    margin-bottom: 10px;
  }
  .score-label {
    font-size: 20px;
    font-weight: 800;
    margin-bottom: 6px;
  }
  .score-resume {
    color: #64748b;
    font-size: 14px;
    max-width: 420px;
    margin: 0 auto;
  }

  /* ── Stats ── */
  .stats-row {
    display: table;
    width: calc(100% - 64px);
    margin: 0 32px 24px;
    border-collapse: separate;
    border-spacing: 10px 0;
  }
  .stat-cell {
    display: table-cell;
    width: 33%;
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    padding: 14px 10px;
    text-align: center;
  }
  .stat-value { font-size: 22px; font-weight: 900; color: #0f172a; }
  .stat-label { font-size: 11px; color: #94a3b8; margin-top: 3px; text-transform: uppercase; letter-spacing: .5px; }

  /* ── Sections ── */
  .section {
    margin: 0 32px 22px;
  }
  .section-title {
    font-size: 13px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: .8px;
    color: #64748b;
    margin-bottom: 10px;
    padding-bottom: 6px;
    border-bottom: 2px solid #e2e8f0;
  }
  .item {
    padding: 10px 14px;
    border-radius: 8px;
    font-size: 14px;
    margin-bottom: 7px;
  }
  .item-pos  { background: #f0fdf4; border-left: 3px solid #16a34a; color: #14532d; }
  .item-neg  { background: #fffbeb; border-left: 3px solid #d97706; color: #78350f; }
  .item-tip  { background: #faf5ff; border-left: 3px solid #7c3aed; color: #3b0764; }
  .item-day  {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    padding: 10px 14px;
    margin-bottom: 7px;
    display: table;
    width: 100%;
  }
  .day-name {
    display: table-cell;
    font-weight: 700;
    color: #475569;
    font-size: 13px;
    width: 90px;
    vertical-align: top;
    padding-top: 1px;
  }
  .day-comment {
    display: table-cell;
    font-size: 13px;
    color: #374151;
  }

  /* ── CTA ── */
  .cta-section {
    text-align: center;
    margin: 10px 32px 30px;
  }
  .cta-btn {
    display: inline-block;
    background: linear-gradient(135deg, #00d4aa, #a855f7);
    color: #0f172a !important;
    text-decoration: none;
    font-weight: 800;
    font-size: 15px;
    padding: 14px 32px;
    border-radius: 12px;
  }

  /* ── Footer ── */
  .footer {
    background: #f8fafc;
    border-top: 1px solid #e2e8f0;
    padding: 20px 32px;
    text-align: center;
    font-size: 12px;
    color: #94a3b8;
  }
  .footer a { color: #64748b; }

  /* ── Score colors ── */
  .c-excellent { color: #00d4aa; border-color: #00d4aa; }
  .c-bon       { color: #60a5fa; border-color: #60a5fa; }
  .c-moyen     { color: #f59e0b; border-color: #f59e0b; }
  .c-faible    { color: #ef4444; border-color: #ef4444; }

  @media (max-width: 480px) {
    .stats-row { display: block; }
    .stat-cell { display: block; width: 100%; margin-bottom: 8px; }
    .wrapper { margin: 0; border-radius: 0; }
  }
</style>
</head>
<body>

<div class=\"wrapper\">

  {# ── HEADER ── #}
  <div class=\"header\">
    <div class=\"logo\">AIVA</div>
    <div class=\"subtitle\">Votre assistant nutrition intelligent</div>
    <div class=\"date\">Rapport du {{ \"now\"|date(\"d/m/Y\") }}</div>
  </div>

  {# ── GREETING ── #}
  <div class=\"greeting\">
    Bonjour <strong>{{ user.name ?? user.email }}</strong> 👋<br>
    Voici votre rapport nutritionnel hebdomadaire généré par l'IA AIVA.
  </div>

  {# ── SCORE ── #}
  {% set score = analyse.score_semaine ?? 0 %}
  {% if score >= 80 %}
    {% set scoreClass = 'c-excellent' %}{% set scoreLabel = 'Excellent' %}
  {% elseif score >= 60 %}
    {% set scoreClass = 'c-bon' %}{% set scoreLabel = 'Bon' %}
  {% elseif score >= 40 %}
    {% set scoreClass = 'c-moyen' %}{% set scoreLabel = 'Moyen' %}
  {% else %}
    {% set scoreClass = 'c-faible' %}{% set scoreLabel = 'Faible' %}
  {% endif %}

  <div class=\"score-section\">
    <div class=\"score-ring {{ scoreClass }}\">{{ score }}</div>
    <div class=\"score-label {{ scoreClass }}\">{{ scoreLabel }} — {{ score }}/100</div>
    <div class=\"score-resume\">{{ analyse.resume ?? '' }}</div>
  </div>

  {# ── STATS ── #}
  <div class=\"stats-row\">
    <div class=\"stat-cell\">
      <div class=\"stat-value\">{{ stats.totalRepas }}</div>
      <div class=\"stat-label\">Repas</div>
    </div>
    <div class=\"stat-cell\">
      <div class=\"stat-value\">{{ stats.totalJours }}</div>
      <div class=\"stat-label\">Jours</div>
    </div>
    <div class=\"stat-cell\">
      <div class=\"stat-value\" style=\"color:#f59e0b;\">{{ stats.moyenneCals }}</div>
      <div class=\"stat-label\">kcal/jour moy.</div>
    </div>
  </div>

  {# ── POINTS POSITIFS ── #}
  {% if analyse.points_positifs|default([])|length > 0 %}
  <div class=\"section\">
    <div class=\"section-title\">✅ Points positifs</div>
    {% for point in analyse.points_positifs %}
      <div class=\"item item-pos\">{{ point }}</div>
    {% endfor %}
  </div>
  {% endif %}

  {# ── À AMÉLIORER ── #}
  {% if analyse.points_amelioration|default([])|length > 0 %}
  <div class=\"section\">
    <div class=\"section-title\">⚠️ À améliorer</div>
    {% for point in analyse.points_amelioration %}
      <div class=\"item item-neg\">{{ point }}</div>
    {% endfor %}
  </div>
  {% endif %}

  {# ── ANALYSE PAR JOUR ── #}
  {% if analyse.analyse_par_jour|default([])|length > 0 %}
  <div class=\"section\">
    <div class=\"section-title\">📅 Analyse par jour</div>
    {% for jour in analyse.analyse_par_jour %}
      <div class=\"item-day\">
        <div class=\"day-name\">{{ jour.jour }}</div>
        <div class=\"day-comment\">{{ jour.commentaire }}</div>
      </div>
    {% endfor %}
  </div>
  {% endif %}

  {# ── CONSEILS ── #}
  {% if analyse.conseils|default([])|length > 0 %}
  <div class=\"section\">
    <div class=\"section-title\">💡 Conseils personnalisés</div>
    {% for conseil in analyse.conseils %}
      <div class=\"item item-tip\">{{ conseil }}</div>
    {% endfor %}
  </div>
  {% endif %}

  {# ── CTA ── #}
  <div class=\"cta-section\">
    <a href=\"{{ app.request.schemeAndHttpHost }}/nutrition/repas\" class=\"cta-btn\">
      🥗 Voir mes repas
    </a>
  </div>

  {# ── FOOTER ── #}
  <div class=\"footer\">
    Envoi automatique : <strong>Dimanche à 20h00</strong> ({{ 'EMAIL_DEMO' in constant('PHP_MAJOR_VERSION') ? 'démo' : 'actif' }})<br>
    <br>
    Vous recevez cet email car vous êtes inscrit sur AIVA.<br>
    <a href=\"{{ app.request.schemeAndHttpHost }}/nutrition/repas\">Accéder à AIVA</a>
    &nbsp;·&nbsp;
    © {{ \"now\"|date(\"Y\") }} AIVA Nutrition
  </div>

</div>
</body>
</html>
", "front/repas/weekly_report.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\front\\repas\\weekly_report.html.twig");
    }
}
