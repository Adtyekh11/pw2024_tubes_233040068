<?php

if(isset($_POST["submit"])){
    if($_POST["username"] == "User" && $_POST["password"] == "12345"){
        header("Location: admin/product/product.php");
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
    <title>login user</title>
    <link rel="stylesheet" href="./asset/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Login User</h1>
    
    <?php if (isset($error)) : ?>
    <p class="p">Username / password salah!</p>
    <?php endif; ?>
    
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        
        <button type="submit" name="submit">Login</button>
    </form>
    <div class="register">
        Don't have an account? <a href="register.php">Sign up</a>
    </div>
</div>
</body>
</html>
