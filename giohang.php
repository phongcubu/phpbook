



<!-- 

 -->
 <?php
 if(isset($_POST['themgiohang'])){
     $tensanpham=$_POST['tensanpham'];
     $sanpham_id=$_POST['sanpham_id'];
     $hinhanh=$_POST['hinhanh'];
     $gia=$_POST['giasanpham'];
     $soluong=$_POST['soluong'];
     $sql_select_giohang = mysqli_query($con,"SELECT * FROM tbl_giohang WHERE sanpham_id='$sanpham_id'");
     $count = mysqli_num_rows($sql_select_giohang);
     if($count>0){
        $row_sanpham=mysqli_fetch_array($sql_select_giohang);
        $soluong=$row_sanpham['soluong']+1;
        $sql_giohang="UPDATE tbl_giohang SET soluong='$soluong' WHERE sanpham_id='$sanpham_id'";
     }else{
         $soluong=$soluong;
         $sql_giohang="INSERT INTO tbl_giohang(tensanpham,sanpham_id,giasanpham,hinhanh,soluong) values('$tensanpham','$sanpham_id','$gia','$hinhanh','$soluong')";
     }
     $insert_row=mysqli_query($con,$sql_giohang);
     if($insert_row==0)
     {
         header('location:index.php?quanly=chitietsp'.$sanpham_id);
     }
    

}elseif(isset($_POST['capnhatsoluong'])){
  
    for($i=0;$i<count($_POST['product_id']);$i++){
        $sanpham_id = $_POST['product_id'][$i];
        $soluong = $_POST['soluong'][$i];
        if($soluong<=0){
            $sql_delete = mysqli_query($con,"DELETE FROM tbl_giohang WHERE sanpham_id='$sanpham_id'");
        }else{
            $sql_update = mysqli_query($con,"UPDATE tbl_giohang SET soluong='$soluong' WHERE sanpham_id='$sanpham_id'");
        }
    }
 
}elseif(isset($_GET['xoa'])){
    $id=$_GET['xoa'];
    $sql_delete=mysqli_query($con,"DELETE FROM tbl_giohang WHERE giohang_id='$id'");

}
//  thanh toán khi chưa đăng nhập
elseif(isset($_POST['thanhtoan'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $note=$_POST['note'];
    $address=$_POST['address'];
    $giaohang=$_POST['giaohang'];
    $sql_khachhang=mysqli_query($con,"INSERT INTO tbl_khachhang(names,phone,email,passwords,addresss,note,giaohang) values ('$name','$phone','$email','$password','$address','$note','$giaohang')");
    if($sql_khachhang){
        $sql_select_khachhang = mysqli_query($con,"SELECT * FROM tbl_khachhang ORDER BY khachhang_id DESC LIMIT 1");
        $mahang = rand(0,9999);
        $row_khachhang = mysqli_fetch_array($sql_select_khachhang);
        $khachhang_id = $row_khachhang['khachhang_id'];
        $_SESSION['dangnhap_home'] = $row_khachhang['names'];
        $_SESSION['khachhang_id'] = $khachhang_id;
        $_SESSION['phuongthuc'] = $row_khachhang['giaohang'];
        if ($_SESSION['phuongthuc'] == 1) {
            for ($i=0;$i<count($_POST['thanhtoan_product_id']);$i++) {
                $sanpham_id = $_POST['thanhtoan_product_id'][$i];
                $soluong = $_POST['thanhtoan_soluong'][$i];
                $total = $_POST['total'];
                $sql_donhang = mysqli_query($con, "INSERT INTO tbl_donhang(sanpham_id,khachhang_id,soluong,mahang) values ('$sanpham_id','$khachhang_id','$soluong','$mahang')");
                $sql_giaodich = mysqli_query($con, "INSERT INTO tbl_giaodich(sanpham_id,soluong,magiaodich,khachhang_id,tong_tien) values ('$sanpham_id','$soluong','$mahang','$khachhang_id','$total')");
                $sql_delete_thanhtoan = mysqli_query($con, "DELETE FROM tbl_giohang WHERE sanpham_id='$sanpham_id'");
                echo '<script language="javascript">window.location="vnpay/index.php";</script>';
            }
            
        }
        else{
            for ($i=0;$i<count($_POST['thanhtoan_product_id']);$i++) {
                $sanpham_id = $_POST['thanhtoan_product_id'][$i];
                $soluong = $_POST['thanhtoan_soluong'][$i];
                $total = $_POST['total'];
                $sql_donhang = mysqli_query($con, "INSERT INTO tbl_donhang(sanpham_id,khachhang_id,soluong,mahang) values ('$sanpham_id','$khachhang_id','$soluong','$mahang')");
                $sql_giaodich = mysqli_query($con, "INSERT INTO tbl_giaodich(sanpham_id,soluong,magiaodich,khachhang_id,tong_tien) values ('$sanpham_id','$soluong','$mahang','$khachhang_id','$total')");
                $sql_delete_thanhtoan = mysqli_query($con, "DELETE FROM tbl_giohang WHERE sanpham_id='$sanpham_id'");
                echo '<script language="javascript">alert("Cảm ơn quý khách đã đặt hàng"); window.location="index.php";</script>';
            }
        }
    }
}
//  thanh toán khi đăng nhập 
elseif(isset($_POST['thanhtoanlogin'])){
    $sql_select_khachhang = mysqli_query($con,"SELECT * FROM tbl_khachhang ORDER BY khachhang_id DESC LIMIT 1");
    $mahang = rand(0,9999);
    $row_khachhang = mysqli_fetch_array($sql_select_khachhang);
    $_SESSION['phuongthuc'] = $row_khachhang['giaohang'];
    $khachhang_id = $_SESSION['khachhang_id'];
    $phuongthuc = $_SESSION['phuongthuc'];
    if ($phuongthuc == 1 ) {
        for ($i=0;$i<count($_POST['thanhtoan_product_id']);$i++) {
            $sanpham_id = $_POST['thanhtoan_product_id'][$i];
            $soluong = $_POST['thanhtoan_soluong'][$i];
            $total = $_POST['total'];
            $sql_donhang = mysqli_query($con, "INSERT INTO tbl_donhang(sanpham_id,khachhang_id,soluong,mahang) values ('$sanpham_id','$khachhang_id','$soluong','$mahang')");
            $sql_giaodich = mysqli_query($con, "INSERT INTO tbl_giaodich(sanpham_id,soluong,magiaodich,khachhang_id,tong_tien) values ('$sanpham_id','$soluong','$mahang','$khachhang_id','$total')");
            $sql_delete_thanhtoan = mysqli_query($con, "DELETE FROM tbl_giohang WHERE sanpham_id='$sanpham_id'");
            echo '<script language="javascript">window.location="vnpay/index.php";</script>';
        }
    }
    else{
        for ($i=0;$i<count($_POST['thanhtoan_product_id']);$i++) {
            $sanpham_id = $_POST['thanhtoan_product_id'][$i];
            $soluong = $_POST['thanhtoan_soluong'][$i];
            $total = $_POST['total'];
            $sql_donhang = mysqli_query($con, "INSERT INTO tbl_donhang(sanpham_id,khachhang_id,soluong,mahang) values ('$sanpham_id','$khachhang_id','$soluong','$mahang')");
            $sql_giaodich = mysqli_query($con, "INSERT INTO tbl_giaodich(sanpham_id,soluong,magiaodich,khachhang_id,tong_tien) values ('$sanpham_id','$soluong','$mahang','$khachhang_id','$total')");
            $sql_delete_thanhtoan = mysqli_query($con, "DELETE FROM tbl_giohang WHERE sanpham_id='$sanpham_id'");
            echo '<script language="javascript">alert("Cảm ơn quý khách đã đặt hàng"); window.location="index.php";</script>';
        }
    }
}

 ?>
<section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"></li>
                </ol>
            </div>
            <div class="table-responsive cart_info">
            <?php
			$sql_lay_giohang = mysqli_query($con,"SELECT * FROM tbl_giohang ORDER BY giohang_id DESC");
			?>
                <form action="" method="POST">
                <table class="table table-condensed">
                    
                    <thead>
                        <tr class="cart_menu">
                            <td class="invert">Thứ tự </td>
                            <td class="image">Hình ảnh </td>
                            <td class="description">Tên sản phẩm</td>
                            <td class="price">Giá Tiền</td>
                            <td class="quantity">Số Lượng</td>
                            <td class="total">Tổng Tiền</td>
                            <td class="delete">Quản lý</td> 
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i=0;
                        $total=0;
                        $totall=0;
                        while ($fetch_giohang = mysqli_fetch_array($sql_lay_giohang)){
                            $i++;
                            $subtotal=$fetch_giohang['soluong']*$fetch_giohang['giasanpham'];
                            $total+=$subtotal;
                            $totall=$total+10000;
                            
                        ?>
                    <tr>
                    <td class="invert" style="text-align: center;"> <?php echo $i?></td>
                            <td class="cart_product">
                                
                                    <img src="images/product/<?php echo $fetch_giohang['hinhanh']?>" style ="width: 36px;margin-left: -24px;"alt="">
                                
                            </td>
                            <td class="cart_description">
                                <h4><?php echo $fetch_giohang['tensanpham']?></h4>

                            </td>
                            <td class="cart_price">
                                <p><?php echo number_format($fetch_giohang['giasanpham'])."đ"; ?></p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    
                                    <input class="cart_quantity_input" type="number" min="1" name="soluong[]" value="<?php echo $fetch_giohang['soluong']?>"  >
                                    
                                </div>
                                <input type="hidden"  name="product_id[]" value="<?php echo $fetch_giohang['sanpham_id']?>"  >
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price"><?php echo number_format($subtotal)."đ"; ?></p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href="?quanly=giohang&xoa=<?php echo $fetch_giohang['giohang_id']?>"><i style="color: red" class="fa fa-trash-o " ></i> </a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                        
                        <tr style="text-align:center">
                        <td> </td>
                          <td colspan="7">
                          <div class="total_area" style="color: #696763;padding: 8px 25px 30px 0;border:none;margin: auto; width: 330px">
                                    <ul>
                                        <li>Tổng <span><?php echo number_format($total)."đ"?></span></li>
                                    
                                        <li>Phí ship <span><?php echo number_format("10000",0,",",".")."đ"; ?></span></li>
                                        <li>Tổng Tiền<span  ><?php echo number_format($totall)."đ"?></span></li>
                                    </ul>
                                   
                                    <!-- <a class="btn btn-default check_out" href="">Thanh Toán</a> -->
                                </div>
                         
                              <input style="color: #fff;" type="submit" value=" Cập nhật giỏ hàng " class="btn btn-primary add-to-cart" name="capnhatsoluong"  >
                             <!-- thanh toán khi có đăng nhập  -->
                            </td>
                        </tr> 
                    </tbody>
                  
                   
                </table>
                </form>
            </div>
        </div>
    </section>
    <!--/#cart_items-->

    <section id="do_action">
        <div class="container">
            
            <div class="row">
            <?php if(!isset($_SESSION['dangnhap'])) {?>
            <div class="col-sm-6">
                <div class="chose_area">
                    <h4 class="mb-sm-4 mb-3" style="text-align: center;font-size: 24px;color: aqua;text-transform: uppercase;">Thêm địa chỉ giao hàng</h4>
					<form action="" method="POST" class="creditly-card-form agileinfo_form">
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									<div class="controls form-group" style="margin-left: 19px;">
										<input class="billing-address-name form-control" type="text" name="name" placeholder="Điền tên" required="">
									</div>
								 
									<div class="controls form-group"style="margin-left: 19px;">
                                    <input type="text" class="form-control" placeholder="Số phone" name="phone" required="">
									</div>
									<div class="controls form-group"style="margin-left: 19px;">
                                    <input type="text" class="form-control" placeholder="Địa chỉ" name="address" required="">
									</div>
									<div class="controls form-group"style="margin-left: 19px;">
										<input type="text" class="form-control" placeholder="Email" name="email" required="">
									</div>
									<div class="controls form-group"style="margin-left: 19px;">
										<input type="password" class="form-control" placeholder="Password" name="password" required="">
									</div>
									<div class="controls form-group"style="margin-left: 19px;">
										<textarea style="resize: none;" class="form-control" placeholder="Ghi chú" name="note" required=""></textarea>  
									</div>
									<div class="controls form-group"style="margin-left: 19px;">
										<select class="option-w3ls" name="giaohang">
											<option>Chọn hình thức giao hàng</option>
											<option value="1">Thanh toán ATM</option>
											<option value="0">Thanh toán khi nhận hàng</option>
										</select>
									</div>
								</div>
								<?php
                                $sql_lay_giohang = mysqli_query($con, "SELECT * FROM tbl_giohang ORDER BY giohang_id DESC");
                                while ($row_thanhtoan = mysqli_fetch_array($sql_lay_giohang)) {
                                    ?>
									<input type="hidden" name="thanhtoan_product_id[]" value="<?php echo $row_thanhtoan['sanpham_id'] ?>">
									<input type="hidden" name="thanhtoan_soluong[]" value="<?php echo $row_thanhtoan['soluong'] ?>">
                                    <input type="hidden" name="total" value="<?php echo $totall?>" >
                                    
								<?php
                                }
                                ?>
								<input type="submit" name="thanhtoan" class="btn btn-default check_out" style="width: 20%" value="Thanh toán">
                                <a class="btn btn-default update" href="/index.php">Quay lại trang chủ</a>
							</div>
						</div>
					</form>
            </div>
            </div>
            <?php }
            ?>

        <?php 
      
        if(isset($_SESSION['dangnhap'])) {
      
            
        ?>
            <div class="col-sm-6">
                <div class="chose_area">
                    <h4 class="mb-sm-4 mb-3" style="text-align: center;font-size: 24px;color: aqua;text-transform: uppercase;">Thêm địa chỉ giao hàng</h4>
					<form action="" method="POST" class="creditly-card-form agileinfo_form">
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									<div class="controls form-group" style="margin-left: 19px;">
										<input class="billing-address-name form-control" type="text" name="name" placeholder="Điền tên" required="">
									</div>
								 
									<div class="controls form-group"style="margin-left: 19px;">
                                    <input type="text" class="form-control" placeholder="Số phone" name="phone" required="">
									</div>
									<div class="controls form-group"style="margin-left: 19px;">
                                    <input type="text" class="form-control" placeholder="Địa chỉ" name="address" required="">
									</div>
									<div class="controls form-group"style="margin-left: 19px;">
										<input type="text" class="form-control" placeholder="Email" name="email" required="">
									</div>
									<div class="controls form-group"style="margin-left: 19px;">
										<input type="password" class="form-control" placeholder="Password" name="password" required="">
									</div>
									<div class="controls form-group"style="margin-left: 19px;">
										<textarea style="resize: none;" class="form-control" placeholder="Ghi chú" name="note" required=""></textarea>  
									</div>
									<div class="controls form-group"style="margin-left: 19px;">
										<select class="option-w3ls" name="giaohang">
											<option>Chọn hình thức giao hàng</option>
											<option value="1">Thanh toán ATM</option>
											<option value="0">Thanh toán khi nhận hàng</option>
										</select>
									</div>
								</div>
								<?php
                                  $sql_giohang = mysqli_query($con,"SELECT * FROM tbl_giohang ORDER BY giohang_id DESC");
                                  $count = mysqli_num_rows($sql_giohang);
                                  if($count>0){
                                      while($row= mysqli_fetch_array($sql_giohang)){
                               
                                    ?>
									<input type="hidden" name="thanhtoan_product_id[]" value="<?php echo $row_thanhtoan['sanpham_id'] ?>">
									<input type="hidden" name="thanhtoan_soluong[]" value="<?php echo $row_thanhtoan['soluong'] ?>">
                                    <input type="hidden" name="total" value="<?php echo $totall?>" >
                                    
								<?php
                                }}
                                ?>
								<input type="submit" name="thanhtoan" class="btn btn-default check_out" style="width: 20%" value="Thanh toán">
                                <a class="btn btn-default update" href="/index.php">Quay lại trang chủ</a>
							</div>
						</div>
					</form>
            </div>
            </div>
            <?php }
            ?>
               
                
            </div>
        </div>
    </section>
<!--/#do_action-->


<!-- 
<?php 
								
                                
                                // kiểm tra phải có tên ng dùng và trong giỏ hàng phải có sản phẩm mới hiện nút thanh toán
								if(isset($_SESSION['dangnhap']) && $count>0){
									while($row= mysqli_fetch_array($sql_giohang)){
								?>
								
								<input type="hidden" name="thanhtoan_product_id[]" value="<?php echo $row['sanpham_id'] ?>">
								<input type="hidden" name="thanhtoan_soluong[]" value="<?php echo $row['soluong'] ?>">
                                <input type="hidden" name="total" value="<?php echo $totall?>" >
								<?php 
							    }
								?>
								<input style="margin-top: -9px; margin-left:10px" type="submit" class="btn btn-primary" value="Thanh toán giỏ hàng" name="thanhtoanlogin">
		
								<?php
								} 
								?>
 -->