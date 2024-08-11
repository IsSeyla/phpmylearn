<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello you are from parameter method </h1>
    <?php
    $user = $_GET['user'];
    $pass = $_GET['pass'];
    // most get url Method GET if you use POST it will Error
    echo "User Name : $user Password : $pass";
    ?>
</body>
</html>