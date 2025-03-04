<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Coffee Shop</title>
    <link rel="stylesheet" href="../css/contact.css">
</head>
<body>

    <nav>
        <ul class="menu">
            <li><a href="../index.php">Home</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact</a></li>
            <li class="logout"><a href="../login.php">Logout</a></li>
        </ul>
    </nav>

    <section class="contact-container">
        <h2>Contact Us</h2>
        <p> Welcome to my Shop</p>

        <form action="process_contact.php" method="POST">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Your Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </section>

</body>
</html>
