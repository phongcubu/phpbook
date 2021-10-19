
<?php
session_start();
include('../database/connectdb.php');
if(!isset($_SESSION['login']))
{
	header('Location: index.php');
}
if(isset($_GET['login'])){
	$dangxuat = $_GET['login'];
}else{
	$dangxuat = '';
}
if($dangxuat=='dangxuat'){
	session_destroy();
	header('Location: index.php');
}
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
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
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
<?php 
    // header
    include('include/header.php');
    //  slider
    include('include/aside.php');
?>
<!--main content start-->
<section id="main-content">
	
	<section class="wrapper">
		<div class="row">
			<form autocomplete="off" method="POST">
				<div class="col-md-2">
					<p>Từ ngày: <input type="date" class="form-control" name="date1" value="<?php echo isset($_POST['date1']) ? $_POST['date1'] : '' ?>"> </p><br>
				</div>
				<div class="col-md-2">
					<p>Đến ngày: <input type="date" class="form-control" name="date2" value="<?php echo isset($_POST['date2']) ? $_POST['date2'] : '' ?>"> </p>
				</div><br>
				<button class="btn btn-primary" name="search"><span class="glyphicon glyphicon-search"></span></button><a href="admin.php" type="button" class="btn btn-success"><span class = "glyphicon glyphicon-refresh"><span></a>
			</form>

		</div>
		<?php
		if(isset($_POST['search'])){
			$date1 = date("Y-m-d", strtotime($_POST['date1']));
			$date2 = date("Y-m-d", strtotime($_POST['date2']));
			$lk_sanpham = mysqli_query($con,"SELECT COUNT(sanpham_id) AS soluongsp FROM tbl_sanpham WHERE sanpham_active ='1' AND sanpham_time BETWEEN '$date1 ' AND '$date2 '");
			$fetch1= mysqli_fetch_array($lk_sanpham);
			$lk_khachhang = mysqli_query($con,"SELECT COUNT(khachhang_id) AS soluongkh FROM tbl_khachhang WHERE timee BETWEEN '$date1' AND '$date2'");
			$fetch2=mysqli_fetch_array($lk_khachhang);
			$lk_tintuc = mysqli_query($con,"SELECT COUNT(tintuc_id) AS soluongtin FROM tbl_tintuc WHERE hienthi ='1' AND ngaythang BETWEEN '$date1' AND '$date2'");
			$fetch3=mysqli_fetch_array($lk_tintuc);
			$lk_donhang = mysqli_query($con,"SELECT COUNT(donhang_id) AS soluongdon FROM tbl_donhang WHERE ngaythang BETWEEN '$date1' AND '$date2'");
			$fetch4=mysqli_fetch_array($lk_donhang);
		?>
			<!-- //market-->
			<div class="market-updates">
				<div class="col-md-3 market-update-gd">
					<div class="market-update-block clr-block-2">
						<a href="quanlisp.php">
							<div class="col-md-4 market-update-right">
								<i class="fa fa-eye"> </i>
							</div>
							<div class="col-md-8 market-update-left">
								<h4>Sản phẩm</h4>
								<h3>
									<?php echo $fetch1['soluongsp'] ?>
								</h3>
								<p>Đang được bán</p>
							</div>
							<div class="clearfix"> </div>
						</a>
					</div>
				</div>
				<div class="col-md-3 market-update-gd">
					<div class="market-update-block clr-block-1">
						<a href="quanlykhachhang.php">
							<div class="col-md-4 market-update-right">
								<i class="fa fa-users" ></i>
							</div>
							<div class="col-md-8 market-update-left">
								<h4>Khách hàng</h4>
								<h3>
									<?php
									echo $fetch2['soluongkh'];
									?>
								</h3>
								<p>Đã đăng ký</p>
							</div>
							<div class="clearfix"> </div>
						</a>
					</div>
				</div>
				<div class="col-md-3 market-update-gd">
					<div class="market-update-block clr-block-3">
						<a href="quanly_tintuc.php">
							<div class="col-md-4 market-update-right">
								<i class="fa fa-newspaper-o fa-3x" style="color: white;"></i>
							</div>
							<div class="col-md-8 market-update-left">
								<h4>Số Tin Tức</h4>
								<h3>
									<?php
									echo $fetch3['soluongtin'];
									?>
								</h3>
								<p>Đã đăng lên</p>
							</div>
							<div class="clearfix"> </div>
						</a>
					</div>
				</div>
				<div class="col-md-3 market-update-gd">
					<div class="market-update-block clr-block-4">
						<a href="QuanLyDonHang.php">
							<div class="col-md-4 market-update-right">
								<i class="fa fa-shopping-cart" aria-hidden="true"></i>
							</div>
							<div class="col-md-8 market-update-left">
								<h4>Số đơn hàng</h4>
								<h3>
									<?php
									echo $fetch4['soluongdon'];
									?>
								</h3>
								<p>Đã bán</p>
							</div>
							<div class="clearfix"> </div>
						</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>	
		<!-- //market-->
		<?php
			// }
			// else{
			// 	echo '0';
			// }
		}
		else{
		$lk_sanpham = mysqli_query($con,"SELECT COUNT(sanpham_id) AS soluongsp FROM tbl_sanpham WHERE sanpham_active ='1'");
		$lk_khachhang = mysqli_query($con,"SELECT COUNT(khachhang_id) AS soluongkh FROM tbl_khachhang");
		$lk_tintuc = mysqli_query($con,"SELECT COUNT(tintuc_id) AS soluongtin FROM tbl_tintuc WHERE hienthi ='1'");
		$lk_donhang = mysqli_query($con,"SELECT COUNT(donhang_id) AS soluongdon FROM tbl_donhang");
		$fetch1=mysqli_fetch_array($lk_sanpham);
		$fetch2=mysqli_fetch_array($lk_khachhang);
		$fetch3=mysqli_fetch_array($lk_tintuc);
		$fetch4=mysqli_fetch_array($lk_donhang);
		
		?>
		<!-- //market-->
		<div class="market-updates">
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-2">
					<a href="quanlisp.php">
						<div class="col-md-4 market-update-right">
							<i class="fa fa-eye"> </i>
						</div>
						<div class="col-md-8 market-update-left">
							<h4>Sản phẩm</h4>
							<h3>
								<?php
							
								echo $fetch1['soluongsp'];
								?>
							</h3>
							<p>Đang được bán</p>
						</div>
						<div class="clearfix"> </div>
					</a>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-1">
					<a href="quanlykhachhang.php">
						<div class="col-md-4 market-update-right">
							<i class="fa fa-users" ></i>
						</div>
						<div class="col-md-8 market-update-left">
							<h4>Khách hàng</h4>
							<h3>
								<?php
								echo $fetch2['soluongkh'];
								?>
							</h3>
							<p>Đã đăng ký</p>
						</div>
						<div class="clearfix"> </div>
					</a>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-3">
					<a href="quanly_tintuc.php">
						<div class="col-md-4 market-update-right">
							<i class="fa fa-newspaper-o fa-3x" style="color: white;"></i>
						</div>
						<div class="col-md-8 market-update-left">
							<h4>Số Tin Tức</h4>
							<h3>
								<?php
								echo $fetch3['soluongtin'];
								?>
							</h3>
							<p>Đã đăng lên</p>
						</div>
						<div class="clearfix"> </div>
					</a>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-4">
					<a href="QuanLyDonHang.php">
						<div class="col-md-4 market-update-right">
							<i class="fa fa-shopping-cart" aria-hidden="true"></i>
						</div>
						<div class="col-md-8 market-update-left">
							<h4>Số đơn hàng</h4>
							<h3>
								<?php
								echo $fetch4['soluongdon'];
								?>
							</h3>
							<p>Đã bán</p>
						</div>
						<div class="clearfix"> </div>
					</a>
				</div>
			</div>
		<div class="clearfix"> </div>
	</div>	
		<!-- //market-->
	<?php }?>
    <!-- footer -->
    <div class="footer">
			<div class="wthree-copyright">
				<p>© 2021 PSP BOOK | Thiết kế bởi: Phong-Sơn-Phương</p>
			</div>
		</div>
<!-- / footer -->
</section>

</section>
<!--main content end-->
</section>


<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<!-- filter-tables -->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
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
