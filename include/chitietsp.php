<?php
 if(isset($_GET['id']))
 {
     $id = $_GET['id'];
 }
 else
 {
     $id ="";
 }
  $sql_chitiet = mysqli_query($con, "SELECT * FROM tbl_sanpham WHERE sanpham_id ='$id'");
  $sql_dm = mysqli_query($con, "SELECT * FROM  tbl_sanpham WHERE sanpham_id  NOT IN ($id) LIMIT 2,7 ");
  

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
									<h4 class="panel-title"><a href="?quanly=danhmuc&id=<?php echo $category_item['category_id']?>"><?php echo $category_item['category_name'];?></a></h4>
								</div>
							</div>
                            <?php
                             }
                            ?>
							
						</div><!--/category-products-->

                    </div>
                </div>
                
            <!--  chi tiết sản phẩm -->
        
            <?php
                while ($chitiet=mysqli_fetch_array($sql_chitiet)) {
                    ?>
                <div class="col-sm-9 padding-right">
                   
                    <div class="product-details">
                    <div class="three" >
							<h2 style="background-color: #fff; color:aqua">Chi Tiết Sản Phẩm</h2>
					</div>
                        <!--product-details-->
                        
                        <div class="col-sm-5">
                            <div class="view-product zoom">
                            <img src="images/product/<?php echo $chitiet['sanpham_image']?>" class="newarrival" alt="" />
                            </div>
                           
                        </div>
                        
                        <div class="col-sm-7">
                            <div class="product-information">
                                <!--/product-information-->
                              
                                <h2><?php echo $chitiet['sanpham_name'] ?></h2>
                                <?php
                                    if ($chitiet['sanpham_soluong'] >0) {
                                        ?>
                                <span>
								<span class="product-price" style="color: #e21515;"><?php echo number_format($chitiet['sanpham_giakhuyenmai'], 0, ",", ".")."đ" ?></span>
                                <label>Số Lượng có sẵn:</label>
                                <input type="text" value="<?php echo $chitiet['sanpham_soluong'] ?>" />
                                </span>
                                <form action="?quanly=giohang" method="POST"> 
                                    <fieldset>
                                        <input type="hidden" name="tensanpham" value="<?php echo $chitiet['sanpham_name']?>"/>
                                        <input type="hidden" name="sanpham_id" value="<?php echo $chitiet['sanpham_id']?>"/>
                                        <input type="hidden" name="giasanpham" value="<?php echo $chitiet['sanpham_gia']?>"/>
                                        <input type="hidden" name="hinhanh" value="<?php echo $chitiet['sanpham_image']?>"/>
                                        <input type="hidden" name="soluong" value="1"/>
                                        <input type="submit" name="themgiohang" value="Thêm giỏ hàng"class="btn btn-default add-to-cart" /> 
                                        <!-- <a href="?quanly=giohang" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a> -->
                                    </fieldset>
                                <p><b>Tình trạng:</b> Mới 100 %</p> 
                              
                                <p><b>Nhà xuất bản:</b>
                                <?php
                                   $sql_th = mysqli_query($con, "SELECT * FROM tbl_brand,tbl_sanpham WHERE tbl_brand.brand_id = tbl_sanpham.brand_id AND tbl_sanpham.brand_id = $chitiet[brand_id] ORDER BY tbl_sanpham.sanpham_id DESC");
                                        $row_th=mysqli_fetch_array($sql_th);
                                        echo $row_th['brand_name']; ?>
                                </p>
                                <a href=""><img src="images/shop/share.png" class="share img-responsive"  alt="" /></a>
                                </form> 
                                <?php
                                    } else {
                                        ?>
                                <p style="color:#e21515" >Sản phẩm đã bán hết , mong quý khách quay lại lần sau !</p>
                                <?php
                                    } ?>
                               
                               
                            </div><!--/product-information-->
                           
                            <hr>
                         <div class="row">
                            <div class="col-sm-4" >
                            <table>
                                <tr>
                                    <td><img src="images/shop/doitra.png" style=" width: 43px;height: 36px; " alt=""></td>
                                    <td style="font-size:12px">7 ngày miễn phí trả hàng</td>
                                </tr>
                            </table>
                            </div>
                            <div class="col-sm-4" >
                            <table>
                                <tr>
                                    <td><img  src="images/shop/chinhhang.png" style=" width: 43px;height: 36px; " alt=""></td>
                                    <td style="font-size:12px">Hàng chính hãng 100%</td>
                                </tr>
                            </table>
                            </div>
                            <div class="col-sm-4">
                               
                                <table>
                                <tr>
                                    <td><img  src="images/shop/ship.png" style=" width: 43px;height: 36px; " alt=""></td>
                                    <td style="font-size:12px">Miễn phí vận chuyển trên mọi miền</td>
                                </tr>
                            </table>
                            </div>
                           
                            </div>
                        </div>
                    </div>
                    <!--/product-details-->

                    <div class="category-tab shop-details-tab">
                        <!--category-tab-->
                        <div class="col-sm-12">
                        <ul class="nav nav-tabs">
								<li class="active"><a href="#details" data-toggle="tab">Mô tả sản phẩm</a></li>
								<li><a href="#companyprofile" data-toggle="tab">Chi tiết sản phẩm</a></li>
								
							</ul>
                        </div>
                        <div class="tab-content">
                        <div class="tab-pane fade active in" id="details" >
                                <p><?php echo $chitiet['sanpham_mota'] ?></p>
							</div>
							<div class="tab-pane fade" id="companyprofile" >
                                <p><?php echo $chitiet['sanpham_chitiet'] ?></p>
                            </div>

                         </div>

                    </div>
                    <!--  sản phẩm liên quan  -->
                    <div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Sản phẩm liên quan</h2>

					
                      <?php  while ($row_dm=mysqli_fetch_array($sql_dm)) {
                                        
                                     ?>          
                        <div class="col-sm-4 ">
                            <div class="product-image-wrapper">
								<div class="single-products">
                                        <a href="?quanly=chitietsp&id=<?php echo  $row_dm['sanpham_id'] ?>">
                                            <div class="productinfo text-center">
                                                <img src="images/product/<?php echo  $row_dm['sanpham_image']; ?>"  alt="" />
                                                <p style="height: 20px;">
												<span class="new_price"><?php echo number_format($row_dm['sanpham_giakhuyenmai'], 0, ",", ".")."đ"; ?></span>
												<span class="old_price"><?php echo number_format($row_dm['sanpham_gia'], 0, ",", ".")."đ"; ?></span>
												</p>
												<p class="product-name" ><?php echo  $row_dm['sanpham_name']; ?></p>
												<form action="?quanly=giohang" method="POST"> 
													<fieldset>
													<input type="hidden" name="tensanpham" value="<?php echo  $row_dm['sanpham_name']?>"/>
													<input type="hidden" name="sanpham_id" value="<?php echo  $row_dm['sanpham_id']?>"/>
													<input type="hidden" name="giasanpham" value="<?php echo  $row_dm['sanpham_gia']?>"/>
													<input type="hidden" name="hinhanh" value="<?php echo  $row_dm['sanpham_image']?>"/>
													<input type="hidden" name="soluong" value="1"/>
													<input type="submit" name="themgiohang" value="Thêm giỏ hàng"class="btn btn-default add-to-cart" /> 
												
													</fieldset>
												</form> 
                                            </div>
                                        </a>
							
								</div>
                              
								
							</div>
						</div>
                        <?php
                    }?>
								
					</div><!--/recommended_items-->
                </div>

                </div>
                <?php 
                } ?>
            </div>
        </div>
    </section>


