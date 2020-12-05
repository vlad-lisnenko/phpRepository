<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

<div class="container">
    <form action="new_user.php" class="form-signin" method="POST">
        <input type="text" class="form-control" placeholder="Create id" name="id" >
        <input type="text" class="form-control" placeholder="Create login" name="login" >
        <input type="text" class="form-control" placeholder="Enter your name" name="name" >
        <input type="text" class="form-control" placeholder="Enter your surname" name="surname" >
        <input type="text" class="form-control" placeholder="Create password" name="password" >
        <input type="submit" class="btn btn-lg btn-primary btn-block" value="Enter">
        <a href="main_page.php">Back</a>
    </form>
</div>

</body>
</html>