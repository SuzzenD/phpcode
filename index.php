<?php
session_start();
include_once("database/connect.php");
if(isset($_GET['logout'])){
    session_unset();
}
if(isset($_GET['buy'])){
    echo"<script>alert('Đặt hàng thành công!');</script>";
}
?>

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
                                            <input placeholder="Tìm Kiếm..." type="text" name="name">
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
                <!--header end -->

                <!--pos home section-->
                <div class="pos_home_section">
                    <div class="row">
                        <!--banner slider start-->
                        <div class="col-12">
                            <div class="banner_slider slider_two">
                                <div class="slider_active owl-carousel">
                                    <div class="single_slider"
                                        style="background-image: url(./assets/img/banner/bannerHome.jpg)">
                                        <div class="slider_content">
                                            <div class="slider_content_inner">
                                                <h1>Thời Trang Cho Bạn</h1>
                                                <p>“FENG SYSTEM SIGMAVIOR CAMPAIGN”</p>
                                                <a href="#">Xem Ngay</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_slider"
                                        style="background-image: url(assets/img/banner/bannerhome1.jpg)">
                                        <div class="slider_content">
                                            <div class="slider_content_inner">
                                                <h1>Thời Trang Cho Bạn</h1>
                                                <a href="#">Xem Ngay</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_slider"
                                        style="background-image: url(assets/img/banner/bannerK.jpg)">
                                        <div class="slider_content">
                                            <div class="slider_content_inner">
                                                <h1>Thời Trang Cho Bạn</h1>
                                                <p> “SIGMAVIOR” là một hình tượng hiện thân một chàng trai với đôi cánh đen đã được xuất hiện trong các thiết kế 23SS.</p>
                                                <a href="#">Xem Ngay</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--banner slider start-->
                        </div>
                    </div>
                    <!--new product area start-->
                    <div class="new_product_area product_two">
                        <div class="row">
                            <div class="col-12">
                                <div class="block_title">
                                    <h3>Sản Phẩm Mới</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="single_p_active owl-carousel">
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a href="spChiTiet.php"><img src="./assets/img/cart/sp3.jpg" alt=""></a>
                                            <div class="img_icone">
                                                <img src="assets\img\cart\span-new.png" alt="">
                                            </div>
                                            <div class="product_action">
                                                <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm Vào Giỏ</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <span class="product_price">400.000₫</span>
                                            <h3 class="product_title"><a href="single-product.html">Curabitur sodales</a></h3>
                                        </div>
                                        <div class="product_info">
                                            <ul>
                                                <li><a href="#" title=" Add to Wishlist ">Thêm Vào Danh Sách</a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">Xem Chi Tiết</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="spChiTiet.html">
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img src="./assets/img/cart/sp8.jpg"
                                                    alt=""></a>
                                            <div class="hot_img">
                                                <img src="assets\img\cart\span-hot.png" alt="">
                                            </div>
                                            <div class="product_action">
                                                <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm Vào Giỏ</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <span class="product_price">400.000₫</span>
                                            <h3 class="product_title"><a href="single-product.html">Quisque ornare
                                                    dui</a></h3>
                                        </div>
                                        <div class="product_info">
                                            <ul>
                                                <li><a href="#" title=" Add to Wishlist ">Thêm Vào Danh Sách</a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#modal_box"
                                                        title="Quick view">Xem Chi Tiết</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="spChiTiet.html">
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img src="assets/img/cart/sp7.jpg"
                                                    alt=""></a>
                                            <div class="img_icone">
                                                <img src="assets\img\cart\span-new.png" alt="">
                                            </div>
                                            <div class="product_action">
                                                <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm Vào Giỏ</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <span class="product_price">400.000₫</span>
                                            <h3 class="product_title"><a href="single-product.html">Sed non turpiss</a>
                                            </h3>
                                        </div>
                                        <div class="product_info">
                                            <ul>
                                                <li><a href="#" title=" Add to Wishlist ">Thêm Vào Danh Sách</a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#modal_box"
                                                        title="Quick view">Xem Chi Tiết</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="spChiTiet.html">
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img src="assets/img/cart/sp6.jpg"
                                                    alt=""></a>
                                            <div class="hot_img">
                                                <img src="assets\img\cart\span-hot.png" alt="">
                                            </div>
                                            <div class="product_action">
                                                <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm Vào Giỏ</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <span class="product_price">400.000₫</span>
                                            <h3 class="product_title"><a href="single-product.html">Duis convallis</a>
                                            </h3>
                                        </div>
                                        <div class="product_info">
                                            <ul>
                                                <li><a href="#" title=" Add to Wishlist ">Thêm Vào Danh Sách</a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#modal_box"
                                                        title="Quick view">Xem Chi Tiết</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="spChiTiet.html">
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img src="assets/img/cart/sp9.jpg"
                                                    alt=""></a>
                                            <div class="img_icone">
                                                <img src="assets\img\cart\span-new.png" alt="">
                                            </div>
                                            <div class="product_action">
                                                <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm Vào Giỏt</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <span class="product_price">400.000₫</span>
                                            <h3 class="product_title"><a href="single-product.html">Curabitur
                                                    sodales</a></h3>
                                        </div>
                                        <div class="product_info">
                                            <ul>
                                                <li><a href="#" title=" Add to Wishlist ">Thêm Vào Danh Sách</a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#modal_box"
                                                        title="Quick view">Xem Chi Tiết</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--new product area start-->

                    <!--banner area start-->
                    <div class="banner_area banner_two">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="single_banner">
                                    <a href="#"><img src="assets/img/cart/salesp1.jpg" alt=""></a>
                                    <div class="banner_title">
                                        <p>Giảm còn <span> 40%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single_banner">
                                    <a href="#"><img src="assets/img/cart/salesp3.jpg" alt=""></a>
                                    <div class="banner_title title_2">
                                        <p>Giảm giá<span> 30%</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single_banner">
                                    <a href="#"><img src="assets/img/cart/salesp4.jpg" alt=""></a>
                                    <div class="banner_title title_3">
                                        <p>Giảm giá <span> 30%</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--banner area end-->

                    <!--featured product area start-->
                    <div class="new_product_area product_two">
                        <div class="row">
                            <div class="col-12">
                                <div class="block_title">
                                    <h3> Sản Phẩm Giới Hạn</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="single_p_active owl-carousel">
                                <div class="col-lg-3">
                                    <div class="spChiTiet.html">
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img src="assets/img/cart/sp10.jpg"
                                                    alt=""></a>
                                            <div class="img_icone">
                                                <img src="assets\img\cart\span-new.png" alt="">
                                            </div>
                                            <div class="product_action">
                                                <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <span class="product_price">400.000₫</span>
                                            <h3 class="product_title"><a href="single-product.html">Curabitur
                                                    sodales</a></h3>
                                        </div>
                                        <div class="product_info">
                                            <ul>
                                                <li><a href="#" title=" Add to Wishlist ">Thêm vào danh sách</a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#modal_box"
                                                        title="Quick view">Xem chi tiết</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="spChiTiet.html">
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img src="assets/img/cart/sp12.jpg"
                                                    alt=""></a>
                                            <div class="hot_img">
                                                <img src="assets\img\cart\span-hot.png" alt="">
                                            </div>
                                            <div class="product_action">
                                                <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <span class="product_price">400.000₫</span>
                                            <h3 class="product_title"><a href="single-product.html">Quisque ornare
                                                    dui</a></h3>
                                        </div>
                                        <div class="product_info">
                                            <ul>
                                                <li><a href="#" title=" Add to Wishlist ">Thêm vào danh sách</a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#modal_box"
                                                        title="Quick view">Xem chi tiết</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="spChiTiet.html">
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img src="assets/img/cart/sp11.jpg"
                                                    alt=""></a>
                                            <div class="img_icone">
                                                <img src="assets\img\cart\span-new.png" alt="">
                                            </div>
                                            <div class="product_action">
                                                <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <span class="product_price">400.000₫</span>
                                            <h3 class="product_title"><a href="single-product.html">Sed non turpiss</a>
                                            </h3>
                                        </div>
                                        <div class="product_info">
                                            <ul>
                                                <li><a href="#" title=" Add to Wishlist ">Thêm vào danh sách</a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#modal_box"
                                                        title="Quick view">Xem chi tiết</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="spChiTiet.html">
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img src="assets/img/cart/sp15.jpg"
                                                    alt=""></a>
                                            <div class="hot_img">
                                                <img src="assets\img\cart\span-hot.png" alt="">
                                            </div>
                                            <div class="product_action">
                                                <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <span class="product_price">400.000₫</span>
                                            <h3 class="product_title"><a href="single-product.html">Duis convallis</a>
                                            </h3>
                                        </div>
                                        <div class="product_info">
                                            <ul>
                                                <li><a href="#" title=" Add to Wishlist ">Thêm vào danh sách</a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#modal_box"
                                                        title="Quick view">Xem chi tiết</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="spChiTiet.html">
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img src="assets/img/cart/sp16.jpg"
                                                    alt=""></a>
                                            <div class="img_icone">
                                                <img src="assets\img\cart\span-new.png" alt="">
                                            </div>
                                            <div class="product_action">
                                                <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <span class="product_price">400.000₫</span>
                                            <h3 class="product_title"><a href="single-product.html">Curabitur
                                                    sodales</a></h3>
                                        </div>
                                        <div class="product_info">
                                            <ul>
                                                <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#modal_box"
                                                        title="Quick view">Xem chi tiết</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--featured product area start-->

                    <!--blog area start-->
                    <div class="row">
                        <div class="col-12">
                            <div class="block_title">
                                <h3> Phỏng Vấn Nhà Thiết Kế</h3>
                            </div>
                        </div>
                    </div>
                    <div class="blog_area blog_two">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="single_blog">
                                    <div class="blog_thumb">
                                        <a href="blog-details.html"><img src="assets/img/blog/bloghome3.jpg" alt=""></a>
                                    </div>
                                    <div class="blog_content">
                                        <div class="blog_post">
                                            <ul>
                                                <li>
                                                    <a href="#">Fashion</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h3><a href="blog-details.html"> Local Brand Việt “Vô Hồn” ?</a></h3>
                                        <p>Quan điểm riêng của tôi là Local brand Việt Nam nên được xếp thành nhiều nhóm theo mục đích, 
                                            ngôn ngữ thiết kế, định hướng, sứ mệnh hay tệp khách hàng của họ.</p>
                                        <div class="post_footer">
                                            <div class="post_meta">
                                                <ul>
                                                    <li>July 17, 2023</li>
                                                    <li>3 Bình Luận</li>
                                                </ul>
                                            </div>
                                            <div class="Read_more">
                                                <a href="blog-details.html">Đọc thêm<i
                                                        class="fa fa-angle-double-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single_blog">
                                    <div class="blog_thumb">
                                        <a href="blog-details.html"><img src="assets/img/blog/bloghome2.jpg" alt=""></a>
                                    </div>
                                    <div class="blog_content">
                                        <div class="blog_post">
                                            <ul>
                                                <li>
                                                    <a href="#">Local Brand</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h3><a href="blog-details.html">Có một chủ đề đang khá hot đó chính là cụm từ “Ngáo giá”.</a></h3>
                                        <p>Tôi cho rằng việc định giá sản phẩm là quyền quyết định của mỗi thương hiệu và khách hàng hiện nay rất thông minh. </p>
                                        <div class="post_footer">
                                            <div class="post_meta">
                                                <ul>
                                                    <li>July 17, 2023</li>
                                                    <li>3 Bình luận</li>
                                                </ul>
                                            </div>
                                            <div class="Read_more">
                                                <a href="blog-details.html">Đọc thêm <i
                                                        class="fa fa-angle-double-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single_blog">
                                    <div class="blog_thumb">
                                        <a href="blog-details.html"><img src="assets/img/blog/bloghome4.jpg" alt=""></a>
                                    </div>
                                    <div class="blog_content">
                                        <div class="blog_post">
                                            <ul>
                                                <li>
                                                    <a href="#">Gobal Brand</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h3><a href="blog-details.html">Giữa Feng System và Lim Feng có điều gì khác nhau?</a></h3>
                                        <p>Feng System và Lim Feng hoàn toàn khác nhau. Feng System là hãng thời trang thiết kế may mặc.
                                        Lim Feng là một người làm sáng tạo nghệ thuật</p>
                                        <div class="post_footer">
                                            <div class="post_meta">
                                                <ul>
                                                    <li>July 17, 2023</li>
                                                    <li>3 Bình luận</li>
                                                </ul>
                                            </div>
                                            <div class="Read_more">
                                                <a href="blog-details.html">Read more <i
                                                        class="fa fa-angle-double-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--blog area end-->

                    <!--brand logo strat-->
                    <div class="brand_logo brand_two">
                        <div class="block_title">
                            <h3>Nhãn Hàng</h3>
                        </div>
                        <div class="row">
                            <div class="brand_active owl-carousel">
                                <div class="col-lg-2">
                                    <div class="single_brand">
                                        <a href="#"><img src="assets\img\brand\brand1.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="single_brand">
                                        <a href="#"><img src="assets\img\brand\brand2.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="single_brand">
                                        <a href="#"><img src="assets\img\brand\brand3.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="single_brand">
                                        <a href="#"><img src="assets\img\brand\brand4.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="single_brand">
                                        <a href="#"><img src="assets\img\brand\brand5.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="single_brand">
                                        <a href="#"><img src="assets\img\brand\brand6.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--logo thuong hieu end-->
                </div>
                <!--pos home section end-->
            </div>
            <!--pos page inner end-->
        </div>
    </div>
    <!--pos page end-->

    <!--footer area start-->
    <div class="footer_area">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer_widget">
                            <h3>Thông Tin về Brand</h3>
                            <p>Feng System luôn tạo ra những chiến dịch thời trang hướng đến thông điệp xóa nhòa ranh giới giữa cộng đồng, giới tính, tuổi tác.</p>
                            <div class="footer_widget_contect">
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i> 56-58 Phan Bội Châu, Phường Bến Thành, Quận 1 , Ho Chi Minh City, Vietnam</p>

                                <p><i class="fa fa-mobile" aria-hidden="true"></i> 070 378 6624</p>
                                <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> fengsystem.official@gmail.com
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer_widget">
                            <h3>Tài khoản</h3>
                            <ul>
                                <li><a href="#">Tài khoản của bạn</a></li>
                                <li><a href="#">Giỏ hàng</a></li>
                                <li><a href="#">Địa chỉ</a></li>
                                <li><a href="#">Đăng nhập</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer_widget">
                            <h3>Local Brand</h3>
                            <ul>
                                <li><a href="#">Về fengsystem</a></li>
                                <li><a href="#">Xu hướng thời trang</a></li>
                                <li><a href="#">Cập nhật </a></li>
                                <li><a href="#">Các dự án mới</a></li>
                                <li><a href="#">Thông tin thêm</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer_widget">
                            <h3>Chăm sóc khách hàng</h3>
                            <ul>
                                <li><a href="#"> Vận chuyển</a></li>
                                <li><a href="#"> Hướng dẫn mua hàng </a></li>
                                <li><a href="#"> Hướng dẫn đặt hàng </a></li>
                                <li><a href="#"> Trung tâm trợ giúp </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright_area">
                            <ul>
                                <li><a href="#"> about us </a></li>
                                <li><a href="#"> Customer Service </a></li>
                                <li><a href="#"> Privacy Policy </a></li>
                            </ul>
                            <p> &copy; 2023 <a href="#">Local Brand</a>. Thời trang mới </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer_social text-right">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-wifi" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer end-->

    <!-- js -->
    <script src="assets\js\vendor\jquery-1.12.0.min.js"></script>
    <script src="assets\js\popper.js"></script>
    <script src="assets\js\bootstrap.min.js"></script>
    <script src="assets\js\ajax-mail.js"></script>
    <script src="assets\js\plugins.js"></script>
    <script src="assets\js\main.js"></script>
</body>

</html>