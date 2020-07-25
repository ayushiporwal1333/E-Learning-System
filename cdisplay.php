<?php
session_start();
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
	<title>List of Courses</title>
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
        <a class="nav-link" href="admin.php">Back</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>	
</section>


<?php
include("connection.php");
error_reporting(0);

$query = "SELECT * FROM course";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
   
   if($total != 0)
   {
     ?>
     
     <div class="container">
     <h4>List of Courses</h4>

     <div class="row">

      <div class="col-md-2"></div>

      <div class="col-md-8">

     <table class="table table-bordered">
      <thead class="thead-light">
       <tr>
        <th>COURSE NAME</th>
        <th>CATEGORY</th>
       </tr>
      </thead>
    
    <?php
    
    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
          <td>".$result['cname']."</td>
          <td>".$result['category']."</td>
          </tr>";
    }
   }
    ?>
    </table>
  </div></div></div><br><br>


<!-- Footer -->

<section id="footer">
  <div class="container text-center">
    <p>E-Learning System &copy Ayushi Porwal, Department of MCA, Acharya Institute of Technology</p>
  </div>
</section>

</body>
</html>