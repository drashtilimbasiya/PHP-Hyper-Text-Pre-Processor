<!DOCTYPE html>
<html>
<head>
    <title>Comparison Operators</title>
</head>
<body>

<form method="post">
    Enter First Number:
    <input type="number" name="num1" required>
    <br><br>

    Enter Second Number:
    <input type="number" name="num2" required>
    <br><br>

    <input type="submit" value="Compare">
</form>

<?php
if(isset($_POST['num1']) && isset($_POST['num2']))
{
    $a = $_POST['num1'];
    $b = $_POST['num2'];

    echo "<h3>Comparison Results</h3>";
    echo "a == b : ";
    var_export($a == $b);
    echo "<br>";

    echo "a != b : ";
    var_export($a != $b);
    echo "<br>";

    echo "a > b : ";
    var_export($a > $b);
    echo "<br>";

    echo "a < b : ";
    var_export($a < $b);
    echo "<br>";

    echo "a >= b : ";
    var_export($a >= $b);
    echo "<br>";

    echo "a <= b : ";
    var_export($a <= $b);
}
?>

</body>
</html>