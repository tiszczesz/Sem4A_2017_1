<?php
require_once 'pracownik.php';
class Repository{
    public function getConnection(){
        $conn = new mysqli('localhost', 'root', '', 'firmasem4_2017');
        if($conn->connect_errno!==0){
            echo "<p>ERROR DB: {$conn->connect_error}</p>";
            return null;
        }
        $conn->query("SET NAMES utf8");
        return $conn;
    }
    public function getAllWorkers($id=-1){
        $conn = $this->getConnection();
        if($conn==null){
            return [];
        }
        $stan = $id==-1 ? "": " where p.stanowiskoid = {$id}";
        $query = "SELECT  p.id,imie, nazwisko,"
                . "pensja, nazwa FROM pracownicy as p "
                . "INNER JOIN stanowiska as s on p.stanowiskoid=s.id "
                . " {$stan} "
                . "order by nazwisko";
        $result = $conn->query($query);
        $workers = [];
        if($result){
            while(($row = $result->fetch_assoc())!=false){
                $workers[] = new Pracownik($row['id'], $row['imie'], 
                        $row['nazwisko'], $row['pensja'], $row['nazwa']);
            }
        }
        $conn->close();
        return $workers;
    }
    public function getStanowiska(){
        $conn = $this->getConnection();
        if($conn==null){
            return [];
        }
        $sql = "SELECT * FROM stanowiska";
        $result = $conn->query($sql);
        $stanowiska = [];
        if($result){
            while (($row = $result->fetch_assoc())!=false){
                $stanowiska[$row['id']]=$row['nazwa'];
            }
        }
        $conn->close();
        return $stanowiska;
    }
    public function AddWorker(Pracownik $w){
        $conn = $this->getConnection();
        if($conn==null) return false;
        $sql = "INSERT INTO pracownicy(imie,nazwisko,pensja, stanowiskoid) "
                . " VALUES('{$w->getImie()}','{$w->getNazwisko()}',"
                . "{$w->getPensja()},{$w->getStanowisko()})";
        $result = $conn->query($sql);
        return $result;
    }
    public function DeleteWorker($id=-1){
        if($id<0) return;
        $conn = $this->getConnection();
        if($conn!=null){
            $sql = "DELETE FROM pracownicy where id={$id}";
            $result = $conn->query($sql);
        }
    }
}