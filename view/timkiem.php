<?php
    include 'header.php';
?>
<div class="offcanvas-overlay"></div>

<!-- ...:::: Start Breadcrumb Section:::... -->
<div class="breadcrumb-section breadcrumb-bg-color--golden">
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="breadcrumb-title">Kết Quả Tìm Kiếm</h3>
                    <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                        <nav aria-label="breadcrumb">
                            <ul>
                                <li><a href="index.php">Trang Chủ</a></li>
                                <li><a href="#">Tìm Kiếm</a></li>
                                <li class="active" aria-current="page">Kết Quả</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- ...:::: End Breadcrumb Section:::... -->

<!-- ...:::: Start Shop Section:::... -->
<div class="shop-section">
    <div class="container">
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-lg-3">
                <!-- Start Sidebar Area -->
                <div class="siderbar-section" data-aos="fade-up" data-aos-delay="0">
                
                    <!-- Start Single Sidebar Widget -->
                    <div class="sidebar-single-widget">
                        <h6 class="sidebar-title">Danh Mục</h6>
                        <div class="sidebar-content">
                            <ul class="sidebar-menu">
                                <?php
                                    foreach($dsdm as $dm){
                                        extract($dm);
                                        if ($status == 0) {
                                            $linkdm = "index.php?act=sanpham&iddm=$id ";
                                            echo '<li><a href="'.$linkdm.'">'.$name.'</a>
                                                </li>';
                                            }
                                        }
                                ?>
                                <li>
                                    <ul class="sidebar-menu-collapse">
                                        <!-- Start Single Menu Collapse List -->
                                        <li class="sidebar-menu-collapse-list">
                                            <div class="accordion">
                                                
                                                <div id="men-fashion" class="collapse">
                                                  
                                                </div>
                                            </div>
                                        </li> <!-- End Single Menu Collapse List -->
                                    </ul>
                                </li>
                        
                            </ul>
                        </div>
                    </div> <!-- End Single Sidebar Widget -->

                    <!-- Start Single Sidebar Widget -->
                    <div class="sidebar-single-widget">
                        <h6 class="sidebar-title">FILTER BY PRICE</h6>
                        <div class="sidebar-content">
                            <div id="slider-range"></div>
                            <div class="filter-type-price">
                                <label for="amount">Price range:</label>
                                <input type="text" id="amount">
                            </div>
                        </div>
                    </div> <!-- End Single Sidebar Widget -->

                    <!-- Start Single Sidebar Widget -->
                    <div class="sidebar-single-widget">
                        <h6 class="sidebar-title">MANUFACTURER</h6>
                        <div class="sidebar-content">
                            <div class="filter-type-select">
                                <ul>
                                    <li>
                                        <label class="checkbox-default" for="brakeParts">
                                            <input type="checkbox" id="brakeParts">
                                            <span>Brake Parts(6)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox-default" for="accessories">
                                            <input type="checkbox" id="accessories">
                                            <span>Accessories (10)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox-default" for="EngineParts">
                                            <input type="checkbox" id="EngineParts">
                                            <span>Engine Parts (4)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox-default" for="hermes">
                                            <input type="checkbox" id="hermes">
                                            <span>hermes (10)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox-default" for="tommyHilfiger">
                                            <input type="checkbox" id="tommyHilfiger">
                                            <span>Tommy Hilfiger(7)</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- End Single Sidebar Widget -->

                    <!-- Start Single Sidebar Widget -->
                    <div class="sidebar-single-widget">
                        <h6 class="sidebar-title">SELECT BY COLOR</h6>
                        <div class="sidebar-content">
                            <div class="filter-type-select">
                                <ul>
                                    <li>
                                        <label class="checkbox-default" for="black">
                                            <input type="checkbox" id="black">
                                            <span>Black (6)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox-default" for="blue">
                                            <input type="checkbox" id="blue">
                                            <span>Blue (8)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox-default" for="brown">
                                            <input type="checkbox" id="brown">
                                            <span>Brown (10)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox-default" for="Green">
                                            <input type="checkbox" id="Green">
                                            <span>Green (6)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox-default" for="pink">
                                            <input type="checkbox" id="pink">
                                            <span>Pink (4)</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- End Single Sidebar Widget -->

                    <!-- Start Single Sidebar Widget -->
                    <div class="sidebar-single-widget">
                        <h6 class="sidebar-title">Tag products</h6>
                        <div class="sidebar-content">
                            <div class="tag-link">
                                <a href="#">asian</a>
                                <a href="#">brown</a>
                                <a href="#">euro</a>
                                <a href="#">fashion</a>
                                <a href="#">hat</a>
                                <a href="#">t-shirt</a>
                                <a href="#">teen</a>
                                <a href="#">travel</a>
                                <a href="#">white</a>
                            </div>
                        </div>
                    </div> <!-- End Single Sidebar Widget -->

                    <!-- Start Single Sidebar Widget -->
                    <div class="sidebar-single-widget">
                        <div class="sidebar-content">
                            <a href="product-details-default.html" class="sidebar-banner img-hover-zoom">
                                <img class="img-fluid" src="assets/images/banner/side-banner.jpg" alt="">
                            </a>
                        </div>
                    </div> <!-- End Single Sidebar Widget -->

                </div> <!-- End Sidebar Area -->
            </div>
            <div class="col-lg-9">
                <!-- Start Shop Product Sorting Section -->
                <div class="shop-sort-section">
                    <div class="container">
                        <div class="row">
                            <!-- Start Sort Wrapper Box -->
                            <div class="sort-box d-flex justify-content-between align-items-md-center align-items-start flex-md-row flex-column"
                                data-aos="fade-up" data-aos-delay="0">
                                <!-- Start Sort tab Button -->
                                <div class="sort-tablist d-flex align-items-center">
                                    <ul class="tablist nav sort-tab-btn">
                                        <li><a class="nav-link active" data-bs-toggle="tab"
                                                href="#layout-3-grid"><img src="view/assets/images/icons/bkg_grid.png"
                                                    alt=""></a></li>
                                        <li><a class="nav-link" data-bs-toggle="tab" href="#layout-list"><img
                                                    src="view/assets/images/icons/bkg_list.png" alt=""></a></li>
                                    </ul>

                                    <!-- Start Page Amount -->
                                    <div class="page-amount ml-2">
                                        <span>Showing 1–9 of 21 results</span>
                                    </div> <!-- End Page Amount -->
                                </div> <!-- End Sort tab Button -->

                                <!-- Start Sort Select Option -->
                                <div class="sort-select-list d-flex align-items-center">
                                    <label class="mr-2">Sort By:</label>
                                    <form action="#">
                                        <fieldset>
                                            <select name="speed" id="speed">
                                                <option>Sort by average rating</option>
                                                <option>Sort by popularity</option>
                                                <option selected="selected">Sort by newness</option>
                                                <option>Sort by price: low to high</option>
                                                <option>Sort by price: high to low</option>
                                                <option>Product Name: Z</option>
                                            </select>
                                        </fieldset>
                                    </form>
                                </div> <!-- End Sort Select Option -->



                            </div> <!-- Start Sort Wrapper Box -->
                        </div>
                    </div>
                </div> <!-- End Section Content -->

                <!-- Start Tab Wrapper -->
                <div class="sort-product-tab-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="tab-content tab-animate-zoom">
                                    <!-- Start Grid View Product -->
                                    <div class="tab-pane active show sort-layout-single" id="layout-3-grid">
                                        <div class="row">
                                            
                                                <?php
                                                        foreach($dssp as $sp ){
                                                            extract($sp);
                                                            $hinh = $img_path.$image;
                                                            $giaban = $price - ($price * $giam_gia) / 100;
                                                            $linksp = "index.php?act=sanphamct&idsp=".$id;
                                                            echo '<div class="col-xl-4 col-sm-6 col-12">        <!-- Start Product Default Single Item -->
                                                            <div class="product-default-single-item product-color--golden"
                                                                data-aos="fade-up" data-aos-delay="0">
                                                                
                                                                <div class="image-box">
                                                                    <a href="'.$linksp.'" class="image-link">
                                                                        <img src="'.$hinh.'"
                                                                            alt="">
                                                                        <img src="'.$hinh.'"
                                                                            alt="">
                                                                    </a>
                                                                    <div class="tag">
                                                                <span>sale '.$giam_gia.'%</span>
                                                                </div>
                                                                    <div class="action-link">
                                                                        <div class="action-link-left">
                                                                            <a href="#" data-bs-toggle="modal"
                                                                                data-bs-target="#modalAddcart">Thêm vào giỏ hàng</a>
                                                                        </div>
                                                                        <div class="action-link-right">
                                                                            <a href="#" data-bs-toggle="modal"
                                                                                data-bs-target="#modalQuickview"><i
                                                                                    class="icon-magnifier"></i></a>
                                                                            <a href="wishlist.html"><i
                                                                                    class="icon-heart"></i></a>
                                                                            <a href="compare.html"><i
                                                                                    class="icon-shuffle"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                    <div class="content">
                                                                    <div class="content-left">
                                                                        <h6 class="title"><a
                                                                                href="'.$linksp.'">'.$name.'</a></h6>
                                                                        <ul class="review-star">
                                                                            <li class="fill"><i class="ion-android-star"></i>
                                                                            </li>
                                                                            <li class="fill"><i class="ion-android-star"></i>
                                                                            </li>
                                                                            <li class="fill"><i class="ion-android-star"></i>
                                                                            </li>
                                                                            <li class="fill"><i class="ion-android-star"></i>
                                                                            </li>
                                                                            <li class="empty"><i class="ion-android-star"></i>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="content-right">
                                                                    <span class="price"><del>$'.$price.'</del> $'.$giaban.'</span></span>
                                                                    </div>
            
                                                                </div>
                                                            </div>
                                                            <!-- End Product Default Single Item -->
                                                        </div>';
                                                        }
                                                    ?>
                                            
                                        </div>
                                    </div> <!-- End Grid View Product -->
                                    <!-- Start List View Product -->
                                    <div class="tab-pane sort-layout-single" id="layout-list">
                                        <div class="row">
                                            
                                        <?php
                                            foreach($dssp as $sp ){
                                            extract($sp);
                                            $hinh = $img_path.$image;
                                            $giaban = $price - ($price * $giam_gia) / 100;
                                            $linksp = "index.php?act=sanphamct&idsp=".$id;
                                            echo '<div class="col-12">
                                            <!-- Start Product Defautlt Single -->
                                            <div class="product-list-single product-color--golden">
                                                <a href="'.$linksp.'"
                                                    class="product-list-img-link">
                                                    <img class="img-fluid"
                                                        src="'.$hinh.'"
                                                        alt="">
                                                    <img class="img-fluid"
                                                        src="'.$hinh.'"
                                                        alt="">
                                                        
                                                </a>
                                                
                                                <div class="product-list-content">
                                                    <h5 class="product-list-link"><a
                                                            href="'.$linksp.'">'.$name.'</a></h5>
                                                    <ul class="review-star">
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="empty"><i class="ion-android-star"></i></li>
                                                    </ul>
                                                    <span class="product-list-price"><del>$'.$price.'</del>
                                                        $'.$giaban.'</span>
                                                    <p>'.$mo_ta.'</p>
                                                    <div class="product-action-icon-link-list">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalAddcart"
                                                            class="btn btn-lg btn-black-default-hover">Thêm vào giỏ hàng</a>
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalQuickview"
                                                            class="btn btn-lg btn-black-default-hover"><i
                                                                class="icon-magnifier"></i></a>
                                                        <a href="wishlist.html"
                                                            class="btn btn-lg btn-black-default-hover"><i
                                                                class="icon-heart"></i></a>
                                                        <a href="compare.html"
                                                            class="btn btn-lg btn-black-default-hover"><i
                                                                class="icon-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div> <!-- End Product Defautlt Single -->
                                        </div>';
                                            }
                                        ?>                                        
                                        </div>
                                    </div> <!-- End List View Product -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Tab Wrapper -->

                <!-- Start Pagination -->
                <div class="page-pagination text-center" data-aos="fade-up" data-aos-delay="0">
                    <ul>
                        <li><a class="active" href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="ion-ios-skipforward"></i></a></li>
                    </ul>
                </div> <!-- End Pagination -->
            </div>
        </div>
    </div>
</div> <!-- ...:::: End Shop Section:::... -->
