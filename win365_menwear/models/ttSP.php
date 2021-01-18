<?php 
class ttSP
{
	
	function show()
	{
	}
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
}

?>