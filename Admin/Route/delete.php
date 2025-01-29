<?php
require("./RouteServer.php");
include 'connect.php';
if(isset($_GET['deleteFlight_ID'])){
    $Flight_ID=$_GET['deleteFlight_ID'];

    $sql="delete from `crud` where Flight_ID=$Flight_ID";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo"Deleted Successfull!";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}



?>