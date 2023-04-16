<?php
session_start();

if (isset($_POST['send_btn'])) {

    $file = fopen('users.txt', 'r');

    $contents = fread($file, filesize('users.txt'));
    fclose($file);

    $userData = explode("\n", $contents);

    $cimzett = $_POST['cimzett'];
    $message = $_SESSION['username'] . ','  . $cimzett . ',' . $_POST['message'] . ',' . date('Y-m-d H:i:s');

    $found = false;
    foreach ($userData as $key => $user) {
        $userData[$key] = explode(',', $user);

        if ($userData[$key][1] == $cimzett) {
            $found = true;

            $messages = file('messages.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

            if (empty($messages)) {
                $messages[] = $message;
            } else {
                $key_user = array_search($cimzett, $userData);
                $messages[$key_user] .= PHP_EOL . $message;
            }

            file_put_contents('messages.txt', implode(PHP_EOL, $messages));

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
        echo '<a href="message_send.php">
            <input type="submit" value="OK"/>
            </a>';
    }
}
?>