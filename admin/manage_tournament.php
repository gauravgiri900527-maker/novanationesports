<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) { header("Location: login.php"); exit; }
require_once 'common/header.php';
?>

<div class="mb-6 flex items-center">
    <a href="tournament.php" class="mr-3 text-gray-400 hover:text-white"><i class="fa-solid fa-arrow-left"></i></a>
    <h1 class="text-2xl font-bold">Add Tournament</h1>
</div>

<form action="tournament.php" method="POST" class="space-y-4">
    <div>
        <label class="block text-sm text-gray-400 mb-1">Title</label>
        <input type="text" name="title" class="w-full bg-gray-800 border border-gray-700 rounded p-3 text-white focus:border-red-500 outline-none">
    </div>
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-sm text-gray-400 mb-1">Entry Fee (₹)</label>
            <input type="number" name="entry_fee" class="w-full bg-gray-800 border border-gray-700 rounded p-3 text-white focus:border-red-500 outline-none">
        </div>
        <div>
            <label class="block text-sm text-gray-400 mb-1">Prize Pool (₹)</label>
            <input type="number" name="prize_pool" class="w-full bg-gray-800 border border-gray-700 rounded p-3 text-white focus:border-red-500 outline-none">
        </div>
        <div>
            <label class="block text-sm text-gray-400 mb-1">Per Kill (₹)</label>
            <input type="number" name="per_kill" class="w-full bg-gray-800 border border-gray-700 rounded p-3 text-white focus:border-red-500 outline-none">
        </div>
        <div>
            <label class="block text-sm text-gray-400 mb-1">Max Players</label>
            <input type="number" name="max_players" class="w-full bg-gray-800 border border-gray-700 rounded p-3 text-white focus:border-red-500 outline-none">
        </div>
    </div>
    <div>
        <label class="block text-sm text-gray-400 mb-1">Start Time</label>
        <input type="datetime-local" name="start_time" class="w-full bg-gray-800 border border-gray-700 rounded p-3 text-white focus:border-red-500 outline-none">
    </div>
    
    <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-3 rounded-lg mt-4">
        SAVE TOURNAMENT
    </button>
</form>

<?php require_once 'common/bottom.php'; ?>
