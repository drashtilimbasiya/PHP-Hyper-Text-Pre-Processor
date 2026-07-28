<!DOCTYPE html>
<html>
<head>
    <title>Simple Interest</title>
</head>
<body>

<h2>Simple Interest Calculator</h2>

<form method="post">
    Principal:
    <input type="number" name="p" required><br><br>

    Rate:
    <input type="number" name="r" step="any" required><br><br>

    Time (Years):
    <input type="number" name="t" step="any" required><br><br>

    <input type="submit" name="submit" value="Calculate">
</form>

<?php
if(isset($_POST['submit']))
{
    $p = $_POST['p'];
    $r = $_POST['r'];
    $t = $_POST['t'];

    $si = ($p * $r * $t) / 100;

    echo "<h3>Simple Interest = $si</h3>";
}
?>

</body>
</html>