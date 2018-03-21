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
        <a href="http://localhost/magang/home">< Go back </a>
        <div class="container">
              <form action="<?php echo base_url();?>gajian" method="post">
                
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
                <input class="btn btn-primary" type="submit" value="Submit" required>
            </form>
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
        