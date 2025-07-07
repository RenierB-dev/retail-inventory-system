<?php
include 'db_config.php'; // Include the database configuration file

$result = $conn->query("SELECT * FROM products"); // Fetch all products from the database

echo "<h2>Product List</h2>";
echo "<table border='1' cellpadding='10'>"; // Start of table
echo "<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Quantity</th>
      </tr>";

while ($row = $result->fetch_assoc()) { // Loop through each product
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['category']}</td>
            <td>{$row['price']}</td>
            <td>{$row['quantity']}</td>
          </tr>";
}

echo "</table>";
?>