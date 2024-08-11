<?php
//echo __DIR__; //find store memory
$myarr = array('one','two','three','four');
foreach($myarr as $dir){
    echo $dir."<br>";
}

$arr = array(
    "Sela" => 12,
    "Sela" => 13,
    "sey"=> 14,
    "sok" => 15
);
foreach($arr as $key => $value){
    echo "$key is $value <br>";
}
define("con","ConstCannotchang <br>");
echo con;

define("MyCon",[
    "Sela",
    "Seth",
    "vid",
    "Nha",
    "leab"
]);
echo MyCon[0];
echo MyCon[1];
echo MyCon[3];
?>