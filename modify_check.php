<?php
session_start();
if(isset($_SESSION['username'])) {
    echo 'Bejelentkezve: ' . $_SESSION['username'];
}

if(isset($_POST['modify-btn'])) {
    $file = fopen('users.txt', 'r');

    if($_POST['new_full_name'] == "") {
        $new_full_name = "-1";
    }
    else {
        $new_full_name = $_POST['new_full_name'];
    }
    if($_POST['new_date_of_birth'] == "") {
        $new_date_of_birth = "0000-00-00";
    }
    else {
        $new_date_of_birth = $_POST['new_date_of_birth'];
    }
    $new_password = $_POST['new_passwd'];
    $new_password_check = $_POST['new_passwd_check'];


    $new_errors = array();

    if($new_full_name != "-1" && strlen($new_full_name) < 5) {
        $new_errors[] = 'A teljes név legalább 5 karakter hoszzú kell, hogy legyen, vagy üresen is hagyhatja.';
    }
    if(strlen($new_password) < 5) {
        $new_errors[] = 'A jelszó legalább 5 karakter hosszú kell, hogy legyen.';
    }
    if($new_password != $new_password_check) {
        $new_errors[] = 'A kettő jelszó nem egyezik meg.';
    }

    if(count($new_errors) > 0) {
        echo '<ul>';
        foreach ($new_errors as $err) {
            echo '<li>' . $err . '</li>';
        }
        echo '</ul>';
        echo '<a href="modify.php">
        <input type="submit" value="OK"/>
        </a>';
    }
    else {
        $new_hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

        $contents = fread($file, filesize('users.txt'));
        fclose($file);

        $userData = explode("\n", $contents);
        foreach($userData as $key => $user) {
            $userData[$key] = explode(',', $user);
            
            if($userData[$key][1] == $_SESSION['username']) {
                $userData[$key][0] = $new_full_name;
                $userData[$key][2] = $new_hashed_password;
                $userData[$key][3] = $new_date_of_birth;
            }
            
        }

        $updatedContents = implode("\n", array_map(function($user) {
            return implode(",", $user);
        }, $userData));
        $file = fopen('users.txt', 'w');
        fwrite($file, $updatedContents);
        fclose($file);
    
        echo '<br>' . 'Sikeresen megváltoztatta az adatait.' . '<br>';
        echo '<a href="index.php">
        <input type="submit" value="OK"/>
        </a>';
        
    }


}
?>