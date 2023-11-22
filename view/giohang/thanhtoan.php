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
                    <h3 class="breadcrumb-title">Đặt Hàng</h3>
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
        <div class="checkout_form" data-aos="fade-up" data-aos-delay="400">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                <?php 
                    if(isset($_SESSION['user'])){
                        extract($_SESSION['user']);
                        echo '<form action="#">
                        <h3>Chi tiết thanh toán</h3>
                        <div class="row">
                            <div class="col-12">
                                <div class="default-form-box">
                                    <label>Tên của bạn*</label>
                                    <input type="text" placeholder="tên của bạn" value="'.$user_name.'" >
                                </div>
                            </div>                          
                            <div class="col-12">
                                <div class="default-form-box">
                                    <label>Địa Chỉ của bạn<span>*</span></label>
                                    <input placeholder="địa chỉ chi tiết của bạn" type="text" value="'.$address.'" >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="default-form-box">
                                    <label>Số điện thoại của bạn<span>*</span></label>
                                    <input type="text" placeholder="số điện của bạn" value="'.$tel.'">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="default-form-box">
                                    <label> Email <span>*</span></label>
                                    <input type="text" placeholder="email của bạn" value="'.$email.'">
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
                            <div class="col-12">
                                <label class="checkbox-default" for="newShipping" data-bs-toggle="collapse"
                                    data-bs-target="#anotherShipping">
                                    <input type="checkbox" id="newShipping">
                                    <span>Ship tới địa chỉ khác?</span>
                                </label>

                                <div id="anotherShipping" class="collapse mt-3" data-parent="#anotherShipping">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="default-form-box">
                                            <label>Tên của bạn*</label>
                                            <input type="text" placeholder="tên của bạn" >
                                        </div>
                                    </div>                          
                                        
                                        <div class="col-12">
                                <div class="default-form-box">
                                    <label>Địa Chỉ của bạn<span>*</span></label>
                                    <input placeholder="địa chỉ chi tiết của bạn" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="default-form-box">
                                    <label>Số điện thoại của bạn<span>*</span></label>
                                    <input type="text" placeholder="số điện của bạn">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="default-form-box">
                                    <label> Email <span>*</span></label>
                                    <input type="text" placeholder="email của bạn">
                                </div>
                            </div>                             
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
                     
                    </form>';
                    }   else {
                        echo '<form action="#">
                        <h3>Chi tiết thanh toán</h3>
                        <div class="row">
                            <div class="col-12">
                                <div class="default-form-box">
                                    <label>Tên của bạn*</label>
                                    <input type="text" placeholder="tên của bạn" >
                                </div>
                            </div>                          
                            <div class="col-12">
                                <div class="default-form-box">
                                    <label>Địa Chỉ của bạn<span>*</span></label>
                                    <input placeholder="địa chỉ chi tiết của bạn" type="text"  >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="default-form-box">
                                    <label>Số điện thoại của bạn<span>*</span></label>
                                    <input type="text" placeholder="số điện của bạn" >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="default-form-box">
                                    <label> Email <span>*</span></label>
                                    <input type="text" placeholder="email của bạn" >
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
                            <div class="col-12">
                                <label class="checkbox-default" for="newShipping" data-bs-toggle="collapse"
                                    data-bs-target="#anotherShipping">
                                    <input type="checkbox" id="newShipping">
                                    <span>Ship tới địa chỉ khác?</span>
                                </label>

                                <div id="anotherShipping" class="collapse mt-3" data-parent="#anotherShipping">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="default-form-box">
                                            <label>Tên của bạn*</label>
                                            <input type="text" placeholder="tên của bạn" >
                                        </div>
                                    </div>                          
                                        
                                        <div class="col-12">
                                <div class="default-form-box">
                                    <label>Địa Chỉ của bạn<span>*</span></label>
                                    <input placeholder="địa chỉ chi tiết của bạn" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="default-form-box">
                                    <label>Số điện thoại của bạn<span>*</span></label>
                                    <input type="text" placeholder="số điện của bạn">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="default-form-box">
                                    <label> Email <span>*</span></label>
                                    <input type="text" placeholder="email của bạn">
                                </div>
                            </div>                             
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
                     
                    </form>';
                    }
                    ?>
                </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <form action="#">
                        <h3>Giỏ hàng của bạn</h3>
                        <div class="order_table table-responsive">
                        <table>
    <thead>
        <tr>
            <th>Sản Phẩm</th>
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

            echo '<tr>
                    <td>' . $item[1] . '<strong> × ' . $item[4] . '</strong></td>
                    <td> $' . $thanhtien . '</td>
                </tr>';
        }

        echo '</tbody>
        <tfoot>
            <tr>
                <th>Tổng Phụ</th>
                <td colspan="2">' . $tongphu . '</td>
            </tr>
            <tr>
                <th>Phí Ship</th>
                <td><strong>$' . $ship . '</strong></td>
            </tr>
            <tr class="order_total">
                <th>Tổng số tiền</th>
                <td><strong>$' . ($tongphu + $ship) . '</strong></td>
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
                                    <input type="checkbox" id="currencyCod">
                                    <span>Thanh toán khi nhận hàng</span>
                                </label>

                                <div id="methodCod" class="collapse" data-parent="#methodCod">
                                    <div class="card-body1">
                                        <p>Vui lòng gửi séc đến Tên cửa hàng, Đường cửa hàng, Thị trấn cửa hàng, Bang cửa hàng
                                            / Quận, Mã bưu điện cửa hàng.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-default">
                                <label class="checkbox-default" for="currencyPaypal" data-bs-toggle="collapse"
                                    data-bs-target="#methodPaypal">
                                    <input type="checkbox" id="currencyPaypal">
                                    <span>PayPal</span>
                                </label>
                                <div id="methodPaypal" class="collapse " data-parent="#methodPaypal">
                                    <div class="card-body1">
                                        <p>Thanh toán qua PayPal; bạn có thể thanh toán bằng thẻ tín dụng nếu bạn không có
                                            Tài khoản Paypal.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="order_button pt-3">
                                <button class="btn btn-md btn-black-default-hover" type="submit">Đặt Hàng</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- Start User Details Checkout Form -->
    </div>
</div>
<br><!-- 