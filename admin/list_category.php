
    <?php 
        include 'config/config.php';
        $sql_danhsachdanhmuc = "SELECT * FROM tbl_category";
        $row_lietke = mysqli_query($GLOBALS['mysqli'], $sql_danhsachdanhmuc);
    ?>
    
    <div class="body_content">
        <div class="wrapper_content">
            <div class="content_header">List Category</div>
            <div class="content">
                <form action="" method="POST">
                    <table>
                        <tr>
                            <td>Tên danh mục</td>
                            <td>Quản lý</td>
                        </tr>
                        <?php 
                            $i =0;
                            while($row = mysqli_fetch_array($row_lietke)){?>
                        <tr>
                            <td><?php echo $row['name_category'];?></td>
                            <td>
                                <a href="xuly.php?id=<?php echo $row['id_danhmuc'];?>">Xóa</a> | 
                                <a href="?action=danhsachdanhmuc&query=sua&id=<?php echo $row['id_danhmuc'];?>">Sửa</a>
                            </td>
                        </tr>
                        <?php }?>
                    </table>
                </form>
            </div>
        </div>
    </div>
        
</body>
