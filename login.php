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

        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username) || empty($password)) {
            echo 'Please enter a valid username and password.';
            exit;
        }

        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user) {
            session_start();
            $_SESSION['username'] = $user['username'];
            header('Location: region.php');
            exit;
        } else {
    
            echo 'Invalid username or password.';
        }
        mysqli_close($conn);
    
        ?>
    </div>
</body>