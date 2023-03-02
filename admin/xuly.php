<?php
    include 'config/config.php';

    $tendanhmuc = $_POST['tendanhmuc'];

    if(isset($_POST['themdanhmuc'])){
        $sql_them = "INSERT INTO tbl_category(name_category) VALUE('".$tendanhmuc."')";
        mysqli_query($mysqli, $sql_them);
        header('Location:index.php?action=themdanhmuc&query=them');
    }elseif(isset($_POST['suadanhmuc'])){
        $sql_update = "UPDATE tbl_category SET name_category='$tendanhmuc' WHERE id_danhmuc = $_GET[id]";
        mysqli_query($mysqli, $sql_update);
        header('Location:index.php?action=danhsachdanhmuc&query=danhsach');
    }
    else{
        $id = $_GET['id'];
        $sql_xoa = "DELETE FROM tbl_category WHERE id_danhmuc = '".$id."'";
        mysqli_query($mysqli, $sql_xoa);
        header('Location:index.php?action=danhsachdanhmuc&query=danhsach');
    }
?>   