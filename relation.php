<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

// Connect to the database using PDO
$servername = "cssql.seattleu.edu";
$username = "bd_jshenli";
$password = "3300jshenli-Yrws";
$dbname = "bd_jshenli3";
$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get the name attribute from the clicked link
$query = $_GET['query'];

// Determine which query to execute based on the value of the name attribute
switch ($query) {
    case 'user':
        $query = "SELECT * FROM User";
        break;
    case 'studio':
        $query = "SELECT * FROM Studio";
        break;
    case 'game':
        $query = "SELECT * FROM Game";
        break;
    case 'list':
        $query = "SELECT * FROM List";
        break;
    case 'review':
        $query = "SELECT * FROM Review";
        break;
    case 'genre':
        $query = "SELECT * FROM Genre";
        break;
    case 'platform':
        $query = "SELECT * FROM Platform";
        break;
    case 'gameplatform':
        $query = "SELECT * FROM GamePlatform";
        break;
    case 'userlist':
        $query = "SELECT * FROM `UserList`";
        break;
    case 'listgame':
        $query = "SELECT * FROM ListGame";
        break;
    case 'gamegenre':
        $query = "SELECT * FROM GameGenre";
        break;
    default:
        // If the query name is not recognized, display an error message
        echo "Error: Invalid query name.";
        exit;
}

$result = mysqli_query($conn, $query);
$websiteURL = '/~ssatyabrata/sergio.html';
//Fetch the result and display it as a table
echo "<table style='border-collapse: collapse; border: 1px solid black;'>";
// Display the table header
if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo "<tr>";
    foreach ($row as $key => $value) {
        echo "<th style='border: 1px solid black; padding: 5px; text-align: center;'>$key</th>";
    }
    echo "</tr>";
    // Display the rows
    do {
        echo "<tr>";
        foreach ($row as $key => $value) {
                echo "<td style='border: 1px solid black; padding: 5px; text-align: center;'>$value</td>";
            }
        echo "</tr>";
    } while ($row = mysqli_fetch_assoc($result));
} else {
    echo "<tr><td>No results found.</td></tr>";
}
echo "</table>";


mysqli_close($conn);
?>