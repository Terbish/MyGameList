<html>
<link href="tableStyle.css" rel="stylesheet">
<body>
<table>
<tr>
<th>GAME_NAME</th>
<th>RELEASE_DATE</th>
<th>PRICE</th>
</tr>

<?php
$servername = "cssql.seattleu.edu";
$username = "bd_esunchao";
$password = "3300esunchao-Tpwh";

$conn = mysqli_connect($servername, $username, $password, bd_esunchao);
$sql = "SELECT GAME_NAME, RELEASE_DATE, PRICE
FROM Game
WHERE RELEASE_DATE > '2010-01-01' AND PRICE > (
    SELECT AVG(PRICE)
    FROM Game
    WHERE RELEASE_DATE > '2010-01-01'
)
ORDER BY RELEASE_DATE;";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr><td>" . $row["GAME_NAME"] . "</td><td>" . $row["RELEASE_DATE"] . "</td><td>". $row["PRICE"] . "</td></tr>";
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