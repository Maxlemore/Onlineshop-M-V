            
            <section class="white">
                <form action="mail" method="post">
                <?php
                    require_once("db.php");
                    require_once("db_connection.php");
                    $show = article($db_link);
                    ?>
                </form>
            </section>