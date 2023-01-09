<?php
//43 to 52
Function greeting($name,$gender=""){
if ($gender=="Male"){
    echo "Hello Mr $name";
}elseif ($gender=="Female"){
    echo "Hello Miss $name";
}else{
    echo "Hello $name";
}
}
echo greeting("Osama", "Male")."<br>";
echo greeting("Eman", "Female")."<br>";
echo greeting("Sameh")."<hr>";
/********************************************************/
Function get_arguments(...$args){
    foreach ($args as $all) :
        echo "$all";
    endforeach;
}
echo get_arguments("Hello ", "Elzero ", "Web ", "School")."<br>";
echo get_arguments("I ", "Love ", "PHP")."<hr>";
//second way
function get_argument(){
    $all=func_get_args();
    print_r($all);
}
echo get_argument("Hello ", "Elzero ", "Web ", "School")."<br>";
echo get_argument("I ", "Love ", "PHP")."<hr>";
/************************************************************/
function sum_all(...$nums){
    $result=0;
    foreach ($nums as $num):
        if ($num!=5){
            if ($num==10){
                $num=20;
            }
            $result+=$num;
        }
    endforeach;
        echo $result;
}
echo sum_all(10, 12, 5, 6, 6, 10)."<br>"; // 64
echo sum_all(5, 10, 5, 10)."<hr>"; // 40
/*********************************************************/
function calculate($num1,$num2,$operator="add"){
    switch ($operator):
        case "add":
        case "a":
            echo $num1+$num2;
            break;
        case "subtract":
        case "s":
            echo $num1-$num2;
            break;
        case "multiply":
        case "m":
            echo $num1*$num2;
            break;
        default:
            echo "This operation does not exsist";
        endswitch;
}
echo calculate(10, 20)."<br>"; // 30
echo calculate(10, 20, "a")."<br>"; // 30
echo calculate(10, 20, "s")."<br>"; // -10
echo calculate(10, 20, "subtract")."<br>"; // -10
echo calculate(10, 20, "multiply")."<br>"; // 200
echo calculate(10, 20, "m")."<hr>"; // 200
/****************************************************************/
function calculate2(int $num_one, int $num_two):float {
    return $num_one + $num_two;
}
echo calculate2(20, 10)."<br>"; // 30
echo gettype(calculate2(20, 10))."<hr>"; // Double
/***************************************************************/
function greetings($g){return "greetings";}
$greet="greetings";
echo $greet("Osama"); // Greetings


