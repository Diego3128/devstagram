# Devstagram - A Social Network for Developers 💻

Devstagram is a Laravel-based web application that mimics the core functionalities of a social media platform like Instagram, tailored specifically for developers. It allows developers to connect, share projects, and interact within a community of peers. This project leverages the latest Laravel version (v11) and provides a robust backend foundation for scalable and feature-rich applications.

## Features ✨

- **User Authentication:**
  - Secure registration and login using Laravel's built-in authentication.
  - Password reset functionality.

- **Post Management:**
  - Create, edit, and delete posts with developer-focused content.
  - Upload and display images for each post.

- **Social Interactions:**
  - Like and comment on posts.
  - Follow and unfollow other developers.

- **Responsive Design:**
  - Optimized user interface for both desktop and mobile devices.

- **Laravel Features:**
  - Utilizes Blade templates for dynamic frontend rendering.
  - Routes and controllers to handle user interactions efficiently.
  - Eloquent ORM for database interactions.

## Getting Started 🚀

### Prerequisites

Make sure you have the following installed:

- Docker (with Docker Compose)
- Node.js
- Composer

### Installation

1. **Clone the repository:**

```bash
git clone https://github.com/Diego3128/devstagram
```

2. **Navigate to the project directory:**

```bash
cd devstagram
```

3. **Install PHP dependencies using Composer:**

```bash
composer install
```

4. **Install JavaScript dependencies using npm:**

```bash
npm install
```

5. **Set up the environment file:**

```bash
cp .env.example .env
```

Update the `.env` file with your database and application configurations.

6. **Generate the application key:**

```bash
php artisan key:generate
```

7. **Run database migrations:**

```bash
php artisan migrate
```

8. **Start the application using Sail:**

```bash
./vendor/bin/sail up
```

9. **Access the application:**

Open your browser and navigate to:

```http
http://localhost
```

## Project Structure 🗂️

```bash
project-root/
├── app/                # Core application logic (controllers, models, etc.)
├── bootstrap/          # Application bootstrap files
├── config/             # Configuration files
├── database/           # Migrations, seeders, and factories
├── public/             # Publicly accessible files (index.php, assets)
├── resources/
│   ├── views/          # Blade templates for the frontend
│   ├── css/            # CSS stylesheets
│   ├── js/             # JavaScript files
├── routes/             # Application routes (web.php, api.php)
├── storage/            # Logs, cached views, and user-generated files
├── tests/              # Automated tests
├── vendor/             # Composer dependencies
├── artisan             # Command-line interface for Laravel
├── composer.json       # PHP dependencies
├── package.json        # JavaScript dependencies
├── vite.config.js      # Vite configuration for asset bundling
└── docker-compose.yml  # Docker configuration for the project
```

## Technologies Used 🛠️

- **Backend:** Laravel 11
- **Frontend:** Blade templates, Vite
- **Database:** MySQL (via Docker)
- **Caching:** Redis (via Docker)
- **Search:** Meilisearch (via Docker)
- **Containerization:** Docker & Laravel Sail

## Screenshots 🖼️


## License 📜

This project is open-source and free to use.

