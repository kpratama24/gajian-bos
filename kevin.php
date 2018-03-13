<?php
 include 'db.php';
    session_start();
    $totaljam = 0;
    $totalbayar = 0;
 if(isset($_SESSION['username'])){
     $sql = "SELECT * FROM magang where id=1 ORDER BY tanggal ASC";
     $result = $conn->query($sql);
     ?>
        <!doctype html>
        <html lang="en">
          <head>
            <title>Perhitungan Kevin</title>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <link rel="stylesheet" href="./style.css">
          </head>
          <body>
          <div class="container">
        <div class="jumbotron">
            <a href="./home.php"><button class="btn btn-primary no-print"> < go back </button></a>
            <p class="lead">PERHITUNGAN JAM KERJA KARYAWAN MAGANG</p>
            <p class="lead">Biro Kemahasiswaan dan Alumni </p>
            <hr class="my-4">
            <h5>Nama : Kevin Pratama</h5>
            <h5>NIK : 20170122</h5>
            <h5>Periode : 16 Februari s/d 15 Maret 2018</h5><br>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Hari</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Masuk</th>
                    <th scope="col">Pulang</th>
                    <th scope="col">Total Jam</th>
                    <th scope="col">Istirahat</th>
                    <th scope="col">Waktu Real</th>
                    <th scope="col">Total Rupiah</th>                    
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0){
                        $i = 1;
                        while($row = $result->fetch_assoc()){
                            echo "<tr><th scope=\"row\">". $i ."</th>
                            <td>" . $row['hari'] . "</td>
                            <td>" . $row['tanggal'] . "</td>
                            <td>" . $row['masuk'] . "</td>
                            <td>" . $row['pulang'] . "</td>
                            <td>" . $row['totaljam'] . "</td>
                            <td>" . $row['istirahat'] . "</td>
                            <td>" . $row['waktureal'] . "</td>
                            <td>" . $row['totalbayar'] . "</td>
                            ";
                            $totaljam  = $totaljam + intval($row['waktureal']);
                            $totalbayar = $totalbayar + intval($row['totalbayar']);
                            $i++;
                        }
                    }
                    else{
                        echo "Not Yet Available";
                    }
                    ?>
                </tbody>
            </table>
            <br>
            <p class="lead">Jam kerja yang dihitung : <?php echo $totaljam ?> </p>
            <p class="lead">TARIF GOLONGAN 1A : Rp.9.000,- / JAM</p>
            <?php
            ?>
            <p class="lead">Jumlah Gaji : 9000 * <?php echo $totaljam?> jam = Rp. <?php echo $totalbayar ?> </p>
            <br><br>
            <p>Bandung, <?php echo(date("d-M-Y")); ?></p>
            <p>Mengetahui,</p>
            <br><br><br><br>
            <p><b>Matheus Setiyanto, S.Sos</b></p>
          </div>
          <div class="card-footer text-muted">
            &copy; 2018 Biro Kemahasiswaan dan Alumni . Universitas Katolik Parahyangan
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
     echo "Go away !";
 }
?>