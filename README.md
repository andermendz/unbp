# UNBP Project

## About

This is a Laravel-based web application that uses PostgreSQL as its database system.

## Requirements

- PHP 8.1 or higher
- Composer
- PostgreSQL
- Node.js & NPM

## Setup Instructions

### 1. Clone the Repository

```bash
git clone <repository-url>
cd unbp
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Install JavaScript Dependencies

```bash
npm install
```

### 4. Environment Configuration

```bash
cp .env.example .env
php artisan key:generate
```

Update the `.env` file with your PostgreSQL database credentials:

```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=unbp
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 5. Database Setup

Create a PostgreSQL database named `unbp`:

```bash
psql -U postgres
CREATE DATABASE unbp;
\q
```

Run migrations and seed the database:

```bash
php artisan migrate
php artisan db:seed
```

### 6. Build Assets

```bash
npm run build
```

### 7. Start the Development Server

```bash
php artisan serve
```

The application will be available at http://localhost:8000

## Seeded Users

The application comes with pre-configured user accounts for testing:

### Regular User
- **Name**: Test User
- **Email**: test@example.com
- **Password**: password (default from factory)

### Admin User
- **Name**: Admin User
- **Email**: admin@admin.com
- **Password**: admin
- **Role**: admin

## Troubleshooting

### Database Connection Issues

If you encounter database connection issues, make sure:

1. PostgreSQL service is running
2. Your database credentials in `.env` are correct
3. The database exists and is accessible

### Permission Issues

If you encounter permission issues with storage or cache:

```bash
chmod -R 775 storage bootstrap/cache
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
