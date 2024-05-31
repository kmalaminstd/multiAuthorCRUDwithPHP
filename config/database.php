<?php


    $DB_HOST = "localhost";
    $DB_USER = "root";
    $DB_PASS = "";
    $DB_NAME = "multiauthorcrud";

    // 
    $conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

    if($conn->connect_error){
        die("Connecton failed" . $conn->connect_error);
    }

    // msg
    // echo "success"


?>