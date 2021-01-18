<?php  
	require_once "././function/myfunction.php";
	if (isset($_GET['id'])) {
		$idDM = $_GET['id'];
		$product = get_all_product($idDM);
		disconnect_db();
	}
?>
<a href="admin.php?page=add_pro">Thêm sản phẩm</a>
<table class="table table-hover">
	<thead>
		<tr>
			<th>IDSP</th>
			<th>TênSP</th>
			<th>Đơn giá</th>
			<th>Giá lượng</th>
		</tr>
	</thead>
	<tbody>
		<?php  
			foreach ($product as $item ) {
		?>
			<tr>
				<td><?php echo $item['idSP']; ?></td>
				<td><?php echo $item['tenSP']; ?></td>
				<td><?php echo $item['dongia']; ?></td>
				<td><?php echo $item['soluong']; ?></td>
				<td>
					<form method="POST" action="views/product/delete_pro.php">
                        <input type="hidden" name="idpro" value="<?php echo $item['idSP']; ?>"/>
                        <input type="hidden" name="idDM" value="<?php echo $idDM; ?>">
                        <input onclick="return confirm('Bạn có chắc muốn xóa không?');" type="submit" name="delete" value="Xóa"/>
                    </form>
                </td>
				<td><a href="admin.php?page=edit_pro&idpro=<?php echo $item['idSP'] ?>"><button>Sửa</button></a></td>

			</tr>
		<?php
			}
		?>
		
	</tbody>
</table>