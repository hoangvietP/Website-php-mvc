<?php  
	require_once "././function/myfunction.php";
	$user = get_all_user();
	disconnect_db();
?>
<table class="table table-hover">
	<thead>
		<tr>
			<th>STT</th>
			<th>Tên</th>
			<th>SĐT</th>
			<th>Địa chỉ</th>
			<th>Email</th>
		</tr>
	</thead>
	<tbody>
		<?php  
			foreach ($user as $item) {
		?>
			<tr>
				<td><?php echo $item['idND']; ?></td>
				<td><?php echo $item['tenND']; ?></td>
				<td><?php echo $item['sdt']; ?></td>
				<td><?php echo $item['diachi']; ?></td>
				<td><?php echo $item['Email']; ?></td>
				<td>
					<form method="POST" action="views/user/delete_user.php">
                        <input type="hidden" name="id" value="<?php echo $item['idND']; ?>"/>
                        <input onclick="return confirm('Bạn có chắc muốn xóa không?');" type="submit" name="delete" value="Xóa"/>
                    </form>
                </td>
				<td><a href="admin.php?page=edit_user&idpro=<?php echo $item['idND'] ?>"><button>Sửa</button></a></td>
			</tr>
		<?php
			}
		?>
		
	</tbody>
</table>