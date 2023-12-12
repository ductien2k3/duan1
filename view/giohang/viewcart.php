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
    <?php
        if(isset($thongbao) && ($thongbao!="")) {
            echo $thongbao;
        }
    ?>
    <!-- ...:::: Start Cart Section:::... -->
    <div class="cart-section">
        <!-- Start Cart Table -->

        <div class="cart-table-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="table_page table-responsive">
                                
        <form action="index.php?act=updatecart" method="post">

                                
                                        <!-- Start Cart Single Item-->
                                <?php   
                                    if((isset($_SESSION['giohang'])) && (count($_SESSION['giohang'])>0)){
                                    echo '<table>
                                    <!-- Start Cart Table Head -->
                                    <thead>
                                        <tr>
                                            <th class="product_remove">Xoá</th>
                                            <th class="product_remove">Số Thứ Tự</th>
                                            <th class="product_thumb">Hình ảnh</th>
                                            <th class="product_name">Tên sản phẩm</th>
                                            <th class="product_name">Màu sắc</th>
                                            <th class="product-price">Giá bán</th>
                                            <th class="product_quantity">Số Lượng</th>
                                            <th class="product_total">Thành Tiền</th>
                                        </tr>
                                    </thead>';
                                    $i = 0;
                                    $tongphu = 0;
                                    $ship =30;
                                    $tong =0;

                                    foreach($_SESSION['giohang'] as $item){
                                        
                                        $thanhtien = $item[3] * $item[4];
                                        $tongphu += $thanhtien;
                                        $tong = $tongphu + $ship;
                                        echo '<!-- End Cart Table Head -->
                                    <tbody>
                                     
                                        <!-- Start Cart Single Item-->
                                        <tr>   
                                            <input type="hidden" name="id" value="'.$item[0].'">
                                            <td class="product_remove"><a href="index.php?act=delcart&i='.$i.'"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                            <td class="product-price"><a href="">'.($i+1).'</a>
                                            </td>
                                            <td class="product_thumb"><a href="product-details-default.html"><img
                                                        src="'.$item[2].'"
                                                        alt=""></a></td>
                                            <td class="product_name"><a href="product-details-default.html" name ="tensanpham">'.$item[1].'</a></td>
                                            <td class="product-price">'.$item[5].'</td>
                                            <td class="product-price">'.$item[3].' VNĐ</td>
                                            <td class="product_quantity"><label>Quantity :</label> <input min="1"
                                                    max="100" value="'.$item[4].'" type="number" name ="soluong"></td>
                                            <td class="product_total">'.$thanhtien.' VNĐ</td>
                                        </tr> <!-- End Cart Single Item-->
                                        <!-- Start Cart Single Item-->
                                   
                                    </tbody>';
                                    $i++;
                                    }                                 
                                echo '</table>';

                                echo '</div>
                                <div class="cart_submit">
                                <a href="index.php?act=delcart" class="btn btn-md btn-golden">Xoá Giỏ Hàng</a> <button class="btn btn-md btn-golden" type="submit">cập nhật</button>
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
                                <h3>Mã Giảm Giá</h3>
                                <div class="coupon_inner">
                                    <p>nhập mã giảm giá ở đây nếu bạn có.</p>


                            
                                    <input class="mb-2" placeholder="mã giảm giá" type="text" name="voucher">
                                    <button type="submit" class="btn btn-md btn-golden">Nhập mã</button>
                                   
                                    


                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code right" data-aos="fade-up" data-aos-delay="400">
                                <h3>Tổng đơn hàng</h3>
                                <div class="coupon_inner">
                                    <div class="cart_subtotal">
                                        <p>Tổng Phụ</p>
                                        <p class="cart_amount" colspan="5">'.$tongphu.'</p>
                                    </div>
                                    <div class="cart_subtotal ">
                                        <p>Phí Ships</p>
                                        <p class="cart_amount"><span>Phí vận chuyển cố định</span>'.$ship.'</p>
                                    </div>
                                    <a href="#">Tính phí</a>
    
                                    <div class="cart_subtotal">
                                        <p>Tổng</p>
                                        <p class="cart_amount">'.$tong.' VNĐ</p>
                                    </div>
        </form>
                                    <div class="checkout_btn">
                                        <a href="index.php?act=muahang" class="btn btn-md btn-golden">mua hàng</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Coupon Start -->
        </div> ';
                                
        }
        
        ?>
        
    </div>
    