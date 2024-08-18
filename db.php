<?php

$host="localhost";
$uname="root";
$pass="";
$db="formsdata";
$con=mysqli_connect($host,$uname,$pass,$db);
if (isset($_POST["save_btn"])) {
    $email=$_POST["email"];
    $name=$_POST["fname"];
    $age=$_POST["age"];
    $sql="INSERT INTO student (email,name,age) VALUES ('$email','$name','$age')";
    $result=mysqli_query($con,$sql);
    ?>
    <script>
        alert("Data Inserted Successfully");
    </script>
    <?php
}
?>
