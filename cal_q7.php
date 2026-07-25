<!DOCTYPE html>
<html>
<head>
    <title>Arithmetic Operations</title>
</head>
<body>

<h2>Arithmetic Operations</h2>

<form method="post">
    Enter First Number:
    <input type="number" name="num1" required><br><br>

    Enter Second Number:
    <input type="number" name="num2" required><br><br>

    <input type="submit" name="submit" value="Calculate">
</form>

<?php
if(isset($_POST['submit']))
{
    $a = $_POST['num1'];
    $b = $_POST['num2'];

    echo "Addition = " . ($a + $b) . "<br>";
    echo "Subtraction = " . ($a - $b) . "<br>";
    echo "Multiplication = " . ($a * $b) . "<br>";

    if($b != 0)
        echo "Division = " . ($a / $b);
    else
        echo "Division by zero is not possible.";
}
?>

</body>
</html>