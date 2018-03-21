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
            <h4>Profile Data Diri</h4>
            <p><b>Username :</b> <?php echo $this->session->userdata('username'); ?></p>
            <?php foreach ($profile as $prof):?>
              <p><b>Nama : </b><?php echo $prof->NAMA; ?></p>
              <p><b>NIK : </b><?php echo $prof->NIK; ?></p>
            <?php endforeach;?>
            <hr class="my-4"> 
            <?php
            if($this->session->userdata('role')==1){
                ?>
                 <h4>Tambah Tenaga Magang</h4>
                 <a href="<?php echo base_url();?>add"><button class="btn btn-outline-primary">ADD</button></a>&nbsp; &nbsp;
                 <hr class="my-4">
                <h4>Daftar Tenaga Magang</h4>
                 <a href="<?php echo base_url();?>list"><button class="btn btn-outline-primary">Lihat Daftar Tenaga Magang</button></a>&nbsp; &nbsp;
                 <hr class="my-4">
                <?php  
            }
            ?>
            <h4>Lihat Laporan Gaji</h4>
   
            <a href="<?php echo base_url();?>laporan"><button class="btn btn-outline-primary">Lihat Laporan Tenaga Magang</button></a>&nbsp; &nbsp;
            <a href="<?php echo base_url();?>laporan"><button class="btn btn-outline-primary">Lihat Laporan Anda</button></a>&nbsp; &nbsp;
            
            <hr class="my-4">            
            <p class="lead"> Input Gaji </p>
            <a href="<?php echo base_url();?>input"><button class="btn btn-outline-dark">Input Gaji Anda</button></a>&nbsp; &nbsp;     
          
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
