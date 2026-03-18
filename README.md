# Grace Medical Clinic Website

Grace Medical Clinic is a responsive multi-page clinic website built with CodeIgniter 4 and Tailwind CSS.
It presents the clinic profile, available services, doctor information, and contact details for patients.

## Tech Stack

- PHP 8.1+
- CodeIgniter 4
- Tailwind CSS (CDN)
- Font Awesome (CDN)
- Vanilla JavaScript

## Features

- Responsive desktop/mobile layout
- Collapsible sidebar navigation
- Floating WhatsApp quick-contact button
- Dedicated pages for:
  - Home
  - About
  - Services
  - Doctors
  - Contact
- Google Maps embed and opening hours on contact page

## Application Routes

Defined in `app/Config/Routes.php`:

- `/` -> `Home::index`
- `/about` -> `About::index`
- `/services` -> `Services::index`
- `/doctors` -> `Doctors::index`
- `/contact` -> `Contact::index`

## Project Structure

Key files used by this project:

- `app/Controllers/Home.php`
- `app/Controllers/about.php`
- `app/Controllers/services.php`
- `app/Controllers/doctors.php`
- `app/Controllers/contact.php`
- `app/Views/header.php`
- `app/Views/navbar.php`
- `app/Views/home.php`
- `app/Views/about.php`
- `app/Views/services.php`
- `app/Views/doctors.php`
- `app/Views/contact.php`
- `app/Views/footer.php`
- `public/assets/css/style.css`
- `public/assets/js/main.js`

## Local Setup

1. Install dependencies:

	```bash
	composer install
	```

2. Create environment file:

	```bash
	copy env .env
	```

3. Update `.env` values as needed:

	- `app.baseURL` (example: `http://localhost:8080/`)
	- Database settings if you add data-backed features

4. Start the development server:

	```bash
	php spark serve
	```

5. Open the app:

	- `http://localhost:8080`

## Running Tests

Run test suite using Composer:

```bash
composer test
```

Or run PHPUnit directly:

```bash
vendor\\bin\\phpunit
```

## Deployment Notes

- Web server document root must point to the `public/` directory.
- Do not expose the project root directly.
- In production, set:
  - `CI_ENVIRONMENT = production`
  - A secure `app.baseURL`

## Planned Improvements

- Add real appointment booking form with backend validation
- Add admin panel for updating doctors and services
- Add database-driven content management
- Add automated UI and feature tests

## License

MIT
