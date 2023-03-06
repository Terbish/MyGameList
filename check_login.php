<?php
    // Connect to the database (replace the placeholders with your own database credentials)
    $servername = "cssql.seattleu.edu";
    $username = "bd_jshenli";
    $password = "3300jshenli-Yrws";
    $dbname = "bd_jshenli3";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get the email and password from the form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Create a SQL query to check if the email and password exist in the database
    $sql = "SELECT * FROM User WHERE USER_EMAIL='$email' AND USER_PASSWORD='$password'";
    $result = mysqli_query($conn, $sql);

    // Check if any rows were returned
    if (mysqli_num_rows($result) > 0) {
        // The email and password are correct, so redirect to the main.html page
        header("Location: main.html");
        exit;
    } else {
        // The email or password is incorrect, so display an error message
        echo "Invalid email or password";
    }

    // Close the database connection
    mysqli_close($conn);
?>
