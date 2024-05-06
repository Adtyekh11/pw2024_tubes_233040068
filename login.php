<?php

if(isset($_POST["submit"])){
    if($_POST["username"] == "Admin" && $_POST["password"] == "12345"){
        header("Location: admin.php");
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
    <title>Tugas 6c</title>
    <style>
        body{
            padding: 100px;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container{
            width: 370px;
            height: 400px;
            display: flex;
            background-color: #a9a9a9;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 10px;
            font-family: Arial, Helvetica, sans-serif;
    
        }

        .container ul{
            list-style: none;
            font-weight: bold;

        }
        
        .container ul li{
            margin: 5px;
            padding: 5px;
            text-align: center;
            
        }   

        .container h1{
            text-align: center;
        }

        .container label{
            margin-right: 10px;
        }

        .container button{
            cursor: pointer;
            background-color: white;
            padding: 5px;
            border: none;
            border-radius: 5px;
        }

        .container button:hover{
            background-color: black;
            transition: 0.5s;
            color: white;
        }
        .p{
            color: red;
            font-style: italic;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Login Admin</h1>
    <img src="img/1.png" alt="">
    
    <?php if(isset($error)) : ?>
    <p class="p">username / password salah!</p>
    <?php endif; ?>
    
    <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </form>
    </ul>
</div>
</body>
</html>