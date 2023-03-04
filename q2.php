<html>
<link href="tableStyle.css" rel="stylesheet">
<body>
<table>
<tr>
<th>GAME_NAME</th>
<th>AVG_REVIEW_SCORE</th>
</tr>

<?php
$servername = "cssql.seattleu.edu";
$username = "bd_esunchao";
$password = "3300esunchao-Tpwh";

$conn = mysqli_connect($servername, $username, $password, bd_esunchao);
$sql = "SELECT 
    g.GAME_NAME, AVG(r.REVIEW_SCORE) AS AVG_REVIEW_SCORE
FROM
    Game g
        INNER JOIN
    Review r ON g.GAME_ID = r.GAME_ID
GROUP BY g.GAME_NAME
HAVING AVG_REVIEW_SCORE IS NOT NULL
ORDER BY AVG_REVIEW_SCORE DESC;";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr><td>" . $row["GAME_NAME"] . "</td><td>" . $row["AVG_REVIEW_SCORE"] . "</td></tr>";
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