<?php 
    include 'config/config.php';
    $sql_suadanhmuc = "SELECT * FROM tbl_category WHERE id_danhmuc=$_GET[id] limit 1";
    $row_sua = mysqli_query($mysqli, $sql_suadanhmuc);

?>
<div class="body_content">
    <div class="wrapper_content">
        <div class="content_header">Edit Category</div>
            <div class="content">
                
                <div class="card-header">
                    <h3 class="card-title">Edit category</h3>
                </div>
                <form method="POST" action="xuly.php?id=<?php echo $_GET['id'];?>"> <!-- form add category -->
                    <?php 
                        while($dong = mysqli_fetch_array($row_sua)){
                    ?>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="tendanhmuc" value="<?php echo $dong['name_category']?>" class="form-control">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" name="suadanhmuc" class="btn btn-primary" value="Sua danh mục sản phẩm">Sửa</button>
                        </div>
                    <?php }?>

                </form>

            </div>
        </div>
    </div>
</div>