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
$sql = "SELECT * FROM Studio";
$result = $conn->query($sql);

// Print the results in a table format
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>STUDIO_ID</th><th>STUDIO_FORMATION_DATE</th><th>STUDIO_NAME</th>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["STUDIO_ID"]. "</td><td>" . $row["STUDIO_FORMATION_DATE"]. "</td><td>" . $row["STUDIO_NAME"];
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close the database connection
$conn->close();

?>