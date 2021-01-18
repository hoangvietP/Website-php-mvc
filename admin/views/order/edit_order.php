<?php 
	if (isset($_GET['id'])) {
		$idDH = $_GET['id'];
		if (isset($_POST['edit_order'])) {
			$soluong = $_POST['soluong'];
			$tenND = $_POST['tenND'];
			$diachi = $_POST['diachi'];
			$sdt = $_POST['sdt'];
			$mau = $_POST['mau'];
			$kt = $_POST['kt'];
			$dongia = $_POST['dongia'];
			$tensanpham = $_POST['tensanpham'];
			connect_db();
    		$sql = "UPDATE `donhang` SET `idDH`='$idDH',`soluong`='$soluong',`tenND`='$tenND',`diachi`='$diachi',`sdt`='$sdt',`thanhtien`='',`idSP`='',`dongia`='$dongia',`tensanpham`='$tensanpham',`mau`='$mau',`kt`='$kt' WHERE idDH= '$idDH'";
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
		<label>Tên Sanpham</label>
		<input type="text" name="tensanpham" class="form-control">
	</div>
	<div class="form-group">
		<label>Số lượng</label>
		<input type="text" name="soluong" class="form-control">
	</div>
	<div class="form-group">
		<label>Màu</label>
		<input type="text" name="mau" class="form-control">
	</div>
	<div class="form-group">
		<label>Kích thước</label>
		<input type="text" name="kt" class="form-control">
	</div>
	<div class="form-group">
		<label>Đơn giá</label>
		<input type="text" name="dongia" class="form-control">
	</div>
	<button type="submit" class="btn btn-primary" name="edit_order">Cập nhật</button>
</form>