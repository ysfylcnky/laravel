# Laravel Web Programming Project

This project was developed as part of the **Web Programming** course.
It aims to demonstrate the fundamental concepts of the Laravel framework and to prepare for the final exam.

---

## Technologies Used

- Laravel
- PHP
- PostgreSQL
- Docker & Docker Compose
- Laravel Breeze (Authentication)
- Git & GitHub

---

## Project Features

- Laravel project initialization
- Database table creation using migrations
- Eloquent models for database interaction
- Model relationships (Category - Product)
- Controllers to handle application logic
- Blade views for data presentation
- MVC (Model - View - Controller) architecture
- Authentication system using Laravel Breeze
- Database seeding with sample data
- Docker-based development environment

---

## Installation and Setup

### Step 1: Clone the repository

```bash
git clone https://github.com/ysfylcnky/laravel.git  
cd laravel
```

---

### Step 2: Start Docker containers

```bash
docker-compose up -d
```

---

### Step 3: Configure environment file

```bash
cp laravel/.env.example laravel/.env
```

Edit the `.env` file and update database settings:

DB_CONNECTION=pgsql  
DB_HOST=db  
DB_PORT=5432  
DB_DATABASE=laravel  
DB_USERNAME=user  
DB_PASSWORD=password  

---

### Step 4: Generate application key

```bash
docker-compose exec app php laravel/artisan key:generate
```

---

### Step 5: Create models and migrations

```bash
docker-compose exec app php laravel/artisan make:model Category -m  
docker-compose exec app php laravel/artisan make:model Product -m  
```

Migration files are updated to define the database schema.

---

### Step 6: Run database migrations

```bash
docker-compose exec app php laravel/artisan migrate
```

---

### Step 7: Create controllers

```bash
docker-compose exec app php laravel/artisan make:controller ProductController
```

Controllers are used to retrieve data from models and pass it to views.

---

### Step 8: Create views

Blade view files are created under `resources/views` to display product and category data.

---

### Step 9: Install Laravel Breeze (Authentication)

```bash
docker-compose exec app composer require laravel/breeze --dev  
docker-compose exec app php laravel/artisan breeze:install  
docker-compose exec app php laravel/artisan migrate  
```

When prompted, select:
- Blade
- PHPUnit

---

### Step 10: Seed the database

```bash
docker-compose exec app php laravel/artisan db:seed
```

---

## Project Structure

- app/Models → Eloquent models
- app/Http/Controllers → Controllers
- resources/views → Blade view files
- routes/web.php → Web routes
- database/migrations → Migration files
- database/seeders → Seeder files

---

## Purpose of the Project

This project was created for educational purposes to understand Laravel fundamentals,
including models, controllers, migrations, authentication, and database seeding.

---

## Author

Name: Yusuf  
GitHub: https://github.com/ysfylcnky
