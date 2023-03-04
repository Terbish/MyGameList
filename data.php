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

// Get the query from the form input
$query = $_POST["query"];

// Execute the query
$result = mysqli_query($conn, $query);

if (!$result) {
    echo "<p>Query failed to execute. Error message: " . mysqli_error($conn) . "</p>";
} else {
    if (is_object($result) && get_class($result) === "mysqli_result") {
        // Query returns a table
        echo "<p>Query executed successfully!</p>";
        echo "<table border='1'>";
        // Output the header row
        echo "<tr>";
        foreach (mysqli_fetch_fields($result) as $field) {
            echo "<th>{$field->name}</th>";
        }
        echo "</tr>";

        // Output the data rows
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            foreach ($row as $cell) {
                echo "<td>{$cell}</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    } else {
        // Query returns something else (e.g. INSERT, UPDATE, DELETE)
        if (mysqli_affected_rows($conn) > 0) {
            echo "<p>Query executed successfully!</p>";
            echo "<p>" . mysqli_affected_rows($conn) . " row(s) affected.</p>";
        } else {
            echo "<p>Query executed successfully!</p>";
            echo "<p>No rows affected.</p>";
        }
    }
}

// Close the connection

$conn->close();
?>
