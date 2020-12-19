<?php
    $con = mysqli_connect('localhost', 'root', '', 'user');
    $id=$_GET["id"];
    mysqli_query($con, "delete from product where id=$id");
    
    header("location:cart.php");
?>