<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ćwiczenie 3 - funkcje</title>
        <link rel="stylesheet" href="cw3.css" />
    </head>
    <body>
        <h1>Ćwiczenie 3 - funkcje</h1>
        <?php
        function Wizytowka($imie,$nazwisko,$stanowisko){
            $html = '<div class="wiz">';
            $html .= '<span class="wyr">'.$imie
                    .' '.$nazwisko.'</span> stanowisko: '
                    .$stanowisko. '</div>';
            return $html;
        }
        function Lista($ile){
            
        }
        echo Wizytowka("Adam", "Nowak", "administrator");
        echo Wizytowka("Anna", "Bobek", "kierownik");
        echo Lista(5);
        ?>
    </body>
</html>
