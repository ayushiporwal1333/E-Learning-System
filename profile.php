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
	<title>Profile</title>
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
        <a class="nav-link" href="user.php">Back</a>
      </li>
    </ul>
  </div>
</nav>	
</section>

<!-- Profile -->

<?php

$query = "SELECT * FROM user WHERE name = '".$_SESSION['user_name']."'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
   
   if($total != 0)
   {
     ?>
     
     <div class="container">
      <h4>Your Profile</h4>

        <div class="row display">

          <div class="col-md-3"></div>

          <div class="col-md-6">

      <?php
    
    while($result = mysqli_fetch_assoc($data))
    {
          echo "<table class='table table-bordered'>
          <tr>
          <td><b>Name</b></td>
          <td>".$result['name']."</td>
          </tr>
          <tr>
          <td><b>Phone No.</b></td>
          <td>".$result['phone']."</td>
          </tr>
          <tr>
          <td><b>Email</b></td>
          <td>".$result['email']."</td>
          </tr>
          </table><br><br>
       <center><a href='update.php?n=$result[name]&p=$result[phone]&e=$result[email]'>
         <button type='button' class='btn btn-primary'>Edit Profile</button>
       </a>&nbsp;&nbsp;
       <a href='accdelete.php?' onclick='return check()'>
         <button type='button' class='btn btn-primary'>Delete Account</button>
       </a>
     </center>";
      }
   }
    ?>

  </div>
</div>
 </div>

<script>
function check()
{
    return confirm('Do you want to delete this account?');
}
</script>

<!-- Footer -->

<section id="footer" style="position: fixed; width: 100%; bottom: 0;">
  <div class="container text-center">
    <p>E-Learning System &copy Ayushi Porwal, Department of MCA, Acharya Institute of Technology</p>
  </div>
</section>

</body>
</html>
