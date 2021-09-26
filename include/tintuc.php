<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3" >
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
            </div>
            <div class="col-sm-9 padding-right">
                <div class="blog-post-area">
                    <h2 class="title text-center">
                        TIN TỨC
                    </h2><br>
                    <?php
                    $sql_tin = mysqli_query($con,"SELECT * FROM tbl_tintuc WHERE hienthi = '1' ORDER BY tintuc_id DESC");
                    while($row_tin = mysqli_fetch_array($sql_tin)){
                    ?>
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="?quanly=chitiettin&id_tin=<?php echo $row_tin['tintuc_id'] ?>">
                                <img src="images/product/<?php echo $row_tin['img_dautrang'] ?>" style="width: 80%; padding-top:20px">
                            </a>
                        </div>
                        <div class="col-sm-8">
                            <a href="?quanly=chitiettin&id_tin=<?php echo $row_tin['tintuc_id'] ?>" style="color:black" >
                                <div class="single-blog-post">
                                    <h3><?php echo $row_tin['tintuc_name']; ?></h3>
                                    <div class="post-meta">
                                        <ul>
                                            <li><i class="fa fa-calendar"></i><?php echo date("j/n/Y g:i a ") ?></li>
                                        </ul>
                                    </div>
                                    <p><?php echo $row_tin['tomtat'] ?></p>
                                    
                                </div>
                            </a><br>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</section>