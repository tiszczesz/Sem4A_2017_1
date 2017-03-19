<?php
class Pracownik{
    private $id;
    private $imie;
    private $nazwisko;
    private $pensja;
    private $stanowisko;
    public function __construct($id, $imie, $nazwisko, $pensja,
            $stanowisko) {
        $this->id = $id;
        $this->imie = $imie;
        $this->nazwisko = $nazwisko;
        $this->pensja = $pensja;
        $this->stanowisko = $stanowisko;
    }
    function getId() {
        return $this->id;
    }
    function getImie() {
        return $this->imie;
    }
    function getNazwisko() {
        return $this->nazwisko;
    }
    function getPensja() {
        return $this->pensja;
    }
    function getStanowisko() {
        return $this->stanowisko;
    }    
}
