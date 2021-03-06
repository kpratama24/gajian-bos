<?php
    include 'db.php';

    session_start();

    if(isset($_SESSION['username'])){
        $name = explode("@",$_SESSION['username'],2);
    ?>
    <!doctype html>
    <html lang="en">
      <head>
        <title>Beranda</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      </head>
      <body>
      <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Sistem Pelaporan Gaji Magang</h1>
            <p class="lead">Selamat datang <b><?php echo $name[0] ?> !</b> <small><a href="./logout.php"><button class="btn btn-outline-danger btn-sm">Keluar</button></a></small></p>
            <hr class="my-4">
            <h4>Lihat Laporan Gaji</h4>
    <?php if(isset($_GET['delete'])) { ?><p><span class="badge badge-warning">Ada perubahan perhitungan !</span></p><?php } ?>
            <a href="./kevin.php"><button class="btn btn-outline-primary" <?php if($name[1]!="admin") echo "disabled"?>>Kevin</button></a>&nbsp; &nbsp;
            <a href="./hengky.php"><button class="btn btn-outline-primary" <?php if($name[1]!="admin2") echo "disabled"?>>Hengky</button></a>&nbsp; &nbsp;
            <a href="./nini.php"><button class="btn btn-outline-primary">Nini</button></a>&nbsp; &nbsp;
            <a href="./nur.php"><button class="btn btn-outline-primary">Pinta</button></a>&nbsp; &nbsp;
            
            <?php
            if($name[0] == "admin" || $name[1] == "bka"){
            ?>
            <hr class="my-4">            
            <p class="lead"> Input Gaji </p>
            <a href="./kevininput.php"><button class="btn btn-outline-dark" <?php if($name[1]!="admin") echo "disabled"?>>Input Gaji Kevin</button></a>&nbsp; &nbsp;
            <a href="./hengkyinput.php"><button class="btn btn-outline-dark" <?php if($name[1]!="admin2") echo "disabled"?>>Input Gaji Hengky</button></a>&nbsp; &nbsp;
            <a href="./niniinput.php"><button class="btn btn-outline-dark" <?php if($name[1]!="bka") echo "disabled"?>>Input Gaji Nini</button></a>&nbsp; &nbsp;            
            <a href="./nurinput.php"><button class="btn btn-outline-dark" <?php if($name[1]!="bka") echo "disabled"?>>Input Gaji Pinta</button></a>&nbsp; &nbsp;            
            <?php } ?>
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
<?php
    }
    else{
        echo "Go Away !";
    }
?>