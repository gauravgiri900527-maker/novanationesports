<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) { header("Location: login.php"); exit; }
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit;
}
require_once 'common/header.php';
?>

<h1 class="text-2xl font-bold mb-6">Settings</h1>

<div class="space-y-4 mb-6">
    <div class="bg-gray-800 p-4 rounded-xl border border-gray-700">
        <label class="block text-sm text-gray-400 mb-1">App Name</label>
        <input type="text" value="NOVANATION ESPORTS" class="w-full bg-gray-700 border border-gray-600 rounded p-2 text-white outline-none">
    </div>
    <div class="bg-gray-800 p-4 rounded-xl border border-gray-700">
        <label class="block text-sm text-gray-400 mb-1">Contact Email</label>
        <input type="email" value="support@novanation.com" class="w-full bg-gray-700 border border-gray-600 rounded p-2 text-white outline-none">
    </div>
</div>

<form action="setting.php" method="POST">
    <input type="hidden" name="logout" value="1">
    <button type="submit" class="w-full bg-red-600/20 hover:bg-red-600/30 text-red-500 border border-red-500/50 font-bold py-3 rounded-lg transition duration-200">
        <i class="fa-solid fa-right-from-bracket mr-2"></i> LOGOUT ADMIN
    </button>
</form>

<?php require_once 'common/bottom.php'; ?>
