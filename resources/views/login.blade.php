<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h2 class="text-2xl font-bold text-center mb-6">Login</h2>
        <form action="#" method="POST">
            @csrf <!-- CSRF protection token -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" required 
                       class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" required 
                       class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center">
                    <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="remember" class="ml-2 block text-sm text-gray-900">Remember Me</label>
                </div>
                <div>
                    <a href="#" class="text-sm text-blue-600 hover:underline">Forgot Password?</a>
                </div>
            </div>
            <!-- Option 1: Using Anchor Tag -->
            <a href="{{ url('/staff') }}" class="w-full bg-blue-600 text-white font-semibold py-2 rounded-md text-center block hover:bg-blue-700">Login</a>

            <!-- Option 2: Using JavaScript with Button -->
            <!-- 
            <button type="button" onclick="window.location='{{ url('/staff/dashboard') }}'" class="w-full bg-blue-600 text-white font-semibold py-2 rounded-md hover:bg-blue-700">Login</button>
            -->
        </form>
        <p class="mt-4 text-center text-sm text-gray-600">
            Don't have an account? 
            <a href="#" class="text-blue-600 hover:underline">Sign up</a>
        </p>
    </div>
</div>

</body>
</html>
