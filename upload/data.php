<?php
    $name_kh = $_POST['name_kh'];
    $name_en = $_POST['name_en'];
    $age = $_POST['age'];	
    $gender = $_POST['gender'];
    $motherName = $_POST['mother_name'];
    $fatherName = $_POST['father_name'];
    $phone = $_POST['phone'];
    $nationality = $_POST['nationality'];	
    if (isset($_FILES['profile'])) {
        $errors = array();
        $file_name = $_FILES['profile']['name']; //ចាប់ឈ្មោះ
        $file_size = $_FILES['profile']['size']; //ចាប់ទំហំ
        $file_tmp = $_FILES['profile']['tmp_name']; //​  ចាប់ទីតាំង
        $file_type = $_FILES['profile']['type'];// ចាប់ប្រភេទ
        $tmp           = explode('.', $file_name);
        // var_dump($tmp);
        $file_ext = strtolower(end($tmp)); //check file type (file extension)
    
        $extensions = array("jpeg","jpg","png");
        // print_r(end(explode('.',$file_name)));die();
        if (in_array($file_ext,$extensions) === false) { // check ថាតើfile's extension នៃរូបភាពខាងលើគ្មាននៅក្នុង​ $extensions = array("jpeg","jpg","png"); ឬទេ?
            // បើគ្មានត្រូវបង្ហាញmessage
            $errors[] = "This extension file not allowed, Please choose a JPG or PNG image.";
        }
    
        if ($file_size > 2097152) {  //check file size 
            $errors[] = "File size must be 2mb or lower.";
        }
    
        $new_name = time(). "-" .basename($file_name); // បង្កើតឈ្មោះថ្មីឲ្យ file ដោយតភ្ជាប់ជាមួយពេលវេលាជាក់លាក់
        $target = "upload/".$new_name;// កំណត់ទីតាំងដែលត្រូវupload
        if (empty($errors)) { // ប្រសិនបើ គ្មាន ករណីណាមួួយerror ទេ move file ទៅកាន់ ទីតាំងដែលាបានកំណត់
            move_uploaded_file($file_tmp,$target);
        }else{
            // ប្រសិនបើ មាន ករណីណាមួយerror បង្ហាញមូលហេតុនៃការ​error
            print_r($errors);
            die();
        }
      
    }
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
                    <div> Photo: <img src="upload/<?php echo $new_name ?>" width="150" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>