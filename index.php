<?php 

include 'db.php';

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
    <h1>Register For New Candidates</h1>
  <form action="" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
      <label for="fname">Name:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter Your Name" name="fname" required>
    </div>
    <div class="form-group">
      <label for="age">Age:</label>
      <input type="number" class="form-control" id="age" placeholder="Enter Your Age" name="age" required>
    </div>
    <button type="submit" class="btn btn-primary" name="save_btn">Submit</button>
    <a href="display.php" class="btn btn-primary">
        View Data
    </a>
  </form>
</div>
</body>
</html>
