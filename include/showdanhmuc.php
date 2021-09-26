<?php 
//  kiểm tra id của tưng danh mục có tồn tại ?
if(isset($_GET['id']))
{
	$id = $_GET['id'];
}
else{
	$id ='';
}
//  lấy sản phẩm theo từng id danh mục
$sql_cate = mysqli_query($con, "SELECT * FROM tbl_category,tbl_sanpham  WHERE tbl_category.category_id = tbl_sanpham.category_id AND tbl_sanpham.category_id = '$id' 

		ORDER BY tbl_sanpham.sanpham_id DESC");
// lấy title
$sql_cate_title = mysqli_query($con, "SELECT * FROM tbl_category,tbl_sanpham  WHERE tbl_category.category_id = tbl_sanpham.category_id AND tbl_sanpham.category_id = '$id' 

		ORDER BY tbl_sanpham.sanpham_id DESC");
$sql_title = mysqli_fetch_array($sql_cate_title);
$title = $sql_title['category_name']

?> 
<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar" >
						<h2 >Danh Mục</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<?php 
                             $sql_category = mysqli_query($con,' SELECT * FROM tbl_category ORDER BY category_id DESC');
                                while ($category_item = mysqli_fetch_array($sql_category)) {
                                    ?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="?quanly=danhmuc&id=<?php echo $category_item['category_id'] ?>"><?php echo $category_item['category_name'];?></a></h4>
								</div>
							</div>
                            <?php
                                }
                            ?>

							
						</div><!--/category-products-->
					
						<div class="brands_products" ><!--brands_products-->
							<h2 >NHÀ XUẤT BẢN </h2>
							<div class="brands-name">
								
								<ul class="nav nav-pills nav-stacked">
								<?php
								 $sql_brand = mysqli_query($con,"SELECT * FROM tbl_brand ORDER BY brand_id DESC ");
                                while ($brand_item= mysqli_fetch_array($sql_brand)) {
                                ?>
									<li><a href="?quanly=thuonghieu&brand_id=<?php echo $brand_item['brand_id'] ?>"><?php echo $brand_item['brand_name']; ?></a></li>
								<?php
                                }?>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						
						<div class="brands_products" ><!--products sales-->
							<h2  style="margin-top:20px;">SẢN PHẨM BÁN CHẠY</h2>
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
					<div class="three">
						<h2 > Sản Phẩm <?php echo $title ;?> </h2>
					</div>
                        <?php 
							
                            while($product_item = mysqli_fetch_array($sql_cate)) {
                        ?>
						<div class="col-sm-4 ">
							<div class="product-image-wrapper">
								<div class="single-products">
                                        <a href="?quanly=chitietsp&id=<?php echo $product_item['sanpham_id'] ?>">
                                            <div class="productinfo text-center">
                                                <img src="images/product/<?php echo $product_item['sanpham_image']; ?>"  alt="" />
                                                <p style="height: 20px;">
												<span class="new_price"><?php echo number_format($product_item['sanpham_giakhuyenmai'], 0, ",", ".")."đ"; ?></span>
												<span class="old_price"><?php echo number_format($product_item['sanpham_gia'], 0, ",", ".")."đ"; ?></span>
												</p>
											<p class="product-name" ><?php echo $product_item['sanpham_name']; ?></p>
									<form action="?quanly=giohang" method="POST"> 
                                        <fieldset>
                                            <input type="hidden" name="tensanpham" value="<?php echo $product_item['sanpham_name']?>"/>
                                            <input type="hidden" name="sanpham_id" value="<?php echo $product_itemt['sanpham_id']?>"/>
                                            <input type="hidden" name="giasanpham" value="<?php echo $product_item['sanpham_gia']?>"/>
                                            <input type="hidden" name="hinhanh" value="<?php echo $product_item['sanpham_image']?>"/>
                                            <input type="hidden" name="soluong" value="1"/>
                                            <input type="submit" name="themgiohang" value="Thêm giỏ hàng"class="btn btn-default add-to-cart" /> 
                                    <!-- <a href="?quanly=giohang" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a> -->
                                    </fieldset>
                                    </form> 
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

  