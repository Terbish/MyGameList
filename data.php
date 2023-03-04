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

$query = $_POST["query"];

// Execute the query
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Error executing query: " . mysqli_error($conn));
}

// Output the results as a table
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

// Close the connection

$conn->close();
?>
