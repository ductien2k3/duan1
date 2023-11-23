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
                    <h3 class="breadcrumb-title">Hoá đơn</h3>
                    <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                        <nav aria-label="breadcrumb">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                                <li class="active" aria-current="page"> id Đơn hàng <?=$id_dathang?></li>
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
                    echo '';
                } else {
                    echo '';
                }
            ?>
        </div>
    </div>  
            <!-- User Quick Action Form -->
      <!-- Start User Details Checkout Form -->
</div>
<form action="index.php?act=dathang" method="post">
        <div class="checkout_form" data-aos="fade-up" data-aos-delay="400">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                <?php 
                    if(isset($_SESSION['user'])){
                        extract($_SESSION['user']);
                        echo '
                        <h3>Chi tiết hoá đơn</h3>
                        <div class="row">
                            <div class="col-12">
                                <div class="default-form-box">
                                    <label>Tên của bạn*</label>
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
                            </div>
                           
                    ';
                    }   else {
                        echo '
                        <h3>Chi tiết thanh toán</h3>
                        <div class="row">
                            <div class="col-12">
                                <div class="default-form-box">
                                    <label>Tên của bạn*</label>
                                    <input type="text" placeholder="tên của bạn" name="name"  >
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
                                
                            </div>             
                            <div class="col-12 mt-3">
                               
                            </div>
                     
                    ';
                    }
                    ?>
                </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    
                        <h3>Đơn hàng của bạn</h3>
                        <div class="order_table table-responsive">
                        <table>
    <thead>
        <tr>
            <th>Sản Phẩm</th>
            <th>Số Lượng</th>
            <th>Số Tiền</th>
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
                <td><strong>$' . $tong . '</strong></td>
            </tr>
        </tfoot>';
    }
    ?>
</table>

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