<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        $db = mysql_connect("localhost","root","");
        var_dump($db);
        $r = mysql_select_db("sem4_2017_1");
        echo "<p>wybor bazy:</p>";
        var_dump($r);
        $wynik = mysql_query("SELECT * FROM towary");
        var_dump($wynik);
        echo "<p>Pobieranie danych:</p>";
        $rows = mysql_num_rows($wynik);
        var_dump($rows);
        //$dane1 = mysql_fetch_row($wynik);
       // var_dump($dane1);
        echo "<p>Teraz while</p>";
        while(($row = mysql_fetch_array($wynik))!=false){
           echo "<p>Nazwa: {$row['nazwa']} cena: {$row[2]}</p>";
        }
        
        mysql_close($db);
        ?>
        </pre>
    </body>
</html>
