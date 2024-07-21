<?php 

    $server = "localhost";
    $userName = "root";
    $password = "";
    $database = "ieltsinstitute";

    $conn = new mysqli($server,$userName,$password,$database);

    if($conn -> connect_error){
        die("Connection failed". $conn->connect_error);
    }
?>