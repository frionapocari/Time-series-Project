<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
}

// Adding a review
if (isset($_POST['add_review'])) {
    $book_id = $_POST['book_id'];
    $rating = $_POST['rating'];
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);

    $insert_review_query = mysqli_query($conn, "INSERT INTO `book_reviews` (user_id, book_id, rating, comment) VALUES ('$user_id', '$book_id', '$rating', '$comment')");

    if ($insert_review_query) {
        // Success
        header("location: reviews.php");
    } else {
        // Handle the error
        $error_message = "Failed to add review.";
    }
}

// Fetching user reviews
$select_reviews_query = mysqli_query($conn, "SELECT * FROM `book_reviews` WHERE user_id = '$user_id'");
$user_reviews = [];

while ($row = mysqli_fetch_assoc($select_reviews_query)) {
    $user_reviews[] = $row;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Reviews</title>
</head>

<body>

    <!-- Display user reviews -->
    <h2>Your Reviews</h2>
    <?php if (!empty($user_reviews)) : ?>
        <ul>
            <?php foreach ($user_reviews as $review) : ?>
                <li>
                    <strong>Book ID:</strong> <?php echo $review['book_id']; ?><br>
                    <strong>Rating:</strong> <?php echo $review['rating']; ?><br>
                    <strong>Comment:</strong> <?php echo $review['comment']; ?><br>
                    <hr>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else : ?>
        <p>No reviews yet.</p>
    <?php endif; ?>

    <!-- Form to add a new review -->
    <h2>Add a Review</h2>
    <form action="reviews.php" method="post">
        <label for="book_id">Book ID:</label>
        <input type="text" name="book_id" required><br>
        <label for="rating">Rating:</label>
        <input type="number" name="rating" min="1" max="5" required><br>
        <label for="comment">Comment:</label>
        <textarea name="comment" rows="4" required></textarea><br>
        <input type="submit" name="add_review" value="Add Review">
    </form>

</body>

</html>
