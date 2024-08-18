<?php 
include "db.php";
$id= $_GET['id'];
$data="SELECT * FROM `student` WHERE id='$id'";
$query=mysqli_query($con,$data);
$row=mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD APP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h1>Edit Candidates Data</h1>
  <form action="display.php" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required value="<?php echo $row['email']?>">
    </div>
    <div class="form-group">
      <label for="fname">Name:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter Your Name" name="fname" required value="<?php echo $row['name']?>">
    </div>
    <div class="form-group">
      <label for="age">Age:</label>
      <input type="number" class="form-control" id="age" placeholder="Enter Your Age" name="age" required value="<?php echo $row['age']?>">
    </div>
    <button type="submit" class="btn btn-primary" name="update_btn">Update</button>
    <a href="display.php" class="btn btn-primary">BACK</a>
  </form>
</div>
</body>
</html>

<?php

if (isset($_POST['update_btn'])) {
  $email=$_POST['email'];
  $name=$_POST['fname'];
  $age=$_POST['age'];
  $sql="UPDATE `student` SET `email`='$email',`name`='$name',`age`='$age' WHERE id='$id'";
  $result=mysqli_query($con,$sql);
  if ($result){
    ?>
    <script>
      alert("Data Updated Successfully");
    </script>
    <?php
  }else{
    ?>
    <script>
      alert("Please Try Again");
    </script>
    <?php
  }
}
?>
