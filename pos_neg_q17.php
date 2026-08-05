<!DOCTYPE html>
<html>
<head>
    <title>Positive, Negative or Zero</title>
</head>
<body>

<h2>Check Number</h2>

<form method="post">
    Enter a Number:
    <input type="number" name="num" required><br><br>

    <input type="submit" name="submit" value="Check">
</form>

<?php
if(isset($_POST['submit']))
{
    $num = $_POST['num'];

    if($num > 0)
        echo "<h3>$num is Positive</h3>";
    elseif($num < 0)
        echo "<h3>$num is Negative</h3>";
    else
        echo "<h3>Number is Zero</h3>";
}
?>

</body>
</html>