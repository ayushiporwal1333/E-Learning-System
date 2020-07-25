<?php
session_start();
include("connection.php");
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
	<title>Change Password</title>
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
        <a class="nav-link" href="profile.php">Back</a>
      </li>
    </ul>
  </div>
</nav>	
</section>

<div class="container">
  <h4>Change Your Password</h4>
  <div class="row update">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <form action="" method="GET">
        <div class="form-group">
        <b>Enter current password :</b> <input type="password" name="oldpwd" class="form-control" required>
      </div><br>
        <div class="form-group">
        <b>Enter new password :</b> <input type="password" name="newpwd" class="form-control" required>
      </div><br><br>
      <center><input type="submit" name="submit" class="btn btn-primary" value="Change"></center>
      </form>
    </div>
  </div>
</div>

<?php
if(isset($_GET['submit']))
{
  $old = $_GET['oldpwd'];
  $new = $_GET['newpwd'];
  $query = "SELECT * FROM user WHERE name = '".$_SESSION['user_name']."'";
  $data = mysqli_query($conn, $query);
  $total = mysqli_num_rows($data);
   
   if($total != 0)
   {
      while($result = mysqli_fetch_assoc($data))
      {
        if ($old == $result['password'])
        {
           $q = "UPDATE user set password='$new' where name = '".$_SESSION['user_name']."'"; 
           $d = mysqli_query($conn, $q);
           if($d)
           {
             session_unset();
             echo "<script>alert('Password Changed Login Again');
                  location.href='userlogin.php';</script>";
           }
        }
        else
        {
          echo "<script>alert('Password does not match Try Again');</script>";
        }
        
      }
   }
}

?>

<!-- Footer -->

<section id="footer" style="position: fixed; width: 100%; bottom: 0;">
  <div class="container text-center">
    <p>E-Learning System &copy Ayushi Porwal, Department of MCA, Acharya Institute of Technology</p>
  </div>
</section>

</body>
</html>