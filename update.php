<?php
session_start();
include("connection.php");
if($_SESSION["user_name"]==true)
{
}
else
{
  header('location:userlogin.php');
}
error_reporting(0);

 $name = $_GET['n'];
 $phone = $_GET['p'];
 $email = $_GET['e'];

 $qr = "SELECT * FROM user where name='".$_SESSION['user_name']."'";
 $dt = mysqli_query($conn,$qr);
 while ($result = mysqli_fetch_assoc($dt)) {
      $pwd = $result['password'];
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Profile</title>
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
  <h4>Edit Your Profile</h4>
  <div class="row update">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <form action="" method="GET">
        <div class="form-group">
        <b>Name :</b> <input type="text" name="name" class="form-control" value="<?php echo $name;?>" required>
      </div>
        <div class="form-group">
        <b>Phone No :</b> <input type="tel" name="phone" class="form-control" value="<?php echo $phone;?>" required>
      </div>
        <div class="form-group">
        <b>Email :</b> <input type="text" name="email" class="form-control" value="<?php echo $email;?>" required>
      </div><br>
      <center><input type="submit" name="submit" class="btn btn-primary" value="Submit"></center>
      </form>
    </div>
  </div>
</div>

<?php
if(isset($_GET['submit']))
{
  $nm = $_GET['name'];
  $ph = $_GET['phone'];
  $em = $_GET['email'];

  $query = "UPDATE user SET name='$nm', phone='$ph', email='$em' WHERE name='".$_SESSION['user_name']."'";
  $data = mysqli_query($conn,$query);
  
  if($data)
  {
    $q = "SELECT * FROM user WHERE password='$pwd'";
    $d = mysqli_query($conn,$q);

    while ($result = mysqli_fetch_assoc($d)) {
      $name = $result['name'];
    }

    $_SESSION["user_name"] = $name;
    echo "<script>alert('Updated Successfully');
    location.href='profile.php';</script>";
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