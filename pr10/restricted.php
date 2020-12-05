<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>
<?php
    if ($_SESSION['auth'] == true) {
        echo "Hello " . $_SESSION['name'] . "<br>";
        echo "Your login is: " . $_SESSION['login'];
    } else {
        echo <<< HTML
        <h4>Wrong login or password.</h4>
        <a href="main_page.php">Try again here.</a>
        HTML;
    }
?>
</body>
</html>