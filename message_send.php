<!DOCTYPE html>
<html lang="hu">

<?php
session_start();
if (isset($_SESSION['username'])) {
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

<body>

    <?php include_once "header.php"; ?>

    <main>
        <div class="phone-border">
            <img src="images/phone-border.png" alt="phone-border" width="700" />

            <div class="registration">
                <fieldset style="border-radius: 10px; margin: 18px 0">
                        <form method="post" action="send_message.php">
                          <label for="cimzett">Címzett:</label>
                          <input type="text" name="cimzett" id="cimzett">
                          </br>
                          <label for="message">Üzenet:</label>
                          <textarea name="message" id="message" maxlength="250" rows="6" cols="50"></textarea>
                          </br>
                          <input type="submit" name="send_btn" value="Küldés">
                        </form>
                </fieldset>
                <p style="font-weight: bold">Üzenetek:</p>
                <iframe src="messages.php" width="400" height="900">
            </div>
        </div>

    </main>

    <?php include_once "footer.php"; ?>

</body>

</html>


