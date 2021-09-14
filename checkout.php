<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Kiểm Tra Thanh Toán | PSP-BOOK</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
</head><!--/head-->

<body>
	<?php 
	include('include/header.php')
	
	?>
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="index.php">Trang Chủ</a></li>
				  <li class="active">Kiểm tra thanh toán</li>
				</ol>
			</div><!--/breadcrums-->

	
			

			<div class="shopper-informations">
				<div class="row">
				
					<div class="col-sm-12 clearfix">
						<div class="bill-to">
							<p>Thông tin đặt hàng</p>
							<div class="form-one">
								<form>
								
									<input type="text" placeholder="Email*">
									<input type="text" placeholder="Họ và tên  *">
									<input type="text" placeholder="Số điện thoại *">
									<input type="text" placeholder="Địa Chỉ">
									<textarea name="message"  placeholder="ghi chú đơn hàng" rows="16"></textarea>
									<input type="submit" value="Xong" name="send_order" class="btn btn-primary btn-small">
								</form>
							</div>
							
						</div>
					</div>
							
				</div>
			</div>
			<div class="review-payment">
				<h2>Xem lại & Thanh toán</h2>
			</div>

			<div class="table-responsive cart_info">
			<table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td class="image">Hình ảnh </td>
                            <td class="description">Tên sản phẩm</td>
                            <td class="price">Giá Tiền</td>
                            <td class="quantity">Số Lượng</td>
                            <td class="total">Tổng Tiền</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="cart_product">
                                <a href=""><img src="images/shop/sp1.jpg"  style="width: 7%;"alt=""></a>
                            </td>
                            <td class="cart_description">
                                <h4><a href="">đắc nhân tâm</a></h4>

                            </td>
                            <td class="cart_price">
                                <p><?php echo number_format("1000000",0,",",".")."đ"; ?></p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <a class="cart_quantity_up" href=""> + </a>
                                    <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                    <a class="cart_quantity_down" href=""> - </a>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price"><?php echo number_format("1000000",0,",",".")."đ"; ?></p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href=""><i style="color: red" class="fa fa-trash-o "></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="cart_product">
                                <a href=""><img src="images/shop/sp1.jpg"  style="width: 7%;"alt=""></a>
                            </td>
                            <td class="cart_description">
                                <h4><a href="">đắc nhân tâm</a></h4>

                            </td>
                            <td class="cart_price">
                                <p><?php echo number_format("1000000",0,",",".")."đ"; ?></p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <a class="cart_quantity_up" href=""> + </a>
                                    <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                    <a class="cart_quantity_down" href=""> - </a>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price"><?php echo number_format("1000000",0,",",".")."đ"; ?></p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href=""><i style="color: red" class="fa fa-trash-o "></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="cart_product">
                                <a href=""><img src="images/shop/sp1.jpg"  style="width: 7%;"alt=""></a>
                            </td>
                            <td class="cart_description">
                                <h4><a href="">đắc nhân tâm</a></h4>

                            </td>
                            <td class="cart_price">
                                <p><?php echo number_format("1000000",0,",",".")."đ"; ?></p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <a class="cart_quantity_up" href=""> + </a>
                                    <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                    <a class="cart_quantity_down" href=""> - </a>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price"><?php echo number_format("1000000",0,",",".")."đ"; ?></p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href=""><i style="color: red" class="fa fa-trash-o "></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="cart_product">
                                <a href=""><img src="images/shop/sp1.jpg"  style="width: 7%;"alt=""></a>
                            </td>
                            <td class="cart_description">
                                <h4><a href="">đắc nhân tâm</a></h4>

                            </td>
                            <td class="cart_price">
                                <p><?php echo number_format("1000000",0,",",".")."đ"; ?></p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <a class="cart_quantity_up" href=""> + </a>
                                    <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                    <a class="cart_quantity_down" href=""> - </a>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price"><?php echo number_format("1000000",0,",",".")."đ"; ?></p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href=""><i style="color: red" class="fa fa-trash-o "></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="cart_product">
                                <a href=""><img src="images/shop/sp1.jpg"  style="width: 7%;"alt=""></a>
                            </td>
                            <td class="cart_description">
                                <h4><a href="">đắc nhân tâm</a></h4>

                            </td>
                            <td class="cart_price">
                                <p><?php echo number_format("1000000",0,",",".")."đ"; ?></p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <a class="cart_quantity_up" href=""> + </a>
                                    <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                    <a class="cart_quantity_down" href=""> - </a>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price"><?php echo number_format("1000000",0,",",".")."đ"; ?></p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href=""><i style="color: red" class="fa fa-trash-o "></i></a>
                            </td>
                        </tr>

                      
                    </tbody>
                </table>
			</div>
			<div class="payment-options">
					<span>
						<label><input type="radio" name="payment"> Thanh toán qua thẻ ngân hàng</label>
					</span>
					<span>
						<label><input type="radio" name="payment"> Thanh toán khi nhận hàng</label>
					</span>
					<input type="submit" value="Đặt hàng" style="margin-top: 0;" name="send_order" class="btn btn-primary btn-big">
					
				</div>
		</div>
	</section> <!--/#cart_items-->

	

<?php
	include('include/footer.php');

?>


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>