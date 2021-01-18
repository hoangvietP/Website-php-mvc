<?php 
	require_once "../../function/myfunction.php";
	if(isset($_POST['id'])){
		$idND = $_POST['id'];
		delete_user($idND);
		disconnect_db();
	}
	header("Location:../../admin.php?page=view_user");
 ?>