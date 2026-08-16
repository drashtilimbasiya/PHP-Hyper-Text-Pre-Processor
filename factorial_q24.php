<!DOCTYPE html>
<html>
<head>
    <title>Factorial of a Number</title>
</head>
<body>

<form method="post">
    Enter a Number:
    <input type="number" name="num" required>
    <br><br>

    <input type="submit" name="submit" value="Find Factorial">
</form>

<?php
if(isset($_POST['submit']))
{
    $num = $_POST['num'];
    $fact = 1;

    for($i = 1; $i <= $num; $i++)
    {
        $fact = $fact * $i;
    }

    echo "Factorial of $num = " . $fact;
}
?>

</body>
</html>