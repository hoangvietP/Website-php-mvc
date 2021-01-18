

<?php  
require_once 'C:/xampp/htdocs/win365_menwear/controller/'.$controller.'.php';
switch ($controller) {
	case 'home':
		$controller = new home();
		break;
	case 'checkout':
		$controller = new checkout();
		break;
	case 'thongtin':
		$controller = new thongtin();
		break;
	case 'ttSP':
		$controller = new ttSP();
		break;
	case 'tgh':
		$controller = new tgh();
		break;
	case 'dktk':
		$controller = new dktk();
		break;
	case 'themtt':
		$controller = new themtt();
		break;
	}
$controller -> { $action }();
?>