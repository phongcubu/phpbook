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
    <title>Sản Phẩm | PSP-BOOK</title>
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
     
     include('include/sliderbar.php'); 
?>
   
    <section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3" >
					<div class="left-sidebar" >
						<h2>Danh Mục</h2>
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
							<h2>NHÀ XUẤT BẢN</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right"></span></a></li>

								</ul>
							</div>
						</div><!--/brands_products-->
						<div ><!--shipping-->
							<img style="margin: 10px auto;" src="images/shop/nha-sach-tiki.jpg" alt="" />
						</div><!--/shipping-->

					</div>
				</div>
				
				<div class="col-sm-9 padding-right" >
                                    
                    <?php 
                        $sql_cate_home = mysqli_query($con,' SELECT * FROM tbl_category ORDER BY category_id DESC');
                        while($category_item_home = mysqli_fetch_array($sql_cate_home )){
							$id_category = $category_item_home['category_id'];
                    ?>
					<div class="features_items"><!--features_items-->
					<div class="three">
							<h2 ><?php echo $category_item_home['category_name']; ?></h2>
					</div>

						<!--  lấy sản phẩm -->
						<?php 
                        $sql_product = mysqli_query($con,' SELECT * FROM tbl_sanpham ORDER BY sanpham_id DESC');
                        while ($sanpham_item = mysqli_fetch_array($sql_product)) {
                            if ($sanpham_item['category_id'] == $id_category) {
                        ?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
                                <a href="chi-tiet-san-pham.php?id=<?php echo $sanpham_item['sanpham_id'];  ?>">
                                <div class="single-products">
										<div class="productinfo text-center">
											<img src="images/product/<?php echo $sanpham_item['sanpham_image']; ?>" alt="" />
											<!-- <h2></h2> -->
											<p style="height: 20px;">
												<span class="new_price"><?php echo number_format($sanpham_item['sanpham_giakhuyenmai'], 0, ",", ".")."đ"; ?></span>
												<span class="old_price"><?php echo number_format($sanpham_item['sanpham_gia'], 0, ",", ".")."đ"; ?></span>
											</p>
											<p class="product-name" ><?php echo $sanpham_item['sanpham_name']; ?></p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ </a>
										</div>

								</div>
                                </a>
	
							</div>
						</div>
						<?php
                            }
                        }
						?> <!--  kết thúc phần lấy sản phẩm -->
					</div><!--features_items-->
					
					<?php
                        }?>
					
				</div>
			</div>
		</div>
	</section>

   
    <?php 
    
     include('include/footer.php');
    ?>



    <script src="js/jquery.js "></script>
    <script src="js/price-range.js "></script>
    <script src="js/jquery.scrollUp.min.js "></script>
    <script src="js/bootstrap.min.js "></script>
    <script src="js/jquery.prettyPhoto.js "></script>
    <script src="js/main.js "></script>
</body>

</html>