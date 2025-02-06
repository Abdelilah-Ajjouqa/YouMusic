<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MusicStream - Authentication</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 dark:bg-gray-900 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md">
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-8">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-blue-600 mb-4">MusicStream</h1>
                <p class="text-gray-600 dark:text-gray-300">Welcome back! Please sign in to continue.</p>
            </div>

            <!-- Login Form -->
            <form id="loginForm" class="space-y-6">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email Address</label>
                    <input
                        type="email"
                        id="email"
                        required
                        class="w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white"
                        placeholder="Enter your email">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Password</label>
                    <input
                        type="password"
                        id="password"
                        required
                        class="w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white"
                        placeholder="Enter your password">
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input
                            type="checkbox"
                            id="remember"
                            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded dark:bg-gray-700">
                        <label for="remember" class="ml-2 block text-sm text-gray-900 dark:text-gray-300">
                            Remember me
                        </label>
                    </div>
                    <div class="text-sm">
                        <a href="#" class="font-medium text-blue-600 hover:text-blue-500 dark:text-blue-400">
                            Forgot password?
                        </a>
                    </div>
                </div>

                <div>
                    <button
                        type="submit"
                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Sign In
                    </button>
                </div>
            </form>

            <div class="mt-6">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300 dark:border-gray-700"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white dark:bg-gray-800 text-gray-500 dark:text-gray-400">
                            Or continue with
                        </span>
                    </div>
                </div>

                <div class="mt-6 grid grid-cols-3 gap-3">
                    <div>
                        <a href="#"
                            class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm bg-white dark:bg-gray-800 text-sm font-medium text-gray-500 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700">
                            Google
                        </a>
                    </div>
                    <div>
                        <a href="#"
                            class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm bg-white dark:bg-gray-800 text-sm font-medium text-gray-500 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700">
                            Facebook
                        </a>
                    </div>
                    <div>
                        <a href="#"
                            class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm bg-white dark:bg-gray-800 text-sm font-medium text-gray-500 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700">
                            Apple
                        </a>
                    </div>
                </div>

                <div class="mt-6 text-center">
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        Don't have an account?
                        <a href="#" class="font-medium text-blue-600 hover:text-blue-500 dark:text-blue-400">
                            Sign up
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Simple client-side validation
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            // Basic validation (you'd want more robust validation in a real app)
            if (!email || !password) {
                alert('Please fill in all fields');
                return;
            }

            // In a real app, you'd send this to a backend authentication service
            console.log('Login attempted', {
                email,
                password
            });
            alert('Login functionality to be implemented');
        });

        // Dark mode handling
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</body>

</html>