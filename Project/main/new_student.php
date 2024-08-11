<?php
include("main.php");
$con = mysqli_connect("localhost","root","","db_mysql");
?>
<div class="container">
   <div>
   <h1>Add New Student</h1>
        <form method="GET" action="new_stu_pro.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="First Name">First Name</label>
            <input type="text" class="form-control" id="First Name" placeholder="First Name" name="fname">
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" id="lname" placeholder="last name" name="lname">
        </div>
        <div class="form-group">
            <label for="pic">Image</label>
            <input type="file" class="form-control" id="lname" placeholder="last name" name="pic">
        </div>
        <div class="checkbox">
            <label>
            <input name="activity" type="checkbox"> activity
            </label>
        </div>
        <button type="submit" class="btn btn-default" name="submit">Submit</button>
        </form>
   </div>
</div>

   