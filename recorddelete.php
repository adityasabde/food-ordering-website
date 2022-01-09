<?php
require "dbconnect.php";
 $sql = "truncate table `custmer`";
 $result = mysqli_query($conn,$sql);
 if(!$result){
    die(mysqli_error($result));
 }else{
 header("location:table.php");
 }
 ?>