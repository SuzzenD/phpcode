<?php
session_start();
include_once("database/connect.php");
if(isset($_POST['btncart'])){
    $id=$_POST['id'];
    $size=$_POST['size'];
    $quantity=$_POST['quantity'];
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
                                    <a href="index.html"><img src="assets/img/logo/mainlog.png" alt=""></a>
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
                                            <li>Sản Phẩm Chi Tiết</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--breadcrumbs area end-->


                         <!--product wrapper start-->
                        <div class="product_details">
                            <div class="row">
                            <?php
                                        $query = "SELECT * FROM sanpham WHERE id = ".$_GET['id'];
                                        $result = $conn->query($query);
                                        if ($result->num_rows > 0) {
                                       while ($row = $result->fetch_assoc()){
                                       ?>
                                    <div class="col-lg-5 col-md-6">
                                        <div class="product_tab fix"> 
                                            <div class="product_tab_button">    
                                                <ul class="nav" role="tablist">
                                                    <li>
                                                        <a class="active" data-toggle="tab" href="#p_tab1" role="tab" aria-controls="p_tab1" aria-selected="false"><img src="assets/img/cart/sp1.jpg" alt=""></a>
                                                    </li>
                                                    <li>
                                                         <a data-toggle="tab" href="#p_tab2" role="tab" aria-controls="p_tab2" aria-selected="false"><img src="assets/img/cart/sp16.jpg" alt=""></a>
                                                    </li>
                                                    <li>
                                                       <a data-toggle="tab" href="#p_tab3" role="tab" aria-controls="p_tab3" aria-selected="false"><img src="assets/img/cart/sp8.jpg" alt=""></a>
                                                    </li>
                                                </ul>
                                            </div> 
                                            <div class="tab-content produc_tab_c">
                                                <div class="tab-pane fade show active" id="p_tab1" role="tabpanel">
                                                    <div class="modal_img">
                                                        <a href="#"><img src="assets/img/cart/<?= $row['image'] ?>" alt=""></a>
                                                        <div class="img_icone">
                                                           <img src="assets\img\cart\span-new.png" alt="">
                                                       </div>
                                                        <div class="view_img">
                                                            <a class="large_view" href="assets/img/cart/<?= $row['image'] ?>"><i class="fa fa-search-plus"></i></a>
                                                        </div>    
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="p_tab2" role="tabpanel">
                                                    <div class="modal_img">
                                                        <a href="#"><img src="assets/img/cart/<?= $row['image'] ?>" alt=""></a>
                                                        <div class="img_icone">
                                                           <img src="assets\img\cart\span-new.png" alt="">
                                                       </div>
                                                        <div class="view_img">
                                                            <a class="large_view" href="assets/img/cart/<?= $row['image'] ?>"><i class="fa fa-search-plus"></i></a>
                                                        </div>     
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="p_tab3" role="tabpanel">
                                                    <div class="modal_img">
                                                        <a href="#"><img src="assets/img/cart/<?= $row['image'] ?>" alt=""></a>
                                                        <div class="img_icone">
                                                           <img src="assets\img\cart\span-new.png" alt="">
                                                       </div>
                                                        <div class="view_img">
                                                            <a class="large_view" href="assets/img/cart/<?= $row['image'] ?>"> <i class="fa fa-search-plus"></i></a>
                                                        </div>     
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-lg-7 col-md-6">
                                        <div class="product_d_right">
                                            <div id="product-detail">
                                            <h1><?= $row['name'] ?></h1>
                                             <div class="product_ratting mb-10">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"> Viết Đánh Giá </a></li>
                                                </ul>
                                            </div>
                                            <div class="product_desc">
                                                <p><?= $row['content']?></p>
                                            </div>

                                            <div class="content_price mb-15">
                                                <span><?= $row['price']?></span>
                                            </div>
                                            <div class="box_quantity mb-20">
                                                <form action="" method="post">
                                                    <label>Số Lượng</label>
                                                    <input min="0" max="100" step="1" value="1" name="quantity" type="number">
                                                 
                                                <button  type="submit" name="btncart"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
                                                
                                                <a href="#" title="add to wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>    
                                            </div>
                                            <div class="product_d_size mb-20">
                                                <label for="group_1">kích cỡ</label>
                                                <select name="size" id="group_1" value="S">
                                                    <option value="S">S</option>
                                                    <option value="M">M</option>
                                                    <option value="L">L</option>
                                                </select>
                                            </div>
                                                <input name="id"  type="number"  value="<?= $row['id']?>" hidden>
                                                <input name="ten"  type="text"  value="<?= $row['name']?>" hidden>
                                                <input name="gia"  type="text"  value="<?= $row['price']?>" hidden>
                                                <input name="anh"  type="text"  value="<?= $row['image']?>" hidden>
                                            </form>
            

                                            <div class="product_stock mb-20">
                                               
                                                <p><?= $row['quantity']?> Sản Phẩm</p>
                                                <span> <?= $row['status']?> </span>
                                            </div>
                                            <div class="wishlist-share">
                                                <h4>Chia sẽ:</h4>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>           
                                                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>           
                                                    <li><a href="#"><i class="fa fa-tumblr"></i></a></li>           
                                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>        
                                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>        
                                                </ul>      
                                            </div>
                                            <?php
                                        }
                                        }else {
                                        echo "không có dữ liệu";
                                        }
                                        ?>  
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!--product details end-->


                        <!--product info start-->
                        <div class="product_d_info">
                            <div class="row">
                                <div class="col-12">
                                    <div class="product_d_inner">   
                                        <div class="product_info_button">    
                                            <ul class="nav" role="tablist">
                                                <li>
                                                    <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Thông Tin</a>
                                                </li>
                                                <li>
                                                     <a data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet" aria-selected="false">Thông tin sản phẩm</a>
                                                </li>
                                                <li>
                                                   <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Đánh giá khách hàng</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="info" role="tabpanel">
                                                <div class="product_info_content">
                                                    <p>Feng System luôn tạo ra những chiến dịch thời trang hướng đến 
                                                    thông điệp xóa nhòa ranh giới giữa cộng đồng, giới tính, tuổi tác, cũng như đề cao quyền sáng tạo của các bạn trẻ!
                                                    </p>
                                                </div>    
                                            </div>
                                            <div class="tab-pane fade" id="sheet" role="tabpanel">
                                                <div class="product_d_table">
                                                   <form action="#">
                                                    <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="first_child">Tên sản phẩm</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="first_child">Giá</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="first_child">Loại sản phẩm</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="first_child">Trạng thái</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                </div>
                                                <div class="product_info_content">
                                                    <p>FFeng System luôn tạo ra những chiến dịch thời trang hướng đến
                                                     thông điệp xóa nhòa ranh giới giữa cộng đồng, giới tính, tuổi tác, cũng như đề cao quyền sáng tạo của các bạn trẻ.
                                                    </p>
                                            </div>
                                            <div class="tab-pane fade" id="reviews" role="tabpanel">
                                                <div class="product_info_content">
                                                    <p>FFeng System luôn tạo ra những chiến dịch thời trang hướng đến thông điệp xóa nhòa ranh giới giữa cộng đồng,
                                                     giới tính, tuổi tác, cũng như đề cao quyền sáng tạo của các bạn trẻ.</p>
                                                <div class="product_info_inner">
                                                    <div class="product_ratting mb-10">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        </ul>
                                                        <strong>Nguyen Minh Nhat</strong> 
                                                        <p>09/07/2023</p>
                                                    </div>
                                                    <div class="product_demo">
                                                        <strong>Đăng!</strong>
                                                        <p>Sản Phẩm Đẹp</p>
                                                    </div>
                                                </div> 
                                                <div class="product_review_form">
                                                    <form action="#">
                                                        <h2>Thêm đánh giá </h2>
                                                        
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <label for="review_comment"> Đánh Giá Của Bạn</label>
                                                                <textarea name="comment" id="review_comment"></textarea>
                                                            </div> 
                                                            <div class="col-lg-6 col-md-6">
                                                                <label for="author">Họ và Tên</label>
                                                                <input id="author" type="text">

                                                            </div> 
                                                            <div class="col-lg-6 col-md-6">
                                                                <label for="email">Email </label>
                                                                <input id="email" type="text">
                                                            </div>  
                                                        </div>
                                                        <button type="submit">Đăng</button>
                                                     </form>   
                                                </div>     
                                            </div>
                                        </div>
                                    </div>     
                                </div>
                            </div>
                        </div>  
                     <!--product info end-->
                    <!--pos page inner end-->
                    </div></div>
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
