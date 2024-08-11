
<?php
$user_name = $_POST['user_name'];
$pwd = $_POST['password'];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>
                user name
            </th>
            <th>
                password
            </th>
        </tr>
        <tr>
            <td><?php echo $user_name ?></td>
            <td><?php echo $pwd ?></td>
        </tr>
    </table>
</body>
</html>