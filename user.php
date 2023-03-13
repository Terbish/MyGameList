<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #0077cc;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
            color: #252525;
        }

        tr:hover {
            background-color: #ddd;
        }
        </style>
</head>
<body style="background-color: #252525;color:whitesmoke; padding-left: 10%;">
    <div>
        <p>Welcome: <?php echo $_SESSION['USER_EMAIL'] ?> </p>

    </div>

    <div>
        <?php
        $conn = mysqli_connect('cssql.seattleu.edu', 'bd_jshenli', '3300jshenli-Yrws', 'bd_jshenli3');

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $userid = $_SESSION["USER_ID"];
        $sql = "SELECT r.REVIEW_SCORE , r.REVIEW_DATE, r.REVIEW_TEXT, g.GAME_NAME
                FROM `Review` r
                INNER JOIN Game g ON r.GAME_ID = g.GAME_ID
                WHERE r.USER_ID = $userid ";

        

        // Execute query and fetch results
        $result = mysqli_query($conn, $sql);

        // Print table header
        echo "<table>";
        echo "<tr><th>Review Date</th><th>Score</th><th>Review Text</th><th>Game Name</th></tr>";

        // Print table rows with data from query result
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["REVIEW_DATE"] . "</td>";
            echo "<td>" . $row["REVIEW_SCORE"] . "</td>";
            echo "<td>" . $row["REVIEW_TEXT"] . "</td>";
            echo "<td>" . $row["GAME_NAME"] . "</td>";
            echo "</tr>";
        }

        // Close table
        echo "</table>";

        // Close connection
        mysqli_close($conn);
        ?>
    </div>
    <?php
    echo "<br><button onclick=\"location.href='index.php'\">Back to Home Page</button>";
        ?>
</body>
</html>
