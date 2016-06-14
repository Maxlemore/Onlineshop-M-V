<?php

    require_once("db.php");
    require_once("db_connection.php");

    $firstname = $db_link->real_escape_string($_POST["firstname"]);
    $lastname = $db_link->real_escape_string($_POST["lastname"]);
    $user = $db_link->real_escape_string($_POST["user"]);
    $mail = $db_link->real_escape_string($_POST["mail"]);
    $password = $db_link->real_escape_string($_POST["password"]);
    $password2 = $db_link->real_escape_string($_POST["password2"]);
    $address = $db_link->real_escape_string($_POST["address"]);
    $nr = $db_link->real_escape_string($_POST["nr"]);
    $ort = $db_link->real_escape_string($_POST["ort"]);
    $plz = $db_link->real_escape_string($_POST["plz"]);
    $age = $db_link->real_escape_string($_POST["age"]);

    $control = false;
    $control = true;
    if ($control = true) {
        $success =change($user,$firstname,$lastname,$mail,sha1($password),$address,$nr,$ort,$plz,$age,$db_link);
        if ($success == true){
            header("Location: index.php?p=profil");

        }
    } else {
        header("Location: index.php?p=home");
    }
?>