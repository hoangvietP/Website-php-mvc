<?php 
	require_once "../../function/myfunction.php";
	if(isset($_POST['idpro'])){
		$idSP = $_POST['idpro'];
		$id = $_POST['idDM'];
		delete_product($idSP);
		 disconnect_db();
	}
	header("Location:../../admin.php?page=view_pro&id=<?php echo $id; ?>");
 ?>
