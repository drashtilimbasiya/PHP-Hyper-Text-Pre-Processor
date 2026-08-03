<!DOCTYPE html>
<html>
<head>
    <title>Voting Eligibility</title>
</head>
<body>

<form method="post">
    Enter Your Age:
    <input type="number" name="age" required>
    <br><br>

    <input type="submit" value="Check">
</form>

<?php
if(isset($_POST['age']))
{
    $age = $_POST['age'];

    if($age >= 18)
    {
        echo "You are eligible to vote.";
    }
    else
    {
        echo "You are not eligible to vote.";
    }
}
?>

</body>
</html>