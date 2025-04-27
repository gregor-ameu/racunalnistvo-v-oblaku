<?php
// povezava z bazo
require_once 'phpConfig.php';

$database = "projekt";

$conn = new mysqli($servername, $username, $password, $database);

// preveri povezav
if ($conn->connect_error) {
    echo "Povezava z bazo ni uspela";
    exit;
}

// Retrieve data from POST request
$tableName = $_POST["TableName"] ?? null;
$numberInput = $_POST["numberInput"] ?? null;
$nameInput = $_POST["nameInput"] ?? null;

// Validate inputs
if (!$tableName || !$numberInput || !$nameInput) {
    echo "Manjkajoči podatki!";
    $conn->close();
    exit;
}

// Dynamically fetch all table names from the database
$result = $conn->query("SHOW TABLES");
$tables = [];
while ($row = $result->fetch_array()) {
    $tables[] = $row[0];
}

// Validate table name dynamically
if (!in_array($tableName, $tables)) {
    echo "Neveljavno ime tabele!";
    $conn->close();
    exit;
}

// Pripravi SQL stavke
$stmt = $conn->prepare("INSERT INTO $tableName (numberInput, nameInput) VALUES (?, ?)");
$stmt->bind_param("ds", $numberInput, $nameInput);

// Execute query
if ($stmt->execute()) {
    echo "Podatki shranjeni!";
} else {
    echo "Podatki NISO shranjeni";
}

$stmt->close();
$conn->close();
?>