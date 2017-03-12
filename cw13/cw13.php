<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'dane.php';
        $dane = getAll();
        SaveToFile('pracownicy.txt', $dane);
        echo GetFromFileToHtmlTab("pracownicy.txt");
        ?>
        <div>
            <a href="dodaj.html">
                Dodaj pracownika
            </a>
        </div>
    </body>
</html>
