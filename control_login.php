<?php

    require_once("db.php");
    require_once("db_connection.php");
    $user = $db_link->real_escape_string($_POST["user"]);
    $password = $db_link->real_escape_string($_POST["password"]);


    if ($control = true) {
        $success = read($user,sha1($password),$db_link);
        if ($success){
            if (!isset($_SESSION["user"])){
                $_SESSION["user"] = $user;
                    }
            header("Location: index.php?p=profil");
            
        } else {
            header("Location: home.php");
        }
        
    }
?>