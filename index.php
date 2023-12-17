

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

echo "<br>";


$person = array(
    "name" => "Rica",
    "age" => 25,
    "city" => "Quezon City"
);

echo "Person Information:\n";
echo "Name: ".$person["name"]. "\n";
echo "Age: ".$person["age"]. "\n";
echo "City: ".$person["city"]. "\n";

echo "<br>";

// Task 6: Functions
function addNumbers($num1, $num2) {
    $sum= $num1+$num2;
    return $sum;
}


$number1 = 2;
$number2 = 9;

$result = addNumbers($number1, $number2);

echo "The sum of $number1 and $number2 is: $result\n";

echo "<br>";



$result1 = addNumbers($number1, $number2);
echo "The sum of $number1 and $number2 is: $result1\n";

$number3 = 6;
$number4 = 8;

$result2 = addNumbers($number3, $number4);
echo "The sum of $number3 and $number4 is: $result2\n";

$number5 = 4;
$number6 = 7;

$result3 = addNumbers($number5, $number6);
echo "The sum of $number5 and $number6 is: $result3\n";
?>
<hr>

<!--Task 7: Form Handling-->

<form action="nameform.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Submit</button>
    </form>

</div>

</body>
</html>