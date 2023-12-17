<?php

$first_name = "John";

    echo "Hello " . $first_name;
?>

<!DOCTYPE html >
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
<title>PHP Basics </title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class= "container m-5 p-5 border shadow">

    <?php
    //Task 2: Variable Declaration and Data Types
    $stringVar ="Hello World!";

    $integerVar =25;

    $booleanVar =false;


echo "String Variable: $stringVar\n";
echo "<br>";
echo "Integer Variable: $integerVar\n";
echo "<br>";
echo "Boolean Variable: ".($booleanVar ? 'true':'false')."\n";

echo "<br>";
//Task 3: Conditionals
$integerVar =25;

if ($integerVar >10) {
    echo "The value of the integer variable is greater than 10.";
} else {
    echo "The value of the integer variable is not greater than 10.";
}

echo "<br>";
//Task 4: Loops
for ($i=1; $i <=5; $i++) {
    echo $i. "\n";
}

echo "<br>";

$i = 5;

while ($i >= 1) {
    echo $i. "\n";
    $i--;
}

echo "<br>";
//Task 5: Arrays

$fruits = array("Mango","Grapes", "Strawberry");

echo "Fruits: ";
foreach ($fruits as $fruit) {
    echo $fruit." ";
}



?>
</div>

</body>
</html>