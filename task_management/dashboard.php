<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
</head>
<?php
session_start();
require_once 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Fetch user information
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$user_id]);
$user = $stmt->fetch();

// Fetch user events
$stmt = $pdo->prepare("SELECT * FROM events WHERE FIND_IN_SET(?, attendees)");
$stmt->execute([$user_id]);
$events = $stmt->fetchAll();
?>


<body>
    <h1>Welcome, <?php echo $user['first_name'] . ' ' . $user['last_name']; ?></h1>
    <h2>Your Events</h2>
    <ul>
        <?php foreach ($events as $event): ?>
            <li><?php echo $event['title']; ?></li>
        <?php endforeach; ?>
    </ul>
    <!-- Add Event Button -->
<a href="add_event.php" class="dashboard-button button-add">Add Event</a>

<!-- Edit Event Button -->
<a href="edit_event.php" class="dashboard-button button-edit">Edit Event</a>

<!-- Delete Event Button -->
<a href="delete_event.php" class="dashboard-button button-delete" onclick="return confirm('Are you sure you want to delete this event?');">Delete Event</a>
</body>
</html>
