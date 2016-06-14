            <section>
                <div>
                    <form action="control_register.php" method="post">
                        <p><input type="text" name="firstname"   id="firstname" value="" placeholder="Vorname"></p>
                        <p><input type="text" name="lastname"   id="lastname" value="" placeholder="Nachname"></p>
                        <p><input type="text" name="user"   id="user" value="" placeholder="Benutzername"></p>
                        <p><input type="mail" name="mail"   id="mail" value="" placeholder="EMail-Adresse"></p>
                        <p><input type="password" name="password"   id="password" value="" placeholder="Passwort" onchange="testekennwortqualitaet(this.value)"></p>
                        <span id="sicherheitshinweise">hier kommt dann der AJAX-Inhalt</span>
                        <p><input type="password" name="password2"   id="password2" value="" placeholder="Passwort"></p>
                        <button id="register" type="submit" name="submit">Registration</button>
                    </form>
                    <button type="submit" onclick="home.php">Abbrechen</button>
                </div>
            </section>