<?php
 $showerror = false;
 if($_SERVER['REQUEST_METHOD'] == "POST"){
     require "dbconnect.php";
     $username = $_POST['username'];
     $password = $_POST['password'];
   
     $sql = "SELECT * from `hotelmanagment`.`signup` where username ='$username' " ;
     $result = mysqli_query($conn , $sql);
     $num = mysqli_num_rows($result);
     if($num == 1){
       while($row = mysqli_fetch_assoc($result)){
          if(password_verify($password , $row['password'])){
             $login = true;
             session_start();
             $_SESSION['loggedin'] = true;
             $_SESSION['username'] = $username;
             $_SESSION['fullscreen']= true;
             header("location:index.php");
            }else{
               $showerror = true;
            }
        }
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
    <link rel="stylesheet" href="login.css">
    <title>signup</title>
    <style>
        .box{
            width: 300px;
            padding:15px;
            position:absolute;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);
            background: #191919;
            text-align: center;
        }
    </style>
</head>
<body>
<?php require "nav.php ";?>
    <script><?php if($showerror){
          echo 'alert("please check your credentials");';
        }?></script>
    
    <form action="login.php" class="box" method="post">
        <h2><b>Login</b></h2>
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="username">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>