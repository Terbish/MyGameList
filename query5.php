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
$sql = "SELECT Game.GAME_NAME, Studio.STUDIO_NAME, Studio.`STUDIO_ID`
        FROM Game
        LEFT OUTER JOIN Studio ON Game.STUDIO_ID = Studio.STUDIO_ID
        ORDER BY `STUDIO_ID`;";
$result = mysqli_query($conn, $sql);

// print results out
if (mysqli_num_rows($result) > 0) {
    // output data from each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Game Name: " .$row["GAME_NAME"]. ", Studio Name: " .$row["STUDIO_NAME"]. ", Studio ID No.: " .$row["STUDIOO_ID"]. "<br>";
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