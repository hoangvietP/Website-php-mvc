<?php session_start();?>
<?php
if(!isset($_SESSION["trang"])){$_SESSION["trang"] = 0;}
 ?>
<!DOCTYPE html>
<html>
   <head>
    <script type="text/javascript" src="https://code.jquery.com/jquery-latest.pack.js"></script>

      <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="images/win365.png">
      <title>Welcome to Win365 shop</title>
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
      <link href="css/sequence-looptheme.css" rel="stylesheet" media="all"/>
      <link href="css/style.css" rel="stylesheet">
      <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
   </head>
   <body >
<div class="wrapper">
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-md-2 col-sm-2">
                     <div class="logo"><a href="?controller=home&action=index"><img src="images/logonew.png"></a></div>
                  </div>
                  <div class="col-md-10 col-sm-10">
                     <div class="header_top">
                        <div class="row">
                           <div class="col-md-3">
                              
                           </div>
                           <div class="col-md-6">
                              <ul class="topmenu">
                                 <li><a href="">Giới thiệu</a></li>
                                 <li><a href="">Tin mới</a></li>
                                 <li><a href="">Dịch vụ</a></li>
                                 <li><a href="">Tuyển dụng</a></li>
                                 <li><a href="">Truyền thông</a></li>
                                 <li><a href="">Hỗ trợ</a></li>
                              </ul>
                           </div>
                           <div class="col-md-3">
                              <ul class="usermenu">
                                 <li><a href='<?php if (isset($_SESSION["idND"])){echo "?controller=thongtin&action=show";}; if (!isset($_SESSION["idND"])){echo "?controller=dktk&action=dk";};?>' class="log"><?php if (isset($_SESSION["idND"])){echo "Thông tin";}; if (!isset($_SESSION["idND"])){echo "Đăng ký";};?></a></li>
                                 <li><a href='<?php if (isset($_SESSION["idND"])){echo "?controller=home&action=dangxuat";}; if (!isset($_SESSION["idND"])){echo "?controller=checkout&action=check";};?>' class="reg"><?php if(isset($_SESSION["idND"])){echo "Đăng Xuất";};if (!isset($_SESSION["idND"])){echo "Đăng Nhập";};?></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="header_bottom">
                        <ul class="option">
                           <li id="search" class="search">
                              <form method="GET" action=""><input class="search-submit" type="submit" value=""><input class="search-input" placeholder="Enter your search term..." type="text" value="" name="search"></form>
                           </li>
                           <li class="option-cart">
                              <a href="?controller=tgh&action=gh" class="cart-icon">cart <span class="cart_no"></span></a>
                           </li>
                        </ul>
                        <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only"></span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                        <div class="navbar-collapse collapse">
                           <ul class="nav navbar-nav">
                              <li><a href="?controller=home&action=index">Home</a></li>
                              <li><a href="?controller=home&action=index">HOT</a></li>
                              <li><a href="?controller=home&action=index&iddm=5">Phụ Kiện</a></li>
                              <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Danh mục</a>
                                 <div class="dropdown-menu mega-menu">
                                    <div class="row">
                                       <div class="col-md-6 col-sm-6">
                                          <ul class="mega-menu-links">
                                             <li><a href="?controller=home&action=index&iddm=2">Giày nam</a></li>
                                             <li><a href="?controller=home&action=index&iddm=3">Áo sơ mi</a></li>
                                             <li><a href="?controller=home&action=index&iddm=1">Đồng hồ nam</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li><a href="?controller=home&action=index&iddm=2">Giày</a></li>
                              <li><a href="?controller=home&action=index&iddm=3">Sơ mi</a></li>
                              <li><a href="?controller=home&action=index&iddm=1">Đồng hồ</a></li>
                              <li><a href="?controller=home&action=index&iddm=4">Quần nam</a></li>

                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
<!-- header chạy đầu -->
         <div class="clearfix"></div>
         <div class="hom-slider">
            <div class="container">
               <div id="sequence">
                  <div class="sequence-prev"><i class="fa fa-angle-left"></i></div>
                  <div class="sequence-next"><i class="fa fa-angle-right"></i></div>
                  <ul class="sequence-canvas">
                     <li class="animate-in">
                        <div class="flat-caption caption1 formLeft delay300 text-center"><span class="suphead">Ưu đãi tháng 11</span></div>
                        <div class="flat-caption caption2 formLeft delay400 text-center">
                           <h1>Mặc ấm mùa đông</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500 text-center">
                           <p>Phụ kiện và quần áo giữ ấm mùa đông không GẤU</p>
                        </div>
                        <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="#">Xem thêm</a></div>
                        <div class="flat-image formBottom delay200" data-duration="5" data-bottom="true"><img src="img/slide.jpg" alt="" style="position: relative;top:50px;"></div>
                     </li>
                     <li>
                        <div class="flat-caption caption2 formLeft delay400">
                           <h1>Collection For Winter</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500">
                           <h2>Etiam velit purus, luctus vitae velit sedauctor<br>egestas diam, Etiam velit purus.</h2>
                        </div>
                        <div class="flat-button caption5 formLeft delay600"><a class="more" href="#">More Details</a></div>
                        <div class="flat-image formBottom delay200" data-bottom="true"><img src="img/ab1.jpg" alt=""></div>
                     </li>
                     <li>
                        <div class="flat-caption caption2 formLeft delay400 text-center">
                           <h1>New Fashion of 2019</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500 text-center">
                           <p>Cùng mua sắm đón mùa đông <br>Tặng người thương những món quà ấm lòng</p>
                        </div>
                        <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="#">Xem thêm</a></div>
                        <div class="flat-image formBottom delay200" data-bottom="true"><img src="img/ab1.jpg" alt=""></div>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="promotion-banner">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4 col-sm-4 col-xs-4">
<!-- ảnh đầu trang (ưu dãi) -->
                        <div class="promo-box"><img src="img/G.jpg" alt=""></div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="img/GG.jpg" alt=""></div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="img/GGG.jpg" alt=""></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>





         <?php
         if (!isset($conn)) {
            $conn = mysqli_connect("localhost","root","","shop") or  die('connect error');
            return $conn;
         }
         if(isset($_GET['a'])){$a = $_GET['a']+2;}
         if (!isset($a)){$a=0;}
         if (isset($_GET['iddm'])) {
                     $iddm=$_GET['iddm'];
                     $sql ="SELECT tieude,tenSP,dongia,anh1,idSP FROM sanpham WHERE idSP >'$a' and idDM='$iddm'";
                     $query = mysqli_query($conn,$sql);  
         }
         else{
         $sql ="SELECT tieude,tenSP,dongia,anh1,idSP FROM sanpham WHERE idSP >'$a' ";
         $query = mysqli_query($conn,$sql);}
         ?>




<!-- hiển thị sp -->
         <div class="clearfix"></div>
         <div class="container_fullwidth">
            <div class="container">
               <div class="hot-products">
                  <h3 class="title"><strong>Hot</strong> Products</h3>
                  <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">&gt;</a></div>
                  <ul id="hot">
                     <li>
                        <div class="row">

                           <?php $i=0; while($v = mysqli_fetch_array($query)){ $i+=1;?>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <?php echo "<div class='offer'>"?><?php echo $v['tieude'];?></div>
                                 <form method="GET"><div class="thumbnail"><a href="?controller=ttSP&action=show&idSP=<?php echo $v['idSP'];?>"><img src="<?php echo $v['anh1'] ?>" alt="Product Name"></a></div></form>
                                 <div class="productname"><?php echo $v['tenSP'];?>                                <script>
                                 function add<?php echo $i ?>(){
                                     $.ajax({
                                         url: 'xladdd.php',
                                         type: 'POST',
                                         dataType: "TEXT",
                                         data: 'string=<?php echo $v['idSP']; ?>',
                                         success: function (data) {
                                             if (data !='') { alert(data);}
                                         }
                                     });
                                 };
                                 </script></div>
                                 <h4 class="price"><?php echo $v['dongia'];?> </h4>
                                 <div class="button_group"><input type="button" name="btn" id="btn<?php echo $i?>" class="button add-cart" value="Them vao gio" onclick="add<?php echo $i?>()"></div>
                              </div>
                           </div>

                           <?php  if($i==8){break;}?>
                           <?php }?>                             
                        </div> 
                     </li>
                 </ul>
               </div>
               <div class="clearfix"></div> 
               <div class="container_fullwidth">
            <div class="container">
               <form method="GET" style="position: relative; left: 90%; width: 60px;"><a href="?controller=home&action=index&a=<?php echo $a ?>" name="b"  class="offer">khac</a></form> 
               <div class="hot-products">

                  <h3 class="title"><strong>Xem thêm</strong> các sản phẩm khác</h3>
              </div>  
            </div>
         </div>
      </div>
               <!-- hien thi them sp -->

         <div class="clearfix" style="height: -10%"></div>
         <div class="footer">
            <div class="footer-info">
               <div class="container">
                  <div class="row">
                     <div class="col-md-3">
                        <div class="footer-logo"><a href="#"><img src="images/logonew.png" alt=""></a></div>
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <h4 class="title">Contact <strong>Info</strong></h4>
                                        <p>
                  so 7 ngo 87 duong LE VAN HIEN, BAC TU LIEM, HA NOI.
                </p>
                <p>
                  Call Us : (084) 1900 1008
                </p>
                <p>
                  Email : michael@leebros.us
                </p>
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <h4 class="title">Customer<strong> Support</strong></h4>
                        <ul class="support">
                           <li><a href="#">FAQ</a></li>
                           <li><a href="#">Payment Option</a></li>
                           <li><a href="#">Booking Tips</a></li>
                           <li><a href="#">Infomation</a></li>
                        </ul>
                     </div>
                     <div class="col-md-3">
                        <h4 class="title">Get Our <strong>Newsletter </strong></h4>
                        <p>Lorem ipsum dolor ipsum dolor.</p>
                        <form class="newsletter">
							<input type="text" name="" placeholder="Type your email....">
							<input type="submit" value="SignUp" class="button">
						</form>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright-info">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <p>Copyright © 2019. Designed by <a href="#">PHAM HOANG VIET</a>. All rights reseved</p>
                     </div>
                     <div class="col-md-6">
                        <ul class="social-icon">
                           <li><a href="#" class="linkedin"></a></li>
                           <li><a href="#" class="google-plus"></a></li>
                           <li><a href="#" class="twitter"></a></li>
                           <li><a href="#" class="facebook"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Bootstrap core JavaScript==================================================-->
	  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	  <script type="text/javascript" src="js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="js/jquery.sequence-min.js"></script>
	  <script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
	  <script defer src="js/jquery.flexslider.js"></script>

   </body>

</html>
