<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUBES</title>
    <style>
        body{
            padding: 100px;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container{
            width: 300px;
            height: 200px;
            display: flex;
            flex-direction: column;
            background-color: #a9a9a9;
            justify-content: center;
            align-items: center;
            padding: 5px;
            font-family: Arial, Helvetica, sans-serif;

        }

        .container h1{
            text-align: center;

        }

        .container a{
            text-decoration: none;
            color: black;
            background-color: #fff;
            padding: 5px;
            border-radius: 5px;
            font-weight: bold;
        }

        .container a:hover{
            color: white;
            background-color: black;
            transition: 0.5s;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat datang Admin!!</h1>
        <a href="login.php">Logout</a>
    </div>
</body>
</html>