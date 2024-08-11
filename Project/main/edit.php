<?php
include("main.php");
$con = mysqli_connect("localhost","root","","db_mysql");
$id = $_GET['id'];
$sqlstr = "SELECT * FROM testing_tbl WHERE id = '$id'";
$result = $con->query($sqlstr);
while($row= mysqli_fetch_assoc($result)){
   

?>
<div class="container">
   <div>
   <h1>Edit Student</h1>
        <form method="GET" action="update.php">
            <input type="hidden" value= "<?php echo $id; ?>" name="id">
        <div class="form-group">
            <label for="First Name">First Name</label>
            <input type="text" class="form-control" id="First Name" placeholder="First Name" name="fname" value ="<?php echo $row['fname']; ?>">
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" id="lname" placeholder="last name" name="lname" value="<?php echo $row['lname']; ?>">
        </div>
        <div class="form-group">
            <label for="pic">Last Name</label>
            <input type="file" class="form-control" id="lname" placeholder="last name" name="pic" value="<?php echo $row['image']; ?>">
        </div>
        <div class="checkbox">
            <label>
                <?php
                $acti = $row['activity'];
                if($acti==1){
                    echo '  <input name="activity" type="checkbox" checked> activity';
                }else{
                    echo '  <input name="activity" type="checkbox" > activity';
                }
                ?>
          
            </label>
        </div>
        <button type="submit" class="btn btn-default" name="submit">Submit</button>
        </form>
   </div>
</div>
<?php
}
$con->close();
?>
   