<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        if(isset($_POST['imie'])){
            $imie = $_POST['imie'];
            $nazwisko = $_POST['nazwisko'];
            $plec = $_POST['plec'];
            echo "<p>{$imie} {$nazwisko} płeć: {$plec}</p>\n";
        }
        
        ?>
        </pre>
    </body>
</html>
