<?php
include_once 'dbConnect.php';

// Function to check subscription status
function checkSubscriptionStatus($user_id, $db)
{
    if ($user_id !== NULL) {
        $stmt = $db->prepare("SELECT * FROM subscription WHERE user_id = ?");
        $stmt->bind_param("i", $user_id); // "i" indicates the variable type is integer

        $stmt->execute();

        $result = $stmt->get_result();

        return ($result->num_rows > 0);
    } else {
        return false;
    }
}