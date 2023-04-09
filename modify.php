<!DOCTYPE html>
<html lang="hu">

<?php
session_start();
if(isset($_SESSION['username'])) {
    echo 'Bejelentkezve: ' . $_SESSION['username'];
}
?>

<head>
    <title>Okostelefonok</title>
    <meta charset="UTF-8" />
    <meta name="author" content="Kollár Edvárd, Szelekovszky Balázs" />
    <link rel="icon" href="images/smartphone.png" />
    <link rel="stylesheet" href="styles/style.css" />
</head>

<body style="overflow: hidden">

    <?php include_once "header.php"; ?>

    <main>
        <div class="phone-border">
            <img src="images/phone-border.png" alt="phone-border" width="700" />

            <div class="registration">
                <form action="modify_check.php" method="POST" enctype="multipart/form-data">

                    <fieldset style="border-radius: 10px; margin: 18px 0">
        
                        <label>ÚJ TELJES NÉV <br /> <input type="text" name="new_full_name" /></label> <br />
                        <label>ÚJ SZÜLETÉSI DÁTUM <br /> <input type="date" name="new_date_of_birth" min="1920-01-01" /></label> <br />
                        <label>ÚJ JELSZÓ <br /> <input type="password" name="new_passwd" required /></label> <br />
                        <label>ÚJ JELSZÓ MÉGEGYSZER <br /> <input type="password" name="new_passwd_check" required /></label> <br />

                    <input type="submit" name="modify-btn" value="Módosítás" />
                </form>
            </div>
        </div>
    </main>

    <?php include_once "footer.php"; ?>

</body>

</html>