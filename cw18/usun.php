<?php
if(isset($_GET['id'])){
    require_once 'repository.php';
    $id = $_GET['id'];
    $repo = new Repository();
    $repo->DeleteWorker($id);
}
header("Location: cw18.php");
