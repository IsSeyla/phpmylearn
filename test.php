<html>
<head>
<title>PHP Loop Statement</title>
</head>
<body>
<h3>foreach( ) statement Demo</h3>
Month of year :
<ol type="1">
<?php
$month=array("Jan","Feb","Mar","Apr","May","Jun","Jul",
"Aug","Sep","Oct","Nov","Dec");
foreach($month as $element){
echo "<li>".$element."</li>";
}

for($i =2; $i<9; $i++){
    for($j=1; $j<9; $j++){
        echo $i."x".$j."=".$i*$j."<br>";   
    }
}
?>
</ol>
</body>
</html>