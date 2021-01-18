<?php 
	require_once "././function/myfunction.php";
	if (isset($_POST['add_catalog'])) {
		$danhmuc = $_POST['danhmuc'];
		add_catalog($danhmuc);
	}
 ?>
 <form method="POST" action="">
	<div class="form-group">
		<label>Danh mục</label>
		<input type="text" name="danhmuc" class="form-control">
	</div>
	<button type="submit" class="btn btn-primary" name="add_catalog">Thêm đơn hàng</button>
</form>