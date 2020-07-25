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
	<title>Time,Speed and Distance</title>
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
  <a class="navbar-brand" href="#"><img src="img/e-learning.png">E-Learning System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="user.php">Back</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>	
</section>

<div class="container">
  <h4>Time, Speed and Distance</h4>

  <p align="justify">Time, Speed and distance is an important part of every competitive exam. Speed is defined as distance traveled divided by the time. Using this formula all types of problems on speed and distance can be solved. Speed is inversely proportional to the time taken when the distance travelled is constant. So when speed increases time reduces and vice versa. Distance is directly proportional to velocity when time is constant.<br>
  <i>Distance= Speed*time</i><br>
  For a non-uniform motion Average speed= Total distance travelled/Total time taken<br>
  When the body travels at 'u' m/s for t1 seconds and 'v' m/s for t2 seconds, then Average speed= (ut1+vt2)/(t1+t2)<br>
  When the body travels l distance at 'u' m/s and 'm' distance at 'v' m/s; Average speed = (mu+lv)/(l+m)<br>
  <b>Relative Speed:</b> Speed of a moving body w.r.t. another moving body is called relative speed.<br>

  Speed of A w.r.t. B<br>
  (i) When they are moving in same direction; Relative speed of A= A-B<br>
  (ii) When they are moving in opposite direction; Relative speed of A= A+B<br>


  <b>Key points on Trains</b><br>
  When a train is crossing a pole distance travelled by the train= length of train<br>
  When a train of length l is crossing a bridge of length b; the distance travelled by train=l+b<br>
  When a train of length l is crossing a platform of length p; then distance travelled by train=l+p<br>
  When a train of length l1 is crossing/ overtaking another train l2; then distance travelled = l1+l2<br>
  </p>

</div>


<!-- Footer -->

<section id="footer" style="position: fixed; width: 100%; bottom: 0;">
  <div class="container text-center">
    <p>E-Learning System &copy Ayushi Porwal, Department of MCA, Acharya Institute of Technology</p>
  </div>
</section>

</body>
</html>