<?php 
include 'connectdb.php';

if (isset($_GET['delid'])) {

    $id=$_GET['delid'];

    $sql="DELETE FROM `crud` WHERE id=$id";

    $result=mysqli_query($conn,$sql);

    if($result) {
        //echo "data deleted";    
        header("location:display.php");
    }
    else { die(mysqli_error($conn));
         };   



}

?>