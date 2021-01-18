<?php
		if (isset($_GET['action'])) {
			
			if ($_GET['action']=='dangxuat') {
				require_once 'C:\xampp\htdocs\win365_menwear\models\home.php';
				if (!isset($_SESSION['idND'])) {
				require_once 'C:\xampp\htdocs\win365_menwear\view\home.php';
				}
			}
		}
		if (!isset($_GET['action']) or $_GET['action'] == 'index') {
				require_once 'C:\xampp\htdocs\win365_menwear\view\home.php';
				require_once 'C:\xampp\htdocs\win365_menwear\models\home.php';
				
		}





 ?>