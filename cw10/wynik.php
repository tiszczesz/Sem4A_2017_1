<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        var_dump($_POST);
        if(isset($_POST['imie'])){
            $imie = $_POST['imie'];
            $nazwisko = $_POST['nazwisko'];
            $semestr = $_POST['semestr'];
            if(trim($imie)=="" || trim($nazwisko)==""){
                echo "<p>Brak pełnych danych</p>";
                exit();
            }
            $html = "<p>Zarejestrowano: {$imie} {$nazwisko}"
                        . " na semestr:{$semestr}</p>";
            if(isset($_POST['zaint'])){
                $zaint = $_POST['zaint'];
                $html .= "Zainteresowania:<br><ul>";
                foreach ($zaint as $item) {
                    $html .= "<li>{$item}</li>";
                }
                $html .= "</ul>\n";
            }
            echo $html;
        }
        ?>
        
    </body>
</html>
