<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "e_commerce";

    $conn = new mysqli($host, $username, $password, $db);

    if($conn){
        //echo "Data-Base Connection Successfully!";
    } else {
        echo "Not Connection Successfully!";
    }
?>