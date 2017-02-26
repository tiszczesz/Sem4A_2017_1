<?php

function GetWorkers(){
    return [
      ["Jan","Nowak",5600],
       ["Adam","Małek",4600],
        ["Anna","Kowal",7600],
        ["Monika","Trzon",3600],
        ["Roman","Burak",3400],
        ["Juliusz","Nowak",5300],
        ["Piotr","Malinowski",3400],
        ["łukasz","Gryk",6700],
    ];
}
function WorkersToHtmlTable(array $workers){
    $html = '<table>'."\n";
    $html .= "<tr><th>Lp</th><th>Imię</th><th>Nazwisko</th><th>Pensja</th></tr>\n";
    $lp = 0;
    $suma = 0;
    foreach ($workers as $worker) {
        $lp++;
        $suma += $worker[2];
        $html .= "<tr>\n"
              ."\t<td>{$lp}</td>"
                ."\t<td>{$worker[0]}</td>\n"
                ."\t<td>{$worker[1]}</td>\n"
                ."\t<td>{$worker[2]}</td>\n</tr>\n";
    }
    return $html."</table>\n<p class='podsum'>Całkowita pensja: {$suma}</p>\n";
}
