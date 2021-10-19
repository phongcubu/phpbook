<?php
session_start();
include('../database/connectdb.php')
?>
<?php
if(isset($_GET['magiaodich'])){
    $magiaodich = $_GET['magiaodich'];
}else{
    $magiaodich = '';
}
$sql_giaodich = mysqli_query($con,"SELECT * FROM tbl_giaodich,tbl_sanpham WHERE tbl_giaodich.sanpham_id=tbl_sanpham.sanpham_id AND tbl_giaodich.magiaodich='$magiaodich' ORDER BY tbl_giaodich.giaodich_id DESC"); 

if(isset($_POST['btn-thoat']))
    {
        header("Location:quanlykhachhang.php");
    }
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

</head>
<body>

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
        Liệt kê lịch sử đơn hàng
        </div>
        <div class="table-responsive">   
        <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                    <th>Thứ tự</th>
                    <th>Mã giao dịch</th>
                    <th>Tên sản phẩm</th>
                    <th>Ngày đặt</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    if (mysqli_num_rows($sql_giaodich)>0) 
                    {
                        $i = 0;
                        while($row_giaodich = mysqli_fetch_array($sql_giaodich)){ 
                        $i++;
                            ?>
                                    <tr>
                                        <td><span style="font-size: 17px;"><?php echo $i; ?></span></td>
                                        <td ><span style="font-size: 17px;"><?php echo $row_giaodich['magiaodich']; ?></span></td>
                                        <td ><span style="font-size: 17px;"><?php echo $row_giaodich['sanpham_name']; ?></span></td>
                                        <td ><span style="font-size: 17px;"><?php echo $row_giaodich['ngaythang']; ?></span></td>
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
            
            <form action="" method="POST">
            <button type="submit" name="btn-thoat" class="btn btn-info">Quay lại</button>
            </form>
        </footer>
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
