<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "market";
    $conn = new mysqli($host,$user,$pass,$database);
    mysqli_set_charset($conn,'utf8');
        if(!$conn){
            echo "Not Connected !";
        }
?>