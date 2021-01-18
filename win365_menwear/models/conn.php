<?php 
if (!isset($conn)) {
	$conn = mysqli_connect("localhost","root","","shop") or  die('connect error');
	return $conn;
}
 ?>