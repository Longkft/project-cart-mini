<section class="product spad">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Category</h4>
                            <ul>
                                <?php 
                                    $sql_danhmuc = "SELECT * FROM tbl_category";
                                    $sql_query = mysqli_query($mysqli, $sql_danhmuc);
                                    while($row_danhmuc = mysqli_fetch_array($sql_query)){
                                ?>
                                <li><a href="index.php/hienthi=danhmuc&id=<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['name_category']?></a></li>
                                <?php }?>
                                
                            </ul>
                        </div>
                    </div>
                </div> -->

                <?php 
                    $sql_sanpham = "SELECT * FROM tbl_product, tbl_category WHERE tbl_product.id_danhmuc = tbl_category.id_danhmuc
                                        AND tbl_product.id_danhmuc = '$_GET[id]' ORDER BY tbl_product.id DESC";
                    $sql_query_sp = mysqli_query($mysqli, $sql_sanpham);
                ?>
                <div class="col-lg-12 col-md-7">
                    <h2>Danh mục: <?php echo mysqli_fetch_array($sql_query_sp)['name_category']?></h2>
                <div class="row1 featured__filter">
                    <?php 
                        while($row_sanpham_all = mysqli_fetch_array($sql_query_sp)){
                    ?>
                        <div class="box_product">
                            <img src="./admin/uploads/<?php echo $row_sanpham_all['hinhanh']?>" alt="">
                            <div class="chitiet">
                                <h6><a href="index.php?quanly=checkout&id_check=<?php echo $row_sanpham_all['id'];?>"><?php echo $row_sanpham_all['name'];?></a></h6>
                                <h5><?php echo $row_sanpham_all['gia'];?>đ</h5>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </section>