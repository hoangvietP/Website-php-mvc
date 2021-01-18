<?php 

class thongtin
{
	
	function show()
	{	if (isset($_GET['ten'])) {
				$ten =$_GET['ten'];
		$diachi = $_GET['diachi'];
		$sdt = $_GET['sdt'];
		$email = $_GET['email'];
		$idnd = $_SESSION["idND"];
		$conn = mysqli_connect("localhost","root","","shop") or  die('connect error');
		$query = mysqli_query($conn,"SELECT taikhoan,matkhau FROM nguoidung WHERE idND='$idnd' ");
		$dulieu = mysqli_fetch_array($query);
		$taikhoan = $dulieu['taikhoan'];
		$matkhau = $dulieu['matkhau'];
		$sq = mysqli_query($conn,"UPDATE `nguoidung` SET `idND`='$idnd',`tenND`='$ten',`sdt`='$sdt',`Email`='$email',`diachi`='$diachi',`taikhoan`='$taikhoan',`matkhau`='$matkhau' WHERE idND = '$idnd'");	
		$tt=1;
		if ($tt == 1) {
			header('location: http://localhost:8000/win365_menwear/view/index.php?controller=thongtin&action=show');
		}
	}

	}
}



 ?>