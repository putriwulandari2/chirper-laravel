<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title . ' - Chirper' : 'Chirper' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-white shadow-sm">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <span class="text-2xl">🐦</span>
                <h1 class="text-2xl font-bold text-gray-900">Chirper</h1>
            </div>
            <div class="space-x-4">
                @auth
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="px-4 py-2 text-gray-700 hover:text-gray-900">Log Out</button>
                    </form>
                    <a href="{{ route('dashboard') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="px-4 py-2 text-gray-700 hover:text-gray-900">Log In</a>
                    <a href="{{ route('register') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Register</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        {{ $slot }}
    </main>
</body>
</html>
