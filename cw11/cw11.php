<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $f = fopen("data.txt", 'r');
        //var_dump($f);
        if($f){
            while (($line = fgets($f))!=false){
                echo "<p>{$line}</p>\n";
            }
            if(!feof($f)){
                echo "Jakiś błąd przy odczycie!!";
            }else{
                echo "<p>I TO JUZ KONIEC PLIKU!!</p>";
            }
            fclose($f);
        }else{
            echo "Błąd otwarcia pliku!!";
        }
        ?>
        <h1>ćwiczenie własne</h1>
        <?php
        $f = fopen("data2.txt", 'r');
        if($f){
            echo "<ol>";
            while (($line = fgets($f))!=false){
                echo "<li>{$line}</li>\n";
            }
            echo "</ol>";
            fclose($f);
        }else{
            echo "Błąd otwarcia pliku!!";
        }
        
        ?>
    </body>
</html>
