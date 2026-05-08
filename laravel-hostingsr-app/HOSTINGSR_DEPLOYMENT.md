# Hostingsr Deployment Guide (File Manager)

## 1) Prepare files locally

1. In your project root run:
   - `composer install --no-dev --optimize-autoloader`
   - `cp .env.example .env`
   - `php artisan key:generate`
2. Zip the full `laravel-hostingsr-app` folder.

## 2) Upload in Hostingsr File Manager

1. Open **File Manager** in Hostingsr.
2. Upload and extract the zip into your account folder.
3. Keep the project one level above `public_html` if possible.

Example structure:

```text
home/username/
  laravel-hostingsr-app/
    app/
    bootstrap/
    public/
    storage/
    vendor/
  public_html/
```

## 3) Point public web root

Preferred: set your domain document root to:

```text
.../laravel-hostingsr-app/public
```

If Hostingsr does not allow that, copy `public/*` into `public_html` and update `index.php` paths to point to the app folder.

## 4) Set permissions

Ensure these folders are writable:

- `storage/`
- `bootstrap/cache/`

Typical permission: `775` (or according to host recommendation).

## 5) Configure environment

Update `.env` with:

- `APP_ENV=production`
- `APP_DEBUG=false`
- `APP_URL=https://your-domain.com`
- Database values if you use MySQL

## 6) Final optimization commands

Run from terminal/SSH (if available):

- `php artisan config:cache`
- `php artisan route:cache`
- `php artisan view:cache`

If terminal is not available, the app still works without these optimizations.

## 7) Verify

Open your domain. You should see **Laravel App Ready** on the homepage.
