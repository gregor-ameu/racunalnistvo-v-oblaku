<?php
$data = json_decode(file_get_contents("php://input"), true);
$aktivnost = $data["aktivnost"];
$znanje = $data["znanje"];
$cas = $data["cas"];

$conn = new mysqli("10.0.0.24", "kojc", "NEKO_FUL_SKRIVNO_GESLO", "moja_baza");
if ($conn->connect_error) die("Napaka pri povezavi: " . $conn->connect_error);

$stmt = $conn->prepare("INSERT INTO aktivnosti (aktivnost, znanje, cas) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $aktivnost, $znanje, $cas);
$stmt->execute();

echo "Dodano.";
$conn->close();
?>
