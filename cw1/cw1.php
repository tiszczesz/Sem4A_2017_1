<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Ćwiczenie 1</title>
    </head>
    <body>
        <?php
        $imie = "Ala";
        var_dump($imie);
        $a = 20;
        $b = 6;
        echo "<p>{$a} + {$b} = " . ($a + $b) . '</p>';
        echo "<p>{$a} - {$b} = " . ($a - $b) . '</p>';
        echo "<p>{$a} * {$b} = " . ($a * $b) . '</p>';
        if ($b != 0) {
            echo "<p>{$a} / {$b} = " . round(($a / $b), 2) . '</p>';
        }else{
            echo "<p>{$a} / {$b} = BRAK WYNIKU</p>";
        }
        ?>
    </body>
</html>
