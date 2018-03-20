<!doctype html>
<?php
session_start();

if(isset($_SESSION['username'])){
  echo "<h1>REDIRECTING...</h1>";
  header( "Refresh:2; url=./home.php"); 
}
?>
<html lang="en">
  <head>
    <title>BKA - Gaji</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
  <body>
      <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Sistem Pelaporan Gaji Magang</h1>
            <p class="lead"><b>Halaman login</b></p>
 <?php if(isset($_GET['passwordincorrect'])) { ?><p class="alert alert-danger">Password salah !</p> <?php } ?>
 <?php if(isset($_GET['usernamenotexist'])) { ?><p class="alert alert-warning">Username tidak tersedia !</p> <?php } ?> 
            <hr class="my-4">
            <form action="./login.php" method="POST">
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="email" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan email anda">
                  <small id="emailHelp" class="form-text text-muted">Kami tidak akan pernah menyebarkannya ! </small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <?php if(isset($_GET['admin'])){ ?>
                  <input type="password" name="secretCode" placeholder="secretCode">
                  <?php } ?>
                  <div class="g-recaptcha" data-sitekey="6LdWVE0UAAAAAJePbvAQf4KBmE7zZ6jLf3LEzPh2"></div><br>
                <button type="submit" class="btn btn-primary">Login</button><br>
                <a href="./forgot.php">Lupa Password ? </a>
              </form>
          </div>
          <div class="card-footer text-muted">
            &copy; 2018 IT Biro Kemahasiswaan dan Alumni . Universitas Katolik Parahyangan
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>