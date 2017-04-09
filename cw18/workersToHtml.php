<?php
require_once 'repository.php';
class WorkersToHtml{
    public static function workersToTab(array $workers){
        $html = "<table>";
        $i=0;
        $html .= "<tr><th>Lp</th>"
                . "<th>Imię</th>"
                . "<th>Nazwisko</th>"
                . "<th>Pensja</th>"
                . "<th>Stanowisko</th>"
                . "</tr>\n";
        foreach ($workers as $w) {
            $i++;
            $html .= "<tr><td>{$i}</td>"
                    . "<td>{$w->getImie()}</td>"
                    . "<td>{$w->getNazwisko()}</td>"
                    . "<td>{$w->getPensja()}</td>"
                    . "<td>{$w->getStanowisko()}</td></tr>\n";
        }
        $html .="</table>\n";
        return $html;
    }
}