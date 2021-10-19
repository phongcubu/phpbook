<?php
session_start();
include('../database/connectdb.php')
?>
<?php

// delete condition
if(isset($_GET['xoa_id']))
{
	$sql_query="DELETE FROM tbl_tintuc WHERE tintuc_id=".$_GET['xoa_id'];
	mysqli_query($con, $sql_query);
	header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>
<!DOCTYPE html>
<head>
<title>Quản lý tin tức</title>
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

function suatt(id)
{
	if(confirm('bạn muốn thay đổi tin này chứ?'))
	{
		window.location.href='suatt.php?suatt_id='+id;
	}
}
function xoa_id(id)
{
	if(confirm('Bạn muốn xóa tin này chứ ?'))
	{
		window.location.href='quanly_tintuc.php?xoa_id='+id;
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
            Quan lý tin
            </div>
            <div class="row w3-res-tb">
                    <div class="col-sm-5 m-b-xs">
                        <a href="themtin.php" class="btn btn-primary ">Thêm tin</a>                
                    </div>
                    <div class="col-sm-4">
                </div>
            </div>
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th>Tên tin </th>
                        <th>Hình tin </th>
                        <th>Tóm tắt </th>
                        <th>Nội dung </th>
                        <th>Danh mục</th>
                        <th>Hiển Thị</th>
                        <th>Quản lý</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $sql_kq = mysqli_query($con,"SELECT * FROM tbl_tintuc");
                    if (mysqli_num_rows($sql_kq)>0) 
                    {
                        while ($row=mysqli_fetch_row($sql_kq)) 
                        {
                            ?>
                                    <tr>
                                        
                                        <td  style="1%"><span style="font-size: 17px;"><?php echo $row[1]; ?></span></td>
                                        <td ><span style="font-size: 17px;"><img style="height: 50px;" src="../images/product/<?php echo $row[3];?>"/></span></td>
                                        <td   ><span style="font-size: 17px;" class="product-name"><?php echo $row[2]; ?></span></td>
                                        <td ><span style="font-size: 17px;" class="product-name"><?php echo $row[4]; ?></span></td>
                                        <td ><span style="font-size: 17px;"><?php echo $row[5]; ?></span></td>
                                        <td>
                                            <?php   if( $row[6] == '1')
                                            {
                                                echo  "hiển thị";
                                            }else
                                            {
                                                echo ("ẩn");
                                            }?>
                                        </td>
                                        <td style="width:2%">
                                            <a href="javascript:suatt('<?php echo $row[0]; ?>')" class="active styling-edit" ui-toggle-class="">
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
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>