<?php 
	require_once "././function/myfunction.php";
	if (isset($_POST['add_order'])) {
		$soluong = $_POST['soluong'];
		$tenND = $_POST['tenND'];
		$diachi = $_POST['diachi'];
		$sdt = $_POST['sdt'];
		$idSP = $_POST['idSP'];
		$dongia = $_POST['dongia'];
		add_order($soluong, $tenND, $diachi, $sdt, $idSP, $dongia);
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
		<label>ID Sanpham</label>
		<input type="text" name="idSP" class="form-control">
	</div>
	<div class="form-group">
		<label>Số lượng</label>
		<input type="text" name="soluong" class="form-control">
	</div>
	<div class="form-group">
		<label>Đơn giá</label>
		<input type="text" name="dongia" class="form-control">
	</div>
	<button type="submit" class="btn btn-primary" name="add_order">Thêm đơn hàng</button>
</form>