<html>
<link href="tableStyle.css" rel="stylesheet">
<body>
<table>
<tr>
<th>STUDIO_ID</th>
<th>STUDIO_NAME</th>
<th>STUDIO_SCORE</th>
</tr>

<?php
$servername = "cssql.seattleu.edu";
$username = "bd_esunchao";
$password = "3300esunchao-Tpwh";

$conn = mysqli_connect($servername, $username, $password, bd_esunchao);
$sql = "SELECT Studio.STUDIO_ID, Studio.STUDIO_NAME, AVG(Game.AVG_REVIEW_SCORE) AS 
STUDIO_SCORE
FROM Studio 
INNER JOIN Game ON Studio.STUDIO_ID = Game.STUDIO_ID
GROUP BY Studio.STUDIO_ID
HAVING AVG(Game.AVG_REVIEW_SCORE) >= 3.0;";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr><td>" . $row["STUDIO_ID"] . "</td><td>" . $row["STUDIO_NAME"] . "</td><td>". $row["STUDIO_SCORE"] . "</td></tr>";
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