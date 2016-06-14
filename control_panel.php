<?php

    require_once("db.php");
    require_once("db_connection.php");

    $objectname = $db_link->real_escape_string($_POST["objectname"]);
    $description = $db_link->real_escape_string($_POST["description"]);
    $price = $db_link->real_escape_string($_POST["price"]);
    $artist = $db_link->real_escape_string($_POST["artist"]);
    $categorie = $db_link->real_escape_string($_POST["categorie"]);
    $höhe = $db_link->real_escape_string($_POST["höhe"]);
    $breite = $db_link->real_escape_string($_POST["breite"]);
    $tiefe = $db_link->real_escape_string($_POST["tiefe"]);

    $control = false;
    $control = true;
    if ($control = true) {
        $success =write_panel($objectname,$description,$price,$artist,$categorie,$höhe,$breite,$tiefe,$db_link);
        if ($success){
            header("Location: index.php?p=panel");
            
        }
    } else {
        header("Location: home.php");
    }
?>