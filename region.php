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
<a href="/logout.php" id="top-right-link">Logout</a> 
  <div class="card">
    <?php
    require_once"conhead.php";
    if(!$conn)
    {
        die("Connection Failed:" . mysqli_connect_error());
    }
 /*   $stmt = $conn->prepare("SELECT * FROM region");
    $stmt->execute();
    $result = $stmt->get_result();
    */
    $sql = "CALL getRegionTable()";

$result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        echo "<table class='spaced-table'>";
        echo '<tr>';
        echo '<th>Code</th>';
        echo '<th>City</th>';
        echo '<th>Latitude</th>';
        echo '<th>Longitude</th>';
        echo '</tr>';
    
        // Iterate through the result and add the data to the table
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['Code'] . '</td>';
            echo '<td>' . $row['City'] . '</td>';
            echo '<td>' . $row['Latitude'] . '</td>';
            echo '<td>' . $row['Longitude'] . '</td>';
        }
    }

    mysqli_close($conn);
    
        ?>
    </div>
</body>
