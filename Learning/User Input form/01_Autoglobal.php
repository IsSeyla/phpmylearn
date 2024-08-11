<?php
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form </title>
    <style>
        div{
            margin: auto;
            padding: 10px;
            width: 60%;
            box-shadow: 1px 1px 2px black;
            margin-top: 10%;
        }
        fieldset{
            margin: auto;
        }
        legend{
            color: coral;
            font-size: 40px;
            text-shadow: -1px 0 black,0 1px black , 1px 0 black ,0 -1px black;
        }
        table{
            width: 50% ;
            border-collapse: collapse;
            
        }
        /* tr:hover{
            background-color: coral;
        } */
        th{
            text-align: left;
            width: 30px;
            padding-top: 10px;
        }

        fieldset{
            width: 60%;
        }
        input,label{
            height: 30px;
            font-size: 20px;
        }
        input:focus{
            background-color: blue;
            color: antiquewhite;
        }
        select{
            height: 30px;
            font-size: 20px;
            
        }
        
    </style>
</head>
<body>

        <div class="form">
            <form action="hello.php" method="get">
                <fieldset>
                    <legend>Input Information</legend>
                    <table>
                        <tr>
                            <th>ID </th>
                            <th>:</th>
                            <th><input type="text" id="id" name="id"></th>
                        </tr>
                        <tr>
                            
                            <th>first Name </th>
                            <th>:</th>
                            <th><input type="text" id="first_name" name="fname"></th>
                        </tr>
                        <tr>
                            <th>Last Name </th>
                            <th>:</th>
                            <th><input type="text" id="lname" name="lname"></th>
                        
                        </tr>
                        <tr>
                            <th>Gender </th>
                            <th>:</th>
                            <th><input type="text" id="gen" name="gen"></th>
                        
                        <tr>
                            <th>phone </th>
                            <th>:</th>
                            <th><input type="text" id="ph" name="ph"></th>
                        </tr>
                        <tr>
                            <th>Gmail </th>
                            <th>:</th>
                            <th><input type="text" id="mail" name="mail"></th>
                        </tr>
                        <tr >
                            <th>Nationality</th>
                            <th>:</th>
                            <th>
                            <select name="coun" id="country">
                                <option value="">Cambodai</option>
                                <option value="">vietnam</option>
                                <option value="">Thailand</option>
                                <option value="">lao</option>
                                <option value="">Singapor</option>
                            </select></th>
                        </tr>
                        <tr>
                        <th>Address</th>
                        <th>:</th>
                        <th>
                        <textarea name="add" id="add">
                        
                        </textarea>
                        </th>
                        
                        </tr>
                        <tr>
                            <td colspan="3"><input type="submit"></td>
                        </tr>
                    </table>
                </fieldset>
                
            </form>
        </div>
</body>
</html>