<!-- đăng nhập  -->
<?php
//  đăng nhập
if(isset($_POST['dangnhap']))
{
    $email = $_POST['email_login'];
    $matkhau = md5($_POST['password_login']);
   
    if($email==''|| $matkhau=='')
    {
        echo '<script>alert("Làm ơn không để trống")</script>';
       
    }
    else{
         $sql_khachhang = mysqli_query($con,"SELECT * FROM tbl_khachhang WHERE email='$email' AND  passwords='$matkhau' LIMIT 1");
         $count = mysqli_num_rows($sql_khachhang);
         $row_login = mysqli_fetch_array($sql_khachhang);
         if($count >0){
             $_SESSION['dangnhap'] = $row_login['names'];
             $_SESSION['khachhang_id'] = $row_login['khachhang_id'];
          
         
        }else{
            echo '<script>alert("Tài khoản mật khẩu sai")</script>';
           
        }
       
    }
}
// đăng xuất
elseif(isset($_GET['dangxuat_id']))
{
    $dangxuat_id =  $_GET['dangxuat_id'];
   
    if( $dangxuat_id ==  $_SESSION['khachhang_id'])
    {
        unset($_SESSION['dangnhap']);
        header('Location: index.php');
    }
}
//  đắng ký 
elseif(isset($_POST['dangky']))
{
   
        
        $name = isset($_POST['name'])? mysqli_real_escape_string($con,$_POST['name']) : '';
        $phone = isset($_POST['phone']) ? mysqli_real_escape_string($con,$_POST['phone']) : '';
        $email = isset($_POST['email']) ? mysqli_real_escape_string($con,$_POST['email']) : '';
        $password = isset($_POST['password']) ? md5($_POST['password']) : '';
        $note = isset($_POST['note']) ? mysqli_real_escape_string($con,$_POST['note']) : '';
        $address = isset($_POST['address']) ? mysqli_real_escape_string($con,$_POST['address']) : '';
        $giaohang = isset($_POST['giaohang']) ? mysqli_real_escape_string($con,$_POST['giaohang']) : '';
    
        //kiểm tra user và email có bị trung nhau khong và //  thực thi câu lệnh ?
        $sql = "SELECT * FROM tbl_khachhang WHERE names = '$name' OR email = '$email' ";
        $result = mysqli_query($con,$sql);
        
         // Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
        if(mysqli_num_rows($result)>0)
        {
            // Sử dụng javascript để thông báo
        echo '<script language="javascript">alert("Bị trùng tên hoặc tài khoản đã được đăng Ký!");
                window.location="index.php";</script>';

        // Dừng chương trình
        die ();
        }
        else {
            $sql = "INSERT INTO tbl_khachhang(names,phone,email,passwords,addresss,note,giaohang) VALUES ('$name','$phone','$email','$password','$address','$note','$giaohang')";
            
            if (mysqli_query($con, $sql)){
                echo '<script language="javascript">alert("đăng ký thành công"); </script>';
                $sql_kh = mysqli_query($con, "SELECT * FROM  tbl_khachhang ORDER BY khachhang_id LIMIT 1");
                $khach_hang = mysqli_fetch_array( $sql_kh );
                $_SESSION['dangnhap']=$name;
                $_SESSION['khachhang_id'] = $khach_hang['khachhang_id'];
                $_SESSION['phuongthuc'] =   $khach_hang['giaohang'];
                header('Location:index.php');
            }
            else {
            echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="index.php";</script>';
            }
        }
        
}
?>
<header id="header">
        <!--header-->
        <div class="header_top">
            <!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-10">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i><span style="color:red"> Hotline:</span>0814515062 - Phong | 0994494813 - Sơn | 0994494813 - Phương</a></li>
                                <li><a href="mailto:pspbookk@gmail.com"><i class="fa fa-envelope"></i> pspbookk@gmail.com</a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Mua hàng : 8:00am - 21h30pm</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#" class="nav_icon"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="nav_icon"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="nav_icon"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header_top-->

        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="index.php"><img style="width:90px;height: 70px;border-radius: 50%;" src="images/shop/logo2.jpg" alt="" /></a>
                        </div>
                        <div class="btn-group pull-right">
                            <div class="btn-group">

                            </div>

                            <div class="btn-group">

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8" style="margin-top:16px; ">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <?php if(isset($_SESSION['dangnhap'])){
                                    ?>   
                                    <li><a href="checkout.php"><i class="fa fa-user"></i><?php echo $_SESSION['dangnhap'];  ?> </a></li>
                                   
                                
                                <li><a href="?quanly=giohang"><i class="fa fa-shopping-cart "></i> Giỏ Hàng</a></li>
                                <li><a href="?quanly=dangxuat&dangxuat_id=<?php  echo $_SESSION['khachhang_id']; ?>"><i class="fa fa-sign-out "></i> Đăng Xuất</a></li>
                                <?php }else{ ?>
                                <li >
                                    <a href="" data-toggle="modal" data-target="#dangnhap"><i class="fa fa-sign-in "></i>Đăng Nhập</a>
                                </li>
                                <li>
                                    <a href="" data-toggle="modal" data-target="#dangky"><i class="fa fa-user-plus "></i>Đăng Ký</a>
                                </li>
                                <?php } ?>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-middle-->


        <div class="header-bottom ">
            <!--header-bottom-->
            <div class="container ">
                <div class="row ">
                    <div class="col-sm-5 ">
                        <div class="navbar-header ">
                            <button type="button " class="navbar-toggle " data-toggle="collapse " data-target=".navbar-collapse ">
                                <span class="sr-only ">Toggle navigation</span>
                                <span class="icon-bar "></span>
                                <span class="icon-bar "></span>
                                <span class="icon-bar "></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left ">
                            <ul class="nav navbar-nav collapse navbar-collapse ">
                                <li class="active"><a href="index.php" >Trang Chủ</a></li>
                                <li class=""><a href="?quanly=shop">Sản Phẩm</a></li> 
                                <li>
                                    <a href="?quanly=tintuc" class="nav-link" role="button">
                                        Tin Tức
                                    </a>
                                </li>
                                <li ><a href="lienhe.php">Liên Hệ</a></li>
                               
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        
                      
						<div class="col-sm-7 agileits_search search_box pull-right " style="margin-top: -10px;">
							<form class="form-inline" action="index.php?quanly=timkiem" method="POST">
								<input class="form-control mr-sm-2" name="key_product" type="search" placeholder="Tìm kiếm sản phẩm" aria-label="Search" required>
								<button class="btn my-2 my-sm-0" name="search_btn" type="submit">Tìm kiếm</button>
							</form>
						</div>
						<!-- //search -->
                    </div>
                </div>
            </div>
        </div>
        <!--/header-bottom-->
    </header>
    <!--/header-->

    	<!-- log in -->
	<div class="modal fade" id="dangnhap" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center"  style="font-size: 26px;text-transform: uppercase;color: aqua;">Đăng nhập</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="" method="POST">
						<div class="form-group">
							<label class="col-form-label">Email</label>
							<input type="text" class="form-control" placeholder="điền email " name="email_login" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Mật khẩu</label>
							<input type="password" class="form-control" placeholder=" điền mật khẩu " name="password_login" required="">
						</div>
						<div class="right-w3l">
							<input  type="submit" class="form-control input_hover" name="dangnhap" value="Đăng nhập">
						</div>
						
						<p class="text-center dont-do mt-3">Chưa có tài khoản?
							<a href="#" data-toggle="modal" data-target="#dangky">
								Đăng ký</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
<!-- register -->
<div class="modal fade" id="dangky" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="total_area">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center" style=" font-size: 26px;text-transform: uppercase;color: aqua;">Đăng ký</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="" method="POST">
						<div class="form-group">
							<label class="col-form-label">Tên khách hàng</label>
							<input type="text" class="form-control" placeholder="  " name="name" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Email</label>
							<input type="email" class="form-control" placeholder=" " name="email" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Phone</label>
							<input type="text" class="form-control" placeholder=" " name="phone"  required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Address</label>
							<input type="text" class="form-control" placeholder=" " name="address"  required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Password</label>
							<input type="password" class="form-control" placeholder=" " name="password"  required="">
						
						</div>
						<div class="form-group">
							<label class="col-form-label">Ghi chú</label>
							<textarea class="form-control" name="note"></textarea>
						</div>
                        <div class="controls form-group">
										<select class="option-w3ls" name="giaohang">
											<option>Chọn hình thức thanh toán sản phẩm</option>
											<option value="1">Thanh toán ATM</option>
											<option value="0">Thanh toán khi nhận hàng</option>
										</select>
									</div>
						
						<div class="right-w3l">
							<input  type="submit" class="form-control input_hover" name="dangky" value="Đăng ký">
						</div>
					
					</form>
				</div>
			</div>
		</div>
    </div>
</div>
	<!-- //modal -->