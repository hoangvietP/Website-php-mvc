<?php 
	if (isset($_GET['idpro'])) {
		$idND = $_GET['idpro'];
		if (isset($_POST['edit_user'])) {
			$tenND = $_POST['tenND'];
			$diachi = $_POST['diachi'];
			$sdt = $_POST['sdt'];
			$email = $_POST['email'];
			connect_db();
			$sql = "UPDATE nguoidung SET tenND='$tenND',diachi='$diachi',sdt='$sdt',email='$email' WHERE idND= $idND";
			$query = mysqli_query($conn,$sql);
			}
	}
 ?>
 <form method="POST" action="">
	<div class="form-group">
		<label>Ten ND</label>
		<input type="text" name="tenND" class="form-control">
	</div>
	<div class="form-group">
		<label>Địa chỉ</label>
		<input type="text" name="diachi" class="form-control">
	</div>
	<div class="form-group">
		<label>Số điện thoại</label>
		<input type="text" name="sdt" class="form-control">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="text" name="email" class="form-control">
	</div>
	<button type="submit" class="btn btn-primary" name="edit_user">Cập nhật</button>
</form>
