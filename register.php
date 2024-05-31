<?php
    session_start();

    if(isset($_SESSION['username']) && isset($_SESSION['email'])){
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

    <?php include "includes/header.php" ?>

    <div class="register-content">
        <div class="container">
            <!-- <h4 style="color: red; text-align: center;"><?php echo $registerErr ?? "" ?></h4> -->
            <form class="register-form" action="functions/register.php" method="POST">
                <h2 style="text-align: center;">Register</h2>
                <?php if(isset($_SESSION['registerErr'])): ?>
                    <h5 style="color: red; text-align: center;"><?php echo $_SESSION['registerErr'] ?>
                    <?php unset($_SESSION['registerErr']) ?>
                <?php endif; ?>
                <input type="text" placeholder="Username" name="username" class="input-field">
                <input type="email" placeholder="Email" name="email" class="input-field">
                <input type="password" placeholder="Password" name="password" class="input-field">
                <input type="submit" value="Register" name="submit" class="submit-btn">
            </form>
            <p style="text-align: center;">Already have an account? <a href="login.php">Login</a></p>
        </div>
    </div>

    <?php include "includes/footer.php" ?>

</body>
</html>
