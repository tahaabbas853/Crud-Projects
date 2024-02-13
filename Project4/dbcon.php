<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "crud_operation";

$conn = mysqli_connect($server,$user,$password,$db);

if($conn){
    ?>
    <script>
        alert("Connection Successful!")
    </script>
     <?php
    
}else{
    ?>
    <script>
        alert("Connection Not Successful!")
    </script>
     <?php
    
}

?>