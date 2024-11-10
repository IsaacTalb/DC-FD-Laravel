<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Class')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <header class="bg-blue-600 text-white shadow p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Laravel Class</h1>
            <nav class="space-x-4">
                <a href="{{ route('home') }}" class="hover:underline">Home</a>
                <a href="{{ route('about') }}" class="hover:underline">About</a>
                <a href="#" class="hover:underline">Courses</a>
                <a href="#" class="hover:underline">Contact</a>
            </nav>
        </div>
    </header>

    <div class="container mx-auto mb-6 flex mt-6">
        <!-- Sidebar -->
        <aside class="w-1/4 bg-white h-2/5 shadow p-4">
            <h2 class="text-xl font-semibold mb-4">Navigation</h2>
            <ul>
                <li><a href="#" class="block py-2 hover:bg-blue-500 hover:text-white">Dashboard</a></li>
                <li><a href="#" class="block py-2 hover:bg-blue-500 hover:text-white">Profile</a></li>
                <li><a href="#" class="block py-2 hover:bg-blue-500 hover:text-white">Settings</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="w-3/4 p-6">
            @yield('content')
        </main>
    </div>

    <!-- Footer -->
    <footer class="bg-blue-600 text-white p-4 text-center">
            &copy; 2023 Laravel Class. All rights reserved.
    </footer>
</body>
</html>
