<!-- database start -->

<?php

// Connect to database
require 'book_form.php';

$booking = query("SELECT * FROM book_form");

if(isset ($_POST["cari"]) ) {

  $booking = cari($_POST["keyword"]);
}

?>

<!-- database end -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <!-- Connection Bootsrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body class="bg-secondary">
  
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand text-primary">Admin</a>
      <form class="d-flex" action="" method="post">
        <input class="form-control me-2" type="text" placeholder="Search..." aria-label="Search" name="keyword" autocomplete="off">
        <button class="btn btn-primary me-2" type="submit" name="cari">Search</button>
        <button class="btn btn-primary me-2"><a class="text-decoration-none text-white" href="admin_data.php">Reset</a></button>
        <button class="btn btn-danger" type="submit" name="logout"><a class="text-decoration-none text-white" href="logout.php">Logout</a></button>
      </form>
    </div>
  </nav>

    <!-- header table start -->
  <div class="mx-4">

      <h1 class="text-white heading-5 text-center text-uppercase mt-5">client booking data</h1>
  
    <div class="table-responsive text-center mt-5">
      
      <table class="table table-dark table-hover table-bordered">
        <thead class="table-dark">
            
          <tr>
            <th>Id</th>
            <th>Aksi</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Location</th>
            <th>Guests</th>
            <th>Arrivals</th>
            <th>Leaving</th>
          </tr>
  
        </thead>
  
        <!-- header table end -->
  
        <tbody class="table-dark">
  
      <!-- insert data to table -->    
          <?php $i = 1; ?>
          <?php foreach($booking as $book) : ?>
  
          <tr class="text-lowercase">
            <td><?= $i; ?></td>
            <td>
              <a class="text-decoration-none" href="ubah.php?id=<?= $book["id"]; ?>">change</a>
              <a class="text-decoration-none text-danger" href="hapus.php?id=<?= $book["id"]; ?>" onClick="return confirm('are you want to delete the data?')">delete</a>
            </td>
            <td class="text-capitalize"><?= $book["name"]; ?></td>
            <td><?= $book["email"]; ?></td>
            <td><?= $book["phone"]; ?></td>
            <td class="text-capitalize"><?= $book["address"]; ?></td>
            <td class="text-capitalize"><?= $book["location"]; ?></td>
            <td><?= $book["guests"]; ?></td>
            <td><?= $book["arrivals"]; ?></td>
            <td><?= $book["leaving"]; ?></td>
          </tr>
  
          <?php $i++; ?>
          <?php endforeach; ?>
  
        </tbody>
  
      </table>
  
    </div>

  </div>

    <!-- insert data to table end -->

</body>
</html>