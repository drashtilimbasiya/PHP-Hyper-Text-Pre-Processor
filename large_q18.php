<!DOCTYPE html>
<html>
<head>
    <title>Largest of Three Numbers</title>
</head>
<body>

<h2>Largest of Three Numbers</h2>

<form method="post">
    First Number:
    <input type="number" name="num1" required><br><br>

    Second Number:
    <input type="number" name="num2" required><br><br>

    Third Number:
    <input type="number" name="num3" required><br><br>

    <input type="submit" name="submit" value="Find">
</form>

<?php
if(isset($_POST['submit']))
{
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $c = $_POST['num3'];

    if($a >= $b && $a >= $c)
        echo "<h3>$a is the Largest Number</h3>";
    elseif($b >= $a && $b >= $c)
        echo "<h3>$b is the Largest Number</h3>";
    else
        echo "<h3>$c is the Largest Number</h3>";
}
?>

</body>
</html>