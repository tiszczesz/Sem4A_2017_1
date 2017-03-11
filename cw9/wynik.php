<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>        
        <?php
        if(isset($_POST['a']) && isset($_POST['b'])){
            if(is_numeric($_POST['a']) && is_numeric($_POST['b'])){
                $a = floatval($_POST['a']);
                $b = floatval($_POST['b']);
                echo "<ul>\n";
                echo "<li>{} + {} = ".($a+$b)."</p>"
            }else{
                echo "<p>Błędne dane z formularza</p>\n";
            }
        }
        
        ?>
        
    </body>
</html>
