    </div> <!-- End of pt-20 px-4 -->
    
    <!-- Bottom Navigation -->
    <div class="fixed bottom-0 left-0 right-0 bg-gray-800 border-t border-gray-700 flex justify-around items-center p-3 z-50">
        <a href="index.php" class="flex flex-col items-center text-gray-400 hover:text-blue-500 <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'text-blue-500' : ''; ?>">
            <i class="fa-solid fa-house text-xl mb-1"></i>
            <span class="text-xs">Home</span>
        </a>
        <a href="my_tournaments.php" class="flex flex-col items-center text-gray-400 hover:text-blue-500 <?php echo basename($_SERVER['PHP_SELF']) == 'my_tournaments.php' ? 'text-blue-500' : ''; ?>">
            <i class="fa-solid fa-gamepad text-xl mb-1"></i>
            <span class="text-xs">Matches</span>
        </a>
        <a href="wallet.php" class="flex flex-col items-center text-gray-400 hover:text-blue-500 <?php echo basename($_SERVER['PHP_SELF']) == 'wallet.php' ? 'text-blue-500' : ''; ?>">
            <i class="fa-solid fa-wallet text-xl mb-1"></i>
            <span class="text-xs">Wallet</span>
        </a>
        <a href="profile.php" class="flex flex-col items-center text-gray-400 hover:text-blue-500 <?php echo basename($_SERVER['PHP_SELF']) == 'profile.php' ? 'text-blue-500' : ''; ?>">
            <i class="fa-solid fa-user text-xl mb-1"></i>
            <span class="text-xs">Profile</span>
        </a>
    </div>
</body>
</html>
