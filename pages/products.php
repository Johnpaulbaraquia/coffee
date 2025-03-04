<?php
include '../pages/db.php'; // Include database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shop - Products</title>
    <link rel="stylesheet" href="/css/products.css">
</head>
<body>

    <nav>
        <ul class="menu">
            <li><a href="../index.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="../pages/contact.php">Contact</a></li>
            <li class="logout"><a href="./login.php">Logout</a></li>
        </ul>
    </nav>

    <section class="product-container">
        <h2>Our Coffee Selection</h2>

        <div class="product-grid">
            <?php
            $sql = "SELECT * FROM products";
            $result = $conn->query($sql);

            while ($row = $result->fetch_assoc()) {
                echo "<div class='product-card'>";
                echo "<img src='{$row['image']}' alt='{$row['name']}'>";
                echo "<h3>{$row['name']}</h3>";
                echo "<p>Price: \${$row['price']}</p>";
                echo "<form action='order.php' method='POST'>";
                echo "<input type='hidden' name='product_id' value='{$row['id']}'>";
                echo "<label>Quantity: <input type='number' name='quantity' value='1' min='1' required></label>";
                echo "<button type='submit' class='order-btn'>Order Now</button>";
                echo "</form>";
                echo "</div>";
            }
            ?>
        </div>
    </section>

</body>
</html>
