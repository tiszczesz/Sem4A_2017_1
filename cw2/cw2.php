<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Ćwiczenie 2 - Pętle</title>
    </head>
    <body>
        <h1>Ćwiczenie 2 - Pętle</h1>
        <h2>Petla for(...;...;...){....}</h2>
        <?php
        for($i=1; $i<=6; $i++){
            echo "<h{$i}>Nagłówek nr {$i}</h{$i}>\n";
        }
        echo "<ul>\n";
        for($i=1; $i<=10; $i++){
            echo "<li>Element listy nr {$i}</li>\n";
        }
        echo "</ul>\n";
        for($i=1;$i<=5;$i++){
            for($j=1; $j<=4; $j++){
                echo 'i = '.$i.' j = '.$j.'<br>'."\n";
            }
        }
        ?>
        <h2>Pętla while(...){...}</h2>
        <?php
        $suma = 0;
        while($suma<50){
            $losowa = rand(0, 10);
            $suma += $losowa;
            echo $losowa.' ';
        }
        echo " suma: ".$suma;
        ?>
        <h2>Petla do{...}while(...)</h2>
        <?php
        $losowa=0;
        $licznik=0;
        $suma = 0;
        $srednia = 0;
        $max = -PHP_INT_MAX;
        $min = PHP_INT_MAX;
        do{
            $losowa = rand(0,10);
            if($losowa!=0){
                $licznik++;
                $suma += $losowa;
                if($max<$losowa) $max = $losowa;
                if($min>$losowa) $min = $losowa;
            }            
            echo $losowa.' ';
        }while($losowa!=0);
        echo "<p>Ilość losowań: {$licznik}</p>\n";
        if($licznik>0){
           echo "<p>Suma: {$suma}</p>\n"; 
           echo "<p>Średnia: ".round($suma/$licznik,2)."</p>\n"; 
           echo "<p>Max: {$max}</p>\n"; 
           echo "<p>Mni: {$min}</p>\n"; 
        }else{
            echo "<p>Zbiór pusty!!</p>\n";
        }
        ?>
    </body>
</html>
