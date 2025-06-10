
# Laravel API - Blog Post App

This is a simple RESTful API built using **Laravel 10** to manage blog posts and comments.  
It is designed to work with a Vue.js frontend.

---

## ⚙️ Requirements

- PHP >= 8.1  
- Composer  
- MySQL or PostgreSQL  
- Laravel 10

---

## 🚀 Setup Instructions

### 1. Clone the repository

```bash
git clone https://github.com/Kalenyyy/Laravel-API-PostApp.git
cd Laravel-API-PostApp
```

### 2. Install dependencies

```bash
composer install
```

### 3. Create `.env` file

```bash
cp .env.example .env
```

Edit `.env` file dan atur konfigurasi database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 4. Generate application key

```bash
php artisan key:generate
```

### 5. Run migrations

```bash
php artisan migrate
```

### 6. Start the server

```bash
php artisan serve
```

API akan berjalan di: `http://localhost:8000/api`

---

## 📡 API Documentation

### 📝 Posts

| Method | Endpoint           | Description        |
|--------|--------------------|--------------------|
| GET    | `/api/posts`       | List all posts     |
| GET    | `/api/posts/{id}`  | Get a post detail  |
| POST   | `/api/posts`       | Create a post      |
| PUT    | `/api/posts/{id}`  | Update a post      |
| DELETE | `/api/posts/{id}`  | Delete a post      |

---

### 💬 Comments

| Method | Endpoint                         | Description             |
|--------|----------------------------------|-------------------------|
| POST   | `/api/posts/{id}/comments`       | Add a comment           |
| DELETE | `/api/comments/{id}`             | Delete a comment        |

---



