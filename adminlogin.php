<?php
session_start();
include("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body class="aloginbg"><br><br>
<div class="modal-dialog text-center">
	<div class="col-sm-9 main-section">
		<div class="modal-content">
			<!-- <div class="col-12 user-img">
				<img src="img/login_logo.png">
			</div> -->
			<div class="heading">
				<h3>Admin Login</h3>
				<br>
			</div>
			<center>
			<div class="col-12 form-input">
				<form method="POST">
					<div class="form-group">
						<i class="fa fa-lock icon"></i>
						<input type="text" name="id" class="form-control" placeholder="Enter User Id" required>
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
		</div>
	</div>
</div>

<?php
 if(isset($_POST['submit']))
 {
	 $id = $_POST['id'];
	 $pwd = $_POST['password'];
	 $query = "SELECT * FROM admin WHERE id='$id' && password='$pwd'";
	 $data = mysqli_query($conn, $query);
	 $total = mysqli_num_rows($data);
	 if($total==1)
	 {
	 	 while($result = mysqli_fetch_assoc($data))
	 	 {
	 	 	$id = $result['id'];
	 	 }
		 $_SESSION["user_id"] = $id;
		 header('location:admin.php');
	 }
	 else
	 {
		 echo '<script>alert("Login Failed")</script>';
	 }
 }
?>

</body>
</html>

