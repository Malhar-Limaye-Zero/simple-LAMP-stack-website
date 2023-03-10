<?php
    include("connect.php");
    $id = $_GET['id'];
    $q = "delete from marks where roll_no = $id ";
    mysqli_query($con,$q);
    header("location:marks_page.php")    
?>