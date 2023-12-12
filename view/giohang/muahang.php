<?php
    include 'view/header.php';
?>
<div class="offcanvas-overlay"></div>

<!-- ...:::: Start Breadcrumb Section:::... -->
<div class="breadcrumb-section breadcrumb-bg-color--golden">
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="breadcrumb-title">Mua Hàng</h3>
                    <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                        <nav aria-label="breadcrumb">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                                <li class="active" aria-current="page">Checkout</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- ...:::: End Breadcrumb Section:::... -->

<!-- ...:::: Start Checkout Section:::... -->

<div class="checkout-section">
    <div class="container">
        <div class="row">
            <!-- User Quick Action Form -->
            <div class="col-12">
            <div class="user-actions accordion" data-aos="fade-up" data-aos-delay="0">
            <?php
                if(isset($_SESSION['user'])){
                    echo '<div class="user-actions accordion" data-aos="fade-up" data-aos-delay="200">
                    <h3>
                        <i class="fa fa-file-o" aria-hidden="true"></i>
                        Bạn có mã giảm giá
                        <a class="Returning" href="#" data-bs-toggle="collapse" data-bs-target="#checkout_coupon"
                            aria-expanded="true">Click ở đây để nhập mã</a>

                    </h3>
                    <div id="checkout_coupon" class="collapse checkout_coupon" data-parent="#checkout_coupon">
                        <div class="checkout_info">
                            <form action="#">
                                <input placeholder="Mã giảm giá" type="text">
                                <button class="btn btn-md btn-black-default-hover" type="submit">Nhập mã</button>
                            </form>
                        </div>
                    </div>
                </div>';
                } else {
                    echo '<h3>
                        <i class="fa fa-file-o" aria-hidden="true"></i>
                        Nếu bạn đã có tài khoản
                        <a class="Returning" href="#" data-bs-toggle="collapse" data-bs-target="#checkout_login"
                            aria-expanded="true">Click vào đây để đăng nhập</a>
                    </h3>
                    <div id="checkout_login" class="collapse" data-parent="#checkout_login">
                        <div class="checkout_info">
                            <p>Nếu bạn đã mua sắm với chúng tôi trước đây, vui lòng nhập thông tin chi tiết của bạn vào các ô bên dưới. Nếu như
                                bạn là khách hàng mới, vui lòng tiếp tục phần Thanh toán &amp; Phần vận chuyển.</p>
                            <form action="#">
                                <div class="form_group default-form-box">
                                    <label>Tên đăng nhập<span>*</span></label>
                                    <input type="text">
                                </div>
                                <div class="form_group default-form-box">
                                    <label>Mật Khẩu<span>*</span></label>
                                    <input type="password">
                                </div>
                                <div class="form_group group_3 default-form-box">
                                    <button class="btn btn-md btn-black-default-hover" type="submit">Đăng nhập</button>
                                    <label class="checkbox-default">
                                        <input type="checkbox">
                                        <span>Nhớ mật khẩu</span>
                                    </label>
                                </div>
                                <a href="#">Quên mật khẩu ?</a>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="user-actions accordion" data-aos="fade-up" data-aos-delay="200">
                    <h3>
                        <i class="fa fa-file-o" aria-hidden="true"></i>
                        Bạn có mã giảm giá
                        <a class="Returning" href="#" data-bs-toggle="collapse" data-bs-target="#checkout_coupon"
                            aria-expanded="true">Click ở đây để nhập mã</a>

                    </h3>
                    <div id="checkout_coupon" class="collapse checkout_coupon" data-parent="#checkout_coupon">
                        <div class="checkout_info">
                            <form action="#">
                                <input placeholder="Mã giảm giá" type="text">
                                <button class="btn btn-md btn-black-default-hover" type="submit">Nhập mã</button>
                            </form>
                        </div>
                    </div>
                </div>';
                }
            ?>
        </div>  
            <!-- User Quick Action Form -->
        </div>
        <!-- Start User Details Checkout Form -->
<form action="index.php?act=dathang" method="post">
        <div class="checkout_form" data-aos="fade-up" data-aos-delay="400">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                <?php 
                    if(isset($_SESSION['user'])){
                        extract($_SESSION['user']);
                        echo '
                        <h3>Chi tiết thanh toán</h3>
                        <div class="row">
                            <div class="col-12">
                                <div class="default-form-box">
                                    <label>Tên của bạn*</label>
                                    <input type="hidden"  value="'.$id.'" name="id_user" >
                                    <input type="hidden"   name="ngay_dat" >
                                    <input type="hidden"  value="Chờ xác nhận" name="status" >
                                    <input type="text" placeholder="tên của bạn" value="'.$user_name.'" name="name" >
                                </div>
                            </div>                          
                            <div class="col-12">
                                <div class="default-form-box">
                                    <label>Địa Chỉ của bạn<span>*</span></label>
                                    <input placeholder="địa chỉ chi tiết của bạn" type="text" value="'.$address.'" name="address" >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="default-form-box">
                                    <label>Số điện thoại của bạn<span>*</span></label>
                                    <input type="text" placeholder="số điện của bạn" value="'.$tel.'" name="tel">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="default-form-box">
                                    <label> Email <span>*</span></label>
                                    <input type="text" placeholder="email của bạn" value="'.$email.'" name="email">
                                </div>
                            </div>
                            <div class="col-12">
                          
                                <div id="anotherShipping" class="collapse mt-3" data-parent="#anotherShipping">
                                    <div class="row">
                                                                                                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="order-notes">
                                    <label for="order_note">Ghi chú </label>
                                    <textarea 
                                        placeholder="Ghi chú về đơn đặt hàng của bạn, ví dụ: ghi chú đặc biệt để giao hàng."></textarea>
                                </div>
                            </div>
                     
                    ';
                    }   else {
                        echo '
                        <h3>Chi tiết thanh toán</h3>
                        <div class="row">
                            <div class="col-12">
                                <div class="default-form-box">
                                    <label>Tên của bạn*</label>
                                    <input type="hidden"  value="0" name="id_user" >
                                    <input type="hidden"   name="ngay_dat" >
                                    <input type="text" placeholder="tên của bạn" name="name"  >
                                    <input type="hidden"  value="Chờ xác nhận" name="status" >
                                </div>
                            </div>                          
                            <div class="col-12">
                                <div class="default-form-box">
                                    <label>Địa Chỉ của bạn<span>*</span></label>
                                    <input placeholder="địa chỉ chi tiết của bạn" type="text" name="address"  >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="default-form-box">
                                    <label>Số điện thoại của bạn<span>*</span></label>
                                    <input type="text" placeholder="số điện của bạn" name="tel">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="default-form-box">
                                    <label> Email <span>*</span></label>
                                    <input type="text" placeholder="email của bạn" name="email">
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="checkbox-default" for="newAccount" data-bs-toggle="collapse"
                                    data-bs-target="#newAccountPassword">
                                    <input type="checkbox" id="newAccount">
                                    <span>Tạo tài khoản</span>
                                </label>
                                <div id="newAccountPassword" class="collapse mt-3"
                                    data-parent="#newAccountPassword">
                                    <div class="card-body1 default-form-box">
                                        <label> mật khẩu <span>*</span></label>
                                        <input placeholder="mật khẩu" type="password">
                                    </div>
                                </div>
                            </div>             
                            <div class="col-12 mt-3">
                                <div class="order-notes">
                                    <label for="order_note">Ghi chú </label>
                                    <textarea id="order_note"
                                        placeholder="Ghi chú về đơn đặt hàng của bạn, ví dụ: ghi chú đặc biệt để giao hàng."></textarea>
                                </div>
                            </div>
                     
                    ';
                    }
                    ?>
                </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    
                        <h3>Giỏ hàng của bạn</h3>
                        <div class="order_table table-responsive">
                        <table>
    <thead>
        <tr>
            <th>Sản Phẩm</th>
            <th>Số Lượng</th>
            <th>Màu sắc</th>
            <th>Đơn giá</th>
        </tr>
    </thead>
    <?php
    $tongphu = 0;
    $ship = 30;
    $tong = 0;

    if ((isset($_SESSION['giohang'])) && (count($_SESSION['giohang']) > 0)) {
        echo '<tbody>'; // Mở tbody ở đây để chỉ có một tbody cho tất cả các sản phẩm
        foreach ($_SESSION['giohang'] as $item) {
            $thanhtien = $item[3] * $item[4];
            $tongphu += $thanhtien;
            $tong = $tongphu + $ship;
            echo '<tr>
                    <td>' . $item[1] . '</td>
                    <td><strong>' . $item[4] . '</strong></td>
                    <td>' . $item[5] . '</td>
                    <td> ' . $thanhtien . ' VNĐ</td>
                </tr>';
        }

        echo '</tbody>
        <tfoot>
            <tr>
                <th>Tổng Phụ</th>
                <th></th>
                <th></th>
                <td colspan="4">' . $tongphu . '</td>
            </tr>
            <tr>
                <th>Phí Ship</th>
                <th></th>
                <th></th>
                <td><strong>' . $ship . ' VNĐ</strong></td>
            </tr>
            <tr class="order_total">
            
                <th>Tổng số tiền</th>
                <th></th>
                <th></th>
                <td><strong>' . $tong . ' VNĐ</strong></td>
            </tr>
        </tfoot>';
    }
    ?>
</table>

                        </div>
                        <div class="payment_method">
                            <div class="panel-default">
                                <label class="checkbox-default" for="currencyCod" data-bs-toggle="collapse"
                                    data-bs-target="#methodCod">
                                    <input type="radio" id="currencyCod" name="pttt" value="cod" required>
                                    <span>Thanh toán khi nhận hàng</span>
                                </label>

                                <div id="methodCod" class="collapse" data-parent="#methodCod" >
                                    <div class="card-body1">
                                        <p>Vui lòng gửi séc đến Tên cửa hàng, Đường cửa hàng, Thị trấn cửa hàng, Bang cửa hàng
                                            / Quận, Mã bưu điện cửa hàng.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-default">
                                <label class="checkbox-default" for="currencyPaypal" data-bs-toggle="collapse"
                                    data-bs-target="#methodPaypal">
                                    <input type="radio" id="currencyPaypal" name="pttt" value="paypal" required>
                                    <span>PayPal</span>
                                </label>
                                <div id="methodPaypal" class="collapse " data-parent="#methodPaypal">
                                    <div class="card-body1">
                                        <p>Thanh toán qua PayPal; bạn có thể thanh toán bằng thẻ tín dụng nếu bạn không có
                                            Tài khoản Paypal.</p>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="tongdonhang"value="<?=$tong?>">
                            <div class="order_button pt-3">
                                <input class="btn btn-md btn-black-default-hover" type="submit" name="dathang" style="width: 20%;"  value="Đặt Hàng"></input>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
     <!-- Start User Details Checkout Form -->
    </div>
</div>
</form>
<br><!-- 