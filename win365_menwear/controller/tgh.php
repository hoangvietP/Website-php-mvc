<?php 
session_start();
if ($_SESSION['cart']==null) {
 header('location: http://localhost:8000/win365_menwear/view/index.php?controller=home&action=index');
}else{
require_once 'C:\xampp\htdocs\win365_menwear\view\giohang.php';
require_once 'C:\xampp\htdocs\win365_menwear\models\giohang.php';
}

?>