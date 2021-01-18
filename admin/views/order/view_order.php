<?php  
	require_once "././function/myfunction.php";
	$order = get_all_order();
	disconnect_db();
	$i = 1;
?>
<table class="table table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>Tên</th>
			<th>SĐT</th>
			<th>Địa chỉ</th>
			<th>Số lượng</th>
			<th>Tên sản phẩm</th>
			<th>Màu sắc</th>
			<th>Kích thước</th>
			<th>Đơn giá</th>
		</tr>
	</thead>
	<tbody>
		<?php  
			foreach ($order as $item) {
		?>
			<tr>
				<td><?php echo $item['idDH'] ?></td>
				<td><?php echo $item['tenND']; ?></td>
				<td><?php echo $item['sdt']; ?></td>
				<td><?php echo $item['diachi']; ?></td>
				<td><?php echo $item['soluong']; ?></td>
				<td><?php echo $item['tensanpham']; ?></td>
				<td><?php echo $item['mau']; ?></td>
				<td><?php echo $item['kt']; ?></td>
				<td><?php echo $item['dongia']; ?></td>
				<td>
					 <form method="POST" action="views/order/delete_order.php">
                        <input type="hidden" name="id" value="<?php echo $item['idDH']; ?>"/>
                        <input onclick="return confirm('Bạn có chắc muốn xóa không?');" type="submit" name="delete" value="Xóa"/>
                    </form>
				</td>
				<td><td><a href="admin.php?page=edit_order&id=<?php echo $item['idDH']  ?>"><button>Sửa</button></a></td></td>
			</tr>
		<?php
			}
		?>
		
	</tbody>
</table>