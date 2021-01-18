<?php 
	global $conn;
	// Hàm kết nối database
	function connect_db()
	{
    	global $conn;
    	if (!$conn){
        	$conn = mysqli_connect('localhost', 'root', '', 'shop') or die ('Can\'t not connect to database');
       		mysqli_set_charset($conn, 'utf8');
    	}
	}
	// Hàm ngắt kết nối
	function disconnect_db()
	{
    global $conn;
    	if ($conn){
        	mysqli_close($conn);
    	}
	}
	// Hàm lấy tất cả đơn hàng
	function get_all_order()
	{
   		global $conn;
    	connect_db();
    	$sql = "SELECT *FROM donhang";
		$query = mysqli_query($conn, $sql);
    	$result = array();
    	if ($query){
       		while ($row = mysqli_fetch_assoc($query)){
      	     	$result[] = $row;
        	}
    	}
    	return $result;
	}
	//Hàm thêm đơn hàng
	function add_order($soluong, $tenND, $diachi, $sdt, $idSP, $dongia)
	{
    	global $conn;
    	connect_db();
		$soluong = addslashes($soluong);
		$tenND = addslashes($tenND);
		$diachi = addslashes($diachi);
		$sdt = addslashes($sdt);
		$idSP = addslashes($idSP);
		$dongia = addslashes($dongia);
		$sql = "INSERT INTO donhang (soluong,tenND,diachi,sdt,idSP,dongia) VALUES ($soluong','$tenND','$diachi','$sdt','$idSP','$dongia')";
		$query = mysqli_query($conn, $sql);
    	return $query;
	}
	// Hàm sửa đơn hàng
	function edit_order($soluong, $tenND, $diachi, $sdt, $idSP, $dongia)
	{
  		global $conn;
    	connect_db();
   		$soluong = addslashes($soluong);
		$tenND = addslashes($tenND);
		$diachi = addslashes($diachi);
		$sdt = addslashes($sdt);
		$tensanpham = addslashes($tensanpham);
		$dongia = addslashes($dongia);
		$mau = addslashes($mau);
		$kt = addslashes($kt);
    	$sql = "UPDATE `donhang` SET `idDH`='$idDH',`soluong`='$soluong',`tenND`='$tenND',`diachi`='$diachi',`sdt`='$sdt',`thanhtien`='',`idSP`='',`dongia`='$dongia',`tensanpham`='$tensanpham',`mau`='$mau',`kt`='$kt' WHERE idDH= '$idDH'";
		$query = mysqli_query($conn,$sql);
    	return $query;
	}
	// Hàm xóa đơn hàng
	function delete_order($idDH)
	{
    	global $conn;
    	connect_db();
   		$sql = "DELETE FROM donhang WHERE idDH= $idDH";
		$query = mysqli_query($conn, $sql);
    	return $query;
	}

	// Hàm lấy tất cả danh mục
	function get_all_catalog()
	{
   		global $conn;
    	connect_db();
    	$sql = "SELECT *FROM danhmuc";
		$query = mysqli_query($conn, $sql);
    	$result = array();
    	if ($query){
       		while ($row = mysqli_fetch_assoc($query)){
      	     	$result[] = $row;
        	}
    	}
    	return $result;
	}
	// Hàm lấy danh mục theo ID
	function get_catalog($id)
	{
    	global $conn;
    	connect_db();
    	$sql_one = "SELECT *FROM danhmuc WHERE idDM=$id";
    	$query_one = mysqli_query($conn, $sql_one);
    	$result_one = array();
    	if (mysqli_num_rows($query_one) > 0){
        	$row_one = mysqli_fetch_assoc($query_one);
       		$result_one = $row_one;
    	}
    	return $result_one;
	}
	//Hàm thêm danh mục
	function add_catalog($danhmuc)
	{
    	global $conn;
    	connect_db();
		$sql = "INSERT INTO danhmuc(tenDM) VALUES ('$danhmuc')";
		$query =mysqli_query($conn,$sql);
    	return $query;
	}
	// Hàm xóa danh mục
	function delete_catalog($idDM)
	{
    	global $conn;
    	connect_db();
   		$sql = "DELETE FROM danhmuc WHERE idDM= $idDM";
		$query = mysqli_query($conn, $sql);
    	return $query;
	}

	// Hàm lấy tất cả sản phẩm theo danh mục
	function get_all_product($id)
	{
   		global $conn;
    	connect_db();
    	$sql = "SELECT *FROM sanpham WHERE idDM=$id";
		$query = mysqli_query($conn, $sql);
    	$result = array();
    	if ($query){
       		while ($row = mysqli_fetch_assoc($query)){
      	     	$result[] = $row;
        	}
    	}
    	return $result;
	}
	//Hàm thêm sản phẩm theo danh mục
	function add_product( $soluong, $tenSP, $idDM, $dongia)
	{
    	global $conn;
    	connect_db();
		$soluong = addslashes($soluong);
		$tenSP = addslashes($tenSP);
		$idDM = addslashes($idDM);
		$dongia = addslashes($dongia);
		$idSP = addslashes($idSP);
		$sql = "INSERT INTO sanpham (soluong,tenSP,idDM,dongia) VALUES ('$soluong', '$tenSP', '$idDM', '$dongia')";
		$query = mysqli_query($conn,$sql);
    	return $query;
	}
	// Hàm sửa sản phẩm theo danh mục
	// Hàm xóa sản phẩm theo danh mục
	function delete_product($id)
	{
    	global $conn;
    	connect_db();
   		$sql = "DELETE FROM sanpham WHERE idSP= $id";
		$query = mysqli_query($conn, $sql);
    	return $query;
	}

	// Hàm lấy tất cả người dùng
	function get_all_user()
	{
   		global $conn;
    	connect_db();
    	$sql = "SELECT *FROM nguoidung";
		$query = mysqli_query($conn, $sql);
    	$result = array();
    	if ($query){
       		while ($row = mysqli_fetch_assoc($query)){
      	     	$result[] = $row;
        	}
    	}
    	return $result;
	}
	//Hàm lấy thông tin admin
	function get_admin()
	{
		global $conn;
    	connect_db();
    	$sql_ad = "SELECT *FROM nguoidung WHERE note=01";
		$query_ad = mysqli_query($conn, $sql_ad);
    	$result_ad = mysqli_fetch_array($query_ad);
    	return $result_ad;
	}

	// Hàm xóa người dùng
	function delete_user($id)
	{
    	global $conn;
    	connect_db();
   		$sql = "DELETE FROM nguoidung WHERE idND= $id";
		$query = mysqli_query($conn, $sql);
    	return $query;
	}
 ?>