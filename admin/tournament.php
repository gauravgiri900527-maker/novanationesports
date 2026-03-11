<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) { header("Location: login.php"); exit; }
require_once 'common/header.php';
?>

<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold">Tournaments</h1>
    <a href="manage_tournament.php" class="bg-red-600 text-white px-3 py-1 rounded text-sm font-bold"><i class="fa-solid fa-plus mr-1"></i> Add</a>
</div>

<div class="bg-gray-800 rounded-xl p-4 mb-4 border border-gray-700">
    <div class="flex justify-between items-start mb-2">
        <h2 class="font-bold text-white">BGMI Squad Battle #102</h2>
        <span class="bg-green-600 text-white text-xs px-2 py-1 rounded font-bold">OPEN</span>
    </div>
    <div class="text-sm text-gray-400 mb-3">
        <i class="fa-solid fa-users mr-1"></i> 45/100 Joined
    </div>
    <div class="flex space-x-2">
        <a href="manage_tournament.php?id=1" class="flex-1 bg-gray-700 text-center py-2 rounded text-sm font-bold hover:bg-gray-600">Edit</a>
        <button class="flex-1 bg-red-900/50 text-red-500 text-center py-2 rounded text-sm font-bold border border-red-500/30">Delete</button>
    </div>
</div>

<?php require_once 'common/bottom.php'; ?>
