<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ćwiczenie nr 4 - Tablice w php</title>
    </head>
    <body>
        <h1>Ćwiczenie nr 4 - Tablice w php</h1>

        <?php
        $tab2 = [];
        //$tab2 = array();
        $tab1 = [12, 67, 7, 45, "ala ma kota", true];
        print_r($tab1);
        var_dump($tab1);
        echo "<p>Rozmiar tablicy: " . count($tab1) . "</p>\n";
        echo "<p>Rozmiar stringa: " . strlen("tab1") . "</p>\n";
        echo $tab1[1];
        $tab1[] = "kolejny"; //dopisywanie kolejnego elementu
        $tab1[2] = "tutuj zmieniono"; //zmiana istniejącego
        $tab1[9] = "inny element";
        unset($tab1[4]);
        print_r($tab1);
//          for($i=0;$i<count($tab1);$i++){
//              print_r($tab1[$i]);
//          }
        sort($tab1);
        foreach ($tab1 as $element) {
            echo '<p>' . $element . '</p>';
        }
        ?>

    </body>
</html>
