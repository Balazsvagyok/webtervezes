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
session_start();
if (isset($_SESSION['username'])) {
    echo 'Bejelentkezve: ' . $_SESSION['username'];
}

if (isset($_POST['delete-btn'])) {
    $file = fopen('datas/users.txt', 'r');

    $contents = fread($file, filesize('datas/users.txt'));
    fclose($file);

    $userData = explode("\n", $contents);
    foreach ($userData as $key => $user) {
        $userData[$key] = explode(',', $user);

        if ($userData[$key][1] == $_SESSION['username']) {
            unset($userData[$key]);
        }
    }
    $updatedContents = implode("\n", array_map(function ($user) {
        return implode(",", $user);
    }, $userData));
    $file = fopen('datas/users.txt', 'w');
    fwrite($file, $updatedContents);
    fclose($file);

    session_destroy();
    header('Location: index.php');
    exit();
}
?>

</html>