 <!DOCTYPE html>
        <html lang="en">
          <head>
            <title>Perhitungan Kevin</title>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <link rel="stylesheet" href="./style.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
          </head>
          <body>
          <div class="container">
        <div class="jumbotron">
            <a href="http://localhost/magang/home"><button class="btn btn-outline-primary no-print"> < go back </button></a>
            <b><p class="no-print">Dicek dulu yaaa. Kalau sudah klik -> <button class="btn btn-outline-dark" onclick="printcoy()">Print</button></p></b>
            <h4>PERHITUNGAN JAM KERJA KARYAWAN MAGANG</h4>
            <p class="lead"><b>Biro Kemahasiswaan dan Alumni </b></p>
            <hr class="my-4">
            
            <hr class="my-4">
            <?php foreach ($profile as $prof):?>
              <h5><b>Nama : </b><?php echo $prof->NAMA; ?></h5>
              <h5><b>NIK : </b><?php echo $prof->NIK; ?></h5>
            <?php endforeach;?>
            <h5><b>Periode : </b> 16 Maret 2018 s/d 15 April 2018</h5>
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
                    <th scope="col" class="no-print">Aksi</th>                    
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $iterator = 1;
                        $totalWaktu = 0;
                    ?>
                    <?php foreach ($listlaporan as $list):?>
                    <tr>
                        <td><?php echo $iterator;?></td>
                        <td><?php echo $list->HARI;?></td>
                        <td><?php echo $list->TANGGAL;?></td>
                        <td><?php echo $list->JAM_MASUK;?></td>
                        <td><?php echo $list->JAM_PULANG;?></td>
                        <td><?php echo $list->TOTAL_JAM;?></td>
                        <td><?php echo $list->ISTIRAHAT;?></td>
                        <td><?php echo $list->WAKTU_REAL;?></td>
                        <td><?php echo $list->TOTAL_BAYAR;?></td>
                        <td><a href="<?php echo base_url()."detail"."/$list->ID";?>">Detail</a></td>
                    </tr>
                    <?php 
                    $totalWaktu+=$list->WAKTU_REAL;
                    $iterator++;
                    endforeach;?>
                </tbody>
            </table>
            <b><p class="no-print">Dicek dulu yaaa. Kalau sudah klik -> <button class="btn btn-outline-dark" onclick="printcoy()">Print</button></p></b>
            <br>
            <p class="lead">Jam kerja yang dihitung :  </p>
            <?php
                foreach ($gaji as $gj):
                    ?>
                    <p class="lead">TARIF GOLONGAN <?php echo $gj->KATEGORI;?> : Rp.<?php $harga=$gj->HARGA;  echo $harga;?>,- / JAM</p>
                    <?php
                endforeach;
            ?>
            <p class="lead">Jumlah Gaji : <?php echo $harga;?> * <?php echo $totalWaktu;?> JAM = Rp. <?php echo $harga * $totalWaktu;?> </p>
            <br><br>
            <p>Bandung, <?php echo(date("d-M-Y")); ?></p>
            <p>Mengetahui,</p>
            <br><br><br><br>
            <p><b>Matheus Setiyanto, S.Sos</b></p>
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
        <script type="text/javascript">
            
            function printcoy() {
                window.print();
            }
        </script>
    
