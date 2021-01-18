
<?php
class checkout
{
	
	function check()
	{	
		$conn = mysqli_connect("localhost","root","","shop") or  die('connect error');
        if (isset($_GET['login'])) {
        $username = $_GET['username'];
        $password = $_GET['password'];
        $sql = mysqli_query($conn,"SELECT matkhau,idND FROM nguoidung  Where taikhoan ='$username'");
        $data = mysqli_fetch_array($sql);
        if (isset($data['matkhau'])) {
            if ($data['matkhau']==$password) {
            	header('location: ?controller=home&action=index');
                $_SESSION["idND"] = $data['idND'];  
            }



        }else            {
                ?>
                <script type="text/javascript">alert('tài khoản mật khẩu không chính xác');</script>
                <?php
            }
    }
	}
}




  ?>