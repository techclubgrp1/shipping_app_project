<?php
    $response="";
    $error="";
    $server="localhost";
    $username="root";
    $password="";
    $database="kevann";

    $conn = mysqli_connect($server, $username, $password, $database);
    if($conn){
        echo "connection succeeded";
    }
    else{
        echo "failed";
    }
?>