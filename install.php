<?php
require_once 'config.php';

$sql = "
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    wallet DECIMAL(10,2) DEFAULT 0.00,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS tournaments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    game VARCHAR(50) NOT NULL,
    entry_fee DECIMAL(10,2) NOT NULL,
    prize_pool DECIMAL(10,2) NOT NULL,
    per_kill DECIMAL(10,2) NOT NULL,
    max_players INT NOT NULL,
    start_time DATETIME NOT NULL,
    status ENUM('open', 'closed', 'completed') DEFAULT 'open'
);

CREATE TABLE IF NOT EXISTS participants (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    tournament_id INT NOT NULL,
    game_username VARCHAR(50) NOT NULL,
    joined_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
";

if ($conn->multi_query($sql)) {
    echo "Database tables created successfully!";
} else {
    echo "Error creating tables: " . $conn->error;
}
?>
