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

/* back/repas/pdf.html.twig */
class __TwigTemplate_f381904616db28d94bd4795be8481928 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/repas/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/repas/pdf.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
<meta charset=\"UTF-8\">
<style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
        font-family: 'DejaVu Sans', Arial, sans-serif;
        font-size: 11px;
        color: #1a202c;
        background: #fff;
    }

    /* ══════════════════════════════
       HEADER
    ══════════════════════════════ */
    .header {
        background: #0d1f12;
        padding: 22px 30px;
        margin-bottom: 22px;
        display: table;
        width: 100%;
    }
    .header-left  { display: table-cell; vertical-align: middle; width: 55%; }
    .header-right { display: table-cell; vertical-align: middle; text-align: right; }

    .logo { max-height: 50px; max-width: 130px; vertical-align: middle; }
    .app-name {
        color: #4ade80;
        font-size: 20px;
        font-weight: bold;
        letter-spacing: 3px;
        vertical-align: middle;
        margin-left: 10px;
    }
    .header-right h1 { color: #ffffff; font-size: 17px; font-weight: bold; letter-spacing: 1px; }
    .header-right p  { color: #a0aec0; font-size: 10px; margin-top: 3px; }
    .date-badge {
        display: inline-block;
        background: #1a2e1f;
        border: 1px solid #2d6a4f;
        border-radius: 20px;
        padding: 4px 13px;
        font-size: 10px;
        color: #4ade80;
        margin-top: 8px;
    }

    /* ══════════════════════════════
       CARTE PRINCIPALE DU REPAS
    ══════════════════════════════ */
    .repas-card {
        margin: 0 24px 18px;
        border: 1px solid #d1fae5;
        border-radius: 10px;
        overflow: hidden;
    }

    .repas-header {
        background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
        border-bottom: 2px solid #bbf7d0;
        padding: 16px 20px;
        display: table;
        width: 100%;
    }
    .repas-header-left  { display: table-cell; vertical-align: middle; }
    .repas-header-right { display: table-cell; vertical-align: middle; text-align: right; width: 130px; }

    .repas-nom {
        font-size: 18px;
        font-weight: bold;
        color: #14532d;
        margin-bottom: 8px;
    }

    .badge {
        display: inline-block;
        padding: 3px 12px;
        border-radius: 20px;
        font-size: 10px;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 0.6px;
        margin-right: 6px;
    }
    .badge-diner     { background: #ede9fe; color: #7c3aed; }
    .badge-dejeuner  { background: #dcfce7; color: #16a34a; }
    .badge-petit     { background: #fef9c3; color: #a16207; }
    .badge-collation { background: #dbeafe; color: #1d4ed8; }

    .meta-row { margin-top: 6px; }
    .meta-item {
        display: inline-block;
        margin-right: 16px;
        font-size: 10.5px;
        color: #4a5568;
    }

    .calories-box {
        background: #14532d;
        color: white;
        padding: 12px 16px;
        border-radius: 8px;
        text-align: center;
    }
    .cal-number { font-size: 22px; font-weight: bold; color: #4ade80; line-height: 1; }
    .cal-label  { font-size: 9px; color: #a7f3d0; margin-top: 3px; }

    /* ══════════════════════════════
       SECTION ALIMENTS
    ══════════════════════════════ */
    .section-label {
        padding: 9px 20px;
        font-size: 10px;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        color: #374151;
        background: #f9fafb;
        border-top: 1px solid #e5e7eb;
        border-bottom: 1px solid #e5e7eb;
    }

    .aliment-table { width: 100%; border-collapse: collapse; }

    .aliment-table thead tr { background: #f3f4f6; }
    .aliment-table thead th {
        padding: 8px 14px;
        text-align: left;
        font-size: 10px;
        text-transform: uppercase;
        letter-spacing: 0.4px;
        color: #6b7280;
        border-bottom: 1px solid #e5e7eb;
    }
    .aliment-table thead th:last-child { text-align: right; }

    .aliment-table tbody tr:nth-child(even) { background: #f9fafb; }
    .aliment-table tbody td {
        padding: 8px 14px;
        font-size: 11px;
        color: #1f2937;
        border-bottom: 1px solid #f3f4f6;
        vertical-align: middle;
    }
    .aliment-table tbody td:last-child {
        text-align: right;
        font-weight: bold;
        color: #059669;
    }
    .aliment-nom { font-weight: 600; color: #111827; }

    .macro-pills { margin-top: 3px; }
    .mpill {
        display: inline-block;
        padding: 1px 7px;
        border-radius: 10px;
        font-size: 9px;
        margin-right: 3px;
        font-weight: 600;
    }
    .mpill-p { background: #dbeafe; color: #1d4ed8; }
    .mpill-g { background: #fef9c3; color: #a16207; }
    .mpill-l { background: #fce7f3; color: #be185d; }

    /* ══════════════════════════════
       TOTAL MACROS
    ══════════════════════════════ */
    .aliment-table tfoot td {
        padding: 9px 14px;
        background: #ecfdf5;
        border-top: 2px solid #6ee7b7;
        font-weight: bold;
        font-size: 11px;
    }
    .aliment-table tfoot td:last-child { text-align: right; color: #065f46; }

    .no-aliment {
        padding: 20px;
        text-align: center;
        color: #9ca3af;
        font-style: italic;
        font-size: 11px;
    }

    /* ══════════════════════════════
       SECTION MACROS GLOBAUX
    ══════════════════════════════ */
    .macros-section {
        margin: 0 24px 18px;
        border: 1px solid #e5e7eb;
        border-radius: 10px;
        overflow: hidden;
    }
    .macros-header {
        background: #1e293b;
        color: #f1f5f9;
        padding: 10px 18px;
        font-size: 11px;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 0.8px;
    }
    .macros-body {
        padding: 14px 18px;
        display: table;
        width: 100%;
    }
    .macro-col { display: table-cell; text-align: center; width: 25%; }
    .macro-col-label { font-size: 10px; color: #6b7280; text-transform: uppercase; letter-spacing: 0.5px; }
    .macro-col-value { font-size: 18px; font-weight: bold; margin-top: 3px; }
    .macro-col-unit  { font-size: 9px; color: #9ca3af; }
    .mc-prot { color: #1d4ed8; }
    .mc-gluc { color: #a16207; }
    .mc-lip  { color: #be185d; }
    .mc-kcal { color: #059669; }

    /* ══════════════════════════════
       SCORE NUTRITIONNEL
    ══════════════════════════════ */
    .score-section {
        margin: 0 24px 24px;
        padding: 12px 18px;
        background: #f0fdf4;
        border: 1px solid #bbf7d0;
        border-radius: 8px;
        display: table;
        width: calc(100% - 48px);
    }
    .score-left  { display: table-cell; vertical-align: middle; font-size: 11px; color: #374151; }
    .score-right { display: table-cell; vertical-align: middle; text-align: right; }
    .score-value {
        display: inline-block;
        padding: 4px 16px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: bold;
    }

    /* ══════════════════════════════
       DESCRIPTION
    ══════════════════════════════ */
    .desc-section {
        margin: 0 24px 18px;
        padding: 12px 18px;
        background: #f8fafc;
        border-left: 4px solid #4ade80;
        border-radius: 0 8px 8px 0;
        font-size: 11px;
        color: #4a5568;
        line-height: 1.6;
    }
    .desc-title { font-weight: bold; color: #1a202c; margin-bottom: 4px; font-size: 11px; }

    /* ══════════════════════════════
       FOOTER
    ══════════════════════════════ */
    .footer {
        position: fixed;
        bottom: 0; left: 0; right: 0;
        background: #f8fafc;
        border-top: 2px solid #bbf7d0;
        padding: 7px 30px;
        display: table;
        width: 100%;
        font-size: 9px;
        color: #9ca3af;
    }
    .footer-left  { display: table-cell; }
    .footer-right { display: table-cell; text-align: right; }
</style>
</head>
<body>

";
        // line 278
        yield "<div class=\"header\">
    <div class=\"header-left\">
        ";
        // line 280
        if ((($tmp = (isset($context["logoBase64"]) || array_key_exists("logoBase64", $context) ? $context["logoBase64"] : (function () { throw new RuntimeError('Variable "logoBase64" does not exist.', 280, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 281
            yield "<span style=\"color:#4ade80;font-size:24px;font-weight:bold;letter-spacing:3px;\">AIVA</span>
        ";
        }
        // line 283
        yield "        <span class=\"app-name\">AIVA</span>
    </div>
    <div class=\"header-right\">
        <h1>Fiche Repas</h1>
        <p>Rapport nutritionnel détaillé</p>
        <div class=\"date-badge\">Généré le ";
        // line 288
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["generatedAt"]) || array_key_exists("generatedAt", $context) ? $context["generatedAt"] : (function () { throw new RuntimeError('Variable "generatedAt" does not exist.', 288, $this->source); })()), "d/m/Y à H:i"), "html", null, true);
        yield "</div>
    </div>
</div>

";
        // line 295
        yield "<div class=\"repas-card\">
    <div class=\"repas-header\">
        <div class=\"repas-header-left\">

            <div class=\"repas-nom\">";
        // line 299
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 299, $this->source); })()), "nom", [], "any", false, false, false, 299), "html", null, true);
        yield "</div>

            ";
        // line 302
        yield "            ";
        $context["typeClass"] = "badge-collation";
        // line 303
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 303, $this->source); })()), "type", [], "any", false, false, false, 303) == "petit-dejeuner")) {
            $context["typeClass"] = "badge-petit";
            // line 304
            yield "            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 304, $this->source); })()), "type", [], "any", false, false, false, 304) == "dejeuner")) {
            $context["typeClass"] = "badge-dejeuner";
            // line 305
            yield "            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 305, $this->source); })()), "type", [], "any", false, false, false, 305) == "diner")) {
            $context["typeClass"] = "badge-diner";
            // line 306
            yield "            ";
        }
        // line 307
        yield "            <span class=\"badge ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["typeClass"]) || array_key_exists("typeClass", $context) ? $context["typeClass"] : (function () { throw new RuntimeError('Variable "typeClass" does not exist.', 307, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 307, $this->source); })()), "type", [], "any", false, false, false, 307), ["-" => " "])), "html", null, true);
        yield "</span>

            <div class=\"meta-row\">
                ";
        // line 310
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 310, $this->source); })()), "date", [], "any", false, false, false, 310)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 311
            yield "                    <span class=\"meta-item\">Date : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 311, $this->source); })()), "date", [], "any", false, false, false, 311), "d/m/Y"), "html", null, true);
            yield "</span>
                ";
        }
        // line 313
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 313, $this->source); })()), "heure", [], "any", false, false, false, 313)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 314
            yield "                    <span class=\"meta-item\">Heure : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 314, $this->source); })()), "heure", [], "any", false, false, false, 314), "H:i"), "html", null, true);
            yield "</span>
                ";
        }
        // line 316
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 316, $this->source); })()), "user", [], "any", false, false, false, 316)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 317
            yield "                    <span class=\"meta-item\">Utilisateur : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 317, $this->source); })()), "user", [], "any", false, false, false, 317), "email", [], "any", false, false, false, 317), "html", null, true);
            yield "</span>
                ";
        }
        // line 319
        yield "            </div>
        </div>

        <div class=\"repas-header-right\">
            <div class=\"calories-box\">
                <div class=\"cal-number\">";
        // line 324
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["repas"] ?? null), "calories", [], "any", true, true, false, 324) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 324, $this->source); })()), "calories", [], "any", false, false, false, 324)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 324, $this->source); })()), "calories", [], "any", false, false, false, 324), "html", null, true)) : ("—"));
        yield "</div>
                <div class=\"cal-label\">kcal déclarées</div>
            </div>
        </div>
    </div>

    ";
        // line 331
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 331, $this->source); })()), "description", [], "any", false, false, false, 331)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 332
            yield "        <div style=\"padding: 10px 20px 0; background:#fff;\">
            <div class=\"desc-title\">Description</div>
            <div style=\"font-size:11px;color:#4a5568;line-height:1.5;padding-bottom:10px;\">";
            // line 334
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 334, $this->source); })()), "description", [], "any", false, false, false, 334), "html", null, true);
            yield "</div>
        </div>
    ";
        }
        // line 337
        yield "
    ";
        // line 341
        yield "    <div class=\"section-label\">Composition — Aliments (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["alimentsData"]) || array_key_exists("alimentsData", $context) ? $context["alimentsData"] : (function () { throw new RuntimeError('Variable "alimentsData" does not exist.', 341, $this->source); })())), "html", null, true);
        yield ")</div>

    ";
        // line 343
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["alimentsData"]) || array_key_exists("alimentsData", $context) ? $context["alimentsData"] : (function () { throw new RuntimeError('Variable "alimentsData" does not exist.', 343, $this->source); })())) > 0)) {
            // line 344
            yield "
        ";
            // line 346
            yield "        ";
            $context["totalProt"] = 0;
            // line 347
            yield "        ";
            $context["totalGluc"] = 0;
            // line 348
            yield "        ";
            $context["totalLip"] = 0;
            // line 349
            yield "        ";
            $context["totalKcal"] = 0;
            // line 350
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["alimentsData"]) || array_key_exists("alimentsData", $context) ? $context["alimentsData"] : (function () { throw new RuntimeError('Variable "alimentsData" does not exist.', 350, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 351
                yield "            ";
                $context["totalProt"] = ((isset($context["totalProt"]) || array_key_exists("totalProt", $context) ? $context["totalProt"] : (function () { throw new RuntimeError('Variable "totalProt" does not exist.', 351, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["a"], "proteine", [], "any", false, false, false, 351));
                // line 352
                yield "            ";
                $context["totalGluc"] = ((isset($context["totalGluc"]) || array_key_exists("totalGluc", $context) ? $context["totalGluc"] : (function () { throw new RuntimeError('Variable "totalGluc" does not exist.', 352, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["a"], "glucide", [], "any", false, false, false, 352));
                // line 353
                yield "            ";
                $context["totalLip"] = ((isset($context["totalLip"]) || array_key_exists("totalLip", $context) ? $context["totalLip"] : (function () { throw new RuntimeError('Variable "totalLip" does not exist.', 353, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["a"], "lipide", [], "any", false, false, false, 353));
                // line 354
                yield "            ";
                $context["totalKcal"] = ((isset($context["totalKcal"]) || array_key_exists("totalKcal", $context) ? $context["totalKcal"] : (function () { throw new RuntimeError('Variable "totalKcal" does not exist.', 354, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calories", [], "any", false, false, false, 354));
                // line 355
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 356
            yield "
        <table class=\"aliment-table\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Aliment</th>
                    <th>Quantité (g)</th>
                    <th>Macronutriments</th>
                    <th>Calories estimées</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 368
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["alimentsData"]) || array_key_exists("alimentsData", $context) ? $context["alimentsData"] : (function () { throw new RuntimeError('Variable "alimentsData" does not exist.', 368, $this->source); })()));
            foreach ($context['_seq'] as $context["i"] => $context["a"]) {
                // line 369
                yield "                <tr>
                    <td style=\"color:#9ca3af;font-size:10px;\">";
                // line 370
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["i"] + 1), "html", null, true);
                yield "</td>

                    <td class=\"aliment-nom\">";
                // line 372
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "nom", [], "any", false, false, false, 372), "html", null, true);
                yield "</td>

                    <td style=\"font-weight:600;\">
                        ";
                // line 375
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "quantite", [], "any", false, false, false, 375), 0), "html", null, true);
                yield " g
                    </td>

                    <td>
                        <div class=\"macro-pills\">
                            <span class=\"mpill mpill-p\">P ";
                // line 380
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "proteine", [], "any", false, false, false, 380), 1), "html", null, true);
                yield "g</span>
                            <span class=\"mpill mpill-g\">G ";
                // line 381
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "glucide", [], "any", false, false, false, 381), 1), "html", null, true);
                yield "g</span>
                            <span class=\"mpill mpill-l\">L ";
                // line 382
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "lipide", [], "any", false, false, false, 382), 1), "html", null, true);
                yield "g</span>
                        </div>
                    </td>

                    <td>";
                // line 386
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calories", [], "any", false, false, false, 386), "html", null, true);
                yield " kcal</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['i'], $context['a'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 389
            yield "            </tbody>
            <tfoot>
                <tr>
                    <td colspan=\"2\" style=\"font-weight:bold;color:#065f46;\">TOTAL</td>
                    <td></td>
                    <td>
                        <span class=\"mpill mpill-p\">P ";
            // line 395
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalProt"]) || array_key_exists("totalProt", $context) ? $context["totalProt"] : (function () { throw new RuntimeError('Variable "totalProt" does not exist.', 395, $this->source); })()), 1), "html", null, true);
            yield "g</span>
                        <span class=\"mpill mpill-g\">G ";
            // line 396
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalGluc"]) || array_key_exists("totalGluc", $context) ? $context["totalGluc"] : (function () { throw new RuntimeError('Variable "totalGluc" does not exist.', 396, $this->source); })()), 1), "html", null, true);
            yield "g</span>
                        <span class=\"mpill mpill-l\">L ";
            // line 397
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalLip"]) || array_key_exists("totalLip", $context) ? $context["totalLip"] : (function () { throw new RuntimeError('Variable "totalLip" does not exist.', 397, $this->source); })()), 1), "html", null, true);
            yield "g</span>
                    </td>
                    <td>";
            // line 399
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalKcal"]) || array_key_exists("totalKcal", $context) ? $context["totalKcal"] : (function () { throw new RuntimeError('Variable "totalKcal" does not exist.', 399, $this->source); })()), "html", null, true);
            yield " kcal</td>
                </tr>
            </tfoot>
        </table>

    ";
        } else {
            // line 405
            yield "        <div class=\"no-aliment\">Aucun aliment enregistré pour ce repas.</div>
    ";
        }
        // line 407
        yield "</div>

";
        // line 412
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["alimentsData"]) || array_key_exists("alimentsData", $context) ? $context["alimentsData"] : (function () { throw new RuntimeError('Variable "alimentsData" does not exist.', 412, $this->source); })())) > 0)) {
            // line 413
            yield "<div class=\"macros-section\">
    <div class=\"macros-header\">Résumé macronutriments</div>
    <div class=\"macros-body\">

        ";
            // line 417
            $context["totalProt2"] = 0;
            // line 418
            yield "        ";
            $context["totalGluc2"] = 0;
            // line 419
            yield "        ";
            $context["totalLip2"] = 0;
            // line 420
            yield "        ";
            $context["totalKcal2"] = 0;
            // line 421
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["alimentsData"]) || array_key_exists("alimentsData", $context) ? $context["alimentsData"] : (function () { throw new RuntimeError('Variable "alimentsData" does not exist.', 421, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 422
                yield "            ";
                $context["totalProt2"] = ((isset($context["totalProt2"]) || array_key_exists("totalProt2", $context) ? $context["totalProt2"] : (function () { throw new RuntimeError('Variable "totalProt2" does not exist.', 422, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["a"], "proteine", [], "any", false, false, false, 422));
                // line 423
                yield "            ";
                $context["totalGluc2"] = ((isset($context["totalGluc2"]) || array_key_exists("totalGluc2", $context) ? $context["totalGluc2"] : (function () { throw new RuntimeError('Variable "totalGluc2" does not exist.', 423, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["a"], "glucide", [], "any", false, false, false, 423));
                // line 424
                yield "            ";
                $context["totalLip2"] = ((isset($context["totalLip2"]) || array_key_exists("totalLip2", $context) ? $context["totalLip2"] : (function () { throw new RuntimeError('Variable "totalLip2" does not exist.', 424, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["a"], "lipide", [], "any", false, false, false, 424));
                // line 425
                yield "            ";
                $context["totalKcal2"] = ((isset($context["totalKcal2"]) || array_key_exists("totalKcal2", $context) ? $context["totalKcal2"] : (function () { throw new RuntimeError('Variable "totalKcal2" does not exist.', 425, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calories", [], "any", false, false, false, 425));
                // line 426
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 427
            yield "
        <div class=\"macro-col\">
            <div class=\"macro-col-label\">Protéines</div>
            <div class=\"macro-col-value mc-prot\">";
            // line 430
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalProt2"]) || array_key_exists("totalProt2", $context) ? $context["totalProt2"] : (function () { throw new RuntimeError('Variable "totalProt2" does not exist.', 430, $this->source); })()), 1), "html", null, true);
            yield "</div>
            <div class=\"macro-col-unit\">grammes</div>
        </div>
        <div class=\"macro-col\">
            <div class=\"macro-col-label\">Glucides</div>
            <div class=\"macro-col-value mc-gluc\">";
            // line 435
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalGluc2"]) || array_key_exists("totalGluc2", $context) ? $context["totalGluc2"] : (function () { throw new RuntimeError('Variable "totalGluc2" does not exist.', 435, $this->source); })()), 1), "html", null, true);
            yield "</div>
            <div class=\"macro-col-unit\">grammes</div>
        </div>
        <div class=\"macro-col\">
            <div class=\"macro-col-label\">Lipides</div>
            <div class=\"macro-col-value mc-lip\">";
            // line 440
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalLip2"]) || array_key_exists("totalLip2", $context) ? $context["totalLip2"] : (function () { throw new RuntimeError('Variable "totalLip2" does not exist.', 440, $this->source); })()), 1), "html", null, true);
            yield "</div>
            <div class=\"macro-col-unit\">grammes</div>
        </div>
        <div class=\"macro-col\">
            <div class=\"macro-col-label\">Calories</div>
            <div class=\"macro-col-value mc-kcal\">";
            // line 445
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalKcal2"]) || array_key_exists("totalKcal2", $context) ? $context["totalKcal2"] : (function () { throw new RuntimeError('Variable "totalKcal2" does not exist.', 445, $this->source); })()), "html", null, true);
            yield "</div>
            <div class=\"macro-col-unit\">kcal estimées</div>
        </div>

    </div>
</div>
";
        }
        // line 452
        yield "
";
        // line 456
        yield "<div class=\"score-section\">
    <div class=\"score-left\">
        Score nutritionnel AIVA :
        <span style=\"font-size:10px;color:#6b7280;margin-left:6px;\">
            (variété, équilibre des macros, niveau calorique)
        </span>
    </div>
    <div class=\"score-right\">
        <span class=\"score-value\"
              style=\"background:";
        // line 465
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 465, $this->source); })()), "scoreColor", [], "any", false, false, false, 465), "html", null, true);
        yield "22;color:";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 465, $this->source); })()), "scoreColor", [], "any", false, false, false, 465), "html", null, true);
        yield ";\">
            ";
        // line 466
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 466, $this->source); })()), "scoreLabel", [], "any", false, false, false, 466), "html", null, true);
        yield " — ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 466, $this->source); })()), "nutritionalScore", [], "any", false, false, false, 466), "html", null, true);
        yield "/100
        </span>
    </div>
</div>

";
        // line 474
        yield "<div class=\"footer\">
    <div class=\"footer-left\">AIVA — Rapport confidentiel · Repas : ";
        // line 475
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["repas"]) || array_key_exists("repas", $context) ? $context["repas"] : (function () { throw new RuntimeError('Variable "repas" does not exist.', 475, $this->source); })()), "nom", [], "any", false, false, false, 475), "html", null, true);
        yield "</div>
    <div class=\"footer-right\">Généré le ";
        // line 476
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["generatedAt"]) || array_key_exists("generatedAt", $context) ? $context["generatedAt"] : (function () { throw new RuntimeError('Variable "generatedAt" does not exist.', 476, $this->source); })()), "d/m/Y à H:i"), "html", null, true);
        yield "</div>
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
        return "back/repas/pdf.html.twig";
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
        return array (  710 => 476,  706 => 475,  703 => 474,  693 => 466,  687 => 465,  676 => 456,  673 => 452,  663 => 445,  655 => 440,  647 => 435,  639 => 430,  634 => 427,  628 => 426,  625 => 425,  622 => 424,  619 => 423,  616 => 422,  611 => 421,  608 => 420,  605 => 419,  602 => 418,  600 => 417,  594 => 413,  592 => 412,  588 => 407,  584 => 405,  575 => 399,  570 => 397,  566 => 396,  562 => 395,  554 => 389,  545 => 386,  538 => 382,  534 => 381,  530 => 380,  522 => 375,  516 => 372,  511 => 370,  508 => 369,  504 => 368,  490 => 356,  484 => 355,  481 => 354,  478 => 353,  475 => 352,  472 => 351,  467 => 350,  464 => 349,  461 => 348,  458 => 347,  455 => 346,  452 => 344,  450 => 343,  444 => 341,  441 => 337,  435 => 334,  431 => 332,  428 => 331,  419 => 324,  412 => 319,  406 => 317,  403 => 316,  397 => 314,  394 => 313,  388 => 311,  386 => 310,  377 => 307,  374 => 306,  370 => 305,  366 => 304,  362 => 303,  359 => 302,  354 => 299,  348 => 295,  341 => 288,  334 => 283,  330 => 281,  328 => 280,  324 => 278,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
<meta charset=\"UTF-8\">
<style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
        font-family: 'DejaVu Sans', Arial, sans-serif;
        font-size: 11px;
        color: #1a202c;
        background: #fff;
    }

    /* ══════════════════════════════
       HEADER
    ══════════════════════════════ */
    .header {
        background: #0d1f12;
        padding: 22px 30px;
        margin-bottom: 22px;
        display: table;
        width: 100%;
    }
    .header-left  { display: table-cell; vertical-align: middle; width: 55%; }
    .header-right { display: table-cell; vertical-align: middle; text-align: right; }

    .logo { max-height: 50px; max-width: 130px; vertical-align: middle; }
    .app-name {
        color: #4ade80;
        font-size: 20px;
        font-weight: bold;
        letter-spacing: 3px;
        vertical-align: middle;
        margin-left: 10px;
    }
    .header-right h1 { color: #ffffff; font-size: 17px; font-weight: bold; letter-spacing: 1px; }
    .header-right p  { color: #a0aec0; font-size: 10px; margin-top: 3px; }
    .date-badge {
        display: inline-block;
        background: #1a2e1f;
        border: 1px solid #2d6a4f;
        border-radius: 20px;
        padding: 4px 13px;
        font-size: 10px;
        color: #4ade80;
        margin-top: 8px;
    }

    /* ══════════════════════════════
       CARTE PRINCIPALE DU REPAS
    ══════════════════════════════ */
    .repas-card {
        margin: 0 24px 18px;
        border: 1px solid #d1fae5;
        border-radius: 10px;
        overflow: hidden;
    }

    .repas-header {
        background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
        border-bottom: 2px solid #bbf7d0;
        padding: 16px 20px;
        display: table;
        width: 100%;
    }
    .repas-header-left  { display: table-cell; vertical-align: middle; }
    .repas-header-right { display: table-cell; vertical-align: middle; text-align: right; width: 130px; }

    .repas-nom {
        font-size: 18px;
        font-weight: bold;
        color: #14532d;
        margin-bottom: 8px;
    }

    .badge {
        display: inline-block;
        padding: 3px 12px;
        border-radius: 20px;
        font-size: 10px;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 0.6px;
        margin-right: 6px;
    }
    .badge-diner     { background: #ede9fe; color: #7c3aed; }
    .badge-dejeuner  { background: #dcfce7; color: #16a34a; }
    .badge-petit     { background: #fef9c3; color: #a16207; }
    .badge-collation { background: #dbeafe; color: #1d4ed8; }

    .meta-row { margin-top: 6px; }
    .meta-item {
        display: inline-block;
        margin-right: 16px;
        font-size: 10.5px;
        color: #4a5568;
    }

    .calories-box {
        background: #14532d;
        color: white;
        padding: 12px 16px;
        border-radius: 8px;
        text-align: center;
    }
    .cal-number { font-size: 22px; font-weight: bold; color: #4ade80; line-height: 1; }
    .cal-label  { font-size: 9px; color: #a7f3d0; margin-top: 3px; }

    /* ══════════════════════════════
       SECTION ALIMENTS
    ══════════════════════════════ */
    .section-label {
        padding: 9px 20px;
        font-size: 10px;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        color: #374151;
        background: #f9fafb;
        border-top: 1px solid #e5e7eb;
        border-bottom: 1px solid #e5e7eb;
    }

    .aliment-table { width: 100%; border-collapse: collapse; }

    .aliment-table thead tr { background: #f3f4f6; }
    .aliment-table thead th {
        padding: 8px 14px;
        text-align: left;
        font-size: 10px;
        text-transform: uppercase;
        letter-spacing: 0.4px;
        color: #6b7280;
        border-bottom: 1px solid #e5e7eb;
    }
    .aliment-table thead th:last-child { text-align: right; }

    .aliment-table tbody tr:nth-child(even) { background: #f9fafb; }
    .aliment-table tbody td {
        padding: 8px 14px;
        font-size: 11px;
        color: #1f2937;
        border-bottom: 1px solid #f3f4f6;
        vertical-align: middle;
    }
    .aliment-table tbody td:last-child {
        text-align: right;
        font-weight: bold;
        color: #059669;
    }
    .aliment-nom { font-weight: 600; color: #111827; }

    .macro-pills { margin-top: 3px; }
    .mpill {
        display: inline-block;
        padding: 1px 7px;
        border-radius: 10px;
        font-size: 9px;
        margin-right: 3px;
        font-weight: 600;
    }
    .mpill-p { background: #dbeafe; color: #1d4ed8; }
    .mpill-g { background: #fef9c3; color: #a16207; }
    .mpill-l { background: #fce7f3; color: #be185d; }

    /* ══════════════════════════════
       TOTAL MACROS
    ══════════════════════════════ */
    .aliment-table tfoot td {
        padding: 9px 14px;
        background: #ecfdf5;
        border-top: 2px solid #6ee7b7;
        font-weight: bold;
        font-size: 11px;
    }
    .aliment-table tfoot td:last-child { text-align: right; color: #065f46; }

    .no-aliment {
        padding: 20px;
        text-align: center;
        color: #9ca3af;
        font-style: italic;
        font-size: 11px;
    }

    /* ══════════════════════════════
       SECTION MACROS GLOBAUX
    ══════════════════════════════ */
    .macros-section {
        margin: 0 24px 18px;
        border: 1px solid #e5e7eb;
        border-radius: 10px;
        overflow: hidden;
    }
    .macros-header {
        background: #1e293b;
        color: #f1f5f9;
        padding: 10px 18px;
        font-size: 11px;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 0.8px;
    }
    .macros-body {
        padding: 14px 18px;
        display: table;
        width: 100%;
    }
    .macro-col { display: table-cell; text-align: center; width: 25%; }
    .macro-col-label { font-size: 10px; color: #6b7280; text-transform: uppercase; letter-spacing: 0.5px; }
    .macro-col-value { font-size: 18px; font-weight: bold; margin-top: 3px; }
    .macro-col-unit  { font-size: 9px; color: #9ca3af; }
    .mc-prot { color: #1d4ed8; }
    .mc-gluc { color: #a16207; }
    .mc-lip  { color: #be185d; }
    .mc-kcal { color: #059669; }

    /* ══════════════════════════════
       SCORE NUTRITIONNEL
    ══════════════════════════════ */
    .score-section {
        margin: 0 24px 24px;
        padding: 12px 18px;
        background: #f0fdf4;
        border: 1px solid #bbf7d0;
        border-radius: 8px;
        display: table;
        width: calc(100% - 48px);
    }
    .score-left  { display: table-cell; vertical-align: middle; font-size: 11px; color: #374151; }
    .score-right { display: table-cell; vertical-align: middle; text-align: right; }
    .score-value {
        display: inline-block;
        padding: 4px 16px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: bold;
    }

    /* ══════════════════════════════
       DESCRIPTION
    ══════════════════════════════ */
    .desc-section {
        margin: 0 24px 18px;
        padding: 12px 18px;
        background: #f8fafc;
        border-left: 4px solid #4ade80;
        border-radius: 0 8px 8px 0;
        font-size: 11px;
        color: #4a5568;
        line-height: 1.6;
    }
    .desc-title { font-weight: bold; color: #1a202c; margin-bottom: 4px; font-size: 11px; }

    /* ══════════════════════════════
       FOOTER
    ══════════════════════════════ */
    .footer {
        position: fixed;
        bottom: 0; left: 0; right: 0;
        background: #f8fafc;
        border-top: 2px solid #bbf7d0;
        padding: 7px 30px;
        display: table;
        width: 100%;
        font-size: 9px;
        color: #9ca3af;
    }
    .footer-left  { display: table-cell; }
    .footer-right { display: table-cell; text-align: right; }
</style>
</head>
<body>

{# ════════════════════════════════════════
   HEADER
════════════════════════════════════════ #}
<div class=\"header\">
    <div class=\"header-left\">
        {% if logoBase64 %}
<span style=\"color:#4ade80;font-size:24px;font-weight:bold;letter-spacing:3px;\">AIVA</span>
        {% endif %}
        <span class=\"app-name\">AIVA</span>
    </div>
    <div class=\"header-right\">
        <h1>Fiche Repas</h1>
        <p>Rapport nutritionnel détaillé</p>
        <div class=\"date-badge\">Généré le {{ generatedAt|date('d/m/Y à H:i') }}</div>
    </div>
</div>

{# ════════════════════════════════════════
   CARTE REPAS — infos principales
════════════════════════════════════════ #}
<div class=\"repas-card\">
    <div class=\"repas-header\">
        <div class=\"repas-header-left\">

            <div class=\"repas-nom\">{{ repas.nom }}</div>

            {# Badge type #}
            {% set typeClass = 'badge-collation' %}
            {% if repas.type == 'petit-dejeuner' %}{% set typeClass = 'badge-petit' %}
            {% elseif repas.type == 'dejeuner' %}{% set typeClass = 'badge-dejeuner' %}
            {% elseif repas.type == 'diner' %}{% set typeClass = 'badge-diner' %}
            {% endif %}
            <span class=\"badge {{ typeClass }}\">{{ repas.type|replace({'-': ' '})|title }}</span>

            <div class=\"meta-row\">
                {% if repas.date %}
                    <span class=\"meta-item\">Date : {{ repas.date|date('d/m/Y') }}</span>
                {% endif %}
                {% if repas.heure %}
                    <span class=\"meta-item\">Heure : {{ repas.heure|date('H:i') }}</span>
                {% endif %}
                {% if repas.user %}
                    <span class=\"meta-item\">Utilisateur : {{ repas.user.email }}</span>
                {% endif %}
            </div>
        </div>

        <div class=\"repas-header-right\">
            <div class=\"calories-box\">
                <div class=\"cal-number\">{{ repas.calories ?? '—' }}</div>
                <div class=\"cal-label\">kcal déclarées</div>
            </div>
        </div>
    </div>

    {# ── Description si existante ── #}
    {% if repas.description %}
        <div style=\"padding: 10px 20px 0; background:#fff;\">
            <div class=\"desc-title\">Description</div>
            <div style=\"font-size:11px;color:#4a5568;line-height:1.5;padding-bottom:10px;\">{{ repas.description }}</div>
        </div>
    {% endif %}

    {# ════════════════════════════════
       TABLEAU DES ALIMENTS
    ════════════════════════════════ #}
    <div class=\"section-label\">Composition — Aliments ({{ alimentsData|length }})</div>

    {% if alimentsData|length > 0 %}

        {# Calcul des totaux #}
        {% set totalProt = 0 %}
        {% set totalGluc = 0 %}
        {% set totalLip  = 0 %}
        {% set totalKcal = 0 %}
        {% for a in alimentsData %}
            {% set totalProt = totalProt + a.proteine %}
            {% set totalGluc = totalGluc + a.glucide %}
            {% set totalLip  = totalLip  + a.lipide %}
            {% set totalKcal = totalKcal + a.calories %}
        {% endfor %}

        <table class=\"aliment-table\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Aliment</th>
                    <th>Quantité (g)</th>
                    <th>Macronutriments</th>
                    <th>Calories estimées</th>
                </tr>
            </thead>
            <tbody>
                {% for i, a in alimentsData %}
                <tr>
                    <td style=\"color:#9ca3af;font-size:10px;\">{{ i + 1 }}</td>

                    <td class=\"aliment-nom\">{{ a.nom }}</td>

                    <td style=\"font-weight:600;\">
                        {{ a.quantite|number_format(0) }} g
                    </td>

                    <td>
                        <div class=\"macro-pills\">
                            <span class=\"mpill mpill-p\">P {{ a.proteine|number_format(1) }}g</span>
                            <span class=\"mpill mpill-g\">G {{ a.glucide|number_format(1) }}g</span>
                            <span class=\"mpill mpill-l\">L {{ a.lipide|number_format(1) }}g</span>
                        </div>
                    </td>

                    <td>{{ a.calories }} kcal</td>
                </tr>
                {% endfor %}
            </tbody>
            <tfoot>
                <tr>
                    <td colspan=\"2\" style=\"font-weight:bold;color:#065f46;\">TOTAL</td>
                    <td></td>
                    <td>
                        <span class=\"mpill mpill-p\">P {{ totalProt|number_format(1) }}g</span>
                        <span class=\"mpill mpill-g\">G {{ totalGluc|number_format(1) }}g</span>
                        <span class=\"mpill mpill-l\">L {{ totalLip|number_format(1) }}g</span>
                    </td>
                    <td>{{ totalKcal }} kcal</td>
                </tr>
            </tfoot>
        </table>

    {% else %}
        <div class=\"no-aliment\">Aucun aliment enregistré pour ce repas.</div>
    {% endif %}
</div>

{# ════════════════════════════════════════
   RÉSUMÉ MACROS (bloc visuel)
════════════════════════════════════════ #}
{% if alimentsData|length > 0 %}
<div class=\"macros-section\">
    <div class=\"macros-header\">Résumé macronutriments</div>
    <div class=\"macros-body\">

        {% set totalProt2 = 0 %}
        {% set totalGluc2 = 0 %}
        {% set totalLip2  = 0 %}
        {% set totalKcal2 = 0 %}
        {% for a in alimentsData %}
            {% set totalProt2 = totalProt2 + a.proteine %}
            {% set totalGluc2 = totalGluc2 + a.glucide %}
            {% set totalLip2  = totalLip2  + a.lipide %}
            {% set totalKcal2 = totalKcal2 + a.calories %}
        {% endfor %}

        <div class=\"macro-col\">
            <div class=\"macro-col-label\">Protéines</div>
            <div class=\"macro-col-value mc-prot\">{{ totalProt2|number_format(1) }}</div>
            <div class=\"macro-col-unit\">grammes</div>
        </div>
        <div class=\"macro-col\">
            <div class=\"macro-col-label\">Glucides</div>
            <div class=\"macro-col-value mc-gluc\">{{ totalGluc2|number_format(1) }}</div>
            <div class=\"macro-col-unit\">grammes</div>
        </div>
        <div class=\"macro-col\">
            <div class=\"macro-col-label\">Lipides</div>
            <div class=\"macro-col-value mc-lip\">{{ totalLip2|number_format(1) }}</div>
            <div class=\"macro-col-unit\">grammes</div>
        </div>
        <div class=\"macro-col\">
            <div class=\"macro-col-label\">Calories</div>
            <div class=\"macro-col-value mc-kcal\">{{ totalKcal2 }}</div>
            <div class=\"macro-col-unit\">kcal estimées</div>
        </div>

    </div>
</div>
{% endif %}

{# ════════════════════════════════════════
   SCORE NUTRITIONNEL
════════════════════════════════════════ #}
<div class=\"score-section\">
    <div class=\"score-left\">
        Score nutritionnel AIVA :
        <span style=\"font-size:10px;color:#6b7280;margin-left:6px;\">
            (variété, équilibre des macros, niveau calorique)
        </span>
    </div>
    <div class=\"score-right\">
        <span class=\"score-value\"
              style=\"background:{{ repas.scoreColor }}22;color:{{ repas.scoreColor }};\">
            {{ repas.scoreLabel }} — {{ repas.nutritionalScore }}/100
        </span>
    </div>
</div>

{# ════════════════════════════════════════
   FOOTER
════════════════════════════════════════ #}
<div class=\"footer\">
    <div class=\"footer-left\">AIVA — Rapport confidentiel · Repas : {{ repas.nom }}</div>
    <div class=\"footer-right\">Généré le {{ generatedAt|date('d/m/Y à H:i') }}</div>
</div>

</body>
</html>
", "back/repas/pdf.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\back\\repas\\pdf.html.twig");
    }
}
