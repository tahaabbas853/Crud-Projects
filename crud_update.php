<?php
include 'crud_con.php';
$id=$_GET['updateid'];

$sql="Select * from crudtable where id=$id";
$result= mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($result);
   
    $name=$row['name'];
    $email=$row['email'];
    $mobile=$row['mobile'];
    $password=$row['password'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];


    $sql="Update crudtable set name='$name', email='$email', mobile='$mobile', password='$password' where id=$id";
    $result= mysqli_query($conn,$sql);

    if($result){
    header('location:crud_display.php');
    }

    
    else{
        die(mysqli_error($conn));
    }

}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <div class="container my-5 w-50">
  <!-- Content here -->
  <form method="post">
  <div class="mb-2">
    <label  class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="uname"  value=<?php echo $name; ?>>
  </div>


  <div class="mb-2">
    <label  class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="uemail" placeholder="Enter your email" value=<?php echo $email; ?>>
  </div>

  <div class="mb-2">
    <label  class="form-label">Mobile no</label>
    <input type="text" name="mobile" class="form-control" id="umobile" placeholder="Enter your mobile no" value=<?php echo $mobile; ?>>
  </div>

  <div class="mb-2">
    <label  class="form-label">Passwor</label>
    <input type="password" name="password" class="form-control" id="upassword" placeholder="Enter your password" value=<?php echo $password; ?>>
  </div>
 
  <button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>



</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
