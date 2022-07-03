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
    <title>Home</title>

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

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/home-atas-1.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>let's go around Indonesia</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-atas-2.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>discover the new places</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-atas-3.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>make your holiday fun</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> our services </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>adventure</h3>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>tour guide</h3>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>trekking</h3>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>camp fire</h3>
      </div>

      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>off road</h3>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>camping</h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/about-us.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p> gotrav is a website that provides travel services for regions throughout Indonesia. Website
          It was founded by Yahoo Garfield Manik on April 27, 2022. The purpose of this website is to produce
          money and help people who want to travel far or near.
      </p>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> our packages </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/candi-ulun.jpg" alt="">
         </div>
         <div class="content">
            <h3>pura ulun danu bratan temple</h3>
            <p>Pura Ulun Danu Bratan, Pura Ulun Danu Beratan or Bratan Pura is a large water temple and temple in Bali, Indonesia - the other major water temple being Pura Ulun Danu Batur. This temple complex is located on the northwest edge of Lake Bratan in the mountains near Bedugul, Tabanan Regency.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/candi-prambanan.jpg" alt="">
         </div>
         <div class="content">
            <h3>prambanan temple</h3>
            <p>Prambanan Temple or Roro Jonggrang Temple is the largest Hindu temple complex in Indonesia which was built in the 9th century AD. This temple is dedicated to Trimurti, the three main Hindu gods, namely Brahma as the creator god, Vishnu as the guardian god, and Shiva as the destroyer god.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/home-danau-toba.jpg" alt="">
         </div>
         <div class="content">
            <h3>lake toba</h3>
            <p>Lake Toba is a large natural lake in Indonesia located in the caldera of Mount Supervolcano. This lake has a length of 100 kilometers, a width of 30 kilometers, and a depth of 505 meters. This lake is located in the middle of the northern part of Sumatra island with a surface height of about 900 meters.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
      <h3>choose to book</h3>
      <p>you must feel the fantastic service from us. because we are the best travel in Indonesia, therefore booking an attack</p>
      <a href="book.php" class="btn">book now</a>
   </div>
</section>

<!-- home offer section ends -->

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