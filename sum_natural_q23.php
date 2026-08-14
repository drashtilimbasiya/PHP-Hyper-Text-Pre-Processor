<!DOCTYPE html>
<html>
<head>
    <title>Sum of First N Natural Numbers</title>
</head>
<body>

<form method="post">
    Enter N:
    <input type="number" name="num" required>
    <br><br>

    <input type="submit" name="submit" value="Calculate">
</form>

<?php
if(isset($_POST['submit']))
{
    $num = $_POST['num'];
    $sum = 0;

    for($i = 1; $i <= $num; $i++)
    {
        $sum = $sum + $i;
    }

    echo "Sum of first $num natural numbers = " . $sum;
}
?>

</body>
</html>