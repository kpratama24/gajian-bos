<?php
session_start();
if(isset($_SESSION['username'])){
	session_destroy();
  echo "<h1>SUCCESS. REDIRECTING...</h1>";
  header( "Refresh:1; url=./"); 
}
else{
	echo "<h1>You are not logged in! Redirecting...</h1>";
  	header( "Refresh:1; url=./"); 
}
?>