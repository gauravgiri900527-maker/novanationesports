<?php
require_once 'config.php';
if (!isset($_SESSION['user_id'])) { header("Location: login.php"); exit; }
require_once 'common/header.php';
?>

<div class="mb-6">
    <h1 class="text-2xl font-bold mb-2">My Tournaments</h1>
</div>

<div class="bg-gray-800 rounded-xl p-4 mb-4 border border-gray-700">
    <div class="flex justify-between items-center mb-3">
        <h2 class="font-bold text-white">BGMI Squad Battle #102</h2>
        <span class="bg-yellow-600 text-white text-xs px-2 py-1 rounded font-bold">UPCOMING</span>
    </div>
    <div class="text-sm text-gray-400 mb-3">
        <i class="fa-regular fa-clock mr-1"></i> Today, 8:00 PM
    </div>
    <div class="bg-gray-700 p-3 rounded-lg mb-3">
        <div class="text-xs text-gray-400 mb-1">Room ID & Password</div>
        <div class="font-mono text-sm text-white">Will be shared 15 mins before start</div>
    </div>
</div>

<?php require_once 'common/bottom.php'; ?>
