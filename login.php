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

    <?php include_once "header.php"; ?>

    <main>
    <div class="phone-border">
        <img src="images/phone-border.png" alt="phone-border" width="700" />

        <div class="registration">
            <form action="login_check.php" method="POST" enctype="multipart/form-data">

                <fieldset style="border-radius: 10px; margin: 18px 0">
                    <label>FELHASZNÁLÓNÉV <br /> <input type="text" name="username" required /></label> <br />
                    <label>JELSZÓ <br /> <input type="password" name="passwd" required /></label> <br />

                <input type="submit" name="login-btn" value="Bejelentkezés" />
            </form>
        </div>
    </div>
    </main>

    <?php include_once "footer.php"; ?>

</body>

</html>