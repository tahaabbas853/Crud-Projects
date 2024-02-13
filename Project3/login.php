<?php
$data=0;
$invalid=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'test_conn.php';
    $username=$_POST['username'];
    $password=$_POST['password'];


    $sql="Select * from `registration` where username='$username' and
    password='$password'";
    $result=mysqli_query($conn,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            //  echo 'Login Successful';
            $data=1;
            session_start();
            $_SESSION['username']=$username;
            header('location:home.php');

        }
        else{
            // echo 'Invalid data';
            $invalid=1;
        }
        }
    
}

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

  <?php
  if($invalid){ 
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Cannot Login</strong> Please enter correct credentials.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }

  
  ?>

  
  <div class="container mt-3">
 <div class="m-5 p-5 bg-dark text-white rounded">

 <h2 class="text-center">Login Page</h2>
  <form action="login.php" method="post">
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="username">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary w-100">Login</button>
  </form>
  </div>

  
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>