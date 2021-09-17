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
    <title>Chi Tiết Sản Phẩm | PSP-BOOK</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
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
   
    ?>
<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar" >
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
					
						<div class="brands_products" ><!--brands_products-->
							<h2 class="rise-text">NHÀ XUẤT BẢN </h2>
							<div class="brands-name">
								
								<ul class="nav nav-pills nav-stacked">
								<?php
								 $sql_brand = mysqli_query($con,"SELECT * FROM tbl_brand ORDER BY brand_id DESC ");
                                 while ($brand_item= mysqli_fetch_array($sql_brand)) {
                                     ?>
									<li><a href="#"><?php echo $brand_item['brand_name']; ?></a></li>
								<?php
                                 }?>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						
						<div class="brands_products" ><!--products sales-->
							<h2 class="rise-text" style="margin-top:20px;">SẢN PHẨM BÁN CHẠY</h2>
							<div class="box-scroll">
								<div class="scroll">
									<?php
										$sql_product_scroll = mysqli_query($con,"SELECT * FROM tbl_sanpham WHERE sanpham_hot = '1' ORDER BY sanpham_id DESC ");
                                        while ($sanpham_item_scroll = mysqli_fetch_array($sql_product_scroll)) {
                                            ?>
									<div class="row">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
											<img src="images/product/<?php echo $sanpham_item_scroll['sanpham_image']?>" alt="" class="img-fluid" style=" max-width: 100%;height: auto;">
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<a href=""><?php echo $sanpham_item_scroll['sanpham_name']; ?></a>
											<br>
											<span class="new_price"><?php echo number_format($sanpham_item_scroll['sanpham_giakhuyenmai'], 0, ",", ".")."đ"; ?></span>
											<span class="old_price"><?php echo number_format($sanpham_item_scroll['sanpham_gia'], 0, ",", ".")."đ"; ?></span>
										</div>
									</div>
									<?php
                                        }
										?>
								
									
									
								</div>
							</div>
						</div><!--/sales products-->
						
						<div ><!--shipping-->
							<img style="margin: 10px auto;" src="images/shop/nha-sach-tiki.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
                                    
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center rise-text"> Sản Phẩm Theo Danh Mục</h2>
                        <?php 
							$sql_product =  mysqli_query($con,"SELECT * FROM tbl_sanpham ORDER BY sanpham_id ASC");
                            while($product_item = mysqli_fetch_array($sql_product)) {
                        ?>
						<div class="col-sm-4 ">
							<div class="product-image-wrapper">
								<div class="single-products">
                                        <a href="chi-tiet-san-pham.php">
                                            <div class="productinfo text-center">
                                                <img src="images/product/<?php echo $product_item['sanpham_image']; ?>"  alt="" />
                                                <p style="height: 20px;">
												<span class="new_price"><?php echo number_format($product_item['sanpham_giakhuyenmai'], 0, ",", ".")."đ"; ?></span>
												<span class="old_price"><?php echo number_format($product_item['sanpham_gia'], 0, ",", ".")."đ"; ?></span>
												</p>
											<p class="product-name" ><?php echo $product_item['sanpham_name']; ?></p>
                                                <a href="gio-hang.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                                            </div>
                                        </a>
							
								</div>
                               
								
							</div>
						</div>
						<?php
                            }?>
                       
						

					</div><!--features_items-->
					
					
				</div>
			</div>
		</div>
	</section>

    <?php
        include('include/footer.php');
    ?>


    <script src="js/jquery.js"></script>
    <script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>

</html>