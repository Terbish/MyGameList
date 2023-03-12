<?php
// Establish database connection
$conn = mysqli_connect('cssql.seattleu.edu', 'bd_jshenli', '3300jshenli-Yrws', 'bd_jshenli3');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Capture form data
$email = $_POST['email'];
$password = $_POST['password'];
$username = $_POST['username'];

// Prepare SQL query to insert user information
$sql = "INSERT INTO User (USERNAME, USER_EMAIL, USER_PASSWORD) VALUES ('$username', '$email', '$password')";

// Execute SQL query and check for errors
if (mysqli_query($conn, $sql)) {
    echo "User created successfully";
    echo "<br><button onclick=\"location.href='login.html'\">Back to Login</button>";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>
