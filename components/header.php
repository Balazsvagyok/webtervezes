<header class="topnav">
    <a <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"' ?> href="index.php">Föoldal</a>
    <a <?php if (basename($_SERVER['PHP_SELF']) == 'samsung.php') echo 'class="active"' ?> href="samsung.php">Samsung</a>
    <a <?php if (basename($_SERVER['PHP_SELF']) == 'apple.php') echo 'class="active"' ?> href="apple.php">Apple</a>
    <a <?php if (basename($_SERVER['PHP_SELF']) == 'xiaomi.php') echo 'class="active"' ?> href="xiaomi.php">Xiaomi</a>
    <a <?php if (basename($_SERVER['PHP_SELF']) == 'huawei.php') echo 'class="active"' ?> href="huawei.php">Huawei</a>
    <a <?php if (basename($_SERVER['PHP_SELF']) == 'lenovo.php') echo 'class="active"' ?> href="lenovo.php">Lenovo</a>
    <a <?php if (basename($_SERVER['PHP_SELF']) == 'realme.php') echo 'class="active"' ?> href="realme.php">Realme</a>

    <?php if (isset($_SESSION['username'])) { ?>
        <a <?php if (basename($_SERVER['PHP_SELF']) == 'modify.php') echo 'class="active"' ?> href="modify.php">Adatok módosítása</a>
        <a <?php if (basename($_SERVER['PHP_SELF']) == 'other_user.php') echo 'class="active"' ?> href="other_user.php">Felhasználók megtekintése</a>
        <a href="logout.php">Kijelentkezés</a>
    <?php } else { ?>
        <a <?php if (basename($_SERVER['PHP_SELF']) == 'registration.php') echo 'class="active"' ?> href="registration.php">Regisztráció</a>
        <a <?php if (basename($_SERVER['PHP_SELF']) == 'login.php') echo 'class="active"' ?> href="login.php">Bejelentkezés</a>
    <?php } ?>
</header>