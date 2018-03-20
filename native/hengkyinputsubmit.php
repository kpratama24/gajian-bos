<?php
 include 'db.php';

  if(isset($_POST['hari'])){
      $waktureal = intval($_POST['totaljam'])-intval($_POST['istirahat']);
      $totalbayar = 9000 * $waktureal;
    $sql = "INSERT INTO `magang` (`uniquebro`, `id`, `hari`, `tanggal`, `masuk`, `pulang`, `totaljam`, `istirahat`, 
    `waktureal`, `totalbayar`) 
    VALUES (NULL, '2', '" . $_POST['hari'] ."', '" . $_POST['tanggal'] . "', '" . $_POST['masuk'] . "',
     '" . $_POST['pulang'] . "', '" . $_POST['totaljam'] . "', '" . $_POST['istirahat'] . "', '" .  $waktureal . "',
      '" . $totalbayar . "')";
      $conn->query($sql);
      header( "Refresh:2; url=./hengkyinput.php");    
      echo "MANTAP BRO GAJIAN LAGI !";                  
  }
  else{
      echo "Go away !";
  }
?>