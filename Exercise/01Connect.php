<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 01</title>
</head>
<body>
    <h1>Exercise 01</h1>
    <div class="container">
        <form action="" method="POST">
            <table>

            </table>
        </form>
    </div>
</body>
</html>
<?php
$db_host ='localhost';
$db_user = 'root';
$db_pass = '';
$db_dbName = 'db_mysql';

$mysqli = @new mysqli(
    $db_host,
    $db_user,
    $db_pass,
    $db_dbName
);
if($mysqli -> connect_error){
    echo 'Error :'.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
}
echo 'Success : A proper connection to Mysql was made';
echo '<br>';
$mysqli->close();
function connect(){
    
}
?>