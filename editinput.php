<?php
include 'db.php';
session_start();
    if(isset($_SESSION['username'])&&isset($_GET['uniquebro'])){
        $uniquebro = $_GET['uniquebro'];
        $sql = 'SELECT * FROM magang WHERE uniquebro=' . $uniquebro . '';
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        ?>
        <!doctype html>
        <html lang="en">
          <head>
            <title>Edit Input</title>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
          </head>
          <body>
          <div class="container"><br>
          <a href="./home.php"><button class="btn btn-dark">< Go back </button> </a><br>
          <h5 class="alert alert-warning">Pastikan Nama Pegawai Magang benar !</h5>
            <h5> Nama Pegawai Magang : <?php if($row['id']==1) echo "Kevin Pratama"; else echo "Hengky Surya"; ?> </h5>
                <form action="./editinputsubmit.php" method="post">
                    <input type="hidden" name="uniquebro" value="<?php echo $row['uniquebro']; ?>">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">                    
                    Hari :<input class="form-control" type="text" name="hari" placeholder="hari" value="<?php echo $row['hari']; ?>" required><br>
                    Tanggal :<input class="form-control" type="date" name="tanggal" value="<?php echo $row['tanggal']; ?>" required><br>
                    Masuk:<input class="form-control" type="time" name="masuk" value="<?php echo $row['masuk']; ?>" required><br>
                    Pulang:<input class="form-control" type="time" name="pulang" value="<?php echo $row['pulang']; ?>" required><br>
                    Total jam:<input class="form-control" type="number" name="totaljam" placeholder="total jam" value="<?php echo $row['totaljam']; ?>" required><br>
                    Istirahat:<input class="form-control" type="number" name="istirahat" placeholder="total istirahat" value="<?php echo $row['istirahat']; ?>" required><br>
                    <input class="btn btn-primary" type="submit" value="Submit" required>
                </form>
                <br>
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
        echo "Unique keys not defined or error occured . Please contact my IT Administrator !";
    }
?>