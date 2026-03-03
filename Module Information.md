# Team & Agent Management Module

## Project Overview

This project is a Laravel Blade-based web application implementing a Team & Agent Management Module.

It demonstrates core Laravel fundamentals including:

- MVC Architecture
- Web Routes (No API endpoints)
- CRUD Operations
- FormRequest Validation
- Custom Middleware (Role-Based Access)
- Eloquent ORM Relationships
- Blade Templating
- Authentication
- Clean Responsive UI (Bootstrap)
- Pagination
- Business Rule Handling

---

## Tech Stack

- Laravel
- PHP 8+
- MySQL
- Bootstrap 5
- Blade Templating

---

## Installation & Setup Guide

Follow the steps below to run the project locally:

Admin Login
Email: admin@starlfinx.com
Password: Admin123@starlfinx

Sub Admin Login
Email: subadmin@starlfinx.com
Password: Subadmin123@starlfinx

### 1 Clone Repository

```bash
git clone <repository-url>
cd team-agent-management```

composer install
npm install

cp .env.example .env
php artisan key:generate

DB_DATABASE=starlfinx_db
DB_USERNAME=your_username
DB_PASSWORD=your_password

php artisan migrate

php artisan db:seed --class=AdminSeeder
php artisan db:seed --class=SubAdminSeeder

php artisan serve
