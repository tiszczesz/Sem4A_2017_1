<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       // var_dump($_POST);
        if(isset($_POST['imie'])){
            $imie = $_POST['imie'];
            $nazwisko = $_POST['nazwisko'];
            $stanowisko = $_POST['stanowisko'];
            if(trim($imie)=="" || trim($nazwisko)==""){
                echo "<p>Brak pełnych danych</p>";
                exit();
            }
            $f = fopen('pracownicy.txt', 'a');
            if($f){
                fwrite($f, "{$imie};{$nazwisko};{$stanowisko}".PHP_EOL);
                fclose($f);
                echo "<p>Zapisano do plik</p>\n";
            }
            
        }
        ?>
    </body>
</html>
