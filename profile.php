<?php

    session_start();

    if(!isset($_SESSION['username']) && !isset($_SESSION['email'])){
        header("Location: login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <?php include "includes/header.php" ?>

    <div style="text-align: center;">
        <h1>Profile Page</h1>
    
        <h3> <?php echo $_SESSION['username'] ?? "" ?>  Your are logged in.</h3>

        <button class="logoutBtn">Logout</button>

    </div>

    <?php include "includes/footer.php" ?>

    <script>

        function logoutUser(){

            const xhr = new XMLHttpRequest();
    
            // configure
            xhr.open("GET", 'functions/logout.php', true);
    
            // setup a call function
            xhr.onreadystatechange = function(){
                if(xhr.readyState === 4 && xhr.status == 200){
                    console.log(xhr.responseText);
                }
    
            }

            xhr.send();
        }

        document.querySelector(".logoutBtn").addEventListener("click", ()=>{
            logoutUser();
        })


    </script>
</body>
</html>