<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>"Choose VersusLibrary for a seamless reading experience – where curated collections meet convenience. Enjoy swift access to a diverse range of literary treasures, personalized just for you. Elevate your reading journey with us, where passion for books meets unparalleled service."</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Client's Reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/IMG_3050.jpg" alt="">
         <p>Very Nice!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Marin Spaha</h3>
      </div>

      <div class="box">
         <img src="images/author-4.jpg" alt="">
         <p>"This page is a gem! The user-friendly interface, coupled with a vast product selection, makes it my go-to for online shopping. Seamless navigation and quick checkouts. Truly excellent!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Jada Mece</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>"Impressed with the variety of products and the overall layout. Easy to find what I need. A couple more filtering options would make it perfect. Very good experience overall."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Eni Deda</h3>
      </div>

      <div class="box">
         <img src="images/author-6.jpg" alt="">
         <p>"Good selection of Books and smooth navigation. However, the checkout process could be slightly simplified. Still, a positive shopping experience with decent prices."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Friona Pocari</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>"An average experience. The website functions well, but it lacks some modern features. The Books range is okay, and improvements in the user interface could enhance the overall experience."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
         </div>
         <h3>Enxhi Brahimaj</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>"Unfortunately, the page falls short. Limited product information, slow loading times, and a somewhat confusing layout. There's potential, but improvements are needed for a better user experience.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Sonia Sotiri</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">Popular authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/HARRYY.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Prince Harry</h3>
      </div>

      <div class="box">
         <img src="images/frida.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Frida McFadden</h3>
      </div>

      <div class="box">
         <img src="images/CH.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Collen Hoover</h3>
      </div>

      <div class="box">
         <img src="images/ismaill.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Ismail Kadare</h3>
      </div>

      <div class="box">
         <img src="images/DONNA.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Donna Tart</h3>
      </div>

      <div class="box">
         <img src="images/georgee.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>George Orwell</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>