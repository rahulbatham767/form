<?php
include 'connect.php';

$id=$_GET['id'];
$q="DELETE FROM `form` WHERE `email`='$id' ";
$result=mysqli_query($con,$q);
if ($result) {
  header('location:index.php');
}
else {
    echo 'data not deleted successfully';
}

?>