<?php 
	require_once "../../function/myfunction.php";
	if(isset($_POST['id'])){
		$idDM = $_POST['id'];
		delete_catalog($idDM);
		disconnect_db();
	}
	header("Location:../../admin.php?page=view_catalog");
 ?>