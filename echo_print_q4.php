<!DOCTYPE html>
<html>
<head>
    <title>Echo and Print</title>
</head>
<body>

<h2>Echo and Print Example</h2>

<form method="post">
    Enter Text:
    <input type="text" name="text" required><br><br>

    <input type="submit" name="submit" value="Display">
</form>

<?php
if(isset($_POST['submit']))
{
    $text = $_POST['text'];

    echo "<h3>Using echo:</h3>";
    echo $text . "<br>";
    

    print "<h3>Using print:</h3>";
    print $text ;
    
    

}
?>

</body>
</html>