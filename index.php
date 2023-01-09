
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?='My First PHP Page';?></title>
</head>
<body>
<div>
    <?php echo 'We Love'; ?>
</div>
<div>
    <?php echo 'Elzero Channel'; ?>
</div>
</body>
</html>
<?php
echo "<hr>";
echo  (int) (15.2 + 14.7 + (10.5 + 10.5)); // 50
echo "<br>";
echo gettype( (int)(15.2 + 14.7 + (10.5 + 10.5) )); // Integer
echo "<br>";
echo gettype(100);
echo "<br>";
echo var_dump(100);
echo "<hr>";
echo 'Hello "Elzero" \\\\ """ We Love "$$PHP"';
echo "<br>";
echo "Hello \"Elzero\" \\\\ \"\"\" We Love \"$\$PHP\"";
echo "<br>";

 echo nl2br("We 
Love
Elzero
Web 
School"
);
 echo "<br>";

$Programming = "php";
echo <<< 'pragraph'
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
pragraph;
echo "<br>";

$something = "Programming";
echo <<< "code"
Hello \PHP\
We Love $something
code;
echo "<hr>";

echo (boolean) "Hello PHP";
echo '<br>';
echo gettype((int) "Hello PHP");
echo "<hr>";

echo "<pre>";
print_r([
        "FrontEnd" => [
        "HTML",
        "CSS",
        "JS" => [
            "Vuejs" =>[
                    "2" =>"v2",
                    "v3"
            ],
            "Reactjs",
            "Svelte"
    ]
  ],
    "BackEnd" => [
            "PHP",
            "MySql",
            "Security"
    ],
    "Git",
    "GitHub",
    "Testing" => [
            "Unit Testing",
            "End To End",
            "Integration"
    ]

]);
echo "</pre>";
?>
</div>
</html>
