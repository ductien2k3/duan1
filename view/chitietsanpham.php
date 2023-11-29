<?php
    include 'header.php';
?>
<div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">CHI TIẾT SẢN PHẨM</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.php">Trang Chủ</a></li>
                                    <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                                    <li class="active" aria-current="page">Chi Tiết Sản Phẩm </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

     <!-- Start Product Details Section -->
    <div class="product-details-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="product-details-gallery-area" data-aos="fade-up" data-aos-delay="0">

    
            <?php
                extract($onesp);
                $hinh = $img_path.$image;
                $giaban = $price - ($price * $giam_gia) / 100;

                $tendanhmuc = '';
          foreach ($listdanhmuc as $danhmuc) {
          if ($danhmuc['id'] == $id_danhmuc) {
            $tendanhmuc = $danhmuc['name'];
            break;
          }
        }
                echo '<!-- Start Large Image -->
                        <div class="product-large-image product-large-image-horaizontal swiper-container">
                        <form action="index.php?act=addtocart" method="post">
                            <div class="swiper-wrapper">
                                <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive">
                                    <img src="'.$hinh.'"  alt="">
                                </div>
                                <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive">
                                    <img src="'.$hinh.'" alt="">
                                </div>
                                <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive">
                                    <img src="'.$hinh.'" alt="">
                                </div>
                                <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive">
                                    <img src="'.$hinh.'" alt="">
                                </div>
                                <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive">
                                    <img src="'.$hinh.'" alt="">
                                </div>
                                <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive">
                                    <img src="'.$hinh.'" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- End Large Image -->
                        <!-- Start Thumbnail Image -->
                        <div
                            class="product-image-thumb product-image-thumb-horizontal swiper-container pos-relative mt-5">
                            <div class="swiper-wrapper">
                                <div class="product-image-thumb-single swiper-slide">
                                    <img class="img-fluid" src="'.$hinh.'"
                                        alt="">
                                </div>
                                <div class="product-image-thumb-single swiper-slide">
                                    <img class="img-fluid" src="'.$hinh.'"
                                        alt="">
                                </div>
                                <div class="product-image-thumb-single swiper-slide">
                                    <img class="img-fluid" src="'.$hinh.'"
                                        alt="">
                                </div>
                                <div class="product-image-thumb-single swiper-slide">
                                    <img class="img-fluid" src="'.$hinh.'"
                                        alt="">
                                </div>
                                <div class="product-image-thumb-single swiper-slide">
                                    <img class="img-fluid" src="'.$hinh.'"
                                        alt="">
                                </div>
                                <div class="product-image-thumb-single swiper-slide">
                                    <img class="img-fluid" src="'.$hinh.'"
                                        alt="">
                                </div>
                            </div>
                            <!-- Add Arrows -->
                            <div class="gallery-thumb-arrow swiper-button-next"></div>
                            <div class="gallery-thumb-arrow swiper-button-prev"></div>
                        </div>
                        <!-- End Thumbnail Image -->
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="product-details-content-area product-details--golden" data-aos="fade-up"
                        data-aos-delay="200">
                        <!-- Start  Product Details Text Area-->
                        <div class="product-details-text">
                            <h4 class="title">'.$name.'</h4>
                            <div class="d-flex align-items-center">
                                <ul class="review-star">
                                    <li class="fill"><i class="ion-android-star"></i></li>
                                    <li class="fill"><i class="ion-android-star"></i></li>
                                    <li class="fill"><i class="ion-android-star"></i></li>
                                    <li class="fill"><i class="ion-android-star"></i></li>
                                    <li class="empty"><i class="ion-android-star"></i></li>
                                </ul>
                                <a href="#" class="customer-review ml-2">(khách hàng đánh giá )</a>
                            </div>
                            <div class="price">$'.$giaban.'</div>
                            <p>'.$mo_ta.'</p>
                        </div> <!-- End  Product Details Text Area-->
                        <!-- Start Product Variable Area -->
                        <div class="product-details-variable">
                            <h4 class="title">Tùy chọn có sẵn</h4>
                            <!-- Product Variable Single Item -->
                            <div class="variable-single-item">
                                <div class="product-stock"> <span class="product-stock-in"><i
                                            class="ion-checkmark-circled"></i></span> '.$so_luong.' TRONG KHO</div>
                            </div>
                            <!-- Product Variable Single Item -->
                            <div class="d-flex align-items-center ">
                                <div class="variable-single-item ">
                                    <span>Số Lượng</span>
                                    <div class="product-variable-quantity">
                                        <input min="1" max="'.$so_luong.'" step="1"  value="1" oninput="if(this.value > '.$so_luong.') this.value = '.$so_luong.' ; if(this.value < 1 )  this.value = 1" onblur="checkMaxValue(this)" type="number" name="soluong">
                                        <input type="hidden" name="id" value="'.$id.'">
                                        <input type="hidden" name="tensp" value="'.$name.'"> 
                                        <input type="hidden" name="hinh" value="'.$hinh.'">  
                                        <input type="hidden" name="giaban" value="'.$giaban.'">
                                    </div>
                                </div>
                                
                                
                                
                                <div class="product-add-to-cart-btn">
                                    <input type="submit" name="addtocart" value="+ Thêm vào giỏ hàng"  class="btn btn-block btn-lg btn-black-default-hover" data-bs-toggle="modal" data-bs-target="#modalAddcart">
                                    
                                </div>
                            </div>
                            <!-- Start  Product Details Meta Area-->
                            <div class="product-details-meta mb-20">
                                <a href="wishlist.html" class="icon-space-right"><i class="icon-heart"></i>Thêm vào danh sách ước</a>
                                <a href="compare.html" class="icon-space-right"><i class="icon-refresh"></i> So sánh</a>
                            </div> <!-- End  Product Details Meta Area-->
                        </div> <!-- End Product Variable Area -->

                        <!-- Start  Product Details Catagories Area-->
                        <div class="product-details-catagory mb-2">
                        
                            <span class="title">DANH MỤC:</span>
                            <ul>
                                <li><a href="#">'.$tendanhmuc.'</a></li>
                               
                            </ul>
                        </div> <!-- End  Product Details Catagories Area-->
                        <!-- Start  Product Details Social Area-->
                        <div class="product-details-social">
                            <span class="title">CHIA SẺ LÊN MẠNG XÃ HỘI</span>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                            
                            </div>
                        </form>
                        </div>';
                    ?>
   
                         <!-- End  Product Details Social Area-->
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Product Details Section -->

    <!-- Start Product Content Tab Section -->
    <div class="product-details-content-tab-section section-top-gap-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-details-content-tab-wrapper" data-aos="fade-up" data-aos-delay="0">

                        <!-- Start Product Details Tab Button -->
                        <ul class="nav tablist product-details-content-tab-btn d-flex justify-content-center">
                            <li><a class="nav-link active" data-bs-toggle="tab" href="#description">
                                    MÔ TẢ
                                </a></li>
                            <li><a class="nav-link" data-bs-toggle="tab" href="#specification">
                                    THÔNG TIN
                                </a></li>
                            <li><a class="nav-link" data-bs-toggle="tab" href="#review">
                                    BÌNH LUẬN
                                </a></li>
                        </ul> <!-- End Product Details Tab Button -->



                                <?php
                                extract($onesp);
                                $hinh = $img_path.$image;
                                echo '<div class="product-details-content-tab">
                                <div class="tab-content">
                                    
                                    <!-- Start Product Details Tab Content Singel -->
                                    <div class="tab-pane active show" id="description">
                                        <div class="single-tab-content-item">
                                            <p>'.$mo_ta.' </p>
                                            <p>'.$mo_ta.'</p>
                                        </div>
                                    </div> <!-- End Product Details Tab Content Singel -->
                                    <!-- Start Product Details Tab Content Singel -->
                                    <div class="tab-pane" id="specification">
                                        <div class="single-tab-content-item">
                                            <table class="table table-bordered mb-20">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Bảo Hành</th>
                                                        <td>'.$bao_hanh.'</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Mã Sản Phẩm</th>
                                                        <td>'.$ma_sp.'</td>
                                                    <tr>
                                                        <th scope="row">Ngày Đăng</th>
                                                        <td>'.$ngay_dang.'</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p>'.$mo_ta.'</p>
                                        </div>
                                    </div> <!-- End Product Details Tab Content Singel -->
                                    <!-- Start Product Details Tab Content Singel -->
                                    <div class="tab-pane" id="review"> '
                                    ?>
                                        <iframe src="view/binhluan/formbinhluan.php?id_sanpham=<?=$id?>" frameborder="0" width="100%" height="800px"></iframe>
                                            
                                        </div>
                                    </div> <!-- End Product Details Tab Content Singel -->
                                </div>
                            </div> <!-- End Product Details Tab Content -->
                                
                        <!-- Start Product Details Tab Content -->
                        

                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Product Content Tab Section -->

    <!-- Start Product Default Slider Section -->
    <div class="product-default-slider-section section-top-gap-100 section-fluid">
        <!-- Start Section Content Text Area -->
        <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content-gap">
                            <div class="secton-content">
                                <h3 class="section-title">SẢN PHẨM CÙNG LOẠI</h3>
                                <p>Duyệt qua bộ sưu tập các sản phẩm liên quan của chúng tôi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Section Content Text Area -->
        <div class="product-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product-slider-default-1row default-slider-nav-arrow">
                            <!-- Slider main container -->
                            <div class="swiper-container product-default-slider-4grid-1row">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item -->
                                    <?php
                                        foreach ($spcungloai as $sp){
                                            extract($sp);
                                            $hinh = $img_path.$image;
                                            $linksp = "index.php?act=sanphamct&idsp=".$id;
                                            $giaban = $price - ($price * $giam_gia) / 100;
                                            echo '<div class="product-default-single-item product-color--golden swiper-slide">
                                            <div class="image-box">
                                                <a href="'.$linksp.'" class="image-link">
                                                    <img src="'.$hinh.'" alt="">
                                                    <img src="'.$hinh.'" alt="">
                                                </a>
                                                <div class="tag">
                                                                <span>sale '.$giam_gia.'%</span>
                                                                </div>
                                                <div class="action-link">
                                                    <div class="action-link-left">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalAddcart">Thêm vào Giỏ Hàng</a>
                                                    </div>
                                                    <div class="action-link-right">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalQuickview"><i
                                                                class="icon-magnifier"></i></a>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="content-left">
                                                    <h6 class="title"><a href="'.$linksp.'">'.$name.'
                                                            </a></h6>
                                                    <ul class="review-star">
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="empty"><i class="ion-android-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="content-right">
                                                <span class="price"><del>$'.$price.'</del> $'.$giaban.'</span></span>
                                            </div>
    
                                            </div>
                                        </div>';
                                        }
                                    ?>
                                    
                                            </div>

                                        </div>
                                    </div> <!-- End Product Default Single Item -->
                                </div>
                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Default Slider Section -->