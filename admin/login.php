<?php
	session_start();
?>
<form>
	<input type="text" name="user">
	<input type="password" name="pw">
	<input type="submit" name="submit" value="submit">
	<input type="submit" name="dangxuat" value="dang xuat">
</form>

<?php 
if (isset($SESSION['id'])) {
	header('location: http://localhost:8000/project/admin/admin.php');
}
else{
	if (isset($_GET['submit'])) {
		if ($_GET['user']=='admin' and $_GET['pw']=='admin' ) {
			$SESSION['id']=1;
			if (isset($SESSION['id'])) {
				header('location: http://localhost:8000/project/admin/admin.php');
			}

		}else{
			?>
				<script type="text/javascript">
					alert('tài khoản mật khẩu không đúng');
				</script>

			<?php
		}
	}
	
}

 ?>