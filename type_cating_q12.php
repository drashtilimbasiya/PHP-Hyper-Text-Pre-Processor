<!DOCTYPE html>
<html>
<head>
    <title>Integer to String using Type Casting</title>
</head>
<body>

<form method="post">
    Enter an Integer:
    <input type="number" name="num" required>
    <br><br>
    <input type="submit" value="Convert">
</form>

<?php
if(isset($_POST['num']))
{
    $num = $_POST['num'];

    // Type casting integer to string
    $str = (string)$num;

    echo "<h3>Output</h3>";
    echo "Integer Value: " . $num . "<br>";
    echo "String Value: " . $str . "<br>";
    echo "Data Type after Conversion: " . gettype($str);
}
?>

</body>
</html>