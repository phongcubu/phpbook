<?php
    include('database/connectdb.php');
    ob_start();
    session_start();
    ob_end_flush();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PSP|BOOK</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body>

    <?php 
    // header
    include('include/header.php');
    //  slider
    include('include/sliderbar.php');

    if(isset($_GET['quanly'])){
		$quanly = $_GET['quanly'];
	}else{
		$quanly = '';
	}
    
    if($quanly == 'danhmuc')
    {
        // hiên thị sản phẩm theo danh mục chọn
    include('include/showdanhmuc.php');
    }
    elseif($quanly == 'thuonghieu')
    {
        // hiên thị sản phẩm theo thương hiệu chọn
    include('include/showthuonghieu.php');
    }

    elseif($quanly == 'chitietsp'){
        // hiển thị chi tiết 1 sản phẩm
        include('include/chitietsp.php');
    }
    elseif($quanly == 'giohang'){
        // hiển thị giỏ hàng
        include('include/giohang.php');
    }
    elseif($quanly== 'shop'){
        // hiển thị chi tiết  sản phẩm theo danh mục
        include('include/shop.php');
    }
    elseif($quanly == 'tintuc'){
        include('include/tintuc.php');
    }
    elseif($quanly =='chitiettin'){
        include('include/chitiettin.php');
    }
    elseif($quanly =='danhmuctin'){
        include('include/showdanhmuctin.php');
    }
    elseif($quanly == 'lienhe')
    {   
        include('include/lienhe.php');
    }
    elseif($quanly == 'timkiem'){
        // tìm kiếm sản phẩm
        include('include/search.php');
    }
    elseif($quanly == 'lienhe'){
        // tìm kiếm sản phẩm
        include('include/lienhe.php');
    }
    else{
        //  home
        include('include/home.php');
    }
    //  footer
    include('include/footer.php');
    ?>
    <script src="js/jquery.js "></script>
    <script src="js/bootstrap.min.js "></script>
    <script src="js/jquery.scrollUp.min.js "></script>
    <script src="js/price-range.js "></script>
    <script src="js/jquery.prettyPhoto.js "></script>
    <script src="js/main.js "></script>
    
	<!-- scroll seller -->
	<script src="js/scroll.js"></script>
	<!-- //scroll seller -->

</body>

</html>