<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'functions.php';
        $workers = GetWorkers();
        echo WorkersToHtmlTable($workers);
//       $tab=[12,[2,7,9],5];
//       echo $tab[0];
//       echo "<br>".$tab[1][2];
        ?>
    </body>
</html>
