<?php
require_once 'db_connect.php';

try {
    $submissions = $conn->query("SELECT * FROM user_submissions ORDER BY submission_date DESC")->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    $error = "Napaka pri pridobivanju podatkov: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Vnos Podatkov</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
        }
        
        h1 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
        }
        
        h2 {
            color: #3498db;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
            margin-top: 40px;
        }
        
        form {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            max-width: 600px;
            margin: 0 auto 30px;
        }
        
        input[type="text"] {
            width: 70%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        
        button[type="submit"] {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        
        button[type="submit"]:hover {
            background-color: #2980b9;
        }
        
        table {
            border-collapse: collapse;
            width: 100%;
            margin: 20px 0;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
            background: white;
            border-radius: 8px;
            overflow: hidden;
        }
        
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }
        
        th {
            background-color: #3498db;
            color: white;
            font-weight: 500;
        }
        
        tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        
        tr:hover {
            background-color: #f1f7fd;
        }
        
        .empty-message {
            text-align: center;
            color: #7f8c8d;
            font-style: italic;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .error-message {
            color: #e74c3c;
            background-color: #fdecea;
            padding: 15px;
            border-radius: 8px;
            border-left: 4px solid #e74c3c;
        }
        
        @media (max-width: 768px) {
            form {
                padding: 15px;
            }
            
            input[type="text"] {
                width: 100%;
                margin-bottom: 10px;
            }
            
            button[type="submit"] {
                width: 100%;
            }
            
            th, td {
                padding: 8px 10px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Vnesi nov podatek</h1>
        <form action="save_submission.php" method="post">
            <input type="text" name="user_input" placeholder="Vnesite svoj podatek..." required>
            <button type="submit">Po&scaron;lji</button>
        </form>

        <center><h2>Zgodovina vnosov</h2></center>
        <?php if(isset($error)): ?>
            <div class="error-message"><?= $error ?></div>
        <?php elseif(empty($submissions)): ?>
            <div class="empty-message">Podatkovna baza je prazna. Vnesite prvi podatek.</div>
        <?php else: ?>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>IP Naslov</th>
                            <th>Vsebina</th>
                            <th>Datum</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($submissions as $row): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['id']) ?></td>
                            <td><?= htmlspecialchars($row['ip_address']) ?></td>
                            <td><?= htmlspecialchars($row['user_input']) ?></td>
                            <td><?= htmlspecialchars($row['submission_date']) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>