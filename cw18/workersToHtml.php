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
    public static function stanowiskaToList(array $stanowiska){
        $html = "<ul>";
        foreach ($stanowiska as $id => $nazwa) {
            $html .= "<li><a href='cw18.php?id={$id}'>{$nazwa}</a></li>\n";
        }
        $html .= "<li><a href='cw18.php?id=-1'>wszyscy</a></li>\n";
        $html .= "</ul>\n";
        return $html;
    }
     public static function stanowiskaToSelect(array $stanowiska){
        $html = "<select name='stanowisko'>";
        foreach ($stanowiska as $id => $nazwa) {
            $html .= "<option value='{$id}'>{$nazwa}</option>\n";
        }        
        $html .= "</select>\n";
        return $html;
    }
}