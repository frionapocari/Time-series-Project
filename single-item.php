<?php
require_once('config.php');

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];

    $sql = "SELECT * FROM products WHERE id = $product_id";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $product = $result->fetch_assoc();
    } else {
        die('Product not found');
    }
} else {
    die('No product ID provided');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"> <!-- Adjust the path based on your file structure -->
    <title><?php echo $product['name']; ?></title>
</head>

<body>

    <?php include 'header.php'; ?>

    <div class="single-item-container">
        <h1><?php echo $product['name']; ?></h1>
        <p>Price: $<?php echo $product['price']; ?></p>
        <img src="uploaded_img/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="product-image">
        <!-- Add more details as needed -->

        <!-- Add the form for adding to cart -->
        <form action="shop.php" method="post">
            <input type="hidden" name="product_name" value="<?php echo $product['name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $product['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $product['image']; ?>">
            <input type="hidden" name="product_quantity" value="1">
            <input type="submit" value="Add to Cart" name="add_to_cart" class="btn">
        </form>
    </div>

    <?php include 'footer.php'; ?>

    <!-- Custom JS file link -->
    <script src="js/script.js"></script>

</body>

</html>
