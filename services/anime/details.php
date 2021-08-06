<!DOCTYPE html>
<html lang="en">

<?php 

$anime = "";
$id = "";

if(!empty($_GET["anime"])) {
    $anime = $_GET["anime"];
    echo $anime;
}

if(!empty($_GET["id"])){
    $id = $_GET["id"];
    echo $id;
}

if($anime == "" and $id == ""){
    header("Location: /handler/errors/404");
    exit();
}

?>