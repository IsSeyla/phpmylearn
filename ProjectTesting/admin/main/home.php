<?php
session_start();

$ch = $_SESSION['logein'];
if($ch != 1){
    header('location:login.php');
}

include("main.php");
$con = mysqli_connect("localhost","root","","db_mysql");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .sl{
            text-align:center;
            font-size:60px;
            color:blue;
            font-weight:900 ;
        }
        th,td{
            font-size:20px;
        }
        td{
            font-weight:bold;
        }
    </style>
</head>
<body>
    
<div class="container">
    <div>
        <h1 class="sl">Main board</h1>
        <hr>
        <a href="new_student.php"type="button" class="btn btn-success" style="margin-bottom:10px;" >
        <span class="glyphicon glyphicon-plus"></span>    
        Add new student</a>
        <table border="2" width="100%"  class="table table-hover">
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Operator</th>
            </tr>

        <?php
        $sql_query = "SELECT * FROM testing WHERE activity = 1";
        $result
         = $con->query($sql_query);
        while($row=mysqli_fetch_assoc($result)){
            ?>
            <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['fname']; ?></td>
          <td><?php echo $row['lname']; ?></td>
          <td>
             <a href="edit.php?id=<?php echo $row['id']?>"class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span>Edit</a> 
             <a href="dele.php?id=<?php echo $row['id']?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash" ></span>delete</a>
        </td>
  
         <?php
        }
        ?>
             </tr>
             </table>
    </div>
</div>

   
</body>
</html>