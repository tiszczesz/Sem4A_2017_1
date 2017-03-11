<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Ćwiczenie nr 8 - Formularze wstęp</title>
        <link href="cw8.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Ćwiczenie nr 8 - Formularze wstęp</h1>
        <form action="wynik.php" method="post">
            <fieldset>
                <legend>
                    Dane osobowe
                </legend>
                <div class="line">
                    <label>Imię:</label>
                    <input type="text" name="imie" />
                </div>
                <div class="line">
                    <label>Nazwisko:</label>
                    <input type="text" name="nazwisko" />
                </div>
                <div class="line">
                    <label>Płeć:</label><br>
                    <label></label>
                    Kobieta: <input type="radio" name="plec" value="k" checked="" />
                    Mężczyzna: <input type="radio" name="plec" value="m" />
                </div>
                <div class="line">
                    <label></label>
                    <input type="submit" value="Zatwierdź"/>
                </div>
            </fieldset>
        </form>
        <?php
        
        ?>
    </body>
</html>
