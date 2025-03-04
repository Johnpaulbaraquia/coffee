<?php
include '../pages/db.php'; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    
    // Get product details
    $sql = "SELECT * FROM products WHERE id = $product_id";
    $result = $conn->query($sql);
    $product = $result->fetch_assoc();
    
    if (!$product) {
        die("Product not found.");
    }

    $total_price = $product['price'] * $quantity;
    
    // Simulating customer details (can be extended with user authentication)
    $customer_name = "Johnpaul"; // Replace with logged-in user's name
    $customer_email = "johndpaul@gmail.com"; // Replace with logged-in user's email

    // Insert order into the database
    $order_sql = "INSERT INTO orders (product_id, customer_name, customer_email, quantity, total_price) 
                  VALUES ('$product_id', '$customer_name', '$customer_email', '$quantity', '$total_price')";
    
    if ($conn->query($order_sql) === TRUE) {
        echo "<script>alert('Order placed successfully!'); window.location.href='products.php';</script>";
    } else {
        echo "<script>alert('Error placing order.'); window.location.href='products.php';</script>";
    }
}
?>
