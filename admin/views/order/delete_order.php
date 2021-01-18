<?php 
	require_once "../../function/myfunction.php";
	if(isset($_POST['id'])){
		$idDH = $_POST['id'];
		delete_order($idDH);
		disconnect_db();
	}
	header("Location:../../admin.php?page=view_order");
 ?>