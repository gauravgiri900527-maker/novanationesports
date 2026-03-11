<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Mock login for demonstration
    $_SESSION['user_id'] = 1;
    $_SESSION['username'] = $username;
    $_SESSION['wallet'] = 150.00;
    
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Login - NOVANATION ESPORTS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
    </style>
    <script>
        document.addEventListener('contextmenu', event => event.preventDefault());
        document.addEventListener('selectstart', event => event.preventDefault());
    </script>
</head>
<body class="bg-gray-900 text-gray-100 h-screen flex flex-col justify-center items-center p-4">
    
    <div class="w-full max-w-md bg-gray-800 rounded-2xl p-8 shadow-2xl border border-gray-700">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-black text-blue-500 tracking-widest mb-2">NOVANATION</h1>
            <p class="text-gray-400 text-sm font-bold tracking-widest">ESPORTS</p>
        </div>
        
        <form action="login.php" method="POST" class="space-y-6">
            <div>
                <label class="block text-sm font-medium text-gray-400 mb-1">Username</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fa-solid fa-user text-gray-500"></i>
                    </div>
                    <input type="text" name="username" required class="w-full bg-gray-700 border border-gray-600 rounded-lg py-3 pl-10 px-4 text-white focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                </div>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-400 mb-1">Password</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fa-solid fa-lock text-gray-500"></i>
                    </div>
                    <input type="password" name="password" required class="w-full bg-gray-700 border border-gray-600 rounded-lg py-3 pl-10 px-4 text-white focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                </div>
            </div>
            
            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-lg transition duration-200 shadow-lg shadow-blue-500/30">
                LOGIN
            </button>
        </form>
        
        <div class="mt-6 text-center text-sm text-gray-400">
            Don't have an account? <a href="#" class="text-blue-500 hover:text-blue-400 font-semibold">Register</a>
        </div>
    </div>

</body>
</html>
