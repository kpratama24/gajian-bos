<?php
session_start();
    if(isset($_SESSION['username'])){
        ?>
        <!doctype html>
        <html lang="en">
          <head>
            <title>Input</title>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
          </head>
          <body>
          <a href="./home.php">< Go back </a>
          <div class="container">
              <form action="./nurinputsubmit.php" method="post">
              Hari : <input class="form-control" type="text" name="hari" placeholder="hari" required><br>
                Tanggal: <input class="form-control" type="date" name="tanggal" required><br>
                Masuk: <input class="form-control" type="time" name="masuk" required><br>
                Pulang :<input class="form-control" type="time" name="pulang" required><br>
                Total Jam :<input class="form-control" type="number" name="totaljam" placeholder="total jam" required><br>
                Istirahat : <input class="form-control" type="number" name="istirahat" placeholder="total istirahat" required><br>
                <input type="submit" value="Submit" required>
            </form>
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
        echo "You are not authorized !";
    }
?>