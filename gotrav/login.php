<?php

session_start();
require 'book_form.php';

// chech cookie
if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
   $id = $_COOKIE['id'];
   $key = $_COOKIE['key'];

   // take username by id
   $result = mysqli_query($connection, "SELECT username FROM users WHERE id = $id");
   $row = mysqli_fetch_assoc($result);

   // check cookie  and username
   if( $key === hash('sha256'. $row['username']) ) {
      $_SESSION['login'] = true;
   }
}

if( isset($_SESSION["login"]) ) {
   header("Location: index.php");
}

// check the login button has been pressed or not
if( isset($_POST["login"]) ) {
   
   $username = $_POST["username"];
   $password = $_POST["password"];

   // check the username is have in database or not
   $result = mysqli_query($connection, "SELECT * FROM users WHERE username = '$username' ");

   // check username
   if( mysqli_num_rows($result) === 1 ) {

      // check password
      $row = mysqli_fetch_assoc($result);

      if( password_verify($password, $row["password"]) ) {

      // set session
       $_SESSION["login"] = true;

      // cek remember
      if( isset($_POST['remember']) ) {
         // create cookie
         setcookie('id', $row['id'], time() + 60);
         setcookie('key', hash('sha256', $row['username']), time() + 60);
      }  

         header("Location: index.php");
        
         if( $username === 'admin') {
            header("Location: admin_data.php");
         }
      }
      exit;       
   }

   $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

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
</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
<h1>welcome</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <form action="" method="post" class="book-form">
      <h1 class="heading-title">login</h1>

         <div class="flex">
            <div class="inputBox">
               <span>username:</span>
               <input type="text" placeholder="enter your username" name="username" required="" autocomplete="off">

               <span>password :</span>
               <input type="password" placeholder="enter your password" name="password" required="">
            </div>
         </div>

            <?php if( isset($error) ) : ?>
               <p class="text-wrong">wrong username / password!</p>  
            <?php endif; ?> 
         
         <button class="btn" type="submit" name="login">login</button>

      <div class="text-log">
         <input type="checkbox" name="remember">
         <span clas="remember">remember me</span>
         <p>Not have an account?<a href="registration.php"> Register!</a></p>
      </div>

   </form>

</section>

<!-- booking section ends -->

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