<?php
// Include database configuration
require_once 'phpConfig.php';

$database = "projekt";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    echo json_encode(["error" => "Povezava z bazo ni uspela"]);
    exit;
}

// Query to get all table names
$sql = "SHOW TABLES";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $tables = [];
    while ($row = $result->fetch_array()) {
        $tables[] = $row[0]; // Fetch the table name
    }
    echo json_encode($tables); // Return table names as JSON
} else {
    echo json_encode(["message" => "Ni tabel v bazi podatkov."]);
}

$conn->close();
?>