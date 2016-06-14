    <?php

    function control ($user,$mail,$db_link){
        $sql = "Select * from Person where user = '$user'";
        $sql2 = "Select * from Person where mail = '$mail'";
        $result = $db_link->query($sql);
        $result2 = $db_link->query($sql2);
        $uc = $result->num_rows;
        $mc = $result2->num_rows;
        if ( $uc > "0" || $mc > "0"){
            return false;
            $result->close();
        } else {
            return true;
            $result->close();
        }
            
    }

    function write ($user,$firstname,$lastname,$mail,$password,$db_link){
           $sql = "INSERT INTO person(user,firstname,lastname,mail,password) 
          VALUES
          ('$user','$firstname','$lastname','$mail','$password');";
        $db_erg = mysqli_query($db_link, $sql) or die("Anfrage fehlgeschlagen: " . mysqli_error());
        $_SESSION["user"] = $user;
        return true;
        
    }

    function write_panel ($objectname,$description,$price,$artist,$categorie,$hoehe,$breite,$tiefe,$db_link){
           $sql = "INSERT INTO gegenstand(name,beschreibung,preis,hoehe,breite,tiefe) 
          VALUES
          ('$objectname','$description','$price','$hoehe','$breite','$tiefe');";
        $db_erg = mysqli_query($db_link, $sql) or die("Anfrage fehlgeschlagen: " . mysqli_error($db_link));
        return true;
        
    }


    function change ($user,$firstname,$lastname,$mail,$password,$address,$nr,$ort,$plz,$age,$db_link){
        $olduser = $_SESSION["user"];
           $sql = "UPDATE person
                    SET user ='$user', firstname = '$firstname', mail = '$mail', Password = '$password', adresse = '$address', nr = '$nr', ort = '$ort', plz = '$plz', age = '$age'
                    WHERE user='$olduser';";
        $db_erg = mysqli_query($db_link, $sql) or die("Anfrage fehlgeschlagen: " . mysqli_error());
        return true;
    }

    function read ($user,$password,$db_link){
           $sql = "Select * from person where user = '$user'";
        $db_erg = mysqli_query($db_link, $sql) or die("Ungültige Anfrage: " . mysqli_error());
        $zeile = mysqli_fetch_array( $db_erg, MYSQL_ASSOC);
            if ($zeile['user']){
                if ($zeile['password'] == $password){
                    return true;
                }
                else{
                    return false;
                    
                }
            }
            else{
                return false;
            }

    }

    function load($user,$db_link){
        $sql = "Select * from person where user = '$user'";
        $db_erg = mysqli_query($db_link, $sql) or die("Ungültige Anfrage: " . mysqli_error());
        $zeile = mysqli_fetch_array( $db_erg, MYSQL_ASSOC);
        $user = $zeile['user'];
        $firstname = $zeile['firstname'];
        $lastname = $zeile['lastname'];
        $mail = $zeile['mail'];
        $password = $zeile['password'];
        $adresse = $zeile['adresse'];
        $nr = $zeile['nr'];
        $ort = $zeile['ort'];
        $plz = $zeile['plz'];
        $age = $zeile['age'];
        
        ?>
        <script type="text/javascript">
            document.getElementById('user').placeholder = "<?php echo $user ?>";
            document.getElementById('firstname').placeholder = "<?php echo $firstname ?>";
            document.getElementById('lastname').placeholder = "<?php echo $lastname ?>";
            document.getElementById('mail').placeholder = "<?php echo $mail ?>";
            document.getElementById('password').placeholder = "<?php echo $password ?>";
            document.getElementById('address').placeholder = "<?php echo $adresse ?>";
            document.getElementById('nr').placeholder = "<?php echo $nr ?>";
            document.getElementById('ort').placeholder = "<?php echo $ort ?>";
            document.getElementById('plz').placeholder = "<?php echo $plz ?>";
            document.getElementById('age').placeholder = "<?php echo $age ?>";
        </script>
    
    <?php       
    return true;
    }

function article($db_link){
        $sql = "Select * from gegenstand";
        $db_erg = mysqli_query($db_link, $sql) or die("Ungültige Anfrage: " . mysqli_error());
        while ($zeile = mysqli_fetch_array( $db_erg, MYSQL_ASSOC))
        {
            echo "<div>";
                echo "<tr>";
                  echo "<td>". $zeile['name'] . "</td>";
                  echo "<td>". $zeile['beschreibung'] . "</td>";
                  echo "<td>". $zeile['preis'] . "</td>";
                  echo "<td>". $zeile['hoehe'] . "</td>";
                  echo "<td>". $zeile['breite'] . "</td>";
                  echo "<td>". $zeile['tiefe'] . "</td>";
                    echo "<button>Bestellen</button>";    
                echo "</tr>";
            echo "</div>";
         }
        
    return true;
    }
    ?>