<?php  
	$conn = mysqli_connect("localhost", "root", "", "shop_quan_ao") or die("Can't connect db!");
	if ($conn) {
		mysqli_set_charset($conn, 'utf8');
	}else{
		
	}
	
?>