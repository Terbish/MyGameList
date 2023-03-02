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
$sql = "SELECT s.STUDIO_NAME, AVG(g.AVG_REVIEW_SCORE) AS AVG_REVIEW
        FROM Studio s
        JOIN Game g ON s.STUDIO_ID = g.STUDIO_ID
        GROUP BY s.STUDIO_NAME
        HAVING COUNT(g.GAME_ID) >= 1 AND AVG(g.AVG_REVIEW_SCORE) > 6.0;";
$result = mysqli_query($conn, $sql);

// print results out
if (mysqli_num_rows($result) > 0) {
    // output data from each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Studio Name: " .$row["STUDIO_NAME"]. ", Average Review Score: " .$row["AVG_REVIEW"]. "<br>";
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