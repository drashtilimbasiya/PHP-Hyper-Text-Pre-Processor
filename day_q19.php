<!DOCTYPE html>
<html>
<head>
    <title>Day of Week</title>
</head>
<body>

<h2>Display Day</h2>

<form method="post">
    Enter Day Number:
    <input type="number" name="day" min="1" max="7" required><br><br>

    <input type="submit" name="submit" value="Show Day">
</form>

<?php
if(isset($_POST['submit']))
{
    $day = $_POST['day'];

    switch($day)
    {
        case 1:
            echo "Monday";
            break;

        case 2:
            echo "Tuesday";
            break;

        case 3:
            echo "Wednesday";
            break;

        case 4:
            echo "Thursday";
            break;

        case 5:
            echo "Friday";
            break;

        case 6:
            echo "Saturday";
            break;

        case 7:
            echo "Sunday";
            break;

        default:
            echo "Invalid Day Number";
    }
}
?>

</body>
</html>