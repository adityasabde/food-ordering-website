<?php

$SERVER = "localhost";
$usernam = "root";
$password = "";
$database = "hotelmanagment";
$conn = mysqli_connect($SERVER , $usernam,$password,$database);
if(!$conn){
    mysqli_error($conn);
}




?>