<?php
include("main.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            /* background-color: bisque; */
        }
        .container1{
            height: 60vh;
            margin:auto;
            width: 30%;
            background-color:red;
            padding:30px;
            background:rgb(200,20,200,.1);
            backdrop:filter(10px);
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items:stretch ;
            justify-content:center ;
        }
        .btn{
            width: 100%;
            background:red;
            color:white;
            font-weight: 900;
        }
        h1{
            text-align:center;
            color:red;
            font-weight: 900;
            padding-bottom:30px
        }
    </style>
</head>
<body>
    <main>
        <div class="container1">
                <h1>Register</h1>
           <form class="form" action="user_register_proces.php" method="GET">
                <div class="form-group">
                    <label for="userName">User Name</label>
                    <input type="text" class="form-control" id="userName" placeholder="user Name" name="userName">
                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" class="form-control" id="Password" placeholder="Password" name="pwd">
                </div>
                <div class="form-group">
                    <label for="Comfirm_Password">Comfirm Password</label>
                    <input type="password" class="form-control" id="comfirm_Password" placeholder="Password" name="comfirm_pwd">
                </div>
                <button type="submit" class="btn btn-default">Sign up</button>
             </form>
        </div>
    </main>
</body>
</html>