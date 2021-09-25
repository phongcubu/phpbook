<?php
session_start();
include('../database/connectdb.php')
?>
<?php

// delete condition
if(isset($_GET['xoa_id']))
{
	$sql_query="DELETE FROM tbl_danhmuctin WHERE danhmuctin_id=".$_GET['xoa_id'];
	mysqli_query($con, $sql_query);
	header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>
<!DOCTYPE html>
<head>
<title>Quản lý danh mục tin tức</title>
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

function suadanhmuctin(id)
{
	if(confirm('bạn muốn thay đổi danh mục này chứ?'))
	{
		window.location.href='suadanhmuc_tin.php?suadanhmuctin_id='+id;
	}
}
function xoa_id(id)
{
	if(confirm('Bạn muốn xóa danh mục này chứ ?'))
	{
		window.location.href='quanly_danhmuc_tin.php?xoa_id='+id;
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
            Quản Lý Danh Muc Tin Tức
        </div>
        <div class="row w3-res-tb">
                    <div class="col-sm-5 m-b-xs">
                        <a href="themdanhmuc_tin.php" class="btn btn-primary ">Thêm Danh Mục Tin Tức</a>                
                    </div>
                    <div class="col-sm-4">
                </div>
            </div>
        <div class="table-responsive">
            <table  class="table table-striped b-t b-light">
                <thead>
                    <tr>
                    <th style="width:20px;">
                    </th>
                    <th>Tên Danh Mục Tin Tức</th>
                    <th  colspan="2" style="margin:auto">Quản Lý</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $sql_kq = mysqli_query($con, "SELECT * FROM tbl_danhmuctin");
                    if (mysqli_num_rows($sql_kq)>0) 
                    {
                        while ($row=mysqli_fetch_row($sql_kq)) 
                        {
                            ?>
                                    <tr>
                                        <td></td>
                                        <td ><span style="font-size: 17px;"><?php echo $row[1]; ?></span></td>
                                        
                                        <td style="width:4%">
                                            <a href="javascript:suadanhmuctin('<?php echo $row[0]; ?>')" class="active styling-edit" ui-toggle-class="">
                                            <i style="font-size: 26px;" class="fa fa-pencil-square-o text-success text-active"></i>
                                            </a></td>
                                            <td>
                                            <a href="javascript:xoa_id('<?php echo $row[0]; ?>')" 
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

            </div>
        </footer>
        </div>
    </div>
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