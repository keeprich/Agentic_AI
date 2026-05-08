# Simple Laravel App for Hostingsr

This is a ready-to-upload Laravel starter app designed for shared hosting deployment.

## Requirements

- PHP 8.2+ with common Laravel extensions
- Composer support on server (or run Composer locally before upload)
- MySQL (optional for this starter page)

## Local check

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan test
```

## Deploy on Hostingsr (File Manager)

Follow the full steps in [`HOSTINGSR_DEPLOYMENT.md`](HOSTINGSR_DEPLOYMENT.md).
