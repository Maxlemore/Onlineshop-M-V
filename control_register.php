
<?php

    require_once("db.php");
    require_once("db_connection.php");

    $firstname = $db_link->real_escape_string($_POST["firstname"]);
    $lastname = $db_link->real_escape_string($_POST["lastname"]);
    $user = $db_link->real_escape_string($_POST["user"]);
    $mail = $db_link->real_escape_string($_POST["mail"]);
    $password = $db_link->real_escape_string($_POST["password"]);
    $password2 = $db_link->real_escape_string($_POST["password2"]);

    $control = false;
    $control = control($user,$mail,$db_link);
    if ($control = true) {
        $success =write($user,$firstname,$lastname,$mail,sha1($password),$db_link);
        if ($success == true){
                $login = read($user,sha1($password),$db_link);
            if ($login){
                $_SESSION["user"] = $user;
                header("Location: index.php?p=profil");
            } else {
                header("Location: home.php");
            }
        }
    } else {
        header("Location: index.php");
    }
?>