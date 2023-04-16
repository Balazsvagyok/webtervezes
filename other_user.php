<!DOCTYPE html>
<html lang="hu">


<head>
    <title>Okostelefonok</title>
    <meta charset="UTF-8" />
    <meta name="author" content="Kollár Edvárd, Szelekovszky Balázs" />
    <link rel="icon" href="images/smartphone.png" />
    <link rel="stylesheet" href="styles/style.css" />
</head>

<body style="overflow: hidden">
    <?php
    session_start();
    if (isset($_SESSION['username'])) {
        echo 'Bejelentkezve: ' . $_SESSION['username'];
    }
    ?>

    <?php include_once "header.php"; ?>

    <main>
        <div class="phone-border">
            <img src="images/phone-border.png" alt="phone-border" width="700" />

            <div class="registration">
                <form action="other_user.php" method="POST" enctype="multipart/form-data">

                    <fieldset style="border-radius: 10px; margin: 18px 0">
                        <label>FELHASZNÁLÓNÉV <br /> <input type="text" name="uname" required /></label> <br />
                        <input type="submit" name="search-btn" value="Keresés" />
                    </fieldset>
                </form>

                <div>
                    <?php
                    if (isset($_POST['search-btn'])) {
                        $file = fopen('users.txt', 'r');

                        $uname = $_POST['uname'];

                        $contents = fread($file, filesize('users.txt'));
                        fclose($file);

                        $userData = explode("\n", $contents);
                        foreach ($userData as $key => $user) {
                            $userData[$key] = explode(',', $user);

                            if ($userData[$key][1] == $uname) {
                                if ($userData[$key][0] == '-1') {
                                } else {
                                    echo '<p> Teljes név: ' . $userData[$key][0] . '</p>';
                                }
                                echo '<p> Felhasználónév: ' . $userData[$key][1] . '</p>';
                                if ($userData[$key][5] == 'f') {
                                    echo '<p> Nem: nő </p>';
                                } else {
                                    echo '<p> Nem: férfi </p>';
                                }
                                if ($userData[$key][3] != '0000-00-00') {
                                    echo '<p> Születési dátum: ' . $userData[$key][3] . '</p>';
                                }
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

    </main>

    <?php include_once "footer.php"; ?>

</body>

</html>