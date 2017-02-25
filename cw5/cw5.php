<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'functions.php';
        $dane = GenerTab(23);
        foreach ($dane as $liczba) {
            echo "<p>{$liczba}</p>\n";
        }
        ?>
    </body>
</html>
