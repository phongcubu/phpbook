<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
include('../database/connectdb.php');
if(!isset($_SESSION['login']))
{
	header('Location: login.php');
}
if(isset($_GET['login'])){
	$dangxuat = $_GET['login'];
	}else{
		$dangxuat = '';
	}
	if($dangxuat=='dangxuat'){
		session_destroy();
		header('Location: login.php');
	}

$sql_admin = mysqli_query($con,"SELECT * FROM tbl_admin");
$row_admin = mysqli_fetch_array($sql_admin);
?>
<!DOCTYPE html>
<head>
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="../index.php" class="logo">
        PSP BOOK
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="nav notify-row" id="top_menu">
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="../images/shop/logo.png">
                <span class="username"><?php echo $row_admin['admin_name'];?></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Thông tin</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Cài đặt</a></li>
                <li><?php echo $_SESSION['login'] ?><a href="?login=dangxuat"><i class="fa fa-key"></i> Đăng xuất</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="admin.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Tổng quát</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Đơn hàng</span>
                    </a>
                    <ul class="sub">
						<li><a href="them_don_hang.php">Thêm đơn hàng</a></li>
						<li><a href="QuanLyDonHang.php">Quản lý đơn hàng</a></li>
                    </ul>
                </li>
				<li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-users"></i>
                        <span>Khách hàng</span>
                    </a>
                    <ul class="sub">
						<li><a href="ThemKH.php">Thêm khách hàng</a></li>
						<li><a href="QuanlyKH.php">Quản lý khách hàng</a></li>
                    </ul>
                </li>
				<li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Danh mục sản phẩm</span>
                    </a>
                    <ul class="sub">
						<li><a href="ThemDanhMucSP.php">Thêm danh muc sản phẩm</a></li>
						<li><a href="LietkeDMSP.php">Liệt kê danh mục sản phẩm</a></li>
                    </ul>
                </li>
				<li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-bank"></i>
                        <span>Thương hiệu sản phẩm</span>
                    </a>
                    <ul class="sub">
						<li><a href="ThemTH.php">Thêm thương hiệu sản phẩm</a></li>
						<li><a href="LietkeTH.php">Liệt kê thương hiệu sản phẩm</a></li>
                    </ul>
                </li>
				<li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-archive"></i>
                        <span>Sản phẩm</span>
                    </a>
                    <ul class="sub">
						<li><a href="ThemTH.php">Thêm sản phẩm</a></li>
						<li><a href="QuanlySP.php">Quản lý sản phẩm</a></li>
                    </ul>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<!-- //market-->
		<div class="market-updates">
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-2">
					<a href="../Admin/QuanlySP.php">
						<div class="col-md-4 market-update-right">
							<i class="fa fa-eye"> </i>
						</div>
						<div class="col-md-8 market-update-left">
							<h4>Sản phẩm</h4>
							<h3>
								0
							</h3>
							<p>Đang được bán</p>
						</div>
						<div class="clearfix"> </div>
					</a>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-1">
					<a href="../Admin/QuanlyKH.php">
						<div class="col-md-4 market-update-right">
							<i class="fa fa-users" ></i>
						</div>
						<div class="col-md-8 market-update-left">
							<h4>Khách hàng</h4>
							<h3>0</h3>
							<p>Đã đăng ký</p>
						</div>
						<div class="clearfix"> </div>
					</a>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-3">
					<a href="../Admin/LietkeTH.php">
						<div class="col-md-4 market-update-right">
							<i class="fa fa-bank fa-3x" style="color: white;"></i>
						</div>
						<div class="col-md-8 market-update-left">
							<h4>Số thương hiệu</h4>
							<h3>
								0
							</h3>
							<p>Đang hợp tác</p>
						</div>
						<div class="clearfix"> </div>
					</a>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-4">
					<a href="../Admin/QuanLyDonHang.php">
						<div class="col-md-4 market-update-right">
							<i class="fa fa-shopping-cart" aria-hidden="true"></i>
						</div>
						<div class="col-md-8 market-update-left">
							<h4>Số đơn hàng</h4>
							<h3>0</h3>
							<p>Đã bán</p>
						</div>
						<div class="clearfix"> </div>
					</a>
				</div>
			</div>
		<div class="clearfix"> </div>
	</div>	
		<!-- //market-->
</section>
<!-- footer -->
		<div class="footer">
			<div class="wthree-copyright">
				<p>© 2021 PSP BOOK | Thiết kế bởi: Phong-Sơn-Phương</p>
			</div>
		</div>
<!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->	
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	jQuery('.small-graph-box').hover(function() {
		jQuery(this).find('.box-button').fadeIn('fast');
	}, function() {
		jQuery(this).find('.box-button').fadeOut('fast');
	});
	jQuery('.small-graph-box .box-close').click(function() {
		jQuery(this).closest('.small-graph-box').fadeOut(200);
		return false;
	});
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
			
			],
			lineColors:['#eb6f6f','#926383','#eb6f6f'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	});
	</script>
<!-- calendar -->
	<script type="text/javascript" src="js/monthly.js"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				
			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>
	<!-- //calendar -->
</body>
</html>
