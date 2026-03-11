<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) { header("Location: login.php"); exit; }
require_once '../config.php';
require_once 'common/header.php';

// Fetch statistics
$total_tournaments = 0;
$total_participants = 0;
$total_revenue = 0;

$result = $conn->query("SELECT COUNT(*) as total FROM tournaments");
if ($result && $row = $result->fetch_assoc()) {
    $total_tournaments = $row['total'];
}

$result = $conn->query("SELECT COUNT(*) as total FROM participants");
if ($result && $row = $result->fetch_assoc()) {
    $total_participants = $row['total'];
}

$result = $conn->query("SELECT SUM(t.entry_fee) as revenue FROM participants p JOIN tournaments t ON p.tournament_id = t.id");
if ($result && $row = $result->fetch_assoc()) {
    $total_revenue = $row['revenue'] ?? 0;
}
?>

<h1 class="text-2xl font-bold mb-4">Dashboard</h1>

<div class="grid grid-cols-2 gap-4 mb-6">
    <div class="bg-gray-800 p-4 rounded-xl border border-gray-700">
        <div class="text-gray-400 text-xs mb-1">Total Tournaments</div>
        <div class="text-2xl font-bold text-white"><?php echo number_format($total_tournaments); ?></div>
    </div>
    <div class="bg-gray-800 p-4 rounded-xl border border-gray-700">
        <div class="text-gray-400 text-xs mb-1">Total Participants</div>
        <div class="text-2xl font-bold text-blue-400"><?php echo number_format($total_participants); ?></div>
    </div>
    <div class="bg-gray-800 p-4 rounded-xl border border-gray-700 col-span-2">
        <div class="text-gray-400 text-xs mb-1">Total Revenue</div>
        <div class="text-3xl font-bold text-green-400">₹<?php echo number_format($total_revenue, 2); ?></div>
    </div>
</div>

<h2 class="text-lg font-bold mb-3">Quick Actions</h2>
<div class="space-y-3">
    <a href="manage_tournament.php" class="block bg-gray-800 p-4 rounded-xl border border-gray-700 flex justify-between items-center">
        <div class="flex items-center">
            <i class="fa-solid fa-plus text-red-500 mr-3 text-xl"></i>
            <span class="font-bold">Create New Tournament</span>
        </div>
        <i class="fa-solid fa-chevron-right text-gray-500"></i>
    </a>
</div>

<?php require_once 'common/bottom.php'; ?>
