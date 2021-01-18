<?php 
	require_once "././function/myfunction.php";
	if (isset($_POST['add_pro'])) {
		$soluong = $_POST['soluong'];
		$tenND = $_POST['tenSP'];
		$idDM = $_POST['idDM'];
		$dongia = $_POST['dongia'];
		add_product( $soluong, $tenND, $idDM, $dongia);
	}
 ?>
 <form method="POST" action="">
	<div class="form-group">
		<label>Tên Sản phẩm</label>
		<input type="text" name="tenSP" class="form-control">
	</div>
	<div class="form-group">
		<label>ID danh mục</label>
		<input type="text" name="idDM" class="form-control">
	</div>
	<div class="form-group">
		<label>Số lượng</label>
		<input type="text" name="soluong" class="form-control">
	</div>
	<div class="form-group">
		<label>Đơn giá</label>
		<input type="text" name="dongia" class="form-control">
	</div>
	<button type="submit" class="btn btn-primary" name="add_pro">Thêm sản phẩm</button>
</form>