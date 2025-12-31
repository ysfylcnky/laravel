# Laravel Web Programming Project

This project was developed as part of the **Web Programming** course.
It was created to practice core Laravel concepts and to prepare for the final exam.

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

- Laravel project setup
- Database table creation with migrations
- Model relationships (Category - Product)
- MVC architecture (Model - View - Controller)
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

### Step 5: Run database migrations

```bash
docker-compose exec app php laravel/artisan migrate
```

---

### Step 6: Install Laravel Breeze (Authentication)

```bash
docker-compose exec app composer require laravel/breeze --dev  
docker-compose exec app php laravel/artisan breeze:install  
docker-compose exec app php laravel/artisan migrate  
```

When prompted, select:
- Blade
- PHPUnit (recommended)

---

### Step 7: Seed the database

```bash
docker-compose exec app php laravel/artisan db:seed
```

---

## Project Structure

- app/Models → Eloquent models
- app/Http/Controllers → Controllers
- resources/views → Blade views
- routes/web.php → Web routes
- database/migrations → Migration files
- database/seeders → Seeder files

---

## Purpose of the Project

This project was created for educational purposes to understand Laravel fundamentals
and to practice common tasks such as migrations, controllers, authentication, and seeding.

---

## Author

Name: Yusuf  
GitHub: https://github.com/ysfylcnky
