<div class="hero__item set-bg" data-setbg="user/style/img/banner.jpg" style="background-image: url(&quot;img/hero/banner.jpg&quot;);">
            <div class="hero__text">
                <span>FRUIT FRESH</span>
                <h2>Vegetable <br>100% Organic</h2>
                <p>Free Pickup and Delivery Available</p>
                <a href="#" class="primary-btn">SHOP NOW</a>
            </div>
        </div>

        <div class="wrapper_product_by_category">
            <!-- Hiển thị các sản phẩm mới nhất -->
            <div class="row">
                <div class="section-title">
                    <h2>Latest products</h2>
                </div>
                
            </div>
            
            <div class="row1 featured__filter">
            <?php 
                $sql_sanpham = "SELECT * FROM tbl_product ORDER BY id";
                $sql_query_sp = mysqli_query($mysqli, $sql_sanpham);
                while($row_sanpham_all = mysqli_fetch_array($sql_query_sp)){
            ?>
                <div class="box_product">
                    <img src="./admin/uploads/<?php echo $row_sanpham_all['hinhanh']?>" alt="">
                    <div class="chitiet">
                        <h6><a href="#"><?php echo $row_sanpham_all['name'];?></a></h6>
                        <h5><?php echo $row_sanpham_all['gia'];?>đ</h5>
                    </div>
                </div>
                <?php }?>
            </div>
            <!-- Đóng hiển thị các sản phẩm mới nhất -->
        </div>