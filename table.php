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
    <title>Orders</title>
    <style>
        .table{
         padding-left: 9%;
         padding-right: 12%;
        }
    </style>
</head>
<body>
    <?php require "nav.php"; ?>
    <div class="head" style="padding:5%;"><h2>Orders Waiting List </h2></div>
    <div class="table">
<table class="table">
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">Items</th>
      <th scope="col"> quantity</th>
      <th scope="col">address</th>
      <th scope="col">phon no.</th>
      <th scope="col">Date</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
      <?php 
      require "dbconnect.php";
      $sql = "select * from `custmer`";
      $result = mysqli_query($conn,$sql) or die(mysqli_query($conn));
while($data = mysqli_fetch_array($result)){
    echo'
    <tr>
      <th>'.$data['username'].'</th>
      <td>'.$data['item'].'</td>
      <td>'.$data['quantity'].'</td>
      <td>'.$data['address'].'</td>
      <td>'.$data['phoneno'].'</td>
      <td>'.$data['date'].'</td>
      <td><button type="button" class="btn btn-warning"><a href="delete.php?username='.$data['username'].'" style="color:white;"> Delete</a></button></td>
    </tr>';
    }
    
 ?>   
  </tbody>
</table>
<center><button type="button" class="btn btn-danger"><a href="recorddelete.php" style="color:white;"> Delete all record</a></button></center>
</div>
<div class="message"><h3><center>You can delete record after the food item delivered</center> </h3></div>
</body>
</html>