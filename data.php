<?php
session_start();

if (!isset($_COOKIE['login']) || $_COOKIE['login'] != 'true') {
   header('Location: login.php');
    exit();
}
/*if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit();
}*/
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data</title>
</head>
<body>
    <h1>Halooo!</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>john.doe@example.com</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jane Smith</td>
                <td>jane.smith@example.com</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Bob Johnson</td>
                <td>bob.johnson@example.com</td>
            </tr>
        </tbody>
    </table>
    <form method="post" action="logout.php">
        <button type="submit">Logout</button>
    </form>
</body>
</html>