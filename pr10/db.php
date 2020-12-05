<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$database = "users"; //повинна бути створена в субд

// Встановлення з'єднання 
$conn = new mysqli($servername, $username, $password, $database);

// Перевірка з'єднання
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully"; 


// $sql = "SELECT id, login, password FROM users";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "id: " . $row["id"];
// 	}
// }

?>