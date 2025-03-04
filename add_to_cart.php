<?php
session_start();
include 'config.php';

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
    $query = "SELECT * FROM products WHERE id = '$product_id'";
    $result = mysqli_query($conn, $query);
    $product = mysqli_fetch_assoc($result);

    if ($product) {
        $_SESSION['cart'][] = $product;
        echo "Product added to cart!";
    } else {
        echo "Product not found.";
    }
}
?>
