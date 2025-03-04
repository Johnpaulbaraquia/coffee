<?php
session_start();

if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        echo "<div>";
        echo "<h3>" . $item['name'] . "</h3>";
        echo "<p>" . $item['description'] . "</p>";
        echo "<p>$" . $item['price'] . "</p>";
        echo "</div>";
    }
} else {
    echo "Your cart is empty.";
}
?>
