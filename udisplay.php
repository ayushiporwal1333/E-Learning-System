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
	<title>List of Users</title>
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


<?php
include("connection.php");
error_reporting(0);

$query = "SELECT * FROM user";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
   
   if($total != 0)
   {
     ?>
     
     <div class="container">
     <h4>List of Users</h4>

     <div class="row">

      <div class="col-md-1"></div>

      <div class="col-md-10">

     <table class="table table-bordered">
      <thead class="thead-light">
       <tr>
        <th>NAME</th>
        <th>PHONE NO.</th>
        <th>EMAIL ID</th>
        <th colspan="2">OPERATIONS</th>
       </tr>
      </thead>
    
    <?php
    
    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
          <td>".$result['name']."</td>
          <td>".$result['phone']."</td>
          <td>".$result['email']."</td>
          <td><a href='delete.php?n=$result[name]' onclick='return check()'>DELETE</a></td>
          </tr>";
    }
   }
    ?>
    </table>
  </div></div></div>

<script>
function check()
{
    return confirm('Do you want to delete this data?');
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