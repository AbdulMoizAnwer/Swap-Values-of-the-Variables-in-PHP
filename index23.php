<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swipe Values of the Variables</title>
</head>
<body>
    <h1>Write a program to Swipe the Value of the Variables</h1>
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
if(isset($_POST['submit'])){
    $A = $_POST['n1'];
    $B = $_POST['n2'];
    echo "The Values of the Variables A and B before SWIPE are:";
    echo "<br>";
    echo "Value for the Variable 'A': " . $A;
    echo "<br>";
    echo "Value for the Variable 'B': " . $B;
    echo "<br>";
    echo "The Values of the Variables A and B after SWIPE are:";
    echo "<br>";
    $A = $A + $B;
    $B = $A - $B;
    $A = $A - $B;
    echo "Value for the Variable 'A': " . $A;
    echo "<br>";
    echo "Value for the Variable 'B': " . $B;
    }
?>
