<?php

// Set default timezone to Central European Time (CET/CEST)
date_default_timezone_set('Europe/Zagreb');

// Database configuration - use environment variables in production!
$db_config = [
    'host' => '10.0.2.26',       // Baza_Projekt's private IP
    'name' => 'task_manager',    // Database name
    'user' => 'danis',           // Database username
    'pass' => 'altumbabic',      // Database password
    'options' => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET time_zone = '+02:00'"
    ]
];

try {
    // Create PDO connection with timezone support
    $conn = new PDO(
        "mysql:host={$db_config['host']};dbname={$db_config['name']};charset=utf8mb4",
        $db_config['user'],
        $db_config['pass'],
        $db_config['options']
    );

    // Verify timezone
    $timezone = $conn->query("SELECT @@session.time_zone")->fetchColumn();
    // echo "Database timezone set to: " . $timezone; // Debug only

} catch(PDOException $e) {
    // Log error securely (in production use proper logging)
    error_log("Database connection failed: " . $e->getMessage());
    
    // Display generic error message
    die("Database connection error. Please try again later.");
}

// For debugging purposes only (remove in production)
// echo "Connected successfully. Server time: " . date('Y-m-d H:i:s');
?>