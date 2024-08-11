<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style3.css">
</head>

<body>
   <div class="container">
    <h1>Test Get method</h1>
    <div class="form">
    <form action="data.php"method="POST" enctype="multipart/form-data" >
    <fieldset "> <legend class="h11"> Employee information </legend>
    <table class="tb" cellspacing ="8" cellpadding="4" >
        <tr>
            <th>Name : </th>
            <th><input type="text" name="fn"></th>
        </tr>
        <tr>
        <th>Gender : </th>
        <th> 
            <input type="radio" name="sex" value="Male" >Male<input type="radio" name="sex" value="Female">Female
        </th>
        </tr>
        <tr>
            <th>Phone : </th>
            <th><input type="text" name="num"></th>
        </tr>
        <tr>
            <th>Address:</th>
            <th>
                <select name="add" id="">
                    <option value="Takoe">Takeo</option>
                    <option value="Kandal">Kandal</option>
                    <option value="Battambong">Battambong</option>
                </select>
            </th>
        </tr>
        <tr>
            <th>Position :</th>
            <th><select name="position" id="">
                <option value="">Clearner</option>
                <option value="">IT Support</option>
                <option value="">Manager</option>
                <option value="">Assistant</option>
            </select></th>
        </tr>
        <tr>
            <th>Skill :</th>
            <th><input type="text" name="skill"></th>
        </tr>
        <tr>
            <th>Salary : </th>
            <th><input type="text" name="salary"></th>
        </tr>
        <tr>
            <th>Image :</th>
            <th class="img"><input type="file" name="img"></th>
        </tr>
        <tr>
            <th></th>
            <th><input type="submit" name="sub"></th>
        </tr>

        </fieldset>
    </table>
    </form>
    </div>
    
   </div>
</body>
</html>