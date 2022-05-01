<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

<head>
  <title>Home</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
  <nav class="navbar navbar-light navbar-expand-lg" style="background-color:#fff; color :#ffff ">
    <img src="images/istockphoto-1349688040-612x612.jpg" width="60px">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mt-2 mt-lg-0" >
        <li class="nav-item active">
          <a class="nav-link" href="Product.php" style="margin-left : 30px;"> Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="view.php" style="margin-left : 40px;"> View Products</a>
        </li>
      </ul>
      <img src="" alt="" width="25px" style="margin-left:70%">
      
    </div>
  </nav>





  <img src="images/books.avif" alt="" width="100%" height="800px" style="margin-top: -20px">

  <div class="container">
    <div class="p-5 my-4  rounded-3" style="text-align:center;">

      <h1 style=" color :#67b1c7 ;font:bold;"> To Add Product .... </h1>

    </div>
    <div class="container" style="  background-color:#f4eee3; padding : 100px 30px; ">

      <br><br>
      <form action="" method="post" style=" color: #67b1c7;">
        <div class="form-group">
          <label for="Item">Item Name :</label>
          <input type="text" class="form-control" id="Item" placeholder="Enter Product Name" name="Item" required>
        </div><br>
        <div class="form-group">
          <label for="Price">Price :</label>
          <input type="number" class="form-control" id="Price" placeholder="Enter Price" name="Price" required>
        </div><br>
        <div class="form-group">
          <label for="Image">Image :</label>
          <input type="file" id="Image" name="Image" required>

        </div><br>
        <div class="form-group">
          <label for="Describtion">Describtion :</label>
          <textarea class="form-control" id="Describtion" placeholder="Enter Describtion" name="Describtion" required cols="30" rows="10"></textarea>
        </div><br>
        <div class="form-group">
          <input type="submit" class="btn" name="button" value="Add Product" style="background-color: #67b1c7;  color: white;">

        </div>
      </form>
      <button class="btn btn-default" style=" text-decoration: none; color: #67b1c7;"> <a href="view.php" style=" text-decoration: none; color: #67b1c7;">View Product</a> </button>
    </div>
    <div class="container" style="margin:100px 0px; ">
      <div class="p-5 my-4  rounded-3" style="text-align:center;">

        <h1 style=" color :#67b1c7 ;font:bold;"> All Products </h1>

      </div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Item Name</th>
            <th scope="col">Price</th>
            <th scope="col">Image</th>
            <th scope="col">Describtion</th>
          </tr>
        </thead>
        <tbody>
          <?php

          if (isset($_POST['button'])) {
            $_SESSION['Item'] .= $_POST['Item'] . "<br>";
            $_SESSION['Price'] .= $_POST['Price'] . "<br>";
            $_SESSION['Image'] .= $_POST['Image'] . "<br>";
            $_SESSION['Describtion'] .= $_POST['Describtion'] . "<br>";
            echo " <tr scope='col'> <td>" . $_SESSION['Item']
              . "</td> <td> " . $_SESSION['Price'] . "</td> <td>" .
              $_SESSION['Image'] . "</td> <td> " .
              $_SESSION['Describtion'] . "</td> </tr> ";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
 
 
  <footer class="text-center text-white" style="background-color:black ;">
  
    <div class="container">
      <section class="mt-5">
        <div class="row text-center d-flex justify-content-center ">
          <img src="Images/istockphoto-1349688040-612x612.jpg" width="200px">
        </div>
      </section>
      <hr class="my-5" />
      <section class="mb-5">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <p style="color:#67b1c7 ; font-size:medium; font-style:italic">
            This project allows adding and viewing the products to be added from the books category
            </p>
          </div>
        </div>
      </section>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)"> © 2022 Copyright: SAY.com </div>

  </footer>



</body>

</html>