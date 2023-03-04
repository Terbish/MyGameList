<html>
<link href="tableStyle.css" rel="stylesheet">
<body>
<table>
<tr>
<th>GAME_NAME</th>
<th>STUDIO_NAME</th>
<th>STUDIO_ID</th>
</tr>

<?php
$servername = "cssql.seattleu.edu";
$username = "bd_esunchao";
$password = "3300esunchao-Tpwh";

$conn = mysqli_connect($servername, $username, $password, bd_esunchao);
$sql = "SELECT Game.GAME_NAME, Studio.STUDIO_NAME, Studio.`STUDIO_ID`
FROM Game
LEFT OUTER JOIN Studio ON Game.STUDIO_ID = Studio.STUDIO_ID
ORDER BY `STUDIO_ID`;";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr><td>" . $row["GAME_NAME"] . "</td><td>" . $row["STUDIO_NAME"] . "</td><td>". $row["STUDIO_ID"] . "</td></tr>";
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