<html>
<link href="tableStyle.css" rel="stylesheet">
<body>
<table>
<?php
$servername = "cssql.seattleu.edu";
$username = "bd_esunchao";
$password = "3300esunchao-Tpwh";

$conn = mysqli_connect($servername, $username, $password, bd_esunchao);
$sql = $_POST['query'];
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	
    echo "<tr>";
  	while ($column = mysqli_fetch_field($result)) {
    		echo "<th>" . $column->name . "</th>";
  	}
    echo "</tr>";

    while($row = mysqli_fetch_row($result)) {
    	echo "<tr>\n";
    	$cols = mysqli_num_fields($result); 
    	for ($i = 0; $i < $cols; $i++) {
    	  echo "<td>" . $row[$i] . "</td>\n";
    	}
    echo "</tr>\n";
    }
  echo "</table>\n";
} else {
  echo "0 results";
}

mysqli_close($conn);
?> 

</table>
</body>
</html>
