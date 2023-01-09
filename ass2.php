<?php
$coursename = "Elzero Courses"
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo $coursename ?>">
        <title>Welcome To <?php echo $coursename ?> </title>
    </head>
    <body>
    <h1><?php echo $coursename ?></h1>
    <p>Here In <?php echo $coursename ?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?php echo $coursename ?> Is The What You Need.</div>
    <footer>All Right Reserved To <?php echo $coursename ?></footer>
    </body>
    </html>
<?php
$name = "elzero";
$$name = "Web";
echo ${$name};
echo $$name;
echo $elzero;
echo "<br>";

$a = 200;
$b = &$a;
$a = 100;
echo $b;
echo "<br>";

echo $_SERVER['DOCUMENT_ROOT'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
/* break - clone - do - use - callable - catch - trait - try - new - yield */
echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __DIR__;
echo "<br>";
echo "<hr>";
?>