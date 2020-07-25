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
	<title>Profit and Loss</title>
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
  <h4>Profit and Loss</h4>

  <p align="justify">Profit and Loss is an important part of the Quantitative Aptitude section. Profit and loss is part and parcel of every business. If the selling price of a product exceeds its cost price or production price, then a profit is made. If the selling price of a product is less than its cost price, then a loss is incurred. Every business man wants to earn profit at the end of the financial year but not necessary he earns profit.<br>
    <br>
  Profit=SP-CP<br>
  Loss=CP-SP<br>
  Profit %= ((SP-CP)/CP) *100<br>
  Loss %= ((CP-SP)/ CP) *100<br>
  Discount= MP-SP<br>
  Discount %= ((MP-SP)/ MP) * 100<br>
  where SP= Selling Price, CP= Cost Price, MP= Marked Price<br>
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