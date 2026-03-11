<?php
require_once 'config.php';
if (!isset($_SESSION['user_id'])) { header("Location: login.php"); exit; }

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit;
}

require_once 'common/header.php';
?>

<div class="mb-6 text-center">
    <div class="w-24 h-24 bg-gray-700 rounded-full mx-auto mb-3 flex items-center justify-center border-4 border-gray-800 shadow-lg">
        <i class="fa-solid fa-user text-4xl text-gray-400"></i>
    </div>
    <h1 class="text-xl font-bold"><?php echo $_SESSION['username']; ?></h1>
    <p class="text-gray-400 text-sm">Player ID: #NVN<?php echo $_SESSION['user_id']; ?>847</p>
</div>

<div class="bg-gray-800 rounded-xl overflow-hidden border border-gray-700 mb-6">
    <div class="p-4 border-b border-gray-700 flex items-center text-gray-300">
        <i class="fa-solid fa-chart-simple w-6 text-center mr-2 text-blue-500"></i>
        <span>Statistics</span>
        <i class="fa-solid fa-chevron-right ml-auto text-gray-500 text-xs"></i>
    </div>
    <div class="p-4 border-b border-gray-700 flex items-center text-gray-300">
        <i class="fa-solid fa-headset w-6 text-center mr-2 text-blue-500"></i>
        <span>Customer Support</span>
        <i class="fa-solid fa-chevron-right ml-auto text-gray-500 text-xs"></i>
    </div>
    <div class="p-4 flex items-center text-gray-300">
        <i class="fa-solid fa-file-contract w-6 text-center mr-2 text-blue-500"></i>
        <span>Terms & Conditions</span>
        <i class="fa-solid fa-chevron-right ml-auto text-gray-500 text-xs"></i>
    </div>
</div>

<form action="profile.php" method="POST">
    <input type="hidden" name="logout" value="1">
    <button type="submit" class="w-full bg-red-600/20 hover:bg-red-600/30 text-red-500 border border-red-500/50 font-bold py-3 rounded-lg transition duration-200">
        <i class="fa-solid fa-right-from-bracket mr-2"></i> LOGOUT
    </button>
</form>

<?php require_once 'common/bottom.php'; ?>
