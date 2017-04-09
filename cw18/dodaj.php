<?php
require_once 'repository.php';
if(isset($_POST['imie'])){
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $pensja = $_POST['pensja'];
    $stanid = $_POST['stanowisko'];
    if($imie=="" || $nazwisko=="" || $pensja==""){
        echo "error";
        header("Location: cw18.php");
    }else{
        $repo = new Repository();
        $worker = new Pracownik(-1, $imie, $nazwisko,
                $pensja, $stanid);
        $repo->AddWorker($worker);
        header("Location: cw18.php");
    }
}else{
    echo "nie ok";
}
