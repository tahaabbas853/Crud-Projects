<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  
  <title>Document</title>
</head>
<body>
    
<?php include 'menu.php'; ?>



<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagess/i17.jpg" alt="Los Angeles" width="1000" height="500">
    </div>
    <div class="carousel-item">
      <img src="imagess/i19.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="imagess/i18.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
<div class="py-5">
<h2 class="text-center">About Us</h2>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-lg-6 col-md-6 col-12">
<img src="imagess/i20.jpg" class="img-fluid aboutimg">
</div>
<div class="col-lg-6 col-md-6 col-12">
<h2 class="display-4">Web Development.</h2>
<p class="py-3"> Lorem ipsum dolor sit amet, consectetur
adipisicing elit, sed do eiusmod tempor incididunt ut
labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip
ex ea commodo</p>
<a href="about.php" class="btn btn-success"> check More </a
>
</div>
</div>
</div>
</section>


<section class="my-5" >
<div class="py-5">
<h2 class="text-center">Our Services</h2>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-lg-4 col-md-4 col-12">
<div class="card" style="width:400px">
<img class="card-img-top" src="imagess/i21.jpg" alt:="Card image" height="50%">
<div class="card-body">
<h4 class="card-title">Architect</h4>
<p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur, ducimus!</p>
<a href="#" class="btn btn-primary"> More
</a>
</div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12">
<div class="card" style="width:400px">
<img class="card-img-top" src="imagess/i21.jpg" alt:="Card image" height="50%">
<div class="card-body">
<h4 class="card-title">Architect</h4>
<p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur, ducimus!</p>
<a href="#" class="btn btn-primary"> More
</a>
</div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12">
<div class="card" style="width:400px">
<img class="card-img-top" src="imagess/i21.jpg" alt:="Card image" height="50%">
<div class="card-body">
<h4 class="card-title">Architect</h4>
<p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur, ducimus!</p>
<a href="#" class="btn btn-primary"> More
</a>
</div>
</div>
</div>

</div>
</div>
</section>


<section class="my-5">
<div class="py-5">
<h2 class="text-center">Our Gallery</h2>
</div>
<div class="container-fluid">
<div class="row">

<div class="col-lg-4 col-md-4 col-12">
      <img src="imagess/i22.jpg" class="img-fluid pb-4">
</div>

<div class="col-lg-4 col-md-4 col-12">
      <img src="imagess/i22.jpg" class="img-fluid pb-4">
</div>

<div class="col-lg-4 col-md-4 col-12">
      <img src="imagess/i22.jpg" class="img-fluid pb-4">
</div>

<div class="col-lg-4 col-md-4 col-12">
      <img src="imagess/i22.jpg" class="img-fluid pb-4">
</div>

<div class="col-lg-4 col-md-4 col-12">
      <img src="imagess/i22.jpg" class="img-fluid pb-4">
</div>

<div class="col-lg-4 col-md-4 col-12">
      <img src="imagess/i22.jpg" class="img-fluid pb-4">
</div>

</div>
</div>
</section>


<section class="my-5">
<div class="py-5">
<h2 class="text-center">Our Gallery</h2>
</div>
<div class="w-50 m-auto">
<form action="userinfo.php" method="post">
<div class="form-group">
<label>Username</label>
<input type="text" name="user" autocomplete="off" class="form-control">
</div>

<div class="form-group">
<label>Email</label>
<input type="text" name="email" autocomplete="off" class="form-control">
</div>

<div class="form-group">
<label>Mobile no</label>
<input type="text" name="mobile" autocomplete="off" class="form-control">
</div>



<div class="form-group">
<label>Comments</label>
<textarea class="form-control" name="comments">
</textarea>
</div>
<button type="submit" class="btn btn-success">Submit</
button>
</form>
</div>
</form>
</div>
</section>

<footer>
<p class="p-3 bg-dark text-white text-center ">@Spacianss</p>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 