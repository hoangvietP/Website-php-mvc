<?php	session_start();

	$id=$_POST['string'];
	if(isset($_SESSION['cart'][$id]))
	{
	 $qty = $_SESSION['cart'][$id] + 1;
	}
	if (isset($_POST['sl'])) {
		$_SESSION['cart'][$id]=$_POST['sl'];
		
	}
	else
	{
	 $qty=1;
	 $_SESSION['cart'][$id]=1;

	}
	 echo "Đã thêm vào giỏ hàng" ;	


?>