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
$sql = "SELECT User.USERNAME, Game.GAME_NAME, Review.REVIEW_SCORE
        FROM User
        INNER JOIN Review
        ON User.USER_ID = Review.USER_ID
        INNER JOIN Game
        ON Review.GAME_ID = Game.GAME_ID
        WHERE Game.GAME_LANGUAGE = 'ENG';";
$result = mysqli_query($conn, $sql);

// print results out
if (mysqli_num_rows($result) > 0) {
    // output data from each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Username: " .$row["USERNAME"]. ", Game Name: " .$row["GAME_NAME"]. ", Review Score: " .$row["REVIEW_SCORE"]. "<br>";
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