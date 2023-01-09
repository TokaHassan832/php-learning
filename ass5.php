<?php
//53 to 62
$num_one = -1;
$num_two = 2.5;
$let_one = "o";
$let_two = "z";
$str = "El%er0";
$translation=[$str[(int)$num_two]=>$let_two,$str[$num_one]=>$let_one];
$str=strtr($str,$translation);
echo $str."<hr>";
/*************************************************************/
$str = "Orezle";
$str=ucfirst(strtolower(strrev($str)));
echo $str ."<hr>";
/*************************************************************/
$str = 'aAa';
$num = 3;
$char = "_";
$str=chunk_split(str_repeat(strtolower($str),$num),$num,$char);
echo $str."<hr>";
/*************************************************************/
$str = "<div><b>Elzero</b></div>";
echo strip_tags($str,"<b>");
echo "<hr>";
/*************************************************************/

$chars = ["E", "l", "z", "e", "r", "o"];
echo implode($chars);



