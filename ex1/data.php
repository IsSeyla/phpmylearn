<?php
    $name_kh = $_POST['name_kh'];
    $name_en = $_POST['name_en'];
    $age = $_POST['age'];	
    $gender = $_POST['gender'];
    $motherName = $_POST['mother_name'];
    $fatherName = $_POST['father_name'];
    $phone = $_POST['phone'];
    $nationality = $_POST['nationality'];	

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <h2>Student Information</h2>
                    <div> Name Kh: <?php echo $name_kh ?></div>
                    <div> Name En: <?php echo $name_en ?></div>
                    <div> Age: <?php echo $age ?></div>
                    <div> Gender: <?php echo $gender ?></div>
                    <div> Mother Name: <?php echo $motherName ?></div>
                    <div> Father Name: <?php echo $fatherName ?></div>
                    <div> Phone: <?php echo $phone ?></div>
                    <div> Nationality: <?php echo $nationality ?></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>