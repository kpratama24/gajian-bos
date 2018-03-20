<?php

$servername = "localhost";

$username = "nearkevi_gaji";

$password = "sementara!2013";

$dbname = "nearkevi_gaji";





// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);



// Check connection

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

} 

?>

