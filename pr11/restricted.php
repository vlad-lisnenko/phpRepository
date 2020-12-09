<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>
<?php
    if ($_SESSION['auth'] == true) {
        if($_SESSION["img"] != null) {
            $imgsrc = $_SESSION["img"];
            echo "<img src='$imgsrc' width='150' > <br>";
        }
        echo "Hello " . $_SESSION['name'] . "<br>";
        echo "Your login is: " . $_SESSION['login'] . "<br>";
        echo <<< HTML
        <a href="login.php">Go back.</a>
        HTML;
    } else {
        echo <<< HTML
        <h4>Wrong login or password.</h4>
        <a href="login.php">Try again here.</a>
        HTML;
    }
?>
</body>
</html>