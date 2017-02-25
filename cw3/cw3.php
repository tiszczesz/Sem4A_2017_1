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
            $html = '<ul>';
            for($i=1;$i<=$ile;$i++){
                $html .= "<li>Element listy nr {$i}</li>\n";
            }
            return $html."</ul>\n";
        }
        function TabMnozenia($row, $col){
            $html  = '<table>'."\n";
            for($i=1;$i<=$row;$i++){                   
                $html .= '<tr>'."\n";
                for($j=1;$j<=$col;$j++){
                    $pierwszy = ($i==1 || $j==1)
                            ?' class="first"': '';
                    $html .= "\t".'<td'.$pierwszy.'>'.($i*$j).'</td>'."\n";
                }
                $html .= '</tr>'."\n";
            }         
            return $html.'</table>'."\n";
        }
        echo Wizytowka("Adam", "Nowak", "administrator");
        echo Wizytowka("Anna", "Bobek", "kierownik");
        echo Lista(5);
        echo TabMnozenia(17, 8);
        ?>
    </body>
</html>
