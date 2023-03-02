<?php
// Create a database connection
$conn = mysqli_connect("cssql.seattleu.edu", "bd_jshenli", "3300jshenli-Yrws", "bd_jshenli3");

// Define queries
$query1 = "SELECT User.USERNAME, Game.GAME_NAME, Review.REVIEW_SCORE
        FROM User
        INNER JOIN Review
        ON User.USER_ID = Review.USER_ID
        INNER JOIN Game
        ON Review.GAME_ID = Game.GAME_ID
        WHERE Game.GAME_LANGUAGE = 'ENG'";

$query2 = "SELECT g.GAME_NAME, AVG(r.REVIEW_SCORE) AS AVG_REVIEW_SCORE
FROM Game g
INNER JOIN Review r ON g.GAME_ID = r.GAME_ID
GROUP BY g.GAME_NAME
HAVING AVG_REVIEW_SCORE IS NOT NULL
ORDER BY AVG_REVIEW_SCORE DESC";

$query3 = "SELECT GAME_NAME, RELEASE_DATE, PRICE
FROM Game
WHERE RELEASE_DATE > '2010-01-01' AND PRICE > (
    SELECT AVG(PRICE)
    FROM Game
    WHERE RELEASE_DATE > '2010-01-01'
)
ORDER BY RELEASE_DATE";

$query4 = "SELECT s.STUDIO_NAME, AVG(g.AVG_REVIEW_SCORE) AS AVG_REVIEW
FROM Studio s
JOIN Game g ON s.STUDIO_ID = g.STUDIO_ID
GROUP BY s.STUDIO_NAME
HAVING COUNT(g.GAME_ID) >= 1 AND AVG(g.AVG_REVIEW_SCORE) > 6.0";
$query5 = "SELECT Game.GAME_NAME, Studio.STUDIO_NAME, Studio.`STUDIO_ID`
FROM Game
LEFT OUTER JOIN Studio ON Game.STUDIO_ID = Studio.STUDIO_ID
ORDER BY `STUDIO_ID`";

// Execute queries and get results
$result1 = mysqli_query($conn, $query1);
$result2 = mysqli_query($conn, $query2);
$result3 = mysqli_query($conn, $query3);
$result4 = mysqli_query($conn, $query4);
$result5 = mysqli_query($conn, $query5);

// Loop through each result and display the data
if (mysqli_num_rows($result1) > 0) {
    echo "<table><tr><th>Username</th><th>Game Name</th><th>Review Score</th></tr>";
    while($row = mysqli_fetch_assoc($result1)) {
      echo "<tr><td>" . $row["USERNAME"] . "</td><td>" . $row["GAME_NAME"] . "</td><td>" . $row["REVIEW_SCORE"] . "</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  };

while ($row = mysqli_fetch_assoc($result2)) {
  // Display data from result2
}

while ($row = mysqli_fetch_assoc($result3)) {
  // Display data from result3
}

while ($row = mysqli_fetch_assoc($result4)) {
  // Display data from result4
}

while ($row = mysqli_fetch_assoc($result5)) {
  // Display data from result5
}

// Close the database connection
mysqli_close($conn);
?>
