<!DOCTYPE html>
<html lang="hu">

<head>
    <title>Okostelefonok</title>
    <meta charset="UTF-8" />
    <meta name="author" content="Kollár Edvárd, Szelekovszky Balázs" />
    <link rel="icon" href="images/smartphone.png" />
    <link rel="stylesheet" href="styles/style.css" />
</head>

<body>
    <header class="topnav">
        <a <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"' ?> href="index.php">Föoldal</a>
        <a <?php if (basename($_SERVER['PHP_SELF']) == 'samsung.php') echo 'class="active"' ?> href="samsung.php">Samsung</a>
        <a <?php if (basename($_SERVER['PHP_SELF']) == 'apple.php') echo 'class="active"' ?> href="apple.php">Apple</a>
        <a <?php if (basename($_SERVER['PHP_SELF']) == 'xiaomi.php') echo 'class="active"' ?> href="xiaomi.php">Xiaomi</a>
        <a <?php if (basename($_SERVER['PHP_SELF']) == 'huawei.php') echo 'class="active"' ?> href="huawei.php">Huawei</a>
        <a <?php if (basename($_SERVER['PHP_SELF']) == 'lenovo.php') echo 'class="active"' ?> href="lenovo.php">Lenovo</a>
        <a <?php if (basename($_SERVER['PHP_SELF']) == 'realme.php') echo 'class="active"' ?> href="realme.php">Realme</a>
    
        <?php if(isset($_SESSION['username'])) { ?>
        <a href="logout.php">Kijelentkezés</a>
        <?php } else { ?>
        <a <?php if (basename($_SERVER['PHP_SELF']) == 'registration.php') echo 'class="active"' ?> href="registration.php">Regisztráció</a>
        <a <?php if (basename($_SERVER['PHP_SELF']) == 'login.php') echo 'class="active"' ?> href="login.php">Bejelentkezés</a>
        <?php } ?>
    </header>
</body>
</html>