<?php include 'db.php';
$id=$_GET['id'];
$query="DELETE FROM `student` WHERE id='$id'";
$data=mysqli_query($con,$query);

if ($data) {
    ?>
    <script>
        alert("Data Deleted Successfully");
        window.open("http://localhost/crud_app/display.php","_self");
    </script>
    <?php
}else{
    ?>
    <script>
        alert("Please Try Again");
    </script>
    <?php
}


?>
