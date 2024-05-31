<?php
session_start();

include "../config/database.php";

$username = $email = $password = '';
$usernameErr = $emailErr = $passwordErr = '';
$registerErr = '';

if (isset($_POST['submit'])) {

    // Validate form
    if (!empty($_POST['username'])) {
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    } else {
        $usernameErr = "Username should not be empty";
    }

    if (!empty($_POST['email'])) {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    } else {
        $emailErr = "Email should not be empty";
    }

    if (!empty($_POST['password'])) {
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    } else {
        $passwordErr = "Password should not be empty";
    }

    // Submit the form to the server
    if (empty($usernameErr) && empty($emailErr) && empty($passwordErr)) {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        if ($stmt) {
            $stmt->bind_param("sss", $username, $email, $hashed_password);

            try {
                if($stmt->execute()){

                    $_SESSION['username'] = $username;
                    $_SESSION['email'] = $email;
                    header("Location: ../blog.php");
                    exit();
                }else{
                    echo "Execution failed";
                }
                
            } catch (mysqli_sql_exception $exception) {
                if ($exception->getCode() === 1062) {
                    // $registerErr = "Email already exists";
                    $_SESSION['registerErr'] = "Email already exists";
                } else {
                    // $registerErr = "An error occurred. Please try again later.";
                    $_SESSION['registerErr'] = "An error occurred. Please try again later";
                }
                header("Location: ../register.php"); // Redirect back to the form page
                exit();
            }
        } else {
            $registerErr = "Failed to prepare statement";
        }
    }
}
?>
