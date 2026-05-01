<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chirper</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex flex-col bg-gray-50">

<header class="flex justify-between items-center px-10 py-4 bg-white border-b border-gray-200">
    <div class="font-bold text-lg">Chirper</div>
    <div class="flex gap-4 text-sm">
        <a href="#">Sign in</a>
        <a href="#" class="px-3 py-1 border border-gray-900 rounded-md font-medium">
            Sign up
        </a>
    </div>
</header>

<main class="flex-1 flex items-center justify-center">
    <div class="bg-white px-10 py-8 rounded-xl shadow-lg text-center max-w-md">
        <h1 class="text-lg font-semibold mb-2">Welcome to Chirper!</h1>
        <p class="text-sm text-gray-500">
            This is your brand new Laravel application.
            Time to make it sing (or chirp)!
        </p>
    </div>
</main>

<footer class="text-center text-xs text-gray-500 py-4 border-t border-gray-200">
    © 2026 Chirper · Built with Laravel and 🩷 by Syifaulmuna (220170193)
</footer>

</body>
</html>