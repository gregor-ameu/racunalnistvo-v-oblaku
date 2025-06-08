<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
header('Content-Type: application/json');

$config = include 'conf.php';
$db = $config['avtomobili'];

$conn = new mysqli($db['host'], $db['user'], $db['pass'], $db['db']);

if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(["error" => "Povezava z bazo ni uspela: " . $conn->connect_error]);
    exit();
}

$sql = "SELECT stevilka, datum_zajema, stevilo, kraj FROM prehod_avtomobilov";
$result = $conn->query($sql);

$data = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

$conn->close();
echo json_encode($data);
?>
