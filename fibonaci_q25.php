<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Series</title>
</head>
<body>

<form method="post">
    Enter Number of Terms:
    <input type="number" name="num" required>
    <br><br>

    <input type="submit" name="submit" value="Print Series">
</form>

<?php
if(isset($_POST['submit']))
{
    $num = $_POST['num'];

    $a = 0;
    $b = 1;

    echo "Fibonacci Series:<br>";

    for($i = 1; $i <= $num; $i++)
    {
        echo $a . " ";

        $c = $a + $b;
        $a = $b;
        $b = $c;
    }
}
?>

</body>
</html>