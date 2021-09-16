
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
                    <div class="left-sidebar">
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

                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                   
                    <div class="product-details">
                    <div class="three" >
							<h2 style="background-color: #fff; color:aqua">Chi Tiết Sản Phẩm</h2>
					</div>
                        <!--product-details-->
                        <div class="col-sm-4">
                            <div class="view-product">
                            <img src="images/shop/sp1.jpg" class="newarrival" alt="" />
                            </div>
                           
                        </div>
                        <div class="col-sm-8">
                            <div class="product-information">
                                <!--/product-information-->
                              
                                <h2>Đắc Nhân Tâm</h2>

                                <span>
									<span class="product-price" style="color: #e21515;"><?php echo number_format("1000000",0,",",".")."đ"; ?></span>
                                <label>Số Lượng:</label>
                                <input type="text" value="3" />

                                </span>
                                <button type="button" class="btn btn-fefault cart">
									<i class="fa fa-shopping-cart"></i>
									Thêm vào giỏ
								</button>
                                <p><b>Tình trạng:</b>còn hàng</p>
                                <p><b>Thương Hiệu:</b>Phương Nam</p>
                                <p><b>Danh mục:</b>sách hay cho bé</p>
                            </div><!--/product-information-->

                            <hr>
                         
                            <div class="col-sm-4" style="margin-right: 20px ;"><div><img src="images/shop/doitra.png" alt="" style="height: 80px;"> </div><div>7 ngày miễn phí trả hàng</div></div>
                            <div class="col-sm-3" style="margin-right: 52px ;"><img src="images/shop/chinhhang.png" alt="" style="height: 80px;"><span>Hàng chính hãng 100%</span></div>
                            <div class="col-sm-3"><img src="images/shop/ship.png" alt="" style="height: 80px;"><span>Miễn phí vận chuyển</span></div>
                          
                        </div>
                    </div>
                    <!--/product-details-->

                    <div class="category-tab shop-details-tab">
                        <!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">

                                <li class="active"><a href="#reviews" data-toggle="tab">Mô tả sản phẩm</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="reviews">
                                <div class="col-sm-12">
                                    
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                  

                                  
                                </div>
                            </div>

                        </div>
                    </div>

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