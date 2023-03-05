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
    case 'query1':
        $query = "SELECT User.USERNAME, Game.GAME_NAME, Review.REVIEW_SCORE FROM User 
                  JOIN Review ON User.USER_ID = Review.USER_ID 
                  JOIN Game ON Review.GAME_ID = Game.GAME_ID 
                  WHERE Game.GAME_LANGUAGE = 'ENG'";
        break;
    case 'query2':
        $query = "SELECT Game.GAME_NAME, AVG(Review.REVIEW_SCORE) AS AVG_SCORE FROM Game 
                  JOIN Review ON Game.GAME_ID = Review.GAME_ID 
                  GROUP BY Game.GAME_ID 
                  ORDER BY AVG_SCORE DESC";
        break;
    case 'query3':
        $query = "SELECT GAME_NAME, RELEASE_DATE, PRICE FROM Game
                  WHERE RELEASE_DATE > '2010-01-01' AND PRICE > (
                  SELECT AVG(PRICE) FROM Game
                  WHERE RELEASE_DATE > '2010-01-01')
                  ORDER BY RELEASE_DATE";
        break;
    case 'query4':
        $query = "SELECT s.STUDIO_NAME, AVG(g.AVG_REVIEW_SCORE) AS AVG_REVIEW FROM Studio s
                  JOIN Game g ON s.STUDIO_ID = g.STUDIO_ID
                  GROUP BY s.STUDIO_NAME
                  HAVING COUNT(g.GAME_ID) >= 1 AND AVG(g.AVG_REVIEW_SCORE) > 6.0";
        break;
    case 'query5':
        $query = "SELECT Game.GAME_NAME, Studio.STUDIO_NAME FROM Game 
                  JOIN Studio ON Game.STUDIO_ID = Studio.STUDIO_ID";
        break;
    default:
        // If the query name is not recognized, display an error message
        echo "Error: Invalid query name.";
        exit;
}

$result = mysqli_query($conn, $query);

//Fetch the result and display it as a table
echo "<table style='border-collapse: collapse; border: 1px solid black;'>";
// Display the table header
if ($result) {
    $row = mysqli_fetch_assoc($result);
    echo "<tr>";
    foreach ($row as $key => $value) {
        echo "<th style='border: 1px solid black; padding: 5px; text-align: center;'>$key</th>";
    }
    echo "</tr>";
    // Display the rows
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td style='border: 1px solid black; padding: 5px; text-align: center;'>$value</td>";
        }
        echo "</tr>";
    }
} else {
    echo "<tr><td>No results found.</td></tr>";
}
echo "</table>";

mysqli_close($conn);
?>
