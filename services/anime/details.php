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
    echo "Error: Invalid Argument. No anime or id";
}

?>