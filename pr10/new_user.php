<?php

$servername = "localhost";
$username = "root";
$password = "1234";
$database = "users";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn -> connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Adding new user
$id = $_POST["id"];
$login = $_POST["login"];
$first_name = $_POST["name"];
$last_name = $_POST["surname"];
$password = $_POST["password"];

$sql = "INSERT INTO users (id, login, first_name, last_name, password, id_role) VALUES ('$id', '$login', '$first_name', '$last_name', '$password', 0)";
$result = $conn->query($sql);

header('Location: login.php');
?>