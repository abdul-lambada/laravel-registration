# Laravel Registration Form

A simple registration web app built with **Laravel 10** and **Tailwind CSS 3**. Features a modern registration form, MySQL database integration, email notification using Mailtrap, and complete feature/unit tests.

## Features
- Responsive registration form (name, email, address) with validation & modern UI
- Stores data to MySQL (`registrations` table)
- Sends HTML email notification to registered user (Mailtrap by default)
- Confirmation message after successful registration
- Page to list all registrants
- Secure input handling (validation & sanitization)
- Unit & feature tests for core functionality

## Requirements
- PHP >= 8.1
- Composer
- Node.js & npm
- MySQL
- Laravel 10.x
- Tailwind CSS 3.x

## Setup Instructions
1. **Clone the repository:**
   ```sh
   git clone <repo_url>
   cd laravel-registration
   ```
2. **Install dependencies:**
   ```sh
   composer install
   npm install
   ```
3. **Copy & configure environment:**
   ```sh
   cp .env.example .env
   # Edit .env for your DB and Mailtrap credentials
   ```
4. **Generate app key:**
   ```sh
   php artisan key:generate
   ```
5. **Run migrations:**
   ```sh
   php artisan migrate
   ```
6. **Build frontend assets:**
   ```sh
   npm run build
   # or for development: npm run dev
   ```
7. **Serve the app:**
   ```sh
   php artisan serve
   ```
8. **Access the app:**
   - Registration form: [http://localhost:8000/](http://localhost:8000/)
   - List of registrants: [http://localhost:8000/registrations](http://localhost:8000/registrations)

## Email Notification Setup
- Uses [Mailtrap](https://mailtrap.io/) for development/testing.
- Set your Mailtrap credentials in `.env`:
  ```env
  MAIL_MAILER=smtp
  MAIL_HOST=sandbox.smtp.mailtrap.io
  MAIL_PORT=2525
  MAIL_USERNAME=your_mailtrap_username
  MAIL_PASSWORD=your_mailtrap_password
  MAIL_ENCRYPTION=null
  MAIL_FROM_ADDRESS="your@email.com"
  MAIL_FROM_NAME="Laravel Registration"
  ```

## Running Tests
Run all unit and feature tests:
```sh
php artisan test
```

## Folder Structure
- `app/Http/Controllers/RegistrationController.php` — Form logic & data handling
- `app/Models/Registration.php` — Eloquent model
- `app/Mail/RegistrationSuccess.php` — Mailable for notification
- `resources/views/register.blade.php` — Registration form UI
- `resources/views/registrations.blade.php` — Registrant list UI
- `resources/views/emails/registration_success.blade.php` — Email HTML template
- `tests/Feature/RegistrationTest.php` — Feature/unit tests

## Credits
- Built with Laravel 10, Tailwind CSS 3, and Mailtrap
- Developed by [Your Name]

---
Feel free to fork and customize for your own use!


If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
