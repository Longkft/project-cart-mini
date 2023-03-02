    <?php 
        include 'config/config.php';
        $sql_danhsachsanpham = "SELECT * FROM tbl_product, tbl_category WHERE tbl_product.id_danhmuc = tbl_category.id_danhmuc";
        $row_lietke_product = mysqli_query($mysqli, $sql_danhsachsanpham);
    ?>
    
    <div class="body_content">
        <div class="wrapper_content">
            <div class="content_header">List Product</div>
            <div class="content">
                <form action="" method="POST">
                    <table>
                        <tr>
                            <td>Tên sản phẩm</td>
                            <td>Mã sản phẩm</td>
                            <td>Số lượng</td>
                            <td>Danh mục</td>
                            <td>Giá thành</td>
                            <td>Nội dung</td>
                            <td>Hình ảnh</td>
                            <td>Tình trạng</td>
                            <td>Quản lý</td>
                        </tr>
                        <?php 
                            $i =0;
                            while($row = mysqli_fetch_array($row_lietke_product)){?>
                        <tr>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['masp']; ?></td>
                            <td><?php echo $row['soluong']; ?></td>
                            <td><?php echo $row['name_category']; ?></td>
                            <td><?php echo $row['gia']; ?></td>
                            <td><?php echo $row['noidung']; ?></td>
                            <td><img src="uploads/<?php echo $row['hinhanh']; ?>" width="150px" alt=""></td>
                            <td><?php if($row['tinhtrang']==1){ 
                                echo 'Kích hoạt';
                                
                             } else {
                                echo 'Ẩn';
                             }?>
                            </td>
                            <td>
                                <a href="xulysanpham.php?id=<?php echo $row['id'];?>">Xóa</a> | 
                                <a href="?action=danhsachsanpham&query=sua&id=<?php echo $row['id'];?>">Sửa</a>
                            </td>
                        </tr>
                        <?php }?>
                    </table>
                </form>
            </div>
        </div>
    </div>
