<?php
if(isset($_POST['login-btn'])) {
    $file = fopen('users.txt', 'r');
    
    $username = $_POST['username'];
    $password = $_POST['passwd'];

    $success = 0;

    $lines = file('users.txt');
    foreach($lines as $line) {
        $user = explode(',', $line);
        if($user[1] == $username && password_verify($password, $user[2])) {
            $success = 1;
        }
    }
    if($success == 0) {
        echo 'A bejelentkezés sikertelen.';
        echo '<a href="login.php">
        <input type="submit" value="OK"/>
        </a>';
    }
    else {
        session_start();
        $_SESSION['username'] = $username;

        header("Location: index.php");
        exit();
    }
}
?>