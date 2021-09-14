
<?php
    include('database/connectdb.php');
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
    ?>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar" style="position: relative;">
						<h2 class="rise-text">Danh Mục</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<?php 
                             $sql_category = mysqli_query($con,' SELECT * FROM tbl_category ORDER BY category_id DESC');
                                while ($category_item = mysqli_fetch_array($sql_category)) {
                                    ?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#"><?php echo $category_item['category_name'];?></a></h4>
								</div>
							</div>
                            <?php
                                }
                            ?>

							
					</div><!--/category-products-->
					
						<div class="brands_products" style="position: relative;"><!--brands_products-->
							<h2 class="rise-text">THƯƠNG HIỆU SẢN PHẨM</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
									
									<li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						
						
						<div style="position: relative;" ><!--shipping-->
							<img style="margin: 10px auto;" src="images/shop/nha-sach-tiki.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
                                    
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center rise-text"> Sản Phẩm Mới</h2>
                        
						<div class="col-sm-4 ">
							<div class="product-image-wrapper">
								<div class="single-products">
                                        <a href="chi-tiet-san-pham.php">
                                            <div class="productinfo text-center">
                                                <img src="images/shop/sp1.jpg"  alt="" />
                                                <p style="height: 20px;">
												<span class="new_price"><?php echo number_format("1000000",0,",",".")."đ"; ?></span>
												<span class="old_price"><?php echo number_format("1000000",0,",",".")."đ"; ?></span>
											    </p>
                                                <p class="product-name" >Tự Học 2000 Từ Vựng Tiếng Anh Theo Chủ Đề Tự Học 2000 Từ Vựng Tiếng Anh Theo Chủ Đề</p>
                                                <a href="gio-hang.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                                            </div>
                                        </a>
							
								</div>
                                <img src="images/home/new.png" class="new" alt="" />
								
							</div>
						</div>
                        <div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
                                        <a href="chi-tiet-san-pham.php">
                                            <div class="productinfo text-center">
                                                <img src="images/shop/sp1.jpg"  alt="" />
                                                <p style="height: 20px;">
												<span class="new_price"><?php echo number_format("1000000",0,",",".")."đ"; ?></span>
												<span class="old_price"><?php echo number_format("1000000",0,",",".")."đ"; ?></span>
											</p>
                                                <p class="product-name" >Combo Sách Tiếng hàn tổng hợp dành cho người Việt Nam - Sơ cấp 1 (Phiên bản 1 màu)</p>
                                                <a href="gio-hang.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                                            </div>
                                        </a>
		
								</div>
                                <img src="images/home/new.png" class="new" alt="" />
								
							</div>
						</div>
                        <div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
                                        <a href="chi-tiet-san-pham.php">
                                            <div class="productinfo text-center">
                                                <img src="images/shop/sp1.jpg"  alt="" />
                                                <p style="height: 20px;">
												<span class="new_price"><?php echo number_format("1000000",0,",",".")."đ"; ?></span>
												<span class="old_price"><?php echo number_format("1000000",0,",",".")."đ"; ?></span>
											</p>
                                                <p class="product-name" >Đắc Nhân Tâm</p>
                                                <a href="gio-hang.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                                            </div>
                                        </a>
										
										
								</div>
                                <img src="images/home/new.png" class="new" alt="" />
								
							</div>
						</div>
                        <div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
                                        <a href="chi-tiet-san-pham.php">
                                            <div class="productinfo text-center">
                                                <img src="images/shop/sp1.jpg"  alt="" />
                                                <p style="height: 20px;">
												<span class="new_price"><?php echo number_format("1000000",0,",",".")."đ"; ?></span>
												<span class="old_price"><?php echo number_format("1000000",0,",",".")."đ"; ?></span>
											</p>
                                                <p class="product-name" >Đắc Nhân Tâm</p>
                                                <a href="gio-hang.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                                            </div>
                                        </a>
										
										
								</div>
                                <img src="images/home/new.png" class="new" alt="" />
								
							</div>
						</div>
						

					</div><!--features_items-->
					
					
				</div>
			</div>
		</div>
	</section>

   
    <footer id="footer">
        <!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 ">
                        <div class="col-sm-3  ">
                            <div class="video-gallery text-center ">
                                <a href="# ">

                                    <img src="images/shop/thutuczip/chinhhang.png" style=" width: 100px; height: 100px; border-radius: 50%;" alt=" " />

                                    <p>sản phẩm</p>
                                    <h2 style="font-weight: 500; font-size: 16px;"> Chính Hãng</h2>

                            </div>
                        </div>

                        <div class="col-sm-3 ">
                            <div class="video-gallery text-center ">
                                <a href="# ">

                                    <img src="images/shop/thutuczip/freeship.png" style=" width: 100px; height: 100px; border-radius: 50%;" alt=" " /> '
                                </a>
                                <p>miễn phí</p>
                                <h2 style="font-weight: 500; font-size: 16px;">Toàn Quốc</h2>
                            </div>
                        </div>

                        <div class="col-sm-3 ">
                            <div class="video-gallery text-center ">
                                <a href="# ">

                                    <img src="images/shop/thutuczip/hotline.png" style=" width: 100px; height: 100px; border-radius: 50%;" alt=" " />


                                </a>
                                <p>
                                    Hotline hỗ trợ</p>
                                <h2 style="font-weight: 500; font-size: 16px;">1900.2091</h2>
                            </div>
                        </div>

                        <div class="col-sm-3 ">
                            <div class="video-gallery text-center ">
                                <a href="# ">

                                    <img src="images/shop/thutuczip/doitra.png" style=" width: 100px; height: 100px; border-radius: 50%;" alt=" " />

                                </a>
                                <p>
                                    Thủ tục đổi trả</p>
                                <h2 style="font-weight: 500; font-size: 16px;">DỄ DÀNG</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-widget">
            <div class="container">
                <div class="row ">
                    <div class="col-sm-2 ">
                        <div class="single-widget ">
                            <h2>Hỗ Trợ-Dịch Vụ</h2>
                            <ul class="nav nav-pills nav-stacked ">
                                <li><a href="# ">Mua hàng trả góp</a></li>
                                <li><a href="# ">Chính sách bảo hành</a></li>
                                <li><a href="# ">Tra cứu đơn hàng</a></li>
                                <li><a href="# ">Chính sách bảo mật</a></li>
                                <li><a href="# ">Điều khoản mua bán hàng hóa</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2 ">
                        <div class="single-widget ">
                            <h2>Thông Tin Liên Hệ</h2>
                            <ul class="nav nav-pills nav-stacked ">
                                <li><a href="# ">Bán hàng Online</a></li>
                                <li><a href="# ">Chăm sóc Khách Hàng</a></li>
                                <li><a href="# ">Hỗ Trợ Kỹ thuật</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2 ">
                        <div class="single-widget ">
                            <h2>Hệ thống 75 siêu thị trên toàn quốc
                            </h2>
                            <ul class="nav nav-pills nav-stacked ">
                                <li><a href="# ">Danh sách 75 siêu thị trên toàn quốc</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2 ">
                        <div class="single-widget ">
                            <h2>Thanh toán miễn phí</h2>

                            <table>
                                <tr>
                                    <td><img src="images/shop/thanhtoan/bidv.png" style=" width: 100%; height:50px;padding: 5px; " alt=""></td>
                                    <td><img src="images/shop/thanhtoan/icon-vnpay.png" style=" width: 100%; height:50px; padding: 5px;" alt=""></td>
                                </tr>
                                <tr>
                                    <td><img src="images/shop/thanhtoan/visa.png" alt="" style=" width: 100%; height:50px; padding: 5px; "></td>
                                    <td><img src="images/shop/thanhtoan/zalopay.png" alt="" style=" width: 100%; height:50px; padding: 5px; "></td>
                                </tr>

                            </table>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1 ">
                        <div class="single-widget ">
                            <h2>Đăng ký nhận tin</h2>
                            <form action="# " class="searchform ">
                                <input type="text " placeholder="Email của bạn ........." />
                                <button type="submit " class="btn btn-default "><i class="fa fa-arrow-circle-o-right "></i></button>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p style="width:306px; margin: auto">Copyright © 2021.Phong_Sơn_Phương</p>

                </div>
            </div>
        </div>

    </footer>
    <!--/Footer-->

    <script src="js/jquery.js "></script>
    <script src="js/bootstrap.min.js "></script>
    <script src="js/jquery.scrollUp.min.js "></script>
    <script src="js/price-range.js "></script>
    <script src="js/jquery.prettyPhoto.js "></script>
    <script src="js/main.js "></script>
</body>

</html>