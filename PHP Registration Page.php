<?php
    $message="";
    if($_SERVER["REQUEST_METHOD"] =="POST"){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $password=$_POST["password"];
        $message="Registration Successful<br><br>";
        $message.="Name: ".$name."<br>";
        $message.="Email: ".$email;

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Form</title>
</head>
<body>
    <h1>Registration Form</h1>
    <form method="post">
        <label for="">Name</label>
        <input type="text" name="name" placeholder="Enter your name" required><br><br>
        <label for="">Email</label>
        <input type="Email" name="email"placeholder="Enter your Email"required><br><br>
        <label for="">Password</label>
        <input type="Password" name="password" placeholder="Enter Password" required><br><br>
        <button type="Submit">Submit</button>
    </form>
    <?php
        echo $message;
    ?>
</body>
</html>