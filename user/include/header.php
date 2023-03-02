<header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="../../../project-cart-mini/user/view/login.php"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="index.php"><img src="user/style/img/logo.png" alt=""></a>
                    </div>
                </div>
                <?php 
                    $sql_danhmuc = "SELECT * FROM tbl_category";
                    $sql_query = mysqli_query($mysqli, $sql_danhmuc);
                ?>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="#">Category</a>
                                <ul class="header__menu__dropdown">
                                    <?php while($row = mysqli_fetch_array($sql_query)) {?>
                                        <li><a href="index.php?quanly=chitietshop&id=<?php echo $row['id_danhmuc']?>"><?php echo $row['name_category']?></a></li>
                                    <?php } ?>
                                </ul>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="index.php?quanly=giohang">Shoping Cart</a></li>
                                    <li><a href="index.php?quanly=checkout">Check Out</a></li>
                                    <li><a href="index.php?quanly=chitietblog">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="index.php?quanly=blog">Blog</a></li>
                            <li><a href="index.php?quanly=contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><img src="user/style/img/hand-thumbs-up-fill.svg" alt=""><span>1</span></a></li>
                            <li><a href="#"><img src="user/style/img/bag-fill-frame.png" alt=""><span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>