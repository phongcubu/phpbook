<?php
session_start();
include('../database/connectdb.php')
?>
<?php

// delete condition
if(isset($_GET['xoa_id']))
{
	$sql_query="DELETE FROM tbl_donhang WHERE donhang_id=".$_GET['xoa_id'];
	mysqli_query($con, $sql_query);
	header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>
<!DOCTYPE html>
<head>
<title>Quản lý đơn hàng</title>
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
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script type="text/javascript">

function suauser(id)
{
	if(confirm('bạn muốn thay đổi đơn hàng này chứ?'))
	{
		window.location.href='suaorder.php?suaorder_id='+id;
	}
}
function xoa_id(id)
{
	if(confirm('Bạn muốn xóa đơn hàng này chứ ?'))
	{
		window.location.href='QuanLyDonHang.php?xoa_id='+id;
	}
}
</script>
</head>
<body>
<section id="container">
<?php  
include('include/header.php') ;
include('include/aside.php') ;
?>
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Quản lý Đơn Hàng
                </div>
                
            </div>
            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                        <tr>
                        <th>Tên người đặt</th>
                        <th>Tổng giá tiền</th>
                        <th>Ngày tháng</th>
                        <th>Tình trạng</th>
                        <th style="width:30px;"></th>
                        </tr>
                    </thead>
            <tbody>
            <?php
                    
                    
                    $sql_dh = mysqli_query($con, "SELECT * FROM tbl_donhang");
                    if (mysqli_num_rows($sql_dh)>0) 
                    {
                        while ($row_dh=mysqli_fetch_row($sql_dh)) 
                        {
                            ?>
                            <tr>
                                <td>
                                    <span style="font-size: 17px;">
                                    <?php 
                                    $sql_kh = mysqli_query($con,"SELECT * FROM tbl_khachhang");
                                    $row_kh=mysqli_fetch_row($sql_kh);
                                    if($row_dh[4]==$row_kh[0])
                                    {
                                        echo $row_kh[1];
                                    } 
                                    ?>
                                    </span>
                                </td>
                                <td >
                                    <span style="font-size: 17px;">
                                    <?php
                                    $sql_kh = mysqli_query($con,"SELECT * FROM tbl_khachhang");
                                    $row_kh=mysqli_fetch_row($sql_kh);
                                    $sql_lk = mysqli_query($con,"SELECT *FROM tbl_giohang, tbl_donhang WHERE tbl_giohang.sanpham_id = tbl_donhang.sanpham_id");
                                    $row_lk = mysqli_fetch_row($sql_lk);
                                    $sql_gh= mysqli_query($con,"SELECT SUM(giasanpham) AS tong FROM tbl_giohang");
                                    $row_gh=mysqli_fetch_array($sql_gh);
                                    if($row_dh[4]==$row_kh[0] && $row_lk)
                                    {
                                        echo $row_gh['tong'];
                                    }
                                    ?>
                                    </span>
                                </td>
                                <td ><span style="font-size: 17px;"><?php echo $row_dh[5]; ?></span></td>
                                <td >
                                    <span style="font-size: 17px;">
                                    <?php 
                                    if($row_dh[6]==1)
                                    {
                                        echo 'Đã xử lý';
                                    }
                                    if($row_dh[6]==0)
                                    {
                                        echo 'Đang xử lý';
                                    } 
                                    ?>
                                    </span>
                                </td>
                                <td>
                                    <a href="javascript:xoa_id('<?php echo $row_dh[0]; ?>')" 
                                    class="active styling-edit" ui-toggle-class="">
                                    <i style="font-size: 26px;" class="fa fa-trash-o  text-danger text"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    else
                    {
                            ?>
                            <tr>
                            <td colspan="5">Không tìm thấy dữ liệu cần tìm !</td>
                            </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <footer class="panel-footer">
            <div class="row">
            
            <div class="col-sm-5 text-center">
                <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
            </div>
            <div class="col-sm-7 text-right text-center-xs">                
                <ul class="pagination pagination-sm m-t-none m-b-none">
                <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                <li><a href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href="">4</a></li>
                <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                </ul>
            </div>
            </div>
        </footer>
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
