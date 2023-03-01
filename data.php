<?php
// Connect to the database
$servername = "cssql.seattleu.edu";
$username = "bd_jshenli";
$password = "3300jshenli-Yrws";
$dbname = "bd_jshenli3";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "The text you just typed in is " .  $_POST["query"];  

// Prepare the SQL statement
$sql = "CREATE TABLE User (
    USER_ID         INT         NOT NULL PRIMARY KEY,
    USERNAME        VARCHAR(20) NOT NULL,
    USER_EMAIL      VARCHAR(50) NOT NULL,
    USER_PASSWORD   VARCHAR(20) NOT NULL,
    REGION          CHAR(2)     NOT NULL,
    VERIFICATION    CHAR(1)     NOT NULL,
    )";

$stmt = $conn->prepare($sql);
$stmt->bind_param("isssss", $user_id, $username, $user_email, $user_password, $region, $verification);

// Get the form data
$user_id = $_POST["USER_ID"];
$username = $_POST["USERNAME"];
$user_email = $_POST["USER_EMAIL"];
$user_password = $_POST["USER_PASSWORD"];
$region = $_POST["REGION"];
$verification = $_POST["VERIFICATION"];

// Execute the SQL statement
if ($stmt->execute() === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$stmt->close();
$conn->close();
?>
