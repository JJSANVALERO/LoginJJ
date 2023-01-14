<?php
include './controller/session.php';

if(isset($_POST['username'])&&($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    checkSession($username,$password);
}
?>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
<form method="post" action="">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username">
    <br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password">
    <br>
    <input type="submit" name="submit" value="Login">
</form>
</body>
</html>
