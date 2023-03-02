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

// Run SQL query to retrieve all rows from User table
$sql = "SELECT * FROM User";
$result = $conn->query($sql);

// Print the results in a table format
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>USER_ID</th><th>USERNAME</th><th>USER_EMAIL</th><th>USER_PASSWORD</th><th>REGION</th><th>VERIFICATION</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["USER_ID"]. "</td><td>" . $row["USERNAME"]. "</td><td>" . $row["USER_EMAIL"]. "</td><td>" . $row["USER_PASSWORD"]. "</td><td>" . $row["REGION"]. "</td><td>" . $row["VERIFICATION"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close the database connection
$conn->close();

?>
