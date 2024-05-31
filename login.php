<?php

    session_start();

    if(isset($_SESSION['username']) && isset($_SESSION['email'])){
        header("Location: profile.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

    <?php include "includes/header.php" ?>

    <div class="login-content">
        <div class="container">
            <form class="login-form">
                <h2 style="text-align: center;">Login</h2>
                <input type="email" placeholder="Email" class="input-field">
                <input type="password" placeholder="Password" class="input-field">
                <button type="submit" class="submit-btn">Login</button>
            </form>
            <p style="text-align: center;">Don't have an account? <a href="register.html">Register</a></p>
        </div>
    </div>

    <?php include "includes/footer.php" ?>

</body>
</html>
