<?php
include 'db_config.php';
?>

<h2>Record a Sale</h2>
<form method="POST" action="record_sales.php">
    Product ID: <input type="number" name="product_id" required><br>
    Quantity Sold: <input type="number" name="quantity_sold" required><br>
    <input type="submit" value="Record Sale">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id'];
    $quantity_sold = $_POST['quantity_sold'];

    // Insert into sales table
    $stmt = $conn->prepare("INSERT INTO sales (product_id, quantity_sold, date) Values (?, ?, NOW())");
    $stmt->bind_param("ii", $product_id, $quantity_sold);
    $stmt->execute();

    // Update product quantity
    $stmt = $conn->prepare("UPDATE products SET quantity = quantity - ? WHERE id = ?");
    $stmt->bind_param("ii", $quantity_sold, $product_id);
    $stmt->execute();

    echo "<p>Sale recorded successfully.</p>";

}
?>
