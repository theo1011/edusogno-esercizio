<?php
session_start();
require_once 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$event_id = $_GET['id'];

$stmt = $pdo->prepare("SELECT * FROM events WHERE id = ?");
$stmt->execute([$event_id]);
$event = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $attendees = $_POST['attendees'];

    // Update the event
    $stmt = $pdo->prepare("UPDATE events SET title = ?, description = ?, attendees = ? WHERE id = ?");
    $stmt->execute([$title, $description, $attendees, $event_id]);

    // Send email to attendees (implement email sending here)

    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Edit Event</title>
</head>
<body>
    <h1>Edit Event</h1>
    <form method="POST">
        <label for="title">Event Title:</label>
        <input type="text" name="title" value="<?php echo $event['title']; ?>" required>
        <label for="description">Event Description:</label>
        <textarea name="description" required><?php echo $event['description']; ?></textarea>
        <label for="attendees">Attendees (user IDs, comma-separated):</label>
        <input type="text" name="attendees" value="<?php echo $event['attendees']; ?>" required>
        <button type="submit">Update Event</button>
    </form>
    <a href="dashboard.php">Back to Dashboard</a>
</body>
</html>
