<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>NOVANATION ESPORTS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-color: #111827;
            color: #f3f4f6;
        }
    </style>
    <script>
        // Disable right-click
        document.addEventListener('contextmenu', event => event.preventDefault());
        
        // Disable text selection
        document.addEventListener('selectstart', event => event.preventDefault());
    </script>
</head>
<body class="bg-gray-900 text-gray-100 pb-20 font-sans">
    <!-- Top Navigation -->
    <div class="fixed top-0 left-0 right-0 bg-gray-800 p-4 flex justify-between items-center shadow-md z-50">
        <div class="text-xl font-black text-blue-500 tracking-wider">
            NOVANATION
        </div>
        <div class="flex items-center space-x-2 bg-gray-700 px-3 py-1 rounded-full">
            <i class="fa-solid fa-wallet text-yellow-400"></i>
            <span class="font-semibold">₹<?php echo isset($_SESSION['wallet']) ? number_format($_SESSION['wallet'], 2) : '0.00'; ?></span>
        </div>
    </div>
    <div class="pt-20 px-4">
