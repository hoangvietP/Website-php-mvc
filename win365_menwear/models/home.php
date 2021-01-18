
<?php
class home
{
	
	function index()
	{
      
	}
	 function dangxuat()
	{
		unset($_SESSION['idND']);
		header('location: http://localhost:8000/win365_menwear/view/index.php');
	}

	}

  ?>