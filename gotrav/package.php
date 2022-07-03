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
   <title>Package</title>

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

<div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
<h1>packages</h1>
</div>

<!-- packages section starts  -->

<section class="packages">

<h1 class="heading-title">top destinations</h1>

<div class="box-container">

   <div class="box">
      <div class="image">
         <img src="images/package-raja-ampat.jpg" alt="">
      </div>
      <div class="content">
         <h3>raja ampat</h3>
         <p>The Raja Ampat Islands are a series of four adjacent island groups located in the western part of the Bird's Head, Papua Island. Administratively, this group is under the Raja Ampat Regency, West Papua Province.</p>
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

   <div class="box">
      <div class="image">
         <img src="images/package-bromo.jpg" alt="">
      </div>
      <div class="content">
         <h3>mount bromo</h3>
         <p>Mount Bromo or in Tenggerese spelled "Brahma", also called the Tengger Caldera, is an active volcano in East Java, Indonesia. One of the famous things about Mount Bromo is its golden sunrise, because Mount Bromo has been named a place that offers the best sunrise views on the island of Java.</p>
         <a href="book.php" class="btn">book now</a>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="images/package-wakatobi.jpg" alt="">
      </div>
      <div class="content">
         <h3>wakatobi national park</h3>
         <p>Wakatobi National Park, located in Southeast Sulawesi, has been designated as one of the world's biosphere reserves in Indonesia since 2021. The number of coral reef species in Wakatobi seas reaches 750 species from 850 species of coral reefs in the world.</p>
         <a href="book.php" class="btn">book now</a>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="images/package-gili.jpg" alt="">
      </div>
      <div class="content">
         <h3>gili islands</h3>
         <p>The Gili Islands or the Three Gilis are an archipelago of three small islands or the Gili triplets — Gili Trawangan, Gili Meno, and Gili Air — just off the northwest coast of Lombok, Indonesia. These islands are popular tourist destinations for tourists.</p>
         <a href="book.php" class="btn">book now</a>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="images/package-bali.jpg" alt="">
      </div>
      <div class="content">
         <h3>uluwatu temple</h3>
         <p>Pura Luhur Uluwatu or Uluwatu Temple is a temple located in the Pecatu Traditional Village area, South Kuta District, Badung Regency. The most famous advantage of Uluwatu Temple is that apart from its easily accessible location with various facilities, the beauty of the sunset at the Uluwatu Temple at the end of the reef is a strong attraction. You will find many brides and grooms who use this place as a pre-wedding photo backdrop.</p>
         <a href="book.php" class="btn">book now</a>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="images/package-komodo.jpg" alt="">
      </div>
      <div class="content">
         <h3>komodo national park</h3>
         <p>Komodo National Park is located in the administrative area of East Nusa Tenggara Province. This national park consists of three large islands, Komodo Island, Rinca Island, and Padar Island as well as several other smaller islands. The land area of this national park is 603 km² and the total area is 1817 km²</p>
         <a href="book.php" class="btn">book now</a>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="images/package-toraja.jpg" alt="">
      </div>
      <div class="content">
         <h3>tana toraja</h3>
         <p>Kabupaten Tana Toraja adalah salah satu kabupaten yang berada di provinsi Sulawesi Selatan, Indonesia. Ibu kota dari kabupaten ini ada di kecamatan Makale. Tana Toraja memiliki luas wilayah 2.054,30 km² dan pada tahun 2021 memiliki penduduk sebanyak 270.489 jiwa dengan kepadatan 132 jiwa/km².</p>
         <a href="book.php" class="btn">book now</a>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="images/package-rinjani.jpg" alt="">
      </div>
      <div class="content">
         <h3>mount rinjani</h3>
         <p>Mount Rinjani is a mountain located on the island of Lombok, West Nusa Tenggara. The mountain which is the second highest volcano in Indonesia with an altitude of 3,726 masl and located at latitudes 8º25' latitude and 116º28' east longitude is a favorite mountain for Indonesian climbers because of its beautiful scenery.</p>
         <a href="book.php" class="btn">book now</a>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="images/package-borobudur.jpg" alt="">
      </div>
      <div class="content">
         <h3>borobudur temple</h3>
         <p>Borobudur is a Buddhist temple located in Borobudur, Magelang, Central Java, Indonesia. This temple is located approximately 100 km to the southwest of Semarang, 86 km to the west of Surakarta, and 40 km to the northwest of Yogyakarta.</p>
         <a href="book.php" class="btn">book now</a>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="images/package-kuta.jpg" alt="">
      </div>
      <div class="content">
         <h3>kuta beach</h3>
         <p>Kuta Beach is a tourism place located in Kuta sub-district, south of Denpasar City, Bali, Indonesia. This area is a tourist destination for foreign tourists and has become a mainstay tourist attraction on the island of Bali since the early 1970s.</p>
         <a href="book.php" class="btn">book now</a>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="images/package-sipinsur.jpg" alt="">
      </div>
      <div class="content">
         <h3>sipinsur</h3>
         <p>Geosite Sipinsur is a park or natural tourist area on the shores of Lake Toba, precisely in Pearung village, Paranginan district, Humbang Hasundutan district, North Sumatra province, Indonesia. At the Sipinsur Geosite, visitors can see around Lake Toba.</p>
         <a href="book.php" class="btn">book now</a>
      </div>
   </div>

</div>

<div class="load-more"><span class="btn">load more</span></div>

</section>

<!-- packages section ends -->

<!-- footer section starts  -->

<section class="footer">

<div class="box-container">

    <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
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