<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'مكتبة الكتب')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-background font-sans text-text-primary">
    @include('components.header')
    <main class="container mx-auto p-6">
        <h1 class="text-3xl font-semibold mb-6">@yield('header-title')</h1>
        @yield('content')
    </main>
</body>

</html>
