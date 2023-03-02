<?php 
    include 'config/config.php'
?>
            
            <div class="body_content">
            <div class="wrapper_content">
                    <div class="content_header">Add Product</div>
                    <div class="content">
                        
                        <div class="card-header">
                            <h3 class="card-title">Add Product</h3>
                        </div>
                        <form method="POST" action="xulysanpham.php" enctype="multipart/form-data"> <!-- form add category -->
                            <div class="card-body">
                            
                            <div class="form-group">
                                <label for="">Tên sản phẩm</label>
                                <input type="text" name="tensanpham" class="form-control" id="" placeholder="Input Name">
                            </div>
                            <div class="form-group">
                                <label for="">Mã sản phẩm</label>
                                <input type="text" name="masanpham" class="form-control" id="" placeholder="ID Category">
                            </div>
                            <div class="form-group">
                                <label for="">Số lượng</label>
                                <input type="text" name="soluong" class="form-control" id="" placeholder="Nhập số lượng">
                            </div>
                            <div class="form-group gia">
                                <label for="">Giá</label>
                                <input type="text" name="gia" class="form-control" id="" placeholder="Giá">
                            </div>
                            <div class="form-group gia">
                                <label for="">Nội dung</label>
                                <textarea rows="" cols="" name="noidung" class="form-control"></textarea>
                            </div>
                            <div class="form-group input_file">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="hinhanh" class="custom-file-input" id="exampleInputFile">
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
                                        while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){ ?>
                                            
                                            <option value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['name_category']?></option>
                                        <?php }?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Tình trạng</label>
                                <select name="tinhtrang" id="tinhtrang">
                                    <option value="1">Kích hoạt</option>
                                    <option value="0">Ẩn</option>
                                </select>
                            </div>
                            <!-- <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div> -->
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                            <button type="submit" class="btn btn-primary" name="themsanpham">Thêm</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
