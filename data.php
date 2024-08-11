<?php
 $con = mysqli_connect("localhost","root","","db_mysql");
 $msg = "";
$name = $_POST['fn'];
$Gen = $_POST['sex'];
$num = $_POST['num'];
$add = $_POST['add'];
$position = $_POST['position'];
$skill = $_POST['skill'] ;
$salary = $_POST['salary'] ;

    $pic = $_FILES['img']['tmp_name'];
    $f_namep = $_FILES['img']['name'];
    move_uploaded_file($pic, "images/$f_namep");
    $store_in = "<img src='images/$f_namep' width='400'>";

    $sql = "INSERT INTO db_mysql
    VALUES ('','$name','$Gen','$add','$num','$position','$skill','$salary','$store_in')";

    mysqli_query($con,$sql);
    echo "<script> alert('sucess')</script>";

    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="con">
        <table>
            <tr>
                <td>Employee name : </td>
                <td><?php echo $name ?></td>
            </tr>
            <tr>
                <td>Employee Gender : </td>
                <td><?php echo $Gen ?></td>
            </tr>
            <tr>
                <td>Employee Number  : </td>
                <td><?php echo $num ?></td>
            </tr>
            <tr>
                <td>Employee Address : </td>
                <td><?php echo $add ?></td>
            </tr>
            <tr>
                <td>Employee Position : </td>
                <td><?php echo $position ?></td>
            </tr>
            <tr>
                <td>Employee Skill : </td>
                <td><?php echo $skill ?></td>
            </tr>
            <tr>
                <td>Employee Salary: </td>
                <td><?php echo $salary ?></td>
            </tr>
            <tr>
                <td>Employee Image: </td>
                <td><?php echo $store_in ?></td>
            </tr>


        </table>
        
    </div>
</body>
</html>