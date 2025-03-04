<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders - Coffee Shop</title>
    <link rel="stylesheet" href="../css/products.css">
</head>
<body>

    <nav>
        <ul class="menu">
            <li><a href="../index.php">Home</a></li>
            <li><a href="../pages/products.php">Products</a></li>
            <li><a href="../pages/orders.php">Orders</a></li>
        </ul>
    </nav>

    <section class="order-container">
        <h2>Customer Orders</h2>

        <table>
            <tr>
                <th>Order ID</th>
                <th>Product</th>
                <th>Customer</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Order Date</th>
            </tr>
            <!-- <?php
            $sql = "SELECT orders.id, products.name, orders.customer_name, orders.quantity, orders.total_price, orders.order_date 
                    FROM orders 
                    JOIN products ON orders.product_id = products.id 
                    ORDER BY orders.order_date DESC";
            $result = $conn->query($sql);

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['name']}</td>";
                echo "<td>{$row['customer_name']}</td>";
                echo "<td>{$row['quantity']}</td>";
                echo "<td>\${$row['total_price']}</td>";
                echo "<td>{$row['order_date']}</td>";
                echo "</tr>";
            }
            ?> -->
        </table>
    </section>

</body>
</html>
