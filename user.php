<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayDB - User</title>
</head>
<body>


    <?php
    $servername = "cssql.seattleu.edu";
    $username = "bd_jshenli";
    $password = "3300jshenli-Yrws";
    $dbname = "bd_jshenli3";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Get user ID based on email
    $user_id_query = "SELECT USER_ID FROM User WHERE USER_EMAIL = '$user_email'";
    $user_id_result = $mysqli->query($user_id_query);
    $user_id = $user_id_result->fetch_assoc()['USER_ID'];

    // Get user's lists
    $lists_query = "SELECT * FROM List WHERE USER_ID = '$user_id'";
    $lists_result = $mysqli->query($lists_query);

    // Get user's reviews
    $reviews_query = "SELECT * FROM Review WHERE USER_ID = '$user_id'";
    $reviews_result = $mysqli->query($reviews_query);

    // Display user's lists
    echo "<h3>Lists:</h3>";
    while ($row = $lists_result->fetch_assoc()) {
    echo "<p>List ID: " . $row['LIST_ID'] . "</p>";
    echo "<p>List Name: " . $row['LIST_NAME'] . "</p>";
    }

    // Display user's reviews
    echo "<h3>Reviews:</h3>";
    while ($row = $reviews_result->fetch_assoc()) {
    echo "<p>Review ID: " . $row['REVIEW_ID'] . "</p>";
    echo "<p>Review Text: " . $row['REVIEW_TEXT'] . "</p>";
    echo "<p>Review Score: " . $row['REVIEW_SCORE'] . "</p>";
    }

    // Close connection
    $mysqli -> close();
    ?>
</body>
</html>