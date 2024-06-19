<?php
session_start();

if (isset($_COOKIE['login']) && $_COOKIE['login'] == 'true') {
   header('Location: data.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'user' && $password == '123') {
       setcookie('login', 'true', time() + 30, '/');
       //$_SESSION['loggedin'] = true;
        header('Location: data.php');
        exit();
    } else {
        echo 'Login gagal. Silakan coba lagi.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="post" action="login.php">
        <h2>Silakan Login</h2>
        <br>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
