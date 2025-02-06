<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MusicStream - Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
        }
    </script>
</head>
<body class="bg-gray-100 dark:bg-gray-900 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md">
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-8">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-blue-600 mb-4">Create Your Account</h1>
                <p class="text-gray-600 dark:text-gray-300">Join MusicStream and discover your next favorite song</p>
            </div>

            <form id="registrationForm" class="space-y-6">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="firstName" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">First Name</label>
                        <input 
                            type="text" 
                            id="firstName" 
                            name="firstName"
                            required 
                            class="w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white"
                            placeholder="Enter your first name"
                        >
                    </div>
                    <div>
                        <label for="lastName" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Last Name</label>
                        <input 
                            type="text" 
                            id="lastName" 
                            name="lastName"
                            required 
                            class="w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white"
                            placeholder="Enter your last name"
                        >
                    </div>
                </div>

                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Username</label>
                    <input 
                        type="text" 
                        id="username" 
                        name="username"
                        required 
                        class="w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white"
                        placeholder="Choose a unique username"
                    >
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email Address</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email"
                        required 
                        class="w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white"
                        placeholder="Enter your email"
                    >
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Password</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password"
                        required 
                        minlength="8"
                        class="w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white"
                        placeholder="Create a strong password"
                    >
                    <p class="mt-2 text-xs text-gray-500 dark:text-gray-400">
                        Password must be at least 8 characters long
                    </p>
                </div>

                <div>
                    <label for="confirmPassword" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Confirm Password</label>
                    <input 
                        type="password" 
                        id="confirmPassword" 
                        name="confirmPassword"
                        required 
                        class="w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white"
                        placeholder="Repeat your password"
                    >
                </div>

                <div class="flex items-center">
                    <input 
                        type="checkbox" 
                        id="terms" 
                        name="terms"
                        required
                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded dark:bg-gray-700"
                    >
                    <label for="terms" class="ml-2 block text-sm text-gray-900 dark:text-gray-300">
                        I agree to the 
                        <a href="#" class="text-blue-600 hover:underline">Terms of Service</a> 
                        and 
                        <a href="#" class="text-blue-600 hover:underline">Privacy Policy</a>
                    </label>
                </div>

                <div>
                    <button 
                        type="submit" 
                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                    >
                        Create Account
                    </button>
                </div>
            </form>

            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Already have an account? 
                    <a href="#" class="font-medium text-blue-600 hover:text-blue-500 dark:text-blue-400">
                        Sign in
                    </a>
                </p>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form values
            const firstName = document.getElementById('firstName').value;
            const lastName = document.getElementById('lastName').value;
            const username = document.getElementById('username').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const termsChecked = document.getElementById('terms').checked;

            // Validation
            const errors = [];

            // First Name and Last Name validation
            if (firstName.length < 2) errors.push("First name is too short");
            if (lastName.length < 2) errors.push("Last name is too short");

            // Username validation
            if (username.length < 3) errors.push("Username must be at least 3 characters");

            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) errors.push("Invalid email address");

            // Password validation
            if (password.length < 8) errors.push("Password must be at least 8 characters");
            if (password !== confirmPassword) errors.push("Passwords do not match");

            // Terms agreement
            if (!termsChecked) errors.push("You must agree to the terms of service");

            // Display or handle errors
            if (errors.length > 0) {
                alert("Please correct the following errors:\n" + errors.join("\n"));
                return;
            }

            // If all validations pass
            console.log('Registration attempted', { 
                firstName, 
                lastName, 
                username, 
                email 
            });
            alert('Registration successful! (In a real app, this would create an account)');
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