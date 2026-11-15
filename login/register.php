<?php
// Fishy Business - Register
require __DIR__ . '/db.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';
    $first = trim($_POST['first_name'] ?? '');
    $last = trim($_POST['last_name'] ?? '');

    if ($username === '' || $password === '' || $first === '' || $last === '') {
        $message = 'Please fill out all fields!';
    } elseif (strlen($password) < 8) {
        $message = 'Password must be at least 8 characters.';
    } else {
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $stmt = mysqli_prepare($conn, "INSERT INTO users (username, password_hash, first_name, last_name) VALUES (?, ?, ?, ?)");

        mysqli_stmt_bind_param($stmt, "ssss", $username, $hash, $first, $last);

        try {
            mysqli_stmt_execute($stmt);
            $message = 'Account created successfully!';
        } catch (mysqli_sql_exception $e) {
            if ($e->getCode() == 1062) {
                $message = 'Username already exists, please choose another!';
            } else {
                $message = 'Could not create account, please try again!';
            }
        }

        mysqli_stmt_close($stmt);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Fishy Business</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

<header>
    <h1>Fishy Business</h1>
</header>

<main>
    <div class="login-box">
        <h2>Create Account</h2>
        <p>Join Fishy Business!</p>

        <p><?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?></p>

        <form method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required maxlength="50">

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required minlength="8">

            <label for="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name" required maxlength="80">

            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name" required maxlength="80">

            <button type="submit">Create Account</button>
        </form>

        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
</main>

<footer>
    <p>Fishy Business</p>
</footer>

</body>
</html