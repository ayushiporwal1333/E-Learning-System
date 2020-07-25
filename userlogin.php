<?php
session_start();
include("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body class="uloginbg"><br>
<div class="modal-dialog text-center">
	<div class="col-sm-9 main-section">
		<div class="modal-content">
			<!-- <div class="col-12 user-img">
				<img src="img/login_logo.png">
			</div> -->
			<div class="heading">
				<h3>User Login</h3>
				<br>
			</div>
			<center>
			<div class="col-12 form-input">
				<form method="POST">
					<div class="form-group">
						<i class="fa fa-envelope-o icon"></i>
						<input type="email" name="email" class="form-control" placeholder="Enter Email" required>
					</div>
					<div class="form-group">
						<i class="fa fa-key icon"></i>
						<input type="password" name="password" class="form-control" placeholder="Enter Password" required>
					</div>
					<br>
					<button type="submit" name="submit" class="btn btn-success">Login</button>
				</form>
			</div>
			</center>
			<div class="col-12 forgot">
				<p>Dont have an account?&nbsp;<a href="register.php">Sign up here</a></p>
			</div>
		</div>
	</div>
</div>

<?php
 if(isset($_POST['submit']))
 {
	 $em = $_POST['email'];
	 $pwd = $_POST['password'];

	 $query = "SELECT * FROM user WHERE email='$em' && password='$pwd'";
	 $data = mysqli_query($conn, $query);
	 
	 $total = mysqli_num_rows($data);
	 if($total==1)
	 {
	 	 while($result = mysqli_fetch_assoc($data))
	 	 {
	 	 	$name = $result['name'];
	 	 }
		 $_SESSION["user_name"] = $name;
		 header('location:user.php');
	 }
	 else
	 {
		 echo '<script>alert("Login Failed")</script>';
	 }
 }
?>

</body>
</html>

