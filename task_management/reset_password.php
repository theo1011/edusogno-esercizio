<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Task Management</title>
</head>

<?php
// reset_password.php

// Include database connection
require_once 'db.php';  // Ensure this path is correct

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $newPassword = password_hash($_POST['new_password'], PASSWORD_DEFAULT); // Hash the new password

    // Prepare and execute the SQL query
    $stmt = $pdo->prepare("UPDATE users SET password = ? WHERE email = ?");
    $stmt->execute([$newPassword, $email]);

    echo "Password has been reset successfully!";
}
?>

<!-- HTML reset password form -->
<form method="POST" action="">
    <input type="email" name="email" placeholder="Enter your email" required>
    <input type="password" name="new_password" placeholder="New Password" required>
    <button type="submit">Reset Password</button>
</form>
