<!DOCTYPE html>
<html lang="hu">


<head>
    <title>Okostelefonok</title>
    <meta charset="UTF-8" />
    <meta name="author" content="Kollár Edvárd, Szelekovszky Balázs" />
    <link rel="icon" href="images/smartphone.png" />
    <link rel="stylesheet" href="styles/style.css" />
</head>

<body style="overflow-x: hidden">

    <?php
    session_start();
    if (isset($_SESSION['username'])) {
        echo 'Bejelentkezve: ' . $_SESSION['username'];
    }
    ?>

    <?php include_once "components/header.php"; ?>

    <main>
        <div class="container">
            <a href="samsung.php">
                <div class="content slidein">
                    <img src="images/samsung_logo.png" alt="Samsung logo" height="50">
                </div>
            </a>
            <a href="apple.php">
                <div class="content slidein">
                    <img src="images/apple_logo.png" alt="Apple logo" height="50" />
                </div>
            </a>
            <a href="xiaomi.php">
                <div class="content slidein">
                    <img src="images/xiaomi_logo.png" alt="Xiaomi logo" height="50">
                </div>
            </a>
            <a href="huawei.php">
                <div class="content slidein">
                    <img src="images/huawei_logo.png" alt="Huawei logo" height="50">
                </div>
            </a>
            <a href="lenovo.php">
                <div class="content slidein">
                    <img src="images/lenovo_logo.png" alt="Lenovo logo" height="50">
                </div>
            </a>
            <a href="realme.php">
                <div class="content slidein">
                    <img src="images/realme_logo.png" alt="Realme logo" height="50">
                </div>
            </a>
        </div>
        <div>
            <img class="main-left slidein-left" src="images/fooldal1.png" alt="Fooldal dizajn" height="887">
        </div>
        <div>
            <img class="main-right slidein-right" src="images/fooldal2.png" alt="Fooldal dizajn" height="620">
        </div>
    </main>

    <?php include_once "components/footer.php"; ?>

</body>

</html>