# AIVA - AI-Driven Health & Fitness Ecosystem 🚀

AIVA is a comprehensive, professional-grade health and fitness management platform built with Symfony. It integrates advanced tracking for nutrition, physical activities, energy consumption, and financial health, all while providing educational content and AI-driven insights.

## 🌟 Key Features

### 🏋️‍♂️ Sports & Fitness
- **Activity Tracking**: Log and monitor physical activities and exercises.
- **Goal Management**: Set, track, and achieve personalized fitness objectives.
- **AI Assistant**: Integration with a dedicated Python-based AI assistant for training plans.

### 🍎 Nutrition & Alimentation
- **Meal Logging**: Track daily food intake and meals.
- **Food Database**: Manage a comprehensive list of aliments and nutritional values.
- **Nutritional Analysis**: Get detailed insights into your eating habits.

### ⚡ Energy Management
- **Consumption Tracking**: Monitor your energy levels and consumption patterns.
- **Personalized Recommendations**: Receive AI-generated suggestions to optimize your energy.
- **Data Statistics**: Visualize energy trends through interactive charts.

### 🎓 Educational Content (Formation)
- **Course Catalog**: Access structured learning materials on health and wellness.
- **Chapter System**: Organized content delivery for better learning retention.

### 💰 Finance Tracking
- **Expense Management**: Keep track of health-related spending (gym memberships, supplements, etc.).
- **Categorization**: Organize expenses into customizable categories.

### 🔒 Security & User Management
- **Two-Factor Authentication (2FA)**: Enhanced security with TOTP support.
- **Secure Profiles**: Complete user profile management and password recovery.
- **Admin Dashboard**: Powerful administrative interface via EasyAdmin.

---

## 🛠 Tech Stack

### Backend & Frontend
- **Framework**: Symfony 7.4
- **Language**: PHP 8.2+
- **Database**: Doctrine ORM (MySQL/PostgreSQL)
- **Templating**: Twig with Modern Glassmorphism UI
- **Interactivity**: Symfony UX, Stimulus, and Turbo (Hotwire)
- **Security**: Symfony Security Bundle + Scheb 2FA

### AI Integration
- **Local AI**: Python-based assistant using **Ollama** (Llama3/Mistral).
- **Backend**: FastAPI / Python 3.9+.

---

## 🚀 Getting Started

### Prerequisites
- PHP 8.2 or higher
- Composer
- Node.js & npm (for assets)
- Python 3.9+ (for AI Assistant)
- Ollama (for AI Assistant)

### Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/Oussema-Tarchoun/AIVA.git
   cd AIVA
   ```

2. **Install PHP dependencies**:
   ```bash
   composer install
   ```

3. **Configure Environment**:
   Copy `.env` to `.env.local` and update your database credentials.
   ```bash
   cp .env .env.local
   ```

4. **Setup Database**:
   ```bash
   php bin/console doctrine:database:create
   php bin/console doctrine:migrations:migrate
   ```

5. **Install Assets**:
   ```bash
   php bin/console importmap:install
   ```

6. **Start the Symfony Server**:
   ```bash
   symfony serve
   ```

### Setting up the AI Assistant (Optional)

1. Navigate to the assistant directory:
   ```bash
   cd sport_ai_assistant
   ```
2. Install Python requirements:
   ```bash
   pip install -r requirements.txt
   ```
3. Run the assistant:
   ```bash
   python app.py
   ```

---

## 📸 Screenshots & UI
The application features a modern **Glassmorphism** design, optimized for both functionality and aesthetic appeal.

## 📄 License
This project is proprietary. All rights reserved.
