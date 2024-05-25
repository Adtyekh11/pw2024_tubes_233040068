<?php

if(isset($_POST["submit"])){
    if($_POST["username"] == "User" && $_POST["password"] == "12345"){
        header("Location: index/index.php");
        exit;
    }else{
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="./asset/css/register.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Register User</h1>
    
    <form action="" method="post">
        <label for="username">Nama:</label>
        <input type="text" name="username" id="username" required>

        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        
        <label for="password">Confirm Password:</label>
        <input type="password" name="password" id="password" required>
        
        <button type="submit" name="submit">Register</button>
    </form>
</div>
</body>
</html>
