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
$sql = "SELECT * FROM Game";
$result = $conn->query($sql);

// Print the results in a table format
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>GAME_ID</th><th>GAME_NAME</th><th>PRICE</th><th>AVG_REVIEW_SCORE</th><th>GAME_LANGUANGE</th><th>RELEASE_DATE</th><th>STUDIO_ID</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["GAME_ID"]. "</td><td>" . $row["GAME_NAME"]. "</td><td>" . $row["PRICE"]. "</td><td>" . $row["AVG_REVIEW_SCORE"]. "</td><td>" . $row["GAME_LANGUAGE"]. "</td><td>" . $row["RELEASE_DATE"]. "</td><td>" . $row["STUDIO_ID"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close the database connection
$conn->close();

?>