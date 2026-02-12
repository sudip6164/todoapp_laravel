<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <x-navbar></x-navbar>

    <main>
        {{ $slot }}
    </main>

    <x-footer></x-footer>
</body>
</html>