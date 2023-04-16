<!DOCTYPE html>
<html lang="hu">


<head>
    <title>Okostelefonok</title>
    <meta charset="UTF-8" />
    <meta name="author" content="Kollár Edvárd, Szelekovszky Balázs" />
    <link rel="icon" href="images/smartphone.png" />
    <link rel="stylesheet" href="styles/style.css" />
</head>

<?php
if (isset($_POST['login-btn'])) {
    $file = fopen('datas/users.txt', 'r');

    $username = $_POST['username'];
    $password = $_POST['passwd'];

    $success = 0;

    $lines = file('datas/users.txt');
    foreach ($lines as $line) {
        $user = explode(',', $line);
        if ($user[1] == $username && password_verify($password, $user[2])) {
            $success = 1;
        }
    }
    if ($success == 0) {
        echo 'A bejelentkezés sikertelen.';
        echo '<form action="login.php" method="POST" enctype="multipart/form-data">
                <button type="submit" name="ok">OK</button>
                </form>';
    } else {
        session_start();
        $_SESSION['username'] = $username;

        header("Location: index.php");
        exit();
    }
}
?>

</html>