<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="cw18.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="wrapper">
            <div id="naglowek">MOJA FIRMA</div>
            <div id="lewy">
                STANOWISKA:
                <?php
                ?>
            </div>
            <div id="glowny">
                <?php
                require_once 'workersToHtml.php';
                $repo = new Repository();
                $workers = $repo->getAllWorkers();
                echo WorkersToHtml::workersToTab($workers);
                ?>
            </div>
            <div id="stopka">
                <p> Wykonane przez XXXXXXXX</p>
            </div>
        </div>
    </body>
</html>
