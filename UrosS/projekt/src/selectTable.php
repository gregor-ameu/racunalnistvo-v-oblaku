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

// Retrieve the selected table name from the POST request
$tableName = $_POST["tableName"] ?? null;

// Validate input
if (!$tableName) {
    echo json_encode(["error" => "Manjka ime tabele!"]);
    $conn->close();
    exit;
}

// Sanitize table name to prevent SQL injection
$tableName = preg_replace('/[^a-zA-Z0-9_]/', '', $tableName);

// Check if the table exists
$result = $conn->query("SHOW TABLES LIKE '$tableName'");
if ($result->num_rows === 0) {
    echo json_encode(["error" => "Tabela z imenom '$tableName' ne obstaja!"]);
    $conn->close();
    exit;
}

// Retrieve data from the selected table
$sql = "SELECT * FROM $tableName";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data); // Return data as JSON
} else {
    echo json_encode(["message" => "Ni podatkov v tabeli '$tableName'."]);
}

$conn->close();
?>