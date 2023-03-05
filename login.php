<?php
// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the user's login information from the form
    $servername = "cssql.seattleu.edu";
    $username = "bd_jshenli";
    $password = "3300jshenli-Yrws";
    $dbname = "bd_jshenli3";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check if there was an error connecting to the database
    if ($conn->connect_error) {
        die('Connect Error (' . $conn->connect_errno . ') ' . $conn->connect_error);
    }

    // Create a query to check if the user exists
    $query = "SELECT * FROM User WHERE USERNAME='$username' AND USER_PASSWORD='$password'";

    // Execute the query
    $result = $conn->query($query);

    // Check if the query was successful
    if ($result) {
        // Check if the user was found
        if ($result->num_rows == 1) {
            // User was found, log them in
            session_start();
            $_SESSION['username'] = $username;
            header('Location: main.php');
            exit();
        } else {
            // User was not found, show an error message
            $error_message = 'Incorrect username or password.';
        }
    } else {
        // Query failed, show an error message
        $error_message = 'Error executing query: ' . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
