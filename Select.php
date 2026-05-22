<?php
    $con=mysqli_connect("localhost","root","","form");
    $qry="select * from basic_form";
    $data=mysqli_query($con,$qry);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>id</td>
            <td>name</td>
            <td>email</td>
            <td>password</td>
            <td>Delete</td>
            <td>Update</td>

        </tr>
        <tr>
            <?php
                while($row=mysqli_fetch_array($data))
                {
            ?>
           <td><?php echo $row['id']?></td>
           <td><?php echo $row['name']?></td>
           <td><?php echo $row['email']?></td>
           <td><?php echo $row['password']?></td>
           <td><a href="Delete.php?id=<?php echo $row['id']?>">Delete</a></td>
           <td><a href="Update.php?id=<?php echo $row['id']?>">Update</a></td>
           <!-- <td><a href="delete.php?id=<?php echo $row['id']?>">delete</a></td> -->
           <!-- <td><a href="update.php?id=<?php echo $row['id']?>">update</a></td> -->

          
        </tr>
        <?php 
                }
        ?>
          

        
    </table>
</body>
</html>