<?php
// Start the HTML document and define the page structure

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retail Inventory Dashboard</title>
    <style>
        /* Add basic CSS styling for the layout and design */

        body {
            display: flex;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #eef2f3;
            flex-direction: column;                                                                            
            height: 100%;
            margin: 0;
            padding: 0;
             
        }

        .container {
            flex: 1;
            width: 80%;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .nav a {
            box-shadow: 0 0 10px rgba(0, 0, 0, 1);
            margin: 50px;
            padding: 10px;
            text-decoration: none;
            color: #333;
            background-color: #979799ff;
            
            
        }

        .footer {
            text-align: center;
            font-size: 1.5em;
            color: #777;
            /* To position footer to the bottom of page */
            position: absolute;
            bottom: 0;
            width: 100%;
            
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Retail Inventory & Sales Management System</h1>
    </div>

    <div class="nav">
        <br>
        <h3><a href="add_product.php">Add Product</a></h3><br>
        <h3><a href="view_products.php">View Products</a></h3><br>
        <h3><a href="record_sale.php">Record Sale</a></h3>
    </div>




    <div class="footer">
        <p>System Development Portfolio Project | Build with PHP, MySQL & Javascript</p>
    </div>
    
</body>
</html>