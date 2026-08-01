<!DOCTYPE html>
<html>
<head>
    <title>Largest Number</title>
</head>
<body>

<h2>Largest of Two Numbers</h2>

<form method="post">
    First Number:
    <input type="number" name="num1" required><br><br>

    Second Number:
    <input type="number" name="num2" required><br><br>

    <input type="submit" name="submit" value="Find">
</form>

<?php
if(isset($_POST['submit']))
{
    $a = $_POST['num1'];
    $b = $_POST['num2'];

    if($a > $b)
        echo "$a is the Largest Number";
    elseif($b > $a)
        echo "$b is the Largest Number";
    else
        echo "Both numbers are Equal";
}
?>

</body>
</html>