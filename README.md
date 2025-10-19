# securityHrms

A Laravel 10 application for Security HRMS.

## Requirements

- PHP >= 8.1
- Composer
- MySQL or other supported database

## Installation

1. Clone the repository
2. Install dependencies:
   ```bash
   composer install
   ```
3. Copy the environment file:
   ```bash
   cp .env.example .env
   ```
4. Generate application key:
   ```bash
   php artisan key:generate
   ```
5. Configure your database settings in `.env`
6. Run migrations:
   ```bash
   php artisan migrate
   ```

## Running the Application

Start the development server:
```bash
php artisan serve
```

The application will be available at `http://localhost:8000`

## Testing

Run the test suite:
```bash
php artisan test
```

## Laravel Version

This project uses Laravel Framework 10.49.1