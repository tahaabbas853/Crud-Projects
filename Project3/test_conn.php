<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "test";

$conn = mysqli_connect($server,$user,$password,$db);

if(!$conn){
    ?>
    <script>
        alert("Connection Not Successful!");
    </script>
     <?php
    
}


?>