<?php 
require_once 'controllers/authController.php'; 
if(!isset($_SESSION['id'])){
  header('location: login.php');
  exit();

}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Online Silver Creek</title>
  </head>
     
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <a href="registration.php"><img src="images/logo.jpeg" width="140px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
    
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registration.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="products.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="cart.php"><img src="https://img.icons8.com/color/30/ffffff/shopping-cart--v1.png"/></a>
</li>
</ul> 

<div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
    <a class="nav-link" href="#"><?php echo "Welcome "?><img src="https://img.icons8.com/officel/16/ffffff/user.png"/></a>
  </li>
</ul>
</div>
</div>
</div>
</nav>
<div class="container mt-4">
  <div class="row">
    <div class="col-md-4 offset-md-4 form-div login">
      <form class="row g-3" method="post" action="login.php">
      <?php if(isset($_SESSION['message'])): ?>
    <div class="alert <?php echo $_SESSION['alert-class']; ?> ">
      <?php 
      echo $_SESSION['message']; 
      unset($_SESSION['message']); 
      unset($_SESSION['alert-class']); 
      ?>
      </div>
    <?php endif; ?>
      <h3>WELCOME!  <?php echo $_SESSION['username']; ?></h3>
<a href="welcome.php?logout=1" class="logout">logout</a>
<?php if(!$_SESSION['verified']): ?>
<div class="alert alert-warning">
  You need to verify your account.<br>
  Sign in to your email account and click on the verification
  link we just emailed you at<br>
  <strong><?php echo $_SESSION['email']; ?></strong>
</div>

<?php endif; ?>
<?php if($_SESSION['verified']): ?>
  <button class="btn btn-block btn-lg btn-primary">I am verified</button>
<?php endif; ?>
</form>
</div>
</div>
</div>








    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>