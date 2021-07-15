<?php
    require_once realpath(__DIR__ . '/./loadenv.php');

    $server = $_ENV['db_host'];
    $username = $_ENV['db_username'];
    $password = $_ENV['db_password'];
    $database = $_ENV['db_name'];

    $conn = mysqli_connect($server, $username, $password, $database);

    if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        echo "Connected successfully";
    }
?>