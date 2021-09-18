<?php 
 session_start();
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
            Liệt Kê Sản Phẩm
            </div>
           
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th style="width:20px;">
                            <label class="i-checks m-b-none">
                                <input type="checkbox"><i></i>
                            </label>
                        </th>
                        <th>Tên Sản Phẩm </th>
                        <th>Giá Sản Phẩm </th>
                        <th>Hình Sản Phẩm </th>
                        <th>Danh Mục Sản Phẩm </th>
                        <th>Thương Hiệu Sản Phẩm </th>
                        <th>Hiển Thị</th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                                        <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Chinh Phục Không Gian – Hành Trình Kỳ Diệu</td>
                    <td>200000</td>
                    <td><img src="public/uploads/product/Chinh Phục Không Gian – Hành Trình Kỳ Diệu24.jpeg" height="100" width="100"></td>
                    <td>Khoa Học - Toán Học</td>
                    <td>Dk</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/19"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                         </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/19" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/19" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Hiểu hết về khoa học - How Science Works</td>
                    <td>264000</td>
                    <td><img src="public/uploads/product/Hiểu hết về khoa học - How Science Works63.jpeg" height="100" width="100"></td>
                    <td>Khoa Học - Toán Học</td>
                    <td>Dk</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/21"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/21" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/21" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Hiểu hết về tâm lý học - How Psychology Works</td>
                    <td>240000</td>
                    <td><img src="public/uploads/product/Sách - Hiểu hết về tâm lý học - How Psychology Works48.jpeg" height="100" width="100"></td>
                    <td>Khoa Học - Toán Học</td>
                    <td>Dk</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/22"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/22" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/22" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                  
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