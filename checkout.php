<?php
    // including configuration file
    include_once "config.php";
    // including data file
    include_once "data.php";
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
</head>

<body>
    <!-- Navbar -->
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
                        <a class="nav-link" href="#">Track Order</a>
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

    <!-- Checkout Section -->
    <div class="container checkout">
        <!-- Product Details -->
        <div class="row product-detail">
            <!-- Shopping Cart Section -->
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
                                    <th>Description</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="img/electric-bike-01.png" alt="Bronton"></td>
                                    <td>Bronton</td>
                                    <td>High-end electric bike with powerful motor</td>
                                    <td>185 AUD</td>
                                </tr>
                                <tr>
                                    <td><img src="img/electric-bike-02.png" alt="E-BMX"></td>
                                    <td>E-BMX</td>
                                    <td>Sturdy electric BMX bike for rugged use</td>
                                    <td>315 AUD</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end mt-4">
                            <h5 class="font-weight-bold mx-4">Total: 500 AUD</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Payment Options -->
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
                                <a href="<?php echo $paypalURL; ?>" class="btn btn-custom">Pay with PayPal</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="img-column">
                                    <img src="img/stripe-logo.png" alt="E-BMX" style="width: 100%;">
                                </td>
                                <td class="align-middle">
                                    <button type="button" class="btn btn-custom mx-5">Select Stripe</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="img-column">
                                    <img src="img/google-pay-logo.png" alt="E-BMX" style="width: 100%;">
                                </td>
                                <td class="align-middle">
                                    <button type="button" class="btn btn-custom mx-5">Select Google Pay</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="img-column">
                                    <img src="img/apple-pay.png" alt="E-BMX" style="width: 100%;">
                                </td>
                                <td class="align-middle">
                                    <button type="button" class="btn btn-custom mx-5">Select Apple Pay</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024 My Shop. All rights reserved.</p>
        <p>Our Location:<br>Swanston St, Melbourne,<br>VIC 3000, Australia</p>
        <p>Call: +61-000-000-000<br>Email: info@alicebikeshop.com</p>
        <p>2020 www.alicebikeshop.com | All Rights Reserved</p>
    </div>

</body>

</html>
