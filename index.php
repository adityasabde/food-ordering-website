<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
  header("location: login.php");
  exit;
};

?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <title>menue</title>
    <style>
a{
  color : black;
  text-decoration: none;
}
a:hover{
  font-weight:800;
  color : black;
  text-decoration: none;
}
.menu-item:hover{
    transform: scale(0.9);
    }
      .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 1.5em;
    height: 100px;
  }
  
  .menu {
    font-family: "Inter", sans-serif;
    font-size: 14px;
  }
  
  .menu-group-heading {
    margin: 0;
    padding-bottom: 1em;
    border-bottom: 2px solid #ccc;
  }
  
  .menu-group {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1.5em;
    padding: 1.5em 0;
  }
  
  .menu-item {
    display: flex;
  }
  
  .menu-item-image {
    width: 80px;
    height: 80px;
    flex-shrink: 0;
    object-fit: cover;
    margin-right: 1.5em;
  }
  
  .menu-item-text {
    flex-grow: 1;
  }
  
  .menu-item-heading {
    display: flex;
    justify-content: space-between;
    margin: 0;
  }
  
  .menu-item-name {
    margin-right: 1.5em;
  }
  
  .menu-item-description {
    line-height: 1.6;
  }
  .h1, h1 {
    font-size: 2.5rem;
    padding-left: 7%;
    padding-top: 2%;
    padding-bottom: 1%;
}
  
  @media screen and (min-width: 992px) {
    .menu {
      font-size: 16px;
    }
  
    .menu-group {
      grid-template-columns: repeat(2, 1fr);
    }
  
    .menu-item-image {
      width: 125px;
      height: 125px;
    }
  }
  
    </style>
 
  </head>
  <body>
      <?php require "nav.php" ?>
    <h1>Hello, <?php echo $_SESSION['username'];?></h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<div class="container">
    <div class="menu">
      <h2 class="menu-group-heading">
        Entrée
      </h2>
      <div class="menu-group" >
        <div class="menu-item">
          <a href="cart.php?name=item1"><img class="menu-item-image" src="img/img2.jpg" alt="Bruschetta"></a>
          <a href="cart.php?name=item1"><div class="menu-item-text">
            <h3 class="menu-item-heading">
              <span class="menu-item-name">Bruschetta</span>
              <span class="menu-item-price">Rs. 100</span>
            </h3>
            <p class="menu-item-description">
              Nunc efficitur felis vel mi efficitur, sed molestie sem scelerisque. Fusce orci risus,
              congue eu mauris nec, pretium tincidunt nulla.
            </p>
          </div></a>
        </div>
        <div class="menu-item">
        <a href="cart.php?name=item2"> <img class="menu-item-image" src="img/img1.jpg" alt="Bruschetta"></a>
        <a href="cart.php?name=item2"> <div class="menu-item-text">
            <h3 class="menu-item-heading">
              <span class="menu-item-name">Bruschetta</span>
              <span class="menu-item-price">Rs. 100</span>
            </h3>
            <p class="menu-item-description">
              Nunc efficitur felis vel mi efficitur, sed molestie sem scelerisque. Fusce orci risus,
              congue eu mauris nec, pretium tincidunt nulla.
            </p>
          </div></a>
        </div>
      </div>
      <h2 class="menu-group-heading">
        Dessert
      </h2>
      <div class="menu-group">
        <div class="menu-item">
        <a href="cart.php?name=item3"><img class="menu-item-image" src="img/img3.jpg" alt="Bruschetta"></a>
        <a href="cart.php?name=item3">  <div class="menu-item-text">
            <h3 class="menu-item-heading">
              <span class="menu-item-name">Bruschetta</span>
              <span class="menu-item-price">Rs. 100</span>
            </h3>
            <p class="menu-item-description">
              Nunc efficitur felis vel mi efficitur, sed molestie sem scelerisque. Fusce orci risus,
              congue eu mauris nec, pretium tincidunt nulla.
            </p>
          </div></a>
        </div>
        <div class="menu-item">
        <a href="cart.php?name=item4"><img class="menu-item-image" src="img/img4.jpg" alt="Bruschetta"></a>
        <a href="cart.php?name=item4"> <div class="menu-item-text">
            <h3 class="menu-item-heading">
              <span class="menu-item-name">Bruschetta</span>
              <span class="menu-item-price">Rs. 100</span>
            </h3>
            <p class="menu-item-description">
              Nunc efficitur felis vel mi efficitur, sed molestie sem scelerisque. Fusce orci risus,
              congue eu mauris nec, pretium tincidunt nulla.
            </p>
          </div></a>
        </div>
      </div>
      <h2 class="menu-group-heading">
        Dessert
      </h2>
      <div class="menu-group">
        <div class="menu-item">
        <a href="cart.php?name=item5"><img class="menu-item-image" src="img/img3.jpg" alt="Bruschetta"></a>
        <a href="cart.php?name=item5"> <div class="menu-item-text">
            <h3 class="menu-item-heading">
              <span class="menu-item-name">Bruschetta</span>
              <span class="menu-item-price">Rs. 100</span>
            </h3>
            <p class="menu-item-description">
              Nunc efficitur felis vel mi efficitur, sed molestie sem scelerisque. Fusce orci risus,
              congue eu mauris nec, pretium tincidunt nulla.
            </p>
          </div></a>
        </div>
        <div class="menu-item">
        <a href="cart.php?name=item6">  <img class="menu-item-image" src="img/img4.jpg" alt="Bruschetta"></a>
        <a href="cart.php?name=item6"> <div class="menu-item-text">
            <h3 class="menu-item-heading">
              <span class="menu-item-name">Bruschetta</span>
              <span class="menu-item-price">Rs. 100</span>
            </h3>
            <p class="menu-item-description">
              Nunc efficitur felis vel mi efficitur, sed molestie sem scelerisque. Fusce orci risus,
              congue eu mauris nec, pretium tincidunt nulla.
            </p>
          </div></a>
        </div>
      </div>
      <h2 class="menu-group-heading">
        Dessert
      </h2>
      <div class="menu-group">
        <div class="menu-item">
        <a href="cart.php?name=item7"><img class="menu-item-image" src="img/img3.jpg" alt="Bruschetta"></a>
        <a href="cart.php?name=item7"> <div class="menu-item-text">
            <h3 class="menu-item-heading">
              <span class="menu-item-name">Bruschetta</span>
              <span class="menu-item-price">Rs. 100</span>
            </h3>
            <p class="menu-item-description">
              Nunc efficitur felis vel mi efficitur, sed molestie sem scelerisque. Fusce orci risus,
              congue eu mauris nec, pretium tincidunt nulla.
            </p>
          </div></a>
        </div>
        <div class="menu-item">
        <a href="cart.php?name=item8"><img class="menu-item-image" src="img/img4.jpg" alt="Bruschetta"></a>
          <<a href="cart.php?name=item8"> div class="menu-item-text">
            <h3 class="menu-item-heading">
              <span class="menu-item-name">Bruschetta</span>
              <span class="menu-item-price">Rs. 100</span>
            </h3>
            <p class="menu-item-description">
              Nunc efficitur felis vel mi efficitur, sed molestie sem scelerisque. Fusce orci risus,
              congue eu mauris nec, pretium tincidunt nulla.
            </p>
          </div></a>
        </div>
      </div>
      <h2 class="menu-group-heading">
        Dessert
      </h2>
      <div class="menu-group">
        <div class="menu-item">
        <a href="cart.php?name=item9"><img class="menu-item-image" src="img/img3.jpg" alt="Bruschetta"></a>
        <a href="cart.php?name=item9"> <div class="menu-item-text">
            <h3 class="menu-item-heading">
              <span class="menu-item-name">Bruschetta</span>
              <span class="menu-item-price">Rs. 100</span>
            </h3>
            <p class="menu-item-description">
              Nunc efficitur felis vel mi efficitur, sed molestie sem scelerisque. Fusce orci risus,
              congue eu mauris nec, pretium tincidunt nulla.
            </p>
          </div></a>
        </div>
        <div class="menu-item">
        <a href="cart.php?name=item10"><img class="menu-item-image" src="img/img4.jpg" alt="Bruschetta"></a>
        <a href="cart.php?name=item10"> <div class="menu-item-text">
            <h3 class="menu-item-heading">
              <span class="menu-item-name">Bruschetta</span>
              <span class="menu-item-price">Rs. 100</span>
            </h3>
            <p class="menu-item-description">
              Nunc efficitur felis vel mi efficitur, sed molestie sem scelerisque. Fusce orci risus,
              congue eu mauris nec, pretium tincidunt nulla.
            </p>
          </div></a>
        </div>
      </div>
      <h2 class="menu-group-heading">
        Dessert
      </h2>
      <div class="menu-group">
        <div class="menu-item">
        <a href="cart.php?name=item11"> <img class="menu-item-image" src="img/img3.jpg" alt="Bruschetta"></a>
        <a href="cart.php?name=item11"> <div class="menu-item-text">
            <h3 class="menu-item-heading">
              <span class="menu-item-name">Bruschetta</span>
              <span class="menu-item-price">Rs. 100</span>
            </h3>
            <p class="menu-item-description">
              Nunc efficitur felis vel mi efficitur, sed molestie sem scelerisque. Fusce orci risus,
              congue eu mauris nec, pretium tincidunt nulla.
            </p>
          </div></a>
        </div>
        <div class="menu-item">
        <a href="cart.php?name=item12"><img class="menu-item-image" src="img/img4.jpg" alt="Bruschetta"></a>
        <a href="cart.php?name=item12"> <div class="menu-item-text">
            <h3 class="menu-item-heading">
              <span class="menu-item-name">Bruschetta</span>
              <span class="menu-item-price">Rs. 100</span>
            </h3>
            <p class="menu-item-description">
              Nunc efficitur felis vel mi efficitur, sed molestie sem scelerisque. Fusce orci risus,
              congue eu mauris nec, pretium tincidunt nulla.
            </p>
          </div></a>
        </div>
      </div>
    </div>
  </div>
   


  <br>

  
<div class="footer" style="padding-top:105%">
    <center><h2>&copy; 2021 Group 27</h2></center> 
 </div>
  </body>
</html>