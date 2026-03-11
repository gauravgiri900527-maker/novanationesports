<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) { header("Location: login.php"); exit; }
require_once 'common/header.php';
?>

<h1 class="text-2xl font-bold mb-6">Manage Users</h1>

<div class="bg-gray-800 rounded-xl overflow-hidden border border-gray-700">
    <div class="p-4 border-b border-gray-700 flex justify-between items-center">
        <div>
            <div class="font-bold text-white">PlayerOne</div>
            <div class="text-xs text-gray-400">Wallet: ₹150.00</div>
        </div>
        <button class="bg-gray-700 px-3 py-1 rounded text-sm text-white">Edit</button>
    </div>
    <div class="p-4 border-b border-gray-700 flex justify-between items-center">
        <div>
            <div class="font-bold text-white">ProGamer99</div>
            <div class="text-xs text-gray-400">Wallet: ₹50.00</div>
        </div>
        <button class="bg-gray-700 px-3 py-1 rounded text-sm text-white">Edit</button>
    </div>
</div>

<?php require_once 'common/bottom.php'; ?>
