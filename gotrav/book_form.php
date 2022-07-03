<?php

// connection to database

   $connection = mysqli_connect('localhost','root','','book_db'); 


// database for admin_data.php

// function to take the database for admin
   function query($query) {

      global $connection;

      // proses pengambilan data
      $result = mysqli_query($connection, $query);
      $rows = [];
      while( $row = mysqli_fetch_assoc($result) ) {
         $rows[] = $row;
      }
      return $rows;
      
   }


// database booking ticket

if( isset($_POST["submit"]) ) { 
      
   if( tambah($_POST) > 0 ) {

      echo "<script>
               alert('You have successfully booked your ticket!');
               document.location.href = 'home.php';
            </script>";
   } else {
      echo "<script>
               alert(The ticket you ordered failed!');
               document.location.href = 'book.php';
            </script>";
   }

}


// function add booking ticket
   function tambah($data) {

      global $connection; 

      $name = htmlspecialchars($data["name"]); 
      $email = htmlspecialchars($data["email"]);
      $phone = htmlspecialchars($data["phone"]);
      $address = htmlspecialchars($data["address"]);
      $location = htmlspecialchars($data["location"]);
      $guests = htmlspecialchars($data["guests"]);
      $arrivals = htmlspecialchars($data["arrivals"]);
      $leaving = htmlspecialchars($data["leaving"]);

      $request = " INSERT INTO book_form  
                        VALUES
                  ('', '$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving') ";

      mysqli_query($connection, $request);

      return mysqli_affected_rows($connection);
      
   }


// function delete data
   function hapus($id) {

      global $connection;

      mysqli_query($connection, "DELETE FROM book_form WHERE id = $id");
      return mysqli_affected_rows($connection);

   }


// start function change data 
   function ubah($id) {

      global $connection;

      $id = $_POST['id'];
      $name = htmlspecialchars($_POST["name"]); 
      $email = htmlspecialchars($_POST["email"]);
      $phone = htmlspecialchars($_POST["phone"]);
      $address = htmlspecialchars($_POST["address"]);
      $location = htmlspecialchars($_POST["location"]);
      $guests = htmlspecialchars($_POST["guests"]);
      $arrivals = htmlspecialchars($_POST["arrivals"]);
      $leaving = htmlspecialchars($_POST["leaving"]);

      $request = " UPDATE book_form SET 
                     name = '$name', 
                     email = '$email', 
                     phone = '$phone', 
                     address = '$address', 
                     location = '$location', 
                     guests = '$guests', 
                     arrivals = '$arrivals', 
                     leaving = '$leaving' 
                  WHERE id = $id";

      mysqli_query($connection, $request);

      return mysqli_affected_rows($connection);

   }


// function search data
   function cari($keyword) {

      $query = "SELECT * FROM book_form WHERE
               name LIKE '%$keyword%' OR
               email LIKE '%$keyword%' OR
               phone LIKE '%$keyword%' OR
               address LIKE '%$keyword%' OR
               location LIKE '%$keyword%' OR
               guests LIKE '%$keyword%' OR
               arrivals LIKE '%$keyword%' OR
               leaving LIKE '%$keyword%'
               ";

      return query($query);

   }


// registration data

   function registrasi($data) {

      global $connection;

      $username = strtolower(stripslashes($data["username"]));
      $password = mysqli_real_escape_string($connection, $data["password"]);
      $password2 = mysqli_real_escape_string($connection, $data["password2"]);

      // check username has been use or not
      $result = mysqli_query($connection, "SELECT username FROM users WHERE username = '$username' ");

      if( mysqli_fetch_assoc($result)) {

         echo "<script>
                  alert('Username is already in use!');
                  document.location.href = 'registration.php';
               </script>";
            return false;
      }

   // check confirm password same or not
   if ( $password !== $password2) {

      echo "<script>
               alert('Confirm password does not match!');
               document.location.href = 'registration.php';
            </script>";
         return false;
   }

   // encription password
   $password = password_hash($password, PASSWORD_DEFAULT);

   // insert new user to database
   mysqli_query($connection, "INSERT INTO users VALUES ('', '$username', '$password') ");

   return mysqli_affected_rows($connection);

}

?>