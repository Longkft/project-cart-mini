
<?php 
    include 'config/config.php';
    $sql_suasanpham = "SELECT * FROM tbl_product WHERE id=$_GET[id] LIMIT 1";
    $sql_suasp = mysqli_query($mysqli,$sql_suasanpham);
?>

<div class="body_content">
            <div class="wrapper_content">
                    <div class="content_header">Edit Product</div>
                    <div class="content">
                        
                        <div class="card-header">
                            <h3 class="card-title">Edit Product</h3>
                        </div>
                        <form method="POST" action="xulysanpham.php?id=<?php echo $_GET['id']?>" enctype="multipart/form-data"> <!-- form add category -->
                            <div class="card-body">
                        <?php 
                            while($row = mysqli_fetch_array($sql_suasp)){
                        ?>
                            
                            <div class="form-group">
                                <label for="">Tên sản phẩm</label>
                                <input type="text" value="<?php echo $row['name']?>" name="tensanpham"  class="form-control" id="" placeholder="Input Name">
                            </div>
                            <div class="form-group">
                                <label for="">Mã sản phẩm</label>
                                <input type="text" value="<?php echo $row['masp']?>" name="masanpham" class="form-control" id="" placeholder="ID Category">
                            </div>
                            <div class="form-group">
                                <label for="">Số lượng</label>
                                <input type="text" value="<?php echo $row['soluong']?>" name="soluong" class="form-control" id="" placeholder="Nhập số lượng">
                            </div>
                            <div class="form-group gia">
                                <label for="">Giá</label>
                                <input type="text" value="<?php echo $row['gia']?>" name="gia" class="form-control" id="" placeholder="Giá">
                            </div>
                            <div class="form-group gia">
                                <label for="">Nội dung</label>
                                <textarea rows="" cols="" name="noidung" class="form-control"><?php echo $row['noidung']?></textarea>
                            </div>
                            <div class="form-group input_file">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="hinhanh" class="custom-file-input" id="exampleInputFile">
                                    <img src="uploads/<?php echo $row['hinhanh']?>" alt="" width="150px">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Danh mục sản phẩm</label>
                                <select name="danhmuc" id="danhmuc">
                                    <?php 
                                        $sql_danhmuc = "SELECT * FROM tbl_category ORDER BY id_danhmuc DESC";
                                        $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                                        var_dump($sql_danhmuc);
                                        while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){ 
                                              if($row_danhmuc['id_danhmuc'] == $row['id_danhmuc']){
                                        ?>
                                            
                                            <option selected value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['name_category']?></option>
                                        <?php 
                                              } else  {
                                        ?>
                                            <option value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['name_category']?></option>
                                        <?php
                                              }
                                    }?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Tình trạng</label>
                                <select name="tinhtrang" id="">
                                    <?php 
                                        if($row['tinhtrang'] == 1){
                                    ?>
                                        <option value="1" selected>Kích hoạt</option>
                                        <option value="0">Ẩn</option>
                                    <?php }else{?>
                                        <option value="1">Kích hoạt</option>
                                        <option value="0" selected>Ẩn</option>
                                    <?php }?>
                                </select>
                            </div>
                            <!-- <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div> -->
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                            <button type="submit" class="btn btn-primary" name="suasanpham">Sửa</button>
                            </div>
                            <?php }?>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
