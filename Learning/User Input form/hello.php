<h1>Get User </h1>
<?php
$fname = $_GET['fname'];
$lname = $_GET['lname'];
//  if(empty($_GET['fname'])){
//     $fname = "input";
//  }else{
//     $lname = $_GET['lname'];
//  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table boder="1">
        <tr>
            <td><label for="">First Name </label></td>
            <td><label for="">Last Nama </label></td>
        </tr>
        <tr>
            <td>
                <?php echo $fname; ?>
            </td>
            <td>
                <?php echo $lname; ?>
            </td>
        </tr>
    </table>
</body>
</html>