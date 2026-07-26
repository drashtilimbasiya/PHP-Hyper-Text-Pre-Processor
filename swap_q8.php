<!DOCTYPE html>
<html>
<head>
    <title>Swap Two Variables</title>
</head>
<body>

<h2>Swap Two Numbers Using Third Variable</h2>

<form method="post">
    First Number:
    <input type="number" name="num1" required><br><br>

    Second Number:
    <input type="number" name="num2" required><br><br>

    <input type="submit" name="submit" value="Swap">
</form>

<?php
if(isset($_POST['submit']))
{
    $a = $_POST['num1'];
    $b = $_POST['num2'];

    echo "<h3>Before Swapping</h3>";
    echo "First Number = $a <br>";
    echo "Second Number = $b <br><br>";

    // Swapping using third variable
    $temp = $a;
    $a = $b;
    $b = $temp;

    echo "<h3>After Swapping</h3>";
    echo "First Number = $a <br>";
    echo "Second Number = $b";
}
?>

</body>
</html>