<?php
echo "<h1>Using Double Quot and single quot</h1>";

$dq = "output by double quotation"; //one statement
$sq ='Output by single quotatoin';
echo "1 $dq <br> 2 $sq <br>3 <q>Strlen</q> return the length of string \t";
echo strlen($dq); 
echo "<br>4<q>Str_word_count</q>count number of word in the string \t";
echo str_word_count($sq);


echo "<h1>php Number</h1>";

$a = 5;
$b = 5.5;
$c = "55";
echo "<h4> use<q>var_dump</q>to see type and value <br> </h4>";
echo var_dump($a);
echo "<br>";
echo var_dump($b);
echo "<br>";
echo var_dump($c);
echo "<br>";

echo "<h1>Display size of int can store</h1>";

echo "The largest integer supported ".PHP_INT_MAX ."<br>";
echo "The smallest integer supported ".PHP_INT_MIN ."<br>";
echo "The size integer supported ".PHP_INT_SIZE."<br>";

echo "<h1>Check type of a variable is integer or other datatype</h1>";

$int = 23;
$notint = 2.5;
var_dump(is_int($int));
echo "<br>";
var_dump(is_int($notint));
echo "<br>";
var_dump(is_float($int));
echo "<br>";
var_dump(is_float($notint));
echo "<br>";
?>