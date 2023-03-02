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
$sql = "SELECT GAME_NAME, RELEASE_DATE, PRICE
        FROM Game
        WHERE RELEASE_DATE > '2010-01-01' AND PRICE > (
            SELECT AVG(PRICE)
            FROM Game
            WHERE RELEASE_DATE > '2010-01-01'
        )
        ORDER BY RELEASE_DATE;";
$result = mysqli_query($conn, $sql);

// print results out
if (mysqli_num_rows($result) > 0) {
    // output data from each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Game Name: " .$row["GAME_NAME"]. ", Release Date: " .$row["RELEASE_DATE"]. ", Price: " .$row["PRICE"]. "<br>";
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