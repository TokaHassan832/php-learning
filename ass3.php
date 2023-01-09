    <?php
    //30 to 36
    $f= 100;
    $g= 200;
    $h=100;
    if ($g>$f){
        echo "Yes";
    }elseif ($f==$h){
        echo "Yes";
    }elseif ($f+$h=$g){
        echo "Yes";
    }
    echo "<hr>";
    ?>

<html lang="en">
<?php
$a = 30;
$b = 20;
$c = 10;
//echo ($a + $b === $c) ? "A + B = C": ($a + $c === $b) ? "A + C = B" : ($b + $c === $a) ? "B + C = A": "The End";
echo "<br>";
$name = "Osama";
$age = 40;
$country = "Egypt";
if ($age > 18 && gettype($name) === "string" && $country === "Egypt") {
    echo "The Age Is Good To Go<br>";
    echo "The Name Is Good To Go<br>";
    echo "The Country Is Good To Go<br>";
}
echo "<hr>";



// 37 TO 42
$start = 10;
$end = 0;
$stop = 3;
for ($start;$start>=3;$start--){
    if($start<10){
        echo $end.$start."<br>";
    }else{
        echo $start."<br>";
    }
}
echo "<hr>";
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];
for ($start;$start<count($mix);$start++) {
    if (gettype($mix[$start])=='integer'){
        if ($mix[$start] == 1) {
              continue;
        }
        echo $mix[$start]."<br>";
    }
}
echo"<hr>";
$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];
foreach ($money as $name=>$need){
    echo "The Name Is $name And I Need $need Pound From Him"."<br>";
}
echo "<hr>";

$mix2 = [1, 2, "A", "B", "C", 3, 4];
$count1=0;
$count2=0;
for ($start=0;$start<count($mix2);$start++){
    if (gettype($mix[$start])=='string'){
        $count1++;
        continue;
    }
    $count2++;
    echo $mix[$start]."<br>";
}
echo "$count2 Numbers Printed ";
echo "<br>";
echo "$count1 Numbers Ignored";

?>



