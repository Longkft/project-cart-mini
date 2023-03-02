<?php 
    if(isset($_GET['quanly'])){
        $tam = $_GET['quanly'];
    }else{
        $tam = "";
    }

    if($tam == "shop"){
        include 'user/view/shop/shop.php';
    }elseif($tam == "chitietshop"){
        include 'user/view/chitietshop.php';
    }elseif($tam == "giohang"){
        include 'user/view/giohang.php';
    }elseif($tam == "checkout"){
        include 'user/view/checkout.php';
    }elseif($tam == "chitietblog"){
        include 'user/view/chitietblog.php';
    }elseif($tam == "blog"){
        include 'user/view/blog.php';
    }elseif($tam == "contact"){
        include 'user/view/contact.php';
    }else{
        include 'user/view/index_view.php';
    }
?>