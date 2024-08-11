<?php
if (isset($_POST['btn_sub'])) {
    $name_kh = $_POST['name_kh'];
    $name_en = $_POST['name_en'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $fa_name = $_POST['fth_name'];
    $mo_name = $_POST['mth_name'];
    $phone = $_POST['phone'];
    $nation = $_POST['nationality'];
}
?>
<div class="infor">
<table class="get" getform border="1" cellpadding="5" cellspacing="0">
    <tr>
        <td> <?php echo "Name KH \t:" ?> </td>
        <td><?php echo $name_kh ?></td>
    </tr>
    <tr>
        <td> <?php echo "Name EN \t:" ?> </td>
        <td><?php echo $name_en ?></td>
    </tr>
    <tr>
        <td> <?php echo "Gender \t:" ?> </td>
        <td><?php echo $gender ?></td>
    </tr>
    <tr>
        <td> <?php echo "age \t:" ?> </td>
        <td><?php echo $age ?></td>
    </tr>
    <tr>
        <td> <?php echo "Name of Mother \t:" ?> </td>
        <td><?php echo $mo_name ?></td>
    </tr>
    <tr>
        <td> <?php echo "Name of Father \t:" ?> </td>
        <td><?php echo $fa_name ?></td>
    </tr>
    <tr>
        <td><?php echo "Phone Number \t: "?> </td>
        <td> <?php echo $phone ?> </td>
    </tr>
    <tr>
        <td> <?php echo "Nationality \t:" ?> </td>
        <td><?php echo $nation ?></td>
    </tr>

</table>
</div>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <form action="" method="post">
        <h1>Student Form</h1>
            <div class="form">
                <table>
                    <tr>
                        <th><label for="name">Name Kh</label></th>
                        <td><input type="text" name="name_kh"></td>
                    </tr>
                    <tr>
                        <th> <label for="name">Name En</label></th>
                        <td> <input type="text" name="name_en"></td>
                    </tr>
                    <tr>
                        <th> <label for="">Gender</label></th>
                        <td>
                       <input type="radio" name="gender" id="" checked value="Male">Male
                        <input type="radio" name="gender" id="" value="Female">Female</td>
                    </tr>
                    <tr>
                        <th> <label for="age">Age</label></th>
                        <td>  <input type="text" name="age" id=""></td>
                    </tr>
                    <tr>
                        <th>  <label for="age">Name of Mother</label></th>
                        <td>  <input type="text" name="mth_name" id=""></td>
                    </tr>
                    <tr>
                        <th> <label for="age">Name of Father</label></th>
                        <td> <input type="text" name="fth_name" id=""></td>
                    </tr>
                    <tr>
                        <th> <label for="age">Phone Number</label>
                        <td> <input type="text" name="phone" id="">
                    </tr>
                    <tr>
                        <th><label for="age">Nationality</label>
                        <td> <input type="text" name="nationality" id="">
                    </tr>
                    <tr>
                        <th> <input type="submit" name="btn_sub"></th>
                    </tr>
                </table>
        </form>
    </div>

    </div>
</body>

</html>
<?php


?>