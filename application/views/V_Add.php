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
            <?php
            if($this->session->flashdata('error_add')){
                echo $this->session->flashdata('error_add');
            }
            ?>
            <a href="http://localhost/magang/home"><button class="btn btn-outline-primary no-print"> < go back </button></a>
            <form method="post" action="<?php echo base_url();?>add_new">
              Username : <br>
              <input class="form-control" type="text" name="username" required>
              <br>
              Password : <br>
              <input class="form-control" type="password" name="password" required>
              <br>
              Nama : <br>
              <input class="form-control" type="text" name="nama" required>
              <br>
              NIK : <br>
              <input class="form-control" type="text" name="nik" required>
              <br>
              ROLE : <br>
              <select class="form-control" name="role">
                  <?php foreach ($listrole as $list):?>
                    <option value="<?php echo $list->ID;?>"><?php echo $list->NAME; ?></option>
                  <?php endforeach;?>
              </select>
              <br>
              Kategori :
              <br>
              <select class="form-control" name="kategori">
                  <?php foreach ($listkategori as $list):?>
                    <option value="<?php echo $list->ID;?>"><?php echo $list->KATEGORI; ?></option>
                  <?php endforeach;?>
              </select>
              <br>
              <input class="btn btn-outline-primary" type="submit" name="" value="TAMBAHKAN TENAGA MAGANG">
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
