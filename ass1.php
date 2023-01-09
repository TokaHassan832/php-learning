
<?php
// from 20 to 29
echo 10 * 20 + (15 % 3) + (190 + 10) - 400;
echo "<br>";
$a="10";
echo +$a;
echo "<br>";
echo gettype(+$a);
echo "<br>";
echo (int) $a;
echo "<br>";
echo gettype((int) $a);
echo "<br>";
echo intval($a);
echo "<br>";
echo gettype(intval($a));
echo "<br>";
$b=10;
$c=20;
echo $b <=> $c;
echo "<br>";
$a= 10;
$b = 20;
$c = 15;
var_dump($a < $b); // True
var_dump($c > $a); // True
var_dump($a <= $b); // True
var_dump($a != $b); // True
var_dump($a !== $c); // True
var_dump($a <> $c); // True
var_dump(gettype($a) == gettype($b)); // True
var_dump(gettype($a) === gettype($b)); // True
var_dump(gettype((float) $a) !== gettype($b)); // True
echo  "<hr>";


$points = 10;
$points +=3;
echo $points;
echo  "<br>";

$points = 10;
$points -=2;
echo $points;
echo  "<br>";

$a = "Elzero";
$b = "Web";
$c = "School";
$d = "$a $b $c";
$d ="{$a} {$b} {$c}";
$d = $a ." ". $b ." ". $c;
echo $d;
echo "<br>";

// Code 1
$f = @$g or die("Custom Error");
echo $f;
// Code 2
$f = @file("Not_A_File") or die("Custom Error");
// Code 3
(@include("Not_A_File")) or die("Custom Error");
?>