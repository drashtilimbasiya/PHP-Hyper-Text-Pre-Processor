<?php
    $con=mysqli_connect("localhost","root","","form");
    $id=$_GET['id'];
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];

        $qry="UPDATE basic_form SET id='$id',name='$name',email='$email',password='$password' WHERE id='$id'";

        mysqli_query($con,$qry);
        header("location:Select.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    $qry="SELECT * FROM basic_form WHERE id='$id'";
    $data=mysqli_query($con,$qry);
    $row=mysqli_fetch_array($data);
?>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" id="" value="<?php echo $row['name'] ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" id="" value="<?php echo $row['email'] ?>" ></td>
            </tr>
            <tr>
                <td>password</td>
                <td><input type="password" name="password" id="" value="<?php echo $row['password'] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" id=""></td>
            </tr>
        </table>
    </form>
</body>
</html>