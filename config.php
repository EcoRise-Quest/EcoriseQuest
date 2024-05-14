<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php

// PayPal configuration 
define('PAYPAL_ID', 'sb-yga43t30657165@business.example.com');
define('PAYPAL_SANDBOX', TRUE); //TRUE or FALSE
 
define('PAYPAL_RETURN_URL', 'http://localhost/ecorise/ecorise_web/profile%20page/success.php'); //path to success.php page
define('PAYPAL_CANCEL_URL', 'http://localhost/ecorise/ecorise_web/profile%20page/cancelSubscription.php');  //path to cancelSub.php page
define('PAYPAL_CURRENCY', 'USD');

// Database configuration 
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'ecorise');

// Change not required 
define('PAYPAL_URL', (PAYPAL_SANDBOX == true)?"https://www.sandbox.paypal.com/cgi-bin/webscr":"https://www.paypal.com/cgi-bin/webscr");