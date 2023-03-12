<?php
    session_start();
    // Connect to the database
    $conn = mysqli_connect('cssql.seattleu.edu', 'bd_jshenli', '3300jshenli-Yrws', 'bd_jshenli3');


    // Check for errors
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    // Get the review from the form data
    $review = $_POST['review'];
    $userid = $_SESSION['USER_ID'];
    $score = $_POST['score'];
    $gameid = $_SESSION['gameid'];

    // Insert the review into the database
    $sql = "INSERT INTO Review (REVIEW_TEXT, REVIEW_SCORE, USER_ID, GAME_ID) VALUES ('$review', '$score', '$userid', '$gameid')";

    if ($conn->query($sql) === TRUE) {
        // If the review was saved successfully, return a response with an HTTP 200 status code indicating success
        http_response_code(200);
        echo json_encode(['success' => true, 'message' => 'Review saved successfully']);
        header('Location: GodofWar.php');
    } else {
        // If there was an error saving the review, return a response with an HTTP 500 status code indicating an internal server error
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => 'Failed to save review']);
    }

    // Close the database connection
    $conn->close();
?>
