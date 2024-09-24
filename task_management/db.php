<?php
// db.php
$host = 'localhost';
$db = 'task_management';  // Replace with your database name
$user = 'root';           // Replace with your MySQL username
$password = '';           // Replace with your MySQL password (default is empty in XAMPP)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
