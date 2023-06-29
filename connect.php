<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Weather</title>
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./design.css">
  <script src="./weather.js" defer></script>
</head>

<body>
  <div class="card">
<?php

require_once"conhead.php";
if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());

}

    $city=$_POST['city'];
    $lat=$_POST['lat'];
    $lon=$_POST['lon'];

    if ($city != "" && $lat != "" && $lon!= "") {
    try{
       $sql_query = "INSERT INTO region (City,Latitude,Longitude)
     VALUES ('$city','$lat','$lon')";

    if (mysqli_query($conn, $sql_query)) 
     {
        echo "Thank you! The information will be updated soon. Stay tuned...";
     } 
     else
     {
        echo "Error: " . $sql . "" . mysqli_error($conn);
     }
    }
    catch(Exception $e){
      $error_message = "Invalid input. Please verify the latitude and longitude values and try again.";
      echo $error_message;
    }
  }
  else{
    echo "Please fill in all the fields.";
  }
     mysqli_close($conn);
    
?>
  </div>
</body>