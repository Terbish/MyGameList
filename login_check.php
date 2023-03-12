<?php
session_start();

if(isset($_POST['login_submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Database connection
    $conn = mysqli_connect('cssql.seattleu.edu', 'bd_jshenli', '3300jshenli-Yrws', 'bd_jshenli3');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if email and password exist in the User table
    $query = "SELECT USER_ID FROM User WHERE USER_EMAIL='$email' AND USER_PASSWORD='$password'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1) {
        // Get the USER_ID from the result
        $row = mysqli_fetch_assoc($result);
        $user_id = $row['USER_ID'];
        $user_email = $row['USER_EMAIL'];
        

        // Store the USER_ID in the session variable
        $_SESSION['USER_ID'] = $user_id;
        $_SESSION['USER_EMAIL'] = $email;

        // Redirect to the main page
        header("Location: home.php");
        exit();
    } else {
        // Incorrect email or password
        echo "Incorrect email or password.";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
