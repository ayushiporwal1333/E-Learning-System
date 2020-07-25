<?php
session_start();
error_reporting(0);
if($_SESSION["user_id"]==true)
{
}
else
{
  header('location:adminlogin.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <h3 class="navbar-brand"><img src="img/e-learning.png">E-Learning System</h3>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>	
</section>

<section id="admin">
<div class="container">
  <h4>Welcome Admin</h4><br>
  <div class="row">
    <div class="col-sm-6">
      <center>
      <div class="card text-white">
        <img src="img/img20.jpg" class="card-img" alt="...">
        <a href="udisplay.php" style="color: white;">
          <div class="card-img-overlay">
            <h1 class="card-title">View List of Users</h1>
          </div>
        </a>
      </div></center>
    </div>
    <div class="col-sm-6">
      <center>
      <div class="card text-white">
        <img src="img/img21.jpg" class="card-img" alt="...">
        <a href="cdisplay.php" style="color: white;">
          <div class="card-img-overlay">
            <h1 class="card-title">View List of Courses</h1>
          </div>
        </a>
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