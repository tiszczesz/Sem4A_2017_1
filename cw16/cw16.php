<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
            <?php
            $db = mysqli_connect('localhost', 'root', '', 'sem4_2017_1');
            var_dump($db);
            if ($db) {
                $wynik = mysqli_query($db, "SELECT * from towary");
                var_dump($wynik);
                while (($row = mysqli_fetch_assoc($wynik)) != false) {
                   
                }
            }
            ?>
        <hr>
    </body>
</html>
