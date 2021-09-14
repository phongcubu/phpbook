<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>GIỎ HÀNG | PSP BOOK</title>
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

    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Giỏ Hàng</li>
                </ol>
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
        </div>
    </section>
    <!--/#cart_items-->

    <section id="do_action">
        <div class="container">
            
            <div class="row">
               
                <div class="col-sm-6">
                    <div class="total_area">
                        <ul>
                            <li>Tổng <span><?php echo number_format("1000000",0,",",".")."đ"; ?></span></li>
                          
                            <li>Phí ship <span><?php echo number_format("10000",0,",",".")."đ"; ?></span></li>
                            <li>Tổng Tiền<span><?php echo number_format("1000000",0,",",".")."đ"; ?></span></li>
                        </ul>
                        <a class="btn btn-default update" href="">Quay lại trang chủ</a>
                        <a class="btn btn-default check_out" href="">Thanh Toán</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#do_action-->



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