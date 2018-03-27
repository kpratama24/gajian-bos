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
        <div class="container">
             <div class="jumbotron">
            <h1 class="display-4">Sistem Pelaporan Gaji Magang</h1>
            <p class="lead">You're logged in as : <b><?php echo $this->session->userdata('username');?></b> <small><a href="<?php echo base_url();?>logout"><button class="btn btn-outline-danger btn-sm">Keluar</button></a></small></p>
            <hr class="my-4">
            <a href="http://localhost/magang/home"><button class="btn btn-outline-primary no-print"> < go back </button></a>
            <hr class="my-4">
            <?php foreach ($info as $list):?>
            <h3>DETAIL LAPORAN</h3>
            <hr class="my-4">
            <h5><b>Hari : </b> <?php echo $list->HARI;?></h5>
            <h5><b>Tanggal : </b> <?php echo $list->TANGGAL;?></h5>
            <h5><b>Jam Masuk : </b> <?php echo $list->JAM_MASUK;?></h5>
            <h5><b>Jam Pulang : </b> <?php echo $list->JAM_PULANG;?></h5>
            <h5><b>Total Jam : </b> <?php echo $list->TOTAL_JAM;?></h5>
            <h5><b>Istirahat : </b> <?php echo $list->ISTIRAHAT;?> </h5>
            <?php endforeach;?>
            <hr class="my-4">
            <form action="<?php echo base_url();?>remove" method="post">
                <?php $id = $this->uri->segment(2);?>
                <input class="form-control" type="text" name="id_gaji" hidden value="<?php echo $id; ?>" reqired>
                <input class="btn btn-primary" type="submit" name="aksi" value="REMOVE" required>
            </form>
            <hr class="my-4">
            <form action="<?php echo base_url();?>edit" method="post">
                <?php $id = $this->uri->segment(2);?>
                <input class="form-control" type="text" name="id_gaji" hidden value="<?php echo $id; ?>">
                Hari : <select class="form-control" name="hari">
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                    <option value="Sabtu">Sabtu</option>
                    <option value="Minggu">Minggu</option>
                </select><br>
                Tanggal: <input class="form-control" type="date" name="tanggal" required><br>
                Masuk (Format AM/PM): <input class="form-control" type="time" name="jam_masuk" required><br>
                Pulang (Format AM/PM):<input class="form-control" type="time" name="jam_pulang" required><br>
                Total Jam :<input class="form-control" type="text" name="total_jam" placeholder="Total Jam" required><br>
                Istirahat : <input class="form-control" type="number" name="istirahat" placeholder="Total Istirahat" required><br>
                <input class="btn btn-primary" type="submit" name="aksi" value="SIMPAN PERUBAHAN" required disabled>
                
            </form>
            <br>
            <br>
            <br>
            
            </div>
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <?php
            if($this->session->flashdata('error_input')){
                ?>
                <script type="text/javascript">
                    $(window).on('load',function(){
                    $('#myModal').modal('show');
                    });
                </script>
                <?php
            }
            ?>
            
            <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        <h3>Informasi</h3>
        <hr>
        <p><?php echo $this->session->flashdata('error_input'); ?></p>
      </div>
    </div>

  </div>
</div>
    </body>
</html>
        