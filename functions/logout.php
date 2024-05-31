<?php
    session_start();

    function logOut(){

        session_destroy();
        
        if(!isset($_SESSION['username']) && !isset($_SESSION['email'])){
            
            header("Location: ../login.php");
        }
        return "function executed";
    }

    echo logOut();
?>