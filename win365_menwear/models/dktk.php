<?php 

class dktk
{
	
	function dk()
	{	if (isset($_GET['ten'])) {
		$ten =$_GET['ten'];
		$diachi = $_GET['diachi'];
		$sdt = $_GET['sdt'];
		$email = $_GET['email'];
		$password = $_GET['password'];
		$username = $_GET['username'];
		$conn = mysqli_connect("localhost","root","","shop") or  die('connect error');?>
		<?php
		$query = mysqli_query($conn,"SELECT taikhoan FROM nguoidung WHERE taikhoan='$username' ");
		$dulieu = mysqli_fetch_array($query);
		$quer = mysqli_query($conn,"SELECT max(idND) FROM nguoidung");
		$dulie = mysqli_fetch_array($quer);
		if ($dulieu['taikhoan']==$username) {?>
			   <script type="text/javascript"> alert('tài khoản đã tồn tại')</script>

		<?php	exit();}
		if ($dulieu['taikhoan']!=$username) {
					$id = $dulie['max(idND)']+1;
					$sq = mysqli_query($conn,"INSERT INTO `nguoidung` (`idND`, `tenND`, `sdt`, `Email`, `diachi`, `taikhoan`, `matkhau`) VALUES ('$id', '$ten', '$sdt', '$eamil', '$diachi', '$username', '$password');");	
					$tt=1;
					if ($tt == 1) {
						$_SESSION["idND"] = $id;
						header('location: http://localhost:8000/win365_menwear/view/index.php');
		}
		}

	}

	}
}

 ?>