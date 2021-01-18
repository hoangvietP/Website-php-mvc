
<?php ob_start();
require_once 'C:\xampp\htdocs\win365_menwear\models\conn.php';
if (isset($_GET['controller'],$_GET['action']) ) {
	$controller = $_GET['controller'];
	$action = $_GET['action'];
}

else {
	$controller = 'home';
	$action = 'index';
}
if ( isset($_GET['login'])  ) {
		$controller = 'checkout';
		$action = 'check';}
if ( isset($_GET['suatt'])  ) {
		$controller = 'thongtin';
		$action = 'show';}
if ( isset($_GET['capnhat'])  ) {
		$controller = 'tgh';
		$action = 'gh';}
if ( isset($_GET['dktk'])  ) {
		$controller = 'dktk';
		$action = 'dk';}
if ( isset($_GET['themtt'])  ) {
		$controller = 'themtt';
		$action = 'them';}
require_once 'C:\xampp\htdocs\win365_menwear\view\layout.php';
?>