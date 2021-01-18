<?php
	session_start();
if (isset($_POST['string'])) {
	$idSP =$_POST['string'];
	if (isset($_POST['sl'])) {
		$sl = $_POST['sl'];
	}
  	echo "Đã thêm vào giỏ hàng";
    


	$id=$_POST['string'];
	if(isset($_SESSION['cart'][$id]))
	{
	 $qty = $_SESSION['cart'][$id] + 1;
	}
	else
	{
	 $qty=1;
	}
	$_SESSION['cart'][$id]=$qty;
	exit();
	}
?>