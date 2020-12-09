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

if(count($_POST) > 0) {

    $sql = "SELECT id, login, password, first_name, FROM users";

    $result = $conn->query($sql);
    
    while($row = $result->fetch_assoc()) {
        if(($row["login"] == $_POST["login"]) && ($row["password"] == $_POST["password"])) {
            $_SESSION['login'] = $_POST["login"];
            $_SESSION['name'] = $row["first_name"];
            $_SESSION['auth'] = true;
            break;
        } else {
            $_SESSION['auth'] = false;
        }
    }
    header('Location: restricted.php');
    
}
?>