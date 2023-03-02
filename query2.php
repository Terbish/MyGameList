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

// Create vars
$sql = "SELECT g.GAME_NAME, AVG(r.REVIEW_SCORE) AS AVG_REVIEW_SCORE
        FROM Game g
        INNER JOIN Review r ON g.GAME_ID = r.GAME_ID
        GROUP BY g.GAME_NAME
        HAVING AVG_REVIEW_SCORE IS NOT NULL
        ORDER BY AVG_REVIEW_SCORE DESC";
$result = mysqli_query($conn, $sql);

// print results out
if (mysqli_num_rows($result) > 0) {
    // output data from each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Game Name: " .$row["GAME_NAME"]. ", Avg Score: " .$row["AVG_REVIEW_SCORE"]. "<br>";
    }
}
else {
    echo "0 results";
}

// free result and close connection
mysqli_free_result($result);
$stmt->close();
$conn->close();
?>