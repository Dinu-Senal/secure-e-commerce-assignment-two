<?php
    // including configuration file
    include_once "config.php";
    
    // initialise session
    session_start();

    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product']) && isset($_POST['price'])) {
        $product = $_POST['product'];
        $price = $_POST['price'];

        // initializing the cart
        if(!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        // checking if the product already exists
        $product_found = false;
        foreach($_SESSION['cart'] as &$item) {
            if($item['product'] == $product) {
                $product_found = true; 

                
                if ($_POST['action'] === 'increase') {
                    $item['quantity'] += 1;
                    $item['total_price'] = $item['quantity'] * $item['price'];
                } elseif ($_POST['action'] === 'decrease') {
                    $item['quantity'] -= 1;
                    $item['total_price'] = $item['quantity'] * $item['price'];
                    
                    // removing item if quantity is zero
                    if ($item['quantity'] <= 0) {
                        $index = array_search($item, $_SESSION['cart']);
                        unset($_SESSION['cart'][$index]);
                        // resetting the array key
                        $_SESSION['cart'] = array_values($_SESSION['cart']);
                    }
                }
                break;
            }
        }

        // if the product was not found, add it as a new product
        if(!$product_found) {
            $_SESSION['cart'][] = [
                'product' => $product,
                'price' => $price,
                'quantity' => 1,
                'total_price' => $price
            ];
        };

        // redirecting to same page
        header('Location: checkout.php');
        exit();
    }

    // checking if cart is empty
    $cart_items = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Alice's Electronic Bike Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/index.css" />
    <link rel="stylesheet" type="text/css" href="styles/checkout.css" />
    <script async src="https://pay.google.com/gp/p/js/pay.js" onload="onGooglePayLoaded()"></script>
    <script src="gpay-logic/index.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">Alice's Electronic Bike Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">24x7 Support</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- checkout Section -->
    <div class="container checkout">
        <!-- product Details -->
        <div class="row product-detail">
            <!-- shopping cart section -->
            <div class="col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        Shopping Cart
                    </div>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <table class="table border-0 w-100">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Total Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($_SESSION['cart'])): ?>
                                    <?php foreach($_SESSION['cart'] as $item): ?>
                                        <tr>
                                            <td><img src="img/<?php echo $item['product']; ?>.png" alt="<?php echo $item['product']; ?>"></td>
                                            <td><?php echo $item['product']; ?></td>
                                            <td>
                                                <?php echo $item['quantity']; ?>
                                                <!-- increasing quantity -->
                                                <form action="checkout.php" method="POST" style="display:inline;">
                                                    <input type="hidden" name="action" value="increase">
                                                    <input type="hidden" name="product" value="<?php echo $item['product']; ?>">
                                                    <input type="hidden" name="price" value="<?php echo $item['price']; ?>">
                                                    <button type="submit" class="btn btn-sm btn-dark">+</button>
                                                </form>
                                                <!-- decreasing quantity -->
                                                <form action="checkout.php" method="POST" style="display:inline;">
                                                    <input type="hidden" name="action" value="decrease">
                                                    <input type="hidden" name="product" value="<?php echo $item['product']; ?>">
                                                    <input type="hidden" name="price" value="<?php echo $item['price']; ?>">
                                                    <button type="submit" class="btn btn-sm btn-danger">-</button>
                                                </form>
                                            </td>
                                            <td><?php echo number_format($item['total_price'], 2); ?> AUD</td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="4">No items in the cart.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>

                        <?php
                            $total_price=0;
                            foreach($cart_items as $item) {
                                $total_price += $item['total_price'];
                            }
                            $_SESSION['payable'] = $total_price;
                        ?>
                        <!-- pass total price as a JavaScript variable -->
                        <script type="text/javascript">
                            var totalPrice = <?php echo isset($_SESSION['payable']) ? $_SESSION['payable'] : 0; ?>;
                        </script>

                        <div class="d-flex justify-content-end mt-4">
                            <h5 class="font-weight-bold mx-4">Total: <?php echo isset($_SESSION['payable']) ? $_SESSION['payable'] : 0; ?> AUD</h5>
                        </div>
                        <?php echo $i["payable"] . PAYPAL_CURRENCY; ?>

                        <?php
                            if(isset($_GET['action']) && $_GET['action'] == 'clear') {
                                // clearing the cart session
                                unset($_SESSION['cart']); 
                                // reloading the page
                                header('Location: checkout.php');
                            }
                        ?>
                        <div class="d-flex justify-content-start mt-4">
                            <a href="checkout.php?action=clear" class="btn btn-danger">Remove All From Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- billing information -->
        <div class="col-md-12">
            <div class="card table-card">
                <div class="card-header">
                    Billing Information
                </div>
                <div class="card-body">
                    <form>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="firstName" class="form-label">First name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="First name">
                            </div>
                            <div class="col">
                                <label for="lastName" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Last name">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <div class="input-group">
                                <span class="input-group-text">@</span>
                                <input type="text" class="form-control" id="username" placeholder="Username">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email (Optional)</label>
                            <input type="email" class="form-control" id="email" placeholder="you@example.com">
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="1234 Main St">
                        </div>

                        <div class="mb-3">
                            <label for="address2" class="form-label">Address 2 (Optional)</label>
                            <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label for="country" class="form-label">Country</label>
                                <select class="form-select" id="country">
                                    <option selected>Choose...</option>
                                    <option value="1">Australia</option>
                                    <option value="2">United States</option>
                                    <option value="3">Canada</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="state" class="form-label">State</label>
                                <select class="form-select" id="state">
                                    <option selected>Choose...</option>
                                    <option value="1">Victoria</option>
                                    <option value="2">New South Wales</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="zip" class="form-label">Zip</label>
                                <input type="text" class="form-control" id="zip" placeholder="Zip">
                            </div>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="sameAddress">
                            <label class="form-check-label" for="sameAddress">
                                Shipping address is the same as my billing address
                            </label>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="saveInfo">
                            <label class="form-check-label" for="saveInfo">
                                Save this information for next time
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- payment options -->
        <div class="col-md-12">
            <div class="card table-card">
                <div class="card-header">
                    Select Payment
                </div>
                <div class="card-body">
                    <table class="table no-border">
                        <tbody>
                            <tr>
                                <td class="img-column">
                                    <img src="img/paypal-logo.png" alt="Bronton" style="width: 100%;">
                                </td>
                                <td class="align-middle">
                                    <form action="<?php echo PAYPAL_URL; ?>" method="POST" style="display:inline;">
                                        <!-- Specify a Buy Now button. -->
                                        <input type="hidden" name="cmd" value="_xclick" />

                                        <!-- Identify your business so that you can collect the payments. -->
                                        <input type="hidden" name="business" value="<?php echo PAYPAL_ID; ?>" />

                                        <!-- Specify details about the item that buyers will purchase. part of this field will be used in ipn.php-->
                                        <input type="hidden" name="item_name" value="New Order" />
                                        <input type="hidden" name="item_number" value="212" />
                                        <input type="hidden" name="amount" value="<?php echo isset($_SESSION['payable']) ? $_SESSION['payable'] : 0; ?>" />
                                        <input type="hidden" name="currency_code" value="<?php echo PAYPAL_CURRENCY; ?>" />

                                        <!-- Specify URLs -->
                                        <input type="hidden" name="return" value="<?php echo PAYPAL_RETURN_URL; ?>">
                                        <input type="hidden" name="notify_url" value="<?php echo PAYPAL_NOTIFY_URL; ?>">

                                        <button type="submit" class="btn btn-sm btn-custom">Pay with PayPal</button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="img-column">
                                    <img src="img/stripe-logo.png" alt="E-BMX" style="width: 100%;">
                                </td>
                                <td class="align-middle">
                                    <form id="payment-form">
                                        <div id="card-element"><!-- A Stripe Element will be inserted here. --></div>
                                        <button id="submit-button">Pay with Stripe</button>
                                    </form>
                                </td>
                            </tr>

                            <div id="payment-status"></div>

                            <script type="text/javascript">
                                var stripe = Stripe('pk_test_51Q5lc1Roz41EYmvzqAW9gQ0qNq82lJc4YC48IWVJNxASaOtrWkK1UR4pBmjmuLdCOqYIGKxNrz81C3n6YyakdzGh00xsMkSbWr');
                                var elements = stripe.elements();
                                var cardElement = elements.create('card');
                                cardElement.mount('#card-element');

                                // Create the card element, hiding the postal code field
                                var cardElement = elements.create('card', {
                                    hidePostalCode: true  // Disables the ZIP/postal code field
                                });

                                var form = document.getElementById('payment-form');
                                var submitButton = document.getElementById('submit-button');
                                
                                form.addEventListener('submit', function (event) {
                                    event.preventDefault();

                                    stripe.createPaymentMethod('card', cardElement).then(function(result) {
                                        if (result.error) {
                                            // Display error to the user
                                            document.getElementById('payment-status').textContent = result.error.message;
                                        } else {
                                            // Send the payment method ID to your server
                                            fetch('./process_payment.php', {
                                                method: 'POST',
                                                headers: {
                                                    'Content-Type': 'application/json',
                                                },
                                                body: JSON.stringify({
                                                    paymentMethodId: result.paymentMethod.id,
                                                    amount: totalPrice // Pass the total price from your session
                                                }),
                                            }).then(function(response) {
                                                return response.json();
                                            }).then(function(paymentResult) {
                                                if (paymentResult.error) {
                                                    alert("error")
                                                    // Display error to the user
                                                    document.getElementById('payment-status').textContent = paymentResult.error;
                                                } else {
                                                    // Payment was successful
                                                    alert("dsdsd")
                                                    window.location.href = "success-page.php";
                                                }
                                            });
                                        }
                                    });
                                });
                            </script>

                            <tr>
                                <td class="img-column">
                                    <img src="img/google-pay-logo.png" alt="E-BMX" style="width: 100%;">
                                </td>
                                <td class="align-middle">
                                    <div id="google-pay-button" class="mx-5"></div>
                                </td>
                                <div id="response-message"></div>
                            </tr>
                            <tr>
                                <td class="img-column">
                                    <img src="img/apple-pay.png" alt="E-BMX" style="width: 100%;">
                                </td>
                                <td class="align-middle">
                                    <button type="button" class="btn btn-custom mx-5">Pay with Apple Pay</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="footer">
        <p>&copy; 2024 My Shop. All rights reserved.</p>
        <p>Our Location:<br>Swanston St, Melbourne,<br>VIC 3000, Australia</p>
        <p>Call: +61-000-000-000<br>Email: info@alicebikeshop.com</p>
        <p>2020 www.alicebikeshop.com | All Rights Reserved</p>
    </div>

</body>

</html>
