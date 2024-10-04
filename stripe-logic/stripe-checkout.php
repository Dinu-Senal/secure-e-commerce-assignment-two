<?php

require __DIR__ . "/../vendor/autoload.php";

session_start();

$stripe_secret_key = "sk_test_51Q5lc1Roz41EYmvzjwBmnzY4AOFzssggW1iyr6J8PPf0DUcD9aKeSlmzsPOQhQylPTXxaeT329nrMJp7tjoSpumh00cpXadM6u";

\Stripe\Stripe::setApiKey($stripe_secret_key);

$cart_items = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
$line_items = [];

// populate line_items from cart
foreach ($cart_items as $item) {
    $line_items[] = [
        "quantity" => $item['quantity'],
        "price_data" => [
            "currency" => "aud",
            "unit_amount" => $item['price'] * 100,
            "product_data" => [
                "name" => $item['product']
            ]
        ]
    ];
}

if (empty($line_items)) {
    echo "Your cart is empty.";
    exit;
}

try {
    $checkout_session = \Stripe\Checkout\Session::create([
        "mode" => "payment",
        "success_url" => "http://localhost/assignment-two/stripe-logic/success.php",
        "cancel_url" => "http://localhost/assignment-two/index.php",
        "locale" => "auto",
        "line_items" => $line_items
    ]);
} catch (\Stripe\Exception\ApiErrorException $e) {
    // handling the error
    error_log("Stripe API Error: " . $e->getMessage());
    echo "There was an error processing your payment.";
    exit;
}

// redirect to checkout
http_response_code(303);
header("Location: " . $checkout_session->url);
exit;
