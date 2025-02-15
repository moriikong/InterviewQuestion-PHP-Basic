<?php
    // Check if the request method is POST
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        // Check if 'username' is set in the POST request
        if (isset($_POST["username"])) {
            $username = trim($_POST["username"]);// Trim whitespace from input

            // Verify if the username matches "abc"
            if ($username === "abc") {
                echo "Verified";// Return success message
            } else {
                echo "Error";// Return error if username is incorrect
            }
        } else {
            echo "Error";// Return error if 'username' is not provided
        }
    } else {
        echo "Error";// Return error if request method is not POST
    }
?>
