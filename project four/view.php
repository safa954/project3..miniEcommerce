<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Products</title>
</head>



<body >
<nav  class="navbar navbar-light navbar-expand-lg" style="background-color:#fff; color :white ">
 <img src="images/istockphoto-1349688040-612x612.jpg" width="60px" >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<div class="collapse navbar-collapse" id="navbarTogglerDemo02" > 
    <ul class="navbar-nav mt-2 mt-lg-0">
    <li class="nav-item active">
        <a class="nav-link" href="Product.php" style = "margin-left : 30px;"> Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="view.php"  style = "margin-left : 40px;">View Products</a>
    </li>
    </ul>
   
   
  </div>
</nav>
<img src="Images/books.avif" alt=""  width="100%" height="400px" style = "margin-top: -20px">
<div class="p-5 my-4  rounded-3" style ="text-align:center;">
        <h1  style=" color :#67b1c7 ;font:bold;"> All Products </h1>
</div>
<?php 

if(!empty ( $_SESSION ['Item']) && !empty ( $_SESSION ['Price'])  && !empty ($_SESSION ['Image']) && !empty  ($_SESSION ['Describtion'])){
$_SESSION ['Item'] ;
$_SESSION ['Price'];
$_SESSION ['Image'] ;
$_SESSION ['Describtion'] ;
 $arr1 = explode("<br>",$_SESSION ['Item']) ;
 $arr2 = explode("<br>",$_SESSION ['Price']) ;
 $arr3 = explode("<br>",$_SESSION ['Image']) ;
 $arr4 = explode("<br>",$_SESSION ['Describtion']) ;

 for ($i=0 ; $i<count($arr1)-1 ; $i++){
    echo "<div class='col-md-4 mt-2'>
    <div class='card '>
    <div class='card-body'>
    <img class='card-img-top' src='Images/". $arr3[$i]."' alt='Card image cap' height='500px' width='10px'>
    </div>
    <div class='card-body'>
      <h4 class='mb-2'>". $arr1[$i]."</h4>
      <p class='card-text'>Price :". $arr2[$i]."</p>
      <p class='card-text'>". $arr4[$i]."</p>
      </div>
    </div>
    </div>
  ";


 }
  
}else {
echo "<div class= 'container' id ='error'> <h2> There are no Products </h2> </div>";
}
?>
<img src="images/white-radial-gradient-a5802da1.jpg" alt=""  width="100%" >



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

