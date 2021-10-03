<?php
include('../database/connectdb.php');
session_start();
?>
<?php
if(isset($_GET['suatt_id']))
{
    $sql_query =mysqli_query($con, "SELECT * FROM tbl_tintuc WHERE tintuc_id=".$_GET['suatt_id']);
    $sql_kq = mysqli_fetch_array($sql_query);
}
if(isset($_POST['update_tin']))
{
    $tenTT = $_POST['tt_name'];
    $tomtat = $_POST['tomtat'];
    $noidung = $_POST['noidung'];
    $hinhanh_tt = $_FILES['tt_image']['name'];
    $hinhanh_tmp = $_FILES['tt_image']['tmp_name'];
    $danhmuctin = $_POST['danhmuctin'];
    $hienthi = $_POST['tt_status'];
    $path = '../images/product/';
    $sql_insert =mysqli_query($con,"UPDATE tbl_tintuc
    SET tintuc_name='$tenTT',tomtat='$tomtat',img_dautrang='$hinhanh_tt',noidung_tin='$noidung',danhmuctin_id='$danhmuctin',hienthi='$hienthi' 
    WHERE tintuc_id=".$_GET['suatt_id']);
    move_uploaded_file($hinhanh_tmp,$path.$hinhanh_tt);
    // sql query execution function
	if($sql_insert)
	{
		?>
		<script type="text/javascript">
		alert('Cập nhật tin thành công');
		window.location.href='quanly_tintuc.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('Đang lỗi chưa thể nào cập nhật tin');
		</script>
		<?php
	}
    
	// sql query execution function
}
if(isset($_POST['btn-thoat']))
    {
        header("Location: quanly_tintuc.php");
    }
?>
<!DOCTYPE html>
<head>
<title>Câp nhật tin</title>
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
                        <header class="panel-heading">Cập Nhật Tin</header>
                    </section>
                    <div class="panel-body">
                        <div class="position-center">
                            <?php
                                $sql_tin = mysqli_query($con,"SELECT * FROM tbl_tintuc WHERE tintuc_id=$_GET[suatt_id] ORDER BY tintuc_id DESC");
                                $row_tin = mysqli_fetch_array($sql_tin);
                            ?>
                            <form role="form" action="#" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="qjXZyD171s2S86tqwOpW7ygKbYI6Nh7QEVRcNwPG">
                                <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Tên tin:</label>
                                    <input type="text" value="<?php echo $row_tin['tintuc_name'] ?>" class="form-control" name="tt_name" id="exampleInputEmail1" placeholder="tên tin">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh tin:</label>
                                    <input type="file" class="form-control" name="tt_image" id="exampleInputEmail1">
                                    
                                    <img src="../images/product/<?php echo $row_tin['img_dautrang']?>" height="100" width="100">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tóm tắt:</label>
                                    <textarea type="text" class="form-control ckeditor" name="tomtat" id="exampleInputEmail1" placeholder="tóm tắt"><?php echo $row_tin['tomtat'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nội dung:</label>
                                    <textarea type="text" class="form-control ckeditor" name="noidung" id="exampleInputEmail1" placeholder="nội dung"><?php echo $row_tin['noidung_tin'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục tin:</label><br/>
                                    <select name="danhmuctin" class="form-control" value="<?php echo $row_tin['danhmuc_tin'] ?>">
                                        <?php 
                                        $sql_danhmuctin = mysqli_query($con,"SELECT * FROM tbl_danhmuctin ORDER BY danhmuctin_id DESC");
                                        $row_dmt = mysqli_fetch_array($sql_danhmuctin);
                                        ?>
                                        <option value="<?php echo $row_tin['danhmuctin_id'] ?>"><?php echo $row_dmt['danhmuctin_name']?></option>
                                        <?php
                                        while($row_dmt = mysqli_fetch_array($sql_danhmuctin)){
                                        ?>
                                        <option value="<?php echo $row_dmt['danhmuctin_id']?>"><?php echo $row_dmt['danhmuctin_name']?></option>
                                        <?php 
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="tt_status" class="form-control trol input-lg m-bot15">
                                        <option value="0">ẩn</option>
                                        <option value="1">hiện</option>
                                    </select>
                                </div>
                                <button type="submit" name="update_tin" class="btn btn-info">Cập nhật tin</button>
                                <button type="out" name="btn-thoat" class="btn btn-info">Quay lại</button>
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