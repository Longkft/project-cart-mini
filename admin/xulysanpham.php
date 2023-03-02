<?php
    include 'config/config.php';

    $tensanpham = $_POST['tensanpham'];
    $masp = $_POST['masanpham'];
    $soluong = $_POST['soluong'];
    $gia = $_POST['gia'];
    $noidung = $_POST['noidung'];

    //xu ly hinh anh
    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
    $hinhanh = time().'_'.$hinhanh;

    $tinhtrang = $_POST['tinhtrang'];
    $id_danhmuc = $_POST['danhmuc'];
    
    

    if(isset($_POST['themsanpham'])){
        $sql_them = "INSERT INTO tbl_product(name,masp,soluong,gia,noidung,hinhanh,tinhtrang,id_danhmuc) 
                        VALUE('".$tensanpham."','".$masp."','".$soluong."','".$gia."','".$noidung."','".$hinhanh."','".$tinhtrang."','".$id_danhmuc."')";
        mysqli_query($mysqli, $sql_them);
        move_uploaded_file($hinhanh_tmp,"uploads/".$hinhanh);
        header('Location:index.php?action=danhsachsanpham&query=danhsach');
    }elseif(isset($_POST['suasanpham'])){
        if($hinhanh != ''){
            move_uploaded_file($hinhanh_tmp,"uploads/".$hinhanh);
            $id = $_GET['id'];
            

            $sql_update = "UPDATE tbl_product SET name='$tensanpham', masp='$masp',
                                            soluong='$soluong',gia='$gia', 
                                            noidung='$noidung',hinhanh='$hinhanh',
                                            tinhtrang='$tinhtrang', id_danhmuc = '$id_danhmuc' WHERE id = $_GET[id]";

            $sql = "SELECT * FROM tbl_product WHERE id = '$id' LIMIT 1";
            $query = mysqli_query($mysqli, $sql);
            while ($row = mysqli_fetch_array($query)) {
                unlink('uploads/'.$row['hinhanh']);
            }
        }else{
            $sql_update = "UPDATE tbl_product SET name='$tensanpham', masp='$masp',
                                            soluong='$soluong',gia='$gia', 
                                            noidung='$noidung',
                                            tinhtrang='$tinhtrang', id_danhmuc = '$id_danhmuc' WHERE id = $_GET[id]";
        }
        mysqli_query($mysqli, $sql_update);
        header('Location:index.php?action=danhsachsanpham&query=danhsach');
    }
    else{
        $id = $_GET['id'];
        $sql = "SELECT * FROM tbl_product WHERE id = '$id' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        while ($row = mysqli_fetch_array($query)) {
            unlink('uploads/'.$row['hinhanh']);
        }
        $sql_xoa = "DELETE FROM tbl_product WHERE id = '".$id."'";
        mysqli_query($mysqli, $sql_xoa);
        header('Location:index.php?action=danhsachsanpham&query=danhsach');
    }
?>   