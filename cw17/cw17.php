<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $dane = [
            ["Adam","Turek",4500],
            ["Monika","Hajduk",3500],
            ["Alojzy","Turek",2300],
            ["Tomasz","Franiak",4700],
            ["Marek","Juszczyk",2900],
        ];
        class Pracownik{
            //pola  właściwosci
            private $imie;
            private $nazwisko;
            private $pensja;
            //metody  zachowania
            public function PracToParHTML(){
                $html = "<p class='pracownik'>";
                $html .= $this->imie. " ". $this->nazwisko." pensja: ".$this->pensja;
                $html .="</p>\n";
                return $html;
            }
            public function __construct($imie,$nazwisko,$pensja) {
                $this->imie = $imie;
                $this->nazwisko = $nazwisko;
                $this->pensja = $pensja;
            }
            public function pracToRow(){
                 $html = "<tr>";
                $html .= "<td>{$this->imie}</td><td>{$this->nazwisko}</td><td> "
                        . " {$this->pensja}</td>";
                $html .="</tr>\n";
                return $html;
            }
        }        
        $p1 = new Pracownik("Adam", "Nowak", 3400);
        $p2 = new Pracownik("Anna", "Małecka", 4500);
        $workers = [];
        foreach ($dane as $worker) {
            $workers[] = new Pracownik($worker[0], $worker[1], $worker[2]);
        }
        echo "<pre>";
        var_dump($workers);
        echo "</pre>";
        echo $p1->PracToParHTML();
        echo $p2->PracToParHTML();
        echo "<table><tr><th>Imię</th><th>Nazwisko</th><th>Pensja</th></tr>\n";
        echo $p1->pracToRow();
        echo $p2->pracToRow();
        foreach ($workers as $worker) {
             echo $worker->pracToRow(); 
        }      
        echo "</table>";
        ?>
    </body>
</html>
