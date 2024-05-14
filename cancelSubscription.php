<!DOCTYPE html>
<html>
<head>
    <title>Payment Status</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/success_page.css">
</head>
<body>

    <?php
    session_start();
    include_once 'dbConnect.php'; // Include second database connection file

    // Checks if user is logged in and getting user ID
    if(isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];

        // Delete subscription record from the database
        $delete_query = "DELETE FROM subscription WHERE user_id = $user_id";
        $delete_result = $db->query($delete_query);

        if($delete_result) {
            // Subscription cancelled successfully
            echo '<div class="success_container">
            <div class="success_sub">
                <img src="images/success.png">
                <h1>Success</h1>
                <p>Your subscription had been successfully cancelled!</p>
                <button onclick="checkLogin()">Back to Home</button>

            </div>
            
          </div>';
        } else {
            // Error occurred while cancelling subscription
            echo "Error cancelling subscription!";
        }
    } else {
        // User not logged in
        echo "User not logged in!";
    }
    ?>
    <script>
        function checkLogin() {
                window.location.href = "index.php"; // Redirect to login page
        }
    </script>
</body>
</html>
