# Security HRMS

Human Resources Management System (HRMS) built with Laravel for managing employee data.

## Features

- Complete employee management system with comprehensive user profiles
- Support for both English and Arabic names
- Employee photo management (personal photo, ID front and back)
- Track employee status (HR, data checked, photo done, ID done, etc.)
- Full CRUD operations for employee records
- Responsive UI with RTL (Right-to-Left) support for Arabic
- File upload support for documents and photos

## User Fields

The system includes the following fields for each employee:

- Basic Information: Email, Password, English Name, Arabic Name
- Personal Details: National ID, Birth Date, Address
- Company Information: Company, Company Code, Work Type, Location, Job Title, VP
- Contact: Telephone, Telephone 2
- Dates: Start Date, Leave Date, Birth Date
- Education & Area: Education, Area
- Documents: Personal Photo, National ID Front, National ID Back
- Status Flags: HR, Data Checked, Photo Done, ID Done, All Things Done, Out
- Additional: Reason of Leaving, Notes

## Installation

1. Clone the repository:
```bash
git clone https://github.com/emadalriada/securityHrms.git
cd securityHrms
```

2. Install dependencies:
```bash
composer install
npm install
```

3. Copy the `.env.example` file to `.env`:
```bash
cp .env.example .env
```

4. Generate application key:
```bash
php artisan key:generate
```

5. Configure your database in `.env` file (SQLite is configured by default)

6. Run migrations:
```bash
php artisan migrate
```

7. Create storage symlink:
```bash
php artisan storage:link
```

8. (Optional) Seed database with sample data:
```bash
php artisan db:seed --class=UserSeeder
```

9. Start the development server:
```bash
php artisan serve
```

10. Visit `http://localhost:8000` in your browser

## Usage

### Managing Employees

- **View All Employees**: Navigate to the home page to see a list of all employees
- **Add New Employee**: Click "إضافة موظف جديد" button to create a new employee record
- **Edit Employee**: Click "تعديل" next to any employee in the list
- **View Details**: Click "عرض" to see complete employee information
- **Delete Employee**: Click "حذف" to remove an employee (confirmation required)

### Sample Login

If you seeded the database, you can use these credentials:
- Email: `admin@example.com`
- Password: `password`

## Technology Stack

- Laravel 12.x
- PHP 8.3+
- SQLite (default) / MySQL
- Tailwind CSS
- Blade Templates

## File Storage

Employee photos and documents are stored in `storage/app/public` and are accessible via the `/storage` URL after running `php artisan storage:link`.

## License

This project is open-sourced software.
