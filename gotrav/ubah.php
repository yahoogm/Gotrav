<?php

session_start();

// check session (if you not login, you cant access the all page)
if( !isset($_SESSION["login"]) ) {
   header("Location: login.php");
   exit;
}

require 'book_form.php';

// ----- take data from URL ----- //
$id = $_GET["id"];

// ----- query data with id ----- //
$book = query("SELECT * FROM book_form WHERE id = $id")[0];

// ----- check the button has been pressed or not ----- //
if(isset ($_POST['send']) ){

      // ----- check the data has been changed or not ----- //
      if ( ubah($_POST) > 0 ) {
         echo "<script>
                  alert('data success to change!');
                  document.location.href = 'admin_data.php';
               </script>";
      } else {
         echo "<script>
                  alert('data failed to change!');
                  document.location.href = 'admin_data.php';
               </script>";
   }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Data</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- booking section starts  -->

<section class="booking">

<h1 class="heading-title">change data</h1>

<form action="" method="post" class="book-form">

  <input type="hidden" name="id" value="<?= $book['id']; ?>">

   <div class="flex">
      <div class="inputBox">
         <span>name :</span>
         <input type="text" placeholder="enter your name" name="name" required  value="<?= $book['name']; ?>" autocomplete="off">
      </div>
      <div class="inputBox">
         <span>email :</span>
         <input type="email" placeholder="enter your email" name="email" required value="<?= $book['email']; ?>" autocomplete="off">
      </div>
      <div class="inputBox">
         <span>phone :</span>
         <input type="number" placeholder="enter your number" name="phone" required value="<?= $book['phone']; ?>" autocomplete="off">
      </div>
      <div class="inputBox">
         <span>address :</span>
         <input type="text" placeholder="enter your address" name="address" required value="<?= $book['address']; ?>" autocomplete="off">
      </div>
      <div class="inputBox">
         <span>where to :</span>
         <input type="text" placeholder="place you want to visit" name="location" required value="<?= $book['location']; ?>" autocomplete="off">
      </div>
      <div class="inputBox">
         <span>how many :</span>
         <input type="number" placeholder="number of guests" name="guests" required value="<?= $book['guests']; ?>" autocomplete="off">
      </div>
      <div class="inputBox">
         <span>arrivals :</span>
         <input type="date" name="arrivals" required="" value="<?= $book['arrivals']; ?>" autocomplete="off">
      </div>
      <div class="inputBox">
         <span>leaving :</span>
         <input type="date" name="leaving" required="" value="<?= $book['leaving']; ?>" autocomplete="off">
      </div>
   </div>

   <button type="submit" value="submit" class="btn" name="send">submit</button>
   <button type="submit" value="submit" class="btn"><a href="admin_data.php">cancel</a></button>

</form>

</section>

<!-- booking section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>
    
</body>
</html>
