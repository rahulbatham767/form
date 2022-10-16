
<!-- insert  -->
<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $number=$_POST['number'];

    $q="INSERT INTO `form`(`fname`, `lname`, `email`, `age`, `number`) VALUES ('$fname','$lname','$email','$age','$number')";
    $result=mysqli_query($con,$q);
    if ($result) {
        echo "yes";
        header("Location:index.php");
    }
    else{
        echo "no".$result;
    }
}

?>