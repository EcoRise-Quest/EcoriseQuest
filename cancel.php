<?php
session_start();

//connecting database connection file
include_once 'config.php';
include_once 'dbConnect.php';
include_once 'connect.php';

//getting subscription_id from session
$pid = $_SESSION['subscription_id'];

//updating the subscription status to "cancelled" in the database
$insert = $conn->query("UPDATE subscription SET status='cancelled' where subscription_id='".$pid."'"); //change to $db later
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Payment Status</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/success_page.css">
</head>
<body>
    <div class="success_container">
        <div class="success_sub">
            <img src="images/success.png">
            <h1>Success</h1>
            <p>Your subscrption has been successfully cancelled!</p>
            <button onclick="checkLogin()">Back to Home</button>

        </div>
    </div>

    <script>
        function checkLogin() {
            window.location.href = "index.php"; // Redirect to login page
        }
    </script>
</body>
</html>