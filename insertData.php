<?php
session_start();
// Include database connection file 
include_once 'dbConnect.php';

// retrieving amount, item, and user_id from the input paypal form 
$amount = $_GET['amount'];
$item = $_GET['item'];
$user_id = $_GET['user_id'];
$status = "pending";

// Insert subscription data into the database
$insert = $db->query("INSERT INTO subscription(price, status, user_id) VALUES('" . $amount . "', '" . $status . "', '" . $user_id . "')");

//getting the id of the last inserted record
$last_id = $db->insert_id;

//storing the subscription id in the session
$_SESSION['subscription_id'] = $last_id;