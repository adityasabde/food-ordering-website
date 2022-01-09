<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
  header("location: login.php");
  exit;
};
$_SESSION['cart']=$_GET['name'];
 
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="cart.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <style>
      body{
        background :url(img/img17.jpeg);
        background : cover;
        color:white;
        background-size: 100% 100%;
        color:brown;
        /* background-size: 500px 500px; */
        /* weight: 100%;
        height:100px; */
      }
    .img img {
          padding-top:0%;
          width: 300px;
          float: left;
          height: auto;
          border: solid;
          border-radius: 33px;
          margin-top: 20%;
        }
        #form input:hover{
      background-color: rgb(198, 220, 228);
        size: 2%;
        cursor: pointer;
        transform: scale(1.1);
       }
        #form input{
              border: solid;
            border-radius:28px;
            border-style: double;
        }
        .btn {
            background-color: black;
            border: solid;
            border-radius: 13px;
            width: 100px;
            color:white;
          }
        .btn:hover{
           background: #2ecc71;
         }
        .footer{
          padding-top:5%;
        }
         
</style>
</head>
<body>
   <?php require "nav.php" ; ?>
<div class="middle1">   
<div class="middle">
<form id="form" action="cartoperation.php" method="post">
<h2><?php echo $_SESSION['username']; ?> Your Order</h2>
<fieldset readonly><div class="mb-3">
      <label for="disabledTextInput" class="form-label">Your order</label>
      <input name="order" value="<?php echo $_SESSION['cart'];?>"type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input" readonly>
    </div> </fieldset>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">enter quantity</label>
    <input name="quantity" type="int" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Valid Address</label>
    <input name="address" type="varchar" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Phone no.</label>
    <input name="phoneno" type="int" minlength="10" maxlength="10"  class="form-control" id="exampleInputPassword1">
  </div>
  

  <center><button type="submit" class="btn">Submit</button></center>
  </div>
  <!-- <div class="img">
      <img src="img/img2.jpg" alt="img" width="20px" height="30px">
  </div> -->
</form>
</div>

<div class="footer">
 <center><h3>&copy 2021 AdityaSabde.</h3></center> 
</div>
</body>
</html>
