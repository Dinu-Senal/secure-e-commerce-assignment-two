<?php
    // including configuration file
    include_once "php/config.php";

    // initialise session
    session_start();

    // dummy data 
    $dummy_data = [
        ["itemName" => "Bronton", "price" => 25, "itemNumber" => "E1", "image" => "img/Bronton.png"],
        ["itemName" => "E-BMX", "price" => 50, "itemNumber" => "E2", "image" => "img/E-BMX.png"],
        ["itemName" => "F-65", "price" => 75, "itemNumber" => "E1", "image" => "img/F-65.png"],
    ]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alice's Electronic Bike Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/index.css" />
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
                        <a class="nav-link" href="checkout.php">Shopping Cart</a>
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

    <!-- Hero Section -->
    <div class="content">
        <div class="hero">
            <div class="container">
                <h1>Welcome</h1>
                <p>Discover the best items designed for quality and durability, powered by innovation.</p>
            </div>
        </div>

        <!-- Cards Section -->
        <div class="container cards-container">
            <div class="row">
                <?php foreach ($dummy_data as $product): ?>
                    <div class="col-md-4">
                        <div class="card-custom">
                            <img src="<?php echo $product['image']; ?>" alt="<?php echo $product["itemName"]?>">
                            <h5><?php echo $product["itemName"]; ?></h5>
                            <p>Price: $<?php echo $product['price']; ?></p>
                            <form action="checkout.php" method="POST">
                                <input type="hidden" name="product" value="<?php echo $product["itemName"]; ?>" >
                                <input type="hidden" name="price" value="<?php echo $product["price"]; ?>" >
                                <input type="hidden" name="itemNumber" value="<?php echo $product["itemNumber"]; ?>" >
                                <button type="submit" class="btn-custom">Buy</button>
                            </form>
                        </div>
                    </div>
                <?php endforeach; ?>
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
