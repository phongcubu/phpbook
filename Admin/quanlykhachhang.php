<?php
session_start();
include('../database/connectdb.php')
?>
<?php
// delete condition
if(isset($_GET['xoa_id']))
{
	$sql_query="DELETE FROM tbl_khachhang WHERE khachhang_id=".$_GET['xoa_id'];
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
function xemgiaodich(id)
{

	window.location.href='xemgiaodich.php?magiaodich='+id;

}

function xoa_id(id)
{
	if(confirm('Bạn muốn xóa khách hàng này chứ ?'))
	{
		window.location.href='quanlykhachhang.php?xoa_id='+id;
	}
}
</script>
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
        Quản lý khách hàng
        </div>
        <div class="row">
			<form autocomplete="off" method="POST">
				<div class="col-md-2">
					<p>Từ ngày: <input type="date" class="form-control" name="date1" value="<?php echo isset($_POST['date1']) ? $_POST['date1'] : '' ?>"> </p><br>
				</div>
				<div class="col-md-2">
					<p>Đến ngày: <input type="date" class="form-control" name="date2" value="<?php echo isset($_POST['date2']) ? $_POST['date2'] : '' ?>"> </p>
				</div><br>
				<button class="btn btn-primary" name="search"><span class="glyphicon glyphicon-search"></span></button><a href="quanlykhachhang.php" type="button" class="btn btn-success"><span class = "glyphicon glyphicon-refresh"><span></a>
			</form>

		</div>
        <div class="table-responsive">
        
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th>Thứ Tự</th>
                        <th>Tên khách hàng </th>
                        <th>Số điện thoại </th>
                        <th>Email </th>
                        <th>Địa chỉ</th>
                        <th>Ngày mua</th>
                        <th >Lịch sử giao dịch</th>
                        
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    if (isset($_POST['search'])) {
                        $date1 = date("Y-m-d", strtotime($_POST['date1']));
		                $date2 = date("Y-m-d", strtotime($_POST['date2']));
                        $sql_kq = mysqli_query($con, "SELECT * FROM tbl_khachhang,tbl_giaodich WHERE tbl_khachhang.khachhang_id=tbl_giaodich.khachhang_id AND timee BETWEEN '$date1 ' AND '$date2' GROUP BY tbl_giaodich.magiaodich ORDER BY tbl_khachhang.khachhang_id DESC");
                        if (mysqli_num_rows($sql_kq)>0) {
                            $i = 0;
                            while ($row_khachhang = mysqli_fetch_array($sql_kq)) {
                                $i++; ?>
                                    <tr>
                                        <td><span style="font-size: 17px;"><?php echo $i; ?></span></td>
                                        <td ><span style="font-size: 17px;"><?php echo $row_khachhang['names']; ?></span></td>
                                        <td ><span style="font-size: 17px;"><?php echo $row_khachhang['phone']; ?></span></td>
                                        <td ><span style="font-size: 17px;"><?php echo $row_khachhang['email']; ?></span></td>
                                        <td ><span style="font-size: 17px;"><?php echo $row_khachhang['addresss']; ?></span></td>
                                        <td ><span style="font-size: 17px;"><?php echo $row_khachhang['timee']; ?></span></td>
                                        
                                        <td style="width: 12%;text-align: center">
                                        <a href="javascript:xemgiaodich('<?php echo $row_khachhang['magiaodich'] ?>')">
                                            <i style="font-size: 26px;" class="fa fa-list-alt text-success text-active"></i>
                                            </a></td>
                                            <td>
                                            <a href="javascript:xoa_id('<?php echo $row_khachhang['khachhang_id']; ?>')" 
                                            class="active styling-edit" ui-toggle-class="">
                                            <i style="font-size: 26px;" class="fa fa-trash-o  text-danger text"></i>
                                            </a>
                                        </td>
                                    </tr>
                            <?php
                            }
                        } else {
                            ?>
                            <tr>
                            <td colspan="5">Không có khách hàng!</td>
                            </tr>
                    <?php
                        }
                    }else{
                        ?>
                        <!-- không tìm kiếm theo ngày -->
                        <?php
                        $sql_kq = mysqli_query($con, "SELECT * FROM tbl_khachhang,tbl_giaodich WHERE tbl_khachhang.khachhang_id=tbl_giaodich.khachhang_id GROUP BY tbl_giaodich.magiaodich ORDER BY tbl_khachhang.khachhang_id DESC");
                       
                            $i = 0;
                            while ($row_khachhang = mysqli_fetch_array($sql_kq)) {
                            $i++; 
                        ?>
                            <tr>
                                <td><span style="font-size: 17px;"><?php echo $i; ?></span></td>
                                <td ><span style="font-size: 17px;"><?php echo $row_khachhang['names']; ?></span></td>
                                <td ><span style="font-size: 17px;"><?php echo $row_khachhang['phone']; ?></span></td>
                                <td ><span style="font-size: 17px;"><?php echo $row_khachhang['email']; ?></span></td>
                                <td ><span style="font-size: 17px;"><?php echo $row_khachhang['addresss']; ?></span></td>
                                <td ><span style="font-size: 17px;"><?php echo $row_khachhang['timee']; ?></span></td>
                                
                                <td style="width: 12%;text-align: center">
                                <a href="javascript:xemgiaodich('<?php echo $row_khachhang['magiaodich'] ?>')">
                                    <i style="font-size: 26px;" class="fa fa-list-alt text-success text-active"></i>
                                    </a></td>
                                    <td>
                                    <a href="javascript:xoa_id('<?php echo $row_khachhang['khachhang_id']; ?>')" 
                                    class="active styling-edit" ui-toggle-class="">
                                    <i style="font-size: 26px;" class="fa fa-trash-o  text-danger text"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
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
