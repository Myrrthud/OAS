# OAS - Laravel Online Application System

This repository contains a Laravel-style Online Application System (OAS) starter implementation.

## Features

- Public application submission form
- Server-side validation for required fields
- Status tracking (`submitted`, `reviewing`, `approved`, `rejected`)
- Admin-friendly listing page with search and filtering by status
- Detail page for each application record

## Project Structure

- `routes/web.php` - Web routes for application workflows
- `app/Models/Application.php` - Eloquent model for application records
- `app/Http/Controllers/ApplicationController.php` - Request handling, validation, and filtering logic
- `database/migrations/*create_applications_table.php` - Applications schema migration
- `resources/views/applications/*.blade.php` - Blade templates for create/list/detail pages

## Quick Start (in a full Laravel runtime)

1. Create a standard Laravel project if you do not already have one.
2. Copy these files into that project.
3. Run migrations:

   ```bash
   php artisan migrate
   ```

4. Start the development server:

   ```bash
   php artisan serve
   ```

5. Visit `http://127.0.0.1:8000/applications`.

## Notes

This environment does not currently allow downloading framework dependencies, so this repository provides the application module code and templates intended for use inside a Laravel application.
