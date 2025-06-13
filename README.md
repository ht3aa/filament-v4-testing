# Testing Filament v4

A Laravel application built with Filament v4 for testing and development purposes.

## Features

- User authentication and authorization
- Project management
- Ticket tracking system
- Role-based access control
- Project labels and statuses
- Team member management

## Requirements

- PHP 8.1 or higher
- Composer
- MySQL or PostgreSQL
- Node.js and NPM

## Quick Start

1. Clone the repository:
```bash
git clone <repository-url>
cd testing-filament-v4
```

2. Install dependencies:
```bash
composer install
npm install
```

3. Set up environment:
```bash
cp .env.example .env
php artisan key:generate
```

4. Configure your database in `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

5. Run migrations and seeders:
```bash
php artisan migrate:fresh --seed
```

## Default Users

After seeding, you can log in with these credentials:

### Admin User
- **Email**: admin@example.com
- **Password**: password

### Regular User
- **Email**: user@example.com
- **Password**: password

## Development

1. Start the Laravel development server:
```bash
php artisan serve
```

2. Start Vite for frontend assets:
```bash
npm run dev
```

The application will be available at `http://localhost:8000`

## Seeded Data

The seeder creates:
- 6 projects (1 test project + 5 additional)
- 3 members per project
- 3 tickets per project
- 2 staff members per ticket
- Predefined project roles and permissions
- Predefined project statuses and labels

## Testing

Run the test suite:
```bash
php artisan test
```

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
