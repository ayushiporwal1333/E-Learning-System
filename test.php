<?php
include('connection.php');

$query = "SELECT * FROM register_test where name='Ayushi'";

$data = mysqli_query($conn, $query);

while($result = mysqli_fetch_assoc($data))
{
	echo $result['email'];
}


?>