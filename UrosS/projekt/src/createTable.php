<?php
// Include database configuration
require_once 'phpConfig.php';

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    echo "Povezava z bazo ni uspela";
    exit;
}

// Retrieve table name from POST request
$tableName = $_POST["tableName"] ?? null;

// Validate input
if (!$tableName) {
    echo "Manjka ime tabele!";
    $conn->close();
    exit;
}

// Sanitize table name to prevent SQL injection
$tableName = preg_replace('/[^a-zA-Z0-9_]/', '', $tableName);

// Check if the table already exists
$result = $conn->query("SHOW TABLES LIKE '$tableName'");
if ($result->num_rows > 0) {
    echo "Tabela z imenom '$tableName' že obstaja!";
    $conn->close();
    exit;
}

// Create the new table
$sql = "CREATE TABLE $tableName (
    id INT AUTO_INCREMENT PRIMARY KEY,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    numberInput DOUBLE NOT NULL,
    nameInput VARCHAR(255) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabela '$tableName' je bila uspešno ustvarjena!";
} else {
    echo "Napaka pri ustvarjanju tabele: " . $conn->error;
}

$conn->close();
?>