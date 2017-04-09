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
    public function getAllWorkers(){
        $conn = $this->getConnection();
        if($conn==null){
            return [];
        }
        $query = "SELECT  p.id,imie, nazwisko,"
                . "pensja, nazwa FROM pracownicy as p "
                . "INNER JOIN stanowiska as s on p.stanowiskoid=s.id "
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
}