<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin123') {
        $_SESSION['admin_logged_in'] = true;
        header("Location: index.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Admin Login</title>
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
    <div class="w-full max-w-md bg-gray-800 rounded-2xl p-8 shadow-2xl border border-red-900/50">
        <div class="text-center mb-8">
            <h1 class="text-2xl font-bold text-red-500 mb-2"><i class="fa-solid fa-shield-halved mr-2"></i>ADMIN LOGIN</h1>
        </div>
        <form action="login.php" method="POST" class="space-y-6">
            <div>
                <input type="text" name="username" placeholder="Admin Username" required class="w-full bg-gray-700 border border-gray-600 rounded-lg py-3 px-4 text-white focus:outline-none focus:border-red-500">
            </div>
            <div>
                <input type="password" name="password" placeholder="Password" required class="w-full bg-gray-700 border border-gray-600 rounded-lg py-3 px-4 text-white focus:outline-none focus:border-red-500">
            </div>
            <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-3 rounded-lg transition duration-200">
                LOGIN
            </button>
        </form>
    </div>
</body>
</html>
