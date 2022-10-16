<?php

include 'connect.php';
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
    <div class="container my-5 ">
        <h3 class="text-center text-success ">CURD OPERATION USING PHP</h3>
        <form name="form"  method="post" action="insert.php" >      
          <div class="row">
            <label for="fname">First Name:</label>
  
            <div class="col-sm-12">
              <input
                type="text"
                class="form-control"
                name="fname"
                id="fname"
              /><br />
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
              />
              <br>
            </div>
          </div>
          <div class="row">
              <label for="number">Number:</label>
              <div class="col-sm-12">
                  <input type="number" name="number" id="number" class="form-control">
              </div>
          </div>
          <br>
          <div class="row">
              <div class="col-sm-5">
              <input class="form-control" type="submit" name="submit" value="Submit">
          </div>
              <div class="col-sm-5">
              <input class="form-control" type="reset" value="Reset">
          </div>
          </div>
     
        </form>
        <table class="table">
            <tr>
                <th>S.no</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Number</th>
                <th>Action</th>
            </tr>
            <tbody>
                <?php 
                $q='select *from form';
                $result=mysqli_query($con,$q);
                $sno=0;
                while ($row=mysqli_fetch_assoc($result))  
                 {
                  $sno++;
                  ?>
                  <tr>

                  <td><?php echo $sno ;?></td>
                  <td><?php echo $row['fname']; ?></td>
                  <td><?php echo $row['lname']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['age']; ?></td>
                  <td><?php echo $row['number']; ?></td>
                  <td><button class="btn btn-danger"><a class="text-white text-decoration-none" href= <?php echo "update.php?id=".$row['email']."&fn=".$row['fname']."&ln=".$row['lname']
                  ."&email=".$row['email']."&age=".$row['age']."&number=".$row['number']
                  ?>
                  
                  
                  
                  >Update</a></button>
                  <button class="btn btn-success "><a class="text-decoration-none text-white" href="delete.php?id=<?php echo $row['email']; ?>">Delete</a></button></td>
                 
              </tr>
              <?php
                }

                ?>
               
            </tbody>
        </table>
    </div>
</body>
</html>
