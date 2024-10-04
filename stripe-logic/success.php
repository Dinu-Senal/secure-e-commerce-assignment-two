<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment Gateway</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Ensuring body and html take full height */
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
            <h2>Your Payment has been Successful</h2>
            <a href="../clear_session.php" class="btn btn-custom">Back to Products</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
