<?php session_start();?>
<!DOCTYPE html>
<html>
   <head>
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
   <body id="home">
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
      <div class="clearfix">
      </div>
      <div class="container_fullwidth">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="special-deal leftbar" style="margin-top:0;">
                <h4 class="title">
                   ƯU ĐÃI
                  <strong>
                  <a href="ưu dãi"></a>
                    ĐẶC BIỆT
                  </strong>
                </h4>
                <!-- hiển thị hàng ưu đãi -->
                <div class="special-item">
                  <div class="product-image">
                    <a href="details.html">
                      <img src="images/products/thum/products-01.png" alt="">
                    </a>
                  </div>
                  <div class="product-info">
                    <p>
                      <a href="details.html">
                        Licoln Corner Unit
                      </a>
                    </p>
                    <h5 class="price">
                      $300.00
                    </h5>
                  </div>
                </div>
                <div class="special-item">
                  <div class="product-image">
                    <a href="details.html">
                      <img src="images/products/thum/products-02.png" alt="">
                    </a>
                  </div>
                  <div class="product-info">
                    <p>
                      <a href="details.html">
                        Licoln Corner Unit
                      </a>
                    </p>
                    <h5 class="price">
                      $300.00
                    </h5>
                  </div>
                </div>
                <div class="special-item">
                  <div class="product-image">
                    <a href="details.html">
                      <img src="images/products/thum/products-03.png" alt="">
                    </a>
                  </div>
                  <div class="product-info">
                    <p>
                      <a href="details.html">
                        Licoln Corner Unit
                      </a>
                    </p>
                    <h5 class="price">
                      $300.00
                    </h5>
                  </div>
                </div>
              </div>
              
              <div class="fbl-box leftbar">
                <h3 class="title">
                  Facebook
                </h3>
                <span class="likebutton">
                  <a href="#">
                    <img src="images/fblike.png" alt="">
                  </a>
                </span>
                <p>
                  12k people like Flat Shop.
                </p>
                <ul>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                </ul>
                <div class="fbplug">
                  <a href="#">
                    <span>
                      <img src="images/fbicon.png" alt="">
                    </span>
                    Facebook social plugin
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-9">
              <div class="checkout-page">
                <ol class="checkout-steps">
                  
                        <div class="col-md-6 col-sm-6">
                          <div class="run-customer">
                            <h5>
                              Đăng nhập
                            </h5>
                            <form action="" method="GET">
                              <div class="form-row">
                                <label class="lebel-abs">
                                  Tài khoản
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="text" class="input namefild" name="username">
                              </div>
                              <div class="form-row">
                                <label class="lebel-abs">
                                  Mật khẩu 
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="text" class="input namefild" name="password">
                              </div>
                              <p class="forgoten">
                                <a href="?controller=dktk&action=dk">
                                  Tạo tài khoản mới.
                                </a>
                              </p>
                             <input type="submit" name="login" value="Login">
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="clearfix">
      </div>
      <div class="footer">
        <div class="footer-info">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="footer-logo">
                  <a href="#">
                    <img src="images/logonew.png" alt="">
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <h4 class="title">
                   
                    LIÊN HỆ
                </h4>
                <p>
                 Số 7 ngõ 87 Lê Văn Hiến, Bắc Từ Liêm, Hà Nội
                </p>
                <p>
                  sdt: 0326673206
                </p>
              </div>
              <div class="col-md-3 col-sm-6">
                <h4 class="title">
                  Hỗ trợ
                </h4>
                <ul class="support">
                  <li>
                    <a href="#">
                      FAQ
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Payment Option
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Booking Tips
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Infomation
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-md-3">
                <h4 class="title">
                  Get Our 
                  <strong>
                    Newsletter 
                  </strong>
                </h4>
                <p>
                  Lorem ipsum dolor ipsum dolor.
                </p>
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
                <p>
                  Copyright © 2019. Designed by 
                  <a href="#">
                    PHAM HOANG VIET
                  </a>
                  . All rights reseved
                </p>
              </div>
              <div class="col-md-6">
                <ul class="social-icon">
                  <li>
                    <a href="#" class="linkedin">
                    </a>
                  </li>
                  <li>
                    <a href="#" class="google-plus">
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                    </a>
                  </li>
                  <li>
                    <a href="#" class="facebook">
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript==================================================-->
    <script type="text/javascript" src="js/jquery-1.10.2.min.js">
    </script>
    <script type="text/javascript" src="js/bootstrap.min.js">
    </script>
    <script defer src="js/jquery.flexslider.js">
    </script>
    <script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js">
    </script>
    <script type="text/javascript" src="js/script.min.js" >
    </script>
  </body>
</html>