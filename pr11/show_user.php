<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "1234";
$database = "users";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn -> connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>All users</title>
</head>
<body>

    <h2>All users:</h2>
    <a href="login.php">Go back.</a>

    <?php 
    
    $sql = "SELECT login, first_name, img FROM users";

    $result = $conn->query($sql);
    
    while($row = $result->fetch_assoc()) {
        $imgsrc = $row["img"];
        echo '<br><br>User: ' . $row["first_name"] . "<br>";
        echo 'User login is: ' . $row["login"] . "<br>";
        if($imgsrc != null) {
            echo "<img src='$imgsrc' width='150' >";
            echo "<br>";
        }
    }
    ?>
</body>