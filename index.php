<?php
require_once 'config.php';
// Mock session for demonstration
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
require_once 'common/header.php';
?>

<div class="mb-6">
    <h1 class="text-2xl font-bold mb-2">Upcoming Tournaments</h1>
    <p class="text-gray-400 text-sm">Join and win exciting prizes!</p>
</div>

<!-- Tournament Card -->
<div class="bg-gray-800 rounded-xl overflow-hidden shadow-lg mb-4 border border-gray-700">
    <img src="https://picsum.photos/seed/pubg/400/200" alt="Tournament Banner" class="w-full h-32 object-cover" referrerPolicy="no-referrer">
    <div class="p-4">
        <div class="flex justify-between items-start mb-2">
            <h2 class="text-lg font-bold text-white">BGMI Squad Battle #102</h2>
            <span class="bg-green-600 text-white text-xs px-2 py-1 rounded font-bold">OPEN</span>
        </div>
        
        <div class="grid grid-cols-3 gap-2 mb-4 text-center">
            <div class="bg-gray-700 p-2 rounded">
                <div class="text-xs text-gray-400">Prize Pool</div>
                <div class="font-bold text-yellow-400">₹5000</div>
            </div>
            <div class="bg-gray-700 p-2 rounded">
                <div class="text-xs text-gray-400">Per Kill</div>
                <div class="font-bold text-white">₹50</div>
            </div>
            <div class="bg-gray-700 p-2 rounded">
                <div class="text-xs text-gray-400">Entry Fee</div>
                <div class="font-bold text-white">₹20</div>
            </div>
        </div>
        
        <div class="flex justify-between items-center text-sm text-gray-400 mb-4">
            <div><i class="fa-regular fa-clock mr-1"></i> Today, 8:00 PM</div>
            <div><i class="fa-solid fa-users mr-1"></i> 45/100</div>
        </div>
        
        <form action="index.php" method="POST">
            <input type="hidden" name="tournament_id" value="1">
            <button type="button" onclick="alert('Joined successfully!')" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-lg transition duration-200">
                JOIN NOW
            </button>
        </form>
    </div>
</div>

<?php require_once 'common/bottom.php'; ?>
