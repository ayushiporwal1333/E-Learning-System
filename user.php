<?php
session_start();
error_reporting(0);
if($_SESSION["user_name"]==true)
{
}
else
{
  header('location:userlogin.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>User</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<!-- Navigation Bar -->

<section id="nav-bar">
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #333;">
  <h3 class="navbar-brand"><img src="img/e-learning.png">E-Learning System</h3>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" style="font-size: 25px;"></i></a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="profile.php">View Profile</a>
          <a class="dropdown-item" href="changepwd.php">Change Password</a>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>  
</section>


<section id=users>
  <div class="container">
    <h4>Welcome <?php echo $_SESSION["user_name"]; ?></h4>
    <div class="row">
      <div class="col-md-4">
        <center><div class="card" style="width: 18rem;">
          <img src="img/img2.jpg" class="card-img-top" alt="...">
          <div class="card-img-overlay">
            <h2 class="card-title" style="color: white;">Programming</h2>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="C.php">C</a></li>
            <li class="list-group-item"><a href="C++.php">C++</a></li>
            <li class="list-group-item"><a href="Java.php">Java</a></li>
          </ul>
          </div></center>
      </div>
      <div class="col-md-4">
        <center><div class="card" style="width: 18rem;">
          <img src="img/img16.jpg" class="card-img-top" alt="...">
          <div class="card-img-overlay">
            <h2 class="card-title" style="color: white;">Web Designing</h2>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="HTML.php">HTML</a></li>
            <li class="list-group-item"><a href="CSS.php">CSS</a></li>
            <li class="list-group-item"><a href="Bootstrap.php">Bootstrap</a></li>
          </ul>
          </div></center>
      </div>
      <div class="col-md-4">
        <center><div class="card" style="width: 18rem;">
          <img src="img/img10.jpg" class="card-img-top" alt="...">
          <div class="card-img-overlay">
            <h2 class="card-title" style="color: white;">Aptitude</h2>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="TSD.php">Time, Speed and Distance</a></li>
            <li class="list-group-item"><a href="PL.php">Profit and Loss</a></li>
            <li class="list-group-item"><a href="Percent.php">Percentage</a></li>
          </ul>
          </div></center>
      </div>
    </div>
  </div>
</section>


<!-- Footer -->

<section id="footer" style="position: fixed; width: 100%; bottom: 0;">
  <div class="container text-center">
    <p>E-Learning System &copy Ayushi Porwal, Department of MCA, Acharya Institute of Technology</p>
  </div>
</section>

</body>
</html>