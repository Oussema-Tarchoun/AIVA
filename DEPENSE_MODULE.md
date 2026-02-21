# Module Dépenses — Handoff Développeur

> Projet : AIVA — Symfony 7.4 / PHP 8.2 / MariaDB
> Branche : `gestionenergie`
> Auteur du handoff : Claude Code
> Date : 2026-02-17

---

## Contexte

Le CRUD de base (liste, ajout, modification, suppression, détail) était déjà en place.
5 fonctionnalités avancées ont été ajoutées par-dessus sans rien casser.

**Important :** Le module utilise un "fake user" (id=2) via `getFakeUser()` dans le contrôleur — même pattern que le reste du projet. À remplacer par `$this->getUser()` quand l'auth sera branchée.

---

## Packages installés

```bash
composer require dompdf/dompdf endroid/qr-code
```

Et dans `php.ini` (XAMPP) :
```ini
extension=gd   # était commenté, décommenté pour endroid/qr-code
```

---

## Fonctionnalités implémentées

### 1. Statistiques Dashboard
**URL :** `/front/depense/statistiques`

Page dédiée qui affiche une vue d'ensemble des dépenses :
- 3 cartes : total général, nombre de catégories actives, moyenne par catégorie
- Graphique **doughnut** (répartition par catégorie) via Chart.js CDN
- Graphique **barres** (évolution mensuelle sur 12 mois) via Chart.js CDN

Les données sont calculées en base via 4 nouvelles méthodes du repository.
Accessible depuis un bouton "Statistiques" sur la page index.

---

### 2. Export PDF
**URL :** `/front/depense/export-pdf`

Télécharge directement un fichier `depenses_YYYY-MM-DD.pdf` contenant :
- En-tête AIVA avec date de génération
- Tableau de toutes les dépenses (id, description, montant, date, catégorie, statut)
- Total en bas

Technologie : `dompdf/dompdf` + template Twig dédié.
Le template PDF **doit** avoir du CSS inline (Dompdf ne charge pas les feuilles externes).

---

### 3. QR Code par dépense
**URL :** `/front/depense/{id}/qrcode` — retourne une image PNG

Génère un QR code scannable avec les infos de la dépense en texte lisible :
```
DEPENSE #12
Description: Loyer Février
Montant: 650.00 TND
Date: 01/02/2026
Catégorie: Logement
Statut: Payée
```

**UX :** Le QR ne s'ouvre PAS dans une nouvelle page. Il s'affiche dans une **modal glassmorphism** :
- Sur la page **index** : icône QR (bouton) sur chaque carte dépense
- Sur la page **show** : bouton "Afficher QR Code"

Technologie : `endroid/qr-code` v6 — API avec `new Builder(writer: new PngWriter(), data: ..., size: 250)`.
Attention : la v6 n'a plus de méthode statique `Builder::create()`, c'est `new Builder(...)`.

---

### 4. Contrôle de saisie — Confirmation montant anormal
**URL AJAX :** `GET /front/depense/moyenne-categorie/{id}` — retourne JSON

Fonctionnement :
1. L'utilisateur remplit le formulaire (ajout ou modification)
2. Au clic sur "Enregistrer", un appel AJAX récupère la moyenne des dépenses de la catégorie choisie
3. Si `montant > moyenne × 1.5` → modal d'avertissement :

> *"Le montant 900.00 TND est +150% au-dessus de la moyenne de cette catégorie (360.00 TND). Voulez-vous confirmer ?"*

- **Oui, confirmer** → le formulaire s'envoie normalement
- **Annuler** → retour au formulaire pour corriger

Si la catégorie n'a pas encore d'historique (0 dépenses) → pas de popup, soumission directe.

Présent sur les formulaires `new.html.twig` ET `edit.html.twig`.

---

### 5. Analyse IA
**URL :** `GET /front/depense/analyse-ia` — retourne JSON `{"analyse": "..."}`

Construit un prompt avec les données réelles de l'utilisateur :
- Total dépensé ce mois vs mois précédent
- Répartition par catégorie

Envoie le prompt à :
1. **Ollama local** en priorité — modèle `qwen2.5:1.5b` (~1 GB), port `11434`
2. **Gemini Flash** en fallback — clé `GEMINI_API_KEY` dans `.env`

**UX :** Bouton "Analyse IA" sur la page index. Clic → appel `fetch` → résultat affiché dans une modal glassmorphism. Affiche "Chargement..." pendant la requête.

**Pour que ça marche localement :**
```bash
# Installer Ollama : https://ollama.com/download
ollama pull qwen2.5:1.5b
# Le serveur Ollama tourne automatiquement en arrière-plan après install
```

---

## Ordre des routes (critique)

Dans `FrontDepenseController`, les routes **littérales** doivent être déclarées AVANT `/{id}` sinon Symfony les confond :

```
GET  /front/depense                        → index
GET  POST /front/depense/new               → new
GET  /front/depense/statistiques           → statistiques
GET  /front/depense/export-pdf             → exportPdf
GET  /front/depense/analyse-ia             → analyseIa
GET  /front/depense/moyenne-categorie/{id} → moyenneCategorie
GET  /front/depense/{id}                   → show
GET  POST /front/depense/{id}/edit         → edit
GET  /front/depense/{id}/qrcode            → qrcode
POST /front/depense/{id}                   → delete
```

---

## Fichiers modifiés

### `src/Repository/DepenseRepository.php`
4 méthodes ajoutées après les méthodes existantes :
- `totalParCategorie(User)` — SUM groupé par catégorie (DQL)
- `totalParMois(User)` — SUM groupé par mois sur 12 mois (SQL natif avec DATE_FORMAT)
- `moyenneParCategorie(User)` — AVG par catégorie (DQL)
- `totalParMoisPourMois(User, string $yearMonth)` — total d'un mois précis format `YYYY-MM` (SQL natif)

### `src/Controller/Front/FrontDepenseController.php`
5 actions ajoutées, imports ajoutés en haut :
- `statistiques()` — passe les données aux 3 méthodes repo + calcule total
- `exportPdf()` — délègue à `DepensePdfService`, retourne `Response` avec headers PDF
- `analyseIa()` — délègue à `DepenseAnalyseService`, retourne `JsonResponse`
- `qrcode()` — génère le PNG via `Builder`, retourne `Response` image/png
- `moyenneCategorie()` — calcule la moyenne pour une catégorie donnée, retourne `JsonResponse`

L'action `index()` injecte maintenant `DepenseAnomalieService` et passe `anomalies` au template.

### `templates/front/depense/index.html.twig`
- Boutons ajoutés dans `.section-head` : Statistiques, Exporter PDF, Analyse IA
- Icône QR (bouton `onclick="showQr(...)"`) ajoutée dans `.card-actions` de chaque carte
- Bannière rouge en haut si anomalies détectées (liste avec % d'écart)
- Modal QR Code (glassmorphism, fermable)
- Modal Analyse IA (glassmorphism, fetch JS intégré)

### `templates/front/depense/show.html.twig`
- Bouton "Afficher QR Code" + modal glassmorphism avec l'image QR

### `templates/front/depense/new.html.twig`
- `id="depenseForm"` ajouté au form_start
- Modal de confirmation montant anormal (HTML + JS fetch) ajoutée après `form_end`

### `templates/front/depense/edit.html.twig`
- Même chose que new.html.twig — modal de confirmation identique

### `config/services.yaml`
```yaml
App\Service\DepenseAnalyseService:
    arguments:
        $geminiApiKey: '%env(GEMINI_API_KEY)%'
        $ollamaUrl: '%env(OLLAMA_URL)%'
```

### `.env`
```env
OLLAMA_URL=http://localhost:11434
```

---

## Fichiers créés

### `src/Service/DepenseAnomalieService.php`
Reçoit un tableau de `Depense[]`, groupe par `id_categorie`, calcule la moyenne de chaque groupe (min 2 dépenses requis). Retourne les dépenses dont le montant > 1.5× moyenne, avec le % d'écart. Utilisé dans `index()`.

### `src/Service/DepensePdfService.php`
Injecte `Twig\Environment`. Méthode `generer(array $depenses): string`. Calcule le total, rend le template `pdf.html.twig`, configure Dompdf (A4, portrait), retourne le contenu binaire PDF.

### `src/Service/DepenseAnalyseService.php`
Injecte `DepenseRepository`, `HttpClientInterface`, `$geminiApiKey`, `$ollamaUrl`. Méthode `analyser(User): string`. Construit le prompt, tente Ollama (timeout 60s), tente Gemini en fallback (timeout 30s), retourne le texte d'analyse ou un message d'erreur explicite.

### `templates/front/depense/statistiques.html.twig`
Template standalone (pas d'extends, CSS inline). Navbar identique à index. Chart.js chargé via CDN. Données passées en JSON via filtres Twig `|map` et `|json_encode`.

### `templates/front/depense/pdf.html.twig`
HTML minimal avec CSS 100% inline (contrainte Dompdf). Police Helvetica. Tableau avec alternance de couleurs. En-tête AIVA, footer, total en vert.

---

## Variables d'environnement requises

| Variable | Valeur par défaut | Obligatoire |
|----------|-------------------|-------------|
| `DATABASE_URL` | `mysql://root:@127.0.0.1:3306/AIVA` | Oui |
| `GEMINI_API_KEY` | — | Pour le fallback IA |
| `OLLAMA_URL` | `http://localhost:11434` | Pour l'IA principale |

---

## Prochaine fonctionnalité suggérée : Budget mensuel par catégorie

Ajouter une colonne `budget_mensuel` (nullable) sur la table `categorie`. L'étudiant fixe un plafond par catégorie. La page index affiche une barre de progression (dépensé / budget) avec alerte orange à 80% et rouge au dépassement. Réutilise `totalParCategorie` déjà en place. Estimation : 1 migration + 1 champ form + ~60 lignes PHP + CSS dans 2 templates.
