<?php
 include 'db.php';

 if(isset($_GET['delete'])){
    $sql = "DELETE FROM magang WHERE uniquebro=". $_GET['uniquebro'] . "";
    $conn->query($sql);
    header( "Refresh:2; url=./home.php?delete"); 
    echo "Deleted successfully !";
}

  else if(isset($_POST['uniquebro']) && !isset($_GET['delete'])){
      $hari = $_POST['hari'];
      $tanggal = $_POST['tanggal'];
      $masuk = $_POST['masuk'];
      $pulang = $_POST['pulang'];
      $totaljam = $_POST['totaljam'];
      $istirahat = $_POST['istirahat'];
      $sql = "UPDATE `magang` SET `hari` = '" . $hari . "', `tanggal` = '" . $tanggal . "',
       `masuk` = '" . $masuk . "', `pulang` = '" . $pulang . "', `totaljam` = '" . $totaljam . "', 
       `istirahat` = '" . $istirahat . "' WHERE `magang`.`uniquebro` = " . $_POST['uniquebro'] ." ";
      $conn->query($sql);
      header( "Refresh:2; url=./home.php?edit=" . $_POST['id'] . "");    
      echo "Edit Success ! Please Wait... ";                  
  }
  else{
      echo "An error occurred ! Please contact my IT Admninistrator !";
  }
?>