<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MusicStream - Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 dark:bg-gray-900 min-h-screen">
    <!-- Header -->
    <header class="bg-white dark:bg-gray-800 shadow-md">
        <nav class="container mx-auto px-4 py-4 flex items-center justify-between">
            <div class="flex items-center space-x-8">
                <h1 class="text-2xl font-bold text-blue-600">MusicStream</h1>
                <div class="hidden md:flex space-x-6">
                    <a href="#" class="text-gray-700 dark:text-gray-200 hover:text-blue-600">Home</a>
                    <a href="#" class="text-gray-700 dark:text-gray-200 hover:text-blue-600">Browse</a>
                    <a href="#" class="text-gray-700 dark:text-gray-200 hover:text-blue-600">Dashboard</a>
                </div>
            </div>

            <div class="flex items-center space-x-4">
                <div class="relative">
                    <input type="search"
                        class="bg-gray-100 dark:bg-gray-700 px-4 py-2 rounded-full w-64 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Search for songs, artists...">
                </div>
                <a href="../Views/login.php" class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700">Login</a>
                <a href="../Views/register.php" class="bg-white text-blue-600 px-6 py-2 rounded-full hover:bg-blue-700 hover:text-white">Register</a>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-6xl font-bold mb-6">Your Music, Your Way</h2>
            <p class="text-xl mb-8">Stream millions of songs and podcasts, anywhere you go.</p>
            <button class="bg-white text-blue-600 px-8 py-3 rounded-full font-bold hover:bg-gray-100">
                Start Free Trial
            </button>
        </div>
    </section>

    <!-- Featured Playlists -->
    <section class="container mx-auto px-4 py-12">
        <h3 class="text-2xl font-bold mb-6 dark:text-white">Featured Playlists</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Playlist Cards -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
                <img src="/api/placeholder/400/200" alt="Playlist Cover" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h4 class="font-bold text-lg mb-2 dark:text-white">Top Hits 2025</h4>
                    <p class="text-gray-600 dark:text-gray-300">50 songs • 2.5M likes</p>
                    <button class="mt-4 w-full bg-blue-600 text-white py-2 rounded-full hover:bg-blue-700">
                        Play Now
                    </button>
                </div>
            </div>
            <!-- More playlist cards... -->
        </div>
    </section>

    <!-- Top Artists -->
    <section class="container mx-auto px-4 py-12">
        <h3 class="text-2xl font-bold mb-6 dark:text-white">Top Artists</h3>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
            <!-- Artist Cards -->
            <div class="text-center">
                <img src="/api/placeholder/200/200" alt="Artist" class="w-32 h-32 rounded-full mx-auto mb-4">
                <h4 class="font-bold dark:text-white">Artist Name</h4>
                <p class="text-gray-600 dark:text-gray-400">1.2M followers</p>
            </div>
            <!-- More artist cards... -->
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-12">
        <div class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h4 class="font-bold text-lg mb-4">MusicStream</h4>
                    <p class="text-gray-400">Your ultimate music streaming platform</p>
                </div>
                <div>
                    <h4 class="font-bold text-lg mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contact</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Careers</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-lg mb-4">Legal</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Terms of Service</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Cookie Policy</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-lg mb-4">Follow Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">Facebook</a>
                        <a href="#" class="text-gray-400 hover:text-white">Twitter</a>
                        <a href="#" class="text-gray-400 hover:text-white">Instagram</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>