<?php
session_start();
include_once("database/connect.php");
if(isset($_POST['btncart'])){
    $id=$_POST['id'];
    $size='S';
    $quantity=1;
    $image=$_POST['anh'];
    $name=$_POST['ten'];
    $price=$_POST['gia'];
    if(!isset($_SESSION['cart'])){
        $_SESSION['cart']=[];
    }
    if(count($_SESSION['cart'])==0){
        $cartmini=['id'=>$id,'image'=>$image,'name'=>$name,'price'=>$price,'size'=>$size,'quantity'=>$quantity];
        $_SESSION['cart'][]=$cartmini;
    }else{
        $check=0;
        for ($i=0; $i <count($_SESSION['cart']) ; $i++) { 
            $item = $_SESSION['cart'][$i];
            if($id==$item['id'] && $size==$item['size']){
                $_SESSION['cart'][$i]['quantity'] = $quantity+$item['quantity'];
                $check=1;
                break;
            }     
        }
        if($check==0){
            $cartmini=['id'=>$id,'image'=>$image,'name'=>$name,'price'=>$price,'size'=>$size,'quantity'=>$quantity];
            $_SESSION['cart'][]=$cartmini;
        }
        var_dump($_SESSION['cart'][1]);     
    }
    header('Location: cart.php');
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
                                        <li><a href="dangnhap.php" title="login">Đăng Nhập</a></li>
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
                                         <?php
                                        $search = isset($_GET['name']) ? $_GET['name'] :"";
                                        if($search) {
                                         $Where =" WHERE name LIKE '%.$search.%'";
                                        }
                                        ?> 
                                        <form id="product-sreach" action="#" method="GET">
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
                                                                    <li><a href="">Portfolio</a></li>
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
                        <!--breadcrumbs area start-->
                        <div class="breadcrumbs_area">
                            <div class="row">
                                <div class="col-12">
                                    <div class="breadcrumb_content">
                                        <ul>
                                            <li><a href="index.html">home</a></li>
                                            <li><i class="fa fa-angle-right"></i></li>
                                            <li>Cửa hàng chính</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--breadcrumbs area end-->

                        <!--pos home section-->
                        <div class=" pos_home_section shop_section shop_fullwidth">
                            <div class="row">
                                <div class="col-12">
                                    <!--banner slider start-->
                                    <div class="banner_slider fullwidht  mb-35">
                                        <img src="assets/img/banner/bannerhome1.jpg" alt="">
                                    </div> 
                                    <!--banner slider start-->
                                </div>
                            </div>       
                            <div class="row">
                                <div class="col-12">
                                    <!--shop toolbar start-->
                                    <div class="shop_toolbar mb-35">
                                        <div class="list_button">
                                            <ul class="nav" role="tablist">
                                                <li>
                                                    <a class="active" data-toggle="tab" href="#large" role="tab" aria-controls="large" aria-selected="true"><i class="fa fa-th-large"></i></a>
                                                </li>
                                                <li>
                                                    <a data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false"><i class="fa fa-th-list"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="page_amount">
                                            <p>Hiển thị 1–9 trên 15 kết quả</p>
                                        </div>
                                        <div class="select_option">
                                            <form action="#">
                                                <label>Sắp xếp theo</label>
                                                <select name="orderby" id="short">
                                                    <option selected="" value="1">loại sản phẩm</option>
                                                    <option value="1">Giá: sản phẩm</option>
                                                    <option value="1">Giá: Cao</option>
                                                    <option value="1">Tên Sản Phẩm: A</option>
                                                    <option value="1">Giảm Giá</option>
                                                    <option value="1">Còn Hàng</option>
                                                </select>
                                            </form>
                                        </div>
                                    </div>
                                    <!--shop toolbar end-->
                                </div>
                            </div>        

                            <!--shop tab product-->
                        <div class="shop_tab_product shop_fullwidth">
                            <?php
                             $i=0;
                             if(isset($_GET["page"])){
                                $item_per_page = $_GET["per_page"];
                                $current_page = $_GET["page"];
                             }else{
                                $item_per_page = 8;
                                $current_page = 1;
                             }
                             $offset = ($current_page - 1) * $item_per_page;
                    
                             
                             $query = "SELECT * FROM sanpham LIMIT ".$item_per_page." OFFSET ".$offset ;
                             $result = $conn->query($query);
                             if ($result->num_rows > 0) {
                                echo'<div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="large" role="tabpanel">
                                    <div class="row">';
                            while ($row = $result->fetch_assoc()){
                                $i++;
                                if($i%2==0){
                            ?>  
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <form action="" method="post"> 
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                       <a href="spChiTiet.php?id=<?= $row['id']?>"><img src="assets/img/cart/<?= $row['image'] ?>" alt=""></a> 
                                                       <div class="img_icone">
                                                           <img src="assets\img\cart\span-hot.png" alt="">
                                                       </div>
                                                       <div class="product_action">
                                                       <button type="submit" name="btncart" ><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</button>
                                                       </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <span class="product_price"><?= $row['price'] ?></span>
                                                        <h3 class="product_title"><a href="spChiTiet.php?id=<?= $row['id']?>"><?= $row['name'] ?></a></h3>
                                                    </div>
                                                    <div class="product_info">
                                                        <ul>
                                                            <li><a href="#" title=" Add to Wishlist ">Thêm Vào Danh Sách</a></li>
                                                            <li><a href="spChiTiet.php?id=<?= $row['id']?>" data-toggle="modal" data-target="#modal_box" title="Quick view">Xem Chi Tiết</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <input name="id"  type="number"  value="<?= $row['id']?>" hidden>
                                                <input name="ten"  type="text"  value="<?= $row['name']?>" hidden>
                                                <input name="gia"  type="text"  value="<?= $row['price']?>" hidden>
                                                <input name="anh"  type="text"  value="<?= $row['image']?>" hidden>
                                                </form>
                                            </div>
                                            <?php
                                        }else{
                                        ?>
                                            <div class="col-lg-3 col-md-4 col-sm-6">
                                                <form action="" method="post"> 
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                       <a href="spChiTiet.php?id=<?= $row['id']?>"><img src="assets/img/cart/<?= $row['image'] ?>" alt="t"></a> 
                                                       <div class="img_icone">
                                                           <img src="assets\img\cart\span-new.png" alt="">
                                                       </div>
                                                       <div class="product_action">
                                                           <button type="submit" name="btncart" ><i class="fa fa-shopping-cart"></i> Thêm Vào Giỏ</button>
                                                       </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <span class="product_price"><?= $row['price'] ?></span>
                                                        <h3 class="product_title"><a href="spChiTiet.php?id=<?= $row['id']?>"><?= $row['name'] ?></a></h3>
                                                    </div>
                                                    <div class="product_info">
                                                        <ul>
                                                            <li><a href="#" title=" Add to Wishlist ">Thêm Vào Danh Sách</a></li>
                                                            <li><a href="spChiTiet.php?id=<?= $row['id']?>" data-toggle="modal" data-target="#modal_box" title="Quick view">Xem Chi Tiết</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <input name="id"  type="number"  value="<?= $row['id']?>" hidden>
                                                <input name="ten"  type="text"  value="<?= $row['name']?>" hidden>
                                                <input name="gia"  type="text"  value="<?= $row['price']?>" hidden>
                                                <input name="anh"  type="text"  value="<?= $row['image']?>" hidden>
                                                </form> 
                                            </div>   
                                        <?php
                                        }
                                        }
                                        }else {
                                        echo "không có dữ liệu";
                                        }
                                        ?>   
                                    </div>
                                    </div>
                                    </div>
                            <!--shop tab product end-->

                            <!--pagination style start--> 
                            <div class="pagination_style shop_page">
                                <div class="item_page">
                                    <form action="#">
                                        <label for="page_select">Hiện</label>
                                        <select id="page_select">
                                            <option value="1">9</option>
                                            <option value="2">10</option>
                                            <option value="3">15</option>
                                        </select>
                                        <span>Sản Phẩm Của Feng</span>
                                    </form>
                                </div>
                                <?php
                                include "./page.php";
                                ?>
                            </div>
                            <!--paination style end-->
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
                                        <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-wifi" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer area end-->  
		
		<!-- all js here -->
        <script src="assets\js\vendor\jquery-1.12.0.min.js"></script>
        <script src="assets\js\popper.js"></script>
        <script src="assets\js\bootstrap.min.js"></script>
        <script src="assets\js\ajax-mail.js"></script>
        <script src="assets\js\plugins.js"></script>
        <script src="assets\js\main.js"></script>
    </body>
</html>
