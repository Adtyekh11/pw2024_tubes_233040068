<?php
require 'functions.php';

if (isset($_POST['register'])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('User baru berhasil ditambahkan');
              </script>";
    } else {
        echo mysqli_error($conn);
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
    <h1>Register</h1>
    
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        
        <label for="password2">Confirm Password:</label>
        <input type="password" name="password2" id="password2" required>
        
        <button type="submit" name="register">Register</button>
    </form>
    <div class="login">
        <p>Sudah punya akun?</p> <a href="login.php">Sign in</a>
    </div>
</div>
</body>
</html>
