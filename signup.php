<?php
 $showalert = false;
 $showerror = false ;
if($_SERVER['REQUEST_METHOD']=="POST"){
    require "dbconnect.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $phoneno = $_POST['phoneno'];
    $sql1 = "SELECT * from `hotelmanagment`.`signup` where username= '$username' ";
    $result1 = mysqli_query($conn , $sql1);
    $num = mysqli_num_rows($result1);
    if($num == 0){
        if($password == $cpassword && $username != ""){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql =" INSERT into `hotelmanagment`.`signup` VALUES('$username','$hash','$cpassword','$phoneno')";
            $result = mysqli_query($conn , $sql)  or die( mysqli_error($conn));
            header("location:login.php");
        }
        else{
            $showalert = true;
        }
    }
    else{
        $showerror = true ;
    }

 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <title>signup</title>
    <style>
        .box{
            padding:24px;
        }
    </style>
</head>
<body>
<?php require "nav.php ";?>

<script> <?php if($showerror){
        echo 'alert("Username is already exist");';
    } 
 if($showalert){
        echo 'alert("keep your password and confirm password same");';
    } ?>

    </script>
    <form action="signup.php" class="box" method="post">
        <h2><b>SIGN UP</b></h2>
        <input type="text" name="username" placeholder="username">
        <input type="text" name="password" placeholder="password">
        <input type="text" name="cpassword" placeholder="confirm password">
        <input type="text" name="phoneno" placeholder="phone no.">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>