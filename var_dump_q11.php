<!DOCTYPE html>
<html>
<head>
    <title>var_dump() Example</title>
</head>
<body>

<h2>Display Data Types using var_dump()</h2>

<form method="post">

    Enter Integer:
    <input type="number" name="num" required><br><br>

    Enter Decimal Number:
    <input type="number" step="any" name="decimal" required><br><br>

    Enter String:
    <input type="text" name="str" required><br><br>

    <input type="submit" name="submit" value="Show Data Types">

</form>

<?php
if(isset($_POST['submit']))
{
    $num = (int)$_POST['num'];
    $decimal = (float)$_POST['decimal'];
    $str = $_POST['str'];
    $bool = true;

    echo "<h3>Result</h3>";

    echo "Integer: ";
    var_dump($num);

    echo "<br><br>Float: ";
    var_dump($decimal);

    echo "<br><br>String: ";
    var_dump($str);

    echo "<br><br>Boolean: ";
    var_dump($bool);
}
?>

</body>
</html>