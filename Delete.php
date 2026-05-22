<?php
 $con=mysqli_connect("localhost","root","","form");
 $id=$_GET['id'];
 $qry="DELETE FROM basic_form WHERE id=$id";
 mysqli_query($con,$qry);
 header("location:Select.php");
?>