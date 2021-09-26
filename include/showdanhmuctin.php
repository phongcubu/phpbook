<?php 
//  kiểm tra id của tưng danh mục có tồn tại ?
if(isset($_GET['id_danhmuctin']))
{
	$id = $_GET['id_danhmuctin'];
    
}
else{
	$id ='';
}
//  lấy sản phẩm theo từng id danh mục
?> 
<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar" >
						<h2 class="rise-text">Danh Mục Tin</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<?php 
                             $sql_danhmuctin = mysqli_query($con,' SELECT * FROM tbl_danhmuctin ORDER BY danhmuctin_id DESC');
                                while ($danhmuctin_item = mysqli_fetch_array($sql_danhmuctin)) {
                                    ?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="?quanly=danhmuctin&id_danhmuctin=<?php echo $danhmuctin_item['danhmuctin_id'] ?>"><?php echo $danhmuctin_item['danhmuctin_name'];?></a></h4>
								</div>
							</div>
                            <?php
                                }
                            ?>
					</div>
				</div>
                </div>
				
				<div class="col-sm-9 padding-right ">
                    <?php
                        $sql_danhmuc = mysqli_query($con, "SELECT * FROM tbl_danhmuctin,tbl_tintuc  WHERE  tbl_danhmuctin.danhmuctin_id = tbl_tintuc.danhmuctin_id AND tbl_tintuc.danhmuctin_id = '$id' 
                        AND tbl_tintuc.hienthi = '1' ORDER BY tbl_tintuc.tintuc_id DESC");
                        //  
                        $sql_danhmuc_title = mysqli_query($con, "SELECT * FROM tbl_danhmuctin,tbl_tintuc  WHERE  tbl_danhmuctin.danhmuctin_id = tbl_tintuc.danhmuctin_id AND tbl_tintuc.danhmuctin_id = '$id' 
                        AND tbl_tintuc.hienthi = '1' ORDER BY tbl_tintuc.tintuc_id DESC");
                        $row_item = mysqli_fetch_array( $sql_danhmuc_title);
                        $title = $row_item['danhmuctin_name'];
                    ?>
					<div class="features_items"><!--features_items-->
                        <div>
                            <h2 class="title text-center"> <?php echo  $title  ;?> </h2>
                        </div>
                            <?php
                            while($tin_item = mysqli_fetch_array($sql_danhmuc)){
                            ?>
                        <div class="row">
                            <div class="col-sm-4">
                                <a href="?quanly=chitiettin&id_tin=<?php echo $tin_item['tintuc_id'] ?>">
                                    <img src="images/product/<?php echo $tin_item['img_dautrang'] ?>" style="width: 80%; padding-top:25px">
                                </a>
                            </div>
                            <div class="col-sm-8">
                                
                                <a href="?quanly=chitiettin&id_tin=<?php echo $tin_item['tintuc_id'] ?>" style="color:black" >
                                    <div class="single-blog-post">
                                        
                                        <h3><?php echo $tin_item['tintuc_name']; ?></h3>
                                        <div class="post-meta">
                                            <ul>
                                                <li><i class="fa fa-calendar"></i><?php echo date("j/n/Y g:i a ") ?></li>
                                            </ul>
                                        </div>
                                        <p><?php echo $tin_item['tomtat'] ?></p>
                                        
                                    </div>
                                </a><br>
                            </div>
                        </div>
                        <?php }?>
					</div><!--features_items-->
                    
				</div>
			</div>
		</div>
</section>

  