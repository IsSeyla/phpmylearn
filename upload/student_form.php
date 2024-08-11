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
       <form action="data.php" method="POST" enctype="multipart/form-data">
       <div class="row">
            <div class="card mt-5">
                <div class="card-body">
                    <h2 class="text-center mb-3">Student Information</h2>
                    <div class="mb-3 row">
                        <label for="name_kh" class="col-sm-2 col-form-label">Name Kh</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name_kh" name="name_kh">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="name_en" class="col-sm-2 col-form-label">Name En</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name_en" name="name_en">
                        </div>
                    </div>

                    <div class="mb3 row">
                        <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="male">
                                <label class="form-check-label" for="male">
                                    Male
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="female" checked>
                                <label class="form-check-label" for="female">
                                    Female
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="age" class="col-sm-2 col-form-label">Age</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="age" name="age">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="mother_name" class="col-sm-2 col-form-label">Mother Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="mother_name" name="mother_name">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="father_name" class="col-sm-2 col-form-label">Father Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="father_name" name="father_name">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="phone" name="phone"	>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Nationality</label>
                        <div class="col-sm-10">
                            <select name="nationality" class="form-select ">
                                <option value="khmer">Khmer</option>
                                <option value="thai">Thai</option>
                                <option value="vietname">Vietname</option>
                            </select>
                        </div>

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Profile</label>
                        <input type="file" class="form-control" name="profile" require>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn bg-success">Submit</button>
                    </div>
                </div>
            </div>
        </div>

       </form>
    </div>
</body>

</html>