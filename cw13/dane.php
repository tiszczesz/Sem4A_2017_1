<?php

function getAll() {
    return [
        ["Jan", "Nowak", "kierowca"],
        ["Adam", "Turek", "sprzedawca"],
        ["Monika", "Grudek", "asystent"],
        ["Anna", "Gawlik", "kierownik"]
    ];
}

function SaveToFile($filename, array $dane) {
    //imie;nazwisko;stanowisko
    $f = fopen($filename, 'w');
    if ($f) {
        foreach ($dane as $item) {
            $line = implode(';', $item);
            fwrite($f, $line . PHP_EOL);
        }
        fclose($f);
    }
}

function GetFromFileToHtmlTab($filename) {
    $dane = file("pracownicy.txt",
            FILE_IGNORE_NEW_LINES);

    $html = "<table>";
    $html .= "<tr><th>Lp</th><th>Imię</th>"
            . "<th>Nazwisko</th>"
            . "<th>Stanowisko</th></tr>";
    $lp = 0;
    foreach ($dane as $line) {
        $tab = explode(';', $line);
        $lp++;
        $html .= "<tr><td>{$lp}</td>"
                . "<td>{$tab[0]}</td>"
                . "<td>{$tab[1]}</td>"
                . "<td>{$tab[2]}</td></tr>\n";
    }

    return $html . "</table>\n";
}
