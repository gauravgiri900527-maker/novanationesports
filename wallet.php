<?php
require_once 'config.php';
if (!isset($_SESSION['user_id'])) { header("Location: login.php"); exit; }
require_once 'common/header.php';
?>

<div class="mb-6">
    <h1 class="text-2xl font-bold mb-2">My Wallet</h1>
</div>

<div class="bg-gradient-to-r from-blue-900 to-blue-800 rounded-2xl p-6 mb-6 shadow-lg border border-blue-700">
    <div class="text-blue-200 text-sm mb-1">Total Balance</div>
    <div class="text-4xl font-black text-white mb-4">₹<?php echo isset($_SESSION['wallet']) ? number_format($_SESSION['wallet'], 2) : '0.00'; ?></div>
    
    <div class="flex space-x-3">
        <button class="flex-1 bg-green-600 hover:bg-green-700 text-white font-bold py-2 rounded-lg text-sm">
            <i class="fa-solid fa-plus mr-1"></i> Add Money
        </button>
        <button class="flex-1 bg-gray-700 hover:bg-gray-600 text-white font-bold py-2 rounded-lg text-sm border border-gray-600">
            <i class="fa-solid fa-building-columns mr-1"></i> Withdraw
        </button>
    </div>
</div>

<h2 class="text-lg font-bold mb-3">Recent Transactions</h2>
<div class="space-y-3">
    <div class="bg-gray-800 p-4 rounded-xl border border-gray-700 flex justify-between items-center">
        <div class="flex items-center">
            <div class="w-10 h-10 rounded-full bg-red-900/50 text-red-500 flex items-center justify-center mr-3">
                <i class="fa-solid fa-arrow-down"></i>
            </div>
            <div>
                <div class="font-bold text-sm">Joined Match #102</div>
                <div class="text-xs text-gray-400">Today, 2:30 PM</div>
            </div>
        </div>
        <div class="font-bold text-red-400">-₹20</div>
    </div>
    
    <div class="bg-gray-800 p-4 rounded-xl border border-gray-700 flex justify-between items-center">
        <div class="flex items-center">
            <div class="w-10 h-10 rounded-full bg-green-900/50 text-green-500 flex items-center justify-center mr-3">
                <i class="fa-solid fa-arrow-up"></i>
            </div>
            <div>
                <div class="font-bold text-sm">Added Money</div>
                <div class="text-xs text-gray-400">Yesterday</div>
            </div>
        </div>
        <div class="font-bold text-green-400">+₹100</div>
    </div>
</div>

<?php require_once 'common/bottom.php'; ?>
