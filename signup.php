<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Allow: POST');
    http_response_code(405);
    exit;
}

$servername = "cssql.seattleu.edu";
$username = "bd_jshenli";
$password = "3300jshenli-Yrws";
$dbname = "bd_jshenli3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pass = mysqli_real_escape_string($conn, $_POST['password']);


// Check if username already exists in the database
$sql = "SELECT * FROM User WHERE USERNAME='$user_name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Username already exists
    echo "Username already exists";
} else {
    // Username does not exist, insert new record
    $sql = "INSERT INTO User (USERNAME, USER_EMAIL, USER_PASSWORD) VALUES ('$user_name', '$email', '$pass')";
    if ($conn->query($sql) === TRUE) {
        // Redirect to main.html
        $_SESSION['signup_success'] = true;
        header('Location: login.html#b-container');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
