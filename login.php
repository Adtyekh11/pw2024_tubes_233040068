<?php
session_start();

require 'functions.php';


if (isset($_POST['login'])) {
    $conn = koneksi(); 

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {

            // set session
            $_SESSION['login'] = true;
           
            // jika admin
            if($row['role']==='admin'){
                
                header("location: ./admin/dashboard/dashboard.php");
                exit;

                // jika bukan admin
            } else {
            
            header("location: ./admin/halaman_detail/detail.php");
            exit;
        }
    }
}
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./asset/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Login</h1>
    
    <?php if (isset($error)) : ?>
    <p class="p">Username / password salah!</p>
    <?php endif; ?>
    
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        
        <button type="submit" name="login">Login</button>
    </form>
    <div class="register">
        Belum punya akun? <a href="register.php">Sign up</a>
    </div>
</div>
</body>
</html>
