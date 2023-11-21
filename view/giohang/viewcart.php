<?php
    include 'view/header.php';
    //echo var_dump($_SESSION['giohang'])
?>
<div class="offcanvas-overlay"></div>

    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">Cart</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                                    <li class="active" aria-current="page">Cart</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Cart Section:::... -->
    <div class="cart-section">
        <!-- Start Cart Table -->

        <div class="cart-table-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="table_page table-responsive">

                                
                                        <!-- Start Cart Single Item-->
                                <?php   
                                    if((isset($_SESSION['giohang'])) && (count($_SESSION['giohang'])>0)){
                                    echo '<table>
                                    <!-- Start Cart Table Head -->
                                    <thead>
                                        <tr>
                                            <th class="product_remove">Xoá</th>
                                            <th class="product_thumb">Hình ảnh</th>
                                            <th class="product_name">Tên sản phẩm</th>
                                            <th class="product-price">Giá bán</th>
                                            <th class="product_quantity">Số Lượng</th>
                                            <th class="product_total">Thành Tiền</th>
                                        </tr>
                                    </thead>';
                                    foreach($_SESSION['giohang'] as $item){
                                        $thanhtien = $item[3] * $item[4];
                                        echo '<!-- End Cart Table Head -->
                                    <tbody>
                                     
                                        <!-- Start Cart Single Item-->
                                        <tr>
                                            <td class="product_remove"><a href="index.php?act=delcart"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                            <td class="product_thumb"><a href="product-details-default.html"><img
                                                        src="'.$item[2].'"
                                                        alt=""></a></td>
                                            <td class="product_name"><a href="product-details-default.html">'.$item[1].'</a></td>
                                            <td class="product-price">$'.$item[3].'</td>
                                            <td class="product_quantity"><label>Quantity :</label> <input min="1"
                                                    max="100" value="'.$item[4].'" type="number"></td>
                                            <td class="product_total">$'.$thanhtien.'</td>
                                        </tr> <!-- End Cart Single Item-->
                                        <!-- Start Cart Single Item-->
                                   
                                    </tbody>';
                                    }
                                
                                
                                     
                                echo '</table>';
                            }
                            ?>
                            </div>
                            <div class="cart_submit">
                                <button class="btn btn-md btn-golden" type="submit">update cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Cart Table -->

        <!-- Start Coupon Start -->
        <div class="coupon_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code left" data-aos="fade-up" data-aos-delay="200">
                            <h3>Coupon</h3>
                            <div class="coupon_inner">
                                <p>Enter your coupon code if you have one.</p>
                                <input class="mb-2" placeholder="Coupon code" type="text">
                                <button type="submit" class="btn btn-md btn-golden">Apply coupon</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code right" data-aos="fade-up" data-aos-delay="400">
                            <h3>Cart Totals</h3>
                            <div class="coupon_inner">
                                <div class="cart_subtotal">
                                    <p>Subtotal</p>
                                    <p class="cart_amount">$215.00</p>
                                </div>
                                <div class="cart_subtotal ">
                                    <p>Shipping</p>
                                    <p class="cart_amount"><span>Flat Rate:</span> $255.00</p>
                                </div>
                                <a href="#">Calculate shipping</a>

                                <div class="cart_subtotal">
                                    <p>Total</p>
                                    <p class="cart_amount">$215.00</p>
                                </div>
                                <div class="checkout_btn">
                                    <a href="#" class="btn btn-md btn-golden">Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Coupon Start -->
    </div> 