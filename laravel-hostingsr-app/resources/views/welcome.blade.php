<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $appName }}</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f4f7fb; color: #1f2937; }
        .container { max-width: 760px; margin: 48px auto; background: #fff; border-radius: 12px; padding: 32px; box-shadow: 0 8px 24px rgba(0,0,0,.08); }
        h1 { margin-top: 0; color: #111827; }
        .badge { display: inline-block; background: #eef2ff; color: #3730a3; padding: 6px 12px; border-radius: 999px; font-size: 14px; margin-bottom: 12px; }
        ul { padding-left: 20px; }
        code { background: #f3f4f6; padding: 2px 6px; border-radius: 4px; }
        .ok { color: #166534; font-weight: 600; }
    </style>
</head>
<body>
    <main class="container">
        <span class="badge">Laravel App Ready</span>
        <h1>{{ $appName }}</h1>
        <p class="ok">✅ Your app is running on PHP {{ $phpVersion }}.</p>
        <p>This starter page confirms deployment is successful.</p>
        <h2>Next steps</h2>
        <ul>
            <li>Update <code>.env</code> with your production settings.</li>
            <li>Set document root to <code>public/</code>.</li>
            <li>Run <code>php artisan key:generate</code> once after upload.</li>
        </ul>
    </main>
</body>
</html>
