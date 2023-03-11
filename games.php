
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
    <title>PlayDB - Games</title>


</head>
<body class="gametab">
    <form class="sort-form" method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label class="sort-label" for="sort">Sort by:</label>
        <select class="sort-select" name="sort" id="sort">
            <option value="GAME_ID"<?php if ($sort_by == "GAME_ID") echo " selected"; ?>>Game ID</option>
            <option value="GAME_NAME"<?php if ($sort_by == "GAME_NAME") echo " selected"; ?>>Game Name</option>
            <option value="PRICE"<?php if ($sort_by == "PRICE") echo " selected"; ?>>Price</option>
            <option value="AVG_REVIEW_SCORE"<?php if ($sort_by == "AVG_REVIEW_SCORE") echo " selected"; ?>>Average Review Score</option>
            <option value="GAME_LANGUAGE"<?php if ($sort_by == "GAME_LANGUAGE") echo " selected"; ?>>Game Language</option>
            <option value="RELEASE_DATE"<?php if ($sort_by == "RELEASE_DATE") echo " selected"; ?>>Release Date</option>
            <option value="STUDIO_ID"<?php if ($sort_by == "STUDIO_ID") echo " selected"; ?>>Studio ID</option>
        </select>

        <label class="order-label" for="sort-order">Sort order:</label>
        <select class="order-select" name="order" id="order">
            <option value="ASC"<?php if ($sort_order == "ASC") echo " selected"; ?>>Ascending</option>
            <option value="DESC"<?php if ($sort_order == "DESC") echo " selected"; ?>>Descending</option>
        </select>
        <button class="sort-button" type="submit">Sort</button>
    </form>
    <?php
        echo "<br><button onclick=\"location.href='home.php'\">Back to Home Page</button>";
        ?>

	<?php
	// PHP code to execute the SQL query based on the selected sort option
    $servername = "cssql.seattleu.edu";
    $username = "bd_jshenli";
    $password = "3300jshenli-Yrws";
    $dbname = "bd_jshenli3";
	// Create a new connection to the database
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check if the connection was successful
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	// Define the sort options and their corresponding SQL queries
    $sort_options = array(
        "GAME_ID" => array(
            "ASC" => "SELECT * FROM Game ORDER BY GAME_ID ASC",
            "DESC" => "SELECT * FROM Game ORDER BY GAME_ID DESC"
        ),
        "GAME_NAME" => array(
            "ASC" => "SELECT * FROM Game ORDER BY GAME_NAME ASC",
            "DESC" => "SELECT * FROM Game ORDER BY GAME_NAME DESC"
        ),
        "PRICE" => array(
            "ASC" => "SELECT * FROM Game ORDER BY PRICE ASC",
            "DESC" => "SELECT * FROM Game ORDER BY PRICE DESC"
        ),
        "AVG_REVIEW_SCORE" => array(
            "ASC" => "SELECT * FROM Game ORDER BY AVG_REVIEW_SCORE ASC",
            "DESC" => "SELECT * FROM Game ORDER BY AVG_REVIEW_SCORE DESC"
        ),
        "GAME_LANGUAGE" => array(
            "ASC" => "SELECT * FROM Game ORDER BY GAME_LANGUAGE ASC",
            "DESC" => "SELECT * FROM Game ORDER BY GAME_LANGUAGE DESC"
        ),
        "RELEASE_DATE" => array(
            "ASC" => "SELECT * FROM Game ORDER BY RELEASE_DATE ASC",
            "DESC" => "SELECT * FROM Game ORDER BY RELEASE_DATE DESC"
        ),
        "STUDIO_ID" => array(
            "ASC" => "SELECT * FROM Game ORDER BY STUDIO_ID ASC",
            "DESC" => "SELECT * FROM Game ORDER BY STUDIO_ID DESC"
        )
    );

    // Check if a sort option and order were selected
    if (isset($_GET["sort"]) && isset($_GET["order"])) {
        $sort_by = $_GET["sort"];
        $sort_order = $_GET["order"];
    } else {
        $sort_by = "GAME_ID";
        $sort_order = "ASC";
    }

    // Get the SQL query for the selected sort option and order
    $sql = $sort_options[$sort_by][$sort_order];

    // Execute the query and store the result
    $result = $conn->query($sql);


    // Display the result as a table
    if ($result->num_rows > 0) {
        echo "<table class='game-table'>";
        echo "<tr><th>Game ID</th><th>Game Name</th><th>Price</th><th>Average Review Score</th><th>Game Language</th><th>Release Date</th><th>Studio ID</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["GAME_ID"] . "</td><td>" . $row["GAME_NAME"] . "</td><td>" . $row["PRICE"] . "</td><td>" . $row["AVG_REVIEW_SCORE"] . "</td><td>" . $row["GAME_LANGUAGE"] . "</td><td>" . $row["RELEASE_DATE"] . "</td><td>" . $row["STUDIO_ID"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No results found.";
    }

    
    // Close the database connection
    $conn->close();
        ?>
</body>
</html>