<?php 
    $server = "localhost";
    $userName = "root";
    $password = "";
    $database = "ieltsinstitute";

    $conn = mysqli_connect($server,$userName,$password,$database);

    if (!$conn) {
        echo ("Connection failed".mysqli_connect_error());
    }
?>