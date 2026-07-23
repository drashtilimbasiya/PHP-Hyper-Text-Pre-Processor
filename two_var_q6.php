<!DOCTYPE html>
<html>
<head>
    <title>Comparison Operators</title>
</head>
<body>

<h2>Compare Two Numbers</h2>

<form method="post">
    First Number:
    <input type="number" name="num1" required><br><br>

    Second Number:
    <input type="number" name="num2" required><br><br>

    <input type="submit" name="submit" value="Compare">
</form>

<?php
if(isset($_POST['submit']))
{
    $a = $_POST['num1'];
    $b = $_POST['num2'];

    echo "<h3>Result</h3>";
    echo "$a == $b : " . (($a == $b) ? "True" : "False") . "<br>";
    echo "$a != $b : " . (($a != $b) ? "True" : "False") . "<br>";
    echo "$a > $b : " . (($a > $b) ? "True" : "False") . "<br>";
    echo "$a < $b : " . (($a < $b) ? "True" : "False") . "<br>";
    echo "$a >= $b : " . (($a >= $b) ? "True" : "False") . "<br>";
    echo "$a <= $b : " . (($a <= $b) ? "True" : "False") . "<br>";
}
?>

</body>
</html>