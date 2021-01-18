<?php 
	require_once "././function/myfunction.php";
	if (isset($_GET['idpro'])) {
		$idSP = $_GET['idpro'];
		if (isset($_POST['edit_pro'])) {
			$soluong = $_POST['edit_soluong'];
			$tenSP = $_POST['edit_tenSP'];
			$idDM = $_POST['edit_idDM'];
			$dongia = $_POST['edit_dongia'];
			$anh1 = $_POST['anh1'];
			$anh2 = $_POST['anh2'];
			$tieude = $_POST['tieude'];
			$giacu= $_POST['giacu'];
			$ghichu = $_POST['ghichu'];
			$mota = $_POST['mota'];
			connect_db();
	    	$sql = "UPDATE `sanpham` SET `idSP`='$idSP',`idDM`='$idDM',`dongia`='$dongia',`soluong`='$soluong',`ghichu`='$ghichu',`tenSP`='$tenSP',`anh1`='$anh1',`anh2`='$anh2',`anh3`='',`anh4`='',`anh5`='',`giacu`='$giacu',`tieude`='$tieude',`mota`='$mota' WHERE idSP='$idSP'";
			$query = mysqli_query($conn,$sql);
		}
	}
 ?>
<form method="POST" action="">
	<div class="form-group">
		<label>Tên Sản phẩm</label>
		<input type="text" name="edit_tenSP" class="form-control">
	</div>
	<div class="form-group">
		<label>ID Danh mục</label>
		<input type="text" name="edit_idDM" class="form-control">
	</div>
	<div class="form-group">
		<label>Số lượng</label>
		<input type="text" name="edit_soluong" class="form-control">
	</div>
	<div class="form-group">
		<label>Đơn giá</label>
		<input type="text" name="edit_dongia" class="form-control">
	</div>
		<div class="form-group">
		<label>Giá cũ</label>
		<input type="text" name="giacu" class="form-control">
	</div>
		<div class="form-group">
		<label>Mô tả</label>
		<input type="text" name="mota" class="form-control">
	</div>
		<div class="form-group">
		<label>Ghi chu</label>
		<input type="text" name="ghichu" class="form-control">
	</div>
		<div class="form-group">
		<label>Tiêu đề</label>
		<input type="text" name="tieude" class="form-control">
	</div>
		<div class="form-group">
		<label>ảnh 1</label>
		<input type="text" name="anh1" class="form-control">
	</div>
		<div class="form-group">
		<label>ảnh 2</label>
		<input type="text" name="anh2" class="form-control">
	</div>
	<button type="submit" class="btn btn-primary" name="edit_pro">Cập nhật</button>
</form>