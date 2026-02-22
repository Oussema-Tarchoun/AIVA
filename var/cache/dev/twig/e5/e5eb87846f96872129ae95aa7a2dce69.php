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

/* profile/index.html.twig */
class __TwigTemplate_18ea73758d7d913a229ed8edbe081580 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Profile - AIVA</title>

  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/stylefront.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">

  <!-- ✅ INTERNAL CSS (profile.css integrated here) -->
  <style>
    :root{
      --glass: rgba(255,255,255,.06);
      --glass2: rgba(255,255,255,.10);
      --border: rgba(255,255,255,.14);
      --text: rgba(255,255,255,.92);
      --muted: rgba(255,255,255,.70);
      --muted2: rgba(255,255,255,.55);
      --shadow: 0 18px 60px rgba(0,0,0,.45);
      --radius: 18px;
    }

    .profile-main{
      width: min(1100px, 100%);
      margin: 0 auto;
      padding: 26px 0 60px;
    }

    /* ======== TOP NAV USER MENU ======== */
    .user-menu{
      position: relative;
      display:flex;
      align-items:center;
    }

    .user-button{
      display:flex;
      align-items:center;
      gap:10px;
      padding: 8px 10px;
      border-radius: 14px;
      border: 1px solid rgba(255,255,255,.14);
      background: rgba(255,255,255,.06);
      color: var(--text);
      cursor:pointer;
      transition: .2s ease;
    }
    .user-button:hover{
      background: rgba(255,255,255,.10);
      transform: translateY(-1px);
    }
    .user-button.active{
      border-color: rgba(0,212,170,.45);
      box-shadow: 0 0 0 3px rgba(0,212,170,.15);
    }

    .user-avatar{
      width: 34px;
      height: 34px;
      border-radius: 999px;
      display:flex;
      align-items:center;
      justify-content:center;
      font-weight: 800;
      letter-spacing: .5px;
      color: #020617;
      background: linear-gradient(135deg, #00d4aa, #a855f7);
    }

    .user-name{
      font-weight: 800;
      font-size: 14px;
      opacity: .95;
    }

    /* dropdown */
    .user-dropdown{
      position:absolute;
      right:0;
      top: calc(100% + 10px);
      width: 320px;
      border-radius: 18px;
      border: 1px solid rgba(255,255,255,.14);
      background: rgba(10, 12, 24, .82);
      backdrop-filter: blur(14px);
      box-shadow: var(--shadow);
      overflow:hidden;
      opacity:0;
      visibility:hidden;
      transform: translateY(-6px);
      transition: .18s ease;
      z-index: 50;
    }

    .user-dropdown.active{
      opacity:1;
      visibility:visible;
      transform: translateY(0);
    }

    .dropdown-header{
      display:flex;
      gap:12px;
      padding: 14px;
      background: radial-gradient(500px 220px at 20% 20%, rgba(0,212,170,.18), transparent 60%),
                  radial-gradient(500px 220px at 80% 20%, rgba(168,85,247,.16), transparent 60%);
    }

    .user-avatar-large{
      width: 46px;
      height: 46px;
      border-radius: 999px;
      display:flex;
      align-items:center;
      justify-content:center;
      font-weight: 900;
      color: #020617;
      background: linear-gradient(135deg, #7fb0ff, #ff7ae6);
    }

    .user-info-dropdown{
      display:flex;
      flex-direction:column;
      justify-content:center;
    }

    .user-name-dropdown{
      margin:0;
      font-weight: 900;
      font-size: 15px;
    }

    .user-email-dropdown{
      margin: 2px 0 0;
      font-size: 13px;
      opacity: .75;
    }

    .dropdown-divider{
      height: 1px;
      background: rgba(255,255,255,.10);
    }

    .dropdown-item{
      display:flex;
      align-items:center;
      gap:10px;
      padding: 12px 14px;
      color: rgba(226,232,240,.92);
      text-decoration:none;
      font-weight: 800;
      font-size: 13px;
      transition: .15s ease;
    }
    .dropdown-item:hover{
      background: rgba(255,255,255,.07);
    }
    .dropdown-item svg{
      opacity:.9;
    }
    .dropdown-item.logout{
      color:#fecaca;
    }
    .dropdown-item.logout:hover{
      background: rgba(239,68,68,.12);
    }

    /* ======== PROFILE HEADER ======== */
    .profile-header{
      display:flex;
      align-items:center;
      gap:16px;
      padding: 18px;
      border-radius: calc(var(--radius) + 6px);
      border: 1px solid rgba(255,255,255,.14);
      background: linear-gradient(135deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
      backdrop-filter: blur(12px);
      box-shadow: 0 18px 60px rgba(0,0,0,.22);
    }

    .profile-avatar-large{
      width: 78px;
      height: 78px;
      border-radius: 999px;
      display:flex;
      align-items:center;
      justify-content:center;
      font-size: 22px;
      font-weight: 900;
      color: #020617;
      background: linear-gradient(135deg, #00d4aa, #a855f7);
    }

    .profile-header-info h1{
      margin:0;
      font-size: 28px;
      font-weight: 900;
      letter-spacing: -0.02em;
    }

    .profile-email{
      margin: 6px 0 0;
      font-size: 14px;
      opacity: .75;
    }

    /* role badge */
    .profile-role-badge{
      margin-top: 10px;
    }

    .role-badge{
      display:inline-flex;
      align-items:center;
      padding: 6px 10px;
      border-radius: 999px;
      font-size: 12px;
      font-weight: 900;
      border: 1px solid rgba(255,255,255,.14);
      background: rgba(255,255,255,.06);
    }

    .role-badge.admin{
      background: rgba(168,85,247,.14);
      border-color: rgba(168,85,247,.35);
      color: #e9d5ff;
    }

    .role-badge.user{
      background: rgba(0,212,170,.12);
      border-color: rgba(0,212,170,.30);
      color: #a7f3d0;
    }

    /* ======== GRID CARDS ======== */
    .profile-grid{
      margin-top: 18px;
      display:grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 16px;
    }

    @media(max-width: 900px){
      .profile-grid{ grid-template-columns: 1fr; }
    }

    .profile-card{
      border-radius: var(--radius);
      border: 1px solid rgba(255,255,255,.14);
      background: rgba(255,255,255,.05);
      backdrop-filter: blur(12px);
      box-shadow: 0 18px 60px rgba(0,0,0,.18);
      overflow:hidden;
    }

    .card-header{
      display:flex;
      align-items:center;
      gap:10px;
      padding: 14px 16px;
      background: rgba(255,255,255,.05);
      border-bottom: 1px solid rgba(255,255,255,.10);
    }

    .card-header h2{
      margin:0;
      font-size: 15px;
      font-weight: 900;
      letter-spacing: .2px;
    }

    .card-content{
      padding: 14px 16px 16px;
    }

    /* info rows */
    .info-row{
      display:flex;
      justify-content:space-between;
      gap:12px;
      padding: 10px 0;
      border-bottom: 1px solid rgba(255,255,255,.08);
    }
    .info-row:last-child{ border-bottom: none; }

    .info-label{
      opacity: .70;
      font-size: 13px;
      font-weight: 700;
    }

    .info-value{
      font-size: 13px;
      font-weight: 900;
      opacity: .95;
      text-align:right;
    }

    /* roles list */
    .roles-list{
      display:flex;
      flex-direction:column;
      gap:10px;
    }

    .role-item{
      display:flex;
      align-items:center;
      gap:10px;
      padding: 10px 12px;
      border-radius: 14px;
      border: 1px solid rgba(255,255,255,.12);
      background: rgba(0,0,0,.16);
      font-weight: 800;
      font-size: 13px;
    }
    .role-item svg{ color: #00d4aa; }

    /* Change password button */
    .change-password-btn{
      margin-top: 14px;
      display:block;
      padding: 10px 12px;
      border-radius: 14px;
      border: 1px solid rgba(255,255,255,.16);
      background: rgba(255,255,255,.06);
      color: rgba(226,232,240,.95);
      font-weight: 900;
      transition: .15s ease;
    }
    .change-password-btn:hover{
      background: rgba(255,255,255,.12);
      transform: translateY(-1px);
    }

    /* Quick actions */
    .action-button{
      display:flex;
      align-items:center;
      gap:10px;
      padding: 10px 12px;
      border-radius: 14px;
      border: 1px solid rgba(255,255,255,.16);
      background: rgba(255,255,255,.06);
      color: rgba(226,232,240,.95);
      text-decoration:none;
      font-weight: 900;
      transition: .15s ease;
      margin-bottom: 10px;
    }
    .action-button:hover{
      background: rgba(255,255,255,.12);
      transform: translateY(-1px);
    }

    .logout-action{
      border-color: rgba(239,68,68,.35);
      color: #fecaca;
    }
    .logout-action:hover{
      background: rgba(239,68,68,.14);
      border-color: rgba(239,68,68,.55);
    }
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

      <div class=\"user-menu\">
        <button class=\"user-button\" id=\"userMenuBtn\">
          <div class=\"user-avatar\">";
        // line 390
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 390, $this->source); })()), "user", [], "any", false, false, false, 390), "name", [], "any", false, false, false, 390), 0, 2)), "html", null, true);
        yield "</div>
          <span class=\"user-name\">";
        // line 391
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 391, $this->source); })()), "user", [], "any", false, false, false, 391), "name", [], "any", false, false, false, 391), "html", null, true);
        yield "</span>
          <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
            <polyline points=\"6 9 12 15 18 9\"/>
          </svg>
        </button>

        <div class=\"user-dropdown\" id=\"userDropdown\">
          <div class=\"dropdown-header\">
            <div class=\"user-avatar-large\">";
        // line 399
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 399, $this->source); })()), "user", [], "any", false, false, false, 399), "name", [], "any", false, false, false, 399), 0, 2)), "html", null, true);
        yield "</div>
            <div class=\"user-info-dropdown\">
              <p class=\"user-name-dropdown\">";
        // line 401
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 401, $this->source); })()), "user", [], "any", false, false, false, 401), "name", [], "any", false, false, false, 401), "html", null, true);
        yield "</p>
              <p class=\"user-email-dropdown\">";
        // line 402
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 402, $this->source); })()), "user", [], "any", false, false, false, 402), "email", [], "any", false, false, false, 402), "html", null, true);
        yield "</p>
            </div>
          </div>

          <div class=\"dropdown-divider\"></div>

          <a href=\"";
        // line 408
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\" class=\"dropdown-item\">
            <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
              <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"/>
              <circle cx=\"12\" cy=\"7\" r=\"4\"/>
            </svg>
            Profile
          </a>

         

          ";
        // line 418
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 419
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            yield "\" class=\"dropdown-item\">
              <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                <rect x=\"3\" y=\"3\" width=\"18\" height=\"18\" rx=\"2\"/>
                <path d=\"M3 9h18M9 21V9\"/>
              </svg>
              Admin Panel
            </a>
          ";
        }
        // line 427
        yield "
          <div class=\"dropdown-divider\"></div>

          <a href=\"";
        // line 430
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"dropdown-item logout\">
            <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
              <path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"/>
              <polyline points=\"16 17 21 12 16 7\"/>
              <line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"/>
            </svg>
            Logout
          </a>
        </div>
      </div>
    </nav>

    <!-- Profile Content -->
    <main class=\"profile-main\">
      <div class=\"profile-header\">
        <div class=\"profile-avatar-large\">";
        // line 445
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 445, $this->source); })()), "name", [], "any", false, false, false, 445), 0, 2)), "html", null, true);
        yield "</div>
        <div class=\"profile-header-info\">
          <h1>";
        // line 447
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 447, $this->source); })()), "name", [], "any", false, false, false, 447), "html", null, true);
        yield "</h1>
          <p class=\"profile-email\">";
        // line 448
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 448, $this->source); })()), "email", [], "any", false, false, false, 448), "html", null, true);
        yield "</p>
          <div class=\"profile-role-badge\">
            ";
        // line 450
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 451
            yield "              <span class=\"role-badge admin\">Administrator</span>
            ";
        } else {
            // line 453
            yield "              <span class=\"role-badge user\">User</span>
            ";
        }
        // line 455
        yield "          </div>
        </div>
      </div>

      <div class=\"profile-grid\">
        <!-- Account Information Card -->
        <div class=\"profile-card\">
          <div class=\"card-header\">
            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
              <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"/>
              <circle cx=\"12\" cy=\"7\" r=\"4\"/>
            </svg>
            <h2>Account Information</h2>
          </div>
          <div class=\"card-content\">
            <div class=\"info-row\">
              <span class=\"info-label\">Full Name</span>
              <span class=\"info-value\">";
        // line 472
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 472, $this->source); })()), "name", [], "any", false, false, false, 472), "html", null, true);
        yield "</span>
            </div>
            <div class=\"info-row\">
              <span class=\"info-label\">Email Address</span>
              <span class=\"info-value\">";
        // line 476
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 476, $this->source); })()), "email", [], "any", false, false, false, 476), "html", null, true);
        yield "</span>
            </div>
            <div class=\"info-row\">
              <span class=\"info-label\">Account ID</span>
              <span class=\"info-value\">#";
        // line 480
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 480, $this->source); })()), "id", [], "any", false, false, false, 480), "html", null, true);
        yield "</span>
            </div>
            <div class=\"info-row\">
              <span class=\"info-label\">Account Type</span>
              <span class=\"info-value\">
                ";
        // line 485
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 486
            yield "                  Administrator
                ";
        } else {
            // line 488
            yield "                  Standard User
                ";
        }
        // line 490
        yield "              </span>
            </div>
          </div>
        </div>

        <!-- Security Card -->
        <div class=\"profile-card\">
          <div class=\"card-header\">
            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
              <rect x=\"3\" y=\"11\" width=\"18\" height=\"11\" rx=\"2\" ry=\"2\"/>
              <path d=\"M7 11V7a5 5 0 0 1 10 0v4\"/>
            </svg>
            <h2>Security</h2>
          </div>
          <div class=\"card-content\">
            <div class=\"info-row\">
              <span class=\"info-label\">Password</span>
              <span class=\"info-value\">••••••••</span>
            </div>
            <a href=\"";
        // line 509
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\"
               class=\"change-password-btn\"
               style=\"text-align:center; text-decoration:none; display:block;\">
              Change Password
            </a>
          </div>
        </div>

        <!-- Roles & Permissions Card -->
        <div class=\"profile-card\">
          <div class=\"card-header\">
            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
              <path d=\"M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z\"/>
            </svg>
            <h2>Roles & Permissions</h2>
          </div>
          <div class=\"card-content\">
            <div class=\"roles-list\">
              ";
        // line 527
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 527, $this->source); })()), "roles", [], "any", false, false, false, 527));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 528
            yield "                <div class=\"role-item\">
                  <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                    <polyline points=\"20 6 9 17 4 12\"/>
                  </svg>
                  <span>";
            // line 532
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
            yield "</span>
                </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 535
        yield "            </div>
          </div>
        </div>

        <!-- Quick Actions Card -->
        <div class=\"profile-card\">
          <div class=\"card-header\">
            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
              <line x1=\"12\" y1=\"1\" x2=\"12\" y2=\"23\"/>
              <path d=\"M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6\"/>
            </svg>
            <h2>Quick Actions</h2>
          </div>
          <div class=\"card-content\">
            <a href=\"";
        // line 549
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"action-button\">
              <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                <path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"/>
              </svg>
              Go to Dashboard
            </a>

            ";
        // line 556
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 557
            yield "              <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            yield "\" class=\"action-button\">
                <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                  <rect x=\"3\" y=\"3\" width=\"18\" height=\"18\" rx=\"2\"/>
                </svg>
                Admin Panel
              </a>
            ";
        }
        // line 564
        yield "
            <a href=\"";
        // line 565
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"action-button logout-action\">
              <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                <path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"/>
                <polyline points=\"16 17 21 12 16 7\"/>
                <line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"/>
              </svg>
              Logout
            </a>
          </div>
        </div>
      </div>
    </main>
  </div>

  <script>
    const userMenuBtn = document.getElementById('userMenuBtn');
    const userDropdown = document.getElementById('userDropdown');

    if (userMenuBtn && userDropdown) {
      userMenuBtn.addEventListener('click', function(e) {
        e.stopPropagation();
        userDropdown.classList.toggle('active');
        userMenuBtn.classList.toggle('active');
      });

      document.addEventListener('click', function(e) {
        if (!userMenuBtn.contains(e.target) && !userDropdown.contains(e.target)) {
          userDropdown.classList.remove('active');
          userMenuBtn.classList.remove('active');
        }
      });
    }
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
        return "profile/index.html.twig";
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
        return array (  703 => 565,  700 => 564,  689 => 557,  687 => 556,  677 => 549,  661 => 535,  652 => 532,  646 => 528,  642 => 527,  621 => 509,  600 => 490,  596 => 488,  592 => 486,  590 => 485,  582 => 480,  575 => 476,  568 => 472,  549 => 455,  545 => 453,  541 => 451,  539 => 450,  534 => 448,  530 => 447,  525 => 445,  507 => 430,  502 => 427,  490 => 419,  488 => 418,  475 => 408,  466 => 402,  462 => 401,  457 => 399,  446 => 391,  442 => 390,  58 => 9,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Profile - AIVA</title>

  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"{{ asset('css/stylefront.css') }}\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">

  <!-- ✅ INTERNAL CSS (profile.css integrated here) -->
  <style>
    :root{
      --glass: rgba(255,255,255,.06);
      --glass2: rgba(255,255,255,.10);
      --border: rgba(255,255,255,.14);
      --text: rgba(255,255,255,.92);
      --muted: rgba(255,255,255,.70);
      --muted2: rgba(255,255,255,.55);
      --shadow: 0 18px 60px rgba(0,0,0,.45);
      --radius: 18px;
    }

    .profile-main{
      width: min(1100px, 100%);
      margin: 0 auto;
      padding: 26px 0 60px;
    }

    /* ======== TOP NAV USER MENU ======== */
    .user-menu{
      position: relative;
      display:flex;
      align-items:center;
    }

    .user-button{
      display:flex;
      align-items:center;
      gap:10px;
      padding: 8px 10px;
      border-radius: 14px;
      border: 1px solid rgba(255,255,255,.14);
      background: rgba(255,255,255,.06);
      color: var(--text);
      cursor:pointer;
      transition: .2s ease;
    }
    .user-button:hover{
      background: rgba(255,255,255,.10);
      transform: translateY(-1px);
    }
    .user-button.active{
      border-color: rgba(0,212,170,.45);
      box-shadow: 0 0 0 3px rgba(0,212,170,.15);
    }

    .user-avatar{
      width: 34px;
      height: 34px;
      border-radius: 999px;
      display:flex;
      align-items:center;
      justify-content:center;
      font-weight: 800;
      letter-spacing: .5px;
      color: #020617;
      background: linear-gradient(135deg, #00d4aa, #a855f7);
    }

    .user-name{
      font-weight: 800;
      font-size: 14px;
      opacity: .95;
    }

    /* dropdown */
    .user-dropdown{
      position:absolute;
      right:0;
      top: calc(100% + 10px);
      width: 320px;
      border-radius: 18px;
      border: 1px solid rgba(255,255,255,.14);
      background: rgba(10, 12, 24, .82);
      backdrop-filter: blur(14px);
      box-shadow: var(--shadow);
      overflow:hidden;
      opacity:0;
      visibility:hidden;
      transform: translateY(-6px);
      transition: .18s ease;
      z-index: 50;
    }

    .user-dropdown.active{
      opacity:1;
      visibility:visible;
      transform: translateY(0);
    }

    .dropdown-header{
      display:flex;
      gap:12px;
      padding: 14px;
      background: radial-gradient(500px 220px at 20% 20%, rgba(0,212,170,.18), transparent 60%),
                  radial-gradient(500px 220px at 80% 20%, rgba(168,85,247,.16), transparent 60%);
    }

    .user-avatar-large{
      width: 46px;
      height: 46px;
      border-radius: 999px;
      display:flex;
      align-items:center;
      justify-content:center;
      font-weight: 900;
      color: #020617;
      background: linear-gradient(135deg, #7fb0ff, #ff7ae6);
    }

    .user-info-dropdown{
      display:flex;
      flex-direction:column;
      justify-content:center;
    }

    .user-name-dropdown{
      margin:0;
      font-weight: 900;
      font-size: 15px;
    }

    .user-email-dropdown{
      margin: 2px 0 0;
      font-size: 13px;
      opacity: .75;
    }

    .dropdown-divider{
      height: 1px;
      background: rgba(255,255,255,.10);
    }

    .dropdown-item{
      display:flex;
      align-items:center;
      gap:10px;
      padding: 12px 14px;
      color: rgba(226,232,240,.92);
      text-decoration:none;
      font-weight: 800;
      font-size: 13px;
      transition: .15s ease;
    }
    .dropdown-item:hover{
      background: rgba(255,255,255,.07);
    }
    .dropdown-item svg{
      opacity:.9;
    }
    .dropdown-item.logout{
      color:#fecaca;
    }
    .dropdown-item.logout:hover{
      background: rgba(239,68,68,.12);
    }

    /* ======== PROFILE HEADER ======== */
    .profile-header{
      display:flex;
      align-items:center;
      gap:16px;
      padding: 18px;
      border-radius: calc(var(--radius) + 6px);
      border: 1px solid rgba(255,255,255,.14);
      background: linear-gradient(135deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
      backdrop-filter: blur(12px);
      box-shadow: 0 18px 60px rgba(0,0,0,.22);
    }

    .profile-avatar-large{
      width: 78px;
      height: 78px;
      border-radius: 999px;
      display:flex;
      align-items:center;
      justify-content:center;
      font-size: 22px;
      font-weight: 900;
      color: #020617;
      background: linear-gradient(135deg, #00d4aa, #a855f7);
    }

    .profile-header-info h1{
      margin:0;
      font-size: 28px;
      font-weight: 900;
      letter-spacing: -0.02em;
    }

    .profile-email{
      margin: 6px 0 0;
      font-size: 14px;
      opacity: .75;
    }

    /* role badge */
    .profile-role-badge{
      margin-top: 10px;
    }

    .role-badge{
      display:inline-flex;
      align-items:center;
      padding: 6px 10px;
      border-radius: 999px;
      font-size: 12px;
      font-weight: 900;
      border: 1px solid rgba(255,255,255,.14);
      background: rgba(255,255,255,.06);
    }

    .role-badge.admin{
      background: rgba(168,85,247,.14);
      border-color: rgba(168,85,247,.35);
      color: #e9d5ff;
    }

    .role-badge.user{
      background: rgba(0,212,170,.12);
      border-color: rgba(0,212,170,.30);
      color: #a7f3d0;
    }

    /* ======== GRID CARDS ======== */
    .profile-grid{
      margin-top: 18px;
      display:grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 16px;
    }

    @media(max-width: 900px){
      .profile-grid{ grid-template-columns: 1fr; }
    }

    .profile-card{
      border-radius: var(--radius);
      border: 1px solid rgba(255,255,255,.14);
      background: rgba(255,255,255,.05);
      backdrop-filter: blur(12px);
      box-shadow: 0 18px 60px rgba(0,0,0,.18);
      overflow:hidden;
    }

    .card-header{
      display:flex;
      align-items:center;
      gap:10px;
      padding: 14px 16px;
      background: rgba(255,255,255,.05);
      border-bottom: 1px solid rgba(255,255,255,.10);
    }

    .card-header h2{
      margin:0;
      font-size: 15px;
      font-weight: 900;
      letter-spacing: .2px;
    }

    .card-content{
      padding: 14px 16px 16px;
    }

    /* info rows */
    .info-row{
      display:flex;
      justify-content:space-between;
      gap:12px;
      padding: 10px 0;
      border-bottom: 1px solid rgba(255,255,255,.08);
    }
    .info-row:last-child{ border-bottom: none; }

    .info-label{
      opacity: .70;
      font-size: 13px;
      font-weight: 700;
    }

    .info-value{
      font-size: 13px;
      font-weight: 900;
      opacity: .95;
      text-align:right;
    }

    /* roles list */
    .roles-list{
      display:flex;
      flex-direction:column;
      gap:10px;
    }

    .role-item{
      display:flex;
      align-items:center;
      gap:10px;
      padding: 10px 12px;
      border-radius: 14px;
      border: 1px solid rgba(255,255,255,.12);
      background: rgba(0,0,0,.16);
      font-weight: 800;
      font-size: 13px;
    }
    .role-item svg{ color: #00d4aa; }

    /* Change password button */
    .change-password-btn{
      margin-top: 14px;
      display:block;
      padding: 10px 12px;
      border-radius: 14px;
      border: 1px solid rgba(255,255,255,.16);
      background: rgba(255,255,255,.06);
      color: rgba(226,232,240,.95);
      font-weight: 900;
      transition: .15s ease;
    }
    .change-password-btn:hover{
      background: rgba(255,255,255,.12);
      transform: translateY(-1px);
    }

    /* Quick actions */
    .action-button{
      display:flex;
      align-items:center;
      gap:10px;
      padding: 10px 12px;
      border-radius: 14px;
      border: 1px solid rgba(255,255,255,.16);
      background: rgba(255,255,255,.06);
      color: rgba(226,232,240,.95);
      text-decoration:none;
      font-weight: 900;
      transition: .15s ease;
      margin-bottom: 10px;
    }
    .action-button:hover{
      background: rgba(255,255,255,.12);
      transform: translateY(-1px);
    }

    .logout-action{
      border-color: rgba(239,68,68,.35);
      color: #fecaca;
    }
    .logout-action:hover{
      background: rgba(239,68,68,.14);
      border-color: rgba(239,68,68,.55);
    }
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

      <div class=\"user-menu\">
        <button class=\"user-button\" id=\"userMenuBtn\">
          <div class=\"user-avatar\">{{ app.user.name|slice(0, 2)|upper }}</div>
          <span class=\"user-name\">{{ app.user.name }}</span>
          <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
            <polyline points=\"6 9 12 15 18 9\"/>
          </svg>
        </button>

        <div class=\"user-dropdown\" id=\"userDropdown\">
          <div class=\"dropdown-header\">
            <div class=\"user-avatar-large\">{{ app.user.name|slice(0, 2)|upper }}</div>
            <div class=\"user-info-dropdown\">
              <p class=\"user-name-dropdown\">{{ app.user.name }}</p>
              <p class=\"user-email-dropdown\">{{ app.user.email }}</p>
            </div>
          </div>

          <div class=\"dropdown-divider\"></div>

          <a href=\"{{ path('app_profile') }}\" class=\"dropdown-item\">
            <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
              <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"/>
              <circle cx=\"12\" cy=\"7\" r=\"4\"/>
            </svg>
            Profile
          </a>

         

          {% if is_granted('ROLE_ADMIN') %}
            <a href=\"{{ path('app_user_index') }}\" class=\"dropdown-item\">
              <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                <rect x=\"3\" y=\"3\" width=\"18\" height=\"18\" rx=\"2\"/>
                <path d=\"M3 9h18M9 21V9\"/>
              </svg>
              Admin Panel
            </a>
          {% endif %}

          <div class=\"dropdown-divider\"></div>

          <a href=\"{{ path('app_logout') }}\" class=\"dropdown-item logout\">
            <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
              <path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"/>
              <polyline points=\"16 17 21 12 16 7\"/>
              <line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"/>
            </svg>
            Logout
          </a>
        </div>
      </div>
    </nav>

    <!-- Profile Content -->
    <main class=\"profile-main\">
      <div class=\"profile-header\">
        <div class=\"profile-avatar-large\">{{ user.name|slice(0, 2)|upper }}</div>
        <div class=\"profile-header-info\">
          <h1>{{ user.name }}</h1>
          <p class=\"profile-email\">{{ user.email }}</p>
          <div class=\"profile-role-badge\">
            {% if is_granted('ROLE_ADMIN') %}
              <span class=\"role-badge admin\">Administrator</span>
            {% else %}
              <span class=\"role-badge user\">User</span>
            {% endif %}
          </div>
        </div>
      </div>

      <div class=\"profile-grid\">
        <!-- Account Information Card -->
        <div class=\"profile-card\">
          <div class=\"card-header\">
            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
              <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"/>
              <circle cx=\"12\" cy=\"7\" r=\"4\"/>
            </svg>
            <h2>Account Information</h2>
          </div>
          <div class=\"card-content\">
            <div class=\"info-row\">
              <span class=\"info-label\">Full Name</span>
              <span class=\"info-value\">{{ user.name }}</span>
            </div>
            <div class=\"info-row\">
              <span class=\"info-label\">Email Address</span>
              <span class=\"info-value\">{{ user.email }}</span>
            </div>
            <div class=\"info-row\">
              <span class=\"info-label\">Account ID</span>
              <span class=\"info-value\">#{{ user.id }}</span>
            </div>
            <div class=\"info-row\">
              <span class=\"info-label\">Account Type</span>
              <span class=\"info-value\">
                {% if is_granted('ROLE_ADMIN') %}
                  Administrator
                {% else %}
                  Standard User
                {% endif %}
              </span>
            </div>
          </div>
        </div>

        <!-- Security Card -->
        <div class=\"profile-card\">
          <div class=\"card-header\">
            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
              <rect x=\"3\" y=\"11\" width=\"18\" height=\"11\" rx=\"2\" ry=\"2\"/>
              <path d=\"M7 11V7a5 5 0 0 1 10 0v4\"/>
            </svg>
            <h2>Security</h2>
          </div>
          <div class=\"card-content\">
            <div class=\"info-row\">
              <span class=\"info-label\">Password</span>
              <span class=\"info-value\">••••••••</span>
            </div>
            <a href=\"{{ path('app_forgot_password_request') }}\"
               class=\"change-password-btn\"
               style=\"text-align:center; text-decoration:none; display:block;\">
              Change Password
            </a>
          </div>
        </div>

        <!-- Roles & Permissions Card -->
        <div class=\"profile-card\">
          <div class=\"card-header\">
            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
              <path d=\"M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z\"/>
            </svg>
            <h2>Roles & Permissions</h2>
          </div>
          <div class=\"card-content\">
            <div class=\"roles-list\">
              {% for role in user.roles %}
                <div class=\"role-item\">
                  <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                    <polyline points=\"20 6 9 17 4 12\"/>
                  </svg>
                  <span>{{ role }}</span>
                </div>
              {% endfor %}
            </div>
          </div>
        </div>

        <!-- Quick Actions Card -->
        <div class=\"profile-card\">
          <div class=\"card-header\">
            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
              <line x1=\"12\" y1=\"1\" x2=\"12\" y2=\"23\"/>
              <path d=\"M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6\"/>
            </svg>
            <h2>Quick Actions</h2>
          </div>
          <div class=\"card-content\">
            <a href=\"{{ path('app_home') }}\" class=\"action-button\">
              <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                <path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"/>
              </svg>
              Go to Dashboard
            </a>

            {% if is_granted('ROLE_ADMIN') %}
              <a href=\"{{ path('app_user_index') }}\" class=\"action-button\">
                <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                  <rect x=\"3\" y=\"3\" width=\"18\" height=\"18\" rx=\"2\"/>
                </svg>
                Admin Panel
              </a>
            {% endif %}

            <a href=\"{{ path('app_logout') }}\" class=\"action-button logout-action\">
              <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                <path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"/>
                <polyline points=\"16 17 21 12 16 7\"/>
                <line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"/>
              </svg>
              Logout
            </a>
          </div>
        </div>
      </div>
    </main>
  </div>

  <script>
    const userMenuBtn = document.getElementById('userMenuBtn');
    const userDropdown = document.getElementById('userDropdown');

    if (userMenuBtn && userDropdown) {
      userMenuBtn.addEventListener('click', function(e) {
        e.stopPropagation();
        userDropdown.classList.toggle('active');
        userMenuBtn.classList.toggle('active');
      });

      document.addEventListener('click', function(e) {
        if (!userMenuBtn.contains(e.target) && !userDropdown.contains(e.target)) {
          userDropdown.classList.remove('active');
          userMenuBtn.classList.remove('active');
        }
      });
    }
  </script>
</body>
</html>
", "profile/index.html.twig", "C:\\Users\\User\\Desktop\\projetpiTEST2\\projetpi (1)\\projetpi\\templates\\profile\\index.html.twig");
    }
}
