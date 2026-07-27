<!DOCTYPE html>
<html>
<head>
    <title>Area of Circle</title>
</head>
<body>

<h2>Calculate Area of Circle</h2>

<form method="post">
    Enter Radius:
    <input type="number" name="radius" required>
    <br><br>

    <input type="submit" name="submit" value="Calculate">
</form>

<?php
if(isset($_POST['submit']))
{
    define("PI", 3.14159);

    $r = $_POST['radius'];
    $area = PI * $r * $r;

    echo "<h3>Result</h3>";
    echo "Radius = $r <br>";
    echo "PI = " . PI . "<br>";
    echo "Area of Circle = $area";
}
?>

</body>
</html>