<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swap Values of the Variables</title>
</head>
<body>
    <h1>Write a program to Swap the Value of the Variables</h1>
    <form action="#" method="POST">
        <label>Enter Value for the Variable "A"</label>
        <input type="text" name="n1">
        <label>Enter Value for the Variable "B"</label>
        <input type="text" name="n2">
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
echo "<br>";
echo "The first way to SWAP.";
echo "<br>";
if(isset($_POST['submit'])){
    $A = $_POST['n1'];
    $B = $_POST['n2'];
    echo "The Values of the Variables A and B before SWAP are:";
    echo "<br>";
    echo "Value for the Variable 'A': " . $A;
    echo "<br>";
    echo "Value for the Variable 'B': " . $B;
    echo "<br>";
    echo "The Values of the Variables A and B after SWAP are:";
    echo "<br>";
    $A = $A + $B;
    $B = $A - $B;
    $A = $A - $B;
    echo "Value for the Variable 'A': " . $A;
    echo "<br>";
    echo "Value for the Variable 'B': " . $B;
    }

echo "<br>";
echo "<br>";
echo "The second way to SWAP.";
echo "<br>";

$a = 15;
$b = 27;

// Swap Logic

echo "\nThe number before swapping is:\n";
echo "Number a =".$a." and b=".$b;

$temp = $a;
$a = $b;
$b = $temp;

echo "<br>";
echo "\nThe number after swapping is: \n";
echo "Number a =".$a." and b=".$b."\n";
echo "<br>";
echo "<br>";


echo "The third way to SWAP.";
echo "<br>";
$a = 15;
$b = 276;
echo "\nBefore swapping:  ". $a . ',' . $b;
list($a, $b) = array($b, $a);
echo "<br>";
echo "\nAfter swapping:  ". $a . ',' . $b."\n";
?>
