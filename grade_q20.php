<!DOCTYPE html>
<html>
<head>
    <title>Student Grade</title>
</head>
<body>

<h2>Student Grade Calculator</h2>

<form method="post">
    Enter Percentage:
    <input type="number" name="per" step="0.01" required><br><br>

    <input type="submit" name="submit" value="Calculate Grade">
</form>

<?php
if(isset($_POST['submit']))
{
    $per = $_POST['per'];

    if($per >= 90 && $per <= 100)
        echo "<h3>Grade A+</h3>";

    elseif($per >= 80)
        echo "<h3>Grade A</h3>";

    elseif($per >= 70)
        echo "<h3>Grade B</h3>";

    elseif($per >= 60)
        echo "<h3>Grade C</h3>";

    elseif($per >= 50)
        echo "<h3>Grade D</h3>";
    elseif($per >= 35)
        echo "<h3>Pass</h3>";

    else
        echo "<h3>Fail</h3>";
}
?>

</body>
</html>