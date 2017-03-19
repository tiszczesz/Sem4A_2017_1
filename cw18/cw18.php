<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'repository.php';
        $repo = new Repository();
        $db = $repo->getConnection();
        $repo->getAllWorkers();
        ?>
    </body>
</html>
