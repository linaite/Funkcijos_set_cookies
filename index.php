<?php
include_once 'app/Models/functions.php';
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="container d-flex justify-content-center align-items-center">
<form action="app/Views/login.php" name="" method="post" class="d-flex flex-column">
    <input class="  mb-3" type="text" name="user_name">
    <input class="mb-3" type="text" name="user_email">
    <input class="mb-3" type="submit" name="login" value="Log in!">
</form>
<script src="assets/js/jQuery.js"></script>
<script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>