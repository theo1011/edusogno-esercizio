<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Task Management</title>
</head>

<?php
require_once 'Event.php';  // Ensure the correct path to Event.php

// Your database connection file
require_once 'db.php';
// require_once 'classes/Event.php';

// Event.php
class Event {
    public $title;
    public $description;
    public $attendees;

    public function __construct($title, $description, $attendees) {
        $this->title = $title;
        $this->description = $description;
        $this->attendees = $attendees;
    }

    // You can add more methods here if needed, like a method to display the event.
    public function displayEvent() {
        echo "Title: " . $this->title . "<br>";
        echo "Description: " . $this->description . "<br>";
        echo "Attendees: " . $this->attendees . "<br>";
    }
}
?>
