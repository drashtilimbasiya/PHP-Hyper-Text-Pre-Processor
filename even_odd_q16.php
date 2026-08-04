<!DOCTYPE html>
<html>
<head>
    <title>Even or Odd</title>
</head>
<body>

<h2>Check Even or Odd</h2>

<form method="post">
    Enter a Number:
    <input type="number" name="num" required><br><br>

    <input type="submit" name="submit" value="Check">
</form>

<?php
if(isset($_POST['submit']))
{
    $num = $_POST['num'];

    if($num % 2 == 0)
        echo "<h3>$num is an Even Number</h3>";
    else
        echo "<h3>$num is an Odd Number</h3>";
}
?>

</body>
</html>