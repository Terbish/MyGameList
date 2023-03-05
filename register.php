<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
// Connect to the MySQL database
$servername = "cssql.seattleu.edu";
$username = "bd_jshenli";
$password = "3300jshenli-Yrws";
$dbname = "bd_jshenli3";
$conn = new mysqli($servername, $username, $password, $dbname);

// Process the registration form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
    // Sanitize the input data
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $region = mysqli_real_escape_string($conn, $_POST["region"]);

    // Validate the input data
    if (empty($username) || empty($email) || empty($password) || empty($region)) {
        $error = "Please fill in all required fields.";
    } else {
        // Insert the new user record
        $sql = "INSERT INTO User (USERNAME, USER_EMAIL, USER_PASSWORD, REGION, VERIFICATION)
                VALUES ('$username', '$email', '$password', '$region', 'N')";
        if (mysqli_query($conn, $sql)) {
            $success = "Registration successful!";
            header("Location: login.php?success=1");
            exit();
        } else {
            $error = "Error: " . mysqli_error($conn);
        }
    }
}
?>
