            
            <section>
                <div>
                    <form action="change_profil.php" method="post">
                        <p>Vorname:</p>
                        <p><input type="text" name="firstname"   id="firstname" value="" placeholder="Vorname"></p>
                        <p>Nachname:</p>
                        <p><input type="text" name="lastname" id="lastname" value="" placeholder="Nachname"></p>
                        <p>Benutzer:</p>
                        <p><input type="text" name="user"   id="user" value="" placeholder="Benutzername"></p>
                        <p>EMail Adresse:</p>
                        <p><input type="text" name="mail"   id="mail" value="" placeholder="EMail-Adresse"></p>
                        <p>Passwort</p>
                        <p><input type="password" name="password"   id="password" value="" placeholder="Passwort" onchange="testekennwortqualitaet(this.value)"></p>
                        <p>Passwort wiederholung</p>
                        <p><input type="password" name="password2"   id="password2" value="" placeholder="Passwort"></p>
                        <p>Adresse:</p>
                        <p><input type="text" name="address"   id="address" value="" placeholder="Adresse"></p>
                        <p>Hausnummer:</p>
                        <p><input type="text" name="nr"   id="nr" value="" placeholder="Hausnummer"></p>
                        <p>Ort:</p>
                        <p><input type="text" name="ort"   id="ort" value="" placeholder="Ort"></p>
                        <p>Postleitzahl:</p>
                        <p><input type="text" name="plz"   id="plz" value="" placeholder="Postleitzahl"></p>
                        <p>Alter:</p>
                        <p><input type="text" name="age"   id="age" value="" placeholder="Alter"></p>
                        <button id="login" type="submit" name="submit">Ändern</button>
                    </form>
                    <button type="submit" onclick="home.php">Abbrechen</button>
                </div>
                <?php
                    require_once("db.php");
                    require_once("db_connection.php");
                    $_SESSION["user"] = "kitty";
                    $change = load($_SESSION["user"],$db_link);
                    ?>
            </section>