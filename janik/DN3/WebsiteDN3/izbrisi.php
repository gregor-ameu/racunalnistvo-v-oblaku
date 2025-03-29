<?php
$data = json_decode(file_get_contents("php://input"), true);
$id = $data["id"];

$conn = new mysqli("10.0.0.24", "kojc", "NEKO_FUL_SKRIVNO_GESLO", "moja_baza");
if ($conn->connect_error) die("Napaka pri povezavi: " . $conn->connect_error);

$stmt = $conn->prepare("DELETE FROM aktivnosti WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

echo "Izbrisano.";
$conn->close();
?>
