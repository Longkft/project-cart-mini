<?php
    if(isset($_GET['action']) && $_GET['query']){
        $tam = $_GET['action'];
        $query = $_GET['query'];
    }else{
        $tam = "";
        $query = "";
    }
    if($tam == "themdanhmuc" && $query == "them"){
        include 'add_category.php';
    }elseif($tam == "danhsachdanhmuc" && $query == "sua"){
        include 'edit_category.php';
    }
    elseif($tam == "danhsachdanhmuc"){
        include 'list_category.php';
    }elseif($tam == "themsanpham" && $query == "them"){
        include 'add_product.php';
    }elseif($tam == "danhsachsanpham" && $query == "sua"){
        include 'edit_product.php';
    }
    elseif($tam == "danhsachsanpham"){
        include 'list_product.php';
    }
    else{
        // include 'index.php';
    }
?>