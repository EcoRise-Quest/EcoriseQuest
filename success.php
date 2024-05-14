<!DOCTYPE html>
<html5>
<head>
    <title>Payment Status</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/success_page.css">
</head>
<body>

<?php
session_start();

// Include configuration file and database connection file for the subscription feature
include_once 'config.php';
include_once 'dbConnect.php';
include_once 'connect.php';

//getting subscription_id from session
$pid = $_SESSION['subscription_id'];

if (isset($_GET['PayerID'])) {
    // Display success message if payment is successful
    echo '<div class="success_container">
            <div class="success_sub">
                <img src="images/success.png">
                <h1>Success</h1>
                <p>Your payment has been successful!</p>
                <button onclick="checkLogin()">Back to Home</button>
            </div>
          </div>';

    $insert = $conn->query("UPDATE subscription SET status='completed' where subscription_id='" . $pid . "'");
} else {
    // Display failure message if payment failed
    echo '<h1>Your Payment has been failed</h1>';
}

?>
    <script>
        function checkLogin() {
            window.location.href = "index.php"; // Redirect to login page
        }
    </script>
</body>
</html5>