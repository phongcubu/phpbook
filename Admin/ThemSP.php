<?php
include('../database/connectdb.php');
session_start();
?>
<!DOCTYPE html>
<head>
<title>Thêm sản phẩm</title>
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
                        <header class="panel-heading">Thêm Sản Phẩm</header>
                    </section>
                    <div class="panel-body">
                        <div class="position-center">
                            <form role="form" action="#" method="POST">
                                <input type="hidden" name="_token" value="qjXZyD171s2S86tqwOpW7ygKbYI6Nh7QEVRcNwPG">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên sản phẩm:</label>
                                    <input type="text" class="form-control" name="product_name" id="exampleInputEmail1" placeholder="tên sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá sản phẩm:</label>
                                    <input type="text" class="form-control" name="product_price" id="exampleInputEmail1" placeholder="Giá sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh sản phẩm:</label>
                                    <input type="file" class="form-control image-preview" name="product_image" id="exampleInputEmail1" placeholder="Hình ảnh sản phẩm" onchange="previewFile(this);">
                                    <img src="https://lukoilonline.com/uploadFiles/default.png" width="20%" id="previewImg">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Chi tiết sản phẩm:</label>
                                    <textarea style="resize: none;" rows="8" class="form-control" name="product_desc" id="exampleInputEmail1" placeholder="nội dung chi tiết"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mô tả sản phẩm:</label>
                                    <textarea style="resize: none;" rows="8" class="form-control" name="product_content" id="exampleInputEmail1" placeholder="nội dung mô tả"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Danh muc sản phẩm:</label>
                                    <select name="product_cate" class="form-control input-lg m-bot15">
                                        <option value="25">Truyện tranh</option>
                                        <option value="24">Sách y học</option>
                                        <option value="23">Sách Thiếu Nhi</option>
                                        <option value="22">Sách Nghệ thuật, Thiết kế &amp; Nhiếp ảnh</option>
                                        <option value="21">Sách Kinh Tế - Kinh Doanh</option>
                                        <option value="20">Sách Khoa Học Thiếu Nhi</option>
                                        <option value="19">Sách Hướng Nghiệp &amp; Phát Triển Bản Thân</option>
                                        <option value="18">Sách Giáo Dục</option>
                                        <option value="17">Sách Dạy Nấu Ăn</option>
                                        <option value="16">Sách Chính Trị - Pháp Lý &amp; Khoa Học</option>
                                        <option value="15">Lịch sử - Văn hóa</option>
                                        <option value="14">Khoa Học - Toán Học</option>
                                        <option value="13">Sách Học Ngoại Ngữ &amp; Từ Điển</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Thương hiểu sản phẩm:</label>
                                    <select name="product_brand" class="form-control input-lg m-bot15">
                                        <option value="6">THANH HƯƠNG</option>
                                        <option value="5">Dk</option>
                                        <option value="4">Đại học Ngôn ngữ Bắc Kinh</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="brand_product_status" class="form-control trol input-lg m-bot15">
                                        <option value="0">ẩn</option>
                                        <option value="1">hiện</option>
                                    </select>
                                </div>
                                <button type="submit" name="updat_brand_product" class="btn btn-info">Cập nhật Sản phẩm</button>
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