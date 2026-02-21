# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Symfony 7.4 web application (PHP 8.2+) for student life management — covers energy tracking, nutrition (aliments/repas), physical activity, finances (depenses/objectifs/categories), courses/chapters (apprentissage), and AI-powered recommendations via Google Gemini API.

## Common Commands

```bash
# Start dev server
symfony server:start
# or
php -S localhost:8000 -t public/

# Database
php bin/console doctrine:migrations:migrate
php bin/console doctrine:schema:update --force

# Clear cache
php bin/console cache:clear

# Run tests
php bin/phpunit
php bin/phpunit tests/path/to/TestFile.php  # single test

# Create migration after entity changes
php bin/console make:migration
```

## Architecture

- **Back/Front split**: Controllers are split between `src/Controller/` (back-office CRUD) and `src/Controller/Front/` (student-facing). Templates mirror this in `templates/back/` and `templates/front/`.
- **Admin**: EasyAdmin bundle at `src/Controller/Admin/` with `DashboardController` and CRUD controllers.
- **Entities**: Doctrine ORM entities in `src/Entity/` — core domain: `User`, `Energie`, `ActivitePhysique`, `Aliment`, `Repas`, `Depense`, `Categorie`, `Objectif`, `Cours`, `Chapitre`, `Recommandation`.
- **Services**: `GeminiRecommandationService` calls Google Gemini API (key via `GEMINI_API_KEY` env var) to generate health/energy recommendations.
- **Auth**: Symfony Security with registration, login, password reset (symfonycasts/reset-password-bundle), and user profile management.

## Environment Variables

Key env vars in `.env` / `.env.local`:
- `DATABASE_URL` — Doctrine DB connection
- `GEMINI_API_KEY` — Google Gemini API key for recommendations
- `MAILER_DSN` — For password reset emails

## Template Structure

Templates use Twig. Front templates extend `templates/front/base_finance.html.twig` or similar base layouts. Back-office templates are in `templates/back/`.
