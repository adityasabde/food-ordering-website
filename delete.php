<?php
require "dbconnect.php";
$name = $_GET['username'];
$sql ="delete from `custmer` where username = '$name'";
$result = mysqli_query($conn,$sql);
if(!$result){
    mysqli_error($result);
}
header("location:table.php");

?>