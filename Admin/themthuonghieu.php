<?php
include('../database/connectdb.php');
session_start();
?>
<?php
if(isset($_POST['update_brand_product']))
{
    $tenTH = $_POST['brand_product_name'];
    
    $sql_insert =mysqli_query($con,"INSERT INTO tbl_brand(brand_name) values ('$tenTH')");
    // sql query execution function
	if($sql_insert)
	{
		?>
		<script type="text/javascript">
		alert('tên thương hiệu được thêm thành công');
		window.location.href='lietkethuonghieu.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('đang lỗi chưa thể nào thêm được thương hiệu');
		</script>
		<?php
	}
	// sql query execution function
}
?>
<!DOCTYPE html>
<head>
<title>Thêm thương hiệu sản phẩm</title>
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
                        <header class="panel-heading">Thêm thương hiệu sản phẩm</header>
                    </section>
                    <div class="panel-body">
                        <div class="position-center">
                            <form role="form" action="#" method="POST">
                                <input type="hidden" name="_token" value="qjXZyD171s2S86tqwOpW7ygKbYI6Nh7QEVRcNwPG">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên thương hiệu:</label>
                                    <input type="text" class="form-control" name="brand_product_name" id="exampleInputEmail1" placeholder="tên thương hiệu">
                                </div>
                                
                                <button type="submit" name="update_brand_product" class="btn btn-info">Thêm thương hiệu</button>
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