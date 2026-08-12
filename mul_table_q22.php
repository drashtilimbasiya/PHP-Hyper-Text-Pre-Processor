<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>

<form method="post">
    Enter a Number:
    <input type="number" name="num" required>
    <br><br>

    <input type="submit" name="submit" value="Print Table">
</form>

<?php
if(isset($_POST['submit']))
{
    $num = $_POST['num'];

    echo "<h3>Multiplication Table of $num</h3>";

    for($i = 1; $i <= 10; $i++)
    {
        echo "$num x $i = " . ($num * $i) . "<br>";
    }
}
?>

</body>
</html>