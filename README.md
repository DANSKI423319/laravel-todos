# Laravel - Todo API

This repository contains an example Laravel API capturing CRUD functionality for managing todo items.

## Features
- CRUD Todo items

## Build Information

### Laravel Framework 🚀
Laravel is a web application framework with expressive, elegant syntax. It provides features like Eloquent ORM, routing, middleware, and comprehensive testing tools to build modern APIs quickly and efficiently.

### Docker & Docker Compose 🐳
The application uses Docker containers for consistent development environments, including Nginx, PHP-FPM, and MySQL services.

## Requirements

### Composer 📦
You'll need Composer for dependency management in PHP.

Find installation information at the [official Composer website](https://getcomposer.org/).

### Docker Desktop 🐳
You'll need Docker on your machine, and the desktop app to go with it.

Find installation information at the [official website](https://www.docker.com/products/docker-desktop/).

## Getting Started

1. Clone the repository:
   ```bash
   git clone <repository-url>
   cd laravel-todos
   ```

2. Navigate to the API directory:
   ```bash
   cd api
   ```

3. Install PHP dependencies:
   ```bash
   composer install
   ```

4. Set up your environment file:
   ```bash
   cp .env.example .env
   ```

5. Generate application key:
   ```bash
   php artisan key:generate
   ```

6. Start the Docker containers:
   ```bash
   cd ..
   docker compose up -d
   ```

7. Run database migrations:
   ```bash
   cd api
   php artisan migrate
   ```

8. Access the API at `http://localhost` using the API client of your choice.

## API Endpoints

The API provides the following endpoints under the `/api/v1` prefix:

- `GET /api/v1/todos` - Get all todo items
- `POST /api/v1/todos` - Create a new todo item
- `GET /api/v1/todos/{id}` - Get a specific todo item
- `PUT /api/v1/todos/{id}` - Update a specific todo item
- `DELETE /api/v1/todos/{id}` - Delete a specific todo item
