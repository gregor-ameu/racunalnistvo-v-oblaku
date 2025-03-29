<?php
$conn = new mysqli("10.0.0.24", "kojc", "NEKO_FUL_SKRIVNO_GESLO", "moja_baza");
if ($conn->connect_error) die("Napaka pri povezavi: " . $conn->connect_error);

$res = $conn->query("SELECT * FROM aktivnosti ORDER BY id DESC");
$aktivnosti = [];

while ($row = $res->fetch_assoc()) {
    $aktivnosti[] = $row;
}

header("Content-Type: application/json");
echo json_encode($aktivnosti);
$conn->close();
?>
