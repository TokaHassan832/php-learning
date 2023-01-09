<?php
//73 to 81
echo rand(10,20);
echo "<hr>";
/********************************************************************/
$friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];
echo $friends[array_rand($friends)];
echo "<hr>";
/*******************************************************************/
$num1 = 11.5; // 11
$num2 = 9.4898; // 9.5
$num3 = -7.5; // -7
echo round($num1,0,PHP_ROUND_HALF_DOWN)."<br>";
echo round($num2,1)."<br>";
echo round($num3,0,PHP_ROUND_HALF_DOWN)."<hr>";
/*********************************************************************/
$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";
echo filter_var($url1,FILTER_VALIDATE_URL,FILTER_NULL_ON_FAILURE)?"A Valid URL":"NOT A Valid URL"; echo "<br>";
echo filter_var($url2,FILTER_VALIDATE_URL,FILTER_NULL_ON_FAILURE)?"A Valid URL":"NOT A Valid URL"; echo "<br>";
echo filter_var($url3,FILTER_VALIDATE_URL,FILTER_NULL_ON_FAILURE)?"A Valid URL":"NOT A Valid URL"; echo "<br>";
echo filter_var($url4,FILTER_VALIDATE_URL,FILTER_NULL_ON_FAILURE)?"A Valid URL":"NOT A Valid URL"; echo "<hr>";
/*****************************************************************************/
echo filter_var($url1,FILTER_SANITIZE_URL);echo "<br>";
echo filter_var($url2,FILTER_SANITIZE_URL);echo "<br>";
echo filter_var($url3,FILTER_SANITIZE_URL);echo "<br>";
echo filter_var($url4,FILTER_SANITIZE_URL);echo "<br>";