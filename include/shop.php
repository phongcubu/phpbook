<?php
	$page = 'shop';
?>
    <section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3" >
					<div class="left-sidebar" >
						
					
						<div class="brands_products" ><!--brands_products-->
							<h2>NHÀ XUẤT BẢN</h2>
							<div class="brands-name">
								
								<ul class="nav nav-pills nav-stacked">
									<?php
									 $sql_brand = mysqli_query($con, "SELECT * FROM tbl_brand ORDER BY brand_id DESC");
									while($brand_item = mysqli_fetch_array($sql_brand)){
									?>
									<li><a href="?quanly=thuonghieu&brand_id=<?php echo $brand_item['brand_id']?>"> <span class="pull-right"></span><?php echo $brand_item['brand_name'] ?></a></li>
									<?php
								}?>
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
                                <a href="?quanly=chitietsp&id=<?php echo $sanpham_item['sanpham_id']; ?>">
                                <div class="single-products">
										<div class="productinfo text-center">
											<img src="images/product/<?php echo $sanpham_item['sanpham_image']; ?>" alt="" />
											<!-- <h2></h2> -->
											<p style="height: 20px;">
												<span class="new_price"><?php echo number_format($sanpham_item['sanpham_giakhuyenmai'], 0, ",", ".")."đ"; ?></span>
												<span class="old_price"><?php echo number_format($sanpham_item['sanpham_gia'], 0, ",", ".")."đ"; ?></span>
											</p>
											<p class="product-name" ><?php echo $sanpham_item['sanpham_name']; ?></p>
											<form action="?quanly=giohang" method="POST"> 
                                        <fieldset>
                                            <input type="hidden" name="tensanpham" value="<?php echo $sanpham_item['sanpham_name']?>"/>
                                            <input type="hidden" name="sanpham_id" value="<?php echo $sanpham_item['sanpham_id']?>"/>
                                            <input type="hidden" name="giasanpham" value="<?php echo $sanpham_item['sanpham_gia']?>"/>
                                            <input type="hidden" name="hinhanh" value="<?php echo $sanpham_item['sanpham_image']?>"/>
                                            <input type="hidden" name="soluong" value="1"/>
                                            <input type="submit" name="themgiohang" value="Thêm giỏ hàng"class="btn btn-default add-to-cart" /> 
                                    <!-- <a href="?quanly=giohang" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a> -->
                                	</fieldset>
                                    </form> 
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