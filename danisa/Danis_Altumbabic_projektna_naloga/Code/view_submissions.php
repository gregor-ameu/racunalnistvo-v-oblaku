<?php
require_once 'db_connect.php';

echo "<h1>Svi unosi korisnika</h1>";

try {
    $stmt = $conn->query("SELECT * FROM user_submissions ORDER BY submission_date DESC");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo "<table border='1'>";
    echo "<tr><th>IP Adresa</th><th>Unos</th><th>Datum</th></tr>";
    
    foreach ($results as $row) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['ip_address']) . "</td>";
        echo "<td>" . htmlspecialchars($row['user_input']) . "</td>";
        echo "<td>" . htmlspecialchars($row['submission_date']) . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
    
} catch(PDOException $e) {
    echo "Greška: " . $e->getMessage();
}

$conn = null;
?>