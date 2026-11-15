<?php
// Fishy Business Login Page

session_start();
require __DIR__ . '/db.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    $stmt = mysqli_prepare($conn, "SELECT user_id, username, password_hash FROM users WHERE username = ?");
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    if ($row && password_verify($password, $row['password_hash'])) {
        session_regenerate_id(true);
        $_SESSION['user_id'] = $row['user_id'];

        header('Location: account.php');
        exit;
    } else {
        $message = 'Invalid username or password.';
    }

    mysqli_stmt_close($stmt);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Fishy Business</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <header>
        <h1>Fishy Business</h1>
        <nav>
            <a href="../index.php">Home</a>
            <a href="../store.php">Store</a>
            <a href="login.php">Login</a>
            <a href="../cart.php">Cart</a>
        </nav>
    </header>

    <main>
        <div class="login-box">
            <h2>Welcome Back!</h2>
            <p>Login to your Fishy Business account</p>

            <p><?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?></p>

            <form action="login.php" method="POST">
                <label for="username">Username</label>
                <input type="text" id="username"
                       name="username" required
                       placeholder="Enter your username">

                <label for="password">Password</label>
                <input type="password" id="password"
                       name="password" required
                       placeholder="Enter your password">

                <button type="submit">Login</button>
            </form>

            <p class="register">
                Don't have an account?
                <a href="register.php">Create Account</a>
            </p>
        </div>
    </main>

    <footer>
        <p>Fishy Business</p>
    </footer>

</body>
</html>
