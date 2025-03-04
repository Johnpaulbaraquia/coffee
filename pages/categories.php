<?php
include 'config.php';  // Include database connection

// Fetch categories from the database
$query = "SELECT * FROM categories";
$categories_result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories - Coffee Shop</title>
    <link rel="stylesheet" href="styles.css">  <!-- Link to CSS (Optional) -->
</head>
<body>

<!-- Navigation Bar -->
<nav>
    <ul class="menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="cart.php">Cart</a></li>
        <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin'): ?>
            <li><a href="admin.php">Admin Panel</a></li>
        <?php endif; ?>
        
        <!-- Categories Dropdown -->
        <li class="dropdown">
            <a href="#">Categories</a>
            <ul class="dropdown-content">
                <?php while ($category = mysqli_fetch_assoc($categories_result)): ?>
                    <li><a href="products.php?category_id=<?php echo $category['id']; ?>"><?php echo $category['name']; ?></a></li>
                <?php endwhile; ?>
            </ul>
        </li>
    </ul>
</nav>


<section class="categories-list">
    <h2>Product Categories</h2>
    <div class="categories-container">
        <?php
       
        while ($category = mysqli_fetch_assoc($categories_result)) :
        ?>
            <div class="category-item">
                <h3><?php echo $category['name']; ?></h3>
                <p><?php echo $category['description']; ?></p>
                <a href="products.php?category_id=<?php echo $category['id']; ?>" class="view-products">View Products</a>
            </div>
        <?php endwhile; ?>
    </div>
</section>

</body>
</html>
