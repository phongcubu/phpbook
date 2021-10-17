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
									<h4 class="panel-title"><a href="?quanly=danhmuc&id=<?php echo $category_item['category_id'] ?>"><?php echo $category_item['category_name']?></a></h4>
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
									<li><a href="#"><?php echo $brand_item['brand_name']; ?></a></li>
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

				<?php 
							// --------LOC SẢN PHẨM-------
							$param ="";
							$fillter="";
							$field = isset($_GET['field'])? $_GET['field']: "";
							$sort = isset($_GET['sort'])? $_GET['sort']: "";
							if(!empty($field) && !empty($sort))
							{
								$fillter = " ORDER BY `tbl_sanpham`.`$field`$sort" ;
								$param = "field=$field&sort=$sort";
							
							
							}

							//------PHÂN TRANG------ 
							// sản phẩm trên 1 trang 
							$item_per_page = !empty($_GET['per_page']) ?$_GET['per_page']:4;
							// trang hiện tại 
							$current_page = !empty($_GET['page']) ?$_GET['page']:1;
							// bắt đầu từ sản phẩm nào ?
							$offset = ($current_page -1 ) * $item_per_page;
							$sql_product =  mysqli_query($con,"SELECT * FROM tbl_sanpham $fillter LIMIT $item_per_page OFFSET $offset");
						
							$total = mysqli_query($con, " SELECT * FROM tbl_sanpham ");
							$total = $total->num_rows;
							// số trang có đc 
							$totalpage = ceil($total/$item_per_page);
                          
                        ?>
				<div class="col-sm-9 padding-right">
                                    
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center rise-text"> Sản Phẩm Mới</h2>
						<div style="width: 19%;float: right;margin-top: -33px;margin-right: 15px;">
							<select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
								<option value="">----sắp xếp theo giá----</option>
								<option <?php if(isset($_GET['sort'])&& $_GET['sort'] == 'ASC'){?> selected <?php }?> value="?field=sanpham_giakhuyenmai&sort=ASC">>--từ thấp tới cao--<</option>
								<option <?php if(isset($_GET['sort'])&& $_GET['sort'] == 'DESC'){?> selected <?php }?> value="?field=sanpham_giakhuyenmai&sort=DESC">>--từ cao về thấp--<</option>
							</select>
						</div>
                        <?php 
							
                            while($product_item = mysqli_fetch_array($sql_product)) {
                        ?>
						<div class="col-sm-4 " >
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
													<input type="hidden" name="sanpham_id" value="<?php echo $product_item['sanpham_id']?>"/>
													<input type="hidden" name="giasanpham" value="<?php echo $product_item['sanpham_gia']?>"/>
													<input type="hidden" name="hinhanh" value="<?php echo $product_item['sanpham_image']?>"/>
													<input type="hidden" name="soluong" value="1"/>
													<input type="submit" name="themgiohang" value="Thêm giỏ hàng"class="btn btn-default add-to-cart" /> 
												
													</fieldset>
												</form> 
                                            </div>
                                        </a>
							
								</div>
                                <img src="images/home/new.png" class="new" alt="" />
								
							</div>
						</div>
						
						<?php
                         }?>

					</div><!--features_items-->
					<!--  phân trang -->
					<div class="pagination-area">
							<ul class="pagination">
						<?php 
								if($current_page >2)
								{
									$first = 1;
									?>
									<li><a href="?<?=$param?>&per_page=<?=$item_per_page ?>&page=<?=$first ?>" class="page-item">Trang đầu</a></li>

								<?php }
								if($current_page > 1)
								{
									$prev_page = $current_page -1 ;
									?>
									<li><a href="?<?=$param?>&per_page=<?=$item_per_page ?>&page=<?= $prev_page ?>" class="page-item"> Trang trước</a></li>
								<?php
								}
								?>

								<?php 
									for($i =1 ; $i <= $totalpage;$i++){?>
									<?php if ($i != $current_page) { ?>
										<?php if($i > $current_page -2 && $i < $current_page +2) {?>
										<li><a href="?<?=$param?>&per_page=<?=$item_per_page ?>&page=<?= $i?>" class="page-item"> <?= $i?></a></li>
										<?php }?>
										
									<?php }else { ?>
										<li><a href=""><strong class="current-page page-item"><?= $i ?></strong></a></li>
									<?php } ?>
									<?php } ?>
								<?php if($current_page <$totalpage-1){
									$next_page = $current_page +1 ;?>
										<li><a href="?<?=$param?>&per_page=<?=$item_per_page ?>&page=<?=$next_page?>" class="page-item"> Trang tiếp</a></li>
								<?php 
									}if ($current_page < $totalpage - 2) {
									$end_page = $totalpage; ?>
									<li><a href="?<?=$param?>&per_page=<?=$item_per_page ?>&page=<?=$end_page ?>" class="page-item">Trang cuối</a></li>
									<?php
								}

								?>
							</ul>
							</div>
							<!-- phân trang -->

				</div>
			</div>
		</div>
	</section>