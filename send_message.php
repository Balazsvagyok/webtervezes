<!DOCTYPE html>
<html lang="hu">

<head>
    <title>Realme telefonok</title>
    <meta charset="UTF-8" />
    <meta name="author" content="Kollár Edvárd, Szelekovszky Balázs" />
    <link rel="icon" href="images/smartphone.png" />
    <link rel="stylesheet" href="styles/style.css" />
</head>

<?php
session_start();

if (isset($_POST['send_btn'])) {

    $file = fopen('datas/users.txt', 'r');

    $contents = fread($file, filesize('datas/users.txt'));
    fclose($file);

    $userData = explode("\n", $contents);

    $cimzett = $_POST['cimzett'];
    $message = $_SESSION['username'] . ','  . $cimzett . ',' . $_POST['message'] . ',' . date('Y-m-d H:i:s');

    $found = false;
    foreach ($userData as $key => $user) {
        $userData[$key] = explode(',', $user);

        if ($userData[$key][1] == $cimzett) {
            $found = true;

            $messages = file('datas/messages.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

            if (empty($messages)) {
                $messages[] = $message;
            } else {
                $key_user = array_search($cimzett, $userData);
                $messages[$key_user] .= PHP_EOL . $message;
            }

            file_put_contents('datas/messages.txt', implode(PHP_EOL, $messages));

            /*echo "Az üzenet sikeresen elküldve a következő címzetthez: " . $cimzett;
            echo '<a href="message_send.php">
                <input type="submit" value="OK"/>
                </a>';*/
            header("Location: message_send.php");
            break;
        }
    }

    if (!$found) {
        echo "A megadott címzett nem regisztrált felhasználó!";
        echo '<form action="message_send.php" method="POST" enctype="multipart/form-data">
                <button type="submit" name="ok">OK</button>
                </form>';
    }
}
?>

</html>