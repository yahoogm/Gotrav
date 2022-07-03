<?php 

require 'book_form.php';

if (isset ($_POST["register"]) ) {

    if( registrasi($_POST) > 0 ) {
       echo "<script>
                alert('new user has been register!');
                document.location.href = 'login.php';
             </script>";
    } else {
       echo mysqli_error($connection);
    }
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
    <section class="booking">

        <form action="" method="post" class="book-form">

            <h1 class="heading-title">registration</h1>

            <div class="flex">
                <div class="inputBox">
                    <span>username:</span>
                    <input type="text" placeholder="enter your username" name="username" required="" autocomplete="off">

                    <span>password :</span>
                    <input type="password" placeholder="enter your password" name="password" required="">

                    <span>confirm password :</span>
                    <input type="password" placeholder="enter confirm password" name="password2" required="">
                </div>
            </div>

                <button class="btn" type="submit" name="register">register</button>

            <div class="text-log">
                <p>Have an account? <a href="login.php"> Login!</a></p>
            </div>

        </form>

    </section>
    
</body>
</html>