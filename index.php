<?php
include 'config.php';  // Include database connection

// Fetch categories from the database
$query = "SELECT * FROM categories";
$categories_result = mysqli_query($conn, $query);

// Fetch products from the database
$product_query = "SELECT * FROM products";
$products_result = mysqli_query($conn, $product_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shop</title>
    <link rel="stylesheet" href="./css/styles.css">  
<body>


<nav>
    <ul class="menu">
        <li><a href="./index.php">Home</a></li>
        <li><a href="./pages/products.php">Products</a></li>
        <li><a href="./pages/contact.php">Contact Us</a></li>
        <li><a href="./pages/orders.php">Orders</a></li>
        <li><a href="./pages/order.php">Order</a></li>
        <li><a href="cart.php">Cart</a></li>
        <!-- <li class="logout"><a href="../login.php">Logout</a></li> -->
        <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin'): ?>
            <li><a href="./admin.php">Admin Panel</a> Admin</li>
            
        <?php endif; ?>
    
        <li class="logout"><a href="../login.php">Logout</a></li>
        <!-- <li class="dropdown">
            <a href="#">Categories</a>
            <ul class="dropdown-content">
                <?php while ($category = mysqli_fetch_assoc($categories_result)): ?>
                    <li><a href="index.php?category_id=<?php echo $category['id']; ?>"><?php echo $category['name']; ?></a></li>
                <?php endwhile; ?>
            </ul>
        </li> -->
    </ul>
</nav>
<center><h1>COFFEE SHOP NI BATONG BAKAL!</h1></center><br>
<br>
<br>
<br>
<br><br><br><br>
<h1> - kulang papo sa design HIHI</h1>
<!-- Main Content Area -->

</section>

</body>
</html>
