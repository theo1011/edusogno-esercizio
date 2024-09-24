<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Task Management</title>
</head>

<?php
require_once 'Event.php';

class EventController {
    private $events = [];

    public function addEvent($event) {
        // Logic to add event to the database
        // Send email to attendees
    }

    public function editEvent($id, $event) {
        // Logic to edit event in the database
        // Send email to attendees
    }

    public function deleteEvent($id) {
        // Logic to delete event from the database
    }

    public function getEvents() {
        // Fetch events from database and return as array
    }
}
?>
