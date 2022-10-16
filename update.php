<?php
include 'connect.php';


$fn=$_GET['fn'];
$fn=$_GET['fn'];
$ln=$_GET['ln'];
$e=$_GET['email'];
$a=$_GET['age'];
$n=$_GET['number'];

if(isset($_POST['submit'])){
    // get details
    $id=$_GET['id'];
   

// update details
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $number=$_POST['number'];

  
    $q="UPDATE `form` SET `fname`='$fname',`lname`='$lname',`email`='$email',`age`='$age',`number`='$number' WHERE email='$id' ";
    $result=mysqli_query($con,$q);
    if ($result) {
        // echo "yes";
        header("Location:index.php");
    }
    else{
        echo "no";
    }
}

?>

<!DOCTYPE html>
<html>
   
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>FORM</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <style>
        form{
           display: block;
           width: 300px;
           margin:auto;
           margin-bottom: 2rem;
        }
    </style>

</head>
<body>
    <div class="container m-3">
<form name="form"  method="post" >      
          <div class="row">
            <label for="fname">First Name:</label>
  
            <div class="col-sm-12">
              <input
                type="text"
                class="form-control"
                name="fname"
                id="fname"
                value='<?php echo $fn;?>'
              /><br/>
            </div>
          </div>
          <div class="row">
            <label for="lname">Last Name</label>
            <div class="col-sm-12">
              <input
                class="form-control"
                type="text"
                name="lname"
                id="lname"
                value="<?php echo $ln;?>"
              /><br />
            </div>
          </div>
          <div class="row">
            <label for="email">Email:</label>
            <div class="col-sm-12">
              <input
                class="form-control"
                type="email"
                name="email"
                id="email"
                value="<?php echo $e ?>"
              /><br />
            </div>
          </div>
          <div class="row">
            <label for="age">Age:</label>
            <div class="col-sm-12">
              <input
                class="form-control"
                type="number"
                min="0"
                max="50"
                name="age"
                id="age"
                placeholder="10"
                value=<?php echo $a?>
              />
              <br>
            </div>
          </div>
          <div class="row">
              <label for="number">Number:</label>
              <div class="col-sm-12">
                  <input type="number" name="number" id="number" class="form-control" value=<?php
                  echo $n;
                  ?>
                  >
              </div>
          </div>
          <br>
          <div class="row">
              <div class="col-sm-5 mx-auto">
              <input class="form-control" type="submit" name="submit" value="Submit">
          </div>
          
          </div>
     
        </form>
        </div>
</body>
</html>