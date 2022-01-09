<?php 
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
  header("location: login.php");
  exit;
};
// date_default_timezone_set('Asia/Kolkata');
$date1 = date('d-m-y');;

if($_SERVER['REQUEST_METHOD']=="POST"){
   require "dbconnect.php";
   $user = $_SESSION['username'];
   $order = $_POST['order'];
   $quantity = $_POST['quantity'];
   $address = $_POST['address'];
   $phoneno = $_POST['phoneno'];
   $sql = "insert into `custmer` values('$user','$order','$quantity','$address','$phoneno','$date1')";
  $result = mysqli_query($conn,$sql) or die(mysqli_error($sql));
  if($result){
    $_SESSION['quantity'] = $quantity;
    header("location:order.php");
   
  }
  else{
    mysqli_error($result);
  }
 }

 ?>