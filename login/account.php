<?php
session_start();

// Make sure the user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account - Fishy Business</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

<header>
    <h1>Fishy Business</h1>
</header>

<main>
    <div class="login-box">
        <h2>My Account</h2>

        <p>You are successfully logged in!</p>

        <a href="logout.php">Logout</a>
    </div>
</main>

<footer>
    <p>Fishy Business</p>
</footer>

</body>
</html>