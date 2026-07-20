<!DOCTYPE html>
<html>
<head>
    <title>Date and Time</title>
</head>
<body>

<h2>Display Current Date and Time</h2>

<form method="post">
    Enter Time Zone:
    <select name="timezone">
        <option value="Asia/Kolkata">India</option>
        <option value="America/New_York">New York</option>
        <option value="Europe/London">London</option>
        <option value="Asia/Dubai">Dubai</option>
    </select>

    <br><br>

    <input type="submit" name="submit" value="Show Date & Time">
</form>

<?php
if(isset($_POST['submit']))
{
    $timezone = $_POST['timezone'];

    date_default_timezone_set($timezone);

    echo "<h3>Current Date and Time</h3>";
    echo "Time Zone : $timezone <br><br>";
    echo "Date : " . date("d-m-Y") . "<br>";

    echo "Time : <span id='time'>" . date("h:i:s A") . "</span>";

    echo "
    <script>
        function updateTime() {
            let now = new Date();
            document.getElementById('time').innerHTML = 
            now.toLocaleTimeString();
        }

        setInterval(updateTime, 1000);
    </script>
    ";
}
?>

</body>
</html>