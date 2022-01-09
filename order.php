<?php
 
 session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
  header("location: login.php");
  exit;

};     


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order successful</title>
   
    <style>
        .image {
            padding: 5%;
            padding-left: 33%;
            padding-top: 2%;
       }
       .middle h2
       {
        font-size: 50px;
        margin-top:5%;
       }
       .footer{
           padding-bottom:5%;
           margin-bottom:2%;
       }
    </style>
   
</head>
<body>
<script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
    </script>
    <?php require "nav.php" ;
   
    $price =$_SESSION['quantity']; 
    ?>
    <div class="middle"> <center><h2>Your order is confirmed </h2></center></div> 
    <div class="image"> <img src="img/img7.png" alt="thank you" style="height: 400px;"></div>
    <div class="price"><center><h2>Your price: 12.90 $ </h2></center></div>
   <center><h3>pay on delivery </h3></center>
    <div class="footer"> <center><a href="index.php"><h3>go to menue cart</h3></a></center></div>
   
</body>
</html>