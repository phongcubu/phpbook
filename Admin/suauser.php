<?php
include('../database/connectdb.php');
session_start();
?>

<?php
if(isset($_GET['suauser_id']))
{
    $sql_query =mysqli_query($con, "SELECT * FROM tbl_khachhang WHERE khachhang_id=".$_GET['suauser_id']);
    $sql_kq = mysqli_fetch_array($sql_query);
}

if(isset($_POST['update_user']))
{
    $tenKH = $_POST['user_product_name'];
    $sql_update = "UPDATE tbl_khachhang SET names='$tenKH' WHERE user_id=".$_GET['suauser_id'];
    if(mysqli_query($con, $sql_update))
    {
        ?>
        <script type="text/javascript">
		alert('cập nhât tên khách hàng thành công');
		window.location.href='quanlykhachhang.php';
		</script>
		<?php
    }
    else
    {
        ?>
		<script type="text/javascript">
		alert('đang xảy ra lỗi ! mong thử lại');
		</script>
		<?php
	}
	// sql query execution function
}
if(isset($_POST['btn-thoat']))
    {
        header("Location: quanlykhachhang.php");
    }
?>
<!DOCTYPE html>
<head>
<title>Cập nhật khach hang</title>
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

<?php  
include('include/header.php') ;
include('include/aside.php') ;
?>
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
        <div class="form-w3layouts">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">Cập nhật khách hàng</header>
                    </section>
                    <div class="panel-body">
                        <div class="position-center">
                            <form role="form" action="#" method="POST">
                                <input type="hidden" name="_token" value="qjXZyD171s2S86tqwOpW7ygKbYI6Nh7QEVRcNwPG">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên khách hàng:</label>
                                    <input type="text" value="<?php echo $sql_kq['names'] ?>" class="form-control" name="user_product_name" id="exampleInputEmail1" placeholder="tên khách hàng">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số Điện Thoại:</label>
                                    <input type="text" value="<?php echo $sql_kq['phone'] ?>" class="form-control" name="user_product_name" id="exampleInputEmail1" placeholder="số điện thoại">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email:</label>
                                    <input type="text" value="<?php echo $sql_kq['email'] ?>" class="form-control" name="user_product_name" id="exampleInputEmail1" placeholder="email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Password:</label>
                                    <input type="text" value="<?php echo $sql_kq['passwords'] ?>" class="form-control" name="user_product_name" id="exampleInputEmail1" placeholder="password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Địa chỉ:</label>
                                    <input type="text" value="<?php echo $sql_kq['address'] ?>" class="form-control" name="user_product_name" id="exampleInputEmail1" placeholder="địa chỉ">
                                </div>
                                <button type="submit" name="update_user" class="btn btn-info">Cập nhật khách hàng</button>
                                <button type="submit" name="btn-thoat" class="btn btn-info">Quay lại</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
</body>
</html>