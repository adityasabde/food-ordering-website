<?php
 $showerror = false;
 if($_SERVER['REQUEST_METHOD'] == "POST"){
     require "dbconnect.php";
     $username = $_POST['username'];
     $password = $_POST['password'];
   
     $sql = "SELECT * from `hotelmanagment`.`admin` where username ='$username' and passwords='$password'" ;
     $result = mysqli_query($conn , $sql);
     
          if($result){
             $login = true;
             session_start();
             $_SESSION['loggedin'] = true;
             $_SESSION['username'] = $username;
             header("location:table.php");
            }else{
               $showerror = true;
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
    <title>Admin login</title>
    <style>
        body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: #34495e;
}
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
.box h3{
  color: white;
  text-transform: uppercase;
  font-weight:500;
}
.box input[type = "text"],.box input[type = "password"]{
    border :0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #3498db;
    padding: 14px 10px;
    width: 200px;
    outline: none;
    color : white;
    border-radius: 24px;
    transition: 0.25s;
}
.box input[type = "text"]:focus,.box input[type = "password"]:focus{
   width:280px;
   border-color: #2ecc71;  
}
.box input[type = "submit"]{
  border :0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #2ecc71;
    padding: 14px 10px;
    width: 100px;
    outline: none;
    color : white;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer;
}
.box input[type= "submit"]:hover{
  background: #2ecc71;
}

    </style>
</head>
<body>
<?php require "nav.php ";?>
    <script><?php if($showerror){
          echo 'alert("please check your credentials");';
        }?></script>
    
    <form action="adminlogin.php" class="box" method="post">
        <h3><b> Admin Login </b></h3>
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="username">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>