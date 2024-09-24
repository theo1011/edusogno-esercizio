
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Task Management</title>
</head>

<body>
    <h1>Welcome to Task Management App</h1>
    <div class="login-container">
        <h2>Login</h2>
        
        <!-- Display error message if login fails -->
        <?php if (isset($error)): ?>
            <p class="feedback-message"><?php echo $error; ?></p>
        <?php endif; ?>

        <form action="login.php" method="POST">
            <input type="text" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>

            <button type="submit">Login</button>
        </form>

        <!-- Link to registration page -->
        <p>Don't have an account? <a href="register.php">Register here</a></p>
    </div>
</body>
</html>
