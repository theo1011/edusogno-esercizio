<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Task Management</title>
</head>

<?php
class User {
    public $id;
    public $first_name;
    public $last_name;
    public $email;
    public $password;

    public function __construct($first_name, $last_name, $email, $password) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }
}
?>
