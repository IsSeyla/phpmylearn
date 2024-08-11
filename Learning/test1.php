

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" >
        Name : <input type="text" name="name"> <br><br>
        Password : <input type="password" name="pwd"> <br><br>
        Gmail : <input type="mail" name="mail"> <br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $pass = $_POST['pwd'];
    $mail = $_POST['mail'];
  //  echo "My name is $name : My password is $pass : My Email is $mail";
}
?>
<table >
    <tr>
        <td>name</td>
        <td>password</td>
        <td>Gmail</td>
        
    </tr>
    <tr>
    <td><?php echo $name?></td>
    <td><?php echo $pass?></td>
    <td><?php echo $mail?></td>
    </tr>
</table>
<table>
    <tr>
    <td>name</td>
        <td>password</td>
        <td>Gmail</td>
    </tr>
    <tr>
         <td><?php echo $_POST['name']?></td>
         <td><?php echo $_POST['pwd']?></td>
         <td><?php echo $_POST['mail']?></td>
    </tr>
</table>