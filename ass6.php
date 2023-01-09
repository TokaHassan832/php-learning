<?php
//63 to 72
$friends = [
    "AG" => "Ahmed Gamal",
    "OM" => "Osama Mohamed",
    "MG" => "Mahmoud Gamal",
    "AS" => "Ahmed Samy",
    "FA" => "Farid Ahmed",
    "SM" => "Sayed Mohamed"
];
echo "<pre>";
$friends=array_change_key_case($friends);
print_r(array_chunk($friends,2,true));
echo "</pre><hr>";
/**************************************************************/
$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];
echo "<pre>";
print_r(array_change_key_case(array_combine($codes,$means)));
echo "</pre><hr>";
/*************************************************************/
$friends = [
    "Ahmed Gamal" => "AG",
    "Osama Mohamed" => "OM",
    "Mahmoud Gamal" => "MG",
    "Ahmed Samy" => "AS"
];
echo "<pre>";
print_r(array_reverse(array_change_key_case(array_flip($friends))));
echo "</pre><hr>";
/*******************************************************************/
$nums = [10, 20, 30];
echo array_reduce($nums,fn($carry,$item)=>$carry+$item);
echo "<br>";
echo array_sum($nums);
echo "<hr>";
/******************************************************************/
$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;
echo "<pre>";
print_r(array_pad($chars,$zero+count($chars)+count($chars),"$char[0]"));
echo "</pre><hr>";
/*******************************************************************/
$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];
next($names);
next($names);
echo current($names) . "<br>"; // "Sayed"
end($names);
echo current($names) . "<br>"; // "Ali"
reset($names);
echo current($names) . "<br>"; // "Osama"
end($names);
prev($names);
echo current($names) . "<hr>"; // "Mahmoud"
/*******************************************************************/
$chars = ["A", "B", "C"];
$chars[]="D";
echo "<pre>";
print_r($chars);
echo "</pre><hr>";
/*******************************************************************/
$nums = [1, 2, 3, 4, 5, 6];
echo "<pre>";
print_r(array_slice($nums,1,-2));
echo "</pre><hr>";
/*******************************************************************/
$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];
$mix=array_merge(array_slice($mix,0,3),array_slice($mix,6,3));
$mix=array_merge($mix,$nums);
sort($mix);
echo "<pre>";
print_r($mix);
echo "</pre>";



