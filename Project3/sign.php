<?php
$success=0;
$user=0;
$nomatch=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'test_conn.php';
    $username=$_POST['username'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];


    $sql="Select * from `registration` where username='$username'";
    $result=mysqli_query($conn,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            // echo 'User Already Exit';
            $user=1;
        } 
        else{
            if($password===$cpassword){
            $sql="insert into `registration` (username,password)
            values('$username','$password')";
            $result= mysqli_query($conn,$sql);
            if($result){
              
                // $success=1;
                header('location:login.php');
            }
          }
            else{
                //die(mysqli_error($conn));
                $nomatch=1;
              
            }
            }
        }
    
}

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

  <?php
  if($user){ 
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Cannot SignIn</strong> User already exist.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
  ?>

 <?php
 if($nomatch){ 
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Cannot SignIn</strong> Passwords do not match.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
 
 ?>

  
  <div class="container mt-3">
 <div class="m-5 p-5 bg-dark text-white rounded">

 <h2 class="text-center">SignUp form</h2>
  <form action="sign.php" method="post">
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="username">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    <div class="mb-3">
      <label for="pwd">Confirm Password:</label>
      <input type="password" class="form-control" id="cpassword" placeholder="Confirm password" name="cpassword">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary w-100">Submit</button>
  </form>
  </div>

  
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>