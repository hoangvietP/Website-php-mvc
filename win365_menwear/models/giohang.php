<?php

class tgh
{
	
	function gh()
	{	if (!isset($_SESSION['cart'])) {
		header('location: http://localhost:8000/win365_menwear/view/index.php?controller=home&action=index');
	}
		if (isset($_GET['capnhat'])) {
			foreach ($_SESSION['cart'] as $key => $value) {
				$_SESSION['cart'][$key]=$_GET[$key];
				
			}

			header('location:?controller=tgh&action=gh');
		}
	}
	function them()
	{
		$id = $_SESSION["idND"];
		$conn = mysqli_connect("localhost","root","","shop") or  die('connect error');
			$quer = mysqli_query($conn,"SELECT max(idDH) FROM donhang");
				$dt=mysqli_fetch_array($quer);
				$iddh = $dt['max(idDH)']+1;
			$que = mysqli_query($conn,"SELECT tenND,diachi,sdt FROM nguoidung where idND='$id'");
				$data=mysqli_fetch_array($que);
				$tennd = $data['tenND'];
				$sdt = $data['sdt'];
				$diachi = $data['diachi'];
		foreach ($_SESSION['cart'] as $key => $value) {
				$query = mysqli_query($conn,"SELECT dongia,tenSP FROM sanpham where idSP='$key'");
				$dta=mysqli_fetch_array($query);
				$dongia = $dta['dongia'];
				$tensp = $dta['tenSP'];
				if (isset($_SESSION['mau'])) {
									foreach ($_SESSION['mau'] as $ke => $valu) {
					if ($key==$ke) {
						$mau = $valu;
					}
				}
				}
				if (isset($_SESSION['kt'])) {
									foreach ($_SESSION['kt'] as $k => $val) {
					if ($key==$k) {
						$kt = $val;
					}
					
				}
				}else{
					$kt='';
					$mau='';
				}

				$kk = mysqli_query($conn,"INSERT INTO `donhang` (`idDH`, `soluong`, `tenND`, `diachi`, `sdt`, `thanhtien`, `idSP`, `dongia`, `tensanpham`, `mau`,`kt`) VALUES ('$iddh', '$value', '$tennd', '$diachi', '$sdt', 'VND', '$key', '$dongia','$tensp', '$mau', '$kt')" );	
			}?> 
		<script type="text/javascript">
		alert("Đã đặt hàng, Shop sẽ liên hệ tới bạn để xác nhận và xác định thời gian giao hàng! CẢM ƠN! ");
		</script>

<?php }



		function mau()
		{	$mau=$_GET['mau'];
			$id = $_GET['id'];
			$_SESSION['mau'][$id] = $mau;
		}
		function kt()
		{	$kt=$_GET['kt'];
			$id = $_GET['id'];
			$_SESSION['kt'][$id] = $kt;
		}
		function delete()
		{	$id=$_GET['id'];
			unset($_SESSION['cart'][$id]);
			if ($_SESSION['cart'][$id]==null) {
				header('location: ?controller=tgh&action=gh');
			}else{
				header('location: ?controller=home&action=index');
			}
			
		}
	}


?>
