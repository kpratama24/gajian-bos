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
            <form method="get">
                <h4>FILTER</h4>
                Tahun :
                <select name="year" class="form-control">
                    <option>2018</option>
                    <option>2019</option>
                    <option>2020</option>
                </select>
                Periode : 
                <select name="periode" class="form-control">
                    <option>Januari - Februari</option>
                    <option>Februari - Maret</option>
                    <option>Maret - April</option>
                    <option>April - Mei</option>
                    <option>Mei - Juni</option>
                    <option>Juni - Juli</option>
                    <option>Juli - Agustus</option>
                    <option>Agustus - September</option>
                    <option>September - Oktober</option>
                    <option>Oktober - November</option>
                    <option>November - Desember</option>
                    <option>Desember - Januari</option>
                </select>
                <?php
                if($this->session->userdata('role')== 1){
                    ?>
                    Karyawan Magang : 
                    <select name="magang" class="form-control">
                        <option value="0">ALL</option>
                        <?php foreach ($listmagang as $list):?>
                            <option value="<?php echo $list->USERNAME; ?>"><?php echo $list->NAMA;?></option>
                        <?php endforeach;?>  
                    </select>
                    <?php
                }    
                ?>
                <br>
                <input class="btn btn-primary" type="submit" name="" value="SEARCH">
            </form>
            <hr class="my-4">
            <?php foreach ($profile as $prof):?>
              <h5><b>Nama : </b><?php echo $prof->NAMA; ?></h5>
              <h5><b>NIK : </b><?php echo $prof->NIK; ?></h5>
              <h5><b>Periode : </b></h3>
            <?php endforeach;?>
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
    
