<?php 
	require_once "././function/myfunction.php";
	$catalog = get_all_catalog();
	disconnect_db();
 ?>
 <a href="admin.php?page=add_catalog">Thêm danh mục sản phẩm</a>
 <table class="table table-hover">
	<thead>
		<tr>
			<th>STT</th>
			<th>Danh mục</th>
		</tr>
	</thead>
	<tbody>
		<?php  
			foreach ($catalog as $item ) {
		?>
			<tr>
				<td><?php echo $item['idDM']; ?></td>
				<td><?php echo $item['tenDM']; ?></td>
				<td>
					<form method="POST" action="views/catalog/delete_catalog.php">
                        <input type="hidden" name="id" value="<?php echo $item['idDM']; ?>"/>
                        <input onclick="return confirm('Bạn có chắc muốn xóa không?');" type="submit" name="delete" value="Xóa"/>
                    </form></td>
				<td><a href="admin.php?page=view_pro&id=<?php echo $item['idDM'] ?>">Xem sản phẩm</a></td>
			</tr>
		<?php
			}
		?>
	</tbody>
</table>