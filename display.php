<?php include 'db.php'; ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD APP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl_no</th>
      <th scope="col">Email</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <?php 
  
  $sql= "SELECT * FROM `student`";
  $result=mysqli_query($con,$sql);
  $query=mysqli_num_rows($result);

  if ($query) {
    while ($row=mysqli_fetch_array($result)){
        ?>
          <tr>
              <td><?php echo $row['id'] ?></td>
              <td><?php echo $row['email'] ?></td>
              <td><?php echo $row['name'] ?></td>
              <td><?php echo $row['age'] ?></td>
              <td><a href="update.php?id=<?php echo $row['id']?>" class="btn btn-primary">Edit</a></td>
              <td><a onclick="return confirm('Are You Sure, you want to delete?')" href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">Delete</a></td>
          </tr>
        <?php
    }
  }
  else{
    ?>
        <tr>
            <td>No Record Found</td>
            <td>No Record Found</td>
            <td>No Record Found</td>
            <td>No Record Found</td>
        </tr>
    <?php
  }
  ?>
</table>
<a href="index.php" class="btn btn-primary">GO TO HOME</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

