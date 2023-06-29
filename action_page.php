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

        // Check connection
        if(!$conn)
    {
        die("Connection Failed:" . mysqli_connect_error());
    }
    if (isset($_POST['city'])) {
        $city = $_POST['city'];
        $date = $_POST['date'];

    // Select data from the database
        // $sql = "SELECT * FROM temperature WHERE Code='$city' and Date='$date';";
        $sql = "SELECT temperature.Date,temperature.Code,temperature.City,temperature.Avg_Temp,temperature.Max_Temp,temperature.Min_Temp,moisture.Specific_humidity,moisture.Relative_humidity,moisture.Precipitation,wind.Wind_speed,wind.Wind_direction,wind.Atmospheric_pressure,uv.UVA_irradiance,uv.UVB_irradiance,uv.UV_index\n"

    . "FROM temperature ,moisture, wind , uv,region\n"

    . "WHERE region.Code=temperature.Code AND region.Code=moisture.Code AND region.Code=wind.Code AND region.Code=uv.Code AND region.Code='$city' AND temperature.Date='$date' AND moisture.Date='$date' AND wind.Date='$date' AND uv.Date='$date' ;";

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "City: " . $row["City"]."<br>Date: " .$row["Date"]. "<br>Average temperature of the day: " . $row["Avg_Temp"]." °C<br>Maximum Temperature: " . $row["Max_Temp"]."°C<br>Minimum Temperature: " . $row["Min_Temp"]."°C<br>Specific humidity: " . $row["Specific_humidity"]."g/kg<br>Relative humidity: " . $row["Relative_humidity"]."%<br>Precipitation: " . $row["Precipitation"]."cm<br>Wind Speed: " . $row["Wind_speed"]."kmph<br>Wind Direction: " . $row["Wind_direction"]."<br>Atmospheric Pressure: " . $row["Atmospheric_pressure"]."atm<br>UVA Irradiance: " . $row["UVA_irradiance"]."<br>UVB Irradiance: " . $row["UVB_irradiance"]."<br>UV Index: " . $row["UV_index"]."<br>";
            }
        }
        else {
            echo "0 results";
            var_dump($_POST);
        } 
    }
    else{
        echo "NOT SET\n";
        var_dump($_POST);    
    }

    $conn->close();
    ?>
  </div>
</body>