<?php
    //global variable configuration
    // PayPal configuration
    define('PAYPAL_ID', 'dinusendanayake@gmail.com'); //seller email
    define('PAYPAL_SANDBOX', TRUE); //TRUE or FALSE
    //redirect page
    define('PAYPAL_RETURN_URL', 'http://localhost/assignment-two/paypal-php/success.php'); 
    define('PAYPAL_CANCEL_URL', 'http://localhost/assignment-two/paypal-php/cancel.php'); 
    define('PAYPAL_NOTIFY_URL', 'http://127.0.0.1/assignment-two/paypal-php/ipn.php');
    //define currency
    define('PAYPAL_CURRENCY', 'AUD');

    define('PAYPAL_URL', (PAYPAL_SANDBOX == true) ? "https://www.sandbox.paypal.com/cgi-bin/webscr" : "https://www.paypal.com/cgi-bin/webscr");

    // Payment details
    $item_name = "Order 001";
    $item_number = "12345"; // Unique item number
    $amount = "500.00"; // Amount to be paid

    // PayPal URL with parameters
    $paypalURL = PAYPAL_URL . "?cmd=_xclick&business=" . PAYPAL_ID 
             . "&item_name=" . urlencode($item_name) 
             . "&item_number=" . urlencode($item_number) 
             . "&amount=" . urlencode($amount) 
             . "&currency_code=" . PAYPAL_CURRENCY 
             . "&return=" . urlencode(PAYPAL_RETURN_URL) 
             . "&cancel_return=" . urlencode(PAYPAL_CANCEL_URL)
             . "&notify_url=" . urlencode(PAYPAL_NOTIFY_URL);
?>