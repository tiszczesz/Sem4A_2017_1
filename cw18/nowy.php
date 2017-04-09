<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="dodaj.php" method="post">
            <fieldset>
                <legend>Dane pracownika</legend>
                <div class="line">
                <label>Imię:</label>
                <input type="text" name="imie" />
                <span class="error"></span>
                </div>
                <div class="line">
                <label>Nazwisko:</label>
                <input type="text" name="nazwisko" />
                <span class="error"></span>
                </div>
                <div class="line">
                    <label>Pensja:</label>
                    <input type="number" name="pensja" />
                <span class="error"></span>  
                </div>
                <div class="line">
                    <label>Stanowisko</label>
                    <?php 
                    require_once 'workersToHtml.php';
                    $repo = new Repository();
                    $stanowiska = $repo->getStanowiska();
                    echo WorkersToHtml::stanowiskaToSelect($stanowiska);
                    ?>
                </div>
               <div class="line">
                    <label></label>
                    <input type="submit" value="Dodaj"/>
                </div> 
            </fieldset>
        </form>
        
    </body>
</html>
