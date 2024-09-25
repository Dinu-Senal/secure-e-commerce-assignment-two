<?php

include '../config.php';	
include '../data.php';

if (!empty($_GET['item_number']) && !empty($_GET['tx']) 
    && !empty($_GET['amt']) && !empty($_GET['cc']) 
    && !empty($_GET['st'])) { 

    $item_number = $_GET['item_number'];  
    $txn_id = $_GET['tx']; 
    $payment_gross = $_GET['amt']; 
    $currency_code = $_GET['cc']; 
    $payment_status = $_GET['st']; 

    $product_name = htmlspecialchars($item_name);
    $product_price = htmlspecialchars($amount);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment Gateway</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            background-color: #f8f9fa;
            color: #333;
            font-family: 'Arial', sans-serif;
        }

        .content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .status {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            text-align: center;
        }

        .error {
            color: #dc3545;
            font-weight: 700;
        }

        .btn-custom {
            display: inline-block;
            padding: 10px 20px;
            border: 2px solid #000;
            border-radius: 5px;
            background-color: #fff;
            color: #000;
            font-weight: 500;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
            margin-top: 20px;
        }

        .btn-custom:hover {
            background-color: #000;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="status">
            <h2><?php echo !empty($txn_id) ? 'Your Payment has been Successful' : 'Your Payment has Failed'; ?></h2>
            <?php if (!empty($txn_id)) { ?>
                <h4 class="font-weight-bold mt-5">Payment Information</h4>
                <p class="mt-4"><strong>Transaction ID:</strong> <?php echo htmlspecialchars($txn_id); ?></p>
                <p><strong>Paid Amount:</strong> <?php echo htmlspecialchars($payment_gross) . ' ' . htmlspecialchars($currency_code); ?></p>
                <p><strong>Payment Status:</strong> <?php echo htmlspecialchars($payment_status); ?></p>
                
				<h4 class="font-weight-bold mt-4">Product Information</h4>
                <p class="mt-4"><strong>Name:</strong> <?php echo htmlspecialchars($product_name); ?></p>
                <p><strong>Price:</strong> <?php echo htmlspecialchars($product_price); ?></p>
            <?php } else { ?>
                <h1 class="error">Your Payment has Failed</h1>
            <?php } ?>
            <a href="../index.php" class="btn btn-custom">Back to Products</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
 