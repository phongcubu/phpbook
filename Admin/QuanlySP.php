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
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="index.php" class="logo">
        PSP BOOK
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
    
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="images/2.png">
                <span class="username">Admin</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="login.php"><i class="fa fa-key"></i> Log Out</a></li>
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
                    <a class="active" href="index.php">
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
						<li><a href="ThemSP.php">Thêm sản phẩm</a></li>
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
		<div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
            Liệt Kê Sản Phẩm
            </div>
            <div class="row w3-res-tb">
            <div class="col-sm-5 m-b-xs">
                <select class="input-sm form-control w-sm inline v-middle">
                    <option value="0">Bulk action</option>
                    <option value="1">Delete selected</option>
                    <option value="2">Bulk edit</option>
                    <option value="3">Export</option>
                </select>
                <button class="btn btn-sm btn-default">Apply</button>                
            </div>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-3">
                <div class="input-group">
                    <input type="text" class="input-sm form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button class="btn btn-sm btn-default" type="button">Go!</button>
                    </span>
                </div>
            </div>
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
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Botanicum - Welcom to the Museum - Tìm hiểu về thực vật</td>
                    <td>220000</td>
                    <td><img src="public/uploads/product/Welcom to the Museum - Tìm hiểu về thực vật95.jpeg" height="100" width="100"></td>
                    <td>Khoa Học - Toán Học</td>
                    <td>Dk</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/23"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/23" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/23" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Lịch sử khoa học - Bách khoa thư các khám phá thay đổi thế giới</td>
                    <td>220000</td>
                    <td><img src="public/uploads/product/Lịch sử khoa học - Bách khoa thư các khám phá thay đổi thế54.jpeg" height="100" width="100"></td>
                    <td>Lịch sử - Văn hóa</td>
                    <td>Dk</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/24"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/24" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/24" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Lịch Sử Quân Sự - Bách Khoa Thư Các Loại Vũ Khí Định Hình Thế Giới</td>
                    <td>440000</td>
                    <td><img src="public/uploads/product/Lịch Sử Quân Sự - Bách Khoa Thư Các Loại Vũ Khí Định Hình Thế Giới58.jpeg" height="100" width="100"></td>
                    <td>Lịch sử - Văn hóa</td>
                    <td>Dk</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/25"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/25" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/25" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Lịch Sử Thế Giới: Chân Dung Nhân Loại Theo Dòng Sự Kiện</td>
                    <td>472000</td>
                    <td><img src="public/uploads/product/Lịch Sử Thế Giới Chân Dung Nhân Loại Theo Dòng Sự Kiện56.jpeg" height="100" width="100"></td>
                    <td>Lịch sử - Văn hóa</td>
                    <td>Dk</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/26"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/26" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/26" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Những Nhà Khoa Học Thay Đổi Lịch Sử</td>
                    <td>292500</td>
                    <td><img src="public/uploads/product/Những Nhà Khoa Học Thay Đổi Lịch Sử21.jpeg" height="100" width="100"></td>
                    <td>Lịch sử - Văn hóa</td>
                    <td>Dk</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/27"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/27" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/27" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Những Nhà Lãnh Đạo Thay Đổi Lịch Sử</td>
                    <td>292.500</td>
                    <td><img src="public/uploads/product/Những Nhà Lãnh Đạo Thay Đổi Lịch Sử59.jpeg" height="100" width="100"></td>
                    <td>Lịch sử - Văn hóa</td>
                    <td>Dk</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/28"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/28" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/28" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Chính trị - Khái lược những tư tưởng lớn</td>
                    <td>304000</td>
                    <td><img src="public/uploads/product/Chính trị - Khái lược những tư tưởng lớn20.jpeg" height="100" width="100"></td>
                    <td>Sách Chính Trị - Pháp Lý &amp; Khoa Học</td>
                    <td>Dk</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/29"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/29" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/29" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Triết học - Khái lược những tư tưởng lớn</td>
                    <td>312000</td>
                    <td><img src="public/uploads/product/Triết học - Khái lược những tư tưởng lớn72.jpeg" height="100" width="100"></td>
                    <td>Sách Chính Trị - Pháp Lý &amp; Khoa Học</td>
                    <td>Dk</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/30"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/30" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/30" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>The Story Of Food - Câu Chuyện Thực Phẩm</td>
                    <td>374220</td>
                    <td><img src="public/uploads/product/The story of food - Câu chuyện thực phẩm71.jpeg" height="100" width="100"></td>
                    <td>Sách Dạy Nấu Ăn</td>
                    <td>Dk</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/31"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/31" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/31" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>1000 Từ Tiếng Anh Hữu Ích (Song Ngữ Việt - Anh) - Xây Dựng Vốn Từ Vựng Và Kỹ Năng Ngôn Ngữ Cho Trẻ</td>
                    <td>112500</td>
                    <td><img src="public/uploads/product/1000 Từ Tiếng Anh Hữu Ích (Song Ngữ Việt - Anh) - Xây Dựng Vốn Từ Vựng Và Kỹ Năng Ngôn Ngữ Cho Trẻ57.jpeg" height="100" width="100"></td>
                    <td>Sách Giáo Dục</td>
                    <td>Dk</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/32"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/32" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/32" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Tri Thức Về Vạn Vật - Một Thế Giới Trực Quan Chưa Từng Thấy</td>
                    <td>489300</td>
                    <td><img src="public/uploads/product/Tri Thức Về Vạn Vật - Một Thế Giới Trực Quan Chưa Từng68.jpeg" height="100" width="100"></td>
                    <td>Sách Giáo Dục</td>
                    <td>Dk</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/33"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/33" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/33" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>How Money Works - Hiểu Hết Về Tiền</td>
                    <td>231000</td>
                    <td><img src="public/uploads/product/How Money Works - Hiểu Hết Về Tiền38.jpeg" height="100" width="100"></td>
                    <td>Sách Hướng Nghiệp &amp; Phát Triển Bản Thân</td>
                    <td>Dk</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/34"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/34" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/34" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>How The Body Works - Hiểu Hết Về Cơ Thể</td>
                    <td>225000</td>
                    <td><img src="public/uploads/product/How The Body Works  Hiểu Hết Về Cơ Thể39.jpeg" height="100" width="100"></td>
                    <td>Sách Hướng Nghiệp &amp; Phát Triển Bản Thân</td>
                    <td>Dk</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/35"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/35" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/35" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Tâm Lí Học - Khái Lược Những Tư Tưởng Lớn</td>
                    <td>312000</td>
                    <td><img src="public/uploads/product/Tâm Lí Học - Khái Lược Những Tư Tưởng Lớn8.jpeg" height="100" width="100"></td>
                    <td>Sách Hướng Nghiệp &amp; Phát Triển Bản Thân</td>
                    <td>Dk</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/36"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/36" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/36" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Bách khoa thiếu nhi - Trái Đất</td>
                    <td>74000</td>
                    <td><img src="public/uploads/product/Bách khoa thiếu nhi - Trái Đất96.jpeg" height="100" width="100"></td>
                    <td>Sách Khoa Học Thiếu Nhi</td>
                    <td>Dk</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/37"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/37" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/37" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Hiểu hết về kinh doanh - How business works</td>
                    <td>304.000</td>
                    <td><img src="public/uploads/product/Hiểu hết về kinh doanh - How business works32.jpeg" height="100" width="100"></td>
                    <td>Sách Kinh Tế - Kinh Doanh</td>
                    <td>Dk</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/38"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/38" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/38" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Kinh tế học - Khái lược những tư tưởng lớn</td>
                    <td>312000</td>
                    <td><img src="public/uploads/product/Kinh tế học - Khái lược những tư tưởng lớn47.jpeg" height="100" width="100"></td>
                    <td>Sách Kinh Tế - Kinh Doanh</td>
                    <td>Dk</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/40"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/40" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/40" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Hiểu hết về tiền, cơ thể, thức ăn, tâm lý học, kinh doanh</td>
                    <td>297500</td>
                    <td><img src="public/uploads/product/Hiểu hết về tiền, cơ thể, thức ăn, tâm lý học, kinh doanh66.jpeg" height="100" width="100"></td>
                    <td>Sách Kinh Tế - Kinh Doanh</td>
                    <td>Dk</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/39"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/39" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/39" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Nghệ Thuật - Khái Lược Những Tư Tưởng Lớn</td>
                    <td>312000</td>
                    <td><img src="public/uploads/product/Nghệ Thuật - Khái Lược Những Tư Tưởng Lớn17.jpeg" height="100" width="100"></td>
                    <td>Sách Nghệ thuật, Thiết kế &amp; Nhiếp ảnh</td>
                    <td>Dk</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/41"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/41" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/41" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Bách khoa thiếu nhi Vũ trụ</td>
                    <td>75000</td>
                    <td><img src="public/uploads/product/Bách khoa thiếu nhi Vũ trụ3.jpeg" height="100" width="100"></td>
                    <td>Sách Thiếu Nhi</td>
                    <td>Dk</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/42"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/42" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/42" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>DKfindout! Times Tables Poster - Tấm áp Phích Khổng Lồ Đầy Màu Sắc Củng Cố Sự Hiểu Biết Của Trẻ</td>
                    <td>99000</td>
                    <td><img src="public/uploads/product/DKfindout! Times Tables Poster - Tấm áp Phích Khổng Lồ Đầy Màu Sắc Củng Cố Sự Hiểu Biết Của Trẻ53.jpeg" height="100" width="100"></td>
                    <td>Sách Thiếu Nhi</td>
                    <td>Dk</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/43"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/43" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/43" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Chăm Sóc Sức Khỏe - Cẩm Nang Sơ Cấp Cứu Thường Thức</td>
                    <td>209300</td>
                    <td><img src="public/uploads/product/2dcd389a34e695a5f0106f57dfc6fb7184.jpeg" height="100" width="100"></td>
                    <td>Sách y học</td>
                    <td>Dk</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/44"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/44" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/44" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>How Food Works - Hiểu Hết Về Thức Ăn</td>
                    <td>231000</td>
                    <td><img src="public/uploads/product/How Food Works - Hiểu Hết Về Thức Ăn34.jpeg" height="100" width="100"></td>
                    <td>Sách y học</td>
                    <td>Dk</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/45"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/45" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/45" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Bách khoa thiếu nhi - Ai cập cổ đại</td>
                    <td>100000</td>
                    <td><img src="public/uploads/product/Bách khoa thiếu nhi - Ai cập cổ đại91.jpeg" height="100" width="100"></td>
                    <td>Truyện tranh</td>
                    <td>Dk</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/46"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/46" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/46" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Bách khoa thiếu nhi - Trái Đất</td>
                    <td>100000</td>
                    <td><img src="public/uploads/product/Bách khoa thiếu nhi - Trái Đất12.jpeg" height="100" width="100"></td>
                    <td>Truyện tranh</td>
                    <td>Dk</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/47"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/47" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/47" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Bách khoa thư về các loại phương tiện giao thông</td>
                    <td>224000</td>
                    <td><img src="public/uploads/product/Bách khoa thư về các loại phương tiện giao thông24.jpeg" height="100" width="100"></td>
                    <td>Truyện tranh</td>
                    <td>Dk</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/48"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/48" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/48" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Bóc dán tuyệt đỉnh 6T</td>
                    <td>47200</td>
                    <td><img src="public/uploads/product/Bóc dán tuyệt đỉnh 6T74.jpeg" height="100" width="100"></td>
                    <td>Truyện tranh</td>
                    <td>Dk</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/49"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/49" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/49" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Động Vật - Bách Khoa Thư Hình Ảnh Về Các Loài Vật Trên Trái Đất</td>
                    <td>300000</td>
                    <td><img src="public/uploads/product/Động Vật Bách Khoa Thư Hình Ảnh Về Các Loài Vật Trên Trái Đất88.jpeg" height="100" width="100"></td>
                    <td>Truyện tranh</td>
                    <td>Dk</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/50"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/50" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/50" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Look! - Tớ là Đầu bếp</td>
                    <td>62000</td>
                    <td><img src="public/uploads/product/Look! - Tớ là Đầu bếp7.jpeg" height="100" width="100"></td>
                    <td>Truyện tranh</td>
                    <td>Dk</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/51"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/51" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/51" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Look... tớ là</td>
                    <td>150000</td>
                    <td><img src="public/uploads/product/Look55.jpeg" height="100" width="100"></td>
                    <td>Truyện tranh</td>
                    <td>Dk</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/52"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/52" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/52" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Combo Giáo Trình Hán Ngữ 1 Tập 1 Quyển Thượng Và Tập Viết Chữ Hán Theo GTHN- Kèm App Học Online</td>
                    <td>127440</td>
                    <td><img src="public/uploads/product/Combo Giáo Trình Hán Ngữ 1 Tập 1 Quyển Thượng Và Tập Viết Chữ Hán Theo GTHN- Kèm App Học Online30.jpeg" height="100" width="100"></td>
                    <td>Sách Học Ngoại Ngữ &amp; Từ Điển</td>
                    <td>Đại học Ngôn ngữ Bắc Kinh</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/10"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/10" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/10" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Combo Giáo Trình Hán Ngữ Tập 1 (Quyển Thượng và Quyển Hạ)</td>
                    <td>146880</td>
                    <td><img src="public/uploads/product/Combo Giáo Trình Hán Ngữ Tập 1 (Quyển Thượng và Quyển Hạ)80.jpeg" height="100" width="100"></td>
                    <td>Sách Học Ngoại Ngữ &amp; Từ Điển</td>
                    <td>Đại học Ngôn ngữ Bắc Kinh</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/12"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/12" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/12" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Combo Giáo Trình Hán Ngữ Tập 1 (Quyển Thượng và Quyển Hạ) Và Tập Viết Chữ Hán Theo Giáo Trình</td>
                    <td>210240</td>
                    <td><img src="public/uploads/product/Combo Giáo Trình Hán Ngữ Tập 1 (Quyển Thượng và Quyển Hạ) Và Tập Viết Chữ Hán Theo Giáo Trình81.jpeg" height="100" width="100"></td>
                    <td>Sách Học Ngoại Ngữ &amp; Từ Điển</td>
                    <td>Đại học Ngôn ngữ Bắc Kinh</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/11"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/11" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/11" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Giáo Trình Hán Ngữ 1 - Tập 1 Quyển Thượng - Học Kèm App MCBooks</td>
                    <td>64080</td>
                    <td><img src="public/uploads/product/Giáo Trình Hán Ngữ 1 - Tập 1 Quyển Thượng - Học Kèm App MCBooks11.jpeg" height="100" width="100"></td>
                    <td>Sách Học Ngoại Ngữ &amp; Từ Điển</td>
                    <td>Đại học Ngôn ngữ Bắc Kinh</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/14"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/14" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/14" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Combo Giáo Trình Hán Ngữ Tập 3 (Quyển Thượng và Quyển Hạ)</td>
                    <td>154080</td>
                    <td><img src="public/uploads/product/Combo Giáo Trình Hán Ngữ Tập 3 (Quyển Thượng và Quyển Hạ)89.jpeg" height="100" width="100"></td>
                    <td>Sách Học Ngoại Ngữ &amp; Từ Điển</td>
                    <td>Đại học Ngôn ngữ Bắc Kinh</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/13"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/13" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/13" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Giáo trình Hán ngữ 1 - tập 1 quyển thượng phiên bản mới</td>
                    <td>64080</td>
                    <td><img src="public/uploads/product/Giáo trình Hán ngữ 1 - tập 1 quyển thượng phiên bản mới99.jpeg" height="100" width="100"></td>
                    <td>Sách Học Ngoại Ngữ &amp; Từ Điển</td>
                    <td>Đại học Ngôn ngữ Bắc Kinh</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/15"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/15" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/15" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Giáo Trình Hán Ngữ 5 - Tập 3 Quyển Thượng Bổ Sung Bài Tập Và Đáp Án ( Gồm CD )</td>
                    <td>115000</td>
                    <td><img src="public/uploads/product/Giáo Trình Hán Ngữ 5 - Tập 3 Quyển Thượng Bổ Sung Bài Tập Và Đáp Án ( Gồm CD )55.jpeg" height="100" width="100"></td>
                    <td>Sách Học Ngoại Ngữ &amp; Từ Điển</td>
                    <td>Đại học Ngôn ngữ Bắc Kinh</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/16"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/16" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/16" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Combo 4 cuốn Giáo Trình Phát Triển Hán Ngữ Sơ Cấp 1 Nghe + Nói - Giao Tiếp + Tổng Hợp (T1 + T2)</td>
                    <td>252000</td>
                    <td><img src="public/uploads/product/Combo 4 cuốn Giáo Trình Phát Triển Hán Ngữ Sơ Cấp 1 Nghe + Nói - Giao Tiếp + Tổng Hợp (T1 + T2)97.jpeg" height="100" width="100"></td>
                    <td>Sách Học Ngoại Ngữ &amp; Từ Điển</td>
                    <td>Đại học Ngôn ngữ Bắc Kinh</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/20"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/20" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/20" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Giáo Trình Phát Triển Hán Ngữ Nói Giao Tiếp Sơ Cấp 1 - Học Kèm App Online</td>
                    <td>120960</td>
                    <td><img src="public/uploads/product/Giáo Trình Phát Triển Hán Ngữ Nói Giao Tiếp Sơ Cấp 1 - Học Kèm App Online80.jpeg" height="100" width="100"></td>
                    <td>Sách Học Ngoại Ngữ &amp; Từ Điển</td>
                    <td>Đại học Ngôn ngữ Bắc Kinh</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/17"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/17" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/17" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Tại sao Trái Đất cần Mặt Trăng</td>
                    <td>140000</td>
                    <td><img src="public/uploads/product/Tại sao Trái Đất cần Mặt Trăng35.jpeg" height="100" width="100"></td>
                    <td>Truyện tranh</td>
                    <td>Đại học Ngôn ngữ Bắc Kinh</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/53"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/53" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/53" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-trash-o text-danger text"></i>
                    </a>
                </td>
                </tr>
                                    <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>Giáo Trình Phát Triển Hán Ngữ Tổng Hợp Sơ Cấp 2 Tập 2 - Dành Cho Người Luyện Thi HSK - Học Kèm App Online</td>
                    <td>86400</td>
                    <td><img src="public/uploads/product/Giáo Trình Phát Triển Hán Ngữ Tổng Hợp Sơ Cấp 2 Tập 2 - Dành Cho Người Luyện Thi HSK - Học Kèm App Online86.jpeg" height="100" width="100"></td>
                    <td>Sách Học Ngoại Ngữ &amp; Từ Điển</td>
                    <td>Đại học Ngôn ngữ Bắc Kinh</td>
                    <td>
                        <span class="text-ellipsis">
                            <a href="http://localhost/webbook/unactive-product/18"><span class=" fa fa-eye" style="font-size: 25px; color:green"></span></a>
                                                    </span>
                    </td>
                <td>
                    <a href="http://localhost/webbook/edit-product/18" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                    <a onclick="return confirm('bạn chắc chắn muốn xóa sản phẩm này không ?')" href="http://localhost/webbook/delete-product/18" class="active styling-edit" ui-toggle-class="">
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