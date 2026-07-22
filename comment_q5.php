<!DOCTYPE html>
<html>
<head>
    <title>Comments Example</title>
</head>
<body>

<form method="post">
    Enter Your Name:
    <input type="text" name="name" required><br><br>

    <input type="submit" name="submit" value="Display">
</form>

<?php

// Single-line comment

/*
This is a
multi-line comment
*/

if(isset($_POST['submit']))
{
    $name = $_POST['name'];

    echo "Hello, " . $name;
}
?>

</body>
</html>