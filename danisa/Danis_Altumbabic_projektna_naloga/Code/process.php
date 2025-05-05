<?php
require_once 'db_connect.php';

// Dohvati IP adresu korisnika
$user_ip = $_SERVER['REMOTE_ADDR'];
$user_input = $_POST['user_input'];

// Spremi u bazu podataka
try {
    $stmt = $conn->prepare("INSERT INTO user_submissions (ip_address, user_input, submission_date) VALUES (?, ?, NOW())");
    $stmt->execute([$user_ip, $user_input]);
    
    echo "<h2>Hvala na unosu!</h2>";
    echo "<p>Unijeli ste: " . htmlspecialchars($user_input) . "</p>";
    echo "<p>Vaša IP adresa: " . htmlspecialchars($user_ip) . "</p>";
    echo "<p><a href='view_submissions.php'>Pogledaj sve unose</a></p>";
    
} catch(PDOException $e) {
    echo "Greška: " . $e->getMessage();
}

$conn = null;
?>