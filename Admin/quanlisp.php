<?php
session_start();
include('../database/connectdb.php')
?>
<?php

// delete condition
if(isset($_GET['xoa_id']))
{
	$sql_query="DELETE FROM tbl_sanpham WHERE sanpham_id=".$_GET['xoa_id'];
	mysqli_query($con, $sql_query);
	header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>
<!DOCTYPE html>
<head>
<title>Quản lý sản phẩm</title>
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
<!-- filter table -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script type="text/javascript">


function suasp(id)
{
	if(confirm('bạn muốn thay đổi sản phẩm này chứ?'))
	{
		window.location.href='suasp.php?suasp_id='+id;
	}
}
function xoa_id(id)
{
	if(confirm('Bạn muốn xóa sản phẩm này chứ ?'))
	{
		window.location.href='quanlisp.php?xoa_id='+id;
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
            Liệt Kê Sản Phẩm
            </div>
            <div class="row w3-res-tb">
                    <div class="col-sm-5 m-b-xs">
                        <a href="ThemSP.php" class="btn btn-primary ">Thêm sản phẩm</a>                
                    </div>
                    <div class="col-sm-4">
                </div>
            </div>
        <div class="table-responsive">
            <table class="table table-striped b-t b-light" id="example">
                <thead>
                    <tr>
                        
                        <th>Tên Sản Phẩm </th>
                        <th>Hình Sản Phẩm </th>
                        <th>Giá Sản Phẩm </th>
                        <th>Giá Khuyến Mãi </th>
                        <th>Số lượng </th>
                        <th>Danh Mục Sản Phẩm </th>
                        <th>Thương Hiệu Sản Phẩm </th>
                        <th>Hiển Thị</th>
                        <th>Bán chạy</th>
                        <th>Đăng ngày</th>
                        <th>Quản lý</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $sql_kq = mysqli_query($con,"SELECT * FROM tbl_sanpham");
                    if (mysqli_num_rows($sql_kq)>0) 
                    {
                        while ($row=mysqli_fetch_row($sql_kq)) 
                        {
                            ?>
                                    <tr>
                                        
                                        <td  style="1%"><span style="font-size: 17px;"><?php echo $row[3]; ?></span></td>
                                        <td ><span style="font-size: 17px;"><img style="height: 50px;" src="../images/product/<?php echo $row[11];?>"/></span></td>
                                        <td ><span style="font-size: 17px;"><?php echo $row[6]; ?></span></td>
                                        <td ><span style="font-size: 17px;"><?php echo $row[7]; ?></span></td>
                                        <td ><span style="font-size: 17px;"><?php echo $row[10]; ?></span></td>
                                        <td >
                                            <span style="font-size: 17px;">
                                            <?php
                                            $sql_dm = mysqli_query($con, "SELECT * FROM tbl_category,tbl_sanpham WHERE tbl_category.category_id = tbl_sanpham.category_id AND tbl_sanpham.category_id = $row[1] ORDER BY tbl_sanpham.sanpham_id DESC");
                                            $row_dm=mysqli_fetch_array($sql_dm);
                                            echo $row_dm['category_name'];
                                            ?>
                                            </span>
                                        </td>
                                        <td >
                                            <span style="font-size: 17px;">
                                            <?php 
                                            $sql_th = mysqli_query($con, "SELECT * FROM tbl_brand,tbl_sanpham WHERE tbl_brand.brand_id = tbl_sanpham.brand_id AND tbl_sanpham.brand_id = $row[2] ORDER BY tbl_sanpham.sanpham_id DESC");
                                            $row_th=mysqli_fetch_array($sql_th);
                                            echo $row_th['brand_name'];
                                            ?>
                                            </span>
                                        </td>
                                            <td>
                                                <?php 
                                                if( $row[8] == '1')
                                                {
                                                    echo  "hiển thị";
                                                }else
                                                {
                                                    echo ("ẩn");
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php   if( $row[9] == '1')
                                                {
                                                    echo  "hiển thị";
                                                }else
                                                {
                                                    echo ("ẩn");
                                                }?>
                                            </td>
                                        <td>
                                        <span style="font-size: 17px;"><?php echo $row[12]; ?></span>
                                        </td>
                                        <td style="width:2%">
                                            <a href="javascript:suasp('<?php echo $row[0]; ?>')" class="active styling-edit" ui-toggle-class="">
                                            <i style="font-size: 20px;" class="fa fa-pencil-square-o text-success text-active"></i>
                                            </a>
                                            <a href="javascript:xoa_id('<?php echo $row[0]; ?>')" 
                                            class="active styling-edit" ui-toggle-class="">
                                            <i style="font-size: 20px;" class="fa fa-trash-o  text-danger text"></i>
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
        <!-- <footer class="panel-footer">
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
        </footer> -->
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
<!--main content end-->
</section>
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
	<!--Filter tables  -->
	<script type="text/javascript">
		$(document).ready(function(){
			$('#example').DataTable();
		})

	</script>
	<!--Filter tables  -->
</body>
</html>