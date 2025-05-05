<?php
// save_submission.php
require_once 'db_connect.php';

if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['user_input'])) {
    $user_ip = $_SERVER['REMOTE_ADDR'];
    $user_input = $_POST['user_input'];
    
    try {
        $stmt = $conn->prepare("INSERT INTO user_submissions (ip_address, user_input, submission_date) VALUES (?, ?, NOW())");
        $stmt->execute([$user_ip, $user_input]);
    } catch(PDOException $e) {
        die("Greška pri spremanju: " . $e->getMessage());
    }
}

header("Location: index.php");
exit;
?>