# Task Management System (Laravel 10)

This project is a simple task management system built using Laravel 10.

## Prerequisites
Ensure you have the following installed:
- PHP (>= 8.2)
- Composer
- MySQL

---

## Database Setup (MySQL)

### Create Database
```
CREATE DATABASE task_management;
```
---

## Backend (Laravel 10) Installation

### Clone the Repository
extract the zip file
```
cd task-management-system
```

### Set Up Environment
Copy the `.env.example` file and update the database credentials:
```
cp .env.example .env
```
Edit `.env` and configure:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task_management
DB_USERNAME=root
DB_PASSWORD=
```

### Run Migrations
```
php artisan migrate
```

### Run Composer install
```
composer install
```

### Start the Laravel Server
```
php artisan serve
```
The backend will run on `http://127.0.0.1:8000`.

---

## API Endpoints
| Method | Endpoint | Description |
|--------|---------|-------------|
| GET | `/api/tasks` | Fetch all tasks |
| POST | `/api/tasks` | Create a new task |
| PUT | `/api/tasks/{id}` | Update task status |
| DELETE | `/api/tasks/{id}` | Delete task status |
