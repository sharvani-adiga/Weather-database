<?php
  $host = "localhost";
  $user = "root";
  $dbpass = "";
  $dbname = "weather";
  $port = "3325";
  
  $con = mysqli_connect($host,$user,$dbpass,$dbname,$port) or die("Unable to connect");
     echo "Connected"
?>