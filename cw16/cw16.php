<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php
        $db = mysqli_connect('localhost', 'root', '', 'sem4_2017_1');
        // var_dump($db);
        if ($db) {
            $wynik = mysqli_query($db, "SELECT * from towary");
            //var_dump($wynik);
            echo "<ol>\n";
            while (($row = mysqli_fetch_assoc($wynik)) != false) {
                echo "<li>{$row['nazwa']} cena: {$row['cena']} PLN</li>\n";
            }
            echo "</ol>\n";
            $wynik2 = mysqli_query($db, "SELECT sum(cena) as total from towary");
            //var_dump(mysqli_fetch_row($wynik2));
            $total = mysqli_fetch_row($wynik2)[0];
            echo "<h3>Całkowita wartość towarów: {$total} PLN</h3>";
            $wynik3 = mysqli_query($db, "SELECT avg(cena) as total from towary");
            $srednia = round(mysqli_fetch_row($wynik3)[0],2);
            echo "<h3>Średnia wartość towarów: {$srednia} PLN</h3>";
            mysqli_close($db);
        }
        ?>
        <hr>
    </body>
</html>
