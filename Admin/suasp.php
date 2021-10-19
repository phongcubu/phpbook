<?php
include('../database/connectdb.php');
session_start();
?>
<?php
if(isset($_GET['suasp_id']))
{
    $sql_query =mysqli_query($con, "SELECT * FROM tbl_sanpham WHERE sanpham_id=".$_GET['suasp_id']);
    $sql_kq = mysqli_fetch_array($sql_query);
}
if(isset($_POST['update_sp_product']))
{
    $tenSP = $_POST['sp_name'];
    $giaSP = $_POST['giasp'];
    $giaSPkm = $_POST['giaspkm'];
    $soluong = $_POST['soluong'];
    $hinhanh_SP = $_FILES['sp_image']['name'];
    $hinhanh_tmp = $_FILES['sp_image']['tmp_name'];
    $mota_SP = $_POST['mota_sp'];
    $chitiet_SP = $_POST['chitiet_sp'];
    $thuonghieu_SP = $_POST['brand_sp'];
    $danhmuc_SP = $_POST['category_sp'];
    $hienthi = $_POST['sp_status'];
    $hot = $_POST['sp_hot'];
    $path = '../images/product/';
    $sql_insert =mysqli_query($con,"UPDATE tbl_sanpham
    SET sanpham_name='$tenSP',sanpham_gia='$giaSP',sanpham_giakhuyenmai='$giaSPkm',sanpham_soluong='$soluong',sanpham_image='$hinhanh_SP',sanpham_mota='$mota_SP',sanpham_chitiet='$chitiet_SP',brand_id='$thuonghieu_SP',category_id='$danhmuc_SP',sanpham_active='$hienthi',sanpham_hot='$hot'
    WHERE sanpham_id =".$_GET['suasp_id']);
    move_uploaded_file($hinhanh_tmp,$path.$hinhanh_SP);
	if($sql_insert)
	{
		?>
		<script type="text/javascript">
		alert('Cập nhật sản phẩm thành công');
		window.location.href='quanlisp.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('Đang lỗi chưa thể nào cập nhật sản phẩm');
		</script>
		<?php
	}
    
	// sql query execution function
}
if(isset($_POST['btn-thoat']))
    {
        header("Location: quanlisp.php");
    }
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
<script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
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
                        <header class="panel-heading">Cập Nhật Sản Phẩm</header>
                    </section>
                    <?php
                    $sql_sp = mysqli_query($con,"SELECT * FROM tbl_sanpham WHERE sanpham_id=$_GET[suasp_id] ORDER BY sanpham_id DESC");
                    $row_sp= mysqli_fetch_array($sql_sp);
                    ?>
                    <div class="panel-body">
                        <div class="position-center">
                            <form role="form" action="" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="qjXZyD171s2S86tqwOpW7ygKbYI6Nh7QEVRcNwPG">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên sản phẩm:</label>
                                    <input type="text" value="<?php echo $row_sp['sanpham_name'] ?>" class="form-control" name="sp_name" id="exampleInputEmail1" placeholder="tên sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh sản phẩm:</label>
                                    <input type="file" class="form-control image-preview"  name="sp_image" id="exampleInputEmail1" onchange="previewFile(this);">
                                    <img src="../images/product/<?php echo $row_sp['sanpham_image'] ?>" height="100" width="100">
                                    <!-- <img src="https://lukoilonline.com/uploadFiles/default.png" width="20%" id="previewImg" > -->
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá sản phẩm:</label>
                                    <input type="text" value="<?php echo $row_sp['sanpham_gia'] ?>" class="form-control" name="giasp" id="exampleInputEmail1" placeholder="giá sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá khuyến mãi:</label>
                                    <input type="text" value="<?php echo $row_sp['sanpham_giakhuyenmai'] ?>" class="form-control" name="giaspkm" id="exampleInputEmail1" placeholder="giá khuyến mãi">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số lượng sản phẩm:</label>
                                    <input type="text" value="<?php echo $row_sp['sanpham_soluong'] ?>" class="form-control" name="soluong" id="exampleInputEmail1" placeholder="số lượng">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mô tả sản phẩm:</label>
                                    <textarea type="text" value="<?php echo $row_sp['sanpham_mota'] ?>" class="form-control ckeditor" name="mota_sp" id="exampleInputEmail1" placeholder="mô tả sản phẩm"><?php echo $row_sp['sanpham_mota'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Chi tiết sản phẩm:</label>
                                    <textarea type="text" value="<?php echo $row_sp['sanpham_mota'] ?>" class="form-control ckeditor" name="chitiet_sp" id="exampleInputEmail1" placeholder="chi tiết sản phẩm"><?php echo $row_sp['sanpham_chitiet'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên thương hiệu:</label><br/>
                                    <select name="brand_sp" class="form-control">
                                    <?php 
                                        $sql_thuonghieu = mysqli_query($con,"SELECT * FROM tbl_brand ORDER BY brand_id DESC");
                                        $row_th = mysqli_fetch_array($sql_thuonghieu);
                                        ?>
                                        <option value="<?php echo $row_th['brand_id'] ?>"><?php echo $row_th['brand_name'] ?></option>
                                        <?php
                                        while($row_th = mysqli_fetch_array($sql_thuonghieu)){
                                        ?>
                                        <option value="<?php echo $row_th['brand_id']?>"><?php echo $row_th['brand_name']?></option>
                                        <?php 
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục:</label><br/>
                                    <select name="category_sp" class="form-control">
                                        <?php 
                                        $sql_danhmuc = mysqli_query($con,"SELECT * FROM tbl_category ORDER BY category_id DESC");
                                        $row_dm = mysqli_fetch_array($sql_danhmuc);
                                        ?>
                                        <option value="<?php echo $row_dm['category_id'] ?>"><?php echo $row_dm['category_name'] ?></option>
                                        <?php
                                        while($row_dm = mysqli_fetch_array($sql_danhmuc)){
                                        ?>
                                        <option value="<?php echo $row_dm['category_id']?>"><?php echo $row_dm['category_name']?></option>
                                        <?php 
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Hiển Thị</label><br/>
                                    <select name="sp_status" class="form-control trol input-lg m-bot15">
                                        <option value="1">hiện</option>
                                        <option value="0">ẩn</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Sản phẩm bán chạy</label><br/>
                                    <select name="sp_hot" class="form-control trol input-lg m-bot15">
                                        <option value="1">hiện</option>
                                        <option value="0">ẩn</option>
                                    </select>
                                </div>
                                <button type="submit" name="update_sp_product" class="btn btn-info">Cập nhật Sản phẩm</button>
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
<!-- -- preview img -- -->
<script type="text/javascript"> 
    function previewFile(input)
    {
        var file =$(".image-preview").get(0).files[0];
        console.log(file)
        if(file)
        {
            var read = new FileReader();
            read.onload = function(){
                $('#previewImg').attr("src", read.result);
            }
            read.readAsDataURL(file);
        }
    }
</script>
</body>
</html>