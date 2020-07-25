<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e_learning";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	echo "";
}
else
{
	echo "Connection Failed";
}

?>