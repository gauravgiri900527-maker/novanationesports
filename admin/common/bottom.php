    </div>
    
    <div class="fixed bottom-0 left-0 right-0 bg-gray-800 border-t border-gray-700 flex justify-around items-center p-3 z-50">
        <a href="index.php" class="flex flex-col items-center text-gray-400 hover:text-red-500 <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'text-red-500' : ''; ?>">
            <i class="fa-solid fa-chart-line text-xl mb-1"></i>
            <span class="text-xs">Dashboard</span>
        </a>
        <a href="tournament.php" class="flex flex-col items-center text-gray-400 hover:text-red-500 <?php echo basename($_SERVER['PHP_SELF']) == 'tournament.php' || basename($_SERVER['PHP_SELF']) == 'manage_tournament.php' ? 'text-red-500' : ''; ?>">
            <i class="fa-solid fa-trophy text-xl mb-1"></i>
            <span class="text-xs">Tournaments</span>
        </a>
        <a href="user.php" class="flex flex-col items-center text-gray-400 hover:text-red-500 <?php echo basename($_SERVER['PHP_SELF']) == 'user.php' ? 'text-red-500' : ''; ?>">
            <i class="fa-solid fa-users text-xl mb-1"></i>
            <span class="text-xs">Users</span>
        </a>
        <a href="setting.php" class="flex flex-col items-center text-gray-400 hover:text-red-500 <?php echo basename($_SERVER['PHP_SELF']) == 'setting.php' ? 'text-red-500' : ''; ?>">
            <i class="fa-solid fa-gear text-xl mb-1"></i>
            <span class="text-xs">Settings</span>
        </a>
    </div>
</body>
</html>
