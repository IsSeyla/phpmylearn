<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <style>
        .img{
            width: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <!-- Form Input -->
            <div class="col-md-6">
                <form class="Card" method="post" enctype="multipart/form-data">
                    <table class="table">
                        <tr>
                            <th colspan="2">Student Form</th>
                        </tr>
                        <tr>
                            <td>Name :</td>
                            <td><input type="text" name="Name" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Gender :</td>
                            <td>
                                <input type="radio" name="Gender" value="Male" checked>Male
                                <input type="radio" name="Gender" value="Female">Female
                            </td>
                        </tr>
                        <tr>
                            <td>Phone:</td>
                            <td><input type="text" name="Phone" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Address:</td>
                            <td><textarea cols="50" rows="5" name="Address" class="form-control"></textarea></td>
                        </tr>
                        <tr>
                            <td>Position:</td>
                            <td><input type="text" name="Position" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Skill:</td>
                            <td><input type="text" name="Skill" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Salary :</td>
                            <td><input type="text" name="Salary" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Images:</td>
                            <td><input type="file" name="pic" class="form-control"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" value="Submit" name="btn" class="btn btn-primary">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <!-- Form Output -->
            <div class="col-md-6 Card">
                <?php

                //connect mysql
                $con = mysqli_connect("localhost","root","","db_mysql");
                $msg = "";

                if (isset($_POST['btn'])) {
                    $Heading = "Employee Info";
                    $Name = $_POST['Name'];
                    $Gender = $_POST['Gender'];
                    $Address = $_POST['Address'];
                    $Phone = $_POST['Phone'];
                    $Position = $_POST['Position'];
                    $Skill = $_POST['Skill'];
                    $Salary = $_POST['Salary'];
                    
                    if (isset($_FILES['pic'])) {
                        $pic = $_FILES['pic']['tmp_name'];
                        $f_namep = $_FILES['pic']['name'];
                        move_uploaded_file($pic, "images/$f_namep");
                        $store_in = "<img src='images/$f_namep' width='400'>";
                    } else {
                        $store_in = "";
                    }

                    echo "<hr>";
                    echo "<table class='table'>";
                    echo "<tr>";
                    echo "<th colspan='2'>$Heading</th>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Name:</td>";
                    echo "<td>$Name</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Gender:</td>";
                    echo "<td>$Gender</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Address:</td>";
                    echo "<td>$Address</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Phone:</td>";
                    echo "<td>$Phone</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Position:</td>";
                    echo "<td>$Position</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Skill:</td>";
                    echo "<td>$Skill</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Salary:</td>";
                    echo "<td>$Salary</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Photo:</td>";
                    echo "<td>$store_in</td>";
                    echo "</tr>";
                    echo "</table>";
                }

               $sql="INSERT INTO student VALUES ('','$Name','$Gender','$Address','$Phone','$Position','$Skill',$Salary,' $f_namep')";
               
              // $sql = "UPDATE student SET $Name = 'Tab seth' WHERE Emp_id = 4";
                $exec = mysqli_query($con,$sql);
                $con->close();
                // if($exec){
                //     echo  "Insert sucessfully";
                // }else{
                //     echo "fial";
                // }
                ?>

            </div>
        </div>
    </div>
</body>
</html>
