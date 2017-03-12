<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'dane.php';
        $f = fopen("wynik.txt", 'w');
        if($f){
            $dane = getAll();
            foreach ($dane as $item) {
                fwrite($f, $item.PHP_EOL);
            }
            fclose($f);
        }
        ?>
    </body>
</html>
