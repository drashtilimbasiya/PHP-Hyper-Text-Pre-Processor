<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Detail</title>
</head>
<body>

<h1>Enter Student Detail</h1>

<form method="post">

    <label>Enter your name:</label>
    <input type="text" name="name"><br>

    <label>Enter your class:</label>
    <input type="text" name="class"><br>

    <label>Enter your college:</label>
    <input type="text" name="college"><br>

    <input type="submit" name="submit" value="Display">

</form>

<?php
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $class = $_POST['class'];
    $college = $_POST['college'];

    echo "<h3>Student Detail:</h3>";
    echo "Name: $name <br>";
    echo "Class: $class <br>";
    echo "College: $college";
}
?>

</body>
</html>