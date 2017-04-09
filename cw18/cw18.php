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
                require_once 'workersToHtml.php';
                $repo = new Repository();
                
                $stanowiska = $repo->getStanowiska();
                echo WorkersToHtml::stanowiskaToList($stanowiska);
                ?>
                <div>
                    <a href="nowy.php">Dodaj pracownika</a>
                </div>
            </div>
            <div id="glowny">
                <?php
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                }else{
                    $id=-1;
                }
                $workers = $repo->getAllWorkers($id);
                echo WorkersToHtml::workersToTab($workers);
                ?>
            </div>
            <div id="stopka">
                <p> Wykonane przez XXXXXXXX</p>
            </div>
        </div>
    </body>
</html>
