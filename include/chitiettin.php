<?php

	if(isset($_GET['id_tin'])){
		$id_tintuc = $_GET['id_tin'];
	}else{
		$id_tintuc = '';
	}
?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Danh mục tin tức</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                <!--  lấy tin tức -->
                                    <?php
                                        $sql_danhmuc1 = mysqli_query($con, "SELECT * FROM tbl_danhmuctin ORDER BY danhmuctin_id DESC");
                                        while($row_danhmuc= mysqli_fetch_array($sql_danhmuc1)){
                                    ?>
                                    <h4 class="panel-title">
                                        <a  href="?quanly=danhmuctin&id_danhmuctin=<?php echo $row_danhmuc['danhmuctin_id'] ?>">
                                            <?php echo $row_danhmuc['danhmuctin_name']; ?>
                                        </a>
                                    </h4><br>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="left-sidebar">
						<h2>Tin tức khác</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
                                <div class="welcome py-sm-5 py-4">
                                    <div class="container py-xl-4 py-lg-2">
                                        <!-- tittle heading -->
                                        <?php
                                        $sql_tin = mysqli_query($con,"SELECT * FROM tbl_tintuc WHERE hienthi = '1' AND tintuc_id != '$id_tintuc' ORDER BY tintuc_id DESC LIMIT 4");
                                        while($row_tin = mysqli_fetch_array($sql_tin)){
                                        ?>
                                        <!-- //tittle heading -->
                                        <a href="?quanly=chitiettin&id_tin=<?php echo $row_tin['tintuc_id'] ?>" style="color:black" >
                                            <div >
                                                <div >
                                                    <img src="images/product/<?php echo $row_tin['img_dautrang'] ?>" class="img-fluid" alt=" " style="width: 250px;">
                                                </div>
                                                <div>
                                                    <h4 style="word-wrap: break-word;"><?php echo $row_tin['tintuc_name']; ?></h4>
                                                    <h6 class="my-sm-3 my-2" style="word-wrap: break-word;"><?php echo $row_tin['tomtat']; ?></h6>
                                                </div>
                                            </div>
                                        </a><br>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
						</div><!--/category-products-->
						</ul>					
					</div>
				</div>
                <div class="col-sm-9">
					<div class="blog-post-area">
                        <?php
                            $sql_tin = mysqli_query($con,"SELECT * FROM tbl_tintuc WHERE tintuc_id='$id_tintuc' ORDER BY tintuc_id DESC");
                            $row_tin = mysqli_fetch_array($sql_tin);
                        ?>
						<h2 class="title text-center"><?php echo $row_tin['tintuc_name']; ?></h2>
                        <div class="post-meta">
                                <ul>
                                    <li><i class="fa fa-calendar"></i> <?php echo date("j/n/Y g:i a ") ?></li>
                                </ul>
                            </div>
						<div class="single-blog-post">
							<a href="">
								<img src="images/product/<?php echo $row_tin['img_dautrang']; ?>" alt="">
							</a>
							<p>
								<?php echo $row_tin['tomtat']; ?>
                            </p> <br>
                            <p>
                                <?php echo $row_tin['noidung_tin']; ?>
                            </p>
						</div>
					</div><!--/blog-post-area-->
				</div>		
			</div>
		</div>
	</section>