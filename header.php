

<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FENG | FENG SYSTEM™</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/logoweb.jpg">

    <!-- all css here -->
    <link rel="stylesheet" href="assets\css\bootstrap.min.css">
    <link rel="stylesheet" href="assets\css\plugin.css">
    <link rel="stylesheet" href="assets\css\bundle.css">
    <link rel="stylesheet" href="assets\css\style.css">
    <link rel="stylesheet" href="assets\css\responsive.css">
    <script src="assets\js\vendor\modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!-- Add your site or application content here -->

    <!--pos page start-->
    <div class="pos_page">
        <div class="container">
            <!--pos page inner-->
            <div class="pos_page_inner">
                <!--header area -->
                <div class="header_area">
                    <!--header top-->
                    <div class="header_top">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="switcher">
                                    <ul>
                                        <li class="languages"><a href="#"><img src="assets\img\logo\fontlogo.jpg"
                                                    alt=""> Ngôn Ngữ <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown_languages">
                                                <li><a href="#"><img src="" alt="">
                                                        English</a></li>
                                                <li><a href="#"><img src="" alt=""> Việt
                                                        Nam </a></li>
                                            </ul>
                                        </li>

                                        <li class="currency"><a href="#"> Loại tiền : ₫ <i
                                                    class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown_currency">
                                                <li><a href="#"> Dollar (USD)</a></li>
                                                <li><a href="#"> VND (VND) </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="header_links">
                                    <ul>
                                        <li><a href="contact.html" title="Contact">Liên Hệ</a></li>
                                        <li><a href="wishlist.php" title="wishlist">Danh sách Của Tôi</a></li>
                                        <li><a href="my-account.php" title="My account">Tài Khoản</a></li>
                                        <li><a href="cart.php" title="My cart">Giỏ Hàng</a></li>
                                        <?php
                                            if(isset($_SESSION['inforuser'])){
                                                echo'<li><a  title="" style="color:red;">'.$_SESSION['inforuser']['ten'].'</a></li>
                                                <li><a href="index.php?logout=1" title="login">Đăng Xuất</a></li>';
                                            }else{
                                                echo'<li><a href="dangnhap.php" title="login">Đăng Nhập</a></li>';
                                            }
                                        ?>
                                        <li><a href="dangky.php" title="register">Đăng ký</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--header top end-->

                    <!--header middel-->
                    <div class="header_middel">
                        <div class="row align-items-center">
                            <!--logo start-->
                            <div class="col-lg-3 col-md-3">
                                <div class="logo">
                                    <a href="index.php"><img src="assets/img/logo/mainlog.png" alt=""></a>
                                </div>
                            </div>
                            <!--logo end-->
                            <div class="col-lg-9 col-md-9">
                                <div class="header_right_info">

                                    <div class="search_bar">
                                        <form action="#">
                                            <input placeholder="Tìm Kiếm..." type="text" name="noidung">
                                            <button type="submit" name="btn"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                    
                                    <div class="shopping_cart">
                                        <a href="#"><i class="fa fa-shopping-cart"></i> 2 Đơn hàng - 800.000₫ <i
                                                class="fa fa-angle-down"></i></a>

                                        <!--mini cart-->
                                        <div class="mini_cart">
                                            <div class="cart_item">
                                                <div class="cart_img">
                                                    <a href="#"><img src="assets/img/cart/sp8.jpg" alt=""></a>
                                                </div>
                                                <div class="cart_info">
                                                    <a href="#">FootBall T-Shirt</a>
                                                    <span class="cart_price">400.000₫ </span>
                                                    <span class="quantity">số lượng: 1</span>
                                                </div>
                                                <div class="cart_remove">
                                                    <a title="Remove this item" href="#"><i
                                                            class="fa fa-times-circle"></i></a>
                                                </div>
                                            </div>
                                            <div class="cart_item">
                                                <div class="cart_img">
                                                    <a href="#"><img src="assets/img/cart/sp15.jpg" alt=""></a>
                                                </div>
                                                <div class="cart_info">
                                                    <a href="#">Helmet Knit</a>
                                                    <span class="cart_price">370.000₫ </span>
                                                    <span class="quantity">Số lượng: 1</span>
                                                </div>
                                                <div class="cart_remove">
                                                    <a title="Remove this item" href="#"><i
                                                            class="fa fa-times-circle"></i></a>
                                                </div>
                                            </div>
                                            <div class="shipping_price">
                                                <span> Shipping </span>
                                                <span> 30.000₫  </span>
                                            </div>
                                            <div class="total_price">
                                                <span> Tổng </span>
                                                <span class="prices"> 800.000₫  </span>
                                            </div>
                                            <div class="cart_button">
                                                <a href="checkout.html"> Thanh toán </a>
                                            </div>
                                        </div>
                                        <!--mini cart end-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--header middel end-->
                    <div class="header_bottom">
                        <div class="row">
                            <div class="col-12">
                                <div class="main_menu_inner">
                                    <div class="main_menu d-none d-lg-block">
                                        <nav>
                                            <ul>
                                                <li class="active"><a href="index.php">Trang Chủ</a>
                                                    <div class="mega_menu jewelry">
                                                        <div class="mega_items jewelry">
                                                            <ul>
                                                                <li><a href="index.php">Home</a></li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li><a href="cuahang.php">Cửa Hàng</a>
                                                    <div class="mega_menu jewelry">
                                                        <div class="mega_items jewelry">
                                                            <ul>       
                                                                <li><a href="cuahang.php">Cửa hàng chính</a></li>       
                                                                <li><a href="spChiTiet.php">Chi Tiết Sản Phẩm</a></li>       
                                                                <li><a href="spNoibat.html">Sản Phẩm Nổi Bật</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li><a href="#">Thời Trang Nữ</a>
                                                    <div class="mega_menu">
                                                        <div class="mega_top fix">
                                                            <div class="mega_items">
                                                                <h3><a href="#">Body suit</a></h3>
                                                                <ul>
                                                                    <li><a href="#">Mẫu ảnh</a></li>
                                                                    <li><a href="#">Chi tiết sản phẩm</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="mega_items">
                                                                <h3><a href="#">Đầm</a></h3>
                                                                <ul>
                                                                    <li><a href="#">Mẫu ảnh</a></li>
                                                                    <li><a href="#">Chi tiết sản phẩm</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li><a href="#">Thời Trang Nam</a>
                                                    <div class="mega_menu">
                                                        <div class="mega_top fix">
                                                            <div class="mega_items">
                                                                <h3><a href="#">Áo</a></h3>
                                                                <ul>
                                                                    <li><a href="#">Mẫu ảnh</a></li>
                                                                    <li><a href="#">Chi tiết sản phẩm</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="mega_items">
                                                                <h3><a href="#">Quần</a></h3>
                                                                <ul>
                                                                    <li><a href="#">Mẫu ảnh</a></li>
                                                                    <li><a href="#">Chi tiết sản phẩm</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li><a href="#">Danh Mục</a>
                                                    <div class="mega_menu">
                                                        <div class="mega_top fix">
                                                            <div class="mega_items">
                                                                <h3><a href="#">Mục 1</a></h3>
                                                                <ul>
                                                                    <li><a href="shopdemo.php">Portfolio</a></li>
                                                                    <li><a href="">single portfolio </a></li>
                                                                    <li><a href="my-account.php">My account </a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="mega_items">
                                                                <h3><a href="#">Mục 2</a></h3>
                                                                <ul>
                                                                    <li><a href="">Blog </a></li>
                                                                    <li><a href="">Frequently Questions</a></li>
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li><a href="">Blog</a>
                                                    <div class="mega_menu jewelry">
                                                        <div class="mega_items jewelry">
                                                            <ul>
                                                                <li><a href="">blog</a></li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li><a href="contact.html">Liên Hệ</a></li>

                                            </ul>
                                        </nav>
                                    </div> 