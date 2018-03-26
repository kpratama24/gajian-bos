<!DOCTYPE html>
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
            <p class="lead">You're logged in as : <b><?php echo $this->session->userdata('username');?></b> <small><a href="<?php echo base_url();?>logout"><button class="btn btn-outline-danger btn-sm">Keluar</button></a></small></p>
            <hr class="my-4">
            <a href="http://localhost/magang/home"><button class="btn btn-outline-primary no-print"> < go back </button></a>
            <hr class="my-4">
            <form method="get" action="<?php echo base_url();?>detHistori">
                <h4>FILTER</h4>
                Tahun :
                <select name="tahun" class="form-control">
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                </select>
                Periode : 
                <select name="periode" class="form-control">
                    <option value="0">ALL</option>
                    <option value="1">Januari - Februari</option>
                    <option value="2">Februari - Maret</option>
                    <option value="3">Maret - April</option>
                    <option value="4">April - Mei</option>
                    <option value="5">Mei - Juni</option>
                    <option value="6">Juni - Juli</option>
                    <option value="7">Juli - Agustus</option>
                    <option value="8">Agustus - September</option>
                    <option value="9">September - Oktober</option>
                    <option value="10">Oktober - November</option>
                    <option value="11">November - Desember</option>
                    <option value="12">Desember - Januari</option>
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
