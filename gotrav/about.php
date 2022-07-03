<?php 

session_start();

// check session (if you not login, you cant access the all page)
if( !isset($_SESSION["login"]) ) {
   header("Location: login.php");
   exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- header section starts  -->

<section class="header">

<a href="index.php" class="logo">GoTrav.</a>

<nav class="navbar">
   <a href="index.php">Home</a>
      <a href="about.php">About</a>
      <a href="package.php">Package</a>
      <a href="book.php">Booking</a>
      <a href="logout.php">Logout</a>
</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-1.png) no-repeat">
<h1>about us</h1>
</div>

<!-- about section starts  -->

<section class="about">

<div class="image">
   <img src="images/about-us.jpg" alt="">
</div>

<div class="content">
   <h3>why choose us?</h3>
   <p>We have the best services in Indonesia, ranging from destinations for adventure, tour guides, trekking, camp fire, off road, camping. Assistants are in every province in Indonesia.</p>
   <p>not only that, our destinations are also the best in Indonesia, low prices according to the pockets of teenagers, and our service will serve you 24/7.</p>
   <div class="icons-container">
      <div class="icons">
         <i class="fas fa-map"></i>
         <span>top destinations</span>
      </div>
      <div class="icons">
         <i class="fas fa-hand-holding-usd"></i>
         <span>affordable price</span>
      </div>
      <div class="icons">
         <i class="fas fa-headset"></i>
         <span>24/7 guide service</span>
      </div>
   </div>
</div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

<h1 class="heading-title"> clients reviews </h1>

<div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <p>gotravel service is the best service I have ever felt, they have the best destinations in Indonesia and their assistants are in every destination that I live.</p>
         <h3>cristiano ronaldo</h3>
         <span>professional footbal player</span>
         <img src="images/ronaldo-about-1.jpg" alt="">
      </div>

      <div class="swiper-slide slide">
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <p>gotravel is a very amazing travel service because they not only take us to tourist spots, but they also explain about the destinations we are going to. Gotravel is the best travel service in my opinion.</p>
         <h3>karim benzema</h3>
         <span>professional footbal player</span>
         <img src="images/benzema-about-2.jpg" alt="">
      </div>

      <div class="swiper-slide slide">
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <p>gotravel is the best travel service I've ever met. It wasn't in vain that I went on vacation to Indonesia and chose a travel brand, they took me to every amazing place</p>
         <h3>gareth bale</h3>
         <span>professional football player</span>
         <img src="images/bale-about-3.jpg" alt="">
      </div>

      <div class="swiper-slide slide">
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <p>otravel is a very amazing travel service because they not only take us to tourist spots, but they also explain about the destinations we are going to. Gotravel is the best travel service in my opinion.</p>
         <h3>marcelo</h3>
         <span>professional football player</span>
         <img src="images/about-marcelo.jpg" alt="">
      </div>

      <div class="swiper-slide slide">
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <p>gotravel is the best travel service I've ever met. It wasn't in vain that I went on vacation to Indonesia and chose a travel brand, they took me to every amazing place</p>
         <h3>sergio ramos</h3>
         <span>professional football player</span>
         <img src="images/about-ramos.jpg" alt="">
      </div>

      <div class="swiper-slide slide">
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <p>gotravel service is the best service I have ever felt, they have the best destinations in Indonesia and their assistants are in every destination that I live.</p>
         <h3>toni kroos</h3>
         <span>professional football palyer</span>
         <img src="images/about-kroos.jpg" alt="">
      </div>

   </div>

</div>

</section>

<!-- reviews section ends -->

<!-- footer section starts  -->

<section class="footer">

<div class="box-container">

   <div class="box">
         <h3>quick links</h3>
         <a href="index.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +62-821-6704-8354 </a>
         <a href="#"> <i class="fas fa-phone"></i> +62-852-7691-9951 </a>
         <a href="#"> <i class="fas fa-envelope"></i> yaho.garfield@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> medan, indonesia 20132 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="https://www.facebook.com/yaho.garfield12/" target="blank"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="https://twitter.com/yahoogarfield" target="blank"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="https://www.instagram.com/yahoomanik/" target="blank"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="https://www.linkedin.com/in/yahoo-garfield-manik-24b67b210/" target="blank"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

</div>

<div class="credit"> copyright &copy 2022 <span>goTrav</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>