<?php
include 'db_config.php'; // Include the database configuration file

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Check if the form is submitted using POST method
    // Collects the data the user typed into the form filds
    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    // Creates a SQL command to insert the new product into the database
    $sql = "INSERT INTO products (name, category, price, quantity)
            VALUES ('$name', '$category', '$price', '$quantity')";

    // Executes the SQL command and checks for errors
    if ($conn->query($sql) === TRUE) {
        echo "Product added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>
    <h2>Add New Product</h2>
    <form method="POST" action="">
        <label>Product Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Category:</label><br>
        <input type="text" name="category" required><br><br>

        <label>Price:</label><br>
        <input type="number" step="0.01" name="price" required><br><br>

        <label>Quantity:</label><br>
        <input type="number" name="quantity" required><br><br>

        <input type="submit" value="Add Product">
    </form>
</body>
</html>
