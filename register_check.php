<!DOCTYPE html>
<html lang="en">

<head>
    <title>Okostelefonok</title>
    <meta charset="UTF-8" />
    <meta name="author" content="Kollár Edvárd, Szelekovszky Balázs" />
    <link rel="icon" href="images/smartphone.png" />
    <link rel="stylesheet" href="styles/style.css" />
</head>

<?php
if (isset($_POST['submit-btn'])) {
    $file = fopen('datas/users.txt', 'a');

    $user_data = array();

    if ($_POST['full-name'] == "") {
        $full_name = "-1";
    } else {
        $full_name = $_POST['full-name'];
    }

    $username = $_POST['username'];
    $password = $_POST['passwd'];
    $password_check = $_POST['passwd-check'];

    if ($_POST['date-of-birth'] == "") {
        $date_of_birth = "0000-00-00";
    } else {
        $date_of_birth = $_POST['date-of-birth'];
    }
    $email = $_POST['email'];
    $sex = $_POST['sex'];

    if (isset($_POST['brands'])) {
        $favourites = $_POST['brands'];
    } else {
        $favourites = "-1";
    }
    $introduction = $_POST['intro'];

    $errors = array();

    if ($full_name !== "-1" && strlen($full_name) < 5) {
        $errors[] = 'A teljes név legalább 5 karakter hoszzú kell, hogy legyen, vagy üresen is hagyhatja.';
    }
    if (strlen($username) < 5) {
        $errors[] = 'A felhasználónév legalább 5 karakter hosszú kell, hogy legyen.';
    }
    if (strlen($password) < 5) {
        $errors[] = 'A jelszó legalább 5 karakter hosszú kell, hogy legyen.';
    }
    if ($password !== $password_check) {
        $errors[] = 'A kettő jelszó nem egyezik meg.';
    }
    if (strlen($email) < 1) {
        $errors[] = 'Kötelező emailt megadni.';
    }
    $lines = file('datas/users.txt');
    foreach ($lines as $line) {
        $user = explode(',', $line);
        if ($user[1] == $username) {
            $errors[] = 'A felhasználónév már foglalt.';
        }
    }

    foreach ($lines as $line) {
        $user = explode(',', $line);
        if ($user[4] == $email) {
            $errors[] = 'Az email cím már foglalt.';
        }
    }

    if (count($errors) > 0) {
        echo '<ul>';
        foreach ($errors as $error) {
            echo '<li>' . $error . '</li>';
        }
        echo '</ul>';
        echo '<form action="registration.php" method="POST" enctype="multipart/form-data">
                <button type="submit" name="ok">OK</button>
                </form>';
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        fwrite($file, "\n$full_name,$username,$hashed_password,$date_of_birth,$email,$sex,$introduction,");
        foreach ($favourites as $fav) {
            fwrite($file, "$fav-");
        }
        fclose($file);

        session_start();
        $_SESSION['username'] = $username;

        header("Location: index.php");
        exit();
    }
}
?>

</html>