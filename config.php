<?php
    //global variable configuration
    /*
    * PayPal configuration
    */
    // PayPal configuration
    define('PAYPAL_ID', 'dinusendanayake@gmail.com'); //seller email
    define('PAYPAL_SANDBOX', TRUE); //TRUE or FALSE
    //redirect page
    define('PAYPAL_RETURN_URL', 'http://localhost/assignment-two/paypal-php/success.php'); 
    define('PAYPAL_CANCEL_URL', 'http://localhost/assignment-two/paypal-php/cancel.php'); 
    define('PAYPAL_NOTIFY_URL', 'http://127.0.0.1/assignment-two/paypal-php/ipn.php');
    //define currency
    define('PAYPAL_CURRENCY', 'AUD');

    // Change not required
    define('PAYPAL_URL', (PAYPAL_SANDBOX == true)? "https://www.sandbox.paypal.com/cgi-bin/webscr": "https://www.paypal.com/cgi-bin/webscr");
?>