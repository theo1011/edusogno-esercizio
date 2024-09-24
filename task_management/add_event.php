<?php
// add_event.php

// Include the Event class
require_once 'Event.php';
require_once 'db.php'; // Include the database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect form data
    $title = $_POST['title'];
    $description = $_POST['description'];
    $attendees = $_POST['attendees'];

    // Create a new Event instance
    $event = new Event($title, $description, $attendees);

    // Insert into the database
    $stmt = $pdo->prepare("INSERT INTO events (title, description, attendees) VALUES (?, ?, ?)");
    $stmt->execute([$event->title, $event->description, $event->attendees]);

    echo "Event added successfully!";
}
?>

<!-- HTML form for adding an event -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Task Management</title>
</head>

<div class="navbar">
    <div>Task Management</div>
    <div>
        <a href="dashboard.php">Dashboard</a>
        <a href="logout.php">Logout</a>
    </div>
</div>

<div class="container">
    <h1>Add New Event</h1>

    <form method="POST" action="">
        <input type="text" name="title" placeholder="Event Title" required>
        <textarea name="description" placeholder="Event Description" required></textarea>
        <input type="text" name="attendees" placeholder="Attendees (comma-separated emails)" required>
        <button type="submit">Add Event</button>
    </form>
</div>

<footer>
    &copy; 2024 Task Management Application
</footer>
