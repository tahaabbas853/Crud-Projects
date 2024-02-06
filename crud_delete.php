<?php
include 'crud_con.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql= "Delete from crudtable where id=$id";
    $result= mysqli_query($conn,$sql);

    if($result){
        header('location:crud_display.php');
    }
    else{
        die(mysqli_error($conn));
    }
}

?>