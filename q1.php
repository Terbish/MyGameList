<html>
<link href="tableStyle.css" rel="stylesheet">
<body>
<table>
<tr>
<th>USERNAME</th>
<th>GAME_NAME</th>
<th>REVIEW_SCORE</th>
</tr>

<?php
$servername = "cssql.seattleu.edu";
$username = "bd_esunchao";
$password = "3300esunchao-Tpwh";

$conn = mysqli_connect($servername, $username, $password, bd_esunchao);
$sql = "SELECT User.USERNAME, Game.GAME_NAME, Review.REVIEW_SCORE
FROM User
INNER JOIN Review
ON User.USER_ID = Review.USER_ID
INNER JOIN Game
ON Review.GAME_ID = Game.GAME_ID
WHERE Game.GAME_LANGUAGE = 'ENG';";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr><td>" . $row["USERNAME"] . "</td><td>" . $row["GAME_NAME"] . "</td><td>". $row["REVIEW_SCORE"] . "</td></tr>";
	}
}
else{
	echo "0 results";
}

mysqli_close($conn);
?> 

</table>
</body>
</html>